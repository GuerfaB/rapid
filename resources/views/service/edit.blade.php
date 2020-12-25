@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="container">
        <h1 class="text-center">Service Edit</h1>
        <form action="/service/{{ $service->id }}" method="POST">
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
              <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $service->titre }}" name="titre">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Texte</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $service->texte }}" name="texte">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Icone</label>
                <input type="text" class="form-control"  id="formGroupExampleInput2" value ="{{ $service->icone }}" name="icone" placeholder="Aller sur Ionicons...">
            </div>
            <div class="d-flex justify-content-center pt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        </form>
    </section>
@stop