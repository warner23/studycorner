<?php



/**
 * User class.
 */
class WICourses {

 
    public function __construct()
    {
        $this->WIdb = WIdb::getInstance();
    }

    public function courses()
    {

        $published = 'y';
        $query = $this->WIdb->prepare('SELECT * FROM `WI_courses` WHERE `published` = :published');
        $query->bindParam(':published', $published, PDO::PARAM_STR);
        $query->execute();


        while($result = $query->fetch(PDO::FETCH_ASSOC))
        {
            echo '<li class="list_item col-lg-3 col-md-3 col-sm-3 ' . $result['type'] . '">                  
                     <div class="project_container">                           
                     <div class="img_hover">                     
                     <img src="' . $result['image'] . '" alt="">                      
                     <a class="hover_link" href="course.php" id="' . $result['id'] . '">
                     <span><i class="fa fa-link"></i></span></a>                      
                     <a class="hover_view mfp-image" href="#">
                     <span><i class="fa fa-search"></i></span></a>                   
                      </div>                                        
                      <div class="project_info">                     
                       <h4> <a href="#">' . $result['title'] . '</a> </h4>                     
                       <a href="#">Web Design</a>, <a href="#">Photography</a>    </div>                    </div>               
                        </li>  ';
        }


    }


        public function WICourse($id)
    {

        $query = $this->WIdb->prepare('SELECT * FROM courseInfo WHERE `course_id`=:id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        //echo $query;
        $result = $query->fetchAll();
        $json=json_encode($result);
       echo $json;

       // while($result = $query->fetch(PDO::FETCH_ASSOC))
       // {
            //echo  '<div class="product">
             ////   <div class="thumbnail"><img src="' . $result['img'] . '"/></div>
             //   <div class="caption"><div class="text"><div class="main">' . $result['name'] . '</div>
             //<div class="sub">(shipping $20)</div></div//><div class="button" id=' . $result['name'] . '>£' . $result['price'] . '</div></div>
          //  </div>';



       // }


    }

    public function Enrol($id, $user_id, $teacher, $skills, $name, $description, $img)
    {
    	$Course_id = $id;
    	$userId = $user_id;
    	$teacher_id = "4";


    	$query = $this->WIdb->prepare('INSERT INTO WI_courseList (`course_id`,`student_id`,`teacher_id`,`teacher_name`,`skills`,`name`,`description`,`image`)VALUES (:course_id,:student_id,:teacher_id, :teacher,:skills,:name,:description,:img)');
        $query->bindParam(':course_id', $Course_id, PDO::PARAM_INT);
        $query->bindParam(':student_id', $userId, PDO::PARAM_INT);
        $query->bindParam(':teacher_id', $teacher_id, PDO::PARAM_INT);
        $query->bindParam(':teacher', $teacher, PDO::PARAM_STR);        
        $query->bindParam(':skills', $skills, PDO::PARAM_STR);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        $query->bindParam(':img', $img, PDO::PARAM_STR);
        $query->execute();

         $result = array(
                "status" => "Success",
                "msg"    => "Successfully Enrolled for this course"
            );
            
            echo json_encode($result);

    }

    public function CheckCourse($id, $user_id)
    {
    	$Course_id = $id;
    	$userId = $user_id;

    	//echo   $Course_id .'course';
    	//echo   $userId .'id';

    	$query = $this->WIdb->prepare('SELECT `id` FROM `WI_courseList` WHERE `course_id`=:id AND `student_id`=:userId');
        $query->bindParam(':id', $Course_id, PDO::PARAM_INT);
         $query->bindParam(':userId', $userId, PDO::PARAM_INT);
        $query->execute();
       //var_dump($query) ;
 
       $result = $query->fetchColumn();
       //echo $result;
       //var_dump($result);
       if(!empty($result)){
       		echo json_encode($result['id']) ;
       }else{
       		echo json_encode(0) ;
       }

       

/*
        while($result = $query->fetchAll())
        {
        print_r($result['id']);
        var_dump($result);
        //echo $query;
        if ( count ( $result ) > 0 )
            return $result;
      else
            return null;
    }


       // echo json_encode($result);
    
      // echo $json;
      */
   }


     


}
