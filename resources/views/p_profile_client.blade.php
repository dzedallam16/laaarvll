<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet"  href="/css/bootstrap.min.css">
      
       <link href="/css/bootstrap.min.css" rel="stylesheet">

  <title>espace client</title>
      <link rel="stylesheet" href="/css/stylClient.css">

</head>
<body>
<script src="/js/bootstrap.bundle.min.js"h></script> 
     <!--------------------------------navbar-------------------->
   <div class="navbar navbar-expand-md bg-dark navbar-dark text-white">
   <div class="container">

    <a href="#" class="navbar-brand">customer space </a>   
       

@if(Auth::check())   

  {{ Auth::user()->name }} 

@endif



      
                    <!-----------------dropdown login-------------------->                                                           <li class="nav-item">
                      <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <div class="btn-group" role="group">
    <button id="login" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    
    </button>
    <form method="POST" action="/logout">
    @csrf    
     <input type="submit" class="btn btn-primary" name="logout"  value="Déconnexion"/> 
</form>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <li><a class="dropdown-item" href="page_inscrire_vendeur">Add Vendor</a></li>
          <li><a class="dropdown-item" href="gestion_vendeurs">gestion vendeurs </a></li>
          <li><a class="dropdown-item" href="page_login_admin">Admin</a></li>
      </ul>
  </div>
</div>

  </li>

                           
                </ul>
            </div> 

       </div> 
     </div>
     <br>
     <br>

 <div class="container">

<div class="row">
   @foreach($data1 as $element)         
           
  <div class="col-3">
        <h4>{{$element->name_matr}}</h4>
        <h5>{{$element->prix}}</h5>
        <img src="{{asset('image/Materiels/'.$element->photo)}}" width="100px" height="100px" alt="image"> 
        <a href=""class="main-btn">add to cart  </a>
        <br><br>

</div>
      
   
      @endforeach
    </div>



</div>


      

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