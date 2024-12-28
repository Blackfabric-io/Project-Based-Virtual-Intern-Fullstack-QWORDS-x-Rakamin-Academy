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
                'content' => 'Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa informasi keamanan di Indonesia. Qwords sangat membantu kami dalam menjalankan bisnis dengan layanan server dan hosting yang selalu up 24/7.',
                'image' => 'images/testimonials/budi-raharjo.jpg',
                'video_url' => 'https://www.youtube.com/watch?v=1234567890',
                'is_featured' => true,
                'order' => 1
            ],
            [
                'name' => 'Kuns Kurniawan',
                'position' => 'PR Event',
                'company' => 'Info BDG',
                'content' => 'Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!',
                'image' => 'images/testimonials/kuns-kurniawan.jpg',
                'is_featured' => true,
                'order' => 2
            ],
            [
                'name' => 'Denden Sofiudin',
                'position' => 'Owner',
                'company' => 'Rumah Kopi Temanggung',
                'content' => 'Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan Customer Service yang sangat baik, membuat kami tidak ingin berpindah dari Qwords.',
                'image' => 'images/testimonials/denden-sofiudin.jpg',
                'is_featured' => true,
                'order' => 3
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
