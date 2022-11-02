<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    private static $products = [
        [
            'id' => '1',
            'nama_produk' => 'Sosis Sapi',
            'harga' => 'Rp -',
            'isi' => '30 pcs',
            'berat' => '1000 gram',
            'deskripsi' => 'Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quiratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
            'brand' => 'Tera Chick',
            'imagename' => 'sosissapi.jpg'
        ],
        [
            'id' => '2',
            'nama_produk' => 'Sosis Ayam ',
            'harga' => 'Rp -',
            'isi' => '30 pcs',
            'berat' => '1000 gram',
            'deskripsi' => 'Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quiratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
           
            'brand' => 'Venno',
            'imagename' => 'sosissayamvenno.jpeg'
        ],
        [
            'id' => '3',
            'nama_produk' => 'Bakso Ayam',
            'harga' => 'Rp -',
            'isi' => '30 pcs',
            'berat' => '1000 gram',
            'deskripsi' => 'Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quiratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
           
            'brand' => 'Yikko',
            'imagename' => 'baksoayamyikko.jpeg'
        ],  [
            'id' => '4',
            'nama_produk' => 'Bakso Sapi',
            'harga' => 'Rp -',
            'isi' => '25 pcs',
            'berat' => '250 gram',
            'deskripsi' => 'Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quiratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
           
            'brand' => 'Tera Chick',
            'imagename' => 'baksosapitera.jpeg'
        ],
        [
            'id' => '5',
            'nama_produk' => 'Sosis Ayam',
            'harga' => 'Rp -',
            'isi' => '30 pcs',
            'berat' => '1000 gram',
            'deskripsi' => 'Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quiratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
            'brand' => 'Tera Chick',
            'imagename' => 'sosissapi.jpg'
        ],
        [
            'id' => '6',
            'nama_produk' => 'Sosis Sapi ',
            'harga' => 'Rp -',
            'isi' => '30 pcs',
            'berat' => '1000 gram',
            'deskripsi' => 'Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quiratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
           
            'brand' => 'Venno',
            'imagename' => 'sosissayamvenno.jpeg'
        ],
        [
            'id' => '7',
            'nama_produk' => 'Bakso Sapi',
            'harga' => 'Rp -',
            'isi' => '30 pcs',
            'berat' => '1000 gram',
            'deskripsi' => 'Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quiratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
           
            'brand' => 'Yikko',
            'imagename' => 'baksoayamyikko.jpeg'
        ],  [
            'id' => '8',
            'nama_produk' => 'Bakso Ayam',
            'harga' => 'Rp -',
            'isi' => '25 pcs',
            'berat' => '250 gram',
            'deskripsi' => 'Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quiratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
           
            'brand' => 'Tera Chick',
            'imagename' => 'baksosapitera.jpeg'
        ],

    ];

    public static function index()
    {
        return collect(self::$products);
    }

    public static function detail($id)
    {
        return self::index()->firstWhere('id', $id);
    }
}
