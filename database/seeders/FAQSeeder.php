<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Apa itu web hosting?',
                'answer' => 'Web hosting adalah layanan penyimpanan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga dapat diakses kapanpun dan dimanapun.',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Apa kelebihan dari cloud hosting Qwords?',
                'answer' => 'Cloud hosting Qwords menggunakan teknologi cloud computing dengan sistem yang terdistribusi, sehingga lebih stabil dan aman. Hosting ini juga dilengkapi dengan fitur auto-backup dan disaster recovery.',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana cara membeli hosting di Qwords?',
                'answer' => 'Anda dapat memilih paket hosting yang sesuai, melakukan pendaftaran, memilih metode pembayaran, dan melakukan pembayaran. Setelah pembayaran dikonfirmasi, layanan hosting akan segera diaktifkan.',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah ada garansi untuk layanan cloud hosting?',
                'answer' => 'Ya, Qwords memberikan garansi uptime server 99.99%. Jika terjadi downtime melebihi batas tersebut, kami akan memberikan kompensasi sesuai dengan ketentuan yang berlaku.',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana dengan dukungan pelanggan?',
                'answer' => 'Tim Technical Support dan Customer Service kami aktif 24/7, siap membantu Anda melalui live chat, telepon, email, dan support ticket.',
                'order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            FAQ::create($faq);
        }
    }
}
