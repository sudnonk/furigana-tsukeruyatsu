<?php

    namespace ConvertTest;

    use sudnonk\FuriganaTsukeruyatsu;


    class ConvertTest extends \PHPUnit\Framework\TestCase {

        /**
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @test
         */
        public function testLowerCase() {
            try {
                $str = "zepd";
                $expected = "ぜっといーぴーでぃー";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->assertInstanceOf("InvalidArgumentException", $e);
                $this->fail($e->getMessage());
            }
            $this->assertTrue(true);
        }

        /**
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @test
         */
        public function testUpperCase() {
            try {
                $str = "UGQS";
                $expected = "ゆーじーきゅーえす";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->assertInstanceOf("InvalidArgumentException", $e);
                $this->fail($e->getMessage());
            }
            $this->assertTrue(true);
        }

        /**
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @test
         */
        public function testNumberCase() {
            try {
                $str = "0123";
                $expected = "ぜろいちにさん";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->assertInstanceOf("InvalidArgumentException", $e);
                $this->fail($e->getMessage());
            }
            $this->assertTrue(true);
        }

        /**
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         * @test
         */
        public function testMixedConvert() {
            try {
                $str = "abedcAB012";
                $expected = "えーびーいーでぃーしーエービーぜろいちに";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->assertInstanceOf("InvalidArgumentException", $e);
                $this->fail($e->getMessage());
            }
            $this->assertTrue(true);
        }

        /**
         * @test
         * @expectedException \InvalidArgumentException
         */
        public function testExceptionCase() {
            FuriganaTsukeruyatsu\Convert::convert("あいうえお.,");
        }

        /**
         * @test
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @throws \PHPUnit\Framework\ExpectationFailedException
         * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
         */
        public function testNotExceptinCase() {
            try {
                $str = "あいうえお";
                $expected = "あいうえお";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str, true);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->assertInstanceOf("InvalidArgumentException", $e);
                $this->fail($e->getMessage());
            }
            $this->assertTrue(true);
        }
    }
