<?php
   //--------------------------------------------------
   //Gerekli dosyaları çağır.
   //--------------------------------------------------
   require_once('db-config.php');

   //--------------------------------------------------
   //Not id değerini al.
   //--------------------------------------------------
   $id = $_GET['id'];

   //--------------------------------------------------
   //Sorgu metni oluştur.
   //--------------------------------------------------
   $sql ="DELETE FROM notlar WHERE id=$id ";

   //--------------------------------------------------
   //Sorgu çalıştır.
   //--------------------------------------------------
   $sonuc = $db->exec($sql);

   //--------------------------------------------------
   //Sorgu sonucuna göre işlem yap.
   //--------------------------------------------------
   if(!$sonuc) {
      echo $db->lastErrorMsg();
   } else {
      echo"Not başarılı bir şekilde silindi." . " [" . $db->changes() . "]";
   }

   //--------------------------------------------------
   //Yönlendirme yap.
   //--------------------------------------------------
   header('Refresh:1;url=not-listele.php');