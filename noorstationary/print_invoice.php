<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
