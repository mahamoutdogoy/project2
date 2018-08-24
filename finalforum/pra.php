<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<label class="w">Plan :</label>
<select autofocus="" name="plan" required="required">
    <option value="">Select One</option>
    <option value="FREE Account">FREE Account</option>
    <option value="Premium Account Monthly">Premium Account Monthly</option>
    <option value="Premium Account Yearly">Premium Account Yearly</option>
</select>
<br>
<label class="w">First Name :</label><input name="firstname" type="text" placeholder="First Name" required="required" value="<?php echo $_POST['firstname'];?>"><br>
<label class="w">Last Name :</label><input name="lastname" type="text" placeholder="Last Name" required="required" value="<?php echo $_POST['lastname'];?>"><br>
<label class="w">E-mail ID :</label><input name="email" type="email" placeholder="Enter Email" required="required" value="<?php echo $_POST['email'];?>"><br>
<label class="w">Password :</label><input name="password" type="password" placeholder="********" required="required" value="<?php echo $_POST['password'];?>"><br>
<label class="w">Re-Enter Password :</label><input name="confirmpassword" type="password" placeholder="********" required="required" value="<?php echo $_POST['confirmpassword'];?>"><br>
<label class="w">Street Address 1 :</label><input name="strtadd1" type="text" placeholder="street address first" required="required" value="<?php echo $_POST['strtadd1'];?>"><br>
<label class="w">Street Address 2 :</label><input name="strtadd2" type="text" placeholder="street address second"  value="<?php echo $_POST['strtadd2'];?>"><br>
<label class="w">City :</label><input name="city" type="text" placeholder="City" required="required" value="<?php echo $_POST['firstname'];?>"><br>
<label class="w">Country :</label><select autofocus="" id="a1_txtBox1" name="country" required="required" placeholder="select one" value="<?php echo $_POST['country'];?>">
</body>
</html>