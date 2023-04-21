<?php

test('can see button component', function () {
    $this
        ->blade('<x-button type="button" theme="primary"  onclick="alert(\'done\')" size="sm"> Button </x-button>')
        ->assertSee('sections');
});

test('can see button:sm component', function () {
    $this
        ->blade('<x-button:sm type="button" theme="primary"  onclick="alert(\'done\')"> Button </x-button:sm>')
        ->assertSee('sections');
});
