<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xcd1026fd),
        Color::fromRGBA(0xce1225fc),
        Color::fromRGBA(0xec901bf9),
        Color::fromRGBA(0xfcd415fd),
        Color::fromRGBA(0xfcd116fd),
        Color::fromRGBA(0xfcd116fd),
        Color::fromRGBA(0xffd214fd),
        Color::fromRGBA(0x9fba31f9),
        Color::fromRGBA(0x00945ffc),
        Color::fromRGBA(0x009360fd),
        Color::fromRGBA(0x009460fd),
        Color::fromRGBA(0x009460fd),
        Color::fromRGBA(0x009460fd),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xffd214ff),
        Color::fromRGBA(0x9fba31fc),
        Color::fromRGBA(0x00945fff),
        Color::fromRGBA(0x009360ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xffd214ff),
        Color::fromRGBA(0x9fba31fc),
        Color::fromRGBA(0x00945fff),
        Color::fromRGBA(0x009360ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xffd214ff),
        Color::fromRGBA(0x9fba31fc),
        Color::fromRGBA(0x00945fff),
        Color::fromRGBA(0x009360ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xffd214ff),
        Color::fromRGBA(0x9fba31fc),
        Color::fromRGBA(0x00945fff),
        Color::fromRGBA(0x009360ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xffd214ff),
        Color::fromRGBA(0x9fba31fc),
        Color::fromRGBA(0x00945fff),
        Color::fromRGBA(0x009360ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xffd214ff),
        Color::fromRGBA(0x9fba31fc),
        Color::fromRGBA(0x00945fff),
        Color::fromRGBA(0x009360ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xffd214ff),
        Color::fromRGBA(0x9fba31fc),
        Color::fromRGBA(0x00945fff),
        Color::fromRGBA(0x009360ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xffd214ff),
        Color::fromRGBA(0x9fba31fc),
        Color::fromRGBA(0x00945fff),
        Color::fromRGBA(0x009360ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1026ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xec901bfc),
        Color::fromRGBA(0xfcd415ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xffd214ff),
        Color::fromRGBA(0x9fba31fc),
        Color::fromRGBA(0x00945fff),
        Color::fromRGBA(0x009360ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xce1126fd),
        Color::fromRGBA(0xcd1026fd),
        Color::fromRGBA(0xce1225fc),
        Color::fromRGBA(0xec901bf9),
        Color::fromRGBA(0xfcd415fd),
        Color::fromRGBA(0xfcd116fd),
        Color::fromRGBA(0xfcd116fd),
        Color::fromRGBA(0xffd214fd),
        Color::fromRGBA(0x9fba31f9),
        Color::fromRGBA(0x00945ffc),
        Color::fromRGBA(0x009360fd),
        Color::fromRGBA(0x009460fd),
        Color::fromRGBA(0x009460fd),
        Color::fromRGBA(0x009460fd)
    ],
    '32x21' => [
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xcd0d26fe),
        Color::fromRGBA(0xde5620fb),
        Color::fromRGBA(0xfcd115fd),
        Color::fromRGBA(0xfcd115fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd115fe),
        Color::fromRGBA(0xfad016fd),
        Color::fromRGBA(0x55a846fb),
        Color::fromRGBA(0x009261fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fd),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fd),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fc),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fc),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd0d26ff),
        Color::fromRGBA(0xde5620fd),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfcd115ff),
        Color::fromRGBA(0xfad016ff),
        Color::fromRGBA(0x55a846fd),
        Color::fromRGBA(0x009261ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0x009460ff),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xce1126fe),
        Color::fromRGBA(0xcd0d26fe),
        Color::fromRGBA(0xde5620fb),
        Color::fromRGBA(0xfcd115fd),
        Color::fromRGBA(0xfcd115fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd116fe),
        Color::fromRGBA(0xfcd115fe),
        Color::fromRGBA(0xfad016fd),
        Color::fromRGBA(0x55a846fb),
        Color::fromRGBA(0x009261fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe),
        Color::fromRGBA(0x009460fe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;