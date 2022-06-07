<!DOCTYPE html>
<html lang="en">
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <style>

   
.btn-outline-primary{
   margin: 10px 0px 20px 0px ; 
    font-size: 20px;
        padding: 10px;
        width: 1000px;
        border-radius: 10px;
      color:black;
      background-color: #F5DEB3;

}
.form-control{
  background-color: rgba(240,230,240,0.9);
    margin: 10px 0px 25px 0px ;
  color: black;
  size: 500px;
  width: 500px;
}
 .btn-success{
   margin: 0px 0px 20px 0px ; 
    font-size: 20px;
        padding: 10px;
       width: 1000px;
      color:black;
      border-radius: 10px;s 
 }
.col-md-5{
   margin: 10px 50px 25px 300px ;
}
.img{
  margin: 0px 0px 0px -90px ;
}
  </style>
 </head>
    
 <body>
   <script src="/js/bootstrap.bundle.min.js" > </script>
     <div class="container" >

<div class="row  justify-content-center"> 
    <p class="display-2">Modifier Un Vendeur</p>
</div>

<div class="row  justify-content-center">       
<div class="col-md-3">
<img src="/image/upd.jpg " class =" img" width="600" height="600">
</div> 
  <div class="col-md-5">
    <div class="form-group">
       <form method="POST" action="/modifier_vendeur">

    @csrf  
    
         
          
           
             <legend>Informations Vendeur </legend>
 <input type="hidden" class="form-control" name="id"  value="{{$V->id}}" />
        
 Nom : <input type="text" class="form-control" name="nom_vendeur" value="{{$V->nom_v}}"/>
 Prénom : <input type="text" class="form-control" name="prenom_vendeur" value="{{$V->prenom_v}}"/>
 Numero telephone  : <input type="number" class="form-control" name="num_vendeur" value="{{$V->num_v}}"/>

  email  : <input  class="form-control" name="email_vendeur" value="{{$V->email_v}}"/>
  
  mot pass  : <input type="motcle" class="form-control" name="mdps_vendeur" value="{{$V->mdps_v}}"/>  
  </div>      
    </div>
           <button type="submit" class="btn btn-outline-primary">Sent</button>
          <a href="/page_gestion_etudiants" class="btn btn-success " >Annuler</a>

</form>
</div>
         
     
     
     </div>

   </div>  
   
 
 </body>
</html>

