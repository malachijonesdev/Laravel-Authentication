<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\Plan;
use App\Models\ServerLocation;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Container/Index', ['containers' => Container::all(), 'plans' => Plan::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Inertia::render('Container/Index', ['container' => Container::where(), 'plans' => Plan::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Inertia::render('Container/Show', ['container' => Container::find($id), 'server_locations' => ServerLocation::all(), 'plans' => Plan::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return Inertia::render('Container/Edit', ['container' => Container::find($id), 'server_locations' => ServerLocation::all(), 'plans' => Plan::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Container $container)
    {
        $container->update(
            $request->validate([
                'container_name' => ['required'],
                'container_config' => ['required'],
                'container_location' => ['required'],
                'container_domain' => ['required'],
                'container_subdomain' => ['required'],
                'container_status' => ['required'],
            ])
        );

        return to_route('container.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Container $container)
    {
        //
    }
}
