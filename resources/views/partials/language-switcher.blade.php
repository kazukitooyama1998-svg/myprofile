@php($currentLocale = app()->getLocale())

{{-- 表示言語（日本語 / English）の切り替え。選択はセッションに保存される --}}
<div class="lang-switch inline-flex items-center rounded-full bg-primary-light/40 p-1 font-heading text-sm font-bold leading-none"
     role="group" aria-label="{{ __('site.nav.lang_switch') }}">
  @foreach (['ja' => '日本語', 'en' => 'English'] as $code => $label)
    <a href="{{ route('lang.switch', $code) }}"
       @class([
           'px-3.5 py-2 rounded-full transition-colors',
           'bg-white text-primary-dark shadow-soft' => $currentLocale === $code,
           'text-muted hover:text-primary-dark' => $currentLocale !== $code,
       ])
       @if ($currentLocale === $code) aria-current="true" @endif>{{ $label }}</a>
  @endforeach
</div>
