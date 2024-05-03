<?php
namespace App\Models\Admin;
use System\Core\Model;
class LoginToken extends Model {
   private $table = 'login_token_admin';
   public function create($data) {
      return $this->db->table($this->table)->insert($data);
   }
   public function find($value, $field="admin_id") {
      return $this->db->table($this->table)->select('admin_id, token')->where($field, '=', $value)->first();
   }
   public function modify($data, $value, $field="admin_id") {
      return $this->db->table($this->table)->where($field, '=', $value)->update($data);
   }
}