<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
