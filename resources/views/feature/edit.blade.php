@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="container">
        <h1 class="text-center">Feature Edit</h1>
        <form action="/feature/{{ $feature->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @method("put")
            <div class="form-group">
              <label for="formGroupExampleInput">Titre</label>
              <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $feature->titre }}" name="titre">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Texte1</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $feature->texte1 }}" name="texte1">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Texte2</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $feature->texte2 }}" name="texte2">
              </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Image</label>
                <input type="file" class="form-control"  id="formGroupExampleInput2" value ="{{ $feature->icone }}" name="path" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Order</label>
                <select name="order">
                    <option value="{{ $feature->order }}">1</option>
                    <option value="{{ $feature->order }}">2</option>
                </select>
            </div>
            <div class="d-flex justify-content-center pt-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
        </form>
    </section>
@stop