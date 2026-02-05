<?php

use PHPUnit\Framework\TestCase;
use App\Entities\Boutique;

class BoutiqueTest extends TestCase
{
    public function testPaiementReussi()
    {
        $fausseBanque = $this->createMock(Banque::class);
        $fausseBanque->method('verifierPaiement')->willReturn(true);

        $boutique = new Boutique($fausseBanque);

        $reponse = $boutique->payer(100, '1290 1232 1233 1234');

        $this->assertEquals("Paiement réussi de 100 euros.", $reponse);
    }
}