<?php
// actualizar aprendiz
  include('funciones1.php');
  session_start();
  $vide=$_SESSION['ide1'];
  $vnombres=$_POST['Apre_Nombres'];
  $vapellidos=$_POST['Apre_Apellidos'];
  $vdireccion=$_POST['Apre_Direccion'];
  $vtelefono=$_POST['Apre_Telefono'];

  $miconexion=conectar_bd('', 'sena_bd');
  $resulado=consulta($miconexion,"UPDATE `aprendices` SET Apre_Nombres='{$vnombres}',Apre_Apellidos='{$vapellidos}',Apre_Direccion='{$vdireccion}',Apre_Telefono='{$vtelefono}',Apre_Nombres='{$vnombres}'");

  if ($miconexion->affected_rows>0)
  {
      echo "Actualizacion exitosa";
  }
?>

<input style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
