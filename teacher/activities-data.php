<?php
/* Database connection start */
include('../includes/config.php');
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 =>'name', 
	1 => 'fullname',
	2=> 'action',
	3=> 'date'
);

// getting total number records without any search
$mysql = "SELECT id ";
$mysql.=" FROM activities";
$query=mysqli_query($mysqli, $mysql) or die("activities-data.php: get activities");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$mysql = "SELECT id, name, fullname, action, date";
$mysql.=" FROM activities WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$mysql.=" AND ( name LIKE '".$requestData['search']['value']."%' ";    
	$mysql.=" OR fullname LIKE '".$requestData['search']['value']."%' ";

	$mysql.=" OR action LIKE '".$requestData['search']['value']."%' )";
	$mysql.=" OR date LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($mysqli, $mysql) or die("activities-data.php: get activities");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$mysql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($mysqli, $mysql) or die("activities-data.php: get activities");

$data = array();
$i=1+$requestData['start'];
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = "<input type='checkbox'  class='deleteRow' value='".$row['id']."'  /> #".$i ;
	$nestedData[] = $row["name"];
	$nestedData[] = $row["fullname"];
	$nestedData[] = $row["action"];
	$nestedData[] = $row["date"];
	
	$data[] = $nestedData;
	$i++;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
