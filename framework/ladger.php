<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAABABwAAwh/IfQS+3tO6Jk1455X10v2PdAPQqLfqOFtJvF8N9NslQBpsLuSWpzll3uzKfADrHI7EThXr4nzaIjJr+fQywCleKdMp9rWVuVW/TLEjj/2/vpoAYd/GQVStscLNekHmFrVWc3rB0+9TeusS7DLaedV0PQk5mfx3cBkgBnqT+nbwmLFx9h1IPF72zw+/KEcSGK6gKnTrTVMWuVSJXPRyW9YGRWgMdTxwIO+bjkdB5ffcUQseN2xtWBIkjyDgwDwlwl7qx9mgV+41v3JrP20UNHTXBcqRMHsu6oQWqCiXyP/3KsEFQu+W6RXobZEUbj4YvnH+uG5wZjAux4YbkP+eYv/8LJlata5ZGmkZSlVE6uBWjftv/caUha9o8i4xp4+svI28wr1uVV1S3jtLFU2K58NU6rNZ4kTxiIy+V3RXankOUfws7APDG2NP6qVooz31g+KQnXcr/IdgtKam9QSmPODgsNeo8ySdHJA41iIe5L/ziMpVQMXrHiKq5GgPrZXfIlHMHgjO1Ho391cz+/vza4lvpl/5OpYXzN5nuqKcwGxDsn3feGTvQ6z+I0kBof9LXDiArfoXUUnq5WoKEZwbxAIRnWbPknOnb2nsd/goEDvAgJl+Bm1hyIgse/pZla9mUXEo8eLAmb3g8iw7IZO+obOsxHc2Lff3hIK+ULUV3aBPW54qog6KAxv9KWd44KlQJ6e/pT7t49E0E5tBi5iN6lmCMOkqQMYEbfngg5xfIhDDcWPzCf/VyKcJe0TMxCPFdfrdoCooDpYb6CYGi0OA/TNcuXUxaOs1NPCf9otKEgESgIDlvJZSaz/FCscOS+QzK/EIZEMjA7x3lV0rNdPQk8/X5nwrOSFOz1XarZiicwFfw+cgjM2OIu1p7IXJn6ozCJnblyuiHWTNqTqyuqXhXI1SNr6x25EsMUIAt1bwF715I6UvHeCrnysvbUx8kt4+O47ayJlnF/8INoEbfy4ObNvruQpfG/FrILxU7i5+FLajFzBuDTehhQagrOvBk1A/JzexaeesDuN3wqhoKQEAeIvLNjmPFRfcg9YM5mfDWOWfA5bDIr0x4/GbELfsl2v2Tui9KkRQ9NlpeVUnLrYlNhwZclRAMO4ktKJFWr10f7b/AG6o+8Staq3CU/SfHJGzesqNj+rnZv3Rsv84SHlE0D2lsMmSunkcRDsbE7F4g74izRplyZ29u8ClRRcJ9lC3cGJrPqpVLzxaOsW6k3b1hLWTSICgf3PqAlc/Ix8vgf612Jep4CbgwNf0iNr5QpbweA44TJD7im5tS3yzTueKCLqhzZkP01q4ZfpeEXm/k5CVtClOhpkMZIZFGD08vo+tC2+1jcVk7A1H4imIZD0oY7wmCLK6MmhaJDRfCln/59u73gZsc3QepAyvUj7l2C6h8xKeX3sWZblHateDxUImCLgaoUzytN5cS8DSugJYJ/f9wyNpyogPmg/p08TJM6AuO2WQqKG2J94GyQlaz3vjTDX+DWsCyutWqXNyktqLhcajjRgPzfR6lRXh/2MkS3p+Csp/jOwRPU+X2z5RCaALcu2mXUzB1f7pGeH5akRZS6eqS/lmBTl28HHHhrrrUoBVCz63liZHvI9qr+G8mQ2k6zgXUDV1j2vkg4tTm5qyMRk1Mh2E/DgYpWUyuP2myW+TrscBrh+Q1as+Y5e7O/wyuIOtkm9GumZPdZwTgEg5LULsvYrFFSxURcuyXV4YfdVvWMGKDcfRyVn9rygm5C6Cw33hsAQm68xjrTIbijnOoYE63kusN61TNqtUxcftF9IjQgWMV+oTMpNPvY0GPME92wVBHn0GLjejW2qoumQM45sK7R7oR+/e5ueomiWAJsGu0Q5+J5Pdgs1zP0A9Dp30qbhgi9PD8XblC+4Uvd50t+vhunjboxYIRM7SaYhW9MFsIoFhv3wR5E8zun3k5Di1zt6DVmrZFoDfodTx5C2td1DHHGDqLFUw5riKEawxTsDMhQLkPJ+uzlhqUQSi63X0PAYAc6vLS2/o8xCg+rnr687GT0Hwtb85aTUfvEFGraJTj9WK2ABtQHiIWdl821GIg0G14ubE9p+hbiTGwkexXk9tK1W30EhK9vV1wKvMRLdMfj8Vfl8TUaE+aC0QlbbhglyQXxZO/NNiMS3ahSYuVUYR3pNFm8n9yBNFAFJI7hMpGhw9kLtQa+E44GtDO/GGCqX3zpNvm/DFulpCxSI9qaVh0DjgGe+gvAxTc7/XrRRrKpyVl6ES3PaLo3vh0s/MBnII5GbdNPXnrcMIWTfBoVsAo5+bUWWtzoZ259ydsVVVwFcycig0Aw0bCKJi6YcYeL0bAhGgIWpIKtXXhHHeEIBqtcA0t7NqgumpP5AUgZdsLraIcjfw9N/RiWRx9Mb3dqTjdzEPnK6IJ7gm7OHWHHhd5/Ru5SObveg9u0ZvG0mx9tvapxGN5q2uUaNNiseLIDvoAC9fDS9V5xz6O4GXecc1AAAA4AYAAJlyJUo5w+KQlQMHF5ZdqTeGg4r4V+tS5jB/f/V/87AHJCpfv5P+M3lWnGXt5OG6uSRFCzSxhbbGdozBIMluTzSwAv0iLZ8MYuv9uKS3hMdwNJhmvduElBTQ/nirn2xkQFlDSSf625BKqx2WUIGtWdDPeClJdEQbdjpwp4GMLG0EIntW21qM+yvvCHzG5qjtVHratoD92bzgJZQ9JujFCkmw/DjqAkHSvHr/SQO7CM+9tERLJYDcgrDU9d/stQ6XWtRaXIGmwhsCMAYsGAyWitiELqJjscSANCFHpwv+cIOx2PZKN4WcPtEX0WNl31aU4yaY1Bj7tt/gGapxk4hq/ewxigvW/T0ZBwhDArOPVtOI/P3lRBw1IuhkUz6AXO5um/MgAheShruW/tRaasp0sVX7Yefph3KqAf/L2sIS61BaqEtdHnNAZtE3QZPEDPv3KazWJW1f2hD1LOcDGrLrJGD/SuRV23ZsAVmdB2bvlla0CwYa8N5NnTGEUFkWxMsQbbcGbPy+E4WF8Eb2cnbrt9dXH/fCZTicMgIS0P+f/9Jzd3/EgodFSoIip4uNldN9aEFeETykzzdUc9sC4Wldaihlj+hdsyy0sHGGjf//8DL8BQVw2yJTAjkq7TvMO3HIvrLFTobLrd+jRqCEP8TSoE7anb0IKt7u1AZIqRUDW/vq95CLGk5pZWKLGDMleDZTQLM6mCheRlU/NSwkOBAzYMIRAV2Gi/PywscRQFzNUIKWcM7XgB8PKYUwCGOtR+i9j23v5ya6IGAultA7PLNG+fq51CmyBfwIG3QBsCEZJfzSv8pCq78LxKWNNoGT0qImIJHZ+3MqrwR/pD9hnZVPXOkN1+xT7Xaj90PNbe3zu7IXFz24D5JujNLk2xlmh0X9X+/LVmh0bGP1DS1yJfT/J4jyxOoiaoLK+OlASLAKJg3ya/cJwm2qClQukRSEmYqUMNrlYLVFJuV6Am719PFFmMHoweE3VFPphFqCLp7xZV0bZDe7zWj4cL33DiddUoyq+b0GYiJHbwZvNW+A8Xrj6ZkHG7Gr2/uacBHOxoP3NrHsflE70SyuQ5L2MxTeJpQSve2gAz69N7CdWLX8aPre9woeuQD+47qrEj4FwwmRlgMfaCK3HbflGqbq1Ml03ETNNidWoVN4WmyqSlSlsxuZBQcu+a9DhfgAwZh81FajuhLOZWfBgANZRnP3wKGKlXKWndTCwhG2PU0moW2YKgOLc8/lFZsZmh8TIoSBbVnd1hpLZTEDiJQYDNGv8CxmCS4hv+9TNEGJm9X5OmeCeKVR8fh+JAr/wrJYMUoGvEh1HsVXqgJ0csgQA++dYWALsUNQ/MiRJxVMmu4MVl9VHbgcG9CL8zMosZO7B4f9tF1S96Gfes3seFavXnKj/u5QdeDAIjPca4sFWuhFgYqSIhS31TCoWWDr8/KK6WSmoGgViz5sBXD/qPAywGgfhlIrRc/hE4U0G7VzLeSaX35K0Lm6JLfEGlOn7oyt4Z2W40YTkC0K5VxYbYS4cM+eYLvZ4kWEXhRVoreKAsMpc5MctPkIRbkNdsEaF/4wPzIqfNa3aTFQ2lyb7C0WaPF9JTCrNwcxqz/q+AI/HynzlZDbbeqHb1AKTw8DgjH52wCP+u0acWY4MbWGqNJO8D0LablP0kYNT7TCF6og95Cyag2dXcNONbNl+yLgR6idQC307Z7IOKxq57gmPB2hj5ptB14S76xmnJpjrQEyIRYahx2MfCvLER+a0DNgjEPc2KjG4w883kK0o0EAaPObkyD9HsYvKI2gJ/KPkc61qtQS9+FzRp6VcdZ6lwZvdvvMuJJvBVIYkDQsTY99rTqQPWkTp2cTVpQR60XG855dnHBdndvF7BDddiagIO4OO5hQLx+RB+qgPesl6voTGE6tfNon3u564V4jo1e4Tc0Yp/K0ARtA8GpCK6ZXZxsBsOa8BxV5Xn9UWrMVbXQyMEswjJ2/J1002Y9J4PltwT98JB6fhhu/i5EevBH3eAtUCYZOPXwETiT/vQjQ2bvsL5/cSHAvaMT+gQqUH5S/iyPqawUITVfBF7+FC25kkaGNIY/W8zFUT7HAbsLsqKG4ajqCAHw+Yx0kMZIgEFJZ1CThIU4gsTvFP8OFsBTfyOF0kz78D1pjn1o7Vcy+mqT2RlqOJA9sUKniHiR/sePMoPLpQQvLdIMqqz2u74EDA1jEpIG0fCcvVxfZ/gAAGFsQzPegq7Kulc8BtVlWww16ebbKH5QfhgVFLc88Vgc9o/afAzs47x+8WU79ceyzdHAaXyFKlOB6lH30SXtq0ZyUpc8nMYxyRkl4zgXEL6F2lQsgygbJc7t4RqyJ/PZ9NgAAAIgHAAAHGx+2teHOILSuliNYKBIWL3Mki7W9Ksje/88ZD5yvp9ePfXIDYQFsZAWMHt3d41q2WEnWzZuVbZtbGfiYRpiWQqvMWzoQEOrNwUB3HBpxr2uwRSs4w8uOw+CAQofGZeRHgCZEbmtUgKB6Nuo0N9MNO4q9pgwQXow28katdI86zGrs+a6TI209Hm6337IzfRduBjB180764QgoYkEBBjCjIHAiGltQtCbBG9YxBzpuIuO92BvFa412toAQNhNQHK4zt/VkUKYmzkbUG6fid9qxW/PjV7OmBJelNvxF1jcH2TUy+4GxEho0ddknJrJZhhUmz972pGK++MyNUdru70dzM7LaTBbsv5nnOejjLgiC9hK/OBstkxX2JfzQ7kc4XleNOuVNNXodlUr8yu8LcWKH8WpuBWcmsvNyYuCxB0/CdmldUgf+F3Uq9jR00mkH8Nh86ZVunDS2kNbokrmD8l1R95zhSQPdvTdhD3Iq6tctv1FmOCos0ParoTIsM4IF+jMH9MSH3OT4nTclkRDnMDc6UreUmHBSJpqJwUSKXzixazIJZxqL4VyOvQj5/BwJLRQCSJbDGlLWGyg2SX26vmIWkyJXi1AUUhvEOkjRlPnsrqfWHONR4J5mUjwg4sUclu20EzLKLo1ENf5HXdM5dPHsD648ruzhF9aTrkYTZWoBAbheURJaOqIoT6GLGlVQSFV5H3wTq37tdApPHUlVufGyGLYDtY+2LCghnhOpDtXkyEhuhdBmyU7SteuX68wODycDFoPMdtOPXBO4X7BtfoSy4BbXD2OKNW3W4WxDiicxCuSc+bDmYBHulgRprOom6llOoGoo4R2e3XTcx0Xey2SgxiSVJhvj67QN60c2zEK73Kd+VqZCoXvBqDqWzLbVkF7uRANVe6vtgBtA42+gaYnWNADcZzTz6jgr58o1jV2fSVGTlyFc1te3e3iMYLMZ8rSrEwQdCxsXc0xAaL11RzG4WsfxJqSwfq2NhqQQx0mmwjHxfvKgqLi9ttJAPMbTcxd4XDOmkiTUa7oJLt/jLFx6J/thb3D++zF2REPAfmcBnJ8Gf9tIOC3V9/J4EQPBlQWWpAbdL9JOMKBkVnW1VKgJ5p4Y/5X5RLUyg7F4QOt0FS18kHRIGnZMHa8pegmH6LCUXjApLt5hAyyUmRdEGm5ouZ/cMwFGUsBmDt5sulw/BOv/r6F0dVCdhU8sFwOa5BjdQUc97DcA8AvfMD8FjFOnBnHZ5x9fDDqgiu8FXsc3TSfE0ZtiI9dbv1jxkX3qp/z9Yzr08QtzVuUmGDNjoKcCgPibPfPXhuT81Dwct+c3KwPZVzW78ZP0apsBJZtQt1IJgQnavzBffK/VV0+Roti8hJ4rHj6rQfPqbgsIwd3M5zT2+fZc77yP9+Nqr8+eLlDvZlGkvu5h1o2tFCfMlEFjz9PO8En4vBa+EQ98e/90BKYCH/qYu5V49qFmVcImbzYwrEpUVwYaq2cV+GkuZmT3Yq/MBMURpsZ7w9yqr/4r7gEw5UF0maZfHxr3Z4ThP7/aJ90oppJUAmKdshhSJH9tWqfuDltwXD5ikwezWubJidQkdFuvtK6vmVoxwhlEoP7Is7NfPexoNDiI8fFRAhL2HABEmLHFXDjMipgWE97U3mM167u3FSfsTLTvINYPpfqdGS+8V1ekZee3yOmUt+xoxsGa4mAHk1ephLMip46aBgbVQfxHu5tN3qa7m1/1e7+LgGNfIQg0lB3U30wqe0lS0WJf3asQgoNKaO3fq1wp1+UJXZv+4RKphR2fzLKLgYMYpW0Wyo3YbvDx14yGxc1JWLrMja5vonPh5bZSH/FtQrZFDch8kvblZubaIKSDb+tYFchkMsqKgnvQ5Jy6aJQ8+xeM5F+UvW/TGX0Fl+2UT+Mq5eUZWOLKI1xTf3oAtTPNKVY1JHIz8IFQOrY5zvfFTIvwQLydTsMq2Ll8sFdb5h44FUHQSwGSvOeVfYUZyYNvd4QBa9I6Hf1CnTnPZWsuGy4kXfY0f/HEI+7SJYvq2qsJkum2pP7LnKhKhh9po1veCEGzXhwA2R9jkK9GwiPwzkX/ceBiDeR5eNQS/+lRLHJii/rTvfCcNU7kNRWk2LYqPcgxdk2/NF0tP76jzzlbZtQUXWKqPTSRBf80DFylzA+ZwtULvAlnITpgzsiMkmvCmpgLFJq52BTpTw5sOMJ+m7yFFKU4F6DZN1ZgxKzwtFm2wwgOU+2l3qOcTU7Q1qwZFiDtpMQGkfiM8yjbzSjzi0yjpjJ5LlaYIA30dacAHOhwfvLYNhIk35sCPyGOFzWb1iZ5ZiutQQTeDwCummWWQZ+uI5I8Ne92gTaW87ZdXXkdtZlKhY/zEHH0VsRq7ARqfj7YGvl7MBy/g2ByjDUmgV/B0RCHWf1M6J42l8DAcDwTv38U1lEynSPhXKHimFW/WTD+eMBnFpPtfFpFeeEs7grKIiNzGBHrPUJY5SKRsf1FiiFwuxeySIwbhkZ5g9ZNBcB40oF1vlcaS9ZBIe7VIxdI0DvQS/jwixxv5lPMZK0O6v1lb7pVPhEpxB8rWQxuvZ5OMilz/TcAAACwBwAAtCTpOue8iUaTUNkIFwdxzn/dALguQXvJM6yGh9fs8yYZ/hfyvvs8VmPUknC4rcFIGBrI6+mGfF1d+QElXbQy0IM3ZqvOu6a6mV8NFQDB2K0iGY9T2gf6MlNaBcM89Q0YlJ1R8XphxsCcWe2BIx58f3tmRVh9lG1J+IfrkfJl64oormBx0KkUMqLiCb/8NidIHfVgZNqx262pAK7zTwRawipqqXzbRZi+dq6dWswRgTKJ42Ll+p7GdGoFqywQb+YPo8Wq39AkjqhtgM177SWY88+J0xd1GzWaFnP+uq6VAn5u4dTV7w6XVfnEG/uOucqfX5ETLtEdz5oKFUtzse4/+EFcvSqedLRhdAPhnYpWFGlZyCfHS6TfMKfeQ/LcBKnP5Y7zBDTLrjQZWONJEDaW8Laaao3wt8SJY0k/rkCGjaEyVUKs522v02Po9e9MpqdLZRw19GjHjK3nlHLhKWUVJs8Nma+zp8y5T7Gl0D6InlD0fbA2gm3nPcLv/CVWwTFvw2ZItNO4jQzwz9PRtJyLI4kuukDwT1RsTIa3pMXHMppmIS5t1Uh5GfXdOjyGfW7ZOYTuphRe0woABSbewSzPZQ6U28M2yDfZHTrlG4JSpyNjjMkxQiASFv/IYqbxON4K6aPC/3+bzz6l6v8d7T5K+9hs9XVgC/cPquBldAmAdEYnQqOSgCspzxcBUjsRL/guuN/6M3EQMgklIafppf7JTLNtc4v9rq2FUxGUxUJfPyQ2v0xDybZPZD2y6MpuQ148F+21wdw2UIAx/Bzl0Fe/rY3fYrhLm6srE2KK98B7xrFwlyCzcYwJP8E4l8ouK/wW+hjZHM81EUuwjSZXFVVK5CdsDU36JHyw7GnvGEwOwmbF6Wc1cQQ0rHIqHBTYmktKHgrFdJYBZ+KATjj+EOweLMFlbDSz2VR27DTtUfXJfGqZP61EIKfDsp81y7FVoL8ODoODyKoN/h/ZQA9E+JFIrQ7x7MbtR0GRQZCYFdER5U8FBv20Vq9R6VImKqkB51zmHoc8wFZ+mLL9FLvfnwajrBL95gq3uMXwhPmGYdXEvJKSrM9ki48HI10mltvt97Lsd3gloPuaKJUMc7NV5M3QlqalOtivjsSAVokzM0lQkyF79LNJ6hYuTqgjfRIjssNd4JRwvO+B3pTq2VpgAMa7kwukw/Pi0hgB81G+UXfU0eYl7pC4l51ZHZo/PXU7/Fe8yZYMQYxuoDwCwUN/AiWmkdUOftipo83hsN31vr+V2AWgtblAo9FUc27rdvbKHrfhTVtSgdiuQPf0MmTZULk30FJwN7eYjYW/8dZx2+9EVpBmdSh2EtOq+gu8HK7wlBWY2C8SqCB2IXXZ0uksCq4Is5Wo0Z3rNVOo1qV2kSlPGgABKe22wnlXcdJMFoGa8K+3OaVEWSho7Eom2gK76RaAd8R+8RiipNisZHCYa4oditEj7IVLjU5TuZPs69IaI7s/les0rs1MJfj/DaospLFoxuiKHYtfuI6HZnXYLVlwmz+01nrF0P8lDK1g6lSB18cAPt/KLcXnvXFKoLw1/xNZGaovPCw6C5T80GK50fd5sKHYYw59lvGfbihnKcNqR4PwHoFh2YxDSCYlICViVa8SkoDDku+E03ujT7of7CNxRlL3zZyiipBc/M1VyJ2hnjkvjynUzigNeSs7qKt2I0SLW8UDf1HYE8LFi6cs9oYAJdawUV5e9TDQ2Mt1WfTpfqVN4/35I+TP/sHgdQdjhBFfpbliiwLm+BAh8FMCh4Kp3J4W+4n6OIRzBqN4Abv5wd8QQ7yVnnn4fj1T/ewbNY8ZoyewPkxawkzUuMWJgaO/XI09GQvRE7CfvE0m4Deu9X2rgzEo3V+SQXeNo177WieXUUTeWxURzjwjbAkjYub2C1LB0EaqU8Bd/UyfZ9a4jPDLgeaXUXsEoSD1yhCohjXLuvEjl7fM8VpS97TsPyczz8bDZ4Iw7OFZR6YY3Sdi3dgY11kW+9lR0bt80LCbc5RpkBHR85DUMUF6hlfJz9WWWv0Uy4Z8gCqG7AkhtnqgRAKFWVxv+UFN8Pi/la8RyHYQQYaEPRG6y3jLldYATdaSuORPsidyrrxlPFGNVIaYPkyTYOunPbHbCgeVe1MJzzGSIoCcja8248xFHf15AnkjuWLXQRv6Fv3ocy/v33gSsxyAGAit4CgvqGBjbShfcHKW0mvGDdInUmOm2SVCeMmgxlvnbN+muqbcTXUxpUmETwGVSKjBBI5jiZzRQZRlqhRArPt2+4gQIo4eesYnbeUB06G3VNALH4PpNFn6rJAMLm0pTOQjJ/fHDpXisC6CHzAa/mtj9+10TGXy/jgV7zTHuosfOXk00YtpCihZ1mmAVtbonEqmM90aN8banAIcILQsWTSzFnyxj8FOOYvAJM3bXVs4Otd9MauSobrzMbHL2g6A0In63IRKjXEibrRI+ni+HW99TRtpOyXw6lwT6duQO0V2WLk9PKGX5751U/l7x07udq1/uoddDl5Zt6Y3P6gdxpC//kAJJS8LkZLaR4kHKHvYS43KHwBoUfdKsGf8zT+VD+rHWQOnFwJyIyu1Eu4VceB7r8pf47Upg1d31qFp14+YiikT8F6wwBppoQ62o7hmOAAAAKgHAAAjRBYRVbJ0lq1kPxV8JJPrSt7eTmlneSo4xc68Hmk4dJOPg4tkr4OiDDshjBvGFRwRw4bnJgrbEpeCoHGbMcvzKQgvQtTBBvRynuUMQESzn3QFbPOg3wyuqB5cUhPFTabWIPFXS422SwigYRUG0nW/jYP5ERB0L6kHVQj/aPi0qeuD63HCeszdrgtSv9U5brwnSusKAdPoJc3U87f9IOfuPZ08to0qQDsSTWN8pB2rWvLG//3LWc+bZFUDfskWF/gTUt3T5u734xC+7BJiuAzhwgrJ1uxe4YqKYhoLputXCSGO5cQCF9YR9qJIKn+4HFBDQLUTuxJllNV5X5iy9KUXAYldVuOpIQ06KHzbSy3geGjES4UDjjEzyx0QN1aJ51VzT+3UcXliDAxZtNlZtaqUeq6LeCfSHc79vQUadAWld6dAW5CdMnrWhDvWZoHfLgB5pt2l2RF5seonutwTq2we+enHqXuSivpsQ2TnUdNhvLx2YPdHeMQ0Nc4TdkTlJ+0Kcu8oefB9yjIvw8iZXcx5xrg9U9trxg+/MvRF0N5NnEpGTQX5YzuC/pdMjz/BagINjAUnHGShZ8A7kN4gg/nzEfaKF/us/keFSVcVv4RfiKIeyx41Qx2/gsy2GzB7x0OevwtqVioZQz4xSyuCYGWn4gR3HoCGUekObeAA2TM8WZyO6kSXZSf5f6bpzijTgCYlm48l3+vkbQP6zfZPMl+ZXqfXHXY3Vtmj01BrI9qBYUJHJ9qKX6u/dWJ9EHbxdszkZrDHuFy3emvW9rjkWjGyIuZhRrEI0t0uSBM2u1Gv6xWpo/6Eog+3nFDaFGrrN2kI09ef7IrNL1FMJ5cUE2cYPnuctACFuo8ET5wYfcPJ5Oo8HExvkZE3gM17m6dcL+efhjEKaVIj4yPYMLm1/WlXWkNoaYs1xsveid39IaqZWr9tOpXL6FvOSEt5qKrvNdXkEp+nasJTyxLK0fx/6VXVb6DcYrUht9FTeKlp6VOsMgLYzXX41Phrh2hicsDVpoM/UOBP83MxLxRDQ93dZJeuvLcf24PspwZCxmXMPuCprpswBdySTAozdn8/hDxrJehu7+OwS/FFtX/AcQ4sTFIS0JE8ZVnX70bquv8E5eJAfBoRRcLx0D8xUYdRrQvgHYuDDQM+tGDiVbZkjfsd/S4bkHQzSOsC3DM0RVp7d94+O50pNYsPJ2MQ6dYAOAsap+4SHu/cJOLF657ZkH6RY9mPlkbiDX3JeXcwYQ/jJ2fqNfMv9HPYD29C44qCN+UATxkTUoF+I+hCBWqWUPn9jFuSew8VIbFP4fE5PPN8QzUiOxQDQ4J5ym1Y3IOkt1p3zwDaqsAqiHhLXTndo0RwVSyMpP1b1FWkuOVwnCaEjfMK/Irjyu42dXMLxI7/iKdy/GRDHwF6NZJ6iiqADu3V3kylgmHWPF6Dvg+G2r2J8hWG8al+7pNY66QXrLHdffacjg/pcCU/pbg1its2jkbGA18Nc3kavLkvmQ0Ic5gm1S5xlhMX0NOi+W2F0UiiUfujxWi8Kf+oPwlK8NODs4IR1+vSK2L5GPaTdB44ZHaZXadO4zA6ZqDJzrqeL7IVsbOL5eSgB3VMO/cDPPp6cB5vayThQflunTA3clXIhv0G0u7TzY0UgltL1EywtOpj1RpGF6bRK98hmG9WzpDzQaR9MhfrpkP/KF8QZ6MKR3OK45HcGp6Hij6g1PNbVw3i4HU/DrizEpPHKZwmvFwbJblOQiqtzOLT+cRwwTOgCvY6/8auxwm5fodqI1qUkZ/ouwq9w2RKnHvg2KHcIT0y6u47CTqAzVU2ifrcKguOTIVEM+rrZQb6NKA3yRtZdlMHjf+4ncMavIgLJc3GQUzMylqwLlQPitT6ZqaDe5guAEHXzn0zddPbn+dGF/hYfmKgBs9aB+uoyi71ig6VrV/sM+Vu40XYVBFoaJcCVRvXWnCv7KOJwn6bmWu4rnbo/T2DCnBoyH30z3XL3nkWvIiG/dEFSp7CEzhAN0xJdic2IqTBx8luPF55QEqlxon4Yh2UlC2gpVRhQ7jcbKI//+11Y2+QU9jIjBiE2akDCQrwJqYiM7ZcShc2k/gjJyCVhSJLuyWV5nk2b62Fh7XcwWl5fdZOj6f0DTzcXpYG9LsdLhIJ8x4lw6Ug7cDmTp6t2E34HrjuUQ9rjembH6j9HEJ6nqNqNVAapXBZlvZk+avEkWuG3vqPv4Ga/ZyqU/AGlUjh+NIzsg4jYmNc00+PH5o0D1xEd1NmY90rpFGf4DF/L0GlLa5Qj+QDsxROkesrTfyC0EgFmEGEzg71xfD/Y05NaVP6WAhL82bHVlqtcUIySpPyY/5bKnrg6ysp/5PwpxzUNWP+B3nWsSWmiPAyJSVP4zRj+jP+AVLxDpTmEeWiqJ5v4uEZT58NHg2rg3wUog32wNP1PDg8q2zULseaHgPZw6E6NyB3F0yT2VWj6Q0ptKQt/RUid+Og8UYNSEOpcnr7DStS+8zn1WjQLdRhsIt8VY1emM0+KWTff74w8vKQeRyZvWrVSPkh4VrNkyrcFTEHYpjmuV3NiXMfCnr0gFeEkXA/p1WXx9Xr57puIJPTQEMPXbYg27AG+FFRfwZxAAAAAA==');
