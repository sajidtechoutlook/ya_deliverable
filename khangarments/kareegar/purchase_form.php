<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
