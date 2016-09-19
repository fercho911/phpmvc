
    <?php

    class EntidadBase {

        private $table, $db, $conexion;

           public function __construct($table) {
           $this->table = (string)$table ;
           require_once 'config/conexion.php';
           $this->db =  new conexion();
           $this->conexion = $this->db->connect();

        }


        public function selectAll() {

            $query = "select * from $this->table;";
            $resultSet = array();
            $result = $this ->db->query($query);

            if($result === false) {
                return false;
            }
            while ($row = $result -> fetch_assoc()) {
                $resultSet[] = $row;
            }
            return $resultSet;
        }

        function getByid($id){

            $query = "select * from $this->table where id = $id;";
            $resultSet = array();
            $result = $this ->db->query($query);

            if($result === false) {
                return false;
            }
            while ($row = $result -> fetch_assoc()) {
                $resultSet[] = $row;
            }
            return $resultSet; 

        }

        function deleteById($id){

            $query = "DELETE from $this->table where id = $id; ";

            $result = $this ->db->query($query);  

            return $result;
            }


            function getBy($column,$value) {

               $query = "select * from $this->table where $column = $value;";
            $resultSet = array();
            $result = $this ->db->query($query);

            if($result === false) {
                return false;
            }
            while ($row = $result -> fetch_assoc()) {
                $resultSet[] = $row;
            }

            return $resultSet; 

        }  



        public function escape($value) {

            return "'".$this->conexion->real_escape_string($value)."'"; 



        }
    }
