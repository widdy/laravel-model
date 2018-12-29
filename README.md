# laravel-model

a simple way to create a new Eloquent model with given table name.

## Requirements

- laravel >=5.5


## Installation

```sh
$ composer require widdy/laravel-model
```

## Examples
```
model('users')::find(1);
model('users')->fill(['email' => 'foo@bar.com'])->save();
model('users', ['email' => 'foo@bar.com'])->save();
```
