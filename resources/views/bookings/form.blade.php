				<div>
				    {!! Form::label('location', 'Preferred Location') !!}
				    <div>
				        {!! Form::text('location', 'E.g. Ikorodu, Lagos State.', ['class'=>'form-control','id'=>'pickup_location']) !!}
				    
				    </div>
				</div>
 
				<div>
				    {!! Form::label('cargo_type', 'Cargo Type') !!}
				    <div>
				        {!! Form::text('cargo_type', 'E.g. Clothing and Textiles',  ['class'=>'form-control', 'id'=>'cargo_type']) !!}
				    </div>
				
				</div>

				<div>
				    {!! Form::label('e_t_a', 'Expected Time of Arrival') !!}
				    <div>   
				        {!! Form::date('e_t_a', 'DD/MM/YYYY', ['class'=>'form-control','id'=>'e_t_a']) !!}
				    </div>
				
				</div>


				<div>
				    {!! Form::label('e_t_d', 'Expected Time of Delivery') !!}
				    <div>   
				        {!! Form::date('e_t_d', 'DD/MM/YYYY', ['class'=>'form-control','id'=>'e_t_d']) !!}
				    </div>
				
				</div>

				<div>
				    {!! Form::label('capacity', 'Warehouse Capacity in Cubic metres(&#13221;)') !!}
				    <div>
				        {!! Form::number('capacity', 'E.g. 300 &#13221;',  ['class'=>'form-control', 'id'=>'capacity']) !!}
				    </div>
				
				</div>

