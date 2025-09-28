<form action="" method="post">

    <div class="page-title-head d-flex align-items-center">
        <div class="flex-grow-1">
            <h4 class="fs-xl fw-bold m-0">Add Guest</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">Hotel Management</a></li>
                <li class="breadcrumb-item active">Add Guest</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xxl-8">
                    <!-- Guest Information Card -->
                    <div class="card">
                        <div class="card-header d-block p-3">
                            <h4 class="card-title mb-1">Guest Information</h4>
                            <p class="text-muted mb-0">Fill in the guest's details below.</p>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <!-- Guest Name -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="guestName" class="form-label">Guest Name <span class="text-danger">*</span></label>
                                        <input type="text" name="guestName" class="form-control" id="guestName" placeholder="Enter guest full name" required>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="guestEmail" class="form-label">Email</label>
                                        <input type="email" name="guestEmail" class="form-control" id="guestEmail" placeholder="Enter guest email">
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="guestPhone" class="form-label">Phone</label>
                                        <input type="text" name="guestPhone" class="form-control" id="guestPhone" placeholder="Enter guest phone number">
                                    </div>
                                </div>

                                <!-- ID / Passport -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="guestID" class="form-label">ID / Passport Number</label>
                                        <input type="text" name="guestID" class="form-control" id="guestID" placeholder="Enter guest ID or passport number">
                                    </div>
                                </div>

                                <!-- Number of Guests -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="numGuests" class="form-label">Number of Guests</label>
                                        <input type="number" name="numGuests" class="form-control" id="numGuests" placeholder="Enter number of guests" min="1">
                                    </div>
                                </div>

                                <!-- Room Type -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="roomType" class="form-label">Room Type <span class="text-danger">*</span></label>
                                        <select class="form-select" name="roomType" id="roomType">
                                            <option selected>Choose Room Type</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Deluxe">Deluxe</option>
                                            <option value="Suite">Suite</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Check-in and Check-out Dates -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="checkIn" class="form-label">Check-in Date <span class="text-danger">*</span></label>
                                        <input type="date" name="checkIn" class="form-control" id="checkIn">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="checkOut" class="form-label">Check-out Date <span class="text-danger">*</span></label>
                                        <input type="date" name="checkOut" class="form-control" id="checkOut">
                                    </div>
                                </div>

                                <!-- Special Requests -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="specialRequests" class="form-label">Special Requests <span class="text-muted">(Optional)</span></label>
                                        <textarea class="form-control" id="specialRequests" name="specialRequests" rows="5" placeholder="Enter any special requirements or notes for the guest"></textarea>
                                    </div>
                                </div>


                                <!-- Optional Guest Photo -->
                                <!-- Guest Photo / ID Scan -->
                                <div class="col-12 mt-3">
                                    <div class="card">
                                        <div class="card-header d-block p-3">
                                            <h4 class="card-title mb-1">Guest Photo / ID Scan</h4>
                                            <p class="text-muted mb-0">Upload a photo or ID scan (optional).</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <input class="form-control" type="file" id="guestPhoto" name="guestPhoto" accept="image/*">
                                            </div>
                                            <small class="text-muted">Only image files are allowed. Max size 5MB.</small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking & Status Sidebar -->
                <div class="col-xxl-4">
                    <div class="card">
                        <div class="card-header d-block p-3">
                            <h4 class="card-title mb-1">Booking Details</h4>
                            <p class="text-muted mb-0">Enter room rate and booking status.</p>
                        </div>
                        <div class="card-body">
                            <!-- Room Rate -->
                            <div class="mb-3">
                                <label for="roomRate" class="form-label">Room Rate <span class="text-danger">*</span></label>
                                <div class="app-search">
                                    <input type="number" name="roomRate" class="form-control" id="roomRate" placeholder="Enter room rate">
                                    <i data-lucide="dollar-sign" class="app-search-icon text-muted"></i>
                                </div>
                            </div>

                            <!-- Discount / Promo -->
                            <div class="mb-3">
                                <label for="promoType" class="form-label">Promo Type <span class="text-muted">(Optional)</span></label>
                                <div class="input-group">
                                    <select class="form-select" id="promoType" name="promoType">
                                        <option selected>Choose Promo</option>
                                        <option value="No Promo">No Promo</option>
                                        <option value="Flat Discount">Flat Discount</option>
                                        <option value="Percentage Discount">Percentage Discount</option>
                                    </select>
                                    <span class="input-group-text bg-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="percent"
                                            class="lucide lucide-percent"></svg>
                                    </span>
                                </div>
                            </div>



                            <div class="mb-3">
                                <label for="promoValue" class="form-label">Promo Value <span class="text-muted">(Optional)</span></label>
                                <div class="app-search">
                                    <input type="number" name="promoValue" class="form-control" id="promoValue" placeholder="Enter discount amount or percentage">
                                    <i data-lucide="tag" class="app-search-icon text-muted"></i>
                                </div>
                            </div>

                            <!-- Booking Status -->
                            <div class="mb-0">
                                <label for="bookingStatus" class="form-label">Booking Status <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <select class="form-select" id="bookingStatus" name="bookingStatus">
                                        <option selected>Choose Status</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Confirmed">Confirmed</option>
                                        <option value="Checked-in">Checked-in</option>
                                        <option value="Checked-out">Checked-out</option>
                                        <option value="Cancelled">Cancelled</option>
                                    </select>
                                    <span class="input-group-text bg-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="toggle-left"
                                            class="lucide lucide-toggle-left"></svg>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <!-- Optional Notes / Tags Sidebar -->
                        <div class="card mt-3">
                            <div class="card-header d-block p-3">
                                <h4 class="card-title mb-1">Guest Preferences</h4>
                                <p class="text-muted mb-0">Enter tags or preferences (Optional).</p>
                            </div>
                            <div class="card-body">
                                <div class="mb-0">
                                    <label for="guestTags" class="form-label">Tags / Preferences</label>
                                    <div class="app-search">
                                        <input type="text" name="guestTags" class="form-control" id="guestTags" placeholder="VIP, Non-Smoker, etc.">
                                        <i data-lucide="tag" class="app-search-icon text-muted"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-2 mb-4 d-flex gap-2 justify-content-center">
                    <button type="submit" name="action" value="cancel" class="btn btn-link text-danger fw-semibold">
                        <i data-lucide="clipboard-x" class="fs-sm me-2"></i> Cancel
                    </button>

                    <button type="submit" name="action" value="draft" class="btn btn-soft-secondary">
                        <i data-lucide="save" class="fs-sm me-2"></i> Save Draft
                    </button>

                    <button type="submit" name="action" value="confirm" class="btn btn-success">
                        <i data-lucide="plus" class="fs-sm me-2"></i> Confirm Booking
                    </button>
                </div>
            </div>
        </div>
</form>