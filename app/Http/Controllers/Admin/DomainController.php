<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $domains = Domain::all();
        return view('admin.domains.index', compact('domains'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.domains.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:domains',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        Domain::create($validated);

        return redirect()->route('admin.domains.index')
            ->with('success', 'Домен успешно создан');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domain $domain)
    {
        return view('admin.domains.edit', compact('domain'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Domain $domain)
    {
        $validated = $request->validate([
            'name' => 'required|string|unique:domains,name,' . $domain->id,
            'title' => 'required|string',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $domain->update($validated);

        return redirect()->route('admin.domains.index')
            ->with('success', 'Домен успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domain $domain)
    {
        $domain->delete();

        return redirect()->route('admin.domains.index')
            ->with('success', 'Домен успешно удален');
    }
}
