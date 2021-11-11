<!-- Menu -->
<div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="main">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>


                
                    <li>
                        <a href="users">
                            <i class="material-icons">people</i>
                            <span>My Profile</span>
                        </a>
                    </li>

                  <li>
                        <a href="messenger" class="menu-toggle">
                            <i class="material-icons">textsms</i>
                            <span>Instant Messenger</span>
                        </a>
                        
                    </li>
                    

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">people_outline</i>
                            <span>Students</span>
                        </a>
                        <ul class="ml-menu">
                        <li><a href="addstudent">Add Student</a></li>
                        <li><a href="student_list">Students List</a></li>
                      
                       </ul>
                    </li>

                
                    <li>
                        <a href="subjects">
                            <i class="material-icons">subject</i>
                            <span>Manage Subjects</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="class">
                            <i class="material-icons">class</i>
                            <span>Manage Class</span>
                        </a>
                        
                    </li>

                    <li>
                    
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">grade</i>
                            <span>Manage Results</span>
                        </a>
                        <ul class="ml-menu">
                        
                        <li><a href="student_activities">Student Activities</a></li>

                          <?php 
                         $ar = array($impclass, true);
                         //$one = array(print_r($impclass));
                          $two = array('J.S.S 1','J.S.S 2','J.S.S 3','S.S 1','S.S 2','S.S 3','Primary One','Primary Two','Primary Three','Primary Four','Primary Five',
                                                 'Primary Six');
                        if(in_array($two, $ar)){ 
                           ?>
                       
                        <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Enter Result</span>
                                </a>
                            <ul class="ml-menu">
                                
                                <li><a href="student_result">First/Second Term Result</a></li>
                                <li><a href="mid_term_secondary">Mid-Term Result</a></li>
                                <li><a href="results_list">Results List</a></li>     
                            </ul>
                        </li>
                          <?php 
                          
                          }else{ ?>

                        <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Kindergarten/Nursery</span>
                                </a>
                            <ul class="ml-menu">
                                <li><a href="nursery">Exam Result</a></li>
                                <li><a href="results_list_nur">Results List</a></li> 
                            </ul>
                        </li>

                          <?php }  ?>
                       
                       </ul>
                       
                     
                    </li>
					
					
					
					

                    

                    

                   <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">school</i>
                            <span>Alumni</span>
                        </a>
                        <ul class="ml-menu">
                        <li>
                        <a href="home_message">
                            <i class="material-icons">home</i>
                            <span>Welcome Message</span>
                        </a>
                        </li>    
                        <li>
                        <a href="event">
                            <i class="material-icons">event</i>
                            <span>Events</span>
                        </a>
                        </li>
                        <li>
                        <a href="external_links">
                            <i class="material-icons">http</i>
                            <span>Add Links</span>
                        </a>
                        </li>
                        <li>
                        <a href="members">
                            <i class="material-icons">group</i>
                            <span>Users</span>
                        </a>
                        </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">forum</i>
                            <span>Forum</span>
                        </a>
                        <ul class="ml-menu">
                        <li><a href="forum_category">Forum Categories</a></li>
                        <li><a href="post">New Post</a></li>
                       
                      
                       </ul>
                    </li>

                      
                       </ul>
                    </li>-->

                    


                     
                  
                </ul>
            </div>
            <!-- #Menu -->