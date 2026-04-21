@include('header')
<div class="lab-test-description mb-5" style="margin-top:12%;">
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="header-page-test mt-2 mb-2 text-center">
                <span>Home › Amylase Serum</span>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
          <div class="test-details rounded bg-white">
                <div class="test-description-add d-flex border-bottom p-2">
                    <p>Test Detail</p> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
                <div class="test-description-add d-flex border-bottom p-2">
                    <p>Understanding</p> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
                <div class="test-description-add d-flex border-bottom p-2">
                    <p>Test Measure</p> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
                <div class="test-description-add border-bottom p-2">
                    <p>FAQ's</p> 
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
           <div class="test-description rounded p-3 bg-white">
            <div class="heading-description d-flex flex-row mt-3">
                <span class="fs-4">Amylase Serum </span>
                <button class="btn w-50" id="add-to-cart" 
                  data-name="Amylase Serum" 
                  data-price="249">BOOK NOW</button>
            </div>
            <p class="mt-2">Also known as <span class="fw-bold">Serum Amylase</span></p>
                <p class="fs-3" style="color:black;"><i class="fa-solid fa-indian-rupee-sign"></i>249
                </p>
                <span class="fs-5" style="text-decoration-line:line-through;"><i class="fa-solid fa-indian-rupee-sign"></i>499</span>

            <div class="need-c d-flex flex-row">
                <div class="need-provide border-start">
                    <p>You need to provide</p>
                    <span>Blood</span>
                </div>
                <div class="need-gender border-start">
                    <p>This test is for</p>
                    <span>Male, Female</span>
                </div>
             </div>
             <div class="test-description-lab mt-4 p-2 rounded">
                <span>Test Preparation</span>
                <ol>
                    <li>Fasting is generally not required for an amylase serum test. However, your healthcare provider may ask you to fast for 6-8 hours if other tests (such as lipase, blood glucose, or liver function tests) are being performed simultaneously.</li>
                    <li>If fasting is required, you'll be informed in advance by your doctor or the lab.</li>
                    <li>Alcohol: Avoid alcohol for at least 24 hours before the test. Alcohol consumption can elevate amylase levels and potentially lead to inaccurate results.</li>
                    <li>Food: While fasting is generally not necessary, it's a good idea to avoid heavy meals or fatty foods immediately before the test, as these can sometimes affect the accuracy of test results.</li>
                </ol>
             </div> 
             <div class="test-rpoet broder-3 border-bottom mt-4 mb-2">
                <span class="fs-4 text-align:justify">Understanding Amylase</span>
             </div>  
             <span class="fs-5 mb-2">What is Amylase?</span> 
             <p style="text-align:justify;">Salivary Amylase (Ptyalin): Produced by the salivary glands in the mouth. It begins the process of starch digestion in the mouth.</p>
             <p class="mb-2" style="text-align:justify;">Pancreatic Amylase: Produced by the pancreas and released into the small intestine, where it continues the digestion of starches. </p>
             <p class="mb-2" style="text-align: justify;">The Amylase Serum Test measures the amount of amylase in the blood. It is primarily used to help diagnose and monitor conditions affecting the pancreas, such as pancreatitis, or other disorders of the digestive system.</p>
        
             <span class="fs-5">What is  Amylase used for?</span>
             <ul>
                
                <li class="mb-2" style="font-size:14px;">If a person has symptoms such as severe abdominal pain (often in the upper abdomen), nausea, vomiting, and fever, the doctor may order an amylase test to check for inflammation of the pancreas (pancreatitis).</li>
                <li class="mb-2" style="font-size:14px;">In acute pancreatitis, amylase levels in the blood can be significantly elevated.</li>
                <li class="mb-2" style="font-size:14px;">In cases where pancreatitis has become a long-term issue, amylase levels may be elevated or normal, but chronic conditions like pancreatic insufficiency may result in lower-than-normal amylase levels.</li>
                <li class="mb-2" style="font-size:14px;">If there is unexplained abdominal pain, bloating, or other gastrointestinal symptoms, an amylase test can help rule out or confirm issues with the pancreas, gallbladder, or other digestive organs.</li>
                 <li class="mb-2" style="font-size:14px;">Mumps, salivary duct obstruction, or inflammation of the salivary glands (such as sialadenitis) may also lead to elevated amylase levels.</li>
                <li class="mb-2" style="font-size:14px;">In people with known pancreatic disease or kidney failure, amylase levels can be monitored over time to evaluate the severity of the condition or the response to treatment.</li>
             </ul>
            </div> 
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-12">
           <div class="test-card rounded p-2 bg-white">
              <div class="cart-pric d-flex flex-row mb-4">
                  <div class="logo-feadback">
                      <img src="{{ asset('img/logo.png') }}" class="img-fluid" width="150" height="150" alt="" srcset="">
                  </div>
                  <div class="logo-price d-inline-flex" style="padding-left:2%;display: block;">
                    <p class="fs-3 fw-bold float-end" style="color:#1868cc;">
                        <i class="fa-solid fa-indian-rupee-sign"></i>249
                    </p>
                    <span class="fs-5 float-end" style="text-decoration-line:line-through; color:#1868cc;">
                        <i class="fa-solid fa-indian-rupee-sign"></i>499
                    </span>
                    </div>
              </div>
              <button class="btn">ADD TO CART</button>
           </div>
           <div class="frequently-together p-2 mt-2 bg-white">
              <div class="heading-frequnety">
                 <span class="fs-5 ">Frequently Booked Togethter</span>
                 <ul class="frequently-list">
                   <a href="http://" class="d-inline-flex">
                    <li class="">Thyroid Profile Total (T3, T4 & TSH)
                        <span class="break text-secondary">Thyroid Panel, TFT, Thyroid Function Test</span>
                    </li>
                    <a href="http://"><i class="fa-solid fa-plus text-secondary mt-3 border p-1 rounded-circle border-dark" style="font-size:12px;"></i></a> 
                   </a>
                   <a href="http://" class="d-inline-flex">
                    <li>FBS (Fasting Blood Sugar)
                        <span class="break text-secondary">FBG (Fasting Blood Glucose), Glucose - Fasting (F), Fasting Blood Sugar</span>
                    </li>
                    <a href="http://"><i class="fa-solid fa-plus text-secondary mt-3 border p-1 rounded-circle border-dark" style="font-size:12px;"></i></a> 
                   </a>
                   <a href="http://" class="d-inline-flex">
                    <li>CBC (Complete Blood Count)
                        <span class="break text-secondary">Full blood examination, Full blood cell count, Complete blood picture, FBC, CBP, FBE, TC, DC, TLC, Platelet count, CBC with Differential, CBC + Differential</span>
                    </li>
                    <a href="http://"><i class="fa-solid fa-plus text-secondary mt-3 border p-1 rounded-circle border-dark" style="font-size:12px;"></i></a> 
                   </a>
                   <a href="http://" class="d-inline-flex">
                    <li>HbA1c (Hemoglobin A1c)
                        <span class="break text-secondary">Glycated hemoglobin test, Hemoglobin A1c, Glycosylated Hemoglobin</span>
                    </li>
                    <a href="http://"><i class="fa-solid fa-plus text-secondary mt-3 border p-1 rounded-circle border-dark" style="font-size:12px;"></i></a> 
                    </a>
                   <a href="http://" class="d-inline-flex">
                    <li>LFT (Liver Function Test)
                        <span class="break text-secondary">Hepatic function test, Liver panel test, Liver function panel, Liver profile test</span>
                    </li>
                    <a href="http://"><i class="fa-solid fa-plus text-secondary mt-3 border p-1 rounded-circle border-dark" style="font-size:12px;"></i></a> 
                   </a>
                   <a href="http://" class="d-inline-flex">
                       <li>Uric Acid
                         <span class="break text-secondary">Urate</span>
                        </li>
                        <a href="http://"><i class="fa-solid fa-plus text-secondary mt-3 border p-1 rounded-circle border-dark" style="font-size:12px;"></i></a> 
                    </a>
                  
                   <a href="http://" class="d-inline-flex">
                    <li>Diabetes Screening (HbA1C & Fasting Sugar)
                        <span class="break text-secondary">Diabetes Panel</span>
                    </li>
                    <a href="http://"><i class="fa-solid fa-plus text-secondary mt-3 border p-1 rounded-circle border-dark" style="font-size:12px;"></i></a> 
                   </a>
                   <a href="http://" class="d-inline-flex">
                    <li>PPBS (Postprandial Blood Sugar)
                        <span class="break text-secondary">Postprandial plasma glucose concentration, Sugar PP, 2-hour postprandial, Glucose Postprandial (PP)</span>
                    </li>
                    <a href="http://"><i class="fa-solid fa-plus text-secondary mt-3 border p-1 rounded-circle border-dark" style="font-size:12px;"></i></a> 
                   </a>
                   <a href="http://" class="d-inline-flex">
                    <li>Vitamin D (25-Hydroxy)
                        <span class="break text-secondary">Calcidiol, Vit D (25-OH)</span>
                    </li>
                    <a href="http://"><i class="fa-solid fa-plus text-secondary mt-3 border p-1 rounded-circle border-dark" style="font-size:12px;"></i></a> 
                   </a>
                </ul>
              </div>
           </div>
        </div>
    </div>
</div>

<div class="help-line p-3 fixed-footer" style="background-color:#b1def4;">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                <div class="help-n d-flex">
                <i class="fa-solid fa-phone"></i> &nbsp;&nbsp;&nbsp;<p>Need help? Call us at <span class="fw-bold">+91-99589-57496</span> or get a call back from our health adviser</p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                <div class="help-form d-flex">
                    <form action="">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="floatingPassword" placeholder="number">
                            <label for="floatingPassword">Enter your number</label>
                        </div>
                    </form>
                    <button type="button">Get free call back</button>
                    <a type="" id="cancelButton" class="cancel-button rounded-circle"><i class="fa-solid fa-xmark fs-5"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@include('footer')