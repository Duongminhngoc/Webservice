        <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog " style="width:60%">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
            <!--form login -->
                 <div class="omb_login ">
                    <h3 class="omb_authTitle">Login or <a href="#" data-toggle="modal" class='signup'>Sign up</a></h3>
                    <div class="row omb_row-sm-offset-3  omb_socialButtons">
                        <div class="col-xs-3 col-sm-3">
                            <a href="#" class="btn btn-lg btn-block omb_btn-facebook ">
                                <i class="fa fa-facebook visible-xs "></i>
                                <span class="hidden-xs ">
                                Facebook</span>
                            </a>
                        </div>
                        <div class="col-xs-3 col-sm-3">
                            <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                                <i class="fa fa-twitter visible-xs"></i>
                                <span class="hidden-xs">Twitter</span>
                            </a>
                        </div>  
                        <div class="col-xs-3 col-sm-3">
                            <a href="#" class="btn btn-lg btn-block omb_btn-google">
                                <i class="fa fa-google-plus visible-xs"></i>
                                <span class="hidden-xs">Google+</span>
                            </a>
                        </div>  
                    </div>
            
                    <div class="row omb_row-sm-offset-31 omb_loginOr">
                        <div class="col-xs-12 col-sm-6">
                            <hr class="omb_hrOr">
                            <span class="omb_spanOr">or</span>
                        </div>
                    </div>
            
                    <div class="row omb_row-sm-offset-31">
                        <div class="col-xs-12 col-sm-6">    
                            <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="email address">
                                </div>
                                <span class="help-block"></span>
                                                    
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input  type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <span class="help-block">Password error</span>
            
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="row omb_row-sm-offset-31">
                        <div class="col-xs-12 col-sm-3">
                            <label class="checkbox">
                                <input type="checkbox" value="remember-me">Remember Me
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <p class="omb_forgotPwd">
                                <a href="#">Forgot password?</a>
                            </p>
                        </div>
                    </div>          
                </div>
                <!--end form-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="SignUp" role="dialog">
        <div class="modal-dialog " style="width:60%">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
             <!--form sign up-->
                  <form class="form-horizontal" role="form">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Country</label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control">
                            <option>Afghanistan</option>
                            <option>Bahamas</option>
                            <option>Cambodia</option>
                            <option>Denmark</option>
                            <option>Ecuador</option>
                            <option>Fiji</option>
                            <option>Gabon</option>
                            <option>Haiti</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="uncknownRadio" value="Unknown">Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Meal Preference</label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="calorieCheckbox" value="Low calorie">Low calorie
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="saltCheckbox" value="Low salt">Low salt
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>