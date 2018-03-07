
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Profile Settings</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<script type="text/javascript" src="http://www.wojoscripts.com/mmp/assets/jquery.js"></script>
<script type="text/javascript" src="http://www.wojoscripts.com/mmp/assets/global.js"></script>
<link href="http://www.wojoscripts.com/mmp/view/front/cache/master_main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="menu">
<div class="actionButton"></div>
	    <a href="http://www.wojoscripts.com/mmp/dashboard/" class="sub dashboard" data-content="Dashboard" data-position="left center"></a>
        <a href="http://www.wojoscripts.com/mmp/packages/" class="sub packages" data-content="Memberships" data-position="left center"></a>  
    <a href="http://www.wojoscripts.com/mmp/contact/" class="sub contact" data-content="Contact" data-position="left center"></a> 
        <a href="http://www.wojoscripts.com/mmp/logout/" class="sub logout" data-content="Logout" data-position="left center"></a> 
        <a class="sub news" data-content="News" data-position="left center"></a>
</div>
<div class="wojo-grid">
<div id="logo"><a href="http://www.wojoscripts.com/mmp/" class="logo"><img src="http://www.wojoscripts.com/mmp/uploads/logo.png" alt="Membership Manager"></a></div><div class="content-center"><img src="http://www.wojoscripts.com/mmp/uploads/avatars/av1.jpg" alt="" class="avatar"></div>
<?php
    include '../Assets/dashboard1links.php';
?>
<div class="login-form">
  <form method="post" id="wojo_form" name="wojo_form">
    <div class="wojo form">
      <input type="file" name="avatar" data-type="image" data-exist="http://www.wojoscripts.com/mmp/uploads/avatars/av1.jpg" accept="image/png, image/jpeg">
      <div class="wojo big space divider"></div>
      <div class="wojo fields">
        <div class="field five wide">
          <label>First Name <i class="icon asterisk"></i></label>
          <input type="text" placeholder="First Name" value="Andrew" name="fname">
        </div>
        <div class="field five wide">
          <label>Last Name <i class="icon asterisk"></i></label>
          <input type="text" placeholder="Last Name" value="Burns" name="lname">
        </div>
      </div>
      <div class="wojo fields">
        <div class="field five wide">
          <label>Email Address <i class="icon asterisk"></i></label>
          <input type="text" placeholder="Email Address" value="andrew.burns@email.com" name="email">
        </div>
        <div class="field">
          <label>New Password</label>
          <input type="password" name="password">
        </div>
      </div>
            <div class="wojo secondary boxed segment"> <div class="wojo fields align-middle"><div class="field four wide labeled"><label class="content-right mobile-content-left">Company <i class="icon asterisk"></i> <i data-content="Company Name" class="icon question sign"></i></label></div><div class="six wide field"><input name="custom_001" type="text" placeholder="Company" value="wojoscripts"></div></div><div class="wojo fields align-middle"><div class="field four wide labeled"><label class="content-right mobile-content-left">Phone Number</label></div><div class="six wide field"><input name="custom_002" type="text" placeholder="Phone Number" value="1888 255-1234"></div></div></div>
                  <div class="wojo fields">
        <div class="field four wide labeled">
          <label class="content-right mobile-content-left">Address</label>
        </div>
        <div class="field">
          <input type="text" placeholder="Address" value="37 Main St" name="address">
        </div>
      </div>
      <div class="wojo fields">
        <div class="field four wide labeled">
          <label class="content-right mobile-content-left">City</label>
        </div>
        <div class="field">
          <input type="text" placeholder="City" value="Mobile" name="city">
        </div>
      </div>
      <div class="wojo fields">
        <div class="field four wide labeled">
          <label class="content-right mobile-content-left">Province/State</label>
        </div>
        <div class="field">
          <div class="wojo action input">
            <input type="text" placeholder="Province/State" value="Colorado" name="state">
          </div>
        </div>
      </div>
      <div class="wojo fields">
        <div class="field four wide labeled">
          <label class="content-right mobile-content-left">Postal Code/Zip / Country</label>
        </div>
        <div class="field">
          <div class="wojo action input">
            <input type="text" placeholder="Postal Code/Zip" value="36605" name="zip">
            <select class="wojo search selection dropdown" name="country">
              <option value="CA" selected="selected">Canada</option>
<option value="GB">United Kingdom (GB)</option>
<option value="US">United States</option>
<option value="AF">Afghanistan</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia and Herzegowina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="VG">British Virgin Islands</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Cote D'ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="TP">East Timor</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard and McDonald Islands</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IR">Islamic Republic of Iran</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Dem. Peoples Rep of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Laos</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libyan Arab Jamahiriya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macau</option>
<option value="MK">Macedonia</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="LC">Saint Lucia</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SH">St. Helena</option>
<option value="KN">St. Kitts and Nevis</option>
<option value="PM">St. Pierre and Miquelon</option>
<option value="VC">St. Vincent and the Grenadines</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen Islands</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="VI">United States Virgin Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VA">Vatican City State</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="WF">Wallis And Futuna Islands</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZR">Zaire</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
            </select>
          </div>
        </div>
      </div>
      <div class="wojo space divider"></div>
            <div class="wojo fields">
        <div class="field four wide labeled">
          <label class="content-right mobile-content-left">Newsletter Subscriber</label>
        </div>
        <div class="field">
          <div class="wojo inline fields">
            <div class="wojo checkbox radio field">
              <input name="newsletter" type="radio" value="1" checked="checked">
              <label>Yes</label>
            </div>
            <div class="wojo checkbox radio field">
              <input name="newsletter" type="radio" value="0" >
              <label>No</label>
            </div>
          </div>
        </div>
      </div>
      <div class="content-center">
        <button type="button" data-action="profile" name="dosubmit" class="wojo secondary button">Update Account</button>
      </div>
    </div>
  </form>
</div><!-- Footer -->
</div>
  <footer> Copyright &copy;2018 Membership Manager</footer>
<script type="text/javascript" src="http://www.wojoscripts.com/mmp/view/front/js/master.js"></script> 
<script type="text/javascript"> 
// <![CDATA[  
$(document).ready(function() {
    $.Master({
		url: "http://www.wojoscripts.com/mmp/view/front",
		surl: "http://www.wojoscripts.com/mmp",
        lang: {
            button_text: "Browse...",
            empty_text: "No file...",
        }
    });
});
// ]]>
</script>
</body>
</html>

