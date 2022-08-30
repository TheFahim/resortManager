<x-backend.layout>
    <x-slot name="title">
    Resort list
  </x-slot>

  <x-slot name="pageTitle">
    Resorts
  </x-slot>

  <x-slot name="breadCrumb">
    Resort list
  </x-slot>

    @if (session()->has('message'))
      <div class="alert alert-info" role="alert">
      <p>
        {{session('message')}}
      </p>
      </div>
    @endif
      <div>
        <a href="{{route('resort.create')}}" class="btn btn-primary">Create</a>
        <div class="navbar navbar-light bg-light">
          <form class="form-inline d-flex">
            <input name="search" class="form-control mr-sm-3" type="text" placeholder="Find Name or Location" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>


  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Location</th>
      <th scope="col">Price</th>
      <th scope="col">Availibiliy</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($resorts as $resort)
    <tr>
      <th scope="row">{{$loop->iteration + $resorts->firstItem() - 1}}</th>
      <td>{{$resort->name}}</td>
      <td><img src="{{$resort->image ? asset('storage/'.$resort->image) : asset('/images/no-image.png')}}" alt="resort_image" width="100px"></td>
      <td>{{$resort->location}}</td>
      <td>{{$resort->price}} $</td>
      <td>{{$resort->is_available ? 'Available':'Unavailabe'}}</td>
      <td class="d-flex">
        <a href="{{route('resort.show',['resort'=>$resort->id])}}" class="btn btn-info">view</button>
        <a href="{{route('resort.edit',['resort'=>$resort->id])}}" class="btn btn-primary">Edit</a>
        <form action="{{route('resort.destroy',['resort'=>$resort->id])}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    {{$resorts->links()}}
</x-backend.layout>
