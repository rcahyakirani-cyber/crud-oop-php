<?php
include("DB.php");

class User extends DB{
   
    public function getAll()
    {
        return $this->connect()->query("SELECT * FROM users")->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        return $this->connect()->query("SELECT * FROM users WHERE id='$id'")->fetch_assoc();
    }

    public function create($data)
    {
        $name = $data['nickname'];
        $username = $data['username'];
        $password = $data['paswword'];

        return $this->connect()->query("INSERT INTO users (nickname, username, paswword) VALUES ('$name', '$username', '$password')");
    }

    public function update($id, $data)
    {
        $name = $data['nickname'];
        $username = $data['username'];
        $password = $data['paswword'];

        return $this->connect()->query("UPDATE users SET nickname='$name', username='$username', paswword='$password' WHERE id='$id'");
    }

    public function delete($id)
    {
        return $this->connect()->query("DELETE FROM users WHERE id='$id'");
    }
}



?>