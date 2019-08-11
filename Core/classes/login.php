<?php
class login extends core
{
    public function log_user($username)
    {
    if ($username ==='') {
        echo'input cannot empty';
        return false;
    }elseif($username !==''){
        $this->query("SELECT * FROM users WHERE username='$username'");
       $result= $this->rows();
       if($result){
       foreach($result as $results){
        $_SESSION['uid'] = $results['user_id'];
       }
       return true;
    }else{
        return false;
    }
       
    }
    }
}