<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('8FDDB8008D68350EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/rCFwuMVkhbNiCIGdLVD6ceGIyKJ6L85tFnQ0es2xJbv3ejQZhecXrFWQaznrGaZjs/5tCqjesfsyuTSr1oZzNk1R4eE3aS1s+X1OdSmwImoV9R1dtEJSOxswUAFEZ5dcK1HnNZYgebZn/ZsyC0gmOnqGuqFdLfToNBR6ZAVlJdjwLgBL2lVxCTQAAACwAAAAe/04+sHP7PbjfUMXtPb/T3VJS+G0pgy0HAVIwOn6dRjmcJKvvrexlIyik1PJK0Sj6YkwvO0FgGh64OtkGiaJwvPAty+wZLsJ/PxAcSHii+zmkU109o37OWiSzz2XuTHY/UOPsHQkqKB/rbjODmRN1NjG+zfF94ktbzJmFlyE62pIEiHL5BhzaYYzV8EdJnhYrPl+RcKleeFMWuyzm9SLxCSF1Q3nuG9x9euRtPLzFmY1AAAAsAAAANlnFmeVhXB4CmgDix1HWR1n0SgspbP1b45+TvDnZs8w3eDhWnuZybYagAeEJZvVoA3Kkv9uRrGyLVCeiaWJ9MkvNcvP74bYgoXgoQ822moMS23zbLlNsZRNq8L/tq+ABJdqTvmNeAAxtM9ZtqGDkDef4KTVYkKxLPFgY6fJGlswiu+6QR2eAtIQFe4z1cU/20nkhgy/Srw8u642BgRwwNVnkdSsPxT7z38JadIgMzwWNgAAALgAAADt2hjB6SG732bZcjPlT5ZPE3nzdGmAjOM3dv40zy8gTdHTgtVcFumo3oPXa2fkJPV375Mlr3qGTkcXvg0tW2FUxPi/lPaHln2hnq4R82MIojH3rqUTlEjKzvKzaT2thL5s/ZgjiCmQkUcAzJ0KDAO7IU5u0AeFj0xBrz9V2XkTe12ytHh30VMWa/xaLE+qPhcmCZJsoEecgsIOAVKkjO9FDSQpN62lBKf1YoZHQQ9jQoG0QjIN5VSjNwAAALAAAAAXSdFkiUA0bbhvqG4sPpPRzfPmkFdQff4PmALqFSw3rEqNpLi9y0dWY/pU2Kzv1FQtbUL7QhfLMBIcIeAhkMttPzpgQRe2sW3xt3DtIrHUMqCn69JTKn9EZMomJGc+AWT0g6vk0wd/N0Xwtorgoltlgzu5orYzSzyorUUx79gq2XHbQ8ELH+QgkZLupGNKzF7Yb+nisuetewAlh96LJtwHbxKS7CAi2KBNpsqP8Bh8qzgAAAC4AAAANvFL8ue4yB/Ld80VTi0OTiVgISCV7kBCpsx4NyrR1OItrJ9qkpZA6psfwLNn8IFEb2uURTLoxtSXHS1ElJ7OwAjtfxWGRW83PnFrWDCrEhQecDBpujdM6rDJ5B7hzfTuHS5UroNxCalTtPnyTF7w1gtGV9LRBsedoU8hd0PyM0sKrursDifPpCCw1+GKbkqS7jlN6RM+jmgKhBHECfbgge7AauFbj7QDdENEoql9LFYnDhG3AuHvgwAAAAA=');
