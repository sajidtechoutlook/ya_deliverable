<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
