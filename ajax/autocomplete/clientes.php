<?php
if (isset($_GET['term'])){
include("../../config/db.php");
include("../../config/conexion.php");
$return_arr = array();
/* If connection to database, run sql statement. */
if ($con)
{
	
	$fetch = mysqli_query($con,"SELECT * FROM tbl_vehiculos where marca like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
	
	/* Retrieve and store in array the results of the query.*/
	while ($row = mysqli_fetch_array($fetch)) {
		$idVehiculo=$row['idVehiculo'];
		$row_array['value'] = $row['marca'];
		$row_array['idVehiculo']=$idVehiculo;
		$row_array['marca']=$row['marca'];
		$row_array['modelo']=$row['modelo'];
		$row_array['año']=$row['año'];
		array_push($return_arr,$row_array);
    }
	
}

/* Free connection resources. */
mysqli_close($con);

/* Toss back results as json encoded array. */
echo json_encode($return_arr);

}
?>