<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'header' => "We are United Engineering Bd",
            'brief' => "United Engineering Provided all types of FIRE & ELECTRICAL Safety solutions, Civil And architect.",
            'mission' => "United Engineering has customized services which helps Bangladeshi readymade Garments Manufacturers to Comply with ACCORD & ALLIANCE. During this time ALL FIRE SAFETY, ELECTRICAL SAFETY CIVIL (DEA, EA) & Micro control have become specialists in planned preventative maintenance as well as Installations. We will continue working hard to build long time trusting relationship with our customers. We aim for the highest standards of business excellence by employing & supporting motivated, flexible and focused staff and maintaining high level of fairness & honesty with our customers",
            'vision' => "The reasons that made us change for the better are many: what we want our stakeholders to think of us, the values that have marked our long history, our continuous investment in research, our unyielding commitment to our customers and the creativity that we put everyday into designing and building our services.",
            'why' => "United Engineering has customized services which helps Bangladeshi readymade Garments Manufacturers to Comply with ACCORD & ALLIANCE. During this time FIRE SAFETY, ELECTRICAL SAFETY & Micro control have become specialists in planned preventative maintenance as well as Installations. We will continue working hard to build long time trusting relationship with our customers. We aim for the highest standards of business excellence by employing & supporting motivated, flexible and focused staff and maintaining high level of fairness & honesty with our customers.",
        ]);
    }
}
