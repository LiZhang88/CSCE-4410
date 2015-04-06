<?php

// Secure Question
function securequestionSel($name)
{
    echo  '<select name=' .$name. '>';
    echo  '<option value="color">what\'s your favorite color?</option>';
    echo  '<option value="number">what\'s your lucky number?</option>';
	echo  '<option value="pet">what\'s your favorite animal?</option>';
    echo  ' </select>  ';	
}

?>

