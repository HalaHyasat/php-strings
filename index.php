<?php
//Question 1
$string1 ='hala atef mahmoud al-Hyasat';
echo ($string1)."<br>";
// A
echo strtoupper ("Q(1).A: ".$string1)."<br>";
// B
echo strtolower ("Q(1).B: ".$string1)."<br>";
// C
echo ucfirst ("Q(1).C: ".$string1)."<br>";
// D
echo ucwords ("Q(1).D: ".$string1)."<br>";

//Question 2
$string2 = implode(":", str_split("082307", "2"));
echo "Q(2): ".$string2."<br>";

//Question 3
if(strchr("he quick brown fox jumps over the lazy dog","jumps"))
{echo "Q(3): "."The word exist in the sentence"."<br>";}
else 
{echo "Q(3): "."the word don't exist in the sentence"."<br>";}

//Question 4
$string4= substr(strrchr("www.example.com/public_html/index.php", "/"), 1);
echo "Q(4): ".$string4."<br>";

//Question 5
echo strtok("Q(5): "."Orange@example.com", "@")."<br>";

//Question 6
echo "Q(6): ".substr ("Orange@example.com" ,-3)."<br>";

//Question 7
function passwordEncrypt($string7)
{$password = "ewf465e4wafweafd46weq8fdwqe56f";
return substr(str_shuffle($password), 0, $string7);}
echo "Q(7): ".passwordEncrypt(8)."<br>";

//Question 8
echo "Q(8): ".str_replace('the', 'That',"the quick brown fox jumps over the lazy dog")."<br>";

//Question 9
$string9 = strspn("football" ^ "footboll", "\0");
printf("Q(9): ".'First difference between two strings at position %d: "%s" vs "%s"'."<br>",
$string9, "football"[$string9], "footboll"[$string9]);

//Question number 10
$string10 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
echo "Q(10): ";
var_dump(explode("\n", $string10));
echo "<br>";

//Question no.11
$string11 = 'z';
$newString11 = ++$string11;
if (strlen($newString11) > 1)
{$newString11 = $newString11[0];}
echo "Q(11): ".$newString11."<br>";

//Question 12
echo "Q(12): ".substr("orange@example.com", 6)."<br>";

//Question 13
echo "Q(13): ".substr_replace("The brown fox", 'quick ', 4, 0)."<br>";

//Question 14
echo "Q(14): ".substr("The quick brown fox",0,3)."<br>";

//Question number 15
echo "Q(15): ".ltrim("000547023.24", "0")."<br>";

//Question no.16
$sub_string = 'fox';
$string16 = 'The quick brown fox jumps over the lazy dog';
if (substr($string16, 0, strlen($sub_string)) == $sub_string)
{$string16 = substr($string16, strlen($sub_string));}
echo "Q(16): ".$string16."<br>";

//Question no.17
echo "Q(17): ".trim("The quick brown fox jumps over the lazy dog///" , '///')."<br>";

//Question 18
$string18 = "http://www.example.com/5478631";
echo "Q(18): ".substr($string18, strrpos($string18, '/' )+1)."<br>";

//Question 19
$string19 = '\"\1+2/3*2:2-3/4*3';
echo "Q(19): ".str_replace(str_split('\\/:*?"<>|+-'), ' ', $string19)."<br>";

//Question number 20
$string20 = "The quick brown fox jumps over the lazy dog";
echo "Q(20): ".implode(" ", array_slice(explode(" ", $string20), 0, 5))."<br>";

//Question number 21
echo "Q(21): ".str_replace(",", "", "2,543.12")."<br>";

//Question number 22
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo "Q(22): ".chr($x)."<br>";?>