<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>2HKT | EDIT PROFILE PAGE</title>
    <!-- MDB icon -->
    <link rel="icon" href="./images/Logo.svg" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
    <!-- main codeeeeee -->
    <div class="bg-image d-flex justify-content-center align-items-center align-self-center align-content-center "
        style="
        background-image: url('https://static.vecteezy.com/system/resources/previews/002/072/005/original/modern-gradient-purple-blue-background-free-vector.jpg');
        height: 100vh;
      ">
        <div class="mask d-flex justify-content-center align-items-center" style="
          background: linear-gradient(
            40deg,
            rgba(247, 61, 237, 0.651),
            rgba(255, 64, 239, 0.623) 100%
          );
        ">
            <div id="div-responsive"
                class="hover-shadow d-flex justify-content-center flex-column align-items-center container-sm align-self-center align-content-center"
                style="
            background: linear-gradient(
              90deg,
              rgba(53, 53, 53, 0.8),
              rgb(49, 49, 49, 0.8) 100%
            );
            max-height: 550px;
            height: 60%;
          ">
                <h1 class="fw-bold d-flex align-items-start"
                    style="color: rgb(204, 204, 204); margin-top: 50px;margin-bottom:30px;">
                    Edit Profile
                </h1>
                <div class="d-flex justent-center align-self-center align-content-center align-items-center w-75 h-75">
                    <!-- FORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTIONFORM SECTION -->
                    <form method="post" enctype="multipart/form-data" action="edit_profile.php"
                        class="d-flex flex-column flex-fill">
                        <?php
                      
                       require('./db/db.php');


                        if (isset($_POST['submit'])) {
                            if (isset($_POST['cur_username']) && isset($_POST['new_username']) && isset($_POST['cur_pass']) && isset($_POST['new_pass'])) {
                                function validate($data)
                                {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }

                                $cur_username = validate($_POST['cur_username']);
                                $new_username = validate($_POST['new_username']);
                                $cur_pass = md5(validate($_POST['cur_pass']));
                                $new_pass = md5(validate($_POST['new_pass']));

                                $sql = "SELECT `username`, `password` FROM `users` WHERE `username`='$cur_username' AND `password`='$cur_pass';";

                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result) === 1) {
                                    $row = mysqli_fetch_assoc($result);
                                    if ($row['username'] === $cur_username && $row['password'] === $cur_pass) {
                                        if ($new_pass === $cur_pass ) {
                                            echo " <p style='color:red; font-size:16px;position:absolute;top:22%;right:39%;'> Password do not same with current password !!! </p>";
                                        } else {
                                            
                                        $update_sql = "UPDATE `users` SET `username`='$new_username',`password`='$new_pass' WHERE `username`='$cur_username' AND `password`='$cur_pass'";
                                        $conn = mysqli_query($con, $update_sql);
                                       
                                        
                                        echo '<script>';
                                        echo 'alert("CHANGE USERNAME AND PASSWORD SUCCESSFULLY !!!");';
                                        echo 'window.location = "index.php"';
                                        echo '</script>';
                                        }
                                    } 
                                    // else {
                                    //     // header("Location: Main.php?error=Incorect User name or password");
                                    //     echo '<script>';
                                    //     echo 'alert("CHANGE USERNAME AND PASSWORD NOTSUCCESSFULLY, TRY AGAIN !!!");';
                                    //     echo 'window.location = "edit_profile.php"';
                                    //     echo '</script>';
                                    // }
                                }
                                else {
                                    header("Location: edit_profile.php?error=Incorect User name or password");
                                    echo '<script>';
                                        echo 'alert("CHANGE USERNAME AND PASSWORD NOT SUCCESSFULLY, TRY AGAIN !!!");';
                                        echo 'window.location = "edit_profile.php"';
                                        echo '</script>';
                                    exit();
                                }

                            }

                        }


                        ?>
                        <h4 style="color: red;">
                            <!-- <?php if (isset($_GET['error']))
                                echo $_GET['error'] ?> -->
                        </h4>
                        <div class="form-outline form-white" style="margin: 16px 0">
                            <input type="text" id="formWhite" class="form-control" maxlength="255" name="cur_username"
                                required value="" />
                            <label class=" form-label" for="formWhite" style="color: rgb(204, 204, 204)">Current
                                Username</label>
                        </div>
                        <div class="form-outline form-white" style="margin: 16px 0">
                            <input type="text" id="formWhite" class="form-control" maxlength="255" name="new_username"
                                required value="" />
                            <label class="form-label" for="formWhite" style="color: rgb(204, 204, 204)">New
                                Username</label>
                        </div>
                        <div class="form-outline form-white" style="margin: 16px 0">
                            <input type="password" id="formWhite" class="form-control" maxlength="255" name="cur_pass"
                                required value="" />
                            <label class="form-label" for="formWhite" style="color: rgb(204, 204, 204)">Current
                                Password</label>
                        </div>
                        <div class="form-outline form-white" style="margin: 16px 0">
                            <input type="password" id="formWhite" class="form-control" maxlength="255" name="new_pass"
                                required value="" />
                            <label class="form-label" for="formWhite" style="color: rgb(204, 204, 204)">New
                                Password</label>
                        </div>
                        <div id="button-responsive" class="d-flex justify-content-center align-items-center"
                            style="margin: 16px 0">
                            <button id="update-responsive" type="submit" name="submit" class="btn btn-light flex-fill"
                                data-mdb-ripple-color="dark" style="font-size: 16px">
                                Update
                            </button>
                            <a id="back-responsive" type="submit" href="./Main.php" class="btn btn-light flex-fill"
                                data-mdb-ripple-color="dark" style="font-size: 16px">
                                Back
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

</body>
<style>
@media (min-width: 768px) {
    #div-responsive {
        width: 550px;
    }

    #back-responsive {
        margin-left: 5px;
        margin-bottom: 50px;
    }

    #update-responsive {
        margin-right: 5px;
        margin-bottom: 50px;
    }
}

@media (max-width: 768px) {
    #button-responsive {
        display: flex;
        flex-direction: column;
        margin: 0;
    }

    #update-responsive {
        margin-bottom: 10px;
        margin-top: -10px;
        display: flex;
        width: 100%;
        justify-content: center;
    }

    #back-responsive {
        margin-bottom: 30px;
        display: flex;
        width: 100%;
        justify-content: center;
    }

    #div-responsive {
        width: 80%;
    }
}
</style>

</html>

</html>