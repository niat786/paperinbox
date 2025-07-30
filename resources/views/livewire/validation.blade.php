<div id="validator"
    class="bg-white rounded-lg shadow-md p-6 border border-gray-100 hover:shadow-lg transition-shadow">
    <div class="flex items-center mb-4">
        <div
            class="w-12 h-12 flex items-center justify-center bg-indigo-100 rounded-full text-primary mr-4">
            <i class="ri-check-double-line ri-xl"></i>
        </div>
        <h3 class="text-xl font-semibold">Email Validator</h3>
    </div>
    <p class="text-gray-600 mb-6">Verify email syntax, domain validity, and deliverability with our
        powerful validation tools.</p>
    <div class="mb-6">
        <div class="flex items-center justify-between mb-4">
            <span class="font-medium">Validation Mode</span>
            <div class="flex items-center gap-3">
                <span class="text-sm text-gray-500">Single</span>
                <label class="custom-switch">
                    <input type="checkbox" id="validatorModeSwitch">
                    <span class="slider"></span>
                </label>
                <span class="text-sm text-gray-500">Bulk</span>
            </div>
        </div>
       
        <!-- Single Email Validation -->
        <div id="singleValidatorForm" class="mb-4">
            <div class="relative">
                <input type="email" placeholder="Enter email to validate" wire:model.blur="email"
                    class="w-full px-4 py-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm">
                <button wire:click="sendRequest" wire:loading.attr="disabled"
    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-primary text-white px-4 py-1.5 !rounded-button whitespace-nowrap text-sm flex items-center gap-2">
    
    <!-- Show when not loading -->
    <span wire:loading.remove wire:target="sendRequest">Validate</span>

    <!-- Show loader when loading -->
    <span wire:loading wire:target="sendRequest" class="text-white animate-spin">
        <i class="ri-loader-line size-7"></i>
    </span>
</button>
            </div>
        </div>
        <!-- Bulk Email Validation -->
        <div id="bulkValidatorForm" class="hidden">
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center mb-4">
                <div
                    class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded-full mx-auto mb-3">
                    <i class="ri-upload-cloud-line ri-xl text-gray-500"></i>
                </div>
                <p class="text-gray-600 mb-2">Drag & drop your CSV or TXT file here</p>
            
                <button
                    class="bg-gray-100 text-gray-700 px-4 py-2 !rounded-button whitespace-nowrap hover:bg-gray-200 transition-colors">
                    You need to log in to perform bulk email validation!
                </button>
            </div>
            <button wire:click="redirectToLogin"
                class="w-full bg-primary text-white py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors">
                Validate Bulk Emails
</button>
        </div>

    </div>

    <div class="bg-gray-50 rounded-lg p-4 mb-4">
        <h4 class="font-medium mb-3">Validation Results</h4>
        <div id="validationResults" class="text-sm">
            <div class="flex items-center justify-between py-2 border-b border-gray-200">
                <span>Confidence Score</span>
                <span class=" flex items-center">
                    @if(!empty($result) && $result['confidence_score'])
                    <span> {{$result['confidence_score']}}</span>
                    @else
                  <span>0</span>
                    @endif
                </span>
            </div>
            <div class="flex items-center justify-between py-2 border-b border-gray-200">
                <span>Syntax Check</span>
                <span class=" flex items-center">
                    @if(!empty($result) && $result['is_valid_syntax'])
                    <span class="text-green-500"><i class="ri-check-double-line  ri-lg mr-1"></i> Valid</span>
                    @else
                  <span class="text-yellow-500">  <i class="ri-close-line ri-lg mr-1"></i> Invalid</span>
                    @endif
                </span>
            </div>
            <div class="flex items-center justify-between py-2 border-b border-gray-200">
                <span>Disposable</span>
                 <span class=" flex items-center">
                    @if(!empty($result) && $result['is_disposable'])
                    <span class="text-yellow-500">  <i class="ri-close-line ri-lg mr-1"></i>Yes</span>
                    @else
                    <span class="text-green-500"><i class="ri-check-double-line  ri-lg mr-1"></i>No</span>
                    @endif
                </span>
            </div>
            <div class="flex items-center justify-between py-2 border-b border-gray-200">
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
    <div class="flex justify-end">
        <a href="{{route('login')}}" class="text-primary flex items-center hover:underline">
            Advanced Options <i class="ri-arrow-right-s-line ri-lg ml-1"></i>
        </a>
    </div>

</div>