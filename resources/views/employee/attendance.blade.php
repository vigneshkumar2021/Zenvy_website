<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Attendance - Zenvy Solution</title>
    <link rel="icon" type="image/x-icon" href="/images/Logoliked.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
        }

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
            gap: 12px;
            transition: all 0.2s;
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

        .page-wrapper {
            flex-grow: 1;
            margin-left: var(--sidebar-width);
            min-height: 100vh;
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
            padding: 32px;
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
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
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
        }

        .stat-card {
            background: white;
            padding: 24px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            border: 1px solid rgba(0, 0, 0, 0.04);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
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
                <a href="{{ route('employee.attendance') }}" class="nav-link active">
                    <i class="bi bi-calendar-check-fill"></i>
                    <span>Attendance</span>
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('employee.profile') }}" class="nav-link">
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
                    <div class="fw-bold truncate small" style="color: white;">{{ $employee->name }}</div>
                    <div class="extra-small opacity-50 truncate" style="color: white;">{{ $employee->designation }}
                    </div>
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
                <h2 class="fw-bold m-0 h4">Attendance History</h2>
                <p class="text-muted small m-0">Detailed log for {{ $startOfMonth->format('F Y') }}</p>
            </div>

            <div class="d-flex align-items-center gap-3">
                <div class="month-selector-wrapper">
                    <select class="form-select border-0 shadow-sm rounded-pill px-4"
                        onchange="window.location.href='/employee/attendance?month=' + this.value.split('-')[0] + '&year=' + this.value.split('-')[1]">
                        @foreach($availableMonths as $m)
                            <option value="{{ $m['month'] }}-{{ $m['year'] }}" {{ $month == $m['month'] && $year == $m['year'] ? 'selected' : '' }}>
                                {{ $m['label'] }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-light d-lg-none rounded-circle"
                    onclick="document.getElementById('sidebar').classList.toggle('mobile-show')">
                    <i class="bi bi-list h5 m-0"></i>
                </button>
            </div>
        </header>

        <main class="main-content">
            <div class="stats-grid">
                <div class="stat-card shadow-sm border-start border-emerald-400 border-4">
                    <div class="stat-icon bg-emerald-100 text-emerald-600">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                    <div>
                        <div class="text-muted small fw-bold uppercase">Coming Days</div>
                        <div class="h3 fw-bold m-0">{{ $monthPresentCount }}</div>
                    </div>
                </div>
                <div class="stat-card shadow-sm border-start border-blue-400 border-4">
                    <div class="stat-icon bg-blue-100 text-blue-600">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div>
                        <div class="text-muted small fw-bold uppercase">Leave Days</div>
                        <div class="h3 fw-bold m-0">{{ $monthLeaveCount }}</div>
                    </div>
                </div>
                <div class="stat-card shadow-sm border-start border-amber-400 border-4">
                    <div class="stat-icon bg-amber-100 text-amber-600">
                        <i class="bi bi-calendar-range"></i>
                    </div>
                    <div>
                        <div class="text-muted small fw-bold uppercase">Total Working Days</div>
                        <div class="h3 fw-bold m-0">{{ $monthPresentCount + $monthLeaveCount }}</div>
                    </div>
                </div>
            </div>

            <div class="glass-card">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold m-0">Detailed Log</h5>
                    <span class="badge bg-slate-100 text-slate-600 px-3 py-2 rounded-pill small">
                        {{ $startOfMonth->format('d M') }} - {{ $endOfMonth->format('d M, Y') }}
                    </span>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr class="text-secondary small fw-black border-bottom">
                                <th class="pb-3">DATE</th>
                                <th class="pb-3">IN TIME</th>
                                <th class="pb-3">OUT TIME</th>
                                <th class="pb-3 text-end">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($attendances as $atten)
                                <tr>
                                    <td class="py-3 fw-bold text-dark">{{ date('d M, Y', strtotime($atten->date)) }}</td>
                                    <td class="py-3 text-muted">
                                        {{ $atten->login_time ? date('h:i A', strtotime($atten->login_time)) : '--:--' }}
                                    </td>
                                    <td class="py-3 text-muted">
                                        {{ $atten->logout_time ? date('h:i A', strtotime($atten->logout_time)) : '--:--' }}
                                    </td>
                                    <td class="py-3 text-end">
                                        @if($atten->status == 'Present')
                                            <span class="status-badge bg-emerald-100 text-emerald-700">Present</span>
                                        @elseif($atten->status == 'Late')
                                            <span class="status-badge bg-amber-100 text-amber-700">Late</span>
                                        @elseif($atten->status == 'Leave')
                                            <span class="status-badge bg-blue-100 text-blue-700">Leave</span>
                                        @else
                                            <span class="status-badge bg-rose-100 text-rose-700">Absent</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5 text-muted">
                                        No attendance records found for this month.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>