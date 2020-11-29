@extends('Frontend.Layouts.master')

@section('content')


<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
    body{
    background: -webkit-linear-gradient(left, #78e4d0, #ace5da);
    height: auto;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 12%;
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
            <form>
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
                                    {{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn primary"
                                    href="{{ route('customer.add.post') }}" role="tab" aria-controls="profile" aria-selected="false">Share experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn"
                                    href="{{ route('customer.create.event') }}" role="tab" aria-controls="profile" aria-selected="false">Create event</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn"
                                    href="{{ route('customer.change.password') }}" role="tab" aria-controls="profile" aria-selected="false">Change password</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                {{-- Edit your profile --}}
                    <div class="col-md-2">

                  <a class="btn btn-secondary btn-sm float-right" href="{{ route('customerprofiles.edit')}}">
                    <i class="fa fa-user"></i>
                    Edit profile
                  </a>

                         {{-- class="profile-edit-btn" --}}

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="profile-work">

                            <p style="color: green;"><b>WORK LINK</b></p>
                            <a href="{{$userData->facebook}}" target="_black">Facebook</a><br/>
                            <a href="{{$userData->instagram}}" target="_blank">Instagram</a><br/>
                            <a href="{{$userData->youtube}}" target="_blank">Youtube</a>
                            <br>

                            <p style="color: green;"><b>SKILLS</b></p>
                            <p style="text-align: left;font-size: 14px;">{{$userData->skill}}</p>

                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{$userData->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{$userData->email}}</p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{$userData->mobile}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{$userData->address}}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{$userData->profession}}</p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-9">
                                                <p>Male</p>
                                            </div>
                                        </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            {{-- See all posts of customer --}}
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Total posts</label>
                                    </div>
                                    <div class="col-md-3">
                                        <span style="border: 3px solid black;padding:3px;">
                                            {{$postCount}}
                                        </span>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="btn btn-success" href="{{ route('posts.view') }}" style="width: 20vh;">
                                        View your posts</a>
                                    </div>
                                </div><br>
                                {{-- Customer's events --}}
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Running events</label>
                                    </div>
                                    <div class="col-md-3">
                                        <span style="border: 3px solid black;padding:3px;">
                                            {{$eventCount}}
                                        </span>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="btn btn-success" href="{{ route('events.view') }}" style="width: 20vh;">
                                        View your events</a>
                                    </div>
                                </div>
                            {{-- See all posts of customer --}}
                              <div class="row">
                                  <div class="col-md-12">
                                      <label>About yourself</label><br/>
                                      <p style="text-align: justify;">
                                            {{$userData->about}}        
                                        </p>
                                  </div>
                              </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>           
        </div>

@endsection
