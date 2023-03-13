@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $employee->first_name }} {{ $employee->last_name }}</h1>
        <hr>
        <dl class="row">
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $employee->email }}</dd>
            <dt class="col-sm-3">Company</dt>
            <dd class="col-sm-9">{{ $employee->company->name }}</dd>
        </dl>
        <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to List</a>
        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-success">Edit</a>
        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection