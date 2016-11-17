
  <div class="container-fluid well">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="{{ url('/')}}/uploads/images/{!! $user['avatar'] !!}" class="avatar img-circle img-thumbnail" alt="avatar">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
        <div class="col-md-6">
        <h4 class="text-success"><strong>Name:</strong> {{$user->name}}</h4>
        <h4 class="text-success"><strong>Email:</strong> {{$user->email}}</h4>
        <h4 class="text-success"><strong>Role:</strong> <label class="label label-success">{{ $user->user_access_level === 0 ? "User" : "Admin" }}</label></h4>
        <h4 class="text-success"><strong>Phone:</strong> {{$user->phone_number}}</h4>
        </div>
        <div class="col-md-6">
        <h4 class="text-success"><strong>Birth day:</strong> {{$user->birth_day}}</h4>
        <h4 class="text-success"><strong>Address:</strong> {{$user->address}}</h4>
        <h4 class="text-success"><strong>City:</strong> {{$user->city}}</h4>
        <h4 class="text-success"><strong>Gender:</strong> @if($user->gender==0) Nam @else Nữ @endif</h4>
        </div>
    </div>
  </div>