<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
