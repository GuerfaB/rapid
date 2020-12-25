@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
    <section class="container">
     
        
     
        <h1 class="text-center">Users</h1>
        <a href="{{ route("user.create") }}" class="btn btn-warning">Create</a>
        <table class="table mb-5">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Role_id</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            @foreach ($user as $i)
            <tbody>
                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->name }}</td>
                    <td>{{ $i->email }}</td>
                    <td>{{ $i->password }}</td>
                    <td>{{ $i->roles->name }}</td>
                    <td class="d-flex">
                        <a href="/user/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                        <form action="/user/{{ $i->id }}" method="POST">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger">Delete</button>
                        
                        
                        </form>
                    </td>
                </tr>
               
              </tbody>
                
            @endforeach
          </table>

          <h1 class="text-center">Banner</h1>
        <table class="table mb-5 mt-5">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Boutton</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            @foreach ($banner as $i)
            <tbody>
                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->titre }}</td>
                    <td>{{ $i->boutton }}</td>
                    <td><img class="w-50" src="{{asset("img/$i->path")}}"></td>
                    <td>
                        <a href="/banner/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                    </td>
                </tr>
               
              </tbody>
                
            @endforeach
          </table>

        <h1 class="text-center">About</h1>
        <table class="table mb-5 mt-5">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Phrase1</th>
                <th scope="col">Phrase2</th>
                <th scope="col">Skill1</th>
                <th scope="col">Skill2</th>
                <th scope="col">Skill3</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            @foreach ($about as $i)
            <tbody>
                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->titre }}</td>
                    <td>{{ $i->phrase1 }}</td>
                    <td>{{ $i->phrase2 }}</td>
                    <td>{{ $i->skill1 }}</td>
                    <td>{{ $i->skill2 }}</td>
                    <td>{{ $i->skill3 }}</td>
                    <td>
                      <img class="w-75" src="{{asset("img/$i->path")}}">
                    </td>
                    <td>
                        <a href="/about/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                    </td>
                </tr>
               
              </tbody>
                
            @endforeach
          </table>
        <h1 class="text-center">Service</h1>
        <a href="{{ route("service.create") }}" class="btn btn-warning">Create</a>
        <table class="table mb-5 mt-5">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titre</th>
                <th scope="col">Texte</th>
                <th scope="col">Icone</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            @foreach ($service as $i)
            <tbody>
                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->titre }}</td>
                    <td>{{ $i->texte }}</td>
                    <td>{{ $i->icone }}</td>
                    <td class="d-flex">
                        <a href="/service/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                        <form action="/service/{{ $i->id }}" method="POST">
                          @csrf
                          @method("delete")
                          <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
               
              </tbody>
                
            @endforeach
          </table>


          <h1 class="text-center">Feature</h1>
          <a href="{{ route("feature.create") }}" class="btn btn-warning">Create</a>
          <table class="table mb-5 mt-5">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Texte1</th>
                  <th scope="col">Texte2</th>
                  <th scope="col">Image</th>
                  <th scope="col">Action</th>
  
                </tr>
              </thead>
              @foreach ($feature as $i)
              <tbody>
                  <tr>
                      <td>{{ $i->id }}</td>
                      <td>{{ $i->titre }}</td>
                      <td>{{ $i->texte1 }}</td>
                      <td>{{ $i->texte2 }}</td>

                      <td>
                        <img class="w-75" src="{{asset("img/$i->path")}}">
                        
                      </td>
                      <td class="d-flex">
                          <a href="/feature/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                          <form action="/feature/{{ $i->id }}" method="POST">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger">Delete</button>
                          </form>
                      </td>
                  </tr>
                 
                </tbody>
                  
              @endforeach
            </table>

      
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

        
          <h1 class="text-center">Testimonial</h1>
          <a href="{{ route("testimonial.create") }}" class="btn btn-warning">Create</a>
          <table class="table mb-5 mt-5">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Image</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Poste</th>
                  <th scope="col">Texte</th>
                  <th scope="col">Action</th>
  
                </tr>
              </thead>
              @foreach ($testimonial as $i)
              <tbody>
                  <tr>
                      <td>{{ $i->id }}</td>
                      <td><img class="w-75" src= "{{asset("img/$i->path")}}"></td>
                      <td>{{ $i->name }}</td>
                      <td>{{ $i->poste }}</td>
                      <td>{{ $i->texte }}</td>
                      <td class="d-flex">
                        
                          <a href="/testimonial/{{ $i->id }}/edit" class="btn btn-success">Edit</a>
                        
                         

                          <form action="/testimonial/{{ $i->id }}" method="POST">
                            @csrf
                            @method("delete")
                            
                                <button class="btn btn-danger">Delete</button>
                            

                          </form>
                      </td>
                  </tr>
                 
                </tbody>
                  
              @endforeach
            </table>

            
        
           

    </section>
@stop