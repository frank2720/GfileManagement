@extends('admin.layouts.app')
@section('content')
        <div class="container-fluid">
            <div class="row-fluid">
				@include('admin.sidebar')
               <div class="span9" id="content">
                     <div class="row-fluid">
					
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><i class="icon-user"></i>&nbsp;Group member details update</div>							 
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">	
								 <div class="container-fluid">
                                    <div class="row-fluid">
									 <!----------------------form------------------->		
								    <form  method="post" action="{{route('admin.update.member',['id'=>$member->user->id])}}">
                                        @csrf
                                        @method('put')
										<div class="control-group">
                                            <p>
                                            <div class="controls">
                                              <p>
                                                  <input type="text" class="input focused" name="name" value="{{$member->user->name}}" placeholder="Full name">
                                                  @error('name')
                                                      <span class="invalid-feedback" role="alert">
                                                         <p style="color: red">{{ $message }}</p>
                                                      </span>
                                                  @enderror
                                              </p>
                                            </div>
                                          </div>
                                          </p>
                                          <div class="control-group">
                                            <p>
                                            <div class="controls">
                                              <p>
                                                  <input type="date" class="input focused" name="birthday" value="{{$member->user->birthday}}">
                                                  @error('birthday')
                                                      <span class="invalid-feedback" role="alert">
                                                         <p style="color: red">{{ $message }}</p>
                                                      </span>
                                                  @enderror
                                              </p>
                                            </div>
                                          </div>
                                          <div class="control-group">
                                            <p>
                                            <div class="controls">
                                              <p>
                                                <select class="input focused" name="gender" id="focusedInput" required="required" type="text">
                                                  <option value="{{$member->user->gender}}">{{$member->user->gender}}</option>
                                                  <option value="Male">Male</option>
                                                  <option value="Female">Female</option>
                                                  @error('gender')
                                                      <span class="invalid-feedback" role="alert">
                                                         <p style="color: red">{{ $message }}</p>
                                                      </span>
                                                  @enderror
                                                </select>
                                              </p>
                                            </div>
                                          </div>
                                          </p>
										<div class="control-group">
											<div class="controls">
											<button type="submit" class="btn btn-info"><i class="icon-save"></i> Update</button>
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