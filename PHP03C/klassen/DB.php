 <?php

class DB {

    static function getVerbindung(){

        $user = "php";
        $password = "php";
        $options = array ( PDO::ATTR_PERSISTENT => TRUE,
                           PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => TRUE,
                           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                           PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                         );
            try {
                return $db = new PDO("mysql:host=localhost; port=3306, dbname=php", $user,
                $password, $options);
            }
            catch (Exception $ex) {
                "Fehler: " . $ex->getMessage();
            } finally {
                $db = null;
            }
    }
}