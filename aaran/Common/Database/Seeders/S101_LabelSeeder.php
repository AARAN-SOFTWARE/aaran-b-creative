<?php

namespace Aaran\Common\Database\Seeders;

use Aaran\Common\Models\Label;
use Illuminate\Database\Seeder;

class S101_LabelSeeder extends Seeder
{
    public static function run(): void
    {
        #1
        Label::create([
            'id' => 1,
            'vname' => '-',
            'cols' => 1,
            'active_id' => '1'
        ]);

        #2
        Label::create([
            'id' => 2,
            'vname' => 'blog-post Category',
            'cols' => 1,
            'active_id' => '1'
        ]);

    }
}
