<?php
    include "db.php";
    $con = connect();
    $sql="SELECT codigoespecialidad,nombreespecialidad FROM ESPECIALIDAD";
    $resultado = $con->query($sql);

    $html= "<option value='0'>Seleccione Especialidad</option>";

	while($rowN = $resultado->fetch_assoc())
	{
		$html.= "<option value='".$rowN['codigoespecialidad']."'>".$rowN['nombreespecialidad']."</option>";
	}
?>

<div>
<select>
<?php echo $html;?>
</select>
</div>
