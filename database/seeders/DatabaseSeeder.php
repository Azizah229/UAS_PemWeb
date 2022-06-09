<?php

namespace Database\Seeders;

use App\Models\Cbeans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kategori::create([
            'nama' => 'Coffee',
            'slug' => 'coffee',
            'ikon' => 'img/coffee.png',
            'foto' => 'https://www.runtastic.com/blog/wp-content/uploads/2017/04/thumbnail_energy-without-coffee_1200x800-1024x683.jpg'
        ]);

        Kategori::create([
            'nama' => 'Bakery',
            'slug' => 'bakery',
            'ikon' => 'img/bakery.png',
            'foto' => 'https://i.pinimg.com/564x/d1/79/e8/d179e8a37d315510244b7979ae2214fc.jpg'
        ]);

        Post::create([
            'nama' => 'Aisu Kohi',
            'idKategori' => 1,
            'slug' => 'aisu-kohi',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://img-global.cpcdn.com/recipes/4983fd4024f8188f/680x482cq70/aisu-kohi-es-kopi-ala-jepang-foto-resep-utama.webp'
        ]);

        Post::create([
            'nama' => 'Kopi Susu Cinnamon',
            'idKategori' => 1,
            'slug' => 'kopi-susu-cinnamon',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://majalah.ottenstatic.com/uploads/2017/09/Starbucks-Cinnamon-Dolce-Latte-via-Diethood.jpg'
        ]);

        Post::create([
            'nama' => 'Ice Cube Coffee Milk',
            'idKategori' => 1,
            'slug' => 'ice-cube-coffee-milk',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://coffeeatthree.com/wp-content/uploads/coffee-ice-cubes-8.jpg'
        ]);
        
        Post::create([
            'nama' => 'Ice Coffee Lemonade',
            'idKategori' => 1,
            'slug' => 'ice-coffee-lemonade',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://www.glueandglitter.com/wp-content/uploads/2016/07/hard-iced-coffee-lemonade-1.jpg'
        ]);

        Post::create([
            'nama' => 'Greek Frappe Coffee',
            'idKategori' => 1,
            'slug' => 'greek-frappe-coffee',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://www.all-thats-jas.com/wp-content/uploads/2021/08/authentic-greek-frappe-drink-1200x1800.jpg'
        ]);
        
        Post::create([
            'nama' => 'Ice Milk Coffee With Butterfly Pea',
            'idKategori' => 1,
            'slug' => 'ice-milk-coffee-with-butterfly-pea',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://i.pinimg.com/564x/f8/4e/f5/f84ef536bb6beee5e3ae6f43f7d2b985.jpg'
        ]);

        Post::create([
            'nama' => 'Matcha Coffee Milk Ice',
            'idKategori' => 1,
            'slug' => 'matcha-coffee-milk-ice',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://www.siftandsimmer.com/wp-content/uploads/2021/03/matcha-espresso-fusion4-683x1024.jpg'
        ]);
        
        Post::create([
            'nama' => 'Mint Mojito Iced Coffee',
            'idKategori' => 1,
            'slug' => 'mint-mojito-iced-coffee',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://i.pinimg.com/564x/6b/29/2c/6b292c8c9f451586b46f153d7fe89583.jpg'
        ]);

        Post::create([
            'nama' => 'Ice Float Coffee',
            'idKategori' => 1,
            'slug' => 'ice-float-coffee',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://i.pinimg.com/564x/63/f4/48/63f44873d471ac25131150693ef00e22.jpg'
        ]);

        
        Post::create([
            'nama' => 'Ham Kucai Bread',
            'idKategori' => 2,
            'slug' => 'ham-kucai-bread',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://img-global.cpcdn.com/recipes/f7a230b5a2d30e97/680x482cq70/roti-ham-kucai-ala-bakery-terkenal-korea-62thn-bahan-simple-foto-resep-utama.jpg'
        ]);

        Post::create([
            'nama' => 'Conchas Bread',
            'idKategori' => 2,
            'slug' => 'conchas-bread',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://breadpartners.com/wp-content/uploads/2020/11/Concha1024.jpg'
        ]);

        Post::create([
            'nama' => 'Kompyang Bread',
            'idKategori' => 2,
            'slug' => 'kompyang-bread',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://i.pinimg.com/564x/86/43/ea/8643ea6aba08ff7963376bc3553d89cb.jpg'
        ]);

        Post::create([
            'nama' => 'Floss Roll Bread',
            'idKategori' => 2,
            'slug' => 'floss-roll-bread',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://i.pinimg.com/564x/71/64/39/71643950dc091724326d6f726ba41ac6.jpg'
        ]);
        
        Post::create([
            'nama' => 'Hokaido Milk Bread',
            'idKategori' => 2,
            'slug' => 'hokaido-milk-bread',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://i.pinimg.com/564x/96/7a/a9/967aa9a71a4d30bf3b6ea8cd6c34d934.jpg'
        ]);
        
        Post::create([
            'nama' => 'Bubble Bread',
            'idKategori' => 2,
            'slug' => 'bubble-bread',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://i.pinimg.com/736x/4f/18/ea/4f18eaef6bded1dd95a7ccb9110f3f38.jpg'
        ]);

        Post::create([
            'nama' => 'Chigiri Crumble Cheese Bread',
            'idKategori' => 2,
            'slug' => 'chigiri-crumble-cheese-bread',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://resepmamiku.com/wp-content/uploads/2021/10/242290705_118209470570760_4950128885361690390_n-760x760.jpg'
        ]);	
		
        Post::create([
            'nama' => 'Choco Wassant Bread',
            'idKategori' => 2,
            'slug' => 'choco-wassant-bread',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://img-global.cpcdn.com/recipes/a14c09e71ffb3d54/680x482cq70/chocolate-wassant-bread-foto-resep-utama.webp'
        ]);
		
        Post::create([
            'nama' => 'Wool Roll Potato Bread',
            'idKategori' => 2,
            'slug' => 'wool-roll-potato-bread',
            'bahan' => 'ms msndnuwundkn e dwjnjndje',
            'tutorial' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://i.pinimg.com/564x/e6/44/a7/e644a7df787f64462c08eab629d9cb28.jpg'
        ]);

        Cbeans::create([
            'nama' => 'Luwak',
            'slug' => 'luwak',
            'isi' => 'Kopi luwak menjadi kopi eksotis asal Sumatera dan beberapa daerah di Asia Tenggara. Minuman ini terbilang unik karena diolah dari kotoran hewan luwak yang termasuk keluarga musang. Hal ini bisa terjadi karena salah satu makanan luwak adalah ceri kopi, namun perutnya tak bisa memprosesnya dengan baik.',
            'foto' => 'https://images.tokopedia.net/img/cache/500-square/product-1/2020/5/1/330941388/330941388_199b092f-c3eb-43a3-b963-29064f457ebb_600_600.jpg'
        ]);

        Cbeans::create([
            'nama' => 'Arabika', 
            'slug' => 'arabika',
            'isi' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://asset.kompas.com/crops/4fP8U62oSLmw8KRY3058k0dIzYU=/0x46:1000x712/750x500/data/photo/2019/10/29/5db817bc7275a.jpg'
        ]);

        Cbeans::create([
            'nama' => 'Robusta',
            'slug' => 'robusta',
            'isi' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://s2.bukalapak.com/img/7943580092/large/Biji_Kopi_Robusta_Khas_kayumas_1kg.jpg.webp'
        ]);

        Cbeans::create([
            'nama' => 'Liberika', 
            'slug' => 'liberika',
            'isi' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'http://www.sadakoffie.com/wp-content/uploads/2017/11/liberica.jpg '
        ]);

        Cbeans::create([
            'nama' => 'Toraja', 
            'slug' => 'toraja',
            'isi' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://img.my-best.id/press_component/images/519754d8d10820f57b36184a52f12c83.jpg?ixlib=rails-4.2.0&q=70&lossless=0&w=690&fit=max '
        ]);

        Cbeans::create([
            'nama' => 'Ekselsa',
            'slug' => 'ekselsa',
            'isi' => 'ahbsxasbjdj ufjhuhxmxz',
            'foto' => 'https://cf.shopee.co.id/file/86df4d062810b89d0629b3532e8f38b8 '
        ]);
    }
}
