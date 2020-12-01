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
                    <div class="row">
                        <div class="col-md-12">
                {{-- Introduction --}}
                            <h1>About us</h1><hr>
                            {{$aboutUs->introduction}}
                        </div>
                    </div><br><br>
                
                    <div class="row">
                        <div class="col-md-6">
                {{-- Service --}}
                            <b>The services are:</b><br>
                            <div class="row">
                                <div class="col-md-12">
                                    {{$aboutUs->service}}
                                </div>
                            </div><br><br>
                {{-- Instruction --}}
                            <b>Tour profile</b><br>
                            <div class="row">
                                <div class="col-md-12">
                                    {{$aboutUs->instruction}}
                                </div>
                            </div><br><br>
                {{-- Enjoy --}}           
                            <b>You will enjoy:</b><br>
                            <div class="row">
                                <div class="col-md-12">
                                   {{$aboutUs->enjoy}}
                                </div>
                            </div><br><br>
                {{-- Conclusion --}}
                            <b>It will be an IDEAL TRAVEL PLANNER for the travelers. Because the travelers:</b><br>
                            <div class="row">
                                <div class="col-md-12">
                                    {{$aboutUs->conclusion}}
                                </div>
                            </div>
                        </div>
                    </div>
    		</div>
    	</div>
    </div>

    @endsection