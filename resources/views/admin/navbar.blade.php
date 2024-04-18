
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
       <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </a>
            <span class="brand" href="#">{{config('app.name')}} {{__('Admin Panel')}}</span>
         </div>
          <!--.nav-collapse -->
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><img id="avatar1" class="img-responsive" src="/avatars/{{ Auth::user()->avatar??'1712834159.jpg' }}">&nbsp;{{Auth::user()->name}} <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                               <a tabindex="-1" href="change_password_admin.php"><i class="icon-cog"></i>&nbsp;Change Password</a>
                               <a tabindex="-1" href="#mymodal3" data-toggle="modal"><i class="icon-picture"></i>&nbsp;Change Picture</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a tabindex="-1" href="{{route('logout')}}" 
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="icon-signout"></i>
                                            &nbsp;
                                            Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
@include('admin.admin_change_picture')	