<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image myimg2">

                <?php
										if(empty($set['schoolLogo'])){
										?>
										<img src="<?php echo $set['installUrl']; ?>logo/avatar.png"  width="48" height="48" alt="<?php echo $fullname; ?>">
										<?php
										}else{
                                        ?>
                                       	<img id="profile_pics"  data-holder-rendered="true" src="<?php echo $set['installUrl']; ?>logo/<?php echo $set['schoolLogo']; ?>" width="48" height="48" alt="<?php echo $fullname; ?>">
                                        <?php
										}
										?>
										
                    
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fullname; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profile"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="#signOut" data-toggle="modal" class="toggle-signup"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <?php
			
				include('menus/allP.php');
			
			?>
            
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>