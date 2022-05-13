@extends('layouts.app',['title' => 'Truck Request'])

	@section('content')
	<section class="login_content">
						<h1>Request for a Truck</h1>
{!! Form::model($truck_request, ['url' => route('truck_request-store') ]) !!} 
    @include('truck_requests.form') 
    {!! Form::submit('Submit',['class'=>'form-control btn btn-primary']) !!} 
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
