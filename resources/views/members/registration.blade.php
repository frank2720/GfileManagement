@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            @include('members.sidebar')
            <div class="span3" id="adduser">
                @include('members.add_fee')		   			
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
                    
                    <?php/*	
                    $count_user=mysqli_query($conn,"select * from tithe Where na= '$session_id'");
                    $count = mysqli_num_rows($count_user);
                    */?>	 
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"></i><i class="icon-user"></i> Registered members</div>
                            <div class="muted pull-right">
                            Number of members: <span class="badge badge-info">8</span>
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
                                            <th>Registration Fee</th>
                                            <th>Phone Number</th>
                                            <th>Date Joined</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                
                                        <tr>
                                        <td width="30">
                                        <input id="optionsCheckbox" disabled class="uniform_on" name="selector[]" type="checkbox" value="<?php //echo $id; ?>">
                                        </td>
                                        <td><?php// echo $row['fname']; ?> <?php// echo $row['lname']; ?></td>

                                        <td><?php //echo $row['Amount']; ?></td>
                                        <td><?php// echo $row['Trcode']; ?></td>
                                        <td><?php //echo $row['paytime']; ?></td>
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