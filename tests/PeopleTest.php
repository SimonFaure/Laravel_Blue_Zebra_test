<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PeopleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testVisitAdd()
    {
        $this->visit('/')
             ->see('personnes')
             ->click('Ajouter')
             ->seePageIs('/ajouter');
    }


   public function testCreateIndividual()
    {
        $this->visit('/ajouter')
            ->type('Matt', 'firstName')
            ->type('Broad', 'lastName')
            ->type('2012/12/02', 'birthday')
            ->type('broad@gmail.com', 'email')
            ->press('Ajouter')
            ->seeInDatabase('peoples', [
           'email'     => 'broad@gmail.com',
           'firstName' => 'Matt',
           'lastName'  => 'Broad',
           'birthday'  => '2012/12/02'
       ]);
    }

    public function testUpdateIndividual()
    {
        $this->visit('/modify?id=52')
            ->type('Alexander', 'firstName')
            ->type('Poutchkin', 'lastName')
            ->type('2012/12/02', 'birthday')
            ->type('pout@gmail.com', 'email')
            ->press('Modifier')
            ->seeInDatabase('peoples', [
                'email'     => 'pout@gmail.com',
                'firstName' => 'Alexander',
                'lastName'  => 'Poutchkin',
                'birthday'  => '2012/12/02'
            ]);
    }
}
