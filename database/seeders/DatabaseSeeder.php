<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Policy;
use App\Models\Webconfigs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,
            // CategorySeeder::class,
            ProductSeeder::class,
            NewsSeeder::class,
            BannerSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Webconfigs::create([
            'title' => 'Shopp book',
            'website' => 'shoppbook.com',
            'address' => 'Hà nội',
            'code' => '2002',
            'gg_map' => 'https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=H%C3%A0+N%C3%B4i',
            'gg_analytic' => 'YOUR_GOOGLE_ANALYTICS_ID',
            'phone' => '0987654321',
            'email' => 'admin@shoppbook.com',
            'logo' => '/source/images/logo/freshcart-logo.png',
            'tiktok' => 'tiktok.com/shoppbook',
            'description' => 'Chào mừng bạn đến với Shopp Book',
            'facebook' => 'facebook.com/shoppbook',
            'zalo' => 'zalo.me/shoppbook',
            'pinterest' => 'pinterest.com/shoppbook',
            'youtube' => 'youtube.com/shoppbook',
            'dribbble' => 'dribbble.com/shoppbook',
            'whats_app' => 'https://api.whatsapp.com/send?phone=84987654321',
            'telegram' => 't.me/shoppbook',
            'twitter' => 'twitter.com/shoppbook',
            'instagram' => 'instagram.com/shoppbook',
            'reddit' => 'https://www.reddit.com/r/shoppbook/',
            'linkedin' => 'linkedin.com/in/shoppbook/',
            'google' => 'https://plus.google.com/+shoppbook',

        ]);

        Policy::create([
            'name' => 'Chính Sách Bảo Mật',
            'alias' => Str::slug('Chính Sách Bảo Mật'),
            'content' => 'Chính sách bảo mật giúp bảo vệ thông tin khách hàng khi sử dụng dịch vụ của Shopp Book.',
        ]);
        Policy::create([
            'name' => 'Chính Sách Đổi Trả',
            'alias' => Str::slug('Chính Sách Đổi Trả'),
            'content' => 'Khách hàng có thể đổi trả sản phẩm trong vòng 7 ngày nếu sản phẩm có lỗi từ nhà sản xuất.',
        ]);
        Policy::create([
            'name' => 'Chính Sách Vận Chuyển',
            'alias' => Str::slug('Chính Sách Vận Chuyển'),
            'content' => 'Shopp Book cam kết giao hàng trong vòng 3-5 ngày làm việc kể từ khi xác nhận đơn hàng.',
        ]);
        Policy::create([
            'name' => 'Chính Sách Thanh Toán',
            'alias' => Str::slug('Chính Sách Thanh Toán'),
           'content' => 'Shopp Book hỗ trợ nhiều hình thức thanh toán như tiền mặt, thẻ tín dụng và ví điện tử.',
        ]);
        
        Policy::create([
            'name' => 'Điều Khoản Sử Dụng',
            'alias' => Str::slug('Điều Khoản Sử Dụng'),
           'content' => 'Người dùng khi truy cập và sử dụng dịch vụ của Shopp Book cần tuân thủ các điều khoản sử dụng này.',
        ]);
        
    }
}
