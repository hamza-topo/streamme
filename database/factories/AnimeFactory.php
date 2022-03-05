<?php

namespace Database\Factories;

use App\Enums\AnimeStatus;
use App\Models\Anime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anime>
 */
class AnimeFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Anime::class;

    public function definition()
    {
        $title = $this->faker->title();
        $qualities = ["HD", "MP4", "4K"];
        $status = [AnimeStatus::PENDING,AnimeStatus::FINISHED];

        return [
            'title'=>$title,
            'slug'=>slugify($title),
            'quality'=>array_rand($qualities,1),
            'description'=>$this->faker->text(),
            'poster'=>$this->faker->name(),
            'show_in'=>'',
            'status'=>array_rand($status,1),
            'published_at'=>$this->faker->date(),
        ];
    }
}
