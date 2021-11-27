<!doctype html>

<html>

	<head>
		<title>Add user</title>
		<meta charset="utf-8">
	</head>


<body>

<form name="employment" action="send.php" method="post" >
 <table width="100%" bordercolor="Orange" border="4" cellspacing="4" cellpadding="6">
    <tr>
      <td>Add new User</td>
      <td></td>
    </tr>
    <tr>
      <td>First Name</td>
      <td><input type="text" name="fname" maxlegth="50"/></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type="text" name="lname" maxlegth="50"/></td>
    </tr>
    <tr>
      <td>Position</td>
      <td>
        <select name="position">
          <option value="AC">Manager</option>
          <option value="RE">Receptionist</option>
          <option value="AD">Customer</option>
          <option value="SU">Admin</option>
        </select>
    </td>
    </tr>
    <tr>
      <td>Experience Level</td>
      <td>
        <select name="experience">
          <option value="EL">Entry Level</option>
          <option value="RE">Some Experienced</option>
          <option value="VE">Very Experienced</option>
         
        </select>
      </td>
    </tr>
    <tr>
      <td>Job type</td>
      <td>
        <input type="checkbox" name="ft" />Full Time
        <input type="checkbox" name="pt" />Part Time
        <input type="checkbox" name="ct" />Contract

      </td>
    </tr>
    <tr>
      <td>Emplyment Status</td>
      <td>
        <input type="radio" name="estatus" value="employed" />Employed
        <input type="radio" name="estatus" value="Unemployed" />Unemployed
        <input type="radio" name="estatus" value="student" />Student
      </td>
    </tr>
    <tr>
      <td>Additional Comments</td>
      <td>
        <textarea name="comments" cols="45" rows="5"></textarea>
      </td>
    </tr>
    <tr>
      <td> 
      </td>
      <td>
        <input type="submit" name="submit" value="Submit" />
        <input type="reset" name="reset" value="Reset" />
      </td>
    </tr>
  </table>
</form>
<center>
		<a href="home.php"><font face="Satisfy" size ="5" color="Blue">Back</font> </a>&nbsp;
    </center>

</body>
</html>
