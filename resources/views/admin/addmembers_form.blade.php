<div class="row-fluid">
    <!-- block -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Add a member</i></div>
      </div>
      <div class="block-content collapse in">
        <div class="span12">
          <!--------------------form------------------->
          <form method="post" action="{{route('admin.create.member')}}">
            @csrf
            <div class="control-group">
              <p>
              <div class="controls">
                <p>
                    <input type="text" class="input focused" name="name" autofocus placeholder="Full Name">
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
                    <input type="text" class="input focused" name="phone" autofocus placeholder="Phone No.">
                    @error('phone')
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
                    <input type="date" class="input focused" name="birthday" autofocus>
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
                    <option value="" selected disabled>Select Gender</option>
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
              <p>
              <div class="controls">
                <p>
                    <input type="email" class="input focused" name="email" autofocus placeholder="Email address">
                    @error('email')
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
                    <input type="text" class="input focused" name="password" autofocus placeholder="Password Holder">
                    @error('password')
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
                    <input class="input focused @error('fee') is-invalid @enderror" name="fee" id="focusedInput" type="text" placeholder="Amount">
                    @error('fee')
                    <span class="invalid-feedback text-danger" role="alert">
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
                    <input class="input focused @error('trcode') is-invalid @enderror" name="trcode" id="focusedInput" type="text" placeholder="Transaction Code">
                    @error('trcode')
                    <span class="invalid-feedback text-danger" role="alert">
                        <p style="color: red">{{ $message }}</p>
                    </span>
                    @enderror
                </p>
              </div>
            </div>
            </p>
        </div>
  
  
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
            <script type="text/javascript">
              $(document).ready(function() {
                $('#save').tooltip('show');
                $('#save').tooltip('hide');
              });
            </script>
          </div>
        </div>
        </form>
  
      </div>
    </div>
  </div>
  <!-- /block -->