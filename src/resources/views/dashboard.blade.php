<x-app-layout>
    <div>
        <h2 class="pt-32 font-bold text-2xl text-center">{{ auth()->user()->name }}さんお疲れ様です！</h2>
        <div class="mt-10 flex justify-around">
            <form class="w-5/12" action="{{ route('start') }}" method="POST">
                @csrf
                @if (!auth()->user()->work_started)
                <button class="py-28 w-full text-2xl font-bold bg-white">勤務開始</button>
                @endif
            </form>
            <form class="w-5/12" action="{{ route('end') }}" method="POST">
                @csrf
                <div class="flex-grow">
                    <button class="py-28 w-full text-2xl font-bold bg-white">勤務終了</button>
                </div>
            </form>
        </div>
        <div class="mt-10 flex justify-around">
            <form class="w-5/12" action="{{ route('start_break') }}" method="POST">
                @csrf
                <button class="py-28 w-full text-2xl font-bold bg-white">休憩開始</button>
            </form>
            <form class="w-5/12" action="{{ route('end_break') }}" method="POST">
                @csrf
                <button class="py-28 w-full text-2xl font-bold bg-white">休憩終了</button>
            </form>
        </div>
    </div>
</x-app-layout>
