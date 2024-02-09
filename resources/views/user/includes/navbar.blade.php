<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
              
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="about" class="nav-item nav-link">About Us</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                    <div class="dropdown-menu m-0">
                        <a href="photo " class="dropdown-item">Photo Gallery</a>
                        <a href="video" class="dropdown-item">Video Gallery</a>
                    </div>
                </div>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="wedding" class="dropdown-item">Wedding</a>
                            <a href="birthdayparty" class="dropdown-item">Birthday party</a>
                            <a href="anniversry" class="dropdown-item">Marriage Anniversry</a>
                            <a href="kittiparty" class="dropdown-item">Kitti Party</a>
                            <a href="Specialocaasion" class="dropdown-item">Special Occasion</a>
                            <a href="kidsparty" class="dropdown-item">Kid's Party</a>
                            <a href="officeparty" class="dropdown-item">Office Party</a>
                            <a href="innugration" class="dropdown-item">Any Innugration</a>
                            <a href="festival" class="dropdown-item">Festivals</a>
                        </div>
                    </div>
                    {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                </div>
                <a href="#" onclick="openCommentModal()"  class="btn btn-primary">Book Now</a>
                
            </div>
        </nav>

      
   


<div class="modal fade" id="comment-modal" data-backdrop="static" data-keyboard="false" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content" >
    
    <form id="Book-form" action="{{ route('submit.form') }}" method="POST" class="needs-validation" novalidate>

      
            @csrf
            <div class="callout" data-closable>
                <span class="close-button" aria-label="Close alert" onclick="closeCallout()">
                    <span aria-hidden="true">&times;</span>
                </span>
          
            
            <div class="donation-form-container">
                <form id="donation-form" class="needs-validation" novalidate>
            
                    <div class="form-group text-center">
                        <label for="full-name" class="label-style">Your Good Name</label>
                        <input type="text" id="full-name" class="form-control custom-input" required>
                        <div class="invalid-feedback">
                            Please enter your name.
                        </div>
                    </div>
            <br>
                    <div class="form-group text-center">
                        <label for="mobile-number" class="label-style">Your Contact Number</label>
                        <input type="tel" id="mobile-number" class="form-control custom-input" required>
                        <div class="invalid-feedback">
                            Please enter a valid contact number.
                        </div>
                    </div>
            <br>
                    <div class="form-group text-center">
                        <label for="home-address" class="label-style">Event City</label>
                        <input type="text" id="mobile-number" class="form-control custom-input" required>
                   
                        <div class="invalid-feedback">
                            Please enter the event city.
                        </div>
                    </div>
            <br>
            <div class="form-group text-center">
                <label for="event-type" class="label-style">Event Type</label>
                <div class="custom-dropdown-container">
                    <select id="event-type" class="form-control custom-input" required>
                        <option value="" disabled selected>Select an event type</option>
                        <option value="birthday">Birthday</option>
                        <option value="wedding">Wedding</option>
                        <option value="anniversary">Anniversary</option>
                        <option value="kitty-party">Kitty Party</option>
                        <option value="kids-party">Kids Party</option>
                    </select>
                </div>
                <div class="invalid-feedback">
                    Please select an event type.
                </div>
            </div>
            
            
            <br>
            
            <button type="submit" class="btn btn primary" style="text-align: center !important;">
                Submit
            </button>
            
                </form>
            </div>
            

            
            </div>
            
        
   
    <div class="modal-body" id="comment-modal-body">
        
    </div>
</div>
</div>
</div>



<script>
function openCommentModal() {
var id = 1; 
$('#comment-modal-body').html(null);
$.post("{{ route('get-comment') }}", {
    _token: '{{ csrf_token() }}',
    id: id
}, function(data) {
    $('#comment-modal').modal('show');
    $('#comment-modal-body').html(data);
});
}
</script>

<script>
function closeModal() {
$('#ajaxModelexa').modal('hide');
}
</script>

<style>

* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

.callout {
position: relative;
padding: 1rem;
margin-bottom: 1rem;
/* border: 1px solid #bd1717; */
border-radius: 5px;
}

/* Remove blur effect styles */
.modal-backdrop {
display: none !important;
}

.close-button {
float:right;
top: -500;
right: 0;
padding: 0.5;
cursor: pointer;
font-size: 24px;
}
</style>

<script>
function closeModalAndCallout() {
// Close the modal
var modal = document.getElementById('comment-modal');
modal.style.display = 'none';

// Close the callout
var callout = document.querySelector('.callout');
callout.style.display = 'none';
}
</script>

<script>
function closeCallout() {
// Close the modal
$('#comment-modal').modal('hide');

// Optionally, you can remove the modal backdrop
// $('.modal-backdrop').remove();
}
</script>

<script>
$(document).ready(function () {
$('#comment-modal').modal({
    backdrop: 'static',
    keyboard: false
});

// Function to close the modal
function closeModal() {
    $('#comment-modal').modal('hide');
}

// Attach the closeModal function to the close button
$('.close-button').on('click', closeModal);
});
</script>


<style>
    .header {
        background-color: #343a40; /* Set header background color */
        color: #17a2b8; /* Set text color */
        padding: 20px; /* Add padding for space */
        text-align: center; /* Center text */
    }

    .header h1 {
        margin: 0; /* Remove default margin */
    }


    

        .btn-primary:hover {
            background-color: #0056b3;
            color: #fff;
        }

    
      

        .close-symbol {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 30px;
        cursor: pointer;
        color: black;
    }
    .label-style{
        margin: 0 0 4px;
    padding: 0;
    font-size: 24px;
    line-height: 40px;
    color: #CB0000;
    text-align: center;
    font-family: 'dancing';
    font-weight: normal;

    }
    
 /* Additional styling for the custom dropdown */
.custom-dropdown {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-color: #a83535; /* Add a custom arrow icon */
    padding-right: 30px; /* Adjust the padding to accommodate the arrow icon */
}
.form-control:read-only {
    background-color: #3a0b6c !important;
    opacity: 1 !important;
    color: white;
    font-family: 'dancing';
}

.custom-dropdown::after {
    content: '';
    position: absolute;
    top: 50%;
    right: 10px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 8px 5px 0;
    border-color: #a83535 transparent transparent transparent; /* Use the same color as the label */
    transform: translateY(-50%);
}

/* Additional styling for the custom dropdown container */
.custom-dropdown-container {
    position: relative;
}

/* Styling for the dropdown arrow */
.custom-dropdown-container::after {
    content: '\25BC'; /* Unicode character for down arrow */
    font-size: 14px;
    color: #ffffff; /* Set the color to white */
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    pointer-events: none; /* Ensure the arrow doesn't interfere with the select box */
}

/* Styling for the dropdown options */
.form-control.custom-input option {
    background-color: #3a0b6c;
    color: #ffffff; /* Set the text color to white */
}

/* Styling for the selected option */
.form-control.custom-input option:checked {
    background-color: #3a0b6c;
    color: #ffffff;
}

    </style>
    <script>
    // Add an event listener to the select element
    document.getElementById('event-type').addEventListener('change', function () {
        // Change the color of the selected option text to white
        this.style.color = '#ffffff';
    });
    </script>
    <!-- Add this script in your HTML file -->

