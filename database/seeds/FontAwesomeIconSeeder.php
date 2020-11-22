<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\FontAwesomeIcon;

class FontAwesomeIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('font_awesome_icons')->delete();
        $json = File::get('database/data/font-awesome-db.json');
        $icons = json_decode($json);
        foreach ($icons as $icon) {
          FontAwesomeIcon::create([
            'name' => $icon->name,
            'unicode' => $icon->unicode
          ]);
        }
    }
}
