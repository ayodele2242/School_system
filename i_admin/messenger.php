<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-envelope" aria-hidden="true"></i> Messenger</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="">
               
<div class="profile">   
<ul class="nav nav-tabs" id="myTab">
<li class="active"><a data-toggle="tab" href="#sectionA" style="font-weight:bolder;"><i class="fa fa-envelope"></i> Email</a></li>
<li><a data-toggle="tab" href="#sectionC" style="font-weight:bolder;"><i class="fa fa-comment" ></i> SMS</a></li>
</ul>

<div class="tab-content card">
<div id="sectionA" class="tab-pane fade in active " ><!--Email-->
<div id="error"></div>
<div class="inform"></div>
<form method="post"   id="messenger-form" class="form-vertical">
										<div class="form-group">
                                        <div class="form-line">
									            	<select class="form-control smode" name="smode" id="smode" >
                                                    <option value="">Select Mail List</option>
                                                    <option value="T">All Students</option>
                                                    
                                                   
                                                </select>
                                        </div>
                                         </div>
                                         
                                        
                                        <div class="form-group">
                                               <div class="form-item">
                                                    <input type="text" name="emaillist" id="emaillist" class="form-control" value="" >
                                                </div>
                                            
                                        </div> 
                                                                                
										<div class="form-group">
                                        <div class="form-line">
										<input type="text" class="form-control" name="subject" id="subject"  placeholder="Subject" value="">
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        <div class="row">
                                         <div class="col-lg-6">    
                                        <div class="form-line col-lg-6">
										<input type="text" class="form-control" name="venue" id="venue"  placeholder="Venue" value="">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">  
                                         <div class="form-line">
									    <input type="text" class="form-control dates" name="date"   placeholder="Date and Time" value=""> 
                                        </div>
                                        </div>
                                        </div>
                                        </div>
										
										<div class="form-group">
									<textarea name="msg" id="msg"  rows="15" class="form-control no-resize msg" Placeholder="Start Typing" ></textarea>
										</div>

                                        <div class="form-group">
                                        
                                        <div align="center">
	                                     <button type="submit" class="btn btn-info"  id="btn-submit">
	                                       <span class="glyphicon glyphicon-envelope"></span> &nbsp; Send Mail
                                          </button> 
                                        </div>
	                                    </div>

</form>        
</div><!--#End Email-->

<div id="sectionC" class="tab-pane fade"><!--SMS-->
<div id="errors" ></div>
<form  id="sms-form">
									
										<div class="form-group">
																
											<div class="controls" style="background:#f1f1f1; padding:7px;">
                                            <select class="form-control smode" name="smode" id="sms" >
                                                    <option value="">Select Phone List</option>
                                                    <option value="T">All Students</option>
                                                    
                                                   
                                                </select>
                                            </div>
										</div>

                                       <div class="form-group">						
                                       <div class="form-line">
                                        <input type="text" class="form-control" value=""  id="phonelist" name="phonelist"  placeholder="Phone Number"/>
                                         </div>
                                    </div>

										<div class="form-group">
                                        <div class="form-line" style="background:#f1f1f1; padding:7px;">
												<input type="text" class="form-control" id="subject_sms" name="subject_sms" value="" placeholder="SMS Title" >
											</div>
										</div>

                                    
										
										<div class="form-group">
                                        <span class="control-label" id="charLeft" class="charsRemaining"></span> Characters left
                                        <div class="form-line">
											<textarea class="form-control countit" rows="3"  id="body_sms" name="body_sms"   placeholder="Message"></textarea>
											</div>
										</div>
										<div>
                                        <div class="form-group" align="center">
											<button type="submit" id="btn-submits" class="btn btn-info" name="sendinvite"><i class="fa fa-comment"></i> Send</button>
											
                                        </div>
                                        </div>
									
								</form>

</div><!--#End SMS-->

</div>

</div>


                
           </div>
            </div>
            </div>


        </div>
    </section>

<?php include('footer.php'); ?>    

   