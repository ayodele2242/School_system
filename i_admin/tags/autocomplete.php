<?
require('../../includes/functions.php');


    $searchTerm = $mysqli->real_escape_string($_GET['term']); 

    $query = $mysqli->query("SELECT * FROM tags WHERE tag like '%".$searchTerm."%'");

    while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
        $data[] = $row['tag'];
        
    }

    //return json data
    echo json_encode($data);

?>

