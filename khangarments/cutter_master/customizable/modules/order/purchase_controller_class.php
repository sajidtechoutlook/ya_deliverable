<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
