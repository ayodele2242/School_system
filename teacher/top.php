 <!-- Top Bar -->
 <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="main"><?php echo $email;  ?></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><?php echo underscore($pri);  ?></a></li>
                    <li ><a href="#signOut" data-toggle="modal" class="toggle-signup" title="Sign Out"><i class="material-icons">input</i></a></li>
                       
                    
                   </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->