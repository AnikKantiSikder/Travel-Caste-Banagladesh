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
                <img src="{{asset('public/Frontend/image/a.jpg')}}" alt=""/>
            </div>
        </div>
        <div class="col-md-7">
            <div class="profile-head">
                <h5>
                    Anik kanti sikder
                </h5>
                <h6>
                    Travel lover and blogger
                </h6><br><br>
                <h3><b>Change your password</b></h3>
                <br>
            </div>
        </div>

        {{-- Edit your profile --}}
        <div class="col-md-2">

            <a class="btn btn-secondary btn-sm float-right" href="{{ route('customerprofiles.view')}}">
                <i class="fa fa-user"></i>
                My profile
            </a>

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

        <div class="col-md-9">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                {{-- Share experience(Customer) starts here --}}
                    <form method="post" action="">
                        @csrf
        <!--Current password----------------------------------------------------------------------------------> 
                        <div class="row">
                            <div class="col-md-3">
                                <label>Current password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="current_password" class="form-control"
                                        placeholder="Your current password">
                                <font color="red">
                                    {{
                                      ($errors->has('current_password'))?($errors->first('current_password')):''
                                    }}
                                </font>
                            </div>
                        </div><br>
        <!--New password-------------------------------------------------------------------------->
                        <div class="row">
                            <div class="col-md-3">
                                <label>New password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="new_password" class="form-control"
                                        placeholder="Your new password">
                                <font color="red">
                                    {{
                                      ($errors->has('new_password'))?($errors->first('new_password')):''
                                    }}
                                </font>
                            </div>
                        </div><br>
		<!--Confirm new password------------------------------------------------------------------->
                        <div class="row">
                            <div class="col-md-3">
                                <label>Confirm new password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="confirm_new_password" class="form-control"
                                        placeholder="Confirm new password">
                                <font color="red">
                                    {{
                                      ($errors->has('confirm_new_password'))?($errors->first('confirm_new_password')):''
                                    }}
                                </font>
                            </div>
                        </div><br>
        <!--Update------------------------------------------------------------------->
                        <div class="row">
                        	<div class="col-md-3"></div>
                        	<div class="col-md-9">
                        		<button type="submit" class="btn btn-md btn-success float-right">Update</button>
                        	</div>
                        </div>
                        
                    </form>
                {{-- Customer change password --}}
                </div><br>
            </div>
        </div>
    </div>
</div>

@endsection