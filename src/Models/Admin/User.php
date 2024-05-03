<?php 
namespace App\Models\Admin;
use System\Core\Model;
class User extends Model {
   private $table = 'admin_user';

   public function getUsers($options = []) {
      extract($options);
      $user = $this->db->table($this->table)->orderBy($sort, $order);
      if($status === 1 || $status === 0 || $status === '1' || $status === '0') {
         $user->where('status', '=', $status);
      }
      if($query) {
         $user->where(function ($builder) use ($query) {
            $builder->where('fullname', 'like', "%$query%");
            $builder->orWhere('email', 'like', "%$query%");
         });
      }
      if($limit && isset($offset)) {
         $user->limit($limit, $offset);
      }
      return $user->get();
   }

   public function countRows($options = []) {
      extract($options);
      $user = $this->db->table($this->table)->orderBy($sort, $order);
      if($status === 1 || $status === 0 || $status === '1' || $status === '0') {
         $user->where('status', '=', $status);
      }
      if($query) {
         $user->where(function ($builder) use ($query) {
            $builder->where('fullname', 'like', "%$query%");
            $builder->orWhere('email', 'like', "%$query%");
         });
      }
      return $user->count();
   }
   public function getUser($value, $field = 'id') {
      return $this->db->table($this->table)->where($field, '=', $value)->first();
   }
   public function checkExist($field = 'id', $value, $id = 0) {
      $count = $this->db->table($this->table)->where($field, '=', $value);
      if($id > 0) {
         $count = $count->where('id', '!=', $id);
      }
      $count = $count->count();
      return $count > 0;
   }

   public function updateUser($data, $value, $field = "id") {
      return $this->db->table($this->table)->where($field, "=", $value)->update($data);
   }

   public function deleteUser($id) {
      return $this->db->table($this->table)->where("id", "=", $id)->delete();
   }
   public function deleteUsers($ids) {
      return $this->db->table($this->table)->whereIn('id', $ids)->delete();
   }
}
?>