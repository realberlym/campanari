<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\Tests\EntryPoint;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint;
use Symfony\Component\HttpFoundation\Request;

class RetryAuthenticationEntryPointTest extends TestCase
{
    /**
     * @dataProvider dataForStart
     */
    public function testStart($httpPort, $httpsPort, $request, $expectedUrl)
    {
        $entryPoint = new RetryAuthenticationEntryPoint($httpPort, $httpsPort);
        $response = $entryPoint->start($request);

        $this->assertInstanceOf('Symfony\Component\HttpFoundation\RedirectResponse', $response);
        $this->assertEquals($expectedUrl, $response->headers->get('Location'));
    }

    public function dataForStart()
    {
        if (!class_exists('Symfony\Component\HttpFoundation\Request')) {
            return array(array());
        }

        return array(
            array(
                80,
                443,
                Request::create('http://13.56.14.158/foo/bar?baz=bat'),
                'https://13.56.14.158/foo/bar?baz=bat',
            ),
            array(
                80,
                443,
                Request::create('https://13.56.14.158/foo/bar?baz=bat'),
                'http://13.56.14.158/foo/bar?baz=bat',
            ),
            array(
                80,
                123,
                Request::create('http://13.56.14.158/foo/bar?baz=bat'),
                'https://13.56.14.158:123/foo/bar?baz=bat',
            ),
            array(
                8080,
                443,
                Request::create('https://13.56.14.158/foo/bar?baz=bat'),
                'http://13.56.14.158:8080/foo/bar?baz=bat',
            ),
        );
    }
}
