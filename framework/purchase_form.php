<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
