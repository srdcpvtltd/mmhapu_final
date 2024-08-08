
@extends('prospect.layout.master')
@section('title')
    Dashboard
@endsection


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>REGISTER | EXAM SYSTEM </title>

	<!-- Global stylesheets -->
    <link rel="shortcut icon" type="image/png" href="{{asset('front/image/favicon.png')}}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
    <link href="{{asset('user_asset/assets/css/toastr.css')}}" rel="stylesheet" type="text/css">

	<!-- Core JS files -->
	<script src="{{asset('user_asset/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('user_asset/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>

	<script src="{{asset('user_asset/assets/js/app.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/login.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/form_select2.js')}}"></script>
	<!-- /theme JS files -->
	<style>
		.error_message{
			color:red;
		}
		.success_message{
			color:green;
		}
	</style>
</head>
@section('content')
	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login card -->
				<form class="flex-fill" method="POST" action="{{route('prospect.register')}}" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="remember_token" value="{{Str::random(40)}}"> --}}

					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<div class="card mb-0">
								<div class="card-body">
									<div class="text-center mb-3">
										<h5 class="mb-0">Register Yourself</h5>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label>Name</label>
											<div class="form-group form-group-feedback form-group-feedback-left">
												<input type="text" id="name" class="form-control" value="{{old('name')}}" placeholder="Name" name="name" required>
												<div class="form-control-feedback">
													<i class="icon-user text-muted"></i>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<label>Email Address</label>
											<div class="form-group form-group-feedback form-group-feedback-left">
												<input type="text" id="email" class="form-control"  value="{{old('email')}}" placeholder="Enter your email" name="email" required>
												<div class="form-control-feedback">
													<i class="icon-mail5 text-muted"></i>
												</div>
											</div>
										</div>
                                        <div class="col-md-4">
											<label>Select Course</label>
											<div class="form-group form-group-feedback form-group-feedback-left">

												<select name="entrance_fee_id" class="form-control select-search" required>
                                                    <option>Select</option>
                                                    @foreach(App\Models\EntranceFee::all() as $entrance_fee)
                                                        @if($entrance_fee['exam_status'] == 1)
                                                            <option value="{{$entrance_fee->id}}">{{$entrance_fee->course->title}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<label>Password</label>
											<div class="form-group form-group-feedback form-group-feedback-left">
												<input id="pwd" minlength="4" class="form-control" value="{{old('password')}}" onkeyup="validatePassword(this.value);" type="password" name="password" placeholder="Enter password" required>
												<div class="form-control-feedback">
													<i class="icon-lock2 text-muted"></i>
												</div>
												<span id="msg"></span>
											</div>
										</div>
										<div class="col-md-4">
											<label>Confirm Password</label>
											<div class="form-group form-group-feedback form-group-feedback-left">
												<input id="confirmpwd" minlength="4" class="form-control" value="{{old('confirm_password')}}" onkeyup="confirmPassword(this.value);" type="password" name="confirm_password" placeholder="Enter confirm password" required>
												<div class="form-control-feedback">
													<i class="icon-lock2 text-muted"></i>
												</div>
												<span id="confirmmsg"></span>
											</div>
										</div>

										<input type="hidden" name="role_id" value="{{App\Models\Role::where('name','Prospect')->first()?App\Models\Role::where('name','Prospect')->first()->id:''}}">

									</div>
									<div class="form-group">
										<input class="" type="checkbox" name="terms_condiition" required> I accept <a href="{{url('terms_&_condition')}}"> terms and condition policy </a>of the University.
									</div>
									<div class="form-group" style="text-align:center;">
										<button type="submit" class="">Sign Up <i class="icon-circle-right2 ml-2"></i></button> Or <a href="{{url('/login')}}"><button type="button" class="">Sign In <i class="icon-circle-right2 ml-2"></i></button></a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->


	<div id="course_fields_for_html" style="display:none;">
		<div class="row">
			<div class="col-md-6">
				<label>Course </label>
				<div class="form-group form-group-feedback form-group-feedback-left">
					<select  name="course_ids[]"  class="form-control select-2">
						<option selected disabled>Select Course</option>
						@foreach(App\Models\Web\Course::all() as $course)
						<option value="{{$course->id}}">{{$course->title}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-6">
				<label>Course Seats</label>
				<div class="form-group form-group-feedback form-group-feedback-left">
					<input type="number" class="form-control" value="" placeholder="Course Seats" name="course_seats[]">
					<div class="form-control-feedback">
						<i class="icon-user text-muted"></i>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- /page content -->

	@include('auth.partials.js')

    <script>
        function validatePassword(password) {

            // Do not show anything when the length of password is zero.
            if (password.length === 0) {
                document.getElementById("msg").innerHTML = "";
                return;
            }
            // Create an array and push all possible values that you want in password
            var matchedCase = new Array();
            matchedCase.push("[$@$!%*#?&]"); // Special Charector
            matchedCase.push("[A-Z]");      // Uppercase Alpabates
            matchedCase.push("[0-9]");      // Numbers
            matchedCase.push("[a-z]");     // Lowercase Alphabates

            // Check the conditions
            var ctr = 0;
            for (var i = 0; i < matchedCase.length; i++) {
                if (new RegExp(matchedCase[i]).test(password)) {
                    ctr++;
                }
            }
            // Display it
            var color = "";
            var strength = "";
            switch (ctr) {
                case 0:
                case 1:
                case 2:
                    strength = "Very Weak";
                    color = "red";
                    break;
                case 3:
                    strength = "Medium";
                    color = "orange";
                    break;
                case 4:
                    strength = "Strong";
                    color = "green";
                    break;
            }
            document.getElementById("msg").innerHTML = strength;
            document.getElementById("msg").style.color = color;
        }
		function confirmPassword(password) {

            // Do not show anything when the length of password is zero.
            if (password.length === 0) {
                document.getElementById("confirmmsg").innerHTML = "";
                return;
            }
			// new_password = document.getElementById("pwd").val();
			new_password =  $('#pwd').val();
			if(new_password == password)
			{
				var strength = "Password Matched";
				var color = "green";
			}else{
				var strength = "Password dont Matched";
				var color = "red";
			}

            document.getElementById("confirmmsg").innerHTML = strength;
            document.getElementById("confirmmsg").style.color = color;
        }

    </script>

    <script>
        $(document).on('change', '#role_id', function () {
			role_id = $(this).val();
			if(role_id == 2)
			{
				$('.all_college_fields').attr("hidden",false);
				$('.student_profile_fields').attr("hidden",true);
				$('.all_teacher_fields').attr("hidden",true);
			}else if(role_id == 3) {
				$('.all_college_fields').attr("hidden",true);
				$('.all_teacher_fields').attr("hidden",true);
				$('.student_profile_fields').attr("hidden",false);
			}else if(role_id == 4){
				$('.all_teacher_fields').attr("hidden",false);
				$('.all_college_fields').attr("hidden",true);
				$('.student_profile_fields').attr("hidden",true);
			}else{
				$('.all_teacher_fields').attr("hidden",true);
				$('.all_college_fields').attr("hidden",true);
				$('.student_profile_fields').attr("hidden",true);

			}
        });
        $(document).on('click', '#add_row_for_courses', function () {
			html = $('#course_fields_for_html').html();
			$('#course_fields').append(html);
			$('.select-2').addClass('select-search');
        });
        $(document).on('change', '#same_as_temparory', function (event) {
            if(this.checked){
				$('#permenant_address').val($('#temparory_address').val());
				$('#permenant_country_id').val($('#temparory_country_id').val());
				$('#permenant_state_id').val($('#temparory_state_id').val());
				$('#permenant_landmark').val($('#temparory_landmark').val());
				$('#permenant_city_id').val($('#temparory_city_id').val());
				$('#permenant_town').val($('#temparory_town').val());
				$('#permenant_pin').val($('#temparory_pin').val());
				$('#permenant_lan').val($('#temparory_lan').val());
				$('.permenant_fields').hide();
			}else{
				$('#permenant_address').val('');
				$('#permenant_country_id').val('');
				$('#permenant_state_id').val('');
				$('#permenant_landmark').val('');
				$('#permenant_city_id').val('');
				$('#permenant_town').val('');
				$('#permenant_pin').val('');
				$('#permenant_lan').val('');
				$('.permenant_fields').show();
			}
        });
    </script>
    	@endsection
</body>
</html>
