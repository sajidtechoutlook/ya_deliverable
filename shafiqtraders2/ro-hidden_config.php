<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
