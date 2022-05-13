			@if(Session::has('message'))
										 <div class="alert alert-success alert-dismissible fade in" role="alert">
										 {{ Session::get('message') }}
										 </div>
			 @endif