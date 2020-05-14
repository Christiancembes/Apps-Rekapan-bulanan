@extends('template')
@section('contentWebsite')

	<div class="panel-heading">
		<strong>Register</strong>
	</div>
	

	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
            </div>
    </div>

	<div class="form-group row">
		<label for="username" class="col-md-4 control-label text-md-right">{{__('Username')}}</label>
	
	<div class="col-md-6">
		<input id="username" type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{old('username')}}" requiredautocomplete="username" autofocus>

			@error('username')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
	
	<div ></div>

	<div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
		<label for="email" class="col-md-4 control-label">E-Mail Address</label>

		<div class="col-md-6">
			<input id="email" type="text" class="form-control" name="email" value="{{old('email')}}">

			@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif
		</div>
	</div>


	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
           <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                 <input id="password" type="password" class="form-control" name="password">

                 @if ($errors->has('password'))
                      <span class="help-block">
                         <strong>{{ $errors->first('password') }}</strong>
                       </span>
                 @endif
            </div>
    </div>


    <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

          <div class="col-md-6">
               <input id="password-confirm" type="password" class="form-control" name="confirm_password">
               
               @if ($errors->has('confirm_password'))
                   <span class="help-block">
                       <strong>{{ $errors->first('confirm_password') }}</strong>
                   </span>
                @endif
           </div>
    </div>


	@endsection

</div>
</div>