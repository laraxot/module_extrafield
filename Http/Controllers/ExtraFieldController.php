<?php

declare(strict_types=1);

namespace Modules\ExtraField\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ExtraFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('extrafield::index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Renderable
     */
    public function create()
    {
        return view('extrafield::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Renderable
     */
    public function store(Request $request)
    {
        return view('extrafield::store');
    }

    /**
     * Show the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function show($id)
    {
        return view('extrafield::show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function edit($id)
    {
        return view('extrafield::edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        return view('extrafield::update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Renderable
     */
    public function destroy($id)
    {
        return view('extrafield::destroy');
    }
}
