<?php include("./admin/Config/session.php"); ?>
<?php include("./admin/Config/functions.php"); ?>
<?php include('header.php'); ?>
<?php 

 if(isset($_POST['submit'])){
     $breed =$_POST['breed'];
     $category =$_POST['category'];
     $batch =$_POST['batch'];

     $name =$_POST['name'];
     $email =$_POST['email'];
     $number =$_POST['phone'];
     $country= $_POST['country'];
     $pincode =$_POST['pincode'];
     $address =$_POST['address'];
     $amount =$_POST['amount'];

   
    if(empty($breed)||empty($category)|| empty($name)||empty($email)||empty($country)||empty($pincode)||empty($address)){
        echo"<script>alert('all field must be fill out!!')</script>";
        ?> <script> windows.location.href="adopt.php"</script><?php
    }elseif(strlen($name)<3){
        echo "<script> alert('Name should be more than 3 charector!')</script>";
    ?> <script> windows.location.href="adopt.php"</script><?php
        
    }elseif(strlen($number)<10){
        echo "<script> alert('Number should be 10 digits!')</script>";
    ?> <script> windows.location.href="contact_us.php"</script><?php
        
    }else{
          
        global $db;
        $sql ="INSERT INTO cow_adoption(Breed,Category,Batch,Name,Email,Number,Country,Pincode,Address,Amount)";
        $sql .="VALUES(:breed,:category,:batch,:name,:email,:number,:country,:pincode,:address,:amount)";

        $stmt = $db->prepare($sql);
        
        $stmt->bindValue(':breed',$breed);
        $stmt->bindValue(':category',$category);
        $stmt->bindValue(':batch',$batch);
        $stmt->bindValue(':name',$name);
        $stmt->bindValue(':email',$email);
        $stmt->bindValue(':number',$number);
        $stmt->bindValue(':country',$country);
        $stmt->bindValue(':pincode',$pincode);
        $stmt->bindValue(':address',$address);
        $stmt->bindValue(':amount',$amount);
        $execute=$stmt->execute();
       
        if($execute){
            $_SESSION['SuccessMessage'] ="Adoption form submited Successfully";
            // echo "<script>alert('Adoption form submited Successfully')</script>";
            // header('location:index.php');


        }else{
            echo "<script>alert('Adoption form not submited Successfully')</script>";
        
        }        
    }
}
?>

<div class="container bg-light">
    <div class="row my-2 p-0 m-0">
        <h1 class="text-center mt-3 list-group-item-primary py-2 rounded border shadow">Adoption</h1>
        <hr class="my-4">
        <div class="mb-3">
            <h1 >
                Adopt a Cow :
            </h1>
            <?php
              echo SuccessMessage();
              echo ErrorMessage();
            ?>
        </div>
          <?php
            global $db;

            $sql ="SELECT * FROM cow_category";
            $stmt = $db->query($sql);
            
            while( $DataRow = $stmt->fetch()){

                $id = $DataRow['id'];
                $category =$DataRow['Category'];
                $breed =$DataRow['Breed'];
                $batch =$DataRow['Batch'];
                $image =$DataRow['Image'];
                $Dob =$DataRow['DOB'];
                $age =$DataRow['Age'];
                $amount =$DataRow['Amount'];

          ?>
        <div class="col-md-4 mb-3">
            <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image adopt_image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVAQlyolxYwhSUB3yt5WBmzW6HjIVhoAIUHg&s"
                class="img-thumbnail" alt="">
                <h5 class="card-title text-primary">
                    Batch_Id : <?php echo $batch; ?>
                </h5>
                <div class="card-body border border-warning">
                           <div class="row">
                            <div class="col">
                            <p>Category : <span><?php echo $category ?></span></p>
                            </div>
                            <div class="col">
                                <p>Breed : <span><?php echo $breed ?></span></p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="col">
                            <p>DOB : <span><?php echo $Dob ?></span></p>
                            </div>
                            <div class="col">
                                <p>Age : <span><?php echo $age?> years</span></p>
                            </div>
                           </div>
                          
                       </div>
            </div>
        </div>
  <?php  }
            
    ?>
        <!-- <div class="col-md-4 mb-3">
            <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image adopt_image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVAQlyolxYwhSUB3yt5WBmzW6HjIVhoAIUHg&s"
                class="img-thumbnail"   alt="">
                <h4 class="card-title">
                    JERSEY COW
                </h4>
                <div class="card-body">
                           <div class="row">
                            <div class="col">
                            <p>Category : <span>cow</span></p>
                            </div>
                            <div class="col">
                                <p>Breed : <span>jersey</span></p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="col">
                            <p>DOB : <span>10/04/2001</span></p>
                            </div>
                            <div class="col">
                                <p>Age : <span>10</span></p>
                            </div>
                           </div>
                          
                       </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image adopt_image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVAQlyolxYwhSUB3yt5WBmzW6HjIVhoAIUHg&s"
                class="img-thumbnail"   alt="">
                <h4 class="card-title">
                    JERSEY COW
                </h4>
                <div class="card-body">
                           <div class="row">
                            <div class="col">
                            <p>Category : <span>cow</span></p>
                            </div>
                            <div class="col">
                                <p>Breed : <span>jersey</span></p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="col">
                            <p>DOB : <span>10/04/2001</span></p>
                            </div>
                            <div class="col">
                                <p>Age : <span>10</span></p>
                            </div>
                           </div>
                          
                       </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image adopt_image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVAQlyolxYwhSUB3yt5WBmzW6HjIVhoAIUHg&s"
                class="img-thumbnail"  alt="">
                <h4 class="card-title">
                    JERSEY COW
                </h4>
                <div class="card-body">
                           <div class="row">
                            <div class="col">
                            <p>Category : <span>cow</span></p>
                            </div>
                            <div class="col">
                                <p>Breed : <span>jersey</span></p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="col">
                            <p>DOB : <span>10/04/2001</span></p>
                            </div>
                            <div class="col">
                                <p>Age : <span>10</span></p>
                            </div>
                           </div>
                          
                       </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image adopt_image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVAQlyolxYwhSUB3yt5WBmzW6HjIVhoAIUHg&s"
                class="img-thumbnail"  alt="">
                <h4 class="card-title">
                    JERSEY COW
                </h4>
                <div class="card-body">
                           <div class="row">
                            <div class="col">
                            <p>Category : <span>cow</span></p>
                            </div>
                            <div class="col">
                                <p>Breed : <span>jersey</span></p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="col">
                            <p>DOB : <span>10/04/2001</span></p>
                            </div>
                            <div class="col">
                                <p>Age : <span>10</span></p>
                            </div>
                           </div>
                          
                       </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center border border-dark border-2 p-1 shadow my-2 all_cow_images adopt_image adopt_image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVAQlyolxYwhSUB3yt5WBmzW6HjIVhoAIUHg&s"
                   class="img-thumbnail" alt="">
                <h4 class="card-title">
                    JERSEY COW
                </h4>
                <div class="card-body m-0 ">
                           <div class="row">
                            <div class="col">
                            <p>Category : <span>cow</span></p>
                            </div>
                            <div class="col">
                                <p>Breed : <span>jersey</span></p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="col">
                            <p>DOB : <span>10/04/2001</span></p>
                            </div>
                            <div class="col">
                                <p>Age : <span>10</span></p>
                            </div>
                           </div>
                          
                       </div>
            </div>
        </div> -->

       
        <div class="adopt_btn text-center my-3">
            <button type="button" class="btn btn-outline-primary shadow py-2 px-4 fw-bold" data-bs-toggle="modal"
                data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Adopt a Cow</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-gem"></i> Adopt a Cow
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="" method="post" action="" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01"><i
                                            class="bi bi-bookmark-check"></i></label>
                                    <select class="form-select" id="inputGroupSelect01" name="breed">
                                        <option selected>Select Breed</option>
                                        <option value="JERSEY COW">JERSEY COW</option>
                                        <option value="BROWN SWISS">BROWN SWISS</option>
                                        <option value="GUERNSEY">GUERNSEY</option>
                                        <option value="AYRSHIRE">AYRSHIRE</option>
                                        <option value="3">RED AND WHITE HOLSTEIN</option>
                                        <option value="3">MILKING SHORTHORN</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01"><i
                                            class="bi bi-bookmark-check"></i></label>
                                    <select class="form-select" id="inputGroupSelect01" name="category">
                                        <option selected>Select Category of Cow</option>
                                        <option value="COW">COW</option>
                                        <option value="Ox">Ox</option>
                                        <option value="other">other</option>
                                      
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-upc"></i></span>
                                    <input type="number" name="batch" class="form-control" placeholder="Enter Your Batch number"
                                        aria-label="pin" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name"
                                        aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email"
                                        aria-label="email" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-telephone"></i></span>
                                    <input type="number" name="phone" class="form-control" placeholder="Enter Your Mobile Number"
                                        aria-label="mobile" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01"><i
                                            class="bi bi-pin-map"></i></label>
                                    <select name="country" id="country_name" class="form-select">
                                    <option data-iso="af" value="">
                                    Select country </option>
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
                                    <input type="number" name="pincode" class="form-control" placeholder="Enter Your Pin Code Number"
                                        aria-label="pin" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                    <textarea class="form-control" name="address" aria-label="With textarea"
                                        placeholder="Enter Your Address"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-upc"></i></span>
                                    <input type="number" name="amount" class="form-control" placeholder="Enter Amount"
                                        aria-label="pin" aria-describedby="basic-addon1">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>