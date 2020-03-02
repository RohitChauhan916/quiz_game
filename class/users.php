<?php
session_start();
    class users {
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $db_name = "quizgames";
        public $conn;
        public $row;
        public $data;
        public $cat;
        public $qus;

    public function __construct()
    {
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->db_name);
        if($this->conn->connect_errno)
        {
            die ("databse connection failed".$this->conn->connect_errno);
        }
    }

    public function register($data) {
        $this->conn->query($data);
        return true;
    }

    public function signin($email, $pass){
        $query = $this->conn->query("select email,password from register where email='$email' and password='$pass'");
        $query->fetch_array(MYSQLI_ASSOC);
        if($query->num_rows>0)
        {
            $_SESSION['reg_email']=$email;
            return true;
        }
        else
        {
            return false;
        }
    }

    public function users_profile($email){
        $query = $this->conn->query("select * from register where email='$email'");
        $row = $query->fetch_array(MYSQLI_ASSOC);
        if($query->num_rows>0)
        {
           $this->data[] = $row;
        }
        return $this->data;
    }

    public function cat_show(){
        $query = $this->conn->query("select * from category");
        while($row = $query->fetch_array(MYSQLI_ASSOC))
        {
           $this->cat[] = $row;
        }
        return $this->cat;
    }

    public function ques_show($qus){
        //echo $qus;
        $query = $this->conn->query("select * from questions where cat_id='$qus'");
        while($row = $query->fetch_array(MYSQLI_ASSOC))
        {
           $this->qus[] = $row;
        }
        return $this->qus;
    }

    public function answer($data){
        $ans = implode("",$data);
        $right = 0;
        $wrong = 0;
        $no_answer = 0;
        $query = $this->conn->query("select id,ans from questions where cat_id='".$_SESSION['cat']."'");
        while($qust = $query->fetch_array(MYSQLI_ASSOC))
        {
         if($qust['ans']==$_POST[$qust['id']])
         {
            $right++;           
         }
         elseif($_POST[$qust['id']]=="no_attempt")
         {
             $no_answer++;
         }
         else{
             $wrong++;
         }
        }
        $email = $_SESSION['reg_email'];
        $qust = $this->conn->query("insert into answer values ('','$email','$right','$wrong','$no_answer')");
        $array=array();
        $array['right']=$right;
        $array['no_answer']=$no_answer;
        $array['wrong']=$wrong;
        return $array;
    }
    
    public function url ($url){
        header("Location:".$url);
    }
}

?>