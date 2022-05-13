        <div>
            {!! Form::label('model', 'Truck Brand and Model') !!}
            <div>
                {!! Form::text('model', null, ['class'=>'form-control','id'=>'model']) !!}
            </div>
        
        </div>

        <div>
            {!! Form::label('registration_no', 'Truck Registration Number') !!}
            <div>
                {!! Form::text('registration_no', Null, ['class'=>'form-control','id'=>'registration_no']) !!}
            
            </div>
        </div>
 
        <div>
            {!! Form::label('truck_class', 'Truck Class') !!}
            <div>
                {!! Form::text('truck_class', null,  ['class'=>'form-control', 'id'=>'truck_class']) !!}
            </div>
        
        </div>

        <div>
            {!! Form::label('current_location', 'Current  Location') !!}
            <div>
                {!! Form::text('current_location', null, ['class'=>'form-control','id'=>'current_location']) !!}
            </div>
        
        </div>

        <div>
            {!! Form::label('description', 'Description') !!}
            <div>
                {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => 2, 'maxlength' => '50', 'id'=>'description']) !!}
            </div>
        
        </div>