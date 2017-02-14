<?php



/**
 * User class.
 */
class WIChat {

 
 
    public function __construct()
    {
        $this->WIdb = WIdb::getInstance();
    }

    function __destruct()
    {
      $this->WIdb->close();
    }

    public function DeleteAllMessages()
    {
      $query = "TRUNCATE TABLE WI_Chat";
      $result = $this->WIdb->query($query);
    }


        public function postNewMessage($username, $message, $color)
    {

        $query = $this->WIdb->prepare('INSERT INTO `WI_Chat` (posted_on, username, message, color) VALUES(NOW(), :user, :message, :color)');
        $query->bindParam(':user', $username, PDO::PARAM_STR);
        $query->bindParam(':message', $message, PDO::PARAM_STR);
        $query->bindParam(':color', $color, PDO::PARAM_STR);
        $query->execute();

    }

    public function Messages($id, $user_id)
    {
    	$Course_id = $id;
    	$userId = $user_id;
    	$teacher_id = "4";

    	$query = $this->WIdb->prepare('INSERT INTO WI_courseList (`course_id`,`student_id`,`teacher_id`)VALUES (:course_id,:student_id,:teacher_id)');
        $query->bindParam(':course_id', $Course_id, PDO::PARAM_INT);
        $query->bindParam(':student_id', $userId, PDO::PARAM_INT);
        $query->bindParam(':teacher_id', $teacher_id, PDO::PARAM_INT);
        $query->execute();

        $query1 = $this->WIdb->prepare('INSERT INTO courseInfo (`student_id`) VALUES (:student_id');
        $query1 ->bindParam(':student_id', $userId, PDO::PARAM_INT);
        $query1->execute();

         $result = array(
                "status" => "Success",
                "msg"    => "Successfully Enrolled for this course"
            );
            
            echo json_encode($result);

    }

    public function CheckCourse($user_id,$id)
    {
    	$Course_id = $id;
    	$userId = $user_id;


    	$query = $this->WIdb->prepare('SELECT * FROM `WI_courseList` WHERE `course_id`=:id AND `student_id`=:userId');
        $query->bindParam(':id', $Course_id, PDO::PARAM_INT);
         $query->bindParam(':userId', $userId, PDO::PARAM_INT);
        $query->execute();
       
       $result = $query->fetch();
       if(empty($result)){
       		return 0;
       }else{
       		return 1;
       }
       // while($result = $query->fetchAll())
       // {
       // print_r($result['id']);
       // var_dump($result);
        //echo $query;
       // if ( empty ( $result ) )
          //  return $result;
    //  else
           // return null;
    }


       // echo json_encode($result);
    
      // echo $json;

    public function OpenChat($Chat)
    {
      $user = $Chat['ChatData'];

      $status = "requested";
      $query = $this->WIdb->insert('WI_Chat', array(
            "student_id"     => $user['chat_student'],
            "name"  => strip_tags($user['chat_name']),
            "status"  => $status,
            "time" => date("Y-m-d H:i:s"),
        ));

      $ChatId = $this->WIdb->lastInsertId();

      $msg = "";

      $result = array(
        "status" => "complete",
        "msg"  => $msg 
        );
    }


}