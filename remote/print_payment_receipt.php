<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
