<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                {{ \Carbon\Carbon::now()->format('Y/m/d H:m:s') }}
                <form action="/attendances" method="post">
                    @csrf
                    <table>
                        <tr>
                            <th>name</th>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button>送信</button></td>
                        </tr>
                    </table>
                </form>
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>time</th>
                    </tr>
                    @foreach ($attendances as $attendance)
                        <tr>
                            <td>{{ $attendance->id }}</td>
                            <td>{{ $attendance->name }}</td>
                            <td>{{ $attendance->time }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
