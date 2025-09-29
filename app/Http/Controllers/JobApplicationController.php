<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJobApplicationRequest;
use App\Models\Job;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Job $job)
    {
        $this->authorize('apply', $job);
        return view('job_application.create', ['job'=>$job]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Job $job, CreateJobApplicationRequest $request)
    {
        $validated_data = $request->validated();

        $file = $request->file('cv');
        $path = $file->store('cvs', 'private');

        $job->jobApplications()->create([
            'user_id' => $request->user()->id,
            'expected_salary' => $validated_data['expected_salary'],
            'cv_path' => $path
        ]);

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job application submitted!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
