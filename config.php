<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <?php
            class Db{
                public $host;
                public $name;
                public $pass;
                public $db;
                public $conn;

                function __construct($host , $name , $pass , $db) {
                    $this->host = $host;
                    $this->name = $name;
                    $this->pass = $pass;
                    $this->db = $db;

                    $this->conn = mysqli_connect($this->host , $this->name , $this->pass , $this->db);

                    if (!$this->conn) {
                        echo "bazaya qosulmadi";
                    }
                }
                public function select($sql){
                    return $query = mysqli_query($this->conn, $sql);
                }
                public function query($sql){
                    $query = mysqli_query($this->conn, $sql);
                }
            }
        ?>
    </body>
</html>
