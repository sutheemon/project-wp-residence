@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 mx-5">
                    <!-- Nested Row within Card Body -->
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">PLEASE REGISTER</h1>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
            
                                    <div class="form-group">
                                        <label for="username" class="col-form-label text-md-right">{{ __('Username') }}</label>
 
                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
            
                                    <div class="form-group">
                                        <label for="userid" class="col-form-label text-md-right">{{ __('User ID') }}</label>
                                            <input id="userid" type="text" class="form-control @error('userid') is-invalid @enderror" name="userid" value="{{ old('userid') }}" required autocomplete="userid" autofocus>
            
                                            @error('userid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
            
                                    <div class="form-group">
                                        <label for="roomid" class="col-form-label text-md-right">{{ __('Room ID') }}</label>
                                            <input id="roomid" type="text" class="form-control @error('roomid') is-invalid @enderror" name="roomid" value="{{ old('roomid') }}" required autocomplete="roomid" autofocus>
            
                                            @error('roomid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
            
                                    <div class="form-group">
                                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
    
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
            
                                    <div class="form-group">
                                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
            
                                    <div class="form-group">
                                        <label for="role" class=" col-form-label text-md-right">{{ __('Role') }}</label>
                                            
                                            <select id="role" name="role" class="form-control @error('role') is-invalid @enderror" value="{{ old('role') }}" required autocomplete="role" autofocus>
                                                <option value='A'>admin</option>
                                                <option value='U'>user</option>
                                            </select>
            
                                            @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                {{ __('Register') }}
                                            </button>
                                            <a href="{{ route('login') }}" type="button" class="btn btn-dark btn-user btn-block">
                                                {{ __('Login') }}
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection