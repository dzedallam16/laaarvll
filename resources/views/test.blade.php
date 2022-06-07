<!DOCTYPE html>
<html lang="en">
<head>
       <link rel="stylesheet"  href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/inscrire_vendeur.css">

  </head>
<body>;

<script src="/js/bootstrap.bundle.min.js"h></script> 
<div class="container-fluid">
<div class="row">



  <div class="col-md-5"> <img src="/image/kkkl.jpg" width="600" height="600"> </div>
<div class="col-md-6">
 
  <div class="row">
  <form method="POST" action="nouveau_vdeur">
  @csrf  
      <h3 class="text-left">Vendor Registration Form</h3>
           
  <hr>
  <div class="row">
   
    <label class="label col-md-3 control-label">Name :</label>
    <div class="col-md-8">
      <input type="text" name="nom_vendeur" class="form-control"  > </div>
    
        <label class="label col-md-3 control-label">First Name :</label>
    <div class="col-md-8">
      <input type="text" name="prenom_vendeur" class="form-control"  > </div>

    

    <button type="submit" class="btn btn-outline-primary">Sent</button>
        <button type="submit" class="btn btn-outline-primary">cancel</button>
  
  </form >
</div>

</div>
</div>

</body>
</html>