<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
