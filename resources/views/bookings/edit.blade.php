@extends('layouts.app')

@section('content')
	<section class="login_content">
    <h1>Edit Warehouse Booking Specifications</h1>
{!! Form::model($booking,['url' => route('booking-update',['id' => $booking->id]) ]) !!} 
    {{ method_field('PATCH') }} 
    @include('bookings.form') 
    {!! Form::submit('Update booking',['class'=>'form-control btn btn-primary']) !!} 
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