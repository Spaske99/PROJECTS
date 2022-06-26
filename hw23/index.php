<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <?php
            if (isset($_SESSION["cookie"])) {
                echo 'COOKIES ARE SET !';
            } else if (isset($_POST["submit"])) {
                $_SESSION["cookie"] = "cookie";
            } else { ?>
            <div id="myCookie" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">This site contains cookies</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>You must accept our cookie policy to continue</p>
                        </div>
                        <div class="modal-footer">
                            <form action="index.php" method="POST">
                                <button type="submit" name="submit" class="btn btn-primary">ACCEPT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <script>
        $(document).ready(function() {
            $("#myCookie").modal();
        });
    </script>
</body>
</html>
