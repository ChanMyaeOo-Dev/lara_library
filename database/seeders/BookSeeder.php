<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            "book_1.jpg",
            "book_2.jpg",
            "book_3.jpg",
            "book_4.jpg",
            "book_5.jpg",
            "book_6.jpg",
            "book_7.jpg",
            "book_8.jpg",
            "book_9.jpg",
        ];
        $description = '၁၉၇၈-ခုနှစ် သူ၏ကဗျာနှင့် ဆောင်းပါးများကို ပုံနှိပ်ထုတ်ဝေပြီးနောက် စစ်အစိုးရမှ လိုက်လံဖမ်းစီးမှုကြောင့် တိမ်းရှောင်ခဲ့ပြီး ဗမာပြည်ကွန်မြူနစ်ပါတီသို့ လွတ်မြောက်ရေးတိုက်ပွဲများ ဆင်နွဲရန် ရောက်ရှိခဲ့သည်။ ၁၉၉၀-ခုနှစ်တွင် မာနယ်ပလော တော်လှန်ရေး ဗဟိုဌာနချုပ်သို့ ရောက်ရှိလာသည်။ ၁၉၉၁-ခုနှစ်တွင် စာပေနှင့် အနုပညာကလပ် (လွတ်မြောက်နယ်မြေ) ဒုဥက္ကဋ္ဌအဖြစ် တာဝန်ယူခဲ့ပြီး စာပေနှင့် အနုပညာကလပ်မှ ထုတ်ဝေသော သစ္စာရီဗျူး အမှတ်(၁၊၂၊၃)အား အယ်ဒီတာချုပ် တာဝန်ယူ ထုတ်ဝေခဲ့သည်။ သစ္စာရီဗျူး၊ သနူထူး၊ ဒေါင်းအိုးဝေ၊ လူ့ဘောင်သစ် စာစောင်များတွင် ကဗျာ၊ ဆောင်းပါး၊ ဝတ္ထုများ၊ နိုင်ငံရေးစစ်တမ်းများ၊ တော်လှန်ရေးအဖွဲ့အစည်း မိတ်ဆက်များ ဆောင်းပါး ၄-စောင်နှင့် သုံးဘက်မြင် အနုပညာစစ်တမ်းကြီးကို ရေးသားခဲ့သည်။';
        $books = [

            [
                'title' => 'ကိုယ်တို့တွဲကြရအောင်',
                'slug' => Str::slug('ကိုယ်တို့တွဲကြရအောင်'),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => 'ခဲတံ',
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $images[0],
            ],

            [
                'title' => 'ရွာရန်ရွာနှုန်း ၈၀',
                'slug' => Str::slug('ရွာရန်ရွာနှုန်း ၈၀'),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => 'သော်တာ‌‌‌အေးလဲ့',
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $images[1],
            ],

            [
                'title' => 'အချစ်ဦးဖြစ်ဖူးချင်တယ်',
                'slug' => Str::slug('အချစ်ဦးဖြစ်ဖူးချင်တယ်'),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => 'စကားဖြူ',
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $images[2],
            ],

            [
                'title' => 'ကိုယ်ရည်ကိုယ်သွေး',
                'slug' => Str::slug('ကိုယ်ရည်ကိုယ်သွေး'),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => 'မင်းခန့်',
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $images[3],
            ],

            [
                'title' => 'လူငယ်လမ်းညွှန်',
                'slug' => Str::slug('လူငယ်လမ်းညွှန်'),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => 'ကောင်းစံသာ',
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $images[4],
            ],
            [
                'title' => 'ချစ်သူသာပန်းတစ်ပွင့်ဖြစ်ခဲ့လျှင်',
                'slug' => Str::slug('ချစ်သူသာပန်းတစ်ပွင့်ဖြစ်ခဲ့လျှင်'),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => 'ပုညခင်',
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $images[5],
            ],

            [
                'title' => 'အချစ်ဆိုတာနှင်းဆီပွင့်ဖတ်ပေါ်ကရေစက်လေးတစ်စက်လို',
                'slug' => Str::slug('အချစ်ဆိုတာနှင်းဆီပွင့်ဖတ်ပေါ်ကရေစက်လေးတစ်စက်လို'),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => 'ပုညခင်',
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $images[6],
            ],
            [
                'title' => 'ပျော်ရွင်စွာနေထိုင်ပါ',
                'slug' => Str::slug('ပျော်ရွင်စွာနေထိုင်ပါ'),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => 'မျိုးသန့်',
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $images[7],
            ],

            [
                'title' => 'စိတ်ခံစားချက်ဒီဂရီများ',
                'slug' => Str::slug('စိတ်ခံစားချက်ဒီဂရီများ'),
                'description' => $description,
                'excerpt' => Str::excerpt($description),
                'author' => 'မင်းခန့်',
                'category_id' => Category::inRandomOrder()->first()->id,
                'qty' => 5,
                'book_image' => $images[8],
            ],
        ];

        foreach ($books as $book) {
            Book::factory()->create($book);
        }
        Book::factory(100)->create();
    }
}
