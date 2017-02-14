<?php

class WIContacts
{

    public function __construct()
    {
        $this->WIdb = WIdb::getInstance();
    }

       public function addNewContact( $postData ) {

        // prepare required objects and arrays
       // $postdata = $result;
        $result = array();
        //var_dump($result);
        //$errors = $reg->validateUser($postData, false);

        // if count ( $errors ) > 0 means that validation didn't passed and that there are errors
        if ( count ($errors) > 0 )
            $result = array(
                "status" => "error",
                "errors" => $errors
            );
        else {
            //validation passed
            $data = $postData['userData'];
            var_dump($data);
            $image = strip_tags($data['image']);
            $name = $data['name'];

            
            $temp = explode(".", $image);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            


            var_dump($newfilename);
            var_dump($name);
            //$path = realpath(dirname(getcwd()));
          // var_dump($path);

            $uploaddir = '/home/warner/public_html/Trintiy/WIAdmin/WIMedia/Img/' . $newfilename;
            var_dump($uploaddir);
            var_dump(move_uploaded_file($newfilename, $uploaddir));
            //var_dump(copy);
           // var_dump(move_uploaded_file);

            //insert user login info
            $this->WIdb->insert('WI_contacts',  array (
                'name'         => $data['name'],
                'address'      => $data['address'],
                'phone'      => $data['phone'],
                'mobile'     => $data['mobile'],
                'email' => $data['email'],
                'image'    => $newfilename
            ));
            

            // get user id
            //$cont_id = $this->WIdb->lastInsertId();

            

            // generate response
            $result = array (
                "status" => "success",
                "msg"    => WILang::get("successfully_added_contact")
            );
        }

        return $result;
    }

        public function selectNamesA()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[aA]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesB()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[bB]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesC()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[cC]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesD()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[dD]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesE()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[eE]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesF()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[fF]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesG()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[gG]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesH()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[hH]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesI()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[iI]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }



    public function selectNamesJ()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[jJ]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesK()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[kK]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesL()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[lL]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesM()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[mM]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesN()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[nN]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesO()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[oO]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesP()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[pP]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesQ()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[qQ]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesR()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[rR]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesS()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[sS]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesT()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[tT]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesU()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[uU]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesV()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[vV]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesW()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[wW]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesX()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[xX]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesY()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[yY]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }

        public function selectNamesZ()
    {
        $query = $this->WIdb->prepare("SELECT name FROM WI_contacts WHERE name REGEXP  '^[^a-zA-Z]*[zZ]' ORDER BY name ASC");
        $query->execute();

        while($res = $query->fetch(PDO::FETCH_ASSOC))
        {
             echo  '<li><a id="name" href="#name">' . $res['name'] . '</a></li>';
        }

    }


        public function displayContact($name)
    {

        $query = $this->WIdb->prepare("SELECT * FROM WI_contacts WHERE name=:name");
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        $json=json_encode($result);
    echo $json;
        //while($res = $query->fetch(PDO::FETCH_ASSOC))
        //{

         //    echo json_encode(array(
          //          'status' => 'sucess',
          //          'message' => 'success'
         ///       ));
       // }

    }
}
?>