@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            @include('admin.sidebar')
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
                            <div class="muted pull-left"></i><i class="icon-user"></i> Registered members</div>
                            <div class="muted pull-right">
                            Number of members: <span class="badge badge-info">{{$TotalMembers}}</span>
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
                                
                                        @foreach ($members as $member)
                                            <tr>
                                                <td width="30">
                                                    <input id="optionsCheckbox" disabled class="uniform_on" name="selector[]" type="checkbox" value="<?php //echo $id; ?>">
                                                </td>
                                                <td>{{$member->user->name}}</td>
            
                                                <td>{{$member->fee}}</td>
                                                <td>{{$member->user->phone}}</td>
                                                <td>{{date_format($member->created_at,'d/m/Y')}}</td>
                                            </tr>
                                        @endforeach
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