<?php
$qans=mysqli_query($con,"SELECT * FROM student_response WHERE Cand_regd_id='$regd_id' AND Resp_choice!='' AND Mark_review='N'");
$cnt_qans=mysqli_num_rows($qans);
$qnans=mysqli_query($con,"SELECT * FROM student_response WHERE Cand_regd_id='$regd_id' AND Resp_choice='' AND Mark_review='N'");
$cnt_qnans=mysqli_num_rows($qnans);
$qamr=mysqli_query($con,"SELECT * FROM student_response WHERE Cand_regd_id='$regd_id' AND Resp_choice!='' AND Mark_review='Y'");
$cnt_qamr=mysqli_num_rows($qamr);
$qnamr=mysqli_query($con,"SELECT * FROM student_response WHERE Cand_regd_id='$regd_id' AND Resp_choice='' AND Mark_review='Y'");
$cnt_qnamr=mysqli_num_rows($qnamr);

$wq=mysqli_query($con,"SELECT * FROM exam_ques_set");
$cnt_wq=mysqli_num_rows($wq);
$watq=mysqli_query($con,"SELECT * FROM student_response WHERE Cand_regd_id='$regd_id'");
$cnt_wat=mysqli_num_rows($watq);
$cnt_qnv=$cnt_wq-$cnt_wat;
?>
<center><h3>Your response</h3></center><br />
<table width="100%" cellpadding="10" cellspacing="0" align="center" border="1">
<tr>
<td>Number of attempted question </td><td><?php echo $cnt_qans;?></td>
</tr>
<tr>
<td>Number of un-attempted question </td><td><?php echo $cnt_qnans;?></td>
</tr>
<tr>
<td>Number of question not visited </td><td><?php echo $cnt_qnv;?></td>
</tr>
<tr>
<td>Number of attempted question but marked for review </td><td><?php echo $cnt_qamr;?></td>
</tr>
<tr>
<td>Number of un-attempted question but marked for review</td><td><?php echo $cnt_qnamr;?></td>
</tr>
</table>
<br /><br />
<center><a href="home.php?page=cal_score"><button class="extra">LOG OUT</button></a></center>