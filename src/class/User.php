<?php


class User {
    public $id;
    public $username;
	public $email;
	public $password;
	public $role;

    public function setPassword($password) {
		$this->password = hash('sha256', $password);
        return $this->password;
	}

    public function verifyPassword($password) {
		$hashPassword = hash('sha256', $password);
		return ($hashPassword === $this->password);
	}
}