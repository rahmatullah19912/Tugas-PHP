<?php

use PHPUnit\Framework\TestCase;

/*
test('example test', function () {
    $result = 10 + 5;

    expect($result)->tobe(15);
});


test('example test', function () {
    $myArray = [1, 2, 3,];

    expect($myArray)->tobeArray();
});


it('should check if the value is empty using toBeEmpty', function () {
    $value = '';

    expect($value)->toBeEmpty();
})->uses(TestCase::class);


it('should check if the value is true using toBeTrue', function () {
    $value = true;

    expect($value)->toBeTrue();
})->uses(TestCase::class);


it('should check if the value is truthy using toBeTruthy', function () {
    $value = 42;

    expect($value)->toBeTruthy();
})->uses(TestCase::class);


it('should check if the value is falsey using toBeFalse', function () {
    $value = false;

    expect($value)->toBeFalsy();
})->uses(TestCase::class);


it('should check if the value is falsy using toBeFalsy', function () {
    $value = 0;

    expect($value)->toBeFalsy();
})->uses(TestCase::class);


it('should check if the value is greater than a specified value using toBeGreaterThan', function () {
    $expected = 10;
    $actual = 15;

    expect($actual)->toBeGreaterThan($expected);
})->uses(TestCase::class);


it('should check if the value is greater than or equal to a specified value using toBeGreaterThanOrEqual', function () {
    $expected = 10;
    $actual = 10;

    expect($actual)->toBeGreaterThanOrEqual($expected);
})->uses(TestCase::class);


it('should check if the value is less than a specified value using toBeLessThan', function () {
    $expected = 10;
    $actual = 5;

    expect($actual)->toBeLessThan($expected);
})->uses(TestCase::class);


it('should check if the value is less than or equal to a specified value using toBeLessThanOrEqual', function () {
    $expected = 20;
    $actual = 10;

    expect($actual)->toBeLessThanOrEqual($expected);
})->uses(TestCase::class);


it('should check if the array contains a specific value using toContain', function () {
    $array = ['apple', 'banana', 'orange'];

    expect($array)->toContain('banana');
})->uses(TestCase::class);

class ExampleClass
{
    // Class definition...
}


it('should check if the array contains only instances of a specific class using toContainOnlyInstancesOf', function () {
    $array = [new ExampleClass(), new ExampleClass()];

    expect($array)->toContainOnlyInstancesOf(ExampleClass::class);
})->uses(TestCase::class);


it('should check if the array has a specific count using toHaveCount', function () {
    $array = [1, 2, 3, 4, 5];

    expect($array)->toHaveCount(5);
})->uses(TestCase::class);

class ExampleClass
{
    public function foo()
    {
        // Method implementation...
    }

    public function bar()
    {
        // Method implementation...
    }
}


it('should check if a class has a specific method using toHaveMethod', function () {
    $instance = new ExampleClass();

    expect($instance)->toHaveMethod('foo');
    expect($instance)->toHaveMethod('bar');
    expect($instance)->not->toHaveMethod('baz');
})->uses(TestCase::class);


class ExampleClass
{
    public function foo()
    {
        // Method implementation...
    }

    public function bar()
    {
        // Method implementation...
    }

    public function baz()
    {
        // Method implementation...
    }
}


it('should check if a class has multiple methods using toHaveMethods', function () {
    $instance = new ExampleClass();

    expect($instance)->toHaveMethods(['foo', 'bar']);
    expect($instance)->not->toHaveMethods(['baz', 'qux']);
})->uses(TestCase::class);


class ExampleClass
{
    public $foo;
    private $bar;
}

it('should check if an object has a specific property using toHaveProperty', function () {
    $instance = new ExampleClass();
    $instance->foo = 'value';

    expect($instance)->toHaveProperty('foo');
    expect($instance)->toHaveProperty('bar');
})->uses(TestCase::class);


class ExampleClass
{
    public $foo;
    private $bar;
    public $baz;
}


it('should check if an object has multiple properties using toHaveProperties', function () {
    $instance = new ExampleClass();
    $instance->foo = 'value';
    $instance->baz = 'another value';

    expect($instance)->toHaveProperties(['foo', 'baz']);
    expect($instance)->not->toHaveProperties(['bar', 'qux']);
})->uses(TestCase::class);


it('should check if an array matches a specific structure using toMatchArray', function () {
    $expected = ['foo' => 'bar', 'baz' => 'qux'];
    $actual = ['foo' => 'bar', 'baz' => 'qux'];

    expect($actual)->toMatchArray($expected);
})->uses(TestCase::class);


class ExampleClass
{
    public $foo;
    public $bar;
}


it('should check if an object matches a specific structure using toMatchObject', function () {
    $expected = new ExampleClass();
    $expected->foo = 'bar';
    $expected->bar = 'qux';

    $actual = new ExampleClass();
    $actual->foo = 'bar';
    $actual->bar = 'qux';

    expect($actual)->toMatchObject($expected);
})->uses(TestCase::class);


it('should check if two values are equal using toEqual', function () {
    $expected = 'Hello, World!';
    $actual = 'Hello, World!';

    expect($actual)->toEqual($expected);
})->uses(TestCase::class);


it('should check if a value is of type bool using toBeBool', function () {
    $value = true;

    expect($value)->toBeBool();
})->uses(TestCase::class);


class ExampleClass
{
    public function foo()
    {
        // Method implementation...
    }
}


it('should check if a value is callable using toBeCallable', function () {
    $value = new ExampleClass();

    expect([$value, 'foo'])->toBeCallable();
})->uses(TestCase::class);


it('should check if a path refers to an existing file using toBeFile', function () {
    $path = storage_path('app/file.txt');

    expect($path)->toBeFile();
})->uses(TestCase::class);


it('should check if a value is of type float using toBeFloat', function () {
    $value = 3.14;

    expect($value)->toBeFloat();
})->uses(TestCase::class);


it('should check if a value is of type int using toBeInt', function () {
    $value = 42;

    expect($value)->toBeInt();
})->uses(TestCase::class);


test('expect()->toBeIterable() checks if a variable is iterable', function () {
    $iterableArray = [1, 2, 3];
    $iterableObject = new ArrayIterator([1, 2, 3]);
    $nonIterableValue = 123;

    expect($iterableArray)->toBeIterable();
    expect($iterableObject)->toBeIterable();
    expect($nonIterableValue)->toBeIterable(); // This expectation will fail
});


it('should check if a value is numeric using toBeNumeric', function () {
    $value = 42;

    expect($value)->toBeNumeric();
})->uses(TestCase::class);


class ExampleClass
{
    // Class definition...
}


it('should check if a value is of type object using toBeObject', function () {
    $value = new ExampleClass();

    expect($value)->toBeObject();
})->uses(TestCase::class);


test('expect()->toBeResource() checks if a variable is of type resource', function () {
    $handle = fopen('php://memory', 'r+');
    $nonResourceValue = 'some string';

    expect($handle)->toBeResource();
    expect($nonResourceValue)->toBeResource(); // This expectation will fail
});


it('should check if a value is scalar using toBeScalar', function () {
    $value = 'Hello, World!';

    expect($value)->toBeScalar();
})->uses(TestCase::class);


it('should check if a value is of type string using toBeString', function () {
    $value = 'Hello, World!';

    expect($value)->toBeString();
})->uses(TestCase::class);


it('should check if a value is a valid JSON string using toBeJson', function () {
    $jsonString = '{"name": "John", "age": 30}';

    expect($jsonString)->toBeJson();
})->uses(TestCase::class);


test('expect()->toBeNan() checks if a variable has the value "NaN"', function () {
    $result = sqrt(-1);
    $nonNanValue = 10;

    expect($result)->toBeNan();
    expect($nonNanValue)->toBeNan(); // This expectation will fail
});


it('should check if a value is null using toBeNull', function () {
    $value = null;

    expect($value)->toBeNull();
})->uses(TestCase::class);

*/