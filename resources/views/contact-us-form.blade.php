
<div class="for-space">
</div>
<div class="work-main top-heading-common main-heading-common">
  <h4>START</h4>
  <h1 class="headind">Work with Us</h1>
  
</div>
<div class="contact">
 <form id="submit-form1" method="post">

  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      <div class="group contact-input">
        <input type="text" class="active-common required" id="fname" name="firstname" required><span class="highlight"></span><span class="bar"></span>
        <label>First Name*</label>
        <span id="error-msgf" class="error-span">Please Complete This Mandatory Field</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="group contact-input">
        <input type="text" class="active-common required" id="lname" name="lastname" required><span class="highlight"></span><span class="bar"></span>
        <label>Last Name*</label>
        <span id="error-msgl" class="error-span">Please Complete This Mandatory Field</span>
      </div>  
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      <div class="group contact-input">
        <input type="email" class="active-common required" id="email" name="email" required><span class="highlight"></span><span class="bar"></span>
        <label>Email*</label>
        <span id="error-msge" class="error-span">Please Complete This Mandatory Field</span><br>
        <span id="email-error-msge" class="error-span">Email Formate Incorrect</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="group contact-input">
        <input type="text" class="active-common required" id="phone" name="phone" required><span class="highlight"></span><span class="bar"></span>
        <label>Phone*</label>
        <span id="error-msgp" class="error-span">Please Complete This Mandatory Field</span>
      </div>  
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-md-offset-2">
      <div class="group contact-input">
        <input type="text" class="active-common required" id="company" name="companyname" required><span class="highlight"></span><span class="bar"></span>
        <label>Company Name*</label>
        <span id="error-msgc" class="error-span">Please Complete This Mandatory Field</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="group contact-input">
        <div class="drop-icon"></div>
        <select class="dropdownindus active-common required" id="dropdown" name="industry" required>
         <option value="" disabled="" selected="" hidden=""></option>
         <option value="" disabled>Company type</option>
         <option value="Startup-Early Stage">Startup-Early Stage</option>
         <option value="Startup-Late Stage">Startup-Late Stage</option>
         <option value="Enterprise">Enterprise</option>
         <option value="Non-profit">Non-profit</option>
         <option value="Other">Others</option>
       </select><span class="highlight"></span><span class="bar"></span>
       <label>Company Type*</label>
       <span id="error-msgs" class="error-span">Please Complete This Mandatory Field</span>
     </div>  
   </div>
 </div>

 <div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="group contact-input">
      <textarea class="active-common required" id="message" name="msg" required></textarea><span class="highlight"></span><span class="bar"></span>
      <label>Message*</label>
      <span id="error-msgm" class="error-span">Please Complete This Mandatory Field</span>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-8 col-md-offset-2">
   <div class="get-estimate" id="submit1">GET STARTED</div>
 </div>
</div>

</form>
</div>

<script type="text/javascript">
  $(window, document, undefined).ready(function() {

// input
$('input').blur(function() {
  var $this = $(this);
  if ($this.val())
  {
    $this.addClass('used');
  }
  else
  {
    $this.removeClass('used');
  }
      // input validation
      var id = this.id;
      switch (id) { 
        case 'fname': 
        if ($this.val()=="")
        {
          $('#error-msgf').css("visibility", "visible");
        }
        else
        {
          $('#error-msgf').css("visibility", "hidden");;
        }
        break;
        case 'lname': 
        if ($this.val()=="")
        {
          $('#error-msgl').css("visibility", "visible");
        }
        else
        {
          $('#error-msgl').css("visibility", "hidden");;
        }
        break;
        case 'email': 
        if ($this.val()=="")
        {
          $('#error-msge').css("visibility", "visible");
          $('#email-error-msge').css("visibility", "hidden");
        }
        else
        {
          $('#error-msge').css("visibility", "hidden");
          
          if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($this.val()))  
          {  
            // return (true)  
            $('#email-error-msge').css("visibility", "hidden");
          }  
          else
          {
            $('#email-error-msge').css("visibility", "visible");
            return (false)  
          }
        }
        break;
        case 'phone': 
        if ($this.val()=="")
        {
          $('#error-msgp').css("visibility", "visible");
        }
        else
        {
          $('#error-msgp').css("visibility", "hidden");;
        }
        break;
        case 'company': 
        if ($this.val()=="")
        {
          $('#error-msgc').css("visibility", "visible");
        }
        else
        {
          $('#error-msgc').css("visibility", "hidden");;
        }
        break;

      }
    });
// textarea
$('textarea').blur(function() {
  var $this = $(this);
  if ($this.val())
    $this.addClass('used');
  else
    $this.removeClass('used');
      // validation
      if ($this.val()=="")
      {
        $('#error-msgm').css("visibility", "visible");
      }
      else
      {
        $('#error-msgm').css("visibility", "hidden");;
      }
    });
// dropdown
$('.dropdownindus').blur(function() {
  var $this = $(this);
  if ($this[0].selectedIndex > 0)
    $this.addClass('used');
  else
    $this.removeClass('used');
      // validation
      if ($this.val() == null)
      {
        $('#error-msgs').css("visibility", "visible");
      }
      else
      {
        $('#error-msgs').css("visibility", "hidden");;
      }
    });


// that is for form submition
$("#submit1").click(function(){

  if(CheckRequired())
  {
    document.getElementById('submit-form1').submit();
  }

});

function CheckRequired() {
  var $form = $("#submit-form1");

  if ($form.find('.required').filter(function(){ return this.value === '' }).length > 0) {
    return false;
  }

  return true;
}


});
</script>


<?php

if ( !empty($_POST) ) {
  submitcontactform();
}
function submitcontactform() {

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $company = $_POST["companyname"];
  $industry = $_POST["industry"];
  $msg = $_POST["msg"];
  $to = "services@brainxtech.com";
  $subject = "Project Info submitted by [".$company."]";
  $txt = "First Name: ".$firstname."\n Last Name: ".$lastname."\n Phone: ".$phone."\n Industry: ".$industry."\n Message: ".$msg;
  $headers = "From:".$email;

  $result = mail($to,$subject,$txt,$headers);
  if ($result == true) {
    echo "<script> alert('Your Request submitted successfully! Thank You') </script>";
  }
}


?>