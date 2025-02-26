<?php

/**
 * This file is part of `prooph/event-store-client`.
 * (c) 2018-2021 Alexander Miertsch <kontakt@codeliner.ws>
 * (c) 2018-2021 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\EventStoreClient;

use Prooph\EventStore\EndPoint;

/**
 * Represents a source of cluster gossip
 *
 * @psalm-immutable
 */
class GossipSeed
{
    private EndPoint $endPoint;
    private string $hostHeader;

    public function __construct(EndPoint $endPoint, string $hostHeader = '')
    {
        $this->endPoint = $endPoint;
        $this->hostHeader = $hostHeader;
    }

    /** @psalm-pure */
    public function endPoint(): EndPoint
    {
        return $this->endPoint;
    }

    /** @psalm-pure */
    public function hostHeader(): string
    {
        return $this->hostHeader;
    }
}
