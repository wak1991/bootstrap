$(document).ready(function(){
	$("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'mail.php');
			return false;
		}
		);
});

function sendAjaxForm(result_form, ajax_form, url){
	$.ajax({
		url: url,
		type: "POST",
		dataType: "html",
		data: $("#"+ajax_form).serialize(),
		success: function(response){
			result = $.parseJSON(response);
			$("#result_form").html('Заявка отправлена');
		},
		error: function(response){
			$("#result_form").html('Ошибка');
		}
	});
}

$(':input','#ajax_form')
 .not(':button, :submit, :reset, :hidden')
 .val('')
 .removeAttr('checked')
 .removeAttr('selected');