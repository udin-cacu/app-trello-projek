<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App Progres List</title>
        <link type="text/css" href="{{ asset ('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset ('assets/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset ('assets/css/theme.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset ('assets/images/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
        <link href="/assets/bootstrap/js/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
        
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="/home">App Progres List </a>
                    <ul class="nav pull-right">
                        <li class="nav-user dropdown pull-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            @if(Auth::user()->role_id == 1)
                            <span class="mb-0 text-sm  font-weight-bold"><b>{{ Auth::user()->name }} </b></span>
                            @else
                            <span class="mb-0 text-sm  font-weight-bold"><b>{{ Auth::user()->name }} </b></span>
                            @endif
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Password</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}" class="dropdown-item menusxx"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">    
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </ul>
                  </li>
              </ul>
              
              <!-- /.nav-collapse -->
          </div>
      </div>
      <!-- /navbar-inner -->
  </div>
  
  
  