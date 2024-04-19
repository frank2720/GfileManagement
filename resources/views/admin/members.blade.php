@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        @include('admin.sidebar')
        <div class="span9" id="content">
             <div class="row-fluid">
                <!-- block -->
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
   <a href="print_members.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
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
                        <form action="delete_member.php" method="post">
                              <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                            <a data-placement="right" title="Click to Delete checked item" data-toggle="modal" href="#delete_member" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
                            <script type="text/javascript">
                             $(document).ready(function(){
                             $('#delete').tooltip('show');
                             $('#delete').tooltip('hide');
                             });
                            </script>
                            <?php// include('modal_delete.php'); ?>
                                <thead>		
    <tr>	
        <th>Check</th>		        
        <th>Name</th>
        <th>Gender </th>
        <th>Date of Birth</th>
        <th>Date Joined</th>
        <th>Mobile No. </th>           
    </tr>
</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
@forelse ($members as $member)
<tr>
    <td width="70">
        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="{{$member->id}}">
    </td>
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