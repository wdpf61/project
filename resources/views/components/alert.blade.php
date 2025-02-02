@props(['type' => 'info'])

<div class="alert alert-{{ $type }}">
    <strong>{{ $abc ?? 'Notice' }}</strong>
    {{ $slot }}
</div>
