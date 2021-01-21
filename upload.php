<?php 
    if(isset($_POST['submit'])){

        $file = $_FILES['file'];
        
        $fileName = $file['name'];
        $fileTmpname = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        $fileNewName = $_POST['filename'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        if ($fileError === 0) {
            $fileDestination = 'upload/'.$fileNewName;
            move_uploaded_file($fileTmpname, $fileDestination);
            header('Location: index.php');
        } else {
            echo "there is an error!";
        }

    }
?>
