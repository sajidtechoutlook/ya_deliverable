<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
