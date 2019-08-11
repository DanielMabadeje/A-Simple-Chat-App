<?php
class Chat extends core
{
    public function fetchmessages()
    {
        $this->query("SELECT chat.message,
        users.username,
        users.user_id
        FROM chat
        JOIN users
        ON chat.user_id = users.user_id
        ORDER BY chat.timestamp DESC");
        return $this->rows();
    }
    public function throwmessage($user_id, $message)
    {
        $this->query("INSERT INTO chat (user_id, message)
        VALUES (" . (int)$user_id . ", '" . $this->db->real_escape_string(htmlentities($message)) . "')");
    }
}
