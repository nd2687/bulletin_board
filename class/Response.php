<?php

class Response extends Base {

    public function show($id) {
        $sql_res = "SELECT * FROM responses where id = " . $id;
        $result_thread = $this->pdo->query($sql_res);
        $res = $result_thread->fetch();
        return $res;
    }

    public function create() {
        $id = $_POST['id'];
        $name = $_POST['name'] ?: "名無し";
        $body = $_POST['body'];

        $sql_res = $this->pdo->prepare("INSERT INTO responses set thread_id = :id, name = :name, body = :body, created_at = now()");
        $sql_res->bindParam(':id', $id);
        $sql_res->bindParam(':name', $name);
        $sql_res->bindParam(':body', $body);
        $sql_res->execute();

        header("Location: thread.php?id=" . $id);
    }

    public function update($id, $thread_id) {
        $sql_res = $this->pdo->prepare("UPDATE responses set name=:name, body=:body where id=:id");
        $sql_res->bindParam(':name', $_POST['name']);
        $sql_res->bindParam(':body', $_POST['body']);
        $sql_res->bindParam(':id', $id);
        $sql_res->execute();

        header("Location: thread.php?id=" . $thread_id);
    }

    public function delete($response_id, $id) {
        $stmt = $this->pdo->prepare("DELETE FROM responses WHERE id = :id");
        $stmt->bindParam(':id', $response_id);
        $stmt->execute();

        header("Location: thread.php?id=" . $id);
    }

}

?>
