<?php include "partials/_header.php"; ?>

<!-- <link rel="stylesheet" href="css/countrylive.css"> -->
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
                    <a class="nav-link" href="livecoronaglobal.php">WorldCoronaLive</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="">IndiaCoronaLive</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<h1 class="display-4 text-center my-5">Covid-19 Live Updates in India</h1>

<div class="container-fluid">
    <table class="table table-bordered text-center table-striped" id="details">
        <tr class="bg-secondary text-light">
            <th scope="col">Last updated</th>
            <th scope="col">State</th>
            <th scope="col">Confirmed</th>
            <th scope="col">Active</th>
            <th scope="col">Recovered</th>
            <th scope="col">Death</th>
        </tr>

        <?php
        $data = file_get_contents("https://api.covid19india.org/data.json");
        $data = json_decode($data, true);
        $statewise = $data["statewise"];
        foreach ($statewise as $data) {
            echo ' <tr>
                <td>' . $data["lastupdatedtime"] . '.</td>
                <td>' . $data["state"] . '.</td>
                <td>' . $data["confirmed"] . '.</td>
                <td>' . $data["active"] . '.</td>
                <td>' . $data["recovered"] . '.</td>
                <td>' . $data["deaths"] . '.</td>
              </tr>';
        }
        ?>

    </table>
</div>


<?php include "partials/_footer.php" ?>