<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Pakar;
use App\Models\Pembobotan;
use App\Models\Umkm;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'nama_umkm' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Pakar::create([
            'pakar_name' => 'Rameni',
            'pasar' => 2,
            'jalan' => 2.5,
            'sekolah' => 1.5,
            'bank' => 2,
            'koperasi' => 2,
            'komunitas' => 2,
            'umkm' => 1.75,
            'media_sosial' => 2,
            'online_shop' => 2,
            'flag' => 'smart economy kemang'
        ]);

        Pakar::create([
            'pakar_name' => 'Hermawan',
            'pasar' => 1.5,
            'jalan' => 2,
            'sekolah' => 2,
            'bank' => 2,
            'koperasi' => 2,
            'komunitas' => 2,
            'umkm' => 2.25,
            'media_sosial' => 2,
            'online_shop' => 2,
            'flag' => 'smart economy kemang'
        ]);

        Pakar::create([
            'pakar_name' => 'Linda',
            'pasar' => 1.5,
            'jalan' => 2,
            'sekolah' => 1.5,
            'bank' => 2,
            'koperasi' => 2,
            'komunitas' => 2,
            'umkm' => 2,
            'media_sosial' => 2,
            'online_shop' => 2,
            'flag' => 'smart economy kemang'
        ]);

        Pakar::create([
            'pakar_name' => 'Santi',
            'pasar' => 1.5,
            'jalan' => 1.5,
            'sekolah' => 1,
            'bank' => 2.5,
            'koperasi' => 2,
            'komunitas' => 2,
            'umkm' => 2.25,
            'media_sosial' => 2,
            'online_shop' => 2.5,
            'flag' => 'smart economy kemang'
        ]);

        Pakar::create([
            'pakar_name' => 'Elly',
            'pasar' => 1.5,
            'jalan' => 2,
            'sekolah' => 2.5,
            'bank' => 2,
            'koperasi' => 2,
            'komunitas' => 2,
            'umkm' => 2.5,
            'media_sosial' => 2,
            'online_shop' => 2,
            'flag' => 'smart economy kemang'
        ]);

        Pakar::create([
            'pakar_name' => 'Ida',
            'pasar' => 1,
            'jalan' => 2.5,
            'sekolah' => 1,
            'bank' => 1.5,
            'koperasi' => 2,
            'komunitas' => 1,
            'umkm' => 2.5,
            'media_sosial' => 2,
            'online_shop' => 1.5,
            'flag' => 'smart economy kemang'
        ]);

        Pembobotan::create([
            'village_name' => 'Atang Senjaya',
            'pasar' => 2,
            'jalan' => 2,
            'sekolah' => 1,
            'bank' => 2,
            'koperasi' => 2,
            'komunitas' => 1,
            'umkm' => 2,
            'flag' => 'smart economy kemang',
        ]);

        Pembobotan::create([
            'village_name' => 'Bojong',
            'pasar' => 1,
            'jalan' => 1,
            'sekolah' => 2,
            'bank' => 1,
            'koperasi' => 2,
            'komunitas' => 1,
            'umkm' => 1,
            'flag' => 'smart economy kemang',
        ]);

        Pembobotan::create([
            'village_name' => 'Jampang',
            'pasar' => 2,
            'jalan' => 2,
            'sekolah' => 3,
            'bank' => 3,
            'koperasi' => 3,
            'komunitas' => 3,
            'umkm' => 1,
            'flag' => 'smart economy kemang',
        ]);

        Pembobotan::create([
            'village_name' => 'Kemang',
            'pasar' => 3,
            'jalan' => 2,
            'sekolah' => 3,
            'bank' => 1,
            'koperasi' => 3,
            'komunitas' => 2,
            'umkm' => 2,
            'flag' => 'smart economy kemang',
        ]);

        Pembobotan::create([
            'village_name' => 'Pabuaran',
            'pasar' => 1,
            'jalan' => 2,
            'sekolah' => 1,
            'bank' => 1,
            'koperasi' => 1,
            'komunitas' => 3,
            'umkm' => 1,
            'flag' => 'smart economy kemang',
        ]);

        Pembobotan::create([
            'village_name' => 'Parakan Jaya',
            'pasar' => 1,
            'jalan' => 2,
            'sekolah' => 3,
            'bank' => 2,
            'koperasi' => 1,
            'komunitas' => 2,
            'umkm' => 1,
            'flag' => 'smart economy kemang',
        ]);

        Pembobotan::create([
            'village_name' => 'Pondok Udik',
            'pasar' => 1,
            'jalan' => 3,
            'sekolah' => 3,
            'bank' => 2,
            'koperasi' => 1,
            'komunitas' => 2,
            'umkm' => 2,
            'flag' => 'smart economy kemang',
        ]);

        Pembobotan::create([
            'village_name' => 'Semplak Barat',
            'pasar' => 1,
            'jalan' => 1,
            'sekolah' => 1,
            'bank' => 1,
            'koperasi' => 1,
            'komunitas' => 1,
            'umkm' => 1,
            'flag' => 'smart economy kemang',
        ]);

        Pembobotan::create([
            'village_name' => 'Tegal',
            'pasar' => 2,
            'jalan' => 3,
            'sekolah' => 3,
            'bank' => 2,
            'koperasi' => 1,
            'komunitas' => 3,
            'umkm' => 3,
            'flag' => 'smart economy kemang',
        ]);

        Umkm::create(['nama_umkm' => 'Taman lanud Atang Sendjaja', 'alamat_umkm' => 'Jl. Atang Senjaya No.29, RW.2, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54863533715559', 'longitude' => '106.759287769938']);
        Umkm::create(['nama_umkm' => 'PESONA COFFEE - ATS', 'alamat_umkm' => 'Kios, Jl. Raya Semplak No.99, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54478806078003', 'longitude' => '106.75991219395']);
        Umkm::create(['nama_umkm' => 'WARFE BOGOR', 'alamat_umkm' => 'Jalan Raya Semplak Ruko Primkopau, RW.Skadron 8, Atang Senjaya, Kec. Kemang, Kota Bogor, Jawa Barat 16310', 'latitude' => '-6.54009807920813', 'longitude' => '106.760448592463']);
        Umkm::create(['nama_umkm' => 'Torangpu Kopi', 'alamat_umkm' => 'Jl. Salabenda Raya, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.53396742817246', 'longitude' => '106.761026536135']);
        Umkm::create(['nama_umkm' => 'Warunk Babe', 'alamat_umkm' => 'FQ66+46P, Jl. Salabenda Raya, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.53887065038202', 'longitude' => '106.760554534234']);
        Umkm::create(['nama_umkm' => 'Gama Seragam', 'alamat_umkm' => 'Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat', 'latitude' => '-6.54339011275263', 'longitude' => '106.7603829708']);
        Umkm::create(['nama_umkm' => 'Toko Anis Busana', 'alamat_umkm' => 'FQ36+625, Jl. Salabenda Raya, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54616149070023', 'longitude' => '106.760168464298']);
        Umkm::create(['nama_umkm' => 'Mama Davy Collection', 'alamat_umkm' => 'Jl. Atang Senjaya, RT.1/RW.2, Semplak Bar., Kec. Kemang, Kota Bogor, Jawa Barat 16114', 'latitude' => '-6.54645998447054', 'longitude' => '106.756520555665']);
        Umkm::create(['nama_umkm' => 'RSAU Atang Sanjaya', 'alamat_umkm' => 'FQ46+4WJ, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.5444856507103', 'longitude' => '106.762210393596']);
        Umkm::create(['nama_umkm' => 'Pandana Cake', 'alamat_umkm' => 'FQ36+FHQ, Jl. Surajim, RT.02/RW.10, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54555234381804', 'longitude' => '106.761627358564']);
        Umkm::create(['nama_umkm' => 'Pangkalan TNI AU Atang Sendjaja', 'alamat_umkm' => 'Jl. Letkol Atang Senjaya Blok E No.9, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16114', 'latitude' => '-6.54707760891991', 'longitude' => '106.757996092153']);
        Umkm::create(['nama_umkm' => 'Kantor Kelurahan Atang Senjaya', 'alamat_umkm' => 'Jl. Raja Palem No.5-7, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54385054696666', 'longitude' => '106.764233330147']);
        Umkm::create(['nama_umkm' => 'R.M Padang Harapan Bundo', 'alamat_umkm' => 'Jl. Letkol Atang Senjaya No.379, RT.04/RW.6, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16114', 'latitude' => '-6.54742929940739', 'longitude' => '106.75885785832']);
        Umkm::create(['nama_umkm' => 'Abul Kitchen', 'alamat_umkm' => 'Jl. Sholeh Iskandar Jl. Salabenda Raya No.26, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54426387347616', 'longitude' => '106.76015686378']);
        Umkm::create(['nama_umkm' => 'KEDAI OTAMA', 'alamat_umkm' => 'FQ47+8X, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54433982785271', 'longitude' => '106.764877753228']);
        Umkm::create(['nama_umkm' => 'Mushola blok A', 'alamat_umkm' => 'FQ35+5MV, Jl. Subagiono, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54628941048185', 'longitude' => '106.759353047083']);
        Umkm::create(['nama_umkm' => 'Masjid al hidayah', 'alamat_umkm' => 'Gg. Mustofa No.43, RT.03/RW.10, Atang Senjaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54645992083413', 'longitude' => '106.762142664591']);
        Umkm::create(['nama_umkm' => 'Gereja Protestan GKPO Lanud Atang Sendjaja', 'alamat_umkm' => 'JL. RS TNI-AU Blok B-XI, No.1, Atang Sanjaya, Semplak, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54330482909356', 'longitude' => '106.76098380301']);
        Umkm::create(['nama_umkm' => 'Villa Arum Sari', 'alamat_umkm' => 'FQ58+2WQ, RT.01/RW.08, Curug, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16113', 'latitude' => '-6.542764037115', 'longitude' => '106.763962823428']);
        Umkm::create(['nama_umkm' => 'Kolam renang tirtha bhadrika', 'alamat_umkm' => 'Jl. Raya Kp. Sawah, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16922', 'latitude' => '-6.52383892328039', 'longitude' => '106.751598222537']);
        Umkm::create(['nama_umkm' => 'Setu Borcess', 'alamat_umkm' => 'FQG5+V5H, Jl. Salabenda Raya Jl. Kp. Setu, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52204792870153', 'longitude' => '106.758164394484']);
        Umkm::create(['nama_umkm' => 'Waroeng Haji Amin (kopi dan pusat jajanan)', 'alamat_umkm' => 'Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52443583572574', 'longitude' => '106.752156135738']);
        Umkm::create(['nama_umkm' => 'Waroeng kampoeng', 'alamat_umkm' => 'Jl. Raya Bojong, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.53637437054143', 'longitude' => '106.748336799848']);
        Umkm::create(['nama_umkm' => 'Caffe Atmo', 'alamat_umkm' => 'FQF4+F27, Unnamed Road, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52554434910557', 'longitude' => '106.755289031815']);
        Umkm::create(['nama_umkm' => 'Warung Tiloean', 'alamat_umkm' => 'Jl. Raya Bojong No.15, RT.2/RW.1, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52916863804631', 'longitude' => '106.748122116658']);
        Umkm::create(['nama_umkm' => 'Marlyn shop', 'alamat_umkm' => "Perumahan Ning's Kemang Regency, Blok D2 No.1, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310", 'latitude' => '-6.52277302140642', 'longitude' => '106.74983867285']);
        Umkm::create(['nama_umkm' => 'Fhara Gallery Hijab', 'alamat_umkm' => 'RT./02/RW./02, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.53121521435646', 'longitude' => '106.749538369003']);
        Umkm::create(['nama_umkm' => 'Shakeela Fashion "Colection Busana Muslim"', 'alamat_umkm' => 'Jl. Kp. Bojong Hilir, RT.02/RW.09, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52170705761838', 'longitude' => '106.747263748752']);
        Umkm::create(['nama_umkm' => 'Klinik AS Medika 24 Jam', 'alamat_umkm' => 'Jl. Bojong Palengseran, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.53031982273295', 'longitude' => '106.750225011117']);
        Umkm::create(['nama_umkm' => 'Lapak Pak Haji udin', 'alamat_umkm' => 'FP9X+M9V, Jalan Raya, Bojong, Kemang, Bogor Regency, West Java 16310', 'latitude' => '-6.53010665647378', 'longitude' => '106.748207959141']);
        Umkm::create(['nama_umkm' => 'Kantor Desa Bojong-Kemang (bhabinkamtibmas)', 'alamat_umkm' => 'Jl. Raya Mayor Abd. Rahman No.33, RT.1/RW.1, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.5306898580068', 'longitude' => '106.750120740603']);
        Umkm::create(['nama_umkm' => 'Kantor Desa Bojong-Kemang', 'alamat_umkm' => 'Jl. Raya Mayor Abd. Rahman No.33, RT.1/RW.1, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.5306898580068', 'longitude' => '106.750120740603']);
        Umkm::create(['nama_umkm' => 'RM Prasmanan Seblak & Boci Teh Rika', 'alamat_umkm' => 'FQG5+35M, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52400928612738', 'longitude' => '106.757949847744']);
        Umkm::create(['nama_umkm' => 'Kedai Steak & Ayam Geprek AA Evan', 'alamat_umkm' => 'Jl. Kp. Bojong Hilir No.32, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51987345634597', 'longitude' => '106.748551291828']);
        Umkm::create(['nama_umkm' => 'Soto Betawi H. Asmawih', 'alamat_umkm' => 'FQ92+Q7Q, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.53001198236526', 'longitude' => '106.7506670192']);
        Umkm::create(['nama_umkm' => 'MASJID JAMI NURUL AWWABIN', 'alamat_umkm' => 'FQF2+RRQ, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.5246491724269', 'longitude' => '106.752241973026']);
        Umkm::create(['nama_umkm' => 'Gereja Kemenangan Iman Indonesia (GKII) Bogor', 'alamat_umkm' => 'FQM3+6V6, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51637728485221', 'longitude' => '106.754516440627']);
        Umkm::create(['nama_umkm' => 'Masjid al Mukairis', 'alamat_umkm' => 'FQ93+FP5, Jl. Raya Bojong, Bojong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.53027692250881', 'longitude' => '106.754259482743']);
        Umkm::create(['nama_umkm' => 'EDUTEL HOTEL SYARIAH ELFABO 2', 'alamat_umkm' => 'Jl. Salabenda Raya No.20, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52349797223901', 'longitude' => '106.760210011991']);
        Umkm::create(['nama_umkm' => 'Danau Cilala', 'alamat_umkm' => 'GPFF+725, Jl. Telaga Kahuripan, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47631557000471', 'longitude' => '106.722712544393']);
        Umkm::create(['nama_umkm' => 'Madaya Coffee', 'alamat_umkm' => 'Kawasan Zona Madina, Jl. Raya Parung Bogor No.KM 42, Jampang, Kemang, Bogor Regency, West Java 16310', 'latitude' => '-6.47294662915065', 'longitude' => '106.728377393228']);
        Umkm::create(['nama_umkm' => 'G Coffee', 'alamat_umkm' => 'Jl. Mad Nur Gg. Baiturrahman No.8, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47478026550497', 'longitude' => '106.726703696413']);
        Umkm::create(['nama_umkm' => 'Point Cafe Jampang Parung', 'alamat_umkm' => 'Jl. Setapak No.74, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.4795560905073', 'longitude' => '106.73189676362']);
        Umkm::create(['nama_umkm' => 'Sari kopi', 'alamat_umkm' => 'Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47840486501478', 'longitude' => '106.723055893776']);
        Umkm::create(['nama_umkm' => 'AllynkaKids', 'alamat_umkm' => 'GPGC+GR7, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47317715378453', 'longitude' => '106.722184134137']);
        Umkm::create(['nama_umkm' => 'SANS THRIFT', 'alamat_umkm' => 'Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.46868250746742', 'longitude' => '106.72468658147']);
        Umkm::create(['nama_umkm' => 'kaos distro tionita', 'alamat_umkm' => 'Gg. Baiturrahman No.RT03/02, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47606503260361', 'longitude' => '106.72668294761']);
        Umkm::create(['nama_umkm' => 'RS. RST Dompet Dhuafa', 'alamat_umkm' => 'Jl. Raya Parung No.KM 42, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47196584091279', 'longitude' => '106.729235701011']);
        Umkm::create(['nama_umkm' => 'Lapis Talas Bogor Jiyyan Cake 6', 'alamat_umkm' => 'GPCJ+JGP, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47753726282587', 'longitude' => '106.73128760626']);
        Umkm::create(['nama_umkm' => 'Polsek Kemang', 'alamat_umkm' => 'GPCF+GFF, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47617680220082', 'longitude' => '106.728846467838']);
        Umkm::create(['nama_umkm' => 'Kantor Kelurahan Desa Jampang', 'alamat_umkm' => 'GPCF+GFF, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47614482050943', 'longitude' => '106.728964485319']);
        Umkm::create(['nama_umkm' => 'kedai jampang', 'alamat_umkm' => 'Jl. Jkt - Bogor No.18b, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47132620333067', 'longitude' => '106.729450271254']);
        Umkm::create(['nama_umkm' => 'Warung Makan Hokhie', 'alamat_umkm' => 'Jalan Mad Noer RT. 001 RW. 003, Jampang, Parung, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16330', 'latitude' => '-6.47448176629067', 'longitude' => '106.727047019878']);
        Umkm::create(['nama_umkm' => 'RM Sinar Baru', 'alamat_umkm' => 'Jalan Raya Parung Bogor No. 83, Jampang, Kemang, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16330', 'latitude' => '-6.47759456517952', 'longitude' => '106.73069500823']);
        Umkm::create(['nama_umkm' => "Masjid Jami' Al-Istiqomah", 'alamat_umkm' => 'GPFH+RCH, Jl. Mad Nur, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47495079513315', 'longitude' => '106.728720764815']);
        Umkm::create(['nama_umkm' => 'Masjid Al Madinah', 'alamat_umkm' => 'Jl. Raya Parung No.KM.42, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47256286105837', 'longitude' => '106.727948224512']);
        Umkm::create(['nama_umkm' => 'Masjid Jami Nurul Anwar', 'alamat_umkm' => 'GPHF+HX7, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47013233468839', 'longitude' => '106.724772424697']);
        Umkm::create(['nama_umkm' => 'Musholla Nurul Yaqin', 'alamat_umkm' => 'GPJC+HF5, Jampang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.46770158441906', 'longitude' => '106.721124631977']);
        Umkm::create(['nama_umkm' => 'Pendopo 45 Resort', 'alamat_umkm' => 'Jl. Raya Parung Jl. Parung Hijau Desa Tegal Jampang Hambulu No.45, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48458792818143', 'longitude' => '106.735802420936']);
        Umkm::create(['nama_umkm' => 'Taman Kemang Eminence', 'alamat_umkm' => 'FQR6+H4H, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.50838713860756', 'longitude' => '106.759907688121']);
        Umkm::create(['nama_umkm' => 'Susu Jahe Merah Q-Ta 1', 'alamat_umkm' => 'Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51214293086848', 'longitude' => '106.7546347484']);
        Umkm::create(['nama_umkm' => 'THRIFTSTORE', 'alamat_umkm' => 'Jl. Kemang Kiara, RT.004 Rw005, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.50995510027716', 'longitude' => '106.753975751154']);
        Umkm::create(['nama_umkm' => 'ROOMSECONDSTUFF', 'alamat_umkm' => 'Jl. Kemang Kiara No.03, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51045610316958', 'longitude' => '106.754158142072']);
        Umkm::create(['nama_umkm' => 'Kurniyah Collection', 'alamat_umkm' => 'FQQ3+2WF, Jl. Kemang Kiara, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51222559904414', 'longitude' => '106.754812608638']);
        Umkm::create(['nama_umkm' => 'Puskesmas Kemang', 'alamat_umkm' => 'Jl. Kemang Kiara, RT.4/RW.6, Perapatan, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51194167237095', 'longitude' => '106.756438209863']);
        Umkm::create(['nama_umkm' => 'Kalista Donat 2', 'alamat_umkm' => 'Jl. Kemang Kiara No.01, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.5094645979417', 'longitude' => '106.754769649702']);
        Umkm::create(['nama_umkm' => 'Kantor Kepala Desa Kemang (bhabinkamtibmas)', 'alamat_umkm' => 'FQQ3+4R6, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51198043824441', 'longitude' => '106.75455511441']);
        Umkm::create(['nama_umkm' => 'Kantor Kepala Desa Kemang', 'alamat_umkm' => 'FQQ3+4R6, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51198043824441', 'longitude' => '106.75455511441']);
        Umkm::create(['nama_umkm' => 'RM Kemang Raya', 'alamat_umkm' => 'Jl. Kemang Desa Blok Bambu No.59, RT.1/RW.6, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51221399242582', 'longitude' => '106.756953796746']);
        Umkm::create(['nama_umkm' => 'Masala Padang "MP"', 'alamat_umkm' => 'FQR3+6FW, Jl. Kemang Kiara, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.50894571203521', 'longitude' => '106.753622060961']);
        Umkm::create(['nama_umkm' => 'Masjid Jamie At-Tauhid', 'alamat_umkm' => 'Jalan Kemang Kiara No. 3, RT. 01 / RW. 05, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51228363968992', 'longitude' => '106.755380967504']);
        Umkm::create(['nama_umkm' => 'Gereja GBI Jesus Trust Ministry', 'alamat_umkm' => 'FQP4+X5J, Jl. Kemang Kiara No.57, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51244353517541', 'longitude' => '106.755155661514']);
        Umkm::create(['nama_umkm' => 'Masjid Al - Hidayah', 'alamat_umkm' => 'FQQ3+JP7, Jl. Kemang Kiara, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51070601502984', 'longitude' => '106.754297348413']);
        Umkm::create(['nama_umkm' => 'Pendopo 45 Resort', 'alamat_umkm' => 'Jl. Raya Parung Jl. Parung Hijau Desa Tegal Jampang Hambulu No.45, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48458792818143', 'longitude' => '106.735802420936']);
        Umkm::create(['nama_umkm' => 'Bedugu Rod', 'alamat_umkm' => 'kp pondok rt01/08, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49999683846545', 'longitude' => '106.715324177222']);
        Umkm::create(['nama_umkm' => 'PENDOPO TARISHAH', 'alamat_umkm' => 'Jl. Raya Pabuaran No.100, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49811990548014', 'longitude' => '106.736138445927']);
        Umkm::create(['nama_umkm' => 'Ice drinken Boba & jelly', 'alamat_umkm' => 'FPXH+RW Pabuaran, Kabupaten Bogor, Jawa Barat', 'latitude' => '-6.4994420574104', 'longitude' => '106.730001287677']);
        Umkm::create(['nama_umkm' => 'Es Cincau Mang Ame', 'alamat_umkm' => 'FPRF+M7X, Kp, Jl. Pasir Naga, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.50758634160168', 'longitude' => '106.722834428797']);
        Umkm::create(['nama_umkm' => 'BOKING STORE', 'alamat_umkm' => 'Jl. Kemang Limus Manggung No.35, RT.5/RW.2, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.50689688215211', 'longitude' => '106.723306908568']);
        Umkm::create(['nama_umkm' => 'Toko baju anda', 'alamat_umkm' => 'GP37+846, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49608325659968', 'longitude' => '106.712581803585']);
        Umkm::create(['nama_umkm' => 'AQTAR konpeksi', 'alamat_umkm' => 'Kp bangkongreang rt003/008, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.5087899571343', 'longitude' => '106.715199578346']);
        Umkm::create(['nama_umkm' => 'Badru Pengobatan Patah Tulang', 'alamat_umkm' => 'Jalan Kampung Tengah, RT.01/RW.06, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.50060250150911', 'longitude' => '106.726141653809']);
        Umkm::create(['nama_umkm' => 'Mimih Chicken', 'alamat_umkm' => 'FPXH+QPX, Jl. Raya Pabuaran, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49963562538777', 'longitude' => '106.72926872985']);
        Umkm::create(['nama_umkm' => 'Kantor Desa Pabuaran Kec. Kemang (bhabinkamtibmas)', 'alamat_umkm' => 'GP2P+CCC, Jl. Raya Pabuaran, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49870552235001', 'longitude' => '106.735954970235']);
        Umkm::create(['nama_umkm' => 'Kantor Desa Pabuaran Kec. Kemang', 'alamat_umkm' => 'GP2P+CCC, Jl. Raya Pabuaran, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49870552235001', 'longitude' => '106.735954970235']);
        Umkm::create(['nama_umkm' => 'Warunk Kejo Kitchen', 'alamat_umkm' => 'Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49956937278233', 'longitude' => '106.729314743535']);
        Umkm::create(['nama_umkm' => 'Rumah Makan Rajo Minang', 'alamat_umkm' => 'GP2P+CHC, Jl. Raya Pabuaran, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.4987110738789', 'longitude' => '106.736372245988']);
        Umkm::create(['nama_umkm' => 'Mushola An Nur', 'alamat_umkm' => 'FPWJ+M3G, Unnamed Road, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.50122367575973', 'longitude' => '106.730043096984']);
        Umkm::create(['nama_umkm' => "Mushola Nurussa'adah", 'alamat_umkm' => 'FPXM+CCV, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49994428151029', 'longitude' => '106.733476489718']);
        Umkm::create(['nama_umkm' => 'Musholla Nurul Hidayah Pabuaran', 'alamat_umkm' => 'GP2M+QWV, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat', 'latitude' => '-6.49593600609746', 'longitude' => '106.734506353389']);
        Umkm::create(['nama_umkm' => 'Masjid Nurul Yaqien', 'alamat_umkm' => 'FPXV+P5X, Pabuaran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49909078337888', 'longitude' => '106.743090483586']);
        Umkm::create(['nama_umkm' => 'Pendopo 45 Resort', 'alamat_umkm' => 'Jl. Raya Parung Jl. Parung Hijau Desa Tegal Jampang Hambulu No.45, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48458792818143', 'longitude' => '106.735802420936']);
        Umkm::create(['nama_umkm' => 'Pemancingan', 'alamat_umkm' => 'FQG7+HC5, Jl. Salabenda Raya, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52276317659497', 'longitude' => '106.76416008188']);
        Umkm::create(['nama_umkm' => 'Kebun Organik', 'alamat_umkm' => 'Jl. Salabenda Raya Gg. Pintu Air No.RT.04, RW.05, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52958516186147', 'longitude' => '106.762787169779']);
        Umkm::create(['nama_umkm' => 'COFFEE.ID', 'alamat_umkm' => 'Jl. Jkt - Bogor No.27, Kp. Parung Jambu, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51884059390664', 'longitude' => '106.758409265333']);
        Umkm::create(['nama_umkm' => 'Kedai Kopi Patnam', 'alamat_umkm' => 'Jl. Jkt - Bogor No.485, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52080190606739', 'longitude' => '106.76021174647']);
        Umkm::create(['nama_umkm' => 'Ibra Import Collection', 'alamat_umkm' => 'Jl. Parakan Jaya No.17, RT.7/RW.3, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52327487769028', 'longitude' => '106.761756769135']);
        Umkm::create(['nama_umkm' => 'Tanisha Hijab', 'alamat_umkm' => 'Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51363862937056', 'longitude' => '106.763129935166']);
        Umkm::create(['nama_umkm' => 'Klinik Bidan Hj Ade Herliana & Bidan Lisa Munarsih', 'alamat_umkm' => 'Jl. Parakan Jaya No.84, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51504569402642', 'longitude' => '106.763301613479']);
        Umkm::create(['nama_umkm' => 'Toko Kue Nayla Cake', 'alamat_umkm' => 'Km 26 Depan ATC, Jl. Raya Parung, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16710', 'latitude' => '-6.52007709395654', 'longitude' => '106.758108869164']);
        Umkm::create(['nama_umkm' => 'Roti Kukus Mang Toro', 'alamat_umkm' => 'Jl. Raya Semplak No.20B, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52361598394835', 'longitude' => '106.761585111069']);
        Umkm::create(['nama_umkm' => 'Kantor Desa Parakanjaya (bhabinkamtibmas)', 'alamat_umkm' => 'Jl. Parakan Jaya No.59, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51965606052685', 'longitude' => '106.76308264337']);
        Umkm::create(['nama_umkm' => 'Kantor Desa Parakanjaya', 'alamat_umkm' => 'Jl. Parakan Jaya No.59, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.51965606052685', 'longitude' => '106.76308264337']);
        Umkm::create(['nama_umkm' => 'RM MUAL NATONGGI lapo', 'alamat_umkm' => 'FQF7+HGJ, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52502300370992', 'longitude' => '106.763773891769']);
        Umkm::create(['nama_umkm' => 'Masjid Ar Rokhim Salabenda (LDII)', 'alamat_umkm' => 'Jl. Parakan Jaya No.17, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52332678223773', 'longitude' => '106.76338277387']);
        Umkm::create(['nama_umkm' => 'Masjid Baiturrahman', 'alamat_umkm' => 'FQF7+JR3, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52524546512566', 'longitude' => '106.764927868442']);
        Umkm::create(['nama_umkm' => 'Mushalla Al Thohir', 'alamat_umkm' => 'FQF7+3R6, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52656726322751', 'longitude' => '106.764584576251']);
        Umkm::create(['nama_umkm' => "Masjid Jami'atul Khoir", 'alamat_umkm' => "Jalan Sa'ian Idi Salabenda, Rt.01 Rw.04, Desa Parakan Jaya, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310", 'latitude' => '-6.52801687998318', 'longitude' => '106.763940850861']);
        Umkm::create(['nama_umkm' => 'Mushola Ruhamma Darussalam', 'alamat_umkm' => 'FQ87+W72, Unnamed Road, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.53190756864777', 'longitude' => '106.763066649901']);
        Umkm::create(['nama_umkm' => 'Hotel Laras Hati', 'alamat_umkm' => 'Jl. Parakan Salak No.rt02/7, Parakan Jaya, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.52548781792272', 'longitude' => '106.761181170167']);
        Umkm::create(['nama_umkm' => 'KEBUN KASIH KARUNIA', 'alamat_umkm' => 'GQ33+9F9, Kemang, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49600265292039', 'longitude' => '106.753568041916']);
        Umkm::create(['nama_umkm' => 'Makam Giri Tama', 'alamat_umkm' => 'Jl. PWRI, Tonjong, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16320', 'latitude' => '-6.4899476556974', 'longitude' => '106.749275879145']);
        Umkm::create(['nama_umkm' => 'WARHOME SPIRITUILS°', 'alamat_umkm' => 'Jl. PWRI, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49156804656936', 'longitude' => '106.748288827583']);
        Umkm::create(['nama_umkm' => 'KUBIQ Cafe & Resto', 'alamat_umkm' => 'Jl. Raya Bogor-Parung No.KM 26, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49084325917408', 'longitude' => '106.743010017947']);
        Umkm::create(['nama_umkm' => 'Roti Bakar Kebelinger', 'alamat_umkm' => 'Parung Hijau Desa Tegal Hambulu, Jl. Raya Parung, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48611021076289', 'longitude' => '106.735585514695']);
        Umkm::create(['nama_umkm' => 'Ngethriftkuyy', 'alamat_umkm' => 'GP5H+77R Unnamed Road, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.4911743181874', 'longitude' => '106.7281010733']);
        Umkm::create(['nama_umkm' => 'Arsecond_29', 'alamat_umkm' => 'Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.4921224744864', 'longitude' => '106.743482129311']);
        Umkm::create(['nama_umkm' => 'RSIA sentosa', 'alamat_umkm' => 'GQ42+43G, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49361166016595', 'longitude' => '106.750526847339']);
        Umkm::create(['nama_umkm' => 'Eskrim makcik', 'alamat_umkm' => 'GP5J+QF6, Jl. Parung Hijau Desa Tegal Jampang Hambulu, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48967656385937', 'longitude' => '106.73149944279']);
        Umkm::create(['nama_umkm' => 'TOKO HASAN Aikhadijah 2000 Aneka Kue Kering', 'alamat_umkm' => 'Jl. Parung Hijau Desa Pondok Udik Jampang Hambulu, RT.01/RW.2, Pondok Udik, Kemang, Bogor Regency, West Java 16310', 'latitude' => '-6.48861060036565', 'longitude' => '106.729653958635']);
        Umkm::create(['nama_umkm' => 'Kantor Kepala Desa Pondok Udik (bhabinkamtibmas)', 'alamat_umkm' => 'Jl. Raya Bogor-Parung No.32, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48992902905645', 'longitude' => '106.739220428005']);
        Umkm::create(['nama_umkm' => 'Kantor Kepala Desa Pondok Udik', 'alamat_umkm' => 'Jl. Raya Bogor-Parung No.32, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48992902905645', 'longitude' => '106.739220428005']);
        Umkm::create(['nama_umkm' => 'YUIKO Resto & Café', 'alamat_umkm' => 'Jl. Baru Kemang No.08, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16320', 'latitude' => '-6.49554238286361', 'longitude' => '106.752509369087']);
        Umkm::create(['nama_umkm' => 'Masjid jami ar rayyan', 'alamat_umkm' => 'GP5G+WPC, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48928489476635', 'longitude' => '106.726521095579']);
        Umkm::create(['nama_umkm' => 'Masjid K.H. Moh. Ilyas Ruhiyat', 'alamat_umkm' => 'GP6J+P6J, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48723797890225', 'longitude' => '106.730469445438']);
        Umkm::create(['nama_umkm' => "Masjid Baitul Mu'minin", 'alamat_umkm' => 'GP5J+P93, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49005229316383', 'longitude' => '106.730684118169']);
        Umkm::create(['nama_umkm' => 'Musholla Al Ikhlas', 'alamat_umkm' => 'Jl. Raya Bogor-Parung Babakan No.10, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.4875365485252', 'longitude' => '106.73609127314']);
        Umkm::create(['nama_umkm' => "Ma'had Al-Qur'an Al-Mujahidin", 'alamat_umkm' => 'GP7Q+95P, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48587348563884', 'longitude' => '106.737721991152']);
        Umkm::create(['nama_umkm' => 'Pendopo 45 Resort', 'alamat_umkm' => 'Jl. Raya Parung Jl. Parung Hijau Desa Tegal Jampang Hambulu No.45, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48458792818143', 'longitude' => '106.735802420936']);
        Umkm::create(['nama_umkm' => 'Lapangan Semplak Kaum', 'alamat_umkm' => 'Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.5462770378981', 'longitude' => '106.753187469764']);
        Umkm::create(['nama_umkm' => 'SUSU JAHE MERAH', 'alamat_umkm' => 'Ruko Permata Cibubur, Jl Blk. G6 No.15, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54943103217005', 'longitude' => '106.752353734074']);
        Umkm::create(['nama_umkm' => 'KEDAI SADULUR FOSIL', 'alamat_umkm' => 'Kp. Lumbung Rt.02/07, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54088761012105', 'longitude' => '106.746793671924']);
        Umkm::create(['nama_umkm' => 'Es Teh Nusantara Semplak ATS', 'alamat_umkm' => 'Jl. Atang Senjaya No.54, RT.001, Kp. Patambran, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54293409611136', 'longitude' => '106.749883987938']);
        Umkm::create(['nama_umkm' => 'Es Sirsak Kawan', 'alamat_umkm' => 'FQ33+J4J, Jalan Desa, West Semplak, Kemang, Bogor Regency, West Java 16310', 'latitude' => '-6.54493799072338', 'longitude' => '106.752502297935']);
        Umkm::create(['nama_umkm' => 'Karin Busana', 'alamat_umkm' => 'Jl. Letkol Atang Senjaya No.79, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54346201632006', 'longitude' => '106.750379433846']);
        Umkm::create(['nama_umkm' => 'Arzio Fashion', 'alamat_umkm' => 'Jalan Letkol Atang Senjaya No.169, RT.1/RW.2, Semplak Barat, Kemang, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.5444852359867', 'longitude' => '106.752482352376']);
        Umkm::create(['nama_umkm' => '12SecondBgr.id', 'alamat_umkm' => 'Jl. Atang Senjaya No.26, RW.1, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16114', 'latitude' => '-6.54759754337538', 'longitude' => '106.758319218497']);
        Umkm::create(['nama_umkm' => 'Dr. Umar Saleh', 'alamat_umkm' => 'Jl. Letkol Atang Senjaya No.64, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54214036021621', 'longitude' => '106.747031987623']);
        Umkm::create(['nama_umkm' => 'Semar snack', 'alamat_umkm' => 'Jl. Atang Senjaya, RT.003/RW.07, Semplak Bar., Kec. Kemang, Kota Bogor, Jawa Barat 16310', 'latitude' => '-6.54085571356652', 'longitude' => '106.745328889953']);
        Umkm::create(['nama_umkm' => 'Kantor Desa Semplak Barat (bhabinkamtibmas)', 'alamat_umkm' => 'Jl. Letkol Atang Senjaya No.35, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54664404840988', 'longitude' => '106.752350341363']);
        Umkm::create(['nama_umkm' => 'Kantor Desa Semplak Barat', 'alamat_umkm' => 'Jl. Letkol Atang Senjaya No.35, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54664404840988', 'longitude' => '106.752350341363']);
        Umkm::create(['nama_umkm' => 'WARNONGKI', 'alamat_umkm' => 'Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54314147788302', 'longitude' => '106.749003493557']);
        Umkm::create(['nama_umkm' => 'RM ASPINA LUMBUNG', 'alamat_umkm' => 'Jl. Atang Senjaya No.160, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54253200002952', 'longitude' => '106.747235192683']);
        Umkm::create(['nama_umkm' => 'KISSBURGER SEMPLAK BARAT', 'alamat_umkm' => 'Perumahan Kirana Green Valley, 1 Blok A5 No 1, Jl. Safir, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.5420838469649', 'longitude' => '106.743879065929']);
        Umkm::create(['nama_umkm' => "Masjid Jami' Al-Muqorrobiin", 'alamat_umkm' => 'Jl. Letkol Atang Senjaya Patambran Rt 03/03, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54348588754865', 'longitude' => '106.750357907178']);
        Umkm::create(['nama_umkm' => 'Masjid Jami Al-Atieq', 'alamat_umkm' => 'No., Jl. Letkol Atang Senjaya No.58, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54623325696258', 'longitude' => '106.755143248618']);
        Umkm::create(['nama_umkm' => 'Masjid Jami Al-Muttaqien', 'alamat_umkm' => 'Jalan Letkol Atang Senjaya, RT.02 RW.04, Kp. Patambran, Semplak Barat, Kemang, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.54263587344398', 'longitude' => '106.748543396549']);
        Umkm::create(['nama_umkm' => 'Masjid Darussalam', 'alamat_umkm' => 'FP5W+VC9, Unnamed Road, Semplak Bar., Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.53999932589506', 'longitude' => '106.746042618384']);
        Umkm::create(['nama_umkm' => 'KOMPLEK GRIYA SALAK ASRI', 'alamat_umkm' => 'Jl griya asri blokA4no14, Cinangka, Kec. Ciampea, Kabupaten Bogor, Jawa Barat 16620', 'latitude' => '-6.54150101693103', 'longitude' => '106.741367174748']);
        Umkm::create(['nama_umkm' => 'Taman Telaga Kahuripan', 'alamat_umkm' => 'GPC9+J47, Jl. Telaga Kahuripan, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47743337174726', 'longitude' => '106.717893791528']);
        Umkm::create(['nama_umkm' => 'Kahuripan Skatepark', 'alamat_umkm' => 'Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47918578998768', 'longitude' => '106.709314635576']);
        Umkm::create(['nama_umkm' => 'Tentang kopi', 'alamat_umkm' => 'GP96+QF9, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.47837622951159', 'longitude' => '106.711264927681']);
        Umkm::create(['nama_umkm' => 'Warkombi Telaga Kahuripan', 'alamat_umkm' => 'Samasta Telaga Kahuripan Blok C no. 1-2, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16330', 'latitude' => '-6.47820571065784', 'longitude' => '106.709462463154']);
        Umkm::create(['nama_umkm' => 'Toko mba hikmah', 'alamat_umkm' => 'GP7C+JV8, Jl. Kp.hambulu, RT.02/RW01, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48430906849954', 'longitude' => '106.722146414404']);
        Umkm::create(['nama_umkm' => 'Diya Hijab', 'alamat_umkm' => 'Perumahan Bumi, Jl. Tegar Beriman No.5, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48724479783871', 'longitude' => '106.698667526259']);
        Umkm::create(['nama_umkm' => 'Klinik Bidan Jenab Nurhasibah, S.Tr.Keb', 'alamat_umkm' => 'Perum, Jl. Utama Bogor Kemang Residence Jl. Anggrek IV No.15, RT.02/RW.14, Tegal, Kec. Kemang, Kabupaten Bogor', 'latitude' => '-6.48918719990312', 'longitude' => '106.722506602671']);
        Umkm::create(['nama_umkm' => 'KEIYS CAKE', 'alamat_umkm' => 'Kp kandang Rt05/02 no 23A, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.4823298810429', 'longitude' => '106.719021946216']);
        Umkm::create(['nama_umkm' => 'Mama Nana Cake & Cookies', 'alamat_umkm' => 'Perumahan Panorama Kemang, Blk. D5 No.9, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48812949463239', 'longitude' => '106.709837823502']);
        Umkm::create(['nama_umkm' => 'Kantor desa tegal (bhabinkamtibmas)', 'alamat_umkm' => 'GP48+WH3, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49250644949892', 'longitude' => '106.716354014278']);
        Umkm::create(['nama_umkm' => 'Kantor desa tegal', 'alamat_umkm' => 'GP48+WH3, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.49250644949892', 'longitude' => '106.716354014278']);
        Umkm::create(['nama_umkm' => 'RM TANJUNG BARINGIN', 'alamat_umkm' => 'GP68+RV3, Jl. Parung Hijau Desa Tegal Jampang Hambulu, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48733933420085', 'longitude' => '106.717313227154']);
        Umkm::create(['nama_umkm' => "Lembah Ni'mat", 'alamat_umkm' => 'Jalan Kampung Kandang, RT.04 / RW.02, Tegal, Kemang, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48523492748975', 'longitude' => '106.71639452355']);
        Umkm::create(['nama_umkm' => 'Dkriuk Tegal', 'alamat_umkm' => 'GP79+5V6, Jl. Parung Hijau Desa Tegal Jampang Hambulu, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48673076397099', 'longitude' => '106.719686471557']);
        Umkm::create(['nama_umkm' => 'GBI Kahuripan Raya', 'alamat_umkm' => 'GP96+32P, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48053930184939', 'longitude' => '106.710095052602']);
        Umkm::create(['nama_umkm' => 'MUSHOLAH AL-IKHSAN', 'alamat_umkm' => 'Jl. Parung Hijau Desa Tegal Jampang Hambulu No.63, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48446183901404', 'longitude' => '106.722026388475']);
        Umkm::create(['nama_umkm' => 'GSKI Menorah', 'alamat_umkm' => 'Jl. Kp. Kandang No.30, RT.05/RW.02, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48053817902164', 'longitude' => '106.719366114118']);
        Umkm::create(['nama_umkm' => 'Masjid Al-Muhajirin. Perumahan Grahapura Kemang', 'alamat_umkm' => 'GP49+HX3, Grahapura kemang. Desa Tegal. Kec Kemang, Tegal, Parung, Bogor Regency, West Java 16310', 'latitude' => '-6.49302787506987', 'longitude' => '106.720258742589']);
        Umkm::create(['nama_umkm' => 'Pendopo 45 Resort', 'alamat_umkm' => 'Jl. Raya Parung Jl. Parung Hijau Desa Tegal Jampang Hambulu No.45, Pd. Udik, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310', 'latitude' => '-6.48458792818143', 'longitude' => '106.735802420936']);
    }
}
