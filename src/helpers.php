<?php
/**
 * User: widdy
 * Date: 2018/12/29
 * Time: 14:11
 */
if (!function_exists('model')) {
    /**
     * return a new Eloquent model with given table name.
     * we use function `eval` to generate an anonymous class(extend Illuminate\Database\Eloquent\Model),
     * so please ensure that the table name is not from user's input which is not safe.
     *
     * @param $table
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model|Eloquent
     */
    function model(string $table, array $attributes = [])
    {
        return eval('return $model = new class($attributes) extends Illuminate\Database\Eloquent\Model {
            use Illuminate\Database\Eloquent\SoftDeletes;
            protected $guarded = [];
            protected $table = \'' . $table . '\';  
        };');
    }
}


if (!function_exists('eloquent')) {
    /**
     * return a new Eloquent model with given table name.
     * we use function `eval` to generate an anonymous class(extend Illuminate\Database\Eloquent\Model),
     * so please ensure that the table name is not from user's input which is not safe.
     *
     * @param $table
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model|Eloquent
     */
    function eloquent(string $table, array $attributes = [])
    {
        return eval('return new class($attributes) extends Illuminate\Database\Eloquent\Model {         
            protected $table = \'' . $table . '\';  
        };');
    }
}