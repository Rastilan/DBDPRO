<link rel="stylesheet" href="required/nav.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
  <a class="navbar-brand" href="index.php">DBD PRO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Survivor Guides</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Killer Guides</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php
      if(!empty($_SESSION['username'])) {
        echo "<div class='signedIn'>Signed in as: " . $_SESSION['username'] . "&nbsp;&nbsp;&nbsp;</div>";
        echo "<a href='signout.php'>  Sign Out</a>";
      }
      else {
        echo "<a href='login.php'<div class='signedIn'>Sign in " . "&nbsp;&nbsp;&nbsp;</div></a>";

      }

      ?>
    </form>
  </div>
</nav>
