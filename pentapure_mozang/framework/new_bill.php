<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
