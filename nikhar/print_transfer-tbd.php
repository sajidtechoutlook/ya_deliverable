<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
