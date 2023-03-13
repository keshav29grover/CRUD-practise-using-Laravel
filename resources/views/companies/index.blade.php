@extends('layouts.app')

@section('content')
 <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head> 
    <div class="container">
        <h1>Companies</h1>
        <a href="{{ route('companies.create') }}" class="btn btn-primary">Add Company</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->address }}</td>
                    <td>
                        <a href="{{ route('employees.index', ['company_id' => $company->id]) }}" class="btn btn-primary">Employees</a>
                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection