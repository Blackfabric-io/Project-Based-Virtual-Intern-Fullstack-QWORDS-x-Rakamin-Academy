<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-semibold text-center mb-12">Our Partners</h2>
        <div class="flex flex-wrap items-center justify-center -mx-4">
            @foreach($partners as $partner)
                <x-partner-logo :partner="$partner" />
            @endforeach
        </div>
    </div>
</section>
