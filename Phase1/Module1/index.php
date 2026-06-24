<?php 
    $task = "Becomming A full php CMS Web Developer";
    echo $task;
    echo "<br>";
    echo strlen($task);
    echo "<br>";
    echo str_word_count($task);
    echo "<br>";
    echo strrev($task);
    echo "<br>";
    echo strpos($task, "php");
    echo "<br>";
    echo str_replace("php", "python", $task);
    echo "<br>";
    echo substr($task, 0, 5);