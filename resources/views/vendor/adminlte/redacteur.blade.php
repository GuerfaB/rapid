@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="container">
    
          <h1 class="text-center">Portfolio</h1>
          @can('create', App\Models\Portfolio::class)
             <a href="{{ route("portfolio.create") }}" class="btn btn-warning">Create</a>
          @endcan
          
          <table class="table mb-5 mt-5">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Image</th>
                  <th scope="col">Category</th>
                  <th scope="col">Action</th>
  
                </tr>
              </thead>
              @foreach ($portfolio as $i)
              <tbody>
                  <tr>
                      <td>{{ $i->id }}</td>
                      <td><img class="w-75" src= "{{asset("img/$i->path")}}"></td>
                      <td>{{ $i->category }}</td>
                      <td class="d-flex">
                        @can('update', $i)
                          <a href="/portfolio/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                        @endcan
                          

                          
                          <form action="/portfolio/{{ $i->id }}" method="POST">
                            @csrf
                            @method("delete")
                            @can('delete', $i)
                              <button class="btn btn-danger">Delete</button>
                            @endcan
                            
                          </form>
                      </td>
                  </tr>
                 
                </tbody>
                  
              @endforeach
            </table>

        
      
        
           

    </section>
@stop