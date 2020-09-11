@extends('Frontend.Layouts.master')



@section('content')



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style type="text/css">
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 120px;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}

.control-group{
  margin-left: 200px;
}
.form-control{
  width: 600px;
}

</style>
</head>


<body>
<div class="container emp-profile">
            <div class="row">
                <div class=" col-md-12 mx-auto">
                  <div><span style="border: 3px solid  #5dade2;padding:2px;"><b>All post</b></span></div>
                  <a href="{{url('/my/profile')}}" class="btn btn-info" style="float: right;">-My profile</a>
                  <br><br>
                </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-12">
                  <table class="table table-responsive" style="margin-left: 250px;">
                    <tr>
                        <th>SL</th>
                        <th>Location name</th>
                        <th>Post date</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

          <!--Post 1-->
                    <tr>
                          <td>1</td>
                          <td>Cox'x bazar</td>
                          <td>20/3/2020</td>
                          <td></td>

                          <td>
                              <a href="#" class="btn btn-sm btn-info">Edit</a>
                              <a href="#" class="btn btn-sm btn-danger">Delete</a>
                              <a href="#" class="btn btn-sm btn-success">View</a>
                          </td>
                      </tr>
            <!--Post 2-->
                    <tr>
                          <td>2</td>
                          <td>Kuakata</td>
                          <td>18/2/2020</td>
                          <td></td>

                          <td>
                              <a href="#" class="btn btn-sm btn-info">Edit</a>
                              <a href="#" class="btn btn-sm btn-danger">Delete</a>
                              <a href="#" class="btn btn-sm btn-success">View</a>
                          </td>
                      </tr>
            <!--Post 1-->
                    <tr>
                          <td>3</td>
                          <td>Bandarban</td>
                          <td>10/1/2020</td>
                          <td></td>

                          <td>
                              <a href="#" class="btn btn-sm btn-info">Edit</a>
                              <a href="#" class="btn btn-sm btn-danger">Delete</a>
                              <a href="#" class="btn btn-sm btn-success">View</a>
                          </td>
                      </tr>
            <!--Post 1-->
                    <tr>
                          <td>4</td>
                          <td>Srimangl</td>
                          <td>25/1/2020</td>
                          <td></td>

                          <td>
                              <a href="#" class="btn btn-sm btn-info">Edit</a>
                              <a href="#" class="btn btn-sm btn-danger">Delete</a>
                              <a href="#" class="btn btn-sm btn-success">View</a>
                          </td>
                      </tr>
         
              </table>
              </div>
            </div>

                       
</div>
</body>
</html>




@endsection