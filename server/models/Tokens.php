<?php 

namespace Models;
use Models\core\Database;
class Tokens
{
    private static $conn = Database::getConnection();

    public static function createToken($user_id, $token, $type, $tokenExp) {
        try {
            $query = "INSERT INTO tokens (user_id, token, type, tokenExp) VALUES (:user_id, :token, :type, :tokenExp)";
            $statement = self::$conn->prepare($query);
            $statement->execute([
                ':user_id' => $user_id,
                ':token' => $token,
                ':type' => $type,
                ':tokenExp' => $tokenExp
            ]);
            if ($statement->rowCount() === 0) {
                return false;
            }
            return true;
        } catch (\PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            return false;
        }
    }

    public static function getToken($user_id, $type) {
        try {
            $query = "SELECT * FROM tokens WHERE user_id = :user_id AND type = :type";
            $statement = self::$conn->prepare($query);
            $statement->execute([
                ':user_id' => $user_id,
                ':type' => $type
            ]);
            $tokenData = $statement->fetch(\PDO::FETCH_ASSOC);
            if ($tokenData) {
                return new Token(
                    $tokenData['id'],
                    $tokenData['user_id'],
                    $tokenData['token'],
                    $tokenData['type'],
                    $tokenData['tokenExp']
                );
            }
            return null;
        } catch (\PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            return null;
        }
    }

    public static function deleteToken($user_id, $type) {
        try {
            $query = "DELETE FROM tokens WHERE user_id = :user_id AND type = :type";
            $statement = self::$conn->prepare($query);
            $statement->execute([
                ':user_id' => $user_id,
                ':type' => $type
            ]);
            if ($statement->rowCount() === 0) {
                return false;
            }
            return true;
        } catch (\PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            return false;
        }
    }

    public static function isTokenValid($token) {
        try {
            $sql = "SELECT tokenExp FROM tokens WHERE token = :token";
            $stmt = self::$conn->prepare($sql);
            $stmt->execute(array(':token' => $token));
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            if($result == null){
                return false;
            }
            $exp = $result['tokenExp'];
            $now = new \DateTime();
            $exp = new \DateTime($exp);
            if($now > $exp){
                return false;
            }
            return true;
        } catch (\PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            return false;
        }
    }

}