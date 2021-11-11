<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><span>Student Activities Report</span></h2>         
            </div>


<!-- Widgets -->
<div >
<div class="clearfix">
<div class="col-xs-12 ">


<form id="schactivities" class="row">

<div class="col-lg-4">
                          <div class="form-group">
                              <label class="control-label" for="class">Class</label>
                             
                                  <select name="class" id="class" class="form-control class">
                                  <option value="">Chose</option>
                                   <?php echo getTeacherClass(); ?>
                                  </select>
                              
                          </div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Student List</label>
<select name="student" id="student" class="form-control class">
    <option value="">Select class first</option>
</select>
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Exam Term</label>
<select name="term" id="term" class="form-control term">
    <option value="First">First</option>
    <option value="Second">Second</option>
    <option value="Mid">Mid-Term</option>
</select>
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">House</label>
<input type="text" name="house" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Weight at the end of Term</label>
<input type="text" name="weight_end" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Height at the end of Term</label>
<input type="text" name="height_end" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Time(s) Absent</label>
<input type="text" name="no_of_absent" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Cause of Absent</label>
<input type="text" name="cause_of_absent" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Class Highest Percentage</label>
<input type="text" name="class_highest_percentage" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Class Lowest Percentage</label>
<input type="text" name="class_lowest_percentage" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Overall %</label>
<input type="text" name="overall_perceny" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Co-curricular Activities</label>
<input type="text" name="co_curricular_activities" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">School Honours & Prizes</label>
<input type="text" name="honor" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Class/Form Teachers</label>
<input type="text" name="class_form_teacher" class="form-control">
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">School/Term Begins</label>
<input type="text" name="term_begin" class="form-control">
</div>
</div>

<div class="col-lg-8">
<div class="form-group">
 <label class="control-label" for="class">House Master's/Mistress Comments</label>
<textarea name="master_comment" row="8"class="form-control"></textarea>
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
 <label class="control-label" for="class">Position</label>
<input type="text" name="position" class="form-control">
</div>
</div>



<div class="col-lg-12">
<div class="form-group">
<div class="" id="message"></div>

<div align="center">
<button id="btn-submit" class="btn btn-sm btn-info wave"><i class="fa fa-plus"></i> Submit</button>
</div>
</div>
</div>

</form>

                    
        </div>
        </div>

        
    </section>

<?php include('footer.php'); ?>    

   