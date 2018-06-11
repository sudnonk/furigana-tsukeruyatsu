<?php

    namespace ConvertTest;

    use sudnonk\FuriganaTsukeruyatsu;


    class ConvertTest extends \PHPUnit\Framework\TestCase {

        /**
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @test
         */
        public function 小文字の変換() {
            try {
                $str = "zepd";
                $expected = "ぜっといーぴーでぃー";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @test
         */
        public function 大文字の変換() {
            try {
                $str = "UGQS";
                $expected = "ユージーキューエス";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @test
         */
        public function 数字の変換() {
            try {
                $str = "0123";
                $expected = "ぜろいちにさん";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @test
         */
        public function 混在の変換() {
            try {
                $str = "abedcAB012";
                $expected = "えーびーいーでぃーしーエービーぜろいちに";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @test
         * @expectedException \InvalidArgumentException
         */
        public function 例外が起きる場合() {
            FuriganaTsukeruyatsu\Convert::convert("あいうえお.,");
        }

        /**
         * @test
         * @throws \PHPUnit\Framework\AssertionFailedError
         */
        public function 例外が起きない場合() {
            try {
                $str = "あいうえお";
                $expected = "あいうえお";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str, true);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @throws \PHPUnit\Framework\AssertionFailedError
         * @test
         */
        public function 結合文字を指定した場合() {
            try {
                $str = "abc";
                $expected = "えー、びー、しー";
                $actual = FuriganaTsukeruyatsu\Convert::convert($str,false,"、");
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }
    }
