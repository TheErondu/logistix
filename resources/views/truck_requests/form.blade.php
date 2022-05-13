				<div>
				    {!! Form::label('pickup_location', 'Pick-Up Location') !!}
				    <div>
				        {!! Form::text('pickup_location', '', ['class'=>'form-control','id'=>'pickup_location']) !!}
				    
				    </div>
				</div>
 
				<div>
				    {!! Form::label('destination', 'Destination') !!}
				    <div>
				        {!! Form::text('destination', 'where to ?',  ['class'=>'form-control', 'id'=>'destination']) !!}
				    </div>
				
				</div>

				<div>
				    {!! Form::label('truck_class', 'Truck Class') !!}
				    <div>
				        {!! Form::text('truck_class', 'e.g 3 AXEL Box Truck', ['class'=>'form-control','id'=>'truck_class']) !!}
				    </div>
				
				</div>

				<div>
				    {!! Form::label('e_t_d', 'Estimated Time of Delivery') !!}
				    <div>   
				        {!! Form::date('e_t_d', '', ['class'=>'form-control','id'=>'e_t_d']) !!}
				    </div>
				
				</div>
				

