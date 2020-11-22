@extends('Frontend.Layouts.master')

@section('content')

<style type="text/css">
	.anik h2{
		margin-top: 30px;
		color: black;
		font-family: Arial, Helvetica, sans-serif;
	}
</style>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12 txt-center anik">
					<h2>{{$location->location_name}}</h2><hr>
				</div>
			</div>
		</div>
	</section>
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">

							@foreach ($location_sub_images as $img)
								<div class="item-slick3"
								data-thumb="
								{{url('public/Upload/Location_images/Location_sub_images/'.$img->sub_image) }}">
									<div class="wrap-pic-w pos-relative">
										<img src="
										{{url('public/Upload/Location_images/Location_sub_images/'.$img->sub_image) }}" alt="IMG-PRODUCT" style="height: 350px;width: 100%">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{url('public/Upload/Location_images/Location_sub_images/'.$img->sub_image)}}">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							@endforeach

							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<b>Type:</b> {{$location['category']['name']}}
						</h4>
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<b>District:</b> {{$location->district_name}}
						</h4>
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<b>Division:</b> {{$location['division']['name']}}
						</h4>
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<b>Details:</b>
						</h4>
						<p class="stext-102 cl3 p-t-23" style="text-align: justify;">
							{{$location->description}}
						</p>
						
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">
								<b>Google map</b></a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">
								<b>Suggestion</b></a>
						</li>
						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#hotelinfo" role="tab">
								<b>Nearby hotels</b></a>
						</li>
					</ul>

			<!-- Tab panes -->
					<div class="tab-content p-t-43">
				<!-- Location view via google ma-------------------------------->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<div class="row">
									<div class="col-md-12">
										<div class="card-img-top" id="map" style="height:350px;margin-top: auto;"></div>
									</div>
								</div>
							</div>
						</div>
						<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=viewMap" async defer></script>
    
			              <script type="text/javascript">
			                function viewMap(){
			                    var bd = {
			                        lat: {{ $location->latitude }},
			                        lng: {{ $location->longitude }}
			                    };
			    
			                    var map = new google.maps.Map(document.getElementById('map'), {
			                        zoom: 10,
			                        center: bd
			                    });
			    
			                    var marker = new google.maps.Marker({
			                        position: bd,
			                        map: map,
			                    });
			                }
			              </script>
				<!-- Location view via google map-------------------------------->

				<!-- Suggestion- -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-10 m-lr-auto">
								<p style="text-align: justify;">
		   	                        {{$location->suggestion}}
		   						</p>
								</div>
							</div>
						</div>
				<!--Suggestion---------------------------------------------------->

				<!--Nearby hotels------------------------------------------------->
						<div class="tab-pane fade" id="hotelinfo" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-10 m-lr-auto">
									<p style="text-align: justify;">
						   	            @foreach ($hotels as $hotel)
				                           <b>Name: </b>{{$hotel->hotel_name}} | <b>Address: </b>{{$hotel->hotel_address}} |
				                           <b>Type: </b>{{$hotel->hotel_type}} <br>
				                        @endforeach
			   						</p>
								</div>
							</div>
						</div>
				<!--Nearby hotels---------------------------------------------->
					</div>
			<!-- Tab panes -->
				</div>
			</div>
		</div>
	</section>


@endsection