<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('375C9A008D682466AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Cz3y5ToufmZoErJK4dJysJQFtf/dS1ylK9pGueh42J4I47VM8sJcpcMaz+DHD93OrpNy2tt008+qMZynI62jvuzwcbXr/ohUHecPv4G6hducrVYfrrY7CsaSMex8kknqYPLLITZdKJIifmOCAS3wsLWcr5y9tHe1hFetWMXVRLkYk9vEXfE8ezQAAAC4AAAA6VYJFs+2AK0G+jmlFpZW4OBm15sClY0pD3gpTVOYAaGuvY2lO8L2QUHWDWiVFZo5PZBVM03ToDg8rXsjSIDRmlG5W6JGz6TOayoyFMtGBRniDVRAB+y/Bq0XdcT90r0jSK2STN4bTnof/WLs0rsZSDWFiYyWoxWqyd047ISd6t9ci3B8kswqg05p/jF04tQK0fNuq6qT0s83e79Lleisk2hWRxPfhII3wxraMBZbIFVdJYUvtSMlvDUAAACoAAAA0ass4eZJf5r3JqTdEieh1ccKOm4nVi+tEuBAv9QxJXW4JMAnb/vX3MYsuigm2l/JbmXF9HwNZv6soGOi5SxuoiyvFp+/h46fXOsCKtAUYz88U9zwHbybY+lx3Mzp3E8M5Yjd2QhQSvGk1Dbb8M+K60UzANK/7x8Img6uBEm3u6WKXnmNi9SB7Vq8rHizqCD3TKb2P1Pp/Hya54d3c8a3e6CNg1t4wRlqNgAAALAAAAAk9wjj5jVXvXfnM/GxpQWo0THb3FcTeXK4qE0Fo2SYdgIox5Xqq7vXgrFXKF0D8MN8+Kvr11rVvBuMzC3XegoBR0EKVqTBVJi/1ZPiITtYQB//NDAcW5S5bsp+vTv7p76GMsOKOcQLB4rugzAZRcbeGRLHn1nRHKG2jtOW8dBfyNCoK+SRQbxPmJHY56boNJVx4FaG1YEvkfSEyyy4C1mtAQsT3IIFXAqmJga/dVYupDcAAAC4AAAAdVdwT1I6au+H9dq2blBCrwRw6b02Tg2WqTZIN+v5Ctmk6H2Z+u/Og3YwxCOmN0nQk/cdVGSn3gTWFCCuguUsz7PYodrXO3LD2PngFaaiQoEZa1p1FoDrEeggRgGqxJiB+zQmX4bqtoA8fXt61ZnH52QKhwyXcRuy7dxakHGL+khCVVhq41DKb1dEbv/bkE7bNQzdY2lL/SfKpjyBV0g3NIVhrPHM4P6l4SHOGQkGxGfNAGuUq/aNJjgAAADAAAAATEczn2IO0eksbtE5VMCkrSxGWO0ZkmG9svGZQYW3KV/ERgloj41GgyPnznbvSKEoe/Z99CvO410Z/MBvinB4v8JGC/F55xqylisXKF0w84AgKcclcHpwJ4NMvVaUb7t1veUhflhnu1rq1gHcEi5USnlmG2HEIR9AS1sAdQ0HDgLomqkpWYd8ddIy6BCF42R0j7pg6qI0lp+RjO7cpBYgkR+kuOXoQuruu7NmckJmYh2dOJr+3tu/y1b3TgS1A7JYAAAAAA==');
