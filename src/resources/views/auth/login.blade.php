<x-guest-layout>

    <div>
        <h2 class="pt-40 text-center text-2xl font-bold">ログイン</h2>
    </div>

    <x-jet-validation-errors class="mb-4 mt-4 text-center" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mx-auto w-2/5 ">

            <div class="pt-8">
                <x-jet-input id="email" class="block mt-1 w-full bg-gray-100 border-2 border-gray-500" type="email"
                    name="email" :value="old('email')" required autofocus placeholder="メールアドレス" />
            </div>

            <div class="mt-6">
                <x-jet-input id="password" class="block mt-1 w-full bg-gray-100 border-2 border-gray-500"
                    type="password" name="password" required autocomplete="current-password" placeholder="パスワード" />
            </div>

            <div class="flex justify-center mt-4">
                <x-jet-button class="w-full h-10 mt-4 justify-center bg-blue-600 hover:bg-blue-500">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>

            <div>
                <p class="text-center mt-4">アカウントをお持ちでない方はこちらから</p>
                <a href="/register" class="block text-center text-blue-500 hover:text-blue-400">会員登録</a>
            </div>
        </div>
    </form>
</x-guest-layout>
