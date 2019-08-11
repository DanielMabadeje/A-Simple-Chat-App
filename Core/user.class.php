<?php
class user extends core
{
    public function get_session()
    {
        return $_SESSION['login'];
    }
    }