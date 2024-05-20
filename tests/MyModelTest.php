<?php

use Example\LaravelPackageExample\Models\MyModel;

// this test is for example purposes
it('can create a model', function () {
    $model = MyModel::factory()->create();

    $this->assertModelExists($model);
});

it('can get uppercase name', function () {
    /** @var MyModel $model */
    $model = MyModel::factory()->create(['name' => 'foo']);

    $this->assertEquals('FOO', $model->getUpperCaseName());
});
