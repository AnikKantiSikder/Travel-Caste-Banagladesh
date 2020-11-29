@extends('Frontend.Layouts.master')

@section('content')

<style type="text/css">
  .container{
    padding-top: 20px;
  }
</style>

<section class="bg-light page-section ok" id="exploreCard" style="margin-top: 50px;">
    <div class="container">
            <div class="row">
                <div class=" col-md-10 mx-auto">
                   <h2>
                     Event list
                   </h2>
                  <br><br>
                </div>

                <div class="col-md-2">
                  <a class="btn btn-secondary btn-sm float-right" href="{{ route('customerprofiles.view')}}">
                    <i class="fa fa-user"></i>
                    My profile
                  </a>
                </div>
            </div><br>

                    <table id="example1" class="table table-bordered table-hover" style="text-align: center;">
                      <thead>
                        <tr>
                          <th>SL.</th>
                          <th>Event name</th>
                          <th>Division</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>

                      @foreach ($allData as $key=> $customerEventData)
                      <tr>
                        <td> {{$key+1}} </td>

                        <td style="text-align: center;">{{$customerEventData->event_name}}</td>
                        <td style="text-align: center;">{{$customerEventData['division']['name'] }}</td>
                        <td>
                         <img src="{{(!empty($customerEventData->image))?url('public/Upload/Event_images/'.$customerEventData->image):
                         url('public/Upload/no_image.png') }}"
                         style="height: 60px; width: 100px; border: 1px solid #000;" alt="User profile picture">
                        </td>

                        <td>
                          <a title="Details" class="btn btn-sm btn-success"
                           href="{{ route('tour.event.details',$customerEventData->slug) }}">
                          <i class="fa fa-eye"></i></a>

                          <a title="Edit" class="btn btn-sm btn-info"
                           href="{{ route('customer.edit.event', $customerEventData->id) }}">
                          <i class="fa fa-edit"></i></a>
                          
                          <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                           href="{{ route('customer.delete.event', $customerEventData->id) }}">
                          <i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>

                </table>
            
      </div>
  </section>


@endsection
