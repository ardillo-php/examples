<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x00853ffd),
        Color::fromRGBA(0x00853ffd),
        Color::fromRGBA(0x00853ffd),
        Color::fromRGBA(0x00853efd),
        Color::fromRGBA(0x01853ffc),
        Color::fromRGBA(0xa8cb41f9),
        Color::fromRGBA(0xfff042fd),
        Color::fromRGBA(0xfdef42fd),
        Color::fromRGBA(0xfdef42fd),
        Color::fromRGBA(0xfdf242fd),
        Color::fromRGBA(0xf3a136f9),
        Color::fromRGBA(0xe31b23fc),
        Color::fromRGBA(0xe21a22fd),
        Color::fromRGBA(0xe31a23fd),
        Color::fromRGBA(0xe31a23fd),
        Color::fromRGBA(0xe31a23fd),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843eff),
        Color::fromRGBA(0x01853fff),
        Color::fromRGBA(0xa8cb41fc),
        Color::fromRGBA(0xfff042ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdf242ff),
        Color::fromRGBA(0xf3a136fc),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe21a22ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00843eff),
        Color::fromRGBA(0x01853fff),
        Color::fromRGBA(0xa8cb41fc),
        Color::fromRGBA(0xfff042ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdf242ff),
        Color::fromRGBA(0xf3a136fc),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe21a22ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00843eff),
        Color::fromRGBA(0x01853fff),
        Color::fromRGBA(0xa8cb41fc),
        Color::fromRGBA(0xfff142ff),
        Color::fromRGBA(0xf5ec41ff),
        Color::fromRGBA(0xf5ec41ff),
        Color::fromRGBA(0xfff342ff),
        Color::fromRGBA(0xf3a136fc),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe21a22ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00843eff),
        Color::fromRGBA(0x01853fff),
        Color::fromRGBA(0xa8cb41fc),
        Color::fromRGBA(0xf0e941ff),
        Color::fromRGBA(0xa0c840ff),
        Color::fromRGBA(0xa0c840ff),
        Color::fromRGBA(0xeceb42ff),
        Color::fromRGBA(0xf3a136fc),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe21a22ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00843eff),
        Color::fromRGBA(0x01853fff),
        Color::fromRGBA(0xa9cc41fc),
        Color::fromRGBA(0xdbe141ff),
        Color::fromRGBA(0x339a3fff),
        Color::fromRGBA(0x339a3fff),
        Color::fromRGBA(0xd7e242ff),
        Color::fromRGBA(0xf4a136fc),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe21a22ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00843eff),
        Color::fromRGBA(0x01853fff),
        Color::fromRGBA(0xa9cb41fc),
        Color::fromRGBA(0xf5eb41ff),
        Color::fromRGBA(0x98c540ff),
        Color::fromRGBA(0x98c540ff),
        Color::fromRGBA(0xf1ed42ff),
        Color::fromRGBA(0xf4a136fc),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe21a22ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00843eff),
        Color::fromRGBA(0x01853fff),
        Color::fromRGBA(0xa8cb41fc),
        Color::fromRGBA(0xffef42ff),
        Color::fromRGBA(0xfaee41ff),
        Color::fromRGBA(0xfaee41ff),
        Color::fromRGBA(0xfbf142ff),
        Color::fromRGBA(0xf3a136fc),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe21a22ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00843eff),
        Color::fromRGBA(0x01853fff),
        Color::fromRGBA(0xa8cb41fc),
        Color::fromRGBA(0xfff042ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdf242ff),
        Color::fromRGBA(0xf3a136fc),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe21a22ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843eff),
        Color::fromRGBA(0x01853fff),
        Color::fromRGBA(0xa8cb41fc),
        Color::fromRGBA(0xfff042ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdf242ff),
        Color::fromRGBA(0xf3a136fc),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe21a22ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853ffd),
        Color::fromRGBA(0x00853ffd),
        Color::fromRGBA(0x00853ffd),
        Color::fromRGBA(0x00853efd),
        Color::fromRGBA(0x01853ffc),
        Color::fromRGBA(0xa8cb41f9),
        Color::fromRGBA(0xfff042fd),
        Color::fromRGBA(0xfdef42fd),
        Color::fromRGBA(0xfdef42fd),
        Color::fromRGBA(0xfdf242fd),
        Color::fromRGBA(0xf3a136f9),
        Color::fromRGBA(0xe31b23fc),
        Color::fromRGBA(0xe21a22fd),
        Color::fromRGBA(0xe31a23fd),
        Color::fromRGBA(0xe31a23fd),
        Color::fromRGBA(0xe31a23fd)
    ],
    '32x21' => [
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00833efe),
        Color::fromRGBA(0x5cab40fb),
        Color::fromRGBA(0xfdef42fd),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfced41fd),
        Color::fromRGBA(0xeb622dfb),
        Color::fromRGBA(0xe21722fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fd),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfd),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfcee42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfcee42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfbee41ff),
        Color::fromRGBA(0xfbee41ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfef042ff),
        Color::fromRGBA(0xcfdb41ff),
        Color::fromRGBA(0xcfdb41ff),
        Color::fromRGBA(0xfef042ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfcee41ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfff042ff),
        Color::fromRGBA(0x7db940ff),
        Color::fromRGBA(0x7db940ff),
        Color::fromRGBA(0xfff042ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfcee42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xebe741ff),
        Color::fromRGBA(0x8fc140ff),
        Color::fromRGBA(0x69b040ff),
        Color::fromRGBA(0x21923fff),
        Color::fromRGBA(0x21923fff),
        Color::fromRGBA(0x69b040ff),
        Color::fromRGBA(0x8fc140ff),
        Color::fromRGBA(0xebe741ff),
        Color::fromRGBA(0xfdee41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfbee41ff),
        Color::fromRGBA(0xc9d941ff),
        Color::fromRGBA(0x409f3fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x409f3fff),
        Color::fromRGBA(0xc9d941ff),
        Color::fromRGBA(0xfbee42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfff142ff),
        Color::fromRGBA(0x7cb940ff),
        Color::fromRGBA(0x0f8a3fff),
        Color::fromRGBA(0x0f8a3fff),
        Color::fromRGBA(0x7cb940ff),
        Color::fromRGBA(0xfff142ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xf0e941ff),
        Color::fromRGBA(0x72b540ff),
        Color::fromRGBA(0xb4d041ff),
        Color::fromRGBA(0xb4d041ff),
        Color::fromRGBA(0x72b540ff),
        Color::fromRGBA(0xf0e941ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xf5eb41ff),
        Color::fromRGBA(0xeae741ff),
        Color::fromRGBA(0xfff042ff),
        Color::fromRGBA(0xfff042ff),
        Color::fromRGBA(0xeae741ff),
        Color::fromRGBA(0xf5eb41ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfeef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfeef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfcef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00853fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fc),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfc),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00843fff),
        Color::fromRGBA(0x00833eff),
        Color::fromRGBA(0x5cab40fd),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfdef42ff),
        Color::fromRGBA(0xfced41ff),
        Color::fromRGBA(0xeb622dfd),
        Color::fromRGBA(0xe21722ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0xe31b23ff),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00853ffe),
        Color::fromRGBA(0x00833efe),
        Color::fromRGBA(0x5cab40fb),
        Color::fromRGBA(0xfdef42fd),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfdef42fe),
        Color::fromRGBA(0xfced41fd),
        Color::fromRGBA(0xeb622dfb),
        Color::fromRGBA(0xe21722fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe),
        Color::fromRGBA(0xe31a23fe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
