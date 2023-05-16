<?php
class Common
{
    public function getAllRecords($connection) {
        $query = "SELECT * FROM student_record";
        $result = $connection->query($query) or die("Error in query1".$connection->error);
        return $result;
    }
}
