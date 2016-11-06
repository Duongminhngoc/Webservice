@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('order.detail_order') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @include('admin.order.show_fields')
                    <a href="{!! route('order.index') !!}" class="btn btn-default">{{ trans('order.back') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
