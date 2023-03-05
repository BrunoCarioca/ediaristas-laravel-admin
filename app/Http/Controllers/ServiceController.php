<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        $services= Service::paginate(15);
        return view('services.list')->with('services', $services);
    }

    public function create()
    {

        return view('services.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $service = $request->except('_token');

        Service::create($service);

        return redirect()->route('services.index');
    }

    public function edit(int $id)
    {
        $service = Service::findOrFail($id);

        return view('services.edit')->with('service', $service);
    }

    public function update(int $id, Request $request): RedirectResponse
    {
        $data = $request->except(['_token', '_method']);
        $service = Service::findOrFail($id);

        $service->update($data);

        return redirect()->route('services.index');
    }
}
