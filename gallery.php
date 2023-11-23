<?php
   include('includes/header.php');
   ?>
   <style>
	   .row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}
.inner_content.mypadding h3 {
    padding: 10px;
    text-align: center;
    background: #0070b5;
    color: #fff;
}
   </style>
<!-- Container Fluid -->
<div class="container-fluid inner_page">
   <div class="inner_heading">
      <p><a href="index.php">Home</a>&nbsp; / &nbsp; <a href="#">gallery</a></p>
   </div>
</div>
<!-- <div class="inner_banner">
   <img src="images/managment-bg.png">
</div> -->
<div class="container-fluid inner_page">
		<div class="container">
		    <div class="inner_content mypadding">
		        <h3>Gallery</h3>


				<div class="row"> 
  <div class="column">
    <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/falls2.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/nature.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/mist.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="https://www.w3schools.com/w3images/underwater.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/ocean.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/mountainskies.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/underwater.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/falls2.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/nature.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/mist.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="https://www.w3schools.com/w3images/underwater.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/ocean.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/mountainskies.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
    <img src="https://www.w3schools.com/w3images/underwater.jpg" style="width:100%">
  </div>
</div>


		        	<!-- <div class="row">
	  <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
		   <div class="row h-50">
				  <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
							<div class="box">
						 <img src="images/img_01.png" class="img-ht img-fluid rounded">
							</div>
					</div>
			</div>
	  
	    <div class="row h-50">
				 <div class="col-md-6 col-sm-6 co-xs-12 gal-item h-100">
				  <div class="box">
					<img src="images/img_05.png" class="img-ht img-fluid rounded">
				</div>
				</div>

				<div class="col-md-6 col-sm-6 co-xs-12 gal-item h-100">
				 <div class="box">
					<img src="images/management.png" class="img-ht img-fluid rounded">
				</div>
				</div>
            </div>
      </div>
           <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
			   <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-25">
				<div class="box">
					<img src="images/img_02.png" class="img-ht img-fluid rounded">
				</div>
				</div>

				  <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-100">
				   <div class="box">
					<img src="images/img_04.png" class="img-ht img-fluid rounded">
				</div>
				</div>
            </div>
             <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
			   <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-100">
				<div class="box">
					<img src="images/img_07.png" class="img-ht img-fluid rounded">
				</div>
				</div>

				 
            </div>
            <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                <div class="row h-50">
		   <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
							<div class="box">
						 <img src="images/img_08.png" class="img-ht img-fluid rounded">
							</div>
					</div>
					</div>
      </div>
      </div> -->
		    <!--    <div class="row">-->
		    <!--        <div class="col-sm-12 col-md-8">-->
		    <!--            <div class="row">-->
		    <!--                <div class="col-sm-12 img_01">-->
		    <!--                 <img src="images/01.png">-->
		    <!--            </div>-->
		    <!--           <div class="col-sm-12 col-md-6">-->
		    <!--                <img src="images/02.png">-->
		    <!--           </div>-->
		    <!--           <div class="col-sm-12 col-md-6">-->
		    <!--               <img src="images/01.png">-->
		    <!--           </div>-->
		    <!--            </div>-->
		    <!--        </div>-->
		    <!--        <div class="col-sm-12 col-md-4">-->
		    <!--            <div class="name"><img src="images/02.png"></div>-->
		    <!--             <div class="name"><img src="images/02-->
		    <!--             .png"></div>-->
		    <!--    </div>-->
		        
		        
		    <!--</div>-->
		    
		</div>
	</div>
<!--end Container Fluid -->
<?php
   include('includes/footer.php');
   ?>
</body>
</html>