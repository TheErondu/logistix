@extends('layouts.app')

	@section('content')
	<section class="login_content">
						<h1>Register a Truck</h1>
	    			{!! Form::model($truck, ['url' => route('truck-store') ]) !!} 
	    			@include('trucks.form') 
	    			{!! Form::submit('Save truck',['class'=>'form-control btn btn-primary']) !!} 
	    			{!! Form::close() !!}
    		<div class="separator">
                	<p class="change_link">
                  		<a href="{{ route('customer') }}"class="to_register"> <strong> Return to Dashboard  </strong></a>or... <strong>Click the Logo to return to the Homepage.</strong>
                	</p>

            <div class="clearfix"></div>
                	<br />

                <div>
                  		<a href="http://127.0.0.1:8000"><img src="{{ asset('dashboard/img/logo.png') }}" width="170" height="34" alt="logo"></a>
                  	<p>©2019 Logistix.ng. All Rights Reserved.</p>

                </div>
            </div>
                    
	@endsection
