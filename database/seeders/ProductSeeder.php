<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // DB::table('products')->insert([
        //     'name' => "100 Plus Can - Original (325ml)",
        //     'image_path' => 'https://www.dropee.com/product_uploads/photos/0d2668533bc097897b93e4b85b12db6cc68714a1.jpg',
        //     'desc' => "Isotonic beverage",
        //     'overview' => "100plus is a brand of isotonic sports drink manufactured by Fraser and Neave Limited, a global food and beverage conglomerate headquartered in Singapore. It was created and launched in 1983 in both Malaysia and Singapore with the name commemorates 100 years of Fraser and Neave in Asia.",
        //     'product_category_id' => 1,
        // ]);

        DB::table('products')->insert([
            'name' => "Chicken wings (250g)",
            'image_path' => 'https://farmersfreshmeat.com/wp-content/uploads/2019/02/Chicken-Wings-1b-scaled.jpg',
            'desc' => "Meat - Chicken",
            'overview' => "Chicken wings have become ubiquitous with sports and drinking culture, but they're well-worth your time (and appetite) on any occasion. They're simple, easy to cook, full of protein, budget-friendly and a fun, hearty finger food for parties and weeknight dinners alike. Try them baked, fried, smoked, grilled or made into soup. No matter how you eat chicken wings, they're a versatile, delicious ingredient worth learning more about.There are three types of wings you'll find at the market: the whole wing, the flat, and the drumette (the latter being the part that looks like a mini-drumstick). When you see these two parts together, it's easy to imagine the wing of a bird. Before the wing is broken apart, the drumette comes attached to the breast. Chicken wings also have a wing tip, but those aren't often included in sectioned-off bits of the cut .Decide how you want your wings before you prep. For a dry rub, make sure the meat has been dried with paper towels first to allow the mix to adhere to the skin. Wings can also be marinated or brined before cooking to seal in moisture and flavor.
            Fried wings have a huge following, and cooking them in a deep-fryer is an easy way to get the job done. Roasting or baking in the oven is a simple way to cook them (roast on top of a baking rack for crisper skin), and for extra flavor, chicken wings can be smoked or grilled.
            Since wings have plenty of bone, connective tissue and fat, they make excellent soup and stock. The cooked wings can be removed from the soup, stripped of their meat and made into chicken salad.",
            'product_category_id' => 10,
        ]);
        DB::table('products')->insert([
            'name' => "Chicken breast (250g)",
            'image_path' => 'https://thumbs.dreamstime.com/b/raw-chicken-fillet-white-background-chicken-breast-isolated-clipping-path-raw-chicken-fillet-white-background-chicken-125495894.jpg',
            'desc' => "Meat - Chicken",
            'overview' => "The chicken breast is a lean cut of meat taken from the pectoral muscle on the underside of the chicken. Each whole chicken contains one chicken breast with two halves, which are typically separated during the butchering process and sold as individual breasts. Given its desirable white meat and health benefits, boneless chicken breast meat is the most expensive cut of chicken in comparison to chicken thighs, wings, and drumsticks. This versatile cut can be grilled, baked, roasted, fried, barbecued, and boiled in countless ways. No matter the cooking method, chicken should always be handled with care, and the areas, utensils, and hands that have been in contact with the raw chicken should be washed thoroughly with soap and hot water to prevent food safety risks.",
            'product_category_id' => 10,
        ]);
        DB::table('products')->insert([
            'name' => "Chicken drumsticks (250g)",
            'image_path' => 'https://www.pngitem.com/pimgs/m/243-2431425_chicken-drumstick-legs-png-png-download-raw-chicken.png',
            'desc' => "Meat - Chicken",
            'overview' => "The drumstick is the lower, meaty leg portion of the bird, such as a chicken, turkey or duck, which exists from the knee joint down to almost the foot. The drumstick is different from the drummette, which is the part of the bird's wing existing between the shoulder joint and the elbow joint. The drumstick is almost always sold as a bone-in piece of meat for roasting, stewing, grilling, or baking. The drumstick is a part of the leg of the bird, which consists of the drumstick and the thigh. Meat on the drumstick will always be referred to as dark meat, since the appearance is dark tan to clay in color.",
            'product_category_id' => 10,
        ]);
        DB::table('products')->insert([
            'name' => "Chicken carcass (250g)",
            'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPCZeJBe65Qnw2tujsh_D4CXtGtPa_cGknKYpUoQj23ZpGXZw-6LqYOhGffV0QwpIGCc0&usqp=CAU',
            'desc' => "Meat - Chicken",
            'overview' => "Chicken carcass is basically the bones of a chicken. Though they do not contain much meat to it, they are still a good source of nutrition as it has various amino acids, minerals, and collagen.It's good for boiled to be used for soup/broth",
            'product_category_id' => 10,
        ]);
        DB::table('products')->insert([
            'name' => "Chicken feet(250g)",
            'image_path' => 'https://thumbs.dreamstime.com/b/raw-chicken-feet-isolated-white-background-raw-chicken-feet-116989078.jpg',
            'desc' => "Meat - Chicken",
            'overview' => "Chicken feet consist of skin, cartilage, tendons, and bones. Even without providing much meat, they're high in collagen — the most abundant protein in your body. This collagen content may help relieve joint pain, aid skin health, and prevent bone loss. Chicken feet often cook with ginger, sugar, green onions, soy sauce, and so on.",
            'product_category_id' => 10,
        ]);
        DB::table('products')->insert([
            'name' => "Potato (200g)",
            'image_path' => 'https://www.macmillandictionary.com/external/slideshow/full/141151_full.jpg',
            'desc' => "Botanically vegetable",
            'overview' => "Potato is a botanically vegetable. Potatoes, also know as aloo or batata, are a key source of carbohydrates and is one of the most heavily used vegetable in Indian cooking. It is one of the most comfortable food item, which is highly used in various different ways such as mashed, boiled, chopped, cubed, grated, sliced, peeled, chunks, pieces, baked and roasted. Potatoes are a good source of Vitamin B6, C, Deitary Fiber, Potassium, Magnesium and Antioxidants.",
            'product_category_id' => 8,
        ]);
        DB::table('products')->insert([
            'name' => "Tomato (200g)",
            'image_path' => 'https://cdn.shopify.com/s/files/1/0244/4961/3905/products/tomato@2x.jpg?v=1576807420',
            'desc' => "Tomatoes are fruits that are considered vegetables by nutritionists",
            'overview' => "Tomato is a supplement thick superfood that offers advantage to a scope of real systems.It has numerous little seeds. It is extremely scrumptious. It is likewise useful for wellbeing. Most tomatoes are red. They are a good source of Vitamin A, C, K, Iron, Folate and Potassium. They are used in salads, eggs, curries, soups and other dishes.",
            'product_category_id' => 8,
        ]);
        DB::table('products')->insert([
            'name' => "Onion (200g)",
            'image_path' => 'https://www.freshpoint.com/wp-content/uploads/commodity-red-onion.jpg',
            'desc' => "Vegetable - Alliums",
            'overview' => "Onion is a common vegetable used in virtually every type of cuisine and cooking in the world. Onions can fill your kitchen with a thick spicy aroma. They are very versatile and can be used fresh, cooked or as a garnish. Onions are an essential part of everyday cooking in India and are found in many local dishes and are the base for curries. They are a good source of manganese, copper, Vitamin B6, Vitamin C and dietary fibers.",
            'product_category_id' => 8,
        ]);
        DB::table('products')->insert([
            'name' => "Cauliflower (200g)",
            'image_path' => 'https://solidstarts.com/wp-content/uploads/cauliflower_edited-scaled.jpg',
            'desc' => "Cauliflower is a cruciferous vegetable that is a significant source of nutrients.",
            'overview' => "Cauliflower is made up of tightly bound clusters of soft, crumbly, sweet cauliflower florets that form a dense head. Resembling a classic tree, the florets are attached to a central edible white trunk which is firm and tender.Hand plucked, Fresh and tender, tightly bound clusters of soft, crumbly, sweet cauliflower florets that form a dense head. Cauliflower is low in fat. It is high in Vitamin C and also contains moderate levels of Vitamin K. It can be cooked with potatoes or used in soups, manchurian, salad and parathas.",
            'product_category_id' => 8,
        ]);
        DB::table('products')->insert([
            'name' => "Bhendi (200g)",
            'image_path' => 'https://zenxin.com.my/wp-content/uploads/2020/10/Ladies-Finger-2.jpg',
            'desc' => "Vegetable. A green colored oblong shaped vegetable, tapering at the end with tiny seeds inside.",
            'overview' => "Bhendi is also known as Ladies finger. Ladies finger are green finger-like vegetables and are highly healthful. It is an essential vegetable used in Indian cuisine for mouth-watering recipes. It tastes mild and slightly grassy. It is also identified for being high in antioxidants and an excellent source of potassium, calcium and prebiotic fiber. It is used in curries, sambhar, can be stuffed or fried or mixed with potatoes.",
            'product_category_id' => 8,
        ]);
        DB::table('products')->insert([
            'name' => "Spinach (200g)",
            'image_path' => 'https://images.heb.com/is/image/HEBGrocery/000319108',
            'desc' => "Leafy Vegetable - Spinach, Spinacia oleracea / Chenopodiaceae.",
            'overview' => "Spinach is a very versatile vegetable and can be eaten raw or cooked. Spinach is known as Palak in India. The vibrant-looking palak leaves are not only more appealing to the eye but more nourishing as well. It is a good source of Vitamin A, C, Protein, Potassium and Calcium. It can be used to make curries like palak paneer, soups or can be used in salads. ",
            'product_category_id' => 8,
        ]);
        DB::table('products')->insert([
            'name' => "Curry leaf (100g)",
            'image_path' => 'https://aptsomart.com/wp-content/uploads/2020/01/fresh-curry-leaves_aptsomart.jpg',
            'desc' => "Leafy vegetable  - Curry leaves are small in size and long, slender, and oval in shape narrowing to a point, averaging 2-4 centimeters in length and 1-2 centimeters in width.",
            'overview' => "The curry leaf is a very common Indian herb. It is dark green in color and add taste to dishes. It is an essential part of most Indian main course dishes. The leaves have a slightly pungent, bitter and feebly acidic taste, and they retain their flavour and other qualities even after drying. Many Southeast Asian cuisines also show a fondness for this herb. It is filled with nutritional benefits. Usually cook with curry dishes such as curry chicken, curry fish, or curry vegetables.",
            'product_category_id' => 8,
        ]);
        DB::table('products')->insert([
            'name' => "Eggs (10 Eggs)",
            'image_path' => 'https://keser.no/wp-content/uploads/2020/03/EGG-10-STK-BRETT-hvit-large.jpg',
            'desc' => "Chicken Eggs",
            'overview' => "Eggs are a very good source of inexpensive, high quality protein. Aids in weight loss. Helps in improve heart health. Beneficial in improving cognitive health. Aids in growth and development of body maintains healthy hormonal functioning of thyroid. Eggs are incredibly nutritious. Eggs contain lutein and zeaxanthin, antioxidants that have major benefits for eye health. Eggs are among the most versatile foods. Consuming boiled eggs every day gives a good long-term impact on brain health.",
            'product_category_id' => 6,
        ]);
    }
}
