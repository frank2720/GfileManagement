@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        @include('admin.sidebar')
        <div class="span9" id="content">
            <div class="row-fluid">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <img id="avatar1" class="img-responsive" src="<?php// echo $row['adminthumbnails']; ?>"><strong> Welcome! <?php //echo $user_row['firstname']." ".$user_row['lastname'];  ?></strong>
              </div>
            </div>

              <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard </div>
                        <div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php //include('time.php'); ?></div>
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
                                <div class="huge"><?php //echo $student; ?></div>
                                <div>All members</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="membersDetail.php">							  
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
                                <div class="huge"><?php //echo $new;?></div>
                                <div>New members</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="add_members.php">							  
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
                                <div class="huge"><?php //echo $student; ?></div>
                                <div>Givings</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="giving.php">							  
                        <div class="modal-footer">
                            <span class="pull-left">Givings</span>
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
                                <div class="huge"><?php //echo $bd;?></div>
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
                                <div class="huge"><?php //echo $sum2; ?></div>
                                <div> Total Givings</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="giving.php">							  
                        <div class="modal-footer">
                            <span class="pull-left"> Totals Givings</span>
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
                                <div class="huge"><?php //echo $sum;?></div>
                                <div>Total Offering</div><br/>
                            </div>
                        </div>
                     </div>	
                    </div>
                    <a href="#">							  
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