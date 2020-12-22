<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // echo var_dump($_POST);
}

?>


<?php include "partials/_header.php"; ?>

    
<?php include "partials/_navbar.php"; ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-sm-5"><img class="rounded-pill" src="images/group.png" width="100%" alt=""></div>
            <div class="col-sm-6 offset-sm-1">
                <div class="d-flex h-100 align-items-center">
                    <h1 class="display-4">Lets stay Safe & Fight Together Against <br> C<span class="ml-2 mr-2"><img id="covid" width="80px" class="d-inline rounded-circle" src="images/covid.png" alt=""></span>rona Virus</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h1 class="text-center" style="font-weight:400">Covid -19 Updates</h1>
        <div class="row my-5 text-center">
            <div class="col-sm-3 col-12">
                <h1 class="display-4"><span class="count">1,45,685</span></h1>
                <p>Passengers screened at airport</p>
            </div>
            <div class="col-sm-3 col-12">
                <h1 class="display-4"><span class="count">80,000</span></h1>
                <p>Active Covid-19 cases</p>
            </div>
            <div class="col-sm-3 col-12">
                <h1 class="display-4" ><span class="count">20,000</span></h1>
                <p>Cured/Discharged cases</p>
            </div>
            <div class="col-sm-3 col-12">
                <h1 class="display-4"><span class="count">10</span></h1>
                <p>Death cases</p>
            </div>
        </div>
    </div>
    <div class="container my-5" id="about">
        <h1 class="text-center mb-5" style="font-weight: 400">About COVID-19</h1>
        <div class="row">
            <div class="col-sm-5 col-12">
                <img src="images/coviddetails.jpg" class="rounded-pill" width="95%" alt="">
            </div>
            <div class="col-sm-6 col-12">
                <p class="pt-4">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.</p>
                <p>The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces..</p>
            </div>
        </div>
    </div>


    <div class="container my-5" id="symptom">
        <h1 class="text-center mb-5" style="font-weight: 400">Coronavirus Symptoms</h1>
        <div class="row">
            <div class="col-sm-4 col-12">
                <figure class="text-center">
                    <img width="150px" src="images/coughing.jpg" alt="">
                    <figcaption>Coughing</figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-12">
                <figure class="text-center">
                    <img width="150px" src="images/fever.jpg" alt="">
                    <figcaption>Fever</figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-12">
                <figure class="text-center">
                    <img width="150px" src="images/cold.jpg" alt="">
                    <figcaption>Cold</figcaption>
                </figure>
            </div>
        </div>
        <div class="row my-4">
        <div class="col-sm-4 col-12">
                <figure class="text-center">
                    <img width="150px" src="images/breath.jpg" alt="">
                    <figcaption>Difficulty in breathing</figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-12">
                <figure class="text-center">
                    <img width="150px" src="images/tired.jpg" alt="">
                    <figcaption>Tiredness</figcaption>
                </figure>
            </div>
        </div>
    </div>

    <div class="container" id="prevention">
        <h1 style="font-weight: 400" class="text-center mb-5">6 steps Prevention Against Corona Virus</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-5"><img src="images/handwash.jpg" width="100%" alt=""></div>
                    <div class="col-sm-7">Wash your hands regularly with soap and water or alcohol based hand sanitizer.</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-5"><img src="images/mask.jpg" width="100%" alt=""></div>
                    <div class="col-md-7">Cover your nose and mouth with disposable tissue or flexed elbow when you cough or sneex.</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-5"><img src="images/tv.png" width="100%" alt=""></div>
                    <div class="col-md-7">Stay informed by watching news and follow the recomended practises.</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-5"><img src="images/clean.jpg" width="100%" alt=""></div>
                    <div class="col-md-7">Wash the floar once a day as Covid-19 virus can remain live on the floar for 2-3 days.</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-5"><img src="images/home.png" width="100%" alt=""></div>
                    <div class="col-sm-7">Stay home and self-isolated from others and household if you feel unwell.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5" id="contact">
        <h1 class="text-center mb-4" style="font-weight: 400">Contact us for any Help</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mobie No</label>
                        <input type="text" class="form-control" name="mobile">
                    </div>
                    <label class="d-block">Your Symptoms</label>
                    <div class="form-group form-check d-inline mr-4">
                        <input type="checkbox" name="symptoms[]" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Cold</label>
                    </div>
                    <div class="form-group form-check d-inline mr-4">
                        <input type="checkbox" name="symptoms[]" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Fever</label>
                    </div>
                    <div class="form-group form-check d-inline mr-4">
                        <input type="checkbox" name="symptoms[]" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Difficulty in breathing</label>
                    </div>
                    <div class="form-group form-check d-inline mr-4">
                        <input type="checkbox" name="symptoms[]" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Feeling week</label>
                    </div>
                    <button name="formSubmit" type="submit" class="btn btn-primary d-block mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="top">
       <h1><i class="fas fa-arrow-up text-light p-2 bg-info"></i></h1>
    </div>

<?php include "partials/_footer.php" ?>
<script src="js/script.js"></script>