<?php


class GuestController
{
    public function __construct()
    {
    }
    public function index()
    {
        view("Guest");
    }
public function addGuest()
{
    global $db;

    if (isset($_POST['action'])) {

        // 1. Handle guest photo upload
        $photoPath = null; // default
        if (!empty($_FILES['guestPhoto']['name'])) {
            $uploadDir = __DIR__ . '/../../uploads/guests/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // create folder if not exists
            }

            $fileTmpPath = $_FILES['guestPhoto']['tmp_name'];
            $fileName = time() . '_' . basename($_FILES['guestPhoto']['name']);
            $destPath = $uploadDir . $fileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $photoPath = 'uploads/guests/' . $fileName; // path to store in DB
            }
        }

        // 2. Insert guest info
        $stmt = $db->prepare("INSERT INTO guests (name, email, phone, id_number, photo, special_requests, tags) 
                              VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $_POST['guestName'],
            $_POST['guestEmail'] ?? null,
            $_POST['guestPhone'] ?? null,
            $_POST['guestID'] ?? null,
            $photoPath,
            $_POST['specialRequests'] ?? null,
            $_POST['guestTags'] ?? null
        ]);

        $guest_id = $db->lastInsertId();

        // 3. Insert booking info
        $stmt = $db->prepare("INSERT INTO bookings (guest_id, room_type, check_in, check_out, room_rate, promo_type, promo_value, status) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->execute([
            $guest_id,
            $_POST['roomType'],                  // You might need to convert roomType name to room_id if using ID
            $_POST['checkIn'],
            $_POST['checkOut'],
            $_POST['roomRate'],
            $_POST['promoType'] ?? null,        // store promo_type_id
            $_POST['promoValue'] ?: null,       // avoid empty string
            $_POST['bookingStatus']             // store status_id if needed
        ]);

        // 4. Redirect back or show success
        redirect(); 
        // view("Guest");

    } else {
        // Show form if no POST
        view("Guest"); 
    }
}






    public function customerDetails()
    {
        view("Guest");
    }

    public function categories()
    {
        view("Guest");
    }
}
