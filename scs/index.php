<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
