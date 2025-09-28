<form action="" method="post" enctype="multipart/form-data">

    <!-- Page Title -->
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
        <!-- Guest Information -->
        <div class="col-xxl-8">
            <div class="card">
                <div class="card-header d-block p-3">
                    <h4 class="card-title mb-1">Guest Information</h4>
                    <p class="text-muted mb-0">Fill in the guest's details below.</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Guest Name -->
                        <div class="col-12 mb-3">
                            <label for="guestName" class="form-label">Guest Name <span class="text-danger">*</span></label>
                            <input type="text" name="guestName" class="form-control" id="guestName" placeholder="Enter guest full name" required>
                        </div>

                        <!-- Email -->
                        <div class="col-lg-6 mb-3">
                            <label for="guestEmail" class="form-label">Email</label>
                            <input type="email" name="guestEmail" class="form-control" id="guestEmail" placeholder="Enter guest email">
                        </div>

                        <!-- Phone -->
                        <div class="col-lg-6 mb-3">
                            <label for="guestPhone" class="form-label">Phone</label>
                            <input type="text" name="guestPhone" class="form-control" id="guestPhone" placeholder="Enter guest phone number">
                        </div>

                        <!-- ID / Passport -->
                        <div class="col-12 mb-3">
                            <label for="guestID" class="form-label">ID / Passport Number</label>
                            <input type="text" name="guestID" class="form-control" id="guestID" placeholder="Enter guest ID or passport number">
                        </div>

                        <!-- Special Requests -->
                        <div class="col-12 mb-3">
                            <label for="specialRequests" class="form-label">Special Requests <span class="text-muted">(Optional)</span></label>
                            <textarea name="specialRequests" id="specialRequests" class="form-control" rows="4" placeholder="Enter any special requirements or notes"></textarea>
                        </div>

                        <!-- Guest Photo -->
                        <div class="col-12 mb-3">
                            <label for="guestPhoto" class="form-label">Guest Photo / ID Scan</label>
                            <input type="file" name="guestPhoto" id="guestPhoto" class="form-control" accept="image/*">
                            <small class="text-muted">Only images allowed, max size 5MB.</small>
                        </div>

                        <!-- Tags / Preferences -->
                        <div class="col-12 mb-3">
                            <label for="guestTags" class="form-label">Tags / Preferences</label>
                            <input type="text" name="guestTags" id="guestTags" class="form-control" placeholder="VIP, Non-Smoker, etc.">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Details Sidebar -->
        <div class="col-xxl-4">
            <div class="card">
                <div class="card-header d-block p-3">
                    <h4 class="card-title mb-1">Booking Details</h4>
                    <p class="text-muted mb-0">Enter room and booking details.</p>
                </div>
                <div class="card-body">
                    <!-- Room Type -->
                    <div class="mb-3">
                        <label for="roomType" class="form-label">Room Type <span class="text-danger">*</span></label>
                        <select class="form-select" name="roomType" id="roomType">
                            <option selected>Choose Room Type</option>
                            <option value="Standard">Standard</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="Suite">Suite</option>
                        </select>
                    </div>

                    <!-- Check-in / Check-out -->
                    <div class="mb-3">
                        <label for="checkIn" class="form-label">Check-in Date <span class="text-danger">*</span></label>
                        <input type="date" name="checkIn" id="checkIn" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="checkOut" class="form-label">Check-out Date <span class="text-danger">*</span></label>
                        <input type="date" name="checkOut" id="checkOut" class="form-control">
                    </div>

                    <!-- Room Rate -->
                    <div class="mb-3">
                        <label for="roomRate" class="form-label">Room Rate <span class="text-danger">*</span></label>
                        <input type="number" name="roomRate" id="roomRate" class="form-control" placeholder="Enter room rate">
                    </div>

                    <!-- Promo Type -->
                    <div class="mb-3">
                        <label for="promoType" class="form-label">Promo Type <span class="text-muted">(Optional)</span></label>
                        <select class="form-select" id="promoType" name="promoType">
                            <option value="">Choose Promo</option>
                            <option value="No Promo">No Promo</option>
                            <option value="Flat Discount">Flat Discount</option>
                            <option value="Percentage Discount">Percentage Discount</option>
                        </select>
                    </div>

                    <!-- Promo Value -->
                    <div class="mb-3">
                        <label for="promoValue" class="form-label">Promo Value <span class="text-muted">(Optional)</span></label>
                        <input type="number" step="0.01" name="promoValue" id="promoValue" class="form-control" placeholder="Enter discount amount or percentage">
                    </div>

                    <!-- Booking Status -->
                    <div class="mb-3">
                        <label for="bookingStatus" class="form-label">Booking Status <span class="text-danger">*</span></label>
                        <select class="form-select" id="bookingStatus" name="bookingStatus">
                            <option selected>Choose Status</option>
                            <option value="Pending">Pending</option>
                            <option value="Confirmed">Confirmed</option>
                            <option value="Checked-in">Checked-in</option>
                            <option value="Checked-out">Checked-out</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-2 mt-3">
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
        </div>

    </div>
</form>
