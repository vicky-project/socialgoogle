@extends('socialgoogle::layouts.app')

@section('title', 'Google - ' . ($googleAccount->name ?? 'Akun'))

@section('content')
<div class="google-header">
  <a href="{{ url()->previous() }}" class="back-link">
    <i class="bi bi-arrow-left"></i> Kembali
  </a>
  <h2 class="page-title">Akun Google</h2>
</div>

<div class="google-card">
  <div class="text-center mb-4">
    @if($googleAccount->avatar)
    <img src="{{ $googleAccount->avatar }}" alt="Avatar" class="google-avatar mb-3">
    @else
    <div class="google-avatar d-inline-flex align-items-center justify-content-center bg-light mb-3" style="font-size: 2.2rem; color: var(--google-gray);">
      <i class="bi bi-google"></i>
    </div>
    @endif
    <h4 class="fw-medium mb-1">{{ $googleAccount->name }}</h4>
    <p class="text-muted mb-2">
      {{ $googleAccount->email }}
    </p>
    <div class="d-flex justify-content-center gap-2">
      <a href="https://myaccount.google.com/" target="_blank" class="google-btn">
        <i class="bi bi-box-arrow-up-right"></i> Kelola Akun
      </a>
      <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="google-btn">
        <i class="bi bi-envelope"></i> Gmail
      </a>
    </div>
  </div>

  <div class="google-divider"></div>

  <div class="info-item">
    <span class="info-label"><span class="dot-google"></span> Provider ID</span>
    <span class="info-value">{{ $googleAccount->provider_id }}</span>
  </div>

  @if(!empty($data))
  @foreach($data as $key => $value)
  @if(!in_array($key, ['id', 'email', 'name', 'picture']) && !is_null($value))
  <div class="info-item">
    <span class="info-label">{{ ucfirst(str_replace('_', ' ', $key)) }}</span>
    <span class="info-value">
      @if(is_bool($value))
      {{ $value ? 'Ya' : 'Tidak' }}
      @elseif(is_array($value))
      {{ json_encode($value, JSON_UNESCAPED_UNICODE) }}
      @else
      {{ $value }}
      @endif
    </span>
  </div>
  @endif
  @endforeach
  @endif
</div>

{{-- Tombol Putuskan --}}
@if($googleAccount->provider)
<div class="text-center mt-3">
  <form action="{{ route('profile.social.disconnect', $googleAccount->provider->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="google-btn google-btn-danger" onclick="return confirm('Putuskan akun Google ini?')">
      <i class="bi bi-unlink"></i> Putuskan Akun
    </button>
  </form>
</div>
@endif
@endsection