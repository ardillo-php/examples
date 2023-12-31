<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xcd2535ff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xdf747fff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfefdfdff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0xfdfefeff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x88a38eff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x436d4dff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff)
    ],
    '32x16' => [
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xce2939ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xcd2838ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xce2a39ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xedb2b8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0xbeccc1ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x487051ff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x466f4fff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff),
        Color::fromRGBA(0x477050ff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;
