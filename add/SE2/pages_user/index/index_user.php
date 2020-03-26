<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../../favicon.ico" type="image/x-icon"/>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../../plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="../../plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="../../plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="../../plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="../../plugins/c3/c3.min.css">
    <link rel="stylesheet" href="../../plugins/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../dist/css/theme.min.css">
    <script src="../../src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<div class="wrapper">
    <?php include "../view/menu-topbar.php"; ?>
    <div class="page-wrap">
        <?php include "../view/menu-sidebar.php"; ?>
        <!--ส่วนของหน้าDashboard-->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h6>คำขอที่รออนุมัติ</h6>
                                        <h2>5</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="ik ik-award"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="state">
                                        <h6>อุปกรณ์ที่กำลังยืม</h6>
                                        <h2>2</h2>
                                    </div>
                                    <div class="icon">
                                        <i class="ik ik-thumbs-up"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="row align-items-center">
                        <div class="card-body">
                            <div class="row align-items-center" style="padding-left:20px;padding-right: 400px;">
                                <div class="col-lg-8 col-md-12">
                                    <h3 class="card-title ">สถิติการยืมอุปกรณ์</h3>
                                    <div id="visitfromworld" style=" height:350px">
                                        <div id="c3-donut-chart" style="width: auto;"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="row mb-15">
                                        <div class="col-9">Arduino</div>
                                        <div class="col-3 text-right">28%</div>
                                        <div class="col-12">
                                            <div class="progress progress-sm mt-5">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 48%"
                                                     aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-15">
                                        <div class="col-9"> Monitor</div>
                                        <div class="col-3 text-right">21%</div>
                                        <div class="col-12">
                                            <div class="progress progress-sm mt-5">
                                                <div class="progress-bar bg-aqua" role="progressbar" style="width: 33%"
                                                     aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">keyboard</div>
                                        <div class="col-3 text-right">12%</div>
                                        <div class="col-12">
                                            <div class="progress progress-sm mt-5">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                     style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="advance_table" class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th class="nosort" width="10">
                                        <label class="custom-control custom-checkbox m-0">
                                            <input type="checkbox" class="custom-control-input" id="selectall" name=""
                                                   value="option2">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </th>
                                    <th class="nosort">ชื่ออุปกรณ์</th>
                                    <th>ชื่อผู้ยืม</th>
                                    <th>วันที่ยืม</th>
                                    <th>จำนวน</th>
                                    <th>อาจารย์</th>
                                    <th>สถานะ</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input select_all_child" id=""
                                                   name="" value="option2">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </td>
                                    <td>Arduino</td>
                                    <td>นาย วรวุฒิ พันธุสิทธิ์เสรี</td>
                                    <td>29/12/2019</td>
                                    <td>2</td>
                                    <td>อ.ดร.บุญรัตน์ เผดิมรอด</td>
                                    <td>อนุมัต</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../view/chat-notification.php" ?>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>window.jQuery || document.write('<script src="../../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="../../plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="../../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="../../plugins/screenfull/dist/screenfull.js"></script>
<script src="../../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap.min.js"></script>
<script src="../plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
<script src="../../plugins/moment/moment.js"></script>
<script src="../../plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../../plugins/d3/dist/d3.min.js"></script>
<script src="../../plugins/c3/c3.min.js"></script>
<script src="../../js/tables.js"></script>
<script src="../../js/widgets.js"></script>
<script src="../../js/charts.js"></script>
<script src="../../dist/js/theme.min.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
