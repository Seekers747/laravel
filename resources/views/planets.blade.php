<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Planets</h1>

        {{-- Milky Way Galaxy Table --}}
        @if ($planets_milkyway)
            <h2 class="mt-5">Milky Way Galaxy</h2>
            <table class="table table-dark table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Size (in km)</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($planets_milkyway->planets as $planet)
                        <tr>
                            <td>{{ $planet->name }}</td>
                            <td>{{ $planet->description }}</td>
                            <td>{{ $planet->size_in_km }} km</td>
                            <td>{{ $planet->created_at->format('Y-m-d H:i:s') }}</td>
                            <td>{{ $planet->updated_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        {{-- Andromeda Galaxy Table --}}
        @if ($planets_andromeda)
            <h2 class="mt-5">Andromeda Galaxy</h2>
            <table class="table table-dark table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Size (in km)</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($planets_andromeda->planets as $planet)
                        <tr>
                            <td>{{ $planet->name }}</td>
                            <td>{{ $planet->description }}</td>
                            <td>{{ $planet->size_in_km }} km</td>
                            <td>{{ $planet->created_at->format('Y-m-d H:i:s') }}</td>
                            <td>{{ $planet->updated_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
