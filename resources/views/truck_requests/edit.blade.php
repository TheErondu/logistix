{!! Form::model($truck_request,['url' => route('truck_request-update',['id' => $truck_request->id]) ]) !!} 
    {{ method_field('PATCH') }} 
    @include('truck_requests.form') 
    {!! Form::submit('Update truck_request',['class'=>'form-control btn btn-primary']) !!} 
{!! Form::close() !!} 