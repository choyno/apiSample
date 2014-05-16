<html>
<head>
<title>Api Send Book Form</title>
</head>
<body>

<form method="post" action="SpApiSendBook.php" >
<input type="hidden" name="key" id="key" value="Uggk45hcn98" />
<table>
<thead>
<tr>
<th colspan="2" align="center">Send Book</th>
</tr>
</thead>
<tbody>
<tr>
<td>member_id</td>
<td> <input type="text" name="member_id" id="member_id" /></td>
</tr>
<tr>
<td>lesson_id</td>
<td><input type="text" name="lesson_id" id="lesson_id" /></td>
</tr>
<tr>
<td>is_use_transfer_ticket</td>
<td><input type="text" name="is_use_transfer_ticket" id="is_use_transfer_ticket" value="-1" /></td>
</tr>
<tr>
<td>student_wish</td>
<td><textarea name="student_wish" id= rows="8" cols="40"></textarea></td>
</tr>
<tr>
<td>member_plan</td>
<td><select name="member_plan" id="member_plan">
<option value="free">free</option>
<option value="lesson1">lesson1</option>
<option value="lesson2">lesson2</option>
<option value="lesson3">lesson3</option>
</select>
</td>
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
