 <style type="text/css">




 .ui-state-hover a, .ui-state-hover a:hover, .ui-state-hover a:link, .ui-state-hover a:visited, .ui-state-focus a, .ui-state-focus a:hover, .ui-state-focus a:link, .ui-state-focus a:visited, a.ui-button:hover, a.ui-button:focus {
    color: #2b2b2b;
    text-decoration: none;
}

.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus, .ui-button:hover, .ui-button:focus {
    border: 1px solid #cccccc;
    background: #ededed;
    font-weight: normal;
    color: #2b2b2b;
}

.ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br {
    border-bottom-right-radius: 3px;
}

.ui-widget {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 1em;
}

.ui-button {
    padding: .4em 1em;
    display: inline-block;
    position: relative;
    line-height: normal;
    margin-right: .1em;
    cursor: pointer;
    vertical-align: middle;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    overflow: visible;
}

 .panel{
      width: 100%;
    float: left;
 }

 .title {
    margin: 412px auto 6px;
    /* position: relative; */
    text-align: center;
}

 /* Tablet Layout: 481px to 768px. Inherits styles from: Mobile Layout. */

@media only screen and (min-width: 481px) {

 .panel{
      width: 66%;
    float: left;
 }

}

/* Desktop Layout: 769px to a max of 1232px.  Inherits styles from: Mobile Layout and Tablet Layout. */

@media only screen and (min-width: 769px) {

 .panel{
      width: 66%;
    float: left;
 }
}


 </style>

                       <!--Start TITLE PAGE-->   
<section class="title_page bg_3">     
<div class="container">       
<div class="row">         
<div class="col-lg-12 col-md-12 col-sm-12">           
<h2>Course</h2>           
<nav id="breadcrumbs">              
<ul>                
<li><a href="index.html">Home</a></li>                
<li><a href="index.html">Course</a></li>              
 <li>Single</li>             </ul>           
 </nav>          </div>       
  </div>      </div>   
   </section>    
   <!--End TITLE PAGE-->       
   <section class="content p_single">      
   <div class="container">       
   <div class="row mrgb_30">         
   <div class="col-lg-12 col-md-12 col-sm-12" data-effect="slide-bottom">           
    <ul class="portfolio_single">                                          
     <li><img alt="blog post image" id="image" src="WIMedia/Img/courses/maths3.jpg"></li>                     
     </ul>         </div> <!--End Col -->                    
               
     
 

<div class="panel panel-default">                
 <!-- Default panel contents -->                 
 <div class="panel-heading">Mathematics</div>                 
  <div class="panel-body">                    
  <p>Algebra, calculus, trig</p>                 
  </div>              			
<div class="title_content">							
<h3>Content</h3>						
</div>              			
<table class="table table-striped" data-effect="fade">			              
<thead>			               
 <tr>			                  
 <th></th>			                 
  <th>Module</th>			                  
  <th>Progress</th>			                  
  <th></th>			                
  </tr>			              
  </thead>			              
  <tbody>			                
  <tr>			                  
  <td>1</td>			                  
  <td>Algebra</td>			                  
  <td>Not started</td>			                  
  <td><a href="MATH/algrebra.php" id="start" role="button" class="btn ui-button ui-corner-all ui-widget">Start Module</a></td>			               
   </tr>			                
   <tr>			                  
   <td>2</td>			                 
    <td>Godfather</td>			                  
    <td>Thornton</td>			                  
    <td>@Godfather</td>			                
    </tr>			                
    <tr>			                 
     <td>3</td>			                 
      <td>Pulp</td>			                  
      <td>Fiction</td>			                 
       <td>@fiction</td>			                
       </tr>			                
       <tr>			                 
        <td>4</td>			                  
        <td>Jhoen</td>			                 
         <td>Fiction</td>			                  
         <td>@jhoen</td>			                
         </tr>			              
         </tbody>			            
         </table>                		
         </div> 
                
                         
               
       <div class="title" id="id">             
       <h3>Course Details</h3>        
       </div>            
       <ul class="details" id="<? echo WISession::get("user_id")  ?>">             
        <li>Teacher :<span id="teacher">Jhoen Doe</span> </li>              
        <li>Skills :<span id="skills">Web Design, HTML Coding, Illustrator</span> </li>                         
        <li >Category :<span id="name">Web Design</span> </li>             
        <li>Date :<span>05 January 2016</span> </li>              
        </ul>               
         <!--END ROW-->       
                   
      

                    </div> 
                       </section> 

            
            <script type="text/javascript" src="WICore/WIJ/WICourse.js"></script> 
             <script type="text/javascript">
                $(document).ready(function () {

var course_id = $.cookie("course_id");
alert(course_id);


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
    var img        = jsonData["0"][6];


        $('#name').html(name);
       $('#skills').html(skills); 
       $('#desc').html(descript);
       $('#teacher').html(teacher); 
      $('#id').attr("id", id);
      $('#image').attr("src", img);

    
}

});

});

$(document).ready(function(){
	$("#start").click(function(){
		window.location = "MATH/algrebra.php";
	})
});



              </script>