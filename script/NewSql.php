<?php

spl_autoload_register("autoload",true,true);

function autoload($className = ''){
	echo "类名为：".$className.PHP_EOL;
	include "./{$className}.php";
}

$a = new Kaka();
