<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Container/Index', ['containers' => Container::all()]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(container $container)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(container $container)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, container $container)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(container $container)
    {
        //
    }
}
