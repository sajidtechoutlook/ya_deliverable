<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
