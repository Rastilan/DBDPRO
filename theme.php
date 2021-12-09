
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>


<link rel="stylesheet" href="required/nav.css">


<title>DBD Pro</title>
</head>
<body background-color="red">

    <!-- Navbar -->
<div class="navbar">
    <a class="active" href="#" id="sidebarCollapse">Collapse Sidebar</a>
    <a href="index.php">DBDPRO</a>
</div>
    <!--navbar -->
    <!-- Sidebar  -->
<div>
    <nav id="sidebar" class="expanded">
        <ul class="list-unstyled components">
            <ul class="collapsed">
            <div class="flex-container">
                    <div class="flex-child">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img src="required/images/icons/test.png"/>
                        </a>
                    </div>
                    <div class="collapsed-hidden flex-child">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            Home Page
                        </a>
                    </div>
                </a>
            </div>
            </ul>
            <ul>
            <div class="flex-container">
                    <div class="flex-child">
                        <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img src="required/images/icons/test.png"/>
                        </a>
                    </div>
                    <div class="collapsed-hidden flex-child">
                        <a href="survbuilds.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            Survivor Builds
                        </a>
                    </div>
                </a>
            </div>
            </ul>
            <ul>
            <div class="flex-container">
                    <div class="flex-child">
                        <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img src="required/images/icons/test.png"/>
                        </a>
                    </div>
                    <div class="collapsed-hidden flex-child">
                        <a href="killbuilds.php" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            Killer Builds
                        </a>
                    </div>
                </a>
            </div>
            </ul>
            <ul>
            <div class="flex-container">
                    <div class="flex-child">
                        <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <img src="required/images/icons/test.png"/>
                        </a>
                    </div>
                    <div class="collapsed-hidden flex-child">
                        <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            Custom Perks
                        </a>
                    </div>
                </a>
            </div>
            </ul>
        </ul>
    </nav>
        <!-- Sidebar  -->
    <div>
    <p class="main">Test</p>
    </div>
</div>






    <!-- Sidebar Collapse Toggle  -->
<script>
    $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('collapsed');
            $('.collapsed-hidden').toggleClass('hidden');
            $('#sidebar').toggleClass('expanded');
        });
    });
</script>
    <!-- Sidebar  Collapse Toggle -->

</body>
</html>
