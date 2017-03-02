@extends('pages.layout')

@section('header')

@endsection
@section('content')
	<!-- ad-profile-page -->
	<section id="main" class="clearfix  ad-profile-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="/home">Home</a></li>
					<li>Profile</li>
				</ol><!-- breadcrumb -->						
			</div><!-- banner -->
			
			<div class="ad-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<img src="{{ asset('profile_pic/' . auth::user()->profile_picture) }}" alt="User Images" class="img-responsive" style="width:75px; height: 78px;">
					</div>
					<div class="user">
						<h2>Hello, <a href="profile">{{ Auth::user()->name }}</a></h2>
						<h5>You created your account on:{{ Auth::user()->created_at}}  [ Indian time (UTC + 5:30hrs)]</h5>
					</div>								
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li class="active"><a href="profile">Profile</a></li>
					<li><a href="{{ url('profile_picture') }}">Profile picture</a></li>
					@if(Auth::user()->account_type == "Student")
					<li><a href="#">Enrolled Courses</a></li>
					@endif
					<li><a href="#"></a></li>
				</ul>
			</div><!-- ad-profile -->	

			<div class="profile section">
				<div class="row">
					<div class="col-sm-8">
						<div class="user-pro-section">

							<!-- profile-details -->
							
							<div class="profile-details section">


								<h2 style="text-decoration:underline">Profile Details</h2>
								<!-- form -->
								<div class="form-group">
									<label>Name</label>
									<label>{{ Auth::user()->name }}</label>
								</div>

								<div class="form-group">
									<label>Email ID</label>
									<label>{{ Auth::user()->email }}</label>
								</div>

								<div class="form-group">
									<label>Mobile</label>
									<label>{{ Auth::user()->phone_number }}</label>
								</div>

                             <div class="form-group">
                             	<label>City</label>
                                <label>{{ Auth::user()->city }}</label>
                            </div>

								<div class="form-group">
									<label>This is</label>
									<label>{{Auth::user()->account_type}}</label>
								</div>
								<div class="container">
  					
  <!-- Trigger the modal with a button -->
  <div class="pull-left">
  <div class="col-sm-3">
  <div class="footer-widget news-letter">
  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Edit Profile</button>
</div>
</div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Profile</h4>
        </div>
        <div class="modal-body">
				<div class="col-sm-12">

								<form class="form-horizontal"  method="POST" action="{{ url('profile') }}">
                                             {{ csrf_field() }}
          						<div class="form-group">
									<label>Username</label>
									<input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
								</div>

								<div class="form-group">
									<label>Email ID</label>
									<label>{{ Auth::user()->email }}</label>
								</div>

								<div class="form-group">
									<label for="name-three">Phone Number</label>
									<input type="text" class="form-control" name="phone_number" value="{{ Auth::user()->phone_number }}">
								</div>
								<div class="form-group">
									<label for="name-three">City</label>
									<input type="text" class="form-control" name="city" value="{{ Auth::user()->city }}">
								</div>

								<div class="form-group">
									<label>You are a</label>
									<label>{{Auth::user()->account_type}}</label>
								</div>
								<div class="pull-right">
								<div class="col-sm-6">
										<div class="footer-widget news-letter">
											<button type="submit" class="btn btn-primary">Update</button>
										</div>
									</div>
									</div>
								</form>
									<div class="pull-left">
								<div class="col-sm-6">
										<div class="footer-widget news-letter">
											<form class="form-horizontal" method="GET" action="{{ url('/delete') }}">
                                             {{ csrf_field() }}
											<button type="submit" class="btn btn-warning">Delete</button>
										</form>
										</div>
									</div>
									</div>

									

									
									<!-- change-password -->
						<br>
						<br>
						<HR>
							<div class="change-password section">
								<!-- form -->
								<form class="form-horizontal"  method="POST" action="{{ url('password_update') }}">
                                             {{ csrf_field() }}
								<div class="form-group">
									<label>New password</label>
									<input type="password" name="new_password" class="form-control" requird>	
								</div>
								<div class="pull-right">
									<div class="col-sm-12">
										<div class="footer-widget news-letter">
											<button type="submit" class="btn btn-primary">Update password</button>
										</div>
									</div>
									</div>
								</form>															
							</div><!-- change-password -->
        </div>
        </div>
        <br>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div><!-- profile-details -->
</div><!-- user-pro-edit --></div><!-- profile -->
</section><!-- ad-profile-page -->
	@endsection
@section('footer')


@endsection