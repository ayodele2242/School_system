<?php
require_once('../../includes/config.php'); 
$count_user=mysqli_query($mysqli, "select * from pins");
$countme = mysqli_num_rows($count_user);

							function getRandomCodes(){
							$ans = "0123456789";
							$sus = strlen($ans) - 1;
							return substr($ans, rand(0, $sus), 1) . substr($ans, rand(0, $sus), 1) . substr($ans, rand(0, $sus), 1) . substr($ans, rand(0, $sus), 1) . substr($ans, rand(0, $sus), 1) . substr($ans, rand(0, $sus), 1) . substr($ans, rand(0, $sus), 1). substr($ans, rand(0, $sus), 1). substr($ans, rand(0, $sus), 1). substr($ans, rand(0, $sus), 1). substr($ans, rand(0, $sus), 1). substr($ans, rand(0, $sus), 1);
							}
							
							/*for($i = 0; $i < 20; $i++){
							echo getRandomCodes() ."&nbsp;&nbsp;<br />";
							
                            }*/
                            function getRandomCode(){
                            $an = "01234abcdef5678ghijklm9nopqrxtuvwxyz";

                            $su = strlen($an) - 1;
                            return substr($an, rand(0, $su), 1) . substr($an, rand(0, $su), 1) . substr($an, rand(0, $su), 1) . substr($an, rand(0, $su), 1) . substr($an, rand(0, $su), 1) . substr($an, rand(0, $su), 1) . substr($an, rand(0, $su), 1). substr($an, rand(0, $su), 1). substr($an, rand(0, $su), 1). substr($an, rand(0, $su), 1). substr($an, rand(0, $su), 1). substr($an, rand(0, $su), 1);
                            }

                            for($i = 0; $i < 20; $i++){
                            //echo getRandomCode(). "<br />";
                            //mysqli_query($mysqli, "insert into pins(serials, pins)values('" .getRandomCode(). "', '" .getRandomCodes(). "')");

                            while($get = mysqli_fetch_array($count_user)){
                            if($get['pins'] != getRandomCodes() && $get['serials'] != getRandomCode()){
                           $gen =  mysqli_query($mysqli, "insert into pins(serials, pins)values('" .getRandomCode(). "', '" .getRandomCodes(). "')");
                            }
                            }
                            }

                            if($gen){
                                echo "ok";
                            }else{
                                echo $mysqli->error;
                            }

							

                            
							?>