@extends('Frontend.Layouts.master')

@section('content')

<style type="text/css">
	.eventName{
		text-align: center;
		padding-top: 40px;
	}
	.container{
		font-family: Arial, Helvetica, sans-serif;
		padding-top: 50px;
		height: auto;
	}
	.container h4{
		margin-bottom: 10px;
	}

</style>

<div class="row eventName">
	<div class="col-md-12">
		<h3><b>Event: </b>{{$event->event_name}}</h3>
	</div>
</div>


<div class="container">
    <div class="row" style="margin-bottom: 10vh;">
		<div class="col-md-6">
		   <h4><b>Organized by:</b>
		   	<a title="View profile" href="{{ route('blogger.profile.view',$eventBy->id) }}">
		   		{{$eventBy->name}}
		   	</a>
		   </h4>
		   <h4><b>Location type:</b> {{$event['category']['name']}}</h4>
		   <h4><b>Division:</b> {{$event['division']['name']}}</h4>
		   <h4><b>Date:</b> {{$event->event_date}}</h4>
		   <h4><b>Number of members:</b> {{$event->no_members}}</h4>
		   <h4><b>Cost per person:</b> {{$event->cost}} Tk.</h4>
		   <h4><b>Details:</b></h4>
		   <p style="text-align: justify;">
		   	{{$event->details}}
		   </p>
		   <h4><b>Contact to event manager:</b> {{$event->contact_number}}</h4>

		</div>

		<div class="col-md-6">
			<div class="row">
				@foreach ($event_sub_images as $img)
				<div class="col-md-6">
					<img class="" src="{{url('public/Upload/Event_images/Event_sub_images/'.$img->sub_image) }}" style="height: 200px;width: 100%;padding-bottom: 30px;">
				</div>
				@endforeach
				

			</div>
		</div>
	</div>	
</div>




@endsection