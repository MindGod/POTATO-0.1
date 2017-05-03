<?php
	function uploadFile($filename)
	{
   	   $killerPhoto = $filename;
   	   $extension = pathinfo($killerPhoto['name'],PATHINFO_EXTENSION);
   	   $fileName = md5(rand(0, 1000).time()).".".$extension;

   	   move_uploaded_file($killerPhoto['tmp_name'], 'uploads/'.$fileName);

   	   return $fileName;
	}
   if (isset($_POST['killer_name'])){
     $photo1 = uploadFile($_FILES['photo1']);
     $photo2 = uploadFile($_FILES['photo1']);
     
     $id = md5(rand(0, 1000).time());
     $killerName = $_POST['killer_name'];
     $killerWeapon = $_POST['killer_weapon'];
          $killerBirthday = $_POST['killer_birthday'];
               $killerVictims = $_POST['killer_victims'];
                    $killerDeathday = $_POST['killer_deathday'];
                    $killerPenalty = $_POST['killer_penalty'];
                         $famousFor = $_POST['famous_for'];
                            
     $handler = fopen('whatever.txt','a+');
     fwrite($handler, $id."|".$killerName."|".$killerWeapon."|".$killerBirthday."|".$killerVictims."|".$killerDeathday."|".$famousFor."|".$photo1."|".$photo2."\n");

     // fwrite($handler, md5(rand(0, 1000).time())."|".
     //  $_POST['killer_name']."|".
     //  $_POST['killer_weapon']."|".
     //  $_POST['killer_birthday']."|".
     //  $_POST['killer_victims']."|".
     //  $_POST['killer_deathday']."|".
     //  $_POST['famous_for']."|".
     //  $photo1."|".
     //  $photo2."\n"
     //  );
     fclose($handler);
     }
?>
<form action="add.php" method="post" enctype="multipart/form-data">
Zudiko vardas: <input name="killer_name" /><br/>
Zudiko ginklas: <input name="killer_weapon"/><br/>
Zudiko gimtadienis: <input name="killer_birthday"/><br/>
Auku skaicius: <input name="killer_victims"/><br/>
Zudiko mirtadienis: <input name="killer_deathday"/><br/>
Zudiko bausme: <input name="killer_penalty"/><br/>
Zudiko aprasymas: <textarea name="famous_for"></textarea><br />
Zudiko veido fotografija (foto1): <input type="file" name="photo1"/><br />
Zudiko veido fotografija (foto2): <input type="file" name="photo2"/><br />
<input type="submit" value="Issaugoti" />
</form>