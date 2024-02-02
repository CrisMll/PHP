<?php

if(isset($_GET['titulo']) && isset($_GET['desc'])){
    echo "<h1>".$_GET['titulo']."</h1>";
    echo "<h2>".$_GET['desc']."</h2>";
}