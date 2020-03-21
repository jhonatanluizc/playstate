<?php
class Cart
{
    function add($id_user, $id_game)
    {
        $game_in_cart = $this->select_where("where id_user = '$id_user' and id_game = '$id_game'");

        if ($game_in_cart) {
            //carts - id, id_game, id_user, quantity

            require_once("database.php");
            $database = new Database();
            $connection = $database->connection();

            $quantity = $game_in_cart[0]["quantity"] + 1;
            $id = $game_in_cart[0]["id"];

            $stmt = $connection->prepare('UPDATE carts SET quantity = :quantity WHERE id = :id');
            $stmt->execute(array(
                ':quantity' => $quantity,
                ':id' => $id
            ));
        } else {
            $this->create($id_user, $id_game);
        }
    }

    function sum($id_user, $id_game, $sum)
    {
        $game_in_cart = $this->select_where("where id_user = '$id_user' and id_game = '$id_game'");

        if ($game_in_cart) {
            //carts - id, id_game, id_user, quantity

            require_once("database.php");
            $database = new Database();
            $connection = $database->connection();

            $quantity = $game_in_cart[0]["quantity"] + $sum;
            $id = $game_in_cart[0]["id"];

            if ($quantity > 0) {
                $stmt = $connection->prepare('UPDATE carts SET quantity = :quantity WHERE id = :id');
                $stmt->execute(array(
                    ':quantity' => $quantity,
                    ':id' => $id
                ));
            } else {
                $this->delete($id);
            }
        } else {
            $this->create($id_user, $id_game);
        }
    }



    function create($id_user, $id_game)
    {
        $database = new Database();
        $connection = $database->connection();

        $cart_data = array(
            "id_user" => $id_user,
            "id_game" => $id_game,
            "quantity" => 1
        );

        $sql = ("INSERT INTO carts (id_game, id_user, quantity)
            VALUES (:id_game, :id_user, :quantity)");

        $connection->prepare($sql)->execute($cart_data);
    }

    function delete($id)
    {
        $database = new Database();
        $connection = $database->connection();

        $stmt = $connection->prepare('DELETE FROM carts WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    function clear($id_user)
    {
        $database = new Database();
        $connection = $database->connection();

        $stmt = $connection->prepare('DELETE FROM carts WHERE id_user = :id_user');
        $stmt->bindParam(':id_user', $id_user);
        $stmt->execute();
    }


    function select_where($where)
    {
        //id id_game id_user quantity
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from carts $where";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {

            $data = array(
                "id" => $row['id'],
                "id_game" => $row['id_game'],
                "id_user" => $row['id_user'],
                "quantity" => $row['quantity']
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }
}
