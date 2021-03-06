@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {{ Form::open(['url'=>'/register', 'method'=>'POST', 'class' =>'form-horizontal', 'role'=>'form', 'files' => true]) }}

                        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                             {{ Form::label('avatar', trans('label.avatar'), ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                 {{ Form::file('avatar', null, ['class'=>'form-control']) }}

                                  @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                  @endif
                              </div>
                         </div>

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                             {{ Form::label('name', trans('label.name'), ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                 {{ Form::text('name', null,['class'=>'form-control']) }}

                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                  @endif
                              </div>
                         </div>

                         <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                             {{ Form::label('user_access_level', trans('label.user_access_level'), ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                 {{ Form::text('user_access_level', null,['class'=>'form-control']) }}

                                 @if ($errors->has('user_access_level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_access_level') }}</strong>
                                    </span>
                                  @endif
                              </div>
                         </div>

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                             {{ Form::label('email', trans('label.email_address'), ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                             {{ Form::email('email', null,['class'=>'form-control', 'name'=>'email']) }}

                             @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  @endif
                             </div>
                         </div>

                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                             {{ Form::label('password', trans('label.password'), ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                             {{ Form::password('password', ['class'=>'form-control', 'name'=>'password']) }}

                             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                  @endif
                             </div>
                         </div>

                         <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                         {{ Form::label('password', trans('label.confirm_password'), ['class' => 'col-md-4 control-label']) }}
                             <div class="col-md-6">
                             {{ Form::password('password', ['class'=>'form-control', 'name'=>'password_confirmation']) }}

                             @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                              </div>
                         </div>

                         <div class="form-group">
                             <div class="col-md-6 col-md-offset-4">
                                 <button type="submit" class="btn btn-primary">
                                     <i class="fa fa-btn fa-user"></i> {{ trans('label.register') }}
                                 </button>
                             </div>
                         </div>
                      {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
