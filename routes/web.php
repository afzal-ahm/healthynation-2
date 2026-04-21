<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;
use App\Http\Controllers\whatsappController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PhonepayController;
use App\Http\Controllers\AddpaymentController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\ThankYouController;
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

 Route::get('index', function (){
     return view('index');
 });

Route::post('phone',[PhonepayController::class,'phonePe'])->name('phone');
Route::any('phone-response',[PhonepayController::class,'response'])->name('response');


Route::post('/add-to-cart', [AddpaymentController::class, 'addToCart']);
Route::post('/remove-from-cart', [AddpaymentController::class, 'removeFromCart']);
 
Route::post('/update-cart', [CartController::class, 'updateCart']);


Route::POST('index', [ContactController::class,'submit'])->name('index.submit');
Route::post('/contact-us', [ContactUsController::class, 'submit'])->name('contact.submit');

Route::get('thankyou', [PhonepayController::class, 'response'])->name('thankyou');
Route::get('download-pdf', [PhonepayController::class, 'downloadPDF'])->name('downloadPDF');


Route::get('Terms-Conditions', function(){
    return view('Terms-Conditions');
})->name('Terms-Conditions');

Route::get('Privacy-Policy', function(){
    return view('Privacy-Policy');
})->name('Privacy-Policy');


 Route::get('cart', function (){
    return view('cart');
});

Route::get('/otp', function () {
    return view('otp'); // Return the view with the popup
});

Route::get('lab-test/thyroid-profile', function () {
    return view('lab-test.thyroid-profile');
})->name('lab-test.thyroid-profile');

Route::get('lab-test/Antenatal-Profile-Comprehensive', function () {
    return view('lab-test.Antenatal-Profile-Comprehensive');
})->name('lab-test.Antenatal-Profile-Comprehensive');

Route::get('lab-test/Antenatal-Profile-Comprehensive', function () {
    return view('lab-test.Antenatal-Profile-Comprehensive');
})->name('lab-test.Antenatal-Profile-Comprehensive');

Route::get('lab-test/Antenatal-Profile', function () {
    return view('lab-test.Antenatal-Profile');
})->name('lab-test.Antenatal-Profile');


Route::get('lab-test/lipid-profile', function () {
    return view('lab-test/lipid-profile');
})->name('lab-test.lipid-profile');

Route::get('lab-test/liver-profile', function(){
    return view('lab-test.liver-profile');
})->name('lab-test.liver-profile');

Route::post('/send-otp', [OtpController::class, 'sendOtp'])->name('send.otp');

 Route::get('lab-test/Healthy-Gold-Full-Body-Checkup', function () {
    return view('lab-test.Healthy-Gold-Full-Body-Checkup');
})->name('lab-test.healthy-gold');

 Route::get('lab-test/healthy-silver-full-body-checkup', function(){
    return view('lab-test/healthy-silver-full-body-checkup');
 })->name('lab-test.healthy-silver');
 
  Route::get('lab-test/healthy-fit', function(){
    return view('lab-test/healthy-fit');
 })->name('lab-test.healthy-fit');

 Route::get('lab-test/healthy-platinum-full-body-checkup', function(){
    return view('lab-test/healthy-platinum-full-body-checkup');
})->name('lab-test.healthy-platinum');

Route::get('lab-test/Triiodothyronine-Test', function(){
    return view('lab-test/Triiodothyronine-Test');
})->name('lab-test.Triiodothyronine-Test');

Route::get('lab-test/Thyroxine-total', function(){
    return view('lab-test/Thyroxine-total');
})->name('lab-test.Thyroxine-total');

Route::get('lab-test/Thyroid-Stimulating-Home',function (){
    return View('lab-test/Thyroid-Stimulating-Home');
})->name('lab-test.Thyroid-Stimulating-Home');

Route::get('lab-test/Cholesterol - Total', function (){
    return view('lab-test/Cholesterol - Total');
})->name('lab-test.Cholesterol - Total');

Route::get('lab-test/Triglycerides', function(){
    return view('lab-test/Triglycerides');
})->name('lab-test.Triglycerides');

Route::get('lab-test/fever-package-advance', function(){
   return view('lab-test/fever-package-advance');
})->name('lab-test.fever-package-advance');


Route::get('lab-test/fever-package', function(){
  return view('lab-test/fever-package');
})->name('lab-test.fever-package');

Route::get('lab-test/fever-package-comprehensive',function(){
    return view('lab-test/fever-package-comprehensive');
})->name('lab-test.fever-package-comprehensive');

Route::get('lab-test/vairal-flu-panal', function(){
   return view('lab-test/vairal-flu-panal');
})->name('lab-test.vairal-flu-panal');

Route::get('search-test', function (){
    return view('search-test');
});

Route::get('lab-test/amylase', function(){
    return view('lab-test/amylase');
})->name('lab-test.amylase');

Route::get('lab-test/AMH-(Anti-Mullerian-Hormone)', function(){
    return view('lab-test/AMH-(Anti-Mullerian-Hormone)');
})->name('lab-test.AMH-(Anti-Mullerian-Hormone)');

Route::get('lab-test/Anti-Nuclear-Antibody,-EIA', function(){
    return view('lab-test/Anti-Nuclear-Antibody,-EIA');
})->name('lab-test.Anti-Nuclear-Antibody,-EIA');

Route::get('lab-test/Anti-Streptolysin-O-Titer', function(){
    return view('lab-test/Anti-Streptolysin-O-Titer');
})->name('lab-test.Anti-Streptolysin-O-Titer');

Route::get('lab-test/Anti-CCP-Antibody', function(){
    return view('lab-test/Anti-CCP-Antibody');
})->name('lab-test.Anti-CCP-Antibody');

Route::get('lab-test/Anti-TPO Antibody(Anti-Thyroid Peroxidase Antibody)', function(){
    return view('lab-test/Anti-TPO Antibody(Anti-Thyroid Peroxidase Antibody)');
})->name('lab-test.Anti-TPO Antibody(Anti-Thyroid Peroxidase Antibody)');

Route::get('lab-test/CA125(Cancer Antigen 125))', function(){
    return view('lab-test/CA125 (Cancer Antigen 125)');
})->name('lab-test.CA125(Cancer Antigen 125)');

Route::get('lab-test/HCG-Beta-Total-Quantitative-Maternal)', function(){
    return view('lab-test/HCG-Beta-Total-Quantitative,-Maternal');
})->name('lab-test.HCG-Beta-Total-Quantitative-Maternal');

Route::get('lab-test/Blood-Urea-Nitrogen)', function(){
    return view('lab-test/Blood-Urea-Nitrogen');
})->name('lab-test.Blood-Urea-Nitrogen');

Route::get('lab-test/Bilirubin-Total)', function(){
    return view('lab-test/Bilirubin-Total');
})->name('lab-test.Bilirubin-Total');

Route::get('lab-test/blood-urea', function(){
    return view('lab-test/blood-urea');
})->name('lab-test.blood-urea');

Route::get('lab-test/Ooccult-blood-(stool)', function(){
    return view('lab-test/Ooccult-blood-(stool)');
})->name('lab-test.Ooccult-blood-(stool)');

Route::get('lab-test/Blood-Glucose', function(){
    return view('lab-test/Blood-Glucose');
})->name('lab-test.Blood-Glucose');

Route::get('lab-test/Blood-Glucose-fasting', function(){
    return view('lab-test/Blood-Glucose-fasting');
})->name('lab-test.Blood-Glucose-fasting');

Route::get('lab-test/Blood-Glucose-pp', function(){
    return view('lab-test/Blood-Glucose-pp');
})->name('lab-test.Blood-Glucose-pp');

Route::get('lab-test/Blood-Glucose-Random', function(){
    return view('lab-test/Blood-Glucose-Random');
})->name('lab-test.Blood-Glucose-Random');

Route::get('lab-test/CA15_3)', function(){
    return view('lab-test/CA15_3');
})->name('lab-test.CA15_3');

Route::get('lab-test/CA19_9)', function(){
    return view('lab-test/CA19_9');
})->name('lab-test.CA19_9');

Route::get('lab-test/Carcino-Embryonic-Antigen)', function(){
    return view('lab-test/Carcino-Embryonic-Antigen');
})->name('lab-test.Carcino-Embryonic-Antigen');

Route::get('lab-test/Chikungunya-IgM)', function(){
    return view('lab-test/Chikungunya-IgM');
})->name('lab-test.Chikungunya-IgM');

Route::get('lab-test/Cortisol-Serum)', function(){
    return view('lab-test/Cortisol-Serum');
})->name('lab-test.Cortisol-Serum');

Route::get('lab-test/CBC-(Complete-Blood-Count)', function(){
    return view('lab-test/CBC-(Complete-Blood-Count)');
})->name('lab-test.CBC-(Complete-Blood-Count)');

Route::get('lab-test/Creatinine', function(){
    return view('lab-test/Creatinine');
})->name('lab-test.Creatinine');

Route::get('lab-test/Creatine-Kinase-MB', function(){
    return view('lab-test/Creatine-Kinase-MB');
})->name('lab-test.Creatine-Kinase-MB');

Route::get('lab-test/Creatine-Phosphokinase', function(){
    return view('lab-test/Creatine-Phosphokinase');
})->name('lab-test.Creatine-Phosphokinase');

Route::get('lab-test/CRP-(C-Reactive Protein)-Quantitative', function(){
    return view('lab-test/CRP-(C-Reactive Protein)-Quantitative');
})->name('lab-test.CRP-(C-Reactive Protein)-Quantitative');

Route::get('lab-test/Urine-C-S-(Urine-Culture-and-Sensitivity)', function(){
    return view('lab-test/Urine-C-S-(Urine-Culture-and-Sensitivity)');
})->name('lab-test.Urine-C-S-(Urine-Culture-and-Sensitivity)');

Route::get('lab-test/d-miner', function(){
    return view('lab-test/d-miner');
})->name('lab-test.d-miner');


Route::get('lab-test/Dengue-Fever-NS1-Antigen', function(){
    return view('lab-test/Dengue-Fever-NS1-Antigen');
})->name('lab-test.Dengue-Fever-NS1-Antigen');

Route::get('lab-test/Double-Marker-Test-First-Trimester', function(){
    return view('lab-test/Double-Marker-Test-First-Trimester');
})->name('lab-test.Double-Marker-Test-First-Trimester');

Route::get('lab-test/EGFR-(Estimated Glomerular Filtraton)', function(){
    return view('lab-test/EGFR-(Estimated Glomerular Filtraton)');
})->name('lab-test.EGFR-(Estimated Glomerular Filtraton)');

Route::get('lab-test/Ferritin', function(){
    return view('lab-test/Ferritin');
})->name('lab-test.Ferritin');

Route::get('lab-test/Folic-Acid', function(){
    return view('lab-test/Folic-Acid');
})->name('lab-test.Folic-Acid');

Route::get('lab-test/17-hydroxy-progesterone', function(){
    return view('lab-test/17-hydroxy-progesterone');
})->name('lab-test.17-hydroxy-progesterone');

Route::get('lab-test/Follicle-Stimulating-Hormone', function(){
    return view('lab-test/Follicle-Stimulating-Hormone');
})->name('lab-test.Follicle-Stimulating-Hormone');

Route::get('lab-test/G6PD-Quantitative', function(){
    return view('lab-test/G6PD-Quantitative');
})->name('lab-test.G6PD-Quantitative');

Route::get('lab-test/dihydrotestosterone', function(){
    return view('lab-test/dihydrotestosterone');
})->name('lab-test.dihydrotestosterone');

Route::get('lab-test/acid-fast-bacilli', function(){
    return view('lab-test/acid-fast-bacilli');
})->name('lab-test.acid-fast-bacilli');

Route::get('lab-test/Adenosine-Deaminase', function(){
    return view('lab-test/Adenosine-Deaminase');
})->name('lab-test.Adenosine-Deaminase');

Route::get('lab-test/AIDS-HIV-Antibodies', function(){
    return view('lab-test/AIDS-HIV-Antibodies');
})->name('lab-test.AIDS-HIV-Antibodies');

Route::get('lab-test/Alanine-transaminase', function(){
    return view('lab-test/Alanine-transaminase');
})->name('lab-test.Alanine-transaminase');

Route::get('lab-test/albumin-serum', function(){
    return view('lab-test/albumin-serum');
})->name('lab-test.albumin-serum');

Route::get('lab-test/Albumin-fluid', function(){
    return view('lab-test/Albumin-fluid');
})->name('lab-test.Albumin-fluid');

Route::get('lab-test/Albumin-24-Hours-Urine', function(){
    return view('lab-test/Albumin-24-Hours-Urine');
})->name('lab-test.Albumin-24-Hours-Urine');

Route::get('lab-test/alcohol-blood', function(){
    return view('lab-test/alcohol-blood');
})->name('lab-test.alcohol-blood');

Route::get('lab-test/Alkaine-phosphatase', function(){
    return view('lab-test/Alkaine-phosphatase');
})->name('lab-test.Alkaine-phosphatase');

Route::get('lab-test/Allergy-Inhalant', function(){
    return view('lab-test/Allergy-Inhalant');
})->name('lab-test.Allergy-Inhalant');

Route::get('lab-test/alpha-feto-protein-afp', function(){
    return view('lab-test/alpha-feto-protein-afp');
})->name('lab-test.alpha-feto-protein-afp');

Route::get('lab-test/amh-anti-mullerian-hormone', function(){
    return view('lab-test/amh-anti-mullerian-hormone');
})->name('lab-test.amh-anti-mullerian-hormone');

Route::get('lab-test/Amoebic-serology', function(){
    return view('lab-test/Amoebic-serology');
})->name('lab-test.Amoebic-serology');

Route::get('lab-test/amoebic-serolgoy-fluid', function(){
    return view('lab-test/amoebic-serolgoy-fluid');
})->name('lab-test.amoebic-serolgoy-fluid');

Route::get('lab-test/amylase', function(){
    return view('lab-test/amylase');
})->name('lab-test.amylase');

Route::get('lab-test/amylase-fluid', function(){
    return view('lab-test/amylase-fluid');
})->name('lab-test.amylase-fluid');

Route::get('lab-test/anti-nuclear-antibody', function(){
    return view('lab-test/anti-nuclear-antibody');
})->name('lab-test.anti-nuclear-antibody');

Route::get('lab-test/Anti-Nuclear-Antibody-EIA', function(){
    return view('lab-test/Anti-Nuclear-Antibody-EIA');
})->name('lab-test.Anti-Nuclear-Antibody-EIA');

Route::get('lab-test/ANA-IFA', function(){
    return view('lab-test/ANA-IFA');
})->name('lab-test.ANA-IFA');

Route::get('lab-test/androstenedione', function(){
    return view('lab-test/androstenedione');
})->name('lab-test.androstenedione');

Route::get('lab-test/Angiotensin-converting-Enzyme', function(){
    return view('lab-test/Angiotensin-converting-Enzyme');
})->name('lab-test.Angiotensin-converting-Enzyme');

Route::get('lab-test/Anit-ds-DNA-Antibody', function(){
    return view('lab-test/Anit-ds-DNA-Antibody');
})->name('lab-test.Anit-ds-DNA-Antibody');

Route::get('lab-test/Anit-ds-DNA-Antibody', function(){
    return view('lab-test/Anit-ds-DNA-Antibody');
})->name('lab-test.Anit-ds-DNA-Antibody');

Route::get('lab-test/Anit-ds-DNA-Antibody', function(){
    return view('lab-test/Anit-ds-DNA-Antibody');
})->name('lab-test.Anit-ds-DNA-Antibody');

Route::get('lab-test/Anti-Cardiolipin-Antibodies-lgA', function(){
    return view('lab-test/Anti-Cardiolipin-Antibodies-lgA');
})->name('lab-test.Anti-Cardiolipin-Antibodies-lgA');

Route::get('lab-test/Anti-Cardiolipin-Antibodies-lgG', function(){
    return view('lab-test/Anti-Cardiolipin-Antibodies-lgG');
})->name('lab-test.Anti-Cardiolipin-Antibodies-lgG');

Route::get('lab-test/Anti-Cardiolipin-Antibodies-lgM', function(){
    return view('lab-test/Anti-Cardiolipin-Antibodies-lgM');
})->name('lab-test.Anti-Cardiolipin-Antibodies-lgM');

Route::get('lab-test/anti-citrulinated-c-Peptide', function(){
    return view('lab-test/anti-citrulinated-c-Peptide');
})->name('lab-test.anti-citrulinated-c-Peptide');

Route::get('lab-test/Anti-Gliadin-Antibody-lgG', function(){
    return view('lab-test/Anti-Gliadin-Antibody-lgG');
})->name('lab-test.Anti-Gliadin-Antibody-lgG');

Route::get('lab-test/Anti-hav-lgG', function(){
    return view('lab-test/Anti-hav-lgG');
})->name('lab-test.Anti-hav-lgG');

Route::get('lab-test/Anti-hav-lgM', function(){
    return view('lab-test/Anti-hav-lgM');
})->name('lab-test.Anti-hav-lgM');

Route::get('lab-test/Anti-HCV-RAPID', function(){
    return view('lab-test/Anti-HCV-RAPID');
})->name('lab-test.Anti-HCV-RAPID');

Route::get('lab-test/Anti-HEV-lgG', function(){
    return view('lab-test/Anti-HEV-lgG');
})->name('lab-test.Anti-HEV-lgG');

Route::get('lab-test/Anti-HEV-lgM', function(){
    return view('lab-test/Anti-HEV-lgM');
})->name('lab-test.Anti-HEV-lgM');

Route::get('lab-test/Anti-Phospholipid-Antibodies-lgG', function(){
    return view('lab-test/Anti-Phospholipid-Antibodies-lgG');
})->name('lab-test.Anti-Phospholipid-Antibodies-lgG');

Route::get('lab-test/Anti-Phospholipid-Antibodies-lgM', function(){
    return view('lab-test/Anti-Phospholipid-Antibodies-lgM');
})->name('lab-test.Anti-Phospholipid-Antibodies-lgM');

Route::get('lab-test/Anti-Sperm-antibodies', function(){
    return view('lab-test/Anti-Sperm-antibodies');
})->name('lab-test.Anti-Sperm-antibodies');

Route::get('lab-test/Apolipoprotein-b', function(){
    return view('lab-test/Apolipoprotein-b');
})->name('lab-test.Apolipoprotein-b');

Route::get('lab-test/Apolipoprotein-AI', function(){
    return view('lab-test/Apolipoprotein-AI');
})->name('lab-test.Apolipoprotein-AI');

Route::get('lab-test/Apolipoprotein-AI', function(){
    return view('lab-test/Apolipoprotein-AI');
})->name('lab-test.Apolipoprotein-AI');

Route::get('lab-test/Ascitic-fluid-cyto-for-Malignant-cells', function(){
    return view('lab-test/Ascitic-fluid-cyto-for-Malignant-cells');
})->name('lab-test.Ascitic-fluid-cyto-for-Malignant-cells');

Route::get('lab-test/ASO-Titre-Quantitiative', function(){
    return view('lab-test/ASO-Titre-Quantitiative');
})->name('lab-test.ASO-Titre-Quantitiative');

Route::get('lab-test/Aspartate-Transaminase', function(){
    return view('lab-test/Aspartate-Transaminase');
})->name('lab-test.Aspartate-Transaminase');

Route::get('lab-test/Aspergillus-IGE', function(){
    return view('lab-test/Aspergillus-IGE');
})->name('lab-test.Aspergillus-IGE');

Route::get('lab-test/Aspergillus-lgG', function(){
    return view('lab-test/Aspergillus-lgG');
})->name('lab-test.Aspergillus-lgG');

Route::get('lab-test/Aspergillus-lgm', function(){
    return view('lab-test/Aspergillus-lgm');
})->name('lab-test.Aspergillus-lgm');

Route::get('lab-test/B2-Glycoprotein-lgm', function(){
    return view('lab-test/B2-Glycoprotein-lgm');
})->name('lab-test.B2-Glycoprotein-lgm');

Route::get('lab-test/Bence-Jones-Proteins', function(){
    return view('lab-test/Bence-Jones-Proteins');
})->name('lab-test.Bence-Jones-Proteins');

Route::get('lab-test/B2-Glycoprotein-1-Antibody-lgG', function(){
    return view('lab-test/B2-Glycoprotein-1-Antibody-lgG');
})->name('lab-test.B2-Glycoprotein-1-Antibody-lgG');

Route::get('lab-test/BHCG-LEVEL-SERUM', function(){
    return view('lab-test/BHCG-LEVEL-SERUM');
})->name('lab-test.BHCG-LEVEL-SERUM');

Route::get('lab-test/Bicarbonate', function(){
    return view('lab-test/Bicarbonate');
})->name('lab-test.Bicarbonate');

Route::get('lab-test/Bile-Acid', function(){
    return view('lab-test/Bile-Acid');
})->name('lab-test.Bile-Acid');

Route::get('lab-test/Bile-Salt', function(){
    return view('lab-test/Bile-Salt');
})->name('lab-test.Bile-Salt');

Route::get('lab-test/BILIRUBIN', function(){
    return view('lab-test/BILIRUBIN');
})->name('lab-test.BILIRUBIN');

Route::get('lab-test/BIOPSY', function(){
    return view('lab-test/BIOPSY');
})->name('lab-test.BIOPSY');

Route::get('lab-test/BLOOD-CULTURE-SENSITIVITY', function(){
    return view('lab-test/BLOOD-CULTURE-SENSITIVITY');
})->name('lab-test.BLOOD-CULTURE-SENSITIVITY');

Route::get('lab-test/BLOOD-CULTURE-SENSITIVITY(BACTEC)', function(){
    return view('lab-test/BLOOD-CULTURE-SENSITIVITY(BACTEC)');
})->name('lab-test.BLOOD-CULTURE-SENSITIVITY(BACTEC)');

Route::get('lab-test/Blood-Group-RH-FACTOR)', function(){
    return view('lab-test/Blood-Group-RH-FACTOR');
})->name('lab-test.Blood-Group-RH-FACTOR');


Route::get('lab-test/Blood-Sugar', function(){
    return view('lab-test/Blood-Sugar');
})->name('lab-test.Blood-Sugar)');

Route::get('lab-test/Brucella-lgG', function(){
    return view('lab-test/Brucella-lgG');
})->name('lab-test.Brucella-lgG');

Route::get('lab-test/Brucella-lgM', function(){
    return view('lab-test/Brucella-lgM');
})->name('lab-test.Brucella-lgM');

Route::get('lab-test/C-Peptide', function(){
    return view('lab-test/C-Peptide');
})->name('lab-test.C-Peptide');

Route::get('lab-test/C-Peptide-Fasting', function(){
    return view('lab-test/C-Peptide-Fasting');
})->name('lab-test.C-Peptide-Fasting');

Route::get('lab-test/C-Peptide-PP', function(){
    return view('lab-test/C-Peptide-PP');
})->name('lab-test.C-Peptide-PP');


Route::get('lab-test/CA72_4', function(){
    return view('lab-test/CA72_4');
})->name('lab-test.CA72_4');

Route::get('lab-test/Calcitonin', function(){
    return view('lab-test/Calcitonin');
})->name('lab-test.Calcitonin');

Route::get('lab-test/calcium', function(){
    return view('lab-test/calcium');
})->name('lab-test.calcium');

Route::get('lab-test/Calcium-Creatinine-Ratio-Spot-Urine', function(){
    return view('lab-test/Calcium-Creatinine-Ratio-Spot-Urine');
})->name('lab-test.Calcium-Creatinine-Ratio-Spot-Urine');

Route::get('lab-test/C-ANCA', function(){
    return view('lab-test/C-ANCA');
})->name('lab-test.C-ANCA');

Route::get('lab-test/Carbamazepine', function(){
    return view('lab-test/Carbamazepine');
})->name('lab-test.Carbamazepine');

Route::get('lab-test/CD4', function(){
    return view('lab-test/CD4');
})->name('lab-test.CD4');

Route::get('lab-test/Ceruloplasmin', function(){
    return view('lab-test/Ceruloplasmin');
})->name('lab-test.Ceruloplasmin');

Route::get('lab-test/Chikungunya-pcr', function(){
    return view('lab-test/Chikungunya-pcr');
})->name('lab-test.Chikungunya-pcr');

Route::get('lab-test/chloride', function(){
    return view('lab-test/chloride');
})->name('lab-test.chloride');

Route::get('lab-test/chloride-spot', function(){
    return view('lab-test/chloride-spot');
})->name('lab-test.chloride-spot');

Route::get('lab-test/Chloride-24Hours', function(){
    return view('lab-test/Chloride-24Hours');
})->name('lab-test.Chloride-24Hours');

Route::get('lab-test/CMV-lgG', function(){
    return view('lab-test/CMV-lgG');
})->name('lab-test.CMV-lgG');

Route::get('lab-test/CMV-lgM', function(){
    return view('lab-test/CMV-lgM');
})->name('lab-test.CMV-lgM');

Route::get('lab-test/Complement-C3', function(){
    return view('lab-test/Complement-C3');
})->name('lab-test.Complement-C3');

Route::get('lab-test/Complement-C4', function(){
    return view('lab-test/Complement-C4');
})->name('lab-test.Complement-C4');

Route::get('lab-test/Copper', function(){
    return view('lab-test/Copper');
})->name('lab-test.Copper');

Route::get('lab-test/Cortisol-total', function(){
    return view('lab-test/Cortisol-total');
})->name('lab-test.Cortisol-total');

Route::get('lab-test/C-Reactive-Protein', function(){
    return view('lab-test/C-Reactive-Protein');
})->name('lab-test.C-Reactive-Protein');

Route::get('lab-test/Creatinine-Spot-Urine', function(){
    return view('lab-test/Creatinine-Spot-Urine');
})->name('lab-test.Creatinine-Spot-Urine');

Route::get('lab-test/Cystatin-C', function(){
    return view('lab-test/Cystatin-C');
})->name('lab-test.Cystatin-C');

Route::get('lab-test/Cysticercosis-Serology', function(){
    return view('lab-test/Cysticercosis-Serology');
})->name('lab-test.Cysticercosis-Serology');

Route::get('lab-test/D-Dimer', function(){
    return view('lab-test/D-Dimer');
})->name('lab-test.D-Dimer');

Route::get('lab-test/Dehydroepiandostern', function(){
    return view('lab-test/Dehydroepiandostern');
})->name('lab-test.Dehydroepiandostern');

Route::get('lab-test/Dengue-IGG-IGM-Elisa', function(){
    return view('lab-test/Dengue-IGG-IGM-Elisa');
})->name('lab-test.Dengue-IGG-IGM-Elisa');

Route::get('lab-test/DHEAS', function(){
    return view('lab-test/DHEAS');
})->name('lab-test.DHEAS');

Route::get('lab-test/Digoxin', function(){
    return view('lab-test/Digoxin');
})->name('lab-test.Digoxin');

Route::get('lab-test/Direct-Bilirubin', function(){
    return view('lab-test/Direct-Bilirubin');
})->name('lab-test.Direct-Bilirubin');

Route::get('lab-test/Direct-Coombs', function(){
    return view('lab-test/Direct-Coombs');
})->name('lab-test.Direct-Coombs');

Route::get('lab-test/Double-Marker', function(){
    return view('lab-test/Double-Marker');
})->name('lab-test.Double-Marker');

Route::get('lab-test/E2-Estradiol', function(){
    return view('lab-test/E2-Estradiol');
})->name('lab-test.E2-Estradiol');

Route::get('lab-test/Epstein-Barr-Virus-antibody-lgM', function(){
    return view('lab-test/Epstein-Barr-Virus-antibody-lgM');
})->name('lab-test.Epstein-Barr-Virus-antibody-lgM');

Route::get('lab-test/Epstein-Barr-Virus-antibody-lgG', function(){
    return view('lab-test/Epstein-Barr-Virus-antibody-lgG');
})->name('lab-test.Epstein-Barr-Virus-antibody-lgG');

Route::get('lab-test/Erythrocyte-Sedimentation-Rate', function(){
    return view('lab-test/Erythrocyte-Sedimentation-Rate');
})->name('lab-test.Erythrocyte-Sedimentation-Rate');

Route::get('lab-test/Examination-for-Malignant-Cells', function(){
    return view('lab-test/Examination-for-Malignant-Cells');
})->name('lab-test.Examination-for-Malignant-Cells');

Route::get('lab-test/Filaria-Antibody', function(){
    return view('lab-test/Filaria-Antibody');
})->name('lab-test.Filaria-Antibody');

Route::get('lab-test/Fluid-Examination', function(){
    return view('lab-test/Fluid-Examination');
})->name('lab-test.Fluid-Examination');

Route::get('lab-test/Food-Allergy-Panel', function(){
    return view('lab-test/Food-Allergy-Panel');
})->name('lab-test.Food-Allergy-Panel');

Route::get('lab-test/Free-Beta-hCG', function(){
    return view('lab-test/Free-Beta-hCG');
})->name('lab-test.Free-Beta-hCG');

Route::get('lab-test/Prostate-Specific-Antigen', function(){
    return view('lab-test/Prostate-Specific-Antigen');
})->name('lab-test.Prostate-Specific-Antigen');

Route::get('lab-test/Free-T3', function(){
    return view('lab-test/Free-T3');
})->name('lab-test.Free-T3');

Route::get('lab-test/Free-T4', function(){
    return view('lab-test/Free-T4');
})->name('lab-test.Free-T4');

Route::get('lab-test/Fructosamine', function(){
    return view('lab-test/Fructosamine');
})->name('lab-test.Fructosamine');

Route::get('lab-test/Gamma-Glutamyl-Transferase', function(){
    return view('lab-test/Gamma-Glutamyl-Transferase');
})->name('lab-test.Gamma-Glutamyl-Transferase');

Route::get('lab-test/Genexpert-mtb', function(){
    return view('lab-test/Genexpert-mtb');
})->name('lab-test.Genexpert-mtb');

Route::get('lab-test/Gliadin-Antibody-lgA', function(){
    return view('lab-test/Gliadin-Antibody-lgA');
})->name('lab-test.Gliadin-Antibody-lgA');

Route::get('lab-test/Glucose-tolerance-test', function(){
    return view('lab-test/Glucose-tolerance-test');
})->name('lab-test.Glucose-tolerance-test');

Route::get('lab-test/Glycated-Haemoglobin-HBA1C', function(){
    return view('lab-test/Glycated-Haemoglobin-HBA1C');
})->name('lab-test.Glycated-Haemoglobin-HBA1C');

Route::get('lab-test/Glycated-Haemoglobin-HBA1C', function(){
    return view('lab-test/Glycated-Haemoglobin-HBA1C');
})->name('lab-test.Glycated-Haemoglobin-HBA1C');

Route::get('lab-test/gram-stain', function(){
    return view('lab-test/gram-stain');
})->name('lab-test.gram-stain');

Route::get('lab-test/Growth-hormone', function(){
    return view('lab-test/Growth-hormone');
})->name('lab-test.Growth-hormone');


Route::get('lab-test/H-pylori-lgA', function(){
    return view('lab-test/H-pylori-lgA');
})->name('lab-test.H-pylori-lgA');


Route::get('lab-test/H-Pylori-Antibodies-lgG', function(){
    return view('lab-test/H-Pylori-Antibodies-lgG');
})->name('lab-test.H-Pylori-Antibodies-lgG');

Route::get('lab-test/H-Pylori-Antibodies-lgM', function(){
    return view('lab-test/H-Pylori-Antibodies-lgM');
})->name('lab-test.H-Pylori-Antibodies-lgM');

Route::get('lab-test/Haemoglobin', function(){
    return view('lab-test/Haemoglobin');
})->name('lab-test.Haemoglobin');

Route::get('lab-test/Hb-Electrophoresis', function(){
    return view('lab-test/Hb-Electrophoresis');
})->name('lab-test.Hb-Electrophoresis');

Route::get('lab-test/HBsAg', function(){
    return view('lab-test/HBsAg');
})->name('lab-test.HBsAg');

Route::get('lab-test/HBSAG-Quantative', function(){
    return view('lab-test/HBSAG-Quantative');
})->name('lab-test.HBSAG-Quantative');

Route::get('lab-test/HBV-DNA-Viral-Load', function(){
    return view('lab-test/HBV-DNA-Viral-Load');
})->name('lab-test.HBV-DNA-Viral-Load');

Route::get('lab-test/HCV-RNA-Viral-Load', function(){
    return view('lab-test/HCV-RNA-Viral-Load');
})->name('lab-test.HCV-RNA-Viral-Load');

Route::get('lab-test/HCV-RNA-Genotyping-Assay', function(){
    return view('lab-test/HCV-RNA-Genotyping-Assay');
})->name('lab-test.HCV-RNA-Genotyping-Assay');

Route::get('lab-test/HDL-Cholesterol', function(){
    return view('lab-test/HDL-Cholesterol');
})->name('lab-test.HDL-Cholesterol');

Route::get('lab-test/Hepatitis-c-Virus-Antibodies-Q', function(){
    return view('lab-test/Hepatitis-c-Virus-Antibodies-Q');
})->name('lab-test.Hepatitis-c-Virus-Antibodies-Q');

Route::get('lab-test/Hepatitis-B-core-Antibody-lgM', function(){
    return view('lab-test/Hepatitis-B-core-Antibody-lgM');
})->name('lab-test.Hepatitis-B-core-Antibody-lgM');

Route::get('lab-test/Hepatitis-B-Core-Antibody-Total', function(){
    return view('lab-test/Hepatitis-B-Core-Antibody-Total');
})->name('lab-test.Hepatitis-B-Core-Antibody-Total');

Route::get('lab-test/Hepatitis-B-Virus-Antigen', function(){
    return view('lab-test/Hepatitis-B-Virus-Antigen');
})->name('lab-test.Hepatitis-B-Virus-Antigen');

Route::get('lab-test/Hepatitis-C-Virus-lgG', function(){
    return view('lab-test/Hepatitis-C-Virus-lgG');
})->name('lab-test.Hepatitis-C-Virus-lgG');

Route::get('lab-test/Hepatits-B-Envelope-Antibody', function(){
    return view('lab-test/Hepatits-B-Envelope-Antibody');
})->name('lab-test.Hepatits-B-Envelope-Antibody');

Route::get('lab-test/Hepatits-B-Surface-Antibody-total', function(){
    return view('lab-test/Hepatits-B-Surface-Antibody-total');
})->name('lab-test.Hepatits-B-Surface-Antibody-total');

Route::get('lab-test/Herpes-Simplex-Virus-lgG', function(){
    return view('lab-test/Herpes-Simplex-Virus-lgG');
})->name('lab-test.Herpes-Simplex-Virus-lgG');

Route::get('lab-test/Herpes-Simplex-Virus-lgM', function(){
    return view('lab-test/Herpes-Simplex-Virus-lgM');
})->name('lab-test.Herpes-Simplex-Virus-lgM');

Route::get('lab-test/Histopathology', function(){
    return view('lab-test/Histopathology');
})->name('lab-test.Histopathology');

Route::get('lab-test/Histopathology-Appendix', function(){
    return view('lab-test/Histopathology-Appendix');
})->name('lab-test.Histopathology-Appendix');

Route::get('lab-test/Histopathology-Endometrium', function(){
    return view('lab-test/Histopathology-Endometrium');
})->name('lab-test.Histopathology-Endometrium');

Route::get('lab-test/Histopathology-Gall-Bladder', function(){
    return view('lab-test/Histopathology-Gall-Bladder');
})->name('lab-test.Histopathology-Gall-Bladder');

Route::get('lab-test/HIV-Elisa-Microwell', function(){
    return view('lab-test/HIV-Elisa-Microwell');
})->name('lab-test.HIV-Elisa-Microwell');

Route::get('lab-test/HLA-B27-PCR', function(){
    return view('lab-test/HLA-B27-PCR');
})->name('lab-test.HLA-B27-PCR');

Route::get('lab-test/HLA-B27', function(){
    return view('lab-test/HLA-B27');
})->name('lab-test.HLA-B27');

Route::get('lab-test/Homocysteine', function(){
    return view('lab-test/Homocysteine');
})->name('lab-test.Homocysteine');

Route::get('lab-test/Hydatid-Serology', function(){
    return view('lab-test/Hydatid-Serology');
})->name('lab-test.Hydatid-Serology');

Route::get('lab-test/lgE-Total', function(){
    return view('lab-test/lgE-Total');
})->name('lab-test.lgE-Total');

Route::get('lab-test/IL6', function(){
    return view('lab-test/IL6');
})->name('lab-test.IL6');

Route::get('lab-test/Immunoglobulin-lgA', function(){
    return view('lab-test/Immunoglobulin-lgA');
})->name('lab-test.Immunoglobulin-lgA');

Route::get('lab-test/Immunoglobulin-lgG', function(){
    return view('lab-test/Immunoglobulin-lgG');
})->name('lab-test.Immunoglobulin-lgG');

Route::get('lab-test/Immunoglobulin-lgM', function(){
    return view('lab-test/Immunoglobulin-lgM');
})->name('lab-test.Immunoglobulin-lgM');

Route::get('lab-test/Indirect-Bilirubin', function(){
    return view('lab-test/Indirect-Bilirubin');
})->name('lab-test.Indirect-Bilirubin');

Route::get('lab-test/Indirect-Coombs-Test', function(){
    return view('lab-test/Indirect-Coombs-Test');
})->name('lab-test.Indirect-Coombs-Test');

Route::get('lab-test/Inhibin-B', function(){
    return view('lab-test/Inhibin-B');
})->name('lab-test.Inhibin-B');

Route::get('lab-test/Insulin-Post-Prandial', function(){
    return view('lab-test/Insulin-Post-Prandial');
})->name('lab-test.Insulin-Post-Prandial');

Route::get('lab-test/Insulin', function(){
    return view('lab-test/Insulin');
})->name('lab-test.Insulin');

Route::get('lab-test/Insulin-Fasting', function(){
    return view('lab-test/Insulin-Fasting');
})->name('lab-test.Insulin-Fasting');

Route::get('lab-test/Insulin-Like-Growth-Factor-Somatomedin', function(){
    return view('lab-test/Insulin-Like-Growth-Factor-Somatomedin');
})->name('lab-test.Insulin-Like-Growth-Factor-Somatomedin');

Route::get('lab-test/Ionised-Calcium', function(){
    return view('lab-test/Ionised-Calcium');
})->name('lab-test.Ionised-Calcium');

Route::get('lab-test/Iron', function(){
    return view('lab-test/Iron');
})->name('lab-test.Iron');

Route::get('lab-test/Iron-Binding-Capacity-total', function(){
    return view('lab-test/Iron-Binding-Capacity-total');
})->name('lab-test.Iron-Binding-Capacity-total');

Route::get('lab-test/Iron-Studies-Basic', function(){
    return view('lab-test/Iron-Studies-Basic');
})->name('lab-test.Iron-Studies-Basic');


Route::get('lab-test/karyotyping', function(){
    return view('lab-test/karyotyping');
})->name('lab-test.karyotyping');

Route::get('lab-test/Kidney-function-test', function(){
    return view('lab-test/Kidney-function-test');
})->name('lab-test.Kidney-function-test');

Route::get('lab-test/lactate-Dehydrogenase', function(){
    return view('lab-test/lactate-Dehydrogenase');
})->name('lab-test.lactate-Dehydrogenase');

Route::get('lab-test/lead', function(){
    return view('lab-test/lead');
})->name('lab-test.lead');

Route::get('lab-test/Lead-Urine-Random', function(){
    return view('lab-test/Lead-Urine-Random');
})->name('lab-test.Lead-Urine-Random');

Route::get('lab-test/Leptospirosis-lgG', function(){
    return view('lab-test/Leptospirosis-lgG');
})->name('lab-test.Leptospirosis-lgG');

Route::get('lab-test/Leptospirosis-lgM', function(){
    return view('lab-test/Leptospirosis-lgM');
})->name('lab-test.Leptospirosis-lgM');

Route::get('lab-test/Lipase', function(){
    return view('lab-test/Lipase');
})->name('lab-test.Lipase');

Route::get('lab-test/Lipoprotein-A', function(){
    return view('lab-test/Lipoprotein-A');
})->name('lab-test.Lipoprotein-A');

Route::get('lab-test/Liquid-Based-Cytology', function(){
    return view('lab-test/Liquid-Based-Cytology');
})->name('lab-test.Liquid-Based-Cytology');

Route::get('lab-test/Lithium', function(){
    return view('lab-test/Lithium');
})->name('lab-test.Lithium');

Route::get('lab-test/Lupus-anti-coagulant', function(){
    return view('lab-test/Lupus-anti-coagulant');
})->name('lab-test.Lupus-anti-coagulant');

Route::get('lab-test/Luteinizing-hormone', function(){
    return view('lab-test/Luteinizing-hormone');
})->name('lab-test.Luteinizing-hormone');

Route::get('lab-test/Magnesium', function(){
    return view('lab-test/Magnesium');
})->name('lab-test.Magnesium');

Route::get('lab-test/Malaria-Antigen', function(){
    return view('lab-test/Malaria-Antigen');
})->name('lab-test.Malaria-Antigen');

Route::get('lab-test/Malignant-cells', function(){
    return view('lab-test/Malignant-cells');
})->name('lab-test.Malignant-cells');

Route::get('lab-test/Mantoux-test', function(){
    return view('lab-test/Mantoux-test');
})->name('lab-test.Mantoux-test');

Route::get('lab-test/Metanephrine-Free', function(){
    return view('lab-test/Metanephrine-Free');
})->name('lab-test.Metanephrine-Free');

Route::get('lab-test/Micro-Filaria-Antibody', function(){
    return view('lab-test/Micro-Filaria-Antibody');
})->name('lab-test.Micro-Filaria-Antibody');

Route::get('lab-test/Micro-filaria-Antigen', function(){
    return view('lab-test/Micro-filaria-Antigen');
})->name('lab-test.Micro-filaria-Antigen');

Route::get('lab-test/Micro-Albumin-Creatinine-Ratio-Urine', function(){
    return view('lab-test/Micro-Albumin-Creatinine-Ratio-Urine');
})->name('lab-test.Micro-Albumin-Creatinine-Ratio-Urine');

Route::get('lab-test/Microalbuminuria', function(){
    return view('lab-test/Microalbuminuria');
})->name('lab-test.Microalbuminuria');

Route::get('lab-test/MP', function(){
    return view('lab-test/MP');
})->name('lab-test.MP');

Route::get('lab-test/Mycobacterium-tuberculosis-pcr', function(){
    return view('lab-test/Mycobacterium-tuberculosis-pcr');
})->name('lab-test.Mycobacterium-tuberculosis-pcr');

Route::get('lab-test/Osmolality-Urine', function(){
    return view('lab-test/Osmolality-Urine');
})->name('lab-test.Osmolality-Urine');

Route::get('lab-test/Osmotic-Fragility-test', function(){
    return view('lab-test/Osmotic-Fragility-test');
})->name('lab-test.Osmotic-Fragility-test');

Route::get('lab-test/Oxalate-24-Hous-Urine', function(){
    return view('lab-test/Oxalate-24-Hous-Urine');
})->name('lab-test.Oxalate-24-Hous-Urine');


Route::get('lab-test/P-ANCA', function(){
    return view('lab-test/P-ANCA');
})->name('lab-test.P-ANCA');

Route::get('lab-test/PAP-Smear', function(){
    return view('lab-test/PAP-Smear');
})->name('lab-test.PAP-Smear');

Route::get('lab-test/Parathyroid-Hormone', function(){
    return view('lab-test/Parathyroid-Hormone');
})->name('lab-test.Parathyroid-Hormone');

Route::get('lab-test/Partial-thromboplastin-time', function(){
    return view('lab-test/Partial-thromboplastin-time');
})->name('lab-test.Partial-thromboplastin-time');

Route::get('lab-test/Peripheral-Blood-Smear', function(){
    return view('lab-test/Peripheral-Blood-Smear');
})->name('lab-test.Peripheral-Blood-Smear');

Route::get('lab-test/Peritoneal-fluid-Examination-for-Malignant-cells', function(){
    return view('lab-test/Peritoneal-fluid-Examination-for-Malignant-cells');
})->name('lab-test.Peritoneal-fluid-Examination-for-Malignant-cells');

Route::get('lab-test/Phenytoin', function(){
    return view('lab-test/Phenytoin');
})->name('lab-test.Phenytoin');

Route::get('lab-test/Phosphorus', function(){
    return view('lab-test/Phosphorus');
})->name('lab-test.Phosphorus');

Route::get('lab-test/Pleural-Fluid-Examination-forMalignant-cells', function(){
    return view('lab-test/Pleural-Fluid-Examination-forMalignant-cells');
})->name('lab-test.Pleural-Fluid-Examination-forMalignant-cells');

Route::get('lab-test/Potassium', function(){
    return view('lab-test/Potassium');
})->name('lab-test.Potassium');

Route::get('lab-test/Pro-Beta-Natriuretic-Peptide', function(){
    return view('lab-test/Pro-Beta-Natriuretic-Peptide');
})->name('lab-test.Pro-Beta-Natriuretic-Peptide');

Route::get('lab-test/Procalcitonin', function(){
    return view('lab-test/Procalcitonin');
})->name('lab-test.Procalcitonin');

Route::get('lab-test/Progesterone', function(){
    return view('lab-test/Progesterone');
})->name('lab-test.Progesterone');

Route::get('lab-test/Prolactin', function(){
    return view('lab-test/Prolactin');
})->name('lab-test.Prolactin');

Route::get('lab-test/Prolactin-Pooled', function(){
    return view('lab-test/Prolactin-Pooled');
})->name('lab-test.Prolactin-Pooled');

Route::get('lab-test/Protein-Creatinine-Ratio-24hrs-urine', function(){
    return view('lab-test/Protein-Creatinine-Ratio-24hrs-urine');
})->name('lab-test.Protein-Creatinine-Ratio-24hrs-urine');

Route::get('lab-test/Protein-c', function(){
    return view('lab-test/Protein-c');
})->name('lab-test.Protein-c');

Route::get('lab-test/Protein-Electrophoresis', function(){
    return view('lab-test/Protein-Electrophoresis');
})->name('lab-test.Protein-Electrophoresis');

Route::get('lab-test/Protein-Electrophorsis-CSF', function(){
    return view('lab-test/Protein-Electrophorsis-CSF');
})->name('lab-test.Protein-Electrophorsis-CSF');

Route::get('lab-test/Protein-Electrophorsis-Urine', function(){
    return view('lab-test/Protein-Electrophorsis-Urine');
})->name('lab-test.Protein-Electrophorsis-Urine');

Route::get('lab-test/Protein-s', function(){
    return view('lab-test/Protein-s');
})->name('lab-test.Protein-s');

Route::get('lab-test/Proteins', function(){
    return view('lab-test/Proteins');
})->name('lab-test.Proteins');

Route::get('lab-test/Proteine-24-Hours-Urine', function(){
    return view('lab-test/Proteine-24-Hours-Urine');
})->name('lab-test.Proteine-24-Hours-Urine');

Route::get('lab-test/Psa-total', function(){
    return view('lab-test/Psa-total');
})->name('lab-test.Psa-total');

Route::get('lab-test/PT-with-inr', function(){
    return view('lab-test/PT-with-inr');
})->name('lab-test.PT-with-inr');


Route::get('lab-test/Pus-Culture', function(){
    return view('lab-test/Pus-Culture');
})->name('lab-test.Pus-Culture');

Route::get('lab-test/Quadruble-Marker', function(){
    return view('lab-test/Quadruble-Marker');
})->name('lab-test.Quadruble-Marker');

Route::get('lab-test/RA-Factor', function(){
    return view('lab-test/RA-Factor');
})->name('lab-test.RA-Factor');

Route::get('lab-test/RA-Factor-Quantitative', function(){
    return view('lab-test/RA-Factor-Quantitative');
})->name('lab-test.RA-Factor-Quantitative');

Route::get('lab-test/Reticulocyte-count', function(){
    return view('lab-test/Reticulocyte-count');
})->name('lab-test.Reticulocyte-count');

Route::get('lab-test/RH-Antiybody', function(){
    return view('lab-test/RH-Antiybody');
})->name('lab-test.RH-Antiybody');


Route::get('lab-test/Rubella-lgG', function(){
    return view('lab-test/Rubella-lgG');
})->name('lab-test.Rubella-lgG');

Route::get('lab-test/Rubella-lgG-Avidity', function(){
    return view('lab-test/Rubella-lgG-Avidity');
})->name('lab-test.Rubella-lgG-Avidity');

Route::get('lab-test/Rubella-lgM', function(){
    return view('lab-test/Rubella-lgM');
})->name('lab-test.Rubella-lgM');

Route::get('lab-test/SAAG', function(){
    return view('lab-test/SAAG');
})->name('lab-test.SAAG');

Route::get('lab-test/Scriub-Typhus', function(){
    return view('lab-test/Scriub-Typhus');
})->name('lab-test.Scriub-Typhus');

Route::get('lab-test/Semen-Analysis', function(){
    return view('lab-test/Semen-Analysis');
})->name('lab-test.Semen-Analysis');

Route::get('lab-test/Semen-Culture-Sennsitivity', function(){
    return view('lab-test/Semen-Culture-Sennsitivity');
})->name('lab-test.Semen-Culture-Sennsitivity');

Route::get('lab-test/Serum-Acid-Phosphatase', function(){
    return view('lab-test/Serum-Acid-Phosphatase');
})->name('lab-test.Serum-Acid-Phosphatase');

Route::get('lab-test/Serum-Bilirubin', function(){
    return view('lab-test/Serum-Bilirubin');
})->name('lab-test.Serum-Bilirubin');

Route::get('lab-test/Sex-Hormone-Blnding-Globulin', function(){
    return view('lab-test/Sex-Hormone-Blnding-Globulin');
})->name('lab-test.Sex-Hormone-Blnding-Globulin');

Route::get('lab-test/Smear-For-Micro-Filaria', function(){
    return view('lab-test/Smear-For-Micro-Filaria');
})->name('lab-test.Smear-For-Micro-Filaria');

Route::get('lab-test/Sodium', function(){
    return view('lab-test/Sodium');
})->name('lab-test.Sodium');

Route::get('lab-test/Sputum-Culture-Sensitivity', function(){
    return view('lab-test/Sputum-Culture-Sensitivity');
})->name('lab-test.Sputum-Culture-Sensitivity');

Route::get('lab-test/Sputum-Cytology', function(){
    return view('lab-test/Sputum-Cytology');
})->name('lab-test.Sputum-Cytology');

Route::get('lab-test/Sputum-Examination-For-Malignant-Cells', function(){
    return view('lab-test/Sputum-Examination-For-Malignant-Cells');
})->name('lab-test.Sputum-Examination-For-Malignant-Cells');

Route::get('lab-test/Stone-Analysis', function(){
    return view('lab-test/Stone-Analysis');
})->name('lab-test.Stone-Analysis');

Route::get('lab-test/Stool-Culture', function(){
    return view('lab-test/Stool-Culture');
})->name('lab-test.Stool-Culture');

Route::get('lab-test/Stool-Examination', function(){
    return view('lab-test/Stool-Examination');
})->name('lab-test.Stool-Examination');

Route::get('lab-test/Stool-Hanging-Drop', function(){
    return view('lab-test/Stool-Hanging-Drop');
})->name('lab-test.Stool-Hanging-Drop');

Route::get('lab-test/Synovial-Fluid-Cytology-For-Malignant-Cells', function(){
    return view('lab-test/Synovial-Fluid-Cytology-For-Malignant-Cells');
})->name('lab-test.Synovial-Fluid-Cytology-For-Malignant-Cells');

Route::get('lab-test/TB-Platinum-Gold', function(){
    return view('lab-test/TB-Platinum-Gold');
})->name('lab-test.TB-Platinum-Gold');

Route::get('lab-test/Testosterone', function(){
    return view('lab-test/Testosterone');
})->name('lab-test.Testosterone');

Route::get('lab-test/Testosterone-Free', function(){
    return view('lab-test/Testosterone-Free');
})->name('lab-test.Testosterone-Free');

Route::get('lab-test/TGA-Anti-Thyroglobulin-Antibodies', function(){
    return view('lab-test/TGA-Anti-Thyroglobulin-Antibodies');
})->name('lab-test.TGA-Anti-Thyroglobulin-Antibodies');

Route::get('lab-test/Tissue-Transglutaminase-lgA', function(){
    return view('lab-test/Tissue-Transglutaminase-lgA');
})->name('lab-test.Tissue-Transglutaminase-lgA');

Route::get('lab-test/Tissue-Transglutaminase-lgG', function(){
    return view('lab-test/Tissue-Transglutaminase-lgG');
})->name('lab-test.Tissue-Transglutaminase-lgG');

Route::get('lab-test/Tissue-Transglutaminase-lgM', function(){
    return view('lab-test/Tissue-Transglutaminase-lgM');
})->name('lab-test.Tissue-Transglutaminase-lgM');

Route::get('lab-test/Torch-Profile-IGG-4', function(){
    return view('lab-test/Torch-Profile-IGG-4');
})->name('lab-test.Torch-Profile-IGG-4');

Route::get('lab-test/Torch-Profile-IGG-5', function(){
    return view('lab-test/Torch-Profile-IGG-5');
})->name('lab-test.Torch-Profile-IGG-5');

Route::get('lab-test/Torch-Profile-IGM-4', function(){
    return view('lab-test/Torch-Profile-IGM-4');
})->name('lab-test.Torch-Profile-IGM-4');

Route::get('lab-test/Torch-Profile-IGM-5', function(){
    return view('lab-test/Torch-Profile-IGM-5');
})->name('lab-test.Torch-Profile-IGM-5');

Route::get('lab-test/Thyroid-Profile-Free', function(){
    return view('lab-test/Thyroid-Profile-Free');
})->name('lab-test.Thyroid-Profile-Free');

Route::get('lab-test/Widal', function(){
    return view('lab-test/Widal');
})->name('lab-test.Widal');



Route::get('lab-test/Zinc-Urine-Random', function(){
    return view('lab-test/Zinc-Urine-Random');
})->name('lab-test.Zinc-Urine-Random');

Route::get('lab-test/Zinc', function(){
    return view('lab-test/Zinc');
})->name('lab-test.Zinc');

Route::get('lab-test/Western-Blot-Assay-For-HIV-Antibodies', function(){
    return view('lab-test/Western-Blot-Assay-For-HIV-Antibodies');
})->name('lab-test.Western-Blot-Assay-For-HIV-Antibodies');

Route::get('lab-test/VMA', function(){
    return view('lab-test/VMA');
})->name('lab-test.VMA');

Route::get('lab-test/Vitmain-D3', function(){
    return view('lab-test/Vitmain-D3');
})->name('lab-test.Vitmain-D3');

Route::get('lab-test/Vitamin-B12', function(){
    return view('lab-test/Vitamin-B12');
})->name('lab-test.Vitamin-B12');

Route::get('lab-test/Valporic-Acid-Levels', function(){
    return view('lab-test/Valporic-Acid-Levels');
})->name('lab-test.Valporic-Acid-Levels');

Route::get('lab-test/V-D-R-L-IN-Dilution', function(){
    return view('lab-test/V-D-R-L-IN-Dilution');
})->name('lab-test.V-D-R-L-IN-Dilution');

Route::get('lab-test/V-D-R-L-IN-Dilution', function(){
    return view('lab-test/V-D-R-L-IN-Dilution');
})->name('lab-test.V-D-R-L-IN-Dilution');

Route::get('lab-test/V-D-R-L', function(){
    return view('lab-test/V-D-R-L');
})->name('lab-test.V-D-R-L');

Route::get('lab-test/Urobilinogen', function(){
    return view('lab-test/Urobilinogen');
})->name('lab-test.Urobilinogen');

Route::get('lab-test/Urine-Routine-Examination', function(){
    return view('lab-test/Urine-Routine-Examination');
})->name('lab-test.Urine-Routine-Examination');

Route::get('lab-test/Urine-Pregnancy-Test', function(){
    return view('lab-test/Urine-Pregnancy-Test');
})->name('lab-test.Urine-Pregnancy-Test');

Route::get('lab-test/Urine-Examination-For-Malignant-Cells', function(){
    return view('lab-test/Urine-Examination-For-Malignant-Cells');
})->name('lab-test.Urine-Examination-For-Malignant-Cells');

Route::get('lab-test/Urine-Culture-Sensitivity', function(){
    return view('lab-test/Urine-Culture-Sensitivity');
})->name('lab-test.Urine-Culture-Sensitivity');

Route::get('lab-test/Urine-Albumin', function(){
    return view('lab-test/Urine-Albumin');
})->name('lab-test.Urine-Albumin');

Route::get('lab-test/Uric-Acid', function(){
    return view('lab-test/Uric-Acid');
})->name('lab-test.Uric-Acid');

Route::get('lab-test/Ultrasensitive-CRP', function(){
    return view('lab-test/Ultrasensitive-CRP');
})->name('lab-test.Ultrasensitive-CRP');

Route::get('lab-test/Typhidot-Test', function(){
    return view('lab-test/Typhidot-Test');
})->name('lab-test.Typhidot-Test');

Route::get('lab-test/Troponin-T', function(){
    return view('lab-test/Troponin-T');
})->name('lab-test.Troponin-T');

Route::get('lab-test/Troponin-I', function(){
    return view('lab-test/Troponin-I');
})->name('lab-test.Troponin-I');

Route::get('lab-test/Triple-Marker-Interpretation', function(){
    return view('lab-test/Triple-Marker-Interpretation');
})->name('lab-test.Triple-Marker-Interpretation');

Route::get('lab-test/Triple-Marker-Interpretation', function(){
    return view('lab-test/Triple-Marker-Interpretation');
})->name('lab-test.Triple-Marker-Interpretation');

Route::get('lab-test/Treponema-Pallidum-Antibodies', function(){
    return view('lab-test/Treponema-Pallidum-Antibodies');
})->name('lab-test.Treponema-Pallidum-Antibodies');

Route::get('lab-test/Toxoplasma-lgM', function(){
    return view('lab-test/Toxoplasma-lgM');
})->name('lab-test.Toxoplasma-lgM');

Route::get('lab-test/Toxoplasma-lgG', function(){
    return view('lab-test/Toxoplasma-lgG');
})->name('lab-test.Toxoplasma-lgG');

Route::get('lab-test/Total-Leucocyte-Count', function(){
    return view('lab-test/Total-Leucocyte-Count');
})->name('lab-test.Total-Leucocyte-Count');

Route::get('lab-test/AEC-Absolute-Eosinophil-Count', function(){
    return view('lab-test/AEC-Absolute-Eosinophil-Count');
})->name('lab-test.AEC-Absolute-Eosinophil-Count');

Route::get('lab-test/PC-Platelet-Count', function(){
    return view('lab-test/PC-Platelet-Count');
})->name('lab-test.PC-Platelet-Count');


Route::post('/send-message', [whatsappController::class, 'sendWhatsAppMessage'])->name('send.message');
