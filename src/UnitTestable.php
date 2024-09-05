<?php


class DataSource {

    public $data = [

        'Albert Einstein' => [
            '"Insanity: doing the same thing over and over again and expecting different results."',
            '"Imagination is more important than knowledge."',
            '"Two things are infinite: the universe and human stupidity; and I\'m not sure about the universe."'
        ],

        'Pope John Paul II' => [
            '"Do not abandon yourselves to despair. We are the Easter people and hallelujah is our song."',
            '"The future starts today, not tomorrow."',
            '"As the family goes, so goes the nation and so goes the whole world in which we live."'
        ],

        'Bill Gates' => [
            '"Success is a lousy teacher. It seduces smart people into thinking they can\'t lose."',
            '"Your most unhappy customers are your greatest source of learning."',
            '"It\'s fine to celebrate success but it is more important to heed the lessons of failure."'
        ]
    ];

    public function fetchQuote($person)
    {
        $random = mt_rand(0,2);
        return $this->data[$person][$random];
    }
}

class RandomNumber {

    public function getRandomNumber($a, $b)
    {
        return mt_rand($a, $b);
    }
}

class UnitTestable {

    protected $data_source;
    protected $random_number;

    public function __construct(DataSource $datasource)
    {
        $this->data_source = $datasource;
    }

    public function setRandomNumber($random_number)
    {
        $this->random_number = $random_number;
    }


    public function getRandomQoute()
    {
        $body = 'Today the quote from ';

        $random = $this->random_number;
        if($random == 0) $body .= 'one the famous physicist '.$person='Albert Einstein';
        elseif($random == 1) $body .= 'head of the Catholic Church and sovereign of the Vatican City '.$person='Pope John Paul II';
        elseif($random == 2) $body .= 'the co-founder of Microsoft Corporation '.$person='Bill Gates';

        $quotes = $this->data_source;
        $quote = $quotes->fetchQuote($person);

        return $body.': '.$quote;
    }

}

// example usage:
$obj = new UnitTestable( (new DataSource()) );
$obj->setRandomNumber( (new RandomNumber())->getRandomNumber(0,2) );
echo $obj->getRandomQoute();
