<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAADQAAAAprFfl0cN3XEL9l/LvVzVH7Kj3BvwsFApvgU15g/Bg+XeKTv2jbaZIuVlTYaxjLD9Rv4Au3mWqxVdKL/BVZIDnVNsMtbk4YUncSQ+JR7R0j/GO+hkxNeu1Cw4GiMzLbie4fcXMqB0Y3a0Jls51Mrk41VIfcfXX7grBbo+59uUZeRSnr+T4/YvVEf8HRzprSHaiFXOBKBuIb/8fCXGaAMXwXgHO4fN6xc03WfAr6phyndv6H7Xx1b1K9iFN9EutJIMgaBjvzUNxlgTKpHKf2au8zUAAAC4AAAAMLJviB53K/vcu+IVQC9nxjBSa7Kx65QKdwUNYbDyj/PcwBC+gz3WwPhm0vQWkluHdClpHLzxqH++bCu1VsTTxRfcJ0DgV6zfvp41ESCU+BtTJv7LMEDxg2qGfeHLkTgg2txp2EsuHII+k+78sa/0WI26XLqGA6hRO8m2oOTkzTUrYXWfa9tZnppvQ58iT6S33E7e/sopCwhe7SsauuPgTyFoLM6RtqxhvGnzXlTyhHRbe+W9DaLuwzYAAADAAAAAZ51uaLhvV7uzgGF/4IAYrbexqc4luuT5jNrPr+qpBw6YnfHjCNYtnjhJzfTiML/fbdoWGml37yXEQsHjU9D8H7CbvdY/pHaTDEowfh32us0jR8/moEIgqMUQhpKQNQliKeFfIIYe6JFQyPGAXo334QwrHQ3lAlgXB2W1tVymALAPWPG9/JjPnCFbMuD8815Mmyc3qNpRlnwrsUakVsPo/4nQrXmuSoKu/TCvj7JZsrqgK2XVPr421QxBp2Mgn0vpNwAAANAAAABiAkO2B4kJHo16L8FpPT9Qf035kJg5xKRO9P6Kaqqkq3xud2QCWIhanMO83U5wsIrmrcHeWt7yjEfYSxLhwvSb3DYDZM0YxLiSz/SFopyb7Jbz6vrHCzLV6/lVWMmrcJeH80sYCzprNLkNJFNlFWIop+xF3OKx40U/R1j40djtvLLwkTR04bCXoClXM8Bl065EgpC8f4P0YbWkzEZCI0XHmYqmdYEik+6v130HWCMqetpVLx9LhD0DhLKmSUpv6D4K2UQ5tuViQH+45Sb5YtU6OAAAANAAAAA5p06CeC5jtq9ftgp2qKMt+FscjyDlNFpa/d0KDbYuQJd4i8BMt69NR4HVovoluxZz6aw+ev1TwhbWpvEeA2q6IOB5wTsvldHgVzCZMBKyxGVsX9htwRUir+jBF6D52DVi058dk9WN/EhXWrgOfaczOF4b4WEfznX9Dppp9dYMn2BSg6F2QKmSTcNc3P4pZt+U6pEckTfebdZKRu4yaoXNcHhItNZN1DcIj4fi6WyEwiIZuxvd2zg9bM7P4b0ijkUOVNBgpFXG+pbLizJ2syX+AAAAAA==');
