@include('layout.head')

        <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        
                        <a class="brand" href="/home">{{$board->title}} </a>
          
        <div class="module">
           <div class="module-head">
             <h3>{{$board->title}}</h3>
           </div>
           <div class="row-fluid">
             <div class="span12">
                <div class="content">
                  <div class="btn-controls">
                    <div class="btn-box-row row-4">
                        <ul  class="btn-box small span3 widget widget-menu unstyled">
                            <h4>Data List</h4>
                            <li class="active"><a href="index.html"></i>Dashboard
                            </a></li>
                            <li class="active"><a href="index.html"></i>Dashboard
                            </a></li>
                            <li class="active"><a href="index.html"></i>Dashboard
                            </a></li>
                            <li class="active"><a href="index.html"></i>Dashboard
                            </a></li>
                            <li class="active"><a href="index.html"></i>Dashboard
                            </a></li>
                        </ul>
                         <ul  class="btn-box small span3 widget widget-menu unstyled">
                            <h4>Data List</h4>
                            <li class="active"><a href="index.html"></i>Dashboard
                            </a></li>
                        </ul>
                         <ul  class="btn-box samll span3 widget widget-menu unstyled">
                            <h4>Data List</h4>
                            <li class="active"><a href="index.html"></i>Dashboard
                            </a></li>
                        </ul>
                         <ul  class="btn-box samll span3 widget widget-menu unstyled">
                            <h4>Data List</h4>
                            <li class="active"><a href="index.html"></i>Dashboard
                            </a></li>
                        </ul>
                           
                    </div>

                        
                        <!-- /.nav-collapse -->
                    </div>
                </div>
                <!-- /navbar-inner -->
            </div>
        </div></div></div></div>
                           
@include('workspace.modal') 
@include('layout.footer')  
        