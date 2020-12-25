@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="container">
        <h1 class="text-center">Testimonial Edit</h1>
        <form action="/testimonial/{{ $testimonial->id }}" method="POST" enctype="multipart/form-data">
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
                <input type="file" class="form-control"  id="formGroupExampleInput2" value ="{{ $testimonial->path }}" name="path" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Name</label>
                <input type="text" class="form-control"  id="formGroupExampleInput2" value ="{{ $testimonial->name }}" name="name" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Poste</label>
                <input type="text" class="form-control"  id="formGroupExampleInput2" value ="{{ $testimonial->poste }}" name="poste" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Texte</label>
                <input type="text" class="form-control"  id="formGroupExampleInput2" value ="{{ $testimonial->texte }}" name="texte" >
            </div>
            <div class="d-flex justify-content-center pt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        </form>
    </section>
@stop