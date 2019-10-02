<?php


    namespace sudnonk\FuriganaTsukeruyatsu;


    require_once __DIR__ . "/../vendor/autoload.php";

    //ランダムな文字列を生成し、その文字列とそのフリガナをtsv形式で出力する
    for ($i = 0; $i < 47; $i++) {
        $str = makeRandStr();
        try {
            echo $str . "\t" . Furigana::convert($str, false, "、") . PHP_EOL;
        }catch (\InvalidArgumentException $e){
            die("\$str has invalid character.");
        }
    }


    /**
     *  ランダムな文字列の生成
     * opensslが使える環境ではopenssl_random_pseudo_bytesを使い安全性を高める
     *
     * @param int $length
     *
     * @return string
     */
    function makeRandStr(int $length = 8): string {
        $chars = 'abcdefghijkmnprstuvwxyzABCDEFGHJLKMNPQRSTUVWXYZ0123456789';
        $str = '';
        for ($i = 0; $i < $length; ++$i) {
            $str .= $chars[mt_rand(0, strlen($chars) - 1)];
        }

        return $str;
    }