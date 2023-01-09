
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
  <link rel="stylesheet" href="../Css//Socialperformance.css">


</head>

<body>
<?php include "../pages/sidebar.php";?>
 


  

    <!--MAIN-->
    <main id="main" class="main"> 
    <h3 class="i-name">
      Dashboard
    </h3>
    </main>

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