<?php
require('dataBaseConect.php');

$con = new ConectorBD();

if ($con->initConexion('agenda_db')=='OK') {

    echo "Se realizo la conexión";

   $data[0]['nombre'] = "'Evolet'";
   $data[0]['password'] = "'".password_hash("123456789", PASSWORD_DEFAULT)."'";
   $data[0]['birthdate'] = "'1986-02-30'";
   $data[0]['email'] = "'evolet@mail.com'";

   $data[1]['nombre'] = "'Denieth'";
   $data[1]['password'] = "'".password_hash("123456789", PASSWORD_DEFAULT)."'";
   $data[1]['birthdate'] = "'1999-05-19'";
   $data[1]['email'] = "'denieth@mail.com'";

   $data[2]['nombre'] = "'luis'";
   $data[2]['password'] = "'".password_hash("123456789", PASSWORD_DEFAULT)."'";
   $data[2]['birthdate'] = "'2012-12-31'";
   $data[2]['email'] = "'luis@mail.com'";

   foreach ($data as $key => $values) {
     if ($con->insertData('user', $values)) {
       echo "Se inserto los datos del usuario correctamente";
     }else echo "Se ha producido un error en la inserción";
   }

  $con->cerrarConexion();

}else {
  echo "Se presentó un error en la conexión";
}




 ?>
