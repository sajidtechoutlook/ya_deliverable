<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
