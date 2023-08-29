<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'CSS/style.php'; ?>
    <?php include 'dbcon.php'; ?>
</head>
<body>
<nav class="navbar navbar-expand-lg  nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-captalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<div class="main_header">
    <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
            <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                <img src="https://logodix.com/logo/1185605.png" width="300" height="300">
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
           <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
            <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images/img1.png"></span>na Virus</h1>
           </div>
        </div>
    </div>
</div>
<!-- Crona latest updates aankde -->
<section class="corona_update">
<div class="mb-3">
<h3 class="text-uppercase text-center">covid-19 updates</h3>
</div>
<div class="d-flex justify-content-around align-items-center count_style">
    <div>
   <h1 class="count">1,55,545</h1>
   <p>Passengers screened at airport</p>
    </div>
    <div>
   <h1 class="count">512</h1>
   <p>Active COVID-19 cases</p>
    </div>
    <div>
   <h1 class="count">40</h1>
   <p>Cured/discharged cases</p>
    </div>
    <div>
   <h1 class="count">9</h1>
   <p>Death Cases</p>
    </div>
</div>
</section>
<!-- About section yha se hoga -->
<div class="container-fluid sub_section pt-5 pb-5 " id="sympid">
<div class="section_header text-center mb-5 mt-4">
<h1>About COVID-19</h1>
</div>
<div class="row pt-5">
    <div class="col-lg-5 col-md-6 col-12 ml-5">
    <img src="https://kauveryhospital.com/blog/wp-content/uploads/2020/04/coronavirus-1.png">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
     <h2>What is COVID-19(CoronaVirus)</h2>
     <p>COVID-19 (coronavirus disease 2019) is a disease caused by a virus named SARS-CoV-2. It can be very contagious and spreads quickly. Over one million people have died from COVID-19 in the United States.</p>
     <p>COVID-19 most often causes respiratory symptoms that can feel much like a cold, the flu, or pneumonia. COVID-19 may attack more than your lungs and respiratory system. Other parts of your body may also be affected by the disease. Most people with COVID-19 have mild symptoms, but some people become severely ill.
       Some people including those with minor or no symptoms will develop Post-COVID Conditions – also called “Long COVID.”</p>
    </div>
</div>
</div>
<!-- Corona Symptoms -->
<div class="container-fluid pt-5 pb-5 " id="aboutid">
<div class="section_header text-center mb-5 mt-4">
<h1>Corona Symptoms</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
        <img src="images/img4.png" class="image-fluid" width="120" height="120">
        <figcaption>cough</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
        <img src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/37656/mucus-blowing-nose-clipart-xl.png" class="image-fluid" width="120" height="120">
        <figcaption>runny nose</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/2968/2968955.png" class="image-fluid" width="120" height="120">
        <figcaption>fever</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
        <img src="https://www.pngitem.com/pimgs/m/66-664766_cold-clipart-cold-clipart-free-for-personal-cold.png" class="image-fluid" width="120" height="120">
        <figcaption>cold</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
        <img src="https://img.freepik.com/premium-vector/young-good-looking-woman-feeling-tired-sick_97632-4882.jpg" class="image-fluid" width="120" height="120">
        <figcaption>tiredness</figcaption>
        </figure>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/3781/3781976.png" class="image-fluid" width="120" height="120">
        <figcaption>difficulty-breathing</figcaption>
        </figure>
        </div>
    </div>
</div>
</div>
<!-- Prevention -->
<div class="container-fluid sub_section pt-5 pb-5 " id="preventid">
<div class="section_header text-center mb-5 mt-4">
<h1>6 Step Prevention Against Coronavirus</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
        <img src="https://img.freepik.com/free-vector/hand-cleaning-white-background_1308-43039.jpg" class="image-fluid" width="90" height="90">
        </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
            <p>Wash your hands frequently
            Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
        <img src="https://static.vecteezy.com/system/resources/previews/002/554/489/original/covid-19-coronavirus-prevention-avoid-touching-your-eyes-spread-outbreak-pandemic-line-and-fill-style-icon-free-vector.jpg" class="image-fluid" width="90" height="90">
        </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
            <p>Avoid touching your eyes, nose and mouth
We often touch our faces without noticing it. Be aware of this, and avoid touching your eyes, nose and mouth.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/002/476/811/small/covid19-prevention-man-cover-coughs-and-sneezes-for-avoid-spread-coronavirus-free-vector.jpg" class="image-fluid" width="90" height="90">
        </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
            <p>Cover your cough
        Make sure that you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with the bend of your elbow or with a tissue when you cough or sneeze. Dispose of the used tissue immediately into a closed bin and wash your hands</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/3022/3022895.png" class="image-fluid" width="90" height="90">
        </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
            <p>Avoid crowded places and close contact with anyone that has fever or cough
         Avoid crowded places, especially if you are over 60 or have an underlying health condition such as high blood pressure, diabetes, heart and lung diseases or cancer. Maintain at least 1 metre of distance between yourself and anyone who has a fever or cough.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3CFHN-QoPHfJ43mvmD3FV7lnNPJuDnoD2Vg&usqp=CAU" class="image-fluid" width="90" height="90">
        </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
            <p>If you have a fever, cough and difficulty breathing, seek medical care early — but call first
If you have a fever, cough and difficulty breathing, seek medical care early — if you can, call your hospital or health centre first so that they can tell you where you should go.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsZOTgCSB4I0PMPKasCO6CWGATEy69s9Aw5Q&usqp=CAU" class="image-fluid" width="90" height="90">
        </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
            <p>Wear a High-Quality Mask
Even if you don't show symptoms, you could carry the COVID-19 virus. People more than 2 years old should wear a face mask in public or indoors where there's a high risk of infection.</p>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
<!-- Contact us  -->
<div class="container-fluid pt-5 pb-5 " id="contactid">
<div class="section_header text-center mb-5 mt-4">
<h1>In case of Emergency contact us ASAP</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
        <form action="demo.php" method="POST">
        <div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete ="off" required>
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name= "email" placeholder="name@example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete ="off" required>
  </div>

  <div class="form-group">
    <label>Select Symptoms</label><br>

    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
    <label class="custom-control-label" for="customcheckbox1">Cold</label>
</div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
    <label class="custom-control-label" for="customcheckbox2">Fever</label>
</div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
    <label class="custom-control-label" for="customcheckbox3">Difficulty breathing</label>
</div>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
    <label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
</div>

  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        </div>
    </div>
</div>
</div>
</div>
<!-- Top cursor bar -->
<div class="container scrolltop float-right pr-5">
<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
<!-- Footer time -->
<footer class="mt-5">
<div class="footer_style text-white text-center container-fluid">
<p>Copyright @dave 2023</p>
</div>
</footer>
<script type="text/javascript">

$('.count').counterUp({
  delay:10,
  time:3000
})

mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  }
  else{
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop=0;
  document.documentElement.scrollTop = 0;
}

</script>
</body>
</html>



<!-- if (isset($_POST['submit'])){

  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $msg = $_POST['msg'];

  $chk = "";

  foreach($symp as $chk1){
    $chk .= $chk1.",";
  } 
  
  //yha jo insert into( ) h usme database me jo columns bne hn wo likhne hote hn  //aur values me jo name h input name me wo likhne pdte hn
  $insertquery = "insert into coronacases(username, email,	mobile,	symp,	message) values ('$username', '$email',	'$mobile',	'$chk',	'$msg')";
  
  $query = mysqli_query($con, $insertquery);

  if($query) {
    <script>
    alert("Insertion successful");
    </script>

    }

else {
    
    <script>
    alert("Insertion failed");
    </script>
  }
} -->