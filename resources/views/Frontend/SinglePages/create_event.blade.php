@extends('Frontend.Layouts.master')



@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
    body{
    background: -webkit-linear-gradient(left, #78e4d0, #ace5da);
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
    {{-- Form starts here --}}
            <form method="#">

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('public/Frontend/image/a.jpg')}}" alt=""/>

{{--                             <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                Anik kanti sikder
                            </h5>
                            <h6>
                                Travel lover and blogger
                            </h6><br><br>
                            <h3><b>Create event</b></h3>
                            <br>
                        </div>
                    </div>

                {{-- Edit your profile --}}
                    <div class="col-md-2">

                  <a class="btn btn-secondary btn-sm float-right" href="{{ route('profiles.view')}}">
                    <i class="fa fa-user"></i>
                    My profile
                  </a>

                         {{-- class="profile-edit-btn" --}}

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Event name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="event_name" class="form-control" placeholder="Location name">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Division</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="division_name" class="form-control" placeholder="Division you want to go">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Location type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="location_type" class="form-control">
                                          <option value="">Select type</option>
                                          <option value="Sea beach">Sea beach</option>
                                          <option value="Hill tract">Hill tract</option>
                                          <option value="Historical">Historical</option>
                                          <option value="Religious">Religious</option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Details</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea rows="3" name="details" class="form-control"></textarea>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Number of day</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" name="number_of_day" class="form-control" placeholder="For how many days you want to go ">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Number of allowed members</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" name="number_of_members" class="form-control" placeholder="How many mebers you want to take in ">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Tour expense</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" name="expense" class="form-control" placeholder="Expanse per person">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Contact number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="event_name" class="form-control" placeholder="Your contact number">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="formGroupExampleInput">Upload photos</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                                    <div class="col-md-6">
                                        <img id="show_image"src="{{ asset('public/Upload/no_image.png') }}"style="height: 80px; width: 100px; border: 1px solid #000;" alt="User profile picture">
                                    </div>
                                </div><br>
                                  <div class="row">
                                    <div class="col-md-12">
                                    
                                          <a class="btn btn-success btn-smd float-right" href="">
                                            <i class="fa fa-create"></i>
                                            Create
                                          </a>
                                      </div>
                                  </div>
                                </div><br>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Form ends here --}}
            </form>           
        </div>

@endsection
