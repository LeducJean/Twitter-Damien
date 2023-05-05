<?php
class LIKE
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function likeMessage($message_id, $user_id)
    {
        // Vérification si l'utilisateur a déjà liké le message
        $query = "SELECT * FROM likes WHERE message_id = :message_id AND user_id = :user_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":message_id", $message_id, PDO::PARAM_INT);
        $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Si l'utilisateur a déjà liké le message, on supprime le like
            $query = "DELETE FROM likes WHERE message_id = :message_id AND user_id = :user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":message_id", $message_id, PDO::PARAM_INT);
            $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
            $stmt->execute();
        } else {
            // Sinon, on ajoute un like
            $query = "INSERT INTO likes (user_id, message_id, countLikes) VALUES (:user_id, :message_id, 1) ON DUPLICATE KEY UPDATE countLikes = countLikes + 1";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":message_id", $message_id, PDO::PARAM_INT);
            $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
            $stmt->execute();
        }
    }

    public function getLikesCount($message_id)
    {
        // Requête pour récupérer le nombre de likes pour le message donné
        $query = "SELECT SUM(countLikes) as likesCount FROM likes WHERE message_id = :message_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":message_id", $message_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Retourne le nombre de likes
        return ($result && $result['likesCount'] > 0) ? $result['likesCount'] : 0;
    }
}
// Connexion à la base de données
$conn = new PDO("mysql:host=192.168.65.164;dbname=connexion", "root", "root");

// Création de l'objet Message


// Récupération de l'ID du message et de l'utilisateur
$message_id = $row["id"];
$user_id = $_SESSION["userId"];

// Vérification si l'utilisateur a cliqué sur "Like"
if (isset($_POST["like"])) {
    // Ajout ou suppression du like
    $message->likeMessage($message_id, $user_id);
}

// Affichage du nombre de likes
$likes_count = $message->getLikesCount($message_id);
echo $likes_count;

// Fermeture de la connexion à la base de données
$conn = null;
