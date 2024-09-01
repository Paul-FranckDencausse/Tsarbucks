<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomepageTest extends WebTestCase
{
    public function testHomepageIsSuccessful(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Bienvenue chez TsarBucks');
        $this->assertSelectorTextContains('p', 'Découvrez les meilleurs salons de cafés près de chez vous');
        $this->assertSelectorTextContains('h2', 'Le Concept Tsarbucks');
        $this->assertSelectorTextContains('h2', 'Témoignages');
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        restore_exception_handler();
        restore_error_handler();
    }
}
