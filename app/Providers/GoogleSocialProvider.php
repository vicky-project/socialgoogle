<?php
namespace Modules\SocialGoogle\Providers;

use Modules\SocialAccount\Enums\Provider;
use Modules\SocialAccount\Interfaces\SocialProvider;
use Modules\SocialGoogle\Models\GoogleProvider as GoogleProviderModel;

class GoogleSocialProvider implements SocialProvider
{
  public function getName(): string
  {
    return Provider::GOOGLE->value;
  }

  public function getLabel(): string
  {
    return Provider::GOOGLE->label();
  }

  public function getIcon(): string
  {
    return 'bi bi-google';
  }

  public function getLoginUrl(): string
  {
    return route('social.login', Provider::GOOGLE->value);
  }

  public function handleCallback($socialUser): array
  {
    // Cari atau buat record di tabel google_providers
    $provider = GoogleProviderModel::firstOrCreate(
      ['provider_id' => $socialUser->getId()],
      [
        'email' => $socialUser->getEmail(),
        'name' => $socialUser->getName(),
        'avatar' => $socialUser->getAvatar(),
        'data' => $socialUser->user,
      ]
    );

    return [
      'providerable_id' => $provider->id,
      'providerable_type' => GoogleProviderModel::class,
      'provider_data' => [
        'avatar' => $socialUser->getAvatar(),
        'email' => $socialUser->getEmail(),
        'name' => $socialUser->getName(),
        // bisa tambahkan token dll
      ],
    ];
  }
}