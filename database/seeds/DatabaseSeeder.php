<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('DSDungcu')->insert(
      [
        ['tenDungcu' => 'Chảo chiên'],
        ['tenDungcu' => 'Máy đánh trứng'],
        ['tenDungcu' => 'Nồi hấp'],
        ['tenDungcu' => 'Lò vi ba/sóng'],
        ['tenDungcu' => 'Lò nướng'],
        ['tenDungcu' => 'Máy làm sữa chua/Yaua'],
        ['tenDungcu' => 'Máy xay, ép trái cây'],
        ['tenDungcu' => 'Tủ đông/Tủ lạnh'],
        ['tenDungcu' => 'Nồi cơm điện'],
      ]
      );

      DB::table('DSNguyenlieu')->insert(
      [
        ['tenNguyenlieu' => 'Trứng gà', 'group' => ''],
        ['tenNguyenlieu' => 'Trứng vịt', 'group' => ''],
        ['tenNguyenlieu' => 'Cá hồi', 'group' => 'Cá'] ,
        ['tenNguyenlieu' => 'Cá mồi', 'group' => 'Cá'],
        ['tenNguyenlieu' => 'Thịt heo xay', 'group' => 'Thịt heo'],
        ['tenNguyenlieu' => 'Mỡ heo', 'group' => 'Thịt heo'],

        ['tenNguyenlieu' => 'Bột mỳ', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột bắp', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột năng', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột cà ri', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột ớt', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột nổi', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột nở', 'group' => 'Bột'],


      ]
      );
    }
}
