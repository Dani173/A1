<?php
if (!empty($_SERVER['HTTP'])) 
{
  echo 'Estas usando HTTP';
}
else
{
	if (!empty($_SERVER['HTTPS'])) 
	{
echo 'Estas usando HTTPS';
	}else{
	echo 'No estas usando ni protocolo HTTPS ni HTTP'	;
	}
}
?>

