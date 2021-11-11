<?php 
require_once('../../includes/functions.php'); 


$output = array('data' => array());
//$snam = $_SESSION['fname'];

$sql = "
SELECT pu_lga_name, count(pu_name) pu_count, sum(pu_voters_reg_count) reg_voters,
		(SELECT count(pu_name) FROM post_election_info WHERE lga_name=pu_lga_name GROUP BY lga_name) pu_reported_count,
		(SELECT count(pu_name) FROM post_election_info WHERE lga_name=pu_lga_name 
		GROUP BY lga_name)/count(pu_name)*100 percent_reported,(SELECT SUM(total_vote_cast) FROM post_election_info 
		WHERE  id IN (SELECT MAX(id)FROM post_election_info WHERE lga_name=pu_lga_name GROUP BY pu_name) 
		GROUP BY lga_name) total_vote_cast,
		(SELECT SUM(apc_total_vote) FROM post_election_info
		 WHERE  id IN (SELECT MAX(id)FROM post_election_info WHERE lga_name=pu_lga_name GROUP BY pu_name) 
		 GROUP BY lga_name) apc_total_vote,
		 (SELECT SUM(pdp_total_vote) FROM post_election_info WHERE  id IN (SELECT MAX(id) FROM post_election_info WHERE lga_name=pu_lga_name 
		 GROUP BY pu_name) GROUP BY lga_name) pdp_total_vote,
		 (SELECT SUM(lp_total_vote) FROM post_election_info WHERE  id IN (SELECT MAX(id) FROM post_election_info 
		 WHERE lga_name=pu_lga_name GROUP BY pu_name) GROUP BY lga_name) lp_total_vote,

		(SELECT SUM(adc_total_vote) FROM post_election_info WHERE  id IN (SELECT MAX(id) FROM post_election_info 
		 WHERE lga_name=pu_lga_name GROUP BY pu_name) GROUP BY lga_name) adc_total_vote, 

		 (SELECT SUM(adp) FROM post_election_info WHERE  id IN (SELECT MAX(id) FROM post_election_info 
		 WHERE lga_name=pu_lga_name GROUP BY pu_name) GROUP BY lga_name) adp_total_vote, 
		 (SELECT SUM(sdp) FROM post_election_info WHERE  id IN (SELECT MAX(id) FROM post_election_info 
		 WHERE lga_name=pu_lga_name GROUP BY pu_name) GROUP BY lga_name) sdp_total_vote
		 
		 FROM polling_unit 
		 GROUP BY pu_lga_name 
		 
		 ORDER BY pu_lga_name
";
$query = $mysqli->query($sql);

$x = 1;
while ($row = $query->fetch_assoc()) {
 
	$lga_name = $row["pu_lga_name"];
	$pu_count = $row["pu_count"];
	$pu_reported_count = $row["pu_reported_count"];
	$pu_unreported_count = $pu_count - $pu_reported_count;
	$percent_reported = $row["percent_reported"];
	$reg_voters = $row["reg_voters"];
	$total_vote_cast = $row["total_vote_cast"];
	$apc_total_vote = $row["apc_total_vote"];
	$pdp_total_vote = $row["pdp_total_vote"];
	//$lp_total_vote = $row["lp_total_vote"]==null?0:$row["lp_total_vote"];
	//$adc_total_vote = $row["adc_total_vote"]==null?0:$row["adc_total_vote"];
	$adp_total_vote = $row["adp_total_vote"];
	//$sdp_total_vote = $row["sdp_total_vote"]==null?0:$row["sdp_total_vote"];
	$no_voters_reported = '0.0';
	$percent_apc_vote = '0.0';
	$percent_pdp_vote = '0.0';
	$percent_adp_vote = '0.0';
	$percent_votes_per_pu = '0.0';

	//$pacv = number_format($percent_apc_vote,2);
	//$ppv = number_format($percent_pdp_vote,2);
	//$pav = number_format($percent_adp_vote,2);
	//$vpp = number_format($percent_votes_per_pu,2);

	//$link = "onclick=\"getpage('poll_unit_post_election_for_admin.php?op=getadminelectionreportpoll&lga=$lga_name','content')\"";

    //$a = '<a href="#" '.$link.' >"'.$lga_name.'"</a>';
	
	$output['data'][] = array(
		$x,
		$lga_name,
		$pu_count,
		$pu_reported_count,
		$percent_reported,
		$reg_voters,
		$total_vote_cast,
        $apc_total_vote,
		$pdp_total_vote,
		$adp_total_vote,
		$percent_apc_vote,
		$percent_pdp_vote,
		$percent_adp_vote,
		$percent_votes_per_pu

		
	
		

	);

	$x++;
}

// database connection close
$mysqli->close();

echo json_encode($output);