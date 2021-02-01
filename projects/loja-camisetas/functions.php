<?php
    function mysqlInsert($con,$table,$values) {
        $con->query("insert into ".$table. " values". $values.";");
    }
?>