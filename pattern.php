<?php
const BR = "</br>";
/*
 for pattern
*
**
***
****
*****
 */
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo BR;
}
echo BR;
/*
for pattern
1
22
333
4444
55555
*/
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo BR;
}
echo BR;
/*
for pattern
1
12
123
1234
12345
*/
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo BR;
}
echo BR;
/*
for pattern
*****
****
***
**
*
*/
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo BR;
}
echo BR;
/*
for pattern
55555
4444
333
22
1
*/
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo BR;
}
echo BR;
/*
for pattern
12345
1234
123
12
1
*/
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo BR;
}
echo BR;
/*
pattern for
   *   
  ***  
 ***** 
*******

*/
$n = 4;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= 2 * $n - 1; $j++) {
        if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp";
        }
    }
    echo BR;
}
echo BR;
/*
pattern for
c 
co 
cos 
cosw
coswa 
coswat
*/
$str = "coswat";
$length = strlen($str);
for ($i = 0; $i <= $length; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo $str[$j];
    }
    echo BR;
}
echo BR;
/*
pattern for
coswat
coswa 
cosw 
cos 
co 
c
*/
for ($i = $length; $i >= 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo $str[$j];
    }
    echo BR;
}
echo BR;
/*
pattern for
 *
  *
   *
    *
     *
*/
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j == $i) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;&nbsp";
        }
    }
    echo BR;
}
/*
pattern for
*0000
0*000
00*00
000*0
0000*
*/
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j == $i) {
            echo "*";
        } else {
            echo "0";
        }
    }
    echo BR;
}
echo BR;
/*
pattern for
*         *
   *    *   
      *      
   *    *   
*         *
*/
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j == $i || $i + $j == $n + 1) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;&nbsp";
        }
    }
    echo BR;
}
echo BR;
/*
pattern for
*000*
0*0*0
00*00
0*0*0
*000*
*/
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j == $i || $i + $j == $n + 1) {
            echo "*";
        } else {
            echo "0";
        }
    }
    echo BR;
}
echo BR;
/*
pattern for
*****
*    *
*    *
*    *
*****
*/
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($i == 1 || $i == $n) {
            echo "*";
        } else {
            if ($j == 1 || $j == $n) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
    }
    echo BR;
}
echo BR;
/*
pattern for
        *
      * * *
   * * * * *
 * * * * * * *
   * * * * *
     * * *
       *
*/
$n = 4;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= 2 * $n - 1; $j++) {
        if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo BR;
}

for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= 2 * $n - 1; $j++) {
        if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo BR;
}
