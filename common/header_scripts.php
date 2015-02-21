<?php
	if(file_exists("photos/desktop_710")){
    echo "var num_photos_desktop = ".count_files("photos/desktop_710").";";
  }
  if(file_exists("photos/mobile_350")){
    echo "var num_photos_mobile = ".count_files("photos/mobile_350").";";
  }
?>