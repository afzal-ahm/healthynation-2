<!DOCTYPE html>
<html lang="en">
    <head>
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
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    </head>
<style>
    .shipday {
           border:1px solid grey;
           width:25%;
           height:5%;
       }
       
       .form-select{
           width:30%;
           height:5%;
       }
        .form-select{
           width:30%;
           height:5%;
       }
       
    .shipday p{
       margin-bottom:1px;
       font-size:12px;
    } 
    
   .cart-book-product{
        height:500px;
    }
    
/* Styling the container and checkboxes */

.checkbox-container {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* Style for the custom checkbox */


.checkbox-label {
    display: flex;
    align-items: center; /* Vertically center-align items */
    justify-content: space-between; /* Space between elements */
    font-size: 15px;
    width: 100%; /* Make sure the label uses full width */
    margin-top:0px;
    margin-bottom:0px;
    padding-top:4px;
    padding-bottom:4px;
}


.checkbox {
    display: none; /* Hide the default checkbox */
}

.checkbox-custom {
    width: 18px;
    height: 18px;
    border-radius: 50%; /* This creates the circle */
    border: 2px solid #007BFF;
    position: relative;
    transition: background-color 0.3s;
}

.checkbox:checked + .checkbox-custom {
    background-color: #007BFF; /* Change the background when checked */
}

.checkbox-custom::after {
    content: '';
    position: absolute;
    top: 4px;
    left: 4px;
    width: 10px;
    height: 10px;
    background-color: white;
    border-radius: 50%; /* The inner circle */
    transition: transform 0.3s;
}

.checkbox:checked + .checkbox-custom::after {
    transform: scale(1.2); /* Enlarges the inner circle when checked */
}

/* Styling for time and price */
.time {
    margin-left: 10px;
    font-weight: bold;
}

.price {
    color: green;
    font-weight: bold;
    text-align: right; /* Align text to the right side */
}

/* The popup overlay (hidden by default) */
.popup-overlay {
    display: none; 
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

/* The actual popup box */
.popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    width: 300px;
}

.popup h2 {
    text-align: center;
}

#selectedSlots {
    margin-top: 10px;
    font-size: 14px;
    color: #333;
}

button#closePopup {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button#closePopup:hover {
    background-color: #0056b3;
}

.cart-item {
    display: flex;
    align-items: center;
    margin: 10px 0; /* Space between items */
    background:#1a4625;
    color:#fff;
    padding:2px 2px;
}

.cart-item > div {
    flex: 1;
    display: flex;
    justify-content: space-between; /* Align name, price, and remove button */
}

.remove-item {
    margin-left: 10px;
    padding: 5px 10px;
    background-color: #ff6f61;
    border: none;
    color: white;
    cursor: pointer;
}

.remove-item:hover {
    background-color: #e55c4f;
}


</style>

<header class="top-nav mb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-contact d-flex">
                    <div class="logo">
                        <img src="{{ asset('img/logo.png') }}" height="200" width="200" alt="" srcset="">
                    </div>
                    <div class="help float-end mt-3">
                        <a href="{{ url('/') }}" class="btn btn-success">Go to Home</a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</header>

<div class="cart-book-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="book-myorder">
                     <table id="cart-items-table" style="width:100%; border-collapse: collapse;">
                        <tbody id="cart-items-container">
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-divider" style="background-color:#559c33; width:2px; height: auto;"></div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="">
                   <h3>Bill Summary</h3>
                   <div class="d-flex">
                       <div class="cart">
                           <p>Cart Mrp</p>
                       </div>
                       <div class="mrp-">
                         <span class="cart-items"></span>
                       </div>
                   </div>
                    <button id="continueBtn1" data-bs-toggle="modal" class="con-button w-100" data-bs-target="#exampleModal">continue</button>
                </div >
            </div>
        </div>
    </div>
</div>
  
     <!-- Popup Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select slot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                    <div class="select-day d-inline-flex justify-content-center align-items-center">
                        <label for='' class="label">Date</label><br>
                         <input type="date" id="calendar-input" class="form-control" 
                               min="{{ \Carbon\Carbon::today()->toDateString() }}"
                               value="{{ \Carbon\Carbon::today()->toDateString() }}">
                    </div>
                    <div class="slot-time mt-2">
                      <div class="checkbox-container">
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                            <label class="checkbox-label">
                                 <input type="radio" class="checkbox" name="slot_time" data-price="99" data-time="7:00 To 8:00 AM">
                                 <span class="checkbox-custom"></span>
                                 <span class="time">7:00 To 8:00 AM</span>
                                 <span class="price ">₹ 99</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                            <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="99" data-time="8:00 To 9:00 AM">
                                <span class="checkbox-custom"></span>
                                <span class="time">8:00 To 9:00 AM</span>
                                <span class="price ">₹ 99</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                            <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="99" data-time="9:00 To 10:00 AM">
                                <span class="checkbox-custom"></span>
                                <span class="time">9:00 To 10:00 AM</span>
                                <span class="price">₹ 99</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                            <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="99" data-time="10:00 To 11:00 AM">
                                <span class="checkbox-custom"></span>
                                <span class="time">10:00 To 11:00 AM</span>
                                <span class="price">₹ 99</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                            <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="99" data-time="11:00 To 12:00 noon">
                                <span class="checkbox-custom"></span>
                                <span class="time">11:00 To 12:00 noon</span> 
                                <span class="price">₹ 99</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                            <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="99" data-time="12:00 noon To 1:00 PM">
                                <span class="checkbox-custom"></span>
                                <span class="time">12:00 noon To 1:00 PM</span>
                                <span class="price">₹ 99</span>
                            </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                            <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="79" data-time="1:00 To 2:00 PM">
                                <span class="checkbox-custom"></span>
                                <span class="time">1:00 To 2:00 PM</span> 
                                <span class="price">₹ 79</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                             <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="79" data-time="2:00 To 3:00 PM">
                                <span class="checkbox-custom"></span>
                                <span class="time">2:00 To 3:00 PM</span> 
                                <span class="price">₹ 79</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                            <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="79" data-time="3:00 To 4:00 PM">
                                <span class="checkbox-custom"></span>
                                <span class="time">3:00 To 4:00 PM</span> 
                                <span class="price">₹ 79</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                             <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="79" data-time="4:00 To 5:00 PM">
                                <span class="checkbox-custom"></span>
                                <span class="time">4:00 To 5:00 PM</span> 
                                <span class="price">₹ 79</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                            <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="79" data-time="5:00 To 6:00 PM">
                                <span class="checkbox-custom"></span>
                                <span class="time">5:00 To 6:00 PM</span> 
                                <span class="price">₹ 79</span>
                            </label>
                            <div class="divder-line" style="height:1px;width:100%;background:#1a4625;"></div>
                            <label class="checkbox-label">
                                <input type="radio" class="checkbox" name="slot_time" data-price="79" data-time="6:00 To 7:00 PM">
                                <span class="checkbox-custom"></span>
                                <span class="time">6:00 To 7:00 PM</span> 
                                <span class="price">₹ 79</span>
                            </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    <button type="button" id="continueBtn2" class="con-button w-100">Confirm Slot</button>
                  </form>
                 </div>
            </div>
        </div>
    </div>
<!---------Confirmation Modal--------->

<!-- Modal 2: Enter Patient Details (New Modal) -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirm Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('phone') }}" method="POST" id="slotForm">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                             <table id="cart-items-table-confirm" style="width:100%; border-collapse: collapse;">
                               <tbody id="cart-items-confirm">
                            </tbody>
                        </table>
                        <div class="confirm-test mt-2 mb-1"></div>
                        <input type="checkbox" id="print_report" name="print_report" value="print_report">
                         <label for="print_report"><p class="bg-danger p-1 fw-bold text-light">Need print report 99 Rs.</p></label>
                        <div class="total-amount mt-3">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tbody>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold;">Total Amount</td>
                                    <td id="totalAmountCell" style="padding: 8px; text-align: right; font-weight: bold;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                    <div class="mb-2">
                        <label for="name" class="form-label">Patient Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-2">
                        <label for="number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="mb-2">
                         <input type="radio" id="cpayment" name="payment_method" value="COD">
                         <label for="cpayment">COD Payment(Cash on collection)</label>
                    </div>
                    <div class="mb-2">
                        <input type="radio" id="opayment" name="payment_method" value="Online">
                       <label for="opayment">Online Payment</label><br>
                    </div>
                    </div>
                    <input type="hidden" name="selectedPrices" id="selectedPrices">
                    <input type="hidden" name="selected_items" id="selectedItems">
                    <input type="hidden" name="slot_date" id="slotDate">
                    <input type="hidden" name="slot_time" id="slotTime">
                    <input type="hidden" name="slot_price" id="slotPrice">
                    </div>
                    <button type="submit" class="btn btn-success w-100 mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


@include('footer')




