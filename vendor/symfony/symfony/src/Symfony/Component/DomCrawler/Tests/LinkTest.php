<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DomCrawler\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DomCrawler\Link;

class LinkTest extends TestCase
{
    /**
     * @expectedException \LogicException
     */
    public function testConstructorWithANonATag()
    {
        $dom = new \DOMDocument();
        $dom->loadHTML('<html><div><div></html>');

        new Link($dom->getElementsByTagName('div')->item(0), 'http://www.example.com/');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testConstructorWithAnInvalidCurrentUri()
    {
        $dom = new \DOMDocument();
        $dom->loadHTML('<html><a href="/foo">foo</a></html>');

        new Link($dom->getElementsByTagName('a')->item(0), 'example.com');
    }

    public function testGetNode()
    {
        $dom = new \DOMDocument();
        $dom->loadHTML('<html><a href="/foo">foo</a></html>');

        $node = $dom->getElementsByTagName('a')->item(0);
        $link = new Link($node, 'http://example.com/');

        $this->assertEquals($node, $link->getNode(), '->getNode() returns the node associated with the link');
    }

    public function testGetMethod()
    {
        $dom = new \DOMDocument();
        $dom->loadHTML('<html><a href="/foo">foo</a></html>');

        $node = $dom->getElementsByTagName('a')->item(0);
        $link = new Link($node, 'http://example.com/');

        $this->assertEquals('GET', $link->getMethod(), '->getMethod() returns the method of the link');

        $link = new Link($node, 'http://example.com/', 'post');
        $this->assertEquals('POST', $link->getMethod(), '->getMethod() returns the method of the link');
    }

    /**
     * @dataProvider getGetUriTests
     */
    public function testGetUri($url, $currentUri, $expected)
    {
        $dom = new \DOMDocument();
        $dom->loadHTML(sprintf('<html><a href="%s">foo</a></html>', $url));
        $link = new Link($dom->getElementsByTagName('a')->item(0), $currentUri);

        $this->assertEquals($expected, $link->getUri());
    }

    /**
     * @dataProvider getGetUriTests
     */
    public function testGetUriOnArea($url, $currentUri, $expected)
    {
        $dom = new \DOMDocument();
        $dom->loadHTML(sprintf('<html><map><area href="%s" /></map></html>', $url));
        $link = new Link($dom->getElementsByTagName('area')->item(0), $currentUri);

        $this->assertEquals($expected, $link->getUri());
    }

    /**
     * @dataProvider getGetUriTests
     */
    public function testGetUriOnLink($url, $currentUri, $expected)
    {
        $dom = new \DOMDocument();
        $dom->loadHTML(sprintf('<html><head><link href="%s" /></head></html>', $url));
        $link = new Link($dom->getElementsByTagName('link')->item(0), $currentUri);

        $this->assertEquals($expected, $link->getUri());
    }

    public function getGetUriTests()
    {
        return array(
            array('/foo', 'http://13.56.14.158/bar/foo/', 'http://13.56.14.158/foo'),
            array('/foo', 'http://13.56.14.158/bar/foo', 'http://13.56.14.158/foo'),
            array('
            /foo', 'http://13.56.14.158/bar/foo/', 'http://13.56.14.158/foo'),
            array('/foo
            ', 'http://13.56.14.158/bar/foo', 'http://13.56.14.158/foo'),

            array('foo', 'http://13.56.14.158/bar/foo/', 'http://13.56.14.158/bar/foo/foo'),
            array('foo', 'http://13.56.14.158/bar/foo', 'http://13.56.14.158/bar/foo'),

            array('', 'http://13.56.14.158/bar/', 'http://13.56.14.158/bar/'),
            array('#', 'http://13.56.14.158/bar/', 'http://13.56.14.158/bar/#'),
            array('#bar', 'http://13.56.14.158/bar?a=b', 'http://13.56.14.158/bar?a=b#bar'),
            array('#bar', 'http://13.56.14.158/bar/#foo', 'http://13.56.14.158/bar/#bar'),
            array('?a=b', 'http://13.56.14.158/bar#foo', 'http://13.56.14.158/bar?a=b'),
            array('?a=b', 'http://13.56.14.158/bar/', 'http://13.56.14.158/bar/?a=b'),

            array('http://login.foo.com/foo', 'http://13.56.14.158/bar/', 'http://login.foo.com/foo'),
            array('https://login.foo.com/foo', 'https://13.56.14.158/bar/', 'https://login.foo.com/foo'),
            array('mailto:foo@bar.com', 'http://13.56.14.158/foo', 'mailto:foo@bar.com'),

            // tests schema relative URL (issue #7169)
            array('//login.foo.com/foo', 'http://13.56.14.158/bar/', 'http://login.foo.com/foo'),
            array('//login.foo.com/foo', 'https://13.56.14.158/bar/', 'https://login.foo.com/foo'),

            array('?foo=2', 'http://13.56.14.158?foo=1', 'http://13.56.14.158?foo=2'),
            array('?foo=2', 'http://13.56.14.158/?foo=1', 'http://13.56.14.158/?foo=2'),
            array('?foo=2', 'http://13.56.14.158/bar?foo=1', 'http://13.56.14.158/bar?foo=2'),
            array('?foo=2', 'http://13.56.14.158/bar/?foo=1', 'http://13.56.14.158/bar/?foo=2'),
            array('?bar=2', 'http://13.56.14.158?foo=1', 'http://13.56.14.158?bar=2'),

            array('foo', 'http://login.foo.com/bar/baz?/query/string', 'http://login.foo.com/bar/foo'),

            array('.', 'http://13.56.14.158/foo/bar/baz', 'http://13.56.14.158/foo/bar/'),
            array('./', 'http://13.56.14.158/foo/bar/baz', 'http://13.56.14.158/foo/bar/'),
            array('./foo', 'http://13.56.14.158/foo/bar/baz', 'http://13.56.14.158/foo/bar/foo'),
            array('..', 'http://13.56.14.158/foo/bar/baz', 'http://13.56.14.158/foo/'),
            array('../', 'http://13.56.14.158/foo/bar/baz', 'http://13.56.14.158/foo/'),
            array('../foo', 'http://13.56.14.158/foo/bar/baz', 'http://13.56.14.158/foo/foo'),
            array('../..', 'http://13.56.14.158/foo/bar/baz', 'http://13.56.14.158/'),
            array('../../', 'http://13.56.14.158/foo/bar/baz', 'http://13.56.14.158/'),
            array('../../foo', 'http://13.56.14.158/foo/bar/baz', 'http://13.56.14.158/foo'),
            array('../../foo', 'http://13.56.14.158/bar/foo/', 'http://13.56.14.158/foo'),
            array('../bar/../../foo', 'http://13.56.14.158/bar/foo/', 'http://13.56.14.158/foo'),
            array('../bar/./../../foo', 'http://13.56.14.158/bar/foo/', 'http://13.56.14.158/foo'),
            array('../../', 'http://13.56.14.158/', 'http://13.56.14.158/'),
            array('../../', 'http://13.56.14.158', 'http://13.56.14.158/'),

            array('/foo', 'http://13.56.14.158?bar=1', 'http://13.56.14.158/foo'),
            array('/foo', 'http://13.56.14.158#bar', 'http://13.56.14.158/foo'),
            array('/foo', 'file:///', 'file:///foo'),
            array('/foo', 'file:///bar/baz', 'file:///foo'),
            array('foo', 'file:///', 'file:///foo'),
            array('foo', 'file:///bar/baz', 'file:///bar/foo'),
        );
    }
}
