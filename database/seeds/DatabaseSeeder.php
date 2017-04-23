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
        ['tenNguyenlieu' => 'Trứng gà', 'group' => 'Trứng'],
        ['tenNguyenlieu' => 'Trứng vịt', 'group' => 'Trứng'],
        ['tenNguyenlieu' => 'Cá hồi', 'group' => 'Cá'] ,
        ['tenNguyenlieu' => 'Cá mồi', 'group' => 'Cá'],
        ['tenNguyenlieu' => 'Thịt heo xay', 'group' => 'Thịt heo'],
        ['tenNguyenlieu' => 'Mỡ heo', 'group' => 'Thịt heo'],

        ['tenNguyenlieu' => 'Bột mỳ', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột ngô', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột bắp', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột năng', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột cà ri', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột ớt', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột nổi', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bột nở', 'group' => 'Bột'],
        ['tenNguyenlieu' => 'Bơ','group' =>'Bơ'],
        ['tenNguyenlieu' => 'Đường cát','group' =>'Đường'],
        ['tenNguyenlieu' => 'Nước sôi','group' =>'Nước'],
        ['tenNguyenlieu' => 'Thịt ba chỉ','group' =>'Thịt'],
        ['tenNguyenlieu' => 'Dưa chua muối ','group' =>'Dưa'],
        ['tenNguyenlieu' => 'Nhánh tỏi','group' =>'Tỏi'],
        ['tenNguyenlieu' => 'Hành lá','group' =>'Hành'],
        ['tenNguyenlieu' => 'Nước tương','group' =>'Gia vị'],
        ['tenNguyenlieu' => 'Táo','group' =>'Trái cây'],
        ['tenNguyenlieu' => 'Cam','group' =>'Trái cây'],
        ['tenNguyenlieu' => 'Chuối','group' =>'Trái cây'],
        ['tenNguyenlieu' => 'Việt quất','group' =>'Trái cây'],
        ['tenNguyenlieu' => 'Mâm xôi','group' =>'Trái cây'],
        ['tenNguyenlieu' => 'Dâu','group' =>'Trái cây'],
        ['tenNguyenlieu' => 'Thịt gà','group' =>'Gà'],
        ['tenNguyenlieu' => 'Hành ba rô','group' =>'Hành'],
        ['tenNguyenlieu' => 'Rượi trắng ','group' =>'Rượi'],
        ['tenNguyenlieu' => 'Mật ông ','group' =>'Gia vị'],
        ['tenNguyenlieu' => 'Kem tươi','group' =>'Kem'],
        ['tenNguyenlieu' => 'Đường bột dạng','group' =>'Đường'],
        ['tenNguyenlieu' => 'Vani','group' =>'Gói'],
        ['tenNguyenlieu' => 'Dưa hấu','group' =>'Trái cây'],
        ['tenNguyenlieu' => 'Gừng','group' =>''],
        ['tenNguyenlieu' => 'Đá viên','group' =>'Đá'],





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
        ['tenMonan' => ' bánh ngọt chocolate',
        'gioithieu' => 'Những chiếc bánh ngọt nhỏ xinh dễ thương lại cực kì ngon miệng sẽ là món điểm tâm tuyệt vời cho cô nàng mê bánh ngọt, công thức làm loại bánh này cũng cực đơn giản bạn có thể dễ dàng tự làm tại nhà.',
        'hinhminhhoa' => 'http://toinayangi.vn/wp-content/uploads/2014/09/banh-ngot-chocolate-1.jpg',
        'origin' => 'uk',
        'categorie' => '2',
        'thoigian' => '120',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Đầu tiên, bạn rây bột mì và bột ngô cùng với nhau cho thật mịn. Bạn cho bơ và nước sôi vào với nhau rồi để bơ tan chảy hoàn toàn.',
        'createby' => '1'
        ],



      ]
      );


      DB::table('NguyenlieuMonan')->insert(
      [
        ['idMonan' => '1',
        'soluong' => '150',
        'donvi' => 'g',
        'idNguyenLieu' => '7',
        ],
        ['idMonan' => '1',
        'soluong' => '35',
        'donvi' => 'g',
        'idNguyenLieu' => '8',
        ],
        ['idMonan' => '1',
        'soluong' => '130',
        'donvi' => 'ml',
        'idNguyenLieu' => '17',
        ],
        ['idMonan' => '1',
        'soluong' => '150',
        'donvi' => 'g',
        'idNguyenLieu' => '17',
        ],
        ['idMonan' => '1',
        'soluong' => '4',
        'donvi' => 'quả',
        'idNguyenLieu' => '1',
        ],
      ]
      );
        DB::table('DSMonan')->insert(
        [
          ['tenMonan' => 'thịt ba chỉ kho dưa chua đưa cơm',
          'gioithieu' => 'Món thịt ba chỉ kho dưa chua đậm đà đưa cơm được nhiều gia đình yêu thích trong các bữa cơm hàng ngày. Vào bếp cùng Toinayangi.vn học ngay cách làm thịt ba chỉ kho dưa chua ngon cơm ngay nhé.',
          'hinhminhhoa' => 'http://toinayangi.vn/wp-content/uploads/2017/03/cach-lam-thit-ba-chi-kho-dua-chua-3.jpg',
          'origin' => 'uk',
          'categorie' => '1',
          'thoigian' => '120',
          'dokho' => '3',
          'huongdan' => 'Bước 1:Thịt ba chỉ rửa sạch để ráo nước, thái miếng vuông vừa ăn. Hành lá thái khúc, gừng thái lát, tỏi bóc vỏ để nguyên tép Cho thịt vào nồi xào sơ qua để thịt sém vàng và ra bớt mỡ. Cho tiếp gừng, hành lá, tỏi vào xào thơm rồi thêm đường vào đun cho đường ngả màu cánh gián.',
          'createby' => '1'
          ],

      ]
      );
      DB::table('NguyenlieuMonan')->insert(
      [
        ['idMonan' => '2',
        'soluong' => '400',
        'donvi' => 'g',
        'idNguyenLieu' => '18',
        ],
        ['idMonan' => '2',
        'soluong' => '1',
        'donvi' => 'thìa',
        'idNguyenLieu' => '19',
        ],
        ['idMonan' => '2',
        'soluong' => '2',
        'donvi' => 'nhánh',
        'idNguyenLieu' => '21',
        ],
        ['idMonan' => '2',
        'soluong' => '1',
        'donvi' => 'thìa',
        'idNguyenLieu' => '16',
        ],

      ]
      );
      DB::table('DSMonan')->insert(
      [
        ['tenMonan' => 'sinh tố trái cây bổ dưỡng cho ngày mới',
        'gioithieu' => 'Nếu buổi sáng mùa hè nóng bức bạn thấy khó chịu trong người và không muốn ăn bất cứ thứ gì thì hãy thử ngay một ly sinh tố trái cây tổng hợp của toinayangi.vn, chắc chắn bạn sẽ thấy cơ thể mình như được tiếp thêm sức sống ngay lập tức. Cùng tìm hiểu cách làm sinh tố trái cây bổ dưỡng cho ngày mới',
        'hinhminhhoa' => 'http://toinayangi.vn/wp-content/uploads/2016/06/C%C3%A1ch-l%C3%A0m-sinh-t%E1%BB%91-tr%C3%A1i-c%C3%A2y-b%E1%BB%95-d%C6%B0%E1%BB%A1ng-cho-ng%C3%A0y-m%E1%BB%9Bi-5.jpg',
        'origin' => 'uk',
        'categorie' => '3',
        'thoigian' => '60',
        'dokho' => '3',
        'huongdan' => 'Bước 1: Táo gọt vỏ, thái miếng Cam gọt vỏ, tách múi nhỏ Việt quất, mâm xôi, dâu tây rửa sạch với nước rồi để ráo Chuối bỏ vỏ thái miếng tròn',
        'createby' => '1'
        ],

    ]
    );
    DB::table('NguyenlieuMonan')->insert(
    [
      ['idMonan' => '3',
      'soluong' => '2',
      'donvi' => 'quả',
      'idNguyenLieu' => '23',
      ],
      ['idMonan' => '3',
      'soluong' => '1',
      'donvi' => 'quả',
      'idNguyenLieu' => '24',
      ],
      ['idMonan' => '3',
      'soluong' => '1-2',
      'donvi' => 'quả',
      'idNguyenLieu' => '25',
      ],
      ['idMonan' => '3',
      'soluong' => '1',
      'donvi' => 'muổng',
      'idNguyenLieu' => '26',
      ],
      ['idMonan' => '3',
      'soluong' => '1',
      'donvi' => 'muổng',
      'idNguyenLieu' => '27',
      ],
      ['idMonan' => '3',
      'soluong' => '4',
      'donvi' => 'quả',
      'idNguyenLieu' => '28',
      ],

    ]
    );
    DB::table('DSMonan')->insert(
    [
      ['tenMonan' => 'gà nướng giấy bạc mới lạ, hấp dẫn',
      'gioithieu' => 'Gà nướng giấy bạc là món ăn được ưa thích tại các nhà hàng sang trọng. Ngay tại nhà, bạn cũng có thể làm món gà nướng giấy bạc cực hấp dẫn này đấy nhé. Cùng toinayan gi khám phá công thức chế biến món ăn hấp dẫn này nhé. ',
      'hinhminhhoa' => 'http://toinayangi.vn/wp-content/uploads/2016/10/lam-ga-nuong-boc-giay-bac-khien-ca-nha-phat-them-7.jpg',
      'origin' => 'uk',
      'categorie' => '1',
      'thoigian' => '150',
      'dokho' => '3',
      'huongdan' => 'Bước 1: Thịt gà tươi mua về rửa sạch sau đó lọc xương ra chỉ để lại phần thịt mềm.Lấy một chiếc tăm nhọn hoặc một chiếc dĩa sạch dùng để châm vào thịt gà tạo thành những lỗ nhỏ để lát nướng thịt sẽ nhanh chín đều hơn. Ướp thịt gà với xì dầu và muối trong vòng 15 – 20 phút để thịt đậm đà. Hành rửa sạch để sẵn nguyên liệu. Trải một tờ giấy bạc ra sau đó đặt thịt gà rải đều lên trên. Đặt một khúc hành ở giữa thịt rồi cuộn giấy bạc vào cho kín và chặt.',
      'createby' => '1'
      ],
  ]
  );
  DB::table('NguyenlieuMonan')->insert(
  [
    ['idMonan' => '1',
    'soluong' => '500',
    'donvi' => 'g',
    'idNguyenLieu' => '29',
    ],
    ['idMonan' => '1',
    'soluong' => '2-3',
    'donvi' => 'cây hành',
    'idNguyenLieu' => '30',
    ],
    ['idMonan' => '1',
    'soluong' => '1',
    'donvi' => 'muổng',
    'idNguyenLieu' => '31',
    ],
    ['idMonan' => '1',
    'soluong' => '1',
    'donvi' => 'muổng',
    'idNguyenLieu' => '32',
    ],

  ]
  );
  DB::table('DSMonan')->insert(
  [
    ['tenMonan' => 'bánh kem sữa tươi đơn giản',
    'gioithieu' => 'Hôm nay chúng tôi xin giới thiệu đến các bạn một kiểu làm bánh đơn giản và ngon miệng nhất là kem tươi, thứ kem béo từ sữa. Trong các món ăn Âu, kem tươi lỏng này được dùng rất nhiều, trong các món soup rau, trong nước xốt cho món thịt, trong các món tráng miệng…',
    'hinhminhhoa' => 'http://toinayangi.vn/wp-content/uploads/2014/09/cach-lam-banh-kem-sua-tuoi.jpg',
    'origin' => 'uk',
    'categorie' => '1',
    'thoigian' => '120',
    'dokho' => '3',
    'huongdan' => 'Bước 1:Bỏ kem lỏng vào bát, dùng máy đánh trứng, đánh ở tốc độ trung bình, theo vòng tròn, từ trong lòng ra ngoài, hơi tăng dần tốc độ và dừng ngay khi thấy kem đủ bông, mượt, nếu đánh quá tay kem sẽ chắc lại như bơ, lúc đó kem mất độ mềm mượt và rất khó sử dụng.',
    'createby' => '1'
    ],
]
);
DB::table('NguyenlieuMonan')->insert(
[
  ['idMonan' => '2',
  'soluong' => '250',
  'donvi' => 'ml',
  'idNguyenLieu' => '33',
  ],
  ['idMonan' => '2',
  'soluong' => '80',
  'donvi' => 'gr',
  'idNguyenLieu' => '34',
  ],
  ['idMonan' => '2',
  'soluong' => '1',
  'donvi' => 'gói',
  'idNguyenLieu' => '35',
  ],

]
);
DB::table('DSMonan')->insert(
[
  ['tenMonan' => 'sinh tố dứa gừng mát lạnh ngày hè',
  'gioithieu' => 'một loại nước giải khát được làm bằng cách trộn trái cây với nước và đường, khá phổ biến ở Mexico, Trung Mĩ và Caribe. Trong tiếng Tây Ban Nha, Agua Fresca có nghĩa là “nước mát” và quả thật, mùa hè mà được tận hưởng một ly dứa gừng Agua Fresca thì nóng bức chẳng còn là nỗi lo nữa. Cùng vào bếp và tìm hiểu cách làm thôi nào!',
  'hinhminhhoa' => 'http://toinayangi.vn/wp-content/uploads/2016/06/Cach-lam-nuoc-rau-qua-tuoi-mat-lanh-ngay-he-1.jpg',
  'origin' => 'uk',
  'categorie' => '1',
  'thoigian' => '120',
  'dokho' => '3',
  'huongdan' => 'Bước 1Cho dứa, gừng đã bóc vỏ, đường, 3/2 chén nước vào máy xay. Xay tất cả các nguyên liệu cho tới khi được một hỗn hợp mịn.Sử dụng một rây lưới để lọc hỗn hợp vừa xay vào một chiếc bát vừaThêm 2 chén nước còn lại vào, khuấy đều và thưởng thức. Nếu bạn thấy ly sinh tố dứa gừng của mình khá nhạt, hãy cho thêm đường theo ý thích.',
  'createby' => '1'
  ],
]
);
DB::table('NguyenlieuMonan')->insert(
[
  ['idMonan' => '3',
  'soluong' => '1',
  'donvi' => 'quả',
  'idNguyenLieu' => '36',
  ],
  ['idMonan' => '3',
  'soluong' => '1',
  'donvi' => 'miếng',
  'idNguyenLieu' => '37',
  ],
  ['idMonan' => '3',
  'soluong' => '',
  'donvi' => 'viên',
  'idNguyenLieu' => '38',
  ],

]
);
    }
}
