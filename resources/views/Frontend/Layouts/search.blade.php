
<!-- Search location -->

      <div class="jumbotron text-center" style="background-color: #137257;height: auto";>
        <h3 style="margin-bottom: 20px;color: white;">Search location</h3>

        <div class="barContainer">
            <div>
              <div class="d-flex justify-content-center h-100">

                <form method="post" action="{{ route('search.location') }}">
                  @csrf
                
                    <div class="row">

                      <div class="colmd-6">
                        <input type="text" name="slug" id="slug" placeholder="Location name...." autocomplete="off" style="width: 400px;height: 50px;border-radius: 20px;">
                      </div>

                      <div class="colmd-6">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-warning" style="border-radius: 20px;height: 50px;">Search</button>
                        </div>
                      </div>
                        
                    </div>

                </form>

              </div>

            </div>

            <div class="row">
              
                <div class="col-md-12" id="locationStatus" style="color: white;"></div>
              
            </div>
        </div>
      </div>

  <!-- Search location -->


  {{-- Script for search --}}

    <script type="text/javascript">
      
      $(document).ready(function(){
        $('#slug').keyup(function(){
          var slug= $(this).val();
          if(slug != ''){
            $.ajax({
              url: "{{ route('get.location') }}",
              type: "GET",
              data: {slug:slug},
              success: function(data){
                $('#locationStatus').fadeIn(),
                $('#locationStatus').html(data);
              }
            });
          }
        });
      });

      $(document).on('click','li', function(){
        $('#slug').val($(this).text());
        $('#locationStatus').fadeOut();
      });
    </script>