<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
