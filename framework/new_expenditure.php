<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAACgAAAAaootoLHO5iYz91BULTT4GSaVNIPY3WkbbqjxeKLcYBLeCMcAkplP8zkAaWTYEaCclcpkNHhIpW//52cUIt/ERC4a1vyOdJ7d3uXY05mk8qY0fZ2/8ltcPR+fH9HSeaW0UX8K8/BkiUZD63DHF721p8bKQK1gjq9Ph6nJsOjuQlwY2llCYW2FHQp0pwmWou1pKtJxwjcvlVuOFAvt2IpbwDUAAACYAAAAOgVEM1X0W0EyWvgtJ91ZKa4cCqCVNZCELctp4zc2ZQ4LaphF4dR/mt/FT0fGLne11eQjlBbWF7mgotg7AHO8vP5mHM50+IFuyO6YiAYqPoIV0+sNgZdR5fbPCNrXupliaH0ikjaego++gloVSJhxeGbpDfkZpE6ksntG59s6dfrdWeKrj5GjcX9KsK4XW+2RoKNdtgFwWNw2AAAAoAAAAMgvPIxjFd953SaUPn6D7PyobwwPdMjxuyAWYVfnczbPvBjunlslofp25ythRsxhHZDfMoWMil/p1UgeUECom3EghAeh6osmare8oaW/euwCBZjWPPQ+URuz1YsF/cYMb+4J/Rq5Zyfmgb2qfs0ImTtXhYShsW5qZr+DQ/z04qkgykkUCfaXy57d3CH79dFFbtZDi5f3HQak7XEfsx0MCto3AAAAuAAAAI3f9KtQtpca+62y9lRDCiIQqmpiDwAjQAuQ4VETWD6s8ksRsvDaNivMF1lF1c6rRSo1tsJZsi7fpno1kwo3oZg2++Ka302Eao7qsCnFdcpi0PEBlDVk2ZjfeHfuf5uqXfXqBds3Cf3BWWw/d2SMBpVasY2gk8ZJuyw+06nXcVxdf9KTV+bn6ubefdN9PWxgAse75W2/pNlLdUruR1gBC74LFTTnKFRMdVzQq7ytrl8DZCcCVecQTW84AAAAsAAAABVFh7SAaPRolKd9r0pG3upkdB6Z1dxPk/Zci8Wl13XVDyxJciE9FotWQucrGM9Mq08v4g6SMQO7PrQwNye6sL+/jkoYwKTFZXJuIo3jhy9FsVOUorFJpT+8gSWXOyCyNTSWT90di8HPn+pjlp2BxMszHVsJY34MHC1gMQAmMe3tWL2sYBSmzUUPbZr2HNDn0qhXAyX8uS6IN5ibWEQfJEIyzKIIfHfLIoU+kZ6FiFk4AAAAAA==');
