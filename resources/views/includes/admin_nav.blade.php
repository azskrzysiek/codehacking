<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Home</a>
    </div>
    <!-- /.navbar-header -->


{{-- Top navigation --}}
<div class="collapse navbar-collapse" id="navbar-collapse">
    <ul class="nav navbar-top-links navbar-right">


        <!-- /.dropdown -->
        
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user fa-fw"></i> 
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
            <!-- /.dropdown-user -->
       
        <!-- /.dropdown -->


    </ul>

    {{-- Admin side navigation --}}
   @include('includes.admin_side_nav')
    <!-- /.navbar-static-side -->
</nav>