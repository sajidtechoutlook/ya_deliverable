<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
