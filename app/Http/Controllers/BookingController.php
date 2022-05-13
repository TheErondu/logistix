<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Auth; 
use App\Booking; 
use Illuminate\Http\Request; 

class BookingController extends Controller 
{ 
    
      public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('client');

    }

    //Display a listing of the resource. 
    public function index() 
    { 
        return view('bookings.index')->with('bookings',Booking::all());
    }

    //Show the form for creating a new resource.
    public function create()
    {
        $booking = new Booking();

        return view('bookings.create')->with(compact('booking'));
    }

    //Store a newly created resource in storage.
    public function store(Request $request)
    {
         Booking::create([
    'location' => request('location'),
    'cargo_type' => request('cargo_type'),
    'e_t_a' => request('e_t_a'),
    'e_t_d' => request('e_t_d'),
    'capacity' => request('capacity'),
    'user_id' => Auth::user()->id 
]);

        return redirect(route('customer'))->with('message','Warehouse request has been successfully submitted!');
    }

    //Display the specified resource.
    public function show(Booking $booking)
    {
        // In an admin panel, I usually don't need this method. It's often more efficient to
        // show the booking data in the edit view.
    }

    //Show the form for editing the specified resource.
    public function edit(Booking $booking)
    {
        return view('bookings.edit')->with(compact('booking'));
    }

    //Update the specified resource in storage.
    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());

        return redirect(route('booking-index'))->with('message','Booking successfully updated.');
    }

    //Remove the specified resource from storage.
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect(route('booking-index'))->with('message','Booking successfully Cancelled.');
    }
}