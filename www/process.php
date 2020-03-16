<?php
//.....................................................................
//--- ตัวอย่างเว็บเป็นการใช้ session มีการลิงก์ไปไฟล์ php อื่นๆ และอาจมีลิงก์ย้อนกลับมายังไฟล์นี้อีกภายหลังได้ 
//--- หากไม่ได้ใช้งาน session ไม่ต้องกำหนด 

//--- ถ้ายังไม่มีการกำหนดตัวแปรแบบ session ชื่อ $SESSION["Logon"] มาก่อน  
//--- ให้เริ่มต้นการใช้ session ด้วยคำสั่ง session_start() 
if (!isset($_SESSION["Logon"])) {
	session_start();
}

//--- กำหนดให้  $SESSION เป็นตัวแปรแบบ session 
//session_register("SESSION");
//.....................................................................

?>

<HTML>
<HEAD>
<TITLE></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY>


<?php

include 'encode.php';			
//--- ใช้ในกรณีที่ต้องการนำชื่อหรือข้อมูลอื่นๆจาก LDAP มาแสดง แต่ encoding ไม่ใช้ UTF-8
//--- เนื่องจากข้อมูลของ LDAP เป็น UTF-8  จึงต้องแปลงข้อมูลก่อนจาก UTF-8 เป็น TIS-620 หรือ Windows-874


//========================================================================================
if (isset($_SESSION["Logon"]) && $_SESSION["Logon"]==1) {
    // nothing 
} else {

    //--- นำไฟล์ ldap.php เข้ามาใช้งานร่วมด้วย 
    include 'ldap.php';

    //--- ตรวจสอบตัวแปรส่งมาจาก form หรือไม่ 
    //--- ตัวอย่างใช้ชื่อ account หรือ username เป็น  form_account 
    if (isset($_POST["form_account"]) && !empty($_POST["form_account"])) {
	$your_account = str_replace("*","",strtolower(trim($_POST['form_account'])));
	 }

    //--- ตรวจสอบตัวแปรส่งมาจาก form หรือไม่ 
    //--- ตัวอย่างใช้ชื่อ password  เป็น  form_password 
    if (isset($_POST["form_password"]) && !empty($_POST["form_password"])) {
	$your_password = $_POST["form_password"];
    }
    //--- ตรวจสอบ account และ password โดยใช้ฟังก์ชัน user_authen() จากไฟล์ ldap.php ซึ่งได้ include ไว้
    //--- ผลลัพธ์เก็บไว้ที่ตัวแปร $ldap_authen_result 
    //--- ถ้าค่าเป็น 0 แสดงว่า account และ password ถูกต้อง 
    //--- ถ้าค่ามากกว่า 0 แสดงว่า มีข้อผิดพลาด มีข้อความ error เก็บอยู่ในตัวแปร $ldap_error[$ldap_authen_result] 
    $ldap_authen_result = user_authen($your_account, $your_password);
	if ($ldap_authen_result > 0) {
	echo "<center><font color=RED>" . $ldap_error[$ldap_authen_result] . "</font></center><br>";
    } else {
	//--- authentication สำเร็จ  สร้างตัวแปร session ชื่อว่า Logon กำหนดค่าให้เป็น 1  เพื่อแสดงว่า เข้าสู่ระบบได้ 
	$_SESSION["Logon"] = 1;
    }

    //--- หากต้องการตรวจสอบ account เฉพาะที่สามารถเข้าระบบได้ สามารถเขียน code ตรวจสอบเพิ่มเติมได้ 
	/*
    if ($ldap_authen_result == 0 && $your_account != "pichaya") {
	echo "<h3 align=center><font color=RED>" . $your_account . " ไม่มีสิทธิเข้าใช้ระบบ</font></h3><br>";
        //--- ถ้าไม่ใช่ account ที่มีสิทธิ กำหนดให้ตัวแปร session ชื่อว่า Logon มีค่าเป็น 0   เพื่อแสดงว่า ไม่ให้เข้าสู่ระบบ 
	$SESSION["Logon"] = 0;
    }
	*/

}	// End of if (isset($SESSION["Logon"]) && $SESSION["Logon"]==1) 
//========================================================================================


//--- ตรวจสอบว่ามีตัวแปรแบบ session ชื่อ $SESSION["Logon"] และมีค่าเป็น 1 หรือไม่ เพื่ออนุญาตให้เข้าสู่ระบบได้ 
if (isset($_SESSION["Logon"]) && $_SESSION["Logon"]==1) {

    //--- ตัวอย่างรับข้อมูลจาก LDAP เก็บไว้ในตัวแปรแบบ session สำหรับนำไปใช้ในไฟล์ .php อื่นๆ
    if (!isset($_SESSION["ldap_uid"])) {
	//--- ถ้าเป็นการเข้า session ครั้งแรก ยังไม่มีตัวแปรแบบ session เก็บข้อมูลจาก ldap  ให้กำหนดค่าจาก ldap ให้ตัวแปรแบบ session ต่างๆ 
	//--- ครั้งต่อไป หรือไปยังไฟล์อื่น ที่ยังไม่ปิด session สามารถใช้ ตัวแปรแบบ session และค่าของมัน ได้เลย 
	$_SESSION["ldap_uid"]		= $ldap_uid;
	$_SESSION["ldap_engname"]	= $ldap_engname;
	$_SESSION["ldap_thainame"]	= $ldap_thainame;
	$_SESSION["ldap_email"]		= $ldap_email;
	$_SESSION["ldap_gender"]		= $ldap_gender;
	$_SESSION["ldap_Job"]		= $ldap_Job;
	$_SESSION["ldap_position"]	= $ldap_position;
	$_SESSION["ldap_department"]	= $ldap_department;
	$_SESSION["ldap_faculty"]	= $ldap_faculty;
	$_SESSION["ldap_campus"]		= $ldap_campus;
 
   }

    echo "<center>";

    //--- ทดลองแสดงชื่อภาษาไทยของผู้ล๊อกอิน 
    echo "ผู้ล๊อกอินเข้าระบบ : " ;
    //..............................................................................
    //--- สำหรับ source code ที่กำหนดใช้ encoding เป็น Unicode (UTF-8) อยู่แล้ว 
    echo  $_SESSION["ldap_thainame"];										
   									
    //.............................................................................. 
    //--- สำหรับ source code ที่กำหนดใช้ encoding เป็น TIS-620 หรือ Windows-874 
    //--- ให้ใช้ฟังก์ชัน utf8_to_tis620() เพื่อแปลงจาก UTF-8 เป็น TIS-620 
    //..............................................................................


    //--- เริ่มกระบวนการของระบบ ************
    echo "<br><br>";
    echo "Process...........................<br>";
    echo "...........................................<br>";
    echo "...........................................<br>";
    echo "...........................................<br>";
    echo "...........................................<br>";
    echo "...........................................<br>";
    echo "...........................................<br>";
    echo "<br>";
    echo "<a href=process2.php>ไปยังไฟล์ process2.php</a>";
    echo "<br><br>";
    echo "<a href=logout.php>ออก (Logout)</a>";
    echo "</center>";
    //--- จบกระบวนการของระบบ ***************


} else {
    //--- ส่วนนี้ คือ ไม่สามารถเข้าสู่ระบบได้  ให้แสดงลิงก์ Login 
    echo "<center>";
    echo "<a href=login.php>เข้าสู่ระบบ (Login)</a>";
    echo "</center>";
}


?>

</BODY>
</HTML>

