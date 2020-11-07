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

            <form method="#">

            <!-- Row 1 starts -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('public/Frontend/image/a.jpg')}}" alt=""/><br><br>
<!--                             <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                        <input type="file" name="file" style="padding-left: 50px;">
                    </div>

                    <div class="col-md-6">
                      <div>
                        <a class="btn btn-secondary btn-sm" href="{{ route('profiles.view')}}">
                            <i class="fa fa-user"></i>
                            My profile
                        </a>
                      </div><br>
                        <div class="profile-head">

                                    <h5>
                                        Anik kanti sikder
                                    </h5>
                                    <label for="formGroupExampleInput">Bio</label>
                                    <input type="text" name="name" class="form-control" placeholder=""  >

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
                     <button type="submit" class="btn btn-md btn-success">Save changes</button>
                    </div>


                </div>
            <!-- Row 1 ends -->

            <!-- Row 2 starts -->
                <div class="row">

                  <div class="col-md-4">
                      <div class="profile-work">
                          <p>WORK LINK</p>

                          <label for="formGroupExampleInput"><b>Social media</b></label>
                          <input type="text" name="one" class="form-control" placeholder="One">
                          <br>
                          <input type="text" name="two" class="form-control" placeholder="Two">
                          <br>
                          <input type="text" name="three" class="form-control" placeholder="Three">
                          <br>

                          <label for="formGroupExampleInput"><b>Skills</b></label>

                          
                          <input type="text" name="one" class="form-control" placeholder="One">
                         <br>
                          <input type="text" name="two" class="form-control" placeholder="Two">
                          <br>
                          <input type="text" name="three" class="form-control" placeholder="Three">
                      </div>
                  </div>


                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" name="name" class="form-control" placeholder="Edit name">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" name="email" class="form-control" placeholder="Edit email">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>District</label>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" name="district" class="form-control" placeholder="Edit district">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="text" name="phone" class="form-control" placeholder="Edit phone">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Profession</label>
                                    </div>
                                    <div class="col-md-6">
                                       <input type="text" name="profession" class="form-control" placeholder="Edit profession">
                                    </div>
                                </div><br>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                  <div class="row">
                                      <div class="col-md-12">
                                        <label for="shortTitle">Detail description</label>
                                        <textarea rows="4" name="description" class="form-control"></textarea>
                                        
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
