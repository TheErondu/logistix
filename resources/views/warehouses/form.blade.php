				<div>
				    {!! Form::label('business_name', 'Your Company Name') !!}
				    <div>
				        {!! Form::text('business_name', Auth::user()->business, ['class'=>'form-control','id'=>'business_name']) !!}
				    
				    </div>
				</div>
 
				<div>
				    {!! Form::label('capacity', 'Warehouse Capacity in Cubicmetres(&#13221;)') !!}
				    <div>
				        {!! Form::number('capacity', null,  ['class'=>'form-control', 'id'=>'capacity']) !!}
				    </div>
				
				</div>

				<div>
				    {!! Form::label('address', 'Warehouse  Address') !!}
				    <div>
				        {!! Form::text('address', null, ['class'=>'form-control','id'=>'address']) !!}
				    </div>
				
				</div>

				<div>
				    {!! Form::label('text', 'Description') !!}
				    <div>
				        {!! Form::textarea('description', null,['class'=>'form-control', 'rows' => 2, 'maxlength' => '50', 'id'=>'description']) !!}
				    </div>
				
				</div>

