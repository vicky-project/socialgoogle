<?php
namespace Modules\SocialGoogle\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Modules\SocialAccount\Interfaces\SocialAccountInterface;
use Modules\SocialAccount\Models\SocialAccount;

class GoogleProvider extends Model implements SocialAccountInterface
{
  protected $table = 'google_providers';
  protected $fillable = ['provider_id',
    'email',
    'name',
    'avatar',
    'data'];
  protected $casts = ['data' => 'array'];

  public function provider(): MorphOne {
    return $this->morphOne(SocialAccount::class, "providerable");
  }
}