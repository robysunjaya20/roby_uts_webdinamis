<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RobySunjaya_website_dinamis</title>
    <!-- Bootstrap -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <!-- Datatables -->
      <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>
<body>
    <header>
        <p class="text-center p-3">Membuat website dinamis</p>
        <!-- navbar -->
         <?php include "includes/navbar.php" ?>
         <!-- ./navbar -->
    </header>
    <div class="container">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                    case 'about':
                        include "about.php";
                        break;
                        case 'contact':
                            include "contact.php";
                            break;
                            case 'tables':
                                include "includes/datatables.php";
                                break;
                        }
                    } else {
                        include "home.php";
                    }
                    ?>
    </div>

    <script src="assets/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
    new DataTable('#example');
    </script>
    </body>
    </html>