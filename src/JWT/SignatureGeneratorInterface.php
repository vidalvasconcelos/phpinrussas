<?php

declare(strict_types=1);

namespace App\JWT;

interface SignatureGeneratorInterface
{
    public const KEY = 'rapadura';

    public function generate(string $header, string $payload): string;
}