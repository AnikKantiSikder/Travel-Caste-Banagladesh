@extends('Frontend.Layouts.master')
	@section('content')

<style type="text/css">
    body{
        background-color: #dde0e2;
        height: auto;
    }
    .about{
        text-align: justify;
        margin-top: 40px;
        margin-bottom: 50px;
        background-color: white;
        color: black;
        padding: 20px;
        border: 1px solid white;
        border-radius: 5px;width: auto;
    }
</style>


    <div class="container about">
    	<div class="row">
    		<div class="col-md-12">
                <h1>About us</h1><hr>
    		    {{-- Introduction --}}
                    {{$aboutData->introduction}}
                     <br><br><br>
                    

                    <div class="row">
                        <div class="col-md-6">
                {{-- Service --}}
                            <b>The services are:</b><br>
                            <div class="row">
                                <div class="col-md-12">
                                    {{$aboutData->service}}
                                </div>
                            </div><br><br>
                {{-- Instruction --}}
                            <b>Tour profile</b><br>
                            <div class="row">
                                <div class="col-md-12">
                                    a. Create an account and maintain a profile. <br>
                                    b. Provide information about newly discovered place of Bangladesh <br>
                                    c. Share your visited experience. <br>
                                    d. POST and EDIT your post as many times as you want. <br>
                                    e. Organize tour with other members. <br>
                                </div>
                            </div><br><br>
                {{-- Enjoy --}}           
                            <b>You will enjoy:</b><br>
                            <div class="row">
                                <div class="col-md-12">
                                    o Access to numerous visitors. <br>
                                    o Travelers can rate your posts. <br>
                                    o Travelers can share their experience. <br>
                                </div>
                            </div><br><br>
                {{-- Conclusion --}}
                            <b>It will be an IDEAL TRAVEL PLANNER for the travelers. Because the travelers:</b><br>
                            <div class="row">
                                <div class="col-md-12">
                                    • Can discover many tourist places and rate them
                                </div>
                            </div>
                        </div>
                    </div>
    		</div>
    	</div>
    </div>

    @endsection