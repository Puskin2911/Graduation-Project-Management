<?php
require_once('./models/repository/userDAO/UserDAO.php');
require_once('./models/entity/User.php');
class UserService
{
    private $userDAO;

    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }
    public function findByEmail($email)
    {
        $result = $this->userDAO->findByEmail($email);
        if ($result) {
            $user = new User($result['id'], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"]);

            return $user;
        } else {
            return null;
        }
    }

    public function findByID($user_id)
    {
        $result = $this->userDAO->findByID($user_id);
        if ($result) {
            $user = new User($result['id'], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"]);

            return $user;
        } else {
            return null;
        }
    }
    public function getAllUser()
    {
        $results = $this->userDAO->getAll();
        $users = array();
        $i = 0;
        if ($results) {
            foreach ($results as $result) {
                $user = new User($result['id'], $result["email"], $result["pass_hashed"], $result["name"], $result["phone_number"], $result["role_id"]);
                $users[$i] = $user;
                $i++;
            }
            return $users;
        } else {
            return null;
        }
    }
}
