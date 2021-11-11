<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top main ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
        </div>
        <div id="navbar" class="navbar-collapse collapse main">
          <ul class="nav navbar-nav white">
          <li><a  href="main"><i class="fa fa-dashboard"></i> Home</a></li>
          
          <li><a  href="profile"><i class="fa fa-user"></i> Profile</a></li>
              
        

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li> <a href="#"><?php echo $email;  ?> </a></li>

<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><!--Something can be here like a link name --> <span class="caret"></span></a>
              <ul class="dropdown-menu main">
              
          <li><a  href="profile"><i class="fa fa-user"></i> Profile</a></li>
          
            
              <li><a href="#signOut" data-toggle="modal" class="toggle-signup"><i class="fa fa-sign-out"></i> Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    