<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Professional
 *
 * @property int $id
 * @property int|null $organization_id
 * @property int $user_id
 * @property string|null $phone_no
 * @property string $profession
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Database\Factories\ProfessionalFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Professional newQuery()
 * @method static \Illuminate\Database\Query\Builder|Professional onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Professional query()
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereOrganizationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional wherePhoneNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereProfession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|Professional withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Professional withoutTrashed()
 * @mixin \Eloquent
 */
class Professional extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
}
