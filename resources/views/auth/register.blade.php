<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <h1 class="text-3xl font-bold text-center text-emerald-800">Sign Up to Continue</h1>

    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
        <form action="/register" method="POST" class="space-y-4">
            @csrf
            <!-- Name -->
            <div>
                <x-form-label for="name">Name</x-form-label>
                <x-form-input id="name" name="name" type="text" placeholder="Enter Your Name" required />
                <x-form-error name="name" />
            </div>

            <!-- Email -->
            <div>
                <x-form-label for="email">Email</x-form-label>
                <x-form-input id="email" name="email" type="email" placeholder="Enter Your Email" required />
                <x-form-error name="email" />
            </div>

            <!-- Password -->
            <div>
                <x-form-label for="password">Password</x-form-label>
                <x-form-input id="password" name="password" type="password" placeholder="Enter Your Password" required />
                <x-form-error name="password" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <x-form-input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Your Password" required />
                <x-form-error name="password_confirmation" />
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <x-form-btn type="submit">Register</x-form-btn>
            </div>
        </form>
    </div>
</x-layout>
