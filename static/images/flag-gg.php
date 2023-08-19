<?php

declare(strict_types=1);

use Ardillo\{Color, Image, Size};

$pixels = [
    '16x11' => [
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xf6abb4fe),
        Color::fromRGBA(0xe81631ff),
        Color::fromRGBA(0xe81631ff),
        Color::fromRGBA(0xf6abb4fe),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf6aab4ff),
        Color::fromRGBA(0xee5825ff),
        Color::fromRGBA(0xee5825ff),
        Color::fromRGBA(0xf6aab4ff),
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
        Color::fromRGBA(0xf6a7b4ff),
        Color::fromRGBA(0xf07323ff),
        Color::fromRGBA(0xf07323ff),
        Color::fromRGBA(0xf6a7b4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdeef2ff),
        Color::fromRGBA(0xfdf3f5ff),
        Color::fromRGBA(0xf59cacff),
        Color::fromRGBA(0xef6f23ff),
        Color::fromRGBA(0xef6f23ff),
        Color::fromRGBA(0xf59cacff),
        Color::fromRGBA(0xfdf3f5ff),
        Color::fromRGBA(0xfdeef2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xed4856ff),
        Color::fromRGBA(0xee5d54ff),
        Color::fromRGBA(0xee5755ff),
        Color::fromRGBA(0xec4345ff),
        Color::fromRGBA(0xf07b21ff),
        Color::fromRGBA(0xf07b21ff),
        Color::fromRGBA(0xec4346ff),
        Color::fromRGBA(0xee5755ff),
        Color::fromRGBA(0xee5d54ff),
        Color::fromRGBA(0xed4856ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xe70b27ff),
        Color::fromRGBA(0xe70b27ff),
        Color::fromRGBA(0xe70927ff),
        Color::fromRGBA(0xe92225ff),
        Color::fromRGBA(0xf29618ff),
        Color::fromRGBA(0xf39b17ff),
        Color::fromRGBA(0xf39c19ff),
        Color::fromRGBA(0xf6bd19ff),
        Color::fromRGBA(0xf6bd19ff),
        Color::fromRGBA(0xf39c19ff),
        Color::fromRGBA(0xf39b17ff),
        Color::fromRGBA(0xf29618ff),
        Color::fromRGBA(0xe92225ff),
        Color::fromRGBA(0xe70927ff),
        Color::fromRGBA(0xe70b27ff),
        Color::fromRGBA(0xe70b27ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xed4856ff),
        Color::fromRGBA(0xee5d54ff),
        Color::fromRGBA(0xee5755ff),
        Color::fromRGBA(0xec4345ff),
        Color::fromRGBA(0xf07b21ff),
        Color::fromRGBA(0xf07b21ff),
        Color::fromRGBA(0xec4346ff),
        Color::fromRGBA(0xee5755ff),
        Color::fromRGBA(0xee5d54ff),
        Color::fromRGBA(0xed4856ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xec4057ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdeef2ff),
        Color::fromRGBA(0xfdf3f5ff),
        Color::fromRGBA(0xf59cacff),
        Color::fromRGBA(0xef6f23ff),
        Color::fromRGBA(0xef6f23ff),
        Color::fromRGBA(0xf59cacff),
        Color::fromRGBA(0xfdf3f5ff),
        Color::fromRGBA(0xfdeef2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xfdf0f2ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xf6a7b4ff),
        Color::fromRGBA(0xf07323ff),
        Color::fromRGBA(0xf07323ff),
        Color::fromRGBA(0xf6a7b4ff),
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
        Color::fromRGBA(0xf6aab4ff),
        Color::fromRGBA(0xee5825ff),
        Color::fromRGBA(0xee5825ff),
        Color::fromRGBA(0xf6aab4ff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xf6abb4fe),
        Color::fromRGBA(0xe81631ff),
        Color::fromRGBA(0xe81631ff),
        Color::fromRGBA(0xf6abb4fe),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
        Color::fromRGBA(0xfffffffd),
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
        Color::fromRGBA(0xfefdfefe),
        Color::fromRGBA(0xf06678ff),
        Color::fromRGBA(0xe70f2bff),
        Color::fromRGBA(0xe8132fff),
        Color::fromRGBA(0xe8132fff),
        Color::fromRGBA(0xe70f2bff),
        Color::fromRGBA(0xf06678ff),
        Color::fromRGBA(0xfefdfefe),
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
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xffffffff),
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06577ff),
        Color::fromRGBA(0xe70b29ff),
        Color::fromRGBA(0xe70d2dff),
        Color::fromRGBA(0xe70d2dff),
        Color::fromRGBA(0xe70b29ff),
        Color::fromRGBA(0xf06577ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06577ff),
        Color::fromRGBA(0xea3325ff),
        Color::fromRGBA(0xee5e24ff),
        Color::fromRGBA(0xee5e24ff),
        Color::fromRGBA(0xea3325ff),
        Color::fromRGBA(0xf06577ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xea3225ff),
        Color::fromRGBA(0xf7c618ff),
        Color::fromRGBA(0xf7c618ff),
        Color::fromRGBA(0xea3225ff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xe81927ff),
        Color::fromRGBA(0xf5b81aff),
        Color::fromRGBA(0xf5b81aff),
        Color::fromRGBA(0xe81927ff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xe81a27ff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xe81a27ff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xf06578ff),
        Color::fromRGBA(0xe81a27ff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xe81a27ff),
        Color::fromRGBA(0xf06578ff),
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
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d5ff),
        Color::fromRGBA(0xee5469ff),
        Color::fromRGBA(0xe81b28ff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xe81b28ff),
        Color::fromRGBA(0xee5469ff),
        Color::fromRGBA(0xfad0d5ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9253aff),
        Color::fromRGBA(0xea2939ff),
        Color::fromRGBA(0xe91c3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe81232ff),
        Color::fromRGBA(0xe81b2bff),
        Color::fromRGBA(0xf5b81aff),
        Color::fromRGBA(0xf5b81aff),
        Color::fromRGBA(0xe81b2bff),
        Color::fromRGBA(0xe81232ff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91c3bff),
        Color::fromRGBA(0xea2939ff),
        Color::fromRGBA(0xe9253aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe70e2cff),
        Color::fromRGBA(0xe92829ff),
        Color::fromRGBA(0xf1841eff),
        Color::fromRGBA(0xee6122ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xef6823ff),
        Color::fromRGBA(0xf7c718ff),
        Color::fromRGBA(0xf7c718ff),
        Color::fromRGBA(0xef6823ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee6122ff),
        Color::fromRGBA(0xf1841eff),
        Color::fromRGBA(0xe92829ff),
        Color::fromRGBA(0xe70e2cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe70f2dff),
        Color::fromRGBA(0xea2a2aff),
        Color::fromRGBA(0xf7c718ff),
        Color::fromRGBA(0xf9df15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9dd15ff),
        Color::fromRGBA(0xf9df15ff),
        Color::fromRGBA(0xf7c718ff),
        Color::fromRGBA(0xea2a2aff),
        Color::fromRGBA(0xe70f2dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe8112dff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe70e2cff),
        Color::fromRGBA(0xe92829ff),
        Color::fromRGBA(0xf1841eff),
        Color::fromRGBA(0xee6122ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xef6823ff),
        Color::fromRGBA(0xf7c718ff),
        Color::fromRGBA(0xf7c718ff),
        Color::fromRGBA(0xef6823ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee5f23ff),
        Color::fromRGBA(0xee6122ff),
        Color::fromRGBA(0xf1841eff),
        Color::fromRGBA(0xe92829ff),
        Color::fromRGBA(0xe70e2cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe7102cff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9253aff),
        Color::fromRGBA(0xea2939ff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe81232ff),
        Color::fromRGBA(0xe81b2bff),
        Color::fromRGBA(0xf5b81aff),
        Color::fromRGBA(0xf5b81aff),
        Color::fromRGBA(0xe81b2bff),
        Color::fromRGBA(0xe81232ff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xe91d3bff),
        Color::fromRGBA(0xea2939ff),
        Color::fromRGBA(0xe9253aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xe9203aff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad0d5ff),
        Color::fromRGBA(0xee5469ff),
        Color::fromRGBA(0xe81b28ff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xe81b28ff),
        Color::fromRGBA(0xee5469ff),
        Color::fromRGBA(0xfad0d5ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad0d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
        Color::fromRGBA(0xfad1d6ff),
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
        Color::fromRGBA(0xf06578ff),
        Color::fromRGBA(0xe81a27ff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xe81a27ff),
        Color::fromRGBA(0xf06578ff),
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
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xe81a27ff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xf6b91aff),
        Color::fromRGBA(0xe81a27ff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xe81927ff),
        Color::fromRGBA(0xf5b81aff),
        Color::fromRGBA(0xf5b81aff),
        Color::fromRGBA(0xe81927ff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xea3225ff),
        Color::fromRGBA(0xf7c618ff),
        Color::fromRGBA(0xf7c618ff),
        Color::fromRGBA(0xea3225ff),
        Color::fromRGBA(0xf06477ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06577ff),
        Color::fromRGBA(0xea3325ff),
        Color::fromRGBA(0xee5e24ff),
        Color::fromRGBA(0xee5e24ff),
        Color::fromRGBA(0xea3325ff),
        Color::fromRGBA(0xf06577ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xfefdfeff),
        Color::fromRGBA(0xf06577ff),
        Color::fromRGBA(0xe70b29ff),
        Color::fromRGBA(0xe70d2dff),
        Color::fromRGBA(0xe70d2dff),
        Color::fromRGBA(0xe70b29ff),
        Color::fromRGBA(0xf06577ff),
        Color::fromRGBA(0xfefdfeff),
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
        Color::fromRGBA(0xfefdfefe),
        Color::fromRGBA(0xf06678ff),
        Color::fromRGBA(0xe70f2bff),
        Color::fromRGBA(0xe8132fff),
        Color::fromRGBA(0xe8132fff),
        Color::fromRGBA(0xe70f2bff),
        Color::fromRGBA(0xf06678ff),
        Color::fromRGBA(0xfefdfefe),
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
