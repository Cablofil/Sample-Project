<?php

namespace App\Http\Controllers\SomeControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function pointersOne()
    {
        
        $a = 1;
        $c = 2;
        $b =& $a; // $b points to 1
        $a =& $c; // $a points now to 2, but $b still to 1;
        echo $a, " ", $b;
        // Output: 2 1

    }

/**
* It appears that references can have side-effects.  Below are two examples.  
* Both are simply copying one array to another.  In the second example, a reference is made to a value in the first array before the copy.  
* In the first example the value at index 0 points to two separate memory locations. In the second example, the value at index 0 points to the same memory location. 
* I won't say this is a bug, because I don't know what the designed behavior of PHP is, but I don't think ANY developers would expect this behavior, so look out.
* An example of where this could cause problems is if you do an array copy in a script and expect on type of behavior, but then later add a reference to a value in the array earlier in the script, and then find that the array copy behavior has unexpectedly changed.
*/
    public function pointersTwo()  // Example 
    {
        $arr1 = array(1);
        echo "\nbefore:\n";
        echo "\$arr1[0] == {$arr1[0]}\n";
        $arr2 = $arr1;
        $arr2[0]++;
        echo "\nafter:\n";
        echo "\$arr1[0] == {$arr1[0]}\n";
        echo "\$arr2[0] == {$arr2[0]}\n";
    }

    public function pointersThree()    // Example 
    {    $arr3 = array(1);
        $a =& $arr3[0];
        echo "\nbefore:\n";
        echo "\$a == $a\n";
        echo "\$arr3[0] == {$arr3[0]}\n";
        $arr4 = $arr3;
        $arr4[0]++;
        echo "\nafter:\n";
        echo "\$a == $a\n";
        echo "\$arr3[0] == {$arr3[0]}\n";
        echo "\$arr4[0] == {$arr4[0]}\n";
        }
}
