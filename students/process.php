<?php
include '../conn.php';
session_start();
if (isset($_POST['insert'])) {
    $card = $_FILES['card']['name'];
    $card_tmp = $_FILES['card']['tmp_name'];
    $birth = $_FILES['birth']['name'];
    $birth_tmp = $_FILES['birth']['tmp_name'];
    $form = $_FILES['form_137']['name'];
    $form_tmp = $_FILES['form_137']['tmp_name'];
    $good = $_FILES['good']['name'];
    $good_tmp = $_FILES['good']['tmp_name'];
    $name_uploader = $_POST['name'];
    // $status = $_POST['status'];

    $chk = mysqli_query($conn, "SELECT * FROM documents WHERE uploader_email = '$name_uploader'");
    if ($chk->num_rows == 0) {
        $insert = mysqli_query($conn, "INSERT INTO documents VALUE('0','$card','$birth','$form','$good','$name_uploader','')");

        if ($insert == true) {
            move_uploaded_file($card_tmp, "card/" . $card);
            move_uploaded_file($birth_tmp, "Birth_cert/" . $birth);
            move_uploaded_file($form_tmp, "Form_137/" . $form);
            move_uploaded_file($good_tmp, "Good_moral/" . $good);

?>
            <script>
                alert("Upload Success!");
                location.href = 'upload.php';
            </script>
        <?php

        } else {
        ?>
            <script>
                alert("Upload Error!");
                location.href = 'upload.php';
            </script>
<?php
        }
    } else {
        ?>
            <script>
                alert("You already uploaded requirements!");
                location.href = 'upload.php';
            </script>
<?php
    }
}

//for updating 
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $uploader_email = $_POST['name'];

    // $upload_directory = 'card';
    // if (!file_exists($upload_directory)) {
    //     mkdir($upload_directory, 0777, true);
    // }

    function handleFileUpload($fieldName, $oldFilename = '')
    {
        // global $upload_directory;
        if (isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] === UPLOAD_ERR_OK) {
            $newFilename = $_FILES[$fieldName]['name'];
            $tmpFilePath = $_FILES[$fieldName]['tmp_name'];
            $newFilePath = $fieldName . '/' . $newFilename;
            move_uploaded_file($tmpFilePath, $newFilePath);
            return $newFilename;
        } else {
            return $oldFilename;
        }
    }


    $query = "SELECT card_img, birth_img, form_img, good_img FROM documents WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // Handle file uploads for each image type
    $card_img = handleFileUpload('card', $row['card_img']);
    $birth_img = handleFileUpload('Birth_cert', $row['birth_img']);
    $form_img = handleFileUpload('Form_137', $row['form_img']);
    $good_img = handleFileUpload('Good_moral', $row['good_img']);

    $update_query = "UPDATE documents SET card_img = '$card_img', birth_img = '$birth_img', form_img = '$form_img', good_img = '$good_img', uploader_email = '$uploader_email' WHERE id = '$id'";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        echo '<script>alert("Images updated successfully!");</script>';
        echo '<script>window.location.href = "records.php";</script>';
    } else {
        echo '<script>alert("Error updating images!");</script>';
        echo '<script>window.location.href = "records.php";</script>';
    }
}
?>