<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x10' => [
        Color::fromRGBA(0xeaf9edff),
        Color::fromRGBA(0xf8d9deff),
        Color::fromRGBA(0xde5d6cff),
        Color::fromRGBA(0xce1428ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xce1428ff),
        Color::fromRGBA(0xde5e6cff),
        Color::fromRGBA(0xf8d9deff),
        Color::fromRGBA(0xeaf9edff),
        Color::fromRGBA(0x52c667ff),
        Color::fromRGBA(0xb3e7beff),
        Color::fromRGBA(0xf6edebff),
        Color::fromRGBA(0xec98a3ff),
        Color::fromRGBA(0xd43042ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcf172cff),
        Color::fromRGBA(0xcf172cff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xd43042ff),
        Color::fromRGBA(0xec98a3ff),
        Color::fromRGBA(0xf6edebff),
        Color::fromRGBA(0xb3e7bdff),
        Color::fromRGBA(0x51c667ff),
        Color::fromRGBA(0x1ab437ff),
        Color::fromRGBA(0x26b741ff),
        Color::fromRGBA(0x72d184ff),
        Color::fromRGBA(0xd9f4dfff),
        Color::fromRGBA(0xf8d7dbff),
        Color::fromRGBA(0xe16b78ff),
        Color::fromRGBA(0xe06a77ff),
        Color::fromRGBA(0xebb2b7ff),
        Color::fromRGBA(0xebb2b7ff),
        Color::fromRGBA(0xe06a77ff),
        Color::fromRGBA(0xe16b79ff),
        Color::fromRGBA(0xf8d7dbff),
        Color::fromRGBA(0xd9f4dfff),
        Color::fromRGBA(0x71d184ff),
        Color::fromRGBA(0x26b741ff),
        Color::fromRGBA(0x1ab437ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1bb437ff),
        Color::fromRGBA(0x3bbe53ff),
        Color::fromRGBA(0x9ee1acff),
        Color::fromRGBA(0xf1f5efff),
        Color::fromRGBA(0xfefafbff),
        Color::fromRGBA(0xdfc4bdff),
        Color::fromRGBA(0xdfc4bdff),
        Color::fromRGBA(0xfefafbff),
        Color::fromRGBA(0xf1f5efff),
        Color::fromRGBA(0x9ee1acff),
        Color::fromRGBA(0x3bbe53ff),
        Color::fromRGBA(0x1bb437ff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1bb438ff),
        Color::fromRGBA(0x22b63eff),
        Color::fromRGBA(0xb7e7c0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf7f4f1ff),
        Color::fromRGBA(0xf7f4f1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xb7e7c0ff),
        Color::fromRGBA(0x22b63dff),
        Color::fromRGBA(0x1bb438ff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1bb438ff),
        Color::fromRGBA(0x22b63eff),
        Color::fromRGBA(0xb6e7bfff),
        Color::fromRGBA(0xdab6afff),
        Color::fromRGBA(0xebdfdaff),
        Color::fromRGBA(0xebdfdaff),
        Color::fromRGBA(0xdbb6afff),
        Color::fromRGBA(0xb6e7bfff),
        Color::fromRGBA(0x22b63eff),
        Color::fromRGBA(0x1bb438ff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1bb437ff),
        Color::fromRGBA(0x3bbe54ff),
        Color::fromRGBA(0x9fe1adff),
        Color::fromRGBA(0xf0f5eeff),
        Color::fromRGBA(0xecddd9ff),
        Color::fromRGBA(0xf6f4f2ff),
        Color::fromRGBA(0xf7f4f2ff),
        Color::fromRGBA(0xecddd9ff),
        Color::fromRGBA(0xf0f5eeff),
        Color::fromRGBA(0x9fe1acff),
        Color::fromRGBA(0x3bbe54ff),
        Color::fromRGBA(0x1bb437ff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1ab437ff),
        Color::fromRGBA(0x26b741ff),
        Color::fromRGBA(0x72d184ff),
        Color::fromRGBA(0xd9f4dfff),
        Color::fromRGBA(0xf8d6dbff),
        Color::fromRGBA(0xe16a78ff),
        Color::fromRGBA(0xe16b78ff),
        Color::fromRGBA(0xf1bac0ff),
        Color::fromRGBA(0xf1bac0ff),
        Color::fromRGBA(0xe16b78ff),
        Color::fromRGBA(0xe16b78ff),
        Color::fromRGBA(0xf8d7dbff),
        Color::fromRGBA(0xd9f4dfff),
        Color::fromRGBA(0x72d184ff),
        Color::fromRGBA(0x26b741ff),
        Color::fromRGBA(0x1ab437ff),
        Color::fromRGBA(0x52c667ff),
        Color::fromRGBA(0xb4e7beff),
        Color::fromRGBA(0xf6edebff),
        Color::fromRGBA(0xec98a2ff),
        Color::fromRGBA(0xd42f42ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcf172bff),
        Color::fromRGBA(0xcf172bff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xd43042ff),
        Color::fromRGBA(0xec98a2ff),
        Color::fromRGBA(0xf6edebff),
        Color::fromRGBA(0xb3e7beff),
        Color::fromRGBA(0x52c667ff),
        Color::fromRGBA(0xeaf9eeff),
        Color::fromRGBA(0xf8d9ddff),
        Color::fromRGBA(0xde5d6bff),
        Color::fromRGBA(0xce1428ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xce1428ff),
        Color::fromRGBA(0xde5d6cff),
        Color::fromRGBA(0xf8d9ddff),
        Color::fromRGBA(0xeaf9edff)
    ],
    '32x19' => [
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcfcfbff),
        Color::fromRGBA(0xfaedeeff),
        Color::fromRGBA(0xe37682ff),
        Color::fromRGBA(0xcc0b20ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xce1429ff),
        Color::fromRGBA(0xce1227ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1227ff),
        Color::fromRGBA(0xce1429ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xcc0b20ff),
        Color::fromRGBA(0xe37783ff),
        Color::fromRGBA(0xfaedeeff),
        Color::fromRGBA(0xfcfcfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xcaedd1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xf2c4c9ff),
        Color::fromRGBA(0xd84555ff),
        Color::fromRGBA(0xca0118ff),
        Color::fromRGBA(0xcc0b21ff),
        Color::fromRGBA(0xce1529ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1529ff),
        Color::fromRGBA(0xcc0b21ff),
        Color::fromRGBA(0xca0118ff),
        Color::fromRGBA(0xd84555ff),
        Color::fromRGBA(0xf2c4c9ff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xcaedd1ff),
        Color::fromRGBA(0x16b233ff),
        Color::fromRGBA(0x6dcf7fff),
        Color::fromRGBA(0xe4f6e7ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcfffeff),
        Color::fromRGBA(0xeba0a9ff),
        Color::fromRGBA(0xd22538ff),
        Color::fromRGBA(0xca0016ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1428ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1428ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xca0016ff),
        Color::fromRGBA(0xd22538ff),
        Color::fromRGBA(0xeba1a9ff),
        Color::fromRGBA(0xfcfffeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe4f5e7ff),
        Color::fromRGBA(0x6dcf7fff),
        Color::fromRGBA(0x16b233ff),
        Color::fromRGBA(0x1fb53bff),
        Color::fromRGBA(0x0fb02cff),
        Color::fromRGBA(0x28b843ff),
        Color::fromRGBA(0x97dda4ff),
        Color::fromRGBA(0xfafbf9ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf9ebecff),
        Color::fromRGBA(0xe27581ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xce1429ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xcb0319ff),
        Color::fromRGBA(0xcc0f23ff),
        Color::fromRGBA(0xcc0f23ff),
        Color::fromRGBA(0xcb0319ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xce1429ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xe27581ff),
        Color::fromRGBA(0xf9ececff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfafbf9ff),
        Color::fromRGBA(0x97dca4ff),
        Color::fromRGBA(0x28b843ff),
        Color::fromRGBA(0x0fb02cff),
        Color::fromRGBA(0x1fb53bff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1ab337ff),
        Color::fromRGBA(0x0eaf2cff),
        Color::fromRGBA(0x44c15bff),
        Color::fromRGBA(0xbee9c6ff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xf4cdd1ff),
        Color::fromRGBA(0xda4c5cff),
        Color::fromRGBA(0xca0218ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xdb5261ff),
        Color::fromRGBA(0xeeacb3ff),
        Color::fromRGBA(0xfad8deff),
        Color::fromRGBA(0xfad8deff),
        Color::fromRGBA(0xeeacb3ff),
        Color::fromRGBA(0xdb5261ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xca0218ff),
        Color::fromRGBA(0xda4c5cff),
        Color::fromRGBA(0xf4cdd1ff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xbee9c6ff),
        Color::fromRGBA(0x44c15bff),
        Color::fromRGBA(0x0eaf2cff),
        Color::fromRGBA(0x1ab337ff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1fb53aff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x14b232ff),
        Color::fromRGBA(0x14b131ff),
        Color::fromRGBA(0x68cd7bff),
        Color::fromRGBA(0xdff3e2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xeb9fa7ff),
        Color::fromRGBA(0xea9ba4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xeaf8edff),
        Color::fromRGBA(0xeaf8edff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xea9ba4ff),
        Color::fromRGBA(0xeb9fa8ff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xdff3e2ff),
        Color::fromRGBA(0x68cd7bff),
        Color::fromRGBA(0x14b131ff),
        Color::fromRGBA(0x14b232ff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1fb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x20b53cff),
        Color::fromRGBA(0x1fb53bff),
        Color::fromRGBA(0x0fb02dff),
        Color::fromRGBA(0x24b740ff),
        Color::fromRGBA(0x91da9eff),
        Color::fromRGBA(0xf7faf7ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xf2fbf6ff),
        Color::fromRGBA(0xb3443dff),
        Color::fromRGBA(0xb3443dff),
        Color::fromRGBA(0xf2fbf6ff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf7faf6ff),
        Color::fromRGBA(0x90da9eff),
        Color::fromRGBA(0x24b73fff),
        Color::fromRGBA(0x0fb02dff),
        Color::fromRGBA(0x20b53bff),
        Color::fromRGBA(0x20b53cff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1bb438ff),
        Color::fromRGBA(0x0daf2bff),
        Color::fromRGBA(0x3ebf56ff),
        Color::fromRGBA(0xbce8c4ff),
        Color::fromRGBA(0xfdfbfbff),
        Color::fromRGBA(0xfcfbfaff),
        Color::fromRGBA(0xfdfdfcff),
        Color::fromRGBA(0xf8fefbff),
        Color::fromRGBA(0xcda89cff),
        Color::fromRGBA(0xcda89cff),
        Color::fromRGBA(0xf8fefbff),
        Color::fromRGBA(0xfdfdfcff),
        Color::fromRGBA(0xfcfbfaff),
        Color::fromRGBA(0xfdfbfbff),
        Color::fromRGBA(0xbce8c4ff),
        Color::fromRGBA(0x3ebf56ff),
        Color::fromRGBA(0x0daf2bff),
        Color::fromRGBA(0x1bb438ff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x24b740ff),
        Color::fromRGBA(0x07ad26ff),
        Color::fromRGBA(0x60ca74ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcfdfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcfdfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x60ca74ff),
        Color::fromRGBA(0x07ad26ff),
        Color::fromRGBA(0x24b740ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x21b63cff),
        Color::fromRGBA(0x11b12fff),
        Color::fromRGBA(0x85d794ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfcfffeff),
        Color::fromRGBA(0xebfef2ff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfefcfcff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xebfef2ff),
        Color::fromRGBA(0xfcfffeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0x85d794ff),
        Color::fromRGBA(0x11b12fff),
        Color::fromRGBA(0x21b63cff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x24b740ff),
        Color::fromRGBA(0x07ad26ff),
        Color::fromRGBA(0x5fc871ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xd6d3c3ff),
        Color::fromRGBA(0xaf2923ff),
        Color::fromRGBA(0xd1bcaeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xd1bcaeff),
        Color::fromRGBA(0xaf2923ff),
        Color::fromRGBA(0xd6d3c3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x5fc871ff),
        Color::fromRGBA(0x07ad26ff),
        Color::fromRGBA(0x24b740ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1bb438ff),
        Color::fromRGBA(0x0daf2bff),
        Color::fromRGBA(0x3ebf56ff),
        Color::fromRGBA(0xbce7c3ff),
        Color::fromRGBA(0xfdfbfbff),
        Color::fromRGBA(0xdfdcd0ff),
        Color::fromRGBA(0xb75a4fff),
        Color::fromRGBA(0xdacec2ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xdacec2ff),
        Color::fromRGBA(0xb75a4fff),
        Color::fromRGBA(0xdfdcd0ff),
        Color::fromRGBA(0xfdfbfbff),
        Color::fromRGBA(0xbbe7c3ff),
        Color::fromRGBA(0x3ebf56ff),
        Color::fromRGBA(0x0daf2bff),
        Color::fromRGBA(0x1bb438ff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x20b53cff),
        Color::fromRGBA(0x1fb53bff),
        Color::fromRGBA(0x0fb02dff),
        Color::fromRGBA(0x25b740ff),
        Color::fromRGBA(0x91db9fff),
        Color::fromRGBA(0xf7faf7ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8ffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf8ffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf7faf7ff),
        Color::fromRGBA(0x91da9eff),
        Color::fromRGBA(0x25b740ff),
        Color::fromRGBA(0x0fb02dff),
        Color::fromRGBA(0x1fb53bff),
        Color::fromRGBA(0x20b53cff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1fb53aff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x14b131ff),
        Color::fromRGBA(0x14b131ff),
        Color::fromRGBA(0x69cd7bff),
        Color::fromRGBA(0xdff3e2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xeb9fa7ff),
        Color::fromRGBA(0xe99aa3ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe99aa3ff),
        Color::fromRGBA(0xeb9fa7ff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xdff3e2ff),
        Color::fromRGBA(0x68cd7bff),
        Color::fromRGBA(0x14b131ff),
        Color::fromRGBA(0x14b132ff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1fb53aff),
        Color::fromRGBA(0x1db439ff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1ab337ff),
        Color::fromRGBA(0x0eaf2cff),
        Color::fromRGBA(0x45c15cff),
        Color::fromRGBA(0xbfe9c7ff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xf4cdd1ff),
        Color::fromRGBA(0xda4c5bff),
        Color::fromRGBA(0xca0218ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xdb5160ff),
        Color::fromRGBA(0xedacb3ff),
        Color::fromRGBA(0xf6d4d8ff),
        Color::fromRGBA(0xf6d4d8ff),
        Color::fromRGBA(0xedacb3ff),
        Color::fromRGBA(0xdb5160ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xca0218ff),
        Color::fromRGBA(0xda4c5cff),
        Color::fromRGBA(0xf4cdd1ff),
        Color::fromRGBA(0xfeffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xbfe9c6ff),
        Color::fromRGBA(0x44c15cff),
        Color::fromRGBA(0x0eaf2cff),
        Color::fromRGBA(0x1ab337ff),
        Color::fromRGBA(0x21b63dff),
        Color::fromRGBA(0x1eb53aff),
        Color::fromRGBA(0x1fb53bff),
        Color::fromRGBA(0x0fb02cff),
        Color::fromRGBA(0x29b843ff),
        Color::fromRGBA(0x98dda4ff),
        Color::fromRGBA(0xfafbf9ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf9ebecff),
        Color::fromRGBA(0xe27481ff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xce1429ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xcb0319ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcb0319ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xce1429ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xcd0e23ff),
        Color::fromRGBA(0xe27581ff),
        Color::fromRGBA(0xf9ebecff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfafbf9ff),
        Color::fromRGBA(0x97dda4ff),
        Color::fromRGBA(0x28b843ff),
        Color::fromRGBA(0x0fb02cff),
        Color::fromRGBA(0x1fb53bff),
        Color::fromRGBA(0x16b233ff),
        Color::fromRGBA(0x6dcf7fff),
        Color::fromRGBA(0xe5f6e8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcfffeff),
        Color::fromRGBA(0xeba0a8ff),
        Color::fromRGBA(0xd22538ff),
        Color::fromRGBA(0xca0016ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1428ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xce1328ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1428ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xca0016ff),
        Color::fromRGBA(0xd22538ff),
        Color::fromRGBA(0xeba0a8ff),
        Color::fromRGBA(0xfcfffeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xe5f6e7ff),
        Color::fromRGBA(0x6dcf7fff),
        Color::fromRGBA(0x16b233ff),
        Color::fromRGBA(0xcaeed1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xf2c4c9ff),
        Color::fromRGBA(0xd84455ff),
        Color::fromRGBA(0xca0118ff),
        Color::fromRGBA(0xcc0b21ff),
        Color::fromRGBA(0xce1529ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1529ff),
        Color::fromRGBA(0xcc0b21ff),
        Color::fromRGBA(0xca0118ff),
        Color::fromRGBA(0xd84555ff),
        Color::fromRGBA(0xf2c4c9ff),
        Color::fromRGBA(0xfdffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xcaedd1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfcfcfbff),
        Color::fromRGBA(0xfaededff),
        Color::fromRGBA(0xe27682ff),
        Color::fromRGBA(0xcc0a20ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xce1429ff),
        Color::fromRGBA(0xce1227ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xce1126ff),
        Color::fromRGBA(0xcd1025ff),
        Color::fromRGBA(0xce1227ff),
        Color::fromRGBA(0xce1429ff),
        Color::fromRGBA(0xcb041aff),
        Color::fromRGBA(0xcc0b20ff),
        Color::fromRGBA(0xe27682ff),
        Color::fromRGBA(0xfaedeeff),
        Color::fromRGBA(0xfcfcfbff),
        Color::fromRGBA(0xffffffff)
    ],
];

$img = new Image(16, 10);
$img->append($pixels['16x10'], new Size(16, 10));
$img->append($pixels['32x19'], new Size(32, 19));

return $img;
