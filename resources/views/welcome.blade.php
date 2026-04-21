@include('header')

<!-- sider start -->
    <div class="top-header-banner">
        <div class="container-xxl">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-header">
            <form class="mt-3 ml-3 form-enquiry" id="form" action="{{ route('index.submit') }}" method="POST">
    @csrf
    <div class="row">
        <div class="input-container w-50 mb-3">
            <i class="fa-solid icon fa-user text-success"></i>
            <input type="text" class="form-control w-100" name="fname" placeholder="Enter Your Full Name" aria-describedby="emailHelp" autocomplete="off">
            <div id="suggestions" class="autocomplete-suggestions"></div>
        </div>

        <div class="input-container w-50 mb-2">
            <!-- <i class="fas fa-search "></i> -->
            <i class="fa-solid icon fs-5 text-success fa-phone"></i>
            <input type="text" class="form-control w-100" name="number" id="searchInput" placeholder="Enter Your Number" autocomplete="off">
            <!-- <div id="searchSuggestions" class="autocomplete-suggestions"></div> -->
        </div>
        <div class="input-container w-50 mb-2">
            <i class="fa-solid icon fa-file text-success"></i>
            <input type="file" class="form-control file-input w-100" name="fileupload" id="searchInput" autocomplete="off">
            <!-- <div id="searchSuggestions" class="autocomplete-suggestions"></div> -->
            <span class="fw-bold text-danger">Upload Prescription</span>
        </div>
        <div class="input-container w-50 mb-2">
            <!-- <i class="fa-solid icon fa-file text-success"></i> -->
             <select class="form-select form-control w-100 h-75" class="" name="stime" aria-label="Default select example">
                <option selected>Select Time Schedule</option>
                <option value="1">7:00 to 7:30</option>
                <option value="2">7:30 to 8:00</option>
                <option value="3">8:30 to 9:00</option>
                <option value="4">9:00 to 9:30</option>
                <option value="5">9:30 to 10:00</option>
                <option value="6">10:00 to 10:30</option>
                <option value="7">10:30 to 11:00</option>
                <option value="8">11:00 to 11:30</option>
                <option value="9">11:30 to 12:00</option>
                <option value="10">12:00 to 12:30</option>
                <option value="11">12:30 to 1:00</option>
                <option value="12">1:00 to 1:30</option>
                <option value="13">1:30 to 2:00</option>
                <option value="14">2:00 to 2:30</option>
                <option value="15">2:30 to 3:00</option>
                <option value="16">3:00 to 3:30</option>
                <option value="17">3:30 to 4:00</option>
                <option value="18">4:00 to 4:30</option>
                <option value="19">4:30 to 5:00</option>
                <option value="20">5:00 to 5:30</option>
                <option value="21">5:30 to 6:00</option>
                <option value="22">6:00 to 6:30</option>
                <option value="23">6:30 to 7:00</option>
                </select>
            <!-- <div id="searchSuggestions" class="autocomplete-suggestions"></div> -->
        </div>
        <div class="input-container ">
            <i class="fa-solid icon fs-5 text-success fa-location-dot"></i>
            <!-- <i class="fa-solid icon fs-5 text-success fa-phone"></i> -->
            <input type="email" class="form-control w-100" id="searchInput" name="email" placeholder="Enter Your Email" autocomplete="off">
            <!-- <div id="searchSuggestions" class="autocomplete-suggestions"></div> -->
        </div>
        <div class="input-container ">
            <i class="fa-solid icon fs-5 text-success fa-location-dot"></i>
            <!-- <i class="fa-solid icon fs-5 text-success fa-phone"></i> -->
            <input type="text" class="form-control w-100" id="searchInput" name="address" placeholder="Enter Your Address" autocomplete="off">
            <!-- <div id="searchSuggestions" class="autocomplete-suggestions"></div> -->
        </div>
    </div>
    <div class="top-button d-flex justify-content-between">
        <button type="submit" class="btn button-33 w-25">Submit</button>
        <!-- <button type="submit" class="btn button-33 w-50">Add to Cart</button> -->
    </div>
</form>
<style>
  .logos{
    align-items:end;
  }

</style>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="slider-top mt-3">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/banner1.jpg" class="d-block w-100" height="200" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/banner2.jpg" class="d-block w-100" height="200" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            </div>
       
        </div>
    </div>
    </div>
    </div>


    <div class="facilities-section mt-5 mb-5">
        <div class="container">
            <div class="facilities-heading text-center mb-5">
                <h2>Lab test</h2>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/lab-banner-1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/lab-banner.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/lab-banner-2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                     <div class="lab-test-comfort ml-2">
                        <span class="fs-4 fw-bold">Lab Test From The Comfort Of Your Home</span>
                        <div class="fs-6">Trusted by 40 Lakhs+ satisfied customers | 1 Crore+ lab tests booked</div>
                        <div class="customer-suport mt-2 d-inline-flex flex-row justify-content-between align-item-center">
                            <div class="customer-content text-center p-2">
                                <img src="img/Safe_38x38_labs_oe5ieq.webp" alt="" srcset="">
                                <div class="customer-c">
                                  <span class="fs-6">100% Safe & Hygienic</span>
                                </div>
                            </div>
                            <div class="customer-content text-center border-start p-2">
                                <img src="img/Lab_delivery_2x.webp" alt="" srcset="">
                                <div class="customer-c text-center">
                                  <span class="fs-6">Home Sample Pick Up</span>
                                </div>
                            </div>
                            <div class="customer-content text-center border-start p-2">
                            <img src="img/Lab_online_report_2x.webp" alt="" srcset="">
                            <div class="customer-c text-center">
                                <span class="fs-6">View Reports Online</span>
                            </div>
                            </div>
                            <!-- <div class="customer-content text-center border-start p-2">
                                <img src="img/Lab_doctor_2x.webp" alt="" srcset="">
                                <div class="customer-c text-center">
                                <span class="fs-6">Free Doctor Consultation</span>
                                </div>
                            </div> -->
                            <div class="customer-content text-center border-start p-2">
                            <img src="img/Lab_offer_2x.webp" alt="" srcset="">
                            <div class="customer-c text-center">
                                <span class="fs-6">Best Prices Guaranteed</span>
                            </div>
                            </div>
                        </div>
                        <h2>Dr.Vijay Kumar</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- test -->





    <!-- all test -->



    <div class="container-xxl">
    <div class="box-content-top bg-white border d-flex justify-content-center align-items-center mb-5" data-aos="fade-up">
        <div class="content">
            <h5>: India’s Leading Online Pharmacy & Healthcare Platform</h5>
        </div>
    </div>
    </div>
    <div class="feature-health mb-5">
        <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="box-feature bg-white d-inline-flex d-flex p-4 rounded" data-aos="fade-right">
                    <div class="">
                    <img src="img/guarantee.png" alt="" srcset="" height="50" width="50">
                    </div>
                    <div class="">
                    <span class="fw-bold fs-5">Quality & Trust assured</span><br>
                    <p style="font-size: 16px;">Samples processed in NABL accredited Labs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="box-feature bg-white p-4 d-inlin-flex d-flex rounded" data-aos="fade-up">
                    <div class="">
                    <img src="img/on-time.png" alt="" srcset="" height="75" width="75">
                    </div>
                    <div class="">
                    <span class="fw-bold fs-5">‘On-time’ Mantra</span><br>
                    <p style="font-size:16px;">Report on-time, Home Collection in Less than 60 Mins</p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="box-feature bg-white d-flex-inline d-flex bg-white p-4 d-inlin-flex rounded" data-aos="fade-left">
                    <div>
                    <img src="img/lab.png" alt="" srcset="" height="75" width="75">
                    </div>
                    <div class="">
                    <span class="fw-bold fs-5">Affordability</span><br>
                    <p style="font-size:16px;">700+ Tests & Profiles at Budget-friendly Rates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    

<div class="container-xxl">
    <div class="contact-us bg-white p-5 mb-5 rounded" style="margin-top:10%;">
            <div class="heading-content text-center mb-5">
                <h2>Contact Us</h2>
            </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="enquiery-form">
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control w-100" id="floatingInput" placeholder="full name">
                            <label for="floatingInput">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control w-100" id="floatingPassword" placeholder="Number">
                            <label for="floatingPassword">Mobile No</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="address">
                            <label for="floatingPassword">Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                         </div>
                         <button name="Submit" id="Submit" class="button-33 mt-2 mb-2 w-100">Submit</button>  
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28001.658879211976!2d77.32062603476561!3d28.68344310000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfa5a70b02dbb%3A0x3ab4875688898d09!2sRainbow%20Diagnostics%20(unit%20of%20VIraj%20Diagnostics%20Pvt.%20Ltd)%2C%20Ghaziabad!5e0!3m2!1sen!2sin!4v1722338085657!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- include slider end -->
@include('footer')