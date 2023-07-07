<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name" => "Laptops", "slug" => "laptops"],
            ["name" => "Desktops", "slug" => "desktops"],
            ["name" => "Phones", "slug" => "phones"],
            ["name" => "Tablets", "slug" => "tablets"],
            ["name" => "TVs", "slug" => "tvs"],
            ["name" => "Cameras", "slug" => "cameras"],
            ["name" => "Gaming Laptops", "slug" => "gaming-laptops"],
            ["name" => "Ultrabooks", "slug" => "ultrabooks"],
            ["name" => "Business Laptops", "slug" => "business-laptops"],
            ["name" => "2-in-1 Laptops", "slug" => "2-in-1-laptops"],
            ["name" => "Budget Laptops", "slug" => "budget-laptops"],
            ["name" => "High-Performance Laptops", "slug" => "high-performance-laptops"],
            ["name" => "Gaming Desktops", "slug" => "gaming-desktops"],
            ["name" => "All-in-One Desktops", "slug" => "all-in-one-desktops"],
            ["name" => "Workstations", "slug" => "workstations"],
            ["name" => "Mini PCs", "slug" => "mini-pcs"],
            ["name" => "Gaming Monitors", "slug" => "gaming-monitors"],
            ["name" => "Android Phones", "slug" => "android-phones"],
            ["name" => "iPhones", "slug" => "iphones"],
            ["name" => "Budget Phones", "slug" => "budget-phones"],
            ["name" => "Flagship Phones", "slug" => "flagship-phones"],
            ["name" => "Dual SIM Phones", "slug" => "dual-sim-phones"],
            ["name" => "5G Phones", "slug" => "5g-phones"],
            ["name" => "iPad", "slug" => "ipad"],
            ["name" => "Android Tablets", "slug" => "android-tablets"],
            ["name" => "Windows Tablets", "slug" => "windows-tablets"],
            ["name" => "2-in-1 Tablets", "slug" => "2-in-1-tablets"],
            ["name" => "Kids Tablets", "slug" => "kids-tablets"],
            ["name" => "Drawing Tablets", "slug" => "drawing-tablets"],
            ["name" => "Smart TVs", "slug" => "smart-tvs"],
            ["name" => "4K TVs", "slug" => "4k-tvs"],
            ["name" => "OLED TVs", "slug" => "oled-tvs"],
            ["name" => "QLED TVs", "slug" => "qled-tvs"],
            ["name" => "Curved TVs", "slug" => "curved-tvs"],
            ["name" => "Budget TVs", "slug" => "budget-tvs"],
            ["name" => "DSLR Cameras", "slug" => "dslr-cameras"],
            ["name" => "Mirrorless Cameras", "slug" => "mirrorless-cameras"],
            ["name" => "Point-and-Shoot Cameras", "slug" => "point-and-shoot-cameras"],
            ["name" => "Action Cameras", "slug" => "action-cameras"],
            ["name" => "Full-Frame Cameras", "slug" => "full-frame-cameras"],
            ["name" => "Compact Cameras", "slug" => "compact-cameras"],
        ];

        foreach ($data as $item) {
            //
            Tag::create([
                'name' => $item['name'],
                'slug' => $item['slug']
            ]);
        }
    }
}
