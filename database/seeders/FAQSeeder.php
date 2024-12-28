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
                'display_order' => 1,
                'is_active' => true
            ],
            [
                'question' => 'Mengapa saya perlu web hosting?',
                'answer' => 'Web hosting diperlukan jika Anda ingin membuat website yang dapat diakses secara online. Hosting menyimpan semua file dan data website Anda di server yang terhubung dengan internet.',
                'display_order' => 2,
                'is_active' => true
            ],
            [
                'question' => 'Apa kelebihan dari cloud hosting Qwords?',
                'answer' => 'Cloud hosting Qwords menggunakan teknologi cloud computing terkini, menjamin uptime 99.9%, dilengkapi dengan fitur keamanan canggih, backup otomatis, dan dukungan teknis 24/7.',
                'display_order' => 3,
                'is_active' => true
            ],
            [
                'question' => 'Apakah saya bisa transfer hosting dari provider lain?',
                'answer' => 'Ya, Anda dapat melakukan transfer hosting dari provider lain ke Qwords. Tim technical support kami akan membantu proses migrasi secara gratis.',
                'display_order' => 4,
                'is_active' => true
            ],
            [
                'question' => 'Bagaimana jika saya mengalami masalah teknis?',
                'answer' => 'Qwords menyediakan layanan customer support 24/7 melalui live chat, telepon, dan ticket support. Tim technical support kami siap membantu menyelesaikan masalah teknis yang Anda hadapi.',
                'display_order' => 5,
                'is_active' => true
            ]
        ];

        foreach ($faqs as $faq) {
            FAQ::create($faq);
        }
    }
}
