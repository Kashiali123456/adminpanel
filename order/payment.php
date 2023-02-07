
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Now - Freelance</title>
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom-scroller.css" rel="stylesheet">
    <link href="css/style-web.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
     
 
    <?php
            require_once("orderinclude/head.php");
        ?>
        <style>
            button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
        </style>
  </head>
  
  <body class="home-page">
    <?php
            require_once("orderinclude/nav.php");
        ?>
<section class="page-title">
  <div class="container">
    <h1>Let's Get Started with Your Project</h1>
    <p>Please Provide the information requested below.</p>
  </div>
</section>
<section class="steps-seq">
  <div class="container">
   
  </div>
</section>

<section class="content-seq">
    
  <div class="container">
    <div class="row">
       
      <div class="col-lg-9">
        <button class="accordion" style="background-color:#f8a217; color:#fff;"> Order Now</button>
        <div class="panel">
        <form  method="post" action="order_details">
            <!--<input type="hidden" value="39.34.130.56" name="customer[ip]"/>-->
            <!--<input type="hidden" id="invoiceId" value=""-->
            <!--name="invoiceId"/>-->
           
             <div class="col-md-12 form-sec step-1-form">
                <h4>Please Fill the Form</h4>
                <ul>
                  
                  <li>
                    <label>Name <span class="req-field-star">*</span></label>
                    <input class="formname" type="text" name="name" placeholder="Name" required>
                  </li>
                  <li>
                    <label>Email Address <span class="req-field-star">*</span></label>
                    <input class="formemail" type="email" name="email" placeholder="Address" required>
                  </li>
                  <li>
                    <label>Phone Number <span class="req-field-star">*</span></label>
                    <input class="formphone" type="tel" name="phone" placeholder="Phone Number" maxlength="13" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" required>
                  </li>
                </ul>
              </div>
              </div>           
                               <button class="accordion" style="background-color:#f8a217; color:#fff;">Logo Brief</button>
                            <div class="panel">
                            <div class="col-md-12 form-sec step-1-form logo-brief-form">
                                <h4 style="margin-bottom: 30px">Logo Brief</h4>
                                <ul>
                                    <li>
                                        <label>IS THIS A RE-DESIGN OR A NEW LOGO? <span class="req-field-star">*</span></label>
                                        <select id="countryId" data-validation="required" name="re_design" class="valid">
                                        <option value="">Select</option>
                                        <option value="RE-DESIGN">RE-DESIGN</option><option value="NEW LOGO">NEW LOGO</option></select>
                                    </li>
                                    <li>
                                        <label>LOGO TYPOGRAPHY:</label>
                                        <div class="select-logo">
                                            <ul class="list-inline">
                                              <li><input type="checkbox" id="cb1" value="HIGH-TECH" name ="logo"/>
                                                <label for="cb1"><img src="breiflogo/sony-e-log.jpg" /></label>
                                                <p>HIGH-TECH</p>
                                              </li>

                                              <li><input type="checkbox" id="cb2" value="MINIMALIST" name ="logo"/>
                                                <label for="cb2"><img src="breiflogo/anderoid-pic.jpg" /></label>
                                                <p>MINIMALIST</p>
                                              </li>
                                              <li><input type="checkbox" id="cb3" value="TYPOGRAPHY" name="logo"/>
                                                <label for="cb3"><img src="breiflogo/cola-pic.jpg" /></label>
                                                <p>TYPOGRAPHY</p>
                                              </li>
                                              <li><input type="checkbox" id="cb4" value="CORPORATE" name="logo"/>
                                                <label for="cb4"><img src="breiflogo/mico-pic.jpg" /></label>
                                                <p>CORPORATE</p>
                                              </li>
                                              <li><input type="checkbox" id="cb5" value="ILLUSTRATIVE" name="logo"/>
                                                <label for="cb5"><img src="breiflogo/kfc-log.jpg" /></label>
                                                <p>ILLUSTRATIVE</p>
                                              </li>
                                              <li><input type="checkbox" id="cb6" value="INITIALS" name="logo"/>
                                                <label for="cb6"><img src="breiflogo/gn-lo.jpg" /></label>
                                                <p>INITIALS</p>
                                              </li>
                                              <li><input type="checkbox" id="cb7" value="FUN" name="logo"/>
                                                <label for="cb7"><img src="breiflogo/fanta-log.jpg" /></label>
                                                <p>FUN</p>
                                              </li>
                                              <li><input type="checkbox" id="cb8" value="SPORTY" name="logo"/>
                                                <label for="cb8"><img src="breiflogo/egale-log.jpg" /></label>
                                                <p>SPORTY</p>
                                              </li>
                                              <li><input type="checkbox" id="cb9" value="SHIELD" name="logo"/>
                                                <label for="cb9"><img src="breiflogo/porch-log.jpg" /></label>
                                                <p>SHIELD</p>
                                              </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <label>BRANDNAME IN LOGO:<span class="req-field-star">*</span></label>
                                        <input type="text"  id="logotext2" name="text1" required>
                                    </li>
                                    <li>
                                        <label>LOGO TAGLINE:</label>
                                        <input type="text" id="logotext3" name="tag_line">
                                    </li>
                                    <!--<li>-->
                                    <!--    <label>PLEASE PROVIDE A BRIEF DESCRIPTION OF YOUR BUSINESS. YOU MAY ALSO WANT TO-->
                                    <!--        LIST WEBSITE ADDRESSES OF YOUR COMPETITORS, IF ANY.</label>-->
                                    <!--    <input type="text" id="logotext4" name="description_text">-->
                                    <!--</li>-->
                                    
                                    <li>
                                        <label>THINGS TO AVOID:</label>
                                        <input type="text" id="logotext5" name="design_concept">
                                    </li>
                                    <li>
                                        <label>WEBSITE URL:</label>
                                        <input type="text" id="logotext6" name="website_address">
                                    </li>
                                </ul>
                            </div>
                            </div>
                         
            <!-- One "tab" for each step in the form: -->
            <div class="form-sec step-1-form logo-brief-form">
                    <button class="accordion" style="background-color:#f8a217; color:#fff;">Confirm Order</button>
                     <div class="panel">
                <ul>
                    <li>
                    <label>DESCRIPTION </label>
                    <textarea type="text" placeholder=""  id="pname" name="description"
                      ></textarea>
                    </li>
                    <li>
                    <label>Amount: USD </label>
                    <input type="text" placeholder="" id="pprice"
                        value="$<?=$sell_price?>" name="amout"
                        >
                    </li>
                    <hr>
                    <li>
                    <label>COUNTRY <span class="req-field-star">*</span></label>
                    <select id="countryId" data-validation="required" name="country" class="valid">
                        <option value="">Select</option>
                        <option value=NIL>No Country</option><option value="United States">United States</option><option value="United Kindom">United Kingdom</option><option value="Spain">Spain</option><option value="Canada">Canada</option><option value="Australia">Australia</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option><option value="Bahamas (the)">Bahamas (the)</option><option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value=BEN>Benin</option><option value=BMU>Bermuda</option><option value=BTN>Bhutan</option><option value=BOL>Bolivia (Plurinational State of)</option><option value=BES>Bonaire, Sint Eustatius and Saba</option><option value=BIH>Bosnia and Herzegovina</option><option value=BWA>Botswana</option><option value=BVT>Bouvet Island</option><option value=BRA>Brazil</option><option value=IOT>British Indian Ocean Territory (the)</option><option value=BRN>Brunei Darussalam</option><option value=BGR>Bulgaria</option><option value=BFA>Burkina Faso</option><option value=BDI>Burundi</option><option value=CPV>Cabo Verde</option><option value=KHM>Cambodia</option><option value=CMR>Cameroon</option><option value=CYM>Cayman Islands (the)</option><option value=CAF>Central African Republic (the)</option><option value=TCD>Chad</option><option value=CHL>Chile</option><option value=CHN>China</option><option value=CXR>Christmas Island</option><option value=CCK>Cocos (Keeling) Islands (the)</option><option value=COL>Colombia</option><option value=COM>Comoros (the)</option><option value=COD>Congo (the Democratic Republic of the)</option><option value=COG>Congo (the)</option><option value=COK>Cook Islands (the)</option><option value=CRI>Costa Rica</option><option value=HRV>Croatia</option><option value=CUB>Cuba</option><option value=CUW>Curaçao</option><option value=CYP>Cyprus</option><option value=CZE>Czechia</option><option value=CIV>Côte d'Ivoire</option><option value=DNK>Denmark</option><option value=DJI>Djibouti</option><option value=DMA>Dominica</option><option value=DOM>Dominican Republic (the)</option><option value=ECU>Ecuador</option><option value=EGY>Egypt</option><option value=SLV>El Salvador</option><option value=GNQ>Equatorial Guinea</option><option value=ERI>Eritrea</option><option value=EST>Estonia</option><option value=SWZ>Eswatini</option><option value=ETH>Ethiopia</option><option value=FLK>Falkland Islands (the) [Malvinas]</option><option value=FRO>Faroe Islands (the)</option><option value=FJI>Fiji</option><option value=FIN>Finland</option><option value=FRA>France</option><option value=GUF>French Guiana</option><option value=PYF>French Polynesia</option><option value=ATF>French Southern Territories (the)</option><option value=GAB>Gabon</option><option value=GMB>Gambia (the)</option><option value=GEO>Georgia</option><option value=DEU>Germany</option><option value=GHA>Ghana</option><option value=GIB>Gibraltar</option><option value=GRC>Greece</option><option value=GRL>Greenland</option><option value=GRD>Grenada</option><option value=GLP>Guadeloupe</option><option value=GUM>Guam</option><option value=GTM>Guatemala</option><option value=GGY>Guernsey</option><option value=GIN>Guinea</option><option value=GNB>Guinea-Bissau</option><option value=GUY>Guyana</option><option value=HTI>Haiti</option><option value=HMD>Heard Island and McDonald Islands</option><option value=VAT>Holy See (the)</option><option value=HND>Honduras</option><option value=HKG>Hong Kong</option><option value=HUN>Hungary</option><option value=ISL>Iceland</option><option value=IND>India</option><option value=IDN>Indonesia</option><option value=IRN>Iran (Islamic Republic of)</option><option value=IRQ>Iraq</option><option value=IRL>Ireland</option><option value=IMN>Isle of Man</option><option value=ISR>Israel</option><option value=ITA>Italy</option><option value=JAM>Jamaica</option><option value=JPN>Japan</option><option value=JEY>Jersey</option><option value=JOR>Jordan</option><option value=KAZ>Kazakhstan</option><option value=KEN>Kenya</option><option value=KIR>Kiribati</option><option value=PRK>Korea (the Democratic People's Republic of)</option><option value=KOR>Korea (the Republic of)</option><option value=KWT>Kuwait</option><option value=KGZ>Kyrgyzstan</option><option value=LAO>Lao People's Democratic Republic (the)</option><option value=LVA>Latvia</option><option value=LBN>Lebanon</option><option value=LSO>Lesotho</option><option value=LBR>Liberia</option><option value=LBY>Libya</option><option value=LIE>Liechtenstein</option><option value=LTU>Lithuania</option><option value=LUX>Luxembourg</option><option value=MAC>Macao</option><option value=MDG>Madagascar</option><option value=MWI>Malawi</option><option value=MYS>Malaysia</option><option value=MDV>Maldives</option><option value=MLI>Mali</option><option value=MLT>Malta</option><option value=MHL>Marshall Islands (the)</option><option value=MTQ>Martinique</option><option value=MRT>Mauritania</option><option value=MUS>Mauritius</option><option value=MYT>Mayotte</option><option value=MEX>Mexico</option><option value=FSM>Micronesia (Federated States of)</option><option value=MDA>Moldova (the Republic of)</option><option value=MCO>Monaco</option><option value=MNG>Mongolia</option><option value=MNE>Montenegro</option><option value=MSR>Montserrat</option><option value=MAR>Morocco</option><option value=MOZ>Mozambique</option><option value=MMR>Myanmar</option><option value=NAM>Namibia</option><option value=NRU>Nauru</option><option value=NPL>Nepal</option><option value=NLD>Netherlands (the)</option><option value=NCL>New Caledonia</option><option value=NZL>New Zealand</option><option value=NIC>Nicaragua</option><option value=NER>Niger (the)</option><option value=NGA>Nigeria</option><option value=NIU>Niue</option><option value=NFK>Norfolk Island</option><option value=MNP>Northern Mariana Islands (the)</option><option value=NOR>Norway</option><option value=OMN>Oman</option><option value=PAK>Pakistan</option><option value=PLW>Palau</option><option value=PSE>Palestine, State of</option><option value=PAN>Panama</option><option value=PNG>Papua New Guinea</option><option value=PRY>Paraguay</option><option value=PER>Peru</option><option value=PHL>Philippines (the)</option><option value=PCN>Pitcairn</option><option value=POL>Poland</option><option value=PRT>Portugal</option><option value=PRI>Puerto Rico</option><option value=QAT>Qatar</option><option value=MKD>Republic of North Macedonia</option><option value=ROU>Romania</option><option value=RUS>Russian Federation (the)</option><option value=RWA>Rwanda</option><option value=REU>Réunion</option><option value=BLM>Saint Barthélemy</option><option value=SHN>Saint Helena, Ascension and Tristan da Cunha</option><option value=KNA>Saint Kitts and Nevis</option><option value=LCA>Saint Lucia</option><option value=MAF>Saint Martin (French part)</option><option value=SPM>Saint Pierre and Miquelon</option><option value=VCT>Saint Vincent and the Grenadines</option><option value=WSM>Samoa</option><option value=SMR>San Marino</option><option value=STP>Sao Tome and Principe</option><option value=SAU>Saudi Arabia</option><option value=SEN>Senegal</option><option value=SRB>Serbia</option><option value=SYC>Seychelles</option><option value=SLE>Sierra Leone</option><option value=SGP>Singapore</option><option value=SXM>Sint Maarten (Dutch part)</option><option value=SVK>Slovakia</option><option value=SVN>Slovenia</option><option value=SLB>Solomon Islands</option><option value=SOM>Somalia</option><option value=ZAF>South Africa</option><option value=SGS>South Georgia and the South Sandwich Islands</option><option value=SSD>South Sudan</option><option value=LKA>Sri Lanka</option><option value=SDN>Sudan (the)</option><option value=SUR>Suriname</option><option value=SJM>Svalbard and Jan Mayen</option><option value=SWE>Sweden</option><option value=CHE>Switzerland</option><option value=SYR>Syrian Arab Republic</option><option value=TWN>Taiwan (Province of China)</option><option value=TJK>Tajikistan</option><option value=TZA>Tanzania, United Republic of</option><option value=THA>Thailand</option><option value=TLS>Timor-Leste</option><option value=TGO>Togo</option><option value=TKL>Tokelau</option><option value=TON>Tonga</option><option value=TTO>Trinidad and Tobago</option><option value=TUN>Tunisia</option><option value=TUR>Turkey</option><option value=TKM>Turkmenistan</option><option value=TCA>Turks and Caicos Islands (the)</option><option value=TUV>Tuvalu</option><option value=UGA>Uganda</option><option value=UKR>Ukraine</option><option value=ARE>United Arab Emirates (the)</option><option value=UMI>United States Minor Outlying Islands (the)</option><option value=URY>Uruguay</option><option value=UZB>Uzbekistan</option><option value=VUT>Vanuatu</option><option value=VEN>Venezuela (Bolivarian Republic of)</option><option value=VNM>Viet Nam</option><option value=VGB>Virgin Islands (British)</option><option value=VIR>Virgin Islands (U.S.)</option><option value=WLF>Wallis and Futuna</option><option value=ESH>Western Sahara</option><option value=YEM>Yemen</option><option value=ZMB>Zambia</option><option value=ZWE>Zimbabwe</option><option value=ALA>Åland Islands</option>                    </select>
                    </li>
                    <li>
                    <label>ZIP/POSTAL CODE</label>
                    <input type="text" name="postal_code" placeholder="" id="txtShipPostalCode"
                     maxlength="5"
                        onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                    </li>
                    <li>
                    <label>CITY </label>
                    <input type="text"  name="city" placeholder="" id="txtShipCity">
                    </li>
                    <!--<li>
                    <label>STATE/PROVINCE <span class="req-field-star">*</span></label>
                    <select data-validation="required" id="stateName" name="customer[state]">
                        <option value="">Select State</option>
                        
                    </select>
                    </li>-->
                    <li>
                    <label>Telephone</label>
                    <input type="text" name="telephone" placeholder="" id="txtPhoneNumber"
                        maxlength="10"
                        onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');">
                    </li>
                    <!--<li>-->
                    <!--<label>EMAIL <span class="req-field-star">*</span></label>-->
                    <!--<input type="text" data-validation="required" name="email" placeholder="" id="txtEmailAddress">-->
                    <!--</li>-->
                    <hr>
                    <!--<img class="img-responsive in-block" src="img/visa.png"
                    style="text-align: center;margin: 0 auto;">
                    <li>
                    <label>CARD NAME: <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="card[name]" placeholder="" id=""
                        >
                    </li>
                    <li>
                    <label>CARD NUMBER: <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="card[number]" placeholder="" id="txtCardNumber"
                        maxlength="16">
                    </li>
                    <li>
                    <label>EXP DATE: <span class="req-field-star">*</span></label>
                    <select id="cmbCardMonth" data-validation="required" class="required month" name="card[expiryMonth]">
                        <option value="">Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select id="cmbCardYear" data-validation="required" class="required year" name="card[expiryYear]">
                        <?php
                            /*$year = date("Y");
                            for($i=0; $i < 25; $i++)
                            {
                                echo '<option value="'.$year.'">'.$year.'</option>';
                                $year++;
                            }*/
                        ?>
                       
                    </select>
                    </li>
                    <li>
                    <label>CVV: <span class="req-field-star">*</span></label>
                    <input type="text" data-validation="required" name="card[cvv]" placeholder="" id="txtCardSecurityCode"
                        maxlength="4">
                    </li>-->
                </ul>
            </div>

            <div class="privacy-terms paddingBottom">
                <input type="checkbox" name="terms_conditions" required>
                <label>I accept <a href="terms-conditions" target="blank">Terms
                condition</a> and <a href="privacy-policy" target="blank">Privacy Policy</a>.</label>
            </div>
              </div>
            <!--<div class="col-md-12">-->
            <!--    <div id="finalFormResult" style="margin: 15px 0"></div>-->
            <!--</div>-->
         
            <div class="form-sec">
                <ul>
                    <li class="submit-btn">
                    <button type="submit" class="btn btn-red a-btn"  name="submit"
                        >Submit</button>
                    <img class="img-responsive in-block" src="img/verfication.png"
                        style="margin-top: 16px;">
                    </li>
                </ul>
            </div>
           
        </form>
        
      </div>
        <div class="col-lg-3 sidebar">
            <h2><span>Need</span> Assistance?</h2>
            <ul>
                 <li><a href="tel:+1(347) 707-1217"><i class="fa fa-phone" aria-hidden="true"></i>
                 <span>Toll Free:</span> +1(347) 707-1217</a></li>
                <li><a href="javascript:void(Tawk_API.toggle())" class="chat"><i class="fa fa-comments"
                    aria-hidden="true"></i>
                    <span>Live Chat:</span>with our expert</a>
                </li>
            </ul>
        </div>
    </div>
  </div>
</section>

<?php
  require_once("orderinclude/footer.php");
?>
<script src="../js/jquery.js"></script>

<script>
  // W3C's JS Code
  var acc = document.getElementsByClassName("accordion");
  var i;
  
  // Open the first accordion
  var firstAccordion = acc[0];
  var firstPanel = firstAccordion.nextElementSibling;
  firstAccordion.classList.add("active");
  firstPanel.style.maxHeight = firstPanel.scrollHeight + "px";
  
  var secondAccordion = acc[1];
  var secondPanel = secondAccordion.nextElementSibling;
  secondAccordion.classList.add("active");
  secondPanel.style.maxHeight = secondPanel.scrollHeight + "px";
  var thirdAccordion = acc[2];
  var thirdPanel = thirdAccordion.nextElementSibling;
  thirdAccordion.classList.add("active");
  thirdPanel.style.maxHeight = thirdPanel.scrollHeight + "px";
  // Add onclick listener to every accordion element
  for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
      // For toggling purposes detect if the clicked section is already "active"
      var isActive = this.classList.contains("active");

      // Close all accordions
      var allAccordions = document.getElementsByClassName("accordion");
      for (j = 0; j < allAccordions.length; j++) {
        // Remove active class from section header
        allAccordions[j].classList.remove("active");

        // Remove the max-height class from the panel to close it
        var panel = allAccordions[j].nextElementSibling;
        var maxHeightValue = getStyle(panel, "maxHeight");
      
      if (maxHeightValue !== "0px") {
          panel.style.maxHeight = null;
        }
      }

      // Toggle the clicked section using a ternary operator
      isActive ? this.classList.remove("active") : this.classList.add("active");

      // Toggle the panel element
      var panel = this.nextElementSibling;
      var maxHeightValue = getStyle(panel, "maxHeight");
      
      if (maxHeightValue !== "0px") {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    };
  }
  
  // Cross-browser way to get the computed height of a certain element. Credit to @CMS on StackOverflow (http://stackoverflow.com/a/2531934/7926565)
  function getStyle(el, styleProp) {
  var value, defaultView = (el.ownerDocument || document).defaultView;
  // W3C standard way:
  if (defaultView && defaultView.getComputedStyle) {
    // sanitize property name to css notation
    // (hypen separated words eg. font-Size)
    styleProp = styleProp.replace(/([A-Z])/g, "-$1").toLowerCase();
    return defaultView.getComputedStyle(el, null).getPropertyValue(styleProp);
  } else if (el.currentStyle) { // IE
    // sanitize property name to camelCase
    styleProp = styleProp.replace(/\-(\w)/g, function(str, letter) {
      return letter.toUpperCase();
    });
    value = el.currentStyle[styleProp];
    // convert other units to pixels on IE
    if (/^\d+(em|pt|%|ex)?$/i.test(value)) { 
      return (function(value) {
        var oldLeft = el.style.left, oldRsLeft = el.runtimeStyle.left;
        el.runtimeStyle.left = el.currentStyle.left;
        el.style.left = value || 0;
        value = el.style.pixelLeft + "px";
        el.style.left = oldLeft;
        el.runtimeStyle.left = oldRsLeft;
        return value;
      })(value);
    }
    return value;
  }
}
</script>
</body>
</html>