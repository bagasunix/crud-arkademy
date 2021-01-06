<?php
require_once 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Aldino Pratama Bagaskara</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/2498dd2392.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- Content here -->
        <div class="row col-lg-12">
            <?php
            require_once 'config/route.php';
            ?>
        </div>
    </div>
</body>
<script>
    function del(id) {
        document.getElementById('tombol-del').href = "?action=delete&id=" + id;
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>