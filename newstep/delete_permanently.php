<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
