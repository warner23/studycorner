$(document).ready(function () {
    //button  click
    $("a.hover_link").click(function () {
      // alert('item submitted');
            //validation passed
            var course_id     = this.id;
            //alert(course_id);
            //$.cookie.set("product_id", "product_id");

             var date = new Date();
 var minutes = 30;
 date.setTime(date.getTime() + (minutes * 60 * 1000));
            $.cookie("course_id", course_id, {expires: date});
            
        });



    
});

var WICourses = {};

WICourses.enrol = (function($userId){
    event.preventDefault();
var userId = $userId;
var course_id = $.cookie("course_id"); //$(".title_content").attr('id');

var teacher = $("#teacher").text(),
skills =$("#skills").text(),
name = $("#name").text(),
description  = $("#desc").text();
img  =  $("#image").attr("src");



$.ajax({
        url: "WICore/WIClass/WIAjax.php",
        type: "POST",
        data: { 
        	action : "Enrol",
            id  : course_id,
            user_id : userId,
            teacher : teacher,
            skills : skills,
            name  : name,
            description  : description,
            img  : img

        },
        error: function(xhr, status, error) {
  var err = eval("(" + xhr.responseText + ")");
  alert(err.Message);
},
        success : function(result){
        	var jsonData = JSON.parse(result);
        	if(jsonData.status === "Success"){
        		
        		 var div = ("<div class='alert alert-success'>"+jsonData.msg+"</div>");
        		 $('#enrol').html(div);
        	}else{
        		var enrol = ("<div class='alert alert-danger'>something went wrong</div>");
    	$('#enrol').html(enrol);
        	}
        }

    });
});