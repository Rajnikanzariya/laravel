<!-- Start Page Loading -->
<div id="loader-wrapper">
  <div id="loader"></div>        
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
  <!-- start header nav-->
  <div class="navbar-fixed">
      <nav class="navbar-color">
      <div class="nav-wrapper">
      <div class="col s12">
            <div class="row">
                <div class="input-field col s12 m4 l6 parent_id">
                  <ul class="left">                      
                    <li><h1>Demo</h1></li>
                  </ul>
                </div>
               
              </div>
          </div> 
      </div>      
    </nav>
  </div>

  <!-- end header nav-->
  <script>
    
    $(document).ready(function () {
      var url = '{{ url('/getusersdetail') }}';        
        $('#search').typeahead({
            source: function (query, result) {  
                $.ajax({
                    url:url,
                    data: {'_token':"{{ csrf_token() }}",str:query},            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {                       
                            result($.map(data, function (item) {
                              return item;
                        }));
                    }
                });
            }
        });
    });
</script>
</header>
<!-- END HEADER -->