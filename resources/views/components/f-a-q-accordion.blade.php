<div class="border-b">
    <button class="w-full text-left py-4 focus:outline-none">
        <span class="font-semibold">{{ $faq->question }}</span>
        <span class="float-right">+</span>
    </button>
    <div class="hidden pb-4">
        <p class="text-gray-700">{{ $faq->answer }}</p>
    </div>
</div>

<script>
    document.querySelectorAll('.faq-accordion button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');
            button.querySelector('span.float-right').textContent = content.classList.contains('hidden') ? '+' : '-';
        });
    });
</script>
