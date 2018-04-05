function call_receive_question(Answer,PagCall,optionalArg){
	
	if (typeof optionalArg === "undefined") 
	{
		optionalArg = ""; 
	}
	
	$.ajax({
		contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
		type: 'POST',
		url: 'cl_Business/receive_question.php',
		data: {Answer: Answer,PagCall: PagCall,OptionalParameter: optionalArg},
		success: function(data){
			//alert(data);
			window.location.replace(data + ".php");
		},
		error: function(e){
			alert("Error: " + e.message);
		}
	});	
}

$(document).ready(function(){
	document.getElementById("next").style.cursor = "pointer";
});