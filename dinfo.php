<html>
<head>
<title>Blood Donour form</title>

</head>
 
<body style="background-color:powderblue;">

<form action = "" method = "post">
<h3>Blood Donation Form</h3>

 
<table align="left" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="first_name" maxlength="30"/>
<br>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="last_name" maxlength="30"/>
<br>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
 
<td>
<input type="date" name="bday">
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="emailid" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobnum" maxlength="10" />
<br>
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="gender" value="Male" />
Female <input type="radio" name="gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="city" maxlength="30" />
<br>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="pincode" maxlength="6" />
<br>
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="state" maxlength="30" />
<br>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td><strong>COUNTRY</strong></td>
<td><input type="text" name="country" value="India" readonly="readonly" /></td>
</tr>
<!----- Occupation ---------------------------------------------------------->
<tr>
<td> <strong>Occupation</strong></td>
<td><input type="text" name="occupation" /></td>
</tr>
<!----- Blood Group ---------------------------------------------------------->
<td><strong>Blood Group *</strong></td>
    <td><select name="blood" size="1" id="blood">
  <option value="">--select--</option>
  <option>O+</option>
  <option>O-</option>
  <option>A+</option>
  <option>A-</option>
  <option>B+</option>
  <option>B-</option>
  <option>AB+</option>
  <option>AB-</option>
  <option>UNKNOWN</option>
</select></td>
<!----- Weight ---------------------------------------------------------->
<tr>
<td> <strong>Weight</strong></td>
<td><input type="text" name="weight" /></td>
</tr>
<!----- Height---------------------------------------------------------->
<tr>
<td> <strong>Height</strong></td>
<td><input type="text" name="height" /></td>
</tr>
 <!----- Last donation date -------------------------------------------------------->
<tr>
<td>Date of last blood donation :</td>
 
<td>
<input type="date" name="lastdonation">
</td>
</tr>
<tr>
  <td><h2>1 HEALTH ASSESSMENT</h2>
Please tick the appropriate answer to each question</tr></td>
<!----- Question Answers ----------------------------------------------------------->
<!----- Question 1 ----------------------------------------------------------->
<tr>

<td>1.1   Are you feeling well and in good health today ?</td>

<td>  
YES <input type="radio" name="q1.1" value="yes" />
 
NO <input type="radio" name="q1.1" value="no" />
</td>
</tr>

 
<!----- Question 2 ----------------------------------------------------------->
<tr>
<td>1.2   in the last 4 hours, have you had a meal or snack?</td>
<td>  
YES <input type="radio" name="q1.2" value="yes" />
 
NO <input type="radio" name="q1.2" value="no" />
</td>
</tr>

<!----- Question 3 ----------------------------------------------------------->
<tr>
<td> 1.3    Have you already given blood in the last 3 Month?</td>
 
<td>  
YES <input type="radio" name="q1.3" value="yes" />
 
NO <input type="radio" name="q1.3" value="no" />
</td>
</tr>

<!----- Question 4 ----------------------------------------------------------->
<tr>
<td>1.4   Have you got a chesty cough, sore throat or active
cold sore?</td>
 
<td>  
YES <input type="radio" name="q1.4" value="yes" />
 
NO <input type="radio" name="q1.4" value="no" />
</td>
</tr>

<!----- Question 5----------------------------------------------------------->
<tr>
<td>1.5   Are you pregnant or breastfeeding?</td>
 
<td>  
YES <input type="radio" name="q1.5" value="yes" />
 
NO <input type="radio" name="q1.5" value="no" />
</td>
</tr>
<!----- Question 6----------------------------------------------------------->
<tr>
<td><h3>1.6   Do you have or have you ever had:</h3></td>
</tr>
<tr>
<td>a)    Chest pains, heart disease/surgery or a stroke?</td>
<td>  
YES <input type="radio" name="q1.6a" value="yes" />

NO <input type="radio" name="q1.6a" value="no" />
</td>
</tr>
<tr>
<td>b)    Lung disease, tuberculosis or asthma?</td>
<td>  
YES <input type="radio" name="q1.6b" value="yes" />

NO <input type="radio" name="q1.6b" value="no" />
</td>
</tr>

<tr>
<td>c)    Cancer, a blood disease, an abnormal bleeding
disorder,<br> &nbsp;&nbsp;&nbsp; or a bleeding gastric ulcer or duodenal
ulcer?</td>
<td>  
YES <input type="radio" name="q1.6c" value="yes" />

NO <input type="radio" name="q1.6c" value="no" />
</td>
</tr>

<tr>
<td>d)    Diabetes, thyroid disease, kidney disease,
epilepsy (fits)?</td>
<td>  
YES <input type="radio" name="q1.6d" value="yes" />

NO <input type="radio" name="q1.6d" value="no" />
</td>
</tr>

<tr>
<td>e)    Chagas disease, babesiosis, HTLVI/II or any<br>
other chronic infectious disease?</td>
<td>  
YES <input type="radio" name="q1.6e" value="yes" />

NO <input type="radio" name="q1.6e" value="no" />
</td>
</tr>

<!----- Question 7----------------------------------------------------------->
 
<tr>
<td>1.7)    In the last 7 days, have you seen a doctor, dentist<br>
or any other healthcare professional or are you<br>
waiting to see one (except for routine screening
appointments)?</td>
<td>  
YES <input type="radio" name="q1.7" value="yes" />

NO <input type="radio" name="q1.7" value="no" />
</td>
</tr>
 <!----- Question 8----------------------------------------------------------->
<tr>
<td><h3>1.8   In the past 12 months:</h3></td>
</tr>
<tr>
<td>a)    Have you been ill, received any treatment or taken<br>
any medication?</td>
<td>  
YES <input type="radio" name="q1.8a" value="yes" />

NO <input type="radio" name="q1.8a" value="no" />
</td>
</tr>
<tr>
<td>b)    Have you been under a doctor care, undergone<br>
surgery, or a diagnostic procedure, suffered a<br>
major illness, or been involved in a serious
accident?</td>
<td>  
YES <input type="radio" name="q1.8b" value="yes" />

NO <input type="radio" name="q1.8b" value="no" />
</td>
</tr>
<!----- Question 9----------------------------------------------------------->
<tr>
<td><h3>1.9  Have you ever had yellow jaundice<br> (excluding
jaundice at birth), hepatitis or liver disease or <br>a
positive test for hepatitis?</h3></td>
<td>  
YES <input type="radio" name="q1.9" value="yes" />

NO <input type="radio" name="q1.9" value="no" />
</td>
</tr>
<tr>
<td>a)    In the past 12 months, have you had close<br>
contact with a person with yellow jaundice or<br>
viral hepatitis, or have you been given a
hepatitis B vaccination?</td>
<td>  
YES <input type="radio" name="q1.9a" value="yes" />

NO <input type="radio" name="q1.9a" value="no" />
</td>
</tr>
<tr>
<td>b)    Have you ever had hepatitis B or hepatitis C or<br>
think you may have hepatitis now?</td>
<td>  
YES <input type="radio" name="q1.9b" value="yes" />

NO <input type="radio" name="q1.9b" value="no" />
</td>
</tr>

<tr>
<td>c)    In the past 12 months, have you been tattooed,<br>
had ear or body piercing, acupuncture,<br>
circumcision or scarification, cosmetic treatment?</td>
<td>  
YES <input type="radio" name="q1.9c" value="yes" />

NO <input type="radio" name="q1.9c" value="no" />
</td>
</tr>
<!----- Question 10----------------------------------------------------------->
 
<tr>
  <td>1.10)    In the past 12 months, have you or your sexual<br>
partner received a blood transfusion?</td>
<td>  
YES <input type="radio" name="q1.10" value="yes" />

NO <input type="radio" name="q1.10" value="no" />
</td>
</tr>

<!----- Question 11----------------------------------------------------------->
 
<tr>
  <td>1.11)    Have you ever had malaria or an unexplained fever<br>
associated with travel?</td>
<td>  
YES <input type="radio" name="q1.11" value="yes" />

NO <input type="radio" name="q1.11" value="no" />
</td>
</tr>
<tr>
  <!----- Risk Assesment ------------------------------------------------->
  <td><h2>2 RISK ASSESSMENT</h2>
Please tick the appropriate answer to each question</tr></td>

<tr>
  <td>2.1)    Have you ever been tested for HIV?</td>
<td>  
YES <input type="radio" name="q2.1" value="yes" />

NO <input type="radio" name="q2.1" value="no" />
</td>
</tr>

<tr>
  <td>2.2)    Have you ever had casual, oral or anal sex with<br>
someone whose background you do not know,<br>
with or without a condom?</td>
<td>  
YES <input type="radio" name="q2.2" value="yes" />

NO <input type="radio" name="q2.2" value="no" />
</td>
</tr>

<tr>
  <td>2.3)    Have you suffered from a sexually transmitted<br>
disease (STD): e.g. syphilis, gonorrhoea, genital<br>
herpes, genital ulcer, VD, or ‘drop’?</td>
<td>  
YES <input type="radio" name="q2.3" value="yes" />

NO <input type="radio" name="q2.3" value="no" />
</td>
</tr>


<tr>
  <td>2.4)    Have you ever injected yourself or been injected<br>
with illegal or non-prescribed drugs including<br>
body-building drugs or cosmetics (even if this was<br>
only once or a long time ago)?</td>
<td>  
YES <input type="radio" name="q2.4" value="yes" />

NO <input type="radio" name="q2.4" value="no" />
</td>
</tr>

 <!----- 3 DECLARATION ------------------------------------------------->
 <td><h2>3 DECLARATION</h2>
 Please do not Submit until you have answered<br> all the questions and read
the declaration below.</tr></td>
<td><h5>a)    I confirm that, to the best of my knowledge, I have answered all the<br>
questions accurately and I consider my blood safe for transfusion<br>
to a patient.</h5>
<h5>b)   I understand that any wilful misrepresentation of facts could<br>
endanger my health or that of patients receiving my blood and may<br>
lead to litigation. I am aware that my blood will be screened for,<br>
among others, HIV, hepatitis B, hepatitis C and syphilis.<br> I
understand that these screening tests are not diagnostic and<br>
may yield false-positive results. If any of the tests give a reactive<br>
result, I will be contacted using the information I have provided,<br>
and offered counselling.<br>
<br>
c)    I understand the blood donation process, and I have been<br>
counseled regarding the importance of safe blood donation.<br>
<br>
d)    I confirm that I am over the age of 18 years.<br>
<br>
e)    I undertake that should there be any reason for my blood to<br>
be deemed unsafe for use at any stage, I will inform the Blood<br>
Transfusion Service.</h5>
</td>

<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>



 

</form>
 
</body>
</html>
