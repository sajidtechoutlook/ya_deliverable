<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
