<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('F47B0BD88D68361EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/gQQWHByxDncajbXtiiJysoxwrndny2/TKwDpaUbbofSZtSyKHqg8EzWe6rZesiUpSmRZdHtrtMmHLKoK9tM6oiAMFs5jNyheNXHx9LFfQhSWEES+TiyUFVWxJPoo6LxTnum2/JOX8WeN6QJLcrDF0JG1FvaaqTfTUSNo44MX9lR9rgr/iawaPzQAAAAoBAAARH5UDnVgT56A3Fz1s/Ck2BGvc6479LRU6MnlWrwFu5qc8wwJWhOV4gx9FgcAIw6D2e6gD2gc4qPKhJJMy6aC2AFxrg7vFgfrxW1Aklmo5qP4m25rxxWtuqon/i/O1g7Rfdff0w+7xVkKsM3PcNrTqWhPJPiaeOwP+ft/dGmaQYqlVOCTpJKQDNvddWrY37pXzkXP/aM54oGfIAqJTqMyC6Ihc8s74TegEF/MYyRU4HWOF22ppmcTud27+ImwwX9bC8y6KfYDEoT288oeJGfHhx+t7dN4STlZugPKazg3XwvHMEgdcmvfvUau7HrjTTbiNw6RGCsDdDE8qpHJWjlqT2xmmFBJDdYaBomqCuBX7rzLnBmYmZXIdyrujk15uPzXPbBcJdJTKOQwvNyoL4qRHfoe/ZzL8eCVuaqUNaPCbtMm2zFSB2xIysTPOiEXbHF6RfnOnlXM8/top8ppGpivmY/oxdoEixN0mxu/Jq2ToiHv7SQHV4B7avQpz7aXqoH/uKvBf1iVz0imptJq7mYGC2BgvfPsO3LLilD4YiO++456wJJu3NOC/89TGciAHusb7dHJOzWmgEQTkDO3PmFnTXdWb8w3m6o3iunS+nGBA8S3UTQsF3BZWJeeKBUYLmPLFAqVhu/XEbN4TfKmemkyzMUjGwEloXp/aWXvLZZ9eqIwJitrqADNhODrmEsZGGweRSfqgt7L0sS6JhlmL8ajbREHlmKridBVFfKn3HGftrHA2en5YM3k3AYF9ndg+TAL2bUo8UUdZnutOGZaac8B1572BCkYKInSlk0CQ9iRWRKSx/j1KUQT552cAtSlZu844j2h/2N1GVV7L9+VK1AGfS3bXmu8XoAGAjibz7oM9SYyoEmxYb3bKiLKaZo5hSseaYbK2CCrbWnYSp80sdrBsrfpa7HSA/t9oRkILgZavjwVjth5FHy6Emq4ZkE4PHhLOcgT+31UHWZQBp07SvJNNySGBZ9MZcKNzgdTcFrD0InMV2n7U9P1ThPi62YJORjsRQjPOuiTu3fGsGIGNXaOBjxES1g9EyucnDiRbGB6iQPqy6+ZxyD63c4lvdaMOJzsVe9JaI69qJBuU+2BDlvCyE37U+HqIgWlHRr3YwNornxmsuP5KsTGY2vCOza71ijn5Fakg2boIK5AEMHYZ3rPgHrbFR5fWZaeOTX4a3kGWBzO9PbNnbOvTlk1x5yPTMEoqde29DMvG9yAwI8DXbitTH6ITQFAmB7usNHOgsNMA5kEptit+uVXt689MCF+gATnEItM5nC2TuqdGlfZUQWR1TDevG3W3MTzHH6c8o3JE9yQMd0VUrkIkSu06EjpwDfjq7hcg6FQQv9FwFvMK+sUoUFU01fmpPAKAvJPOCV1ZA41Gb011d1+IDT9vo+v6guXPByg+3kIQ0o1AAAAIAQAAI6I0bENJegNRE+MI4VPL6oVjk8DTbWDlrZRtzsFi2BoaAnU7zaCht8Cmb7XUEDGKwZ0gLZlWdxqgcRsdzZi7SuXkMH7nA8UDpf2T3gtm9shtwqR9NWLJJk3kHSeQSCt0wFnr/hduF9119fTGTaQkJ7JHCu8JPB6rUWjUa26d69oITd4GGRSXgJuZ0472lIaF9dSAyr2a0KUC8buU+eqB5Iab/5S1hxmH1IC4s9GsR2uQxqZqPEWBQhN+aaaWV0UjavVRJlRI53CT7i+PL6+thDG3EU35iv6jKqYjs1znkniISqeq2uDin9KLlTAgvKL2VeluCN5p0WrsTytoY5yUD6EMAZp6shQVo/NJdiPmjX4uAEUnivUU+P2vUuGfLeijH2T4mn9rU5/IAnuqyCukpNgh6g7IBYBoliX/2MMprZGr/u46KAowOVz2VN9YrzWyAC9kRwgM6blC/ob1gHeUCIEnG07oE9wC2YTy2mMCQcvtAfjAMom0Ro4RPWdeVq23DvmmOGoKwLNHqVf3Zm3hVDmqdWEZF+sv/L+SqCmluH3wZ7NCn34mVjODCysAkRDZgaHISQE8FYOIF4LIxf9p8hl4hRfpywbSMlz4qLk4ceaCJFO0BZYZlWxXzLWLsl/jSDwhpp2F74jud3GC80sfWw4Q2+xkQCjst7ANL3GoPEUtOZT0e0CcKRFkKrv6bOY4LB15KN+9sFMWX8D/j+LuRq6JnRYd2aE7v+o4LufrpxDw9EvP2so1rbeUTSe4DWM6IZusL3UZ9p2QezyfeqBo1Dn1ufv07X8BIOCO71zwBGk6+xnYA4f1yPTANaoavZ/pIMkK0tzUyOjrBEB4pKOBzFVbOQRPzEiOK4EIz2Yu14IaUemqKT/fP3rL+ZXLmD15WgApGTt1xXFpqB7oG6S1igTKa+BhRDosrkzrnsZFjBYikb86Qd9/A8v8C+7G7Zr9PiEK7APKk6YtiNkaiH9BcR6SBEHRe5QQjWVsbPayZl+OpMjU8xnl7xuky8gafCKFE7Z9XY5tqV5NNwoHZyWv8slszwtQKFN68HvsrUv30rbaOMota2pdwbYjitArd4JkduLpIpaHqJ0MWBLt3HsAL/kl3u2kxtJcom7cQN+2EXxSs5XV5kLtF/D2Cs4pKs7i8h3OPz1dA037XyPcvWaTs5FFe/hWWrmJS/Ps6cg+SKV3rPA/ypq/ZxRkTH3u4VcqbIDWYkn9p3A6nKsP1N2SQJzGXprYzphyda+jl8XqZo5Fc0k3QfJXL6EweKARjcY96Em5gRHraQHWH21ysqAfJnngXoPDs17v8aIA5F6xnWztqjoHZuUlZENyf9rp8eVXkKoWrc3LoeuObQJoM5fmCYMPSSu7YjVoa0P4K1V3e9whOBl5YkVsDC/oLuQcMvbDjYAAADoBAAAc48HWjeESykq8/qVSjvKTsosXXaw7GGGaFLVsSurXR54bzNMx1EtXQlRwi1amDk47vfJn0dnH1hhDJZp4eG2HcJ4O5qEJL3i67y/Od1bpC6KxnN/VEcA0irjRDX6UUpnLYKtb5MdLQyAtn+hcZHYwQ1WIgXrV45ySnsSzNonXBIPApaLYqNxVGVJIXmXokNKTEdHNuhlWoeHNFukGX3M3C0T6PjOEOfNTBHvy68tt35EMHNloSsizpFvfTQ19Q7iVcFfx2jAe8cQ4nr/i/7zQPbnAk75LcHSgWrgr6I4RnhlhGEYEbt0E5tjtIxgdVXLHd+8TB+umW6TN6cPZhbgzUwlUEq/+jUj2TqSpCclfTbfkdqfXVjMej4lwnkIAT8xmOEHe/bOyQaW1E0ubKksr2h84mFAwCYYZ8te0FOzef7/uOLF8qgdHsBsPVGzMNqIE/IgwMllA0yqDovXTYZ5DzOQkXPx7P1at2mBvx4+oahvl+ZHhArKaymHNvMRasnf4ldAfkf5Zp5vp4R/hDm56Tiw9RnkBDma7kUALS+mi70+fabMwiDYTXc0FergmhbELCw0I80t0g6Q7cDU2hWrX8UEVime5302xJcjENm2gOE96yShQ6iVMIoFZLIWEfAZFP9BPpfXarX4kLmCYq7yPAYYAoxhYCWwl8yCrF40ZPQnwCHl8rrqRu0VnLiv2esY6uUyzr8K4yunNiqnBbQgxM/+VLVMDp+rvXT6YeQqVui1sPQWFM+P3/VE9b2zYfU0Q3yq6jXBgBLdJGU8lLvkX1k0HTpE7w54lMBl8//rqHIgu2w+8AE9ABy2Qtb6T+TZIoG4MdlWXHXeb978XSUB6CjkvpH5RN8p1vewtC5zyu1XnnffYsMsQUDgIXdlAjFCG6QTBY3zNRV3rP+sIVvAWJfVafLQjMyei4mOCro1nIW6fA1O53WO4cqSp+nk4ECKdqptG69amd3nLnRYYHdzR5hwyE3NvZqPOYYrRXFHUzgHQB263sapHyMcp4lfzl4/zsWsAkwLGYOFE/kBmKUx69Uzoh6gzgGaTJqPrbmW8XTlTHoBmm9HP2FMtGPEkyPOw4vM6xj3SWGc2gEl8LkumnfGVIiFpz5S/hjoC2bNPSTVJSpUio/wrv90OJE0av1bo3d86v36zbn0vHH1Q22AtEtTkSWKoyK+mKGDPU22p2rn1bK73sel9sqAw+/UHEtL4/esXlAan8FFft1oFKL1NBdpUtlwALIVy2WZdLA5Ws54FtYUkinBH1Dy+tNh+MBcIVcRmOSUI2roSIOJZ4+zZ11rLPuS6OmGxS2CXEzGFXPDa0PJwbFQg8t8/nL3bpFK/d2D/IibRt3o9pTH5Tcf9NMYJVgXjgZpYI4e+hFuhmi9q7FeozbgxGnEEH44/OmibIIlq93cH7piftwBZMLDmGlJIqFcDQrujbr9uufMBzGqAheWR9zpIga7IMRE2Q3J9cnqy7XOC97G+W9i8AhSbeNmpkb+nDz3YH4mA74fpIYy4fRHt+CiQSuKhLtxf6pb5iUQ7YZAGBC0IzIYBWhOLJ0c25PqFDnmUBwXs/fb55SdGJTmymJ9c1tCWO3zZaTWCvD7ub3CGNL5fdZgpBOKhrI84WlHc/UrTK9Bj2qOwmOqxTiuUzVdDEc/6Y+ECY3Pn+emz5FWGho3AAAA0AQAAB8trdJ+vcLHTRUloK7iSqGMuh+5nXDYZgU/bC1F7mMlkpiGAf1rGZXo5WKHc86sCrkRB7LGI/iGRSNG5sLxZLKo35Ck4Kfod95/8x3fPDDjYqsVynpI/hb9iVlyZzqWccCey3/WFHcvb/dnMGsyzYpsI4TlHxJGGsSKap7oZDZwtSz2kxTX+ubz/QzvEyvzqsbkALS/6JQLtjOAjljJMEQfX4KssM0VgqfwMcrKZ+nox5YCNMX6JpdFxzapyqfbXN6yrJSQKt/NKlKBBklTtVnVju2tMr5+ZUT8O1JshRGQdTvOOpipgO2bzYUSujCWmwbVRAKn+/B+X0j5yuKeeMDEHf+gJXr0M6SerE07X6MASTS5ppW6Ar8dE9XF98spXpW04h4PWWqfcmVEjOCavigII40GLfEHFMnqfrXTltITcXHS6BMjpJiKyyQDN3odrK2mi+y255kju7LZ8pix+Ns/nKdDCpVQIdQnfuGPCZosP97FPVkaffM8zKjFNfxwqMhqnL4l8R6Yx/bkdeO46JFI1Zg+biVsJ9iv3B4sV/BVhqhrrE3aDDooMwtAQz0sXHvKez+DRoft3e5roITT0P7XnkoZs17LubRKGkkMHTXdbOlQAD911/gkg105BmTyGn7WMK5cXZgDPjcC1lR2lkSfBJacnWPQwF6ixaUE1aZsq/csI0kBA/6Sm0OuFsWRQNnG5GYzOOk5xmC+p8Y7Nvrd3Y7V198KNDAMTHcpvrtpzswd3UEDz4Ag/lTeG4JKeY+yi0ccqDq6fmtGriRkNmxtmY3L/14lWuDYQB9RsWibVOBADcwIJa/t2tL7owPXhOGadv4rkesAnI5B014nR/J8aLTmDa2MzY/fkDV44u9e3NDRpmGzBu58zSrVRJtkeYR0ho7MUd4Vefci008KbQDqoAzNdUpTBZA5cMDjnm7Gw/FKxY9zzV65oFIZ8rM8mkFRdKUIKEamRY06P3ICsFsg0Q5sfSFHN3VKU5rrmftkKLbHlf5dx5Kl/7QsBZZNSJ7y5vFSrWxwiHfDR28RFYHBA6T8DFVSQYYJQqi7YrVEIItqqGaa3xn+Ei113CxKVX2rczN2t7M8FvB8rVD9ioIyj7d+9IL22Wu4BI71mDG4GJ+icZ/8xZ8vAb/bVYb4lsIhTbRQHG1Fq0xg+EhDIsy0WW/jXJFijdB822CXyT+GD5LplvOrZLXvp9fMMU6YxWQ6B8lhWxxNWAkRaCr9vBPrMySdFj04hGM0Gvp+DYIYCYmHdpi8F5QRwn4K3irkDk4UOY+OJDwn9DxGn3DWk28uc6IJTfNwBXWq43etVAgNnqY5I5pqJZI2KuboU8sqWCv0hQ2gZ2MyMqNwD4IF7Y6eS4xaLaelFl9q9g/lZrdOWr7zEoFniw+GiNFuSVRfDnVMfO0Hwcf6j9NtMbOXdehDyCuc2dXXFzdAX4VR69TDw0zyIwO7aaU63rQLgI+SLd9gcWjeQ7LNBpPerlL2BeK57UB3a8qmqIU6fkzG/HFnhxEfNvnqKXeTPKxzGK7drLgD642DEUZR6E7b4bxrF1qoDbMo+I6V63M5PjhctwebezOWlTDEmjo0oO1ILBeJ5NkcJuRq/w8yffqFn9r21FsuY+jMZMWpxIFbOysLYSBkOAAAANAEAAAw0NePDhnlTUGGgtWhY0DCN7hvs7220viWDBxaUzBSH6dzFQAYwaxZ/9RM8CKtiXeSccmEYdgPCebiy6X3X/lKxUqW+CUfSV+lATViRpIqEwYYK9LQGb9HbHqpDwTTODdKyNUqskHTqOxXep6nzirflzg3Ey+lgUfZNyj4LoN+ZM7QOEdw32m90KrIwG9xa07aJHcEQXII7rX2buraiqvYm4jxIJjLl7nVPT6wigQk/RCBWm8S/1ImzKW28NcMu68u0wSQ8hh6iwjY+SvV0UN87EoN6cEqx0VBkz8kQIGiSTygjgct4nqdEx6rqvoMTkLF0i49DW//L01ZJwxxlrWALzlY7BdGwKMv8dCKXylWOavaRbvrBVz04HK/tq6FJORUsJIFcqYeehBfTMSeZdlDxqM4Ytw4K+t/ePJvmwHE6UVeG2gSheUELgU9x38Gh2fOUf8lAG0K+ZyOEymT3cGivEHDJC/MvUlzcSEOpuxPnAC84hH+gI6KprEutVKBLQnPZAKYojeWhfyCQ7RvC8yVDFI9NYiDgZUPP9H3lJKuHbRzlqmqeHkiRe/rBiNoJT7pBQsQwrSKokiDLhxRj0d9eEO36tlwyKHxBxwVag8GD0HUSMEfq4WgutUIAQBgH4GeW8PlvC5+b75lXL1cf1mcNNl5DdoZ3miSzY+DjUqSQ1d5HCIebxt4piMo6QeexP1Rvk3ACqKWTH0OErpbXKxJaxAw7bm+q4Y+4humSKMVh+ghs5hCHbU/YaVzTQ1Swv7bMllsYbkFVaJ+ikMx1WwtRSlYIathocLcLjpoHdr3F8htmoRK27AlkWNHWAwy8nmSyYGg88e4qGCF3oPxC9C9x2kpPrVDCD/4kP4SgdK7ELo++U4ufYwoUktZdpHyWQ8v+322GbeKJr43qeYRRFqTxMF2cQqqhN033lhQMVi+Tw/n/m/GHQsVaUKg95FcGBOgFy7KcjN38I37N+lyHaEyz+3EO7LX1nT+Uv1wrdw4RlBMfGYZAHDrxf07xtO5RvaaSK3WC0FhRBvvKY0uA5f5PcBLknDMgHK/KlWS0f4Y3rY+1xupYhv3N/kT+wbwKDkSxVVECoWeYYMpYHli1jVjlDbIs9Owz1yqQCfLzaAzZuK6k6ptuZAb/eK9BVgMLKEZD7oxrL6hFMFr/uO403J4Agex5m1zsNxKdahKBtUr8NIvsGOdlCgNDejRnIWrceqtTFPeZwpKe23js+IDsnni7/v9i2rQVKPpduH71QMxX6ukJB4D0q/RRjVAnxBTBq+pH8NV281nSl6vCie9M/0yIVIxC7yFhDbkDdpIdaajn31DOGcISJ0fhyAjEU7tm2COHitnzmFBHtVa9W7oM7KXhaFNePuP/jD0LaXXxSSA9DiLx8n+MIo31WJQZ/UeRr1cxZAWnHuovPpm2XwMdZ3FkXUYx4hEmg/McVUhlQ7/gEImo7gkFKrM6H+vNyOiaa19FfoI+Sh8GerlJyqadH9zpk8YH+T/O2A+d64h/QtSW+AENYeOSFJMlCk5JGoE8r5njpjAw9hdQJ2rX60zWwYC9ejH6HdVmVhbzZEA0n5u1nNM7GkTpWAb0EKkSNSJxf1lME0g8aDLvquBuV1LDmtVBq2hGmZhr2dnR7w+eFuGSwAAAAA=');
