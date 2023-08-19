<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00257ffd),
        Color::fromRGBA(0x01267efd),
        Color::fromRGBA(0xa28c46fe),
        Color::fromRGBA(0xfec626ff),
        Color::fromRGBA(0xfac427ff),
        Color::fromRGBA(0xfac427ff),
        Color::fromRGBA(0xfec626ff),
        Color::fromRGBA(0xa28c46fe),
        Color::fromRGBA(0x01267efd),
        Color::fromRGBA(0x00257ffd),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0xa48d45ff),
        Color::fromRGBA(0xffc924ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc924ff),
        Color::fromRGBA(0xa48d45ff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0xa48e45ff),
        Color::fromRGBA(0xffcb24ff),
        Color::fromRGBA(0xfac325ff),
        Color::fromRGBA(0xfac325ff),
        Color::fromRGBA(0xffcb24ff),
        Color::fromRGBA(0xa48e45ff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x02277eff),
        Color::fromRGBA(0x917f42ff),
        Color::fromRGBA(0xdfad1fff),
        Color::fromRGBA(0xb78f1bff),
        Color::fromRGBA(0xb78f1bff),
        Color::fromRGBA(0xdfad1fff),
        Color::fromRGBA(0x917e42ff),
        Color::fromRGBA(0x02277eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x02277eff),
        Color::fromRGBA(0x907e42ff),
        Color::fromRGBA(0x8f6f13ff),
        Color::fromRGBA(0x997716ff),
        Color::fromRGBA(0x997716ff),
        Color::fromRGBA(0x8f6f13ff),
        Color::fromRGBA(0x907e42ff),
        Color::fromRGBA(0x02277eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0xa58f45ff),
        Color::fromRGBA(0xae8717ff),
        Color::fromRGBA(0x8e6f15ff),
        Color::fromRGBA(0x8e6e15ff),
        Color::fromRGBA(0xad8717ff),
        Color::fromRGBA(0xa58f45ff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0xa79045ff),
        Color::fromRGBA(0xcea01cff),
        Color::fromRGBA(0x5a460dff),
        Color::fromRGBA(0x59460dff),
        Color::fromRGBA(0xcea01cff),
        Color::fromRGBA(0xa78f46ff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0xa48d45ff),
        Color::fromRGBA(0xffc924ff),
        Color::fromRGBA(0xb28b1aff),
        Color::fromRGBA(0xb28b1aff),
        Color::fromRGBA(0xffc924ff),
        Color::fromRGBA(0xa48d45ff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0xa48d45ff),
        Color::fromRGBA(0xffca24ff),
        Color::fromRGBA(0xefba23ff),
        Color::fromRGBA(0xefba23ff),
        Color::fromRGBA(0xffca24ff),
        Color::fromRGBA(0xa48d45ff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0xa48d45ff),
        Color::fromRGBA(0xffc924ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc924ff),
        Color::fromRGBA(0xa48d45ff),
        Color::fromRGBA(0x01267eff),
        Color::fromRGBA(0x00257fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00257ffd),
        Color::fromRGBA(0x01267efd),
        Color::fromRGBA(0xa28c46fe),
        Color::fromRGBA(0xfec626ff),
        Color::fromRGBA(0xfac427ff),
        Color::fromRGBA(0xfac427ff),
        Color::fromRGBA(0xfec626ff),
        Color::fromRGBA(0xa28c46fe),
        Color::fromRGBA(0x01267efd),
        Color::fromRGBA(0x00257ffd),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00267ffd),
        Color::fromRGBA(0x00267ffd)
    ],
    '32x21' => [
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x002380fe),
        Color::fromRGBA(0x5a5f5ffe),
        Color::fromRGBA(0xfac427ff),
        Color::fromRGBA(0xfbc527ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc527ff),
        Color::fromRGBA(0xfac427ff),
        Color::fromRGBA(0x5a5e5ffe),
        Color::fromRGBA(0x002380fe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc625ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc625ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfec726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc626ff),
        Color::fromRGBA(0xffc826ff),
        Color::fromRGBA(0xeab622ff),
        Color::fromRGBA(0xeab622ff),
        Color::fromRGBA(0xffc826ff),
        Color::fromRGBA(0xffc626ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xfec726ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5b5f5fff),
        Color::fromRGBA(0xeab723ff),
        Color::fromRGBA(0xf0bb23ff),
        Color::fromRGBA(0xffc826ff),
        Color::fromRGBA(0xfec826ff),
        Color::fromRGBA(0x8a6c14ff),
        Color::fromRGBA(0x8a6c14ff),
        Color::fromRGBA(0xfec826ff),
        Color::fromRGBA(0xffc826ff),
        Color::fromRGBA(0xf0bb23ff),
        Color::fromRGBA(0xeab723ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5d615fff),
        Color::fromRGBA(0xc2981dff),
        Color::fromRGBA(0x503e0bff),
        Color::fromRGBA(0xc4991dff),
        Color::fromRGBA(0xe5b322ff),
        Color::fromRGBA(0x352907ff),
        Color::fromRGBA(0x352907ff),
        Color::fromRGBA(0xe5b322ff),
        Color::fromRGBA(0xc4991dff),
        Color::fromRGBA(0x503e0bff),
        Color::fromRGBA(0xc2981dff),
        Color::fromRGBA(0x5d615fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5b5f5fff),
        Color::fromRGBA(0xf7c125ff),
        Color::fromRGBA(0x58440dff),
        Color::fromRGBA(0x735911ff),
        Color::fromRGBA(0xf5c225ff),
        Color::fromRGBA(0x654f0fff),
        Color::fromRGBA(0x654f0fff),
        Color::fromRGBA(0xf5c225ff),
        Color::fromRGBA(0x725911ff),
        Color::fromRGBA(0x58440dff),
        Color::fromRGBA(0xf7c125ff),
        Color::fromRGBA(0x5b5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xffc927ff),
        Color::fromRGBA(0xb8901bff),
        Color::fromRGBA(0x49390aff),
        Color::fromRGBA(0xf4bf24ff),
        Color::fromRGBA(0x725911ff),
        Color::fromRGBA(0x725911ff),
        Color::fromRGBA(0xf4bf24ff),
        Color::fromRGBA(0x48380aff),
        Color::fromRGBA(0xb8901bff),
        Color::fromRGBA(0xffc927ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfec626ff),
        Color::fromRGBA(0xedb923ff),
        Color::fromRGBA(0x4d3c0bff),
        Color::fromRGBA(0xd6a720ff),
        Color::fromRGBA(0x755b11ff),
        Color::fromRGBA(0x755b11ff),
        Color::fromRGBA(0xd6a720ff),
        Color::fromRGBA(0x4d3c0bff),
        Color::fromRGBA(0xedb923ff),
        Color::fromRGBA(0xfec626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xfdc625ff),
        Color::fromRGBA(0x69510fff),
        Color::fromRGBA(0x997716ff),
        Color::fromRGBA(0x5c480dff),
        Color::fromRGBA(0x5c480dff),
        Color::fromRGBA(0x987716ff),
        Color::fromRGBA(0x69510fff),
        Color::fromRGBA(0xfdc625ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc926ff),
        Color::fromRGBA(0x896b14ff),
        Color::fromRGBA(0x362a08ff),
        Color::fromRGBA(0x1f1804ff),
        Color::fromRGBA(0x1f1804ff),
        Color::fromRGBA(0x362a08ff),
        Color::fromRGBA(0x896b14ff),
        Color::fromRGBA(0xffc926ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xecb823ff),
        Color::fromRGBA(0xe5b422ff),
        Color::fromRGBA(0x6a530fff),
        Color::fromRGBA(0x6a530fff),
        Color::fromRGBA(0xe5b422ff),
        Color::fromRGBA(0xecb823ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffca26ff),
        Color::fromRGBA(0x6f5610ff),
        Color::fromRGBA(0x6f5610ff),
        Color::fromRGBA(0xffca26ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc826ff),
        Color::fromRGBA(0xae881aff),
        Color::fromRGBA(0xae881aff),
        Color::fromRGBA(0xffc826ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc625ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc625ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc726ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xffc725ff),
        Color::fromRGBA(0xfdc626ff),
        Color::fromRGBA(0x5a5f5fff),
        Color::fromRGBA(0x002380ff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267eff),
        Color::fromRGBA(0x00267fff),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x002380fe),
        Color::fromRGBA(0x5a5f5ffe),
        Color::fromRGBA(0xfac427ff),
        Color::fromRGBA(0xfbc527ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc427ff),
        Color::fromRGBA(0xfbc527ff),
        Color::fromRGBA(0xfac427ff),
        Color::fromRGBA(0x5a5e5ffe),
        Color::fromRGBA(0x002380fe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe),
        Color::fromRGBA(0x00267ffe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
