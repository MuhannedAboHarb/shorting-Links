<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        //
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'old_url' => 'required| url|',
            'new_url' => 'nullable',
            'description' => 'nullable|min:6',
        ]);
        $data['new_url'] = \Illuminate\Support\Str::random(6);
        $newProject = Project::create($data);

        return redirect(route('project.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show($new_url)
    {
        //
       $projects= Project::where('new_url',$new_url)->firstOrFail();
        $projects->visit_count +=1 ;
       $projects->save();
       return redirect($projects->old_url);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
