<?php


class User {
    public $id;
    public $username;
	public $email;
	public $password;
	public $role;

    public function verifyPassword($password) {
		$hashPassword = hash('sha256', $password);
		echo $hashPassword;
		return ($hashPassword === $this->password);
	}
}