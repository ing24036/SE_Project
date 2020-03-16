<?php
session_start();
//session_register("SESSION");
?>

<HTML>
<HEAD>
<TITLE></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</HEAD>
<BODY>

<?php

include 'encode.php';			
//--- ใช้ในกรณีที่ต้องการนำชื่อหรือข้อมูลอื่นๆจาก LDAP มาแสดง แต่ encoding ไม่ใช้ UTF-8
//--- เนื่องจากข้อมูลของ LDAP เป็น UTF-8  จึงต้องแปลงข้อมูลก่อนจาก UTF-8 เป็น TIS-620 หรือ Windows-874

echo "<center>";
echo "<h3>This is process2.php</h3><br>";

//--- ตรวจสอบว่ามีตัวแปรแบบ session ชื่อ $SESSION["Logon"] และมีค่าเป็น 1 หรือไม่   เพื่ออนุญาตให้เข้าสู่ระบบได้ 
if (isset($_SESSION["Logon"]) && $_SESSION["Logon"]==1) {
	//--- เริ่มกระบวนการของระบบ ------------------------------------------
	echo "<table border=1>";
	echo "<tr><td>รหัสบัญชี </td><td> " . $_SESSION["ldap_uid"] . "</td></tr>";
	echo "<tr><td>ชื่อภาษาอังกฤษ </td><td> " .   $_SESSION["ldap_engname"] . "</td></tr>";
	echo "<tr><td>ชื่อภาษาไทย </td><td> " .   $_SESSION["ldap_thainame"] . "</td></tr>";
	echo "<tr><td>e-mail address</td><td> " .   $_SESSION["ldap_email"] . "</td></tr>";
	echo "<tr><td>เพศ </td><td> " .   $_SESSION["ldap_gender"] . "</td></tr>";
	echo "<tr><td>อาชีพ </td><td> " .   $_SESSION["ldap_Job"] . "</td></tr>";
	echo "<tr><td>ตำแหน่ง </td><td> " .   $_SESSION["ldap_position"] . "</td></tr>";
	echo "<tr><td>ภาควิชาหรือเทียบเท่า</td><td> " .   $_SESSION["ldap_department"] . "</td></tr>";
	echo "<tr><td>คณะหรือเทียบเท่า </td><td> " .   $_SESSION["ldap_faculty"] . "</td></tr>";
	echo "<tr><td>วิทยาเขต </td><td> " .   $_SESSION["ldap_campus"] . "</td></tr>";
	echo "</table><br>";
	echo "<a href=\"process.php\">--Back--</a>";
	//--- จบกระบวนการของระบบ ----------------------------------------------
} else {
	echo "<a href=login.html>เข้าสู่ระบบ (Login)</a>";
}

echo "</center>";

?>

</BODY>
</HTML>
