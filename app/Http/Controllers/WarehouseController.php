<?php 
namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\Controller; 
use App\Warehouse; 
use Illuminate\Http\Request; 

class WarehouseController extends Controller 
{ 
    
      public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('warehouser');
    }

    //Display a listing of the resource. 
    public function index() 
    { 
        return view('warehouses.index')->with('warehouses',Warehouse::all());
    }

    //Show the form for creating a new resource.
    public function create()
    {
        $warehouse = new Warehouse();

        return view('warehouses.create')->with(compact('warehouse'));
    }

    //Store a newly created resource in storage.
    public function store(Request $request)
    {
        Warehouse::create([
    'business_name' => request('business_name'),
    'capacity' => request('capacity'),
    'current_location' => request('current_location'),
    'description' => request('description'),
    'user_id' => Auth::user()->id 
]);

        return redirect(route('warehouse-index'))->with('message','Warehouse successfully created.');
    }

    //Display the specified resource.
    public function show(Warehouse $warehouse)
    {
        // In an admin panel, I usually don't need this method. It's often more efficient to
        // show the warehouse data in the edit view.
    }

    //Show the form for editing the specified resource.
    public function edit(Warehouse $warehouse)
    {
        return view('warehouses.edit')->with(compact('warehouse'));
    }

    //Update the specified resource in storage.
    public function update(Request $request, Warehouse $warehouse)
    {
        $warehouse->update($request->all());

        return redirect(route('warehouse-index'))->with('message','Warehouse successfully updated.');
    }

    //Remove the specified resource from storage.
    public function destroy(Warehouse $warehouse)
    {
        $warehouse->delete();

        return redirect(route('warehouse-index'))->with('message','Warehouse successfully removed.');
    }
}