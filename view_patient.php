/* Hospital-Management-System
Here I create HMS using PHP and MySQL
Viwe patient class page */

<?php

class View_patient {
    
    public function selectAll($order) {
        if ( !isset($order) ) {
            $order = "full_name";
        }
        $dbOrder =  mysql_real_escape_string($order);
        $dbres = mysql_query("SELECT * FROM patient ORDER BY $dbOrder ASC");
        
        $patient = array();
        while ( ($obj = mysql_fetch_object($dbres)) != NULL ) {
            $patient[] = $obj;
        }
        
        return $patient;
    } 
}

?>
