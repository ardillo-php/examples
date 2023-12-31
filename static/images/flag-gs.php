<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x8' => [
        Color::fromRGBA(0x987393ff),
        Color::fromRGBA(0xa48ba8ff),
        Color::fromRGBA(0x4c6194ff),
        Color::fromRGBA(0x99597cff),
        Color::fromRGBA(0x9a5678ff),
        Color::fromRGBA(0x464b80ff),
        Color::fromRGBA(0xa07c9aff),
        Color::fromRGBA(0x8b7c9fff),
        Color::fromRGBA(0x0e2c70ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x022167ff),
        Color::fromRGBA(0x1a2d5cff),
        Color::fromRGBA(0x062365ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x985376ff),
        Color::fromRGBA(0xc5677fff),
        Color::fromRGBA(0xd57e91ff),
        Color::fromRGBA(0xcb566eff),
        Color::fromRGBA(0xc94d66ff),
        Color::fromRGBA(0xd16f84ff),
        Color::fromRGBA(0xcc7a8fff),
        Color::fromRGBA(0x875279ff),
        Color::fromRGBA(0x11266aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x102e70ff),
        Color::fromRGBA(0x353248ff),
        Color::fromRGBA(0x242d55ff),
        Color::fromRGBA(0x0c2b6fff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x9c587aff),
        Color::fromRGBA(0xcb788eff),
        Color::fromRGBA(0xd46f83ff),
        Color::fromRGBA(0xcc4d66ff),
        Color::fromRGBA(0xcd546cff),
        Color::fromRGBA(0xd77e90ff),
        Color::fromRGBA(0xc9677eff),
        Color::fromRGBA(0x884d74ff),
        Color::fromRGBA(0x12266aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x284084ff),
        Color::fromRGBA(0x43447cff),
        Color::fromRGBA(0x3e407bff),
        Color::fromRGBA(0x1f3777ff),
        Color::fromRGBA(0x002067ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x887c9fff),
        Color::fromRGBA(0x8f7295ff),
        Color::fromRGBA(0x41477eff),
        Color::fromRGBA(0x875178ff),
        Color::fromRGBA(0x895379ff),
        Color::fromRGBA(0x455b90ff),
        Color::fromRGBA(0x9280a1ff),
        Color::fromRGBA(0x75608aff),
        Color::fromRGBA(0x0b256aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x293c6eff),
        Color::fromRGBA(0x4a5661ff),
        Color::fromRGBA(0x4f5b68ff),
        Color::fromRGBA(0x263151ff),
        Color::fromRGBA(0x011f63ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x1d2d6eff),
        Color::fromRGBA(0x09246aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x12266aff),
        Color::fromRGBA(0x12266aff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x0a296eff),
        Color::fromRGBA(0x1b3172ff),
        Color::fromRGBA(0x042169ff),
        Color::fromRGBA(0x072568ff),
        Color::fromRGBA(0x444c5dff),
        Color::fromRGBA(0x607355ff),
        Color::fromRGBA(0x617c6cff),
        Color::fromRGBA(0x29334eff),
        Color::fromRGBA(0x001e60ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x052365ff),
        Color::fromRGBA(0x423d42ff),
        Color::fromRGBA(0x505745ff),
        Color::fromRGBA(0x66807bff),
        Color::fromRGBA(0x58596cff),
        Color::fromRGBA(0x032065ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x463a40ff),
        Color::fromRGBA(0x524937ff),
        Color::fromRGBA(0x484942ff),
        Color::fromRGBA(0x55443dff),
        Color::fromRGBA(0x012068ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x0f2560ff),
        Color::fromRGBA(0x0f2560ff),
        Color::fromRGBA(0x0a2363ff),
        Color::fromRGBA(0x11255eff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff)
    ],
    '32x16' => [
        Color::fromRGBA(0xd37084ff),
        Color::fromRGBA(0xedb2bcff),
        Color::fromRGBA(0xb2b1c8ff),
        Color::fromRGBA(0x405b91ff),
        Color::fromRGBA(0x05246bff),
        Color::fromRGBA(0x001a64ff),
        Color::fromRGBA(0x546394ff),
        Color::fromRGBA(0xd3485fff),
        Color::fromRGBA(0xd3435bff),
        Color::fromRGBA(0x586595ff),
        Color::fromRGBA(0x001b65ff),
        Color::fromRGBA(0x05266dff),
        Color::fromRGBA(0x38417bff),
        Color::fromRGBA(0x9c6283ff),
        Color::fromRGBA(0xe28090ff),
        Color::fromRGBA(0xc9a5b7ff),
        Color::fromRGBA(0x1a3777ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x022168ff),
        Color::fromRGBA(0x032267ff),
        Color::fromRGBA(0x022168ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x3a4079ff),
        Color::fromRGBA(0x87587eff),
        Color::fromRGBA(0xd17f93ff),
        Color::fromRGBA(0xd9a8b7ff),
        Color::fromRGBA(0x989cb9ff),
        Color::fromRGBA(0x354f88ff),
        Color::fromRGBA(0x586797ff),
        Color::fromRGBA(0xd2485fff),
        Color::fromRGBA(0xd3435bff),
        Color::fromRGBA(0x5d6997ff),
        Color::fromRGBA(0x2d3a76ff),
        Color::fromRGBA(0x86587eff),
        Color::fromRGBA(0xce7d91ff),
        Color::fromRGBA(0xdba8b6ff),
        Color::fromRGBA(0x9b9cb9ff),
        Color::fromRGBA(0x3b558cff),
        Color::fromRGBA(0x03236aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x022268ff),
        Color::fromRGBA(0x2d3956ff),
        Color::fromRGBA(0x384051ff),
        Color::fromRGBA(0x0b2765ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x556595ff),
        Color::fromRGBA(0x5c6c9bff),
        Color::fromRGBA(0x8f86a8ff),
        Color::fromRGBA(0xd895a5ff),
        Color::fromRGBA(0xefadb7ff),
        Color::fromRGBA(0xe5dbe3ff),
        Color::fromRGBA(0xc9c3d4ff),
        Color::fromRGBA(0xd3475eff),
        Color::fromRGBA(0xd2425aff),
        Color::fromRGBA(0xc5b1c4ff),
        Color::fromRGBA(0xd18c9eff),
        Color::fromRGBA(0xf0b1baff),
        Color::fromRGBA(0xeadbe2ff),
        Color::fromRGBA(0x98a1beff),
        Color::fromRGBA(0x5d6c9aff),
        Color::fromRGBA(0x4a5b8fff),
        Color::fromRGBA(0x0b296eff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001f69ff),
        Color::fromRGBA(0x252c4eff),
        Color::fromRGBA(0x50362eff),
        Color::fromRGBA(0x1c2653ff),
        Color::fromRGBA(0x012067ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0xd44960ff),
        Color::fromRGBA(0xd34960ff),
        Color::fromRGBA(0xd1485fff),
        Color::fromRGBA(0xd34a61ff),
        Color::fromRGBA(0xd4465dff),
        Color::fromRGBA(0xd64a60ff),
        Color::fromRGBA(0xd74a60ff),
        Color::fromRGBA(0xcb1e3aff),
        Color::fromRGBA(0xcb1c39ff),
        Color::fromRGBA(0xd6485eff),
        Color::fromRGBA(0xd6485fff),
        Color::fromRGBA(0xd64d63ff),
        Color::fromRGBA(0xd34960ff),
        Color::fromRGBA(0xd1465eff),
        Color::fromRGBA(0xd54960ff),
        Color::fromRGBA(0xba4461ff),
        Color::fromRGBA(0x1a2567ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x09276cff),
        Color::fromRGBA(0x203b78ff),
        Color::fromRGBA(0x102864ff),
        Color::fromRGBA(0x4b2b24ff),
        Color::fromRGBA(0x472b29ff),
        Color::fromRGBA(0x132d69ff),
        Color::fromRGBA(0x1f3b77ff),
        Color::fromRGBA(0x06256aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0xd3445bff),
        Color::fromRGBA(0xd2435bff),
        Color::fromRGBA(0xd04159ff),
        Color::fromRGBA(0xd2435bff),
        Color::fromRGBA(0xd4475eff),
        Color::fromRGBA(0xd4435aff),
        Color::fromRGBA(0xd5435aff),
        Color::fromRGBA(0xcb1d39ff),
        Color::fromRGBA(0xca1b38ff),
        Color::fromRGBA(0xd6445bff),
        Color::fromRGBA(0xd5455cff),
        Color::fromRGBA(0xd34159ff),
        Color::fromRGBA(0xd2455cff),
        Color::fromRGBA(0xd0425aff),
        Color::fromRGBA(0xd4445bff),
        Color::fromRGBA(0xba3f5dff),
        Color::fromRGBA(0x1a2567ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x1e3a77ff),
        Color::fromRGBA(0x8995b3ff),
        Color::fromRGBA(0x43538cff),
        Color::fromRGBA(0x453c53ff),
        Color::fromRGBA(0x3f3654ff),
        Color::fromRGBA(0x515e94ff),
        Color::fromRGBA(0x62739cff),
        Color::fromRGBA(0x09286cff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x576394ff),
        Color::fromRGBA(0x5c6998ff),
        Color::fromRGBA(0x929ab9ff),
        Color::fromRGBA(0xe6d9e1ff),
        Color::fromRGBA(0xf1b5beff),
        Color::fromRGBA(0xd58a9cff),
        Color::fromRGBA(0xc8b1c3ff),
        Color::fromRGBA(0xd3475eff),
        Color::fromRGBA(0xd24159ff),
        Color::fromRGBA(0xccc3d2ff),
        Color::fromRGBA(0xe6dae2ff),
        Color::fromRGBA(0xefabb4ff),
        Color::fromRGBA(0xd894a4ff),
        Color::fromRGBA(0x8f85a7ff),
        Color::fromRGBA(0x5e6c9aff),
        Color::fromRGBA(0x4c5d8fff),
        Color::fromRGBA(0x0b296eff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012167ff),
        Color::fromRGBA(0x1a2e8cff),
        Color::fromRGBA(0x2329b2ff),
        Color::fromRGBA(0x545174ff),
        Color::fromRGBA(0x4b4a79ff),
        Color::fromRGBA(0x1a20b3ff),
        Color::fromRGBA(0x102476ff),
        Color::fromRGBA(0x082662ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x3a558cff),
        Color::fromRGBA(0x9197b6ff),
        Color::fromRGBA(0xdaacbaff),
        Color::fromRGBA(0xd48295ff),
        Color::fromRGBA(0x905b7fff),
        Color::fromRGBA(0x353d77ff),
        Color::fromRGBA(0x5a6897ff),
        Color::fromRGBA(0xd3485fff),
        Color::fromRGBA(0xd4435aff),
        Color::fromRGBA(0x5e6b98ff),
        Color::fromRGBA(0x38528aff),
        Color::fromRGBA(0x9d9fbbff),
        Color::fromRGBA(0xdca8b6ff),
        Color::fromRGBA(0xd17e91ff),
        Color::fromRGBA(0x87587eff),
        Color::fromRGBA(0x313b76ff),
        Color::fromRGBA(0x03236aff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x112d6bff),
        Color::fromRGBA(0x3f4c71ff),
        Color::fromRGBA(0x394490ff),
        Color::fromRGBA(0x5b5b6aff),
        Color::fromRGBA(0x5a5a6bff),
        Color::fromRGBA(0x2f3390ff),
        Color::fromRGBA(0x3a363aff),
        Color::fromRGBA(0x213442ff),
        Color::fromRGBA(0x01216aff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0xc7aabcff),
        Color::fromRGBA(0xc8788eff),
        Color::fromRGBA(0x925c80ff),
        Color::fromRGBA(0x38407aff),
        Color::fromRGBA(0x06276dff),
        Color::fromRGBA(0x001c66ff),
        Color::fromRGBA(0x4a5b8fff),
        Color::fromRGBA(0xba4460ff),
        Color::fromRGBA(0xbb3f5dff),
        Color::fromRGBA(0x4e5d90ff),
        Color::fromRGBA(0x001b65ff),
        Color::fromRGBA(0x05246bff),
        Color::fromRGBA(0x3b568dff),
        Color::fromRGBA(0x9fa1bdff),
        Color::fromRGBA(0xd3a1b1ff),
        Color::fromRGBA(0xa35d7eff),
        Color::fromRGBA(0x142669ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x1d366bff),
        Color::fromRGBA(0x575e69ff),
        Color::fromRGBA(0x3b4d61ff),
        Color::fromRGBA(0x50662eff),
        Color::fromRGBA(0x4c6829ff),
        Color::fromRGBA(0x67788aff),
        Color::fromRGBA(0x5c6172ff),
        Color::fromRGBA(0x010c26ff),
        Color::fromRGBA(0x012067ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x1d2768ff),
        Color::fromRGBA(0x1a286aff),
        Color::fromRGBA(0x08286eff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x0b296eff),
        Color::fromRGBA(0x1c2667ff),
        Color::fromRGBA(0x1c2567ff),
        Color::fromRGBA(0x0c296eff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001e67ff),
        Color::fromRGBA(0x07266cff),
        Color::fromRGBA(0x1f3d7cff),
        Color::fromRGBA(0x1c3273ff),
        Color::fromRGBA(0x042168ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x384b71ff),
        Color::fromRGBA(0x484a4bff),
        Color::fromRGBA(0x4d5a66ff),
        Color::fromRGBA(0x6a8c34ff),
        Color::fromRGBA(0x6d8f2bff),
        Color::fromRGBA(0x5e7596ff),
        Color::fromRGBA(0x333846ff),
        Color::fromRGBA(0x010818ff),
        Color::fromRGBA(0x001f63ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002068ff),
        Color::fromRGBA(0x001f67ff),
        Color::fromRGBA(0x001f68ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x0a2666ff),
        Color::fromRGBA(0x545c68ff),
        Color::fromRGBA(0x56534fff),
        Color::fromRGBA(0x60636bff),
        Color::fromRGBA(0x6f8c70ff),
        Color::fromRGBA(0x769066ff),
        Color::fromRGBA(0x385289ff),
        Color::fromRGBA(0x3f465bff),
        Color::fromRGBA(0x1f293fff),
        Color::fromRGBA(0x001e64ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x062263ff),
        Color::fromRGBA(0x3b404aff),
        Color::fromRGBA(0x554839ff),
        Color::fromRGBA(0x5d4a36ff),
        Color::fromRGBA(0x516e6dff),
        Color::fromRGBA(0x618d90ff),
        Color::fromRGBA(0x8795b0ff),
        Color::fromRGBA(0x87838dff),
        Color::fromRGBA(0x323c56ff),
        Color::fromRGBA(0x001e64ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x022167ff),
        Color::fromRGBA(0x262c47ff),
        Color::fromRGBA(0x52402eff),
        Color::fromRGBA(0x423937ff),
        Color::fromRGBA(0x2d483aff),
        Color::fromRGBA(0x2f6f4aff),
        Color::fromRGBA(0x7a8b94ff),
        Color::fromRGBA(0x867b76ff),
        Color::fromRGBA(0x3d4564ff),
        Color::fromRGBA(0x002067ff),
        Color::fromRGBA(0x002169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x00216aff),
        Color::fromRGBA(0x191e57ff),
        Color::fromRGBA(0x925619ff),
        Color::fromRGBA(0x7f6821ff),
        Color::fromRGBA(0x5d5330ff),
        Color::fromRGBA(0x565031ff),
        Color::fromRGBA(0x6e5e27ff),
        Color::fromRGBA(0x996815ff),
        Color::fromRGBA(0x382445ff),
        Color::fromRGBA(0x00206aff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x0b2561ff),
        Color::fromRGBA(0x82541fff),
        Color::fromRGBA(0x8e6220ff),
        Color::fromRGBA(0x0a2764ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x625338ff),
        Color::fromRGBA(0x9a5b11ff),
        Color::fromRGBA(0x1f2e55ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x1c2357ff),
        Color::fromRGBA(0x262851ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x16285cff),
        Color::fromRGBA(0x202354ff),
        Color::fromRGBA(0x042266ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x00206aff),
        Color::fromRGBA(0x00206aff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x00206aff),
        Color::fromRGBA(0x002069ff),
        Color::fromRGBA(0x012168ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff),
        Color::fromRGBA(0x012169ff)
    ],
];

$img = new Image(16, 8);
$img->append($pixels['16x8'], new Size(16, 8));
$img->append($pixels['32x16'], new Size(32, 16));

return $img;
