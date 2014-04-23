jQuery(document).ready(function($){
	$('#chat_send').click(function() {
		$.ajax({
			url: base_url+'chat/save_chat',
			type: 'POST',
			data: $(this).closest('form').serialize(),
		})
		.done(function(data) {
			$('#chat_msgs_window').append('<p class="client_msg"><span class="name">'+ $('#client_name').val() + '</span>' +'<span class="time">(' + data + ')</span>' + ': '+$('#msg_area').val()+'</p>');
			$('#msg_area').val('');
			console.log(data);
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		});
		return false;
	});

	// window.onbeforeunload = function(e){
	//     var msg = 'Are you sure?';
	//     e = e || window.event;

	//     if(e)
	//         e.returnValue = msg;

	//     return msg;
	// }
	
});