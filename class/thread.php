<?php

require_once(dirname(__FILE__)."/../database.php");

class Thread extends Database {
    private $search_word;

    public function get_thread_list($search_word) {

        if($search_word != "") {
            $sql = "SELECT * FROM threads WHERE title LIKE :search_word order by created_at desc";
        }

        try {
            $stmh = $this->pdo->prepare($sql);
            if($search_word != "") {
                $search_word = '%'.$search_word.'%';
                $stmh->bindValue(':search_word', $search_word, PDO::PARAM_STR);
                $stmh->execute();
                $count = $stmh->rowCount();

                $i=0;
                $data = [];
                while ($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
                    foreach( $row as $key => $value) {
                        $data[$i][$key] = $value;
                    }
                    $i++;
                }
            } catch (PDOException $Exception) {
                print "Error:".$Exception->getMessage();
            }
            return [$data, $count];
        }

        if (isset($search_word)) {
            $like_search_word = "'%".$search_word."%'";
            $sql = "SELECT * FROM threads WHERE title LIKE " . $like_search_word . " order by created_at desc";
            $rows = $this->pdo->query($sql);
        } else {
            $sql = "SELECT * FROM threads order by created_at desc";
            $rows = $pdo->query($sql);

            // 削除機能
            //$type = (@$_POST['type']) ?: null;
            //$id = (@$_POST['id']) ?: null;

            //if ($type=='delete' && isset($id)) {

            //    $stmt = $pdo->prepare("DELETE FROM threads WHERE id = :id");
            //    $stmt->execute(':id', $id);

            //    header("Location: index.php");
            //}
        }
    }
}

?>
