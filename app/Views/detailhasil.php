<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Agency Portal</title>

    <!-- <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.css') ?>">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href=""> -->
    <style>
        .row {
            --bs-gutter-x: 0;
        }

        *,
        ::before,
        ::after {
            box-sizing: none;
        }
    </style>

</head>

<body class="ml-30" style="height: 100%; background-color:#F4F4F4;">
    <!--Container Main start-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5 mt-3">
                <img src="<?= base_url('assets/logo_kbri.jpg') ?>" class="float-start" alt="Logo KBRI Singapura" width="80px">
                <img src="<?= base_url('assets/logo_kemnaker.png') ?>" class="float-end" alt="Logo Kemnaker" width="80px">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center" style="color: #676A6C;">
                <h3 class="mb-5 " style="font-size:24px; font-weight:700">Fungsi Ketenagakerjaan KBRI Singapura</h3>
                <div style="width:60px; height:1px; border-bottom: 2px solid #214384; margin:auto;"></div>
                <h6 class="mt-1 mb-2" style="font-size:16px; font-weight:500;">Check Employment Contract</h6>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 ">
                    <table class="table table-bordered dataTables-example table-responsive" style="width: 100% !important; margin:auto;">
                        <tbody class="" style="font-size: 13px; font-weight:700; color:#676A6C">
                            <tr style="background-color: #001a57">
                                <td colspan="2">
                                    <h3><b style="color: white; font-size:16px; font-weight:700">Employment Contract (EC) Information </b></h3>
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

    <!--Container Main end-->
    <script src="<?= base_url('bootstrap/js/bootstrap.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        // sensor address
        var address = $("#address").text()
        var addLength = address.length
        var ASCII_dump = []
        for(i = 0; i < addLength; i++) {
            if (i > 5 && i < addLength - 6) {
                if (address.charCodeAt(i) == 32) {
                    ASCII_dump.push(32)
                } else {
                    ASCII_dump.push(42)
                }
            }else{
                ASCII_dump.push(address.charCodeAt(i))
            }
        }
        $("#address").html(String.fromCharCode(...ASCII_dump))

        // format salary
        var salary = $("#salary").text()
        var parsedSalary = parseFloat(salary)
        $("#salary").html(parsedSalary)
    </script>
</body>
<!-- </body> -->

</html>