<?php
require_once 'app/init.php';
/*
use App\home\Home as Home;
use App\user\User as User;
use App\post\Post as Post;



$home = new Home;
$user = new User;
$post = new Post;
*/
/*
use App\home\Home as Home;
$home = new Home("index.view.php");
var_dump($home->get_views());
*/


use MyClasses\SellingApp as SellingApp;
//use MyClasses\UserOne as UserOne;
use MyClasses\UserTwo as UserTwo;
$sell = new SellingApp();
$userTwo = new UserTwo;
$sell->sell($userTwo);
$userTwo->post("This potato is awesome!\n");

/*
use MyClasses\ArrayCollection as ArrayCollection;

$ac = new ArrayCollection;
$ac->add_Key_And_Value("foo", "bar");
/*
 *  the object holds an array or points to an array property which is public*
 * we need to get that array first

foreach ($ac as $array) {
    foreach ($array as $key => $value) {
// we have used htmlspecialchars() function, because 
// inside value there are form tags, we need a clear picture
echo $key . " = " . htmlspecialchars($value) . "<br>";

    }
    
    }
    echo '<br>';
    //the last value after getting added to the collection
    echo json_encode($value);
    echo '<br>';
    echo count($ac);
 * 
 * /
 */

/*
use MyClasses\IteratorClass as IteratorClass;
$routes = [
        "/about" => "about.php",
        "/contact" => "contact.php",
        "/test" => "test.php"
];
$iterator = new IteratorClass($routes);
foreach ($iterator as $key => $value) {
    if($key){
        echo $value . "<br>";        
    }    
}
 * 
 */

