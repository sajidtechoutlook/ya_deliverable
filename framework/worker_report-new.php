<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
