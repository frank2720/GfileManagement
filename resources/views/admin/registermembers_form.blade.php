<div class="row-fluid">
    <!-- block -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Register System to be a Member</i></div>
      </div>
      <div class="block-content collapse in">
        <div class="span12">
          <!--------------------form------------------->
          <form method="post" action="{{route('admin.store.member')}}">
            @csrf
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
            <button type="submit" class="btn btn-info" id="save" data-placement="right" title="Click to Register"><i class="icon-plus-sign icon-large"> Register Member</i></button>
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