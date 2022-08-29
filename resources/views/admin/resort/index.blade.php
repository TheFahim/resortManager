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

  <button type="button" class="btn btn-primary">Create</button>

  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
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
      <td><img src="{{$resort->image}}" alt="resort_image" width="100px"></td>
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
