<?php include('header.php'); ?>

<?php include('top.php'); ?>
<?php include('links.php'); ?>
<?php include('function.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-calendar"></i> Events</h2>
            </div>

            <div class="row clearfix">
            <div class="alert alert-default">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModals" style="float: right;margin: -5px 0;">
                      New Announcement
                    </button>
                    </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row clearfix">
                <div class="col-md-12 column">
                        <!-- Display event calendar -->
                        <div id="calendar_div">
                        <?php echo get_calender_full(); ?>
                    </div>
                </div>
            </div>
                </div>
            </div>


        </div>
    </section>

 <div class="modal fade mymodals">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="error"></div>
                        <form class="form-horizontal" id="crud-form">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Title</label>
                                <div class="col-md-4">
                                    <input id="title" name="title" type="text" class="form-control input-md" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="time">Time</label>
                                <div class="col-md-4 input-append bootstrap-timepicker">
                                    <input id="time" name="time" type="text" class="form-control input-md" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="color">Color</label>
                                <div class="col-md-4">
                                    <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                                    <span class="help-block">Click to pick a color</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        
    
<?php include('footer.php'); ?>    

   