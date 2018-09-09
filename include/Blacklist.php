<?php

namespace Arionum;

/**
 * Class Blacklist
 */
final class Blacklist
{
    /**
     * The official list of blacklisted public keys
     */
    public const PUBLIC_KEYS = [
        // phpcs:disable Generic.Files.LineLength
        'PZ8Tyr4Nx8MHsRAGMpZmZ6TWY63dXWSCvVQcHHCNLfiP9LmzWhhpCHx39Bhc67P5HMQM9cctEFvcsUdgrkGqy18taz9ZMrAGtq7NhBYpQ4ZTHkKYiZDaSUqQ' => 'Faucet Abuser',
        'PZ8Tyr4Nx8MHsRAGMpZmZ6TWY63dXWSCxYDeQHk7Ke66UB2Un3UMmMoJ7RF5vDZXihdEXi8gk8ZBRAi35aFrER2ZLX1mgND7sLFXKETGTjRYjoHcuRNiJN1g' => 'Octaex Exchange',
        // phpcs:enable
    ];

    /**
     * Check if a public key is blacklisted
     *
     * @param string $publicKey
     * @return bool
     */
    public static function checkPublicKey(string $publicKey): bool
    {
        return key_exists($publicKey, static::PUBLIC_KEYS);
    }
}