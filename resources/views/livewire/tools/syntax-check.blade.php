<div class="border shadow dark:border-gray-600 p-5 rounded-xl">
<flux:field>
    <flux:label>Email syntax check</flux:label>
    <flux:description>Verify email syntax</flux:description>
    <flux:input wire:model.blur="email" />
</flux:field>
    <flux:button wire:click="sendRequest" class="my-3">Check email</flux:button>
</div>
