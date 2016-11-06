<div class="form-group col-sm-6">
    {!! Form::label('id', trans('restaurant.id')) !!}
    <p>{!! $restaurant['id'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('name', trans('restaurant.name')) !!}
    <p>{!! $restaurant['name'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('country_id', trans('restaurant.county_id')) !!}
    <p>{!! $restaurant[trans('restaurant.array_county')] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('owner', trans('restaurant.owner')) !!}
    <p>{!! $restaurant[trans('restaurant.array_owner')] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('phone', trans('restaurant.phone')) !!}
    <p>{!! $restaurant['phone'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('email', trans('restaurant.email')) !!}
    <p>{!! $restaurant['email'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('address', trans('restaurant.address')) !!}
    <p>{!! $restaurant['address'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('description', trans('restaurant.description')) !!}
    <p>{!! $restaurant['description'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('created_at', trans('restaurant.created_at')) !!}
    <p>{!! $restaurant['created_at'] !!}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('updated_at', trans('restaurant.updated_at')) !!}
    <p>{!! $restaurant['updated_at'] !!}</p>
</div>

