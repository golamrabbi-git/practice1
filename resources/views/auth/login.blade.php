<x-layout>
    <x-slot:heading>Login</x-slot:heading>

    <h1 class="text-3xl font-bold text-center text-emerald-800">Welcome Back!</h1>

    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <!-- Email -->
            <div>
                <x-form-label for="email">Email</x-form-label>
                <x-form-input id="email" name="email" type="email" :value="old('email')" placeholder="Enter Your Email" required />
                <x-form-error name="email" />
            </div>

            <!-- Password -->
            <div>
                <x-form-label for="password">Password</x-form-label>
                <x-form-input id="password" name="password" type="password" placeholder="Enter Your Password" required />
                <x-form-error name="password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <x-form-input id="remember" name="remember" type="checkbox" />
                <label for="remember" class="ml-2 text-sm text-gray-600">Remember Me</label>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <x-form-btn type="submit">Login</x-form-btn>
            </div>
        </form>
    </div>
</x-layout>
