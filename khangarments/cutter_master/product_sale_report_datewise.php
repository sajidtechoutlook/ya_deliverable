<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
