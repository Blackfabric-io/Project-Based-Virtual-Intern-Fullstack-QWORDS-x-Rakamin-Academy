<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Budi Raharjo',
                'position' => 'Founder',
                'company' => 'ID Cert',
                'content' => 'Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.',
                'quote' => 'Kami di Cert membutuhkan sebuah perusahaan yang bergerak dalam bidang penyedia jasa informasi keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.',
                'image' => 'images/testimonials/budi-raharjo.jpg',
                'testimonial_date' => '2019-06-15',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'name' => 'Kuns Kurniawan',
                'position' => 'PR Event',
                'company' => 'BTG BDG',
                'content' => 'Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!',
                'quote' => 'Sebagai media penyedia kabar seputar kota Bandung, kita BDG menggunakan website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan layanan dari Qwords.',
                'image' => 'images/testimonials/kuns-kurniawan.jpg',
                'testimonial_date' => '2023-08-22',
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'name' => 'Denden Sofiudin',
                'position' => 'Owner',
                'company' => 'Rumah Kopi Temanggung',
                'content' => 'Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan Customer Service yang sangat baik, membuat kami tidak ingin berpindah dari Qwords.',
                'quote' => 'Penjualan Rumah Kopi Temanggung 80% dilakukan secara online, oleh sebab itu menggunakan website. Semenjak tahun 2015 hingga saat ini, kami menggunakan hosting dan domain dari Qwords.',
                'image' => 'images/testimonials/denden-sofiudin.jpg',
                'testimonial_date' => '2024-01-05',
                'is_featured' => true,
                'order' => 3,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
