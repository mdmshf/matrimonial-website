<style type="text/css">
        .pga { width: 100%;}
        
</style>
<style type="text/css">
        <style type="text/css">
        ul {list-style-type: none; }
        li {padding: 0 0 15px 0;}
    
        .basic{display:table; width:50%;background-color: #edf9f3;margin:auto;padding-top: 20px;}
        .education {display:table; width:50%;background-color: #edf9f3;margin:auto;padding-top: 20px;}
       body{background-color: lightgrey;} 
        h3{ text-align:center;}
        h2{ text-align:center;}
    </style>
<link rel="stylesheet" type="text/css" href="form.css">
<body style="margin: 0px;font-family: sans-serif;">
<div class = "pga">
<?php
include 'init.php';
if(!logged_in())
{
    header('Location: index.php');
    exit();
}
include 'template/header.php';
?>
    
<?php
if(isset($_POST['gender'],$_POST['agefrom'],$_POST['ageto'],$_POST['heightfrom'],$_POST['heightto'],$_POST['community'],$_POST['state'],$_POST['maritalstatus'],$_POST['mothertongue'],$_POST['edu'],$_POST['course'],$_POST['income'],$_POST['occupation']))
{  
    $gender       = $_POST['gender'];
    $agefrom     = $_POST['agefrom'];
    $ageto   = $_POST['ageto'];
    $heightto    = $_POST['heightto'];
    $heightfrom     = $_POST['heightfrom'];
    $community    = $_POST['community'];
    $state      = $_POST['state'];
    $maritalstatus     = $_POST['maritalstatus'];
    $mothertongue     = $_POST['mothertongue'];
    $edu      = $_POST['edu'];
    $course        = $_POST['course'];
    $income         =$_POST['income'];
    $occupation      =$_POST['occupation'];
    $errors=array();
    
    /*if(empty($e) || empty($name) || empty($password) || empty($city) || empty($mob_no) || empty($profile) || 
    empty($gender) || empty($religion) || empty($day) || empty($month) || empty($year))
    {
        if(empty($email)) echo 1;
        if(empty($name)) echo 2;
        if(empty($password)) echo 3;
        if(empty($city)) echo 4;
        if( empty($mob_no) ) echo 5;
        if(empty($profile)) echo 6;
        if(empty($gender)) echo 7;
        if(empty($religion)) echo 8;
        if( empty($day)) echo 9;
        if(empty($month)) echo 10;
        if(empty($year)) echo 11;
        $errors[]= 'All fields required';
    }*/
    if(!empty($errors))
    {
        foreach($errors as $error)
            {
                echo $error,'<br/>';
            }
    }
    else
    {
        //echo $profile,$name,$gender,$day,$month,$year,$religion,$city,$mob_no,$email;
        $preference = preference($gender,$agefrom,$ageto,$heightfrom,$heightto,$maritalstatus,$community,$mothertongue,
        $state,$edu,$course,$occupation,$income);
        if($preference !==0)
        $_SESSION['user_id'] = $preference;
        //echo $_SESSION['user_id'];
        //echo $preference;
        //header('Location: pre_result.php');
        //exit();
    }
}

?>  
<br>
    
    <form action="" method="post">
    
    <div class="basic">
    <div><h3>Partner Preference</h3></div>
    <ul>
    <li><label for="I'm looking for">I'm looking for:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="gender" id="gender">
    <option value="" label="Select" selected="selected">Select</option>
    <option value="Female" label="Woman">Woman</option>
    <option value="Male" label="Man">Man</option>
    </select></li>
    <li><label for="Aged">Aged: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="agefrom" id="agefrom">
    <option value="18" label="18">18</option>
    <option value="19" label="19">19</option>
    <option value="20" label="20" selected="selected">20</option>
    <option value="21" label="21">21</option>
    <option value="22" label="22">22</option>
    <option value="23" label="23">23</option>
    <option value="24" label="24">24</option>
    <option value="25" label="25">25</option>
    <option value="26" label="26">26</option>
    <option value="27" label="27">27</option>
    <option value="28" label="28">28</option>
    <option value="29" label="29">29</option>
    <option value="30" label="30">30</option>
    <option value="31" label="31">31</option>
    <option value="32" label="32">32</option>
    <option value="33" label="33">33</option>
    <option value="34" label="34">34</option>
    <option value="35" label="35">35</option>
    <option value="36" label="36">36</option>
    <option value="37" label="37">37</option>
    <option value="38" label="38">38</option>
    <option value="39" label="39">39</option>
    <option value="40" label="40">40</option>
    <option value="41" label="41">41</option>
    <option value="42" label="42">42</option>
    <option value="43" label="43">43</option>
    <option value="44" label="44">44</option>
    <option value="45" label="45">45</option>
    <option value="46" label="46">46</option>
    <option value="47" label="47">47</option>
    <option value="48" label="48">48</option>
    <option value="49" label="49">49</option>
    <option value="50" label="50">50</option>
    <option value="51" label="51">51</option>
    <option value="52" label="52">52</option>
    <option value="53" label="53">53</option>
    <option value="54" label="54">54</option>
    <option value="55" label="55">55</option>
    <option value="56" label="56">56</option>
    <option value="57" label="57">57</option>
    <option value="58" label="58">58</option>
    <option value="59" label="59">59</option>
    <option value="60" label="60">60</option>
    <option value="61" label="61">61</option>
    <option value="62" label="62">62</option>
    <option value="63" label="63">63</option>
    <option value="64" label="64">64</option>
    <option value="65" label="65">65</option>
    <option value="66" label="66">66</option>
    <option value="67" label="67">67</option>
    <option value="68" label="68">68</option>
    <option value="69" label="69">69</option>
    <option value="70" label="70">70</option>
    <option value="71" label="71">71</option>
    </select>
    to
    <select name="ageto" id="ageto">
    <option value="18" label="18">18</option>
    <option value="19" label="19">19</option>
    <option value="20" label="20">20</option>
    <option value="21" label="21">21</option>
    <option value="22" label="22">22</option>
    <option value="23" label="23">23</option>
    <option value="24" label="24">24</option>
    <option value="25" label="25" selected="selected">25</option>
    <option value="26" label="26">26</option>
    <option value="27" label="27">27</option>
    <option value="28" label="28">28</option>
    <option value="29" label="29">29</option>
    <option value="30" label="30">30</option>
    <option value="31" label="31">31</option>
    <option value="32" label="32">32</option>
    <option value="33" label="33">33</option>
    <option value="34" label="34">34</option>
    <option value="35" label="35">35</option>
    <option value="36" label="36">36</option>
    <option value="37" label="37">37</option>
    <option value="38" label="38">38</option>
    <option value="39" label="39">39</option>
    <option value="40" label="40">40</option>
    <option value="41" label="41">41</option>
    <option value="42" label="42">42</option>
    <option value="43" label="43">43</option>
    <option value="44" label="44">44</option>
    <option value="45" label="45">45</option>
    <option value="46" label="46">46</option>
    <option value="47" label="47">47</option>
    <option value="48" label="48">48</option>
    <option value="49" label="49">49</option>
    <option value="50" label="50">50</option>
    <option value="51" label="51">51</option>
    <option value="52" label="52">52</option>
    <option value="53" label="53">53</option>
    <option value="54" label="54">54</option>
    <option value="55" label="55">55</option>
    <option value="56" label="56">56</option>
    <option value="57" label="57">57</option>
    <option value="58" label="58">58</option>
    <option value="59" label="59">59</option>
    <option value="60" label="60">60</option>
    <option value="61" label="61">61</option>
    <option value="62" label="62">62</option>
    <option value="63" label="63">63</option>
    <option value="64" label="64">64</option>
    <option value="65" label="65">65</option>
    <option value="66" label="66">66</option>
    <option value="67" label="67">67</option>
    <option value="68" label="68">68</option>
    <option value="69" label="69">69</option>
    <option value="70" label="70">70</option>
    <option value="71" label="71">71</option>
    </select></li>
    <li><label for="height">Height: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="heightfrom" id="heightfrom">
    <option value="134" label="4ft 5in - 134cm">4ft 5in - 134cm</option>
    <option value="137" label="4ft 6in - 137cm">4ft 6in - 137cm</option>
    <option value="139" label="4ft 7in - 139cm">4ft 7in - 139cm</option>
    <option value="142" label="4ft 8in - 142cm">4ft 8in - 142cm</option>
    <option value="144" label="4ft 9in - 144cm">4ft 9in - 144cm</option>
    <option value="147" label="4ft 10in - 147cm">4ft 10in - 147cm</option>
    <option value="149" label="4ft 11in - 149cm">4ft 11in - 149cm</option>
    <option value="152" label="5ft - 152cm">5ft - 152cm</option>
    <option value="154" label="5ft 1in - 154cm">5ft 1in - 154cm</option>
    <option value="157" label="5ft 2in - 157cm">5ft 2in - 157cm</option>
    <option value="160" label="5ft 3in - 160cm">5ft 3in - 160cm</option>
    <option value="162" label="5ft 4in - 162cm">5ft 4in - 162cm</option>
    <option value="165" label="5ft 5in - 165cm" selected="selected">5ft 5in - 165cm</option>
    <option value="167" label="5ft 6in - 167cm">5ft 6in - 167cm</option>
    <option value="170" label="5ft 7in - 170cm">5ft 7in - 170cm</option>
    <option value="172" label="5ft 8in - 172cm">5ft 8in - 172cm</option>
    <option value="175" label="5ft 9in - 175cm">5ft 9in - 175cm</option>
    <option value="177" label="5ft 10in - 177cm">5ft 10in - 177cm</option>
    <option value="180" label="5ft 11in - 180cm">5ft 11in - 180cm</option>
    <option value="182" label="6ft - 182cm">6ft - 182cm</option>
    <option value="185" label="6ft 1in - 185cm">6ft 1in - 185cm</option>
    <option value="187" label="6ft 2in - 187cm">6ft 2in - 187cm</option>
    <option value="190" label="6ft 3in - 190cm">6ft 3in - 190cm</option>
    <option value="193" label="6ft 4in - 193cm">6ft 4in - 193cm</option>
    <option value="195" label="6ft 5in - 195cm">6ft 5in - 195cm</option>
    <option value="198" label="6ft 6in - 198cm">6ft 6in - 198cm</option>
    <option value="200" label="6ft 7in - 200cm">6ft 7in - 200cm</option>
    <option value="203" label="6ft 8in - 203cm">6ft 8in - 203cm</option>
    <option value="205" label="6ft 9in - 205cm">6ft 9in - 205cm</option>
    <option value="208" label="6ft 10in - 208cm">6ft 10in - 208cm</option>
    <option value="210" label="6ft 11in - 210cm">6ft 11in - 210cm</option>
    <option value="213" label="7ft - 213cm">7ft - 213cm</option>
    </select>
    to
    <select name="heightto" id="heightto">
    <option value="134" label="4ft 5in - 134cm">4ft 5in - 134cm</option>
    <option value="137" label="4ft 6in - 137cm">4ft 6in - 137cm</option>
    <option value="139" label="4ft 7in - 139cm">4ft 7in - 139cm</option>
    <option value="142" label="4ft 8in - 142cm">4ft 8in - 142cm</option>
    <option value="144" label="4ft 9in - 144cm">4ft 9in - 144cm</option>
    <option value="147" label="4ft 10in - 147cm">4ft 10in - 147cm</option>
    <option value="149" label="4ft 11in - 149cm">4ft 11in - 149cm</option>
    <option value="152" label="5ft - 152cm">5ft - 152cm</option>
    <option value="154" label="5ft 1in - 154cm">5ft 1in - 154cm</option>
    <option value="157" label="5ft 2in - 157cm">5ft 2in - 157cm</option>
    <option value="160" label="5ft 3in - 160cm">5ft 3in - 160cm</option>
    <option value="162" label="5ft 4in - 162cm">5ft 4in - 162cm</option>
    <option value="165" label="5ft 5in - 165cm">5ft 5in - 165cm</option>
    <option value="167" label="5ft 6in - 167cm">5ft 6in - 167cm</option>
    <option value="170" label="5ft 7in - 170cm">5ft 7in - 170cm</option>
    <option value="172" label="5ft 8in - 172cm" selected="selected">5ft 8in - 172cm</option>
    <option value="175" label="5ft 9in - 175cm">5ft 9in - 175cm</option>
    <option value="177" label="5ft 10in - 177cm">5ft 10in - 177cm</option>
    <option value="180" label="5ft 11in - 180cm">5ft 11in - 180cm</option>
    <option value="182" label="6ft - 182cm">6ft - 182cm</option>
    <option value="185" label="6ft 1in - 185cm">6ft 1in - 185cm</option>
    <option value="187" label="6ft 2in - 187cm">6ft 2in - 187cm</option>
    <option value="190" label="6ft 3in - 190cm">6ft 3in - 190cm</option>
    <option value="193" label="6ft 4in - 193cm">6ft 4in - 193cm</option>
    <option value="195" label="6ft 5in - 195cm">6ft 5in - 195cm</option>
    <option value="198" label="6ft 6in - 198cm">6ft 6in - 198cm</option>
    <option value="200" label="6ft 7in - 200cm">6ft 7in - 200cm</option>
    <option value="203" label="6ft 8in - 203cm">6ft 8in - 203cm</option>
    <option value="205" label="6ft 9in - 205cm">6ft 9in - 205cm</option>
    <option value="208" label="6ft 10in - 208cm">6ft 10in - 208cm</option>
    <option value="210" label="6ft 11in - 210cm">6ft 11in - 210cm</option>
    <option value="213" label="7ft - 213cm">7ft - 213cm</option>
    </select></li>
    <li><label for="Marital Status">Marital Status:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="maritalstatus" id="maritalstatus">
    <option value="Doesnot Matter" label="Doesn't Matter" selected="selected">Doesn't Matter</option>
    <option value="unmarried" label="Unmarried">Unmarried</option>
    <option value="Divorced" label="Divorced">Divorced</option>
    <option value="Widowed" label="Widowed">Widowed</option>
    <option value="Awaiting Divorce" label="Awaiting Divorce">Awaiting Divorce</option>
    <option value="Annulled" label="Annulled">Annulled</option>
    </select></li>
    <li><label for="religion">Religion: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="community" id="community">
    <option value="Doesnot Matter" selected="selected">Doesn't Matter</option>
    <option value="Hindu">Hindu</option>
    <option value="Muslim-Shia">Muslim-Shia</option>
    <option value="Muslim-Sunni">Muslim-Sunni</option>
    <option value="Muslim-Others">Muslim-Others</option>
    <option value="Christian">Christian</option>
    <option value="Sikh">Sikh</option>
    <option value="Jain">Jain</option>
    <option value="Parsi">Parsi</option>
    <option value="Buddhist">Buddhist</option>
    <option value="Inter-Religion">Inter-Religion</option>
    </select></li>
    <li><label for="mother tongue">Mother tongue:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="mothertongue" id="mothertongue">
    <option value="Doesnot Matter" selected="selected">Doesn't Matter</option>
    <optgroup id='mother_tongue-optgroup-Frequently Used' label='Frequently Used'>Frequently Used</optgroup>
								<option value="Assamese" >Assamese</option><option value="Bengali" >Bengali</option><option value=
								"English" >English</option><option value="Gujarati" >Gujarati</option><option value="Hindi">
								Hindi</option><option value="Kannada" >Kannada</option><option value="Konkani" >Konkani</option>
								<option value="Malayalam" >Malayalam</option><option value="Marathi" >Marathi</option><option value=
								"Marwari" >Marwari</option><option value="Odia" >Odia</option><option value="Punjabi" >Punjabi</option>
								<option value="Sindhi" >Sindhi</option><option value="Tamil" >Tamil</option><option value="Telugu" >
								Telugu</option><option value="Urdu" >Urdu</option><optgroup 
								id='mother_tongue-optgroup-All Mother Tongues' label='All Mother Tongues'>All Mother Tongues</optgroup>
								<option value="Aka" >Aka</option><option value="Arabic" >Arabic</option><option value="Arunachali" >
								Arunachali</option><option value="Assamese" >Assamese</option><option value="Awadhi" >Awadhi</option>
								<option value="Baluchi" >Baluchi</option><option value="Bengali" >Bengali</option><option value="Bhojpuri"
								>Bhojpuri</option><option value="Bhutia" >Bhutia</option><option value="Brahui" >Brahui</option>
								<option value="Brij" >Brij</option><option value="Burmese" >Burmese</option><option value="Chattisgarhi" >
								Chattisgarhi</option><option value="Chinese" >Chinese</option><option value="Coorgi" >Coorgi</option><
								option value="Dogri" >Dogri</option><option value="English" >English</option><option value="French" >
								French</option><option value="Garhwali" >Garhwali</option><option value="Garo" >Garo</option><option 
								value="Gujarati" >Gujarati</option><option value="Haryanavi" >Haryanavi</option><option value=
								"Himachali/Pahari" >Himachali/Pahari</option><option value="Hindi" >Hindi</option><option value="Hindko"
								>Hindko</option><option value="Kakbarak" >Kakbarak</option><option value="Kanauji" >Kanauji</option>
								<option value="Kannada" >Kannada</option><option value="Kashmiri" >Kashmiri</option><option value=
								"Khandesi" >Khandesi</option><option value="Khasi" >Khasi</option><option value="Konkani" >Konkani</option>
								<option value="Koshali" >Koshali</option><option value="Kumaoni" >Kumaoni</option><option value="Kutchi" >
								Kutchi</option><option value="Ladakhi" >Ladakhi</option><option value="Lepcha" >Lepcha</option><option 
								value="Magahi" >Magahi</option><option value="Maithili" >Maithili</option><option value="Malay" >Malay
								</option><option value="Malayalam" >Malayalam</option><option value="Manipuri" >Manipuri</option><option
								value="Marathi" >Marathi</option><option value="Marwari" >Marwari</option><option value="Miji" >Miji
								</option><option value="Mizo" >Mizo</option><option value="Monpa" >Monpa</option><option value="Nepali" >
								Nepali</option><option value="Odia" >Odia</option><option value="Pashto" >Pashto</option><option value=
								"Persian" >Persian</option><option value="Punjabi" >Punjabi</option><option value="Rajasthani" >Rajasthani
								</option><option value="Russian" >Russian</option><option value="Sanskrit" >Sanskrit</option><option 
								value="Santhali" >Santhali</option><option value="Seraiki" >Seraiki</option><option value="Sindhi" >
								Sindhi</option><option value="Sinhala" >Sinhala</option><option value="Sourashtra" >Sourashtra</option>
								<option value="Spanish" >Spanish</option><option value="Swedish" >Swedish</option><option value="Tagalog"
								>Tagalog</option><option value="Tamil" >Tamil</option><option value="Telugu" >Telugu</option><option 
								value="Tulu" >Tulu</option><option value="Urdu" >Urdu</option><option value="Other" >Other</option>
    </select></li>
    <li><label for="states">States Living in:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="state" id="stateofresidence">
    <option value="Doesnot Matter" label="Doesn't Matter" selected="selected">Doesn't Matter</option>
    <optgroup id="stateofresidence-optgroup-India" label="India">
    <option value="India:Andaman &amp; Nicobar" label="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
    <option value="India:Andhra Pradesh" label="Andhra Pradesh">Andhra Pradesh</option>
    <option value="India:Arunachal Pradesh" label="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="India:Assam" label="Assam">Assam</option>
    <option value="India:Bihar" label="Bihar">Bihar</option>
    <option value="India:Chandigarh" label="Chandigarh">Chandigarh</option>
    <option value="India:Chhattisgarh" label="Chhattisgarh">Chhattisgarh</option>
    <option value="India:Dadra &amp; Nagar Haveli" label="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
    <option value="India:Daman &amp; Diu" label="Daman &amp; Diu">Daman &amp; Diu</option>
    <option value="India:Delhi-NCR" label="Delhi-NCR">Delhi-NCR</option>
    <option value="India:Goa" label="Goa">Goa</option>
    <option value="India:Gujarat" label="Gujarat">Gujarat</option>
    <option value="India:Haryana" label="Haryana">Haryana</option>
    <option value="India:Himachal Pradesh" label="Himachal Pradesh">Himachal Pradesh</option>
    <option value="India:Jammu &amp; Kashmir" label="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
    <option value="India:Jharkhand" label="Jharkhand">Jharkhand</option>
    <option value="India:Karnataka" label="Karnataka">Karnataka</option>
    <option value="India:Kerala" label="Kerala">Kerala</option>
    <option value="India:Lakshadweep" label="Lakshadweep">Lakshadweep</option>
    <option value="India:Madhya Pradesh" label="Madhya Pradesh">Madhya Pradesh</option>
    <option value="India:Maharashtra" label="Maharashtra">Maharashtra</option>
    <option value="India:Manipur" label="Manipur">Manipur</option>
    <option value="India:Meghalaya" label="Meghalaya">Meghalaya</option>
    <option value="India:Mizoram" label="Mizoram">Mizoram</option>
    <option value="India:Nagaland" label="Nagaland">Nagaland</option>
    <option value="India:Orissa" label="Orissa">Orissa</option>
    <option value="India:Pondicherry" label="Pondicherry">Pondicherry</option>
    <option value="India:Punjab" label="Punjab">Punjab</option>
    <option value="India:Rajasthan" label="Rajasthan">Rajasthan</option>
    <option value="India:Sikkim" label="Sikkim">Sikkim</option>
    <option value="India:Tamil Nadu" label="Tamil Nadu">Tamil Nadu</option>
    <option value="India:Telangana" label="Telangana">Telangana</option>
    <option value="India:Tripura" label="Tripura">Tripura</option>
    <option value="India:Uttar Pradesh" label="Uttar Pradesh">Uttar Pradesh</option>
    <option value="India:Uttaranchal" label="Uttaranchal">Uttaranchal</option>
    <option value="India:West Bengal" label="West Bengal">West Bengal</option>
    <option value="India:Other" label="Other">Other</option>
    </optgroup>
    </select></li></ul></div>
    <div class="education">
    <ul>
    <div><h3>Education and Professional Details</h3></div>
    <li><label for="Education">Education:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="edu">
    <option value="Doesnot Matter" label="Doesn't Matter" selected="selected">Doesn't Matter</option>
    <option value="PHD">PHD</option>
    <option value="Post Graduate">Post Graduate</option>
    <option value="Graduate">Graduate</option>
    <option value="12th">12th</option>
    <option value="10th">10th</option>
    <option value="Lower">Lower</option>
    <option value="Iliterate">Iliterate</option>
    </select></li>
    <li><label for="Course">Specify Course:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="course" id="Course" >
    <option value="Doesnot Matter" label="Doesn't Matter" selected="selected">Doesn't Matter</option>
    <option value="Advertising/ Marketing" label="Advertising/ Marketing">Advertising/ Marketing</option>
    <option value="Administrative services" label="Administrative services">Administrative services</option>
    <option value="Architecture" label="Architecture">Architecture</option>
    <option value="Armed Forces" label="Armed Forces">Armed Forces</option>
    <option value="Arts" label="Arts">Arts</option>
    <option value="Commerce" label="Commerce">Commerce</option>
    <option value="Computers/ IT" label="Computers/ IT">Computers/ IT </option>
    <option value="Education" label="Education">Education</option>
    <option value="Engineering/ Technology" label="Engineering/ Technology">Engineering/ Technology</option>
    <option value="Fashion" label="Fashion">Fashion</option>
    <option value="Finance" label="Finance">Finance</option>
    <option value="Fine Arts" label="Fine Arts">Fine Arts</option>
    <option value="Home Science" label="Home Science">Home Science</option>
    <option value="Law" label="Law">Law</option>
    <option value="Management" label="Management">Management</option>
    <option value="Medicine" label="Medicine">Medicine</option>
    <option value="Nursing/ Health Sciences" label="Nursing/ Health Sciences">Nursing/ Health Sciences</option>
    <option value="Office administration" label="Office administration">Office administration</option>
    <option value="Science" label="Science">Science</option>
    <option value="Shipping" label="Shipping">Shipping</option>
    <option value="Travel &amp; Tourism" label="Travel &amp; Tourism">Travel &amp; Tourism</option>
    </select></li>
    <li><label for="Business">Occupation:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="occupation" id="Occupation">
    <option value="Doesnot Matter" label="Doesn't Matter" selected="selected">Doesn't Matter</option>
    <optgroup id="occupation-optgroup-Accounting, Banking &amp; Finance" label="Accounting, Banking &amp; Finance">
    </optgroup>
    <option value="Banking Professional" label="Banking Professional">Banking Professional</option>
    <option value="Chartered Accountant" label="Chartered Accountant">Chartered Accountant</option>
    <option value="Company Secretary" label="Company Secretary">Company Secretary</option>
    <option value="Finance Professional" label="Finance Professional">Finance Professional</option>
    <option value="Investment Professional" label="Investment Professional">Investment Professional</option>
    <option value="Accounting Professional (Others)" label="Accounting Professional (Others)">Accounting Professional (Others)</option>
    <optgroup id="occupation-optgroup-Administration &amp; HR" label="Administration &amp; HR">
    </optgroup>
    <option value="Admin Professional" label="Admin Professional">Admin Professional</option>
    <option value="Human Resources Professional" label="Human Resources Professional">Human Resources Professional</option>
    <optgroup id="occupation-optgroup-Advertising, Media &amp; Entertainment" label="Advertising, Media &amp; Entertainment">
    </optgroup>
    <option value="Actor" label="Actor">Actor</option>
    <option value="Advertising Professional" label="Advertising Professional">Advertising Professional</option>
    <option value="Entertainment Professional" label="Entertainment Professional">Entertainment Professional</option>
    <option value="Event Manager" label="Event Manager">Event Manager</option>
    <option value="Journalist" label="Journalist">Journalist</option>
    <option value="Media Professional" label="Media Professional">Media Professional</option>
    <option value="Public Relations Professional" label="Public Relations Professional">Public Relations Professional</option>
    <optgroup id="occupation-optgroup-Agriculture" label="Agriculture">
    </optgroup>
    <option value="Farming" label="Farming">Farming</option>
    <option value="Horticulturist" label="Horticulturist">Horticulturist</option>
    <option value="Agricultural Professional (Others)" label="Agricultural Professional (Others)">Agricultural Professional (Others)</option>
    <optgroup id="occupation-optgroup-Airline &amp; Aviation" label="Airline &amp; Aviation">
    </optgroup>
    <option value="Air Hostess / Flight Attendant" label="Air Hostess / Flight Attendant">Air Hostess / Flight Attendant</option>
    <option value="Pilot / Co-Pilot" label="Pilot / Co-Pilot">Pilot / Co-Pilot</option>
    <option value="Other Airline Professional" label="Other Airline Professional">Other Airline Professional</option>
    <optgroup id="occupation-optgroup-Architecture &amp; Design" label="Architecture &amp; Design">
    </optgroup>
    <option value="Architect" label="Architect">Architect</option>
    <option value="Interior Designer" label="Interior Designer">Interior Designer</option>
    <option value="Landscape Architect" label="Landscape Architect">Landscape Architect</option>
    <optgroup id="occupation-optgroup-Artists, Animators &amp; Web Designers" label="Artists, Animators &amp; Web Designers">
    </optgroup>
    <option value="Animator" label="Animator">Animator</option>
    <option value="Commercial Artist" label="Commercial Artist">Commercial Artist</option>
    <option value="Web / UX Designers" label="Web / UX Designers">Web / UX Designers</option>
    <option value="Artist (Others)" label="Artist (Others)">Artist (Others)</option>
    <optgroup id="occupation-optgroup-Beauty, Fashion &amp; Jewellery Designers" label="Beauty, Fashion &amp; Jewellery Designers">
    </optgroup>
    <option value="Beautician" label="Beautician">Beautician</option>
    <option value="Fashion Designer" label="Fashion Designer">Fashion Designer</option>
    <option value="Hairstylist" label="Hairstylist">Hairstylist</option>
    <option value="Jewellery Designer" label="Jewellery Designer">Jewellery Designer</option>
    <option value="Designer (Others)" label="Designer (Others)">Designer (Others)</option>
    <optgroup id="occupation-optgroup-BPO, KPO, &amp; Customer Support" label="BPO, KPO, &amp; Customer Support">
    </optgroup>
    <option value="Customer Support / BPO / KPO Professional" label="Customer Support / BPO / KPO Professional">Customer Support / BPO / KPO Professional</option>
    <optgroup id="occupation-optgroup-Civil Services / Law Enforcement" label="Civil Services / Law Enforcement">
    </optgroup>
    <option value="IAS / IRS / IES / IFS" label="IAS / IRS / IES / IFS">IAS / IRS / IES / IFS</option>
    <option value="Indian Police Services (IPS)" label="Indian Police Services (IPS)">Indian Police Services (IPS)</option>
    <option value="Law Enforcement Employee (Others)" label="Law Enforcement Employee (Others)">Law Enforcement Employee (Others)</option>
    <optgroup id="occupation-optgroup-Defense" label="Defense">
    </optgroup>
    <option value="Airforce" label="Airforce">Airforce</option>
    <option value="Army" label="Army">Army</option>
    <option value="Navy" label="Navy">Navy</option>
    <option value="Defense Services (Others)" label="Defense Services (Others)">Defense Services (Others)</option>
    <optgroup id="occupation-optgroup-Education &amp; Training" label="Education &amp; Training">
    </optgroup>
    <option value="Lecturer" label="Lecturer">Lecturer</option>
    <option value="Professor" label="Professor">Professor</option>
    <option value="Research Assistant" label="Research Assistant">Research Assistant</option>
    <option value="Research Scholar" label="Research Scholar">Research Scholar</option>
    <option value="Teacher" label="Teacher">Teacher</option>
    <option value="Training Professional (Others)" label="Training Professional (Others)">Training Professional (Others)</option>
    <optgroup id="occupation-optgroup-Engineering" label="Engineering">
    </optgroup>
    <option value="Civil Engineer" label="Civil Engineer">Civil Engineer</option>
    <option value="Electronics / Telecom Engineer" label="Electronics / Telecom Engineer">Electronics / Telecom Engineer</option>
    <option value="Mechanical / Production Engineer" label="Mechanical / Production Engineer">Mechanical / Production Engineer</option>
    <option value="Non IT Engineer (Others)" label="Non IT Engineer (Others)">Non IT Engineer (Others)</option>
    <optgroup id="occupation-optgroup-Hotel &amp; Hospitality" label="Hotel &amp; Hospitality">
    </optgroup>
    <option value="Chef / Sommelier / Food Critic" label="Chef / Sommelier / Food Critic">Chef / Sommelier / Food Critic</option>
    <option value="Catering Professional" label="Catering Professional">Catering Professional</option>
    <option value="Hotel &amp; Hospitality Professional (Others)" label="Hotel &amp; Hospitality Professional (Others)">Hotel &amp; Hospitality Professional (Others)</option>
    <optgroup id="occupation-optgroup-IT &amp; Software Engineering" label="IT &amp; Software Engineering">
    </optgroup>
    <option value="Software Developer / Programmer" label="Software Developer / Programmer">Software Developer / Programmer</option>
    <option value="Software Consultant" label="Software Consultant">Software Consultant</option>
    <option value="Hardware &amp; Networking professional" label="Hardware &amp; Networking professional">Hardware &amp; Networking professional</option>
    <option value="Software Professional (Others)" label="Software Professional (Others)">Software Professional (Others)</option>
    <optgroup id="occupation-optgroup-Legal" label="Legal">
    </optgroup>
    <option value="Lawyer" label="Lawyer">Lawyer</option>
    <option value="Legal Assistant" label="Legal Assistant">Legal Assistant</option>
    <option value="Legal Professional (Others)" label="Legal Professional (Others)">Legal Professional (Others)</option>
    <optgroup id="occupation-optgroup-Medical &amp; Healthcare" label="Medical &amp; Healthcare">
    </optgroup>
    <option value="Dentist" label="Dentist">Dentist</option>
    <option value="Doctor" label="Doctor">Doctor</option>
    <option value="Medical Transcriptionist" label="Medical Transcriptionist">Medical Transcriptionist</option>
    <option value="Nurse" label="Nurse">Nurse</option>
    <option value="Pharmacist" label="Pharmacist">Pharmacist</option>
    <option value="Physician Assistant" label="Physician Assistant">Physician Assistant</option>
    <option value="Physiotherapist / Occupational Therapist" label="Physiotherapist / Occupational Therapist">Physiotherapist / Occupational Therapist</option>
    <option value="Psychologist" label="Psychologist">Psychologist</option>
    <option value="Surgeon" label="Surgeon">Surgeon</option>
    <option value="Veterinary Doctor" label="Veterinary Doctor">Veterinary Doctor</option>
    <option value="Therapist (Others)" label="Therapist (Others)">Therapist (Others)</option>
    <option value="Medical / Healthcare Professional (Others)" label="Medical / Healthcare Professional (Others)">Medical / Healthcare Professional (Others)</option>
    <optgroup id="occupation-optgroup-Merchant Navy" label="Merchant Navy">
    </optgroup>
    <option value="Merchant Naval Officer" label="Merchant Naval Officer">Merchant Naval Officer</option>
    <option value="Mariner" label="Mariner">Mariner</option>
    <optgroup id="occupation-optgroup-Sales &amp; Marketing" label="Sales &amp; Marketing">
    </optgroup>
    <option value="Marketing Professional" label="Marketing Professional">Marketing Professional</option>
    <option value="Sales Professional" label="Sales Professional">Sales Professional</option>
    <optgroup id="occupation-optgroup-Science" label="Science">
    </optgroup>
    <option value="Biologist / Botanist" label="Biologist / Botanist">Biologist / Botanist</option>
    <option value="Physicist" label="Physicist">Physicist</option>
    <option value="Science Professional (Others)" label="Science Professional (Others)">Science Professional (Others)</option>
    <optgroup id="occupation-optgroup-Corporate Professionals" label="Corporate Professionals">
    </optgroup>
    <option value="CxO / Chairman / Director / President" label="CxO / Chairman / Director / President">CxO / Chairman / Director / President</option>
    <option value="VP / AVP / GM / DGM" label="VP / AVP / GM / DGM">VP / AVP / GM / DGM</option>
    <option value="Sr. Manager / Manager" label="Sr. Manager / Manager">Sr. Manager / Manager</option>
    <option value="Consultant / Supervisor / Team Leads" label="Consultant / Supervisor / Team Leads">Consultant / Supervisor / Team Leads</option>
    <option value="Team Member / Staff" label="Team Member / Staff">Team Member / Staff</option>
    <optgroup id="occupation-optgroup-Others" label="Others">
    </optgroup>
    <option value="Agent / Broker / Trader / Contractor" label="Agent / Broker / Trader / Contractor">Agent / Broker / Trader / Contractor</option>
    <option value="Business Owner / Entrepreneur" label="Business Owner / Entrepreneur">Business Owner / Entrepreneur</option>
    <option value="Politician" label="Politician">Politician</option>
    <option value="Social Worker / Volunteer / NGO" label="Social Worker / Volunteer / NGO">Social Worker / Volunteer / NGO</option>
    <option value="Sportsman" label="Sportsman">Sportsman</option>
    <option value="Travel &amp; Transport Professional" label="Travel &amp; Transport Professional">Travel &amp; Transport Professional</option>
    <option value="Writer" label="Writer">Writer</option>
    <optgroup id="occupation-optgroup-Non Working" label="Non Working">
    </optgroup>
    <option value="Student" label="Student">Student</option>
    <option value="Retired" label="Retired">Retired</option>
    <option value="Not working" label="Not working">Not working</option>
    </select> </li>
    <li><label for="Annual Income">Annual Income:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <select name="income" id="Annual Income" >
    <option value="Doesnot Matter" label="Doesn't Matter" selected="selected">Doesn't Matter</option>
    <option value="Upto INR 1 Lakh" label="Upto INR 1 Lakh">Upto INR 1 Lakh</option>
    <option value="INR 1 Lakh to 2 Lakh" label="INR 1 Lakh to 2 Lakh">INR 1 Lakh to 2 Lakh</option>
    <option value="INR 2 Lakh to 4 Lakh" label="INR 2 Lakh to 4 Lakh">INR 2 Lakh to 4 Lakh</option>
    <option value="INR 4 Lakh to 7 Lakh" label="INR 4 Lakh to 7 Lakh">INR 4 Lakh to 7 Lakh</option>
    <option value="INR 7 Lakh to 10 Lakh" label="INR 7 Lakh to 10 Lakh">INR 7 Lakh to 10 Lakh</option>
    <option value="INR 10 Lakh to 15 Lakh" label="INR 10 Lakh to 15 Lakh">INR 10 Lakh to 15 Lakh</option>
    <option value="INR 15 Lakh to 20 Lakh" label="INR 15 Lakh to 20 Lakh">INR 15 Lakh to 20 Lakh</option>
    <option value="INR 20 Lakh to 30 Lakh" label="INR 20 Lakh to 30 Lakh">INR 20 Lakh to 30 Lakh</option>
    <option value="INR 30 Lakh to 50 Lakh" label="INR 30 Lakh to 50 Lakh">INR 30 Lakh to 50 Lakh</option>
    <option value="INR 50 Lakh to 75 Lakh" label="INR 50 Lakh to 75 Lakh">INR 50 Lakh to 75 Lakh</option>
    <option value="INR 75 Lakh to 1 Crore" label="INR 75 Lakh to 1 Crore">INR 75 Lakh to 1 Crore</option>
    <option value="INR 1 Crore &amp; above" label="INR 1 Crore &amp; above">INR 1 Crore &amp; above</option>
    </select></li></ul>
    </div>
    <div class="submit">
    <input type="submit">
    </div>
    </form>

    <?php
    include 'template/footer.php';
    ?>
    </div>
    </body>