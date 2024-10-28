<?php

namespace Aaran\Common\Database\Seeders;

use Aaran\Common\Models\Common;
use Illuminate\Database\Seeder;

class S102_CommonSeeder extends Seeder
{
    public static function run(): void
    {
        self::noRecord();
        self::blogcategory();
    }

    #region[noRecord]
    private static function noRecord(): void
    {
        Common::create([
            'label_id' => '1',
            'vname' => '-',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
    }
    #endregion

    #region[blog-post category]
    private static function blogCategory(): void
    {
        Common::create([
            'label_id' => '2',
            'vname' => 'Media',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Music',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Sports',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'News',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Audio',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Video',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Finance',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Design',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Web',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Culture',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Education',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Politics',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
        Common::create([
            'label_id' => '2',
            'vname' => 'Festival',
            'desc' => '-',
            'desc_1' => '-',
            'active_id' => '1'
        ]);
    }
    #endregion
}
