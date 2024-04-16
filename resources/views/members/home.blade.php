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
                                                                
                                                                @if ($member == 'Not registered')
                                                                    <div class=""><br />
                                                                        <div class="huge">Not Registered</div>
                                                                    </div>
                                                                @else
                                                                    <div class="span3"><br />
                                                                        <i class="fa fa-money fa-5x"></i><br />
                                                                    </div>
                                                                    <div class="span8 text-right"><br />
                                                                        <div class="huge">Ksh. {{$member->fee}}</div>
                                                                        <div>Registration Fee Paid</div><br />
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if ($member !== 'Not registered')
                                                    <a href="{{route('registered.members')}}">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">Registered</span>
                                                            <span class="pull-right"> See Members <i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                    @else
                                                    <a href="{{route('registrations')}}">
                                                        <div class="modal-footer">
                                                            <span class="pull-left">Register now</span>
                                                            <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </a>
                                                    @endif    
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
                                                                    @php
                                                                        $Tcontributions = json_decode($Tcontributions, true);
                                                                        $totalAmount = 0;
                                                                        foreach ($Tcontributions as $Tcontribution) {
                                                                            $totalAmount += $Tcontribution['amount'];
                                                                        }
                                                                    @endphp
                                                                    <div class="huge">Ksh. {{number_format(intval($totalAmount))}}</div>
                                                                    <div>Monthly Contributions</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="{{route('contribution.monthly')}}">
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
                                                                    <div class="huge">0</div>
                                                                    <div>Other Contributions</div><br />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="">
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
                                                    <a href="">
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
                                                    <a href="">
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
