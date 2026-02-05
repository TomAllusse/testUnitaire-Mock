<?php

namespace App\Entities;

class Boutique
{
    private $banque;

    public function __construct($banque)
    {
        $this->banque = $banque;
    }

    public function payer($montant, $carte)
    {
        if ($this->banque->verifierPaiement($carte)) {
            return "Paiement réussi de $montant euros.";
        } else {
            return "Paiement refusé.";
        }
    }
}