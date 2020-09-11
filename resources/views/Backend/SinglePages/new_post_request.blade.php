            
@extends('Backend.Layouts.master')


@section('content')



            <!-- MAIN CONTENT-->
            <div class="main-content" >
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                        <div class="row">
                            <div class=" col-md-12 mx-auto">

                                
                                <a href="{{url('/home')}}" class="btn btn-success" style="float: right;">-Back</a><br><br>
                                <h2>New post request</h2>
                                <hr/>
                            </div>
                        </div>

                        
            <div class="row">
              <div class="col-md-12">
                  <table class="table table-responsive" style="margin-left: 250px;">
                    <tr>
                        <th>SL</th>
                        <th>Location name</th>
                        <th>Post by</th>
                        <th>Post date</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

          <!--Post 1-->
                    <tr>
                          <td>1</td>
                          <td>Cox'x bazar</td>
                          <td>Anik</td>
                          <td>20/3/2020</td>
                          <td></td>

                          <td>
                              <a href="#" class="btn btn-sm btn-info">View</a>
                              <a href="#" class="btn btn-sm btn-success">Accept</a>
                              <a href="#" class="btn btn-sm btn-danger">Reject</a>
                          </td>
                      </tr>
            <!--Post 2-->
                    <tr>
                          <td>2</td>
                          <td>Kuakata</td>
                          <td>Rakibul</td>
                          <td>20/3/2020</td>
                          <td></td>

                          <td>
                               <a href="#" class="btn btn-sm btn-info">View</a>
                              <a href="#" class="btn btn-sm btn-success">Accept</a>
                              <a href="#" class="btn btn-sm btn-danger">Reject</a>
                          </td>
                      </tr>
            <!--Post 1-->
                    <tr>
                          <td>3</td>
                          <td>Bandarban</td>
                          <td>Rahim</td>
                          <td>20/3/2020</td>
                          <td></td>

                          <td>
                               <a href="#" class="btn btn-sm btn-info">View</a>
                              <a href="#" class="btn btn-sm btn-success">Accept</a>
                              <a href="#" class="btn btn-sm btn-danger">Reject</a>
                          </td>
                      </tr>
            <!--Post 1-->
                    <tr>
                          <td>4</td>
                          <td>Srimangl</td>
                          <td>Karim</td>
                          <td>20/3/2020</td>
                          <td></td>

                          <td>
                               <a href="#" class="btn btn-sm btn-info">View</a>
                              <a href="#" class="btn btn-sm btn-success">Accept</a>
                              <a href="#" class="btn btn-sm btn-danger">Reject</a>
                          </td>
                      </tr>
         
              </table>
              </div>
            </div>
                        

                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->



@endsection