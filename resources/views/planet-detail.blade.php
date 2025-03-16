<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">{{ $planetData->name }}</h1>
        <table class="table table-dark table-bordered table-striped">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Size (in km)</th>
                    <th>Solar System</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $planetData->description }}</td>
                    <td>{{ $planetData->size_in_km }}</td>
                    <td>{{ $planetData->solarSystem->name }}</td>
                    <td>{{ $planetData->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $planetData->updated_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ku1p3aH/6Zm47OPx12wB/bs7B8hnFb+dT2qsyN4Lt+dNKk+v5VwbgHRYk5H4u/Fz" crossorigin="anonymous"></script>
</body>
</html>