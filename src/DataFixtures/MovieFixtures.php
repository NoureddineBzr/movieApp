<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie ->setTitle('The dark knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is the description of the dark knight');
        $movie ->setImagePath('https://cdn.pixabay.com/photo/2024/06/22/16/55/ai-generated-8846672_1280.jpg');
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2 ->setTitle('Avengers:EndGame');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('This is the description of Avenger: end game');
        $movie2 ->setImagePath('https://cdn.pixabay.com/photo/2020/06/02/05/25/tarantula-5249451_1280.png');
        $manager->persist($movie2);

        $manager->flush();


    }
}
