<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('5EA2898B8D682E3AAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cYmsdGofezeEH40VZq26ouZJTyYxlRu00o03AZJ/PuqchkUvydIU95CYbOn2M9aH5VWT1exu70e/NnzEUu1GMvAPlcciIhR5fl+CMbfRv7u4dGpKpveawiNQD0TQ6IkPeqJWXb6EC+9uI0XcxvXBJkMS7AmefeulLG2TTRHUDCpsKYDmPflnOTQAAABoAgAAQdJUMLgBQrpthwYDb6DZz4fKLT5lWcPoRsQ7qEmS0mO0HdrnoRSMJHc3mUq1T67g8WXy9BQI1Ilm9ofm3bIeBzliNWV2monM7VHEvGryDnClDX5kUmLkl/ICatwesSgZZDHJQnGXmqtdayNNz3KbTujwX/rY4HMiKkILbgjlLTLXNzwhnH12SAnbbtksg9GGjM5o6cbF1Pi9lKKNPmtq4OLX6LR8OPhD63sJ7pcLm0XLtZipVaTrByD68NGR0qvQY6vZ9bh46xBmST/lBdPXudu/aCsFKf8spp8QPRNazuohirACzyBYVkS9h1NahvFXgozlcB0tmJ1gOZD7IajFNzTKVvcJEha3uut5KWYeZqSqbTiDj1s5qZdHxlFpSbKY8+hCd1V/hTs8Jf3yV+tpgQ7S1Zf1kXNoLbiGIjMB/54dvW0VBxoOEUyY7bIT5NBvKR2lLzpQJR7v9HeT3ZLoVcnxum79bsFhUmkbFGVgN1PZ+k9t9jq0Lg7fieJliCBJLnQksEgUGmjjDYJ+0yOy85W0J8WC3Cg2MEr3WVoeB2gvMfNISegbccI4G7bTZIZW5K7/4Td9vBH3YFCqVxLDFfmDbhh14ypmt/tdejRgeptiUxA4+11It/Rs8nvc9J5GhV2mdY6pG91klrPILPDEXFU/79tTVf98LcizwlCzy3t+ZOP1KJw89bF704H3aqazHWZOdGdA7+/92qiinYd/itJ8wvUPvvP8bCmVwEdsDFsJB8IeyJI7QxNlfnNV46C/Ld+jYTzAgYotPd973JKt54qx4bgXjgyJfM7wkfA1CojekaSw9Ty2UjUAAABgAgAAEH2UO56ygBnH88l/jZG5Zz8dFIdHan5VqrxGRKP+LYN0vvxxeZDKn5uKAweVttu1RaWkLe0lp/oUSbAYNmQL+cND2eAZJa9YHyKDaRZ8802Bj9MS952r9xmuwbIkQWzUScmh808YIS0N4AMhV6qHsxkpWAoYpUow/3N1RZRIiPnIZXuxr39jIZf5RdKeikhyybnjzJ1vO+IdleUhznmDnebDrx89NPb8phBdz2Ap4mPkip9VeokMcpZLnrycWtT29Qn32IR7jLAlRgvnTTTDLlGCNnVKkPsl5Q3PvJKOpf8Avz7pU6PCgaFS97mOf6Q2PICOIGfp6S8S3oRx+6n6ObhKmcn32qwYdLCN14YaKisLmwUXFLf0EDrUDWZ9BGLJD4IAwSLkp2DUieDIxgya38+8qLMCMpZj/AAueEjGkTEHzP8yADMvKmmse8enMzNmANE9BYEqnc71z3iaS6ovUkfZDigaKBYoshJaTXLV6ib5yLUl8WUkLXMMsFpVltFHpHR0DQjK11pVctserb55eJVOYCer3pSaDwP+0qw7tIHwbGP8GKnYU/ZKjhrXS1K+w56Dtq3MsG2TXTJUwOgwAMUNnvPt/H4ez8G2eWUtSk5eplNY27RTzD39duxkDdzQOrpVaU2numB8Gus4MibLawEQg/iNJLNJSLuDb9ehAWFEQC/KnV18VIEcWuOzwK208UX+0tAgON3dpV26YOecNZ9uyKLTEhyPmE8XWR3QtF7pVd3pCwI+zwCeRrxJlrG1EKisN54hrcGdeYEc+CKAqMppjXhJ9iz6uYqS1WAJqD82AAAAWAIAALEcQ02wSIpG+x4PWZSyqpYiN+We/nmDiICmEtS0K9aBu4EkIXGDwkbwxQWw1G3o2MNI+PBtBpawoDKFksm599gqBgX+RH2T1stYR+snZShQvr/KQVyXBWGP7OU575m6pns20xE8vRhB6cYW93I9tDjHouXRCanxbCUtyCP05cGfpVp5HfcoeYiJZ9xw+fiO5ncjbp/DVNwBnHYPiaREtX+D+K6/FWOI9K40vv7UvuddoeKj+v0TNAtztru8O/UfRm5BQ2sDKOBv9gZAufpPSMJxSC6lHwJADMipHjqR2fEWhF7i9LZyKGp7p5hsi4POa1b8qUN8BRnuBK7zZtwUdCdMQoXZ8zJRLz5WWuIYqBPXsEsINZpMmTMSBHzJZ3JVYpP9j7xF2oCqKA3Bs6SBs9W/C5qEt2o8CBypR36pxGdlHQ6w9YfzSPw7iO6moua6mHSO10QKy2KfRSCMxXqjLfBWXLVWkWqYyzJDi+px+aADofxuZqT8XYyNhbu7lR/xVZNIFSr5Nc4W1csDIv5KdeqFOFTPOzCvrxpsetHKZZZUJGBAlFaycj+Gr7TRFi7plowEcPprueQyjivPjA6a0warfFexDmzNQjdPRVk9IyBa3rQhhQSgLbzGWK6yuD49xjzMEWMp5405kipw0YQhvedOnCxaJhSATujDRUrjnbUvawLflGu9hcuwK4wVHHEvErYx1GUsOa7qwLMatTSWUrKmrNyvVGUly+HCq0g6CL8os8F7WgDpapO7OapIPV7o7geZJCdqZYJ1LpFGvoDdJbcxPYgUcOda/TcAAABgAgAAsNIEOl6cIvDV/Wex+873qOAIwLzeCn5YVzz+5dlMxFYGXeuN9jECScCoB+u5T3FimtwXgZ238P9/Bc/jusxkphyom0gtWDEpUkKTX5zozStMNMUR5GCv1CAyYnCczCrQHVN1NwHiimHmQpBBQw9N9jvy0Msg1TBrutv8L5yV/ijEjow8az2nRsspmc20pjFbgeee/dEiIaXKIJB7FKUFFATREUzf78UxAnnAz6bOn5CGt+2morxuS3hmwGKKgUuHjoCM7dywLIDSMdE7lb94OUOT8A7cYtmTBwByYmQeMSX0ekqdCSPzZQAvKaYRb2CwO/EqhQxQDf+qnoqN31LWBM75S0Mr0blyfl2BPnDTrIwRF07SIrvGwYuUTy0dMIHsZtmDES/1XXE6p94thp6RNxwKrPbCcUwhphImM7cBRedRlCmJHAJ3/KMVD5dVwgswvmId7KttSSQk5bybD3JzdPpFvNp3Z36z3000333Q6fHgKsj1L3KE8dIIaa98kNqi3cH/iBAR92O+MVhlLc3PANFcgP1sP1J4Hoeh7pNUmusVzSI+28HyVNLjUsPjN0MOSSlAEqmOjF7TNSISTfz74Rx/u2pf7qbwQ2YG76xfI9W27QV6Xo50qteNqumLmBpI7+heQ2xvTIzUwgr8OWYTlyUVBvzBCdx0kcqTx/MIFdV6cDTSqntd5TFJlqtqi81qKzSIxfOoyE/2Qxz6ys70c9GVOmm64DZkRfguTkGxOAo5L9bTxV+NBXvlmyrBtfrPNqdgEtA1w4AmU1pGPKEENGOV2vSv1S4u3iR9RZ243Mc4AAAAYAIAAObLn3eZElPxQKiTzCFSSTG17P5y4QXLWBE73MLivjjQstPpEMix7ltt+zT+bfbWFfjZNYCXSZVvTi/blIOhlpcytQ1u0Y+CwKX6G5Jve6DIuzPF6R4FWqqYFIUl6Ms+bZzZhVbwSKlbMQDtuUiXhJq63/ZMTZn5vG6XxVWDeS6n78BDa/L51P3JMngbUIASHiBr0G1mng9d6LMA7IAdUl6dfC7fXQAevv6Y4BACJytGif6FnYJb6VWPIuVz0TUOLeke4dmTWi48EneYClzYmOSjlGYbnu84bvAJlIdG9sMOUTny7mjy7/LLPzSSlFIObhqAMB31VwDRDwK6f/BuKlSM8qWlA7B0sgN5LcxLEjDjFEBk1F3uPeBVuG8U8VDwwhFz8ffwZ3prp2zePXMXJ8Z/0jL/9VydFJ9WAcjYw5sfqzQZuevdM2Q1TzmuRuC+PFfHCRxTFkgU463K0wtlmQg8jzvR/Ou5ZdE/xhBG2DLFy0HsXSflRp88/uJ9qzrJXGF39pBkl+I2kgKHKsOqGGP9MMrEGXhOwueeGmRgCsxOFuGwWCuMnlWjqch5+oCNNPIbo3fmLyHx2DRL6rol3bA5bhfuCFtt/weC/orFDfNXQxC/rkAimiRSyasNc6wWpursn8MsPpLNWr7ZK3mix+7ivbbvtllH/DSPRix6pWe7D7EE/+td5n3xO3D+r1khekXif+ZfWEoUTNlR2fLLBsk/1Sz33XkMOiDw9wgCHDTooKiisogFBdr9rdyYqrrZdPWcsQK2f+r7nTXr270EYz247BM4AdjSiKdPe30piOOhAAAAAA==');
