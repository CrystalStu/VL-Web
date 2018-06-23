<%
	on error resume next
	set conn=server.CreateObject("ADODB.Connection") 
	Dim conn, ConnStr
	ConnStr = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & Server.MapPath(db)
	conn.Open ConnStr
	if err.number<>0 then
		response.Write "<b>ERROR!</b>"
		response.Write "<hr />" & "ERR"& err.number & ": " & err.Description
		response.End
	end if
	on error goto 0

sub CloseConn()
	on error resume next
	conn.Close 
	set conn=nothing
	on error goto 0
end sub
%>