<x-backend.layout>
  <x-slot name="title">
    Create Resort Data
  </x-slot>

  <x-slot name="pageTitle">
    Create New Resort Data
  </x-slot>

  <x-slot name="breadCrumb">
    Create Form
  </x-slot>

  @if (session()->has('message'))
  <div class="alert alert-info" role="alert">
  <p>
    {{session('message')}}
  </p>
  </div>
  @endif

    <form method="POST" action="{{ route('resort.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name" class="inline">Resort Name</label>
      <input name="name" type="text" class="form-control" value="{{old('name')}}"/>

      @error('name')
      <p class="text-danger">{{$message}}</p>
      @enderror

      <label for="description" class="inline">Resort Description</label>
      <textarea name="description" class="form-control">{{old('description')}}</textarea>
      @error('description')
      <p class="text-danger">{{$message}}</p>
      @enderror

      <label for="location" class="inline">Resort Location</label>
      <input name="location" type="text" class="form-control" value="{{old('name')}}"/>

      @error('location')
      <p class="text-danger">{{$message}}</p>
      @enderror

      <label for="price" class="inline">Resort price</label>
      <input name="price" type="number" step=".01" class="form-control" value="{{old('price')}}"/>

      @error('price')
      <p class="text-danger">{{$message}}</p>
      @enderror

      <div class="d-block">
        <label for="image">
        Upaload Resort Image
        </label>
      <input
          type="file"
          class="form-control-file"
          name="image"
      />
      </div>

    </div>

    <div class="form-check">
        <input name="is_active" class="form-check-input" type="checkbox" value="1" id="isActiveInput" checked>
        <label class="form-check-label" for="isActiveInput">
            Is Active
        </label>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Submit</button>

  </form>

</x-backend.layout>
