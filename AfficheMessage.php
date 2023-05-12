<?php
class Database
{
    private $conn;

    public function __construct()
    {
        $ipbdd = "192.168.65.164";
        $usernamebdd = "root";
        $passwordbdd = "root";
        $namebdd = "twitter";

        $this->conn = new mysqli($ipbdd, $usernamebdd, $passwordbdd, $namebdd);

        if ($this->conn->connect_error) {
            die("Connexion échouée : " . $this->conn->connect_error);
        }

        echo "Connexion réussie à la base de données.";
    }

    public function query($sql)
    {
        $result = $this->conn->query($sql);

        if (!$result) {
            die("Erreur de requête : " . $this->conn->error);
        }

        return $result;
    }

    public function getUserName($user_id)
    {
        $sql = "SELECT * FROM user WHERE id='$user_id'";
        $result = $this->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return $row['username'];
        } else {
            return "Error fetching user data.";
        }
    }

    public function getAllMessages()
    {
        $sql = "SELECT messages.*, user.logname FROM messages 
                LEFT JOIN user ON messages.user_id = user.id ORDER BY messages.id DESC";

        $result = $this->query($sql);

        if ($result->num_rows > 0) {
            $messages = array();
            while ($row = $result->fetch_assoc()) {
                $messages[] = array(
                    'author' => $row["logname"],
                    'message' => $row["message"]
                );
            }
            return $messages;
        } else {
            return array();
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }

    public function bdd()
    {
        $db = new Database();

        // Exemple d'utilisation
        $user_id = 1;
        $username = $db->getUserName($user_id);
        echo "Nom d'utilisateur : " . $username . "<br>";

        $messages = $db->getAllMessages();
        foreach ($messages as $message) {
            echo "Auteur : " . $message['author'] . "<br>";
            echo "Message : " . $message['message'] . "<br><br>";
        }
    }
}
