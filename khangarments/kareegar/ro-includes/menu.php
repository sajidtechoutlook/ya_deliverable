<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F27BD2BE8D6835F0AAQAAAAWAAAABIgAAACABAAAAAAAAAD/EG+UxHOQyguRHcZ0QVZUnI+93/ew/bKlIB+fx73KhtLKdQQ26WgaErmLaUimMXav70UV1QyfiGgFfgvOflR8WahiuMfOz5cQB+lePt4qGmguhJaV+jXxc1vN3rckhmYAlGW4TZbMNXwZ9yB//oNI1XQHn8v8gtUvULkL3SUEWFRkUfH76b2FqTQAAAB4AwAAHBG2PXbY1rp5n/qHbL5jNTv5aCHiyVC+EmD7FMGujaWNOdvrygD3GKIt16HFdcCaXdw3kd3CFOC5o0eat+2VYJEF5S+/OL3I9zYqBdBpZE7EgYBczebc6J+j/FXkcTFlcqIAWybG15mdA1nsZxUcbEXT781ROOFYO761ICIsO9D0QyECOQRPruTD91XuX11/1k9lrbb853sttnYveFLf9DPuzcINAIIzRA5fI3Vdho56oTZLCl0f6JO3phG7pVHbgXQ/aLjl5yWvZ+VMXS/NnA/+GYGmIDOm4iaSvchIp2PMENGlCuILkM4+ZUo2/j6/hC95qvnI+L8ZWi+y5NC62P+ytBguEUDGCjPd4bjVXlHZMiPwS0PvONgiMMpUxS3Xs/sMJdtnCDZ84m8pp++owmtA6TYvovCUlIbB+mWLLqZjnSpqfB2kM22WyQbO2DyxyVqm/QTFGcezR+q+Ip2NSEVAZT8axiaFQFv8cI9IQoQhe5dWsuHnL8N3ZFyrCs1nlG27TDpMWZSz2AMRI65MVvHyL+W2jXkeAQ71O05EI9txB8zm1Q7P9VBGUa29w8a+5BB3qgNjcvOPJbDwk5n8AEhI2ougvFuylJRBXJOguyAcV08e7Y/I54xxmuCPeq7g9Px+gsIcTSs32ckZ2vRTSap5hmYBwXFeH+P0+U8oDJ8dMRL/PZ6HbhxRLIql4jXpvwhwSmnV/tmVDGf+SP7LtaW8dGRvkN/fvTyfbzzMQlvCdYYl1oPYqu74pZhK90+MxDIN+bW7P4hzMfKCvWXkNukhKnLhF05jlIi8+8/lW2ocyQYa8EuYG18+nuf8Ay39VjiGySRdXGEiMB+VIFfv4TYBxCl6BR+SHaqsJY8JAzSF4rzCB8h6wgwbLatK+V63VLWVe4+fi62IxK42Gk6fzXEJCfP/mTY2KCeMa50vWN5ykMJQ9ohPLsxZixwNQr1ZXMaC4yoT52aEiO68ZBIBKwHwI5NND0xri2c4g9hhuZobvVsD31EE93W5UtMgK5SBrvfYHj0OPMX80uwPjrsNr/dJTmUZNUX5pfnGRVEi++f0BjVSkwSGDww8bKg+9FhBmZ5DKGhknCPPI/eMG7hdWxIkaf80ayqAkLURbiGisObT50cJwfd+7MRDYHKf+5XAHd0WMYaptJH0WcyPrXRPIjUGnm0kaYWVNQAAAHADAADr5A+IibcLGi8dYailSWr6ByFFgsvnP1pxPlMl6qEwm79ugEbeVPmiYXIkUzPn7mnWEBN3wqDAYukLrf9R0ia0Gj+7vUEONcjHPtstPZvGgfR3QLIoPC2K+gkvRvKT200MS9iLY9kFkWUY/r7OytHqHhnxDBRjvoRKXxJ4sWa68Nwp8jdbG5hxZizyt7tQh0SFxyJMsLtQlQ2BVQiyceH5moPYvbSaP10vezJXMvceBVLYFqReKcV8F1EY0VoeTqbO0EYwQsKsooMHKjaOJQGq0Estx8a1yMv/z3Bpks9T/5H9g8nj68h5ek5GA8Yu6GALLsMcQ6J9eSUOBRpyOcKHtsq0LCOmJ3gBL6PM/rgGDrYHEiqc9Q6i033cVTEdlzh9twzEeu8lwO3IJV5jQ+TCPMOTzo69gsWehWyCW8VvmaOyOxrD5ybCLkl1Gk0pTV+fk3akjmpT0PwRIyty25HxwBr4FtnFreTixwy+Jfd6v6J+xSq9P4VNpHciHmf9W9g5Dyu6eTdOsGFYlDnYKOQJhACRDGasXgbVeyM1Rg5Txp7YvatyYyYHZEWXBL3dQQs31BWMcDAy2sgCR4f64c2qbyOsCNNuFB5ZbgTaYa+k7JmkIGDm/XSSyxyOVWEtLwaHWSFoVKLqfNTxfbYjcSEGbbOkGO2zd/7/P7TRZ8qTEILMKbPXCxD0aswos+1Hbhz1O8PtF3XQr9mFbn7bUtXgd4uzoz6VjXpucjgrv0UHTmlMRlXg9K5Bm4bsH49lLFdM7mfncrSk8WEXKTT7F5ynvy/H5Krv5u0xnuMveE1hhixbdd9+f9DzCeXCqsI7eVYg7Qf9PuZ9eDCwWYKeRE0gACetYnRemXnv72CdvIO4QSCKM6FcZXqtS3mMGntq6uMaVsWZ3neTwxlREot2Bl0r19NmoaSekdHHzWVvIK0SuGMj2VgzADAelSlzjE8X0ZzTpA+hwjgeKYAfca3KUxAtrTpjeYcYADwXDnz49rS+La9JGF5mMVgkwgKB1dYFRmfD1MC7RLUIQZUYGohh2LEsl/fGhpgEwjSltxJZAdKOS1xEHwXjK7ZFLxzjneQfKzX4PANZ9glCG006Iz8gMzueVL3oZJoITt8KfZyI643ddMmln9GqxCjd1wM3ZmdKCqyChXU/r8Hn0V7q+8mGS+37NgAAANgDAAAS1CADRGu59JmTjZagduMrwy323ocUzF6kWjaf3E8xhKBdM6q0XiW62mKHZjtZfMWzZb+kw8JrdeGkwZvPyni+VKoGAyxuqjWVDr/zAJkdXY3r0zWorX05vIO6Y1lhexeI/saHwcjZie+cPrpf4XplnQa5YuBM+b+rC9bI/FQEeZTESwcezo3SAYgBJ7ZR3gAKy7bUw7OHsyQUFGy2wl3XjAXjbl2LV2WKSrop6lmrT2pSFw1Kah5F18Q36RfjeeZ85MhBVDMhVqcdl8n+xOMB1GYp+xF7wv+Qg/5FiE+sl08l6AdX/vB0FwN2yp0sYpjwvIRgzbpja94HmSrPKCKXHZW8gIuYrpAW4PX3qnxYJNNHYlYpWx+jbRDrh359h2vr+0oPreEfUPpDxzQxovNR2fXXcQZjZxvh+B2YXjF6EUhpxeBkKId7wPcEbq59pnTEIqdnS3b4nTnpAq6+YdkHk/FZjaIQx3iwutiuiww4tQp2x5SE1Gvtjnjk3kpiGeFMZuxoAGer6jfK1rgEGAa4jPnLogFV4zUt1iSFRB2AizR7qyL5sjkWxdJJDQmd1kCjH0gEoTG8Z2POwJSf7Rf73sZ+2RMQapmXvQ3wUTc2o59G7VI/ID3zJZFO3ZiReF3FAwFsvfADc1N7n8guVTb+09G0DVfchP/Bj22BqtD4Lw3O6uCapSBtscJJ7x9m7QsPYzwZ4esWM4e9Lfls0G2hDUxquDO9cbbhIJxogjqSQHhJXzi1RBiuBlvnX6efYSmv16G9UwmArAhSGoOBq12NZYmvRrXAfN9qdUXCa3clzAkfReb9i1tnbFC99VO/hcy0R7Yxzpix2H+X3SUqsw9M1MJ7XvU9rOoDdcYi4kwXAyu4bbv9Ir9qAc1Hg1YHbirY2X3y8RubEEfFqZLFIn28egAaJ2oqaMSyvG4tR+LK0pXhcOlQKDSr+F7OFppRbIFM/gZOqdINpJruRi2a5tCg9w0Db8gJa2IuTJ5m2o3RljDdMkkE5auNoPzkRh0FHoSQ15zikV2LzkGMGbIcrX1nV7A9ZMMhouHOOPP50aA9Au8/Uxpc66iKpBZtIXz9CZQ1OAy44UO0d9c7Mn5QyovE8a8c6JzLmory/Vq0xhafko6AyYF0yXY2xXmdd9qrs+DuNdBpsbf3lDt9Imptv1i9+/0/93xA5tljjDnwIuX4MFzrOQi2gD49fiPZ6gnkKF4CwvsG6a0T5hDjoxf25kWolghUTVrZyay9vzw+AtkcNDz44yjG2GVMyiKDgXG4ETJUlAPFyTxztP4Cu9+91vfXVo6au/hmPX43AAAA6AMAABzJStGVxFHzxQl6gh0nNB3yY0JMovbZOO/g6oEKVMInkP6IjwfPJU+zcc7XuY0QfX2ElfLni4v7oo0wANWoE4OCy2SGbE8czPpC0smmxgSLPOS8szNxhTxPlBBfV1/7BIzcKIhtmh4AbsLReS9Jzzlrbhf2MQZ/FOK4VI0QrbULYjHeChwERyg8NeB3RT1V+9nIGYoLJ5rMMS5M8zUyG+jMvXd0kvDYtej/8lWQuzMCnR+Q6zzmdgl1Y5QO5MmRcw4vcv+yWBGHZdezyLqHvEk63dniYziEcuSa5nIMPKe+EAVoTGNA4l1FG1VHOROXmmrtCIgUzb90poC8JSdLDWOsRIWmJ41wPDmIOL91GB0SPu3aJeTzRw87IKbNtpyF7gp2qFQwkMMl3qNSGb5bI+RqkHQL4bMySq7p2O4We8eHPi6LWEB9rpnd6efztYYR9iiiADSLcorBxUWeh8OxdQZtpgvR2swNDnMJVyayEa2bi7M3vMYSaPOc7pI3rGUv8RS/uGhHYWxMml/2NfuM65pfGcTS1AaxuqDwSlNFtt8S7zp6rZDJs2soO3cQUaJ1W0S2R76mVeP2fy/bV69OfpauZnSVQXj57mtlcN/Om/8OHHTI9B9lrOCV1G9staOVLNXQ818gmDa4MAMVMXBC1ekv8GmK+qMML3LTaB0Mew4mMqe5VUBhP+r952wtukp5hY4YOBiMRQWd1KI66ZNe/8kFcW9jx7iB83A48by0szkdk8HVMjfViDNmGeGuGoBURWmqZ3RZ3dg1S3zK1sZjnvuu0BcSOwzg9Jm4ELwDktUZgNj3ISlvjfLnSySCs/GRKIGV2Fi26PD7d5gAzSR2FmTBwYcQ5W9bDm6hCzyL6nvN/P7PJ+hNKcbfX1SIAXr9/P1SVLG5Z3tkFnV1S0eaugwf/kl3uy+MhHOOAU56z9E6oQ0Ttoau/1ICnn5ibzLnn3wtOKOmbaw8OazhvjTGXEPoZpdLBwLqz2eNr2ZA7ZHEmY1n+eVEwtCmyguEU1xV3HZYN5Tsggg0THtja26rnIG+udUAxbJYo8NepCLZKDuH0mYAajwtUtPFI/FIA+XhFfpjPPBIZUJE+iO/+umwvf+KESTN+tdCsVe1jAdBIPFUKLlJ8yxUGw9mNZoQacVrv76K/rMZ5VbbENKqYj8A/pO7Dcgm7k+3vvss3ZI3xPP7nEmUnCngYn6GwbxxsaYVACVkXl+sO/oL3UeN/cNbyjOimOoeWnoxizcIJ/1rJ7jLnntN3NYHsqjB2gpZOP6YqP8TqVMtvBPSWkIk8/fUSRBQrOYCxbxEQvkA8+CMyl+M8fpA7oAyN1E4AAAA6AMAALbe5lT1np41sc/J0LcW+iWk6s/8xksVMuNADxJaq7+o/rYiOml3gHkpROyNJYZrRLlYGBkrWwV8MS7GbXDCE/wDOqohwWoT2Df3J/vd5qzey5k8HhgUVUtioaxV7TB7u5K2f/euKa9/UJ6lKfFSLQ///XPxHVmdcRVBnHRYQhjjbxu/V+99tDb7hMsgRAHe3tKkkCOjDRo2hvQUOshxlv2C6wQjL70XF3AL6V4XBTtxPtJjVc3ccoA8mRLqm53ko0OxUZM78tMkAI/BoeMdKfIEM9I3r6QVs/yIkWzzk6aEiBUSWpMk0lzeZQnziu7PpbxG9Uk38jdw0YomKuhIEcvJa71GAjgjBQ0x46V//NfUT3snjS3xCun1vnEZ4ayZZwoSEfOLA3HDt5kPlp32cZ6yNcmB2PZElV7iQqsk8xh+f49ydgIyccKP+r0ezJJxi3DCs/LDNmfEOPGQtIlfBPhbMXPNZKoXB6dFfxHohCsMU3FFJ5hSXGxRPlo212KBwmYzEEObKyrGjgxVALJi++E75OBv2gvvBPJBpoQnFtk9xWT+9GHd92ILrRpwadQf+p94q5z87Nb2BSpYLhs7kVYnJFMVeSerlmBGwMP3Qa+d0jfoWyKSHM0ysL1e0Rmn2bxqpMEpbsvMj5Ai5Tn/l3ba2XebjXGDwW0UNJUJcBY/EBxLl5Ic11RAL9SyrvQSmG5mX43oRTPCLalp49Qwe2EBDHpniY+4nV6Iul7p5DzH3SwpLbhE+r/gAaQHlQviupJfs7OdwfRTR+E1vBIVWn6toO3CVwXHvNLKMQn4JJntZjG15uTPxwVoeptxUEf8BJZeusUeSn++V2XjfUXYQagJ6ZlN0NcyBjEpvURqYLhTAfiPKi8N3bI+xBDjCZWYs9dxLbaLCpnua3XW0msBF4LBOhjtTF4fnMpwK8e9O+3enm+7GEnz7px0dxkhsjxMH0fNNCcLtLv36WG/IcdjFncJciMk9MZ0O89asw3kZQ+moraSoX+Nr7LW7jQuXDbuP0rRTS94thRBZV8KS+4+KW8aI6t2EJpKd/72CPiA0F0aYlJwTQT/L9l2yU7x+MAtqX5otcDORuvJNT2rX7/OosvB1AxVxEJBFrmKuKH7/5L35qliqTEZMuZeFPowZ6VdkRL2Fzr6FmuppW8TnXVivSr5PrHM84e6s18bxpyVUddfEuPlrdPiQP+iQXsPUh7DuU2ae7QYNnQHh1x1dt8AtLJizQ3TKxzXsgq4DI628vXICPT6mCbhpxopMW1XfQt2mr+lhLfTEMXff5A33y6fE8aec/FJbNhHxASoYYgAIiVTnLqigrM0K/IAAAAA');
