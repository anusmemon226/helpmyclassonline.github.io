<footer>
	<div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                    <div class="logo footer-logo">
                        <img src="./logo-01.png" width="160px">
                    </div>
                </div>
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12 align-self-center">
                    <p class="fontopen ft_about">HelpMyClassOnline.com is by no means involved in any cheat services. Our services follow all standardized academic rules and regulations. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="header-bottom">
                        <div class="navigation">
                            <ul>
                                <li><a href="./contactus.php">Contact US</a></li>
                                <li><a href="./terms.php">Terms &amp; Conditions</a></li>
                                <li><a href="./onlinecourse.php">Online Course Help</a></li>
                                <li><a href="./onlineexam.php">Online Exam Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-10-40 b-bottom">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="contact_info">
                        <div class="ficon">
                            <img src="./icons/page-icon-07.png" class="ft-ic" width="40px" alt="">
                        </div>
                        <div class="info_detail">
                            <h5 class="fontopen">Email us</h5>
                            <a href="mailto:info@ABC.com">info@helpmyclassonline.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="contact_info">
                        <div class="ficon">
                           <img src="./icons/page-icon-08.png" width="40px" class="ft-ic" alt="">
                        </div>
                        <div class="info_detail">
                            <h5 class="fontopen">Local Phone</h5>
                            <a href="tel:+">+1 804 638 9990</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="contact_info">
                        <div class="ficon">
                            <img src="./icons/page-icon-09.png" width="40px" class="ft-ic" alt="">
                        </div>
                        <div class="info_detail">
                            <h5 class="fontopen">Click Here to</h5>
                            <a href="javascript:void(Tawk_API.toggle())">Chat with us!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="copyrights">
                        <p>Copyright © 2020 HelpMyClassOnline.com All Rights Reserved. Privacy & Security / <a href="./terms.php">Terms & Conditions</a></p>
                    </div>
                </div>
            </div>
        </div>
</footer> 
 
<!-- pop up -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <div class="form_head">
            <h4>sign up here</h4>
            <h3>discount for new comers</h3>
        </div>
        </div>
        <div class="modal-body ">
                <div class="bnn_right">
                     <div class="h_banner_form">
                          <form action="https://domyonlinecourses.com/code.php" method="post" onsubmit="return checkform(this);">
                         <div class="form-group">
                           <label class="fontopen">Name:</label>
                            <input type="text" name="h_name" placeholder="Enter Your Full Name" class="form-control" required="required" onkeypress="return Validate_name(event);">            
                         </div>
                         <div class="form-group">
                           <label class="fontopen">Email:</label>
                            <input type="email" name="h_email" placeholder="Enter Your Email Address" class="form-control" required="required" onkeypress="return Validate_email(event);">
                         </div>
                         <div class="form-group">
                           <label class="fontopen">Number:</label>
                            <input type="number" name="h_num" placeholder="Enter Your Phone Number" class="form-control" required="required" onkeypress="return Validate_number(event);">
                         </div>
                         <div class="form-group">
                            <button type="submit" class="h_b_btn" name="home_form">be in touch and call up</button>
                         </div>
                       </form>
                     </div>
           </div>
        </div>
        
      </div>
      
    </div>
  </div>
<!-- pop up -->
   
<script src="https://domyonlinecourses.com/js/bootstrap.min.js"></script>
<script src="https://domyonlinecourses.com/js/bootstrap-datepicker.min.js"></script>
<script src="https://domyonlinecourses.com/js/owl.carousel.js"></script>  
<script src="./app.js"></script>  

<script>

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>

<script>

function checkform2(theform){
var why = "";

if(theform.CaptchaInput2.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput2.value != ""){
if(ValidCaptcha(theform.CaptchaInput2.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha2").value = code;
document.getElementById("CaptchaDiv2").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha2').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput2').value);
if (str1 == str2){
return true;
}else{
return false;
}
}
function removeSpaces(string){
return string.split(' ').join('');
}
</script>

<!-- <script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 150) {
        $(".header").addClass("darkHeader");
    }
    else {
       $(".header").removeClass("darkHeader");
    }
});
</script> -->

<script>
	 $(document).ready(function() {
     $("#owl-demo").owlCarousel({
      autoplay: true,
      autoPlay: 5000, 
      items : 3,
	   itemsDesktop: [1000, 3],
       itemsDesktopSmall: [900, 3],
       itemsTablet: [600,1],
	  center: true,
      loop:true,
	  autoplayHoverPause:true,
	  martSpeed : 1200,
	 navigation : true,
		 
  });
 });
</script>
<script>
	 $(document).ready(function() {
     $("#owl-demo2").owlCarousel({
      autoplay: true,
      autoPlay: 5000, 
      items : 1,
	   itemsDesktop: [1000, 1],
       itemsDesktopSmall: [900, 1],
       itemsTablet: [600,1],
	  center: true,
      loop:true,
	  autoplayHoverPause:true,
	  martSpeed : 1200,
	 navigation : true,
		 
  });
 });
</script>

<script>
      $(window).load(function(){
        setTimeout(function() {
                $('#myModal').modal('show');
        }, 6000);
            });
</script>
