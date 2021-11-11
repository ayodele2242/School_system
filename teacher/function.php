<?php
/*
 * This function create By Jignesh Patel	 
 * Function requested by Ajax
 */
if(isset($_REQUEST['fun_type']) && !empty($_REQUEST['fun_type'])){
	switch($_REQUEST['fun_type']){
		case 'get_calender_full':
			get_calender_full($_REQUEST['year'],$_REQUEST['month']);
			break;
		case 'get_events_information':
			get_events_information($_REQUEST['date']);
			break;
		//For Add Event with date wise.
		case 'add_event_information':
			add_event_information($_REQUEST['date'],$_REQUEST['title'],$_REQUEST['mmsg']);
			break;
		default:
			break;
	}
}
/*
 * Get Full calendar in html
 */
function get_calender_full($year = '',$month = '')
{
	$date_Year = ($year != '')?$year:date("Y");
	$date_Month = ($month != '')?$month:date("m");
	$date = $date_Year.'-'.$date_Month.'-01';
	$current_Month_First_Day = date("N",strtotime($date));
	$total_Days_ofMonth = cal_days_in_month(CAL_GREGORIAN,$date_Month,$date_Year);
	$total_Days_ofMonthDisplay = ($current_Month_First_Day == 7)?($total_Days_ofMonth):($total_Days_ofMonth + $current_Month_First_Day);
	$boxDisplay = ($total_Days_ofMonthDisplay <= 35)?35:42;
?>

 	<div id="calender_section">
		<h2>
        	<a href="javascript:void(0);" onclick="get_calendar_data('calendar_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');">&lt;</a>
            <select name="month_dropdown" class="month_dropdown dropdown"><?php echo get_all_months__of_year($date_Month); ?></select>
			<select name="year_dropdown" class="year_dropdown dropdown"><?php echo get_year($date_Year); ?></select>
            <a href="javascript:void(0);" onclick="get_calendar_data('calendar_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');">&gt;</a>
        </h2>
        <!-- event_list is used for view event with popup -->
		<div id="event_list" class="modal"></div>
		<!-- End of event list popup -->

        <!--Below Code for Event Add-->

        <!-- Popup div start here -->
		<div id="event_add" class="modal" >
        <div class="modal-dialog">
		  <div class="modal-content" style="padding:23px;">
          
		    <span class="close"><a href="#" onclick="close_popup('event_add')">×</a></span>
            
		    		<p>Add Event on <span id="eventDateView"></span></p>
                    
		            <p><b>Event Title: </b><input type="text" class="form-control" id="eventTitle" value=""/></p>
                    <p><textarea id="eventDetail"  class="form-control" placeholder="Enter Event Details" style="height:300px;"></textarea></p>
		            <input type="hidden" id="eventDate" value=""/>
		            <input type="button" id="add_event_informationBtn" class="btn btn-sm btn-success btn-submit" value="Add"/><div class="msmg" id="message"></div>
		  </div>
          </div>
		</div>
		<!-- Popup hmmt end. -->

        <div id="calender_section_top">
			<ul >
				<li>SUN</li>
				<li>MON</li>
				<li>TUE</li>
				<li>WED</li>
				<li>THU</li>
				<li>FRI</li>
				<li>SAT</li>
			</ul>
		</div>
		<div id="calender_section_bot">
			<ul>
			<?php 
			// this is for create calendra and view add event and view event and number of Events
				$dayCount = 1; 
				for($cb=1;$cb<=$boxDisplay;$cb++){
					if(($cb >= $current_Month_First_Day+1 || $current_Month_First_Day == 7) && $cb <= ($total_Days_ofMonthDisplay)){
						
						// Below javascript code for get current date
						
						$currentDate = $date_Year.'-'.$date_Month.'-'.$dayCount;
						$eventNum = 0;
							
						// Below line for including file of database connection file
						include '../includes/connection.php';
						// Below query useing for getting number of events in current date
						$result = $db->query("SELECT page_title FROM events WHERE event_date = '".$currentDate."'");
						$eventNum = $result->num_rows;
						
						//Define date cell color
						if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
							echo '<li date="'.$currentDate.'" class="grey date_cell">';
						}elseif($eventNum > 0){
							echo '<li date="'.$currentDate.'" class="light_sky date_cell">';
						}else{
							echo '<li date="'.$currentDate.'" class="date_cell">';
						}
						//Date cell
						echo '<span>';
						echo ''.$dayCount.'';
						echo '</span>';
						
						//Hover event popup
						echo '<div id="date_popup_'.$currentDate.'" class="date_popup_wrap none">';
						echo '<div class="date_window">';
						echo '<div class="popup_event">Events ('.$eventNum.')</div>';
						echo ($eventNum > 0)?'<a href="javascript:;" onclick="get_events_information(\''.$currentDate.'\');">View Events</a><br/>':'';
						//For Add Event
						echo '<a href="javascript:;" onclick="add_event_information(\''.$currentDate.'\');">Add Event</a>';
						echo '</div></div>';
						
						echo '</li>';
						$dayCount++;
			?>
			<?php }else{ ?>
				<li><span>&nbsp;</span></li>
			<?php } } ?>
			</ul>
		</div>
	</div>

	<script type="text/javascript">
	// ajax call to get event detail from database.
		function get_calendar_data(target_div,year,month){
			$.ajax({
				type:'POST',
				url:'function.php',
				data:'fun_type=get_calender_full&year='+year+'&month='+month,
				success:function(html){
					$('#'+target_div).html(html);
				}
			});
		}
		
		function get_events_information(date){
			$.ajax({
				type:'POST',
				url:'function.php',
				data:'fun_type=get_events_information&date='+date,
				success:function(html){
					$('#event_list').html(html);
					$('#event_add').slideUp('slow');
					$('#event_list').slideDown('slow');
				}
			});
		}
		
		/*
		* function name add_event_information
		* Description :- Add Event inforation as per date wise
		* parameter :- date
		*/
		function add_event_information(date){
			$('#eventDate').val(date);
			$('#eventDateView').html(date);
			$('#event_list').slideUp('slow');
			$('#event_add').slideDown('slow');
		}
		/*
		*  below code used for save event information into databse. and set message event created successfully.
		*/
		$(document).ready(function(){
			$('#add_event_informationBtn').on('click',function(){
				var date = $('#eventDate').val();
                var title = $('#eventTitle').val();
                var mmsg = $('#eventDetail').val();
				$.ajax({
					type:'POST',
					url:'function.php',
                    data:'fun_type=add_event_information&date='+date+'&title='+title+'&mmsg='+mmsg,
                    	  //dataType: "text",
                beforeSend: function()
                {
                    $("#message").fadeOut();
                    $(".btn-submit").html('<img src="../img/processing.gif" width="30" /> &nbsp; please wait');
                },
                    success:function(msg){
						if(msg == 'ok'){
							var dateSplit = date.split("-");
                            $('#eventTitle').val('');
                            $('#eventDetail').val('');
                            $("#message").fadeIn(1000, function(){
				       $("#message").html('<span class="text-success"> <i class="fa fa-check"></i> &nbsp; Event Created. </span>');
					   $(".btn-submit").html('<i class="Add');
	   
				   });
				   $('#insertClass')[0].reset();
							//alert('Event Created.');
							get_calendar_data('calendar_div',dateSplit[0],dateSplit[1]);
						}else{
                            $("#message").fadeIn(1000, function(){

                        $("#message").html('<span class="text-danger"><i class="fa fa-info-circle"></i> &nbsp; '+msg+' !</span>');
                        $(".btn-submit").html('Add');
                        }); 
							//alert('Sorry some issues please try again later.' + msg );
						}
					}
				});
			});
		});
		
		$(document).ready(function(){
			$('.date_cell').mouseenter(function(){
				date = $(this).attr('date');
				$(".date_popup_wrap").fadeOut();
				$("#date_popup_"+date).fadeIn();	
			});
			$('.date_cell').mouseleave(function(){
				$(".date_popup_wrap").fadeOut();		
			});
			$('.month_dropdown').on('change',function(){
				get_calendar_data('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
			});
			$('.year_dropdown').on('change',function(){
				get_calendar_data('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
			});
			$(document).click(function(){
				$('#event_list').slideUp('slow');
			});
		});
		
		// Closed popup string	
		function close_popup(event_id)
		{
			$('#'+event_id).css('display','none');
		}
	</script>
<?php
}
/*
 * below function with get all month  list
 * optional parameter >> $selected
 */
function get_all_months__of_year($selected = ''){
	$options = '';
	for($i=1;$i<=12;$i++)
	{
		$value = ($i < 01)?'0'.$i:$i;
		$selectedOpt = ($value == $selected)?'selected':'';
		$options .= '<option value="'.$value.'" '.$selectedOpt.' >'.date("F", mktime(0, 0, 0, $i+1, 0, 0)).'</option>';
	}
	return $options;
}
/*
 * below function with get all year list
 * optional parameter >> $selected
 */
function get_year($selected = ''){
	$options = '';
	for($i=2015;$i<=2025;$i++)
	{
		$selectedOpt = ($i == $selected)?'selected':'';
		$options .= '<option value="'.$i.'" '.$selectedOpt.' >'.$i.'</option>';
	}
	return $options;
}
/********************************************
 * below function used for display event as per date
 * optional parameter is date.
 *******************************************/
function get_events_information($date = ''){
	
		//below line for including file of database connection file
        include '../includes/connection.php';
	$eventListHTML = '';
	$date = $date?$date:date("Y-m-d");
	//Get events based on the current date
	$result = $db->query("SELECT * FROM events WHERE event_date = '".$date."'");
	if($result->num_rows > 0){
       
        $eventListHTML .= '<div class="modal-content" style="width:50%; margin:0 auto; background:rgba(0,0,0,.5);">';
        $eventListHTML .= '<div class="modal-dialog">';
        $eventListHTML .= '<span class="close text-danger"><a href="#" onclick="close_popup("event_list")">×</a></span>';
        $eventListHTML .= '<div class="modal-body">';
		$eventListHTML .= '<h2>Events on '.date("l, d M Y",strtotime($date)).' <!--<a href="" class="text-warning"><span class="fa fa-pencil"></span> Edit</a>--></h2>';
		$eventListHTML .= '<div class="row">';
		while($row = $result->fetch_assoc()){ 
            $eventListHTML .= '<div class="col-lg-12 bg-white" style="margin-bottom:15px;color:#000;">
            <h5>'.$row['page_title'].'</h5>
            '.$row['details'].'
            </div>
            
            ';

        }
		$eventListHTML .= '</div>';
        $eventListHTML .= '</div>';
        $eventListHTML .= '</div>';
        $eventListHTML .= '</div>';
        
	}
	echo $eventListHTML;
}
/**********************************************************
 * below function is used for add event in paraticular date
 * parameter is >>> date , title
 **********************************************************/
function add_event_information($date,$title,$mmsg){
	
		//below line for including file of database connection file
	
        include '../includes/connection.php';
	$currentDate = date("Y-m-d H:i:s");
	//Insert the event data into database
	$insert = $db->query("INSERT INTO events (page_title,details,event_date,posted_on,update_on) VALUES ('".$title."','".$mmsg."','".$date."','".$currentDate."','".$currentDate."')");
	if($insert){
		echo 'ok';
	}else{
		echo $db->error;
	}
}
?>