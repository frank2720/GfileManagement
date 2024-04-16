<div class="span3" id="sidebar">
  <img id="admin_avatar" class="img-circle" style="object-fit: cover" src="/avatars/{{ Auth::user()->avatar }}">

  <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
    <li class="active">
      <a href="{{route('home')}}"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a>
    </li>

    <!------/.* manage memberss sidebar*------->
    <li>
      <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs">
        <i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Manage Acount
        <div class="muted pull-right"><i class="caret"></i></div>
      </a>
      <ul id="bs" class="collapse">
        <li class="">
          <a href="Tithe.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>My Contributions</a>
        </li>

        <li>
          <a href="give.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Other Contributions
          </a>
        </li>

      </ul>
    </li>

    <!------/.* finance sidebar*------->
    <li>
      <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-globe"></i>&nbsp;Contributions
        <div class="muted pull-right"><i class="caret"></i></div>
      </a>
      <ul id="bs1" class="collapse">
        <li class="">
          <a href="Tithes.php"><i class="icon-chevron-right"></i><i class="icon-money"></i> Registration Fee</a>
        </li>
        <li class="">
          <a href="offering.php"><i class="icon-chevron-right"></i><i class="icon-money"></i> Monthly Contributions</a>
        </li>
        <li class="">
          <a href="giving.php"><i class="icon-chevron-right"></i><i class="icon-money"></i> Other Contributions</a>
        </li>
      </ul>
    </li>


    <!------/.* System Log sidebar*------->

    <li>
      <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs5"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Events & Birthdays
        <div class="muted pull-right"><i class="caret"></i></div>
      </a>
      <ul id="bs5" class="collapse">
        <li class="">
          <a href="events.php"><i class="icon-chevron-right"></i><i class="icon-trophy"></i> Upcoming Events</a>
        </li>
        <li class="">
          <a href="upcoming.php"><i class="icon-chevron-right"></i><i class="icon-calendar"></i> Birthdays </a>
        </li>
      </ul>
    </li>


  </ul>
  @include('members.search_form')
</div>