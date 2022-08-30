<x-backend.layout>
    <x-slot name="title">
    Show Resort
  </x-slot>

  <x-slot name="pageTitle">
    {{$resort->name}}
  </x-slot>

  <x-slot name="breadCrumb">
    Details
  </x-slot>

  <div class="container m-3">
    <a href="{{route('resort.edit',['resort'=>$resort->id])}}" class="btn btn-primary">Edit</a>
  </div>

  <div class="container d-flex">
    <img src="{{asset($resort->image)}}" alt="resort_image" width="400px">
    <div>
      <div class="container">
        <h3>Description</h3>
        <p>{{$resort->description}}</p>
      </div>

      <div class="container">
        <h3>Price</h3>
        <p>{{$resort->price}}</p>
      </div>

      <div class="container">
        <h3>Availibiliy</h3>
        <p>{{$resort->is_available ? 'Available':'Unavailable'}}</p>
      </div>

      <div class="container">
        <h3>Location</h3>
        <p>{{$resort->location}}</p>
      </div>

      <div class="container">
        <h3>Resort Data Updated At</h3>
        <p>{{$resort->updated_at}}</p>
      </div>
    </div>

  </div>

</x-backend.layout>
