<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     
     
     <!--<link rel="stylesheet"-->
	    <!--  href="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.css" />-->
     <!-- <script src="javascripts/jquery-1.9.1.min.js"></script>-->
     <!-- <script src="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.js"></script>-->
   		<!--<script type="text/javascript" src="jquery.js"></script>-->
	  <script src="js/ajaxR.js"></script>
</head>
<body>
      <div data-role="page">
	    	<div data-role="content">
      <form id="form1" style="font-family:DFKai-sb;" name="form1" method="post" action="registered/btnOK">
        <table width="800" border="9" align="center" cellpadding="10" cellspacing="10" bgcolor="#f2f2f2">
          <tr>
            <td colspan="2" align="center" bgcolor="#CCCCCC">
              <font color="#333333">會員系統 - 註冊</font>
            </td>
          </tr>
          <tr>
            <td width="50" align="center" valign="baseline">輸入帳號</td>
            <td valign="baseline"><input type="text"  size='54'name="txtmemberName" id="txtmemberName" /></td>

          </tr>
          <tr>
            <td width="80" align="center" valign="baseline">輸入密碼</td>
            <td valign="baseline"><input type="password" size='54' name="txtmemberPassword" id="txtmemberPassword" /></td>
          </tr>
          <tr>
            <div style = "display:none">
            <td colspan="2" size='54'id='txtN' align="center" valign="baseline">請輸入帳號及密碼</td>
            </div>
          </tr>
          <tr>
            <td colspan="2" align="center" bgcolor="#CCCCCC">
             
              <input type="submit" name="btnROK" id="btnROK" value="註冊" />
              <input type="reset" name="btnReset" id="btnReset" value="重設" />
              <input type="button" name="btnCancel" id="btnCancel" onclick="location.href='login'"  value="取消" />
             
            </td>
          </tr>
        </table>
      </form>
      </div>
      </div>
</body>
</html>