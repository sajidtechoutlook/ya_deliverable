<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
