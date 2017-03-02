@extends('pages.layout')

@section('header')

@endsection
@section('content')
	<section id="main" class="clearfix">
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
					<li ><a href="profile">Profile</a></li>
					<li class="active"><a href="#">Profile picture</a></li>
					@if(Auth::user()->account_type == "Student")
					<li><a href="#">Enrolled Courses</a></li>
					@endif
					<li><a href="#"></a></li>
				</ul>
			</div><!-- ad-profile -->	
            
     <div class="close-account">
				<div class="row">
					<div class="col-sm-8 text-center">
						<div class="delete-account section">
								<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('/profile_picture') }}">
                                             {{ csrf_field() }}
							<h2>Update your profile picture</h2>
										<div class="row form-group add-image">
										<div class="col-sm-12">
											<div class="upload-section">
												<label class="upload-image" for="upload-image-one">
													<input type="file" name="profile_picture" id="upload-image-one" requird>
												</label>										
											</div>	
										</div>
									</div>
							<button type="submit" class="btn btn-primary">Update</button>
						</form>

						</div>
					</div><!-- delete-account -->
			</div>
		</div>
 </div><!-- profile-details -->
</section><!-- ad-profile-page -->
@endsection


@section('footer')


@endsection