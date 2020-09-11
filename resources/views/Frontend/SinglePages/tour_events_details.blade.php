@extends('Frontend.Layouts.master')



@section('content')



<div class="row" style="text-align: center;padding-top: 40px;">
	<div class="col-md-12">
		<h3><b>Event:</b> Dhaka to Cox'x bazar</h3>
	</div>
</div>


<div class="container" style="padding-top:50px;padding-bottom: 300px;">
    <div class="row">
		<div class="col-md-6">

		   <h4><b>Location type:</b> Sea beach</h4>
		   <h4><b>Division:</b> Chittagong</h4>
		   <h4><b>Number of day:</b> 3 days and 4 nights</h4>
		   <h4><b>Number of members:</b> 20</h4>
		   <h4><b>Total expense:</b> 4700 taka</h4>
		   <h4><b>Details:</b></h4>
		   <p style="text-align: justify;">
		   	Cox’s Bazar is a town on the southeast coast of Bangladesh. It’s known for its very long, sandy beachfront, stretching from Sea Beach in the north to Kolatoli Beach in the south. Aggameda Khyang monastery is home to bronze statues and centuries-old Buddhist manuscripts. South of town, the tropical rainforest of Himchari National Park has waterfalls and many birds. North, sea turtles breed on nearby Sonadia Island
		   </p>
		   <h4><b>Contact to event manager:</b> 0177799423</h4>

		</div>

		<div class="col-md-6">
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