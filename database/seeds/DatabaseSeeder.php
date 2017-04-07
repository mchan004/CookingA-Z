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
      DB::table('Categories')->insert(
      [
        ['name' => 'Món chính'],
        ['name' => 'Món tráng miệng, bánh'],
        ['name' => 'Thức uống'],
      ]
      );


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

      DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
              'name' => str_random(10),
              'email' => str_random(10).'@gmail.com',
              'password' => bcrypt('secret'),
          ]);


      DB::table('DSMonan')->insert(
      [
        ['tenMonan' => 'Bánh bao kim sa kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'uk',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],

        ['tenMonan' => 'Bánh bao thit nuong kieến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'us',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit nuong hkiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'au',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit nuong akiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao dthit nuong kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'vn',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit nuon8g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'fr',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit7 nuong kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao t5hit nuong kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao 2thit nuong kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit nu3ong kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '1',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit 1nuong kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '2',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit nuong kiến giới2 trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '2',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit nuong k2iến giới 3trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '2',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao th3it nuong 3kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '2',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit nuon3g ki3ến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '2',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao thit n23uong kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'categorie' => '2',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh bao th3it nuong ki2ến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '2',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'Bánh ba2o thit nuon4g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '2',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => 'B2ánh bao thit nuong kiến g4iới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '2',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh bao thit nuon3g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh ba2o thit nuon3g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh b2ao thit nuon3g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],

        ['tenMonan' => '1Bánh bao thit nuon3g kiến giới trẻ sphát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],

        ['tenMonan' => '1Bánh bao thit nuo2n3g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh bao thi2t nuon3g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh bao thit nuon3g kiến giới2 trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh bao thit nuonv3g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh bao thita nuon3g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh bao athit nuon3g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh bao tshit nuon3g kiến giới trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],
        ['tenMonan' => '1Bánh bao thit nuon3g kiến giớiv trẻ phát cuồng',
        'gioithieu' => 'Lần này, Địa Điểm Ăn Uống sẽ bật mí bí kíp làm bánh bao kim sa đang khiến các tín đồ ẩm thực phát cuồng trong thời gian gần đây. Đây là loại bánh bao vô cùng đặc biệt với phần nhân trứng sữa thơm, béo đến mê mẩn.',
        'hinhminhhoa' => 'http://cdn01.diadiemanuong.com/ddau/320x/diadiemanuong-com-tu-lam-lam-banh-bao-kim-sa-dang-khien-gioi-tre-phat-cuonge798d445635714545744634653.jpg',
        'origin' => 'cn',
        'thoigian' => '120',
        'dokho' => '3',
        'categorie' => '3',
        'huongdan' => 'Bước 1: Trộn đều bột mì, men nở, bột nở, muối, 29g đường, 135ml sữa vào nhào đều đến khi bột không còn dính tay. Sau đó ủ bột 40 phút đến khi bột nở gấp đôi, dùng ngón tay ấn vào bột không phồng lại.',
        'createby' => '1'
        ],



      ]
      );


    }
}
