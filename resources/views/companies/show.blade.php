@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $company->name }}</h1>
        <hr>
        <p><strong>Name:</strong> {{ $company->name }}</p>
        <hr>
        <p><strong>Address:</strong> {{ $company->address }}</p>
        <a href="{{ route('companies.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection