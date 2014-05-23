<html>
<head>
<title>Api Send Inquiry Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<form method="post" action="SpApiSendInquiry.php" >
<input type="hidden" name="key" id="key" value="Uggk45hcn98" />
<table>
<thead>
<tr>
<th colspan="2" align="center">Send Inquiry</th>
</tr>
</thead>
<tbody>
<tr>
<td>member_id</td>
<td> <input type="text" name="member_id" id="member_id" /></td>
</tr>
<tr>
<td>title</td>
<td>
<select name="subject_id" id="subject_id">
<option value="1" >選択してください</option>
<option value="2" >予約について</option>
<option value="3" >レッスン内容について</option>
<option value="4" >Skypeについて</option>
<option value="5" >その他DMM英会話サービスについて</option>
</select>
</td>
</tr>

<tr>
<td>Message</td>
<td><textarea name="message" id= rows="8" cols="40"></textarea></td>
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
