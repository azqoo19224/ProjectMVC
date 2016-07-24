<!DOCTYPE html>

  <html>

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Login</title>
      
      <link rel="stylesheet" href="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.css" />
      <script src="jquery-1.9.1.min.js"></script>
      <script src="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.js"></script>
      
    </head>
    
    <body>
      <div data-role="page">
	    	<div data-role="content">
    <form id="form1" style="font-family:DFKai-sb;" name="form1" method="post" action="login">
      <table width="800" border="10" align="center" cellpadding="9" cellspacing="10" bgcolor="#F2F2F2">
        <tr>
          <td colspan="2" align="center" bgcolor="#CCCCCC">
            <font color="#333333">會員系統 - 登入</font>
          </td>
        </tr>
        <tr>
          <td width="80" align="center" valign="baseline">帳號</td>
          <td valign="baseline"><input type="text" size="54" name="txtUserName" id="txtUserName" /></td>
        </tr>
        <tr>
          <td width="80" align="center" valign="baseline">密碼</td>
          <td valign="baseline"><input type="password" size="54" name="txtPassword" id="txtPassword" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center" bgcolor="#CCCCCC">
            
            
        <!--<input type="submit" name="btnOK" id="btnOK" value="登入"/>-->
            <input type="submit" name="btnOK" id="btnOK" value="登入" <?php echo $data;?>/>
            <input type="reset" name="btnReset" id="btnReset" value="重設" />
            <input type="button" name="btnHome" id="btnHome" onclick="location.href='index'" value="回首頁" /> 
            <input type="button" name="btnRegistered" id="btnRegistered" onclick="location.href='registered'"  value="註冊" />
        
           
          </td>
        </tr>
      </table>
    </form>
    </div>
    </div>
    
    </body>
      </html>