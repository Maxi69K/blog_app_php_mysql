<?php 
class User extends QueryBuilder
{
    public $register_result = NULL;
    public $logged_user = NULL;
    public function registerUser()
    {
        $name = $_POST['register_name'];
        $email = $_POST['register_email'];
        $password = $_POST['register_password'];

        $sql = "INSERT INTO users VALUES (NULL,:name,:email,:password);";
        $query = $this->db->prepare($sql);
        $query->execute(["name"=>$name, "email"=>$email, "password"=>$password]);

        if ($query) {
            $this->register_result = true;
        }
    }
    public function logUser()
    {
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password;";
        $query = $this->db->prepare($sql);
        $query->execute(["email"=>$email, "password"=>$password]);
        $logged_user = $query->fetch(PDO::FETCH_OBJ);

        if ($logged_user != NULL) {
            $_SESSION['logged_user'] = $logged_user;
            $this->logged_user = $logged_user;
        }
    }
    public function getUserWithId($id)
    {
        $sql = "SELECT * FROM users WHERE id = :id;";
        $query = $this->db->prepare($sql);
        $query->execute(["id" => $id]);
        $post_owner = $query->fetch(PDO::FETCH_OBJ);
        return $post_owner;
    }
}