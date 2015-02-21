<?php
	function get_lang(){
		if(array_key_exists("l",$_GET)){
			$l = $_GET["l"];
		}
		$lang_supported = array("en", "es", "fr");
		if(!isset($l)){
			$l = "en";
		}else if(!in_array($l, $lang_supported)){
			$l = "en";
		}
		return $l;
	}

	function count_files($dir){
		$i = 0; 
    if ($handle = opendir($dir)) {
      while (($file = readdir($handle)) !== false){
				$pos=strstr($file, "pic");
        if (!in_array($file, array('.', '..')) && !is_dir($dir.$file) && strlen($pos)>0) 
          $i++;
      }
    }
    // prints out how many were in the directory
    return $i;
	}

	function print_options($a,$b){
		if($a > $b)
			$inc = -1;
		else
			$inc = 1;

		for($i=$a; $i!=$b; $i+=$inc){
			echo "<option value='$i'>$i</option>";
		}
		echo "<option value='$i'>$i</option>";
	}
	function send_mail($post){
		$mensaje = "Solicitud de info a través de minerja.com";
		$mensaje .= "\r\n" . "Nombre: ". $post["name"];
		$mensaje .= "\r\n" . "Email: ". $post["email"];
		$mensaje .= "\r\n" . "Adultos: ". $post["adults"];
		$mensaje .= "\r\n" . "Niños: ". $post["children"];
		if($post["children"] > 0){
			$mensaje .= " (";
			for($i=0; $i<5; $i++){
				if($post["child".$i] !=-1)
					$mensaje .= $post["child".$i].", ";
			}
			$mensaje .= ")";
		}
		$mensaje .= "\r\n" . "Bebes: ". $post["infants"];
		$mensaje .= "\r\n" . "Mensaje: ". $post["body"];

		$cabeceras = 'From: info@minerja.com' . "\r\n" .
				    'Reply-To: noreply@minerja.com' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();

		$sent = mail('hhkaos@gmail.com, nerja@gmx.es', $post["subject"], $mensaje, $cabeceras);
		if($sent){
			echo "<div class='success'>".$form_success[$l]."</div>";
		}else{
			echo "<div class='error'>".$form_no_success[$l]."</div>";
		}
	}
?>
