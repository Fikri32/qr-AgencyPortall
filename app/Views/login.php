<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Agency Portal</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('style2.css') ?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

</head>
<style>
    ::placeholder {
        color: #FFFFFF;
    }

    body,
    html {
        height: 100%;
    }

    .bg {
        background-image: url("<?= base_url('assets/background.jpg'); ?>");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<!-- <body oncontextmenu='return true' class='snippet-body'> -->

<body class="bg">

    <section>

        <div class="container py-5">
            <form action="<?= base_url('user/login'); ?>" method="post">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-transparent text-center shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-header " style="border-top-left-radius: 1rem; border-top-right-radius: 1rem; background-color:#00000090;">
                                <h2 style="color:white; ">Sign In</h2>
                            </div>
                            <div class="card-body p-5 text-center" style="background-color:#00000090; border-bottom-left-radius: 1rem; border-bottom-right-radius: 1rem;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </symbol>
                                </svg>

                                <?php if (session()->getFlashdata('error')) : ?>
                                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg>
                                        <div>
                                            <?= session()->getFlashdata('error'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="form-group form-outline mb-4">
                                    <div class="input-group mb-3">
                                        <input type="email" id="" name="email" placeholder="Email" class="form-control form-control px-4 rounded-pill" style="background-color : #EBEBEB;color:#001a57; " required />
                                    </div>
                                </div>

                                <div class="form-group form-outline mb-4">
                                    <div class="input-group mb-3">
                                        <input type="password" id="" name="password" placeholder="Password" class="form-control form-control px-4 rounded-pill" style="background-color : #EBEBEB;color:#001a57;" required />
                                    </div>
                                </div>
                                <br>
                                <div class="d-grid gap-2 ">
                                    <button class="btn btn-md btn-block rounded-pill" style="background-color:#001a57; color:#EBEBEB;" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>

    <footer class="footer mt-auto py-3" style="position: absolute; bottom:0;">
        <!-- <img src="" class="img-fluid" alt="" /> -->
        <div class="container text">
            <span class="text-muted"> © 2022 </span>
        </div>
    </footer>

    <!-- <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script> -->
    <script src="<?= base_url('bootstrap/js/bootstrap.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</body>