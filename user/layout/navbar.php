<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003631;">
  <div class="container-fluid px-4">

    <!--------------------------- LOGO --------------------------------------------------------------------------------------------->
    <a class="navbar-brand d-flex align-items-center" href="../index.php">
      <img src="../../img/logo.png" alt="Evergreen Logo" width="40" height="40" class="me-2">
      <span class="fw-bold">EVERGREEN</span>
    </a>

    <!--------------------------- TOGGLER FOR PHONES ------------------------------------------------------------------------------->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!--------------------------- BUTTONS FOR OTHER PAGES -------------------------------------------------------------------------->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
          <li class="nav-item me-2">
            <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active text-warning' : ''; ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link <?php echo ($current_page == 'account.php') ? 'active text-warning' : ''; ?>" href="account.php">Accounts</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link <?php echo ($current_page == 'fund_transfer.php') ? 'active text-warning' : ''; ?>" href="fund_transfer.php">Fund Transfer</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link <?php echo ($current_page == 'transaction_history.php') ? 'active text-warning' : ''; ?>" href="transaction_history.php">Transaction History</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link <?php echo ($current_page == 'referral.php') ? 'active text-warning' : ''; ?>" href="referral.php">Referral</a>
          </li>
      </ul>

      <!------------------------- USERNAME AND PROFILE ----------------------------------------------------------------------------->
      <div class="dropdown">
        <a href="#" class="text-decoration-none" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="d-flex align-items-center">
            <span class="text-white me-2">Username</span>
            <div class="bg-light text-dark rounded-circle d-flex justify-content-center align-items-center" style="width:35px; height:35px;">
              <i class="bi bi-person-fill"></i>
            </div>
          </div>
        </a>
        <div class="dropdown-menu py-2 px-2" style="min-width: 100px;" aria-labelledby="dropdownUser">
          <a class="dropdown-item pb-0" href="#Profile">Profile</a><hr class="my-2">
          <a class="dropdown-item pt-0" href="../pages/account.php">Accounts</a>
        </div>
      </div>
    </div>
  </div>
</nav>
