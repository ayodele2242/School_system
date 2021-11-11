<h4 class="text-info">Check Result</h4>
<?php
			
			$ar = array($impclass, true);
                         //$one = array(print_r($impclass));
                          $two = array('J.S.S 1','J.S.S 2','J.S.S 3','S.S 1','S.S 2','S.S 3','Primary One','Primary Two','Primary Three','Primary Four','Primary Five',
                                                 'Primary Six');
                        if(in_array($two, $ar)){ 
                           ?>
           <form method="POST" action="redirect.php<?php echo '?Roll_Number='.$mid ?>" class="row">
			<input type="hidden" name="Roll_Number" value="<?php echo $mid; ?>">
			
				<div class="col-lg-3">

				<select name="Class" required class="form-control">
				<option>Class</option>
                <?php echo getClass(); ?>
				</select>
			
            </div>

			<div class="col-lg-3">
				<select name="internaltype" required class="form-control">
					<option>Select Exam Term</option>
					<option value="First">First Term</option>
					<option value="Second" >Second Term</option>
					<option value="Mid" >Third Term</option>
				</select>
			

            </div>
            <div class="col-lg-2">
		<div align="center">
       <button name="sort" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-check"></i> Check Result</button>
       </div>
		</div>
			</form>
			<?php
				}else{
			?>
  <form method="POST" action="kresult<?php echo '?Roll_Number='.$mid ?>" class="row">
			<input type="hidden" name="Roll_Number" value="<?php echo $mid; ?>">
			
				<div class="col-lg-4">

				<select name="Class" required class="form-control">
				<option>Class</option>
                <?php echo getClass(); ?>
				</select>
			
            </div>
            <div class="col-lg-2">
		<div align="center">
       <button name="sort" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-check"></i> Check Result</button>
       </div>
		</div>
			</form>


			<?php
				}
			?>