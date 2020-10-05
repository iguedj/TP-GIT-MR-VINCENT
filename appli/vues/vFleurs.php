

<!-- Affichage des informations sur les fleurs-->

<div class="container">

    <table class="table table-bordered table-striped table-condensed">
      <caption>
<?php
    if (isset($cat))
    {
?>
        <h3><?php echo $cat;?></h3>
<?php    
    }
?>
      </caption>
      <thead>
        <tr>
          <th>Image</th>
          <th>Référence</th>
          <th>Libellé</th>
          <th>Prix</th>
          <th>Categorie</th>
<?php
if (estVisiteurConnecte())
{
?>
          <th>Ajout panier</th>
<?php
 }
?>
        </tr>
      </thead>
      <tbody>  
<?php
    $i = 0;
    while($i < count($lafleur))
    { 
 ?>     
        <tr>
            <td align="center"><img class="img-polaroid" src="../images/<?php echo $lafleur[$i]["image"]?>" /></td>
            <td><?php echo $lafleur[$i]["ref"]?></td>
            <td><?php echo $lafleur[$i]["designation"]?></td>
            <td align="right"><?php echo $lafleur[$i]["prix"]?></td>
            <td><?php echo $lafleur[$i]["cat"]?></td>
 <?php
if (estVisiteurConnecte())
{
?>
                 
          <td> <a href="lister.php?ref=<?php echo $lafleur[$i]["ref"]?>" >Ajout panier</a> </td>
<?php
 }
?>
 
        </tr>
<?php
        $i = $i + 1;
     }
?>       
       </tbody>       
     </table>    
  </div>

 
