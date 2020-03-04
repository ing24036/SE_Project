<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        Material Dashboard Dark Edition by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet"/>
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet5" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .modal-header {
            background-color: #43a047;
        }

        .modal-content {
            background-color: #0480be;
        }

        .modal-body {
            background-color: #fff;
        }

        /* .modal-title{
      background-color: #fff;
    } */
    </style>
</head>
<!-- dark-edition -->

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
        <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
        <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
                ระบบยืม-คืนอุปกรณ์
            </a></div>
        <div class="sidebar-wrapper">
            <?php include("../main/sidebar.php"); ?>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:void(0)">ระบบยืม-คืนอุปกรณ์</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-default btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">


                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-stats" id="AddTypeEquipment" style="cursor:pointer;">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">get_app</i>
                                </div>
                                <p class="card-category"></p>
                                <h3 class="card-title">คลังอุปกรณ์ที่ต้องการยืม
                                    <small></small>
                                </h3>

                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <a href='./return_equipment.php'>
                            <!--<div class="card card-stats"  style="cursor:pointer;">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">get_app</i>
                                    </div>
                                    <p class="card-category"></p>
                                    <h3 class="card-title">การคืนอุปกรณ์
                                        <small></small>
                                    </h3>

                                </div>
                                <div class="card-footer">
                                </div>
                            </div>-->
                        </a>
                    </div>
                </div>
                <!-- *********รายชื่ออาจารย์ทั้งหมด*********** -->
                <div class="card shadow mb-4">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">รายชื่ออุปกรณ์ที่ยืมได้
                        </h4>
                    </div>
                    <div class="card-body table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row center">
                                <div class="col-sm-12">
                                    <label style="font-size: 16px">แสดงรายการ <select id="pagenum">
                                            <option value="12">12</option>
                                            <option value="20">20</option>
                                            <option value="40">40</option>
                                            <option value="100">100</option>
                                        </select></label> <label>ชิ้น</label>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1"
                                           border="1">
                                        <!--<thead>
                                            <tr role="row">
                                                <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                                                <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                                                <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                                                <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                                                <th rowspan="1" colspan="1">จำนวน</th>
                                                <th rowspan="1" colspan="1">จัดการ</th>
                                            </tr>
                                        </thead>-->
                                        <!--<tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                                                <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                                                <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                                                <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                                                <th rowspan="1" colspan="1">จำนวน</th>
                                                <th rowspan="1" colspan="1">จัดการ</th>
                                            </tr>
                                        </tfoot>-->
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img
                                                        src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png"
                                                        alt="รูปภาพ"
                                                        class="img-fluid rounded mx-auto d-block profile-picture-list"
                                                        style="width: 200px;">
                                                <p>ชื่ออุปกรณ์ : บอร์ดraspberrypi</p>
                                                <p>เลขครุภัณฑ์ : AC032948234</p>
                                                <p>หมวดหมู่อุปกรณ์ : อุปกรณ์iot</p>
                                                <p>จำนวน : 10</p>
                                                <p align="center">
                                                    <button type="button" rel="tooltip" title="เพิ่มเข้าคลังที่จะยืม"
                                                            id="AddToCart"
                                                            style="background-color: #00e676;width: 200px;"
                                                            class="btn btn-black btn-link btn-sm">
                                                        <i class="material-icons">add_shopping_cart</i>
                                                    </button>
                                                </p>
                                            </td>
                                            <td class="sorting_1"><img
                                                        src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png"
                                                        alt="รูปภาพ"
                                                        class="img-fluid rounded mx-auto d-block profile-picture-list"
                                                        style="width: 200px;">
                                                <p>ชื่ออุปกรณ์ : บอร์ดraspberrypi</p>
                                                <p>เลขครุภัณฑ์ : AC032948234</p>
                                                <p>หมวดหมู่อุปกรณ์ : อุปกรณ์iot</p>
                                                <p>จำนวน : 10</p>
                                                <p align="center">
                                                    <button type="button" rel="tooltip" title="เพิ่มเข้าคลังที่จะยืม"
                                                            id="AddToCart"
                                                            style="background-color: #00e676;width: 200px;"
                                                            class="btn btn-black btn-link btn-sm">
                                                        <i class="material-icons">add_shopping_cart</i>
                                                    </button>
                                                </p>
                                            </td>
                                            <td class="sorting_1"><img
                                                        src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png"
                                                        alt="รูปภาพ"
                                                        class="img-fluid rounded mx-auto d-block profile-picture-list"
                                                        style="width: 200px;">
                                                <p>ชื่ออุปกรณ์ : บอร์ดraspberrypi</p>
                                                <p>เลขครุภัณฑ์ : AC032948234</p>
                                                <p>หมวดหมู่อุปกรณ์ : อุปกรณ์iot</p>
                                                <p>จำนวน : 10</p>
                                                <p align="center">
                                                    <button type="button" rel="tooltip" title="เพิ่มเข้าคลังที่จะยืม"
                                                            style="background-color: #00e676;width: 200px;"
                                                            id="AddToCart" class="btn btn-black btn-link btn-sm">
                                                        <i class="material-icons">add_shopping_cart</i>
                                                    </button>
                                                </p>
                                            </td>
                                            <td class="sorting_1"><img
                                                        src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png"
                                                        alt="รูปภาพ"
                                                        class="img-fluid rounded mx-auto d-block profile-picture-list"
                                                        style="width: 200px;">
                                                <p>ชื่ออุปกรณ์ : บอร์ดraspberrypi</p>
                                                <p>เลขครุภัณฑ์ : AC032948234</p>
                                                <p>หมวดหมู่อุปกรณ์ : อุปกรณ์iot</p>
                                                <p>จำนวน : 10</p>
                                                <p align="center">
                                                    <button type="button" rel="tooltip"
                                                            style="background-color: #00e676;width: 200px;"
                                                            title="เพิ่มเข้าคลังที่จะยืม" id="AddToCart"
                                                            class="btn btn-black btn-link btn-sm">
                                                        <i class="material-icons">add_shopping_cart</i>
                                                    </button>
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul class="pagination" style="float: right">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- **************************popupของการเพิ่มรายชื่ออาจารย์****************************** -->
            <!--<div id="modalAddTypeEquipment" class="modal">
                <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h3 class="modal-title"><span style="color: white">รายการอุปกรณ์ที่ยืม</span></h3>
                        </div>
                        <div class="modal-body" id="addModalBody">
                            <div class="row center">
                                <div class="col-sm-12">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr role="row">
                                                <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                                                <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                                                <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                                                <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                                                <th rowspan="1" colspan="1">จำนวน</th>
                                                <th rowspan="1" colspan="1">จัดการ</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                                                <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                                                <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                                                <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                                                <th rowspan="1" colspan="1">จำนวน</th>
                                                <th rowspan="1" colspan="1">จัดการ</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><img src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png" alt="รูปภาพ" class="img-fluid rounded mx-auto d-block profile-picture-list" style="width: 50px;"></td>
                                                <td>AC032948234</td>
                                                <td>อุปกรณ์iot</td>
                                                <td>บอร์ดraspberrypi</td>
                                                <td>2</td>
                                                <td class="td-actions text-center">
                                                    <button type="button" rel="tooltip" title="เพิ่มเข้าคลังที่จะยืม" class="btn btn-black btn-link btn-sm">
                                                        <i class="material-icons">cancel</i>
                                                    </button>

                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><img src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png" alt="รูปภาพ" class="img-fluid rounded mx-auto d-block profile-picture-list" style="width: 50px;"></td>
                                                <td>AC032948255</td>
                                                <td>อุปกรณ์iot</td>
                                                <td>บอร์ดArduino</td>
                                                <td>1</td>
                                                <td class="td-actions text-center">
                                                    <button type="button" rel="tooltip" title="เพิ่มเข้าคลังที่จะยืม" class="btn btn-black btn-link btn-sm">
                                                        <i class="material-icons">cancel</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>-->
            <!-- **************************popupการคืนอุปกรณ์************************************* -->
            <div id="modalReturnEquipment" class="modal">
                <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h3 class="modal-title"><span style="color: white">รายการอุปกรณ์ที่ยังไม่คืน</span></h3>
                        </div>
                        <div class="modal-body" id="addModalBody">
                            <div class="row center">
                                <div class="col-sm-12">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr role="row">
                                            <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                                            <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                                            <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                                            <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                                            <th rowspan="1" colspan="1">รายชื่อผู้ยืม</th>
                                            <th rowspan="1" colspan="1">วันที่ยืม</th>
                                            <th rowspan="1" colspan="1">วันที่สิ้นสุดการยืม</th>
                                            <th rowspan="1" colspan="1">จัดการ</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                                            <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                                            <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                                            <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                                            <th rowspan="1" colspan="1">รายชื่อผู้ยืม</th>
                                            <th rowspan="1" colspan="1">วันที่ยืม</th>
                                            <th rowspan="1" colspan="1">วันที่สิ้นสุดการยืม</th>
                                            <th rowspan="1" colspan="1">จัดการ</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img
                                                        src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png"
                                                        alt="รูปภาพ"
                                                        class="img-fluid rounded mx-auto d-block profile-picture-list"
                                                        style="width: 50px;"></td>
                                            <td>1212312121</td>
                                            <td>อุปกรณ์iot</td>
                                            <td>บอร์ดraspberrypi</td>
                                            <td>นาย เอ บีซี</td>
                                            <td>02/03/2563</td>
                                            <td>20/03/2563</td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="เพิ่มเข้าคลังที่จะยืม"
                                                        class="btn btn-black btn-link btn-sm">
                                                    <i class="material-icons">get_app</i>
                                                </button>

                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><img
                                                        src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png"
                                                        alt="รูปภาพ"
                                                        class="img-fluid rounded mx-auto d-block profile-picture-list"
                                                        style="width: 50px;"></td>
                                            <td>11111122222</td>
                                            <td>อุปกรณ์iot</td>
                                            <td>บอร์ดArduino</td>
                                            <td>นาย ดี ดีดี</td>
                                            <td>02/03/2563</td>
                                            <td>20/03/2563</td>
                                            <td class="td-actions text-center">
                                                <button type="button" rel="tooltip" title="เพิ่มเข้าคลังที่จะยืม"
                                                        class="btn btn-black btn-link btn-sm">
                                                    <i class="material-icons">get_app</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="submitedit">ยืนยัน</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <!-- **************************popupการเพิ่มรายการที่ต้อการ****************************** -->
            <div id="modalAddToCart" class="modal">
                <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h3 class="modal-title"><span style="color: white">รายละเอียดอุปกรณ์</span></h3>
                        </div>
                        <div class="modal-body" id="addModalBody">
                            <div class="container">
                                <div class="row mb-4">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">

                                    </div>
                                    <img src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png"
                                         width="35%" height="35%">
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                        <span>เลขครุภัณฑ์ :</span>
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control" id="semester" value="AC0924709"
                                               maxlength="100" disabled="">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                        <span>ชื่ออุปกรณ์ :</span>
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control" id="semester" value="บอร์ดArduino"
                                               maxlength="100" disabled="">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                        <span>หมวดหมู่อุปกรณ์ <span style="color: red">*</span> :</span>
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control" id="semester" value="อุปกรณ์iot"
                                               maxlength="100" disabled="">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                        <span>จำนวนอุปกรณ์ที่ต้องการ :</span>
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                        <input type="text" class="form-control" id="type_add" name="type_add"
                                               placeholder="กรุณากรอกจำนวนอุปกรณ์" maxlength="8">
                                    </div>
                                </div>
                                <div class="row mb-4" style="margin:10px;">
                                    <div class="col-xl-3 col-12 text-right">
                                        <span>วันที่จอง : </span>
                                    </div>
                                    <div class="col-xl-3 col-12">
                                        <input type="date" class="form-control" id="date" value="2020-03-05"
                                               maxlength="100">
                                    </div>
                                    <div class="col-xl-3 col-12 ">
                                        <span>วันที่จะคืน : </span>
                                    </div>
                                    <div class="col-xl-3 col-12 ">
                                        <input type="date" class="form-control" id="date" value="2020-03-05"
                                               maxlength="100">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="submitedit">ยืนยัน</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="https://creative-tim.com/presentation">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right" id="date">
                , made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
            </div>
        </div>
    </footer>
    <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
    </script>
</div>
</div>
<?php include("../main/footer.php"); ?>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function () {
        $().ready(function () {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            $('.fixed-plugin a').click(function (event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function () {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function () {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function () {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function () {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function () {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
    $(document).ready(function () {
        console.log("ready!");
        $("#AddTypeEquipment").on('click', function () {
            $("#modalAddTypeEquipment").modal('show');
        });
        $('[data-toggle="tooltip"]').tooltip();
    });
    $(document).ready(function () {
        console.log("ready!");
        $("#return_equipment").on('click', function () {
            $("#modalReturnEquipment").modal('show');
        });
        $('[data-toggle="tooltip"]').tooltip();
    });
    $(document).ready(function () {
        console.log("ready!");
        $("#AddToCart").on('click', function () {
            $("#modalAddToCart").modal('show');
        });
        $('[data-toggle="tooltip"]').tooltip();
    });
    $(document).ready(function () {
        $('#example').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ]
        });
    });
</script>
</body>

</html>