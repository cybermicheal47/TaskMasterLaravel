<?php

namespace App\Http\Controllers;

use App\Models\Todotask;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\Job;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;


class TodoController extends Controller
{
    // Display the list of todos
    public function index(): View
    {

       $alltasks = Todotask::all();

        return view('todo.index', compact('alltasks'));
    }

    // Show the form for creating a new todo
    public function create(): View
    {
        return view('todo.create');
    }

    // Store a new todo
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048', // Max file size 2MB
            'status' => 'required',
            'due_date' => 'nullable|date'

        ]);

        // Handle file upload
        if ($request->hasFile('attachment')) {
            $filePath = $request->file('attachment')->store('attachments', 'public');
            $validatedData['file_path'] = $filePath; // Save the file path
        }


        Todotask::create($validatedData);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
        // Add your logic here
    }

    // Show details of a specific todo
    public function show(Request $request ,$id): View
    {
//        $task = Todotask::findOrFail($id);



        return view('todo.show');
    }


    public function edit(Request $request ,$id): View

    {
        $task = Todotask::find($id);
        if(!$task) {
            abort(404,'task not found');
        }



        return view('todo.edit', compact('task'));


    }

    // Update a specific todo
    public function update(Request $request,$id): RedirectResponse
    {
        // Add your logic here
        //check for task id , if not redirect to hompage

        $task = Todotask::find($id);

        if (!$task) {
              return redirect()->route('tasks.index')->with('error', 'Task not found.');
        }

        //validate the updated item

        // Validate the updated item
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'due_date' => 'nullable|date',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        ]);

        //check if a new image is added , if it is delete old image

        if($request->hasFile('attachment')) {
            if ($task->file_path && Storage::disk('public')->exists($task->file_path)) {
                Storage::disk('public')->delete($task->file_path);
            }
            $filePath = $request->file('attachment')->store('attachments', 'public');
            $validatedData['file_path'] = $filePath;

        }

        // Save the updated item
        $task->update($validatedData);

        //redirect back to all tasks or updated task view

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }


    // Delete a specific todo
    public function destroy(Request $request , Todotask $todotask)
    {

        // Add your logic here
//since am calling the db directly no need to find id , it does that automatically
//
        // Check if there is an attachment and delete it from storage
        if ($todotask->file_path)
        {    Storage::delete('public/attachments/' . $todotask->file_path);
        }
//        //delete the task

        $todotask->delete();
        //redirect to all tasks
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }



    // @desc   Search for tasks
// @route  GET /tasks/search
    public function search(Request $request )
    {
        $keywords = strtolower($request->input('search'));

        $query  = Todotask::query();


        if ($keywords) {
            $query->where(function ($q) use ($keywords) {
                $q->whereRaw('LOWER(title) like ?', ['%' . $keywords . '%'])
                    ->orWhereRaw('LOWER(description) like ?', ['%' . $keywords . '%']);
            });
            $alltasks = $query->paginate(6);
    }
        return view('todo.index', compact('alltasks'))->with('searchTerm', $keywords);


    }

}