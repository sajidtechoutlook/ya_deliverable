<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAADQAAAAKW0bKubTc7Qr/FRaaJ+oJiE5FUODqwUzKFSt8MAzF208LgoDfSf180gTljUl5IfAFLCeQLaywgHbcVYFeEq6KayrJ+jIGNCq6rdThTjasxdLAKC/QhrxvsK/WD4Y9JQJJksvFBTzdUVHKRuAM67nvghntQ2zxuTeDwNHlywRIu7R/16u8kYOM2EhOSXWOOHRderwTOebzWKl1S/iBPDytCs4QHAcNvTuL7c8ryT9/BWf1P6txjQyC4jMDVo8myUDLCDO6T2hyObbuJjMb2XSUTUAAACwAAAAk9wZAU8PMlyE8XtZQGtIs8Ij1cdODW24cD0MBFE85pV7eaq6HV2pKtwtDEYz3IS1FeZnBkA/wtbfHB52kCnnsagHRG8AoV32z//9kjD80qH5SMFsEM/Kzdl0zTW65CSmaH3HfkSnnn3opUIsQoSP2kpyd/rMSlguU93Xpv8ya2I8fVXM3JDPzN0CnS3v0Jxnq3kIr4wLLEqFXRS9N9pPin/RSUrFfIM3SjZyDskEy1w2AAAAwAAAAJiMiKtLxqjv/k9ixkKswdCB8aBmgHvZibM9m6Qvpd/6AZfCvpER5P7u7X5wf4loZm6HPom1950Al7V1J/YvHnnDYdErVpGcmqB7eaQcD8Gmd0dstERZP+YXedqw3qSZMOqo+vFCWzPRuR0Q31LTcuVtk6MpwTmg5vp5ob0VjulPOO4+GnW1bkrTVzjtUqo6OXZuh6/wiCW7JNsgbnZIDjBKYBg56pIof+/HoAVGeEagT4fyng2nywJveClAihmC7jcAAAC4AAAAvFZEijzYD3WOFKSPVjV2Jyivw4J/h7aPiqoVW/XWfCcDqkyoEbH2bRi5v6Hggi6C6l1zaU08u7/ejjnK98VdvGsWkAws8osCNvxNy/WIEIXFPqCm7U/uZZvJkKW21J/8zPQPv9F8MCNrM9mEWQESrNLPfWCoeynvrTBgnKRpPhZZvotZhEN5zNJZWPCPGTnmOM2pZVl11NMd7TLKyEjbvTz9iDxce3ZNdQHH+Pd0cWiJ9+saYW+nzDgAAADAAAAA/5Xigkdmir8kk1+0JRycOX/0KCTblrj8oJnAeY7xptli4gnq8jv79hCvWoJal/86J5v1FEb4ulrO4PkymgPCF2jhsw2gX4B64wi3CXAoweAKvnBxLKcnvZ37BcfSgIvHoFEsYzF9SHbdNw9fwfwvzLg52PoJ9e/kW8nTJMIy75HFPa5qLMr0L+vF+ga9nTu6DIHPwrhC8kHYDH5LxflczkmaCYnpL7kv46MuQ/5moanO3o/MsdyWGcd2RvJY//FgAAAAAA==');
