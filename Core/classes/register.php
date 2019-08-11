<?php
class register extends core
{
    public function register($username)
    {
        if ($username = '') {
            echo 'Input cannot be empty';
            return false;
        } else {
            $check = $this->query("SELECT * FROM users WHERE username=$username");

            $count_row = $check->num_rows;

            //if the username is not in db then insert to the table

            if ($count_row == 0) {
                $result  = $this->query("INSERT INTO users SET username=$username");
                return $result;
            } else {
                return false;
            }
        }
        // $this->query("")
    }
}
