<?php
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $fillable = ['name', 'email', 'password', 'email_verified_at', 'remember_token', 'created_at', 'updated_at'];

    // Pass the hasher instance to the model
    public static $hasher;

    public static function setHasher($hasher) {
        self::$hasher = $hasher;
    }

    // Set the password attribute and hash it
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = self::$hasher->make($password);
    }
}
?>