<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        if (DB::table('careers')->count() == 0) {
            DB::table('careers')->insert([
                ['name' => 'Không', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Quản trị kinh doanh', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bán hàng ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Khách sạn-Nhà hàng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kế toán-Kiểm toán', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Xây dựng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Hành chính-Văn phòng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Marketing-PR', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Dịch vụ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Thực phẩm-Đồ uống', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'An ninh-Bảo vệ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Báo chí-Truyền hình', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bảo hiểm', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Biên-Phiên dịch', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Bưu chính', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Chứng khoán- Vàng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Cơ khí-Chế tạo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Công nghệ cao', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Công nghiệp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Dầu khí-Hóa chất', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Dệt may - Da giày', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Du lịch', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Điện tử viễn thông', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Điện-Điện tử-Điện lạnh', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Game', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Giáo dục-Đào tạo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Hàng gia dụng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Hàng hải', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Hàng không', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Hoá học-Sinh học', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Hoạch định-Dự án', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'In ấn-Xuất bản', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'IT phần cứng/mạng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'IT phần mềm', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'KD bất động sản', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kho vận-Vật tư', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kiến trúc-TK nội thất', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kỹ thuật', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Kỹ thuật ứng dụng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ngân hàng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ngành nghề khác', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Nghệ thuật - Điện ảnh', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ngoại thương-Xuất nhập khẩu', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Nhân sự', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Nông-Lâm-Ngư nghiệp', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Ô tô - Xe máy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Pháp lý-Luật', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Quan hệ đối ngoại', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Spa-Mỹ phẩm-Trang sức', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tài chính-Đầu tư', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Thiết kế đồ hoạ web', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Thiết kế-Mỹ thuật', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Thời trang', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Thủ công mỹ nghệ', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Thư ký-Trợ lý', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Thương mại điện tử', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tiếp thị-Quảng cáo', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tổ chức sự kiện-Quà tặng', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Tư vấn', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Vận tải', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
                ['name' => 'Y tế-Dược', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ]);
        }
    }
}
