<!-- FAQ Accordion Component -->
<div class="border-b faq-accordion">
    <button class="w-full text-left py-4 focus:outline-none">
        <span class="font-semibold">{{ $faq->question }}</span>
        <span class="float-right">+</span>
    </button>
    <div class="hidden pb-4">
        <p class="text-gray-700">{{ $faq->answer }}</p>
    </div>
</div>
