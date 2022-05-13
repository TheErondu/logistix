@extends('layouts.dash')
@section('content') 
    @if(Auth::user()->user_type == 'client')
        @include('client')

    @elseif(Auth::user()->user_type == 'trucker')
        @include('trucker')

    @elseif(Auth::user()->user_type == 'warehouser')
        @include('warehouser')

        @elseif(Auth::user()->user_type == 'admin')
        @include('admin')

    @endif
@endsection 