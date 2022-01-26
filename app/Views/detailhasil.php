<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel=”icon” href=”<?= base_url('favicon.ico'); ?>”>
    <title>Agency Portal</title>

    <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'> -->
    <!-- <link rel="stylesheet" href="bootstrap.css"> -->
    <!-- <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="<?= base_url('result/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('result/style3.css') ?>">
    <link rel="stylesheet" href="<?= base_url('result/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>



    <style>
        h1 {
            font-size: 2.4em;
            margin: 0;
            color: #FFF;
        }

        h2 {
            font-size: 1.7em;
            margin: 0;
        }

        h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
            margin-top: 5px;
        }

        #header {
            width: 96%;
            margin: 0 0 0 0;
            padding: 6px 2% 6px 2%;
            font-family: "trebuchet MS", Verdana, sans-serif;
            color: #FFF;
            background-color: #555555;
        }

        #content {
            margin: 0 0 0 2%;
            position: relative;
        }

        .content-container {
            background: #FFF;
            width: 96%;
            margin-top: 8px;
            padding: 10px;
            position: relative;
        }
    </style>

</head>

<!-- <body class="ml-30" style="height: 100%; background-color:#F4F4F4;"> -->

<body id="page-top" class="landing-page">
    <div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="https://fdw.indonesianslabour.sg">HOME</a>
                </div>

            </div>
        </nav>
    </div>

    <section id="team" class="gray-section">
        <!--Container Main start-->
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <img src="<?= base_url('assets/logo_kbri.jpg') ?>" class="pull-left" alt="Logo KBRI Singapura" width="80px">
                    <img src="<?= base_url('assets/logo_kemnaker.png') ?>" class="pull-right" alt="Logo Kemnaker" width="80px">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><b>Fungsi Ketenagakerjaan KBRI Singapura<b></h2>
                    <div class="navy-line"></div>
                    <h3>Check Employment Contract</h3>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-6" style="margin-left: 10px; margin-right: 10px;">
                        <table class="table table-bordered dataTables-example table-responsive" style="width: 100% !important; margin:0 auto;" align="center">
                            <tbody class="" style="font-size: 13px; font-weight:700; color:#676A6C">
                                <!-- <tr style="background-color: #001a57">
                                    <td colspan="2">
                                        <h3><b style="color: white; font-size:16px; font-weight:700">Employment Contract (EC) Information </b></h3>
                                    </td>
                                </tr> -->
                                <tr style="background-color: #001a57">
                                    <td colspan="2">
                                        <h3><b style="color: white">Employment Contract (EC) Information</b></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>EC Number</td>
                                    <td><?= $row['ecNo']; ?></td>
                                </tr>
                                <tr>
                                    <td>EC Date</td>
                                    <td><?= $row['ecDate']; ?></td>
                                </tr>
                                <tr>
                                    <td>Name of Worker</td>
                                    <td><?= $row['nameW']; ?></td>
                                </tr>
                                <tr>
                                    <td>Name of Employer</td>
                                    <td><?= $row['nameE']; ?></td>
                                </tr>
                                <tr>
                                    <td>Working Address</td>
                                    <td id="address"><?= $row['address']; ?></td>
                                </tr>
                                <tr>
                                    <td>Salary (SGD)</td>
                                    <td id="salary"><?= $row['salary']; ?></td>
                                </tr>
                                <tr>
                                    <td>Off Days</td>
                                    <td><?= $row['offDays']; ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><?= $row['stat']; ?></td>
                                </tr>
                                <!--<tr><td>Signature</td><td><img src="/Images/signed.jpg" width="70%"/></td></tr>-->
                                <tr style="background-color: #001a57">
                                    <td colspan="2"><b style="color: white; font-weight:700">© 2022 </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Container Main end-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script> -->


    <script>
        // sensor address
        var address = $("#address").text()
        var addLength = address.length
        var ASCII_dump = []
        for (i = 0; i < addLength; i++) {
            if (i > 5 && i < addLength - 6) {
                if (address.charCodeAt(i) == 32) {
                    ASCII_dump.push(32)
                } else {
                    ASCII_dump.push(42)
                }
            } else {
                ASCII_dump.push(address.charCodeAt(i))
            }
        }
        $("#address").html(String.fromCharCode(...ASCII_dump))

        // format salary
        var salary = $("#salary").text()
        var parsedSalary = parseFloat(salary)
        $("#salary").html(parsedSalary)
    </script>

    <script>
        var cbpAnimatedHeader = (function() {
            var docElem = document.documentElement,
                header = document.querySelector('.navbar-default'),
                didScroll = false,
                changeHeaderOn = 200;

            function init() {
                window.addEventListener('scroll', function(event) {
                    if (!didScroll) {
                        didScroll = true;
                        setTimeout(scrollPage, 250);
                    }
                }, false);
            }

            function scrollPage() {
                var sy = scrollY();
                if (sy >= changeHeaderOn) {
                    $(header).addClass('navbar-scroll')
                } else {
                    $(header).removeClass('navbar-scroll')
                }
                didScroll = false;
            }

            function scrollY() {
                return window.pageYOffset || docElem.scrollTop;
            }
            init();

        })();
    </script>
</body>
<!-- </body> -->

</html>