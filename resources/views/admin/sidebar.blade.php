


  <div class="span3" id="sidebar">
    <img id="admin_avatar" class="img-circle" src="/avatars/{{ Auth::user()->avatar??'1712834159.jpg' }}">

    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
      <li class="active">
        <a href="{{route('admin.home')}}"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a>
      </li>

      <!------/.* manage memberss sidebar*------->
      <li>
        <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Manage Members
          <div class="muted pull-right"><i class="caret"></i></div>
        </a>
        <ul id="bs" class="collapse">
          <li class="">
            <a href="membersDetail.php"><i class="icon-chevron-right"></i><i class="icon-user"></i> Member Details</a>
          </li>

          <li>
            <a href="add_members.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i> Add members
            </a>
          </li>

          <li>
            <a href="birthdays.php"><i class="icon-chevron-right"></i><i class="icon-calendar"></i> Birthdays
            </a>
          </li>
        </ul>
      </li>
      <!------/.* finance sidebar*------->
      <li>
        <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-money"></i>&nbsp;Contributions
          <div class="muted pull-right"><i class="caret"></i></div>
        </a>
        <ul id="bs1" class="collapse">
          <li class="">
            <a href="Tithes.php"><i class="icon-chevron-right"></i><i class="icon-money"></i>Registrations</a>
          </li>
          <li class="">
            <a href="addTithes.php"><i class="icon-chevron-right"></i><i class="icon-money"></i>Monthly Contributions</a>
          </li>
          <li class="">
            <a href="giving.php"><i class="icon-chevron-right"></i><i class="icon-money"></i>Other Contributions</a>
          </li>
          <li class="">
            <a href="offering.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i>Add Monthly Contribution</a>
          </li>
          <li class="">
            <a href="addoffering.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i>Add Other Contribution</a>
          </li>
        </ul>
      </li>

      <!------/.* manage System user sidebar*------->
      <li>
        <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;manage System User
          <div class="muted pull-right"><i class="caret"></i></div>
        </a>
        <ul id="bs2" class="collapse">

          <li class="">
            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;System User</a>
          </li>
        </ul>
      </li>

      <!------/.* System Log sidebar*------->
      <li>
        <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-warning-sign"></i>&nbsp;System log
          <div class="muted pull-right"><i class="caret"></i></div>
        </a>
        <ul id="bs3" class="collapse">
          <li class="">
            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-warning-sign"></i> Activity Log</a>
          </li>
          <li class="">
            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-warning-sign"></i> User Log</a>
          </li>
        </ul>
      </li>

      <li>
        <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs5"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Events manager
          <div class="muted pull-right"><i class="caret"></i></div>
        </a>
        <ul id="bs5" class="collapse">
          <li class="">
            <a href="events.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i> Add event</a>
          </li>
          <li class="">
            <a href="addResrveSlots.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign-alt"></i> Add Slots</a>
          </li>
          <li class="">
            <a href="upcoming.php"><i class="icon-chevron-right"></i><i class="icon-trophy"></i> Upcoming </a>
          </li>
        </ul>
      </li>
      <!------/.* notification sidebar*------->

      <!------/.* manage Report sidebar*------->
      <li>
        <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#mr">
          <i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Documents
          <div class="muted pull-right"><i class="caret"></i></div>
        </a>
        <ul id="mr" class="collapse">
          <li class="">
            <a href="Reservationreport.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>Meeting Reports</a>
          </li>

          <li>
            <a href="myReserve.php"><i class="icon-chevron-right"></i><i class="icon-laptop"></i> Project Reports
            </a>
          </li>

        </ul>
      </li>
      <li class="active">
        <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i><i class="icon-search icon-large"></i>&nbsp;Advance Search
          <div class="muted pull-right"><i class="caret"></i></div>
        </a>
        <ul id="bs4" class="collapse">
          <li>
            <a href="#mymodal" data-toggle="modal" tabindex="1"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;members</a>
          </li>

        </ul>
      </li>
    </ul>
    @include('admin.search_form')
  </div>