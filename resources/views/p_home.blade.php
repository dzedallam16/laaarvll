<! DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE-edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="/css/bootstrap.min.css" rel="stylesheet">

  <title>MY site web</title>
      <link rel="stylesheet" href="/css/styl.css">

</head>
<body>
  <script src="/js/bootstrap.bundle.min.js"></script>
	 	 <!--------------------------------navbar-------------------->
	 <div class="navbar navbar-expand-md bg-dark navbar-dark text-white">
	 <div class="container">

	 	<a href="#" class="navbar-brand">My site web</a>   
	 	    <button
	 	     class="navbar-toggler" type="button" 
	 	     data-bs-toggle="collapse" 
	 	     data-bs-target="#mainmenu">
	 	     	<span class="navbar-toggler-icon"></span>
	 	     </button>




         <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-auto">
                	<!---------------------search------>
                	<form action="/products" class='d-flex'>
                    <input type="text" name='search' placeholder='Search for a product' class='form-control'>
                    <input type="submit" value='Search' class='ml-2 btn btn-primary'>
                </form>
                <!---------------------bar----------->
                    <li class="nav-item"><a href="/Matriels" class="nav-link">Explore Now</a></li>
                    <li  class="nav-item"><a href="page_inscrire_client" class="nav-link">register</a></li> 

                    <!-----------------dropdown login-------------------->                                                           <li class="nav-item">
                    	<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <div class="btn-group" role="group">
    <button id="login" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Login
    </button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <li><a class="dropdown-item" href="page_login_admin">Admin</a></li>
            <li><a class="dropdown-item" href="page_login_vendeur">Vendor</a></li>
                  <li><a class="dropdown-item" href="page_login_client">Costumer</a></li>
    </ul>
  </div>
</div>

                         </li>

                           
                </ul>
            </div> 

	     </div>	
	 	 </div>



	 	 <!--------------------------------Hero-------------------->


     <section id="hero" class="bg-dark text-light text-center text-sm-start py-5">
     	<div class="container">
     		<div class="d-sm-flex align-items-center">
     			<div>
     				<h1>Let's <span class="text-primary">Shopping</span></h1>
     				<p>Shop from your home,Get it wherever you.<br>A price that fits your capabilities results will amaze y<br>u Try it for yourself now What are you waiting for ?!</p>
                        <form action="/Matriels" class='d-flex'>
     				 <input type="submit" value='Explore More'  class='ml-2 btn btn-primary'>


     				</div>
     				<img class="d-none d-sm-block img-fluid w-50" src="/image/hom.svg" alt="">
     		</div>
     	</div>
     </form>
     </section>
     <br>
     <br>
     <br>

	 	 <!--------------------------------About Us-------------------->


     <section id="hero" class="text-center text-sm-start py-5">
     	<div class="container">
     		<div class="d-sm-flex align-items-center">
     			<div>
     				<h1>About <span class="text-primary">Us</span></h1>
     				<p>Let's Shopping is the largest mall in the city with an<br> area of ​​20,000 square meters and is the preferred destination<br>for residents of the region and its neighboring areas..</p>
     				<form action="/aboutus" class='d-flex'>
                          <input type="submit" value='Read More' class='ml-2 btn btn-primary'>

     				</div>
     				<img class="d-none d-sm-block img-fluid w-50" src="/image/aboutus.svg" alt="">
     		</div>
     	</div>
     </section></form>
     <br><br><br>

<!----------------event----------------------->
<section class="events py-5 bg-primary text-white">
        <div class="container">
            <h1 class='text-center mb-4'>Events</h1>
          
              <div class="events">
                    <div class="card w-100 bg-transparent mb-2">
                      <div class="card-header">    </div>
                      <div class="card-body">      </div>
                      <div class="card-footer"><b>From : </b><span class='mx-4'>|</span> <b>To : </b>     </div>
                    </div>
               
              </div>
          
              <div class="alert alert-warning">No events for the moment</div>
           
        </div>
    </section>

     <!--------------------Contact Us--------------------->


     <section class="my-5">

  <div class="container">
    <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
          <p class="text-center">Contact us here</p>
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-9 mb-md-0 mb-5">

      <form>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form mb-0">
            	    <label for="contact-name" class="">Your name</label>
              <input type="text" id="contact-name" class="form-control">

            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6">
            <div class="md-form mb-0">
            	     <label for="contact-email" class="">Your email</label>
              <input type="text" id="contact-email" class="form-control">
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12">
            <div class="md-form mb-0">
            	       <label for="contact-Subject" class="">Subject</label>
              <input type="text" id="contact-Subject" class="form-control">
            </div>
          </div>

        </div>

          <!-- Grid column -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12">
            <div class="md-form">
                <label for="contact-Subject" class="">Your Mrssage</label>
              <textarea id="contact-message" class="form-control md-textarea" rows="3"></textarea>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </form>
<br>
   <form action="/" class='d-flex'>
     				 <input type="submit" value='Send' class='ml-2 btn btn-primary'>

       </div>

    </div>

    <br><br><br>
    <br><br>
    <br><br>







      <!----------footer---------->
       <div class="footer">
          <div class="container">
             <div class="row">
                 <div class="footer-col-2">
             <img src="../image/logo.jpg">
             <p>Shop from your home<br>Get it wherever you are</p>
                  </div>
              <div class="footer-col-2">
                  <h3>Rester of contact</h3>
                      <ul>
                  <li><i class="fa fa-phone"></i> 031 54 03 32</li>
                   <li><i class="fa fa-envelope"></i> Mysiteweb@gmail.com</li>
                     </ul>
                    </div>
               <div class="footer-col-2">
                  <h3>Nos Reseaux</h3>
                      <ul>
                  <li><i class="fa fa-facebook-square"></i> Facebbok</li>
                   <li><i class="fa fa-instagram"></i> Instagram</li>
                    <li><i class="fa fa-twitter-square"></i> twitter</li>
                     </ul>
                    </div>
             </div>
           <hr>
            <p class="Copyright">Copyright 2022 - WiamDounya</p>
          </div>
          </div>
    

</body>
</html>       