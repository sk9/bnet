<?php

declare(strict_types=1);

/*
 * This file is part of boo/bnet.
 *
 * (c) Jonas Stendahl <jonas@stendahl.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Boo\BattleNet\Tests\Apis\Warcraft;

use Boo\BattleNet\Apis\Warcraft\AuctionApi;
use Boo\BattleNet\Tests\Apis\AbstractApiTest;

/**
 * DO NOT EDIT. This file was auto-generated based on the Battle.net API docs.
 *
 * @internal
 * @covers \Boo\BattleNet\Apis\AbstractApi
 * @covers \Boo\BattleNet\Apis\Warcraft\AuctionApi
 */
final class AuctionApiTest extends AbstractApiTest
{
    /**
     * @vcr Warcraft_AuctionApi_GetAuctionDataStatus.json
     */
    public function testGetAuctionDataStatus(): void
    {
        $client = $this->getClient();
        $api = new AuctionApi($this->getRequestFactory(), $this->getRegion(), $this->getApiKey());
        $request = $api->getAuctionDataStatus('draenor');

        $this->assertSame('GET', $request->getMethod());
        $this->assertSame('application/json', $request->getHeaderLine('Accept'));
        $this->assertSame('gzip', $request->getHeaderLine('Accept-Encoding'));

        $response = $client->send($request);

        $this->assertSame(200, $response->getStatusCode());
    }
}
