@extends('Frontend.Layouts.master')



@section('content')



<style type="text/css">
    body{
    background: -webkit-linear-gradient(left, #78e4d0, #ace5da);
    height: auto;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>

<div class="container emp-profile">

                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-img">
                            <img src="{{(!empty($userData->image))?url('public/Upload/User_images/'.$userData->image):url('public/Upload/no_image.png') }}"
                    style="height: 160px; width: 180px; border: 1px solid #000;" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="profile-head">
                            <h5>
                                {{$userData->name}}
                            </h5>
                            <h6>
                                {{$userData->bio}}
                            </h6><br><br>
                            <h3><b>Create event</b></h3>
                            <br>
                        </div>
                    </div>

                {{-- Edit your profile --}}
                    <div class="col-md-2">

                  <a class="btn btn-secondary btn-sm float-right" href="{{ route('customerprofiles.view')}}">
                    <i class="fa fa-user"></i>
                    My profile
                  </a>

                         {{-- class="profile-edit-btn" --}}

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Facebook</a><br/>
                            <a href="">Instagram</a><br/>
                            <a href="">Twitter</a>

                            <p>SKILLS</p>
                            <a href="">Photography</a><br/>
                            <a href="">Editing</a><br/>
                            <a href="">Writing</a><br/>

                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        {{-- Form starts --}}
                            <form method="post" action="{{ route('customer.store.event') }}"
                            enctype="multipart/form-data">
                                    @csrf
                <!--Event name-------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Event name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="event_name" class="form-control"
                                                placeholder="Write event or location name">
                                        <font color="red">
                                            {{
                                              ($errors->has('event_name'))?($errors->first('event_name')):''
                                            }}
                                        </font>
                                    </div>
                                </div><br>
                <!--Event date--------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Event date</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="event_date" class="form-control" placeholder="From... To....">
                                        <font color="red">
                                            {{
                                              ($errors->has('event_name'))?($errors->first('event_name')):''
                                            }}
                                        </font>
                                    </div>
                                </div><br>
                <!--Location type----------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Location type</label>
                                    </div>
                                    <div class="col-md-9">
                                       <select name="category_id" class="form-control">
                                        <option>Select category</option>
                                        @foreach ($categories as $category)
                                          <option value="{{$category->id}}">
                                            {{$category->name}}
                                          </option>
                                        @endforeach
                                      </select>
                                      <font color="red">
                                        {{
                                          ($errors->has('category_id'))?($errors->first('category_id')):''
                                        }}
                                      </font>
                                    </div>
                                </div><br>
                <!--Division----------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Division</label>
                                    </div>
                                    <div class="col-md-9">
                                       <select name="division_id" class="form-control">
                                        <option>Select division</option>
                                        @foreach ($divisionData as $division)
                                          <option value=" {{$division->id}}">
                                            {{$division->name}}
                                          </option>
                                        @endforeach
                                      </select>
                                      <font color="red">
                                        {{
                                          ($errors->has('division_id'))?($errors->first('division_id')):''
                                        }}
                                      </font>
                                    </div>
                                </div><br>
                <!--District------------------------------------------------------------------------------>   
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>District name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="district_name" class="form-control"
                                                placeholder="Write district name">
                                        <font color="red">
                                            {{
                                              ($errors->has('district_name'))?($errors->first('district_name')):''
                                            }}
                                        </font>
                                    </div>
                                </div><br>
                <!--Details------------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Event details</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea rows="3" name="details" class="form-control"></textarea>
                                        <font color="red">
                                        {{
                                          ($errors->has('details'))?($errors->first('details')):''
                                        }}
                                      </font>
                                    </div>
                                </div><br>

                <!--Suggestion------------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Suggestion</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea rows="3" name="suggestion" class="form-control"></textarea>
                                        <font color="red">
                                        {{
                                          ($errors->has('suggestion'))?($errors->first('suggestion')):''
                                        }}
                                      </font>
                                    </div>
                                </div><br>
                <!--Number of allowed numbers--------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Number of allowed members</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="no_members" class="form-control" placeholder="How many members you want to take in ">
                                        <font color="red">
                                        {{
                                          ($errors->has('no_members'))?($errors->first('no_members')):''
                                        }}
                                        </font>
                                    </div>
                                </div><br>
                <!--Tour cost------------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Cost</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="cost" class="form-control" placeholder="Cost per member">
                                        <font color="red">
                                        {{
                                          ($errors->has('cost'))?($errors->first('cost')):''
                                        }}
                                        </font>
                                    </div>
                                </div><br>
                <!--Contact number---------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Contact number</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="contact_number" class="form-control" placeholder="Your contact number">
                                        <font color="red">
                                        {{
                                          ($errors->has('contact_number'))?($errors->first('contact_number')):''
                                        }}
                                        </font>
                                    </div>
                                </div><br>
                <!--Upload photos----------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="formGroupExampleInput">Upload photos</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                    <div class="col-md-2">
                                        <img id="show_image"src="{{ asset('public/Upload/no_image.png') }}"style="height: 80px; width: 100px; border: 1px solid #000;" alt="User profile picture">
                                    </div>

                                    <div class="col-md-4">
                                      <label for="image">Select multiple</label>
                                      <input type="file" name="sub_image[]" class="form-control" multiple>
                                    </div>
                                </div><br>
                                  <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success" style="float:right;">
                                        <i class="fa fa-plus"></i>Create</button>
                                      </div>
                                  </div>
                            </form>
                                
                                </div><br>
                            </div>

                        </div>
                    </div>
                </div>
         
        </div>

@endsection
