@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

            <a href="/home">back to home</a> <h2>Employees</h2>

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">first_name</th>
                    <th scope="col">last_name</th>
                    <th scope="col">Company</th>
                    <th scope="col"><a href="{{ route('employees.create') }}">Create employee</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <th scope="row">{{$employee->id}}</th>
                        <td>{{$employee->first_name}}</td>
                        <td>{{$employee->last_name}}</td>
                        <td>{{$employee->getCompanies->name}}</td>
                        <td><a href="{{route('employees.edit', $employee->id)}}">Edit</a> <a class="ml-5" href="{{route('employees.destroy', $employee->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $employees->links() }}

        </div>
    </div>
</div>
@endsection
