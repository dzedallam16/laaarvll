<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet"  href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/inscrire_client.css">

  </head>
<body>;
 
<script src="/js/bootstrap.bundle.min.js"h></script> 

<div class="container-fluid">
<div class="row">
	<div class="col-md-5">
 <img src="/image/insc.jpg" width="600" height="600"> 
</div>
<div class="col-md-6">
	<div class="row">
		 <form method="POST" action="nouveau_vendeur">
			<h3 class="text-left">Customer Registration Form</h3>
            
	<hr>
	<div class="row">
		<label class="label col-md-3 control-label">Name :</label>
		<div class="col-md-9">
			<input type="text" name="nom" class="form-control" placeholder="type your name" > </div>
		
        <label class="label col-md-3 control-label">First Name :</label>
		<div class="col-md-9">
			<input type="text" name="prenom" class="form-control" placeholder="type your first name " > </div>

	     <label class="label col-md-3 control-label">phone number :</label>
		<div class="col-md-9">
			<input type="text" name="num_tel" class="form-control" placeholder="type your phone number " > </div>

	     <label class="label col-md-3 control-label">address :</label>
		<div class="col-md-9">
			<textarea class="form-control" name="adresse" rows="2"> </textarea>
			 </div>

		<label class="label col-md-3 control-label">Email :</label>
		<div class="col-md-9">
			<input type="text" name="email" class="form-control" placeholder="type your e-mail " > </div>	

		<label class="label col-md-3 control-label">Pass word :</label>
		<div class="col-md-9">
			<input type="text" name="mdps" class="form-control" placeholder="type your pass word " > </div>	

		<button type="button" class="btn btn-outline-primary">Sent</button>
        <button type="button" class="btn btn-outline-primary">cancel</button>
	 
</div>
</div>
</div>

</body>
</html>