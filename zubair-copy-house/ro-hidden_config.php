<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
