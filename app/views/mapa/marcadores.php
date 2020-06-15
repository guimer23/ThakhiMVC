<?php

  //require_once("controllers/Clsconectar.php");
  //private $pdo;

  $this->pdo=\Core\Database::getConnection();


 // $c = new Conectar();
  //$conexion = $c->conexion();
 //Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)

 /*
$result = mysqli_query($pdo, "SELECT vhi.CONdni,vhi.VEClatitud,vhi.VEClongitud,co.CONnombre,vhi.VEHid FROM admvectvehiculo_conductor as vhi
  inner join admcontconductor as co

  on vhi.CONdni=co.CONdni
  inner join admenttentrega as ent
  on ent.VECid=vhi.VECid

  where ent.ENTfechahora=curdate()");
 

 
  while ($row = mysqli_fetch_array($result)) {
      echo '["' . $row['CONdni'] . '", '.$row['VEClatitud'].','.$row['VEClongitud']. ','.$row['VEHid']. '],';
    
  }
  */

?>
