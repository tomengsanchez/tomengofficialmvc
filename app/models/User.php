<?php
/**
 * User Model
 *
 * Manages user data and database interactions.
 */
class User
{
    private $db;

    public function __construct()
    {
        // In a real application, you would instantiate the database class.
        $this->db = new Database;
    }

    /**
     * Register user with hashed password.
     *
     * @param array $data User data (name, email, password).
     * @return boolean True on success, false on failure.
     */
    public function register($data)
    {
        $this->db->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Login User
     *
     * @param string $email
     * @param string $password The user's entered password.
     * @return mixed The user object on success, false on failure.
     */
    public function login($email, $password)
    {
        $row = $this->findUserByEmail($email);

        if ($row == false) {
            return false;
        }

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    /**
     * Find user by email.
     *
     * @param string $email The user's email address.
     * @return mixed The user object if found, false otherwise.
     */
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
}
