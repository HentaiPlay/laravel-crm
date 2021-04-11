@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

            <a href="/home">back to home</a> <h2 class="mb-3">Edit Company</h2>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong> 
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}<li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('companies.update', $company) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="name">
                  </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" class="form-control" name="phone" placeholder="phone">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control" name="website" placeholder="website">
                  </div>
                  <div class="form-group">
                    <label for="name">upload logo image</label>
                    <input type="file" class="form-control-file" name="logo">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
