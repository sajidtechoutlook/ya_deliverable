<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
