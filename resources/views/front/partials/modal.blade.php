

<!--<div id="preloader"></div>-->

<!--modal popup-->

<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="border-left: 0px solid #dfb859;">Login</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal" action="{{action('PublicPagesController@postLogin')}}">
          {{ csrf_field() }} 
          
          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control" name="email"  placeholder="Email"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control" name="password" placeholder="Password"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default button-1" id="login">Sign in</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <div class="boder3"></div>
              <p><a href="#" data-toggle="modal" data-target="#myModalHorizontal3">Create New Account</a>&nbsp; |&nbsp;<a href="#" data-toggle="modal" data-target="#myModalHorizontal4">Forgot Password</a></p>
              <div class="boder3"></div>
            </div>
          </div>
          
        </form>
      </div>
      <!-- Modal Footer -->
    </div>
  </div>
</div>

<!--Register-->
<div class="modal fade" id="myModalHorizontal2" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" 
data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Register</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control"  placeholder="Email"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control"  placeholder="Password"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control"  placeholder="Confirm password"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default button-1">Create a Account</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <div class="boder3"></div>
              <p><a href="#" data-toggle="modal" data-target="#myModalHorizontal3">Create New Account</a>&nbsp; |&nbsp;<a href="#" data-toggle="modal" data-target="#myModalHorizontal4">Forgot Password</a></p>
              <div class="boder3"></div>
            </div>
          </div>
        </form>
      </div>
      <!-- Modal Footer -->
    </div>
  </div>
</div>
<!--Register-->

<!--Create New Account-->
<div class="modal fade" id="myModalHorizontal3" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" 
data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Create New Account</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control"  placeholder="Email"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control"  placeholder="Password"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control"  placeholder="Confirm password"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12 text">
              <button type="submit" class="btn btn-default button-1">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <!-- Modal Footer -->
    </div>
  </div>
</div>
<!--Create New Account-->
<!--Forgot Password-->
<div class="modal fade" id="myModalHorizontal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" 
data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Forgot Password</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control"  placeholder="Email"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default button-1">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <!-- Modal Footer -->
    </div>
  </div>
</div>
<!--Forgot Password-->


