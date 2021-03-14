
<?php
$nameAndCode =[['FirstName'=>'james','LastName'=>'bond','agentId'=>'007','SecretCode'=>'matini'],
['FirstName'=>'alice','LastName'=>'alison','agentId'=>'006','SecretCode'=>'digitkra'],
['FirstName'=>'jack','LastName'=>'Norris','agentId'=>'001','SecretCode'=>'what']
];

$commanders=[['agentId'=>'007','commanderId'=>'006'],['agentId'=>'006','commanderId'=>'001'],['agentId'=>'001','commanderId'=>'000']];
?>
<!DOCTYPE html>
<html>

<
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>

<body>
<h1>secret agent login  </h1>

<?php
if (isset($_POST['FirstName'])){
   $fname=$_POST['FirstName'];
   $lname=$_POST['LastName'];
   $scode=$_POST['SecretCode'];
   $emegency=isset($_POST['Emergency']);

    foreach($nameAndCode  as $key){
        if(key['FirstName']==$fname && key['LastName']==$lname && key['SecretCode']==$scode ){
            echo "hello $agentId";
        }
        else{
            die ('security alert!');
        }
    }
   

}



else{
    ?>

<form action="" method="post">
  <label>first name: <input name="FirstName " type="text" /></label> <br>
  <label>last name: <input name="LastName" type="text" /> </label> <br>
  <label>code: <input name="SecretCode " type="text" /> </label> <br>
  <label><input name="Emergency" type="checkbox" value="Emergency "/> is it an emergancy? </label> <br>
 <input type="submit" value="login"/>
</form>
<?php}?>
</body>
</html>
