<?php

    namespace sudnonk\FuriganaTsukeruyatsu;

    /**
     * Class Furigana
     *
     * @package sudnonk\FuriganaTsukeruyatsu
     */
    class Furigana {
        /** @var array $table 変換テーブル */
        private static $table = array(
            "a" => "えー",
            "b" => "びー",
            "c" => "しー",
            "d" => "でぃー",
            "e" => "いー",
            "f" => "えふ",
            "g" => "じー",
            "h" => "えいち",
            "i" => "あい",
            "j" => "じぇー",
            "k" => "けー",
            "l" => "える",
            "m" => "えむ",
            "n" => "えぬ",
            "o" => "おー",
            "p" => "ぴー",
            "q" => "きゅー",
            "r" => "あーる",
            "s" => "えす",
            "t" => "てぃー",
            "u" => "ゆー",
            "v" => "ぶい",
            "w" => "だぶりゅ",
            "x" => "えっくす",
            "y" => "わい",
            "z" => "ぜっと",
            "A" => "エー",
            "B" => "ビー",
            "C" => "シー",
            "D" => "ディー",
            "E" => "イー",
            "F" => "エフ",
            "G" => "ジー",
            "H" => "エイチ",
            "I" => "アイ",
            "J" => "ジェー",
            "K" => "ケー",
            "L" => "エル",
            "M" => "エム",
            "N" => "エヌ",
            "O" => "オー",
            "P" => "ピー",
            "Q" => "キュー",
            "R" => "アール",
            "S" => "エス",
            "T" => "ティー",
            "U" => "ユー",
            "V" => "ブイ",
            "W" => "ダブリュ",
            "X" => "エックス",
            "Y" => "ワイ",
            "Z" => "ゼット",
            "0" => "ぜろ",
            "1" => "いち",
            "2" => "に",
            "3" => "さん",
            "4" => "よん",
            "5" => "ご",
            "6" => "ろく",
            "7" => "なな",
            "8" => "はち",
            "9" => "きゅう",
        );

        /**
         * 半角英数字に日本語のフリガナをつける
         *
         * @param string $alphanumeric    半角英数字の文字列
         * @param bool   $throw_exception trueのとき変換テーブルにない文字があったら例外を吐く。falseならそのまま$furiganaにくっつける
         * @param string $glue            文字同士の間に挟む文字（例：$glueが"、"のとき、"えー、びー、しー"
         * @return string $furigana フリガナ
         * @throws \InvalidArgumentException self::$tableに存在しない文字が$alphanumericにあったとき
         */
        public static function convert(string $alphanumeric, bool $throw_exception = false, string $glue = ""): string {
            $furigana = "";
            $str_length = strlen($alphanumeric);
            for ($i = 0; $i < $str_length; $i++) {
                if (isset(self::$table[$alphanumeric[$i]])) {
                    $furigana .= self::$table[$alphanumeric[$i]];
                } elseif ($throw_exception) {
                    $furigana .= $alphanumeric[$i];
                } else {
                    throw new \InvalidArgumentException("Furigana is not defined for " . $alphanumeric[$i]);
                }

                if ($i !== $str_length - 1) {
                    $furigana .= $glue;
                }
            }

            return $furigana;
        }
    }