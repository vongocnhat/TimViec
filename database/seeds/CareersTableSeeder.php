<?php

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
                ['career' => 'Quản trị kinh doanh'],
                ['career' => 'Bán hàng '],
                ['career' => 'Khách sạn-Nhà hàng'],
                ['career' => 'Kế toán-Kiểm toán'],
                ['career' => 'Xây dựng'],
                ['career' => 'Hành chính-Văn phòng'],
                ['career' => 'Marketing-PR'],
                ['career' => 'Dịch vụ'],
                ['career' => 'Thực phẩm-Đồ uống'],
                ['career' => 'An ninh-Bảo vệ'],
                ['career' => 'Báo chí-Truyền hình'],
                ['career' => 'Bảo hiểm'],
                ['career' => 'Biên-Phiên dịch'],
                ['career' => 'Bưu chính'],
                ['career' => '>Chứng khoán- Vàng'],
                ['career' => 'Cơ khí-Chế tạo'],
                ['career' => 'Công nghệ cao'],
                ['career' => 'Công nghiệp'],
                ['career' => 'Dầu khí-Hóa chất'],
                ['career' => 'Dệt may - Da giày'],
                ['career' => 'Du lịch'],
                ['career' => 'Điện tử viễn thông'],
                ['career' => 'Điện-Điện tử-Điện lạnh'],
                ['career' => 'Game'],
                ['career' => 'Giáo dục-Đào tạo'],
                ['career' => 'Hàng gia dụng'],
                ['career' => 'Hàng hải'],
                ['career' => 'Hàng không'],
                ['career' => 'Hoá học-Sinh học'],
                ['career' => 'Hoạch định-Dự án'],
                ['career' => 'In ấn-Xuất bản'],
                ['career' => 'IT phần cứng/mạng'],
                ['career' => 'IT phần mềm'],
                ['career' => 'KD bất động sản'],
                ['career' => 'Kho vận-Vật tư'],
                ['career' => 'Kiến trúc-TK nội thất'],
                ['career' => 'Kỹ thuật'],
                ['career' => 'Kỹ thuật ứng dụng'],
                ['career' => 'Ngân hàng'],
                ['career' => 'Ngành nghề khác'],
                ['career' => 'Nghệ thuật - Điện ảnh'],
                ['career' => 'Ngoại thương-Xuất nhập khẩu'],
                ['career' => 'Nhân sự'],
                ['career' => 'Nông-Lâm-Ngư nghiệp'],
                ['career' => 'Ô tô - Xe máy'],
                ['career' => 'Pháp lý-Luật'],
                ['career' => 'Quan hệ đối ngoại'],
                ['career' => 'Spa-Mỹ phẩm-Trang sức'],
                ['career' => 'Tài chính-Đầu tư'],
                ['career' => 'Thiết kế đồ hoạ web'],
                ['career' => 'Thiết kế-Mỹ thuật'],
                ['career' => 'Thời trang'],
                ['career' => 'Thủ công mỹ nghệ'],
                ['career' => 'Thư ký-Trợ lý'],
                ['career' => 'Thương mại điện tử'],
                ['career' => 'Tiếp thị-Quảng cáo'],
                ['career' => 'Tổ chức sự kiện-Quà tặng'],
                ['career' => 'Tư vấn'],
                ['career' => 'Vận tải'],
                ['career' => 'Y tế-Dược']
            ]);
        }
    }
}
