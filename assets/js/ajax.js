function tampil() {
	var search = $("#search").val();

	$.ajax({
		method: "POST",
		url: "list_data.php",
		data: "search=" + search
	})
	.done(function(data) {
		$("#data").html(data);
	})
}

$(document).on("click", ".hapus-data", function() {
	var id = $(this).attr("data-id");
	
	$.ajax({
		method: "POST",
		url: "delete.php",
		data: "id=" +id
	})
	.done(function() {
		tampil();
	})
})

$("#search").keyup(function() {
	var search = $(this).val();
	tampil();
})