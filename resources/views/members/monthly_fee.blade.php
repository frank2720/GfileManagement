<div class="row-fluid">
    <!-- block -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><i class="icon-plus-sign icon-large">Enter your Monthly Contributions</i></div>
      </div>
      <div class="block-content collapse in">
        <div class="span12">
          <form method="post" action="{{route('monthly.fee.store')}}">
            @csrf
            <div class="control-group">
              <div class="controls">
                <input class="input focused @error('fee') is-invalid @enderror" name="amount" id="focusedInput" type="text" placeholder="Amount">
              </div>
              @error('amount')
              <span class="invalid-feedback text-danger" role="alert">
                  <p style="color: red">{{ $message }}</p>
              </span>
              @enderror
            </div>
            <div class="control-group">
              <div class="controls">
                <input class="input focused @error('trcode') is-invalid @enderror" name="trcode" id="focusedInput" type="text" placeholder="Transaction Code">
              </div>
              @error('trcode')
              <span class="invalid-feedback" role="alert">
                  <p style="color: red">{{ $message }}</p>
              </span>
              @enderror
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-info" id="save" data-placement="right" title="Click to Register"><i class="icon-plus-sign icon-large"> Register</i></button>
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
  </div>