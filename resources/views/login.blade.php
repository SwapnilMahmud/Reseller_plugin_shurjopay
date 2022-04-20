@extends('./layouts/login_layouts')
@section('container')
      <div class="page-content--bge5">
         <div class="container">
            <div class="login-wrap">
               <div class="login-content">
                  <div class="login-logo">
                  <img src="{{asset('admin_panel_assets/Image/spay.png')}}">
                     <!-- <div class="alert alert-success" role="alert">
                        {{Config::get('constants.site_name')}}
                        
                     </div> -->
                  </div>
                  <div class="login-form">
                     <form action="{{route('admin.auth')}}" method="post">
                        @csrf
                        <div class="form-group">
                           <label>Email Address</label>
                           <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                        <!-- <a href="{{url('/registration')}}" class="btn btn-info">signup</a> -->
                        @if(session()->has('error'))
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                           {{session('error')}}
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">×</span></button>
                        </div>
                        @endif                              
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection