<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('4AC18AC48D682BEAAAQAAAAWAAAABIgAAACABAAAAAAAAAD/B4f8v0iYp1y8p2ZragTnEsp4Kxx3X9g3xmttKOLstyWgswvOWEENn+2oZBJziOt9HBfOvv5x4GguUYWsSmzj+jel1xo+frE8vqfHfM8oNaj/oJzd9auPGTf3nkVNP8o1DVOSedQ3ptkS9fpZKerhgwPX8W4gMDpauEAorfknCIU1KUWWwjlg7zQAAABoAAAA01U5zhDI+28sjH8hHb7jj1EXQNDCfga//hMurPTfbRAe9Z9GwfECdnGKoQMRFrsuyw2bzaityZtrdniHWYwUCFnNY5I5QzAe8j4Xzh+15zvDdKvjPwSv+1JxNDH8lAfiscoDRwmAlyg1AAAAaAAAAAdDbSkVfa6RolZGuHoKQJjrWil3C+Hj2fRz8AzRKW4UZ2n+KRveWQcV8gaUPjJC27zaHzDNsJVUVyP/Dk+FRIT5U6TvgZw4Qg6H3G5HZmozLudanns9R0JQjnnoiGu8JO27rwvMUbGNNgAAAHAAAADrvqitu+s++uDTnmyn7qVuQg1bfSXOYScoaiOzYSZ20Mkr6DWXa0PiXJCu/23zUF7zNe4wosz0v2TaUPaXAR63N6CUa6VbGfT4cvFQWQ9cHIauwYIDPev5l823Bjja1MEJu/qONKoNmfbolfvfuLYANwAAAHgAAADSOiy1HIuua8WPnac34Ch/m2xhMZJ+ePCkFOPx3kS8ZvR0xCPn7jTTvhHZlDgLORxFjRYkbtrRnfSElZU7I8h+1EXb5Le7+OtQvWXdIuwA+thkuz2xrdzSFYHQOK9533/e31zABpjpa61HCsca3dq7RDWats5MHYQ4AAAAeAAAAPix5vdUc2xSQZsfZegOppxPYY0WnoxDyR88URnK9C1jns0HcvfK5a7fMaZOKUosYXzcnDnmAS36ubqWNuRSXM7SPqRY5XnYXQMCWYb6K3IsxnCaiKO6HCEVZshof29vBjFoG+6Du3XTugzLV9v4DNGGUNEumIcXTAAAAAA=');
