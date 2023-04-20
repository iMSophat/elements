<?php

test('can see button component', function () {
    $this
        ->blade('<x-e:button type="button" theme="primary"  onclick="alert(\'done\')" size="sm"> Button </x-e:button>')
        ->assertSee('sections');
});
