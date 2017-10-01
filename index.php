<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Name</title>
    <!-- Boostrap Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
    <!-- Font Awesome Styles -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- App Styles -->
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <!-- Background Image  -->
    <img data-src="img/girlspa-back.jpg" class="u-imgBig" alt="Company Name Escena">
    <!-- Principal Section -->
    <section class="Section">
        <!-- Wrapper -->
        <div class="container">
            <!-- Header -->
            <header class="Header">
                <div class="d-flex justify-content-end">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <img src="img/loremipsum-logo.png" alt="Company Name" class="img-fluid">
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="Main d-flex align-items-center align-content-end flex-wrap justify-content-end py-4">

                <!-- Prom -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="Prom text-center d-flex flex-column justify-content-center align-items-center">
                        <h3 class="Prom--title">Subscribe your email<br> and receive </h3>
                        <h2 class="Prom--porc"><strong>20%</strong><h2>
                        <h3 class="Prom--Subtitle">discount <br> on Our reopening.</h3>
                    </div>
                </div>

                <!-- Form -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="Form border border-black rounded">
                        <h2 class="Form--title text-center">RECEIVE <strong class="u-textGreen">20% DISCOUNT</strong></h2>
                        <hr>
                        <form action="contact.php" method="POST">
                            <div class="form-row align-items-center justify-content-center">
                                <div class="col-auto">
                                    <div class="input-group">
                                        <label class="align-middle u-textGray" for="email">Your email:</label>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <label class="sr-only" for="email">Email</label>
                                    <div class="input-group mb-3 mb-sm-0">
                                        <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"> </i> </div>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                </div>
                                <!-- Success / Error submit form message -->
                                <?php if (isset($_GET['msg'])){ 
                                    $msg = $_GET['msg'];
                                    if($msg=='success'){ ?>

                                    <div class="col-auto py-1">
                                        <div class="alert alert-success text-center">Success</div>
                                    </div>

                                <?php } else{ ?>
                                    <?php if($msg=='error'){ ?>

                                    <div class="col-auto py-1">
                                        <div class="alert alert-danger text-center">Error</div>
                                    </div>

                                <?php }}} ?>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Footer -->

                <footer class="Footer col-md-12 col-lg-6">    
                    <div class="col-md-12">
                        <div class="alert alert-light">
                            <h6 class="u-textGreen">New Location:</h6>
                            <address class="u-textGray">Adress: Street 16 # 53A - 31</address>
                            <h6 class="u-textGreen">Contact:</h6>
                            <address class="u-textGray"><b>Phone:</b> 218 3458 | 349 4569851</address>
                        </div>
                    </div>
                </footer>
            </main>
        </div>
    </section>

     

    <!-- Boostrap Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
    <!-- Lazy Load -->
    <script src="https://rawgit.com/tuupola/jquery_lazyload/2.x/lazyload.js"></script>
    <script>
        $("img").lazyload();
    </script>
</body>

</html>