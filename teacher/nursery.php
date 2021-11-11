<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-star"></i> Kindergarten/Nursery Result</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <form id="nursery_form" class="sform">
                <div class="table-repsonsive">
                <span id="error"></span>
                <table class="table table_view" id="item_table">
                <thead>
                <tr>
                <th>Student Identity Number</th>
				<th>Subject Code</th>
                <th>1<sup>st</sup> Summary</th>
                <th>2<sup>nd</sup> Summary</th>
                <th>Term's Exam</th>
                <th>Summary of Term's Work</th>
                <th>Subject Position</th>
                
				<th>Present Class</th>
                <th>Exam Year</th>
                </tr>
                <thead>
                <tr>
                <td><input type="text" name="stuid[]" class="form-control stuid" /></td>
                <td><select name="sub_id[]" class="form-control sub_id subject_code"><option value="">Select Subject</option><?php echo getTeacherSubjects(); ?></select></td>
                
                <td><input type="text" name="fsummary[]" class="form-control fsummary" /></td>
                <td><input type="text" name="ssummary[]" class="form-control ssummary" /></td>
                <td><input type="text" name="term[]" class="form-control term" /></td>
                <td><input type="text" name="sterm[]" class="form-control sterm" /></td>
                <td><input type="text" name="sub_pos[]" class="form-control sub_pos" /></td>
               
                <td><select name="class_name[]" class="form-control class_name"><option value="">Select Class</option><?php echo getTeacherClass(); ?></select></td>
                <td><input type="number" min="2000" max="2099" step="1" value="<?php echo date("Y"); ?>" name="year[]" class="form-control input_yr date" /></td>
                </tr>
                </table>
                <div align="center">
                <input type="submit" name="submit_mid" class="btn btn-info" value="Insert" />
                <th><button type="button" name="add_mid" class="btn btn-success btn-sm add_nur"><span class="glyphicon glyphicon-plus"></span> Add More</button></th>
              
                </div>
                </div>
            </form>

                </div>
            </div>


        </div>
    </section>

<?php include('footer.php'); ?>    

   