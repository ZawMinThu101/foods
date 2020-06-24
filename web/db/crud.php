<?php

    class crud {
        //private database object
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        //function to insert a new reocrd into the attendee database
        public function insertAttendees($fname, $lname,  $quan, $specialty){

            try {
                // define sql statement to be executed
                $sql = "INSERT INTO attendee (firstname,lastname,quantity,specialty_id)
                
                 VALUES (:fname,:lname,:quan,:specialty)";
                
                //prepare the sql statement for execution
                $stmt = $this->db->prepare($sql);

                // bind all placeholders to the actual data
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
               
                $stmt->bindparam(':quan', $quan);
                $stmt->bindparam(':specialty', $specialty);
                //execute statement
                $stmt->execute();
                return true;



            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }




        }

            public function getAttendees(){
                $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id";
                $result = $this->db->query($sql);
                return $result;
            }

            public function getSpecialties(){
                $sql = "SELECT * FROM `specialties`";
                $results = $this->db->query($sql);
                return $results;
            }

    }

?>