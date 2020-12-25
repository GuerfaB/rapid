@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="container">
        <h1 class="text-center">Banner Edit</h1>
        <form action="/banner/{{ $banner->id }}" method="POST" enctype="multipart/form-data">
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
              <label for="formGroupExampleInput">Titre</label>
              <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $banner->titre }}" name="titre">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Boutton</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $banner->boutton }}" name="boutton">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Image</label>
                <input type="file" class="form-control"  id="formGroupExampleInput2" value ="{{ $banner->path }}" name="path" >
            </div>
    
            <div class="d-flex justify-content-center pt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        </form>
    </section>
@stop