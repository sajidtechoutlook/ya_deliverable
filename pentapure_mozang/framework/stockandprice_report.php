<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
