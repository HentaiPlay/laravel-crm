@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">


            <a href="/home">back to home</a> <h2 class="mb-3">Companies</h2>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Website</th>
                    <th scope="col">Logo</th>
                    <th scope="col"><a href="{{ route('companies.create') }}">Create company</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->phone}}</td>
                            <td>{{$company->website}}</td>
                            <td scope="col"><img src="/storage/companies/{{$company->logo}}" alt="" style="width: 100px; height: 100px;"></td>
                            <td>
                                <a class="btn btn-success mb-3" href="{{route('companies.edit', $company->id)}}">Edit</a> 
                                <form method="POST" action="{{route('companies.destroy', $company->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" class="ml-5">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
