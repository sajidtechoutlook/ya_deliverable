<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
