<head>
    <link rel="stylesheet" href="web-apps/css/bootstrap.min.css">
    <script type="text/javascript" src="webapps/js/1.7.1/jquery.min.js"></script>
    <link href="web-apps/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="web-apps/js/bootstrap-toggle.min.js"></script>
  </head>

  <div class="panel-body">
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
	<thead>
		<tr>
			<th>Page ID</th>
			<th>Page Name</th>
			<th>Page Title</th>
			<th>Page Keywods</th>
			<th>Page Desc</th>
			<th>Action</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
	<?php
	$pageid=1;
		while($row = mysqli_fetch_array($str))
		{
			
	?>
		<tr class="odd gradeX">
			<td><?php echo $pageid;?></td>
			<td><?php echo $row['pname'];?></td>
			<td><?php echo $row['ptitle'];?></td>
			<td class="center"><?php echo $row['keywords'];?></td>
			<td class="center"><?php echo $row['pdescseo'];?></td>
			<td class="center"><a href="do_logic.php?page=pages&did=<?php echo $row['pid']; ?>"  onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs" id="myWish"><i class="glyphicon glyphicon-remove"></i> </a> <!--| <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> </a>--> 
			</td>
			<td>
		<?php if($row['status']=='0')
		{
			?>
			 <input type="checkbox" name="toggle" id="toggle_<?php echo $row['pid']; ?>" value="<?php echo $row['pid']; ?>" data-toggle="toggle" data-off="Disabled" data-on="Enabled">
			<?php
		}?>
		<?php if($row['status']=='1')
		{
			?>
			 <input type="checkbox" name="toggle" id="toggle_<?php echo $row['pid']; ?>" value="<?php echo $row['pid']; ?>" data-toggle="toggle" data-off="Disabled" data-on="Enabled" checked>
			<?php
		}?>
		</td>
		</tr>
	<?php
	$pageid++;
		}
	?>
	</tbody>
</table>
</div>

Script.js

    <script>
      $('input[name=toggle]').change(function(){
        var mode= $(this).prop('checked');
		var id=$( this ).val();
        $.ajax({
          type:'POST',
          dataType:'JSON',
          url:'do_switch.php',
          data:{mode:mode,id:id},
          success:function(data)
          {
            var data=eval(data);
            message=data.message;
            success=data.success;
            $("#heading").html(success);
            $("#body").html(message);
          }
        });
      });
    </script>


    do_switch.php
<?php
include("config/dbconnect.php");
include("config/session.php");
$mode=$_POST['mode'];
$pid=$_POST['id'];
if ($mode=='true') //mode is true when button is enabled 
{
	$str=$db->query("update pages SET status=1 where pid=$pid");
    $message='Hey my button is enableed!!';
    $success='Enabled';
    echo json_encode(array('message'=>$message,'$success'=>$success));
}

else if ($mode=='false') 
{
	$str=$db->query("update pages SET status=0 where pid=$pid");
    $message='Hey my button is disable!!';
    $success='Disabled';
    echo json_encode(array('message'=>$message,'success'=>$success));

} 
 ?>