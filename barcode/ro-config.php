<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('E8D0619B8D6837DEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/mGp9GTjumrOjb6/S8G8MU5PdMaV/DvuRDIo6X3F6Ogy+UQMYMXcytMtQhCTCB1gcl6QwF2zX8XFGTXyCXY4JOlbS5bSAwrHYw+WhiTWmcNZ9QzPi1/aOp++xXaOrRQSjB+usGwdtT83TIZZZ9h5K0TQL9fh9DSi4Qet0+m2znpG/873hB/TmjjQAAACwAAAAmAwC+DWNhBDvmIeFk1597FWJwd1EbMzNnUr30YNNTmULyyRT+9QNOTxmwkJEke5fBjwAQUJa6qR5L2sW4ENxOKPnRNef5CfwsWghKEypcmPy9tEduNwIfwrCrLP8z31yVzaTonbXrPmltLT6YQka/IaarhtsrkS97FjsCWDPlEhnSG2D9NKRUNtscLuvpGkLgF5hoA5yyrKY7mgwiNS6B2mE2LiJBebik2OAUvIIioM1AAAAuAAAADvJqDx46Jwzu+WA915rf5GzBchCzP/5vgItomzWoB7d+/9Uljw7MW52sBFaHugq+LY12DjdHRrhAoniT4zYQD+hhSDWxfYpwz1gecHm530ppp8KnPvrStmytJtNlzif5W/8nwLDXqeXkzWj/g3iSTHeSfSbRhX/50BHRZkaL3I9DrfDSfQXLk0hNkcDjbK4lSS46mO0DBpQc01TMokzQiEw94X2ULBgVTx58ulGt1cj8daIZXqaCF42AAAAwAAAAKJy+/duAHACldHvbKa097vU8mkLrJiPrsalnDEQqHmT/yFbJvyJglzTNwDQJtMICysWADGeFYAq17KHwp+Eqrl37251BNDCFcQXhe31496PFOj5LSJBC4G6YixWQ+RSr5kRz7Kb20e6UXfsq7GUibYe/RXeaFJIpzpKM6QWz8gmVE8mpmD5KG5PI0rf2Hxmy8eKDhtE4GBsGWREniL3IZp0g/AslTgxeAGg/nEQPUmr+z4MicuouxsbscrrjzfVYzcAAAC4AAAAXKd+Pq7+kvKzdFq0DtjoJYn9MMKnRjpJvp/hcLOb7rgf2HfQIV+ZleDGskqKrtsv0g6aqxJJZSOjt6BSwxqc3sc2h0rI9BGvm33IrnSlP/AX8oqA4o1518Lw6/dT8c0L+Nqyv8cVPU67COE2LXS0sdqUoTmUk7hBVuypMMxc8vI/FBf85TfCp3LDZa0zC+GN3ErcwJ1jtxymThJE829VFAW+JnSOfBum7bdvZLZFIA0Js6fcbrVPoTgAAAC4AAAANJGB9gzHbsvxOUcfoddGpoVpsGJIT8crYILVt2lSygRG4lmsJcSqAGcDGzsH3rTB4wGaNoCSR4cjDKJIh4K+RAoGs5FPSws7eYOWnSUB+vVCjGypXjzoJROopWmb5t38iHptCG5xoyPCFrou443fbglkweaexvfUjRufkDxcYFfGvxkojR0zaDVjXu12+0AosaxvBcG85nVEMkovtKyx1sYXZy7N65rvRDF3OWjPDI3K31nPhS2RKAAAAAA=');
