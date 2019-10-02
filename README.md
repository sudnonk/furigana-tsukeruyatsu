# ふりがな付けるやつ
![build status](https://travis-ci.org/sudnonk/furigana-tsukeruyatsu.svg?branch=master)

英数字の文字列に平仮名とカタカナのフリガナを付けます

# Sample
```php
$hoge = Furigana::convert("abAB012");
// えーびーエービーぜろいちに

$hoge2 = Furigana::convert("あいうえ");
// throws InvalidArgumentException.

$hoge2 = Furigana::convert("abc.;あいう,012", true);
// えーびーしー.;あいう,ぜろいちに

$hoge3 = Furigana::convert("abAB012",false, "、");
// えー、びー、エー、ビー、ぜろ、いち、に
```

# Install
`conposer require sudnonk/furigana-tsukeruyatsu`

# Default convert table
defined at `src/Furigana.php`.

|英数字|仮名|
|:----:|:----:|
|a|えー|
|b|びー|
|c|しー|
|d|でぃー|
|e|いー|
|f|えふ|
|g|じー|
|h|えいち|
|i|あい|
|j|じぇー|
|k|けー|
|l|える|
|m|えむ|
|n|えぬ|
|o|おー|
|p|ぴー|
|q|きゅー|
|r|あーる|
|s|えす|
|t|てぃー|
|u|ゆー|
|v|ぶい|
|w|だぶりゅ|
|x|えっくす|
|y|わい|
|z|ぜっと|
|A|エー|
|B|ビー|
|C|シー|
|D|ディー|
|E|イー|
|F|エフ|
|G|ジー|
|H|エイチ|
|I|アイ|
|J|ジェー|
|K|ケー|
|L|エル|
|M|エム|
|N|エヌ|
|O|オー|
|P|ピー|
|Q|キュー|
|R|アール|
|S|エス|
|T|ティー|
|U|ユー|
|V|ブイ|
|W|ダブリュ|
|X|エックス|
|Y|ワイ|
|Z|ゼット|
|0|ぜろ|
|1|いち|
|2|に|
|3|さん|
|4|よん|
|5|ご|
|6|ろく|
|7|なな|
|8|はち|
|9|きゅう|