<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    public function create(): View
    {
        return view('join');
    }

    public function store(StoreSubscriberRequest $request): RedirectResponse
    {
        Subscriber::create($request->validated());

        return redirect()->route('join.success');
    }

    public function success(): View
    {
        return view('join-success');
    }
}
