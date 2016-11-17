@extends('layouts.app')

@section('content')
<div class="row">
    <section class="content-header">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <!-- <h3 style="margin: 7px;">{{ trans('user.detail_user') }}</h3> -->
                <h3 class="text-info " style="margin: 7px;">Personal info</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('user.index') }}">{{ trans('user.back') }}</a>
            </div>
        </div>
    </section>
</div>
    <div class="content">
        @include('admin.user.show_fields')
    </div>
@endsection
