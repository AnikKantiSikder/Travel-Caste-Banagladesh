@extends('Frontend.Layouts.master')



@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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

            <form method="POST" action="{{ route('customerprofiles.update') }}"
                enctype="multipart/form-data">
                @csrf
                
            <!-- Row 1 starts -->
                <div class="row">
                    <div class="col-md-4">

                        <div class="profile-img">
                            <img id="show_image" src="{{(!empty($editData->image))?url('public/Upload/User_images/'.$editData->image):url('public/Upload/no_image.png') }}"
                            style="height: 160px; width: 180px; border: 1px solid #000;" alt="User profile picture"> <br><br>

                            <input type="file" name="image" class="form-control" id="image"
                            style="margin-left:9vh;width: 23vh;">
                        </div>
                    </div>

                    <div class="col-md-6">
                      <div>
                        <a class="btn btn-secondary btn-sm" href="{{ route('customerprofiles.view')}}">
                            <i class="fa fa-user"></i>
                            My profile
                        </a>
                      </div><br>

                        <div class="profile-head">

                            <h5>
                                {{$editData->name}}
                            </h5>
                        <!-- For bio-------------------------------------------------- -->
                            <label for="formGroupExampleInput"><b>Bio</b></label>
                            <input type="text" name="bio" value="{{$editData->bio}}" class="form-control"
                                placeholder="Your bio">
                            <br><br>
                                  
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                <!-- Submit button of update profile -->
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success btn-block">Save changes</button>
                    </div>


                </div>
            <!-- Row 1 ends -->

            <!-- Row 2 starts -->
                <div class="row">

                  <div class="col-md-4">
                      <div class="profile-work">
                          <p>WORK LINK</p>

                          <label for="formGroupExampleInput"><b>Social media</b></label>

                          <input type="text" name="facebook" value="{{$editData->facebook}}" class="form-control"
                            placeholder="Facebook (Provide link)">
                          <br>
                          <input type="text" name="instagram" value="{{$editData->instagram}}" class="form-control"
                            placeholder="Instagram (Provide link)">
                          <br>
                          <input type="text" name="youtube" value="{{$editData->youtube}}" class="form-control"
                            placeholder="Youtube (Provide link)">
                          <br>

                          <label for="formGroupExampleInput"><b>Skills</b></label>
                          <textarea rows="4" name="skill" class="form-control">
                                {{$editData->skill}}
                          </textarea>
                          
                          <br>
                          
                      </div>
                  </div>


                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-8">
                                      <input type="text" name="name" value="{{$editData->name}}" class="form-control" placeholder="Edit name">
                                        <font style="color: red;">
                                            {{($errors->has('name'))?($errors->first('name')):''}}
                                        </font>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8">
                                      <input type="text" name="email" value="{{$editData->email}}" class="form-control" placeholder="Edit email">
                                        <font style="color: red;">
                                            {{($errors->has('email'))?($errors->first('email')):''}}
                                        </font>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="text" name="mobile" value="{{$editData->mobile}}" class="form-control" placeholder="Edit phone">
                                        <font style="color: red;">
                                            {{($errors->has('mobile'))?($errors->first('mobile')):''}}
                                        </font>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-8">
                                      <input type="text" name="address" value="{{$editData->address}}" class="form-control" placeholder="Edit address">
                                    </div>
                                </div><br>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-8">
                                       <input type="text" name="profession" value="{{$editData->profession}}" class="form-control" placeholder="Edit profession">
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Gender</label>
                                    </div>
                                    <div class="col-md-8">
                                    <select name="gender" class="form-control">
                                        <option value="">Select gender</option>
                                        <option value="Male" {{($editData->gender=="Male")?"selected":""}}>Male</option>
                                        <option value="Female" {{($editData->gender=="Female")?"selected":""}}>Female</option>
                                    </select>
                                    </div>
                                </div><br>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                  <div class="row">
                                      <div class="col-md-12">
                                        <label for="shortTitle">About yourself</label>
                                        <textarea rows="4" name="about" class="form-control">
                                            {{$editData->about}}
                                        </textarea>
                                        
                                      </div>
                                  </div>
                            </div>

                        </div>
                    </div>

                </div>
            <!-- Row 1 ends -->

            </form>


        </div>

@endsection
