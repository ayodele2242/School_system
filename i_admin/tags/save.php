<?php
require('../../includes/functions.php');

                    if(!empty($_POST['multiTag'])) {
                        foreach ($_POST['multiTag'] as $key=>$tag) {
      
                        $tag = mysqli_real_escape_string($mysqli,$tag); 
                        echo "Tag(s): ".$tag.", ";
                
                        $upTags = "INSERT INTO tags (tag) VALUES ('$tag')";
                        if ($mysqli->query($upTags) === TRUE) echo "added to DB";
                        header("Refresh:1");
                    }
                }
            
       
 ?>           