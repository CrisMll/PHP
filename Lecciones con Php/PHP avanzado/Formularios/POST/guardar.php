<?php

if(isset($_POST['titulo']) && isset($_POST['desc'])){
    echo "<h1>".$_POST['titulo']."</h1>";
    echo "<h2>".$_POST['desc']."</h2>";
}