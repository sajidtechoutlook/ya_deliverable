<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
