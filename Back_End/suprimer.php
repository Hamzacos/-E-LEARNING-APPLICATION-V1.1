<?php
require_once('connection.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "DELETE FROM `students` WHERE `id`=:id;";

    $query = $conn->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    header('Location: student.php');
}