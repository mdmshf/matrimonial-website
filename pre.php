<style type="text/css">
        .pga {border: 3px solid #ff7700; width: 1000px; margin:auto auto auto auto;}
        
</style>
<link rel="stylesheet" type="text/css" href="form.css">
<div class = "pga">
<?php
include 'init.php';
/*if(logged_in())
{
    header('Location: index.php');
    exit();
}*/
include 'template/header.php';
?>
	
	
    <style type="text/css">
        <style type="text/css">
        ul {list-style-type: none; }
        li {padding: 0 0 15px 0;}
        .preference {border: 1px solid #000000; width: 1000px; margin: auto auto auto auto ;background-color: #ff7700;padding:10 0 10 0;}
        body{ background-color: grey; } 
    </style>
<body>
	<div class="preference">
	<form action="" method="post">
    <ul>
	<li><label for="I'm looking for">I'm looking for</label>
	<select name="gender" id="gender">
    <option value="Female" label="Woman" selected="selected">Woman</option>
    <option value="Male" label="Man">Man</option>
	</select></li>
	<li><label for="Aged">aged</label>
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
	<li><label for="religion">of religion</label>
	<select name="community" id="frm-community">
    <option value="" label="Select" selected="selected">Select</option>
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
	<li><label for="mother tongue">mother tongue</label>
	<select name="mothertongue" id="frm-mothertongue">
    <option value="" label="Select" selected="selected">Select</option>
    <optgroup id="frm-mothertongue-optgroup-Frequently Used" label="Frequently Used">
    <option value="Assamese" label="Assamese">Assamese</option>
    <option value="Bengali" label="Bengali">Bengali</option>
    <option value="English" label="English">English</option>
    <option value="Gujarati" label="Gujarati">Gujarati</option>
    <option value="Hindi" label="Hindi">Hindi</option>
    <option value="Kannada" label="Kannada">Kannada</option>
    <option value="Konkani" label="Konkani">Konkani</option>
    <option value="Malayalam" label="Malayalam">Malayalam</option>
    <option value="Marathi" label="Marathi">Marathi</option>
    <option value="Marwari" label="Marwari">Marwari</option>
    <option value="Odia" label="Odia">Odia</option>
    <option value="Punjabi" label="Punjabi">Punjabi</option>
    <option value="Sindhi" label="Sindhi">Sindhi</option>
    <option value="Tamil" label="Tamil">Tamil</option>
    <option value="Telugu" label="Telugu">Telugu</option>
    <option value="Urdu" label="Urdu">Urdu</option>
    </optgroup>
    <optgroup id="frm-mothertongue-optgroup-More" label="More">
    <option value="Aka" label="Aka">Aka</option>
    <option value="Arabic" label="Arabic">Arabic</option>
    <option value="Arunachali" label="Arunachali">Arunachali</option>
    <option value="Awadhi" label="Awadhi">Awadhi</option>
    <option value="Baluchi" label="Baluchi">Baluchi</option>
    <option value="Bhojpuri" label="Bhojpuri">Bhojpuri</option>
    <option value="Bhutia" label="Bhutia">Bhutia</option>
    <option value="Brahui" label="Brahui">Brahui</option>
    <option value="Brij" label="Brij">Brij</option>
    <option value="Burmese" label="Burmese">Burmese</option>
    <option value="Chattisgarhi" label="Chattisgarhi">Chattisgarhi</option>
    <option value="Chinese" label="Chinese">Chinese</option>
    <option value="Coorgi" label="Coorgi">Coorgi</option>
    <option value="Dogri" label="Dogri">Dogri</option>
    <option value="French" label="French">French</option>
    <option value="Garhwali" label="Garhwali">Garhwali</option>
    <option value="Garo" label="Garo">Garo</option>
    <option value="Haryanavi" label="Haryanavi">Haryanavi</option>
    <option value="Himachali/Pahari" label="Himachali/Pahari">Himachali/Pahari</option>
    <option value="Hindko" label="Hindko">Hindko</option>
    <option value="Kakbarak" label="Kakbarak">Kakbarak</option>
    <option value="Kanauji" label="Kanauji">Kanauji</option>
    <option value="Kashmiri" label="Kashmiri">Kashmiri</option>
    <option value="Khandesi" label="Khandesi">Khandesi</option>
    <option value="Khasi" label="Khasi">Khasi</option>
    <option value="Koshali" label="Koshali">Koshali</option>
    <option value="Kumaoni" label="Kumaoni">Kumaoni</option>
    <option value="Kutchi" label="Kutchi">Kutchi</option>
    <option value="Ladakhi" label="Ladakhi">Ladakhi</option>
    <option value="Lepcha" label="Lepcha">Lepcha</option>
    <option value="Magahi" label="Magahi">Magahi</option>
    <option value="Maithili" label="Maithili">Maithili</option>
    <option value="Malay" label="Malay">Malay</option>
    <option value="Manipuri" label="Manipuri">Manipuri</option>
    <option value="Miji" label="Miji">Miji</option>
    <option value="Mizo" label="Mizo">Mizo</option>
    <option value="Monpa" label="Monpa">Monpa</option>
    <option value="Nepali" label="Nepali">Nepali</option>
    <option value="Pashto" label="Pashto">Pashto</option>
    <option value="Persian" label="Persian">Persian</option>
    <option value="Rajasthani" label="Rajasthani">Rajasthani</option>
    <option value="Russian" label="Russian">Russian</option>
    <option value="Sanskrit" label="Sanskrit">Sanskrit</option>
    <option value="Santhali" label="Santhali">Santhali</option>
    <option value="Seraiki" label="Seraiki">Seraiki</option>
    <option value="Sinhala" label="Sinhala">Sinhala</option>
    <option value="Sourashtra" label="Sourashtra">Sourashtra</option>
    <option value="Spanish" label="Spanish">Spanish</option>
    <option value="Swedish" label="Swedish">Swedish</option>
    <option value="Tagalog" label="Tagalog">Tagalog</option>
    <option value="Tulu" label="Tulu">Tulu</option>
    <option value="Other" label="Other">Other</option>
    </optgroup>
	</select></li>
	<li><input type="search"></li>
</ul></form></div>
</body>
    <?php
    include 'template/footer.php';
    ?>
    </div>