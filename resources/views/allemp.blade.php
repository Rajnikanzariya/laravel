 
@extends('layouts.app')

@section('extrastyle')
<style type="text/css">
body {
    background-color: #f9f9f9 !important;
}
#astro_list_wrapper .mdl-grid .dataTables_length select{
  display: block;
}

</style>
@endsection

@section('content')
@include('layouts.header')

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
<!-- START WRAPPER -->
<div class="wrapper">     
<!-- START CONTENT -->



<!-- START CONTENT -->
<style type="text/css">

</style>
            <section class="min_height" id="content">

                <div id="breadcrumbs-wrapper">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Employee Report</h5>
                      </div>
                    </div>
                  </div>
                </div>
            <!--breadcrumbs end-->
                <!--start container-->
                <div class="container">
                    <div class="section">
                  <p style="display:none;">{{ $id=0 }}</p>
                
                      <table id="user_list" class="responsive-table striped mdl-data-table" style="overflow-x: auto;">
                        <thead>
                          <tr>
                            <!-- <th>Sr. No.</th> -->
                            <!-- <th>User id</th> -->
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            
                          </tr>
                        </thead>  
                      <tbody>
                      @foreach ($userdetails as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->employee}}</td>
                        
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                    
                </div>
                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->
            
  </div>
  <!-- END WRAPPER -->
</div>
<!-- END MAIN -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#user_list').DataTable( {
       
      });
  });
</script>
@endsection

@section('extrajs')

@endsection
