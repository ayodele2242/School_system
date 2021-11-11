<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-star"></i> Students Result</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <form id="insert_pri_form" class="sform">
                <div class="table-repsonsive">
                <span id="error"></span>
                <table class="table table_view" id="item_table">
                <thead>
                <tr>
                <th>Student Identity Number</th>
				<th>Subject Code</th>
                <th>Mid-Term Result</th>
                <th>Count. Assess. Score</th>
				<th>60% Exam Scores</th>
                <th>100% Total Scores</th>
                <th>Subject Highest Score</th>
                <th>Subject Lowest Score</th>
                <th>100% 1<sup>st</sup> Term Score</th>
                <th>100% 2<sup>nd</sup> Term Score</th>
                <th>100% 3<sup>rd</sup> Term Score</th>
                <th>100% AVG. Score</th>
                <th>Term</th>
				<th>Present Class</th>
                <th>Exam Year</th>
                </tr>
                <thead>
                <tr>
                <td><input type="text" name="stuid[]" class="form-control stuid" /></td>
                <td><select name="sub_id[]" class="form-control sub_id subject_code"><option value="">Select Subject</option><?php echo getSubjects(); ?></select></td>
                <td><input type="text" name="mid_term[]" class="form-control mid_term" /></td>
                <td><input type="text" name="count_assessment[]" class="form-control count_assessment" /></td>
                <td><input type="text" name="scored[]" class="form-control scored" /></td>
                <td><input type="text" name="total_score[]" class="form-control total_score" /></td>
                <td><input type="text" name="sub_highest[]" class="form-control sub_highest" /></td>
                <td><input type="text" name="sub_lowest[]" class="form-control sub_lowest" /></td>
                <td><input type="text" name="first_term[]" class="form-control first_term" /></td>
                <td><input type="text" name="second_term[]" class="form-control second_term" /></td>
                <td><input type="text" name="third_term[]" class="form-control third_term" /></td>
                <td><input type="text" name="avg_score[]" class="form-control avg_score" /></td>
                <td><select name="term[]" class="form-control term">
                <option value="">Exam Term</option>
                <option value="First">First Term</option>
                <option value="Second">Second Term</option>
                </select>
                </td>
                
                <td><select name="class_name[]" class="form-control class_name"><option value="">Select Class</option><?php echo getClass(); ?></select></td>
                
                <td><input type="number" min="2000" max="2099" step="1" value="<?php echo date("Y"); ?>" name="year[]" class="form-control input_yr date" /></td>
                </tr>
                </table>
                <div align="center">
                <input type="submit" name="submit" class="btn btn-info" value="Insert" />
                <th><button type="button" name="add" class="btn btn-success btn-sm pri_add"><span class="glyphicon glyphicon-plus"></span> Add More</button></th>
              
                </div>
                </div>
            </form>

                </div>
            </div>


        </div>
    </section>

<?php include('footer.php'); ?>    

   