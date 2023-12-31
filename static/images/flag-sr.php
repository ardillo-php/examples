<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac9ff),
        Color::fromRGBA(0xbddac9ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xbddac8ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd5e75ff),
        Color::fromRGBA(0xe06973ff),
        Color::fromRGBA(0xe06973ff),
        Color::fromRGBA(0xdd5e75ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xdd6075ff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70d2aff),
        Color::fromRGBA(0xcb1a26ff),
        Color::fromRGBA(0xdb5319ff),
        Color::fromRGBA(0xdb5319ff),
        Color::fromRGBA(0xcb1a26ff),
        Color::fromRGBA(0xc70d2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc8102dff),
        Color::fromRGBA(0xd94b1fff),
        Color::fromRGBA(0xf7b605ff),
        Color::fromRGBA(0xf7b605ff),
        Color::fromRGBA(0xd94b1fff),
        Color::fromRGBA(0xc8102dff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc60a2aff),
        Color::fromRGBA(0xcd2125ff),
        Color::fromRGBA(0xec8c0bff),
        Color::fromRGBA(0xec8c0bff),
        Color::fromRGBA(0xcd2125ff),
        Color::fromRGBA(0xc60a2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xdc5c73ff),
        Color::fromRGBA(0xe06a6fff),
        Color::fromRGBA(0xe2716eff),
        Color::fromRGBA(0xe2716eff),
        Color::fromRGBA(0xe06a6fff),
        Color::fromRGBA(0xdc5c73ff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xdc5d73ff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdacaff),
        Color::fromRGBA(0xbfdacaff),
        Color::fromRGBA(0xbfdacaff),
        Color::fromRGBA(0xbfdacaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0xbfdbcaff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x0a7f3bff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff)
    ],
    '32x21' => [
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007a33ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0x087e39ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
        Color::fromRGBA(0xbbdbc9ff),
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
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
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
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6175ff),
        Color::fromRGBA(0xdc6674ff),
        Color::fromRGBA(0xdc6674ff),
        Color::fromRGBA(0xda6175ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xda6275ff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc6092bff),
        Color::fromRGBA(0xd63f1dff),
        Color::fromRGBA(0xd63f1dff),
        Color::fromRGBA(0xc6092bff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc70e2eff),
        Color::fromRGBA(0xc70c2eff),
        Color::fromRGBA(0xc70d2eff),
        Color::fromRGBA(0xe88012ff),
        Color::fromRGBA(0xe88012ff),
        Color::fromRGBA(0xc70d2eff),
        Color::fromRGBA(0xc70c2eff),
        Color::fromRGBA(0xc70e2eff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc8122dff),
        Color::fromRGBA(0xd64022ff),
        Color::fromRGBA(0xde5d1bff),
        Color::fromRGBA(0xdf6219ff),
        Color::fromRGBA(0xf8b505ff),
        Color::fromRGBA(0xf8b505ff),
        Color::fromRGBA(0xdf6219ff),
        Color::fromRGBA(0xde5d1bff),
        Color::fromRGBA(0xd64022ff),
        Color::fromRGBA(0xc8122dff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xd13026ff),
        Color::fromRGBA(0xed900eff),
        Color::fromRGBA(0xfdc901ff),
        Color::fromRGBA(0xffcd00ff),
        Color::fromRGBA(0xffcd00ff),
        Color::fromRGBA(0xfdc901ff),
        Color::fromRGBA(0xed900eff),
        Color::fromRGBA(0xd13026ff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc70d2eff),
        Color::fromRGBA(0xcb1b2bff),
        Color::fromRGBA(0xef980cff),
        Color::fromRGBA(0xffd100ff),
        Color::fromRGBA(0xffd100ff),
        Color::fromRGBA(0xef980cff),
        Color::fromRGBA(0xcb1b2bff),
        Color::fromRGBA(0xc70d2eff),
        Color::fromRGBA(0xc70f2eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70e2eff),
        Color::fromRGBA(0xcc2029ff),
        Color::fromRGBA(0xf5aa08ff),
        Color::fromRGBA(0xf3a609ff),
        Color::fromRGBA(0xf3a609ff),
        Color::fromRGBA(0xf5aa08ff),
        Color::fromRGBA(0xcc2029ff),
        Color::fromRGBA(0xc70e2eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc8102eff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc6092aff),
        Color::fromRGBA(0xd43a1fff),
        Color::fromRGBA(0xe47111ff),
        Color::fromRGBA(0xcc1e25ff),
        Color::fromRGBA(0xcc1e25ff),
        Color::fromRGBA(0xe47111ff),
        Color::fromRGBA(0xd43a1fff),
        Color::fromRGBA(0xc6092aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xc70b2aff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95c71ff),
        Color::fromRGBA(0xdd6a6eff),
        Color::fromRGBA(0xdb6170ff),
        Color::fromRGBA(0xd95b71ff),
        Color::fromRGBA(0xd95b71ff),
        Color::fromRGBA(0xdb6170ff),
        Color::fromRGBA(0xdd6a6eff),
        Color::fromRGBA(0xd95c71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xd95d71ff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffdffff),
        Color::fromRGBA(0xfffdffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffdffff),
        Color::fromRGBA(0xfffdffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xfffeffff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0xbfdeccff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x097f3aff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x007932ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff),
        Color::fromRGBA(0x017a34ff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x21'], new Size(32, 21));

return $img;
