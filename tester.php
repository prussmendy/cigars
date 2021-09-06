<?pHP
require('DBTest.php');
/*$ARRAY = array(1,2,3,4,5,65,77);
$count1 = count($ARRAY);

echo $count1;
$uname = 'best@gmail.com';
$pswd = '123456';
$sql= "SELECT * FROM authorizedusers WHERE username = '$uname' AND pswd = '$pswd' ";
$result = mysqli_query($mysqli,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo 'success';
}else{
echo 'failure';
}
*/
$inventory = "select inventory from items where Description = 'Royale'";
$result2 = mysqli_query($mysqli, $inventory);
var_dump($result2);