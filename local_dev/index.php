<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
