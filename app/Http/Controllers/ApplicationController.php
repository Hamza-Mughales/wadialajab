<?php

namespace App\Http\Controllers;

use App\Enums\ApplicationStatus;
use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;
use Illuminate\View\View;

class ApplicationController extends Controller
{
    public function create(): View
    {
        return view('apply');
    }

    public function store(StoreApplicationRequest $request)
    {
        $data = $request->validated();
        $filePaths = [];

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                // Store in strictly private folder
                $filePaths[] = $file->store('applications');
            }
        }

        Application::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'description' => $data['description'],
            'files' => $filePaths,
            'status' => ApplicationStatus::Pending,
        ]);

        return redirect()->route('apply.success');
    }

    public function success(): View
    {
        return view('apply-success');
    }
}
