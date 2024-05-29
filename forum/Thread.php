<?php
require_once 'Connection.php';
class Thread
{
    public static function GetAllThreads(){
        $query = 'SELECT * FROM `thread`';
        $con = new Connection();
        return $con->getData($query);
    }
    public static function GetThreadMessages($threadId){
        $query = 'SELECT * FROM `message` where `thread_id` = "'.$threadId.'"';
        $con = new Connection();
        return $con->getData($query);
    }
    public static function PostMessage(int $threadId, string $author, string $content){
        $dt = date('Y-m-d H:i:s');

        $query = "select * from `message`";
        $con = new Connection();
        $arr = $con->getData($query);
        $id = (end($arr)['id'])+1;

        $query = "INSERT INTO `message` (`id`, `thread_id`, `author`, `author_id`, `message`, `date`) VALUES ($id, $threadId,'$author', 0, '$content', '".$dt."');";
        echo $query;
        $con = new Connection();
        $con->executeQuery($query);
    }
    public static function createThread($topic, $username, $user_id){
        $dt = date('Y-m-d H:i:s');

        $query = "select * from `thread`";
        $con = new Connection();
        $arr = $con->getData($query);
        $id = (end($arr)['id'])+1;

        $query = "INSERT INTO `thread` (`id`, `topic`,`author`, `author_id`, `date`) VALUES ($id, $topic, '$username', $user_id, '$dt');";
        $con = new Connection();
        $con->executeQuery($query);

    }
}