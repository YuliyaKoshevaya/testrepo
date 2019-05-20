<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$NameTask = strip_tags(trim($_POST['NameTask']));
	$Subject = strip_tags(trim($_POST['Subject']));
	$Age = strip_tags(trim($_POST['Age']));
	$ConditionTask = strip_tags(trim($_POST['ConditionTask']));
	$PerfectSolution = strip_tags(trim($_POST['PerfectSolution']));
	$TechnicalContrad = strip_tags(trim($_POST['TechnicalContrad']));
	$FizContrad = strip_tags(trim($_POST['FizContrad']));
	$Method = strip_tags(trim($_POST['Method']));
	$Solution = strip_tags(trim($_POST['Solution']));
	$FamilyName = strip_tags(trim($_POST['FamilyName']));
    $Name = strip_tags(trim($_POST['Name']));
    $MiddleName = strip_tags(trim($_POST['MiddleName']));
    $Rank = strip_tags(trim($_POST['Rank']));
    $Comment = strip_tags(trim($_POST['Comment']));

    if ($NameTask && $Subject && $Age && $ConditionTask && $PerfectSolution && $TechnicalContrad && $FizContrad && $Method && $Solution 
    && $FamilyName && $Name && $MiddleName && $Rank && $Comment) {
        include_once("db.php");
        mysql_query("INSERT INTO TaskList (NameTask, ConditionTask /*, IDUser, IDSubject, IDAge*/) VALUES ('$NameTask', '$ConditionTask' /*, IDUser,IDSubject, IDAge*/");
        mysql_query("INSERT INTO Solution (PerfectSolution, TechnicalContrad, FizContrad, Method, Solution /*,  IDTask*/) 
        VALUES ('$PerfectSolution', '$TechnicalContrad', '$FizContrad', '$Method', '$Solution' /*, IDTask"*/);
        
        mysql_close();
        
         }
        }
?>







}