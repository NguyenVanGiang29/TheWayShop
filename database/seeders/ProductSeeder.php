<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Products')->insert([

            ['code' => Str::random(3), 'name_prd' => 'Quần Jean Nam Đen Dáng Ôm', 'description' => 'Quần Jean được làm từ chất vải jean cotton mềm mịn, không bai gião, ít bị nhăn khi gập và rất ít bám bụi.
            Quần Jean có phom dáng ôm nhẹ cơ thể, ống côn bó vừa phải, nhẹ nhàng tôn dáng người mặc.
            Đường may của Quần Jean rất chắc chắn thoải mái cho người sử dụng có thể vận động.', 'cate_id' => '1', 'price' => '124.000', 'is_hot' => '1', 'is_sale' => '0'],
            
            ['code' => Str::random(3), 'name_prd' => 'Quần Jean Rách Gối Đen', 'description' => 'Quần Jean được làm từ chất vải jean mềm mịn, không bai gião, co giãn nhẹ và rất ít bị nhăn khi gập.
            Quần Jean có phom dáng ôm cơ thể, ống côn bó vừa phải, nhẹ nhàng tôn dáng người mặc.
            Đường may của Quần Jean rất chắc chắn cùng với chất liệu vải jean co giãn thoải mái cho người sử dụng có thể vận động.', 'cate_id' => '1', 'price' => '119.000', 'is_hot' => '1', 'is_sale' => '0'],
            
            ['code' => Str::random(3), 'name_prd' => 'Quần jean nam đen tuyền rách gối', 'description' => 'Quần được may với chất liệu jean dày loại tốt, đảm bảo độ bền trong hai năm sử dụng.
            Form quần mới trẻ trung hơn, trông bạn sẽ luôn tươi khỏe và năng động trong cả ngày dài.
            Màu vải được nhuộm kỹ đảm bảo KHÔNG RA MÀU khi giặt, hãy tha hồ mà giặc chung với quần áo khác của bạn mà không sợ lem màu nhé.', 'cate_id' => '1', 'price' => '124.000', 'is_hot' => '0', 'is_sale' => '1'],
            
            ['code' => Str::random(3), 'name_prd' => 'Áo Sơ Mi Nam Trắng Trơn', 'description' => 'Áo sơ mi được làm từ chất liệu vải Lụa Nến mềm mịn, không bai gião, ít bám bụi, ít nhăn
            Áo sơ mi có phom dáng ôm cơ thể, cổ bẻ ôm vừa phải, nhẹ nhàng tôn dáng người mặc
            Đường may của áo sơ mi rất chắc chắn thoải mái cho người sử dụng có thể vận động.', 'cate_id' => '2', 'price' => '304.000', 'is_hot' => '1', 'is_sale' => '0'],
           
            ['code' => Str::random(3), 'name_prd' => 'Áo hoodie nam in hình Cún dễ thương', 'description' => 'Có hình ảnh và video thực tế chất lượng sản phẩm,
            Họa tiết được in nhiệt sinh động, bền đẹp.
            Chất liệu vải nỉ bông nhập ngoại mềm mịn, ít xù lông.', 'cate_id' => '2', 'price' => '224.000', 'is_hot' => '1', 'is_sale' => '1'],
           
        
            ['code' => Str::random(3), 'name_prd' => 'Đồng Hồ Thông Minh Apple Watch SE GPS', 'description' => 'Kích thước màn hình: 40mm và 44mm
            Chuẩn kháng nước 50m ISO 22810:2010', 'cate_id' => '3', 'price' => '759.000', 'is_hot' => '1', 'is_sale' => '0'],
           
            ['code' => Str::random(3), 'name_prd' => 'Đồng Hồ Thông Minh Theo Dõi Vận Động Theo Dõi Sức Khỏe Xiaomi Huami', 'description' => 'Nhiều sự lựa chọn về thiết kế, kích cỡ, chất liệu', 'cate_id' => '3', 'price' => '209.000', 'is_hot' => '0', 'is_sale' => '1'],
           
            ['code' => Str::random(3), 'name_prd' => 'Đồng Hồ Nam OLEVS', 'description' => 'Dành cho: Nam
            Kích thước mặt: 41 mm x 10 mm
            Kích thước dây: Dài x rộng: 24 x 2.0 cm', 'cate_id' => '3', 'price' => '124.000', 'is_hot' => '0', 'is_sale' => '1'],
           
            ['code' => Str::random(3), 'name_prd' => 'Quần Jean Nam Đen Dáng Ôm', 'description' => 'Quần Jean được làm từ chất vải jean cotton mềm mịn, không bai gião, ít bị nhăn khi gập và rất ít bám bụi.
            Quần Jean có phom dáng ôm nhẹ cơ thể, ống côn bó vừa phải, nhẹ nhàng tôn dáng người mặc.
            Đường may của Quần Jean rất chắc chắn thoải mái cho người sử dụng có thể vận động.', 'cate_id' => '1', 'price' => '334.000', 'is_hot' => '1', 'is_sale' => '0'],
           
            ['code' => Str::random(3), 'name_prd' => 'Đồng hồ nam FNGEEN fn668 Mặt rồng', 'description' => ' Đồng Hồ Nam FNGEEN  Là món phụ kiện không thể thiếu của các bạn nam, chiếc đồng hồ giúp bạn khẳng định cá tính thời trang của chính mình.
            - Đồng Hồ Nam FNGEEN sở hữu thiết kế sang trọng với các chi tiết được chế tác tinh xảo, góp phần nâng tầm phong cách của người đeo.', 'cate_id' => '3', 'price' => '724.000', 'is_hot' => '1', 'is_sale' => '0'],
           
            ['code' => Str::random(3), 'name_prd' => 'Giày Thể Thao Nam Có Đệm Khí', 'description' => 'Đế dày 4-5cm, chất liệu cao su tổng hợp.
            Vỏ ngoài thoáng khí, chất liệu vải và PU. Kiểu dáng buộc dây sneaker. Đế cao su non đúc, tạo cảm giác thoái mái khi đi.', 'cate_id' => '4', 'price' => '179.000', 'is_hot' => '1', 'is_sale' => '0'],
           
            ['code' => Str::random(3), 'name_prd' => 'Giày Sneaker Unisex Converse Chuck', 'description' => 'Chất vải canvas nhẹ, tạo cảm giác thoải mái
            Lớp lót dày tạo cảm giác êm ái khi vận động. Phiên bản mới lớp lót được cải tiến êm hơn & có thể tháo rời', 'cate_id' => '4', 'price' => '700.000', 'is_hot' => '1', 'is_sale' => '0'],
            
            ['code' => Str::random(3), 'name_prd' => 'Giày Sneaker Unisex Old Skool Vans ', 'description' => 'Đường may tỉ mỉ chắc chắn, dễ vệ sinh
            Thiết kế đặc trưng mang đậm chất đường phố
            Đế giày có độ bám cao.', 'cate_id' => '4', 'price' => '750.000', 'is_hot' => '0', 'is_sale' => '1'],
            
            ['code' => Str::random(3), 'name_prd' => 'Giầy Thể Thao Sneaker MCQ', 'description' => 'Màu: Đen, Trắng
            Chất da pu, hình họa tiết giọt nước
            Bản MCQ đặc biệt 2020
            Size: 35-43', 'cate_id' => '4', 'price' => '623.000', 'is_hot' => '0', 'is_sale' => '0'],

        ]);

    }
}
