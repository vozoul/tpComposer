<?php
require __DIR__ . '/vendor/autoload.php';

use App\Animals\{
    BubbleFish, CatFish, ClownFish, Dove, Elephant, Fish, Parrot, Whale, Zebra
};

$animals = [
    new Fish('raymond'),
    new Fish('roger'),
    new Fish('antoine'),
    new Fish('simon'),
    new Fish('herve'),
    new BubbleFish('jose'),
    new BubbleFish('monique'),
    new BubbleFish('suzanne'),
    new CatFish('grisette'),
    new CatFish('sylvie'),
    new ClownFish('jennie'),
    new Elephant('arthur'),
    new Elephant('john'),
    new Zebra('sultan'),
    new Parrot('jim'),
    new Parrot('noam'),
    new Parrot('coco'),
    new Parrot('kiki'),
    new Parrot('titus'),
    new Parrot('flip'),
    new Parrot('flap'),
    new Parrot('flop'),
    new Parrot('tic'),
    new Parrot('tac'),
    new Dove('toc'),
    new Dove('twity')
];

