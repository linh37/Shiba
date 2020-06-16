$(document).ready(function(e) {
	$('#Up_img').click(function(){
        $('#img_up').trigger('click');
        console.log(1);
	});
	$("#img_up").change(function(e) {

		for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
			
			var file = e.originalEvent.srcElement.files[i];
			
			var img = document.createElement("img");
			var reader = new FileReader();
			reader.onloadend = function(e) {
				img.src = reader.result;
			}
			reader.readAsDataURL(file);
			$("#img_up").after(img);
	}
	});
});