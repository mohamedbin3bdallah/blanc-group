$(document).ready(function(){
	$(".sizedel").click(function() {
		var id = $(this).attr('id');		
		$("#sizes-"+id).modal('show');
		
});
});

function deletesize(id)
{
	$.ajax({
		type:'POST',
		//data:dataString,
		data: {	
		'id': id,
		},
		url:'../ajaxs/deletesize.php',
		success: function (response) { $("#tr-"+id).hide(); }
	});
}