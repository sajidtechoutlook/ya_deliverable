<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
