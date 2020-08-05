<?php
$name=$_POST['name'];
$sex=(isset($_POST['x']) ? $_POST['x'] : null);
$age=$_POST['age'];
$job=$_POST['job'];
$status=$_POST['s'];
$email=$_POST['email'];
$brother=$_POST['brother'];
$brother2=$_POST['brother2'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$rel=(isset($_POST['rel']) ? $_POST['rel'] : null);
$son1=$_POST['son1'];
$son2=$_POST['son2'];
$son3=$_POST['son3'];
$son4=$_POST['son4'];
$other=$_POST['other'];
$consult=$_POST['consult'];



$to='nod169@yahoo.com';
$subject=' إستشارات';

$message.="<div align=center><h1>مركز الصفا للإرشاد النفسي وتأهيل ذوي الإحتياجات الخاصة</h1></div>";
    $message .= "<div align=center><h2>الإسم</h2></div>";
	$message .= "<h3>$_POST[name]</h3><br>";
    $message .= "<div align=center><h2>النوع</h2></div>";
	$message .= "<h3>$_POST[x]</h3><br>";
	$message .= "<div align=center><h2>العمر</h2></div>";
	$message .= "<h3>$_POST[age]</h3><br>";
	$message .= "<div align=center><h2>الوظيفة</h2></div>";
	$message .= "<h3>$_POST[job]</h3><br>";
	$message .= "<div align=center><h2>الحالة الإجتماعية</h2></div>";
	$message .= "<h3>$_POST[s]</h3><br>";
	$message .= "<div align=center><h2>البريد الإلكتروني</h2></div>";
	$message .= "<h3>$_POST[email]</h3><br>";
	$message .= "<div align=center><h2>عدد الإخوة</h2></div>";
	$message .= "<h3>$_POST[brother]</h3><br>";
	$message .= "<div align=center><h2>العلاقة مع الإخوة</h2></div>";
	$message .= "<h3>$_POST[brother2]</h3><br>";
	$message .= "<div align=center><h2>العلاقة مع الأب</h2></div>";
	$message .= "<h3>$_POST[father]</h3><br>";
	$message .= "<div align=center><h2>العلاقة مع الأم</h2></div>";
	$message .= "<h3>$_POST[mother]</h3><br>";
	$message .= "<div align=center><h2>العلاقة مع الزوج/الزوجة</h2></div>";
	$message .= "<h3>$_POST[rel]</h3><br>";
	$message .= "<div align=center><h2>الإبن 1</h2></div>";
	$message .= "<h3>$_POST[son1]</h3><br>";
	$message .= "<div align=center><h2>الإبن 2</h2></div>";
	$message .= "<h3>$_POST[son2]</h3><br>";
	$message .= "<div align=center><h2>الإبن 3</h2></div>";
	$message .= "<h3>$_POST[son3]</h3><br>";
	$message .= "<div align=center><h2>معلومات أخرى إضافية</h2></div>";
	$message .= wordwrap($other, 70, "\n", true);
	$message .= "<div align=center><h2>الإستشارة</h2></div>";
	$message .= wordwrap($consult, 70, "\n", true);
    
$from="مركز الصفا للإرشاد النفسي وتأهيل ذوي الإحتياجات الخاصة";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: " .  $from;



	
if(mail($to,$subject,$message,$headers)){	
	echo "تم إرسال إستشارتكم بنجاح";
	}else{	
	echo "لم يتم إرسال الإستشارة بنجاح";
	}
   
    

?>