<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
