$(document).ready(function () {
    //button register click
    $("#chat_submit").click(function () {
    	 event.preventDefault();
        alert('clicked');
    	 var chat_name            = $("#name").val(),
                chat_question     = $("#question").val(),
                chat_student      = $(".student").attr('id');



            //create data that will be sent to server
            var Chat = { 
                ChatData: {
                    chat_name            : chat_name,
                    chat_question        : chat_question,
                    chat_student         : chat_student
                },
                fieldId: {
                    chat_name            : "name",
                    chat_question        : "question",
                    chat_student         : "stuent"
                }
            };
       //send data to server
       WIChat.Submit_chat(Chat);
        });
});

var WIChat = {};

WIChat.Open = function(){
	$("#chat").css("display", "block");
	$("#chat").slideDown("slow");	
}

WIChat.Close = function(){
	$("#chat").css("display", "none");
	$("#chat").slideUp("slow");
}

WIChat.Submit_chat = function(Chat){


	 $.ajax({
        url: "WICore/WIClass/WIAjax.php",
        type: "POST",
        data: {
            action  : "chat_submit",
            Chat    : Chat
        },
        success: function (result) {
            //return button to normal state

            console.log(result);
            
            //parse result to JSON
            var res = JSON.parse(result);
            if ($res.status == "complete") {
                // do something
            }
            

        }
    });
}

