<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Include header -->
    @include('layouts.header')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">{{ $title }}</h2>
                    </div>
                </div>

                @if(isset($users) && count($users) > 0)
                    <div class="card shadow-sm">
                        <div class="card-header bg-light">
                            <h3 class="mb-0">Users</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Position</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user['id'] }}</td>
                                                <td>{{ $user['name'] }}</td>
                                                <td>{{ $user['email'] }}</td>
                                                <td>{{ $user['position'] }}</td>
                                                <td>{{ $user['created_at'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            Total users: {{ count($users) }}
                        </div>
                    </div>
                @else
                    <div class="alert alert-info">
                        <p class="mb-0">No user data available to display.</p>
                    </div>
                @endif

                @include('layouts.footer')
</body>

</html>