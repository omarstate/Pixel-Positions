<x-layout>
    <x-page-heading>Companies</x-page-heading>
    @foreach($companies as $company)
        <x-panel class="flex gap-x-6">
            <div>
                <x-employer-logo :employer="$company" />
            </div>

            <div class="flex-1 flex flex-col">
                <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">
                        {{ $company->name }}
                </h3>

            </div>

        </x-panel>
        <x-forms.divider></x-forms.divider>
    @endforeach

{{ $companies->links() }}
</x-layout>
