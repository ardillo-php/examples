<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0017a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0xd8c119ff),
        Color::fromRGBA(0xfee500ff),
        Color::fromRGBA(0xfbdd01ff),
        Color::fromRGBA(0xfddd00ff),
        Color::fromRGBA(0xfee600ff),
        Color::fromRGBA(0xf7c008ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xcf0f3aff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0017a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0xd8c119ff),
        Color::fromRGBA(0xfee401ff),
        Color::fromRGBA(0xfcdd00ff),
        Color::fromRGBA(0xfedd00ff),
        Color::fromRGBA(0xfee500ff),
        Color::fromRGBA(0xf7c008ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xcf0f3aff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0017a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0xd7c019ff),
        Color::fromRGBA(0xffea00ff),
        Color::fromRGBA(0xf8dc05ff),
        Color::fromRGBA(0xf9db05ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf6bf09ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xcf0f3aff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0017a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0xd7c21aff),
        Color::fromRGBA(0xe3c033ff),
        Color::fromRGBA(0xc7a04fff),
        Color::fromRGBA(0xcba64aff),
        Color::fromRGBA(0xdcc230ff),
        Color::fromRGBA(0xf6bf08ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xcf0f3aff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0016a9ff),
        Color::fromRGBA(0x041ba2ff),
        Color::fromRGBA(0xc3b233ff),
        Color::fromRGBA(0xce905eff),
        Color::fromRGBA(0xe19260ff),
        Color::fromRGBA(0xe07e1aff),
        Color::fromRGBA(0xc99f4bff),
        Color::fromRGBA(0xe2b026ff),
        Color::fromRGBA(0xd31334ff),
        Color::fromRGBA(0xcf0e3bff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0016a9ff),
        Color::fromRGBA(0x041ba2ff),
        Color::fromRGBA(0xc6b431ff),
        Color::fromRGBA(0xd59e46ff),
        Color::fromRGBA(0xe48d2cff),
        Color::fromRGBA(0xe69d17ff),
        Color::fromRGBA(0xcfaa41ff),
        Color::fromRGBA(0xe5b121ff),
        Color::fromRGBA(0xd31334ff),
        Color::fromRGBA(0xcf0e3bff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0016a9ff),
        Color::fromRGBA(0x041ba1ff),
        Color::fromRGBA(0xc6b434ff),
        Color::fromRGBA(0xc79957ff),
        Color::fromRGBA(0xd49032ff),
        Color::fromRGBA(0xd5a437ff),
        Color::fromRGBA(0xbea05cff),
        Color::fromRGBA(0xe5b022ff),
        Color::fromRGBA(0xd31334ff),
        Color::fromRGBA(0xcf0e3bff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0017a8ff),
        Color::fromRGBA(0x0119a6ff),
        Color::fromRGBA(0xd5be1dff),
        Color::fromRGBA(0xe7d028ff),
        Color::fromRGBA(0xc2ab5dff),
        Color::fromRGBA(0xc2a85aff),
        Color::fromRGBA(0xe2ce29ff),
        Color::fromRGBA(0xf4bd0dff),
        Color::fromRGBA(0xd01138ff),
        Color::fromRGBA(0xcf0f3aff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0017a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0xd8c118ff),
        Color::fromRGBA(0xffea00ff),
        Color::fromRGBA(0xfbdb00ff),
        Color::fromRGBA(0xfddb00ff),
        Color::fromRGBA(0xffeb00ff),
        Color::fromRGBA(0xf7c007ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xcf0f3aff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0017a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0xd7c119ff),
        Color::fromRGBA(0xfee401ff),
        Color::fromRGBA(0xfcdd01ff),
        Color::fromRGBA(0xfedd00ff),
        Color::fromRGBA(0xfde501ff),
        Color::fromRGBA(0xf7bf08ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xcf0f3aff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0017a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0xd8c119ff),
        Color::fromRGBA(0xffe500ff),
        Color::fromRGBA(0xfbdd01ff),
        Color::fromRGBA(0xfddd00ff),
        Color::fromRGBA(0xffe600ff),
        Color::fromRGBA(0xf7c008ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xcf0f3aff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff)
    ],
    '32x22' => [
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfbdc01ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfddc00ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfbdc01ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfddc00ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfbdc01ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfddc00ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfbdc01ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfddc00ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfadc03ff),
        Color::fromRGBA(0xfddd01ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfcdd01ff),
        Color::fromRGBA(0xfcdb01ff),
        Color::fromRGBA(0xfee900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xffe200ff),
        Color::fromRGBA(0xfada05ff),
        Color::fromRGBA(0xfbdb02ff),
        Color::fromRGBA(0xfadb02ff),
        Color::fromRGBA(0xfadb04ff),
        Color::fromRGBA(0xffe400ff),
        Color::fromRGBA(0xffe000ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xfee900ff),
        Color::fromRGBA(0xe6c924ff),
        Color::fromRGBA(0xe5ce28ff),
        Color::fromRGBA(0xe4cc23ff),
        Color::fromRGBA(0xbaa266ff),
        Color::fromRGBA(0xbba267ff),
        Color::fromRGBA(0xe4c923ff),
        Color::fromRGBA(0xe1c627ff),
        Color::fromRGBA(0xe7c61eff),
        Color::fromRGBA(0xfde900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x000faeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xc4ae67ff),
        Color::fromRGBA(0xbb8d6cff),
        Color::fromRGBA(0xc9904eff),
        Color::fromRGBA(0xba9465ff),
        Color::fromRGBA(0xbe9d67ff),
        Color::fromRGBA(0xcfa440ff),
        Color::fromRGBA(0xbb9a68ff),
        Color::fromRGBA(0xc0a55dff),
        Color::fromRGBA(0xfee800ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xcd073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x000fafff),
        Color::fromRGBA(0xbfae28ff),
        Color::fromRGBA(0xf8e10dff),
        Color::fromRGBA(0xc4a94cff),
        Color::fromRGBA(0xce513dff),
        Color::fromRGBA(0xf4b356ff),
        Color::fromRGBA(0xdd7e30ff),
        Color::fromRGBA(0xe2901aff),
        Color::fromRGBA(0xea790aff),
        Color::fromRGBA(0xdc972aff),
        Color::fromRGBA(0xc6ad4aff),
        Color::fromRGBA(0xf3de0cff),
        Color::fromRGBA(0xf3ac0dff),
        Color::fromRGBA(0xcd073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x000fafff),
        Color::fromRGBA(0xc2b024ff),
        Color::fromRGBA(0xd4b54dff),
        Color::fromRGBA(0xa78c78ff),
        Color::fromRGBA(0xda7d54ff),
        Color::fromRGBA(0xfdd765ff),
        Color::fromRGBA(0xda795bff),
        Color::fromRGBA(0xe28c1aff),
        Color::fromRGBA(0xed7906ff),
        Color::fromRGBA(0xde9624ff),
        Color::fromRGBA(0xaf9b7fff),
        Color::fromRGBA(0xc8b350ff),
        Color::fromRGBA(0xf4ac07ff),
        Color::fromRGBA(0xcd073dff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x000fafff),
        Color::fromRGBA(0xc2b124ff),
        Color::fromRGBA(0xebcb23ff),
        Color::fromRGBA(0xb09973ff),
        Color::fromRGBA(0xd39450ff),
        Color::fromRGBA(0xda7e56ff),
        Color::fromRGBA(0xd48e53ff),
        Color::fromRGBA(0xd6a436ff),
        Color::fromRGBA(0xde9125ff),
        Color::fromRGBA(0xd7a83aff),
        Color::fromRGBA(0xb39b75ff),
        Color::fromRGBA(0xe0ca26ff),
        Color::fromRGBA(0xf6ae09ff),
        Color::fromRGBA(0xcd073dff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x000fafff),
        Color::fromRGBA(0xc0ae28ff),
        Color::fromRGBA(0xfce201ff),
        Color::fromRGBA(0xbba65fff),
        Color::fromRGBA(0xdd9324ff),
        Color::fromRGBA(0xea7800ff),
        Color::fromRGBA(0xe3971cff),
        Color::fromRGBA(0xe1bc22ff),
        Color::fromRGBA(0xe4800eff),
        Color::fromRGBA(0xe3b626ff),
        Color::fromRGBA(0xbaa05bff),
        Color::fromRGBA(0xfae302ff),
        Color::fromRGBA(0xf3ac0dff),
        Color::fromRGBA(0xcd073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x000fb0ff),
        Color::fromRGBA(0xc3b222ff),
        Color::fromRGBA(0xe6c526ff),
        Color::fromRGBA(0xae9a78ff),
        Color::fromRGBA(0xe19525ff),
        Color::fromRGBA(0xee7603ff),
        Color::fromRGBA(0xe5951dff),
        Color::fromRGBA(0xe7c019ff),
        Color::fromRGBA(0xe98306ff),
        Color::fromRGBA(0xe5b523ff),
        Color::fromRGBA(0xad9476ff),
        Color::fromRGBA(0xddc627ff),
        Color::fromRGBA(0xf7b007ff),
        Color::fromRGBA(0xcd063dff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x000fb0ff),
        Color::fromRGBA(0xc3b121ff),
        Color::fromRGBA(0xebcb2dff),
        Color::fromRGBA(0xac9684ff),
        Color::fromRGBA(0xb79262ff),
        Color::fromRGBA(0xc49153ff),
        Color::fromRGBA(0xc49c57ff),
        Color::fromRGBA(0xc8af54ff),
        Color::fromRGBA(0xc4a450ff),
        Color::fromRGBA(0xb79a63ff),
        Color::fromRGBA(0xad9483ff),
        Color::fromRGBA(0xddc930ff),
        Color::fromRGBA(0xf7af05ff),
        Color::fromRGBA(0xcd063eff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x000fafff),
        Color::fromRGBA(0xc0ae27ff),
        Color::fromRGBA(0xfce207ff),
        Color::fromRGBA(0xcfb449ff),
        Color::fromRGBA(0xc2aa59ff),
        Color::fromRGBA(0xbaa469ff),
        Color::fromRGBA(0xb49e7aff),
        Color::fromRGBA(0xb49c7bff),
        Color::fromRGBA(0xb59a66ff),
        Color::fromRGBA(0xc1a659ff),
        Color::fromRGBA(0xd0b247ff),
        Color::fromRGBA(0xf6e109ff),
        Color::fromRGBA(0xf4ac0cff),
        Color::fromRGBA(0xcd073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead2aff),
        Color::fromRGBA(0xffea00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xffe200ff),
        Color::fromRGBA(0xeccd15ff),
        Color::fromRGBA(0xbca061ff),
        Color::fromRGBA(0xbea463ff),
        Color::fromRGBA(0xebcb12ff),
        Color::fromRGBA(0xffe200ff),
        Color::fromRGBA(0xffde00ff),
        Color::fromRGBA(0xffeb00ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xfee900ff),
        Color::fromRGBA(0xfadc03ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xffe000ff),
        Color::fromRGBA(0xfada01ff),
        Color::fromRGBA(0xfada01ff),
        Color::fromRGBA(0xffe000ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfcdb02ff),
        Color::fromRGBA(0xfee900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfbdc01ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfee000ff),
        Color::fromRGBA(0xfee000ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfddc00ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfbdc01ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfdde00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfddc00ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfbdc01ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfddc00ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfbdc01ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfddc00ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a8ff),
        Color::fromRGBA(0x0018a7ff),
        Color::fromRGBA(0x0219a6ff),
        Color::fromRGBA(0x0010aeff),
        Color::fromRGBA(0xbead29ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xfbdc01ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfedf00ff),
        Color::fromRGBA(0xfddc00ff),
        Color::fromRGBA(0xffe900ff),
        Color::fromRGBA(0xf2ab0eff),
        Color::fromRGBA(0xce073cff),
        Color::fromRGBA(0xd01139ff),
        Color::fromRGBA(0xd01039ff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff),
        Color::fromRGBA(0xd0103aff)
    ],
];

$img = new Image(16, 11);
$img->append($pixels['16x11'], new Size(16, 11));
$img->append($pixels['32x22'], new Size(32, 22));

return $img;
