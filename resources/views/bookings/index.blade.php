<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phonenumber</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($bookings as $booking)
            <tr>
                <td>
                    <a href="{{ route('booking-edit', ['id' => $booking->id]) }}" title="Edit booking details">
                        {{ $booking->name }}
                    </a>
                </td>
                <td>
                    {{ $booking->phonenumber }}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="2">There are no bookings yet.</td>
            </tr>
        @endforelse
    </tbody>
</table>