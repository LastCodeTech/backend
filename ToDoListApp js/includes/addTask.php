<?php

require_once("config.php");

if($_SERVER['REQUEST_METHOD'] === "POST"){

    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);


    if(!empty($title) && !empty($description)){

        $query = $pdo->prepare("INSERT INTO tasks(title, description) VALUES(?,?)");
        $insert = $query->execute([$title,$description]);

        if($insert){
            echo "Task added successfully!";
        }else{
            echo "Error occurred!";
        }

    }else{
        echo "Please input title and description to add task!";
    }


}else{
    header("Location: create.php");
    exit();
}
