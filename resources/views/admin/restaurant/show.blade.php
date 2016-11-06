@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('restaurant.detail_restaurant') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @include('admin.restaurant.show_fields')
                    <a href="{!! route('restaurant.index') !!}" class="btn btn-default">{{ trans('restaurant.back') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
