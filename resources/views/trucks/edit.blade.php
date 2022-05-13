@extends('layouts.app')
    
	@section('content')
	<section class="login_content">

		<h1>Edit Truck Details</h1>
    @include('partials.alerts.errors')

{!! Form::model($truck,['url' => route('truck-update',['id' => $truck->id]) ]) !!} 
    {{ method_field('PATCH') }} 
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
            {!! Form::label('model', 'Truck Brand and Model') !!}
            <div>
                {!! Form::text('model', null, ['class'=>'form-control','id'=>'model']) !!}
            </div>
        
        </div>

        <div>
            {!! Form::label('description', 'Description') !!}
            <div>
                {!! Form::textarea('description', null, ['class'=>'form-control', 'rows' => 2, 'maxlength' => '50', 'id'=>'description']) !!}
            </div>
        
        </div>


    {!! Form::submit('Update truck',['class'=>'form-control btn btn-primary']) !!} 
{!! Form::close() !!} 
<div class="separator">
                	<p class="change_link">
                  		<a href="{{ route('customer') }}"class="to_register"> <strong> Return to Dashboard  </strong></a>or... <strong>Click the Logo to return to the Homepage.</strong>
                	</p>

            <div class="clearfix"></div>
                	<br />

                <div>
                  		<a href="{{ route('welcome') }}"><img src="{{ asset('dashboard/img/logo.png') }}" width="170" height="34" alt="logo"></a>
                  	<p>©2019 Logistix.ng. All Rights Reserved.</p>

                </div>
            </div>
                    
	@endsection
