<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use App\Truck;
use Auth; 
use Illuminate\Http\Request; 

class TruckController extends Controller 
{ 
    
      public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('trucker');
        

    }

    //Display a listing of the resource. 
    public function index() 
    { 
        return view('trucks.index')->with('trucks',Truck::all());
    }

    //Show the form for creating a new resource.
    public function create()
    {
        $truck = new Truck();

        return view('trucks.create')->with(compact('truck'));
    }

    //Store a newly created resource in storage.
    public function store(Request $request)
    {
        Truck::create([
    'model' => request('model'),
    'registration_no' => request('registration_no'),
    'truck_class' => request('truck_class'),
    'current_location' => request('current_location'),
    'description' => request('description'),
    'user_id' => Auth::user()->id 
]);

        return redirect(route('truck-index'))->with('message','Truck successfully created.');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->trucker_id = trucker()->id();
        });
    }

    //Display the specified resource.
    public function show(Truck $truck)
    {
        // In an admin panel, I usually don't need this method. It's often more efficient to
        // show the truck data in the edit view.
    }

    //Show the form for editing the specified resource.
    public function edit(Truck $truck)
    {
        return view('trucks.edit')->with(compact('truck'));
    }

    //Update the specified resource in storage.
    public function update(Request $request, Truck $truck)
    {
        $truck->update($request->all());

        return redirect(route('truck-index'))->with('message','Truck successfully updated.');
    }

    //Remove the specified resource from storage.
    public function destroy(Truck $truck)
    {
        $truck->delete();

        return redirect(route('truck-index'))->with('message','Truck successfully removed.');
    }
}