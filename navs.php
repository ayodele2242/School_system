


<?php
function menu_builder($parent_id) {
    global $mysqli;
    $sql =   "SELECT * FROM navigation_bar where status='active'";
    $res=mysqli_query($mysqli,$sql);
    if ( $res) {
        while ($row = mysqli_fetch_array($res)) {
             $array[$row['parent_id']][] = $row;
        }
        main_menu($array);
    }
}
function main_menu ($array, $parent_id = 0) {
    if (!empty($array[$parent_id])) {
        foreach ($array[$parent_id] as $item) {
            if ($item['parent_id'] != '0') {
                echo "  <li class=\"nav-item\">" . PHP_EOL;
                echo "    <a class=\"nav-link\" href=\"#\">" . $item['name'] . "</a>" . PHP_EOL;
                main_menu($array, $item['id']);
                echo "  </li>" . PHP_EOL;
            }
            if ($item['parent_id'] == '0') {
                echo "  <li class=\"nav-item dropdown\"><a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">" . $item['name'] . "</a>" . PHP_EOL;
                sub_menu($array, $item['id']);
                echo "  </li>" . PHP_EOL;
            }
        }
        //echo "</div>" . PHP_EOL;
        echo "</li>" . PHP_EOL;
    }
}
function sub_menu ($array, $parent_id) {
    if (!empty($array[$parent_id])) {
        echo "    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">" . PHP_EOL;
        foreach ($array[$parent_id] as $item) {
            echo "      <a class=\"dropdown-item\" href=\"" . $item['link'] . "\">" . $item['name'] . "</a>" . PHP_EOL;
        }
        echo "    </div>" . PHP_EOL;
    }
}

/*function menu_builder($parent_id) {
    global $mysqli;
    $sql =   "SELECT * FROM navigation_bar where status='active'";
    $res=mysqli_query($mysqli,$sql);
    if ( $res) {
        while ($row = mysqli_fetch_array($res)) {
             $array[$row['parent_id']][] = $row;
        }
        main_menu($array);
    }
}
function main_menu ($array, $parent_id = 0) {
    if (!empty($array[$parent_id])) {
        foreach ($array[$parent_id] as $item) {
            if ($item['parent_id'] != '0') {
                echo "            <li class=\"nav-item\">" . PHP_EOL;
                echo "                <a class=\"nav-link\" href=\"" . $item['link'] . "\">" . $item['name'] . "</a>" . PHP_EOL;
                main_menu($array, $item['id']);
                echo "            </li>" . PHP_EOL;
            }
            elseif ($item['parent_id'] == '0') {
                echo "            <li class=\"nav-item dropdown\">". PHP_EOL;
                echo "                <a class=\"nav-link dropdown-toggle\" href=\"" . $item['link'] . "\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">" . $item['name'] . "</a>" . PHP_EOL;
                sub_menu($array, $item['id']);
                echo "            </li>" . PHP_EOL;
            }
        }
    }
}
function sub_menu ($array, $parent_id) {
    if (!empty($array[$parent_id])) {
        echo "                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">" . PHP_EOL;
        foreach ($array[$parent_id] as $item) {
            if ($item['parent_id'] != '0') { 
                echo "                    <a class=\"dropdown-item\" href=\"" . $item['link'] . "\">" . $item['name'] . "</a>" . PHP_EOL;
            }
            elseif ($item['parent_id'] == '0') {
                echo "                    <div class=\"dropdown-submenu\">" . PHP_EOL;
                echo "                        <a class=\"dropdown-item dropdown-toggle\" href=\"" . $item['link'] . "\">" . $item['name'] . "</a>" . PHP_EOL;
                sub_sub_menu($array, $item['id']);
                echo "                    </div>" . PHP_EOL;
            }
        }
        echo "                </div>" . PHP_EOL;
    }
}
function sub_sub_menu ($array, $parent_id) {
    if (!empty($array[$parent_id])) {
        echo "                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">" . PHP_EOL;
        foreach ($array[$parent_id] as $item) {
            echo "                        <a class=\"dropdown-item\" href=\"" . $item['link'] . "\">" . $item['name'] . "</a>" . PHP_EOL;
        }
    }
    echo "                    </div>" . PHP_EOL;
}*/

?>
<nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">

     <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Navbar</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
  aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
     <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

        <?php
        echo "<ul class=\"navbar-nav mr-auto\">";
        echo menu_builder($mysqli, 0);
        echo "</ul>" . PHP_EOL;    
        ?>
    </div>
</nav>