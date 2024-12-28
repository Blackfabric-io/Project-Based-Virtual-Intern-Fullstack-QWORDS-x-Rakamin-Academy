<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Features</th>
            @foreach($packages as $package)
                <th class="py-2 px-4 border-b">{{ $package->name }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach($features as $feature)
            <tr>
                <td class="py-2 px-4 border-b">{{ $feature->name }}</td>
                @foreach($packages as $package)
                    <td class="py-2 px-4 border-b text-center">
                        @if(in_array($feature->id, $package->features->pluck('id')->toArray()))
                            <svg class="w-5 h-5 text-green-500 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1,0,0,0-1.414 0L8 12.586 4.707 9.293a1 1,0,1,0-1.414 1.414l4 4a1 1,0,0,0,1.414 0l8-8a1 1,0,0,0,0-1.414z" clip-rule="evenodd" />
                            </svg>
                        @else
                            <svg class="w-5 h-5 text-red-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </path>
                            </svg>
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
