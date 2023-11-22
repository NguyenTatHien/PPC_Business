<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FullContract;
use App\Models\Property;
use Illuminate\Support\Facades\DB;

class FullcontractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = Property::paginate(5);
        $fullcontract = FullContract::paginate(5);
        return view('full_contract', compact('fullcontract', 'property'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('full_contract');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        FullContract::create($request->all());
        return redirect()->route('fullcontract.index');
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
