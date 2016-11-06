@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('orderItem.detail_orderItem') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @include('admin.orderItem.show_fields')
                    <a href="{!! route('orderItem.index') !!}" class="btn btn-default">{{ trans('orderItem.back') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
