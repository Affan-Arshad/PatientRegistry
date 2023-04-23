<?php

use App\Enums\Atoll;
use App\Models\Island;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('islands', function (Blueprint $table) {
            $table->id();
            $table->string('atoll');
            $table->string('name');
            $table->unique(['atoll', 'name']); # the combination of these two columns should be unique
            $table->timestamps();
        });
        
        // make islands
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Baarah']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Dhiddhoo']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Filladhoo']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Hoarafushi']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Ihavandhoo']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Kelaa']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Maarandhoo']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Mulhadhoo']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Muraidhoo']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Thakandhoo']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Thuraakunu']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Uligamu']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Utheemu']);
        Island::create(['atoll' => Atoll::HAA_ALIFU, 'name' => 'Vashafaru']);

        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Hanimaadhoo']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Finey']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Naivaadhoo']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Nolhivaranfaru']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Nellaidhoo']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Nolhivaram']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Kurinbi']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Kulhudhuffushi']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Kumundhoo']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Neykurendhoo']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Vaikaradhoo']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Makunudhoo']);
        Island::create(['atoll' => Atoll::HAA_DHAALU, 'name' => 'Hirimaradhoo']);

        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Bileffahi']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Feevah']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Feydhoo']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Foakaidhoo']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Funadhoo']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Goidhoo']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Kanditheemu']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Komandoo']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Lhaimagu']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Maaungoodhoo']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Maroshi']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Milandhoo']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Narudhoo']);
        Island::create(['atoll' => Atoll::SHAVIYANI, 'name' => 'Noomaraa']);

        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Foddhoo']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Henbandhoo']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Holhudhoo']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Kendhikulhudhoo']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Kudafari']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Landhoo']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Lhohi']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Maafaru']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Maalhendhoo']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Magoodhoo']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Manadhoo']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Miladhoo']);
        Island::create(['atoll' => Atoll::NOONU, 'name' => 'Velidhoo']);

        Island::create(['atoll' => Atoll::RAA, 'name' => 'Alifushi']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Angolhitheemu']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Fainu']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Hulhudhuffaaru']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Inguraidhoo']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Innamaadhoo']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Dhuvaafaru']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Kinolhas']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Maakurathu']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Maduvvaree']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Meedhoo']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Rasgetheemu']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Rasmaadhoo']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Ungoofaaru']);
        Island::create(['atoll' => Atoll::RAA, 'name' => 'Vaadhoo']);

        Island::create(['atoll' => Atoll::BAA, 'name' => 'Dharavandhoo']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Dhonfanu']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Eydhafushi']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Fehendhoo']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Fulhadhoo']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Goidhoo']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Hithaadhoo']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Kamadhoo']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Kendhoo']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Kihaadhoo']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Kudarikilu']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Maalhos']);
        Island::create(['atoll' => Atoll::BAA, 'name' => 'Thulhaadhoo']);

        Island::create(['atoll' => Atoll::LHAVIYANI, 'name' => 'Hinnavaru']);
        Island::create(['atoll' => Atoll::LHAVIYANI, 'name' => 'Kurendhoo']);
        Island::create(['atoll' => Atoll::LHAVIYANI, 'name' => 'Maafilaafushi']);
        Island::create(['atoll' => Atoll::LHAVIYANI, 'name' => 'Naifaru']);
        Island::create(['atoll' => Atoll::LHAVIYANI, 'name' => 'Olhuvelifushi']);

        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Dhiffushi']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Gaafaru']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Gulhi']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Guraidhoo']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Himmafushi']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Hulhumalé']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Huraa']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Kaashidhoo']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Malé']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Maafushi']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Thulusdhoo']);
        Island::create(['atoll' => Atoll::KAAFU, 'name' => 'Vilimalé']);

        Island::create(['atoll' => Atoll::ALIFU_ALIFU, 'name' => 'Bodufolhudhoo']);
        Island::create(['atoll' => Atoll::ALIFU_ALIFU, 'name' => 'Feridhoo']);
        Island::create(['atoll' => Atoll::ALIFU_ALIFU, 'name' => 'Himandhoo']);
        Island::create(['atoll' => Atoll::ALIFU_ALIFU, 'name' => 'Maalhos']);
        Island::create(['atoll' => Atoll::ALIFU_ALIFU, 'name' => 'Mathiveri']);
        Island::create(['atoll' => Atoll::ALIFU_ALIFU, 'name' => 'Rasdhoo']);
        Island::create(['atoll' => Atoll::ALIFU_ALIFU, 'name' => 'Thoddoo']);
        Island::create(['atoll' => Atoll::ALIFU_ALIFU, 'name' => 'Ukulhas']);
        Island::create(['atoll' => Atoll::ALIFU_ALIFU, 'name' => 'Fesdhoo']);

        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Dhangethi']);
        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Dhiddhoo']);
        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Dhigurah']);
        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Fenfushi']);
        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Haggnaameedhoo']);
        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Kunburudhoo']);
        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Maamingili']);
        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Mahibadhoo']);
        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Mandhoo']);
        Island::create(['atoll' => Atoll::ALIFU_DHAALU, 'name' => 'Omadhoo']);

        Island::create(['atoll' => Atoll::VAAVU, 'name' => 'Felidhoo']);
        Island::create(['atoll' => Atoll::VAAVU, 'name' => 'Fulidhoo']);
        Island::create(['atoll' => Atoll::VAAVU, 'name' => 'Keyodhoo']);
        Island::create(['atoll' => Atoll::VAAVU, 'name' => 'Rakeedhoo']);
        Island::create(['atoll' => Atoll::VAAVU, 'name' => 'Thinadhoo']);

        Island::create(['atoll' => Atoll::MEEMU, 'name' => 'Mulak']);
        Island::create(['atoll' => Atoll::MEEMU, 'name' => 'Dhiggaru']);
        Island::create(['atoll' => Atoll::MEEMU, 'name' => 'Kolhufushi']);
        Island::create(['atoll' => Atoll::MEEMU, 'name' => 'Maduvvaree']);
        Island::create(['atoll' => Atoll::MEEMU, 'name' => 'Muli']);
        Island::create(['atoll' => Atoll::MEEMU, 'name' => 'Naalaafushi']);
        Island::create(['atoll' => Atoll::MEEMU, 'name' => 'Raimmandhoo']);
        Island::create(['atoll' => Atoll::MEEMU, 'name' => 'Veyvah']);

        Island::create(['atoll' => Atoll::FAAFU, 'name' => 'Bileddhoo']);
        Island::create(['atoll' => Atoll::FAAFU, 'name' => 'Dharanboodhoo']);
        Island::create(['atoll' => Atoll::FAAFU, 'name' => 'Feeali']);
        Island::create(['atoll' => Atoll::FAAFU, 'name' => 'Magoodhoo']);
        Island::create(['atoll' => Atoll::FAAFU, 'name' => 'Nilandhoo']);

        Island::create(['atoll' => Atoll::DHAALU, 'name' => 'Bandidhoo']);
        Island::create(['atoll' => Atoll::DHAALU, 'name' => 'Gemendhoo']);
        Island::create(['atoll' => Atoll::DHAALU, 'name' => 'Hulhudheli']);
        Island::create(['atoll' => Atoll::DHAALU, 'name' => 'Kudahuvadhoo']);
        Island::create(['atoll' => Atoll::DHAALU, 'name' => 'Maaenboodhoo']);
        Island::create(['atoll' => Atoll::DHAALU, 'name' => 'Meedhoo']);
        Island::create(['atoll' => Atoll::DHAALU, 'name' => 'Rinbudhoo']);
        Island::create(['atoll' => Atoll::DHAALU, 'name' => 'Vaanee']);

        Island::create(['atoll' => Atoll::THAA, 'name' => 'Burunee']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Vilufushi']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Madifushi']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Dhiyamingili']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Guraidhoo']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Gaadhiffushi']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Thimarafushi']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Veymandoo']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Kinbidhoo']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Omadhoo']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Hirilandhoo']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Kandoodhoo']);
        Island::create(['atoll' => Atoll::THAA, 'name' => 'Vandhoo']);

        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Dhanbidhoo']);
        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Fonadhoo ']);
        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Gan']);
        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Hithadhoo']);
        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Isdhoo']);
        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Kunahandhoo']);
        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Maabaidhoo']);
        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Maamendhoo']);
        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Maavah']);
        Island::create(['atoll' => Atoll::LAAMU, 'name' => 'Mundoo']);

        Island::create(['atoll' => Atoll::GAAFU_ALIFU, 'name' => 'Dhaandhoo']);
        Island::create(['atoll' => Atoll::GAAFU_ALIFU, 'name' => 'Dhevvadhoo']);
        Island::create(['atoll' => Atoll::GAAFU_ALIFU, 'name' => 'Gemanafushi']);
        Island::create(['atoll' => Atoll::GAAFU_ALIFU, 'name' => 'Kanduhulhudhoo']);
        Island::create(['atoll' => Atoll::GAAFU_ALIFU, 'name' => 'Kolamaafushi']);
        Island::create(['atoll' => Atoll::GAAFU_ALIFU, 'name' => 'Kondey']);
        Island::create(['atoll' => Atoll::GAAFU_ALIFU, 'name' => 'Maamendhoo']);
        Island::create(['atoll' => Atoll::GAAFU_ALIFU, 'name' => 'Nilandhoo']);
        Island::create(['atoll' => Atoll::GAAFU_ALIFU, 'name' => 'Villingili']);

        Island::create(['atoll' => Atoll::GAAFU_DHAALU, 'name' => 'Fares-Maathodaa']);
        Island::create(['atoll' => Atoll::GAAFU_DHAALU, 'name' => 'Fiyoaree']);
        Island::create(['atoll' => Atoll::GAAFU_DHAALU, 'name' => 'Gaddhoo']);
        Island::create(['atoll' => Atoll::GAAFU_DHAALU, 'name' => 'Hoandeddhoo']);
        Island::create(['atoll' => Atoll::GAAFU_DHAALU, 'name' => 'Madaveli']);
        Island::create(['atoll' => Atoll::GAAFU_DHAALU, 'name' => 'Nadellaa']);
        Island::create(['atoll' => Atoll::GAAFU_DHAALU, 'name' => 'Rathafandhoo']);
        Island::create(['atoll' => Atoll::GAAFU_DHAALU, 'name' => 'Thinadhoo']);
        Island::create(['atoll' => Atoll::GAAFU_DHAALU, 'name' => 'Vaadhoo']);

        Island::create(['atoll' => Atoll::GNAVIVANI, 'name' => 'Fuvahmulah']);

        Island::create(['atoll' => Atoll::SEENU, 'name' => 'Hithadhoo']);
        Island::create(['atoll' => Atoll::SEENU, 'name' => 'Maradhoo']);
        Island::create(['atoll' => Atoll::SEENU, 'name' => 'Maradhoo-Feydhoo']);
        Island::create(['atoll' => Atoll::SEENU, 'name' => 'Feydhoo']);
        Island::create(['atoll' => Atoll::SEENU, 'name' => 'Hulhudhoo (Addu)']);
        Island::create(['atoll' => Atoll::SEENU, 'name' => 'Meedhoo (Addu)']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('islands');
    }
};
