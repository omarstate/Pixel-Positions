<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <div class="flex justify-center">
        <button class="bg-blue-700 rounded-2xl py-2 px-6 hover:bg-blue-600 transition-colors duration-300">Log In</button>
        </div>
    </x-forms.form>
</x-layout>
