<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
