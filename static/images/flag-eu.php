<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003398fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003398fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x0e3b90ff),
        Color::fromRGBA(0x264a81ff),
        Color::fromRGBA(0x264a81ff),
        Color::fromRGBA(0x0e3b90ff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x1c4488ff),
        Color::fromRGBA(0x3d5774ff),
        Color::fromRGBA(0x16408bff),
        Color::fromRGBA(0x16408bff),
        Color::fromRGBA(0x3d5774ff),
        Color::fromRGBA(0x1c4387ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x33517aff),
        Color::fromRGBA(0x274a81ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x274a81ff),
        Color::fromRGBA(0x33517aff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x18418aff),
        Color::fromRGBA(0x0b3a91ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x0b3a91ff),
        Color::fromRGBA(0x18418aff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x0c3a91ff),
        Color::fromRGBA(0x485e6dff),
        Color::fromRGBA(0x053695ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x053695ff),
        Color::fromRGBA(0x485e6dff),
        Color::fromRGBA(0x0c3a91ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x18418aff),
        Color::fromRGBA(0x0c3a91ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x0c3a91ff),
        Color::fromRGBA(0x18418aff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x33517aff),
        Color::fromRGBA(0x284b80ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x284b80ff),
        Color::fromRGBA(0x33517aff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x1d4487ff),
        Color::fromRGBA(0x3e5873ff),
        Color::fromRGBA(0x17408bff),
        Color::fromRGBA(0x17408bff),
        Color::fromRGBA(0x3e5873ff),
        Color::fromRGBA(0x1d4487ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x0f3c8fff),
        Color::fromRGBA(0x264a81ff),
        Color::fromRGBA(0x264a81ff),
        Color::fromRGBA(0x0f3c8fff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003398fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003299fd),
        Color::fromRGBA(0x003398fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd),
        Color::fromRGBA(0x003399fd)
    ],
    '32x21' => [
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x204685ff),
        Color::fromRGBA(0x204685ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x0f3c8fff),
        Color::fromRGBA(0x365478ff),
        Color::fromRGBA(0x0a3992ff),
        Color::fromRGBA(0x053596ff),
        Color::fromRGBA(0x83814aff),
        Color::fromRGBA(0x83814aff),
        Color::fromRGBA(0x053596ff),
        Color::fromRGBA(0x0a3992ff),
        Color::fromRGBA(0x365478ff),
        Color::fromRGBA(0x0f3c8fff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x375477ff),
        Color::fromRGBA(0xaf9c2fff),
        Color::fromRGBA(0x284b80ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x244883ff),
        Color::fromRGBA(0x244883ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x284b80ff),
        Color::fromRGBA(0xaf9c2fff),
        Color::fromRGBA(0x375477ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x033596ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x0d3a91ff),
        Color::fromRGBA(0x274a81ff),
        Color::fromRGBA(0x093893ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x093893ff),
        Color::fromRGBA(0x274a81ff),
        Color::fromRGBA(0x0d3a91ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x033596ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x0a3893ff),
        Color::fromRGBA(0x6f7655ff),
        Color::fromRGBA(0x4a5f6cff),
        Color::fromRGBA(0x013299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x013299ff),
        Color::fromRGBA(0x4a5f6cff),
        Color::fromRGBA(0x6f7655ff),
        Color::fromRGBA(0x0a3893ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x727754ff),
        Color::fromRGBA(0x4c606aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x4c616aff),
        Color::fromRGBA(0x727754ff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x023497ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x023497ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x033497ff),
        Color::fromRGBA(0x264a81ff),
        Color::fromRGBA(0x1b4388ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x1b4388ff),
        Color::fromRGBA(0x264a81ff),
        Color::fromRGBA(0x033497ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x0a3893ff),
        Color::fromRGBA(0x938b40ff),
        Color::fromRGBA(0x707655ff),
        Color::fromRGBA(0x023398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x023398ff),
        Color::fromRGBA(0x707655ff),
        Color::fromRGBA(0x938b40ff),
        Color::fromRGBA(0x0a3893ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x013497ff),
        Color::fromRGBA(0x264a81ff),
        Color::fromRGBA(0x1d4487ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x1d4487ff),
        Color::fromRGBA(0x264a81ff),
        Color::fromRGBA(0x013497ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x023497ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x013398ff),
        Color::fromRGBA(0x023497ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x0b3992ff),
        Color::fromRGBA(0x727754ff),
        Color::fromRGBA(0x4d616aff),
        Color::fromRGBA(0x023398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x023398ff),
        Color::fromRGBA(0x4d616aff),
        Color::fromRGBA(0x727754ff),
        Color::fromRGBA(0x0b3992ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x707655ff),
        Color::fromRGBA(0x4b606bff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x4b606bff),
        Color::fromRGBA(0x707655ff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x023497ff),
        Color::fromRGBA(0x023497ff),
        Color::fromRGBA(0x0a3992ff),
        Color::fromRGBA(0x294b80ff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x073794ff),
        Color::fromRGBA(0x294b80ff),
        Color::fromRGBA(0x0a3992ff),
        Color::fromRGBA(0x023497ff),
        Color::fromRGBA(0x023497ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x375477ff),
        Color::fromRGBA(0xaf9c2fff),
        Color::fromRGBA(0x284b80ff),
        Color::fromRGBA(0x013299ff),
        Color::fromRGBA(0x234883ff),
        Color::fromRGBA(0x234883ff),
        Color::fromRGBA(0x013299ff),
        Color::fromRGBA(0x284b80ff),
        Color::fromRGBA(0xaf9c2fff),
        Color::fromRGBA(0x375477ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x113d8eff),
        Color::fromRGBA(0x355279ff),
        Color::fromRGBA(0x0b3a91ff),
        Color::fromRGBA(0x053497ff),
        Color::fromRGBA(0x83814aff),
        Color::fromRGBA(0x83814aff),
        Color::fromRGBA(0x053497ff),
        Color::fromRGBA(0x0b3a91ff),
        Color::fromRGBA(0x355279ff),
        Color::fromRGBA(0x113d8eff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x214685ff),
        Color::fromRGBA(0x214685ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003299ff),
        Color::fromRGBA(0x003398ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x00319aff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399ff),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe),
        Color::fromRGBA(0x003399fe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;