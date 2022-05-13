@extends('layouts.auth',['title' => 'Create an Account'])

@section('content')
          <section class="login_content">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                         <h1> Create an Account </h1>

                        <div>
                            <label for="name" >{{ __('Name') }}</label>

                            <div>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div>
                            <label for="phone" >{{ __('Phone Number') }}</label>

                            <div>
                                <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div>
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div>
                            <label for="name">{{ __('Register as') }}</label>

                            <div>
                                <select id="user_type" class="form-control{{$errors->has('user_type') ? ' is-invalid' : ''}}" name="user_type" value= "{{ old('email') }}" required >

                                    <option value="client">A Client </option>

                                    <option value="trucker">A Trucker </option>

                                    <option value="warehouser">A Warehouser </option>
                                    
                                </select>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label for="business">{{ __('Business Name') }}</label>

                            <div>
                                <input id="business" type="text" class="form-control{{ $errors->has('business') ? ' is-invalid' : '' }}" name="business" value="{{ old('business') }}" required autofocus>

                                @if ($errors->has('business'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('business') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label for="password" >{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div>
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="{{ route('login') }}" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <img src="{{ asset('dashboard/img/logo.png') }}" width="170" height="34" alt="logo">
                  <p>©2019 Logistix.ng. All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
@endsection

