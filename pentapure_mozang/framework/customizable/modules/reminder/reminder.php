<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
