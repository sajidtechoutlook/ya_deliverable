<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
