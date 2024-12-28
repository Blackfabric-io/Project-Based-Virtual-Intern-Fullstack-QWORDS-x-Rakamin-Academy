@props(['icon', 'title', 'description', 'benefits'])

<div class="bg-white/90 backdrop-blur-sm rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-orange-200/50 relative overflow-hidden group">
    <!-- Decorative corner accent -->
    <div class="absolute top-0 right-0 w-24 h-24 transform translate-x-8 -translate-y-8">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-orange-100/20 rounded-full transform rotate-45"></div>
    </div>

    <!-- Icon container with stronger gradient -->
    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-4 text-white shadow-lg relative z-10 group-hover:scale-110 transition-transform duration-300">
        <i class="{{ $icon }} text-xl"></i>
    </div>

    <!-- Content -->
    <div class="relative z-10">
        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $title }}</h3>
        <p class="text-gray-600 mb-4">{{ $description }}</p>

        <!-- Benefits with custom bullets -->
        <div class="space-y-2">
            @foreach(explode('<br>', $benefits) as $benefit)
                @if(trim($benefit))
                    <div class="flex items-start space-x-2">
                        <div class="w-1.5 h-1.5 rounded-full bg-orange-500 mt-2 flex-shrink-0"></div>
                        <span class="text-sm text-gray-600">{{ trim($benefit) }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
