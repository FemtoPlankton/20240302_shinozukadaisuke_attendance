<x-app-layout>
    <div class="pt-24">
        @foreach ($workRecords as $record)
            <div>
                <p>Date: {{ $record->date }}</p>
                <p>Start Time: {{ $record->start_time }}</p>
                <p>End Time: {{ $record->end_time }}</p>
                <p>Break Start Time: {{ $record->break_start_time }}</p>
                <p>Break End Time: {{ $record->break_end_time }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>
