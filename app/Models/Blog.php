<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blogs = [
        [
            'id' => '1',
            'title' => 'Apa itu "Frozen Food"?',
            'imagename' => 'frozenfood.jpeg',
            'sneakpeek' => 'Pasti sudah terlalu sering kita mendengar tentang makanan beku. Tapi apa sudah tahu jelas mengenai apa itu frozen food? Kebanyakan orang bahkan sudah mengkonsumsi makanan beku, namun belum tahu kegunaan dan definisinya. Check this out.',
            'article' => 'Pembekuan makanan secara alami (menggunakan hawa dingin musim dingin) telah digunakan oleh suku-suku tradisonal di daerah beriklim dingin selama berabad-abad. Pada tahun 1885 sejumlah kecil ayam dan angsa dikirimkan dari Rusia ke London, dan dikemas di peti-peti menggunakan teknik ini. Pada bulan Maret 1899, "British Refrigeration and Allied Interests" melaporkan bahwa sebuah perusahaan pengimpor makanan, "Baerselman Bros", mengirim sejumlah 200.000 ekor ayam dan angsa beku per minggu dari tiga depot Rusia ke New Star Wharf, Lower Shadwell, London selama tiga atau empat bulan pada masa musim dingin

            Makanan beku adalah makanan yang dibekukan dengan tujuan untuk mengawetkan makanan hingga siap dimakan.Pembekuan makanan secara alami (menggunakan hawa dingin musim dingin) telah digunakan oleh suku-suku tradisonal di daerah beriklim dingin selama berabad-abad. Sejak dahulu, petani,nelayan, dan pemburu telah memakai cara tersebut untuk mengawetkan sumber pangan mereka dalam bangunan ketika memasuki musim dingin. Pembekuan memiliki fungsi menghambat pertumbuhan sebagian besar spesies bakteri dan memperlambat pembusukan.
            
            Pembekuan makanan adalah cara yang efektif dalam mengawetkan makanan karena bakteri penyebab kerusakan makanan tidak dapat tumbuh, bahkan mati, pada temperature beku. Makanan dapat diawetkan selama beberapa bulan dengan pembekuan. Penyimpanan beku jangka panjang membutuhkan temperatur -18 °C atau lebih rendah dari itu.',
            'date' => '29/10/2022'

        ],
        [
            'id' => '2',
            'title' => 'Manfaat Protein',
            'imagename' => 'protein.jpg',
            'sneakpeek' => 'Protein adalah asupan yang penting untuk pertumbuhan badan dan otot,Protein mempunyai banyak sekali fungsi di tubuh kita.Pada dasarnya protein menunjang keberadaan setiap sel tubuh, proses kekebalan tubuh. Setiap orang dewasa harus sedikitnya mengonsumsi 1 g protein per kg berat tubuhnya.Kebutuhan akan protein bertambah pada perempuan yang mengandung dan atlet-atlet.',
            'article' => 'Protein adalah asupan yang penting untuk pertumbuhan badan dan otot,Protein mempunyai banyak sekali fungsi di tubuh kita.Pada dasarnya protein menunjang keberadaan setiap sel tubuh, proses kekebalan tubuh. Setiap orang dewasa harus sedikitnya mengonsumsi 1 g protein per kg berat tubuhnya.Kebutuhan akan protein bertambah pada perempuan yang mengandung dan atlet-atlet.

            Selain sebagai sumber energy dan berperan dalam pembentukan sel-sel baru dalam tubuh (khususnya otot), protein sangat penting juga mempengaruhi kerja enzim, hormon, kekebalan tubuh, keseimbangan cairan dalam organ tubuh
            
            Protein dapat diperoleh dari produk hewani maupun nabati melalui makanan. Kandungan asam amino yang komplit pada protein hewani membuat beberapa sumber mengatakan bahwa protein hewani lebih baik dari protein nabati
            
            Kekurangan protein akan memiliki dampak negatif yang dapat mengakibatkan kerontokan rambut dan gangguan pertumbuhan.',
            'date' => '30/10/2022'

        ],
        [
            'id' => '3',
            'title' => 'Kegunaan Kemasan Vakum',
            'imagename' => 'vacum.png',
            'sneakpeek' => 'Packing Vacuum atau Pengemasan Hampa Udara adalah metode penyimpanan dan penyajian suatu produk, biasanya berupa makanan, dengan tujuan agar makanan bertahan, penyimpanan dalam waktu yang lebih lama, untuk mencegah pertumbuhan mikroorganisme. Pengemasan yang kedap udara akan menghilangkan oksigen, melindungi makanan dari kerusakan fisik dan rasa dengan membatasi pertumbuhan bakteri aerobik atau jamur, dan mencegah penguapan dari komponen atau unsur yang mudah menguap.             ',
            'article' => 'Packing Vacuum atau Pengemasan Hampa Udara adalah metode penyimpanan dan penyajian suatu produk, biasanya berupa makanan, dengan tujuan agar makanan bertahan, penyimpanan dalam waktu yang lebih lama, untuk mencegah pertumbuhan mikroorganisme. Pengemasan yang kedap udara akan menghilangkan oksigen, melindungi makanan dari kerusakan fisik dan rasa dengan membatasi pertumbuhan bakteri aerobik atau jamur, dan mencegah penguapan dari komponen atau unsur yang mudah menguap. 

            Hal ini juga untuk penyimpanan makanan segar seperti sayuran, daging, danmakanan hasil olahan lainnya supaya masa kadaluwarsa pemakaian menjadi lebih lama. Kemasan makanan Vacuum dapat memperpanjang masa kadaluwarsa hingga 2 - 3 kali dibanding dengan pengemasan biasa. Pengemasan Vacum / vacuum pada produk yang dikemas dapat mengurangi oksigen dalam kemasan, sehingga reaksi oksidasi lemak dapat dihalangi. Pengemasan Vacum / Vacuum memberikan pengaruh rasa yang lebih disukai oleh konsumen. 
            
            Rasa akan berubah jika terjadi reaksi oksidasi dan hidrolisa minyak yang menghasilkan rasa dan bau tengik. Kemasan Hampa Udara selain berfungsi untuk memperpanjang usia produk, pengemasan hampa udara juga sangat berguna untuk mengurangi kadar bunga es pada produk-produk perikanan yang dimasukkan ke dalam freezer. Pengemasan hampa udara pangan akan memperkecil kerusakan komposisi gizi dan kontaminasi bakteri yang sangat merugikan.',
            'date' => '31/10/2022'

        ]
    ];

    public static function index()
    {
        return collect(self::$blogs);
    }

    public static function article($id)
    {
        return self::index()->firstWhere('id', $id);
    }
}
