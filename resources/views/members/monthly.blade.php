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
                    @if (empty(json_decode($contributions)))
                        <div id="block_bg" class="block">
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <h2>You have 0 monthly contributions</h2>
                                </div>
                            </div>
                        </div>
                    @else
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Monthly contributions</div>
                        </div>
                        <div class="container-fluid">
                            <div class="row-fluid"> 
                            <div class="empty">
                                <div class="pull-right">
                                    <a href="" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print Monthly Contributions</a> 		      
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
                                            <th>Phone Number</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contributions as $contribution)
                                        <tr>
                                            <td width="30">
                                                <input id="optionsCheckbox" disabled class="uniform_on" name="selector[]" type="checkbox" value="<?php //echo $id; ?>">
                                            </td>
                                            <td>{{$contribution->user->name}}</td>
        
                                            <td>{{$contribution->amount}}</td>
                                            <td>{{$contribution->user->phone}}</td>
                                            <td>{{date_format($contribution->created_at,'d-m-Y h:i:sa')}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><strong>Total Monthly Contribution:</strong></td>
                                            @php
                                                $Tcontributions = json_decode($Tcontributions, true);
                                                $totalAmount = 0;
                                                foreach ($Tcontributions as $Tcontribution) {
                                                    $totalAmount += $Tcontribution['amount'];
                                                }
                                            @endphp
                                            <td><strong>Ksh {{number_format(intval($totalAmount))}}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                    @endif	 
                </div>
            </div>
        </div>
    </div>
@endsection