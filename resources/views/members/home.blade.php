@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        @include('members.sidebar')
        <div class="span9" id="content">
            <div class="row-fluid">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard </div>
                            <div class="muted pull-right"><i class="icon-time"></i>&nbsp; @include('members.time')</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <div class="block-content collapse in">
                                    <div id="page-wrapper">
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-money fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge">Ksh. {{__(number_format(300))}}</div>
                                                                    <div>Registration Fee</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="{{route('registrations')}}">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">Register Now</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
        
                                            <div class="span6">
                                                <div class="panel panel-green">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-money fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge">Ksh. {{__(number_format(2000))}}</div>
                                                                    <div>Monthly Contributions</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="offering.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">Contribute</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="page-wrapper">
                                        <?php/*
                                        $result2 = mysqli_query($conn, "select *, SUm(Amount) AS value_sum from giving where na='$session_id' ");
                                        $row = mysqli_fetch_assoc($result2);
                                        $sum2 = $row['value_sum'];

                                        */?>
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="panel panel-yellow">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-money fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge">700</div>
                                                                    <div>Other Contributions</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="giving.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">Contribute</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="panel panel-red">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-calendar  fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge">0</div>
                                                                    <div>Birthday Celebrations Today</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="events.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">View</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="page-wrapper">
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <div class="panel panel-green">
                                                    <div class="panel-heading">
                                                        <div class="container-fluid">
                                                            <div class="row-fluid">
                                                                <div class="span3"><br />
                                                                    <i class="fa fa-calendar fa-5x"></i><br />
                                                                </div>
                                                                <div class="span8 text-right"><br />
                                                                    <div class="huge">3</div>
                                                                    <div>Upcoming Events</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="events.php">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">View</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- /block -->
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
