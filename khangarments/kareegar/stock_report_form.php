<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
