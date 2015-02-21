<?php
        require_once("ayah.php");
        $ayah = new AYAH();

        // Check to see if the user has submitted the form. You will need to replace
        // 'my_submit_button_name' with the name of your 'Submit' button.
        if (array_key_exists('my_submit_button_name', $_POST))
        {
                // Use the AYAH object to see if the user passed or failed the game.
                $score = $ayah->scoreResult();

                if ($score)
                {
                        // This happens if the user passes the game. In this case,
                        // we're just displaying a congratulatory message.
                        mail('hhkaos@gmail.com', 'Mi título', $mensaje);
                        echo "{response: 'ok'}";
                }
                else
                {
                        echo "{response: 'nok'}";
                }
        }
?>
