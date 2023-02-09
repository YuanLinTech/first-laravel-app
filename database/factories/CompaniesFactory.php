<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\companies>
 */
class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /* "name" => "Google",
            "email" => Str::random(10).'@google.com',
            "logo" => "https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg",
            "website" => "https://www.google.com/",
            "headquarters" => "Mountain View, California, U.S." */

            /* "name" => "Amazon",
            "email" => Str::random(10).'@amazon.com',
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg",
            "website" => "https://www.amazon.com/",
            "headquarters" => "Seattle, Washington and Arlington, Virginia, U.S." */

            "name" => "Netflix",
            "email" => Str::random(10).'@netflix.com',
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg",
            "website" => "https://www.netflix.com/",
            "headquarters" => "Los Gatos, California, U.S."
        ];
    }
}
