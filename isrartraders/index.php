<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAAAAAQAAMGMLXo602NRasmY2t4I7HEwmN5/uQUx8TyuATa4rqnE4e2MfGseOTS9KDoseXyPw6Zv586FU9pGMH2EwU/pIqbLrees9e/KAuTFlf4vUnG11aJcHyz9x7Huc5eWEQVBXoI8s5pIz5KDGddqT2DGeMMQwZnjkovHRmYT28C4FgP+SIPFOyiZyPaKOboboe+36oV3gFgwSk2lxOBStZeZvAhTiRwynDEZwDJztUoe9a4FZ1wYzRSrGyvIKF3003fv/rJ6Hvg/LiwE5OAHw9tPV1IB/6z9n7UiW6aqwyVApN03pYvMgKRvoCkThWwR6X3Lwpu79bzKVjMmCUHlDCVr2STUAAADQAAAA8xxqmwanblvHlLnr8K61UFGRGv91gb4ZUHOrUttpkex8JxFITFppICm8NkRnxMSnzPBFy8AtKi75llKOlmIWhOmTzd3AaqD5WSLToeVuVmcTUBN2/FeBUE9VrBBDmuyNasLPuKHotcQ7sIrBrRVj3N8yOctWIVO6hYtIeL3NO2lxvsZGn5O7mfPDwioXEABDVuOFSFvmAt40pkEohaal7wfUnkuT+hAD3szlxCGz2pxpXIF+JXADmEUG+gi9M/6sorZf65lqtvSg/4aoeFfnnzYAAADYAAAAih01vNpTxw0iCTzuCJBBOmJhLPE+8ASP70H4k4OPILyQcwfAh1EYD5WKDrJd/oH+uiDPELbOsR0V5Mgrpz9h6f7GkzXvzg9K6PF78t/Ug95+SAhQPp+WtYfUyw+M8HdcuZ+g6t4iEYxiELnFrOE4eciJTyWWUHNifKyy+qcLvjPK3Ai9DQmKsu7vWpZQA+e26eT6wVMCfDEg/Koc3mxXzIzmEpgvtRDsEvsuuvaYjr3FikWgjyboYI4n8GANRN6vKX463qKhhyjJkBW5i4e2TFTy7BJ/kaoqNwAAAOAAAAC0qDc1lFt4T14/I/JmdEZsqr8jTEW2KpBH4MPXEBq4x9etImr8prg94A0q37nJO+zGwrjpvWKUAT1F9BaGet6SX8w0yFLmyeg76AjSOGJMqPBsHgREyB/HC006vNJOlzPZFIfmIxvaUOmga4E21cwNAL2uXe5Ql+ZAkK5A6owylnpMec/YDzQJ4RompOxYoYBphJIGAHDFATHqdRrTLOQce8SIFRuCXN6PgHHbfeZ5i89DCkwQjN/ObVdc8rlRZl8qrZHv/lO/m1amW9pesg+6nlAANkOrGDXO3oKlt/LF5TgAAADgAAAA58tDpWuA6zI5gTKZHCzrvANjBRQRovbUbLw/kcBudMsEpXpbqOCRLFZ99slungJxzIR82R8PU0cLRqz7HgXjYLxFavywxc43gCNQ3kEjmsYszRplGseKbknVPWtF4CKl2UkCrnXizcfoSLTX4gm+TTsn3+ZxeVTgn5ipzQbbL4JyxAZCgjpzh9vMcgwZ9rxo8v8hiAh6iZ5G6BYFvgeaH1zkhWB1eYLQk4VkeDO+Tkf+hazLcHjQBLyGPe7eTNTrnSquZsfeJsA04qJMNtCBRSefTQcwJhjb60c9vkMw+HEAAAAA');
