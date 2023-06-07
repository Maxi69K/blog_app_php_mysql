<?php
class Post extends QueryBuilder
{
    public $new_post_status = NULL;
    public function createPost()
    {
        $title = $_POST['post_title'];
        $description = $_POST['post_description'];
        $user_id = $_SESSION['logged_user']->id;
        $created_at = date('Y-m-d H:i:s');

        $sql = "INSERT INTO posts VALUES (NULL,:title,:description,:user_id,:created_at)";
        $query = $this->db->prepare($sql);
        $query->execute(["title" => $title, "description"=>$description,"user_id" => $user_id, "created_at" => $created_at]);

        if ($query) {
            $this->new_post_status = true;
        } else {
            $this->new_post_status = false;
        }        
    }
    public function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute(["id" => $id]);
        
    }
}