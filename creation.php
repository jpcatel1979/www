      <?php 
    
      // Création de la table
      try {
        $base = new PDO('mysql:host=localhost; dbname=basephp', 'root', '');
      }    
      catch(exception $e) {
        die('Erreur '.$e->getMessage());
      }
      $retour = $base->query('SELECT * FROM tablephp ORDER BY nom');
      echo "<table border>";
      while ($data = $retour->fetch()){
        echo "<tr><td>".$data['prenom']."</td>";
        echo "<td>".$data['nom']."</td>";
        echo "<td>".$data['compteurvisite']."</td>";
        echo "<td>".$data['dernierevisite']."</td></tr>";
      }
      echo "</table>";
      $base = null;
?>
