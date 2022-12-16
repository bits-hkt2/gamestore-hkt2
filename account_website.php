<?php
session_start();
// AUTHENTICATION VERIFICATION
if (!isset($_SESSION['username'])) {
  
    header('Location: unqualified.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>2HKT | ACOUNT & WEBISTE PAGE</title>
    <link rel="icon" href="./images/Logo.svg">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="./css/account_website.css">
</head>

<body class="aa">
    <!-- HEADER SECTION -->
    <header>
        <nav class="navigation">

            <div class="list-items">
                <a href="/Main.php">
                    <img class="web_icon" src="./images/Logo (1).png" alt="">

                </a>

                <!-- Large button groups (default and split) -->


                <div class="nav-menu-items d-flex justify-content-between w-50">
                    <a href="#home" class="active"></a>

                    <div class="dropdown btn-group">
                        <a class="dropdown-toggle text-white rounded " role="button" style="background-color:#2C2C2C "
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            STORE
                        </a>

                        <ul class="dropdown-menu  text-center" style="background:#D9D9D9 ;">
                            <li><a class="dropdown-item text-black" href="./Main.php">Home</a></li>
                            <li>
                                <hr class="dropdown-divider bg-black" />
                            </li>
                            <li><a class="dropdown-item text-black" href="./Main.php">New Release</a></li>
                            <li><a class="dropdown-item text-black" href="./Main.php">Top sellers</a></li>
                            <li><a class="dropdown-item text-black" href="./Main.php">Game Category </a></li>
                        </ul>

                    </div>

                    <div class="dropdown btn-group">
                        <a class="dropdown-toggle text-white rounded " role='button' style="background-color:#2C2C2C "
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            ABOUT
                        </a>
                        <ul class="dropdown-menu text-center" style="background: #D9D9D9">
                            <li><a class="dropdown-item text-black" href="./about_us.html">2HKT.com</a></li>
                            <li>
                                <hr class="dropdown-divider bg-black" />
                            </li>
                            <li><a class="dropdown-item text-black" href="https://discord.gg/D7eqPyD6Dk">Join the
                                    team</a></li>
                        </ul>
                    </div>

                    <div class=" dropdown btn-group">
                        <a class="dropdown-toggle text-white rounded " role='button' style="background-color:#2C2C2C "
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            SUPPORT
                        </a>
                        <ul class="dropdown-menu text-center" style="background:#D9D9D9;">
                            <li><a class="dropdown-item text-black" href="./order_payment.php">Orders and Payments</a>
                            </li>
                            <li><a class="dropdown-item text-black" href="./account_website.php">Account and
                                    Website</a></li>
                            <li><a class="dropdown-item text-black" href="./refund_policy.php"">Refund Policy</a></li>
             
              </ul>
          </div>
        
          <div class=" dropdown btn-group">
                                    <a class="dropdown-toggle text-white rounded " role='button'
                                        style="background-color:#2C2C2C " data-mdb-toggle="dropdown"
                                        aria-expanded="false">
                                        COMMUNITY
                                    </a>
                                    <ul class="dropdown-menu text-center" style="background:#D9D9D9;">

                                        <li><a class="dropdown-item text-black"
                                                href="https://discord.gg/D7eqPyD6Dk">Dicussion Forums</a></li>
                                        <li>
                                            <hr class="dropdown-divider bg-black" />
                                        </li>
                                        <li><a class="dropdown-item text-black"
                                                href="https://www.facebook.com/dejavu354321/">Facebook</a></li>
                                        <li><a class="dropdown-item text-black"
                                                href="https://twitter.com/Steam?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a>
                                        </li>
                                        <li><a class="dropdown-item text-black"
                                                href="https://www.youtube.com/@HuyPhamChannel  ">Youtube</a></li>
                                    </ul>
                    </div>


                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>


                <div class="profile ">
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown"
                        aria-expanded="false">
                        <img src="./images/icon 1.png" alt="">
                    </a>

                    <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="./edit_profile.html">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="./loginForm.html">Log out</a></li>
                    </ul>


                    <div class="name-user ">
                        <h3> <?php echo $_SESSION['username'];?></h3>
                    </div>
                </div>



            </div>
            </div>


        </nav>
    </header>
    <nav>
        <ul class="breadcrumb">
            <li><a href="#">Support Center</a></li>
            <li>Account & Website</li>
        </ul>
    </nav>

    <main>
        <div id="title">
            <h2> Account & Website </h2>
            <p> Are you having issues with accessing your account or the website itself? </p>
        </div>

        <hr>

        <div id="main">
            <div id="article">
                <h3> Account-related issues </h3>
                <table class="child">
                    <tr>
                        <td><a href="#">I cannot login, what can I do?</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Unable to sign up</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">How can I recover access to my lost account?</a></td>
                    </tr>
                </table>
                <button class="all_btn"> See all articles </a></button>
            </div>
            <div id="article">
                <h3> Website functionality </h3>
                <table class="child">
                    <tr>
                        <td><a href="#">How do I use forum to get help?</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Wrong currencies on the website</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">Is there any regular maintenance time?</a></td>
                    </tr>
                </table>
                <button class="all_btn"> See all articles </a></button>
            </div>
        </div>

        <hr>

        <div id="more">
            <h2> Do you have more questions? </h2>
            <div id="bottom">
                <div class="child">
                    <h3> Didn't find the answer you are looking for? </h3>
                    <p> If you were unable to find the answers you were looking for, please reach out and someone from
                        our friendly and knowledgeable support team will be happy to help with their top-notch
                        assistance! <a href="#">Contact us</a> </p>

                </div>
                <div class="child">
                    <h3> Want to get help and maybe make some new friends? </h3>
                    <p> We've got a great community here on 2HKT, which is always eager to help out. Please make sure
                        not to share private data on public forums, though! <a href="#">Join the community</a> </p>

                </div>
            </div>
        </div>

    </main>
    <footer>

    </footer>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>