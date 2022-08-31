<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->filter(request(['search']))->paginate(10);

        return view('admin.booking', compact('bookings'));
    }

    public function decline(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('admin.booking')->withMessage('Booking Request Declined. A Cancellation Email Sent to The Customer');
    }

    public function accept(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('admin.booking')->withMessage('Booking Request Accepted. A Confirmation Email Sent to The Customer');
    }
}
