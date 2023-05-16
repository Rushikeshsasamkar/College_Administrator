



<html>
<head>
    <title>Student Registration Form</title>

</head>

<?php
error_reporting(E_PARSE);
	$_GET['image'];
	error_reporting(E_PARSE);
	$_GET['enrollment_Id'];
	$_GET['first_name'];
	$_GET['middle_name'];
	$_GET['last_name'];
	$_GET['birthday_day'];
	$_GET['birthday_month'];
	$_GET['birthday_year'];
	$_GET['email_id'];
	$_GET['mobile_number'];
	$_GET['gender'];
	$_GET['address'];
	$_GET['city'];
	$_GET['pin_code'];
	$_GET['state'];
	$_GET['hobby_drawing'];
	$_GET['hobby_singing'];
	$_GET['Hobby_Dancing'];
	$_GET['hobby_cooking'];
	$_GET['hobby_other'];
	$_GET['other_hobby'];
	$_GET['classVIII_board'];
	$_GET['classVIII_percentage'];
	$_GET['classVIII_yrofpassing'];
	$_GET['classIX_board'];
	$_GET['classIX_percentage'];
	$_GET['classIX_yrofpassing'];
	$_GET['classX_board'];
	$_GET['classX_percentage'];
	$_GET['classX_yrofpassing'];
	$_GET['classXII_board'];
	$_GET['classXII_percentage'];
	$_GET['classXII_yrofpassing'];
	$_GET['poly_1st'];
	$_GET['poly_2end'];
	












?>

<body>
<form action="" method="GET">
    <center>
        <h1>STUDENT REGISTRATION FORM</h1>
    </center>

    <table align="center" cellpadding = "10">
	
		<tr>
		<td>ENROLLMENT ID</td>
		<td><input type="text" name="Enrollment_Id" maxlength="10"value="<?php error_reporting(E_PARSE); 
		echo $_GET['enrollment_id']; ?>"/>
		(only Numeric Values)
		</td>
		</tr>
	
		<tr>
        <td>Photo</td>
        <td><input type="file" name="Image"  <img src ="<?php error_reporting(E_PARSE);
		echo $_GET['name'];?>" height="100" width="100" class="img-thumbail" />
		
	
        </td>
        </tr>

        <!----- First Name ---------------------------------------------------------->
        
		
		<br>
		<br>
		
		<tr>
		
            <td>FIRST NAME</td>
            <td><input type="text" name="First_Name" maxlength="30" value="<?php error_reporting(E_PARSE);
			echo $_GET['first_name']; ?>"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Middle Name ---------------------------------------------------------->
        <tr>
            <td>MIDDLE NAME</td>
            <td><input type="text" name="Middle_Name" maxlength="30" value="<?php error_reporting(E_PARSE);
			echo $_GET['middle_name']; ?>"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Last Name ---------------------------------------------------------->
        <tr>
            <td>LAST NAME</td>
            <td><input type="text" name="Last_Name" maxlength="30" value="<?php error_reporting(E_PARSE);
			echo $_GET['last_name']; ?>"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Date Of Birth -------------------------------------------------------->
        <tr>
            <td>DATE OF BIRTH</td>

            <td>
                <select name="Birthday_Day" id="Birthday_Day" value=""/   >



                    <option value="-1">Day</option>

                    <option value="1"
                        <?php
                        if($_GET['birthday_day']=='1') {
                            echo "selected";
                        }
                        ?>

                    >1</option>

                    <option value="2"
                        <?php
                        if($_GET['birthday_day']=='2') {
                            echo "selected";
                        }
                        ?>
                    >2</option>

                    <option value="3"
                        <?php
                        if($_GET['birthday_day']=='3') {
                            echo "selected";
                        }
                        ?>
                    >3</option>

                    <option value="4"
                        <?php
                        if($_GET['birthday_day']=='4') {
                            echo "selected";
                        }
                        ?>

                    >4</option>


                    <option value="5"

                        <?php
                        if($_GET['birthday_day']=='5') {
                            echo "selected";
                        }
                        ?>

                    >5</option>
                    <option value="6"
                        <?php
                        if($_GET['birthday_day']=='6') {
                            echo "selected";
                        }
                        ?>>6</option>

                    <option value="7"
                        <?php
                        if($_GET['birthday_day']=='7') {
                            echo "selected";
                        }
                        ?>>7</option>

                    <option value="8"
                        <?php
                        if($_GET['birthday_day']=='8') {
                            echo "selected";
                        }
                        ?>>8</option>
                    <option value="9"
                        <?php
                    if($_GET['birthday_day']=='9') {
                        echo "selected";
                    }
                    ?>
                    >9</option>
                    <option value="10"
                        <?php
                        if($_GET['birthday_day']=='10') {
                            echo "selected";
                        }
                        ?>

                    >10</option>
                    <option value="11"
                        <?php
                        if($_GET['birthday_day']=='11') {
                            echo "selected";
                        }
                        ?>


                    >11</option>
                    <option value="12"
                        <?php
                        if($_GET['birthday_day']=='12') {
                            echo "selected";
                        }
                        ?>



                    >12</option>

                    <option value="13"
                        <?php
                        if($_GET['birthday_day']=='13') {
                            echo "selected";
                        }
                        ?>


                    >13</option>

                    <option value="14"
                        <?php
                        if($_GET['birthday_day']=='14') {
                            echo "selected";
                        }
                        ?>


                    >14</option>
                    <option value="15"
                        <?php
                        if($_GET['birthday_day']=='15') {
                            echo "selected";
                        }
                        ?>



                    >15</option>
                    <option value="16"

                        <?php
                        if($_GET['birthday_day']=='16') {
                            echo "selected";
                        }
                        ?>




                    >16</option>

                    <option value="17"
                        <?php
                        if($_GET['birthday_day']=='17') {
                            echo "selected";
                        }
                        ?>



                    >17</option>
                    <option value="18"



                    >18</option>
                <option value="19"

                    <?php
                    if($_GET['birthday_day']=='19') {
                        echo "selected";
                    }
                    ?>             <?php
                        if($_GET['birthday_day']=='18') {
                            echo "selected";
                        }
                        ?>




                    >19</option>
                    <option value="20"
                        <?php
                        if($_GET['birthday_day']=='20') {
                            echo "selected";
                        }
                        ?>


                    >20</option>
                    <option value="21"
                        <?php
                        if($_GET['birthday_day']=='21') {
                            echo "selected";
                        }
                        ?>


                    >21</option>

                    <option value="22"


                        if($_GET['birthday_day']=='22') {
                            echo "selected";
                        }
                        ?>


                    >22</option>
                    <option value="23"
                        <?php
                        if($_GET['birthday_day']=='23') {
                            echo "selected";
                        }
                        ?>




                    >23</option>
                    <option value="24"

                        <?php
                        if($_GET['birthday_day']=='24') {
                            echo "selected";
                        }
                        ?>


                    >24</option>
                    <option value="25"

                        <?php
                        if($_GET['birthday_day']=='25') {
                            echo "selected";
                        }
                        ?>


                    >25</option>
                    <option value="26"

                        <?php
                        if($_GET['birthday_day']=='26') {
                            echo "selected";
                        }
                        ?>



                    >26</option>
                    <option value="27"

                        <?php
                        if($_GET['birthday_day']=='27') {
                            echo "selected";
                        }
                        ?>



                    >27</option>
                    <option value="28"
                        <?php
                        if($_GET['birthday_day']=='28') {
                            echo "selected";
                        }
                        ?>



                    >28</option>


                <option value="29"
                    <?php
                    if($_GET['birthday_day']=='29') {
                        echo "selected";
                    }
                    ?>

                    >29</option>
                    <option value="30"

                        <?php
                        if($_GET['birthday_day']=='30') {
                            echo "selected";
                        }
                        ?>

                    >30</option>

                    <option value="31"

                        <?php
                        if($_GET['birthday_day']=='31') {
                            echo "selected";
                        }
                        ?>

                    >31</option>
                </select>

                <select id="Birthday_Month" name="Birthday_Month">
                    <option value="-1">Month:</option>
                    <option value="January"
                        <?php
                        if($_GET["birthday_month"]=="January") {
                            echo "selected";
                        }
                        ?>
                    >Jan</option>

                    <option value="February"
                        <?php
                        if($_GET["birthday_month"]=="February") {
                            echo "selected";
                        }
                        ?>
                    >Feb</option>

                    <option value="March"
                        <?php
                        if($_GET["birthday_month"]=="March") {
                            echo "selected";
                        }
                        ?>
                    >Mar</option>

                    <option value="April"
                        <?php
                        if($_GET["birthday_month"]=="April") {
                            echo "selected";
                        }
                        ?>
                    >Apr</option>

                    <option value="May"
                        <?php
                        if($_GET["birthday_month"]=="May") {
                            echo "selected";
                        }
                        ?>
                    >May</option>

                    <option value="June"
                        <?php
                        if($_GET["birthday_month"]=="June") {
                            echo "selected";
                        }
                        ?>
                    >Jun</option>

                    <option value="July"
                        <?php
                        if($_GET["birthday_month"]=="July") {
                            echo "selected";
                        }
                        ?>
                    >Jul</option>

                    <option value="August"
                        <?php
                        if($_GET["birthday_month"]=="August") {
                            echo "selected";
                        }
                        ?>
                    >Aug</option>

                    <option value="September"
                        <?php
                        if($_GET["birthday_month"]=="September") {
                            echo "selected";
                        }
                        ?>
                    >Sep</option>

                    <option value="October"
                        <?php
                        if($_GET["birthday_month"]=="October") {
                            echo "selected";
                        }
                        ?>
                    >Oct</option>

                    <option value="November"
                        <?php
                        if($_GET["birthday_month"]=="November") {
                            echo "selected";
                        }
                        ?>
                    >Nov</option>

                    <option value="December"

                        <?php
                        if($_GET["birthday_month"]=="December") {
                            echo "selected";
                        }
                        ?>
                    >Dec</option>
                </select>

                <select name="Birthday_Year" id="Birthday_Year">

                    <option value="-1">Year:</option>
                    <option value="2019"
                        <?php
                        if($_GET['birthday_year']=='2019') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2018"
                        <?php
                        if($_GET['birthday_year']=='2018') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2017"
                        <?php
                        if($_GET['birthday_year']=='2017') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2016"
                        <?php
                        if($_GET['birthday_year']=='2016') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2015"
                        <?php
                        if($_GET['birthday_year']=='2015') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2014"
                        <?php
                        if($_GET['birthday_year']=='2014') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2013"
                        <?php
                        if($_GET['birthday_year']=='2013') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2012"
                        <?php
                        if($_GET['birthday_year']=='2012') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2011"
                        <?php
                        if($_GET['birthday_year']=='2011') {
                            echo "selected";
                        }
                        ?>
                    >2011</option>

                    <option value="2010"
                        <?php
                        if($_GET['birthday_year']=='2010') {
                            echo "selected";
                        }
                        ?>
                    >2010</option>

                    <option value="2009"
                        <?php
                        if($_GET['birthday_year']=='2009') {
                            echo "selected";
                        }
                        ?>
                    >2009</option>

                    <option value="2008"
                        <?php
                        if($_GET['birthday_year']=='2008') {
                            echo "selected";
                        }
                        ?>
                    >2008</option>

                    <option value="2007"
                        <?php
                        if($_GET['birthday_year']=='2007') {
                            echo "selected";
                        }
                        ?>
                    >2007</option>

                    <option value="2006"
                        <?php
                        if($_GET['birthday_year']=='2006') {
                            echo "selected";
                        }
                        ?>
                    >2006</option>

                    <option value="2005"
                        <?php
                        if($_GET['birthday_year']=='2005') {
                            echo "selected";
                        }
                        ?>
                    >2005</option>

                    <option value="2004"
                        <?php
                        if($_GET['birthday_year']=='2004') {
                            echo "selected";
                        }
                        ?>
                    >2004</option>

                    <option value="2003"
                        <?php
                        if($_GET['birthday_year']=='2003') {
                            echo "selected";
                        }
                        ?>
                    >2003</option>

                    <option value="2002"
                        <?php
                        if($_GET['birthday_year']=='2002') {
                            echo "selected";
                        }
                        ?>
                    >2002</option>

                    <option value="2001"
                        <?php
                        if($_GET['birthday_year']=='2001') {
                            echo "selected";
                        }
                        ?>
                    >2001</option>

                    <option value="2000"
                        <?php
                        if($_GET['birthday_year']=='2000') {
                            echo "selected";
                        }
                        ?>
                    >2000</option>

                    <option value="1999"
                        <?php
                        if($_GET['birthday_year']=='1999') {
                            echo "selected";
                        }
                        ?>
                    >1999</option>

                    <option value="1998"
                        <?php
                        if($_GET['birthday_year']=='1998') {
                            echo "selected";
                        }
                        ?>
                    >1998</option>

                    <option value="1997"
                        <?php
                        if($_GET['birthday_year']=='1997') {
                            echo "selected";
                        }
                        ?>
                    >1997</option>

                    <option value="1996"
                        <?php
                        if($_GET['birthday_year']=='1996') {
                            echo "selected";
                        }
                        ?>
                    >1996</option>

                    <option value="1995"
                        <?php
                        if($_GET['birthday_year']=='1995') {
                            echo "selected";
                        }
                        ?>
                    >1995</option>

                    <option value="1994"
                        <?php
                        if($_GET['birthday_year']=='1994') {
                            echo "selected";
                        }
                        ?>
                    >1994</option>

                    <option value="1993"
                        <?php
                        if($_GET['birthday_year']=='1993') {
                            echo "selected";
                        }
                        ?>
                    >1993</option>

                    <option value="1992"
                        <?php
                        if($_GET['birthday_year']=='1992') {
                            echo "selected";
                        }
                        ?>
                    >1992</option>

                    <option value="1991"
                        <?php
                        if($_GET['birthday_year']=='1991') {
                            echo "selected";
                        }
                        ?>
                    >1991</option>

                    <option value="1990"
                        <?php
                        if($_GET['birthday_year']=='1990') {
                            echo "selected";
                        }
                        ?>
                    >1990</option>

                    <option value="1989"
                        <?php
                        if($_GET['birthday_year']=='1989') {
                            echo "selected";
                        }
                        ?>
                    >1989</option>

                    <option value="1988"
                        <?php
                        if($_GET['birthday_year']=='1988') {
                            echo "selected";
                        }
                        ?>
                    >1988</option>

                    <option value="1987"
                        <?php
                        if($_GET['birthday_year']=='1987') {
                            echo "selected";
                        }
                        ?>
                    >1987</option>

                    <option value="1986"
                        <?php
                        if($_GET['birthday_year']=='1986') {
                            echo "selected";
                        }
                        ?>
                    >1986</option>

                    <option value="1985"
                        <?php
                        if($_GET['birthday_year']=='1985') {
                            echo "selected";
                        }
                        ?>
                    >1985</option>

                    <option value="1984"
                        <?php
                        if($_GET['birthday_year']=='1984') {
                            echo "selected";
                        }
                        ?>
                    >1984</option>

                    <option value="1983"
                        <?php
                        if($_GET['birthday_year']=='1983') {
                            echo "selected";
                        }
                        ?>
                    >1983</option>

                    <option value="1982"
                        <?php
                        if($_GET['birthday_year']=='1982') {
                            echo "selected";
                        }
                        ?>
                    >1982</option>

                    <option value="1981"
                        <?php
                        if($_GET['birthday_year']=='1981') {
                            echo "selected";
                        }
                        ?>
                    >1981</option>

                    <option value="1980"
                        <?php
                        if($_GET['birthday_year']=='1980') {
                            echo "selected";
                        }
                        ?>
                    >1980</option>
                </select>
            </td>
        </tr>

        <!----- Email Id ---------------------------------------------------------->
        <tr>
            <td>EMAIL ID</td>
            <td><input type="text" name="Email_Id" maxlength="100" value="<?php echo $_GET['email_id']; ?>"/>
        </tr>

        <!----- Mobile Number ---------------------------------------------------------->
        <tr>
            <td>MOBILE NUMBER</td>
            <td>
                <input type="text" name="Mobile_Number" maxlength="10" value="<?php echo $_GET['mobile_number']; ?>" />
                (10 digit number)
            </td>

        </tr>

        <!----- Gender ----------------------------------------------------------->
        <tr>
            <td>GENDER</td>
            <td>
                Male <input type="radio" name="Gender" value="Male"
                    <?php
                    if($_GET['gender']=="Male") {
                        echo "checked";
                    }
                    ?>
                />
                Female <input type="radio" name="Gender" value="Female" 
				<?php
                    if($_GET['gender']=="Female") {
                        echo "checked";
                    }
                    ?>
			    />
            </td>
        </tr>

        <!----- Address ---------------------------------------------------------->
        <tr>
            <td>ADDRESS <br /><br /><br /></td>
            <td><textarea name="Address" rows="4" cols="30" >
			<?php echo $_GET['address']; ?>
			</textarea></td>
        </tr>

        <!----- City ---------------------------------------------------------->
        <tr>
            <td>CITY</td>
            <td><input type="text" name="City" maxlength="30" value="<?php echo $_GET['city']; ?>" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Pin Code ---------------------------------------------------------->
        <tr>
            <td>PIN CODE</td>
            <td><input type="text" name="Pin_Code" maxlength="6" value="<?php echo $_GET['pin_code']; ?>"/>
                (6 digit number)
            </td>
        </tr>

        <!----- State ---------------------------------------------------------->
        <tr>
            <td>STATE</td>
            <td><input type="text" name="State" maxlength="30" value="<?php echo $_GET['state']; ?>" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Country ---------------------------------------------------------->
        <tr>
            <td>COUNTRY</td>
            <td><input type="text" name="Country" value="India" readonly="readonly" /></td>
        </tr>

        <!----- Hobbies ---------------------------------------------------------->

        <tr>
            <td>HOBBIES <br /><br /><br /></td>

            <td>
                Drawing
                <input type="checkbox" name="Hobby_Drawing" value="Drawing"
				<?php
                    if($_GET['hobby_drawing']=="Drawing") {
                        echo "checked";
                    }
                    ?>
				/>
                Singing
                <input type="checkbox" name="Hobby_Singing" value="Singing"
				<?php
                    if($_GET['hobby_singing']=="Singing") {
                        echo "checked";
                    }
                    ?>
				/>
                Dancing
                <input type="checkbox" name="Hobby_Dancing" value="Dancing"
					<?php
                    if($_GET['hobby_dancing']=="Dancing") {
                        echo "checked";
                    }
                    ?>
				/>
                Sketching
                <input type="checkbox" name="Hobby_Cooking" value="Cooking" 
				<?php
                    if($_GET['hobby_cooking']=="Cooking") {
                        echo "checked";
                    }
                    ?>
				/>
                <br />
                Others
                <input type="checkbox" name="Hobby_Other" value="Other"
				<?php
                    if($_GET['hobby_other']=="Other") {
                        echo "checked";
                    }
                    ?>
				>
                <input type="text" name="Other_Hobby" maxlength="30" value="<?php echo $_GET['other_hobby']; ?>"/>
            </td>
        </tr>

        <!----- Qualification---------------------------------------------------------->
        <tr>
            <td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>

            <td>
                <table>

                    <tr>
                        <td align="center"><b>Sl.No.</b></td>
                        <td align="center"><b>Examination</b></td>
                        <td align="center"><b>Board</b></td>
                        <td align="center"><b>Percentage</b></td>
                        <td align="center"><b>Year of Passing</b></td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Class VIII</td>
                        <td><input type="text" name="ClassVIII_Board" maxlength="30" value="<?php echo $_GET['classVIII_board']; ?>"/></td>
                        <td><input type="text" name="ClassVIII_Percentage" maxlength="30" value="<?php echo $_GET['classVIII_percentage']; ?>"/></td>
                        <td><input type="text" name="ClassVIII_YrofPassing" maxlength="30" value="<?php echo $_GET['classVIII_yrofpassing']; ?>"/></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Class IX</td>
                        <td><input type="text" name="ClassIX_Board" maxlength="30" value="<?php echo $_GET['classIX_board']; ?>"/></td>
                        <td><input type="text" name="ClassIX_Percentage" maxlength="30" value="<?php echo $_GET['classIX_percentage']; ?>" /></td>
                        <td><input type="text" name="ClassIX_YrofPassing" maxlength="30" value="<?php echo $_GET['classIX_yrofpassing']; ?>"/></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Class X</td>
                        <td><input type="text" name="ClassX_Board" maxlength="30" value="<?php echo $_GET['classX_board']; ?>" /></td>
                        <td><input type="text" name="ClassX_Percentage" maxlength="30" value="<?php echo $_GET['classX_percentage']; ?>"/></td>
                        <td><input type="text" name="ClassX_YrofPassing" maxlength="30" value="<?php echo $_GET['classX_yrofpassing']; ?>"/></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Class XII</td>
                        <td><input type="text" name="ClassXII_Board" maxlength="30" value="<?php echo $_GET['classXII_board']; ?>"/></td>
                        <td><input type="text" name="ClassXII_Percentage" maxlength="30" value="<?php echo $_GET['classXII_percentage']; ?>" /></td>
                        <td><input type="text" name="ClassXII_YrofPassing" maxlength="30" value="<?php echo $_GET['classXII_yrofpassing']; ?>" /></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td align="center">(10 char max)</td>
                        <td align="center">(upto 2 decimal)</td>
                    </tr>
                </table>

            </td>
        </tr>

        <!----- Course ---------------------------------------------------------->
        <tr>
            <td>COURSES<br />APPLIED FOR</td>
            <td>
                POLY 1st Year
                <input type="radio" name="Poly_1st" value="Poly1st Year"
				<?php
                    if($_GET['poly_1st']=="Poly1st Year") {
                        echo "checked";
                    }
                    ?>
				>
                POLY 2end Year
                <input type="radio" name="Poly_2end" value="Poly2end Year"
				<?php
                    if($_GET['poly_2end']=="Poly2end Year") {
                        echo "checked";
                    }
                    ?>
				>

            </td>
        </tr>

        <!----- Submit and Reset ------------------------------------------------->
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit"  value="Update"/>
                <input type="reset" value="Reset"/>
            </td>
        </tr>
    </table>

</form>

<?php

	error_reporting(E_PARSE);
	$image=$_GET['image'];
	error_reporting(E_PARSE);
	$enrollment_id=$_GET['enrollment_id'];
	$first_name=$_GET['first_name'];
	$middle_name=$_GET['middle_name'];
	$last_name=$_GET['last_name'];
	$birthday_day=$_GET['birthday_day'];
	$birthday_month=$_GET['birthday_month'];
	$birthday_year=$_GET['birthday_year'];
	$email_id=$_GET['email_id'];
	$mobile_number=$_GET['mobile_number'];
	$gender=$_GET['gender'];
	$address=$_GET['address'];
	$city=$_GET['city'];
	$pin_code=$_GET['pin_code'];
	$state=$_GET['state'];
	$hobby_drawing=$_GET['hobby_drawing'];
	$hobby_singing=$_GET['hobby_singing'];
	$hobby_Dancing=$_GET['hobby_Dancing'];
	$hobby_cooking=$_GET['hobby_cooking'];
	$hobby_other=$_GET['hobby_other'];
	$other_hobby=$_GET['other_hobby'];
	$classVIII_board=$_GET['classVIII_board'];
	$classVIII_percentage=$_GET['classVIII_percentage'];
	$classVIII_yrofpassing=$_GET['classVIII_yrofpassing'];
	$classIX_board=$_GET['classIX_board'];
	$classIX_percentage=$_GET['classIX_percentage'];
	$classIX_yrofpassing=$_GET['classIX_yrofpassing'];
	$classX_board=$_GET['classX_board'];
	$classX_percentage=$_GET['classX_percentage'];
	$classX_yrofpassing=$_GET['classX_yrofpassing'];
	$classXII_board=$_GET['classXII_board'];
	$classXII_percentage=$_GET['classXII_percentage'];
	$classXII_yrofpassing=$_GET['classXII_yrofpassing'];
	$poly_1st=$_GET['poly_1st'];
	$poly_2end=$_GET['poly_2end'];
	

if($_GET['submit'])
{
	
	echo "Button Pressed";
	
	$link = mysqli_connect("localhost", "root", "", "registration");
	
		#$query = "UPDATE STUDENT_RECORD SET FIRST_NAME='$first_name' WHERE ENROLLMENT_ID='$enrollment_id' ";
	
	$query = "UPDATE `student_record` SET `Image`='$image', `First_Name`='$first_name',`Middle_Name`='$middle_name',`Last_Name`='$last_name', `Birthday_Day`='$birthday_day',`Birthday_Month`='$birthday_month',`Birthday_Year`='$birthday_year',`Email_Id`='$email_id',`Mobile_Number`='$mobile_no',`Gender`='$gender',`Address`='$address',`City`='$city',`Pin_Code`='$pin_code',`State`='$state',`Hobby_Drawing`='$hobby_drawing',`Hobby_Singing`='$hobby_singing',`Hobby_Dancing`='$hobby_dancing',`Hobby_Cooking`='$hobby_cooking',`Hobby_Other`='$hobby_other',`Other_Hobby`='$other_hobby',`ClassVIII_Board`='$classVIII_board',`ClassVIII_Percentage`='$classVIII_percentage',`ClassVIII_YrofPassing`='$classVIII_yrofpassing',`ClassIX_Board`='$classIX_board',`ClassIX_Percentage`='$classIX_percentage',`ClassIX_YrofPassing`='$classIX_yrofpassing',`ClassX_Board`='$classX_board',`ClassX_Percentage`='$classX_percentage',`ClassX_YrofPassing`='$classX_yrofpassing',`ClassXII_Board`='$classXII_board',`ClassXII_Percentage`='$classXII_percentage',`ClassXII_YrofPassing`='$classXII_yrofpassing',`Poly_1st`='$poly_1st',`Poly_2end`='$poly_2end' WHERE `Enrollment_Id`='$enrollment_id' ";
	
	
	
	$data = mysqli_query($link, $query); 
	if($data)
	{
		echo "Record Updated Sucessfully";
	}
	else{
		
		echo "Record Not Update";
	}
}
else
{
	
	
	echo "Button not Pressed";
}

?>

</body>
</html>
