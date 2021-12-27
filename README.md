# random-password
generate random password - creating first package for learning purpose only.

## installation

**using composer**

`composer require corbital/random-password`

##### **How to use**

`// load composer`

`require_once __DIR__ . '/vendor/autoload.php';`

`//use namespace`

`use Corbital\RandomPassword\RandomPassword;`

`//create instance`

`$rp = new RandomPassword();`

`//print random password using RandomPassword method`

`echo $rp->RandomPassword(5);`