<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
