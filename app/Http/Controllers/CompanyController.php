<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
        ]);

        // Create a new company
        $company = new Company();
        $company->name = $request->input('name');
        $company->address = $request->input('address');
        $company->save();

        // Redirect to the companies index page
        return redirect()->route('companies.index');
    }

    public function show($id)
    {
        $company = Company::find($id);
        return view('companies.show', compact('company'));
    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
        ]);

        // Update the company
        $company = Company::find($id);
        $company->name = $request->input('name');
        $company->address = $request->input('address');
        $company->save();

        // Redirect to the companies index page
        return redirect()->route('companies.index');
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        // Redirect to the companies index page
        return redirect()->route('companies.index');
    }
}