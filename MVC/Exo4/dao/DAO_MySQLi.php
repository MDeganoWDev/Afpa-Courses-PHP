<?php
class DAO_MySQLi implements DAO
{

    public static function requete($sql)
    {
        $mysqli = new mysqli("localhost", "root", "", "contact_dwwm11");

        $result = $mysqli->query($sql, MYSQLI_USE_RESULT);

        if (is_bool($result) !== true) {
            $data = [];
            while ($myrow = $result->fetch_array(MYSQLI_ASSOC)) {
                $data[] = $myrow;
            }
        } else {
            $data = $result;
        }
        //return soit un boolean soit un tableau
        $mysqli->close();
        return $data;
    }
}
