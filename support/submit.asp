<!DOCTYPE html>
<html lang="en">
<font face="Times New Roman">
<head>
<meta charset="gbk">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A minecraft server official website.">
<meta name="author" content="TURX in Crystal Computer Studio">
<!--#include file="config.asp" -->
<!--#include file="function.asp" -->
<title>Vast-Light Support</title>
<h1>Complete - Vast-Light World</h1>
<hr />
</head>
<body>
	<center>
	<div align="center">
	<%
		dim ok
		If request.form("TYPE")="offer" Then
			response.write("<img src='offer/success.png'>")
			ok=1
		ElseIf request.form("TYPE")="support" Then
			response.write("<img src='success.png'>")
			ok=1
			Else
			response.write("<img src='fail.png'>")
		End If
		
		If ok=1 Then
			Set rs = Server.CreateObject("ADODB.Recordset")
			rs.Open "select * from data", conn, 1, 3
			rs.AddNew
			rs("mname") = request.form("NAME")
			rs("type") = request.form("TYPE")
			rs("content") = request.form("CONT")
			rs("content_2") = request.form("CONT2")
			rs.Update
		End If
	%>
	</div>
	</center
</body>