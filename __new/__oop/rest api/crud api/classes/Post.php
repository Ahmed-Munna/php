<?php

require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/Main.php";

use Main as Response;

class Post extends Database {

    private $DB;

    public function __construct() {

        $this->DB = Database::__construct();
    }

    public function filter($data) {

        return htmlspecialchars(trim(htmlspecialchars_decode($data)), ENT_QUOTES);
    } 

    // create one post
    public function create(string $title, string $content, string $author) {

        $title = $this->filter($title);
        $content = $this->filter($content);
        $author = $this->filter($author);

        try {

            $sql = "INSERT INTO `posts` (`title`, `content`, `author`) VALUE (:title, :content, :author)";
            $stmt = $this->DB->prepare($sql);
            $stmt->bindParam(":title", $title, PDO::PARAM_STR);
            $stmt->bindParam(":content", $content, PDO::PARAM_STR);
            $stmt->bindParam(":author", $author, PDO::PARAM_STR);
            $stmt->execute();

            $last_id = $this->DB->lastInsertId();
            Response::json(1, 201, "Post has been created successfully", "post_id", $last_id);
        } catch (PDOException $e) {
            Response::json(0, 500, $e->getMessage());
        }
    }

    // fetch all post from db

    public function read($returns = false) {

        try {

            if ($returns !== false) {

                $sql = "SELECT * FROM `posts`";
                $quary = $this->DB->query( $sql );
                if ($quary->rowCount() > 0) {
                    $all_post = $quary->fetchAll(PDO::FETCH_ASSOC);
                    Response::json(1, 201, null, "post", $all_post);
                } else {
                    Response::json(0, 500,"No posts are available");
                }
            } else {
                Response::_404();
            }
        } catch (PDOException $e) {
            Response::json(0,500, $e->getMessage());
        }
    }

    public function update(int $id, array $data) {

        try {
            if (is_numeric($id)) {
                $sql = "SELECT * FROM `posts` WHERE id = {$id}";
                $quary = $this->DB->query( $sql );

                if ($quary->rowCount() > 0) {
                    $all_posts = $quary->fetchAll(PDO::FETCH_ASSOC);

                    $title = (isset($data["title"]) && !empty(trim($data["title"])) ? $this->filter($data["title"]) : $all_posts["title"]);
                    $content = (isset($data["content"]) && !empty(trim($data["content"])) ? $this->filter($data["content"]) : $all_posts["content"]);
                    $author = (isset($data["author"]) && !empty(trim($data["author"])) ? $this->filter($data["author"]) : $all_posts["author"]);

                    $update_sql = "UPDATE `posts` SET `title` = :title, `content` = :content, `author` = :author, `updated_at` = NOW() WHERE id = {$id}";
                    $stmt = $this->DB->prepare($update_sql);
                    $stmt->bindParam(":title", $title, PDO::PARAM_STR);
                    $stmt->bindParam(":content", $content, PDO::PARAM_STR);
                    $stmt->bindParam(":author", $author, PDO::PARAM_STR);
                    $stmt->execute();

                    Response::json(1, 200, "Post Updated Successfully", "post", $this->read(true));
                } else {

                    Response::json(0, 404, "Invalid Post ID.");
                }
            } else {
                Response::_404();
            }

        } catch (PDOException $e) {
            Response::json(0,500, $e->getMessage());
        } 
    }

    public function delete(int $id) {

        try {
            if (is_numeric($id)) {
                //check has any database value
                $fetch_sql = "SELECT * FROM `posts` WHERE id = {$id}";
                $quary = $this->DB->query( $fetch_sql );
                if ($quary->rowCount() > 0) {
                    //delete post from db table
                    $delete_sql = "DELETE FROM `posts` WHERE id = {$id}";
                    $quary = $this->DB->query( $delete_sql );
                    if ($quary->rowCount() > 0) {
                        Response::json(1, 200, "Post has been deleted successfully.");
                    }
                } else {
                    Response::_404();
                }
            } else {
                Response::_404();
            }
        } catch (PDOException $e) {
            Response::json(0,500, $e->getMessage());
        }
    }
}