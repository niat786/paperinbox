
<x-layouts.app :title="__('Email Validator')">
    <div  class="grid grid-cols-1 md:grid-cols-2 gap-10 p-10">
        @livewire('tools.syntax-check')
        @livewire('tools.validate-syntax-bulk')
    </div>
</x-layouts.app>
