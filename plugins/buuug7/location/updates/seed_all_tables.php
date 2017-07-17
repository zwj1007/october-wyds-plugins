<?php namespace Buuug7\Location\Updates;

use Buuug7\Location\Models\County;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder{
    public function run()
    {
        $c1=County::create([
            'name' => '渭源县',
            'code' => '621123000000',
        ]);

        $c1->towns()->create([
            'name' => '清源镇',
            'code' => '621123100000',
        ]);

        $c1->towns()->create([
            'name' => '莲峰镇',
            'code' => '621123101000',
        ]);

        $c1->towns()->create([
            'name' => '莲峰镇',
            'code' => '621123101000',
        ]);

        $c1->towns()->create([
            'name' => '莲峰镇',
            'code' => '621123101000',
        ]);

        $c1->towns()->create([
            'name' => '莲峰镇',
            'code' => '621123101000',
        ]);

        $c1->towns()->create([
            'name' => '莲峰镇',
            'code' => '621123101000',
        ]);

        $c1->towns()->create([
            'name' => '莲峰镇',
            'code' => '621123101000',
        ]);

        $c1->towns()->create([
            'name' => '莲峰镇',
            'code' => '621123101000',
        ]);

        $c1->towns()->create([
            'name' => '莲峰镇',
            'code' => '621123101000',
        ]);

    }
}

