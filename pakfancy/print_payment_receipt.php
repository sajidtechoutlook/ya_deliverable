<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
