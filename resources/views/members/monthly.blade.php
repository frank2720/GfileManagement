@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            @include('members.sidebar')
            <div class="span3" id="adduser">
                @include('members.monthly_fee')		   			
            </div>
            <div class="span6" id="">
                <div class="row-fluid">
                    <!-- block -->	

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ session('success') }}
                        </div>
                    @endif	 
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Monthly contributions</div>
                            <div class="muted pull-right">
                            Months contributed: <span class="badge badge-info">2</span>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row-fluid"> 
                            <div class="empty">
                                <div class="pull-right">
                                    <a href="print_tithe.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List Contributions</a> 		      
                                    <script type="text/javascript">
                                    $(document).ready(function(){
                                    $('#print').tooltip('show');
                                    $('#print').tooltip('hide');
                                    });
                                    </script>        	   
                                </div>
                                </div>
                            </div> 
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                            <form action="delete_users.php" method="post">
                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Full Name</th>
                                            <th>Amount</th>
                                            <th>Account Used</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="30">
                                                <input id="optionsCheckbox" disabled class="uniform_on" name="selector[]" type="checkbox" value="<?php //echo $id; ?>">
                                            </td>
                                            <td>Name</td>
        
                                            <td>500</td>
                                            <td>some number</td>
                                            <td>23/4/2023</td>
                                        </tr>
                                
                                    </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
            </div>
        </div>
    </div>
@endsection