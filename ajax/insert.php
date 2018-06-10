<?php 
        require_once('../pdoClass.php');
        $server = "127.0.0.1";
        $user = "root";
        $pass = "";
        $dbname = "tz";
        $values = "id = '".$_POST[id]."',text = '".$_POST[text]."', title = '".$_POST[text]."'";
        $db = new DBClass($server, $user, $pass, $dbname);
        $post =  $db->insert('post' , $where);
        echo ($updated)? true : false;    
        $db = null;       
?>