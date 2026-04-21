<!-- footer -->

<div class="footer pt-5">
  <div class="footer-section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-4 col-lg-4 col-12">
          <div class="Quik-link">
           <ul>
  <span class="fs-5">Quick Links</span>
  <hr style="width: 25%; color:#95bc2a; height:2px;">

  <li class="mt-3"><a href="/">Home</a></li>
  <li><a href="/terms-conditions.html">Terms & Conditions</a></li>
  <li><a href="/refund-cancellation-policy.html">Refund and Cancellation</a></li>
  <li><a href="/privacy-policy.html">Privacy Policy</a></li>
</ul>

          </div>
        </div>
        <div class="col-xl-4 col-md-4 col-lg-4 col-12">
          <div class="Quik-link">
            <ul>
                <span class="fs-5"> OPENING HOURS</span>
                <hr class="" style="width: 25%; color:#95bc2a;height:2px;">
                 <div class="responsive-table">
                    <table class="table table-borderless" style="color:wheat;">
                      <tr>
                        <td>Monday To Sunday</td>
                        <td>07:00 am to 07:00 pm</td>
                      </tr>
                    </table>
                 </div>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-md-4 col-lg-4 col-12">
          <div class="Quik-link">
            <ul class="">
                <span class="fs-5">CONTACTS</span>
                <hr class="" style="width:25%; color:#95bc2a; height:2px;">
                <li class="d-flex mt-2"><i class="fa-solid fa-location-arrow fs-4"></i>&nbsp;&nbsp;<p>S 45 C block Shalimar garden ext 2 near union bank of India sahibabad Ghaziabad 201005 Uttar Pradesh India</p> </li>
                <li class="d-flex mt-2"><i class="fa-solid fa-envelope fs-4"></i> &nbsp;&nbsp;<a href="mailto:healthynationlab@gmail.com">healthynationlab@gmail.com</a></li>
                <li class="d-flex mt-2"><i class="fa-solid fa-phone fs-4"></i>&nbsp;&nbsp; +91-9958957496, 9958957497</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-end py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
             <div class="develop-company d-flex justify-content-center align-item-center">
                 <p>Website Development and SEO : <a href="https://websiteseotool.in/">Advertising India</a></p>
             </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                <div class="copyright-end d-flex justify-content-center align-item-center">
                    <p>@2016-2025 Healthy Nation Lab. All Right Reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!----end footer -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>-->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/coustm.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{ asset('js/fontawesome.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script>

function displayCartItems() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartItemsContainer = document.getElementById('cart-items-container');

    cartItemsContainer.innerHTML = '';

    if (cartItems.length === 0) {
        cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        return;
    }

    // Create a table element
    const table = document.createElement('table');
    table.style.width = '100%'; // Full width table
    table.style.borderCollapse = 'collapse'; // Collapse borders

    
    const headerRow = document.createElement('tr');
    headerRow.innerHTML = `
        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;background:#1A4625;color:#fff;">Item Name</th>
        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;background:#1A4625;color:#fff;">Price</th>
        <th style="border: 1px solid #ddd; padding: 8px; text-align: left;background:#1A4625;color:#fff;">Action</th>
    `;
    table.appendChild(headerRow);

   
    cartItems.forEach((item, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td style="border: 1px solid #ddd; padding: 8px; font-weight:600;color:#fff;background:#1A4625;">${item.name}</td>
            <td style="border: 1px solid #ddd; padding: 8px; font-weight:600;color:#fff;background:#1A4625;">₹${item.price}</td>
            <td style="border: 1px solid #ddd; padding: 8px;">
                <button class="remove-item" data-index="${index}" style="padding: 5px 10px; background-color: red; color: white; border: none; cursor: pointer;">Remove</button>
            </td>`;
        
        table.appendChild(row);
    });

    
    cartItemsContainer.appendChild(table);
    const removeButtons = document.querySelectorAll('.remove-item');
    removeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            removeItemFromCart(index);  
        });
    });
}

// Function to remove an item from the cart
function removeItemFromCart(index) {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    
    cartItems.splice(index, 1);

    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    
    displayCartItems();
}

// Call this function to display cart items when the page loads
displayCartItems();



    document.addEventListener('DOMContentLoaded', function() {
            var dateInput = document.getElementById('calendar-input');
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
            var yyyy = today.getFullYear();
            
            today = yyyy + '-' + mm + '-' + dd;
            dateInput.setAttribute('min', today);
        });

 document.addEventListener("DOMContentLoaded", function() {
        // Get current date and time
        var currentDate = new Date();
        var currentHour = currentDate.getHours();
        var currentMinute = currentDate.getMinutes();
        var todayDate = currentDate.toISOString().split('T')[0]; // e.g., "2025-01-20"
        
        var timeSlots = [
            { time: "7:00 To 8:00 AM", hour: 7, minute: 0 },
            { time: "8:00 To 9:00 AM", hour: 8, minute: 0 },
            { time: "9:00 To 10:00 AM", hour: 9, minute: 0 },
            { time: "10:00 To 11:00 AM", hour: 10, minute: 0 },
            { time: "11:00 To 12:00 noon", hour: 11, minute: 0 },
            { time: "12:00 noon To 1:00 PM", hour: 12, minute: 0 },
            { time: "1:00 To 2:00 PM", hour: 13, minute: 0 },
            { time: "2:00 To 3:00 PM", hour: 14, minute: 0 },
            { time: "3:00 To 4:00 PM", hour: 15, minute: 0 },
            { time: "4:00 To 5:00 PM", hour: 16, minute: 0 },
            { time: "5:00 To 6:00 PM", hour: 17, minute: 0 },
            { time: "6:00 To 7:00 PM", hour: 18, minute: 0 }
        ];

        // Function to check if the time slot is past the current time
        function isPastTime(slotHour, slotMinute) {
            // Compare current time with the slot time
            if (slotHour < currentHour) {
                return true; // Past time
            }
            if (slotHour === currentHour && slotMinute <= currentMinute) {
                return true; // Same hour but past minute
            }
            return false; // Future slot
        }

        var inputs = document.querySelectorAll("input[type='radio']");

        document.getElementById("calendar-input").addEventListener('change', function() {
            var selectedDate = this.value;

            inputs.forEach(function(input) {
                var timeSlot = input.getAttribute("data-time");
                var slot = timeSlots.find(slot => slot.time === timeSlot);

                if (selectedDate === todayDate) {
                    if (slot && isPastTime(slot.hour, slot.minute)) {
                        input.disabled = true; 
                    } else {
                        input.disabled = false; 
                    }
                } else {
                    input.disabled = false;
                }
            });
        });

        // On page load, check for the default selected date
        var selectedDate = document.getElementById("calendar-input").value;
        if (selectedDate === todayDate) {
            inputs.forEach(function(input) {
                var timeSlot = input.getAttribute("data-time");
                var slot = timeSlots.find(slot => slot.time === timeSlot);

                if (slot && isPastTime(slot.hour, slot.minute)) {
                    input.disabled = true; // Disable past slots on the current day
                } else {
                    input.disabled = false; // Enable future slots
                }
            });
        }
    });
    
    $(document).ready(function () {
   
    $('#continueBtn2').click(function (e) {
        e.preventDefault(); // Prevent form submission
        // Open the modal to confirm
        $('#confirmationModal').modal('show');
        $('#exampleModal').modal('hide');
    });
    
    $('#confirmPaymentBtn').click(function (e) {
        
        $('#confirmationModal').modal('hide');
        
       
    });
});


const cartItems = document.querySelectorAll('#cart-items-container tr');
const confirmTableBody = document.querySelector('#cart-items-confirm');

cartItems.forEach(item => {
    // Clone the row and remove the remove button
    const clonedRow = item.cloneNode(true);
    
    // Find and remove the "remove" button (or action column if it exists)
    const removeButton = clonedRow.querySelector('.remove-btn'); // Or use the class/id for action button
    if (removeButton) {
        removeButton.closest('td').remove(); // Remove the td which contains the remove button
    }
    
    // Append the cloned row to the confirm table
    confirmTableBody.appendChild(clonedRow);
});

const tableRows = document.querySelectorAll('#cart-items-confirm tr');
const headerRow = document.querySelector('#cart-items-confirm tr');
const lastTh = headerRow ? headerRow.querySelector('th:last-child') : null;
if (lastTh) {
    lastTh.remove();
}

// Loop through each row and remove the last column (action column) and other last children
tableRows.forEach(row => {
    // Remove the last column in the row (action column)
    const lastChild = row.querySelector('td:last-child');  // Select the last td (cell) in the row
    if (lastChild) {
        lastChild.remove();  // Remove the last child
    }
});

// Get all radio buttons with name 'slot_time'
const radioButtons = document.querySelectorAll('input[name="slot_time"]');

const confirmTestDiv = document.querySelector('.confirm-test');

radioButtons.forEach(button => {
    button.addEventListener('change', function() {
        // Check if the radio button is selected
        if (this.checked) {
            // Get the selected slot time and price
            const selectedTime = this.getAttribute('data-time');
            const selectedPrice = this.getAttribute('data-price');
            
            // Update the confirm-test div with the selected slot time and price
           confirmTestDiv.innerHTML = `
    <table style="width: 100%; border-collapse: collapse; background-color: #f4f4f4;">
        <tr>
            <td style="background-color: blue; color: white; padding: 8px; font-weight: bold; text-align: center;">
                Selected Slot: ${selectedTime}
            </td>
            <td style="background-color: blue; color: white; padding: 8px; font-weight: bold; text-align: center;">
                ₹ ${selectedPrice}
            </td>
        </tr>
    </table>
`;
        }
    });
});



// Function to calculate the total price (Cart + Slot time + Print Report)
function calculateTotal() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    let cartTotalPrice = 0;

    // Calculate the total price of items in the cart
    cartItems.forEach(item => {
        cartTotalPrice += parseInt(item.price);
    });

    // Get the selected time slot price
    const radioButtons = document.querySelectorAll('input[name="slot_time"]');
    let selectedSlotPrice = 0;

    radioButtons.forEach(button => {
        if (button.checked) {
            selectedSlotPrice = parseInt(button.getAttribute('data-price'));
        }
    });

    // Check if the "print report" checkbox is checked
    const printReportCheckbox = document.getElementById('print_report');
    const printReportPrice = 99; // Price for print report

    let printReportCost = 0;
    if (printReportCheckbox.checked) {
        printReportCost = printReportPrice;
    }

    // Calculate the final total (cart + slot + print report)
    const totalAmount = cartTotalPrice + selectedSlotPrice + printReportCost;

    // Update the hidden field with the total price (this will be sent to the backend)
    document.getElementById('selectedPrices').value = totalAmount;

    // Optionally, you can still log the total to the console for debugging purposes
    // console.log('Total Amount:', totalAmount);
}

// Add event listener to radio buttons for slot time selection
document.querySelectorAll('input[name="slot_time"]').forEach(button => {
    button.addEventListener('change', calculateTotal);
});

// Add event listener to the print report checkbox
document.getElementById('print_report').addEventListener('change', calculateTotal);

// Call calculateTotal to initialize the total amount whenever the cart is displayed or updated
calculateTotal();



 document.getElementById('slotForm').addEventListener('submit', function(event) {
        const paymentMethod = document.querySelector('input[name="payment_method"]:checked');
        const form = event.target;

        // Check if a payment method is selected
        if (!paymentMethod) {
            alert('Please select a payment method.');
            event.preventDefault();
            return;
        }

        if (paymentMethod.value === 'COD') {
            // Redirect to the index page if COD is selected
           
        } else if (paymentMethod.value === 'Online') {
            // Allow the form to submit to the 'phone' route if Online Payment is selected
            // The form will submit as normal
        }
    });



</script>

<script>


       // Initialize cart count from localStorage (or default to 0)
    let cartCount = JSON.parse(localStorage.getItem('cartItems'))?.length || 0;
    
    function updateCartCount() {
        const cartCountElement = document.getElementById('cart-count');
        cartCountElement.textContent = cartCount;
    }
    
    updateCartCount();
    
    document.getElementById("add-to-cart").addEventListener('click', function() {
        const itemName = this.getAttribute('data-name');
        const itemPrice = this.getAttribute('data-price');
        
        cartCount++;
        
        updateCartCount();
    
        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        cartItems.push({ name: itemName, price: itemPrice });
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
    
        fetch('/update-cart', {
            method: 'POST',
            body: JSON.stringify({ cart_count: cartCount }),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // For CSRF protection in Laravel
            }
        })
        .then(response => response.json())
        .then(data => {
            
            console.log(data);
        })
        .catch(error => console.error('Error updating cart on the server:', error));
    });



</script>

<script>
  AOS.init();

  function hideForm() {
            document.querySelector('.form-enquiry').style.display = 'none';
        }

    // Sample data for autocomplete suggestions
    const pincodes = [
            '110092', '110051', '110032', '110053', '110091','110095', '110032', '110031', '110053', '110031',
            '110096', '110053', '110094', '110051', '110095','110093', '110091', '110092', '110053', '110095',
            '110094', '110031', '110091', '110090', '110094','110051', '110068', '110002', '110058', '110014',
            '110095', '110067', '110019', '110081', '110005','110082', '110051', '110092', '110093', '110032',
            '110092', '110053', '110091', '110096', '110093','110093', '110095', '110053', '110092', '110095',
            '110091', '110031', '110051', '110032', '110053','110032', '110092', '110031', '110032', '110090',
            '110092', '110032', '110091', '110096', '110032','110095', '110053', '110092', '201015', '201009',
            '201001', '201003', '201009', '201102', '201010','201005', '201003', '201011', '201009', '201009',
            '201006', '201102', '201201', '201016', '201015','201009', '201015', '201009', '201003', '201015',
            '201015', '201009', '201001', '201204', '201010','201015', '201015', '201004', '201010', '201002',
            '201003', '201009', '201204', '201007', '201003','201301', '201303', '201206', '201002', '201005',
            '201002', '201002', '201017', '201002', '201001','201002', '201005', '201002', '201014', '201102',
            '201103', '201015', '201019', '201012', '201009','201002', '201102', '201102', '201102', '201102',
            '201102', '201102', '201102'
        ];

        const pincodeInput = document.getElementById('pincodeInput');
        const suggestionsContainer = document.getElementById('suggestions');

        pincodeInput.addEventListener('input', function() {
            const query = this.value;
            suggestionsContainer.innerHTML = '';
            if (query.length > 0) {
                const filteredPincodes = pincodes.filter(pincode => pincode.startsWith(query));
                filteredPincodes.forEach(pincode => {
                    const suggestionDiv = document.createElement('div');
                    suggestionDiv.className = 'autocomplete-suggestion';
                    suggestionDiv.textContent = pincode;
                    suggestionDiv.addEventListener('click', function() {
                        pincodeInput.value = pincode;
                        suggestionsContainer.innerHTML = '';
                    });
                    suggestionsContainer.appendChild(suggestionDiv);
                });
            }
        });

        document.addEventListener('click', function(event) {
            if (!pincodeInput.contains(event.target)) {
                suggestionsContainer.innerHTML = '';
            }
        });  

        const searchSuggestions = [
            {name: 'Healthy Platinum Full Body Checkup', link: '{{ route('lab-test.healthy-platinum')}}'},
            {name: 'Healthy Fit Raho', link: '{{ route('lab-test.healthy-fit')}}'},
            {name: 'Antenatal Profile Comprehensive', link: '{{ route('lab-test.Antenatal-Profile-Comprehensive')}}'},
            {name: 'Antenatal-Profile', link: '{{ route('lab-test.Antenatal-Profile')}}'},
            {name: 'T3 Triiodothyronine Total (T3)', link: '{{ route('lab-test.Triiodothyronine-Test')}}'},
            {name: 'TFT Thyroid Profile (total)', link: '{{ route('lab-test.thyroid-profile')}}'},
            {name: 'FTFT Thyroid Profile (Free)', link: '{{ route('lab-test.Thyroid-Profile-Free')}}'},
            {name:'Lipid Profile', link: '{{ route('lab-test.lipid-profile')}}'},
            {name:'LFT Liver Founction Test', link: '{{route('lab-test.liver-profile')}}'},
            {name: 'fever Package Advanced', link: '{{ route('lab-test.fever-package-advance')}}'},
            {name:'Basic fever Package',link: '{{route('lab-test.fever-package')}}'},
            {name:'fever Package Comprehensive', link: '{{route('lab-test.fever-package-comprehensive')}}'},
            {name:'Viral Flu Panel', link: '{{route('lab-test.vairal-flu-panal')}}'},
            {name:'T4 Thyroxine total', link:'{{route('lab-test.Thyroxine-total')}}'},
            {name:'TSH Thyroid Stimulating Home', link:'{{route('lab-test.Thyroid-Stimulating-Home')}}' },
            {name:'Cholesterol - Total', link:'{{route('lab-test.Cholesterol - Total')}}'},
            {name:'TG Triglycerides', link:'{{route('lab-test.Triglycerides')}}'},
            {name:'Amylase', link:'{{route('lab-test.amylase')}}'},
            {name:'AMH-(Anti-Mullerian-Hormone)', link:'{{route('lab-test.AMH-(Anti-Mullerian-Hormone)')}}'},
            {name:'Anti-Nuclear-Antibody,-EIA', link:'{{route('lab-test.Anti-Nuclear-Antibody,-EIA')}}'},
            {name:'Anti-TPO Antibody(Anti-Thyroid Peroxidase Antibody)', link:'{{route('lab-test.Anti-TPO Antibody(Anti-Thyroid Peroxidase Antibody)')}}'},
            {name:'CA125(Cancer Antigen 125)', link:'{{route('lab-test.CA125(Cancer Antigen 125)')}}'},
            {name:'CA15.3', link:'{{route('lab-test.CA15_3')}}'},
            {name:'CA19.9', link:'{{route('lab-test.CA19_9')}}'},
            {name:'CEA Carcino-Embryonic-Antigen', link:'{{route('lab-test.Carcino-Embryonic-Antigen')}}'},
            {name:'CKT Chikungunya IgM', link:'{{route('lab-test.Chikungunya-IgM')}}'},
            {name:'Cortisol Serum', link:'{{route('lab-test.Cortisol-Serum')}}'},
            {name:'CBC Complete Blood Count', link:'{{route('lab-test.CBC-(Complete-Blood-Count)')}}'},
            {name:'CR Creatinine Serum', link:'{{route('lab-test.Creatinine')}}'},
            {name:'CKMB Creatine Kinase MB', link:'{{route('lab-test.Creatine-Kinase-MB')}}'},
            {name:'CPK Creatine Phosphokinase', link:'{{route('lab-test.Creatine-Phosphokinase')}}'},
            {name:'D-Miner', link:'{{route('lab-test.d-miner')}}'},
            {name:'Dengue Fever NS1 Antigen', link:'{{route('lab-test.Dengue-Fever-NS1-Antigen')}}'},
            {name:'EGFR (Estimated Glomerular Filtraton)', link:'{{route('lab-test.EGFR-(Estimated Glomerular Filtraton)')}}'},
            {name:'Ferritin', link:'{{route('lab-test.Ferritin')}}'},
            {name:'FA Folic Acid B9', link:'{{route('lab-test.Folic-Acid')}}'},
            {name:'FSH Follicle Stimulating Hormone', link:'{{route('lab-test.Follicle-Stimulating-Hormone')}}'},
            {name:'G6PD Quantitative', link:'{{route('lab-test.G6PD-Quantitative')}}'},
            {name:'17-hydroxy-progesterone (17HP)', link:'{{route('lab-test.17-hydroxy-progesterone')}}'},
            {name:'5-Alpha DHT (Dihydrotestpsterone)', link:'{{route('lab-test.dihydrotestosterone')}}'},
            {name:'AFB acid-fast-bacilli', link:'{{route('lab-test.acid-fast-bacilli')}}'},
            {name:'Adenosine-Deaminase (ADA)', link:'{{route('lab-test.Adenosine-Deaminase')}}'},
            {name:'HIV HIVA I & II Antibodies', link:'{{route('lab-test.AIDS-HIV-Antibodies')}}'},
            {name:'SGPT Alanine Transaminase', link:'{{route('lab-test.Alanine-transaminase')}}'},
            {name:'ALB albumin-serum', link:'{{route('lab-test.albumin-serum')}}'},
            {name:'AF Albumin Fluid', link:'{{route('lab-test.Albumin-fluid')}}'},
            {name:'24A Albumin, 24 Hours Urine', link:'{{route('lab-test.Albumin-24-Hours-Urine')}}'},
            {name:'ALCOHOL', link:'{{route('lab-test.alcohol-blood')}}'},
            {name:'ALK Alkaline Phosphatase', link:'{{route('lab-test.Alkaine-phosphatase')}}'},
            {name:'AFP Alpha Feto Protein AFP', link:'{{route('lab-test.alpha-feto-protein-afp')}}'},
            {name:'Amoebic Serology', link:'{{route('lab-test.amoebic-serolgoy-fluid')}}'},
            {name:'ACAG Anti Cardiolipin Antibodies lgG', link:'{{route('lab-test.Anti-Cardiolipin-Antibodies-lgG')}}'},
            {name:'ACAIGA Anti Cardiolipin Antibodies lgA', link:'{{route('lab-test.Anti-Cardiolipin-Antibodies-lgA')}}'},
            {name:'ACAM Anti Cardiolipin Antibodies lgM', link:'{{route('lab-test.Anti-Cardiolipin-Antibodies-lgM')}}'},
            {name:'ANA (Anti Nuclear Antibody)', link:'{{route('lab-test.anti-nuclear-antibody')}}'},
            {name:'ANA (IFA)', link:'{{route('lab-test.ANA-IFA')}}'},
            {name:'Androstenedione', link:'{{route('lab-test.androstenedione')}}'},
            {name:'ACE Angiotensin Converting Enzyme', link:'{{route('lab-test.Angiotensin-converting-Enzyme')}}'},
            {name:'DSDNA Anit ds DNA Antibody', link:'{{route('lab-test.Anit-ds-DNA-Antibody')}}'},
            {name:'Anti CCP (Anti Citrulinated C-Peptide)', link:'{{route('lab-test.anti-citrulinated-c-Peptide')}}'},
            {name:'Anti Gliadin Antibody lgG', link:'{{route('lab-test.Anti-Gliadin-Antibody-lgG')}}'},
            {name:'Anti HAV lgG', link:'{{route('lab-test.Anti-hav-lgG')}}'},
            {name:'Anti HAV lgM', link:'{{route('lab-test.Anti-hav-lgM')}}'},
            {name:'Anti HCV RAPID', link:'{{route('lab-test.Anti-HCV-RAPID')}}'},
            {name:'Anti HEV lgG', link:'{{route('lab-test.Anti-HEV-lgG')}}'},
            {name:'Anti HEV lgM', link:'{{route('lab-test.Anti-HEV-lgM')}}'},
            {name:'APLG Anti Phospholipid Antibodies lgG', link:'{{route('lab-test.Anti-Phospholipid-Antibodies-lgG')}}'},
            {name:'APLM Anti Phospholipid Antibodies lgM', link:'{{route('lab-test.Anti-Phospholipid-Antibodies-lgM')}}'},
            {name:'Anti Sperm antibodies', link:'{{route('lab-test.Anti-Sperm-antibodies')}}'},
            {name:'Apolipoprotein B', link:'{{route('lab-test.Apolipoprotein-b')}}'},
            {name:'Apolipoprotein AI', link:'{{route('lab-test.Apolipoprotein-AI')}}'},
            {name:'ASCITICMAL Ascitic fluid cyto for Malignant cells', link:'{{route('lab-test.Ascitic-fluid-cyto-for-Malignant-cells')}}'},
            {name:'ASOQ ASO Titre Quantitiative', link:'{{route('lab-test.ASO-Titre-Quantitiative')}}'},
            {name:'SGOT Aspartate Transaminase', link:'{{route('lab-test.Aspartate-Transaminase')}}'},
            {name:'Aspergillus IGE', link:'{{route('lab-test.Aspergillus-IGE')}}'},
            {name:'Aspergillus lgG', link:'{{route('lab-test.Aspergillus-lgG')}}'},
            {name:'Aspergillus lgm', link:'{{route('lab-test.Aspergillus-lgm')}}'},
            {name:'B2 Glycoprotein lgm', link:'{{route('lab-test.B2-Glycoprotein-lgm')}}'},
            {name:'BJP Bence Jones Proteins', link:'{{route('lab-test.Bence-Jones-Proteins')}}'},
            {name:'B2 Glycoprotein-1 Antibody-lgG', link:'{{route('lab-test.B2-Glycoprotein-1-Antibody-lgG')}}'},
            {name:'BHCG LEVEL SERUM', link:'{{route('lab-test.BHCG-LEVEL-SERUM')}}'},
            {name:'Bicarbonate', link:'{{route('lab-test.Bicarbonate')}}'},
            {name:'Bile Acid', link:'{{route('lab-test.Bile-Acid')}}'},
            {name:'Bile Salt', link:'{{route('lab-test.Bile-Salt')}}'},
            {name:'BILIRUBIN', link:'{{route('lab-test.BILIRUBIN')}}'},
            {name:'BLOOD CULTURE SENSITIVITY', link:'{{route('lab-test.BLOOD-CULTURE-SENSITIVITY')}}'},
            {name:'BLOOD CULTURE SENSITIVITY(BACTEC)', link:'{{route('lab-test.BLOOD-CULTURE-SENSITIVITY(BACTEC)')}}'},
            {name:'Blood Group RH FACTOR', link:'{{route('lab-test.Blood-Group-RH-FACTOR')}}'},
            {name:'BU Blood Urea ', link:'{{route('lab-test.blood-urea')}}'},
            {name:'Blood Glucose', link:'{{route('lab-test.Blood-Glucose')}}'},
            {name:'FBS Blood Glucose fasting', link:'{{route('lab-test.Blood-Glucose-fasting')}}'},
            {name:'PPBS Blood Glucose PP', link:'{{route('lab-test.Blood-Glucose-pp')}}'},
            {name:'RBS Blood Glucose Random', link:'{{route('lab-test.Blood-Glucose-Random')}}'},
            {name:'Blood Sugar', link:'{{route('lab-test.Blood-Sugar)')}}'},
            {name:'Brucella lgG', link:'{{route('lab-test.Brucella-lgG')}}'},
            {name:'Brucella lgM', link:'{{route('lab-test.Brucella-lgM')}}'},
            {name:'C Peptide', link:'{{route('lab-test.C-Peptide')}}'},
            {name:'C Peptide Fasting', link:'{{route('lab-test.C-Peptide-Fasting')}}'},
            {name:'C Peptide PP', link:'{{route('lab-test.C-Peptide-PP')}}'},
            {name:'CA 72.4', link:'{{route('lab-test.CA72_4')}}'},
            {name:'Calcitonin', link:'{{route('lab-test.Calcitonin')}}'},
            {name:'CALCIUM', link:'{{route('lab-test.calcium')}}'},
            {name:'Calcium Creatinine Ratio Spot Urine', link:'{{route('lab-test.Calcium-Creatinine-Ratio-Spot-Urine')}}'},
            {name:'C ANCA', link:'{{route('lab-test.C-ANCA')}}'},
            {name:'Carbamazepine', link:'{{route('lab-test.Carbamazepine')}}'},
            {name:'CD4', link:'{{route('lab-test.CD4')}}'},
            {name:'Ceruloplasmin', link:'{{route('lab-test.Ceruloplasmin')}}'},
            {name:'Chikungunya PCR', link:'{{route('lab-test.Chikungunya-pcr')}}'},
            {name:'Chloride', link:'{{route('lab-test.chloride')}}'},
            {name:'Chloride Spot', link:'{{route('lab-test.chloride-spot')}}'},
            {name:'Chloride 24 Hours Urine', link:'{{route('lab-test.Chloride-24Hours')}}'},
            {name:'CMV lgG', link:'{{route('lab-test.CMV-lgG')}}'},
            {name:'CMV lgM', link:'{{route('lab-test.CMV-lgM')}}'},
            {name:'Complement C3', link:'{{route('lab-test.Complement-C3')}}'},
            {name:'Complement C4', link:'{{route('lab-test.Complement-C4')}}'},
            {name:'Copper', link:'{{route('lab-test.Copper')}}'},
            {name:'C Reactive Protein', link:'{{route('lab-test.C-Reactive-Protein')}}'},
            {name:'Creatinine Spot Urine', link:'{{route('lab-test.Creatinine-Spot-Urine')}}'},
            {name:'Cystatin C', link:'{{route('lab-test.Cystatin-C')}}'},
            {name:'Cysticercosis Serology', link:'{{route('lab-test.Cysticercosis-Serology')}}'},
            {name:'D Dimer', link:'{{route('lab-test.D-Dimer')}}'},
            {name:'Dehydroepiandosteron', link:'{{route('lab-test.Dehydroepiandostern')}}'},
            {name:'DENGUE IGG & IGM ELISA', link:'{{route('lab-test.Dengue-IGG-IGM-Elisa')}}'},
            {name:'DHEAS', link:'{{route('lab-test.DHEAS')}}'},
            {name:'Digoxin', link:'{{route('lab-test.Digoxin')}}'},
            {name:'Direct Bilirubin', link:'{{route('lab-test.Direct-Bilirubin')}}'},
            {name:'DCT Direct Coombs', link:'{{route('lab-test.Direct-Coombs')}}'},
            {name:'Double Marker', link:'{{route('lab-test.Double-Marker')}}'},
            {name:'E2 Estradiol', link:'{{route('lab-test.E2-Estradiol')}}'},
            {name:'Epstein Barr Virus antibody lgM', link:'{{route('lab-test.Epstein-Barr-Virus-antibody-lgM')}}'},
            {name:'Epstein Barr Virus antibody lgG', link:'{{route('lab-test.Epstein-Barr-Virus-antibody-lgG')}}'},
            {name:'ESR (Erythrocyte Sedimentation Rate)', link:'{{route('lab-test.Erythrocyte-Sedimentation-Rate')}}'},
            {name:'MAL Examination For Malignant Cells', link:'{{route('lab-test.Examination-for-Malignant-Cells')}}'},
            {name:'Fluid Examination', link:'{{route('lab-test.Fluid-Examination')}}'},
            {name:'Food Allergy Panel', link:'{{route('lab-test.Food-Allergy-Panel')}}'},
            {name:'Free Beta-hCG', link:'{{route('lab-test.Free-Beta-hCG')}}'},
            {name:'Free PSA(Prostate Specific Antigen)', link:'{{route('lab-test.Prostate-Specific-Antigen')}}'},
            {name:'Free T3', link:'{{route('lab-test.Free-T3')}}'},
            {name:'Free T4', link:'{{route('lab-test.Free-T4')}}'},
            {name:'Fructosamine', link:'{{route('lab-test.Fructosamine')}}'},
            {name:'Gamma Glutamyl Transferase(GGT)', link:'{{route('lab-test.Gamma-Glutamyl-Transferase')}}'},
            {name:'Genexpert MTB', link:'{{route('lab-test.Genexpert-mtb')}}'},
            {name:'Gliadin Antibody lgA', link:'{{route('lab-test.Gliadin-Antibody-lgA')}}'},
            {name:'Glucose Tolerance Test (GTT)', link:'{{route('lab-test.Glucose-tolerance-test')}}'},
            {name:'HBA1C Glycated Haemoglobin', link:'{{route('lab-test.Glycated-Haemoglobin-HBA1C')}}'},
            {name:'Gram Stain', link:'{{route('lab-test.gram-stain')}}'},
            {name:'Growth Hormone', link:'{{route('lab-test.Growth-hormone')}}'},
            {name:'H Pylori lgA', link:'{{route('lab-test.H-pylori-lgA')}}'},
            {name:'H Pylori Antibodies lgG', link:'{{route('lab-test.H-Pylori-Antibodies-lgG')}}'},
            {name:'H Pylori Antibodies lgM', link:'{{route('lab-test.H-Pylori-Antibodies-lgM')}}'},
            {name:'Haemoglobin', link:'{{route('lab-test.Haemoglobin')}}'},
            {name:'HPLC Hb Electrophoresis', link:'{{route('lab-test.Hb-Electrophoresis')}}'},
            {name:'HBsAg', link:'{{route('lab-test.HBsAg')}}'},
            {name:'HBSAG Quantative', link:'{{route('lab-test.HBSAG-Quantative')}}'},
            {name:'HBV DNA Viral Load', link:'{{route('lab-test.HBV-DNA-Viral-Load')}}'},
            {name:'HCV RNA Viral Load', link:'{{route('lab-test.HCV-RNA-Viral-Load')}}'},
            {name:'HCV RNA Genotyping Assay', link:'{{route('lab-test.HCV-RNA-Genotyping-Assay')}}'},
            {name:'HDL Cholesterol', link:'{{route('lab-test.HDL-Cholesterol')}}'},
            {name:'Hepatitis C Virus Antibodies Q', link:'{{route('lab-test.Hepatitis-c-Virus-Antibodies-Q')}}'},
            {name:'Hepatitis B core Antibody lgM', link:'{{route('lab-test.Hepatitis-B-core-Antibody-lgM')}}'},
            {name:'Hepatitis B Core Antibody Total', link:'{{route('lab-test.Hepatitis-B-Core-Antibody-Total')}}'},
            {name:'Hepatitis B Virus Antigen', link:'{{route('lab-test.Hepatitis-B-Virus-Antigen')}}'},
            {name:'Hepatitis C Virus lgG', link:'{{route('lab-test.Hepatitis-C-Virus-lgG')}}'},
            {name:'Hepatitis B Envelope Antibody', link:'{{route('lab-test.Hepatits-B-Envelope-Antibody')}}'},
            {name:'Hepatitis B Surface Antibody total', link:'{{route('lab-test.Hepatits-B-Surface-Antibody-total')}}'},
            {name:'Herpes Simplex Virus lgG', link:'{{route('lab-test.Herpes-Simplex-Virus-lgG')}}'},
            {name:'Herpes Simplex Virus lgM', link:'{{route('lab-test.Herpes-Simplex-Virus-lgM')}}'},
            {name:'Histopathology', link:'{{route('lab-test.Histopathology')}}'},
            {name:'Histopathology Appendix', link:'{{route('lab-test.Histopathology-Appendix')}}'},
            {name:'Histopathology Endometrium', link:'{{route('lab-test.Histopathology-Endometrium')}}'},
            {name:'Histopathology Gall Bladder', link:'{{route('lab-test.Histopathology-Gall-Bladder')}}'},
            {name:'HIV Elisa Microwell', link:'{{route('lab-test.HIV-Elisa-Microwell')}}'},
            {name:'HLA B27 PCR', link:'{{route('lab-test.HLA-B27-PCR')}}'},
            {name:'HLA B27 (Human Leucocyte AG)', link:'{{route('lab-test.HLA-B27')}}'},
            {name:'Homocysteine', link:'{{route('lab-test.Homocysteine')}}'},
            {name:'Hydatid Serology', link:'{{route('lab-test.Hydatid-Serology')}}'},
            {name:'healthy silver full body checkup', link:'{{route('lab-test.healthy-silver')}}'},
            {name:'Healthy Gold Full Body Checkup', link:'{{route('lab-test.healthy-gold')}}'},
            {name:'IGE lgE Total', link:'{{route('lab-test.lgE-Total')}}'},
            {name:'IL6 (Interleukin -6)', link:'{{route('lab-test.IL6')}}'},
            {name:'Immunoglobulin lgA', link:'{{route('lab-test.Immunoglobulin-lgA')}}'},
            {name:'Immunoglobulin lgG', link:'{{route('lab-test.Immunoglobulin-lgG')}}'},
            {name:'Immunoglobulin lgM', link:'{{route('lab-test.Immunoglobulin-lgM')}}'},
            {name:'Indirect Bilirubin', link:'{{route('lab-test.Indirect-Bilirubin')}}'},
            {name:'ICT Indirect Coombs Test', link:'{{route('lab-test.Indirect-Coombs-Test')}}'},
            {name:'Inhibin B', link:'{{route('lab-test.Inhibin-B')}}'},
            {name:'Insulin-Post Prandial', link:'{{route('lab-test.Insulin-Post-Prandial')}}'},
            {name:'Insulin (Random)', link:'{{route('lab-test.Insulin')}}'},
            {name:'Insulin Fasting', link:'{{route('lab-test.Insulin-Fasting')}}'},
            {name:'Insulin Like Growth Factor Somatomedin', link:'{{route('lab-test.Insulin-Like-Growth-Factor-Somatomedin')}}'},
            {name:'ICAL Ionised Calcium', link:'{{route('lab-test.Ionised-Calcium')}}'},
            {name:'Iron', link:'{{route('lab-test.Iron')}}'},
            {name:'TIBC Iron Binding Capacity Total', link:'{{route('lab-test.Iron-Binding-Capacity-total')}}'},
            {name:'Iron Studies Basic', link:'{{route('lab-test.Iron-Studies-Basic')}}'},
            {name:'karyotyping', link:'{{route('lab-test.karyotyping')}}'},
            {name:'KFT Kidney function Test', link:'{{route('lab-test.Kidney-function-test')}}'},
            {name:'LDH Lactate Dehydrogenase', link:'{{route('lab-test.lactate-Dehydrogenase')}}'},
            {name:'Lead', link:'{{route('lab-test.lead')}}'},
            {name:'Leptospirosis lgG', link:'{{route('lab-test.Leptospirosis-lgG')}}'},
            {name:'Leptospirosis lgM', link:'{{route('lab-test.Leptospirosis-lgM')}}'},
            {name:'LH Luteinizing-hormone', link:'{{route('lab-test.Luteinizing-hormone')}}'},
            {name:'Lipase', link:'{{route('lab-test.Lipase')}}'},
            {name:'Lipoprotein A', link:'{{route('lab-test.Lipoprotein-A')}}'},
            {name:'LBC Liquid Based Cytology', link:'{{route('lab-test.Liquid-Based-Cytology')}}'},
            {name:'Lithium', link:'{{route('lab-test.Lithium')}}'},
            {name:'Lupus Anti Coagulant', link:'{{route('lab-test.Lupus-anti-coagulant')}}'},
            {name:'Magnesium', link:'{{route('lab-test.Magnesium')}}'},
            {name:'MPA Malaria Antigen', link:'{{route('lab-test.Malaria-Antigen')}}'},
            {name:'Malignant Cells', link:'{{route('lab-test.Malignant-cells')}}'},
            {name:'Mantoux Test', link:'{{route('lab-test.Mantoux-test')}}'},
            {name:'Metanephrine Free', link:'{{route('lab-test.Metanephrine-Free')}}'},
            {name:'Micro Filaria Antibody', link:'{{route('lab-test.Micro-Filaria-Antibody')}}'},
            {name:'Micro filaria Antigen', link:'{{route('lab-test.Micro-filaria-Antigen')}}'},
            {name:'Micro Albumin Creatinine Ratio Urine', link:'{{route('lab-test.Micro-Albumin-Creatinine-Ratio-Urine')}}'},
            {name:'MAU Microalbuminuria', link:'{{route('lab-test.Microalbuminuria')}}'},
            {name:'Malarial Parasite', link:'{{route('lab-test.MP')}}'},
            {name:'Mycobacterium tuberculosis PCR', link:'{{route('lab-test.Mycobacterium-tuberculosis-pcr')}}'},
            {name:'Osmolality Urine', link:'{{route('lab-test.Osmolality-Urine')}}'},
            {name:'Osmotic Fragility test', link:'{{route('lab-test.Osmotic-Fragility-test')}}'},
            {name:'OB Occult blood (stool)', link:'{{route('lab-test.Ooccult-blood-(stool)')}}'},
            {name:'Oxalate 24 Hous Urine', link:'{{route('lab-test.Oxalate-24-Hous-Urine')}}'},
            {name:'P ANCA', link:'{{route('lab-test.P-ANCA')}}'},
            {name:'PTH Parathyroid Hormone', link:'{{route('lab-test.Parathyroid-Hormone')}}'},
            {name:'PTTK/APTT Partial Thromboplastin Time', link:'{{route('lab-test.Partial-thromboplastin-time')}}'},
            {name:'Peripheral Blood Smear', link:'{{route('lab-test.Peripheral-Blood-Smear')}}'},
            {name:'Peritoneal fluid Examination For Malignant Cells', link:'{{route('lab-test.Peritoneal-fluid-Examination-for-Malignant-cells')}}'},
            {name:'Phenytoin / Eptoin', link:'{{route('lab-test.Phenytoin')}}'},
            {name:'Phosphorus', link:'{{route('lab-test.Phosphorus')}}'},
            {name:'K Potassium', link:'{{route('lab-test.Potassium')}}'},
            {name:'NTPROBNP Pro-Beta Natriuretic Peptide', link:'{{route('lab-test.Pro-Beta-Natriuretic-Peptide')}}'},
            {name:'Procalcitonin', link:'{{route('lab-test.Procalcitonin')}}'},
            {name:'Progesterone', link:'{{route('lab-test.Progesterone')}}'},
            {name:'Prolactin', link:'{{route('lab-test.Prolactin')}}'},
            {name:'Prolactin Pooled', link:'{{route('lab-test.Prolactin-Pooled')}}'},
            {name:'UPCR Protein Creatinine Ratio 24Hrs Urine', link:'{{route('lab-test.Protein-Creatinine-Ratio-24hrs-urine')}}'},
            {name:'Protein C', link:'{{route('lab-test.Protein-c')}}'},
            {name:'Protein Electrophoresis', link:'{{route('lab-test.Protein-Electrophoresis')}}'},
            {name:'Protein Electrophorsis Urine', link:'{{route('lab-test.Protein-Electrophorsis-Urine')}}'},
            {name:'Protein S', link:'{{route('lab-test.Protein-s')}}'},
            {name:'Proteins', link:'{{route('lab-test.Proteins')}}'},
            {name:'24Hours Proteins Urine', link:'{{route('lab-test.Proteine-24-Hours-Urine')}}'},
            {name:'PSA (Prostate Specific Antigen) total', link:'{{route('lab-test.Psa-total')}}'},
            {name:'PTINR PT INR', link:'{{route('lab-test.PT-with-inr')}}'},
            {name:'PUS CULTURE', link:'{{route('lab-test.Pus-Culture')}}'},
            {name:'Quadruble Marker', link:'{{route('lab-test.Quadruble-Marker')}}'},
            {name:'Reticulocyte Count', link:'{{route('lab-test.Reticulocyte-count')}}'},
            {name:'RAF RA Factor Quantitative', link:'{{route('lab-test.RA-Factor-Quantitative')}}'},
            {name:'RH Antiybody', link:'{{route('lab-test.RH-Antiybody')}}'},
            {name:'RUBG Rubella lgG', link:'{{route('lab-test.Rubella-lgG')}}'},
            {name:'Rubella lgG Avidity', link:'{{route('lab-test.Rubella-lgG-Avidity')}}'},
            {name:'RUBM Rubella lgM', link:'{{route('lab-test.Rubella-lgM')}}'},
            {name:'SAAG (Serum Ascites Albumin Gradient)', link:'{{route('lab-test.SAAG')}}'},
            {name:'Scrub Typhus', link:'{{route('lab-test.Scriub-Typhus')}}'},
            {name:'Semen Analysis', link:'{{route('lab-test.Semen-Analysis')}}'},
            {name:'Semen Culture Sennsitivity', link:'{{route('lab-test.Semen-Culture-Sennsitivity')}}'},
            {name:'Serum Acid Phosphatase', link:'{{route('lab-test.Serum-Acid-Phosphatase')}}'},
            {name:'Serum Bilirubin', link:'{{route('lab-test.Serum-Bilirubin')}}'},
            {name:'SHBG Sex Hormone Blnding Globulin', link:'{{route('lab-test.Sex-Hormone-Blnding-Globulin')}}'},
            {name:'Smear For Micro-Filaria', link:'{{route('lab-test.Smear-For-Micro-Filaria')}}'},
            {name:'NA Sodium', link:'{{route('lab-test.Sodium')}}'},
            {name:'Sputum Culture Sensitivity', link:'{{route('lab-test.Sputum-Culture-Sensitivity')}}'},
            {name:'Sputum Cytology', link:'{{route('lab-test.Sputum-Cytology')}}'},
            {name:'Stone Analysis', link:'{{route('lab-test.Stone-Analysis')}}'},
            {name:'Stool Culture', link:'{{route('lab-test.Stool-Culture')}}'},
            {name:'Stool Examination', link:'{{route('lab-test.Stool-Examination')}}'},
            {name:'Stool Hanging Drop', link:'{{route('lab-test.Stool-Hanging-Drop')}}'},
            {name:'Synovial Fluid Cytology For Malignant Cells', link:'{{route('lab-test.Synovial-Fluid-Cytology-For-Malignant-Cells')}}'},
            {name:'TB Platinum Gold', link:'{{route('lab-test.TB-Platinum-Gold')}}'},
            {name:'Testosterone Total', link:'{{route('lab-test.Testosterone')}}'},
            {name:'Testosterone Free', link:'{{route('lab-test.Testosterone-Free')}}'},
            {name:'TGA Anti Thyroglobulin Antibodies', link:'{{route('lab-test.TGA-Anti-Thyroglobulin-Antibodies')}}'},
            {name:'TTGIGA Tissue Transglutaminase lgA', link:'{{route('lab-test.Tissue-Transglutaminase-lgA')}}'},
            {name:'TTGIGG Tissue Transglutaminase lgG', link:'{{route('lab-test.Tissue-Transglutaminase-lgG')}}'},
            {name:'TTGIGM Tissue Transglutaminase lgM', link:'{{route('lab-test.Tissue-Transglutaminase-lgM')}}'},
            {name:'Torch Profile IGG 4', link:'{{route('lab-test.Torch-Profile-IGG-4')}}'},
            {name:'Torch Profile IGG 5', link:'{{route('lab-test.Torch-Profile-IGG-5')}}'},
            {name:'Torch Profile IGM 4', link:'{{route('lab-test.Torch-Profile-IGM-4')}}'},
            {name:'Torch Profile IGM 5', link:'{{route('lab-test.Torch-Profile-IGM-5')}}'},
            {name:'Zinc Urine Random', link:'{{route('lab-test.Zinc-Urine-Random')}}'},
            {name:'Zinc', link:'{{route('lab-test.Zinc')}}'},
            {name:'Widal', link:'{{route('lab-test.Widal')}}'},
            {name:'Western Blot Assay For HIV Antibodies', link:'{{route('lab-test.Western-Blot-Assay-For-HIV-Antibodies')}}'},
            {name:'VMA (Vanilmandelic Acid)', link:'{{route('lab-test.VMA')}}'},
            {name:'Vitamin D3', link:'{{route('lab-test.Vitmain-D3')}}'},
            {name:'Vitamin B12', link:'{{route('lab-test.Vitamin-B12')}}'},
            {name:'Valporic Acid Levels', link:'{{route('lab-test.Valporic-Acid-Levels')}}'},
            {name:'VDRL IN DILUTION', link:'{{route('lab-test.V-D-R-L-IN-Dilution')}}'},
            {name:'VDRL', link:'{{route('lab-test.V-D-R-L')}}'},
            {name:'Urobilinogen', link:'{{route('lab-test.Urobilinogen')}}'},
            {name:'UE Urine Routine Examination', link:'{{route('lab-test.Urine-Routine-Examination')}}'},
            {name:'UPT Urine Pregnancy Test', link:'{{route('lab-test.Urine-Pregnancy-Test')}}'},
            {name:'Urine Examination For Malignant Cells', link:'{{route('lab-test.Urine-Examination-For-Malignant-Cells')}}'},
            {name:'UCUL Urine Culture $ Sensitivity', link:'{{route('lab-test.Urine-Culture-Sensitivity')}}'},
            {name:'Urine Albumin', link:'{{route('lab-test.Urine-Albumin')}}'},
            {name:'Uric Acid', link:'{{route('lab-test.Uric-Acid')}}'},
            {name:'HSCRP Ultrasensitive CRP', link:'{{route('lab-test.Ultrasensitive-CRP')}}'},
            {name:'Typhidot Test', link:'{{route('lab-test.Typhidot-Test')}}'},
            {name:'TROPT Troponin T', link:'{{route('lab-test.Troponin-T')}}'},
            {name:'TROPI Troponin I', link:'{{route('lab-test.Troponin-I')}}'},
            {name:'Triple Marker Interpretation', link:'{{route('lab-test.Triple-Marker-Interpretation')}}'},
            {name:'TPHA Treponema Pallidum Antibodies', link:'{{route('lab-test.Treponema-Pallidum-Antibodies')}}'},
            {name:'Toxoplasma lgM', link:'{{route('lab-test.Toxoplasma-lgM')}}'},
            {name:'Toxoplasma lgG', link:'{{route('lab-test.Toxoplasma-lgG')}}'},
            {name:'TLC Total Leucocyte Count', link:'{{route('lab-test.Total-Leucocyte-Count')}}'},
            {name:'AEC Absolute Eosinophil Count', link:'{{route('lab-test.AEC-Absolute-Eosinophil-Count')}}'},
            {name:'PC Platelet Count', link:'{{route('lab-test.PC-Platelet-Count')}}'},
           
            // Add other suggestions her
            
            ];

        const searchInput = document.getElementById('searchInput');
        const suggestions_Container = document.getElementById('searchSuggestions');

        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase();
            suggestions_Container.innerHTML = '';
            if (query.length > 0) {
                const filteredSuggestions = searchSuggestions.filter(suggestion => 
                    suggestion.name.toLowerCase().includes(query)
                );
                filteredSuggestions.forEach(suggestion => {
                    const suggestionDiv = document.createElement('div');
                    suggestionDiv.className = 'autocomplete-suggestion';
                    suggestionDiv.textContent = suggestion.name;
                    suggestionDiv.addEventListener('click', function() {
                        window.location.href = suggestion.link;
                    });
                    suggestions_Container.appendChild(suggestionDiv);
                });
            }
        });
        
        searchInput.addEventListener('keydown', function(e) {
            const suggestions = Array.from(suggestions_Container.children);
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                let selected = suggestions.find(s => s.classList.contains('selected'));
                let index = selected ? suggestions.indexOf(selected) : -1;
                if (index < suggestions.length - 1) {
                    if (selected) selected.classList.remove('selected');
                    suggestions[index + 1].classList.add('selected');
                }
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                let selected = suggestions.find(s => s.classList.contains('selected'));
                let index = selected ? suggestions.indexOf(selected) : suggestions.length;
                if (index > 0) {
                    if (selected) selected.classList.remove('selected');
                    suggestions[index - 1].classList.add('selected');
                }
            } else if (e.key === 'Enter') {
                e.preventDefault();
                let selected = suggestions.find(s => s.classList.contains('selected'));
                if (selected){
                    searchInput.value = selected.textContent;
                    suggestionsContainer.innerHTML = '';
                }
            }
        });



        document.addEventListener('click', function(event) {
            if (!searchInput.contains(event.target)) {
              suggestions_Container.innerHTML = '';
            }
        });
        
        
        $(document).ready(function(){
          $("#populer-packages").collapse('show'); // toggle collapse
        });

    $(document).ready(function(){
        $("#populer-p").click(function(){
          $("#populer-packages").collapse('show'); // toggle collapse
          $("#fever-content").collapse('hide');
          $("#women-health").collapse('hide');
          $("#fitnes").collapse('hide');
          $("#diabetes").collapse('hide');
          $("#covid-19").collapse('hide');
          $("senior-citizen").collapse('hide');
          $("#full-body-checkup").collapse('hide');
          $("#pregnancy").collapse('hide');
        });
        $("#fever-btn").click(function(){
          $("#populer-packages").collapse('hide'); // toggle collapse
          $("#women-health").collapse('hide');
          $("#diabetes").collapse('hide');
          $("#fitnes").collapse('hide');
          $("#covid-19").collapse('hide');
          $("senior-citizen").collapse('hide');
          $("#full-body-checkup").collapse('hide');
          $("#pregnancy").collapse('hide');
          $("#fever-content").collapse('show');
        });
        $("#women-btn").click(function(){
          $("#populer-packages").collapse('hide'); // toggle collapse
          $("#fever-content").collapse('hide');
          $("#diabetes").collapse('hide');
          $("#fitnes").collapse('hide');
          $("#covid-19").collapse('hide');
          $("senior-citizen").collapse('hide');
          $("#full-body-checkup").collapse('hide');
          $("#pregnancy").collapse('hide');
          $("#women-health").collapse('show');
        });

        $("#full-body-btn").click(function(){
          $("#populer-packages").collapse('hide'); // toggle collapse
          $("#fever-content").collapse('hide');
          $("#women-health").collapse('hide');
          $("#diabetes").collapse('hide');
          $("#fitnes").collapse('hide');
          $("#covid-19").collapse('hide');
          $("#senior-citizen").collapse('hide');
          $("#pregnancy").collapse('hide');
          $("#full-body-checkup").collapse('show');
        });
        $("#pregnancy-btn").click(function(){
          $("#populer-packages").collapse('hide'); // toggle collapse
          $("#fever-content").collapse('hide');
          $("#women-health").collapse('hide');
          $("#diabetes").collapse('hide');
          $("#fitnes").collapse('hide');
          $("#covid-19").collapse('hide');
          $("#senior-citizen").collapse('hide');
          $("#full-body-checkup").collapse('hide');
          $("#pregnancy").collapse('show');
          
        });
    });


    function updateDates(){
        const days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        const currentDate = new Date();
        
        const currentDayIndex = currentDate.getDay();
        
        for (let i = 0; i < 6; i++) {
            const dayIndex = (currentDayIndex + i) % 7; 
            const dayDate = new Date(currentDate);
            dayDate.setDate(dayDate.getDate() + i); 
            const dateElement = document.querySelector(`#${days[i].toLowerCase()}`);
            dateElement.querySelector('.date-day').textContent = dayDate.getDate(); 
            dateElement.querySelector('p').innerHTML = `${days[i]},<span class="date-day">${dayDate.getDate()}</span>`;
        }
    }
    
    const calendarInput = document.getElementById('calendar-input');
    const daySelect = document.getElementById('day-select');
    
    function updateDateDisplay() {
        const selectedDay = daySelect.value;
        const selectedDate = new Date(calendarInput.value);
        
        if (!isNaN(selectedDate.getTime())) {
            const formattedDate = selectedDate.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric' });
    
            const allDays = document.querySelectorAll('.shipday .date-day');
            allDays.forEach(day => {
                day.textContent = '';
            });
            
            const selectedDayElement = document.querySelector(`#${selectedDay} .date-day`);
            if (selectedDayElement) {
                selectedDayElement.textContent = formattedDate;
            }
        }
    }
    calendarInput.addEventListener('change', updateDateDisplay);
    daySelect.addEventListener('change', updateDateDisplay);
    
    updateDateDisplay();



    

 

    // Add selected item to session (using AJAX)
    function addToSession(time, price) {
        fetch('/add-to-cart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ time: time, price: price })
        });
    }

    // Remove item from session (using AJAX)
    function removeFromSession(time, price) {
        fetch('/remove-from-cart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ time: time, price: price })
        });
    }

</script>
</body>
</html>