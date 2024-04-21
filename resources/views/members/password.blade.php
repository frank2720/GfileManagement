@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
       <div class="span9" id="content">
             <div class="row-fluid">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
                <div id="block_bg" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div id="" class="muted pull-left"><i class="icon-user"></i>&nbsp;Group member details update</div>							 
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">	
                         <div class="container-fluid">
                            <div class="row-fluid">
                             <!----------------------form------------------->		
                             <form  method="post" action="{{route('password.store')}}" class="form-horizontal">
                                @csrf
                                @method('put')
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">New Password</label>
                                    <div class="controls">
                                    <input type="password" name="password" placeholder="New Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <p style="color: red">{{ $message }}</p>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Re-type Password</label>
                                    <div class="controls">
                                    <input type="password" name="password_confirmation" placeholder="Re-type Password"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                    <button type="submit" class="btn btn-info"> Change Password</button>
                                    </div>
                                </div>
                            </form>
                                
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>
         </div>
        </div>
     </div>
</div>	                 	 
</div>
</div>	   
@endsection