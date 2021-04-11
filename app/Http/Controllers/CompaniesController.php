<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('companies.index', [
            'companies' => Companies::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required|min:3',
            'website'   => 'required',
            'logo'      => 'required|dimensions:min_width=100,min_height=100'
        ]);

        Companies::create($request->all());

        return redirect()->route('companies.index')->with('success', 'you are creating new company!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Companies::find($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'phone'     => 'required|min:3',
            'website'   => 'required',
            'logo'      => 'required|dimensions:min_width=100,min_height=100'
        ]);

        $company = Companies::find($id);
        $company->name = $request->get('name');
        $company->email = $request->get('email');
        $company->phone = $request->get('phone');
        $company->website = $request->get('website');
        $company->logo = $request->get('logo');
        $company->save();

        return redirect()->route('companies.index')->with('success', 'you are edit company!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Companies::find($id);
        $company->delete();
        
        return redirect()->route('companies.index')->with('success', 'you are delete company!');
    }
}
