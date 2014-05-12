<html>
<head>
<title>Api Send Inquery Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<form method="post" action="ApiSendInquery.php" >
<input type="hidden" name="key" id="key" value="Uggk45hcn98" />
<table>
<thead>
<tr>
<th colspan="2" align="center">Send Inquery</th>
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
<select name="subject" id="subject">
<option value="選択してください" >選択してください</option>
<option value="予約について" >予約について</option>
<option value="レッスン内容について" >レッスン内容について</option>
<option value="Skypeについて" >Skypeについて</option>
<option value="その他DMM英会話サービスについて" >その他DMM英会話サービスについて</option>
</select>
</td>
</tr>

<tr>
<td>Content</td>
<td><textarea name="content" id= rows="8" cols="40"></textarea></td>
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
