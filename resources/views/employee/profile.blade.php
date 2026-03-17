<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Zenvy Solution</title>
    <link rel="icon" type="image/x-icon" href="/images/Logoliked.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-indigo: #4f46e5;
            --primary-purple: #7c3aed;
            --sidebar-width: 280px;
            --sidebar-bg: #0f172a;
            --bg-color: #f8fafc;
        }

        body {
            background: var(--bg-color);
            min-height: 100vh;
            font-family: 'Outfit', sans-serif;
            margin: 0;
            display: flex;
            overflow-x: hidden;
        }

        /* Integrated Premium Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--sidebar-bg);
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            padding: 40px 0;
            display: flex;
            flex-direction: column;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .sidebar-brand {
            padding: 0 32px 48px 32px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-brand img {
            width: 32px;
        }

        .sidebar-brand h5 {
            font-weight: 800;
            margin: 0;
            letter-spacing: -0.5px;
            font-size: 1.25rem;
            color: white;
        }

        .nav-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .nav-item {
            padding: 4px 16px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 16px;
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            border-radius: 12px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.2s ease;
            gap: 12px;
            border: none !important;
        }

        .nav-link:hover {
            color: white;
            background: rgba(255, 255, 255, 0.05);
        }

        .nav-link.active {
            color: white;
            background: linear-gradient(135deg, var(--primary-indigo), var(--primary-purple));
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3);
        }

        .nav-link i {
            font-size: 1.2rem;
        }

        .sidebar-footer {
            padding: 32px 16px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .user-pill {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 16px;
            margin-bottom: 20px;
        }

        .user-initial {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-indigo), var(--primary-purple));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* Layout */
        .page-wrapper {
            flex-grow: 1;
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            width: calc(100% - var(--sidebar-width));
        }

        .main-header {
            padding: 32px 48px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(248, 250, 252, 0.8);
            backdrop-filter: blur(8px);
            position: sticky;
            top: 0;
            z-index: 900;
        }

        .main-content {
            padding: 0 48px 48px 48px;
        }

        .glass-card {
            background: white;
            border-radius: 24px;
            border: 1px solid rgba(0, 0, 0, 0.04);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            padding: 40px;
        }

        .max-w-700 {
            max-width: 700px;
        }

        .rounded-16 {
            border-radius: 16px;
        }

        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .rounded-24 {
            border-radius: 24px;
        }

        .rounded-10 {
            border-radius: 10px;
        }

        @media (max-width: 991px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.mobile-show {
                transform: translateX(0);
            }

            .page-wrapper {
                margin-left: 0;
                width: 100%;
            }

            .main-header,
            .main-content {
                padding: 24px;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <img src="/images/Logoliked.ico" alt="ZenvY">
            <h5>ZenvY Solutions</h5>
        </div>

        <nav class="nav-menu">
            <div class="nav-item">
                <a href="{{ route('employee.dashboard') }}" class="nav-link">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('employee.attendance') }}" class="nav-link">
                    <i class="bi bi-calendar-check-fill"></i>
                    <span>Attendance</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('employee.profile') }}" class="nav-link active">
                    <i class="bi bi-person-circle"></i>
                    <span>My Profile</span>
                </a>
            </div>
        </nav>

        <div class="sidebar-footer">
            <div class="user-pill">
                @if($employee->profile_image)
                    <img src="/profile_images/{{ $employee->profile_image }}" class="rounded-10"
                        style="width: 40px; height: 40px; object-fit: cover;">
                @else
                    <div class="user-initial">{{ substr($employee->name, 0, 1) }}</div>
                @endif
                <div class="overflow-hidden">
                    <div class="fw-bold truncate small">{{ $employee->name }}</div>
                    <div class="extra-small opacity-50 truncate">{{ $employee->designation }}</div>
                </div>
            </div>
            <form action="{{ route('employee.logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-link text-danger bg-transparent p-0 border-0">
                    <i class="bi bi-power"></i>
                    <span>Sign Out</span>
                </button>
            </form>
        </div>
    </aside>

    <div class="page-wrapper">
        <header class="main-header">
            <div>
                <h2 class="fw-bold m-0 h4">My Profile</h2>
                <p class="text-muted small m-0">Manage your personal information</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light d-lg-none rounded-circle"
                    onclick="document.getElementById('sidebar').classList.toggle('mobile-show')">
                    <i class="bi bi-list h5 m-0"></i>
                </button>
                <div
                    class="d-none d-md-flex align-items-center gap-3 bg-white p-2 ps-3 pe-1 rounded-pill shadow-sm border">
                    <span class="small fw-bold">{{ $employee->name }}</span>
                    @if($employee->profile_image)
                        <img src="/profile_images/{{ $employee->profile_image }}" class="rounded-circle"
                            style="width: 32px; height: 32px; object-fit: cover;">
                    @else
                        <div class="user-initial" style="width: 32px; height: 32px; font-size: 0.7rem;">
                            {{ substr($employee->name, 0, 1) }}
                        </div>
                    @endif
                </div>
                <a href="{{ route('employee.dashboard') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                    <i class="bi bi-arrow-left me-1"></i> Back
                </a>
            </div>
        </header>

        <main class="main-content">
            <div class="max-w-700 mx-auto">
                @if(session('success'))
                    <div class="alert alert-success border-0 shadow-sm fade show mb-4 rounded-16" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger border-0 shadow-sm fade show mb-4 rounded-16" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
                    </div>
                @endif

                <div class="glass-card mb-4">
                    <form action="{{ route('employee.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row align-items-center mb-5">
                            <div class="col-auto">
                                <div class="position-relative">
                                    @if($employee->profile_image)
                                        <img src="/profile_images/{{ $employee->profile_image }}" id="profilePreview"
                                            class="rounded-24 shadow-sm"
                                            style="width: 120px; height: 120px; object-fit: cover; border: 4px solid white;">
                                    @else
                                        <div id="profilePreviewPlaceholder"
                                            class="rounded-24 d-flex align-items-center justify-content-center bg-light text-primary fw-bold h1 m-0 shadow-sm"
                                            style="width: 120px; height: 120px; border: 4px solid white;">
                                            {{ substr($employee->name, 0, 1) }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <h5 class="fw-bold mb-1">Profile Photo</h5>
                                <p class="text-muted small mb-3">Upload a professional photo for your identity</p>
                                <input type="file" name="profile_image"
                                    class="form-control form-control-sm border-0 bg-light rounded-pill px-3 py-2"
                                    style="max-width: 250px;" onchange="previewImage(this)">
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Employee ID</label>
                                <input type="text" class="form-control bg-light border-0 py-2"
                                    value="{{ $employee->employee_id }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Designation</label>
                                <input type="text" class="form-control bg-light border-0 py-2"
                                    value="{{ $employee->designation }}" disabled>
                            </div>

                            <div class="col-12 py-2">
                                <hr class="opacity-10">
                            </div>

                            <div class="col-md-12">
                                <label class="form-label small fw-bold text-dark">Full Name</label>
                                <input type="text" name="name" class="form-control py-2 shadow-none"
                                    value="{{ old('name', $employee->name) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-dark">Email Address</label>
                                <input type="email" name="email" class="form-control py-2 shadow-none"
                                    value="{{ old('email', $employee->email) }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-dark">Contact Number</label>
                                <input type="text" name="contact" class="form-control py-2 shadow-none"
                                    value="{{ old('contact', $employee->contact) }}" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Date of Birth</label>
                                <input type="text" class="form-control bg-light border-0 py-2"
                                    value="{{ $employee->dob }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-muted">Salary Details</label>
                                <input type="text" class="form-control bg-light border-0 py-2"
                                    value="₹{{ number_format($employee->salary) }}" disabled>
                            </div>

                            <div class="col-12 mt-5">
                                <button type="submit"
                                    class="btn btn-primary px-5 py-3 rounded-16 fw-bold shadow-sm border-0"
                                    style="background: linear-gradient(135deg, var(--primary-indigo), var(--primary-purple))">
                                    Update Profile Information
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    const preview = document.getElementById('profilePreview');
                    const placeholder = document.getElementById('profilePreviewPlaceholder');

                    if (preview) {
                        preview.src = e.target.result;
                    } else if (placeholder) {
                        // Create image element if placeholder exists
                        const img = document.createElement('img');
                        img.id = 'profilePreview';
                        img.src = e.target.result;
                        img.className = 'rounded-24 shadow-sm';
                        img.style.width = '120px';
                        img.style.height = '120px';
                        img.style.objectFit = 'cover';
                        img.style.border = '4px solid white';
                        placeholder.parentNode.replaceChild(img, placeholder);
                    }
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>