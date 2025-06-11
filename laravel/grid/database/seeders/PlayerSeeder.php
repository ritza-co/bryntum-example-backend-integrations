<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $playersData = [
            [
                'name'            => 'Dan Jones',
                'city'            => 'Los Angeles',
                'team'            => 'Stockholm Eagles',
                'score'           => 430,
                'percentageWins'  => 30,
            ],
            [
                'name'            => 'Harry Smith',
                'city'            => 'Dubai',
                'team'            => 'Paris Lions',
                'score'           => 120,
                'percentageWins'  => 50
            ],
            [
                'name'            => 'Peter Holmes',
                'city'            => 'Stockholm',
                'team'            => 'Washington Ducks',
                'score'           => 90,
                'percentageWins'  => 55
            ],
            [
                'name'            => 'Jacob Reese',
                'city'            => 'Moscow',
                'team'            => 'Washington Ducks',
                'score'           => 500,
                'percentageWins'  => 43
            ],
            [
                'name'            => 'Gilles Girard',
                'city'            => 'Paris',
                'team'            => 'Moscow Bears',
                'score'           => 800,
                'percentageWins'  => 88
            ],
            [
                'name'            => 'Dan Jacobsen',
                'city'            => 'Moscow',
                'team'            => 'Paris Lions',
                'score'           => 920,
                'percentageWins'  => 93
            ],
            [
                'name'            => 'Walter Cruise',
                'city'            => 'Barcelona',
                'team'            => 'Stockholm Eagles',
                'score'           => 100,
                'percentageWins'  => 44
            ],
            [
                'name'            => 'Bill Nielsen',
                'city'            => 'Madrid',
                'team'            => 'Stockholm Eagles',
                'score'           => 750,
                'percentageWins'  => 55
            ],
            [
                'name'            => 'Gareth Freeman',
                'city'            => 'Chicago',
                'team'            => 'Moscow Bears',
                'score'           => 310,
                'percentageWins'  => 33
            ],
            [
                'name'            => 'Ben Newman',
                'city'            => 'Los Angeles',
                'team'            => 'Washington Ducks',
                'score'           => 670,
                'percentageWins'  => 66
            ],
            [
                'name'            => 'Garry Miller',
                'city'            => 'Paris',
                'team'            => 'Paris Lions',
                'score'           => 820,
                'percentageWins'  => 80
            ],
            [
                'name'            => 'Jim Knowles',
                'city'            => 'Dubai',
                'team'            => 'Stockholm Eagles',
                'score'           => 440,
                'percentageWins'  => 53
            ],
            [
                'name'            => 'Victor Reddy',
                'city'            => 'London',
                'team'            => 'Moscow Bears',
                'score'           => 960,
                'percentageWins'  => 93
            ],
            [
                'name'            => 'Bradley May',
                'city'            => 'Los Angeles',
                'team'            => 'Stockholm Eagles',
                'score'           => 200,
                'percentageWins'  => 40
            ],
            [
                'name'            => 'Wesley Malone',
                'city'            => 'Berlin',
                'team'            => 'Washington Ducks',
                'score'           => 760,
                'percentageWins'  => 29
            ]
        ];

        foreach ($playersData as $index => $player) {
            $playersData[$index]['parentIndex'] = $index;
        }

        Player::insert($playersData);
    }
}
