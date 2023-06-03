
<html>  
    <head>  
        <title> PHP Form</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>  
    <body>  
        <div class="container" style="width: 600px">
   <br />
   
   <h3 align="center">Register Form</a></h3><br />
   <br />
   <div class="panel panel-default">
      <div class="panel-heading">Register Form</div>
    <div class="panel-body">
     
     <form action="register_process.php" method="post" id="captcha_form">
      <div class="form-group">
       <div class="row">
        <div class="col-md-6">
         <label>UserName <span class="text-danger">*</span></label>
         <input type="text" name="username" id="username" class="form-control" />
        
        </div>
       
       </div>
      </div>
      <div class="form-group">
       <label>Email Address <span class="text-danger">*</span></label>
       <input type="text" name="email" id="email" class="form-control" />
       
      </div>
      <div class="form-group">
       <label>Password <span class="text-danger">*</span></label>
       <input type="passwod" name="passwod" id="passwod" class="form-control" />
       <div class="form-group">
       <label>Name <span class="text-danger">*</span></label>
       <input type="name" name="name" id="name" class="form-control" />
       
      </div>
      </div>
      <div class="form-group">
       <div class="g-recaptcha" data-sitekey="6LfLRUkmAAAAAKZI4Qr1orKgrhAJ8-zGH-W3Q35S"></div>
      
      </div>
      <div class="form-group">
       <input type="submit" name="register" id="register" class="btn btn-success" value="Register" />
      </div>
     </form>
     
     
    </div>
   </div>
  </div>
    </body>  
</html>

<script>
$(document).on('click','#submit', function(){
var response = grecaptcha.getResponse();
if(response.length== 0){
	alert("Please verify you are not a robot"); 
	return false; }
});
</script>

