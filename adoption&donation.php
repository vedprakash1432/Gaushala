<?php include("./admin/Config/functions.php"); ?>
<?php include('header.php'); ?>

<?php
 if(isset($_POST['submit'])){
    $amount =$_POST['amount'];
    $title =$_POST['title'];
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $email =$_POST['email'];
    $phone =$_POST['number'];
    $country =$_POST['country'];
    $state =$_POST['state'];
    $address =$_POST['address'];

    global $db;

    $insert ="INSERT INTO donations(Title,First_Name,Last_Name,Email,Phone,Country,State,Address,Amount)";
    $insert .="VALUES(:title,:fname,:lname,:email,:phone,:country,:state,:address,:amount)";

    $stmt =$db->prepare($insert);

    $stmt->bindValue(':title',$title);
    $stmt->bindValue(':fname',$fname);
    $stmt->bindValue(':lname',$lname);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':phone',$phone);
    $stmt->bindValue(':country',$country);
    $stmt->bindValue(':state',$state);
    $stmt->bindValue(':address',$address);
    $stmt->bindValue(':amount',$amount);

    $Execute =$stmt->execute();

    if($Execute){  
        echo "<script>alert('Form submited Successfully')</script>";
         ?> <script>// windows.location.href="checkout.php"</script><?php
    }

 }
?>

<!-- Photo Gallery  -->

<div class="container">
    <div class="row p-0 m-0">
        <h1 class="text-center mt-3 list-group-item-primary py-3 rounded border shadow">Donate</h1>
        <!-- <hr class="my-4">
        <div class="row my-2 p-0 m-0">
            <h1>
                Adopt a Cow :
            </h1>
            <div class="col-md-3">
                <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image adopt_image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVAQlyolxYwhSUB3yt5WBmzW6HjIVhoAIUHg&s" alt="">
                    <h2 class="">
                        JERSEY COW
                    </h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image">
                    <img src="images/IMG_1072.JPG" alt="">
                    <h2>
                        Sindhi
                    </h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image">
                    <img src="images/IMG_1072.JPG" alt="">
                    <h2>
                        Sindhi
                    </h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image">
                    <img src="images/IMG_1072.JPG" alt="">
                    <h2>
                        Sindhi
                    </h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image">
                    <img src="images/IMG_1072.JPG" alt="">
                    <h2>
                        Sindhi
                    </h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image">
                    <img src="images/IMG_1072.JPG" alt="">
                    <h2>
                        Sindhi
                    </h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image">
                    <img src="images/IMG_1072.JPG" alt="">
                    <h2>
                        Sindhi
                    </h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image">
                    <img src="images/IMG_1072.JPG" alt="">
                    <h2>
                        Sindhi
                    </h2>
                </div>
            </div>
            <div class="adopt_btn text-center my-3">
                <button type="button" class="btn btn-outline-primary shadow py-2 px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Adopt a Cow</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-gem"></i> Adopt a Cow</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-bookmark-check"></i></label>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Select Category of Cow</option>
                                            <option value="1">JERSEY COW</option>
                                            <option value="2">BROWN SWISS</option>
                                            <option value="3">GUERNSEY</option>
                                            <option value="3">AYRSHIRE</option>
                                            <option value="3">RED AND WHITE HOLSTEIN</option>
                                            <option value="3">MILKING SHORTHORN</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Your Full Name" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Enter Your Email" aria-label="email" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone"></i></span>
                                        <input type="number" class="form-control" placeholder="Enter Your Mobile Number" aria-label="mobile" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-pin-map"></i></label>
                                        <select name="data[country]" id="country_name" class="form-select">
                                            <option data-iso="af" value="Afghanistan">
                                                Afghanistan </option>
                                            <option data-iso="al" value="Albania">
                                                Albania </option>
                                            <option data-iso="dz" value="Algeria">
                                                Algeria </option>
                                            <option data-iso="as" value="American Samoa">
                                                American Samoa </option>
                                            <option data-iso="ad" value="Andorra">
                                                Andorra </option>
                                            <option data-iso="ao" value="Angola">
                                                Angola </option>
                                            <option data-iso="ai" value="Anguilla">
                                                Anguilla </option>
                                            <option data-iso="aq" value="Antarctica">
                                                Antarctica </option>
                                            <option data-iso="ag" value="Antigua And Barbuda">
                                                Antigua And Barbuda </option>
                                            <option data-iso="ar" value="Argentina">
                                                Argentina </option>
                                            <option data-iso="am" value="Armenia">
                                                Armenia </option>
                                            <option data-iso="aw" value="Aruba">
                                                Aruba </option>
                                            <option data-iso="au" value="Australia">
                                                Australia </option>
                                            <option data-iso="at" value="Austria">
                                                Austria </option>
                                            <option data-iso="az" value="Azerbaijan">
                                                Azerbaijan </option>
                                            <option data-iso="bs" value="Bahamas The">
                                                Bahamas The </option>
                                            <option data-iso="bh" value="Bahrain">
                                                Bahrain </option>
                                            <option data-iso="bd" value="Bangladesh">
                                                Bangladesh </option>
                                            <option data-iso="bb" value="Barbados">
                                                Barbados </option>
                                            <option data-iso="by" value="Belarus">
                                                Belarus </option>
                                            <option data-iso="be" value="Belgium">
                                                Belgium </option>
                                            <option data-iso="bz" value="Belize">
                                                Belize </option>
                                            <option data-iso="bj" value="Benin">
                                                Benin </option>
                                            <option data-iso="bm" value="Bermuda">
                                                Bermuda </option>
                                            <option data-iso="bt" value="Bhutan">
                                                Bhutan </option>
                                            <option data-iso="bo" value="Bolivia">
                                                Bolivia </option>
                                            <option data-iso="ba" value="Bosnia and Herzegovina">
                                                Bosnia and Herzegovina </option>
                                            <option data-iso="bw" value="Botswana">
                                                Botswana </option>
                                            <option data-iso="bv" value="Bouvet Island">
                                                Bouvet Island </option>
                                            <option data-iso="br" value="Brazil">
                                                Brazil </option>
                                            <option data-iso="io" value="British Indian Ocean Territory">
                                                British Indian Ocean Territory </option>
                                            <option data-iso="bn" value="Brunei">
                                                Brunei </option>
                                            <option data-iso="bg" value="Bulgaria">
                                                Bulgaria </option>
                                            <option data-iso="bf" value="Burkina Faso">
                                                Burkina Faso </option>
                                            <option data-iso="bi" value="Burundi">
                                                Burundi </option>
                                            <option data-iso="kh" value="Cambodia">
                                                Cambodia </option>
                                            <option data-iso="cm" value="Cameroon">
                                                Cameroon </option>
                                            <option data-iso="ca" value="Canada">
                                                Canada </option>
                                            <option data-iso="cv" value="Cape Verde">
                                                Cape Verde </option>
                                            <option data-iso="ky" value="Cayman Islands">
                                                Cayman Islands </option>
                                            <option data-iso="cf" value="Central African Republic">
                                                Central African Republic </option>
                                            <option data-iso="td" value="Chad">
                                                Chad </option>
                                            <option data-iso="cl" value="Chile">
                                                Chile </option>
                                            <option data-iso="cn" value="China">
                                                China </option>
                                            <option data-iso="cx" value="Christmas Island">
                                                Christmas Island </option>
                                            <option data-iso="cc" value="Cocos (Keeling) Islands">
                                                Cocos (Keeling) Islands </option>
                                            <option data-iso="co" value="Colombia">
                                                Colombia </option>
                                            <option data-iso="km" value="Comoros">
                                                Comoros </option>
                                            <option data-iso="cg" value="Republic Of The Congo">
                                                Republic Of The Congo </option>
                                            <option data-iso="cd" value="Democratic Republic Of The Congo">
                                                Democratic Republic Of The Congo </option>
                                            <option data-iso="ck" value="Cook Islands">
                                                Cook Islands </option>
                                            <option data-iso="cr" value="Costa Rica">
                                                Costa Rica </option>
                                            <option data-iso="ci" value="Cote D'Ivoire (Ivory Coast)">
                                                Cote D'Ivoire (Ivory Coast) </option>
                                            <option data-iso="hr" value="Croatia (Hrvatska)">
                                                Croatia (Hrvatska) </option>
                                            <option data-iso="cu" value="Cuba">
                                                Cuba </option>
                                            <option data-iso="cy" value="Cyprus">
                                                Cyprus </option>
                                            <option data-iso="cz" value="Czech Republic">
                                                Czech Republic </option>
                                            <option data-iso="dk" value="Denmark">
                                                Denmark </option>
                                            <option data-iso="dj" value="Djibouti">
                                                Djibouti </option>
                                            <option data-iso="dm" value="Dominica">
                                                Dominica </option>
                                            <option data-iso="do" value="Dominican Republic">
                                                Dominican Republic </option>
                                            <option data-iso="tp" value="East Timor">
                                                East Timor </option>
                                            <option data-iso="ec" value="Ecuador">
                                                Ecuador </option>
                                            <option data-iso="eg" value="Egypt">
                                                Egypt </option>
                                            <option data-iso="sv" value="El Salvador">
                                                El Salvador </option>
                                            <option data-iso="gq" value="Equatorial Guinea">
                                                Equatorial Guinea </option>
                                            <option data-iso="er" value="Eritrea">
                                                Eritrea </option>
                                            <option data-iso="ee" value="Estonia">
                                                Estonia </option>
                                            <option data-iso="et" value="Ethiopia">
                                                Ethiopia </option>
                                            <option data-iso="xa" value="External Territories of Australia">
                                                External Territories of Australia </option>
                                            <option data-iso="fk" value="Falkland Islands">
                                                Falkland Islands </option>
                                            <option data-iso="fo" value="Faroe Islands">
                                                Faroe Islands </option>
                                            <option data-iso="fj" value="Fiji Islands">
                                                Fiji Islands </option>
                                            <option data-iso="fi" value="Finland">
                                                Finland </option>
                                            <option data-iso="fr" value="France">
                                                France </option>
                                            <option data-iso="gf" value="French Guiana">
                                                French Guiana </option>
                                            <option data-iso="pf" value="French Polynesia">
                                                French Polynesia </option>
                                            <option data-iso="tf" value="French Southern Territories">
                                                French Southern Territories </option>
                                            <option data-iso="ga" value="Gabon">
                                                Gabon </option>
                                            <option data-iso="gm" value="Gambia The">
                                                Gambia The </option>
                                            <option data-iso="ge" value="Georgia">
                                                Georgia </option>
                                            <option data-iso="de" value="Germany">
                                                Germany </option>
                                            <option data-iso="gh" value="Ghana">
                                                Ghana </option>
                                            <option data-iso="gi" value="Gibraltar">
                                                Gibraltar </option>
                                            <option data-iso="gr" value="Greece">
                                                Greece </option>
                                            <option data-iso="gl" value="Greenland">
                                                Greenland </option>
                                            <option data-iso="gd" value="Grenada">
                                                Grenada </option>
                                            <option data-iso="gp" value="Guadeloupe">
                                                Guadeloupe </option>
                                            <option data-iso="gu" value="Guam">
                                                Guam </option>
                                            <option data-iso="gt" value="Guatemala">
                                                Guatemala </option>
                                            <option data-iso="xu" value="Guernsey and Alderney">
                                                Guernsey and Alderney </option>
                                            <option data-iso="gn" value="Guinea">
                                                Guinea </option>
                                            <option data-iso="gw" value="Guinea-Bissau">
                                                Guinea-Bissau </option>
                                            <option data-iso="gy" value="Guyana">
                                                Guyana </option>
                                            <option data-iso="ht" value="Haiti">
                                                Haiti </option>
                                            <option data-iso="hm" value="Heard and McDonald Islands">
                                                Heard and McDonald Islands </option>
                                            <option data-iso="hn" value="Honduras">
                                                Honduras </option>
                                            <option data-iso="hk" value="Hong Kong S.A.R.">
                                                Hong Kong S.A.R. </option>
                                            <option data-iso="hu" value="Hungary">
                                                Hungary </option>
                                            <option data-iso="is" value="Iceland">
                                                Iceland </option>
                                            <option selected data-iso="in" value="India">
                                                India </option>
                                            <option data-iso="id" value="Indonesia">
                                                Indonesia </option>
                                            <option data-iso="ir" value="Iran">
                                                Iran </option>
                                            <option data-iso="iq" value="Iraq">
                                                Iraq </option>
                                            <option data-iso="ie" value="Ireland">
                                                Ireland </option>
                                            <option data-iso="il" value="Israel">
                                                Israel </option>
                                            <option data-iso="it" value="Italy">
                                                Italy </option>
                                            <option data-iso="jm" value="Jamaica">
                                                Jamaica </option>
                                            <option data-iso="jp" value="Japan">
                                                Japan </option>
                                            <option data-iso="xj" value="Jersey">
                                                Jersey </option>
                                            <option data-iso="jo" value="Jordan">
                                                Jordan </option>
                                            <option data-iso="kz" value="Kazakhstan">
                                                Kazakhstan </option>
                                            <option data-iso="ke" value="Kenya">
                                                Kenya </option>
                                            <option data-iso="ki" value="Kiribati">
                                                Kiribati </option>
                                            <option data-iso="kp" value="Korea North">
                                                Korea North </option>
                                            <option data-iso="kr" value="Korea South">
                                                Korea South </option>
                                            <option data-iso="kw" value="Kuwait">
                                                Kuwait </option>
                                            <option data-iso="kg" value="Kyrgyzstan">
                                                Kyrgyzstan </option>
                                            <option data-iso="la" value="Laos">
                                                Laos </option>
                                            <option data-iso="lv" value="Latvia">
                                                Latvia </option>
                                            <option data-iso="lb" value="Lebanon">
                                                Lebanon </option>
                                            <option data-iso="ls" value="Lesotho">
                                                Lesotho </option>
                                            <option data-iso="lr" value="Liberia">
                                                Liberia </option>
                                            <option data-iso="ly" value="Libya">
                                                Libya </option>
                                            <option data-iso="li" value="Liechtenstein">
                                                Liechtenstein </option>
                                            <option data-iso="lt" value="Lithuania">
                                                Lithuania </option>
                                            <option data-iso="lu" value="Luxembourg">
                                                Luxembourg </option>
                                            <option data-iso="mo" value="Macau S.A.R.">
                                                Macau S.A.R. </option>
                                            <option data-iso="mk" value="Macedonia">
                                                Macedonia </option>
                                            <option data-iso="mg" value="Madagascar">
                                                Madagascar </option>
                                            <option data-iso="mw" value="Malawi">
                                                Malawi </option>
                                            <option data-iso="my" value="Malaysia">
                                                Malaysia </option>
                                            <option data-iso="mv" value="Maldives">
                                                Maldives </option>
                                            <option data-iso="ml" value="Mali">
                                                Mali </option>
                                            <option data-iso="mt" value="Malta">
                                                Malta </option>
                                            <option data-iso="xm" value="Man (Isle of)">
                                                Man (Isle of) </option>
                                            <option data-iso="mh" value="Marshall Islands">
                                                Marshall Islands </option>
                                            <option data-iso="mq" value="Martinique">
                                                Martinique </option>
                                            <option data-iso="mr" value="Mauritania">
                                                Mauritania </option>
                                            <option data-iso="mu" value="Mauritius">
                                                Mauritius </option>
                                            <option data-iso="yt" value="Mayotte">
                                                Mayotte </option>
                                            <option data-iso="mx" value="Mexico">
                                                Mexico </option>
                                            <option data-iso="fm" value="Micronesia">
                                                Micronesia </option>
                                            <option data-iso="md" value="Moldova">
                                                Moldova </option>
                                            <option data-iso="mc" value="Monaco">
                                                Monaco </option>
                                            <option data-iso="mn" value="Mongolia">
                                                Mongolia </option>
                                            <option data-iso="ms" value="Montserrat">
                                                Montserrat </option>
                                            <option data-iso="ma" value="Morocco">
                                                Morocco </option>
                                            <option data-iso="mz" value="Mozambique">
                                                Mozambique </option>
                                            <option data-iso="mm" value="Myanmar">
                                                Myanmar </option>
                                            <option data-iso="na" value="Namibia">
                                                Namibia </option>
                                            <option data-iso="nr" value="Nauru">
                                                Nauru </option>
                                            <option data-iso="np" value="Nepal">
                                                Nepal </option>
                                            <option data-iso="an" value="Netherlands Antilles">
                                                Netherlands Antilles </option>
                                            <option data-iso="nl" value="Netherlands The">
                                                Netherlands The </option>
                                            <option data-iso="nc" value="New Caledonia">
                                                New Caledonia </option>
                                            <option data-iso="nz" value="New Zealand">
                                                New Zealand </option>
                                            <option data-iso="ni" value="Nicaragua">
                                                Nicaragua </option>
                                            <option data-iso="ne" value="Niger">
                                                Niger </option>
                                            <option data-iso="ng" value="Nigeria">
                                                Nigeria </option>
                                            <option data-iso="nu" value="Niue">
                                                Niue </option>
                                            <option data-iso="nf" value="Norfolk Island">
                                                Norfolk Island </option>
                                            <option data-iso="mp" value="Northern Mariana Islands">
                                                Northern Mariana Islands </option>
                                            <option data-iso="no" value="Norway">
                                                Norway </option>
                                            <option data-iso="om" value="Oman">
                                                Oman </option>
                                            <option data-iso="pk" value="Pakistan">
                                                Pakistan </option>
                                            <option data-iso="pw" value="Palau">
                                                Palau </option>
                                            <option data-iso="ps" value="Palestinian Territory Occupied">
                                                Palestinian Territory Occupied </option>
                                            <option data-iso="pa" value="Panama">
                                                Panama </option>
                                            <option data-iso="pg" value="Papua new Guinea">
                                                Papua new Guinea </option>
                                            <option data-iso="py" value="Paraguay">
                                                Paraguay </option>
                                            <option data-iso="pe" value="Peru">
                                                Peru </option>
                                            <option data-iso="ph" value="Philippines">
                                                Philippines </option>
                                            <option data-iso="pn" value="Pitcairn Island">
                                                Pitcairn Island </option>
                                            <option data-iso="pl" value="Poland">
                                                Poland </option>
                                            <option data-iso="pt" value="Portugal">
                                                Portugal </option>
                                            <option data-iso="pr" value="Puerto Rico">
                                                Puerto Rico </option>
                                            <option data-iso="qa" value="Qatar">
                                                Qatar </option>
                                            <option data-iso="re" value="Reunion">
                                                Reunion </option>
                                            <option data-iso="ro" value="Romania">
                                                Romania </option>
                                            <option data-iso="ru" value="Russia">
                                                Russia </option>
                                            <option data-iso="rw" value="Rwanda">
                                                Rwanda </option>
                                            <option data-iso="sh" value="Saint Helena">
                                                Saint Helena </option>
                                            <option data-iso="kn" value="Saint Kitts And Nevis">
                                                Saint Kitts And Nevis </option>
                                            <option data-iso="lc" value="Saint Lucia">
                                                Saint Lucia </option>
                                            <option data-iso="pm" value="Saint Pierre and Miquelon">
                                                Saint Pierre and Miquelon </option>
                                            <option data-iso="vc" value="Saint Vincent And The Grenadines">
                                                Saint Vincent And The Grenadines </option>
                                            <option data-iso="ws" value="Samoa">
                                                Samoa </option>
                                            <option data-iso="sm" value="San Marino">
                                                San Marino </option>
                                            <option data-iso="st" value="Sao Tome and Principe">
                                                Sao Tome and Principe </option>
                                            <option data-iso="sa" value="Saudi Arabia">
                                                Saudi Arabia </option>
                                            <option data-iso="sn" value="Senegal">
                                                Senegal </option>
                                            <option data-iso="rs" value="Serbia">
                                                Serbia </option>
                                            <option data-iso="sc" value="Seychelles">
                                                Seychelles </option>
                                            <option data-iso="sl" value="Sierra Leone">
                                                Sierra Leone </option>
                                            <option data-iso="sg" value="Singapore">
                                                Singapore </option>
                                            <option data-iso="sk" value="Slovakia">
                                                Slovakia </option>
                                            <option data-iso="si" value="Slovenia">
                                                Slovenia </option>
                                            <option data-iso="xg" value="Smaller Territories of the UK">
                                                Smaller Territories of the UK </option>
                                            <option data-iso="sb" value="Solomon Islands">
                                                Solomon Islands </option>
                                            <option data-iso="so" value="Somalia">
                                                Somalia </option>
                                            <option data-iso="za" value="South Africa">
                                                South Africa </option>
                                            <option data-iso="gs" value="South Georgia">
                                                South Georgia </option>
                                            <option data-iso="ss" value="South Sudan">
                                                South Sudan </option>
                                            <option data-iso="es" value="Spain">
                                                Spain </option>
                                            <option data-iso="lk" value="Sri Lanka">
                                                Sri Lanka </option>
                                            <option data-iso="sd" value="Sudan">
                                                Sudan </option>
                                            <option data-iso="sr" value="Suriname">
                                                Suriname </option>
                                            <option data-iso="sj" value="Svalbard And Jan Mayen Islands">
                                                Svalbard And Jan Mayen Islands </option>
                                            <option data-iso="sz" value="Swaziland">
                                                Swaziland </option>
                                            <option data-iso="se" value="Sweden">
                                                Sweden </option>
                                            <option data-iso="ch" value="Switzerland">
                                                Switzerland </option>
                                            <option data-iso="sy" value="Syria">
                                                Syria </option>
                                            <option data-iso="tw" value="Taiwan">
                                                Taiwan </option>
                                            <option data-iso="tj" value="Tajikistan">
                                                Tajikistan </option>
                                            <option data-iso="tz" value="Tanzania">
                                                Tanzania </option>
                                            <option data-iso="th" value="Thailand">
                                                Thailand </option>
                                            <option data-iso="tg" value="Togo">
                                                Togo </option>
                                            <option data-iso="tk" value="Tokelau">
                                                Tokelau </option>
                                            <option data-iso="to" value="Tonga">
                                                Tonga </option>
                                            <option data-iso="tt" value="Trinidad And Tobago">
                                                Trinidad And Tobago </option>
                                            <option data-iso="tn" value="Tunisia">
                                                Tunisia </option>
                                            <option data-iso="tr" value="Turkey">
                                                Turkey </option>
                                            <option data-iso="tm" value="Turkmenistan">
                                                Turkmenistan </option>
                                            <option data-iso="tc" value="Turks And Caicos Islands">
                                                Turks And Caicos Islands </option>
                                            <option data-iso="tv" value="Tuvalu">
                                                Tuvalu </option>
                                            <option data-iso="ug" value="Uganda">
                                                Uganda </option>
                                            <option data-iso="ua" value="Ukraine">
                                                Ukraine </option>
                                            <option data-iso="ae" value="United Arab Emirates">
                                                United Arab Emirates </option>
                                            <option data-iso="gb" value="United Kingdom">
                                                United Kingdom </option>
                                            <option data-iso="us" value="United States">
                                                United States </option>
                                            <option data-iso="um" value="United States Minor Outlying Islands">
                                                United States Minor Outlying Islands </option>
                                            <option data-iso="uy" value="Uruguay">
                                                Uruguay </option>
                                            <option data-iso="uz" value="Uzbekistan">
                                                Uzbekistan </option>
                                            <option data-iso="vu" value="Vanuatu">
                                                Vanuatu </option>
                                            <option data-iso="va" value="Vatican City State (Holy See)">
                                                Vatican City State (Holy See) </option>
                                            <option data-iso="ve" value="Venezuela">
                                                Venezuela </option>
                                            <option data-iso="vn" value="Vietnam">
                                                Vietnam </option>
                                            <option data-iso="vg" value="Virgin Islands (British)">
                                                Virgin Islands (British) </option>
                                            <option data-iso="vi" value="Virgin Islands (US)">
                                                Virgin Islands (US) </option>
                                            <option data-iso="wf" value="Wallis And Futuna Islands">
                                                Wallis And Futuna Islands </option>
                                            <option data-iso="eh" value="Western Sahara">
                                                Western Sahara </option>
                                            <option data-iso="ye" value="Yemen">
                                                Yemen </option>
                                            <option data-iso="yu" value="Yugoslavia">
                                                Yugoslavia </option>
                                            <option data-iso="zm" value="Zambia">
                                                Zambia </option>
                                            <option data-iso="zw" value="Zimbabwe">
                                                Zimbabwe </option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-upc"></i></span>
                                        <input type="number" class="form-control" placeholder="Enter Your Pin Code Number" aria-label="pin" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                        <textarea class="form-control" aria-label="With textarea" placeholder="Enter Your Address"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <hr>
        <div class="row list-group-item-dark px-2 py-3 rounded  p-0 m-0">
           <div class=" text-center">
           <h3>
              <strong>Donor Information</strong>  
            </h3>
           </div>
           
                <hr class="text-danger mx-auto fw-3" style="width:40%;">
          
            <form action="" class="row g-3 needs-validation" method="post" enctype="multipart/form-data" novalidate>
                <p class="text-danger">
                    * All fields are required
                </p>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Please Enter Amount * :</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend"><i
                                class="bi bi-currency-rupee"></i></span>
                        <select class="form-select" name="amount" id="validationCustom04" required>
                            <option selected disabled value="">Select Amount</option>
                            <option value="501">501</option>
                            <option value="501">1001</option>
                            <option value="501">1100</option>
                            <option value="501">2001</option>
                            <option value="501">2100</option>
                            <option value="501">5001</option>
                            <option value="501">5100</option>
                            <option value="501">10001</option>
                            <option value="501">11000</option>
                            <option value="501">11000</option>
                            <option value="501">custom amount</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select an Amount
                        </div>
                        <div class="valid-feedback">
                            Look Good!
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-1">
                    <label for="validationCustom04" class="form-label">Title *</label>
                    <select class="form-select" name="title" id="validationCustom04" required>
                        <option class="" selected>Mr.</option>
                        <option class="" value="Mrs.">Mrs.</option>
                        <option class="" value="Ms.">Ms.</option>
                        <option class="" value="Other">Other</option>

                    </select>
                    <div class="invalid-feedback">
                        Please select an Amount
                    </div>
                </div>
                <div class="col-md-4 rounded">
                    <label for="validationCustomUsername" class="form-label">First Name * :</label>
                    <div class="input-group rounded">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="validationCustomUsername"
                            aria-describedby="inputGroupPrepend" required name="fname" placeholder="Enter Your First Name">
                        <div class="invalid-feedback">
                            Please Enter Your Name.
                        </div>
                        <div class="valid-feedback">
                            Look Good!
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last Name :</label>
                    <input type="text" class="form-control" name="lname" id="validationCustom02">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Email ID * :</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" name="email" id="validationCustomUsername"
                            aria-describedby="inputGroupPrepend" required placeholder="Enter Your Email">
                        <div class="invalid-feedback">
                            Please Enter a Valid Email.
                        </div>
                        <div class="valid-feedback">
                            Look Good!
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Mobile * :</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-telephone"></i></span>
                        <input type="number" class="form-control" name="number" id="validationCustomUsername"
                            aria-describedby="inputGroupPrepend" required placeholder="Enter Your Mobile Number"
                            min="1000000000" max="9999999999">
                        <div class="invalid-feedback">
                            Please Enter a Valid Mobile Number.
                        </div>
                        <div class="valid-feedback">
                            Look Good!
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Country * :</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-pin-map"></i></span>
                        <select name="country" id="country_name" class="form-select">
                            <option data-iso="af" value="Afghanistan">
                                Afghanistan </option>
                            <option data-iso="al" value="Albania">
                                Albania </option>
                            <option data-iso="dz" value="Algeria">
                                Algeria </option>
                            <option data-iso="as" value="American Samoa">
                                American Samoa </option>
                            <option data-iso="ad" value="Andorra">
                                Andorra </option>
                            <option data-iso="ao" value="Angola">
                                Angola </option>
                            <option data-iso="ai" value="Anguilla">
                                Anguilla </option>
                            <option data-iso="aq" value="Antarctica">
                                Antarctica </option>
                            <option data-iso="ag" value="Antigua And Barbuda">
                                Antigua And Barbuda </option>
                            <option data-iso="ar" value="Argentina">
                                Argentina </option>
                            <option data-iso="am" value="Armenia">
                                Armenia </option>
                            <option data-iso="aw" value="Aruba">
                                Aruba </option>
                            <option data-iso="au" value="Australia">
                                Australia </option>
                            <option data-iso="at" value="Austria">
                                Austria </option>
                            <option data-iso="az" value="Azerbaijan">
                                Azerbaijan </option>
                            <option data-iso="bs" value="Bahamas The">
                                Bahamas The </option>
                            <option data-iso="bh" value="Bahrain">
                                Bahrain </option>
                            <option data-iso="bd" value="Bangladesh">
                                Bangladesh </option>
                            <option data-iso="bb" value="Barbados">
                                Barbados </option>
                            <option data-iso="by" value="Belarus">
                                Belarus </option>
                            <option data-iso="be" value="Belgium">
                                Belgium </option>
                            <option data-iso="bz" value="Belize">
                                Belize </option>
                            <option data-iso="bj" value="Benin">
                                Benin </option>
                            <option data-iso="bm" value="Bermuda">
                                Bermuda </option>
                            <option data-iso="bt" value="Bhutan">
                                Bhutan </option>
                            <option data-iso="bo" value="Bolivia">
                                Bolivia </option>
                            <option data-iso="ba" value="Bosnia and Herzegovina">
                                Bosnia and Herzegovina </option>
                            <option data-iso="bw" value="Botswana">
                                Botswana </option>
                            <option data-iso="bv" value="Bouvet Island">
                                Bouvet Island </option>
                            <option data-iso="br" value="Brazil">
                                Brazil </option>
                            <option data-iso="io" value="British Indian Ocean Territory">
                                British Indian Ocean Territory </option>
                            <option data-iso="bn" value="Brunei">
                                Brunei </option>
                            <option data-iso="bg" value="Bulgaria">
                                Bulgaria </option>
                            <option data-iso="bf" value="Burkina Faso">
                                Burkina Faso </option>
                            <option data-iso="bi" value="Burundi">
                                Burundi </option>
                            <option data-iso="kh" value="Cambodia">
                                Cambodia </option>
                            <option data-iso="cm" value="Cameroon">
                                Cameroon </option>
                            <option data-iso="ca" value="Canada">
                                Canada </option>
                            <option data-iso="cv" value="Cape Verde">
                                Cape Verde </option>
                            <option data-iso="ky" value="Cayman Islands">
                                Cayman Islands </option>
                            <option data-iso="cf" value="Central African Republic">
                                Central African Republic </option>
                            <option data-iso="td" value="Chad">
                                Chad </option>
                            <option data-iso="cl" value="Chile">
                                Chile </option>
                            <option data-iso="cn" value="China">
                                China </option>
                            <option data-iso="cx" value="Christmas Island">
                                Christmas Island </option>
                            <option data-iso="cc" value="Cocos (Keeling) Islands">
                                Cocos (Keeling) Islands </option>
                            <option data-iso="co" value="Colombia">
                                Colombia </option>
                            <option data-iso="km" value="Comoros">
                                Comoros </option>
                            <option data-iso="cg" value="Republic Of The Congo">
                                Republic Of The Congo </option>
                            <option data-iso="cd" value="Democratic Republic Of The Congo">
                                Democratic Republic Of The Congo </option>
                            <option data-iso="ck" value="Cook Islands">
                                Cook Islands </option>
                            <option data-iso="cr" value="Costa Rica">
                                Costa Rica </option>
                            <option data-iso="ci" value="Cote D'Ivoire (Ivory Coast)">
                                Cote D'Ivoire (Ivory Coast) </option>
                            <option data-iso="hr" value="Croatia (Hrvatska)">
                                Croatia (Hrvatska) </option>
                            <option data-iso="cu" value="Cuba">
                                Cuba </option>
                            <option data-iso="cy" value="Cyprus">
                                Cyprus </option>
                            <option data-iso="cz" value="Czech Republic">
                                Czech Republic </option>
                            <option data-iso="dk" value="Denmark">
                                Denmark </option>
                            <option data-iso="dj" value="Djibouti">
                                Djibouti </option>
                            <option data-iso="dm" value="Dominica">
                                Dominica </option>
                            <option data-iso="do" value="Dominican Republic">
                                Dominican Republic </option>
                            <option data-iso="tp" value="East Timor">
                                East Timor </option>
                            <option data-iso="ec" value="Ecuador">
                                Ecuador </option>
                            <option data-iso="eg" value="Egypt">
                                Egypt </option>
                            <option data-iso="sv" value="El Salvador">
                                El Salvador </option>
                            <option data-iso="gq" value="Equatorial Guinea">
                                Equatorial Guinea </option>
                            <option data-iso="er" value="Eritrea">
                                Eritrea </option>
                            <option data-iso="ee" value="Estonia">
                                Estonia </option>
                            <option data-iso="et" value="Ethiopia">
                                Ethiopia </option>
                            <option data-iso="xa" value="External Territories of Australia">
                                External Territories of Australia </option>
                            <option data-iso="fk" value="Falkland Islands">
                                Falkland Islands </option>
                            <option data-iso="fo" value="Faroe Islands">
                                Faroe Islands </option>
                            <option data-iso="fj" value="Fiji Islands">
                                Fiji Islands </option>
                            <option data-iso="fi" value="Finland">
                                Finland </option>
                            <option data-iso="fr" value="France">
                                France </option>
                            <option data-iso="gf" value="French Guiana">
                                French Guiana </option>
                            <option data-iso="pf" value="French Polynesia">
                                French Polynesia </option>
                            <option data-iso="tf" value="French Southern Territories">
                                French Southern Territories </option>
                            <option data-iso="ga" value="Gabon">
                                Gabon </option>
                            <option data-iso="gm" value="Gambia The">
                                Gambia The </option>
                            <option data-iso="ge" value="Georgia">
                                Georgia </option>
                            <option data-iso="de" value="Germany">
                                Germany </option>
                            <option data-iso="gh" value="Ghana">
                                Ghana </option>
                            <option data-iso="gi" value="Gibraltar">
                                Gibraltar </option>
                            <option data-iso="gr" value="Greece">
                                Greece </option>
                            <option data-iso="gl" value="Greenland">
                                Greenland </option>
                            <option data-iso="gd" value="Grenada">
                                Grenada </option>
                            <option data-iso="gp" value="Guadeloupe">
                                Guadeloupe </option>
                            <option data-iso="gu" value="Guam">
                                Guam </option>
                            <option data-iso="gt" value="Guatemala">
                                Guatemala </option>
                            <option data-iso="xu" value="Guernsey and Alderney">
                                Guernsey and Alderney </option>
                            <option data-iso="gn" value="Guinea">
                                Guinea </option>
                            <option data-iso="gw" value="Guinea-Bissau">
                                Guinea-Bissau </option>
                            <option data-iso="gy" value="Guyana">
                                Guyana </option>
                            <option data-iso="ht" value="Haiti">
                                Haiti </option>
                            <option data-iso="hm" value="Heard and McDonald Islands">
                                Heard and McDonald Islands </option>
                            <option data-iso="hn" value="Honduras">
                                Honduras </option>
                            <option data-iso="hk" value="Hong Kong S.A.R.">
                                Hong Kong S.A.R. </option>
                            <option data-iso="hu" value="Hungary">
                                Hungary </option>
                            <option data-iso="is" value="Iceland">
                                Iceland </option>
                            <option selected data-iso="in" value="India">
                                India </option>
                            <option data-iso="id" value="Indonesia">
                                Indonesia </option>
                            <option data-iso="ir" value="Iran">
                                Iran </option>
                            <option data-iso="iq" value="Iraq">
                                Iraq </option>
                            <option data-iso="ie" value="Ireland">
                                Ireland </option>
                            <option data-iso="il" value="Israel">
                                Israel </option>
                            <option data-iso="it" value="Italy">
                                Italy </option>
                            <option data-iso="jm" value="Jamaica">
                                Jamaica </option>
                            <option data-iso="jp" value="Japan">
                                Japan </option>
                            <option data-iso="xj" value="Jersey">
                                Jersey </option>
                            <option data-iso="jo" value="Jordan">
                                Jordan </option>
                            <option data-iso="kz" value="Kazakhstan">
                                Kazakhstan </option>
                            <option data-iso="ke" value="Kenya">
                                Kenya </option>
                            <option data-iso="ki" value="Kiribati">
                                Kiribati </option>
                            <option data-iso="kp" value="Korea North">
                                Korea North </option>
                            <option data-iso="kr" value="Korea South">
                                Korea South </option>
                            <option data-iso="kw" value="Kuwait">
                                Kuwait </option>
                            <option data-iso="kg" value="Kyrgyzstan">
                                Kyrgyzstan </option>
                            <option data-iso="la" value="Laos">
                                Laos </option>
                            <option data-iso="lv" value="Latvia">
                                Latvia </option>
                            <option data-iso="lb" value="Lebanon">
                                Lebanon </option>
                            <option data-iso="ls" value="Lesotho">
                                Lesotho </option>
                            <option data-iso="lr" value="Liberia">
                                Liberia </option>
                            <option data-iso="ly" value="Libya">
                                Libya </option>
                            <option data-iso="li" value="Liechtenstein">
                                Liechtenstein </option>
                            <option data-iso="lt" value="Lithuania">
                                Lithuania </option>
                            <option data-iso="lu" value="Luxembourg">
                                Luxembourg </option>
                            <option data-iso="mo" value="Macau S.A.R.">
                                Macau S.A.R. </option>
                            <option data-iso="mk" value="Macedonia">
                                Macedonia </option>
                            <option data-iso="mg" value="Madagascar">
                                Madagascar </option>
                            <option data-iso="mw" value="Malawi">
                                Malawi </option>
                            <option data-iso="my" value="Malaysia">
                                Malaysia </option>
                            <option data-iso="mv" value="Maldives">
                                Maldives </option>
                            <option data-iso="ml" value="Mali">
                                Mali </option>
                            <option data-iso="mt" value="Malta">
                                Malta </option>
                            <option data-iso="xm" value="Man (Isle of)">
                                Man (Isle of) </option>
                            <option data-iso="mh" value="Marshall Islands">
                                Marshall Islands </option>
                            <option data-iso="mq" value="Martinique">
                                Martinique </option>
                            <option data-iso="mr" value="Mauritania">
                                Mauritania </option>
                            <option data-iso="mu" value="Mauritius">
                                Mauritius </option>
                            <option data-iso="yt" value="Mayotte">
                                Mayotte </option>
                            <option data-iso="mx" value="Mexico">
                                Mexico </option>
                            <option data-iso="fm" value="Micronesia">
                                Micronesia </option>
                            <option data-iso="md" value="Moldova">
                                Moldova </option>
                            <option data-iso="mc" value="Monaco">
                                Monaco </option>
                            <option data-iso="mn" value="Mongolia">
                                Mongolia </option>
                            <option data-iso="ms" value="Montserrat">
                                Montserrat </option>
                            <option data-iso="ma" value="Morocco">
                                Morocco </option>
                            <option data-iso="mz" value="Mozambique">
                                Mozambique </option>
                            <option data-iso="mm" value="Myanmar">
                                Myanmar </option>
                            <option data-iso="na" value="Namibia">
                                Namibia </option>
                            <option data-iso="nr" value="Nauru">
                                Nauru </option>
                            <option data-iso="np" value="Nepal">
                                Nepal </option>
                            <option data-iso="an" value="Netherlands Antilles">
                                Netherlands Antilles </option>
                            <option data-iso="nl" value="Netherlands The">
                                Netherlands The </option>
                            <option data-iso="nc" value="New Caledonia">
                                New Caledonia </option>
                            <option data-iso="nz" value="New Zealand">
                                New Zealand </option>
                            <option data-iso="ni" value="Nicaragua">
                                Nicaragua </option>
                            <option data-iso="ne" value="Niger">
                                Niger </option>
                            <option data-iso="ng" value="Nigeria">
                                Nigeria </option>
                            <option data-iso="nu" value="Niue">
                                Niue </option>
                            <option data-iso="nf" value="Norfolk Island">
                                Norfolk Island </option>
                            <option data-iso="mp" value="Northern Mariana Islands">
                                Northern Mariana Islands </option>
                            <option data-iso="no" value="Norway">
                                Norway </option>
                            <option data-iso="om" value="Oman">
                                Oman </option>
                            <option data-iso="pk" value="Pakistan">
                                Pakistan </option>
                            <option data-iso="pw" value="Palau">
                                Palau </option>
                            <option data-iso="ps" value="Palestinian Territory Occupied">
                                Palestinian Territory Occupied </option>
                            <option data-iso="pa" value="Panama">
                                Panama </option>
                            <option data-iso="pg" value="Papua new Guinea">
                                Papua new Guinea </option>
                            <option data-iso="py" value="Paraguay">
                                Paraguay </option>
                            <option data-iso="pe" value="Peru">
                                Peru </option>
                            <option data-iso="ph" value="Philippines">
                                Philippines </option>
                            <option data-iso="pn" value="Pitcairn Island">
                                Pitcairn Island </option>
                            <option data-iso="pl" value="Poland">
                                Poland </option>
                            <option data-iso="pt" value="Portugal">
                                Portugal </option>
                            <option data-iso="pr" value="Puerto Rico">
                                Puerto Rico </option>
                            <option data-iso="qa" value="Qatar">
                                Qatar </option>
                            <option data-iso="re" value="Reunion">
                                Reunion </option>
                            <option data-iso="ro" value="Romania">
                                Romania </option>
                            <option data-iso="ru" value="Russia">
                                Russia </option>
                            <option data-iso="rw" value="Rwanda">
                                Rwanda </option>
                            <option data-iso="sh" value="Saint Helena">
                                Saint Helena </option>
                            <option data-iso="kn" value="Saint Kitts And Nevis">
                                Saint Kitts And Nevis </option>
                            <option data-iso="lc" value="Saint Lucia">
                                Saint Lucia </option>
                            <option data-iso="pm" value="Saint Pierre and Miquelon">
                                Saint Pierre and Miquelon </option>
                            <option data-iso="vc" value="Saint Vincent And The Grenadines">
                                Saint Vincent And The Grenadines </option>
                            <option data-iso="ws" value="Samoa">
                                Samoa </option>
                            <option data-iso="sm" value="San Marino">
                                San Marino </option>
                            <option data-iso="st" value="Sao Tome and Principe">
                                Sao Tome and Principe </option>
                            <option data-iso="sa" value="Saudi Arabia">
                                Saudi Arabia </option>
                            <option data-iso="sn" value="Senegal">
                                Senegal </option>
                            <option data-iso="rs" value="Serbia">
                                Serbia </option>
                            <option data-iso="sc" value="Seychelles">
                                Seychelles </option>
                            <option data-iso="sl" value="Sierra Leone">
                                Sierra Leone </option>
                            <option data-iso="sg" value="Singapore">
                                Singapore </option>
                            <option data-iso="sk" value="Slovakia">
                                Slovakia </option>
                            <option data-iso="si" value="Slovenia">
                                Slovenia </option>
                            <option data-iso="xg" value="Smaller Territories of the UK">
                                Smaller Territories of the UK </option>
                            <option data-iso="sb" value="Solomon Islands">
                                Solomon Islands </option>
                            <option data-iso="so" value="Somalia">
                                Somalia </option>
                            <option data-iso="za" value="South Africa">
                                South Africa </option>
                            <option data-iso="gs" value="South Georgia">
                                South Georgia </option>
                            <option data-iso="ss" value="South Sudan">
                                South Sudan </option>
                            <option data-iso="es" value="Spain">
                                Spain </option>
                            <option data-iso="lk" value="Sri Lanka">
                                Sri Lanka </option>
                            <option data-iso="sd" value="Sudan">
                                Sudan </option>
                            <option data-iso="sr" value="Suriname">
                                Suriname </option>
                            <option data-iso="sj" value="Svalbard And Jan Mayen Islands">
                                Svalbard And Jan Mayen Islands </option>
                            <option data-iso="sz" value="Swaziland">
                                Swaziland </option>
                            <option data-iso="se" value="Sweden">
                                Sweden </option>
                            <option data-iso="ch" value="Switzerland">
                                Switzerland </option>
                            <option data-iso="sy" value="Syria">
                                Syria </option>
                            <option data-iso="tw" value="Taiwan">
                                Taiwan </option>
                            <option data-iso="tj" value="Tajikistan">
                                Tajikistan </option>
                            <option data-iso="tz" value="Tanzania">
                                Tanzania </option>
                            <option data-iso="th" value="Thailand">
                                Thailand </option>
                            <option data-iso="tg" value="Togo">
                                Togo </option>
                            <option data-iso="tk" value="Tokelau">
                                Tokelau </option>
                            <option data-iso="to" value="Tonga">
                                Tonga </option>
                            <option data-iso="tt" value="Trinidad And Tobago">
                                Trinidad And Tobago </option>
                            <option data-iso="tn" value="Tunisia">
                                Tunisia </option>
                            <option data-iso="tr" value="Turkey">
                                Turkey </option>
                            <option data-iso="tm" value="Turkmenistan">
                                Turkmenistan </option>
                            <option data-iso="tc" value="Turks And Caicos Islands">
                                Turks And Caicos Islands </option>
                            <option data-iso="tv" value="Tuvalu">
                                Tuvalu </option>
                            <option data-iso="ug" value="Uganda">
                                Uganda </option>
                            <option data-iso="ua" value="Ukraine">
                                Ukraine </option>
                            <option data-iso="ae" value="United Arab Emirates">
                                United Arab Emirates </option>
                            <option data-iso="gb" value="United Kingdom">
                                United Kingdom </option>
                            <option data-iso="us" value="United States">
                                United States </option>
                            <option data-iso="um" value="United States Minor Outlying Islands">
                                United States Minor Outlying Islands </option>
                            <option data-iso="uy" value="Uruguay">
                                Uruguay </option>
                            <option data-iso="uz" value="Uzbekistan">
                                Uzbekistan </option>
                            <option data-iso="vu" value="Vanuatu">
                                Vanuatu </option>
                            <option data-iso="va" value="Vatican City State (Holy See)">
                                Vatican City State (Holy See) </option>
                            <option data-iso="ve" value="Venezuela">
                                Venezuela </option>
                            <option data-iso="vn" value="Vietnam">
                                Vietnam </option>
                            <option data-iso="vg" value="Virgin Islands (British)">
                                Virgin Islands (British) </option>
                            <option data-iso="vi" value="Virgin Islands (US)">
                                Virgin Islands (US) </option>
                            <option data-iso="wf" value="Wallis And Futuna Islands">
                                Wallis And Futuna Islands </option>
                            <option data-iso="eh" value="Western Sahara">
                                Western Sahara </option>
                            <option data-iso="ye" value="Yemen">
                                Yemen </option>
                            <option data-iso="yu" value="Yugoslavia">
                                Yugoslavia </option>
                            <option data-iso="zm" value="Zambia">
                                Zambia </option>
                            <option data-iso="zw" value="Zimbabwe">
                                Zimbabwe </option>
                        </select>
                        <div class="invalid-feedback">
                            Please select an Amount
                        </div>
                        <div class="valid-feedback">
                            Look Good!
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">State * :</label>
                    <div class="input-group">
                        <span class="input-group-text" name="state" id="inputGroupPrepend"><i class="bi bi-geo"></i></span>
                        <input type="text" name="state" class="form-control" id="validationCustomUsername"
                            aria-describedby="inputGroupPrepend" required placeholder="Enter Your State">
                        <div class="invalid-feedback">
                            Please Enter a Valid City Name.
                        </div>
                        <div class="valid-feedback">
                            Look Good!
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <label for="validationCustomUsername" class="form-label">Address * :</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-geo-alt"></i></span>
                        <textarea class="form-control" name="address" required placeholder="Enter Your Address"></textarea>
                        <div class="invalid-feedback">
                            Please Enter Your Address.
                        </div>
                        <div class="valid-feedback">
                            Look Good!
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" name="submit" class="btn btn-success" value="Go to Checkout">
                    </div>
                    <div class="col">
                        <input type="submit" name="" class="btn btn-info" value="Show QR code but you don't recieve reciept">
                        <a href=""> </a>
                    </div>
                </div>

            </form>
        </div>
        <div class="row my-4  p-0 m-0">
            <h1 class="mb-4">
                Donate :
            </h1>
            <div class="col-md-4">
                <div class="card p-2 shadow border border-2 border-primary text-center">
                    <h2>
                        Bank Name :
                    </h2>
                    <h4 class="text-primary">
                        Panjab National bank
                    </h4>
                    <h2>
                        Account Number :
                    </h2>
                    <h4 class="text-primary">
                        21231450000031
                    </h4>
                    <h2>
                        IFSC Code :
                    </h2>
                    <h4 class="text-primary">
                        PUB63513
                    </h4>
                    <h2>
                        Account Holder Name :
                    </h2>
                    <h4 class="text-primary">
                        Shri Krishna Gaushala
                    </h4>
                    <h2>
                        Branch Name :
                    </h2>
                    <h4 class="text-primary">
                        Ghaziabad
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-2 shadow border border-2 border-warning text-center">
                    <h2>
                        Bank Name :
                    </h2>
                    <h4 class="text-success">
                        State Bank of India
                    </h4>
                    <h2>
                        Account Number :
                    </h2>
                    <h4 class="text-success">
                        5415215222323
                    </h4>
                    <h2>
                        IFSC Code :
                    </h2>
                    <h4 class="text-success">
                        SBI154615
                    </h4>
                    <h2>
                        Account Holder Name :
                    </h2>
                    <h4 class="text-success">
                        Shri Krishna Gaushala
                    </h4>
                    <h2>
                        Branch Name :
                    </h2>
                    <h4 class="text-success">
                        Ghaziabad
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-2 shadow border border-2 border-info text-center">
                    <h2>
                        Bank Name :
                    </h2>
                    <h4 class="text-info">
                        HDFC Bnak
                    </h4>
                    <h2>
                        Account Number :
                    </h2>
                    <h4 class="text-info">
                        8948754845741
                    </h4>
                    <h2>
                        IFSC Code :
                    </h2>
                    <h4 class="text-info">
                        HDFC58748
                    </h4>
                    <h2>
                        Account Holder Name :
                    </h2>
                    <h4 class="text-info">
                        Shri Krishna Gaushala
                    </h4>
                    <h2>
                        Branch Name :
                    </h2>
                    <h4 class="text-info">
                        Ghaziabad
                    </h4>
                </div>
            </div>
        </div>

        <div class="row my-3 text-center">
            <h2 class="p-3 rounded border shadow list-group-item-primary">Recent Donors</h2>
            <div class="row">
                 <?php
                   global $db;
                   
                   $select ="SELECT First_Name,Last_Name,Amount,Donation_date FROM donations";

                   $stmt =$db->query($select);
                    
                   while($Data =$stmt->fetch()){

                    $first_name =$Data['First_Name'];
                    $last_name =$Data['Last_Name'];
                    $donation_date =$Data['Donation_date'];
                    $amount =$Data['Amount'];
                   
                 ?>
                <div class="col-md-4 mb-3 shadow">
                    <div class="card text-center">
                        <div class="d-flex align-items-center p-2">
                            <div class="me-2"> <img
                                    src="./Images/gray-user-profile-icon-png-fP8Q1P.png"
                                    class="img-fluid rounded-start lazyload" alt="donor" height="100" width="100">
                            </div>
                            <div class="lh-base">
                                <h4 class="card-title mb-0  ">
                                   <strong><?php echo $first_name ;?> <?php echo $last_name ;?> </strong></h4>
                                <p class="m-0 fs-16 fw-normal">Donated <strong> ₹
                                <?php echo $amount ;?> </strong> </p>
                                <p class="m-0"><small class="text-muted">
                                <?php echo $donation_date ;?> </small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
              

            </div>
        </div>
    </div>
</div>


<script>
    // Bootstrap Form Validation 

    (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

<!-- QR Model  -->
<?php include('qr_model.php'); ?>


<!-- Footer  -->

<?php include('footer.php'); ?>