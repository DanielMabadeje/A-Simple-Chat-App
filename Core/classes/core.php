<?php
class core
{
    protected $db, $result;
    private $rows;


    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'ajaxchat');
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }
    public function query($sql)
    {
        $this->result = $this->db->query($sql);
    }
    public function rows()
    {
        for ($i = 1; $i <= $this->db->affected_rows; $i++) {
            $this->rows[] = $this->result->fetch_assoc();
        }
        return $this->rows;
    }
}
