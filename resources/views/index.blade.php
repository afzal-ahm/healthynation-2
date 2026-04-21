@include('header')
<!-- sider start -->
    <div class="top-header-banner my-5">
       <div class="container-xxl">
      <div class="row my-4">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-header">
               @if(request('submitted') === 'enquiry')
                   <div class="alert alert-success">Your enquiry has been sent successfully.</div>
               @endif
               <form class="mt-4 ml-2 form-enquiry" id="form" action="https://formsubmit.co/healthynationlab@gmail.com" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_subject" value="New Enquiry Form Submission">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_next" value="{{ url()->current() }}?submitted=enquiry#form">
                <input type="hidden" name="_url" value="{{ url()->current() }}">
                <input type="text" name="_honey" style="display:none">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="input-container  mb-1">
                        <i class="fa-solid icon fa-user text-success fs-6"></i>
                        <input type="text" class="form-control w-100" name="Full Name" placeholder="Enter Your Full Name" autocomplete="off" required>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="input-container mb-1">
                        <i class="fa-solid icon fs-5 text-success fa-phone fs-6"></i>
                        <input type="text" class="form-control w-100" name="Phone Number" placeholder="Enter Your Number" autocomplete="off" required>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="input-container  mb-1">
                        <i class="fa-solid icon fa-file text-success fs-6"></i>
                        <input type="file" class="form-control w-100" name="Attachment" autocomplete="off" accept=".jpg,.jpeg,.png,.pdf"><br>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="input-container mb-1">
                        <select class="form-select form-control w-100 " name="Preferred Time Slot" required>
                            <option value="" selected disabled>Select Time Schedule</option>
                            <option value="7:00 to 8:00">7:00 to 8:00</option>
                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                            <option value="10:00 to 11:00">10:00 to 11:00</option>
                            <option value="11:00 to 12:00">11:00 to 12:00</option>
                            <option value="12:00 to 1:00">12:00 to 1:00</option>
                            <option value="1:00 to 2:00">1:00 to 2:00</option>
                            <option value="2:00 to 3:00">2:00 to 3:00</option>
                            <option value="3:00 to 4:00">3:00 to 4:00</option>
                            <option value="4:00 to 5:00">4:00 to 5:00</option>
                            <option value="5:00 to 6:00">5:00 to 6:00</option>
                            <option value="6:00 to 7:00">6:00 to 7:00</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-lg-6">
                <div class="input-container mb-1">
                    <!--<i class="fa-solid icon fs-5  fa-location-dot fs-6"></i>-->
                    <i class="fa-solid fa-envelope icon text-success fs-6"></i>
                    <input type="email" class="form-control w-100" name="email" placeholder="Enter Your Email" autocomplete="off" required>
                </div>
                </div>
                <div class="col-lg-6">
                <div class="input-container mb-1">
                    <i class="fa-solid icon text-success fa-location-dot fs-6"></i>
                    <input type="text" class="form-control w-100" name="Address" placeholder="Enter Your Address" autocomplete="off" required>
                </div>
                </div>
            </div>
            <div class="top-button d-flex justify-content-between">
                <button type="submit" class="btn button-33 w-25">Submit</button>
            </div>
    </form>
   
        <div class="toggale-button mt-2">
             <span class="fs-6 fw-bold">Popular health checkups</span>
            <button type="button" class="btn btn-outline-secondary popular-botton " id="populer-p" data-toggle="collapse" data-target="#populert-package">Populer Packages</button>
            <button type="button" class="btn btn-outline-secondary popular-botton " id="fever-btn" data-toggle="collapse" data-target="#fever-content">Fever</button>
            <button type="button" class="btn btn-outline-secondary popular-botton w-25" id="pregnancy-btn" data-toggle="collapse"  data-target="#pregnancy">Pregnancy</button>
        </div>
<style>
  .logos{
    align-items:end;
  }

</style>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="slider-top mt-4">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/fintraho.jpg" class="d-block w-100"  alt="...">
                </div>
                 <div class="carousel-item">
                   <img src="img/banner.jpg" class="d-block w-100"  alt="...">
                </div>
                 <div class="carousel-item">
                   <img src="img/banner- Healthy-Platinum.jpg" class="d-block w-100"  alt="...">
                </div>
                 <div class="carousel-item">
                   <img src="img/Healthy-Gold-Full Body.jpg" class="d-block w-100"  alt="...">
                </div>
               
                 <div class="carousel-item">
                   <img src="img/fever banner.jpg" class="d-block w-100"  alt="...">
                </div>
                <div class="carousel-item">
                   <img src="img/banner14-12.jpg" class="d-block w-100"  alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/fpc.jpg" class="d-block w-100"  alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/A-B.jpg" class="d-block w-100"  alt="...">
                </div>
                 <div class="carousel-item">
                <img src="img/Antenatal-Profile (2).jpg" class="d-block w-100"  alt="...">
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

    <div class="all-lab-test bg-white">
        <div class="container">
            <div class="all-test-1 mt-4">
                <div class="collapse" id="populer-packages">
                    <div class="box-test d-flex flex-row">
                        <a href="{{ route('lab-test.healthy-fit') }}"><div class="gold-test border rounded ml-2" data-aos="fade-up" style="width: 250px;">
                        <div class="sava-b float-end mt-2 p-1 rounded-start d-inline-flex" style="background-color:rgb(243, 198, 142); height:20px;width:50px;">
                                <img src="img/safe_bjisiz.svg" alt="" srcset="">&nbsp;
                                <p class="text-dark" style="font-weight:bold;font-size:12px;">SAFE</p>
                            </div>
                            <div class="lab-test-d p-2">
                            <span class="fs-6 fw-bold no-wrap">Healthy Fit Raho Basic Profile</span>
                            <p>CBC</p>
                            <p>Diabetic</p>
                            <p>Thyroid</p>
                            <p>Urine</p>
                            <span><i class="fa-solid fa-plus"></i>&nbsp;More</span>
                            <p class="mt-2">get report within <span class="fw-bold text-secondary">8 hours</span></p>
                            <p class="fs-5 fw-bold" style="font-size:18px;"><i class="fa-solid fa-indian-rupee-sign"></i>299 <span class="fs-5" style="text-decoration: line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>599</span></p>
                            <div class="d-flex flex-row p-1 border-success  w-25 mb-2 justify-column-bitween align-item-center" style="border-style:dotted;border-width:1.9px; height:25px; background-color:#DAF7A6;">
                                <p class="text-success">50% off</p>
                            </div>
                            <button class="btn btn-danger w-100">ADD TO CART</button>
                            </div>
                        </div>
                        </a>
                        <a href="{{ route('lab-test.healthy-silver') }}"><div class="gold-test border rounded ml-2" data-aos="fade-up" style="width: 250px;">
                        <div class="sava-b float-end mt-2 p-1 rounded-start d-inline-flex" style="background-color:rgb(243, 198, 142); height:20px;width:50px;">
                                <img src="img/safe_bjisiz.svg" alt="" srcset="">&nbsp;
                                <p class="text-dark" style="font-weight:bold;font-size:12px;">SAFE</p>
                            </div>
                            <div class="lab-test-d p-2">
                            <span class="fs-6 fw-bold no-wrap">Healthy Silver Full Body Checkup</span>
                           <p>CBC</p>
                            <p>Diabetic</p>
                            <p>Thyroid</p>
                            <p>Urine</p>
                            <span><i class="fa-solid fa-plus"></i>&nbsp;More</span>
                            <p class="mt-2">get report within <span class="fw-bold text-secondary">8 hours</span></p>
                            <p class="fs-5 fw-bold" style="font-size:18px;"><i class="fa-solid fa-indian-rupee-sign"></i>499 <span class="fs-5" style="text-decoration: line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>999</span></p>
                            <div class="d-flex flex-row p-1 border-success  w-25 mb-2 justify-column-bitween align-item-center" style="border-style:dotted;border-width:1.9px; height:25px; background-color:#DAF7A6;">
                                <p class="text-success">50% off</p>
                            </div>
                            <button class="btn btn-danger w-100">ADD TO CART</button>
                            </div>
                        </div>
                        </a>
                        <a href="{{ route('lab-test.healthy-platinum') }}"><div class="gold-test rounded border" data-aos="fade-up" style="width: 250px;">
                            <div class="sava-b float-end mt-2 p-1 rounded-start d-inline-flex" style="background-color:rgb(243, 198, 142); height:20px;width:50px;">
                                <img src="img/safe_bjisiz.svg" alt="" srcset="">&nbsp;
                                <p class="text-dark" style="font-weight:bold;">SAFE</p>
                            </div>
                            <div class="lab-test-d p-2">
                            <span class="fs-6 fw-bold no-wrap">Healthy Platinum Full Body Checkup</span>
                            <p>CBC</p>
                            <p>Diabetic</p>
                            <p>Thyroid</p>
                            <p>Urine</p>
                            <span><i class="fa-solid fa-plus"></i>&nbsp;More</span>
                            <p class="mt-2">get report within <span class="fw-bold text-secondary">8 hours</span></p>
                            <p class="fs-2 fw-bold" style="font-size:24px;"><i class="fa-solid fa-indian-rupee-sign"></i>999 <span class="fs-5" style="text-decoration: line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>1999</span></p>
                            <div class="d-flex flex-row p-1 border-success  w-25 mb-2 justify-column-bitween align-item-center" style="border-style:dotted;border-width:1.9px; height:25px; background-color:#DAF7A6;">
                                <p class="text-success">50% off</p>
                            </div>
                            <button class="btn btn-danger w-100">ADD TO CART</button>
                            </div>
                        </div>
                        </a>
                        <a href="{{ route('lab-test.healthy-gold') }}"><div class="gold-test rounded border" data-aos="fade-up" style="width: 250px;">
                        <div class="sava-b float-end mt-2 p-1 rounded-start d-inline-flex" style="background-color:rgb(243, 198, 142); height:20px;width:50px;">
                                <img src="img/safe_bjisiz.svg" alt="" srcset="">&nbsp;
                                <p class="text-dark" style="font-weight:bold;font-size:12px;">SAFE</p>
                            </div>
                            <div class="lab-test-d p-2">
                            <span class="fs-6 fw-bold no-wrap">Healthy Gold Full Body Checkup</span>
                           <p>CBC</p>
                            <p>Diabetic</p>
                            <p>Thyroid</p>
                            <p>Urine</p>
                            <span><i class="fa-solid fa-plus"></i>&nbsp;More</span>
                            <p class="mt-2">get report within <span class="fw-bold text-secondary">8 hours</span></p>
                            <p class="fs-5 fw-bold" style="font-size:18px;"><i class="fa-solid fa-indian-rupee-sign"></i>1399 <span class="fs-5" style="text-decoration: line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>2799</span></p>
                            <div class="d-flex flex-row p-1 border-success  w-25 mb-2 justify-column-bitween align-item-center" style="border-style:dotted;border-width:1.9px; height:25px; background-color:#DAF7A6;">
                                <p class="text-success">50% off</p>
                            </div>
                            <button class="btn btn-danger w-100">ADD TO CART</button>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                
                <div class="collapse" id="fever-content">
                <div class="box-test d-flex flex-row">
                     <a href="{{ route('lab-test.fever-package') }}">
                        <div class="gold-test rounded border" data-aos="fade-up" style="width: 250px;">
                        <div class="sava-b float-end mt-2 p-1 rounded-start d-inline-flex" style="background-color:rgb(243, 198, 142); height:20px;width:50px;">
                                <img src="img/safe_bjisiz.svg" alt="" srcset="">&nbsp;
                                <p class="text-dark" style="font-weight:bold;font-size:12px;">SAFE</p>
                            </div>
                            <div class="lab-test-d p-2">
                            <span class="fs-6 fw-bold no-wrap">Fever Packeage</span>
                            <p>CBC</p>
                            <p>ESR</p>
                            <p>malaria</p>
                            <p>Typhoid</p>
                            <span><i class="fa-solid fa-plus"></i>&nbsp;More</span>
                             <p class="mt-2">get report within <span class="fw-bold text-secondary">8 hours</span></p> 
                            <p class="fs-5 fw-bold" style="font-size:18px;"><i class="fa-solid fa-indian-rupee-sign"></i>499 <span class="fs-5" style="text-decoration: line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>999</span></p>
                            <div class="d-flex flex-row p-1 border-success  w-25 mb-2 justify-column-bitween align-item-center" style="border-style:dotted;border-width:1.9px; height:25px; background-color:#DAF7A6;">
                                <p class="text-success">50% off</p>
                            </div>
                            <button class="btn btn-danger w-100">ADD TO CART</button>
                            </div>
                        </div>
                        </a>
                        <a href="{{ route('lab-test.fever-package-advance') }}">
                            <div class="gold-test rounded border" data-aos="fade-up" style="width: 250px;">
                            <div class="sava-b float-end mt-2 p-1 rounded-start d-inline-flex" style="background-color:rgb(243, 198, 142); height:20px;width:50px;">
                                <img src="img/safe_bjisiz.svg" alt="" srcset="">&nbsp;
                                <p class="text-dark" style="font-weight:bold;font-size:12px;">SAFE</p>
                            </div>
                            <div class="lab-test-d p-2">
                            <span class="fs-6 fw-bold no-wrap">Fever Packeage Advanced</span>
                            <p>CBC</p>
                            <p>ESR</p>
                            <p>malaria</p>
                            <p>Typhoid</p>
                            <span><i class="fa-solid fa-plus"></i>&nbsp;More</span>
                             <p class="mt-2">get report within <span class="fw-bold text-secondary">8  hours</span></p> 
                            <p class="fs-5 fw-bold" style="font-size:18px;"><i class="fa-solid fa-indian-rupee-sign"></i>799<span class="fs-5" style="text-decoration: line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>1599</span></p>
                            <div class="d-flex flex-row p-1 border-success  w-25 mb-2 justify-column-bitween align-item-center" style="border-style:dotted;border-width:1.9px; height:25px; background-color:#DAF7A6;">
                                <p class="text-success">50% off</p>
                            </div>
                            <button class="btn btn-danger w-100">ADD TO CART</button>
                            </div>
                        </div>
                        </a>
                       
                        <a href="{{ route('lab-test.fever-package-comprehensive') }}">
                        <div class="gold-test rounded border" data-aos="fade-up" style="width: 250px;">
                        <div class="sava-b float-end mt-2 p-1 rounded-start d-inline-flex" style="background-color:rgb(243, 198, 142); height:20px;width:50px;">
                                <img src="img/safe_bjisiz.svg" alt="" srcset="">&nbsp;
                                <p class="text-dark" style="font-weight:bold;font-size:12px;">SAFE</p>
                            </div>
                            <div class="lab-test-d p-2">
                            <span class="fs-6 fw-bold no-wrap">Fever Packeage Comprehensive</span>
                             <p>CBC</p>
                            <p>ESR</p>
                            <p>malaria</p>
                            <p>Typhoid</p>
                            <span><i class="fa-solid fa-plus"></i>&nbsp;More</span>
                             <p class="mt-2">get report within <span class="fw-bold text-secondary">8  hours</span></p> 
                            <p class="fs-5 fw-bold" style="font-size:18px;"><i class="fa-solid fa-indian-rupee-sign"></i>1399 <span class="fs-5" style="text-decoration: line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>2799</span></p>
                            <div class="d-flex flex-row p-1 border-success  w-25 mb-2 justify-column-bitween align-item-center" style="border-style:dotted;border-width:1.9px; height:25px; background-color:#DAF7A6;">
                                <p class="text-success">50% off</p>
                            </div>
                            <button class="btn btn-danger w-100">ADD TO CART</button>
                            </div>
                        </div>
                        </a>
                    </div>
                    </a>
                </div>

                <div class="collapse" id="full-body-checkup">
                    <div>full body checkup</div>
                </div>
                <div class="collapse" id="pregnancy">
                <div class="box-test d-flex flex-row">
                    <a href="{{ route('lab-test.Antenatal-Profile') }}">
                        <div class="gold-test rounded border" data-aos="fade-up" style="width: 250px;">
                        <div class="sava-b float-end mt-2 p-1 rounded-start d-inline-flex" style="background-color:rgb(243, 198, 142); height:20px;width:50px;">
                                <img src="img/safe_bjisiz.svg" alt="" srcset="">&nbsp;
                                <p class="text-dark" style="font-weight:bold;font-size:12px;">SAFE</p>
                            </div>
                            <div class="lab-test-d p-2">
                            <span class="fs-6 fw-bold no-wrap">Antenatal Profile</span>
                            <p>CBC</p>
                            <p>Group</p>
                            <p>Sugar</p>
                            <p>thyroid</p>
                            <span><i class="fa-solid fa-plus"></i>&nbsp;More</span>
                             <p class="mt-2">get report within <span class="fw-bold text-secondary">8 hours</span></p> 
                            <p class="fs-5 fw-bold" style="font-size:18px;"><i class="fa-solid fa-indian-rupee-sign"></i>599<span class="fs-5" style="text-decoration: line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>1199</span></p>
                            <div class="d-flex flex-row p-1 border-success  w-25 mb-2 justify-column-bitween align-item-center" style="border-style:dotted;border-width:1.9px; height:25px; background-color:#DAF7A6;">
                                <p class="text-success">50% off</p>
                            </div>
                            <button class="btn btn-danger w-100">ADD TO CART</button>
                            </div>
                        </div>
                        </a>
                        <a href="{{ route('lab-test.Antenatal-Profile-Comprehensive') }}">
                            <div class="gold-test rounded border" data-aos="fade-up" style="width: 250px;">
                            <div class="sava-b float-end mt-2 p-1 rounded-start d-inline-flex" style="background-color:rgb(243, 198, 142); height:20px;width:50px;">
                                <img src="img/safe_bjisiz.svg" alt="" srcset="">&nbsp;
                                <p class="text-dark" style="font-weight:bold;font-size:12px;">SAFE</p>
                            </div>
                            <div class="lab-test-d p-2">
                            <span class="fs-6 fw-bold no-wrap">Antenatal Profile Comprehensive</span>
                            <p>CBC</p>
                            <p>Group</p>
                            <p>Sugar</p>
                            <p>thyroid</p>
                            <span><i class="fa-solid fa-plus"></i>&nbsp;More</span>
                             <p class="mt-2">get report within <span class="fw-bold text-secondary">8 hours</span></p> 
                            <p class="fs-5 fw-bold" style="font-size:18px;"><i class="fa-solid fa-indian-rupee-sign"></i>1499  <span class="fs-5" style="text-decoration: line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>2999</span></p>
                            <div class="d-flex flex-row p-1 border-success  w-25 mb-2 justify-column-bitween align-item-center" style="border-style:dotted;border-width:1.9px; height:25px; background-color:#DAF7A6;">
                                <p class="text-success">11% off</p>
                            </div>
                            <button class="btn btn-danger w-100">ADD TO CART</button>
                            </div>
                        </div>
                        </a>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="facilities-section my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="facilities-heading text-center m-auto w-50">
                        <h2>Lab Test</h2>
                        <div class="div-line m-auto float-left" style="height:3px; background:#95BC2B; width:120px; border-radius:5px; margin-top:-2%;"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
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
                        <div class="fs-6">Trusted by satisfied customers </div>
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
                            <!-- <div class="customer-content text-center border-start p-2">-->
                            <!--    <img src="img/Lab_doctor_2x.webp" alt="" srcset="">-->
                            <!--    <div class="customer-c text-center">-->
                            <!--    <span class="fs-6">Free Doctor Consultation</span>-->
                            <!--    </div>-->
                            <!--</div> -->
                            <div class="customer-content text-center border-start p-2">
                            <img src="img/Lab_offer_2x.webp" alt="" srcset="">
                            <div class="customer-c text-center">
                                <span class="fs-6">Best Prices Guaranteed</span>
                            </div>
                            </div>
                        </div>
                        <!--<h2>Dr.Vijay Kumar</h2>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl">
    <div class="box-content-top bg-white border d-flex justify-content-center align-items-center mb-5" data-aos="fade-up">
        <div class="content">
            <h5> Delhi Ncr Online Diagnostics Platform</h5>
        </div>
    </div>
    </div>
    
    <div class="feature-health mb-5">
        <div class="container-xxl">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="box-feature d-inline-flex d-flex p-4 rounded" data-aos="zoom-in">
                    <div class="">
                    <img src="img/guarantee.png" alt="" srcset="" height="50" width="50">
                    </div>
                    <div class="">
                    <span class="fw-bold fs-5">Quality & Trust assured</span><br>
                    <p style="font-size: 16px;">Samples processed in NABL accredited Labs</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="box-feature  p-4 d-inline-flex d-flex rounded" data-aos="zoom-in">
                    <div class="">
                    <img src="img/on-time.png" alt="" srcset="" height="75" width="75">
                    </div>
                    <div class="">
                    <span class="fw-bold fs-5">‘On-time’ Mantra</span><br>
                    <p style="font-size:16px;">Report on-time, Home Collection in Less than 60 Mins</p> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="box-feature d-inline-flex d-flex p-4 rounded" data-aos="zoom-in">
                    <div>
                    <img src="img/lab.png" alt="" srcset="" height="75" width="75">
                    </div>
                    <div class="">
                    <span class="fw-bold fs-5">Affordability</span><br>
                    <p style="font-size:16px;">Tests & Profiles at Budget-friendly Rates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- all test -->
    
<div class="container-fluid">
    <div class="contact-us bg-white p-2 mb-5 rounded">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12">
              <div class="heading-content text-center m-auto w-50">
                <h2>Contact Us</h2>
                <div class="div-line m-auto float-left" style="height:3px; background:#95BC2B; width:150px; border-radius:5px; margin-top:-2%;"></div>
            </div>  
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="enquiery-form">
                    @if(request('submitted') === 'contact')
                        <div class="alert alert-success">Your contact message has been sent successfully.</div>
                    @endif
                    <form action="https://formsubmit.co/healthynationlab@gmail.com" method="post">
                        <input type="hidden" name="_subject" value="New Contact Us Form Submission">
                        <input type="hidden" name="_template" value="table">
                        <input type="hidden" name="_next" value="{{ url()->current() }}?submitted=contact#contact_name">
                        <input type="hidden" name="_url" value="{{ url()->current() }}#contact-us">
                        <input type="text" name="_honey" style="display:none">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control w-100" id="contact_name" name="Full Name" placeholder="full name" required>
                            <label for="contact_name">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control w-100" id="contact_number" name="Phone Number" placeholder="Number" required>
                            <label for="contact_number">Mobile No</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="contact_address" name="Address" placeholder="address" required>
                            <label for="contact_address">Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="contact_message" name="Comments" style="height: 100px"></textarea>
                            <label for="contact_message">Comments</label>
                         </div>
                         <button type="submit" class="button-33 mt-2 mb-2 w-100">Submit</button>  
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28001.658879211976!2d77.32062603476561!3d28.68344310000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfa5a70b02dbb%3A0x3ab4875688898d09!2sRainbow%20Diagnostics%20(unit%20of%20VIraj%20Diagnostics%20Pvt.%20Ltd)%2C%20Ghaziabad!5e0!3m2!1sen!2sin!4v1722338085657!5m2!1sen!2sin" class="img-fluid" style="border:0;width:100%;height:350px;margin-top:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- include slider end -->
@include('footer')
