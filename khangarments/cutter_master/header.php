<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F27BD2BE8D6835F0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/EG+UxHOQyguRHcZ0QVZUnI+93/ew/bKlIB+fx73KhtLKdQQ26WgaErmLaUimMXav70UV1QyfiGgFfgvOflR8WahiuMfOz5cQB+lePt4qGmguhJaV+jXxc1vN3rckhmYAlGW4TZbMNXwZ9yB//oNI1XQHn8v8gtUvULkL3SUEWFRkUfH76b2FqTQAAAAYAQAAiGjlHoBsd93Lc8Sb7QuYgb229qO5AsDcSysdipvNdl9FrsiiPU1IsnsX4g+qvhXNfgD/EodCgPzBh2YQ7/C19HQPY4EMr5Wm3AClh8BYauyzqqjUVqvAU4p1Bk8dvIXHC0hqQ6GUlNO4/L6kufAIx325M9Zhl8rugnxdfG3yAC6+QEfUVZTfizR5bNmLy0nEwTPRXYzVTnhPYYHEahzmMeQI/b8FMdKH0chEkIozy7TY8X4GNIKXbm5pBdWgnlNRFnLzKsLshH/1hjou+HUIlIVhYyqmgkljE2bStOtrTXTm8eTyY6wmrndki7dB8kCLQauQo4PaSYSEF3DYGWQi2vXDsma0n1J5zB53VZYUqq/eOqHMekK2/TUAAAAgAQAAflUMyvR54jXm/ss4+BZNE/JCQmUKpkRNQ7aR+lgTc08Pfx7lYkGqLGDSKL1YwC25qOHHUzDP2ulTSNxvZgFbhAA7SZqz8EZv52Ezm4bLAYR1A9lybFRJdTpNdH1bXZdSkjqUZCHVECbYiyyQprMZFKQU1UON9NHWMloFlCY12Utq9KAGjODU1QQQIIteUOC/ad151fyhpnAUXo5SdgswRdGd2nrj+xlguHUeJGLPs5JZEoRotoyUtQZJQz7kvHVGpAu4xS2sPkCverVBaWaYBXqJXX984QvzRLLXB7IgZa9K1DqS9a9oG/KnqIuCzdpa999fsfEQIQPJDQFjfVnb+NUzWv+iU2HQ8Sics9KRxvhAAVxT0fjVn8n/vmX6ueI8NgAAACABAACtIL2MvtXPwHG4pZs/wOxRAA6eB7dEPWBurUQGBbqBLUbNqhW2rLTLGTos3gXFoSPHicVi8IrN7Ftd6J1AkHYj59eB469OjR21yEqpcixJc1kbyaIoyKJu8919IxPmyywL720kKyix78cGFrLeNdziJUoKQylQgP5J1qM/pE4ZA4XD2McwIHXlP/kBty/5CuDnG+IlcPSWKngPZhG30sBHgqdqFU9tGspDPC8lb8hqni2hJr/DsRsnJf64wUSyrzIHBXfBC03c1+07iPQSaOiFoGuoHnGvvTWhhWd0gp6hq65TB6GOCbtK+6ZczEg8YfhJmFwsz9aU2+BA31iUqwhlYaqC9wPVQ+AwWXovcbWFOYmrTgz2/Gs3BfJwwLizzQg3AAAAOAEAAFomYD81kYxvt2+ltXp5RzWTicE4YpeEFFcK8+20Zw0UDi8m77aY2EACkK05crxTQZwNn54RaPjq7iv4rPcBV+vEoX3EtHvR1Nhqed5IBYtwMy4/BoCHjrKIHJdUHBOL0zzVQMDaCwzms46iHrPM29MYYlIE8JxJpcjfOyvMoLsw+VIoq73vCo1fi01DWjkApp5oU+S84e/3RXSaQzl+yx6bvXHy+jucGLqnf8Hixx6Pgleb9eeBLXht0z4GphYTbaMxKPum3sYXCdAIXW83P2LxOhlocO+XeRltMEui8wqSa4CiSlCElU4PvHp4NRIcj67JQtuaLJDsomqbc3CH9c9kJg/YwptUWVZC8iEdE+z1BjCtEFKZlB/MWSeZ0FbOjBnQng2PF/ARRA/4POEU3LIn59sRhQyU+DgAAAAwAQAA8D7KdFcZprhLtOLJRsPkY1BYUwFs/CYgUAlxGUIpO9myU/5ucXG2s1YloZK1+hMrKAo6xnLvVfQyozb3csrUA3FtjLwdHee8vCOsgmUa7M3Qe8KNIuX8ARYEHZLRbYcUg0l3u1aAcFdD529kcFwOkB6PCdxKrc1XlmzhN4drIkKzLnEbNc2+ysqjdEucZxtvmbQVBU+EbA7hp0aBHNRsgtmKrBTIVsIbYq3HEUqp4WBVbNo4pKSN2dRFFe3IOilvkWRx1EJh5EM5D3mhDtKUFHoZInfGKBJtzbDQlcmtIZQ7w4Lr3lKLTIXynw9vYX0ovmMJNVBX1P1D7omf7uD6vExLwg88ZdlSrMd/5FJsqmVPnOLr+MvUXkJNL6bzMPcSAbswqtLjK3HRvbJ73+6HuwAAAAA=');
