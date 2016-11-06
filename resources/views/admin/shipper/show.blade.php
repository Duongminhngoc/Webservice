@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>{{ trans('shipper.detail_shipper') }}</h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @include('admin.shipper.show_fields')
                    <a href="{!! route('shipper.index') !!}" class="btn btn-default">{{ trans('shipper.back') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
