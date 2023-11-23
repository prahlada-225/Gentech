<?php
   include('includes/header.php');
   ?>
<!-- Container Fluid -->
<div class="container-fluid inner_page">
   <div class="inner_heading">
      <p><a href="index.php">Home</a>&nbsp; / &nbsp; <a href="#">contact</a></p>
   </div>
</div>
<div class="inner_banner">
   <img src="images/managment-bg.png">
</div>
<div class="row contact_inner container">
            
                		<div class="col-sm-12 col-md-6">
    		    
    			<div class="contact_info">
                    <h2><b>GENTECH</b></h2>
                    <h3 class="head-info">AGRONATION</h3>
    				<br>
    				<ul class="contact_info">
    				    <li class="row">
    				        <span class="contact_svg"><i class="fa fa-map-marker-alt"></i></span>
    				    <span class="contact_txt">  # Plot No: 30, <br>
                          2nd Floar, SS Complex, <br>
                         Prashanth Nagar, Vanasthalipuram, Telangana.<br>
                          Hyderabad-500 070,  TS.
                         </span>
    				    </li>
    				    <li class="row">
    				        <a href="tel:+91 9154908311"><i class="fa fa-phone"></i>9154908311 </a>
    				  </li>
    				   <li class="row">
    				        <a href="tel:+91 040-2956499"><i class="fa fa-phone-square" aria-hidden="true"></i>040-2956499 </a>
    				  </li>
    				    <li class="row">
    				        <a href="mailto:info@medicurehospital.com"><i class="fa fa-envelope"></i>info@gentechagro.com</a>
    				     </li> 
    				 </ul> 
    				<h5><b><i>We would love to hear from you!</i></b></h5>
    				<form action="submit.php" method="post">
    				    <div class="form-group">
                          <input type="name" class="form-control" id="txtName" placeholder="Name*" name="name" required="">
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" id="txtEmail" placeholder="email*" name="email" required="">
                        </div>
                        <div class="form-group">
                          <input type="tel" class="form-control" id="txtPhone" placeholder="Phone Number*" name="phone" minlength="10" maxlength="10" required="">
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="message" placeholder="Message" rows="4" id="txtMessage"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      <div class="error-msg"> </div>
                      
    			</div>
    		</div>
    		<div class="col-sm-12 col-md-6">
          <div class="map_info">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d729951.9325145488!2d78.01201489991917!3d17.4535573752821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1635499331968!5m2!1sen!2sin" 
                  width="600" height="550" frameborder="0" style="border:1px solid #ccc; border-radius: 10px;" allowfullscreen=""></iframe>
                </div>
    		</div>
		</div>
</div>
<!--end Container Fluid -->
<?php
   include('includes/footer.php');
   ?>
</body>
</html>