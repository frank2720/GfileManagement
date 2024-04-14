<div class="row-fluid">
    <!-- block -->
    <div class="block">
      <div class="navbar navbar-inner block-header">
        <div class="muted pull-left"><i class="icon-plus-sign icon-large">Registration Payment</i></div>
      </div>
      <div class="block-content collapse in">
        <div class="span12">
          <form method="post" action="{{route('registration.fee.store')}}">
            @csrf
            <div class="control-group">
              <div class="controls">
                <input class="input focused" name="fee" id="focusedInput" type="number" min="300" placeholder="Amount" required>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input class="input focused" name="trcode" id="focusedInput" type="text" placeholder="Transaction Code" required>
              </div>
            </div>




            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-info" id="save" data-placement="right" title="Click to Register"><i class="icon-plus-sign icon-large"> Register</i></button>
                <!--<script type="text/javascript">
                  $(document).ready(function() {
                    $('#save').tooltip('show');
                    $('#save').tooltip('hide');
                  });
                </script> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /block -->
  </div>

  <?php/*

   if (isset($_POST['save'])) {
     $firstname = $_POST['amount'];
     $lastname = $_POST['trcode'];
     mysqli_query($conn, "insert into tithe (Amount,Trcode,na) values('$firstname','$lastname','$session_id')") or die(mysqli_error());
   */?>
  <?php/*
   }

   */?>