<html>
<head>
<title>Api Send Evaluation Form</title>
</head>
<body>

<form method="post" action="ApiSendEvaluation.php" >
<input type="hidden" name="key" id="key" value="Uggk45hcn98" />
<table>
<thead>
<tr>
<th colspan="2" align="center">Send Evaluation</th>
</tr>
</thead>
<tbody>
<tr>
<td>member_id</td>
<td> <input type="text" name="member_id" id="member_id" /></td>
</tr>
<tr>
<td>book_id</td>
<td><input type="text" name="book_id" id="book_id" /></td>
</tr>
<tr>
<td>evaluation</td>
<td><input type="text" name="evaluation" id="evaluation" value="-1" /></td>
</tr>
<tr>
<td>evaluation_comment</td>
<td><textarea name="evaluation_comment" id= rows="8" cols="40"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" id="send_book" value="Send Book" />
</td>
</tr>

</tbody>
 </table>

</form>


</body>
</html>