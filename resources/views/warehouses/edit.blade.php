@extends('layouts.app')

@section('content')
	<section class="login_content">
    @include('partials.alerts.errors')
		<h1>Edit Warehouse Details</h1>
{!! Form::model($warehouse,['url' => route('warehouse-update',['id' => $warehouse->id]) ]) !!} 
    {{ method_field('PATCH') }} 
    @include('warehouses.form') 
    {!! Form::submit('Update warehouse',['class'=>'form-control btn btn-primary']) !!} 
{!! Form::close() !!} 
<div class="separator">
                	<p class="change_link">
                  		<a href="{{ route('customer') }}"class="to_register"> <strong> Return to Dashboard  </strong></a>or... <strong>Click the Logo to return to the Homepage.</strong>
                	</p>

            <div class="clearfix"></div>
                	<br />

                <div>
                  		<a href="{{ route('customer') }}"><img src="{{ asset('dashboard/img/logo.png') }}" width="170" height="34" alt="logo"></a>
                  	<p>©2019 Logistix.ng. All Rights Reserved.</p>

                </div>
            </div>
                    
	@endsection