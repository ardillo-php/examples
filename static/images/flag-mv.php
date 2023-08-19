<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd30f33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd30f33ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xbd1a34ff),
        Color::fromRGBA(0x982e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x962d34ff),
        Color::fromRGBA(0x962d34ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x982e35ff),
        Color::fromRGBA(0xbd1a34ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0x893636ff),
        Color::fromRGBA(0x067a39ff),
        Color::fromRGBA(0x057b39ff),
        Color::fromRGBA(0x057b39ff),
        Color::fromRGBA(0x047a38ff),
        Color::fromRGBA(0x1c864bff),
        Color::fromRGBA(0x288c54ff),
        Color::fromRGBA(0x077c3bff),
        Color::fromRGBA(0x057a39ff),
        Color::fromRGBA(0x057b39ff),
        Color::fromRGBA(0x067a39ff),
        Color::fromRGBA(0x893636ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0x873736ff),
        Color::fromRGBA(0x017d39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x108647ff),
        Color::fromRGBA(0x78bb97ff),
        Color::fromRGBA(0x208e53ff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x007e39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x017d39ff),
        Color::fromRGBA(0x873736ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0x873736ff),
        Color::fromRGBA(0x017d39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007c38ff),
        Color::fromRGBA(0x2c945cff),
        Color::fromRGBA(0x80be9cff),
        Color::fromRGBA(0x007d38ff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x017d39ff),
        Color::fromRGBA(0x873736ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0x873736ff),
        Color::fromRGBA(0x017d39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x108647ff),
        Color::fromRGBA(0x78bb97ff),
        Color::fromRGBA(0x208e53ff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x007e39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x017d39ff),
        Color::fromRGBA(0x873736ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0x893636ff),
        Color::fromRGBA(0x067a39ff),
        Color::fromRGBA(0x057b39ff),
        Color::fromRGBA(0x057b39ff),
        Color::fromRGBA(0x047a38ff),
        Color::fromRGBA(0x1c864bff),
        Color::fromRGBA(0x288c54ff),
        Color::fromRGBA(0x077c3bff),
        Color::fromRGBA(0x057a39ff),
        Color::fromRGBA(0x057b39ff),
        Color::fromRGBA(0x067a39ff),
        Color::fromRGBA(0x893636ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xbd1a34ff),
        Color::fromRGBA(0x982e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x962d34ff),
        Color::fromRGBA(0x962d34ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x972e35ff),
        Color::fromRGBA(0x982e35ff),
        Color::fromRGBA(0xbd1a34ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd30f33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd50e33ff),
        Color::fromRGBA(0xd30f33ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd),
        Color::fromRGBA(0xd21034fd)
    ],
    '32x21' => [
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xcf1134ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcf1134ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0x724136ff),
        Color::fromRGBA(0x3e5e38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3d5c37ff),
        Color::fromRGBA(0x3c5c37ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5e38ff),
        Color::fromRGBA(0x724136ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0x485837ff),
        Color::fromRGBA(0x00813aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f39ff),
        Color::fromRGBA(0x007f39ff),
        Color::fromRGBA(0x108949ff),
        Color::fromRGBA(0x0e8847ff),
        Color::fromRGBA(0x00803aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x00813aff),
        Color::fromRGBA(0x485837ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x0e8444ff),
        Color::fromRGBA(0x75b994ff),
        Color::fromRGBA(0x7fbe9cff),
        Color::fromRGBA(0x249055ff),
        Color::fromRGBA(0x017e3aff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x047f3cff),
        Color::fromRGBA(0x89c3a4ff),
        Color::fromRGBA(0xb5d9c6ff),
        Color::fromRGBA(0x18894cff),
        Color::fromRGBA(0x007c38ff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007c38ff),
        Color::fromRGBA(0x289259ff),
        Color::fromRGBA(0xdfefe7ff),
        Color::fromRGBA(0x53a87aff),
        Color::fromRGBA(0x007b36ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007c37ff),
        Color::fromRGBA(0x409e6cff),
        Color::fromRGBA(0xe6f2ecff),
        Color::fromRGBA(0x339761ff),
        Color::fromRGBA(0x007c37ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007c38ff),
        Color::fromRGBA(0x289259ff),
        Color::fromRGBA(0xdfefe7ff),
        Color::fromRGBA(0x53a87aff),
        Color::fromRGBA(0x007b36ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x047f3cff),
        Color::fromRGBA(0x89c3a4ff),
        Color::fromRGBA(0xb5d9c6ff),
        Color::fromRGBA(0x18894cff),
        Color::fromRGBA(0x007c38ff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x0e8444ff),
        Color::fromRGBA(0x75b994ff),
        Color::fromRGBA(0x7fbe9cff),
        Color::fromRGBA(0x249055ff),
        Color::fromRGBA(0x017e3aff),
        Color::fromRGBA(0x007d39ff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007e3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x4a5637ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0x485837ff),
        Color::fromRGBA(0x00813aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f39ff),
        Color::fromRGBA(0x007f39ff),
        Color::fromRGBA(0x108949ff),
        Color::fromRGBA(0x0e8847ff),
        Color::fromRGBA(0x00803aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x007f3aff),
        Color::fromRGBA(0x00813aff),
        Color::fromRGBA(0x485837ff),
        Color::fromRGBA(0xd01034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0x724136ff),
        Color::fromRGBA(0x3e5e38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3d5c37ff),
        Color::fromRGBA(0x3c5c37ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5d38ff),
        Color::fromRGBA(0x3e5e38ff),
        Color::fromRGBA(0x724136ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xcf1134ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcd1234ff),
        Color::fromRGBA(0xcf1134ff),
        Color::fromRGBA(0xd11034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd20f33ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034ff),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe),
        Color::fromRGBA(0xd21034fe)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
