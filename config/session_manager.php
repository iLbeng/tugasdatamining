<?php

if(!isset ($_SESSION['namauser']))
{
		echo "<script>window.alert('Untuk mengakses, Anda harus Login Sebagai Manager');
        window.location=('../home')</script>";
}
?>
