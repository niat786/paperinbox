<div class="border shadow dark:border-gray-600 p-5 rounded-xl">
    <flux:field>
        <flux:label>Email syntax check</flux:label>
        <flux:description>Verify email syntax</flux:description>
        <flux:input wire:model.blur="emailInput" />
    </flux:field>
    <flux:button wire:click="sendRequest" class="my-3">Check email</flux:button>

    @if ($report['summary']['total'] > 0)
        <p class="my-3 text-lg">Result</p>
        <div class="flex items-center justify-between py-2 border-b border-gray-200 dark:border-gray-600 text-sm ">
            <span>Email</span>
            <span class=" flex items-center">

                <span class="text-green-500">{{ $report['items'][0]['email'] }}</span>

            </span>
        </div>

        <div class="flex items-center justify-between py-2 text-sm">
            <span>Syntax</span>
            <span class=" flex items-center">
                @if ($report['items'][0]['status'] == 'valid')
                    <span class="text-green-500">Valid</span>
                @else
                    <span class="text-orange-500">Invalid</span>
                @endif
            </span>
        </div>

    @endif
</div>
