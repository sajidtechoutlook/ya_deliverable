<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
