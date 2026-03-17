<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login - Zenvy Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .btn-primary {
            background: #764ba2;
            border: none;
            padding: 12px;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background: #5e3a8a;
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-dark">Employee Portal</h3>
            <p class="text-muted small">Login with your ID and Date of Birth</p>
        </div>

        @if(session('error'))
            <div class="alert alert-danger py-2 small">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('employee.login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label small fw-bold">Employee ID</label>
                <input type="text" name="employee_id" class="form-control" placeholder="ZV-2024-XXX" required>
            </div>
            <div class="mb-4">
                <label class="form-label small fw-bold">Date of Birth</label>
                <input type="date" name="dob" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-bold">Access Dashboard</button>
        </form>
    </div>
</body>

</html>