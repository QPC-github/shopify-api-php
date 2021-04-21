<?php

declare(strict_types=1);

namespace ShopifyTest\Auth;

use Shopify\Auth\OAuthCookie;
use ShopifyTest\BaseTestCase;

final class OAuthCookieTest extends BaseTestCase
{
    public function testGetters()
    {
        $cookie = new OAuthCookie(
            name: 'Test cookie',
            value: 'Test value',
            expire: 1234,
            secure: true,
            httpOnly: true,
        );
        $this->assertEquals('Test cookie', $cookie->getName());
        $this->assertEquals('Test value', $cookie->getValue());
        $this->assertEquals(1234, $cookie->getExpire());
        $this->assertEquals(true, $cookie->isSecure());
        $this->assertEquals(true, $cookie->isHttpOnly());
    }
}