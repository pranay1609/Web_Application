<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"></link>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></link>
    
    
  </head>
  <body>
      <input type="hidden" id="enteotp" value="<?=$enterotp?>">
   <div class="container height-100 d-flex justify-content-center align-items-center"> <div class="position-relative"> <div class="card p-2 text-center"> <h6>Please enter the one time password <br> to verify your account </h6> <div> <span>A code has been sent to</span> <small>*******9897</small> </div> <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="fifth" maxlength="1" /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" maxlength="1" /> </div> <div class="mt-4"> <button class="btn btn-danger px-4 validate" id="myForm">Validate</button> </div> </div> <div class="card-2"> <div class="content d-flex justify-content-center align-items-center"> <span>Didn't get the code</span> <a href="#" class="text-decoration-none ms-3">Resend(1/3)</a> </div> </div> </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
  </body>
</html>


<style>
    body{background-color:#94002d}.height-100{height:100vh}.card{width:400px;border:none;height:300px;box-shadow: 0px 5px 20px 0px #d2dae3;z-index:1;display:flex;justify-content:center;align-items:center}.card h6{color:red;font-size:20px}.inputs input{width:40px;height:40px}input[type=number]::-webkit-inner-spin-button, input[type=number]::-webkit-outer-spin-button{-webkit-appearance: none;-moz-appearance: none;appearance: none;margin: 0}.card-2{background-color:#fff;padding:10px;width:350px;height:100px;bottom:-50px;left:20px;position:absolute;border-radius:5px}.card-2 .content{margin-top:50px}.card-2 .content a{color:red}.form-control:focus{box-shadow:none;border:2px solid red}.validate{border-radius:20px;height:40px;background-color:red;border:1px solid red;width:140px}
</style>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
  
  function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput();

    
});
</script>
<script>
    
    $('#myForm').click(function() {
    
    // get all the inputs into an array.
    var $inputs = $('input');
    var generateotp=$('#enteotp').val();
    var email=$('#enteotp').val();

    // not sure if you wanted this, but I thought I'd add it.
    // get an associative array of just the values.
    // var values = {};
    // $inputs.each(function() {
    //     values[this.name] = $(this).val();
    // });
    var values = $("input[type='text']")
              .map(function(){return $(this).val();}).get();
              
              var enterotp=values.toString();
              enterotp= parseFloat(enterotp.replace(/,/g, ""));
          if(generateotp!=enterotp){
              alert("Enter Valid OTP");
          }else{
              window.location.href = "<?=base_url('homecontroller/resetpassword/'.utf8_encode($email))?>";
              
          }
   

});
</script>