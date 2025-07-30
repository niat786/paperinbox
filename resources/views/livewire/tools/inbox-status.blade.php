<div class="border shadow dark:border-gray-600 p-5 rounded-xl">
<flux:field>
    <flux:label>Email inbox status check</flux:label>
    <flux:description>Verify email syntax, domain validity, and deliverability with our powerful validation tools.</flux:description>
    <flux:input wire:model.blur="email" />
    @if($error)
        <p class="text-rose-600 text-sm">{{$error}}</p>
    @endif
</flux:field>
    <flux:button wire:click="sendRequest" class="my-3">Check email</flux:button>

     <div id="validationResults" class="text-sm dark:text-gray-400">
            <div class="flex items-center justify-between py-2 border-b border-gray-200 dark:border-gray-600">
                <span>Confidence Score</span>
                <span class=" flex items-center">
                    @if(!empty($result) && $result['confidence_score'])
                    <span> {{$result['confidence_score']}}</span>
                    @else
                  <span>0</span>
                    @endif
                </span>
            </div>
            <div class="flex items-center justify-between py-2 border-b border-gray-200 dark:border-gray-600">
                <span>Syntax Check</span>
                <span class=" flex items-center">
                    @if(!empty($result) && $result['is_valid_syntax'])
                    <span class="text-green-500 flex gap-1 items-center">@livewire('icons.tick') Valid</span>
                    @else
                  <span class="text-yellow-500">  <i class="ri-close-line ri-lg mr-1"></i> Invalid</span>
                    @endif
                </span>
            </div>
            <div class="flex items-center justify-between py-2 border-b border-gray-200 dark:border-gray-600">
                <span>Disposable</span>
                 <span class=" flex items-center">
                    @if(!empty($result) && $result['is_disposable'])
                    <span class="text-yellow-500">  <i class="ri-close-line ri-lg mr-1"></i>Yes</span>
                    @else
                    <span class="text-green-500"><i class="ri-check-double-line  ri-lg mr-1"></i>No</span>
                    @endif
                </span>
            </div>
            <div class="flex items-center justify-between py-2 border-b border-gray-200 dark:border-gray-600">
                <span>MX Records</span>
                <span class=" flex items-center">
                    @if(!empty($result) && $result['has_mx_records'])
                    <span class="text-green-500"><i class="ri-check-double-line  ri-lg mr-1"></i>Yes</span>
                    @else
                    <span class="text-yellow-500">  <i class="ri-close-line ri-lg mr-1"></i>No</span>
                    @endif
                </span>
            </div>
            <div class="flex items-center justify-between py-2">
                <span>SMTP Check</span>
                 <span class=" flex items-center">
                    @if(!empty($result) && $result['is_deliverable_smtp'])
                    <span class="text-green-500"><i class="ri-check-double-line  ri-lg mr-1"></i>Yes</span>
                    @else
                    <span class="text-yellow-500">  <i class="ri-close-line ri-lg mr-1"></i>No</span>
                    @endif
                </span>
            </div>
              <div class="flex items-center justify-between py-2">
                <span>Catch-all Domain</span>
                 <span class=" flex items-center">
                    @if(!empty($result) && $result['is_catch_all_domain'])
                    <span class="text-green-500"><i class="ri-check-double-line  ri-lg mr-1"></i>Yes</span>
                    @else
                    <span class="text-yellow-500">  <i class="ri-close-line ri-lg mr-1"></i>No</span>
                    @endif
                </span>
            </div>

        </div>
</div>
