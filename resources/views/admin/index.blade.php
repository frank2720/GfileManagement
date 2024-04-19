@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        @include('admin.sidebar')
        <div class="span9" id="content">
            <div class="row-fluid">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
              <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard </div>
                        <div class="muted pull-right"><i class="icon-time"></i>&nbsp;@include('members.time')</div>
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
                            <div class="span3"><br/>
                                <i class="fa fa-users fa-5x"></i><br/>
                            </div>
                            <div class="span8 text-right"><br/>
                                <div class="huge">{{$Tmembers}}</div>
                                <div>All members</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="{{route('admin.members')}}">							  
                        <div class="modal-footer">
                            <span class="pull-left">View Details</span>
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
                            <div class="span3"><br/>
                             <i class="fa fa-plus-circle  fa-5x" aria-hidden="true"></i><br/>
                            </div>
                            <div class="span8 text-right"><br/>
                                <div>Add Members & Create system account For New members</div>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="{{route('admin.add_members')}}">							  
                        <div class="modal-footer">
                            <span class="pull-left">Add member</span>
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
                            <div class="span3"><br/>
                             <i class="fa fa-money  fa-5x" aria-hidden="true"></i>
                            </div>
                            <div class="span8 text-right"><br/>
                                @php
                                    $Contributions = json_decode($MonthlyContributions,true);
                                    $totalContribution = 0;
                                    foreach ($Contributions as $Contribution) {
                                        $totalContribution += $Contribution['amount'];
                                    }
                                @endphp
                                <div class="huge">Ksh {{number_format($totalContribution)}}</div>
                                <div>Total Monthly Contributions</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="">							  
                        <div class="modal-footer">
                            <span class="pull-left">Monthly contributions</span>
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
                            <div class="span3"><br/>
                              <i class="fa fa-calendar  fa-5x"></i><br/>
                            </div>
                            <div class="span8 text-right"><br/>
                                <div class="huge">9</div>
                                <div>Current & Upcoming Birthdays</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="birthdays.php">							  
                        <div class="modal-footer">
                            <span class="pull-left">View Birthdays</span>
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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                      <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="span3"><br/>
                             <i class="fa fa-money  fa-5x" aria-hidden="true"></i>
                            </div>
                            <div class="span8 text-right"><br/>
                                @php
                                    $membershipFees = json_decode($TmembershipFee,true);
                                    $totalMemberFee = 0;
                                    foreach ($membershipFees as $memberFee) {
                                        $totalMemberFee += $memberFee['fee'];
                                    }
                                @endphp
                                <div class="huge">Ksh {{number_format($totalMemberFee)}}</div>
                                <div> Total Membership Fees</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="">							  
                        <div class="modal-footer">
                            <span class="pull-left"> Registrations</span>
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
                            <div class="span3"><br/>
                              <i class="fa fa-money  fa-5x"></i><br/>
                            </div>
                            <div class="span8 text-right"><br/>
                                <div class="huge">Ksh 0</div>
                                <div>Total of Other Contributions</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="">							  
                        <div class="modal-footer">
                            <span class="pull-left"></span>
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
                    </div>
                </div>
                <!-- /block --> 						
            </div>
            </div>
         
        </div>
    </div>
</div>
@endsection