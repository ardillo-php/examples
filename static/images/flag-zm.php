<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x188a00fd),
        Color::fromRGBA(0x1e8800fd),
        Color::fromRGBA(0x238700fd),
        Color::fromRGBA(0x1c8900fd),
        Color::fromRGBA(0x1a8900fd),
        Color::fromRGBA(0x1d8800fd),
        Color::fromRGBA(0x218700fd),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x178a00ff),
        Color::fromRGBA(0x2c8400ff),
        Color::fromRGBA(0x6e7500ff),
        Color::fromRGBA(0x867700ff),
        Color::fromRGBA(0x827600ff),
        Color::fromRGBA(0x797200ff),
        Color::fromRGBA(0x4a7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x178a00ff),
        Color::fromRGBA(0x258700ff),
        Color::fromRGBA(0x557d00ff),
        Color::fromRGBA(0x757600ff),
        Color::fromRGBA(0x388000ff),
        Color::fromRGBA(0x1b8800ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x198900ff),
        Color::fromRGBA(0x2e7e01ff),
        Color::fromRGBA(0x357902ff),
        Color::fromRGBA(0x1e7500ff),
        Color::fromRGBA(0x197400ff),
        Color::fromRGBA(0x318500ff),
        Color::fromRGBA(0x3a8800ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x1b8800ff),
        Color::fromRGBA(0x944809ff),
        Color::fromRGBA(0xc7270eff),
        Color::fromRGBA(0x321503ff),
        Color::fromRGBA(0x0e1400ff),
        Color::fromRGBA(0xb46a00ff),
        Color::fromRGBA(0xdf7f00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x1b8800ff),
        Color::fromRGBA(0xa0410aff),
        Color::fromRGBA(0xd91d0fff),
        Color::fromRGBA(0x350903ff),
        Color::fromRGBA(0x0d0800ff),
        Color::fromRGBA(0xc36700ff),
        Color::fromRGBA(0xf37e00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x1b8800ff),
        Color::fromRGBA(0xa0410aff),
        Color::fromRGBA(0xd81d0fff),
        Color::fromRGBA(0x350903ff),
        Color::fromRGBA(0x0d0800ff),
        Color::fromRGBA(0xc26700ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x1b8800ff),
        Color::fromRGBA(0xa0410aff),
        Color::fromRGBA(0xd81d0fff),
        Color::fromRGBA(0x350903ff),
        Color::fromRGBA(0x0d0800ff),
        Color::fromRGBA(0xc26700ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x1b8800ff),
        Color::fromRGBA(0xa0410aff),
        Color::fromRGBA(0xd81d0fff),
        Color::fromRGBA(0x350903ff),
        Color::fromRGBA(0x0d0800ff),
        Color::fromRGBA(0xc26700ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x1b8800ff),
        Color::fromRGBA(0xa0410aff),
        Color::fromRGBA(0xd81d0fff),
        Color::fromRGBA(0x350903ff),
        Color::fromRGBA(0x0d0800ff),
        Color::fromRGBA(0xc36700ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x198a00fd),
        Color::fromRGBA(0x188a00fd),
        Color::fromRGBA(0x1b8800fd),
        Color::fromRGBA(0x9e420afe),
        Color::fromRGBA(0xd51f0fff),
        Color::fromRGBA(0x340b03ff),
        Color::fromRGBA(0x0d0b00ff),
        Color::fromRGBA(0xc06700ff),
        Color::fromRGBA(0xee7e00ff)
    ],
    '32x21' => [
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x188a00fe),
        Color::fromRGBA(0x188a00fe),
        Color::fromRGBA(0x188a00fe),
        Color::fromRGBA(0x198900fe),
        Color::fromRGBA(0x188a00fe),
        Color::fromRGBA(0x188a00fe),
        Color::fromRGBA(0x198900fe),
        Color::fromRGBA(0x188a00fe),
        Color::fromRGBA(0x188a00fe),
        Color::fromRGBA(0x188a00fe),
        Color::fromRGBA(0x188a00fe),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x188900ff),
        Color::fromRGBA(0x238600ff),
        Color::fromRGBA(0x258600ff),
        Color::fromRGBA(0x1a8900ff),
        Color::fromRGBA(0x168a00ff),
        Color::fromRGBA(0x1b8800ff),
        Color::fromRGBA(0x1b8800ff),
        Color::fromRGBA(0x168a00ff),
        Color::fromRGBA(0x168a00ff),
        Color::fromRGBA(0x1a8900ff),
        Color::fromRGBA(0x228600ff),
        Color::fromRGBA(0x1c8800ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x188900ff),
        Color::fromRGBA(0x527600ff),
        Color::fromRGBA(0x956c00ff),
        Color::fromRGBA(0x897200ff),
        Color::fromRGBA(0x607a00ff),
        Color::fromRGBA(0x887b00ff),
        Color::fromRGBA(0x6f7800ff),
        Color::fromRGBA(0x4b7e00ff),
        Color::fromRGBA(0x697500ff),
        Color::fromRGBA(0x876f00ff),
        Color::fromRGBA(0x896d00ff),
        Color::fromRGBA(0x2e8100ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x208600ff),
        Color::fromRGBA(0x557700ff),
        Color::fromRGBA(0x976d00ff),
        Color::fromRGBA(0xb06700ff),
        Color::fromRGBA(0xd27000ff),
        Color::fromRGBA(0xd27000ff),
        Color::fromRGBA(0xbd6400ff),
        Color::fromRGBA(0xaf6100ff),
        Color::fromRGBA(0x966c00ff),
        Color::fromRGBA(0x587900ff),
        Color::fromRGBA(0x1c8800ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198900ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x178a00ff),
        Color::fromRGBA(0x1f8700ff),
        Color::fromRGBA(0x318100ff),
        Color::fromRGBA(0x697500ff),
        Color::fromRGBA(0xa56b00ff),
        Color::fromRGBA(0x7e6e00ff),
        Color::fromRGBA(0x407a00ff),
        Color::fromRGBA(0x1d8700ff),
        Color::fromRGBA(0x178a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x168a00ff),
        Color::fromRGBA(0x358000ff),
        Color::fromRGBA(0x537700ff),
        Color::fromRGBA(0x238500ff),
        Color::fromRGBA(0x168a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x188a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198900ff),
        Color::fromRGBA(0x178a00ff),
        Color::fromRGBA(0x168b00ff),
        Color::fromRGBA(0x168b00ff),
        Color::fromRGBA(0x168b00ff),
        Color::fromRGBA(0x188b00ff),
        Color::fromRGBA(0x198b00ff),
        Color::fromRGBA(0x188b00ff),
        Color::fromRGBA(0x188b00ff),
        Color::fromRGBA(0x168a00ff),
        Color::fromRGBA(0x168a00ff),
        Color::fromRGBA(0x168a00ff),
        Color::fromRGBA(0x168a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x178a00ff),
        Color::fromRGBA(0x437303ff),
        Color::fromRGBA(0x7b5507ff),
        Color::fromRGBA(0x7a5507ff),
        Color::fromRGBA(0x7a5507ff),
        Color::fromRGBA(0x384d03ff),
        Color::fromRGBA(0x0c4500ff),
        Color::fromRGBA(0x0c4500ff),
        Color::fromRGBA(0x104800ff),
        Color::fromRGBA(0x647400ff),
        Color::fromRGBA(0x848400ff),
        Color::fromRGBA(0x828300ff),
        Color::fromRGBA(0x828300ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x705b07ff),
        Color::fromRGBA(0xe21d10ff),
        Color::fromRGBA(0xe01e10ff),
        Color::fromRGBA(0xe11f10ff),
        Color::fromRGBA(0x590e06ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080300ff),
        Color::fromRGBA(0xb35e00ff),
        Color::fromRGBA(0xf57e00ff),
        Color::fromRGBA(0xf17c00ff),
        Color::fromRGBA(0xf17c00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0xef7d00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x198a00ff),
        Color::fromRGBA(0x158b00ff),
        Color::fromRGBA(0x6f5b07ff),
        Color::fromRGBA(0xdf1f10ff),
        Color::fromRGBA(0xde1f10ff),
        Color::fromRGBA(0xde2010ff),
        Color::fromRGBA(0x581006ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x000000ff),
        Color::fromRGBA(0x080500ff),
        Color::fromRGBA(0xb15e00ff),
        Color::fromRGBA(0xf27e00ff),
        Color::fromRGBA(0xef7c00ff),
        Color::fromRGBA(0xef7c00ff),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x198a00fe),
        Color::fromRGBA(0x158b00fe),
        Color::fromRGBA(0x6e5b06fe),
        Color::fromRGBA(0xdd200fff),
        Color::fromRGBA(0xdb210fff),
        Color::fromRGBA(0xdc210fff),
        Color::fromRGBA(0x571106ff),
        Color::fromRGBA(0x000100ff),
        Color::fromRGBA(0x000100ff),
        Color::fromRGBA(0x080600ff),
        Color::fromRGBA(0xaf5f00ff),
        Color::fromRGBA(0xef7e00ff),
        Color::fromRGBA(0xec7d00ff),
        Color::fromRGBA(0xec7d00ff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
