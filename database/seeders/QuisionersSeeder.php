<?php

namespace Database\Seeders;

use App\Models\Quisioners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuisionersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quisioners::create([
            'pertanyaan' => 'Menurut saudari, apakah yang dimaksud dengan penyakit kanker payudara itu?',
            'opsi1'  => 'penyakit tidak menular yang menyerang sel-sel payudara dan sekitar kelenjar limfa',
            'opsi2'  => 'penyakit menular yang yang menyerang sel-sel payudara hanya pada perempuan',
            'opsi3'  => 'penyakit keturunan yang yang menyerang sel-sel payudara dan sekitar kelenjar limfa',
            'opsi4'  => 'penyakit menular yang yang menyerang sel-sel payudara dan sekitar kelenjar limfa',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        Quisioners::create([
            'pertanyaan' => 'Menurut saudari, faktor apakah yang paling memengaruhi seseorang terkena kanker payudara?',
            'opsi1'  => 'ditularkan oleh orang lain',
            'opsi2'  => 'bakteri',
            'opsi3'  => 'gaya hidup (makanan, pola hidup)',
            'opsi4'  => 'keturunan',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        Quisioners::create([
            'pertanyaan' => 'Menurut saudari, apakah yang dimaksud dengan SADARI ?',
            'opsi1'  => 'suatu metode pengobatan kanker payudara',
            'opsi2'  => 'pemeriksaan payudara oleh tenaga medis',
            'opsi3'  => 'salah satu upaya deteksi dini kanker payudara yang dilakukan setelah masa haid secara rutin',
            'opsi4'  => 'operasi penyembuhan kanker payudara',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        Quisioners::create([
            'pertanyaan' => 'Menurut saudari, kapankah seorang wanita penting untuk melakukan SADARI?',
            'opsi1'  => 'jika sudah pernah menderita kanker payudara',
            'opsi2'  => 'menopause',
            'opsi3'  => 'sebelum menderita kanker payudara',
            'opsi4'  => 'setelah mempunyai anak',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        Quisioners::create([
            'pertanyaan' => 'Menurut saudari, apakah untuk melakukan SADARI mengeluarkan biaya?',
            'opsi1'  => 'semua salah',
            'opsi2'  => 'tidak mengeluarkan biaya sama sekalitidak mengeluarkan biaya sama sekali',
            'opsi3'  => 'biayanya murah',
            'opsi4'  => 'butuh biaya besar',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        Quisioners::create([
            'pertanyaan' => 'Di bawah ini merupakan tahapan dalam melakukan pemeriksaan payudara sendiri, yaitu?',
            'opsi1'  => 'Meraba payudara',
            'opsi2'  => 'Memperhatikan bentuk dan ukuran payudara',
            'opsi3'  => 'Menekan putting susu',
            'opsi4'  => 'semua benar',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        Quisioners::create([
            'pertanyaan' => 'Di bawah ini adalah bentuk payudara yang tidak normal, kecuali?',
            'opsi1'  => 'Kulit payudara tampak seperti kulit jeruk',
            'opsi2'  => 'Permukaan kulit payudara mulus tanpa kerutan',
            'opsi3'  => 'Payudara membesar dan mengeras',
            'opsi4'  => 'Putting payudara tertarik ke dalam',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        Quisioners::create([
            'pertanyaan' => 'Di bawah ini merupakan kelainan yang tampak saat melakukan pemeriksaan payudara sendiri di sekitar putting susu?',
            'opsi1'  => 'Cekungan atau lipatan pada putting susu',
            'opsi2'  => 'Semua benar',
            'opsi3'  => 'Putting susu tertarik ke dalam',
            'opsi4'  => 'Warna kulit putting susu kebiruan',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        Quisioners::create([
            'pertanyaan' => 'Kelainan yang dapat ditemukan saat melakukan perabaan dengan jari-jari tangan pada payudara adalah?',
            'opsi1'  => 'Kulit payudara mengkerut',
            'opsi2'  => 'Ada benjolan yang terasa pada payudara',
            'opsi3'  => 'semua benar',
            'opsi4'  => 'puting payudara tertarik ke dalam',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        Quisioners::create([
            'pertanyaan' => 'Waktu yang paling baik untuk melakukan pemeriksaan payudara sendiri adalah?',
            'opsi1'  => 'Sesudah menstruasi',
            'opsi2'  => 'Saat menstruasi',
            'opsi3'  => 'Semua benar',
            'opsi4'  => 'Sebelum menstruasi',
            'tags' => 'pertanyaan pengetahuan'
        ]);
        
        
    }
}
