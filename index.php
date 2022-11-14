<?php

// cartoon caracter can walk and jump
// based on their type they make different sounds
// The Simpsons have their catch phrase, as well as Loonie Tunes and Disney characters
// SchoolKids are type of Simpsons, Rabbits are part of Loonie Tunes 
// and princesses are part of the Disneys
// Learning is reading and memorizing
// Playing is running
// Going back to life is standingUp and shinning
// SchoolKids can play and learn, Rabits can play, princesses can do all
// make Bart, Bugs Bunny and Cinderella as instances
interface Learning
{
    function reading();
    function memorizing();
}

interface Playing
{
    function running();
}
interface GoingBackToLife
{
    function standingUp();
    function shining();
}

abstract class CartoonCharacter
{

    function walk()
    {
        echo "Im walking";
    }
    function jump()
    {
        echo "Jump high...";
    }
    abstract function makeASound();
}

class TheSimpsons extends CartoonCharacter implements Playing, Learning
{
    private $name;
    private array $catchPhrase = ["Ay,Caramba!", "Ouch!"];
    function __construct($name)
    {
        $this->name = $name;
    }
    public function makeASound()
    {
        if ($this->name === 'Bart') {
            echo $this->name . " : " . $this->catchPhrase[0];
        } else if ($this->name === "Homer") {
            echo $this->name . " : " . $this->catchPhrase[1];
        } else {
            echo "There is no catch phrase...";
        }
    }

    public function running()
    {
        echo "We can run, but we are smart too!";
    }
    public function reading()
    {
        echo "We are smart and playfull.";
    }
    public function memorizing()
    {
        echo "We are smart and playfull.";
    }
}
class LooneyTunes extends CartoonCharacter implements Playing
{
    private $name;
    private array $catchPhrase = ["What's up, doc?", "That's all, folks.", "TAZ HUNGRY!"];
    function __construct($name)
    {
        $this->name = $name;
    }
    public function makeASound()
    {
        if ($this->name === 'Bugs Bunny') {
            echo $this->name . " : " . $this->catchPhrase[0];
        } else if ($this->name === "Porky Pig") {
            echo $this->name . " : " . $this->catchPhrase[1];
        } else if ($this->name === "The Tasmanian Devil") {
            echo $this->name . " : " . $this->catchPhrase[2];
        } else {
            echo "There is no catch phrase...";
        }
    }
    public function running()
    {
        echo "We can run!";
    }
}

class DisneyCharacters extends CartoonCharacter implements Playing, Learning, GoingBackToLife
{
    private $name;
    private $nothingIsImpossible = "There's nothing we can't do!";
    private array $catchPhrase = ["They can't order me to stop dreaming.", "If you dream a thing more than once, it's sure to come true.", "Come on, perk up. Won't you smile for me?"];
    function __construct($name)
    {
        $this->name = $name;
    }
    public function makeASound()
    {
        if ($this->name === 'Cinderella') {
            echo $this->name . " : " . $this->catchPhrase[0];
        } else if ($this->name === "Aurora") {
            echo $this->name . " : " . $this->catchPhrase[1];
        } else if ($this->name === "Snow White") {
            echo $this->name . " : " . $this->catchPhrase[2];
        } else {
            echo "There is no catch phrase...";
        }
    }
    public function running()
    {
        echo $this->nothingIsImpossible;
    }

    public function reading()
    {
        echo $this->nothingIsImpossible;
    }

    public function memorizing()
    {
        echo $this->nothingIsImpossible;
    }

    public function standingUp()
    {
        echo $this->nothingIsImpossible;
    }

    public function shining()
    {
        echo $this->nothingIsImpossible;
    }
}



/************************Simpsons********************************/
echo '<h1>The Simpsons</h1>';
$homer = new TheSimpsons('Homer');
$homer->makeASound();
echo '<hr>';
$homer->running();
echo "<hr>";

$bart = new TheSimpsons('Bart');
$bart->makeASound();
echo '<hr>';
/************************Looney********************************/
echo '<h1>Looney Tunes</h1>';
$bugsBunny = new LooneyTunes('Bugs Bunny');
$bugsBunny->makeASound();
echo '<hr>';
$bugsBunny->running();
echo "<hr>";

$tasmanian = new LooneyTunes('The Tasmanian Devil');
$tasmanian->makeASound();
/************************Disney********************************/
echo '<h1>Disney</h1>';
$cinderella = new DisneyCharacters('Cinderella');
$cinderella->makeASound();
echo '<hr>';
$cinderella->running();
echo "<hr>";

$snowWhite = new DisneyCharacters('Snow White');
$snowWhite->makeASound();
echo '<hr>';

$randomChar = new DisneyCharacters('ThereIsNoChar');
$randomChar->makeASound();
echo '<hr>';
