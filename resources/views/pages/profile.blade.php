 @extends('layouts.master-student-side')

 @section('stylesheets')
 
 <link rel="stylesheet" href="css/profile.css">

 @endsection

 @section('content')

 <div class="row profile" style="padding-top: 1cm">

  <div class='col-md-1'>

  </div>
  <div class='col-md-8 well'>
     <div class="profile-userpic">
          <img src="img/anonymous.png" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
            Name: Mahbub Alam<br>
            Student ID: 1205063<br>
            Dept: CSE<br>
            Level: 3<br>
            Term: 2<br>
            Resident Status: Resident<br>
            Room No: 1002<br>
            Permanent Address:<br>
            permanent address here.
          </div>
        
        </div>
        
        <div class="profile-userbuttons">
          <button type="button" class="btn btn-success btn-sm">Edit Profile</button>
          
        </div>
      


   
      <!-- <script src='https://js.stripe.com/v2/' type='text/javascript'></script> 
      <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post">
         <div style="margin:0;padding:0;display:inline">
          <input name="utf8" type="hidden" value="✓" />
          <input name="_method" type="hidden" value="PUT" />
          <input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" />
        </div>
        

        <div class='form-row'>
          <div class='col-xs-12 form-group'>

            <label class='control-label'>Fee Type</label>
            <select class="form-control">
              <option value="one">Mess Charge</option>
              <option value="two">Hall Admission Fee</option>
              <option value="three">Hall Attachment Fee</option>
              <option value="four">Hall Residency Fee</option>
              <option value="five">Others</option>
            </select>
          </div>
        </div>

        <div class='form-row'>
          <div class='col-xs-12 form-group'>
            <label class='control-label'>Amount</label>
            <input autocomplete='off' class='form-control' size='20' type='text'>
          </div>

        </div>
        <div class='form-row'>
          <div class='col-xs-12 form-group'>
            <label class='control-label'>Payment Date</label>
            <input class="datepicker form-control" size='20' type='text'>
          </div>

        </div>


        
        
        




        <div class='form-row'>
          <div class='col-xs-12 form-group'>
            <label class='control-label'>Bank Scroll Number</label>
            <input autocomplete='off' class='form-control' size='20' type='text'>
          </div>

        </div>





        <div class='form-row'>
          <div class='col-xs-12 form-group'>
           <hr class="featurette-divider"></hr>
         
           <div class='error form-group hide'>
            <div class='alert-danger alert'>
              Please correct the errors and try again.

            </div>
          </div>

          <button class='form-control btn btn-primary submit-button' type='submit'> Submit</button>

        </div>
      </div>


    </form> -->
  </div>  
</div>

<div class='col-md-2'>

</div>
</div>
</div>
</div>
<br>
@endsection

@section('scripts')
<script src="js/bootstrap-datepicker.js"> </script>
<script> 
  $(function(){
    $('.datepicker').datepicker()
  });
</script>
@endsection