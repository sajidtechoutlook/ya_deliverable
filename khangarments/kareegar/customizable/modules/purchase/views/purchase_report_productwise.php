<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
