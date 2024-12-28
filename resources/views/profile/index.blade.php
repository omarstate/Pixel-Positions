<x-layout>
    <x-page-heading>Profile</x-page-heading>
    <x-panel class="flex gap-x-6">
        <div>
            <x-employer-logo :employer="$user->employer" />
        </div>
        <div class="flex-1 flex flex-col">
            <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">Username: {{ $user->name }}</a>
            <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">Email: {{ $user->email }}</a>

            <h3 class="font-bold text-xl mt-3">
                    Employer: {{ $user->employer->name }}
            </h3>

            <h3 class="font-bold text-xl mt-3">
                    Active Job listings: {{ count($user->employer->jobs) }}
            </h3>
        </div>
        <x-forms.divider></x-forms.divider>
        <div class="items-center space-x-4 flex justify-center">
            <a href="/profile/edit"><x-button>Edit</x-button></a>
        </div>
    </x-panel>
</x-layout>
