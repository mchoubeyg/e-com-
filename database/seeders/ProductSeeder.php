<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert([
            [
                'name'=>'boAt Rockerz 255 Pro+',
                "price"=>"1200",
                "description"=>"With Mic :yes | Bluetooth version: 5.2 | Wireless range: 10 m | Battery life: 40 Hours | Type-c  | ChargingboAt Rockerz 255 Pro+ is a power-packed in-ear wireless neckband headphone that has been ergonomically designed to meet the needs of music lovers. The headphones come equipped with Bluetooth V5.0 for instant wireless connectivity. Its super powerful 300mAh battery provides a humongous playtime of up to 8 hours for an extended audio bliss. Its 10mm dynamic drivers help supply superior musical experience to the user with immersive sound. With our ASAP fast charge technology, you can get the headphones fully charged in just 60 minutes. It also offers resistance against water and sweat with IPX7 rated premium build. One can control the playback and calls easily via the provided multifunction controls and even summon respective smart Voice Assistant. Get ready to get enthralled by the pumped up audio and soaring vibe of Rockerz 255 Pro+",
                "category"=>"trending",
                "gallery"=>"https://cdn.shopify.com/s/files/1/0057/8938/4802/files/rockerz-255-pro-plus-2.png?v=1615483312"
            ],
            [
                'name'=>'Double Breasted Suit',
                "price"=>"7640",
                "description"=>"Fabric – JHampstead premium Terry Rayon | Product includes Blazer, Trouser, Vest Coat, pocket square. | Tie and pocket square may vary as per availability | Lemon yellow checks on a light grey base | Inner lining – Satin | Washcare – Dryclean Only | Fit – Slim Italian Fit",
                "category"=>"trending",
                "gallery"=>"https://purepng.com/public/uploads/large/purepng.com-men-in-suitmanpeoplepersonsmalein-suit-1121525098991jt1eb.png"
            ],
            [
                'name'=>'boAt Smart Watch"',
                "price"=>"4200",
                "description"=>"3.3 cms(1.3 inches) Full Touch Screen Curved Display with Multiple Cloud Based Watch Faces (Note: Cloud Based Watch Faces will be Available via OTA Post Launch) | Wellness Mode: Spo2 (Real-time Blood Oxygen Level Monitor), 24x7 Heart Rate Monitor, Sleep monitor, Guided Breathing & Menstruation Tracker | Metal Body Casing and 5ATM Water Resistance | Daily Activity Tracker and 9 sports Modes | Notifications with Vibration Alerts for Calls, Texts, Social media, Alarms and Sedentary Alerts | Touchscreen | Fitness & Outdoor | Battery Runtime: Upto 10 days",
                "category"=>"trending",
                "gallery"=>"https://media.croma.com/image/upload/f_auto,q_auto,d_Croma%20Assets:no-product-image.jpg,h_260,w_260/v1611850277/Croma%20Assets/Wearable/Wearable%20Devices/Images/232143_2_gshmrp.png"
            ],
            [
                'name'=>'mi Power bank',
                "price"=>"1100",
                "description"=>"mi 3000mAh Power bankPort- Type C and micro usb | Cable- micro usb | Recharging time- 4 hours (with 18 W charger and USB cable) | Weight: 251 g | Capacity: 10000 mAh | Lithium Polymer Battery | Type-C Connector | Power Source: Battery | Charging Cable Included",
                "category"=>"trending",
                "gallery"=>"https://rukminim2.flixcart.com/image/416/416/kr83ukw0/power-bank/w/5/6/power-bank-plm13zm-mi-original-imag52az6xpcvjdk.jpeg?q=70"
            ]
           
        ]);
    }
}
