<?php if (!isset($_SESSION)) session_start(); ?>
<!doctype html>
<html lang="en">
  <head> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- My own CSS file-->
    <!--<link rel="stylesheet" href="css/style.css">-->

    <!-- FontAwesome Kit -->
    <script src="https://kit.fontawesome.com/cf3e3a7ec6.js" crossorigin="anonymous"></script>

    <title>PhoneBook Management</title>
  </head>
  <!-- <body style="background-color: #f0f4f7;"> -->
  <body class="bg-slate-100">

    <div class="container w-full">
      <?php  ?>
      <div class="bg-teal-300 mt-6 border-2 border-teal-400 rounded-2xl shadow-lg">        
        <div class="grid grid-cols-3 p-3"> <!-- begin grid -->
          <div class="grid grid-cols-3 place-content-center"> <!-- begin first column -->
            <div class="">
              <?php
              include_once('functions.php');

              if (isset($_SESSION['go_home'])) {
                $url=get_home_url();
              } else { 
                $url="";
              }
              ?>
              <div class="w-32 mx-auto">
                <a href="<?php echo $url ?>"><img src="img/iPhone-icon.png" alt=""></a>
              </div>
            </div>
            <div class="grid col-span-2 w-full h-full place-items-center">
              <!-- <h2 style="display: inline; font-family: Verdana;"><?php echo strtoupper("PhoneBook Manager")?></h2> -->
              <span class="inline-block font-serif text-3xl"><?php echo strtoupper("PhoneBook Manager")?></span>
            </div>
          </div> <!-- finish first column -->

          <div class=""> <!-- begin second column -->
            <div class="grid grid-cols-3 w-full h-full place-items-center">
              <div class="col-span-2 mx-auto">
                <span class="font-sans text-3xl"><?php if (isset($_SESSION['user-name'])) {echo 'Hi '.$_SESSION['user-name'].'!';} ?></span>
              </div>

              <div class="">
              <?php if (isset($_SESSION['user-name'])) { ?>          
                <form action="logout.php" method="POST">
                  <input type="submit" class="bg-red-600 text-white py-2 px-3 rounded-lg" name="logout" value="Log out">
                </form>
              <?php } ?>              
              </div>
            </div>
          </div> <!-- finish second column -->

          <div> <!-- begin third column -->
            <div class="grid place-items-center w-full h-full">
            <?php if (isset($_SESSION['user-name'])) {include "includes/search-bar.php";} ?>
            </div>
          </div> <!-- finish third column -->
        </div>
      </div>
    </div>