<?php include "partials/_header.php"; ?>

<link rel="stylesheet" href="css/countrylive.css">

<nav class="navbar custon_navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">WorldCoronaLive</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="indiastatewise.php">IndiaCoronaLive</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<h1 class="display-4 text-center my-5">Covid-19 Live Updates in the World</h1>

<div class="container-fluid">
    <table class="table table-bordered text-center" id="details">
        <tr class="bg-light">
            <th scope="col">Country</th>
            <th scope="col">Total Confirmed</th>
            <th scope="col">Total Recovered</th>
            <th scope="col">Total death</th>
            <th scope="col">New Confirmed</th>
            <th scope="col">New Recovered</th>
            <th scope="col">New Deaths</th>
        </tr>
    </table>
</div>


<?php include "partials/_footer.php" ?>

<script src="js/worldlive.js"></script>