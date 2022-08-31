<x-frontend.layout>
    <x-slot name="title">Booking page</x-slot>

    <div class="container mt-5">
      <form action="{{route('booking.store')}}" method="POST">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" name="customer_name" id="form6Example1" class="form-control" placeholder="Your Name"/>
              <label class="form-label" for="form6Example1">name</label>
            </div>
          </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" name="address" id="form6Example4" class="form-control" />
          <label class="form-label" for="form6Example4">Address</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" name="email" id="form6Example5" class="form-control" />
          <label class="form-label" for="form6Example5">Email</label>
        </div>

        <!-- Number input -->
        <div class="form-outline mb-4">
          <input type="text" name="phone" id="form6Example6" class="form-control" />
          <label class="form-label" for="form6Example6">Phone</label>
        </div>

        <!-- Message input -->
                <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" name="resort_name" id="form6Example3" class="form-control" />
          <label class="form-label" for="form6Example3">Resort name</label>
        </div>

                <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="date" name="start_date" id="form6Example3" class="form-control" />
          <label class="form-label" for="form6Example3">Check In Date </label>
        </div>

                <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="date" name="end_date" id="form6Example3" class="form-control" />
          <label class="form-label" for="form6Example3">Checkout Date</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
      </form>
    </div>


</x-frontend.layout>
