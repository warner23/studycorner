<?php


/**
* Database Class
* Created by Warner Infinity
* Author Jules Warner
*/

class WIParent  
{

    private $mailer;

    //private $WIdb = null;


    /**
     * Class constructor
     */
    function __construct() 
    {
         $this->WIdb = WIdb::getInstance();
        //create new object of WIEmail class
        $this->mailer = new WIEmail();
    }

    public function students()
    {
    	$student = "student";
    	$query = $this->WIdb->prepare('SELECT * FROM WI_Members WHERE `usergroup`=:student');
    	$query->bindParam(':student', $student, PDO::PARAM_STR);
    	$query->execute();

    	while($result = $query->fetch(PDO::FETCH_ASSOC)){
    		echo '
    		 <tr>
      <th scope="row"></th>
      <td>' . $result['username'] . '</td>
    </tr>';
    	}
    }
    

   public function parent()
   {

   }
    
}
