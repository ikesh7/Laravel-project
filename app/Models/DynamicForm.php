<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DynamicForm
 *
 * @property int $id
 * @property string $title
 * @property string $input_type
 * @property string $form_section
 * @property string|null $option_values
 * @property string|null $required
 * @property string|null $others
 * @property int $userid
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm query()
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm whereFormSection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm whereInputType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm whereOptionValues($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm whereOthers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DynamicForm whereUserid($value)
 * @mixin \Eloquent
 */
class DynamicForm extends Model
{
    use HasFactory;

    protected $table = 'tbl_forms_inputs';
    public $timestamps = false;

    protected $fillable = [
		'title', 'input_type', 'form_section','option_values','userid',
	];
}
