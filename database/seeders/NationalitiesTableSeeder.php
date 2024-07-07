<?php
namespace Database\Seeders;
use App\Models\Nationalitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->delete();

        $nationals = [

            [
                'en'=> 'Egypt',
                'ar'=> 'مصر'
            ],
            [

                'en'=> 'Sudan',
                'ar'=> 'السودان'
            ],
            [

                'en'=> 'Saudi Arabia',
                'ar'=> 'المملكة العربية السعودية'
            ],
            [

                'en'=> 'Tunisia',
                'ar'=> 'تونس'
            ],
            [

                'en'=> 'Somalia',
                'ar'=> 'الصومال'
            ],
            [

                'en'=> 'Algeria',
                'ar'=> 'الجزائر'
            ],
            [

                'en'=> 'Morocco',
                'ar'=> 'المغرب'
            ],
            [

                'en'=> 'Iraq',
                'ar'=> 'العراق'
            ],
            [

                'en'=> 'Syria',
                'ar'=> 'سوريا'
            ],
            [

                'en'=> 'Yemen',
                'ar'=> 'اليمن'
            ],
            [

                'en'=> 'Libya',
                'ar'=> 'ليبيا'
            ],
            [

                'en'=> 'Jordan',
                'ar'=> 'الأردن'
            ],
            [

                'en'=> 'Emirates',
                'ar'=> 'الامارات'
            ],
            [

                'en'=> 'Lebanon',
                'ar'=> 'لبنان'
            ],
            [

                'en'=> 'Mauritania',
                'ar'=> 'موريتانيا'
            ],
            [

                'en'=> 'Kuwait',
                'ar'=> 'الكويت'
            ],
            [

                'en'=> 'Oman',
                'ar'=> 'عمان'
            ],
            [

                'en'=> 'Qatar',
                'ar'=> 'قطر'
            ],
            [

                'en'=> 'Jubbuti',
                'ar'=> 'جيبوتي'
            ],
            [

                'en'=> 'Bahrain',
                'ar'=> 'البحرين'
            ],
            [

                'en'=> 'Union of Comoros',
                'ar'=> 'جزر القمر'
            ],
            [

                'en'=> 'Palestine',
                'ar'=> 'فلسطين'
            ],
            [

                'en'=> 'Turkish',
                'ar'=> 'تركي'
            ],
            [

                'en'=> 'American',
                'ar'=> 'أمريكي'
            ],
            [

                'en'=> 'Russian',
                'ar'=> 'روسي'
            ],
            [

                'en'=> 'French',
                'ar'=> 'فرنسي'
            ],
            [

                'en'=> 'Spanish',
                'ar'=> 'إسباني'
            ],
            [

                'en'=> 'German',
                'ar'=> 'ألماني'
            ],
            [

                'en'=> 'Italian',
                'ar'=> 'إيطالي'
            ],
            [

                'en'=> 'Mexican ',
                'ar'=> 'مكسيكي'
            ],

            
            [

                'en'=> 'Brazilian',
                'ar'=> 'برازيلي'
            ],
           
            [

                'en'=> 'Bruneian',
                'ar'=> 'بروني'
            ],
            [

                'en'=> 'Bulgarian',
                'ar'=> 'بلغاري'
            ],
            [

                'en'=> 'Burkinabe',
                'ar'=> 'بوركيني'
            ],
           
            [

                'en'=> 'Cameroonian',
                'ar'=> 'كاميروني'
            ],
            [

                'en'=> 'Canadian',
                'ar'=> 'كندي'
            ],
            [

                'en'=> 'Cape Verdean',
                'ar'=> 'الرأس الأخضر'
            ],
         
            [

                'en'=> 'Central African',
                'ar'=> 'أفريقي'
            ],
            [

                'en'=> 'Chadian',
                'ar'=> 'تشادي'
            ],
            [

                'en'=> 'Chilean',
                'ar'=> 'شيلي'
            ],
            [

                'en'=> 'Chinese',
                'ar'=> 'صيني'
            ],
        
            [

                'en'=> 'Cocos Islander',
                'ar'=> 'جزر كوكوس'
            ],
            [

                'en'=> 'Colombian',
                'ar'=> 'كولومبي'
            ],
            [

                'en'=> 'Comorian',
                'ar'=> 'جزر القمر'
            ],
            [

                'en'=> 'Congolese',
                'ar'=> 'كونغي'
            ],
         
            [

                'en'=> 'Costa Rican',
                'ar'=> 'كوستاريكي'
            ],
            [

                'en'=> 'Croatian',
                'ar'=> 'كوراتي'
            ],
         
       
         
            [

                'en'=> 'Czech',
                'ar'=> 'تشيكي'
            ],
        
            [

                'en'=> 'Djiboutian',
                'ar'=> 'جيبوتي'
            ],
         
         
            [

                'en'=> 'Ecuadorian',
                'ar'=> 'إكوادوري'
            ],
       
            [

                'en'=> 'Salvadoran',
                'ar'=> 'سلفادوري'
            ],
            [

                'en'=> 'Equatorial Guinean',
                'ar'=> 'غيني'
            ],
         
            [

                'en'=> 'Ethiopian',
                'ar'=> 'أثيوبي'
            ],
         
            [

                'en'=> 'Gabonese',
                'ar'=> 'غابوني'
            ],
           
            [

                'en'=> 'Icelandic',
                'ar'=> 'آيسلندي'
            ],
            [

                'en'=> 'Indian',
                'ar'=> 'هندي'
            ],
           
        ];

        foreach ($nationals as $n) {
            Nationalitie::create(['Name' => $n]);
        }

    }
}
