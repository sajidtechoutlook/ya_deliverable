<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
