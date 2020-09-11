            
@extends('Backend.Layouts.master')


@section('content')



            <!-- MAIN CONTENT-->
            <div class="main-content" >
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                    	<div class="row">
                    		<div class=" col-md-12 mx-auto">

                    			<a href="#" class="btn btn-info" style="float: right;">See all hotels</a>
                    			<a href="{{url('/home')}}" class="btn btn-success" style="">-Back</a><br><br>
                    			<h2>Add new hotels</h2>
                                <hr/>
                    		</div>
                    	</div>

                    	
                    	<div class="row" style="font-family: sans-serif;">
                    		<div class="col-lg-8 col-md-10 mx-auto">
                    			<form action="#" method="" enctype="multipart/form-data">
                                @csrf

                                   <div class="control-group">
								        <div class="form-group floating-label-form-group controls">
								            <label><b>Hotel name</b></label>
								            <input type="text" class="form-control" placeholder="" 
								             name="title">
								        </div>
                                    </div>
                                   
                                    <div class="control-group">
							            <div class="form-group floating-label-form-group controls">
							              <label><b>Hotel type</b></label>
							              <select class="form-control" name="category_id" >

							                  <option value="">Seven star</option>
							                  <option value="">Five star</option>
							                  <option value="">Three track</option>
							                  <option value="">Two star</option>

							              </select>
							            </div>
                                    </div>
                                    
                                    <div class="control-group">
								            <div class="form-group floating-label-form-group controls">
								              <label><b>Hotel details</b></label>
								              <textarea rows="2" class="form-control" placeholder=""  required name="description"></textarea>
								             
								            </div>
                                    </div>
                                    <div class="control-group">
								            <div class="form-group floating-label-form-group controls">
								              <label><b>Hotel location</b></label>
								              <textarea rows="2" class="form-control" placeholder=""  required name="description"></textarea>
								             
								            </div>
                                    </div>

                                    <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary" style="float: right;" >Save</button>
                                    </div>



                                </form>
                    		</div>
                    	</div>
                        

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->


@endsection