<?php 
  class Database {
    // DB Params
    private $host = 'acw2033ndw0at1t7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    private $db_name = 'a92hncin37e75ip0';
    private $username = 'l5bk652owqq1kpwi';
    private $password = 'j74m6sik4xsrkn91';

//     $url = getenv('postgres://brjzxreswjhwwf:2d8fe1726648d450dc5d0cb9123fe16bb96750ce342030f3ab3cc9485c60430e@ec2-52-201-124-168.compute-1.amazonaws.com:5432/d55ma82evf7dd2');
// $dbparts = parse_url($url);

// $hostname = $dbparts['ec2-52-201-124-168.compute-1.amazonaws.com'];
// $username = $dbparts['brjzxreswjhwwf'];
// $password = $dbparts['2d8fe1726648d450dc5d0cb9123fe16bb96750ce342030f3ab3cc9485c60430e'];
// $database = ltrim($dbparts['d55ma82evf7dd2'],'/');


    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

    //   try {
    //     $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected successfully";
    //     }
    // catch(PDOException $e)
    //     {
    //     echo "Connection failed: " . $e->getMessage();
    //     }

      return $this->conn;
    }
  }