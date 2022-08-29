<x-backend.layout>
  <x-slot name="title">
    Resort Booking Management
  </x-slot>
  <x-slot name="pageTitle">
    Dashboard
  </x-slot>
  <x-slot name="breadCrumb">
    Dashboard
  </x-slot>
  @if (session()->has('message'))
      <div class="alert alert-info" role="alert">
      <p>
        {{session('message')}}
      </p>
      </div>
  @endif
  <div class="container text-center">
    <h3 class="container mb-5">Welcome <span style="color: #FF5733">{{auth()->user()->name}}</span>  To Resort Manager Application</h3>
    <p class="container text mt-5">
        Please Find Resort list and Booked list on navigation bar on the left
    </p>
  </div>
</x-backend.layout>
