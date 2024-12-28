<!-- FAQ Accordion Component -->
<div class="space-y-4">
    @forelse($faqs as $faq)
        <div x-data="{ open: false }" class="border rounded-lg">
            <button @click="open = !open"
                    class="flex justify-between items-center w-full px-4 py-3 text-left">
                <span class="font-semibold text-gray-900">{{ $faq->question }}</span>
                <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                     :class="{'rotate-180': open}"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div x-show="open"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform scale-y-90"
                 x-transition:enter-end="opacity-100 transform scale-y-100"
                 x-transition:leave="transition ease-in duration-100"
                 x-transition:leave-start="opacity-100 transform scale-y-100"
                 x-transition:leave-end="opacity-0 transform scale-y-90"
                 class="px-4 pb-4 text-sm text-gray-600">
                {{ $faq->answer }}
            </div>
        </div>
    @empty
        <div class="text-center text-gray-500">
            Belum ada FAQ yang tersedia.
        </div>
    @endforelse
</div>

@push('scripts')
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
