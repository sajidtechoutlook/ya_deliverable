<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAACQAAAAJjplSrSDT6V88bkQY15+OurIOkZv2vXV1BzhpBF6HQYytaRlijkDIdkN3tEQOM0bD8hdPUBzkqIsxHvnzqTcorE9wGxJnHqJ2oL8Ip/dyNsUe+/BEEbiaEN8pNh+NKzYvsy7mGkqOb+lG1VBhrnQMuhIyXY7NjJv0Wqr7es/vX4rowpfXLAGb/I1v2Opo+BbNQAAAIgAAADEt+REpSM78y0Ysp+jwt6N0BKTRmHyp4re2LDLxaZ4CJkd9cKMkEC5IIYHb1b0eo9PT3lOIF3AmDzk8qgyvTR96jxgQ/gFMCs88nhkDJhgwMr17l1vWOR/W4vk+iA3Pb/2uG99dtEik8DcVmgVMKKY2nmTx1S2DRjptm5WPkEfEvdC8uUiiHY3NgAAAJAAAABWojAac4JXHtvsmrTljFW524Gxg2b+AoYHA7ehSA+vz9XracymPBNhO7nhxwNZXz/V4qf0p+gCmwQ1jLIVT+EVn4F9Qr0oivvLOzRj76F+tdkdLhD3moPSVl+ncz1xQXtOm238BgoJpZ94z0/+iPBDXB59F83Lt+xbA3mTJDmFy7vKjLrsaIbuPwO12uyTl4c3AAAAmAAAABWuqc4fsnpVXVy6C0Qmagi4gec4AeoAlmQgmR7u1fej13yWZhCmDU07L29KL7rFWt9gGNC9wradNS1UXUuLRK1VKfIgqRAOsoS6sy+LE3DDkq6Eb+NSJRxB2k2Gg8znWKMiXwDi1n2g6TaBnUEBtWs0ebe5ES1mzNIiBBTr3VdO3ir2Yw9iMJOWFK9Da97q0VgxbvI32or/OAAAAKAAAAA39O2Gp2/LlxYFPTNiNIMBhBJd+Tm/339N5r3w1eHoAY10Sfm4TGdNqNAdqqlAduw/1aB6WvrLjOA6kc/vnL3TCNC0rO+rwWAkYcipn3QLjg1HQaleBDn14M2c/1eCQE7qd4DIzcQ61GswgX/lB9kLK8tXQd7W3j8h2RFifk4clNUn41zDiLUdJ647q069tRGow32KvIj8YHlKzHsfImvnAAAAAA==');
