<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
