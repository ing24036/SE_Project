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
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard Dark Edition by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/css/fileinput.css" />
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
        <div class="sidebar" data-color="green" data-background-color="black">
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
                        <a class="navbar-brand" href="">จัดการอุปกรณ์</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
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
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">build</i>
                                    </div>
                                    <p class="card-category">จำนวนอุปกรณ์</p>
                                    <h3 class="card-title">2อุปกรณ์
                                        <small></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats" id="AddEquipment" style="cursor:pointer;">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">add</i>
                                    </div>
                                    <p class="card-category"></p>
                                    <h3 class="card-title">เพิ่มอุปกรณ์
                                        <small></small>
                                    </h3>

                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- *********จำนวนอุปกรณ์ทั้งหมด*********** -->
                    <div class="row">
                        <div class="card shadow mb-4">
                            <div class="card-header card-header-success">
                                <h4 class="card-title">รายชื่ออุปกรณ์
                                </h4>
                            </div>
                            <div class="card-body table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row center">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr role="row">
                                                        <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                                                        <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                                                        <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                                                        <th rowspan="1" colspan="1">จำนวนอุปกรณ์</th>
                                                        <th rowspan="1" colspan="1">สิทธิ์การยืม</th>
                                                        <th rowspan="1" colspan="1">รายละเอียดอื่นๆ</th>
                                                        <th rowspan="1" colspan="1">จัดการ</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                                                        <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                                                        <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                                                        <th rowspan="1" colspan="1">จำนวนอุปกรณ์</th>
                                                        <th rowspan="1" colspan="1">สิทธิ์การยืม</th>
                                                        <th rowspan="1" colspan="1">รายละเอียดอื่นๆ</th>
                                                        <th rowspan="1" colspan="1">จัดการ</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png" alt="รูปภาพ" class="img-fluid rounded mx-auto d-block profile-picture-list" style="width: 50px;"></td>

                                                        <td>อุปกรณ์iot</td>
                                                        <td>บอร์ดraspberrypi</td>
                                                        <td rel="tooltip" title="รายชื่ออุปกรณ์"><a href="">2
                                                                อุปกรณ์</a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-success btn-square btn-sm active" data-toggle="tooltip" title="ผู้ดูแลระบบ">
                                                                <b>A
                                                            </a>
                                                            <a class="btn btn-success btn-square btn-sm active" data-toggle="tooltip" title="อาจารย์">
                                                                <b>T
                                                            </a>
                                                            <a class="btn btn-success  btn-square btn-sm active" data-toggle="tooltip" title="นิสิต">
                                                                <b>S
                                                            </a>
                                                            <a class="btn btn-secondary btn-square btn-sm active" data-toggle="tooltip" title="บุคคลภายนอก">
                                                                <b>O
                                                            </a>
                                                        </td>
                                                        <td>กกกกกกกกกกกกกกกกกกกกกกกก</td>
                                                        <td class="td-actions text-center">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-black btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-black btn-link btn-sm">
                                                                <i class="material-icons">delete</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1"><img src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png" alt="รูปภาพ" class="img-fluid rounded mx-auto d-block profile-picture-list" style="width: 50px;"></td>

                                                        <td>อุปกรณ์iot</td>
                                                        <td>บอร์ดArduino</td>
                                                        <td rel="tooltip" title="รายชื่ออุปกรณ์" id="NameEquipment">10
                                                            อุปกรณ์
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-success btn-square btn-sm active" data-toggle="tooltip" title="ผู้ดูแลระบบ">
                                                                <b>A
                                                            </a>
                                                            <a class="btn btn-success btn-square btn-sm active" data-toggle="tooltip" title="อาจารย์">
                                                                <b>T
                                                            </a>
                                                            <a class="btn btn-success  btn-square btn-sm active" data-toggle="tooltip" title="นิสิต">
                                                                <b>S
                                                            </a>
                                                            <a class="btn btn-secondary btn-square btn-sm active" data-toggle="tooltip" title="บุคคลภายนอก">
                                                                <b>O
                                                            </a>

                                                        </td>
                                                        <td>กกกกกกกกกกกกกกกกกกกกกกกก</td>
                                                        <td class="td-actions text-center">
                                                            <button onclick="EditEquipment()" type="button" rel="tooltip" title="Edit Task" class="btn btn-black btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <button onclick="deleteEquipment()" type="button" rel="tooltip" title="Remove" class="btn btn-black btn-link btn-sm">
                                                                <i class="material-icons">delete</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- **************************popupของการเพิ่มอุปกรณ์****************************** -->
                <div id="modalAddEquipment" class="modal">
                    <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
                        <div class="modal-content">
                            <div class="modal-header ">
                                <h3 class="modal-title"><span style="color: white">เพิ่มรายการอุปกรณ์</span></h3>
                            </div>
                            <div class="modal-body" id="addModalBody">
                                <div class="container">
                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                            <span>เลขครุภัณฑ์ :</span>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" id="type_add" name="type_add" placeholder="กรุณากรอกเลขครุภัณฑ์" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                            <span>ชื่ออุปกรณ์ :</span>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" id="type_add" name="type_add" placeholder="กรุณากรอกชนิดอุปกรณ์" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                            <span>หมวดหมู่อุปกรณ์ <span style="color: red">*</span> :</span>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                            <select class="browser-default custom-select">
                                                <option>-->กรุณาเลือก<--< /option> <option value='1'>อุปกรณ์iot
                                                </option>
                                                <option value='2'>อุปกรณ์อิเล็คทรอนิกส์</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                            <span>จำนวนอุปกรณ์ :</span>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" id="type_add" name="type_add" placeholder="กรุณากรอกจำนวนอุปกรณ์" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>สิทธิ์การยืม :</span>
                                        </div>
                                        <div class="col-xl-8 col-12">
                                            <!-- Default inline 1-->
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                                <label class="custom-control-label" for="defaultInline1">อาจารย์</label>
                                            </div>

                                            <!-- Default inline 2-->
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                                <label class="custom-control-label" for="defaultInline2">นิสิต</label>
                                            </div>

                                            <!-- Default inline 3-->
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                                <label class="custom-control-label" for="defaultInline3">บุคคลภายนอก</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>เพิ่มรูปอุปกรณ์ :</span>
                                        </div>
                                        <div class="col-xl-8 col-12">
                                            <div class=" upload-content">
                                                <div class="main-section">
                                                    <div class="file-loading">
                                                        <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
                                                    </div>
                                                </div>
                                            </div>
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
                <div id="modalEditEquipment" class="modal">
                    <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
                        <div class="modal-content">
                            <div class="modal-header ">
                                <h3 class="modal-title"><span style="color: white">เพิ่มรายการอุปกรณ์</span></h3>
                            </div>
                            <div class="modal-body" id="addModalBody">
                                <div class="container">
                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                            <span>เลขครุภัณฑ์ :</span>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" id="type_add" name="type_add" placeholder="กรุณากรอกเลขครุภัณฑ์" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                            <span>ชื่ออุปกรณ์ :</span>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" id="type_add" name="type_add" placeholder="กรุณากรอกชนิดอุปกรณ์" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                            <span>หมวดหมู่อุปกรณ์ <span style="color: red">*</span> :</span>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                            <select class="browser-default custom-select">
                                                <option>-->กรุณาเลือก<--< /option> <option value='1'>อุปกรณ์iot
                                                </option>
                                                <option value='2'>อุปกรณ์อิเล็คทรอนิกส์</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                                            <span>จำนวนอุปกรณ์ :</span>
                                        </div>
                                        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                                            <input type="text" class="form-control" id="type_add" name="type_add" placeholder="กรุณากรอกจำนวนอุปกรณ์" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>สิทธิ์การยืม :</span>
                                        </div>
                                        <div class="col-xl-8 col-12">
                                            <!-- Default inline 1-->
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                                                <label class="custom-control-label" for="defaultInline1">อาจารย์</label>
                                            </div>

                                            <!-- Default inline 2-->
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                                <label class="custom-control-label" for="defaultInline2">นิสิต</label>
                                            </div>

                                            <!-- Default inline 3-->
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="defaultInline3">
                                                <label class="custom-control-label" for="defaultInline3">บุคคลภายนอก</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-xl-3 col-12 text-right">
                                            <span>เพิ่มรูปอุปกรณ์ :</span>
                                        </div>
                                        <div class="col-xl-8 col-12">
                                            <div class=" upload-content">
                                                <div class="main-section">
                                                    <div class="file-loading">
                                                        <input id="file-1" type="file" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="1">
                                                    </div>
                                                </div>
                                            </div>
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
                <div id="modalNameEquipment" class="modal">
                    <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
                        <div class="modal-content">
                            <div class="modal-header ">
                                <h3 class="modal-title"><span style="color: black">รายการอุปกรณ์ที่ยืม</span></h3>
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
                                                    <th rowspan="1" colspan="1">สถานะ</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                                                    <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                                                    <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                                                    <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                                                    <th rowspan="1" colspan="1">สถานะ</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><img src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png" alt="รูปภาพ" class="img-fluid rounded mx-auto d-block profile-picture-list" style="width: 50px;"></td>
                                                    <td>AC032948234</td>
                                                    <td>อุปกรณ์iot</td>
                                                    <td>บอร์ดraspberrypi</td>
                                                    <td>ถูกยืมแล้ว</td>
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
                </div>
                <div id="modaldelete" class="modal">
                    <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
                        <div class="modal-content">
                            <div class="modal-header ">
                                <h3 class="modal-title"><span style="color: white">ยืนยันการลบอุปกรณ์</span></h3>
                            </div>
                            
                            <div class="modal-body" id="addModalBody">
                                <div class="row mb-4  mr-6">


                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success" name="submitedit">ยืนยัน</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                </div>
                            </div>

                        </div>
                    </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.2/js/fileinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
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

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
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

                $('.switch-sidebar-image input').change(function() {
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

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

        });
        $(document).ready(function() {
            console.log("ready!");
            $("#AddEquipment").on('click', function() {
                $("#modalAddEquipment").modal('show');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
        //เรียกใช้เพิ่มไฟล์รูป
        $('#file-1').fileinput({
            theme: 'fa',
            uploadUrl: "upload.php",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val()
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize: 2000,
            maxFileNum: 8,
            slugCallback: function(filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
        $(document).ready(function() {
            console.log("ready!");
            $("#NameEquipment").on('click', function() {
                $("#modalNameEquipment").modal('show');
            });
            $('[data-toggle="tooltip"]').tooltip();
        });

        function EditEquipment() {
            $("#modalEditEquipment").modal();
        }
        function deleteEquipment() {
            $("#modaldelete").modal();
        }
    </script>
</body>

</html>