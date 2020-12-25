@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="container">
        <h1 class="text-center">User Create</h1>
        <form action="{{ route("user.store") }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" name="name">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Email</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password" class="form-control" id="formGroupExampleInput2" name="password">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Role_id</label>
                
            </div>
            <select class="form-control" name="role_id">
                @foreach ($roles as $i)
                <option value="{{ $i->id }}">{{ $i->name }}</option>
                @endforeach
            </select>
            <div class="d-flex justify-content-center pt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        </form>
    </section>
@stop