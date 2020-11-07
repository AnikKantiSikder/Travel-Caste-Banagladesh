@extends('Frontend.Layouts.master')



@section('content')

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
								<div class="item-slick3" data-thumb="public/Upload/Place_images/Place_sub_images/cox.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="public/Upload/Place_images/Place_sub_images/cox.jpg" alt="IMG-PRODUCT" style="height: 350px;width: 100%">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="public/Upload/Place_images/Place_sub_images/cox.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="public/Upload/Place_images/Place_sub_images/cox2.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="public/Upload/Place_images/Place_sub_images/cox2.jpg" style="height: 350px;width: 100%">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="public/Upload/Place_images/Place_sub_images/cox2.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="public/Upload/Place_images/Place_sub_images/cox3.jpg">
									<div class="wrap-pic-w pos-relative">
										<img src="public/Upload/Place_images/Place_sub_images/cox3.jpg" alt="IMG-PRODUCT" style="height: 350px;width: 100%">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="public/Upload/Place_images/Place_sub_images/cox3.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<b>Division:</b> Chittagong
						</h4>
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<b>Location type:</b> Sea beach
						</h4>
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<b>Details:</b>
						</h4>


						<p class="stext-102 cl3 p-t-23" style="text-align: justify;">
							Cox’s Bazar is a town on the southeast coast of Bangladesh. It’s known for its very long, sandy beachfront, stretching from Sea Beach in the north to Kolatoli Beach in the south. Aggameda Khyang monastery is home to bronze statues and centuries-old Buddhist manuscripts. South of town, the tropical rainforest of Himchari National Park has waterfalls and many birds. North, sea turtles breed on nearby Sonadia Island
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
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Google map</a>
						</li>

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#information" role="tab">Suggestion</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<div class="row">
									<div class="col-md-12">
										<img src="public/Upload/map.PNG" height="400px;">
									</div>
								</div>
							</div>
						</div>

						<!-- - -->
						<div class="tab-pane fade" id="information" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-10 m-lr-auto">
								<p style="text-align: justify;">
		   	                        A great beach vacation requires planning and packing for both good and bad weather activities, bringing essentials like sunglasses and suntan lotion with broad-spectrum UV protection, picking up a few things to make your stay easier, safer and more enjoyable, and—most importantly—bringing along a positive attitude and your sense of humor. Follow these tips to make sure you have a great time in the sun, sand, and surf!
		   						</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>




@endsection