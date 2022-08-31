<x-frontend.layout>
    <x-slot name="title">Booking page</x-slot>

    <div class="container mt-5">
      <form action="{{route('booking.store')}}" method="POST">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">

              <label class="form-label" for="form6Example1">name</label>

              <input type="text" name="customer_name" id="form6Example1" class="form-control" placeholder="Your Name"/>

            </div>
          </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example4">Address</label>

          <input type="text" name="address" id="form6Example4" class="form-control" />
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example5">Email</label>
          <input type="email" name="email" id="form6Example5" class="form-control" />
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example6">Phone</label>

          <input type="text" name="phone" id="form6Example6" class="form-control" />
        </div>

        <!-- Message input -->
                <!-- Text input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example3">Resort name</label>

          <input type="text" name="resort_name" id="form6Example3" class="form-control" />
        </div>

                <!-- Text input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example3">Check In Date </label>

          <input type="date" name="start_date" id="form6Example3" class="form-control" />
        </div>

                <!-- Text input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="form6Example3">Checkout Date</label>

          <input type="date" name="end_date" id="form6Example3" class="form-control" />
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
      </form>
    </div>


</x-frontend.layout>
