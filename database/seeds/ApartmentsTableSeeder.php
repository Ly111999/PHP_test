<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id'=>1,
                'name'=>'Home1',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://1.bp.blogspot.com/-j2tF53idzvk/VtWsNFBRb-I/AAAAAAAABRg/gI_ReWPuOKI/s1600/vi%25C3%25AAn%2Bphale.jpg',
            ],
            [
                'id'=>2,
                'name'=>'Home 2',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTZtBMSUsmz6Kw2hZM02Nk1v2p1G1ncLNUi1HQSZXuAD8asp3p',
            ],[
                'id'=>3,
                'name'=>'Home 3',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://image.thanhnien.vn/1600/uploaded/2014/pictures201310/congdong/301013/denbud.jpg',
            ],[
                'id'=>4,
                'name'=>'Home 4',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://nhadat24h.com/uploads/bds/201511/19/59065_095759_1.jpg',
            ],[
                'id'=>5,
                'name'=>'Home 5',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://static1.cafeland.vn/cafelandData/upload/tintuc/thitruong/2017/04/tuan-01/tonghop24h-3cafeland-1491239481.jpg',
            ],[
                'id'=>6,
                'name'=>'Home 6',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'http://cafefcdn.com/thumb_w/650/Images/Uploaded/Share/8a010923642b7bc979a379e399d7ca78/2013/10/01/1200982794438taidinhcuquan2jpeg.jpg',
            ],[
                'id'=>7,
                'name'=>'Home 7',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://static1.cafeland.vn/cafelandData/upload/tintuc/thitruong/2018/05/tuan-02/q2-thao-dien-1526316619.jpg',
            ],[
                'id'=>8,
                'name'=>'Home 8',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXRIL83eUEy-DVGf4Xc7w1MBgSN4n-wMs-7CkJwrVdjj2PyAqG',
            ],[
                'id'=>9,
                'name'=>'Home 9',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3pdPFFS_sVyzw5_fZI-9SIhJk2U5ZUnzphZaZfDGHDd9pa16E',
            ],[
                'id'=>10,
                'name'=>'Home 10',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'http://nhadatcanho.com.vn/wp-content/uploads/2017/07/c%C4%83n-h%E1%BB%99-qu%E1%BA%ADn-2.jpg',
            ],[
                'id'=>11,
                'name'=>'Home 11',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'http://banchungcusaigon.com/banchungcu_saigon_3.20150325075404-fd46.jpg',
            ],[
                'id'=>12,
                'name'=>'Home 12',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6UX3Qq9Ceo82Zi6Ecn8zZWGzvaidaWj7M_lJUK4kbfo6b46ha',
            ],[
                'id'=>13,
                'name'=>'Home 13',
                'address'=>'số 31, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://sg.tepcdn.com/public/usr/cvcwk9/6bac6d-Artist-impression-of-the-870-unit-residential-development.jpg',
            ],[
                'id'=>14,
                'name'=>'Home 14',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://vinhomes-quan9.info/wp-content/uploads/2017/04/D%E1%BB%B0-%C3%81N-SENSATION-TH%E1%BA%A2O-%C4%90I%E1%BB%80N.jpg',
            ],[
                'id'=>15,
                'name'=>'Home 15',
                'address'=>'số 1, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxK0FJ_4j6eB5QNJixpvIu0Z_G0wfF7VNHleCr5L1_brpqKBv9',
            ],
            [
                'id'=>16,
                'name'=>'Home 16',
                'address'=>'số 1, quận 6.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'https://hochiminhrealestate.vn/images/products/estella-apartment-for-rent-in-thao-dien-ward-district-2_20131022151881.jpg',
            ],[
                'id'=>17,
                'name'=>'Home 17',
                'address'=>'số 121, quận 2.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'http://www.infocanho.com/wp-content/uploads/2014/05/Can-ho-Estella-quan-2.jpg',
            ],[
                'id'=>18,
                'name'=>'Home 18',
                'address'=>'số 12, quận 3.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'http://cafefcdn.com/thumb_w/650/2016/thanglong-phoicanh-1448644450-1478674630424.jpg',
            ],[
                'id'=>19,
                'name'=>'Home 19',
                'address'=>'số 1, quận 4.',
                'price'=>1000000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'http://cafefcdn.com/thumb_w/650/2016/thanglong-phoicanh-1448644450-1478674630424.jpg',
            ],[
                'id'=>20,
                'name'=>'Home 20',
                'address'=>'số 1, quận 2.',
                'price'=>300000000,
                'description'=>'Chung cư cao cấp',
                'infor_detail'=>'Nhà rộng, thoáng mát, tiện nghi. Có 2 phòng ngủ, nhà bếp, phòng tắm với trang thiết bị hiện đại.',
                'image'=>'http://khudothimoi.com/images/trung-tam-thuong-mai/1/du-an-van-phong-va-chung-cu-cao-cap-viglacera-tower.jpg',
            ],
        ]);
    }
}
