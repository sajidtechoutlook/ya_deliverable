<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
