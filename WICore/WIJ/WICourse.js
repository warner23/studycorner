$(document).ready(function () {

var course_id = $.cookie("course_id");
//alert(course_id);


$.ajax({
        url: "WICore/WIClass/WIAjax.php",
        type: "POST",
        data: { 
            action : "courseInfo",
            id  : course_id
        },
        error: function(xhr, status, error) {
  var err = eval("(" + xhr.responseText + ")");
  alert(err.Message);
},
        success : function(result){
           // console.log(result);
           
    var jsonData = JSON.parse(result);
    //console.log(jsonData);
    //alert(jsonData); 
    var name       = jsonData["0"][3];
    var skills     = jsonData["0"][4];
    var descript   = jsonData["0"][2];
    var teacher    = jsonData["0"][5];
    var id         = jsonData["0"][1];
    var img         = jsonData["0"][6];


        $('#name').html(name);
       $('#skills').html(skills); 
       $('#desc').html(descript);
       $('#teacher').html(teacher); 
      $('#id').attr("id", id);
      $('#image').attr("src", img);

      WICourse.checkcourses();
}

});
});

var WICourse = {};


WICourse.checkcourses = function(){
 var course_id = $.cookie("course_id");
 var teacher = $(".title_content").attr('id');  
 var userId  = $(".details").attr('id');

//alert(course_id);
//alert(teacher);
//alert(userId);

$.ajax({
        url: "WICore/WIClass/WIAjax.php",
        type: "POST",
        data: { 
            action : "checkCourse",
            id  : course_id,
            user_id  : userId
        },
        error: function(xhr, status, error) {
  var err = eval("(" + xhr.responseText + ")");
  alert(err.Message);
},
        success : function(result){
           // console.log(result);
           // alert(result);
          // window.location = "product.php";
    var jsonData = JSON.parse(result);
    //console.log(jsonData);
    //alert(jsonData); 
    if(jsonData === "1") {
        var enrol = ("<div class='alert alert-success'>You are already Enrolled for this course</div>");
        $('#enrol').html(enrol);
    }else{
        var enrol = ("<div> <button class='btn' onclick='WICourses.enrol("+userId+")' >Enrol</button</div>");
        $('#enrol').html(enrol);
    }


}

})

}

