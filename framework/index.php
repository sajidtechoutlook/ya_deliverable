<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('02A1FE548D6820B2AAQAAAAWAAAABIgAAACABAAAAAAAAAD/pswhTBnWnkanP9Vp9CKraep1UhCUHsrlHeXxuq7upvxitJ9AAXvuxtyPrzHFl8E9icJBrVfsMtJdk269ECDfT1Lyrrl4nmZ333D5C6JXW2yc+/XoOwQ5Ap7wZHCd/EQYm8nVNyW/D5hcSOQvc1V1daif6Mw3vcLj+uf7FMQM17CHZ6ectyBZnjQAAACIAAAABCg5Gmpde8r8UK1Q84OvI0APgR5tqofQ8F3SsEqW2Xi3Nq0VpU3TjtFIYDUE9bg7Lfox8Lk89QKczTa1jbcW/VtJH1oEc1Hab9sGRos5XAk0BMoQo4aLGowJRtD0m3iHNW3lnLtmwRdmWMscChBy+6NPBsBcNCjs+WfC4O+L+fKDHkTyY0vUeDUAAAB4AAAA/R6Pgq9Z2wq6GLHMwvV7DOZXPkoVs9idwKrp9BfB9eqTsY2eR83hk9Wf+xizrV2x7AS20aWKLqPPx0NyRvUtENVyWhogWAKNeovy+vqKO+L2dY5DQaBlKUbZisH26kb4B4jtKwWtQK3zVXXH7VMajzZqGxkIL1qZNgAAAJAAAACPQXzPwKNNZvGkV2nQYy/4RPjvfbxNmp6cZ/Mx9gobkbr6r6VO0GPqTuQWcmovrlz8U7BhU4IP3taGxBpLGTfX7FFHiyt49FYj18aN0yWL641kZEsYXHoeWIHyYnZAB+vexG3x0xZbnqCWpkKPFfXnTkMojkP8p2Tfeqph74ehV/Xkz93zCAajUSjHfbTVC4I3AAAAmAAAAFvqs4o9NxwsA2rguFUjwYA8N/S9NjOhjO7h3hsV/nu9gm8t/uqbc6GTA9gfq+QD4YrPWOm917arm4c7mdmwglM0Uish3xEwwDSuuwAFza6Cr0XFCe0NCcoZHf/aIDpHBv5Pksww5O4rO3dfgxTzzsQ3Y6OyoiDkmj7///lWh0hdozrSJhSUgasMW8jPfufPMV+uSBvujr1kOAAAAJgAAABLOVf1IP3tdc6LrQ2aosuCDEynAQLxoA2pRFAPLeHWdNJX/YC+2mSTU5TgHb0ivvCLl624lq1pKaUZBksxnBDx71Nxmadx37fmRSJImgr3Oj5fu21PC6EZljyf8TjHEd6oiqU6pAPtr7jS5K0sxA/DAUBt17qr1iVYigzM+Tvu0ypwPEJiIeAQZvuu2LfoqiilHPyzj5JweAAAAAA=');
