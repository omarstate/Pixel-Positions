<x-layout>
    <x-page-heading>Edit Profile</x-page-heading>
    <x-panel class="group-hover:border-amber-50">
    <x-forms.form method="POST" action="/profile/edit" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <x-forms.input label="Username" name="name" type="name" value="{{ $user->name }}" />
        <x-forms.input label="Email" name="email" type="email" value="{{ $user->email }}" />
        <x-forms.input label="Employer Logo" name="logo" type="file" />
        <x-employer-logo :employer="$user->employer"></x-employer-logo>

        <div class="flex justify-center">
            <button class="bg-blue-700 rounded-2xl py-2 px-6 hover:bg-blue-600 transition-colors duration-300">Save</button>
        </div>
    </x-forms.form>
    </x-panel>
</x-layout>
