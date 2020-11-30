@extends('Frontend.Layouts.master')
	@section('content')

<style type="text/css">
	.headerImage{
		background-image: url('public/Frontend/image/bg-01.JPG');
		height: 300px;
		width: 100%;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.headerImage h1{
		color: white;
		text-align: center;
		margin-top: 15vh;
	}
</style>

    <div class="container-fluid headerImage">
    	<div class="row">
    		<div class="col-md-12">
    			<h1>Contact us</h1>
    		</div>
    	</div>
    </div><br>

	<!-- Contact us Section -->
	<section class="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 39%;">Send us a Message</h3>

					@if (Session::get('success'))
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert">&times;</button>

								<strong>{{Session::get('success')}}</strong>
						</div>
					@endif

					<form method="post" action="{{ route('contact.store') }}">
						@csrf
						<div class="form-row" style="background: #ddd;">
							<div class="form-group col-md-6">
								<label for="name">Name <span style="color: red;font-weight: bold;">*</span></label>
								<input type="text" name="name" id="name" class="form-control" placeholder="Write Your Name" required>
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email <span style="color: red;font-weight: bold;">*</span></label>
								<input type="email" name="email" id="email" class="form-control" placeholder="Write Your Email" required>
							</div>
							<div class="form-group col-md-6">
								<label for="mobile_no">Mobile No <span style="color: red;font-weight: bold;">*</span></label>
								<input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Write Your Mobile No" required>
							</div>
							<div class="form-group col-md-6">
								<label for="address">Address <span style="color: red;font-weight: bold;">*</span></label>
								<input type="text" name="address" id="address" class="form-control" placeholder="Write Your Address" required>
							</div>
							<div class="form-group col-md-12">
								<label for="message">Message <span style="color: red;font-weight: bold;">*</span></label>
								<textarea name="msg" class="form-control" id="message" placeholder="Write Your Message" rows="5" required></textarea>
							</div>
							<div class="form-group col-md-6">
								<button type="submit" class="btn btn-primary">Send Message</button>
							</div>
						</div>
					</form>

				</div>
				<div class="col-md-5">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 49%;">Office Location</h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5164.509335522997!2d90.35901471703308!3d23.752386568414668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5c7d2ad32d%3A0x4ad0ef1f2366fe9e!2zS2FkZXJhYmFkIEhvdXNpbmcgU29jaWV0eSDgppXgpr7gpqbgp4fgprDgpr7gpqzgpr7gpqYg4Ka54Ka-4KaJ4Kac4Ka_4KaCIOCmuOCni-CmuOCmvuCmh-Cmn-Cmvw!5e0!3m2!1sen!2sbd!4v1605959167715!5m2!1sen!2sbd" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div><hr>
	</section>

    @endsection