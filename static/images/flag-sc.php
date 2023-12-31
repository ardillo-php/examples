<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f86ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x2d597eff),
        Color::fromRGBA(0xddc55bff),
        Color::fromRGBA(0xfdd955ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd956ff),
        Color::fromRGBA(0xf1a949ff),
        Color::fromRGBA(0xdc432fff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd62728ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x084385ff),
        Color::fromRGBA(0x9d9e68ff),
        Color::fromRGBA(0xfdd955ff),
        Color::fromRGBA(0xfcd956ff),
        Color::fromRGBA(0xfad354ff),
        Color::fromRGBA(0xec9143ff),
        Color::fromRGBA(0xda3b2dff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd62728ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x5d7774ff),
        Color::fromRGBA(0xf4d357ff),
        Color::fromRGBA(0xfdda56ff),
        Color::fromRGBA(0xf8c551ff),
        Color::fromRGBA(0xe56f3aff),
        Color::fromRGBA(0xd72c29ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd62827ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83434ff),
        Color::fromRGBA(0xde5555ff),
        Color::fromRGBA(0x003f86ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x27567fff),
        Color::fromRGBA(0xd5c15dff),
        Color::fromRGBA(0xfeda55ff),
        Color::fromRGBA(0xf3ae4bff),
        Color::fromRGBA(0xde5132ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5959ff),
        Color::fromRGBA(0xea9393ff),
        Color::fromRGBA(0xf5cdcdff),
        Color::fromRGBA(0xfcf1f1ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x084385ff),
        Color::fromRGBA(0x9ea068ff),
        Color::fromRGBA(0xfdd454ff),
        Color::fromRGBA(0xec9043ff),
        Color::fromRGBA(0xd9392cff),
        Color::fromRGBA(0xd42224ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5959ff),
        Color::fromRGBA(0xea9393ff),
        Color::fromRGBA(0xf6cdceff),
        Color::fromRGBA(0xfef4f4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x5d7975ff),
        Color::fromRGBA(0xf0c051ff),
        Color::fromRGBA(0xe56d37ff),
        Color::fromRGBA(0xd72a27ff),
        Color::fromRGBA(0xd93334ff),
        Color::fromRGBA(0xe25b5bff),
        Color::fromRGBA(0xee9596ff),
        Color::fromRGBA(0xf9cfd0ff),
        Color::fromRGBA(0xfef3f4ff),
        Color::fromRGBA(0xf8fdfcff),
        Color::fromRGBA(0xeaf6f1ff),
        Color::fromRGBA(0xd3e8deff),
        Color::fromRGBA(0xb5d8c6ff),
        Color::fromRGBA(0x91c5abff),
        Color::fromRGBA(0x6fb491ff),
        Color::fromRGBA(0x2e597dff),
        Color::fromRGBA(0xcc9653ff),
        Color::fromRGBA(0xe66141ff),
        Color::fromRGBA(0xde595aff),
        Color::fromRGBA(0xe28f8dff),
        Color::fromRGBA(0xdec1bbff),
        Color::fromRGBA(0xcfdbd0ff),
        Color::fromRGBA(0xb4d9c7ff),
        Color::fromRGBA(0x91c8adff),
        Color::fromRGBA(0x6cb38fff),
        Color::fromRGBA(0x48a074ff),
        Color::fromRGBA(0x2b905dff),
        Color::fromRGBA(0x14844cff),
        Color::fromRGBA(0x067d41ff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x8f7a68ff),
        Color::fromRGBA(0xbc8164ff),
        Color::fromRGBA(0x9a9581ff),
        Color::fromRGBA(0x78ac8dff),
        Color::fromRGBA(0x54a87fff),
        Color::fromRGBA(0x329766ff),
        Color::fromRGBA(0x188750ff),
        Color::fromRGBA(0x077d42ff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x00783aff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x007a3dff)
    ],
    '32x16' => [
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x0a4485ff),
        Color::fromRGBA(0xaaa665ff),
        Color::fromRGBA(0xfed955ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfbd755ff),
        Color::fromRGBA(0xfcd956ff),
        Color::fromRGBA(0xfad254ff),
        Color::fromRGBA(0xea8640ff),
        Color::fromRGBA(0xd7302aff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x5d7774ff),
        Color::fromRGBA(0xf3d257ff),
        Color::fromRGBA(0xfcd855ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd756ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcda56ff),
        Color::fromRGBA(0xf8c551ff),
        Color::fromRGBA(0xe5703aff),
        Color::fromRGBA(0xd72e29ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f86ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x27567fff),
        Color::fromRGBA(0xd5c05dff),
        Color::fromRGBA(0xfed955ff),
        Color::fromRGBA(0xfbd756ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfbd755ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd956ff),
        Color::fromRGBA(0xf3af4bff),
        Color::fromRGBA(0xde5132ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x084385ff),
        Color::fromRGBA(0x9e9f68ff),
        Color::fromRGBA(0xfed955ff),
        Color::fromRGBA(0xfcd855ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfbd755ff),
        Color::fromRGBA(0xfcd956ff),
        Color::fromRGBA(0xfad354ff),
        Color::fromRGBA(0xec9043ff),
        Color::fromRGBA(0xd93a2cff),
        Color::fromRGBA(0xd52527ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x5d7774ff),
        Color::fromRGBA(0xf4d357ff),
        Color::fromRGBA(0xfcd855ff),
        Color::fromRGBA(0xfbd756ff),
        Color::fromRGBA(0xfcd756ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcda56ff),
        Color::fromRGBA(0xf8c551ff),
        Color::fromRGBA(0xe56f3aff),
        Color::fromRGBA(0xd72c29ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f86ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x27567fff),
        Color::fromRGBA(0xd5c05dff),
        Color::fromRGBA(0xfed955ff),
        Color::fromRGBA(0xfbd756ff),
        Color::fromRGBA(0xfbd755ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd956ff),
        Color::fromRGBA(0xf3af4bff),
        Color::fromRGBA(0xde5132ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5a5aff),
        Color::fromRGBA(0xe98e8eff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x084385ff),
        Color::fromRGBA(0x9e9f68ff),
        Color::fromRGBA(0xfed955ff),
        Color::fromRGBA(0xfcd855ff),
        Color::fromRGBA(0xfbd755ff),
        Color::fromRGBA(0xfcd956ff),
        Color::fromRGBA(0xfad354ff),
        Color::fromRGBA(0xec9043ff),
        Color::fromRGBA(0xd93a2cff),
        Color::fromRGBA(0xd52527ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5959ff),
        Color::fromRGBA(0xea9393ff),
        Color::fromRGBA(0xf5cdcdff),
        Color::fromRGBA(0xfcf3f3ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x5d7774ff),
        Color::fromRGBA(0xf4d357ff),
        Color::fromRGBA(0xfcd855ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcda56ff),
        Color::fromRGBA(0xf8c551ff),
        Color::fromRGBA(0xe56f3aff),
        Color::fromRGBA(0xd72c29ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5959ff),
        Color::fromRGBA(0xea9393ff),
        Color::fromRGBA(0xf5cdcdff),
        Color::fromRGBA(0xfcf3f3ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f86ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x27567fff),
        Color::fromRGBA(0xd5c05dff),
        Color::fromRGBA(0xfed955ff),
        Color::fromRGBA(0xfcd856ff),
        Color::fromRGBA(0xfcd956ff),
        Color::fromRGBA(0xf3af4bff),
        Color::fromRGBA(0xde5132ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5959ff),
        Color::fromRGBA(0xea9393ff),
        Color::fromRGBA(0xf5cdcdff),
        Color::fromRGBA(0xfcf3f3ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x084385ff),
        Color::fromRGBA(0x9e9f68ff),
        Color::fromRGBA(0xfed955ff),
        Color::fromRGBA(0xfcd956ff),
        Color::fromRGBA(0xfad354ff),
        Color::fromRGBA(0xec9043ff),
        Color::fromRGBA(0xd93a2cff),
        Color::fromRGBA(0xd52527ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd62828ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5959ff),
        Color::fromRGBA(0xea9393ff),
        Color::fromRGBA(0xf5cdcdff),
        Color::fromRGBA(0xfcf3f3ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0x003f87ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x5d7774ff),
        Color::fromRGBA(0xf4d357ff),
        Color::fromRGBA(0xfdda56ff),
        Color::fromRGBA(0xf8c551ff),
        Color::fromRGBA(0xe56f3aff),
        Color::fromRGBA(0xd72c29ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd62827ff),
        Color::fromRGBA(0xd52727ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5959ff),
        Color::fromRGBA(0xea9393ff),
        Color::fromRGBA(0xf5cdcdff),
        Color::fromRGBA(0xfcf3f3ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xf8fbfaff),
        Color::fromRGBA(0xe9f3eeff),
        Color::fromRGBA(0xd2e7ddff),
        Color::fromRGBA(0xb7d9c8ff),
        Color::fromRGBA(0x003f86ff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x27567fff),
        Color::fromRGBA(0xd5c15dff),
        Color::fromRGBA(0xfeda55ff),
        Color::fromRGBA(0xf3af4bff),
        Color::fromRGBA(0xde5132ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd52627ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5959ff),
        Color::fromRGBA(0xea9393ff),
        Color::fromRGBA(0xf5cdcdff),
        Color::fromRGBA(0xfcf3f3ff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xf8fbfaff),
        Color::fromRGBA(0xe9f3eeff),
        Color::fromRGBA(0xd3e8ddff),
        Color::fromRGBA(0xb5d8c6ff),
        Color::fromRGBA(0x91c6acff),
        Color::fromRGBA(0x6cb28fff),
        Color::fromRGBA(0x49a074ff),
        Color::fromRGBA(0x2b905eff),
        Color::fromRGBA(0x14844cff),
        Color::fromRGBA(0x077d42ff),
        Color::fromRGBA(0x003e87ff),
        Color::fromRGBA(0x084385ff),
        Color::fromRGBA(0x9ea068ff),
        Color::fromRGBA(0xfdd554ff),
        Color::fromRGBA(0xec9043ff),
        Color::fromRGBA(0xd9392bff),
        Color::fromRGBA(0xd42224ff),
        Color::fromRGBA(0xd52525ff),
        Color::fromRGBA(0xd83333ff),
        Color::fromRGBA(0xdf5959ff),
        Color::fromRGBA(0xea9393ff),
        Color::fromRGBA(0xf6cdceff),
        Color::fromRGBA(0xfef4f4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefefeff),
        Color::fromRGBA(0xf8fbfaff),
        Color::fromRGBA(0xe9f3eeff),
        Color::fromRGBA(0xd3e8ddff),
        Color::fromRGBA(0xb5d8c6ff),
        Color::fromRGBA(0x91c6acff),
        Color::fromRGBA(0x6cb28fff),
        Color::fromRGBA(0x49a074ff),
        Color::fromRGBA(0x2b905eff),
        Color::fromRGBA(0x14844cff),
        Color::fromRGBA(0x067d41ff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x00783aff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x003d87ff),
        Color::fromRGBA(0x5d7975ff),
        Color::fromRGBA(0xf0c051ff),
        Color::fromRGBA(0xe56c37ff),
        Color::fromRGBA(0xd62a27ff),
        Color::fromRGBA(0xd93334ff),
        Color::fromRGBA(0xe25b5bff),
        Color::fromRGBA(0xee9596ff),
        Color::fromRGBA(0xf9cfd0ff),
        Color::fromRGBA(0xfef3f4ff),
        Color::fromRGBA(0xf9fdfcff),
        Color::fromRGBA(0xeaf6f1ff),
        Color::fromRGBA(0xd3e8deff),
        Color::fromRGBA(0xb5d8c6ff),
        Color::fromRGBA(0x91c6acff),
        Color::fromRGBA(0x6cb28fff),
        Color::fromRGBA(0x49a074ff),
        Color::fromRGBA(0x2b905eff),
        Color::fromRGBA(0x14844cff),
        Color::fromRGBA(0x067d41ff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x00783aff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x2e597dff),
        Color::fromRGBA(0xcc9653ff),
        Color::fromRGBA(0xe66041ff),
        Color::fromRGBA(0xde595aff),
        Color::fromRGBA(0xe28f8dff),
        Color::fromRGBA(0xdec1bcff),
        Color::fromRGBA(0xcfdbd0ff),
        Color::fromRGBA(0xb4dac8ff),
        Color::fromRGBA(0x91c8aeff),
        Color::fromRGBA(0x6cb38fff),
        Color::fromRGBA(0x48a074ff),
        Color::fromRGBA(0x2b905dff),
        Color::fromRGBA(0x14844cff),
        Color::fromRGBA(0x067d41ff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x00783aff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x8f7a67ff),
        Color::fromRGBA(0xbc8164ff),
        Color::fromRGBA(0x9a9582ff),
        Color::fromRGBA(0x79ac8dff),
        Color::fromRGBA(0x54a87fff),
        Color::fromRGBA(0x329765ff),
        Color::fromRGBA(0x188750ff),
        Color::fromRGBA(0x077d42ff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x007739ff),
        Color::fromRGBA(0x00783aff),
        Color::fromRGBA(0x00793bff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x00793cff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff),
        Color::fromRGBA(0x007a3dff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;
