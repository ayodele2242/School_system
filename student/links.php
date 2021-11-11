<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <?php
						if(empty($set['schoolLogo'])){
						?>
                        <img src="<?php echo $set['installUrl']; ?>logo/<?php echo $set['schoolLogo']; ?>" class="img-sm  img-responsive" direct-chat-img width="100" height="100">
                        <?php
						}else{
						?>
                        <img id="profile_pics"  data-holder-rendered="true" src="<?php echo $set['installUrl']; ?>logo/<?php echo $set['schoolLogo']; ?>" class="img-sm  img-responsive" direct-chat-img width="100" height="100">
                        <?php
						}
						?>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row['lastName'];  ?></div>
                    <div class="email"><?php echo $row['email'];  ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                           <!-- <li><a href="profile?<?php //echo randnumber(); ?>"><i class="material-icons">person</i>Profile</a></li>-->
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header"></li>
                    <li class="active">
                        <a href="main?<?php echo randnumber(); ?>">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    

					
                    <li>
             <div class="col-lg-12">
             <form method="POST" action="presult.php<?php echo '?Roll_Number='.$mid ?>">
			<input type="hidden" name="Roll_Number" value="<?php echo $mid; ?>">
			<div class="alert-info">
			Filter Result
			</div>
				<div class="form-group">
                 
				<label>Class</label>
				<select name="Class" required class="form-control">
                <?php echo getClass(); ?>
				</select>
			
            </div>
			<div class="form-group">
                     
					<label>Term</label>
				<select name="internaltype" required class="form-control">
					<option></option>
					<option value="First Term">First Term</option>
					<option value="Second Term" >Second Term</option>
                    <option value="Third Term">Third Term</option>
				
				</select>
			
            </div>
		<div class="form-group form-float">
       <button name="sort" class="btn btn-info"><i class="glyphicon glyphicon-check"></i> Check Result</button>
            </div>
		
			</form>
            </div>
                    </li>
                    
                   
     

                        
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    <!--//Copy right comes here-->
                </div>
                
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
       
    </section>
