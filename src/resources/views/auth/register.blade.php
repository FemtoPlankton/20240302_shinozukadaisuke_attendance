<x-guest-layout>

    <h2 class="pt-40 text-center text-2xl font-bold">会員登録</h2>

    <x-jet-validation-errors class="mb-4 mt-4 text-center" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mx-auto w-2/5">
            <div class="pt-8">
                <x-jet-input id="name" class="block mt-1 w-full bg-gray-100 border-2 border-gray-500" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" placeholder="名前" />
            </div>

            <div class="mt-6">
                <x-jet-input id="email" class="block mt-1 w-full bg-gray-100 border-2 border-gray-500" type="email" name="email" :value="old('email')"
                    required placeholder="メールアドレス" />
            </div>

            <div class="mt-6">
                <x-jet-input id="password" class="block mt-1 w-full bg-gray-100 border-2 border-gray-500" type="password" name="password" required
                    autocomplete="new-password" placeholder="パスワード" />
            </div>

            <div class="mt-6">
                <x-jet-input id="password_confirmation" class="block mt-1 w-full bg-gray-100 border-2 border-gray-500" type="password"
                    name="password_confirmation" required autocomplete="new-password" placeholder="確認用パスワード" />
            </div>

            <x-jet-button class="w-full h-10 mt-8 justify-center bg-blue-500 hover:bg-blue-400">
                {{ __('Register') }}
            </x-jet-button>
            <div class="text-center mt-4">
                <p>アカウントをお持ちの方はこちら</p>
                <a href="/" class="text-blue-500 hover:text-blue-400">ログイン</a>
            </div>
        </div>
    </form>
</x-guest-layout>
