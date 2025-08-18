<!-- resources/views/temp-mail/show.blade.php -->
{{-- @extends('layouts.app') --}}

@section('content')
<div class="max-w-4xl mx-auto p-4 space-y-4">
  <a href="{{ url()->previous() }}" class="text-sm underline">← Back</a>

  <div class="p-4 rounded-xl border bg-white/70 dark:bg-zinc-900 space-y-2">
    <div class="text-xs text-zinc-500">{{ $email->received_at?->toDayDateTimeString() }}</div>
    <h1 class="text-xl font-semibold">{{ $email->subject ?: '(No subject)' }}</h1>
    <div class="text-sm text-zinc-600">From: {{ $email->from_name }} &lt;{{ $email->from_email }}&gt;</div>
    <div class="flex flex-wrap gap-2 mt-2">
      @foreach(($email->attachments ?? []) as $att) @endforeach
      @foreach($email->attachments as $att)
        <a class="text-sm px-3 py-1 rounded border" href="{{ Storage::disk($att->disk)->url($att->path) }}" download>
          {{ $att->filename ?? 'attachment' }}
        </a>
      @endforeach
    </div>
  </div>

  <div class="rounded-xl border overflow-hidden">
    @if($email->html_body)
      {{-- SAFETY: sanitized render --}}
      <iframe class="w-full h-[70vh]" srcdoc="{!! \App\Support\HtmlSanitizer::sanitize($email->html_body) !!}"></iframe>
    @elseif($email->text_body)
      <pre class="p-4 whitespace-pre-wrap">{{ $email->text_body }}</pre>
    @else
      <div class="p-4 text-zinc-500">No content.</div>
    @endif
  </div>
</div>
@endsection