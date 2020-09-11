            
@extends('Backend.Layouts.master')


@section('content')



            <!-- MAIN CONTENT-->
            <div class="main-content" >
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                    	<div class="row">
                    		<div class=" col-md-12 mx-auto">

                    			<a href="#" class="btn btn-info" style="float: right;">See all locations</a>
                    			<a href="{{url('/home')}}" class="btn btn-success" style="">-Back</a><br><br>
                    			<h2>Add new location</h2>
                                <hr/>
                    		</div>
                    	</div>

                    	
                    	<div class="row" style="font-family: sans-serif;">
                    		<div class="col-lg-8 col-md-10 mx-auto">
                    			<form action="#" method="" enctype="multipart/form-data">
                                @csrf

                                   <div class="control-group">
								        <div class="form-group floating-label-form-group controls">
								            <label><b>Location name</b></label>
								            <input type="text" class="form-control" placeholder="" 
								             name="title">
								        </div>
                                    </div>
                                   
                                    <div class="control-group">
							            <div class="form-group floating-label-form-group controls">
							              <label><b>Location type</b></label>
							              <select class="form-control" name="category_id" >

							                  <option value="">Historical</option>
							                  <option value="">Sea beach</option>
							                  <option value="">Hill track</option>
							                  <option value="">Religious</option>

							              </select>
							            </div>
                                    </div>
                                    
                                    <div class="control-group">
								            <div class="form-group floating-label-form-group controls">
								              <label><b>Description</b></label>
								              <textarea rows="2" class="form-control" placeholder=""  required name="description"></textarea>
								             
								            </div>
                                    </div>
                                    <div class="control-group">
								            <div class="form-group floating-label-form-group controls">
								              <label><b>Suggestion</b></label>
								              <textarea rows="2" class="form-control" placeholder=""  required name="description"></textarea>
								             
								            </div>
                                    </div>
                                    <div class="control-group">
									        <div class="form-group col-xs-12 floating-label-form-group controls">
									              <label>Image</label>
									              <input type="file" class="form-control" required name="image">
									            
									        </div>
                                    </div>
                                    <div class="control-group">
								            <div class="form-group floating-label-form-group controls">
								              <label><b>Nearby hotels</b></label>
								              <textarea rows="1" class="form-control" placeholder=""  required name="hotels"></textarea>
								             
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