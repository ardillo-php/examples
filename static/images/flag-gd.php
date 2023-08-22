<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x10' => [
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xd70c23ff),
        Color::fromRGBA(0xcf0625ff),
        Color::fromRGBA(0xc30029ff),
        Color::fromRGBA(0xd94622ff),
        Color::fromRGBA(0xd12324ff),
        Color::fromRGBA(0xc60028ff),
        Color::fromRGBA(0xd63723ff),
        Color::fromRGBA(0xd63723ff),
        Color::fromRGBA(0xc60028ff),
        Color::fromRGBA(0xd12324ff),
        Color::fromRGBA(0xd94621ff),
        Color::fromRGBA(0xc30029ff),
        Color::fromRGBA(0xcf0625ff),
        Color::fromRGBA(0xd70c23ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xd10b25ff),
        Color::fromRGBA(0x964434ff),
        Color::fromRGBA(0xca8625ff),
        Color::fromRGBA(0xf48919ff),
        Color::fromRGBA(0xe6981dff),
        Color::fromRGBA(0xdf8d1fff),
        Color::fromRGBA(0xdf811fff),
        Color::fromRGBA(0xe4921dff),
        Color::fromRGBA(0xe3921dff),
        Color::fromRGBA(0xdf811fff),
        Color::fromRGBA(0xdf8d1fff),
        Color::fromRGBA(0xe6981cff),
        Color::fromRGBA(0xf48919ff),
        Color::fromRGBA(0xca8625ff),
        Color::fromRGBA(0x964434ff),
        Color::fromRGBA(0xd10b25ff),
        Color::fromRGBA(0xdb0a21ff),
        Color::fromRGBA(0x45584cff),
        Color::fromRGBA(0x0d975aff),
        Color::fromRGBA(0x96b732ff),
        Color::fromRGBA(0xf7d915ff),
        Color::fromRGBA(0xffe210ff),
        Color::fromRGBA(0xfdde14ff),
        Color::fromRGBA(0xfee114ff),
        Color::fromRGBA(0xfee114ff),
        Color::fromRGBA(0xfdde14ff),
        Color::fromRGBA(0xffe210ff),
        Color::fromRGBA(0xf7d915ff),
        Color::fromRGBA(0x95b733ff),
        Color::fromRGBA(0x0b965aff),
        Color::fromRGBA(0x45584cff),
        Color::fromRGBA(0xdb0a21ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0x4b5349ff),
        Color::fromRGBA(0x007868ff),
        Color::fromRGBA(0x006e63ff),
        Color::fromRGBA(0x228453ff),
        Color::fromRGBA(0xa3ae2fff),
        Color::fromRGBA(0xfcd514ff),
        Color::fromRGBA(0xf4b218ff),
        Color::fromRGBA(0xf4b218ff),
        Color::fromRGBA(0xfcd514ff),
        Color::fromRGBA(0xa3ae2fff),
        Color::fromRGBA(0x228454ff),
        Color::fromRGBA(0x006f62ff),
        Color::fromRGBA(0x007c63ff),
        Color::fromRGBA(0x4b5349ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0xd20724ff),
        Color::fromRGBA(0x6a5f40ff),
        Color::fromRGBA(0x8ab036ff),
        Color::fromRGBA(0x0c7b5aff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x007962ff),
        Color::fromRGBA(0x3d794cff),
        Color::fromRGBA(0xe4691eff),
        Color::fromRGBA(0xe4691eff),
        Color::fromRGBA(0x3d794cff),
        Color::fromRGBA(0x007862ff),
        Color::fromRGBA(0x01775fff),
        Color::fromRGBA(0x06795cff),
        Color::fromRGBA(0x008161ff),
        Color::fromRGBA(0x495449ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0xd50724ff),
        Color::fromRGBA(0x5e5d43ff),
        Color::fromRGBA(0x8b9d36ff),
        Color::fromRGBA(0x177c57ff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x007962ff),
        Color::fromRGBA(0x3c784cff),
        Color::fromRGBA(0xe46a1eff),
        Color::fromRGBA(0xe46a1eff),
        Color::fromRGBA(0x3c784cff),
        Color::fromRGBA(0x007962ff),
        Color::fromRGBA(0x01775fff),
        Color::fromRGBA(0x06795cff),
        Color::fromRGBA(0x008161ff),
        Color::fromRGBA(0x495449ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0x4b5249ff),
        Color::fromRGBA(0x007968ff),
        Color::fromRGBA(0x006e63ff),
        Color::fromRGBA(0x228453ff),
        Color::fromRGBA(0xa3ae2fff),
        Color::fromRGBA(0xfcd514ff),
        Color::fromRGBA(0xf4b218ff),
        Color::fromRGBA(0xf4b218ff),
        Color::fromRGBA(0xfcd514ff),
        Color::fromRGBA(0xa3ae2fff),
        Color::fromRGBA(0x228454ff),
        Color::fromRGBA(0x006f62ff),
        Color::fromRGBA(0x007c63ff),
        Color::fromRGBA(0x4b5349ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0x45584cff),
        Color::fromRGBA(0x0d965aff),
        Color::fromRGBA(0x96b732ff),
        Color::fromRGBA(0xf7d915ff),
        Color::fromRGBA(0xffe210ff),
        Color::fromRGBA(0xfdde14ff),
        Color::fromRGBA(0xfee114ff),
        Color::fromRGBA(0xfee114ff),
        Color::fromRGBA(0xfdde14ff),
        Color::fromRGBA(0xffe210ff),
        Color::fromRGBA(0xf7d915ff),
        Color::fromRGBA(0x95b733ff),
        Color::fromRGBA(0x0b965aff),
        Color::fromRGBA(0x45584cff),
        Color::fromRGBA(0xdb0a21ff),
        Color::fromRGBA(0xd10b25ff),
        Color::fromRGBA(0x964434ff),
        Color::fromRGBA(0xca8625ff),
        Color::fromRGBA(0xf48919ff),
        Color::fromRGBA(0xe6991cff),
        Color::fromRGBA(0xdf8d1fff),
        Color::fromRGBA(0xdf811fff),
        Color::fromRGBA(0xe4931dff),
        Color::fromRGBA(0xe4931dff),
        Color::fromRGBA(0xdf811fff),
        Color::fromRGBA(0xdf8d1fff),
        Color::fromRGBA(0xe6991cff),
        Color::fromRGBA(0xf48919ff),
        Color::fromRGBA(0xca8625ff),
        Color::fromRGBA(0x954434ff),
        Color::fromRGBA(0xd10b25ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xd70c23ff),
        Color::fromRGBA(0xcf0625ff),
        Color::fromRGBA(0xc30029ff),
        Color::fromRGBA(0xd94821ff),
        Color::fromRGBA(0xd22424ff),
        Color::fromRGBA(0xc60028ff),
        Color::fromRGBA(0xd63822ff),
        Color::fromRGBA(0xd63822ff),
        Color::fromRGBA(0xc60028ff),
        Color::fromRGBA(0xd22424ff),
        Color::fromRGBA(0xd94821ff),
        Color::fromRGBA(0xc30029ff),
        Color::fromRGBA(0xcf0625ff),
        Color::fromRGBA(0xd70c23ff),
        Color::fromRGBA(0xcd1126ff)
    ],
    '32x19' => [
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xcd1326ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xd01d24ff),
        Color::fromRGBA(0xdf5d1fff),
        Color::fromRGBA(0xd32923ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xdb4821ff),
        Color::fromRGBA(0xdb4921ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xd32923ff),
        Color::fromRGBA(0xdf5d1fff),
        Color::fromRGBA(0xd01d24ff),
        Color::fromRGBA(0xce1225ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xcd1326ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xd10e24ff),
        Color::fromRGBA(0xce0526ff),
        Color::fromRGBA(0xc70328ff),
        Color::fromRGBA(0xca0427ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xd01c25ff),
        Color::fromRGBA(0xf3ae18ff),
        Color::fromRGBA(0xd73a22ff),
        Color::fromRGBA(0xc80027ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xe8811cff),
        Color::fromRGBA(0xe8811cff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xc80027ff),
        Color::fromRGBA(0xd73a22ff),
        Color::fromRGBA(0xf3ae18ff),
        Color::fromRGBA(0xd01c25ff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xca0427ff),
        Color::fromRGBA(0xc70328ff),
        Color::fromRGBA(0xce0526ff),
        Color::fromRGBA(0xd10e24ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0xbc1d2aff),
        Color::fromRGBA(0xce5124ff),
        Color::fromRGBA(0xee591aff),
        Color::fromRGBA(0xdf5320ff),
        Color::fromRGBA(0xda5121ff),
        Color::fromRGBA(0xdd5120ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xe1611fff),
        Color::fromRGBA(0xdf5820ff),
        Color::fromRGBA(0xdd5120ff),
        Color::fromRGBA(0xdd5320ff),
        Color::fromRGBA(0xdd5320ff),
        Color::fromRGBA(0xdd5120ff),
        Color::fromRGBA(0xe05e1fff),
        Color::fromRGBA(0xe05e1fff),
        Color::fromRGBA(0xdd5120ff),
        Color::fromRGBA(0xdd5320ff),
        Color::fromRGBA(0xdd5320ff),
        Color::fromRGBA(0xdd5120ff),
        Color::fromRGBA(0xdf5820ff),
        Color::fromRGBA(0xe1611fff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xdd5120ff),
        Color::fromRGBA(0xda5121ff),
        Color::fromRGBA(0xdf5320ff),
        Color::fromRGBA(0xee591aff),
        Color::fromRGBA(0xce5124ff),
        Color::fromRGBA(0xbc1d2aff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0x873339ff),
        Color::fromRGBA(0x1f9657ff),
        Color::fromRGBA(0x99b731ff),
        Color::fromRGBA(0xf7db15ff),
        Color::fromRGBA(0xffe210ff),
        Color::fromRGBA(0xffdd14ff),
        Color::fromRGBA(0xfbda16ff),
        Color::fromRGBA(0xfdd815ff),
        Color::fromRGBA(0xfedb15ff),
        Color::fromRGBA(0xfedd14ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedd14ff),
        Color::fromRGBA(0xfeda15ff),
        Color::fromRGBA(0xfeda15ff),
        Color::fromRGBA(0xfedd14ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedd14ff),
        Color::fromRGBA(0xfedb15ff),
        Color::fromRGBA(0xfdd815ff),
        Color::fromRGBA(0xfbda16ff),
        Color::fromRGBA(0xffdd14ff),
        Color::fromRGBA(0xffe210ff),
        Color::fromRGBA(0xf7db15ff),
        Color::fromRGBA(0x98b731ff),
        Color::fromRGBA(0x1f9657ff),
        Color::fromRGBA(0x873339ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0x8e3137ff),
        Color::fromRGBA(0x007a63ff),
        Color::fromRGBA(0x006f62ff),
        Color::fromRGBA(0x278354ff),
        Color::fromRGBA(0x9aad31ff),
        Color::fromRGBA(0xf7ce16ff),
        Color::fromRGBA(0xffd411ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xf8cd17ff),
        Color::fromRGBA(0xface16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xface16ff),
        Color::fromRGBA(0xf8cd17ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xffd411ff),
        Color::fromRGBA(0xf7ce16ff),
        Color::fromRGBA(0x9aad31ff),
        Color::fromRGBA(0x278354ff),
        Color::fromRGBA(0x006f62ff),
        Color::fromRGBA(0x007a63ff),
        Color::fromRGBA(0x8e3137ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0x018060ff),
        Color::fromRGBA(0x067a5bff),
        Color::fromRGBA(0x007760ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x2d8752ff),
        Color::fromRGBA(0xa1b22fff),
        Color::fromRGBA(0xfad215ff),
        Color::fromRGBA(0xffd611ff),
        Color::fromRGBA(0xfbd016ff),
        Color::fromRGBA(0xf8cf17ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xf8cf17ff),
        Color::fromRGBA(0xfbd016ff),
        Color::fromRGBA(0xffd611ff),
        Color::fromRGBA(0xfad215ff),
        Color::fromRGBA(0xa1b22fff),
        Color::fromRGBA(0x2d8752ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x007760ff),
        Color::fromRGBA(0x057a5cff),
        Color::fromRGBA(0x018060ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0x8d3237ff),
        Color::fromRGBA(0x007f61ff),
        Color::fromRGBA(0x01785dff),
        Color::fromRGBA(0x047b5cff),
        Color::fromRGBA(0x037b5cff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x328950ff),
        Color::fromRGBA(0xa7b42dff),
        Color::fromRGBA(0xfdd314ff),
        Color::fromRGBA(0xffd611ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfeda15ff),
        Color::fromRGBA(0xfed915ff),
        Color::fromRGBA(0xfed915ff),
        Color::fromRGBA(0xfeda15ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xffd611ff),
        Color::fromRGBA(0xfdd314ff),
        Color::fromRGBA(0xa7b42dff),
        Color::fromRGBA(0x328950ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x037b5cff),
        Color::fromRGBA(0x017a5dff),
        Color::fromRGBA(0x02785dff),
        Color::fromRGBA(0x007f61ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0x8b3138ff),
        Color::fromRGBA(0x04825fff),
        Color::fromRGBA(0x07795cff),
        Color::fromRGBA(0x007362ff),
        Color::fromRGBA(0x007a5dff),
        Color::fromRGBA(0x017a5dff),
        Color::fromRGBA(0x027b5cff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x378b4fff),
        Color::fromRGBA(0xadb52bff),
        Color::fromRGBA(0xfcdb14ff),
        Color::fromRGBA(0xef9b1aff),
        Color::fromRGBA(0xdc4e20ff),
        Color::fromRGBA(0xdc4e20ff),
        Color::fromRGBA(0xef9b1aff),
        Color::fromRGBA(0xfcdb14ff),
        Color::fromRGBA(0xadb52bff),
        Color::fromRGBA(0x378b4fff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x027b5cff),
        Color::fromRGBA(0x017a5dff),
        Color::fromRGBA(0x00795eff),
        Color::fromRGBA(0x00795dff),
        Color::fromRGBA(0x02785dff),
        Color::fromRGBA(0x007f61ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xdc0b22ff),
        Color::fromRGBA(0x832f3aff),
        Color::fromRGBA(0x1b8c55ff),
        Color::fromRGBA(0xd1c61fff),
        Color::fromRGBA(0x5b9f44ff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x017a5dff),
        Color::fromRGBA(0x00795eff),
        Color::fromRGBA(0x027a5dff),
        Color::fromRGBA(0x027b5dff),
        Color::fromRGBA(0x007561ff),
        Color::fromRGBA(0x007763ff),
        Color::fromRGBA(0x538646ff),
        Color::fromRGBA(0xda3021ff),
        Color::fromRGBA(0xe0631fff),
        Color::fromRGBA(0xe0631fff),
        Color::fromRGBA(0xda3021ff),
        Color::fromRGBA(0x538646ff),
        Color::fromRGBA(0x007763ff),
        Color::fromRGBA(0x007561ff),
        Color::fromRGBA(0x027b5dff),
        Color::fromRGBA(0x027a5dff),
        Color::fromRGBA(0x00795eff),
        Color::fromRGBA(0x007a5eff),
        Color::fromRGBA(0x007a5dff),
        Color::fromRGBA(0x00795dff),
        Color::fromRGBA(0x02785dff),
        Color::fromRGBA(0x007f61ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xdd0b21ff),
        Color::fromRGBA(0x802d3bff),
        Color::fromRGBA(0x2d9850ff),
        Color::fromRGBA(0xffc00fff),
        Color::fromRGBA(0xffae14ff),
        Color::fromRGBA(0x31904fff),
        Color::fromRGBA(0x007561ff),
        Color::fromRGBA(0x027a5dff),
        Color::fromRGBA(0x00795eff),
        Color::fromRGBA(0x00795eff),
        Color::fromRGBA(0x077a5bff),
        Color::fromRGBA(0x03835fff),
        Color::fromRGBA(0x274c53ff),
        Color::fromRGBA(0xe1371fff),
        Color::fromRGBA(0xfcdd15ff),
        Color::fromRGBA(0xfcdd15ff),
        Color::fromRGBA(0xe1371fff),
        Color::fromRGBA(0x264c53ff),
        Color::fromRGBA(0x03835fff),
        Color::fromRGBA(0x077a5bff),
        Color::fromRGBA(0x00795eff),
        Color::fromRGBA(0x00795eff),
        Color::fromRGBA(0x007a5dff),
        Color::fromRGBA(0x007a5eff),
        Color::fromRGBA(0x007a5eff),
        Color::fromRGBA(0x00795dff),
        Color::fromRGBA(0x02785dff),
        Color::fromRGBA(0x007f61ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xdb0b22ff),
        Color::fromRGBA(0x893038ff),
        Color::fromRGBA(0x0c895cff),
        Color::fromRGBA(0xb9a329ff),
        Color::fromRGBA(0x7e603aff),
        Color::fromRGBA(0x1a8757ff),
        Color::fromRGBA(0x00775fff),
        Color::fromRGBA(0x017a5dff),
        Color::fromRGBA(0x027a5dff),
        Color::fromRGBA(0x027b5dff),
        Color::fromRGBA(0x007561ff),
        Color::fromRGBA(0x007863ff),
        Color::fromRGBA(0x528146ff),
        Color::fromRGBA(0xd82622ff),
        Color::fromRGBA(0xe26c1eff),
        Color::fromRGBA(0xe26c1eff),
        Color::fromRGBA(0xd82622ff),
        Color::fromRGBA(0x528146ff),
        Color::fromRGBA(0x007863ff),
        Color::fromRGBA(0x007561ff),
        Color::fromRGBA(0x027b5dff),
        Color::fromRGBA(0x027a5dff),
        Color::fromRGBA(0x00795eff),
        Color::fromRGBA(0x007a5eff),
        Color::fromRGBA(0x007a5dff),
        Color::fromRGBA(0x00795dff),
        Color::fromRGBA(0x02785dff),
        Color::fromRGBA(0x007f61ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0x8d3237ff),
        Color::fromRGBA(0x007d62ff),
        Color::fromRGBA(0x037c5dff),
        Color::fromRGBA(0x007f5eff),
        Color::fromRGBA(0x00765fff),
        Color::fromRGBA(0x027b5cff),
        Color::fromRGBA(0x027b5cff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x378b4fff),
        Color::fromRGBA(0xadb52bff),
        Color::fromRGBA(0xfcd814ff),
        Color::fromRGBA(0xf4af18ff),
        Color::fromRGBA(0xd94122ff),
        Color::fromRGBA(0xd94122ff),
        Color::fromRGBA(0xf4af18ff),
        Color::fromRGBA(0xfcd814ff),
        Color::fromRGBA(0xadb52bff),
        Color::fromRGBA(0x378b4fff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x027b5cff),
        Color::fromRGBA(0x017a5dff),
        Color::fromRGBA(0x00795eff),
        Color::fromRGBA(0x00795dff),
        Color::fromRGBA(0x02785dff),
        Color::fromRGBA(0x007f61ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0x008060ff),
        Color::fromRGBA(0x02775dff),
        Color::fromRGBA(0x02795dff),
        Color::fromRGBA(0x037c5cff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x328950ff),
        Color::fromRGBA(0xa7b42dff),
        Color::fromRGBA(0xfdd314ff),
        Color::fromRGBA(0xffd611ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfdd715ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfdd715ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xffd611ff),
        Color::fromRGBA(0xfdd314ff),
        Color::fromRGBA(0xa7b42dff),
        Color::fromRGBA(0x328950ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x007660ff),
        Color::fromRGBA(0x037b5cff),
        Color::fromRGBA(0x017a5dff),
        Color::fromRGBA(0x02785dff),
        Color::fromRGBA(0x007f61ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0x018060ff),
        Color::fromRGBA(0x067a5bff),
        Color::fromRGBA(0x007760ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x2d8752ff),
        Color::fromRGBA(0xa1b22fff),
        Color::fromRGBA(0xfad215ff),
        Color::fromRGBA(0xffd611ff),
        Color::fromRGBA(0xfbd016ff),
        Color::fromRGBA(0xf8cf17ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xfbd116ff),
        Color::fromRGBA(0xf8cf17ff),
        Color::fromRGBA(0xfbd016ff),
        Color::fromRGBA(0xffd611ff),
        Color::fromRGBA(0xfad215ff),
        Color::fromRGBA(0xa1b22fff),
        Color::fromRGBA(0x2d8752ff),
        Color::fromRGBA(0x007462ff),
        Color::fromRGBA(0x007760ff),
        Color::fromRGBA(0x057a5cff),
        Color::fromRGBA(0x018060ff),
        Color::fromRGBA(0x8c3237ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0x8e3137ff),
        Color::fromRGBA(0x007a63ff),
        Color::fromRGBA(0x006f62ff),
        Color::fromRGBA(0x278354ff),
        Color::fromRGBA(0x9aad31ff),
        Color::fromRGBA(0xf7ce16ff),
        Color::fromRGBA(0xffd411ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xf8cd17ff),
        Color::fromRGBA(0xface16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xfbce16ff),
        Color::fromRGBA(0xface16ff),
        Color::fromRGBA(0xf8cd17ff),
        Color::fromRGBA(0xfbcf16ff),
        Color::fromRGBA(0xffd411ff),
        Color::fromRGBA(0xf7ce16ff),
        Color::fromRGBA(0x9aad31ff),
        Color::fromRGBA(0x278354ff),
        Color::fromRGBA(0x006f62ff),
        Color::fromRGBA(0x007a63ff),
        Color::fromRGBA(0x8e3137ff),
        Color::fromRGBA(0xda0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0x873339ff),
        Color::fromRGBA(0x1f9657ff),
        Color::fromRGBA(0x98b731ff),
        Color::fromRGBA(0xf7db15ff),
        Color::fromRGBA(0xffe210ff),
        Color::fromRGBA(0xffdc14ff),
        Color::fromRGBA(0xfbdb16ff),
        Color::fromRGBA(0xfdd915ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedd14ff),
        Color::fromRGBA(0xfeda15ff),
        Color::fromRGBA(0xfeda15ff),
        Color::fromRGBA(0xfedd14ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfedc15ff),
        Color::fromRGBA(0xfdd915ff),
        Color::fromRGBA(0xfbdb16ff),
        Color::fromRGBA(0xffdc14ff),
        Color::fromRGBA(0xffe210ff),
        Color::fromRGBA(0xf7db15ff),
        Color::fromRGBA(0x98b731ff),
        Color::fromRGBA(0x1f9657ff),
        Color::fromRGBA(0x873339ff),
        Color::fromRGBA(0xdb0a22ff),
        Color::fromRGBA(0xca1226ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0xbc1d2aff),
        Color::fromRGBA(0xce5124ff),
        Color::fromRGBA(0xee591aff),
        Color::fromRGBA(0xdf5320ff),
        Color::fromRGBA(0xda5121ff),
        Color::fromRGBA(0xdd5320ff),
        Color::fromRGBA(0xdd5220ff),
        Color::fromRGBA(0xe1641fff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xdd5220ff),
        Color::fromRGBA(0xdd5220ff),
        Color::fromRGBA(0xdd5320ff),
        Color::fromRGBA(0xdd5120ff),
        Color::fromRGBA(0xe05e1fff),
        Color::fromRGBA(0xe05e1fff),
        Color::fromRGBA(0xdd5120ff),
        Color::fromRGBA(0xdd5320ff),
        Color::fromRGBA(0xdd5220ff),
        Color::fromRGBA(0xdd5220ff),
        Color::fromRGBA(0xde5520ff),
        Color::fromRGBA(0xe1641fff),
        Color::fromRGBA(0xdd5220ff),
        Color::fromRGBA(0xdd5320ff),
        Color::fromRGBA(0xda5121ff),
        Color::fromRGBA(0xdf5320ff),
        Color::fromRGBA(0xee591aff),
        Color::fromRGBA(0xce5124ff),
        Color::fromRGBA(0xbc1d2aff),
        Color::fromRGBA(0xd10e25ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xd10e24ff),
        Color::fromRGBA(0xce0526ff),
        Color::fromRGBA(0xc70328ff),
        Color::fromRGBA(0xca0427ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xd11d24ff),
        Color::fromRGBA(0xf2ad18ff),
        Color::fromRGBA(0xd83b22ff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xcb0526ff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xe8811cff),
        Color::fromRGBA(0xe8811cff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xcb0526ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xd83b22ff),
        Color::fromRGBA(0xf2ad18ff),
        Color::fromRGBA(0xd11d24ff),
        Color::fromRGBA(0xc90027ff),
        Color::fromRGBA(0xcb0626ff),
        Color::fromRGBA(0xca0427ff),
        Color::fromRGBA(0xc70328ff),
        Color::fromRGBA(0xce0526ff),
        Color::fromRGBA(0xd10e24ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xcd1326ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xd01c25ff),
        Color::fromRGBA(0xe05c1fff),
        Color::fromRGBA(0xd42a23ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1525ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xdb4921ff),
        Color::fromRGBA(0xdb4921ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1525ff),
        Color::fromRGBA(0xcd0f26ff),
        Color::fromRGBA(0xd42a23ff),
        Color::fromRGBA(0xe05c1fff),
        Color::fromRGBA(0xd01c25ff),
        Color::fromRGBA(0xce1125ff),
        Color::fromRGBA(0xce1425ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xce1325ff),
        Color::fromRGBA(0xcd1326ff),
        Color::fromRGBA(0xcd1126ff),
        Color::fromRGBA(0xce1025ff),
        Color::fromRGBA(0xcd1126ff)
    ],
];

$img = new Image(16, 10);
$img->append($pixels['16x10'], new Size(16, 10));
$img->append($pixels['32x19'], new Size(32, 19));

return $img;