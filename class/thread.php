<?php

class Thread extends Base {

    public function get_thread_list() {
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

    public function show_thread() {
      $sql_thread = $this->pdo->prepare("SELECT * FROM threads where id = :id");
      $sql_thread->bindParam(':id', $_GET['id']);
      $sql_thread->execute();
      $thread = $sql_thread->fetch();
      return $thread;

/*
      $sql_res = $pdo->prepare("SELECT * FROM responses where thread_id = :id order by created_at desc");
      $sql_res->bindParam(':id', $id);
      $sql_res->execute();
*/
    }
    public function delete_thread($id) {
      $stmt = $this->pdo->prepare("DELETE FROM threads WHERE id = :id");
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      header("Location: index.php");
    }
}

?>
