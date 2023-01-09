
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


  <!--CSS FILE-->
  <link rel="stylesheet" href="../Css//Dashboard.css">


</head>

<body>

  <section id="menu">
    <div class="logo">
      <i class='fas fa-circle'></i>
      <h2>RGBC</h2>
    </div>

    <div class="items">
      <li>
        <a href="../pages/Dashboard.php">
          <i class="las la-chalkboard"></i>
          <span class="link">Dashboard</span>
        </a>
      </li>

      <li>
        <a href="../pages/Communication Management.php">
        <i class="fas fa-comments"></i>
          <span class="link">Communication Management</span>
        </a>

      </li>
      <li>
        <a href="../pages/Socialperformance.php">
          <i class="las la-user-friends"></i>
          <span class="link">Social performance</span>
        </a>

      </li>
      <li>
        <a href="../pages/Savingtracking.php">
        <i class="fas fa-piggy-bank"></i>
          <span class="link">SAving tracking</span>
        </a>

      </li>
      <li>
        <a href="../pages/consolidation.php">
        <i class="fas fa-file-contract"></i>
          <span class="link">consolidation</span>
        </a>

      </li>
      <li>
        <a href="../pages/Vehicle Reservation.php">
        <i class="fas fa-car"></i>
          <span class="link">Vehicle Reservation</span>
        </a>
      </li>
      <li>
        <a href="../pages/Legal Management.php">
        <i class="fas fa-balance-scale"></i>
          <span class="link">Legal Management</span>
        </a>
      </li>
      </ul>
    </div>
    </div>
  </section>

  <section id="interface">
    <div class="navigation">
      <div class="n1">
        <div>
          <i id="menu-btn" class="fas fa-bars"></i>
        </div>
        <div class="search">
          <i class="fas fa-search"></i>
          <input type="text" placeholder="Search here..">
        </div>
      </div>

      <div class="profile">
        <i class="fas fa-envelope"></i>
        <i class="far fa-bell"></i>
        <div class="bell-notification" current-count="8">

        </div>
        <img src="../Image/3135715.png" alt="" onclick="toggleUser()">
      </div>

      <div class="user_menu_wrap" id="userMenu">
        <div class="user_menu">

          <div class="user_info">
            <img src="../Image/3135715.png">
            <div>
              <h3>Admin</h3>
              <small>RGBC</small>
            </div>
          </div>

          <hr>

          <a href="" class="menu_link">
            <i class="las la-user-cog"></i>
            <p>Edit Profile</p>

          </a>
          <a href="" class="menu_link">
            <i class="las la-sign-out-alt"></i>
            <p>Logout</p>

          </a>

        </div>
      </div>

    </div>

    <h3 class="i-name">
      Dashboard
    </h3>

    <!--MAIN-->


    <!--END OF MAIN-->


    <!--FOOTER-->
    <footer id="footer">
      <p>RG Bangalon &copy; 2023 </p>
    </footer>
    <!--END OF FOOTER-->


    <script>
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })
    </script>

    <script src="../Javascript/Menu-user.js"></script>

</body>

</html>