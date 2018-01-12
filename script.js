$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
	url: "ajax_php_file.php", // Url to which the request is send
	type: "POST",             // Type of request to be send, called as method
	data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
	contentType: false,       // The content type used when sending data to the server.
	cache: false,             // To unable request pages to be cached
	processData:false,        // To send DOMDocument or non processed data file it is set to false
	success: function(data){
		$('#loading').hide();
		$("#message").html(data);
	}
});

}));

// Function to preview image after validation
$(function() {
	$("#file").change(function() {
	$("#message").empty(); // To remove the previous error message
	var file = this.files[0];
	var imagefile = file.type;
	var match= ["image/jpeg","image/png","image/jpg","text/plain","application/pdf", "application/msword", "application/x-rar-compressed",
	"application/zip", "application/octet-stream"];

if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]) || (imagefile==match[4]) || (imagefile==match[5])
	|| (imagefile==match[6]) || (imagefile==match[7]) || (imagefile==match[8]) ))
{
	$('#previewing').attr('src','noimage.png');
	$("#message").html("<p id='error'>Por favor, selecione um tipo de arquivo válido</p>"+
						"<h4>Note</h4>"+
						"<span id='error_message' style='color:#6600cc'>Permitido arquivos imagem(jpg, png, jpeg), TXT, PDF !</br>"+
						"Caso o arquivo for ZIP ou RAR pode REALIZAR O UPLOAD TRANQUILO</span>");
	return false;
}else{
	var reader = new FileReader();
	reader.onload = function(e){

		if(imagefile == match[3] || imagefile == match[4]){
			$('#previewing').attr('src', 'image/imgtext.png');
		}else{
			$('#previewing').attr('src', e.target.result);
		}

		$("#file").css("color","green");
		$('#image_preview').css("display", "block");
		$('#previewing').attr('width', '250px');
		$('#previewing').attr('height', '230px');
		
	}
	reader.readAsDataURL(this.files[0]);
}
});
});
});
