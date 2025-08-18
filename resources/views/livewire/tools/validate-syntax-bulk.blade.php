<div class="shadow border dark:border-gray-600 p-5 rounded-xl">
    <flux:input
        type="file"
        wire:model="emailFile"
        label="Bulk Validation: Drag & drop your CSV or TXT file here"
        accept=".csv,.txt"
    />
    @error('emailFile')
        <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
    @enderror
    <div class="mt-4 flex gap-3">
  <button class="px-3 py-2 rounded-lg hover:cursor-pointer bg-green-600 text-white hover:bg-green-700 disabled:opacity-50"
          wire:click="downloadValidTxt"
          @disabled(empty($report['summary']['valid']))>
    Download Valid (.txt)
  </button>
  <button class="px-3 py-2 rounded-lg hover:cursor-pointer bg-rose-600 text-white hover:bg-rose-700 disabled:opacity-50"
          wire:click="downloadInvalidCsv"
          @disabled(
            empty($report['summary']['invalid']) &&
            empty($report['summary']['incomplete']) &&
            empty($report['summary']['duplicates']) &&
            empty($report['summary']['blanks'])
          )>
    Download Invalid (.csv)
  </button>
</div>
</div>