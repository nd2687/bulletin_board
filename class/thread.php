<?php

class Thread extends Base {

    public function create() {
        $new_record = $this->pdo->prepare("INSERT INTO threads SET title=:title, body=:body, created_at=now()");
        $new_record->bindParam(':title', $_POST['title']);
        $new_record->bindParam(':body', $_POST['body']);
        $new_record->execute();

        header("Location: /");
    }

    public function get_list() {
        if (isset($_POST['search_word'])) {
            $search_word = $_POST['search_word'];
            $like_search_word = "'%".$search_word."%'";
            $sql = "SELECT * FROM threads WHERE title LIKE " . $like_search_word . " order by created_at desc";
            $result = $this->pdo->query($sql);
            $result = $result->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $result = $this->pdo->query('SELECT * FROM threads order by created_at desc');
            $result = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $result;
    }

    public function show() {
        $sql_thread = $this->pdo->prepare("SELECT * FROM threads where id = :id");
        $sql_thread->bindParam(':id', $_GET['id']);
        $sql_thread->execute();
        $thread = $sql_thread->fetch();

        return $thread;
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM threads WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header("Location: index.php");
    }

    public function show_response($id) {
        $sql_res = $this->pdo->prepare("SELECT * FROM responses where thread_id = :id order by created_at desc");
        $sql_res->bindParam(':id', $id);
        $sql_res->execute();
        $result = $sql_res->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

?>
