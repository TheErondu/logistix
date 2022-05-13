<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use App\Truck_request;
use Illuminate\Pagination\Paginator;
use Auth;
use Illuminate\Http\Request; 

class Truck_requestController extends Controller 
{ 
    public $truck_request;
      public function __construct()
    {
        $this->middleware('auth');
        
    }


    //Display a listing of the resource. 
    public function index() 
    { 

        return view('truck_requests.index')->with('truck_requests',Truck_request::all());
 
    }

    public function getTruck_requests()
    {
        $truck_requests = \App\Truck_request()->paginate(5);

        return view('customer', compact('truck_requests'));
    }
    

    //Show the form for creating a new resource.
    public function create()
    {
        $truck_request = new Truck_request();

        return view('truck_requests.create')->with(compact('truck_request'));
    }

    //Store a newly created resource in storage.
    public function store(Request $request)
    {
         Truck_request::create([
    'pickup_location' => request('pickup_location'),
    'capacity' => request('capacity'),
    'destination' => request('destination'),
    'truck_class' => request('truck_class'),
    'e_t_d' => request('e_t_d'),

    'user_id' => Auth::user()->id 
]);

        return redirect(route('customer'))->with('message','Truck_request request has been successfully submitted!');
    }

    //Display the specified resource.
    public function show(Truck_request $truck_request)
    {
        // In an admin panel, I usually don't need this method. It's often more efficient to
        // show the truck_request data in the edit view.
    }

    //Show the form for editing the specified resource.
    public function edit(Truck_request $truck_request)
    {
        return view('truck_requests.edit')->with(compact('truck_request'));
    }

    //Update the specified resource in storage.
    public function update(Request $request, Truck_request $truck_request)
    {
        $truck_request->update($request->all());

        return redirect(route('truck_request-index'))->with('message','Truck_request successfully updated.');
    }

    //Remove the specified resource from storage.
    public function destroy(Truck_request $truck_request)
    {
        $truck_request->delete();

        return redirect(route('truck_request-index'))->with('message','Truck_request successfully Cancelled.');
    }
}