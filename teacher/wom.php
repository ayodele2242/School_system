<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Worker of the Month</h2>
            </div>

 <!-- Basic -->
 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cards">

                         <div class="body">
                         <form  enctype="multipart/form-data" id="uploadImageForm">
                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" id="name">
                                        <label class="form-label">Worker's Name</label>
                                    </div>
                                </div>

                                 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="dept" id="dept">
                                        <label class="form-label">Department</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                            <div class="input-group">
                                               <div class="form-line">
                                                    <input type="text" data-type="date" id="date" name="date" placeholder="Date" class="form-control datepicker">
                                                   
                                              </div>

                                             </div>
                                </div>
                               
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" id="description"  cols="30" rows="5" class="form-control no-resize"></textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>


                            <div class="form-group">
                            <label for="exampleInputPassword1">Photo</label>		    
                            <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>

                            <div class="kv-avatar center-block" style="width:200px">
                                <input id="avatar-2" name="userImage" type="file" class="file-loading">
                            </div>
                        </div>

                                
                                <div class="form-group" align="center">
                                <div id="messages"></div>
                                   
                                <button type="input" name="submit"  class="btn btn-success btn-md btn-icon  waves-effect" id="btn-submit" ><i class="fa fa-check-square-o"></i> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic -->
      </div>
    </section>

<?php include('footer.php'); ?>    

   