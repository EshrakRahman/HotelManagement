<?php
class Guest extends Model
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $id_number;
    public $special_requests;
    public $tags;

    public function __construct($id = null, $name = null, $email = null, $phone = null, $id_number = null, $special_requests = null, $tags = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->id_number = $id_number;
        $this->special_requests = $special_requests;
        $this->tags = $tags;
    }

    // Save new guest
    public function save()
    {
        global $db;
        $stmt = $db->prepare("INSERT INTO guests (name, email, phone, id_number, special_requests, tags) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            $this->name,
            $this->email,
            $this->phone,
            $this->id_number,
            $this->special_requests,
            $this->tags
        ]);
        return $db->lastInsertId();
    }

    // Update existing guest
    public function update()
    {
        global $db;
        $stmt = $db->prepare("UPDATE guests SET name=?, email=?, phone=?, id_number=?, special_requests=?, tags=? WHERE id=?");
        $stmt->execute([
            $this->name,
            $this->email,
            $this->phone,
            $this->id_number,
            $this->special_requests,
            $this->tags,
            $this->id
        ]);
    }

    // Delete guest by id
    public static function delete($id)
    {
        global $db;
        $stmt = $db->prepare("DELETE FROM guests WHERE id=?");
        $stmt->execute([$id]);
    }

    // Find guest by id
    public static function find($id)
    {
        global $db;
        $stmt = $db->prepare("SELECT * FROM guests WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    // Get all guests
    public static function getAll()
    {
        global $db;
        $stmt = $db->query("SELECT * FROM guests ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
