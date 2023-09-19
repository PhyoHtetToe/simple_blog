<?php
require_once "sysgam/DB_hacker.php";
function insertPost($title, $type, $writer, $content, $imglink)
{
    $created_at = getTime();
    $db = dbConnect();
    $qry = "INSERT INTO post (title,type,writer,content,imglink,created_at) 
    
    VALUES
    ('$title',$type,'$writer','$content','$imglink','$created_at')
    ";
    $result = mysqli_query($db, $qry);
    return $result ? "T" : "f";
}
