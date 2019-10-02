<?php

    namespace ConvertTest;

    use PHPUnit\Framework\AssertionFailedError;
    use PHPUnit\Framework\TestCase;
    use sudnonk\FuriganaTsukeruyatsu;


    class FuriganaTest extends TestCase {

        /**
         * @throws AssertionFailedError
         * @test
         */
        public function 小文字の変換() {
            try {
                $str = "zepd";
                $expected = "ぜっといーぴーでぃー";
                $actual = FuriganaTsukeruyatsu\Furigana::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @throws AssertionFailedError
         * @test
         */
        public function 大文字の変換() {
            try {
                $str = "UGQS";
                $expected = "ユージーキューエス";
                $actual = FuriganaTsukeruyatsu\Furigana::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @throws AssertionFailedError
         * @test
         */
        public function 数字の変換() {
            try {
                $str = "0123";
                $expected = "ぜろいちにさん";
                $actual = FuriganaTsukeruyatsu\Furigana::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @throws AssertionFailedError
         * @test
         */
        public function 混在の変換() {
            try {
                $str = "abedcAB012";
                $expected = "えーびーいーでぃーしーエービーぜろいちに";
                $actual = FuriganaTsukeruyatsu\Furigana::convert($str);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @throws \InvalidArgumentException
         * @test
         */
        public function 例外が起きる場合() {
            $this->expectException(\InvalidArgumentException::class);
            FuriganaTsukeruyatsu\Furigana::convert("あいうえお.,");
        }

        /**
         * @test
         * @throws AssertionFailedError
         */
        public function 例外が起きない場合() {
            try {
                $str = "あいうえお";
                $expected = "あいうえお";
                $actual = FuriganaTsukeruyatsu\Furigana::convert($str, true);
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }

        /**
         * @throws AssertionFailedError
         * @test
         */
        public function 結合文字を指定した場合() {
            try {
                $str = "abc";
                $expected = "えー、びー、しー";
                $actual = FuriganaTsukeruyatsu\Furigana::convert($str,false,"、");
                $this->assertEquals($expected, $actual);
            } catch (\Exception $e) {
                $this->fail($e->getMessage());
            }
        }
    }
