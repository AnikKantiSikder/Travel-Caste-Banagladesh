@extends('Frontend.Layouts.master')



@section('content')



<div class="row" style="text-align: center;padding-top: 40px;">
	<div class="col-md-12">
		<h3><b>Cox'x bazar</b></h3>
	</div>
</div>


<div class="container" style="padding-top:50px;padding-bottom: 300px;">
    <div class="row">
		<div class="col-md-6">


		   <h4><b>Division:</b> Chittagong</h4>
		   <h4><b>Location type:</b> Sea beach</h4>
		   <h4><b>Details:</b></h4>
		   <p style="text-align: justify;">
		   	Cox’s Bazar is a town on the southeast coast of Bangladesh. It’s known for its very long, sandy beachfront, stretching from Sea Beach in the north to Kolatoli Beach in the south. Aggameda Khyang monastery is home to bronze statues and centuries-old Buddhist manuscripts. South of town, the tropical rainforest of Himchari National Park has waterfalls and many birds. North, sea turtles breed on nearby Sonadia Island
		   </p>
		   <h4><b>Suggestion:</b></h4>
		   <p style="text-align: justify;">
		   	A great beach vacation requires planning and packing for both good and bad weather activities, bringing essentials like sunglasses and suntan lotion with broad-spectrum UV protection, picking up a few things to make your stay easier, safer and more enjoyable, and—most importantly—bringing along a positive attitude and your sense of humor. Follow these tips to make sure you have a great time in the sun, sand, and surf!
		   </p>

		</div>

		<div class="col-md-6">
			<h4 style="text-align: center;">Gallery</h4><hr>
			<div class="row">
				<div class="col-md-6">
					<img class="" src="{{ asset('public/Frontend/image/cox.jpg') }}" style="height: 200px;width: 100%;padding-bottom: 30px;">
				</div>
				<div class="col-md-6">
					<img class="" src="{{ asset('public/Frontend/image/cox1.jpg') }}" style="height: 200px;width: 100%;padding-bottom: 30px;">
				</div>
				<div class="col-md-6">
					<img class="" src="{{ asset('public/Frontend/image/cox2.jpg') }}" style="height: 200px;width: 100%;padding-bottom: 30px;">
				</div>
				<div class="col-md-6">
					<img class="" src="{{ asset('public/Frontend/image/cox3.jpg') }}" style="height: 200px;width: 100%;padding-bottom: 30px;">
				</div>

			</div>
		</div>
	</div>	
</div>




@endsection