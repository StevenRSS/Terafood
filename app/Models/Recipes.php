<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    use HasFactory;

    private static $recipes = [
        [
            'id' => '0',
            'recipename' => 'Omelet Sosis',
            'recipedesc' => 'Bahan pelengkap yang kita gunakan untuk omelet telur sosis kali ini adalah bawang bombay, bawang merah dan bawang putih. Jika kalian ingin menambahkan bahan lain, tentunya akan lebih enak dan lebih komplit. Sementara untuk bumb-bumbu, kita bisa menambahkan bahan lain seperti kaldu bubuk dan lada bubuk agar lebih beraroma.',
            'ingredients' => '3 btr telur ayam, 
            100 ml susu cair plain, 
            4 btg sosis, potong tipis-tipis, 
            1 bh bawang bombay, rajang halus, 
            2 btg daun bawang, rajang halus, 
            3 siung bawang merah, iris tipis, 
            1 siung bawang putih, iris tipis, 
            1/2 sdt garam, 
            1/4 sdt kaldu bubuk, 
            1/4 sdt lada bubuk, 
            margarin secukupnya',
            'howtocook1' => 'Kocok telur ayam bersama dengan susu cair, daun bawang, garam, kaldu bubuk dan lada bubuk hingga sedikit berbuih. Sisihkan dulu sementara.',
            'howtocook2' => 'Panaskan wajan/pan anti lengket. Beri margarin secukupnya untuk menumis.',
            'howtocook3' => 'Tumis bawang bombay, bawang merah dan bawang putih hingga harum. Masukkan sosis, tumis beberapa saat sambil diaduk-aduk hingga permukaan sosis agak kering dan padat.',
            'howtocook4' => 'Tuangkan telur yang sudah dikocok bersama dengan susu cair dan daun bawang. Ratakan sosis dan bawang menggunakan spatula sambil menggoyang-goyangkan wajan dengan cara memutar agar telur menyebar secara merata.',
            'howtocook5' => 'Masak dengan api kecil hingga telur menggumpal dan membentuk kulit. Setelah telur menggumpal serta lapisan bawahnya sudah cukup matang dan keras, omelet boleh dibalik untuk mematangkan bagian atasnya. Jika suka dengan omelet yang dimasak satu sisi saja, masak hingga lapisan atasnya cukup padat setelah itu tinggal dangkat, tidak usa dibalik.',
            'howtocook6' => 'Angkat dan sajikan omelet telur sosis bersama dengan saus sambal.',
            'howtocook7' => 'Siap untuk dihidangkan :D',

            'recipeimg' => 'omeletsosis.jpg',
            'date' => '24 October 2022'
        ],
        [
            'id' => '1',
            'recipename' => 'Jamur Sosis Saus Asam Manis',
            'recipedesc' => 'Ketika bosan untuk mengkonsumsi sosis yang hanya digoreng, dan lain-lain. Kali ini anda bisa mengkolaborasikannya dengan bahan lainnya, seperti jamur.',
            'ingredients' => '8 buah sosis sapi, 
            Jamur, 
            1 buah tomat, 
            3 siung bawang putih, 
            1 bungkus merica ladaku, 
            3 sendok makan tepung maizena, 
            4 sendok makan kecap ikan, 
            8 sendok makan saus sambal, 
            6 sendok makan saus tomat, 
            1 sendok teh gula, 
            secukupnya Kaldu ayam bubuk, 
            secukupnya Air, 
            secukupnya Minyak, 
            3 batang daun bawang, 
            1 buah bawang bombay',
            'howtocook1' => 'Rebus jamur, lalu tiriskan.',
            'howtocook2' => 'Potong sosis sesuai selera, lalu goreng.',
            'howtocook3' => 'Cincang bawang putih bawang bombay, dan tomat dipotong dadu.',
            'howtocook4' => 'Tumis bawang putih dan bawang bombay hingga harum.',
            'howtocook5' => 'Masukkan jamur, aduk aduk sebentar lalu tambahkan air, kemudian masukkan potongan tomat aduk aduk.',
            'howtocook6' => 'Masukkan saus tomat, saus sambal, kecap ikan, merica, kaldu bubuk, gula, kemudian tes rasa.',
            'howtocook7' => 'Tambahkan larutan maizena kedalam masakan, aduk aduk.',

            'recipeimg' => 'jamursosis.jpg',
            'date' => '28 October 2022'
        ],
        [
            'id' => '2',
            'recipename' => 'Roti Panggang Sosis Siram Saus Special',
            'recipedesc' => 'Pernah kebayang di malam hari, sambil bergurau dengan keluarga, anda ditemani oleh secangkir teh hangat dengan roti bakar? Apalagi roti bakar yang didalamnya ada sosis kesukaan anda?.',
            'ingredients' => '1 buah roti tawar balok utuh (potong 12x5x5cm), 
            3 siung bawang putih, cincang halus, 
            1/2 sendok teh parsley cincang, 
            100 gram mentega tawar, 
            6 lembar letus, iris halus, 
            4 buah sosis bratwurs (potong 2 bagian, tumis dengan 1 sendok makan mentega tawar),
            1/4 buah bawang bombay (cincang kasar),
            50 gram mayones, 

            Bahan Saus:
            
            1/2 buah bawang bombay (cincang), 
            200 gram daging giling, 
            4 buah tomat (seduh, buang kulit dan bijinya, cincang), 
            50 gram jamur kancing (iris), 
            1 sendok makan tomat pasta, 
            3 sendok makan saus tomat, 
            1 sendok teh garam, 
            1/4 sendok teh merica bubuk, 
            1/2 sendok teh gula pasir, 
            1/2 sendok makan oregano, 
            1/2 sendok teh basil, 
            150 ml air, 
            1 tangkai peterseli (cincang, peras), 
            1 sendok makan minyak (untuk menumis)',
            'howtocook1' => 'Saus, tumis bawang bombay sampai harum. Masukkan daging giling. Aduk sampai berubah warna.',
            'howtocook2' => 'Tambahkan tomat, jamur kancing, tomat pasta, saus tomat, garam, merica, dan gula. Aduk rata. Tuang air. Aduk sampai meresap.',
            'howtocook3' => 'Menjelang diangkat, masukkan oregano, basil, dan peterseli cincang. Aduk rata. Angkat. Sisihkan.',
            'howtocook4' => 'Roti, panaskan mentega. Tumis bawang putih hingga sedikit kecokelatan. Tambahkan parsley. Aduk rata. Angkat.',
            'howtocook5' => 'Oles roti dengan tumisan bawang putih. Panggang di atas pan bergelombang hingga kecokelatan. Belah memanjang tidak putus.',
            'howtocook6' => 'isi dengan letus, saus, bawang bombay, dan sosis. Semprotkan mayones di atas sosis.',
            'howtocook7' => 'Siap untuk dihidangkan :)',

            'recipeimg' => 'rotipanggang.jpg',
            'date' => '31 October 2022'
        ],
        [
            'id' => '3',
            'recipename' => 'Cah Brokoli Ampela Bakso',
            'recipedesc' => 'Siapa bilang bahwa susah untuk membuat masakan sehat? Pernah coba belum frozen food yang dikombinasikan dengan sayuran sehat?.',
            'ingredients' => '1 bh brokoli, 
            4 ampela ayam yg telah direbus, 
            2 bh bakso, 
            1 bh sosis, 
            1 siung bawang putih, 
            1 siung bawang merah, 
            sepotong bawang bombay, 
            2 iris tomat, 
            2 bh cabe keriting merah, 
            garam dan bumbu masak, 
            sedikit gula merah, 
            sedikit air, 
            sedikit minyak goreng, 
            1 sdm saus tiram ',
            'howtocook1' => 'Cuci 1 bh brokoli dan potong2.',
            'howtocook2' => 'Potong bahan lainnya : ampela yang sudah direbus, bakso dan sosis.',
            'howtocook3' => 'Iris bawang merah, bawang putih, bawang bombay, tomat dan cabe keriting.',
            'howtocook4' => 'Panaskan sedikit minyak.. masukkan bawang putih terlebih dahulu, setelah itu masukkan bawang merah, bawang bombay tomat dan cabe keriting aduk rata.',
            'howtocook5' => 'Masukkan bahan utama : brokoli, ampela, bakso dan sosis.. aduk rata.',
            'howtocook6' => 'Tambah garam, gula merah, bumbu masak saus tiram dan sedikit air...aduk kembali sampai bumbu meresap.',
            'howtocook7' => 'Siap dihidangkan :).',

            'recipeimg' => 'ampelabakso.jpg',
            'date' => '1 November 2022'
        ],
    ];

    public static function index()
    {
        return collect(self::$recipes);
    }

    public static function recipe($id)
    {
        return self::index()->firstWhere('id', $id);
    }
}
