<link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/default/css/jquery.typeahead.css">

<!-- Home Slider start -->
<div class="slider-content for-mobile">
    <h3><a href="#signup">Sign Up</a> with <span>Jeans Trip</span></h3>
    <p>more then 50,000+ vacation rentals and hotels worldwide !</p>
</div>
<div class="homeslider-wrap">
	<div class="main-slider">
    	<ul class="bxslider">
        	<li style="background:url(../jeanstrip/assets/themes/default/images/slide-2.jpg);">
            	<div class="slider-content">
        			<h3><a href="#signup">Sign Up</a> with <span>Jeans Trip</span></h3>
            		<p>more then 50,000+ vacation rentals and hotels worldwide !</p>
        		</div>
                <div class="overlay"></div>
            </li>
            <li style="background:url(../jeanstrip/assets/themes/default/images/slide-1.jpg);">
            	<div class="slider-content">
        			<h3><a href="#signup">Sign Up</a> with <span>Jeans Trip</span></h3>
            		<p>more then 50,000+ vacation rentals and hotels worldwide !</p>
        		</div>
                <div class="overlay"></div>
            </li>
        </ul>
    </div>
    <div class="homecontent-wrap">
        <ul class="homecontent-tab">
            <li class="active"><a href="#hotels"><i class="fa fa-building-o" aria-hidden="true"></i>Hotels</a></li><li><a href="#flights"><i class="fa fa-plane" aria-hidden="true"></i>Flights</a></li>
        </ul>
        <div class="homecontent-section">
        	<div id="hotels" class="home-tabs" style="display:block;">
            	<form name ="hotel_search" action="<?php echo base_url(); ?>Hotel/get_hotel_list" method="post">
                	<div class="row">
                    	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        	<!--<input type="text" placeholder="City, neighborhood, property, landmark…" name="where-go">-->
                            <div class="typeahead__container">
                                <label>Where would you like to go?</label>
                                <div class="typeahead__field">
                                <span class="typeahead__query">
                                    <input class="js-typeahead-country_v2" name="country_v2[query]" type="search" placeholder="City, neighborhood, property, landmark…" autocomplete="off">
                                </span>
                                </div>
                            </div>
                            <!--
<option value="AF">Afghanistan</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua &amp; Barbuda</option>
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
<option value="BA">Bosnia</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="VG">British Virgin Islands</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="BQ">Caribbean Netherlands</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo - Brazzaville</option>
<option value="CD">Congo - Kinshasa</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Cura??ao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czechia</option>
<option value="CI">C??te d???Ivoire</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands</option>
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
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard &amp; McDonald Islands</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Laos</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
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
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="KP">North Korea</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestine</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn Islands</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RO">Romania</option>
<option value="RU">Russia</option>
<option value="RW">Rwanda</option>
<option value="RE">R??union</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia &amp; South Sandwich Islands</option>
<option value="KR">South Korea</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="BL">St. Barth??lemy</option>
<option value="SH">St. Helena</option>
<option value="KN">St. Kitts &amp; Nevis</option>
<option value="LC">St. Lucia</option>
<option value="MF">St. Martin</option>
<option value="PM">St. Pierre &amp; Miquelon</option>
<option value="VC">St. Vincent &amp; Grenadines</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard &amp; Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syria</option>
<option value="ST">S??o Tom?? &amp; Pr??ncipe</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad &amp; Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks &amp; Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UM">U.S. Outlying Islands</option>
<option value="VI">U.S. Virgin Islands</option>
<option value="GB">UK</option>
<option value="US">US</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VA">Vatican City</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="WF">Wallis &amp; Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
<option value="AX">??land Islands</option>

                            -->

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        	<label>Check-in:</label>
                        	<input type="text" id="datepicker" placeholder="Check-in" name="Check-in">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        	<label>Check-out:</label>
                        	<input type="text" id="datepicker-2" placeholder="Check-out" name="Check-out">
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
                        	<label>Rooms:</label>
                            <select name="no_rooms" id="no_rooms">
                                <option value="1" selected="selected">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
                        	<label>Adults:</label>
                            <select name="no_adults" id="no_adults">
                                <option value="1" selected="selected">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
                        	<label>Childrens:</label>
                            <select name="no_children" id="no_children">
                                <option value="1" selected="selected">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-4 col-xs-offset-3">
                        	<label>&nbsp;</label>
                        	<input class="button" type="submit" value="search" >
                        </div>
                    </div>
                    
                    <div class="refine-search">
                    	<a href="#">Refine your search<i class="fa fa-caret-down" aria-hidden="true"></i><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                        <div class="refinesearch-content clearfix">
                        	<div class="price pull-left">
                        		<p>Price (per night)</p>
                            </div>
    						<div id="slider-range" class="pull-left"></div>
    						<input type="text" id="amount" readonly>
                        </div>
                    </div>
                </form>
            </div>
            <div id="flights" class="home-tabs">
            	<div class="flights-type">
                	<ul>
                    	<li class="active"><a href="#round-trip">Round-trip</a></li>
                        <li><a href="#one-way">One Way</a></li>
                        <li><a href="#multi-cities">Multi-City</a></li>
                    </ul>
                </div>
            	<form method="get" action="">
                	<div id="round-trip" class="search-flights" style="display:block;">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Flying from</label>
                                <input type="text" placeholder="From" name="flying-from">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Flying to</label>
                                <input type="text" placeholder="To" name="flying-to">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Departing</label>
                                <input id="datepicker-3" type="text" placeholder="Depart" name="departing">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Returning</label>
                                <input id="datepicker-4" type="text" placeholder="Return" name="returning">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Travelers, Class</label>
                                <select name="travelers">
                                    <option selected>1 Traveler, Economy</option>
                                    <option>2 Traveler, Economy</option>
                                    <option>3 Traveler, Economy</option>
                                    <option>4 Traveler, Economy</option>
                                    <option>5 Traveler, Economy</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>&nbsp;</label>
                                <input class="button" type="button" value="search" >
                            </div>
                        </div>
                    </div>
                    
                    <div id="one-way" class="search-flights">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Flying from</label>
                                <input type="text" placeholder="From" name="flying-from-2">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                                <label>Flying to</label>
                                <input type="text" placeholder="To" name="flying-to-2">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <label>Departing</label>
                                <input id="datepicker-5" type="text" placeholder="Depart" name="departing-2">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <label>Travelers, Class</label>
                                <select name="travelers">
                                    <option>1 Traveler, Economy</option>
                                    <option selected>2 Traveler, Economy</option>
                                    <option>3 Traveler, Economy</option>
                                    <option>4 Traveler, Economy</option>
                                    <option>5 Traveler, Economy</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-3">
                                <label>&nbsp;</label>
                                <input class="button" type="button" value="search" >
                            </div>
                        </div>
                    </div>
                    
                    <div id="multi-cities" class="search-flights">
                        <div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-9">
                            	<div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    	<input type="text" placeholder="From" name="flying-from">
                                	</div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <input type="text" placeholder="To" name="flying-to">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <input id="datepicker-6" type="text" placeholder="Depart" name="departing">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <select name="travelers">
                                            <option selected>Anytime</option>
											<option title="Early (4a-8a)">Early (4a-8a)</option>
                                            <option title="Morning (8a-12p)">Morning (8a-12p)</option>
                                            <option title="Afternoon (12p-5p)">Afternoon (12p-5p)</option>
                                            <option title="Evening (5p-9p)">Evening (5p-9p)</option>
                                            <option title="Night (9p-12a)">Night (9p-12a)</option>
                                            <option title="1:00 am">1:00 am</option>
                                            <option title="2:00 am">2:00 am</option>
                                            <option title="3:00 am">3:00 am</option>
                                            <option title="4:00 am">4:00 am</option>
                                            <option title="5:00 am">5:00 am</option>
                                            <option title="6:00 am">6:00 am</option>
                                            <option title="7:00 am">7:00 am</option>
                                            <option title="8:00 am">8:00 am</option>
                                            <option title="9:00 am">9:00 am</option>
                                            <option title="10:00 am">10:00 am</option>
                                            <option title="11:00 am">11:00 am</option>
                                            <option title="Noon">Noon</option>
                                            <option title="1:00 pm">1:00 pm</option>
                                            <option title="2:00 pm">2:00 pm</option>
                                            <option title="3:00 pm">3:00 pm</option>
                                            <option title="4:00 pm">4:00 pm</option>
                                            <option title="5:00 pm">5:00 pm</option>
                                            <option title="6:00 pm">6:00 pm</option>
                                            <option title="7:00 pm">7:00 pm</option>
                                            <option title="8:00 pm">8:00 pm</option>
                                            <option title="9:00 pm">9:00 pm</option>
                                            <option title="10:00 pm">10:00 pm</option>
                                            <option title="11:00 pm">11:00 pm</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    	<input type="text" placeholder="From" name="flying-from">
                                	</div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <input type="text" placeholder="To" name="flying-to">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <input id="datepicker-7" type="text" placeholder="Depart" name="departing">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                        <select name="travelers">
                                            <option selected>Anytime</option>
											<option title="Early (4a-8a)">Early (4a-8a)</option>
                                            <option title="Morning (8a-12p)">Morning (8a-12p)</option>
                                            <option title="Afternoon (12p-5p)">Afternoon (12p-5p)</option>
                                            <option title="Evening (5p-9p)">Evening (5p-9p)</option>
                                            <option title="Night (9p-12a)">Night (9p-12a)</option>
                                            <option title="1:00 am">1:00 am</option>
                                            <option title="2:00 am">2:00 am</option>
                                            <option title="3:00 am">3:00 am</option>
                                            <option title="4:00 am">4:00 am</option>
                                            <option title="5:00 am">5:00 am</option>
                                            <option title="6:00 am">6:00 am</option>
                                            <option title="7:00 am">7:00 am</option>
                                            <option title="8:00 am">8:00 am</option>
                                            <option title="9:00 am">9:00 am</option>
                                            <option title="10:00 am">10:00 am</option>
                                            <option title="11:00 am">11:00 am</option>
                                            <option title="Noon">Noon</option>
                                            <option title="1:00 pm">1:00 pm</option>
                                            <option title="2:00 pm">2:00 pm</option>
                                            <option title="3:00 pm">3:00 pm</option>
                                            <option title="4:00 pm">4:00 pm</option>
                                            <option title="5:00 pm">5:00 pm</option>
                                            <option title="6:00 pm">6:00 pm</option>
                                            <option title="7:00 pm">7:00 pm</option>
                                            <option title="8:00 pm">8:00 pm</option>
                                            <option title="9:00 pm">9:00 pm</option>
                                            <option title="10:00 pm">10:00 pm</option>
                                            <option title="11:00 pm">11:00 pm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <input class="button" type="button" value="search" >
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
	</div>
</div>
<!-- Home Slider Ends -->
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script>
    jQuery.noConflict();
</script>
<script src="<?php echo base_url(); ?>assets/themes/default/js/jquery.typeahead.min.js"></script>
<script>
var data = {
            continents: [
                 "Africa",
                 "Antarctica",
                 "Asia",
                 "Europe",
                 "North America",
                 "Oceania",
                 "South America"],
            countries: ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
                "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh",
                "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
                "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma",
                "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad",
                "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the",
                "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
                "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
                "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon",
                "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea",
                "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India",
                "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
                "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos",
                "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
                "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
                "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco",
                "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru",
                "Philippines", "Poland", "Portugal", "Romania", "Russia", "Rwanda", "Samoa", "San Marino",
                "Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone",
                "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain",
                "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan",
                "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States",
                "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"],
            capitals: ["Abu Dhabi", "Abuja", "Accra", "Adamstown", "Addis Ababa", "Algiers", "Alofi", "Amman", "Amsterdam",
                "Andorra la Vella", "Ankara", "Antananarivo", "Apia", "Ashgabat", "Asmara", "Astana", "Asunción", "Athens",
                "Avarua", "Baghdad", "Baku", "Bamako", "Bandar Seri Begawan", "Bangkok", "Bangui", "Banjul", "Basseterre",
                "Beijing", "Beirut", "Belgrade", "Belmopan", "Berlin", "Bern", "Bishkek", "Bissau", "Bogotá", "Brasília",
                "Bratislava", "Brazzaville", "Bridgetown", "Brussels", "Bucharest", "Budapest", "Buenos Aires", "Bujumbura",
                "Cairo", "Canberra", "Caracas", "Castries", "Cayenne", "Charlotte Amalie", "Chisinau", "Cockburn Town",
                "Conakry", "Copenhagen", "Dakar", "Damascus", "Dhaka", "Dili", "Djibouti", "Dodoma", "Doha", "Douglas",
                "Dublin", "Dushanbe", "Edinburgh of the Seven Seas", "El Aaiún", "Episkopi Cantonment", "Flying Fish Cove",
                "Freetown", "Funafuti", "Gaborone", "George Town", "Georgetown", "Georgetown", "Gibraltar", "King Edward Point",
                "Guatemala City", "Gustavia", "Hagåtña", "Hamilton", "Hanga Roa", "Hanoi", "Harare", "Hargeisa", "Havana",
                "Helsinki", "Honiara", "Islamabad", "Jakarta", "Jamestown", "Jerusalem", "Juba", "Kabul", "Kampala",
                "Kathmandu", "Khartoum", "Kiev", "Kigali", "Kingston", "Kingston", "Kingstown", "Kinshasa", "Kuala Lumpur",
                "Kuwait City", "Libreville", "Lilongwe", "Lima", "Lisbon", "Ljubljana", "Lomé", "London", "Luanda", "Lusaka",
                "Luxembourg", "Madrid", "Majuro", "Malabo", "Malé", "Managua", "Manama", "Manila", "Maputo", "Marigot",
                "Maseru", "Mata-Utu", "Mbabane Lobamba", "Melekeok Ngerulmud", "Mexico City", "Minsk", "Mogadishu", "Monaco",
                "Monrovia", "Montevideo", "Moroni", "Moscow", "Muscat", "Nairobi", "Nassau", "Naypyidaw", "N'Djamena",
                "New Delhi", "Niamey", "Nicosia", "Nicosia", "Nouakchott", "Nouméa", "Nukuʻalofa", "Nuuk", "Oranjestad",
                "Oslo", "Ottawa", "Ouagadougou", "Pago Pago", "Palikir", "Panama City", "Papeete", "Paramaribo", "Paris",
                "Philipsburg", "Phnom Penh", "Plymouth Brades Estate", "Podgorica Cetinje", "Port Louis", "Port Moresby",
                "Port Vila", "Port-au-Prince", "Port of Spain", "Porto-Novo Cotonou", "Prague", "Praia", "Cape Town",
                "Pristina", "Pyongyang", "Quito", "Rabat", "Reykjavík", "Riga", "Riyadh", "Road Town", "Rome", "Roseau",
                "Saipan", "San José", "San Juan", "San Marino", "San Salvador", "Sana'a", "Santiago", "Santo Domingo",
                "São Tomé", "Sarajevo", "Seoul", "Singapore", "Skopje", "Sofia", "Sri Jayawardenepura Kotte", "St. George's",
                "St. Helier", "St. John's", "St. Peter Port", "St. Pierre", "Stanley", "Stepanakert", "Stockholm", "Sucre",
                "Sukhumi", "Suva", "Taipei", "Tallinn", "Tarawa Atoll", "Tashkent", "Tbilisi", "Tegucigalpa", "Tehran",
                "Thimphu", "Tirana", "Tiraspol", "Tokyo", "Tórshavn", "Tripoli", "Tskhinvali", "Tunis", "Ulan Bator", "Vaduz",
                "Valletta", "The Valley", "Vatican City", "Victoria", "Vienna", "Vientiane", "Vilnius", "Warsaw",
                "Washington, D.C.", "Wellington", "West Island", "Willemstad", "Windhoek", "Yamoussoukro", "Yaoundé", "Yaren",
                "Yerevan", "Zagreb"]
        };
        
jQuery.typeahead({
    input: '.js-typeahead-country_v2',
    minLength: 1,
    maxItem: 3,
    order: "asc",
    template: "{{display}} <small style='color:#999;'>{{group}}</small>",
    source: {
        continent: {
           data: data.continents
        },
        country: {
           data: data.countries
        },
        capitals: {
           data: data.capitals
        }
    },
    callback: {
        onNavigateAfter: function (node, lis, a, item, query, event) {
            if (~[38,40].indexOf(event.keyCode)) {
                var resultList = node.closest("form").find("ul.typeahead__list"),
                    activeLi = lis.filter("li.active"),
                    offsetTop = activeLi[0] && activeLi[0].offsetTop - (resultList.height() / 2) || 0;
 
                resultList.scrollTop(offsetTop);
            }
 
        },
        onResult: function (node, query, result, resultCount) {
            if (query === "") return;
 
            var text = "";
            if (result.length > 0 && result.length < resultCount) {
                text = "Showing <strong>" + result.length + "</strong> of <strong>" + resultCount + '</strong> elements matching "' + query + '"';
            } else if (result.length > 0) {
                text = 'Showing <strong>' + result.length + '</strong> elements matching "' + query + '"';
            } else {
                text = 'No results matching "' + query + '"';
            }
            jQuery('#result-container').html(text);
 
        },
        onMouseLeave: function (node, a, item, event) {
 
           jQuery(a).find('.flag-chart').remove();
 
        }
    }
});
</script>