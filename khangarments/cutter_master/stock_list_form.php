<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
