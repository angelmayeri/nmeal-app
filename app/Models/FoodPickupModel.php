<?php

namespace App\Models;

use CodeIgniter\Model;

class FoodPickupModel extends Model
{
  protected $table = 'food_pickups';
  protected $allowedFields = [
    'student_id',
    'food_id',
    'user_id',
    'status',
    'catatan',
    // tambahan foto
    'foto'
  ];
  protected $useTimestamps = true;
  protected $dateFormat = 'datetime';
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';

  protected $validationRules = [
    'student_id' => 'required|is_natural_no_zero',
    'food_id' => 'required|is_natural_no_zero',
    'user_id' => 'required|is_natural_no_zero',
    'status' => 'required|in_list[0,1]',
    'catatan' => 'permit_empty|max_length[255]',
    // Tambahan untuk foto
    'foto' => 'permit_empty|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,2048]',
  ];

  protected $validationMessages = [];
}
