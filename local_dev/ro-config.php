<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('535F6AAC8D682500AAQAAAAWAAAABIgAAACABAAAAAAAAAD/0UChcfpl5GKF2nfYpi7e6CNWYg4gYN7yfTRldQSiJ/o8uaGRBjSowixuMgKF3cP3S59V78WDHrqHxVQKJ6HIntd9m1yosqSPXC7CBI+Gj+9OOktKPzN1BgKqKZh10eqU70defIjf2QRagIUSqT8bEofi5/1gdwvSSf9LT2Mvbrnc59DkTD4UUjQAAACoAAAAVuayIPBx94/PECXOwmM7+5fpzDxyc58Zi1Cr/mIke6YUv75qPXtTT14lyCL0Um1tabwkwz7Wy/9OraWSn4N4lOVoFdWNC3yNts68cZwaW1BrKfERTHaNjpl0WzS6GuZ6z9kytXHzr4bQu3g1HnzvLEIX5xBmDmMn4x4MIegTaM3pjoagjRY/5OMmB1h+rYlNABfbVLR00jysGEUpk7MRLbefFw6F0S61NQAAALAAAAD4Yequ/fXMaDkDvePqYcjcvDIAZyyU5yrkAGE4DECjbuO58keKnu3VbBMk5dbmTGSEkLCBZ1PX8mIo7oL6aEBZvHH8Cwoty6qk9yalOcMUGik+jJxIeJOuttWkmpYAmEfC0E+9Wm2VMnQvVVK8SquZYKzA0m8hTLhA60BVEUarrpdNJr/vMLXn6v4kSohyVJeGm/PBdZ3ZuMd2ijaqL20Ud6tWFYy7Kgugo1T9LN25uDYAAACwAAAA3H2vOFkLYTmpvUaHIkftWDsPpVQX0eY2ArjOJhWbgVNHHRTCoQkCmX4WaLHMTHk0zEqUmHQQiEOUAsyI35I7BmbjbgQkiAI4wPutIXRplZENSPmXsPlCloaUEY98POzGQ4Il6zYIQDtdrR+ywGEhcBD5HXARorrDWa2nvFWhwhLbqFogoDn6fNgQULRt8z7G57xcQKmHpwoGYhHQq3/wuPCHxMpYOso1MHK/+E6mGTM3AAAAsAAAAPTT3cnMnhCtFdsVCpq+o2pHDvDMSpH1cEA8PhK6425ff+nnmBF51vx2xC08ZT/5nEZnPE2lhDVuhJAtyJXrYu5mu+3E5tRTITJYNo0BDtG38a7dk7AdcXuWDBsDQSlpRFzPDfVVjbjQdnQf4Ul9ns2x/L8czd0hOLPadcuTJ/Zw0t9CKrPSC8XQeU7ljgCi581V0KXcbyAjp+/SofdBXFKUceYXPHWZi5IoeZRhlynZOAAAALAAAACgOtqI1QdDBdWUaqht8iA3cDIUrNxf+tc5Ev76yoauraSPOEM4Vcpl0Q7Vrm7+PcSd6UmQ06TLvI0G7CHwKK1BMXHOzSkd1TNCIkcQYYWxe5ag0IR15SfFLDsep5nHM7w3A83GwVYaT2yY3CfzvG8bJQaO7m0sMNdBgVkjz/YPG5T9q+yrK0crCC/IwBl5SMohsoHkDFc3QE1gkE4Gf/adYNrb+6bWGabcfTs8hHTYMAAAAAA=');
