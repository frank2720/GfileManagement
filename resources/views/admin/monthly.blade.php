@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        @include('admin.sidebar')
        <div class="span9" id="content">
             <div class="row-fluid">
             
              <script type="text/javascript">
              $(document).ready(function(){
              $('#add').tooltip('show');
              $('#add').tooltip('hide');
              });
             </script> 
             <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div> 
           <div id="block_bg" class="block">
                <div class="navbar navbar-inner block-header">
                     <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Members Monthly Contributions</div>
                  <div class="muted pull-right">
                         Number of Contributions<span class="badge badge-info">{{$Tmonthly_contr}}</span>
                     </div>
                  </div>                                   
<div class="container-fluid">
<div class="row-fluid"> 
<div class="empty">
 <div class="pull-right">
   <a href="print_tithe.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
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
<form action="" method="post">
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>		
        <tr>			        
            <th>Member Name </th>
            <th>Mobile No. </th>
            <th>Monthly Contribution</th>
            <th>Date & Time</th>
                
                   
                            
    </tr>
</thead>
<tbody>
<!-----------------------------------Content------------------------------------>

      
      @forelse ($monthly_contributions as $m_contribution)
      <tr>
        <td>{{$m_contribution->user->name}}</td>
        <td>{{$m_contribution->user->phone}}</td>
        <td>{{$m_contribution->amount}}</td>
        <td>{{$m_contribution->created_at}}</td>
      </tr>  
      @empty
          <h4>No contributions available</h4>
      @endforelse
</tbody>
</table>
</form>	

              
</div>
</div>
</div>
</div>
</div>

</div>
</div>
@endsection