@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        @include('admin.sidebar')
        <div class="span3" id="addmembers">
            @include('admin.addmembers_form')
        </div>
        <div class="span6" id="">
            <div class="row-fluid">
                <!-- block -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
                <div id="block_bg" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left"></i><i class="icon-members"></i> Group members (s) List</div>
                        <div class="muted pull-right">
                            Number of group members: <span class="badge badge-info">{{$Tmembers}}</span>
                        </div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                    <thead>
                                        <tr>		        
                                            <th>Name</th>
                                            <th>Gender </th>
                                            <th>Date of Birth</th>
                                            <th>Date Joined</th>
                                            <th>Mobile No. </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($members as $member)
                                        <tr>
                                            <td>{{$member->user->name}}</td>
                                            <td>{{$member->user->gender}}</td>
                                            <td>{{$member->user->birthday}}</td>
                                            <td>{{$member->created_at}}</td>
                                            <td>{{$member->user->phone}}</td>
                                        </tr>
                                        @empty
                                            <h3>No registered members</h3>
                                        @endforelse
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
        </div>
    </div>
</div>
@endsection