<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
