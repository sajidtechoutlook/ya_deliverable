<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
