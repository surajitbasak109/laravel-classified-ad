<?php
  
  use Illuminate\Database\Seeder;
  use Illuminate\Support\Facades\DB;
  
  class CategorySeeder extends Seeder
  {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->delete();
      $categories = [
        [
          'name' => 'Buy & Sell',
          'icon' => 'shopping',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Career & Jobs',
          'icon' => 'briefcase',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Classes',
          'icon' => '',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Community',
          'icon' => 'church',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Home Appliances',
          'icon' => 'box-open',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Lost & Found',
          'icon' => 'campground',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Matrimonial',
          'icon' => 'user-friends',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Real Estate',
          'icon' => 'building',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Services',
          'icon' => 'taxi',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Vehicles',
          'icon' => 'motorcycle',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Miscellaneous',
          'icon' => 'info-circle',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Animals',
          'icon' => 'paw',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Electronics',
          'icon' => 'tv',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Education',
          'icon' => 'book',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Furniture',
          'icon' => 'couch',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
        [
          'name' => 'Pets',
          'icon' => 'heart',
          'description' => null,
          'created_at' => date("Y-m-d H:i:s")
        ],
      ];
      DB::table('categories')->insert($categories);
    }
  }
