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
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

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
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>หน้าหลัก</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#link-2' aria-expanded='true' aria-controls='link-2'>
              <i class="material-icons">build</i>
              <p>รายละเอียดอุปกรณ์</p>
            </a>
            <div id='link-2' class='collapse' aria-labelledby='headingTwo' data-parent='#accordionSidebar'>
              <div class=' py-2 collapse-inner rounded' style='border-left: 2px solid white; border-radius: 0% !important;'>
                <div class="background-color-sideber" id="accordionSidebar">
                  <a class='nav-link' href='./view/name_equipment.php'>รายการอุปกรณ์</a>
                  <a class='nav-link' href='./view/name_type_equipment.php'>หมวดหมู่อุปกรณ์</a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./view/circulation.php">
              <i class="material-icons">shopping_cart</i>
              <p>การยืม-คืนอุปกรณ์</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./view/history_circulation.php">
              <i class="material-icons">history</i>
              <p>ประวัติการยืม-คืนอุปกรณ์</p>
            </a>
          </li>

          <!-- <li class="nav-item active-pro ">
          <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
          </a>
      </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">หน้าแรก</a>
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
                  <p class="card-category">จำนวนอุปกรณ์ที่รอตอบรับ</p>
                  <h3 class="card-title">2อุปกรณ์
                    <small></small>
                  </h3>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">shopping_cart</i>
                  </div>
                  <p class="card-category">จำนวนอุปกรณ์ที่กำลังยืม</p>
                  <h3 class="card-title">2อุปกรณ์</h3>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Fixed Issues</p>
                  <h3 class="card-title">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Followers</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <!-- *********จำนวนอุปกรณ์ที่รอตอบรับ*********** -->
          <div class="card shadow mb-4">
            <div class="card-header card-header-warning">
              <h4 class="card-title">อุปกรณ์ที่รอตอบรับ</h4>
            </div>
            <div class="card-body table-responsive">
              <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row center">
                  <div class="col-sm-12">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr role="row">
                          <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                          <th rowspan="1" colspan="1">ชื่อผู้ขอยืม</th>
                          <th rowspan="1" colspan="1">วันที่ยืม</th>
                          <th rowspan="1" colspan="1">จำนวน</th>
                          <th rowspan="1" colspan="1">อาจารย์ที่รับผิดชอบ</th>
                          <th rowspan="1" colspan="1">จัดการ</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                          <th rowspan="1" colspan="1">ชื่อผู้ขอยืม</th>
                          <th rowspan="1" colspan="1">วันที่ยืม</th>
                          <th rowspan="1" colspan="1">จำนวน</th>
                          <th rowspan="1" colspan="1">อาจารย์ที่รับผิดชอบ</th>
                          <th rowspan="1" colspan="1">จัดการ</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr role="row" class="odd">
                          <!-- <td class="sorting_1">AC032948234</td> -->
                          <td>บอร์ดAduino</td>
                          <td>นาย เอก สมหวัง</td>
                          <td>02/08/2562</td>
                          <td rel="tooltip" title="รายชื่ออุปกรณ์" id='NameEquipment'>1
                            อุปกรณ์
                          </td>
                          <td>อ.นุชนาฎ สัตยากวี</td>
                          <td class="td-actions text-center">
                            <button type="button" rel="tooltip" title="อนุมัติการยืม" class="btn btn-black btn-link btn-sm">
                              <i class="material-icons">done</i>
                            </button>
                            <button type="button" rel="tooltip" title="ยกเลิก" class="btn btn-black btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                        <tr role="row" class="odd">
                          <!-- <td class="sorting_1">AC032948555</td> -->
                          <td>บอร์ดAduino2</td>
                          <td>นาย สอง สามสี่</td>
                          <td>02/08/2562</td>
                          <td rel="tooltip" title="รายชื่ออุปกรณ์"><a href="">2
                              อุปกรณ์</a>
                          </td>
                          <td>อ.นุชนาฎ สัตยากวี</td>
                          <td class="td-actions text-center">
                            <button onclick="Acept()" type="button" rel="tooltip" title="อนุมัติการยืม" class="btn btn-black btn-link btn-sm">
                              <i class="material-icons">done</i>
                            </button>
                            <button onclick="NotAcept()" type="button" rel="tooltip" title="ยกเลิก" class="btn btn-black btn-link btn-sm">
                              <i class="material-icons">close</i>
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
          <!-- *********ตารางจำนวนอุปกรณ์ที่กำลังยืม*********** -->
          <div class="card shadow mb-4">
            <div class="card-header card-header-success">
              <h4 class="card-title">อุปกรณ์ที่กำลังยืม</h4>
            </div>
            <div class="card-body table-responsive">
              <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row center">
                  <div class="col-sm-12">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr role="row">
                          <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                          <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                          <th rowspan="1" colspan="1">ชื่อผู้ขอยืม</th>
                          <th rowspan="1" colspan="1">วันที่ยืม</th>
                          <th rowspan="1" colspan="1">วันที่กำหนดวันคืน</th>
                          <th rowspan="1" colspan="1">อาจารย์ผู้รับผิดชอบ</th>
                          <th rowspan="1" colspan="1">สถานะ</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                          <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                          <th rowspan="1" colspan="1">ชื่อผู้ขอยืม</th>
                          <th rowspan="1" colspan="1">วันที่ยืม</th>
                          <th rowspan="1" colspan="1">วันที่กำหนดวันคืน</th>
                          <th rowspan="1" colspan="1">อาจารย์ผู้รับผิดชอบ</th>
                          <th rowspan="1" colspan="1">สถานะ</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr role="row" class="odd">
                          <td class="sorting_1">AC032948234</td>
                          <td>บอร์ดAduino</td>
                          <td>นาย เอก สมหวัง</td>
                          <td>02/08/2562</td>
                          <td>18/08/2562</td>
                          <td>อ.นุชนาฎ สัตยากวี</td>
                          <td class="td-actions text-center">ยังไม่คืน</td>
                        </tr>
                        <tr role="row" class="odd">
                          <td class="sorting_1">2AC032948555</td>
                          <td>บอร์ดAduino2</td>
                          <td>นาย สอง สามสี่</td>
                          <td>02/08/2562</td>
                          <td>12/08/2562</td>
                          <td>อ.นุชนาฎ สัตยากวี</td>
                          <td class="td-actions text-center">รอมารับของ</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th rowspan="1" colspan="1">รูปอุปกรณ์</th>
                          <th rowspan="1" colspan="1">เลขครุภัณฑ์</th>
                          <th rowspan="1" colspan="1">หมวดหมู่อุปกรณ์</th>
                          <th rowspan="1" colspan="1">ชื่ออุปกรณ์</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr role="row" class="odd">
                          <td class="sorting_1"><img src="https://www.bahtsoft.com/demo_eqborrow/assets/images/image.png" alt="รูปภาพ" class="img-fluid rounded mx-auto d-block profile-picture-list" style="width: 50px;"></td>
                          <td>AC032948234</td>
                          <td>อุปกรณ์iot</td>
                          <td>บอร์ดraspberrypi</td>
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
        <div id="modalAcept" class="modal">
          <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
            <div class="modal-content">
              <div class="modal-header ">
                <h3 class="modal-title"><span style="color: black">x
                การอนุมัติการยืม</span></h3>
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
        <div id="modalNotAcept" class="modal">
          <form class="modal-dialog modal-lg" method="post" action="processaddsubject.php">
            <div class="modal-content">
              <div class="modal-header ">
                <h3 class="modal-title"><span style="color: black">ปฏิเสธการอนุมัติการยืม</span></h3>
              </div>
              <div class="row mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                      <span>เหตุผลการปฏิเสธ :</span>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
                      <input type="text" class="form-control" id="type_add" name="type_add" placeholder="กรุณากรอกเหตุผล" maxlength="8">
                    </div>
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
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
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
      $("#NameEquipment").on('click', function() {
        $("#modalNameEquipment").modal('show');
      });
      $('[data-toggle="tooltip"]').tooltip();
    });
    function Acept() {
      $("#modalAcept").modal();
    }
    function NotAcept() {
      $("#modalNotAcept").modal();
    }
  </script>
</body>

</html>