<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resorts = Resort::latest()->filter(request(['search']))->paginate(10);

        return view('admin.resort.index',compact('resorts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resort.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Resort $resort)
    {

        $formFields = $request->validate([
            'name' => 'required',
            'description' =>'nullable',
            'price' => 'required',
            'location' => 'required'
        ]);

        $formFields['is_available'] = $request->is_active ?? false;


        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $resort->create($formFields);

        return redirect()->route('resort.index')->with('message', 'Resort Data Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Resort $resort)
    {
        return view('admin.resort.show',compact('resort'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Resort $resort)
    {
        return view('admin.resort.edit', compact('resort'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resort $resort)
    {
        // dd($request);

        $formFields = $request->validate([
            'name' => 'required',
            'description' =>'nullable',
            'price' => 'required',
            'location' => 'required'
        ]);

        $formFields['is_available'] = $request->is_active ?? false;


        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $resort->update($formFields);

        return redirect()->route('resort.index')->with('message', 'Resort Data Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resort $resort)
    {
        $resort->delete();
        return redirect()->route('resort.index')->withMessage('Item Deleted');
    }
}
