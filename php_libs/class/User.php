<?php

class User extends Base {

    public function get_by_id() {
        $records = $this->pdo->prepare('SELECT id,email,password FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        return $results;
    }

    public function get_by_email() {
        $records = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        return $results;
    }

    public function regist() {
        // Enter the new user in the database
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':email', $_POST['email']);
        $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);

        if ($stmt->execute()):
            $message = 'Successfully created new user';
        else:
            $message = 'Sorry there must have been an issue creating your account';
        endif;

        return $message;

    }

    public function update($user) {
        if (!empty($_POST['password'])) {
            $stmt = $this->pdo->prepare("UPDATE users set email=:email, password=:password where id=:id");
            $email = ($_POST['email']) ?: $user['email'];
            $stmt->bindParam(':email', $email);
            $password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $password_hash);
            $stmt->bindParam(':id', $user['id']);
        } else {
            $stmt = $this->pdo->prepare("UPDATE users set email=:email where id=:id");
            $email = ($_POST['email']) ?: $user['email'];
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':id', $user['id']);
        }

        if ($stmt->execute()):
            $message = 'Successfully updated your profile';
        else:
            $message = 'Sorry there must have been an issue updating your profile';
        endif;

        return $message;
    }

    public function unsubscribe($user_id) {
        $sql = $this->pdo->prepare('UPDATE users set unsubscribe_flag = 1 where id = :id');
        $sql->bindParam(':id', $user_id);
        $sql->execute();
    }

    public function get_enable_user_list() {
        //論理削除以外
        $sql = "SELECT * FROM users WHERE unsubscribe_flag = 0";
        $result = $this->pdo->query($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

?>
