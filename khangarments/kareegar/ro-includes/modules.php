<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F27BD2BE8D6835F0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/EG+UxHOQyguRHcZ0QVZUnI+93/ew/bKlIB+fx73KhtLKdQQ26WgaErmLaUimMXav70UV1QyfiGgFfgvOflR8WahiuMfOz5cQB+lePt4qGmguhJaV+jXxc1vN3rckhmYAlGW4TZbMNXwZ9yB//oNI1XQHn8v8gtUvULkL3SUEWFRkUfH76b2FqTQAAABwAAAAugIn4ep//zPk/9pRk6v9p/LpHqTcyNQeQYpM6lTNDYq2uuOjWXNxfjunsJLlp4i07do8PnvcjQUqjOa5h4FUWbIKLEROnNBPqfimVlbUeEUcgnyuyM3DaJJDYYq11ON0e+RKqEdKLmryyL8L9IMuKzUAAABoAAAAIlTFylfZruyIEgXCoLC1QY646T4Rzb+7HnRG+Z3mOuu2Hw3HNFYvFKqrBKnTe4JwoafA2fvT9lm9TvDz6Y6MPMsfh5oKOZO5yRBiGZzzfM/Ok6mR/vUn7NwA5rVW+mRum7SBrF/TMy82AAAAcAAAAFbg+sBFpjynJm/aDPZvbB16v5RNnXo4ZqZ8kEV7xmmJr19v5vAV4919j2MHolrSXaZLSzsFpugdf+8aO4+Sbz8BUNNFoKSt1Z39GMJS7l/X7vXrbDn4WGxBm0iBHF5kMNMHpOXnw++Q0i/vzuF5Q/43AAAAeAAAAGSktsZHppz82oNePntYMlqHmt9RGzu7Hbq0T4nwkXq/+kq0zwclkIbNBzQ5GclFa90Uv2PoebRm+WDmz+77Abs/EnFrciYY/E1htmeT4pmwyd3uSosEho+zrKv3XbJkmgdV9JhDVMsxZUeWpwCNY98Dw1UW4EStvjgAAAB4AAAAUdpxeg25n/1I4Lv6HJflt208yPX+5v/pEDFZmZ01wDCSl1z4qLRerhLmqjCgiig8CcSpUoMuYaITJqsReZ6D5oipk0kpqBFufWhjSostpvH9eEWmqzw5G6b5d8YVxUSqrx0sjh67EB3fKwKJkQDrVqfrlTc3I6vDAAAAAA==');
