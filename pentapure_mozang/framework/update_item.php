<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('4AC18AC48D682BEAAAQAAAAWAAAABIgAAACABAAAAAAAAAD/B4f8v0iYp1y8p2ZragTnEsp4Kxx3X9g3xmttKOLstyWgswvOWEENn+2oZBJziOt9HBfOvv5x4GguUYWsSmzj+jel1xo+frE8vqfHfM8oNaj/oJzd9auPGTf3nkVNP8o1DVOSedQ3ptkS9fpZKerhgwPX8W4gMDpauEAorfknCIU1KUWWwjlg7zQAAACoAgAA87DomU/Iveb1/JTm8N9XGeyV2bn7mM4paAW+aaZFY0S3nLf8E4VXn+YAj6iA1bk7472x3WGyhDsAHUr7GPVkIya9gUK/nPSTLVvmmqkdFkVs6jkaIwIxkMbVsYxCWHLxv6XL/tBUYpyaSudDSt3MsMI4ELm+1FEPs6vXrrfmmtcGgRA9Ijo8/eA4jLiuGLQRq5xmU4fHZmZVVx+B0Dc2LtSu/z1DjApBeVb+UahzvX4sRs3uAhvcgBmopSJbdwyaLwQH3Izoz8hbRUTTOz/CtNA5KGiLRJ/Lj81U8B8yzyOMwi3Ee/k1NGf6OEanlzmJGpbSl7Zr+bYM5p5k73eB5WLMfIV3lYM2TAHG/jbMj2KOYItjDvOpNyyovm08uBBYzlVevQzm8CFJFatKBKfV4LW1TdnxGm4NrERxoktS7wQJUgYq47EG9gvJ2UFQ+7DQTVrJh5AnsRSx+P5XNsLtVwcIO9w7297BGKCfwfno3I5YbEZFix2C50OA3g3LpnIq7sgOUY7gJJ3M6oSsYGDnxhH+GPRI4/OzNYG/MwYiDmqg42Fr6YlYFOo1kPpD9zsFs+0q1Hvyrc23N2uE68pSWQImfDAHXJhM5kvaOMSOOqAXoFCt8GQz/AGjR+kZnSqO8PRr/OysDeBI9ThNBtT6k0t1sqS5/64Ko71UKKC2J6WEAq7VyllaouJwgmjYIVjATG/B4iL4mLOc+fvpOpodQoXNllUtsritHWtpvadkbvLuOMzsW2aknq1ASiiMoGOc9O2ubCphcDKe9dW80QOa8z9D4uBJCMtIpKD7y4996vKfj7KzYj1cn+u5eGtInzb91W28cnt/4vrcOxIYHNhaA4iL7SlkFzM6RW1a3SlQshYtxT9OXL0/nB5Zk3CHUFVcKvS1OPqyQh81AAAAoAIAAKZy58p5mnUe+VJg7FMbpqu2BXoZ/9WaB1jLhwVIsZ1X+6Wz97rf4ne63nwGtc1lbc/PuRLzyZmD343oZPi/qQRRrxOeH4i/T4fvSJn5abYGoxmE7uWAT6mE9DHzTVnoHpCwaJ1ZXduK6mSeayZL8ZNPz7patrTQautALjN9n9yp+lKeV+BEY+dbtj6ns5oe3rYCYsixAm8oN55CenJwKP8H1/4h9W37D9rj8+9DPUwuY1hY3DC0nw7i7hsDVVEhp2HCOGJghlFzhSbCpmkZsLIwN1ItMgwpxhDbK+RYb+jI6bLA/ReDxVMh1Kus8iVtwx4JjlXj1jMFo9HZ2iB8nbi5oZ8k0AbgQ+WD3CeuGYN2K1Kxpq0THWRzxCmSSObgNR3gTUlj2O5OyGnsuhKNfwhW9P4pAEOTcexOCCt1oOzH+QvftZjP/nQd539GzTsnkgQd2lRD11qh0bhWUq0dgclasHBYn96Dhle79NTUQVh84BSMum7wg4pbFjFaEFdjfBAIfhq9FkfMQ/iFMtQA5yjvqgFnNHgJZIiGlcM91Khec4EntkHx5pXWL+Ll5fFBTA5WKUqp55UbGH60Pcr/EjhsGl7qE/hYmgj/FjdVR/ahNfNxLGhxR4jQzUsETOFtPwirtDW007c5Qryejq//I/dHRXTdMe4uZOCKNHl6PshPZMnNWo4+xfy6Gclw9V7E1mfdiUQ/2yt7AOQYIraiERv0VqToULNUsjvgmNtnX6J6r8Kg2tRptzuuBpDVJocWb2xq6qcT8MSJ2wvX64ePKvJBAzaLg6VWdhcV0dt7ALmBHHxM91HDBiOr6V8HSyRzbEi41dqfZAWsBahiOlnB0lTKf+v8AaiB49gU9Lakvs7A6y/mzY2SZsmmfZIEVMgOTDYAAAC4AgAAuqmzUEf8e6aEEg9WNSx5zIHYLbbxU1Zmy8ZAUN3reCj2n3lKhKylR5zRhyN2XU4dqx8BoBOo5f/CqOawUwYWk0nH38rEGWz6UVO/C7ZJs54Lrkv7lWPmTRbPVbsN3f4uvkipGRJ74N6kemVTXm1KQnf6qbpa6WwXi1Dw2kyFq0zIU/dvKFMQman5cDGo+KUu4aGSkaSBotFBujs34g03IW+7G6QlCiITCM+ZO1YNBYJUcywP/q9B61bgeMKd5jH4xIV9azBZEGAh3oJXAM7FZszF1XHiX8MoY9TxC6CXyHKB4v274n4ZayNnzOWBU8PwnOhn8013szkSJFVwa7af+zRgwcEhi/wBFvwDNMdIyWA62IpOnSUJpAlXZX9v9tYLB5yCi4mb5ue5BJde2MoQnP7eFAMEolKeHI3rSaIxts5heMh4NhmH/heq89nG3oUOW1KLOWwsqFjEa5eYd0OHSpdFif99Z2LxMYAR5gg3Hau/OEWzBzfDOKeab//iigR7fmbKKq/6M7TilHWk0zQco5qzZbj145HKL5YFYyV/4ivIU6J44V+o/I4RzPdjWD556EKQJcgxQhGJRL/GgGtUJKUVOC5zVCNW68cZVNhnPGpA7UdJcXzhPSVFc7r8buZRhs+XqXTW8I1kZ28OvZLgNPPh7T+qsMrjxecxTCUpZw9ee16W5ZDzKXdDm7KykvOxEYtAexteieWt4SqmDXn/Ncm9CsgFCkbwFhALhWCWPelXJnMYwRM2coTsDzeU56RbaCJjO5T/1gqAR2WYW6fHKSyTd6j44BkpJoEAFuH4EvyFS+x0iO4cEP6nT9W4pnOvtOz8p4ja8L8A0dFKsnfld/ozOC2li56t7d5O6K4zdQvBAaeDnbWfDPrY1YtiMOTfLp7Sb9J8VMEAWD9InTjiCRSDahyHk6coNwAAANACAABu0kEeo7KjKHVRC7z5KUhhIwtORYy0gDNbmYZUuhmudu2Ufc/DmiLPG2Xgjz3+air2oIiHxMIv9GNyBxXIbLVBRdbbKdfTdPVTOjH2gMq20soTpMtvHXwbEN7NvcyYpTYTF5VTOfpKBckHUjbhzDe1x3p9pi+gT3TZjKh3AFXP8rD2H4PtkGfeCxAUWPqtC2VNIZVxD+26FmIGsizv46DLAF/lrAh7Zl0wcbWZFEFr4bP9bTh2I+AQtZRfAa2I/xDqFrXH1jpRwfZZQLGbBPjFPnjDUGjdcgk1C9Rq9UO6D4uoN+AT8/IUkYB0+fW0upaIxFvrGkHYMvf3GM8iQbbEsppalzDpTEnz1N0tnaqD+SlNsulkE/u5YbZBXO+KSKnMHqNFd/r0nclqsoGxFkZNrq7dwjLgjCCrFyJxvzWiWk+BbCYVeqOxdaalORS/Mr6zXGc9gnGEHg5oeB0FO+J5AqO2WS3C2hluZBFNXTj6JIJu7NxS5ig++WHKs75JJ4wIbqbG6hBrqMkU4AHagahA7uuFLdamXso+mtDdAyLPcr/MrPgcP3jwkgbE0hooK3I6R2E7aNXYyz1I1M1cBqUWhQStRHLd7y1JERzDiOnRl7RKph2BKARBhp20kg1ESMF4G5uzvclXSYUISBOx/f99/FWe4/SE41tkJ3CR/70dtA4Kmjjql6UP6+jfYrItETzS9iSgJipermkfhIR5O+RKnpFK5AAN/6Yo6GyLZ6Pd1DwY+k2JABrpNfQUtt09peF8dWhla+l3H9fVo39GSqoW9CfxYpMlnpyGnHIuAo24UYh3sy9VzINO94YZaV0Rn+t7J9CqXQAVFYzgI7t1Y+WcShF+RQehSfIxRI1/O4yV3Sbs7AxuCMVRV1FDIUSZNv33ZPkz5mhg87DQAlp63E+06g4JOoCzQLyuv0vjc+rMql+p3FhjEHrsEuCYijM4joo4AAAA0AIAAFxVkQDX/zFSVJZByvZ9LKo/tFKDVYrKkowPuQEuDSKTVXBokGYJDb1v4T6q0D9KpkH3OUXHh+xw0jKZHFrY+vNb+ghphkbul/OuhFGbBEWOc2x1B2Fett+Py2UWCtux+XPeUieb4fBxPzkGbNxQClpARUL9cLVaIHA9i2pUByiujOCANwFuEn1pCdrVZQ1guzLbenPMZAzxW26xUUa/AF35+C9KCRBptUgFocVXdX7Idnm/z9+8pg6nSdkmOktgsm1yam8+IhdYyX9NzWADO308bIxZJmDHT8JjvfDZU672boSuX9ls+0Ppr4wvOrpmPf04Uto3FUveCnb5av/6PS6i9gaKRr9COOPJcSmvEOVdS3QNhgakmkzJwPWMcyllqc1s4zLA2fN/2DmLnCDvpKjqTT/C/Q/cdWw7Iy3z25mhU1/ajb14yJJtfLYtOQEXnkw/87wx9Y6oaFw+G9IHn1XnUc6cFK3SW7V/Z8eawN+X3x291UR4CPnFu6aVLUZn1SGwMwlP7nB4bmpdwmF39RoUlJ7hGrlOlUoYPlIP1tra6lOOH5uyXA+eP5joANoR2WZgeb9SXhyHjo5hPPYTESWl8DUiXjpiDh5Cbn8FKZctba6sJDOJRDDtowUTrmvsS++rjUsJ8jCDc/r3JtfvsGuZQi3p2nBDVj0OJckCiJ1bqe7j0537cDaDRWEFLmEvsu0jtnz329EQ381nwK+gbHOwAb9rrqtrn+bvbAhLSmi9WaGhAQaxWbPHUdBrgvtPaBHXeM3GXgRG4hdqaCfFqdtsEVmJYILc3X81LMIZbxj6hOS7P1wsl+zLTHkpt3dy40JurXXdWh/W2Pndny95aBK9zF3U7EZahYootPO3j7HBW1+SePV2uFDUA1joc3BFEGi1GBZ44G8zXN6Omc/CRzlQsP4c2xCe9MO/xr4ALtxBb0w1RdjLanj42fEFiQI17AAAAAA=');
