
<!DOCTYPE html>
<html lang="en">
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
 </head>
    
 <body>

  <script src="/js/bootstrap.bundle.min.js" > </script>
     <div class="container" >
      
       <div class="row  justify-content-center"> 
    <p class="display-2">Gestion Des Vendeures</p>
    </div>
    
    <br>
    <br>
    <br>   

<div class="row">       
<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>numero telephe</th>
        <th>Fonctionnalitées</th>
      </tr>
    </thead>
    
    <tbody>
    
   @foreach($data as $element)  <!-- Pour chaque élément du tableau $data -->
      
    <tr>
        <td>{{$element->nom_v}}</td>
        <td>{{$element->prenom_v}} </td>
        <td>{{$element->num_v}}</td>
        
        <td>
            
            <a href="#" class="btn btn-success btn-sm">Détails</a>
            <a href="modifierVendeur/{{$element->id}}" class="btn btn-warning btn-sm">Modifier</a>
            <a href="supprimer_vendeur/{{$element->id}}" class="btn btn-danger btn-sm">Supprimer</a>
            
        </td>
    </tr>
  
     @endforeach    <!-- Fin de la boucle -->   
        
    </tbody>
  </table>
</div>
     
     
     </div>

     
     
   
 
 </body>
</html>
     