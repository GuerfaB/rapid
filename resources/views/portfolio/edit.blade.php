@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="container">
        <h1 class="text-center">Portfolio Edit</h1>
        <form action="/portfolio/{{ $portfolio->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("put")
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="formGroupExampleInput2">Image</label>
                <input type="file" class="form-control"  id="formGroupExampleInput2" value ="{{ $portfolio->path }}" name="path" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Category</label>
                <select name="category">
                    <option value="{{ $portfolio->category }}">app</option>
                    <option value="{{ $portfolio->category }}">card</option>
                    <option value="{{ $portfolio->category }}">app</option>
                </select>
              </div>
    
            <div class="d-flex justify-content-center pt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        </form>
    </section>
@stop