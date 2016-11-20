<div class="row search-city">
    <form action="{{route('restaurant.search')}}" method="POST">
      <div class="dropdown col-md-4" >
        <select id="country" name="country"  class="form-control"  >
        @foreach($countries as $country)
          <option value="{{$country->id}}">{{$country->name}}</option>
        @endforeach
        </select>
      </div>
      <div class="dropdown col-md-4" >
        <select id="restaurant" name="restaurant"  class="form-control"  >
          @foreach($restaurant1 as $restaurant12)
            <option value="{{$restaurant12['id']}}">{{$restaurant12['name']}}</option>
          @endforeach
        </select>
      </div>
      <div class="dropdown col-md-1 ">
        <button class=" btn btn-primary" type="submit">Tìm kiếm</button>
      </div>
    </form>
</div>