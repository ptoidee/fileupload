<?php 
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        echo $file;
    }
?>