<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {

        if (auth()->check()) {
            // If authenticated, return view with user's todos
            return view('pages.home', [
                'todos' => Todo::where('user_id', auth()->user()->id)->get()
            ]);
        }


        return view('pages.home', [
            'todos' => collect() // An empty collection
        ]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'todo' => 'required|min:5|max:255',
            'due_date' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Todo::create($validatedData);
        return redirect(route('home'))->with('success', 'New Todo Has Been Added');
    }

    public function edit(Todo $id)
    {
        return view('pages.edit', [
            'todo' => $id,
        ]);
    }

    public function update(Request $request, Todo $todo)
    {
        $rules = [
            'todo' => 'required|min:5|max:255',
            'due_date' => 'required|date',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        Todo::where('id', $todo->id)
            ->update($validatedData);

        return redirect(route('home'))->with('success', 'Your Todo Has Been Edited');
    }

    public function delete($id)
    {
        $todo = Todo::findOrFail($id);

        $todo->delete();

        return redirect(route('home'))->with('success', 'Todo Has Been Deleted');
    }
}
