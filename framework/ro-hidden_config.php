<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
