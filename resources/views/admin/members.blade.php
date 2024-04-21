@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        @include('admin.sidebar')
        <div class="span9" id="content">
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
                        <div class="muted pull-left"><i class="icon-user"></i> Group Members</div>
                        <div class="muted pull-right">
                        Number of members: <span class="badge badge-info">{{$Tmembers}}</span>
                        </div>
                    </div>
                    <div class="container-fluid">
<div class="row-fluid"> 
<div class="empty">
 <div class="pull-right">        	   
 </div>
</div>
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
        <th></th>           
    </tr>
</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
@forelse ($members as $member)
<tr>
    <td>{{$member->user->name}}</td>
    <td>{{$member->user->gender}}</td>
    <td>{{$member->user->birthday}}</td>
    <td>{{$member->created_at}}</td>
    <td>{{$member->user->phone}}</td>
    <td>
        <a href="{{route('admin.edit.member',['id'=>$member->id])}}" class="btn btn-primary btn-sm">edit</a>
        <a href="{{route('admin.delete.member',['id'=>$member->id])}}" class="btn btn-danger btn-sm">delete</a>
    </td>
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