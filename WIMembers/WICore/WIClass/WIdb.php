<?php

/**
* Database Class
* Created by Warner Infinity
* Author Jules Warner
*/

class WIdb extends PDO
{
	private static $instance;


	    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS)
    {
        try {
            parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME.';charset=utf8', $DB_USER, $DB_PASS);
            $this->exec('SET CHARACTER SET utf8');



            // comment this line if you don't want error reporting
          $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        } catch (PDOException $e) {
            die ( 'Connection failed: ' . $e->getMessage() );
        }
    }

    // this function creates an instance of  WIdb
    public static function getInstance() {
        // create instance if doesn't exist
        if ( self::$instance === null )
            self::$instance = new self(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);

        return self::$instance;
    }
    
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $WIdb = self::getInstance();



        $sth = $WIdb->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        
        $sth->execute();

        $result = $sth->fetchAll($fetchMode);

        $sth->closeCursor();

        return $result;
    }
    

    public function insert($table, $data)
    {
        $WIdb = self::getInstance();

        ksort($data);
        
        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));
        
        $sth = $WIdb->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
        
        foreach ($data as $key => $value) {
            
            //echo ":$key", $value;
            $sth->bindValue(":$key", $value);
        }

        //echo ksort($data);
               
        $sth->execute();
        $sth->closeCursor();
    }
    
    public function update($table, $data, $where, $whereBindArray = array())
    {
        $WIdb = self::getInstance();

        ksort($data);
        
        $fieldDetails = NULL;
        
        foreach($data as $key=> $value) {
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');
        
        $sth = $WIdb->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        
        foreach ($whereBindArray as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        
        
        $sth->execute();

        $sth->closeCursor();
    }
    

    public function delete($table, $where, $bind = array(), $limit = 1)
    {
        $WIdb = self::getInstance();

        $sth = $WIdb->prepare("DELETE FROM $table WHERE $where LIMIT $limit");
        
        foreach ($bind as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();

        $sth->closeCursor();
    }

}

?>