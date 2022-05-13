<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phonenumber</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($truck_requests as $truck_request)
            <tr>
                <td>
                    <a href="{{ route('truck_request-edit', ['id' => $truck_request->id]) }}" title="Edit truck request details">
                        {{ $truck_request->name }}
                    </a>
                </td>
                <td>
                    {{ $truck_request->phonenumber }}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="2">There are no truck requests yet.</td>
            </tr>
        @endforelse
    </tbody>
</table>