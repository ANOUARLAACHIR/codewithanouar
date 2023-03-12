<?php 
class SignUpCont {
    private $user_id;
    private $full_name;
    private $username;
    private $email;
    private $password;
    private $c_password;
    private $status;
    private $birth_date;
    private $phone;
    private $country;
    private $city;
    public function __construct($user_id, $full_name, $username, $email, $password, $c_password, $status, $birth_date, $phone, $country, $city) {
        $this->$user_id = $user_id;
        $this->$full_name = $full_name;
        $this->$username = $username;
        $this->$email = $user_id;
        $this->$password = $password;
        $this->$c_password = $c_password;
        $this->$status = $status;
        $this->$birth_date = $birth_date;
        $this->$phone = $phone;
        $this->$country = $country;
        $this->$city = $city;
    }
}