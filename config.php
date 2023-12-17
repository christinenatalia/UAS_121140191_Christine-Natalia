<?php

class Connection{
  public $host = "localhost";
  public $password = "!Uaspengweb123";
  public $user = "id21668701_user";
  public $db_name = "id21668701_uas";
  public $conn;

  public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);

    if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

}
class InputSales extends Connection {
    public function inputSales($name, $type, $series, $price, $email) {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM sales WHERE email = '$email'");

        if (mysqli_num_rows($duplicate) > 0) {
            return -1; 
        } else {
            $insertResult = $this->insertSales($name, $type, $series, $price, $email);

            if ($insertResult) {
                return 1;
            } else {
                return 0; 
            }
        }
    }


    public function editSales($id, $name, $type, $series, $price, $email) {
        $updateQuery = "UPDATE sales SET name='$name', type='$type', series='$series', price=$price, email='$email' WHERE id=$id";
        $updateResult = mysqli_query($this->conn, $updateQuery);

        return $updateResult ? 1 : 0;
    }

    public function deleteSales($id) {
        $deleteQuery = "DELETE FROM sales WHERE id=$id";
        $deleteResult = mysqli_query($this->conn, $deleteQuery);

        return $deleteResult ? 1 : 0;
    }
    private function insertSales($name, $type, $series, $price, $email) {
        $insertQuery = "INSERT INTO sales (name, type, series, price, email) VALUES ('$name', '$type', '$series', $price, '$email')";
        $insertResult = mysqli_query($this->conn, $insertQuery);

        return $insertResult;
    }
}



class SelectSales extends Connection {
    public function selectSalesById($id){
        $result = mysqli_query($this->conn, "SELECT * FROM sales WHERE id = $id");
        return mysqli_fetch_assoc($result);
    }

    public function getAllSales() {
        $result = mysqli_query($this->conn, "SELECT * FROM sales");
        $salesData = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $salesData[] = $row;
        }

        return $salesData;
    }
}
