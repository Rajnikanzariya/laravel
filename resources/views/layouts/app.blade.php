<!DOCTYPE html>
<html  lang="en">
    <head>
        <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <meta name="msapplication-tap-highlight" content="no">
          <meta name="description" content="Mypandit">
          <meta name="keywords" content="Mypandit">
          <title>@yield('title')</title>

          

          <link href="{{asset('css/dataTables.material.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
          <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
          <link href="{{asset('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet">

        <!-- datatable css -->
         

          <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
          <script type="text/javascript" src="{{asset('js/dataTables.material.min.js')}}"></script>
         

          <!-- datatable js -->  
         
          
         
          <script src="{{asset('js/loader.js')}}"></script>
          
    </head>
    <style type="text/css">
    	.iscomplete
    	{
    		text-decoration: line-through;
    	}
    </style>
    <body class="loginbag">
            @yield('content')


        @yield('extrajs')
        <!-- START FOOTER -->
  @extends('layouts.footer')
    </body>
      @yield('extrastyle')

 
</html>