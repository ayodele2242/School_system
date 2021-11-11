var empTable;

$(document).ready(function() {
	empTable = $("#empTable").DataTable({
		"ajax": "user/retrieve.php",
		"scrollY": 370,
        "scrollX": true,
		"pageLength": 150,
		"order": []
	});
	
});



