<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
