<?php
require_once("database.php");

class User
{
    function create($user)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = ("INSERT INTO users (name, username, email, password, type)
            VALUES (:name, :username, :email, :password, :type)");

        $connection->prepare($sql)->execute($user);
    }

    function select()
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from users";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {
            //id name username email password type
            $data = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "username" => $row['username'],
                "email" => $row['email'],
                "password" => $row['password'],
                "type" => $row['type']
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }


    function select_user($user, $password)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from users where username = '$user' or email = '$user'";

        $data = false;

        foreach ($connection->query($sql) as $row) {
            //id name username email password type
            if ($password == $row["password"]) {
                $data = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "username" => $row['username'],
                    "email" => $row['email'],
                    "password" => $row['password'],
                    "type" => $row['type']
                );
                return $data;
            }
        }
        return $data;
    }

    function select_where($where)
    {
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from users $where";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {
            //id name username email password type
            $data = array(
                "id" => $row['id'],
                "name" => $row['name'],
                "username" => $row['username'],
                "email" => $row['email'],
                "password" => $row['password'],
                "type" => $row['type']
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }
    function update($user)
    {
        //id name username email password type
        $database = new Database();
        $connection = $database->connection();

        $id = $user['id'];
        $name = $user['name'];
        $username = $user['username'];
        $email = $user['email'];
        $password = $user['password'];
        $type = $user['type'];
        

        $stmt = $connection->prepare('UPDATE users SET name = :name, username = :username, email = :email, password = :password, type = :type WHERE id = :id');
        $stmt->execute(array(
            ':name' => $name,
            ':username' => $username,
            ':email' => $email,
            ':password' => $password,
            ':type' => $type,
            ':id' => $id
        ));
    }
}



/*
$user = new User();

// modelo para array do usuario
$user->create(
    array(
        "name" => "Jhonatan Luiz",
        "username" => "Jho",
        "email" => "jho@gmail.com",
        "password" => "123456",
        "type" => "user"
        )
);
*/
