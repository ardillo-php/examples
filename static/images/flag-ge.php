<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffdfdfd),
        Color::fromRGBA(0xfff4f4fd),
        Color::fromRGBA(0xfffefefd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xffd5d5fd),
        Color::fromRGBA(0xff1818ff),
        Color::fromRGBA(0xff1818ff),
        Color::fromRGBA(0xffd5d5fd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffefefd),
        Color::fromRGBA(0xfff4f4fd),
        Color::fromRGBA(0xfffdfdfd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd1d1ff),
        Color::fromRGBA(0xff7a7aff),
        Color::fromRGBA(0xffdedeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffdedeff),
        Color::fromRGBA(0xff7a7aff),
        Color::fromRGBA(0xffd1d1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffb0b0ff),
        Color::fromRGBA(0xff4747ff),
        Color::fromRGBA(0xffc2c2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffc2c2ff),
        Color::fromRGBA(0xff4747ff),
        Color::fromRGBA(0xffb0b0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfff8f8ff),
        Color::fromRGBA(0xffd8d8ff),
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xffd8d8ff),
        Color::fromRGBA(0xfff8f8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0xff5858ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff5858ff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0xff5858ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff0808ff),
        Color::fromRGBA(0xff5858ff),
        Color::fromRGBA(0xff6b6bff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6c6cff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfff8f8ff),
        Color::fromRGBA(0xffd8d8ff),
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xffd8d8ff),
        Color::fromRGBA(0xfff8f8ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffb0b0ff),
        Color::fromRGBA(0xff4747ff),
        Color::fromRGBA(0xffc2c2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffc2c2ff),
        Color::fromRGBA(0xff4747ff),
        Color::fromRGBA(0xffb0b0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd1d1ff),
        Color::fromRGBA(0xff7a7aff),
        Color::fromRGBA(0xffdedeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xff1515ff),
        Color::fromRGBA(0xffd5d5ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffdedeff),
        Color::fromRGBA(0xff7a7aff),
        Color::fromRGBA(0xffd1d1ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffdfdfd),
        Color::fromRGBA(0xfff4f4fd),
        Color::fromRGBA(0xfffefefd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xffd5d5fd),
        Color::fromRGBA(0xff1818ff),
        Color::fromRGBA(0xff1818ff),
        Color::fromRGBA(0xffd5d5fd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffefefd),
        Color::fromRGBA(0xfff4f4fd),
        Color::fromRGBA(0xfffdfdfd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd)
    ],
    '32x21' => [
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xffcbcbfe),
        Color::fromRGBA(0xff1212ff),
        Color::fromRGBA(0xff0303ff),
        Color::fromRGBA(0xff0303ff),
        Color::fromRGBA(0xff1212ff),
        Color::fromRGBA(0xffcbcbfe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xfff3f3ff),
        Color::fromRGBA(0xfff6f6ff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xfff6f6ff),
        Color::fromRGBA(0xfff3f3ff),
        Color::fromRGBA(0xfffefeff),
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
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff9595ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xff9595ff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffdfdfff),
        Color::fromRGBA(0xff8888ff),
        Color::fromRGBA(0xff2b2bff),
        Color::fromRGBA(0xff4949ff),
        Color::fromRGBA(0xff9696ff),
        Color::fromRGBA(0xfff2f2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfff2f2ff),
        Color::fromRGBA(0xff9696ff),
        Color::fromRGBA(0xff4949ff),
        Color::fromRGBA(0xff2b2bff),
        Color::fromRGBA(0xff8888ff),
        Color::fromRGBA(0xffdfdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd0d0ff),
        Color::fromRGBA(0xff4b4bff),
        Color::fromRGBA(0xff1919ff),
        Color::fromRGBA(0xff2929ff),
        Color::fromRGBA(0xff6060ff),
        Color::fromRGBA(0xffededff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffededff),
        Color::fromRGBA(0xff6060ff),
        Color::fromRGBA(0xff2929ff),
        Color::fromRGBA(0xff1a1aff),
        Color::fromRGBA(0xff4b4bff),
        Color::fromRGBA(0xffd0d0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffbfbff),
        Color::fromRGBA(0xfff2f2ff),
        Color::fromRGBA(0xff4e4eff),
        Color::fromRGBA(0xff7f7fff),
        Color::fromRGBA(0xfff7f7ff),
        Color::fromRGBA(0xfffdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffdfdff),
        Color::fromRGBA(0xfff7f7ff),
        Color::fromRGBA(0xff7f7fff),
        Color::fromRGBA(0xff4e4eff),
        Color::fromRGBA(0xfff2f2ff),
        Color::fromRGBA(0xfffbfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xffd2d2ff),
        Color::fromRGBA(0xffdedeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffdedeff),
        Color::fromRGBA(0xffd2d2ff),
        Color::fromRGBA(0xfffcfcff),
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
        Color::fromRGBA(0xffccccff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffccccff),
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
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff5454ff),
        Color::fromRGBA(0xff0606ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0606ff),
        Color::fromRGBA(0xff5454ff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff5454ff),
        Color::fromRGBA(0xff0606ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0606ff),
        Color::fromRGBA(0xff5454ff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
        Color::fromRGBA(0xff6969ff),
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
        Color::fromRGBA(0xffccccff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffccccff),
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
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xffd2d2ff),
        Color::fromRGBA(0xffdedeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffdedeff),
        Color::fromRGBA(0xffd2d2ff),
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffbfbff),
        Color::fromRGBA(0xfff2f2ff),
        Color::fromRGBA(0xff4e4eff),
        Color::fromRGBA(0xff7f7fff),
        Color::fromRGBA(0xfff7f7ff),
        Color::fromRGBA(0xfffdfdff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffdfdff),
        Color::fromRGBA(0xfff7f7ff),
        Color::fromRGBA(0xff7f7fff),
        Color::fromRGBA(0xff4e4eff),
        Color::fromRGBA(0xfff2f2ff),
        Color::fromRGBA(0xfffbfbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffd0d0ff),
        Color::fromRGBA(0xff4b4bff),
        Color::fromRGBA(0xff1919ff),
        Color::fromRGBA(0xff2929ff),
        Color::fromRGBA(0xff6060ff),
        Color::fromRGBA(0xffededff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffededff),
        Color::fromRGBA(0xff6060ff),
        Color::fromRGBA(0xff2929ff),
        Color::fromRGBA(0xff1a1aff),
        Color::fromRGBA(0xff4b4bff),
        Color::fromRGBA(0xffd0d0ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffdfdfff),
        Color::fromRGBA(0xff8888ff),
        Color::fromRGBA(0xff2b2bff),
        Color::fromRGBA(0xff4949ff),
        Color::fromRGBA(0xff9696ff),
        Color::fromRGBA(0xfff2f2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfff2f2ff),
        Color::fromRGBA(0xff9696ff),
        Color::fromRGBA(0xff4949ff),
        Color::fromRGBA(0xff2b2bff),
        Color::fromRGBA(0xff8888ff),
        Color::fromRGBA(0xffdfdfff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffcfcff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xff9595ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xff9595ff),
        Color::fromRGBA(0xff6a6aff),
        Color::fromRGBA(0xfffcfcff),
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
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xfff3f3ff),
        Color::fromRGBA(0xfff6f6ff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0000ff),
        Color::fromRGBA(0xff0f0fff),
        Color::fromRGBA(0xffcbcbff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xfff6f6ff),
        Color::fromRGBA(0xfff3f3ff),
        Color::fromRGBA(0xfffefeff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xffcbcbfe),
        Color::fromRGBA(0xff1212ff),
        Color::fromRGBA(0xff0303ff),
        Color::fromRGBA(0xff0303ff),
        Color::fromRGBA(0xff1212ff),
        Color::fromRGBA(0xffcbcbfe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe),
        Color::fromRGBA(0xfffffffe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;