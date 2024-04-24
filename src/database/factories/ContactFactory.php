<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
   * The name of the factory's corresponding model.
   *
   *
   */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'gender' => $this->faker->randomElement(['男性','女性','その他']),
            'email' => $this->faker->safeEmail(),
            'tell1' => $this->faker->phoneNumber(3),
            'tell2' => $this->faker->phoneNumber(4),
            'tell3' => $this->faker->phoneNumber(4),
            'address' => $this->faker->prefecture(),
            'building' => $this->faker->streetAddress(),
            'select' => $this->faker->randomElement(['商品のお届けについて','商品の交換について','商品トラブル','ショップへのお問い合わせ','その他']),
            'detail' => $this->faker->realText(120),
        ];
    }
}
