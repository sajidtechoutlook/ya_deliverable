<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
