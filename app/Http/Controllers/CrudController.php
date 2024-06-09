<?php

namespace App\Http\Controllers;

use App\Models\crud;
use App\Models\country;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = crud::all();
        return view('index-crud' , compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = country::all();
        return view('create-crud' , compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'address' => 'required',
            'country' => 'required',
            'gender' => 'required',

        ]);

        crud::create([
            'full_name' => $validated['fullname'],
            'email' => $validated['email'],
            'tel' => $validated['tel'],
            'address' => $validated['address'],
            'country' => $validated['country'],
            'gender' => $validated['gender'],
            'subcription' => json_encode($request->subcription),
        ]);

        return redirect()->Route('crud.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $crud = crud::findOrFail($id);
        $country = country::all();
        return view('edit-crud' , compact('country' , 'crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $crud = crud::findOrFail($id);

        $validated = $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'address' => 'required',
        ]);

        $crud->update([
            'full_name' => $validated['fullname'],
            'email' => $validated['email'],
            'tel' => $validated['tel'],
            'address' => $validated['address'],
        ]);

        if($request->has('country')){
            $crud->update([
                'country' => $request->country,
            ]);
        }

        if($request->has('gender')){
            $crud->update([
                'gender' => $request->gender,
            ]);
        }

        if($request->has('subcription')){
            $crud->update([
                'subcription' => json_encode($request->subcription),
            ]);
        }
        
        return redirect()->Route('crud.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(crud $crud)
    {
        //
    }
}
