<? php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>menu</title>
</head>
<body>
<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="/SE_Project/SE2/pages_user/index_user.php">
            <div class="logo-img">
                <img src="/SE_Project/SE2/src/img/brand-white.svg" class="header-brand-img" alt="lavalite">
            </div>
            <span class="text">KU</span>
        </a>
        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i>
        </button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>
    <!--MenuBar-->
    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">

                <!--Tittle Menu Bar-->
                <div class="nav-lavel">ระบบยืมคืนอุปกรณ์</div>
                <!--Menu รายการเมนูแต่ละอัน -->
                <div class="nav-item active">
                    <a href="/SE_Project/SE2/pages_teacher/index_teacher.php"><i class="ik ik-grid"></i><span>Home</span></a>
                </div>
                <div class="nav-item active">
                    <a href="/SE_Project/SE2/pages_teacher/equipment/select_equipment.php"><i class="ik ik-shopping-cart"></i><span>ระบบยืมอุปกรณ์</span></a>
                </div>
                <div class="nav-item active">
                    <a href="/SE_Project/SE2/pages_teacher/equipment/select_equipment.php"><i class="ik ik-settings"></i><span>รายละเอียดอุปกรณ์</span></a>
                </div>
                <div class="nav-item active">
                    <a href="#"><i class="ik ik-clipboard"></i><span>คำขอทั้งหมด</span></a>
                </div>
                <div class="nav-item active">
                    <a href="./pages_teacher/history/history.php"><i class="ik ik-bar-chart-2"></i><span>ประวัติการยืม-คืนอุปกรณ์</span></a>
                </div>

            </nav>
        </div>
    </div>
</div>

</body>
</html>
