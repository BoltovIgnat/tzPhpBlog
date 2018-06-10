<?php 
        require_once('../pdoClass.php');
        $server = "127.0.0.1";
        $user = "root";
        $pass = "";
        $dbname = "tz";
        $where = "id =".$_POST[id];
        $values = "text = '".$_POST[text]."', title = '".$_POST[text]."'";
        $db = new DBClass($server, $user, $pass, $dbname);
        $post =  $db->update('post', $values , $where);
        echo ($updated)? true : false;    
        $db = null;
        
?>