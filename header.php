<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gold Team | <?= isset($PageTitle) ? $PageTitle : "Home" ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body class="bg-golden-yellow">
<nav class="navbar navbar-expand-lg navbar-dark bg-gold-foil shadow-sm">
    <a class="navbar-brand" href="#">Gold Team</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($PageTitle==="Home") ? "active\" href='./'>Home <span class='sr-only'>(current)</span>" : "\" href='./'>Home" ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($PageTitle==="Bios") ? "active\" href='./bios.php'>Bios <span class='sr-only'>(current)</span>" : "\" href='./bios.php'>Bios" ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($PageTitle==="Reference") ? "active\" href='./reference.php'>References <span class='sr-only'>(current)</span>" : "\" href='./reference.php'>References" ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($PageTitle==="Presentations") ? "active\" href='./presentations.php'>Presentations <span class='sr-only'>(current)</span>" : "\" href='./presentations.php'>Presentations" ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($PageTitle==="Deliverables") ? "active\" href='./deliverables.php'>Deliverables <span class='sr-only'>(current)</span>" : "\" href='./deliverables.php'>Deliverables" ?></a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= ($PageTitle==="Problem Description") ? "active\" href='./problem_description.php'>Problem Description <span class='sr-only'>(current)</span>" : "\" href='./problem_description.php'>Problem Description" ?></a>
            </li>
        </ul>
    </div>
</nav>
<main class="p-5">