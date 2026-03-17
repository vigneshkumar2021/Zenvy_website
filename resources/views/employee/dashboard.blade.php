<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard - Zenvy Solution</title>
    <link rel="icon" type="image/x-icon" href="/images/Logoliked.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-indigo: #4f46e5;
            --primary-purple: #7c3aed;
            --sidebar-width: 280px;
            --sidebar-bg: #0f172a;
            /* Deep charcoal/blue for premium feel */
            --bg-color: #f8fafc;
        }

        body {
            background: var(--bg-color);
            min-height: 100vh;
            font-family: 'Outfit', sans-serif;
            margin: 0;
            display: flex;
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
            box-shadow: 10px 0 30px rgba(0, 0, 0, 0.05);
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
            transition: 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.04);
        }

        .btn-checkin {
            background: white;
            color: var(--primary-indigo);
            border: none;
            padding: 14px 32px;
            border-radius: 14px;
            font-weight: 700;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: 0.2s;
        }

        .btn-checkin:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .clock-section {
            background: linear-gradient(135deg, var(--primary-indigo), var(--primary-purple));
            padding: 48px;
            border-radius: 32px;
            color: white;
            text-align: center;
            margin-bottom: 32px;
        }

        .clock-time {
            font-size: 4rem;
            font-weight: 800;
            letter-spacing: -3px;
            line-height: 1;
        }

        /* Filters */
        .filter-group {
            display: flex;
            gap: 8px;
        }

        .filter-btn {
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #64748b;
            text-decoration: none;
            transition: 0.2s;
            background: #f1f5f9;
        }

        .filter-btn.active {
            background: var(--sidebar-bg);
            color: white;
        }

        @media (max-width: 991px) {
            .sidebar {
                transform: translateX(-100%);
                transition: 0.3s;
            }

            .sidebar.mobile-show {
                transform: translateX(0);
            }

            .page-wrapper {
                margin-left: 0;
            }

            .main-header,
            .main-content {
                padding: 24px;
            }
        }

        /* Existing styles that might need adjustment or removal if redundant */
        .status-badge {
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
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
                <a href="{{ route('employee.dashboard') }}" class="nav-link active">
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
                <a href="{{ route('employee.profile') }}" class="nav-link">
                    <i class="bi bi-person-circle"></i>
                    <span>My Profile</span>
                </a>
            </div>
        </nav>

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
                <button type="submit" class="nav-link text-danger bg-transparent p-0">
                    <i class="bi bi-power"></i>
                    <span>Sign Out</span>
                </button>
            </form>
        </div>
    </aside>

    <div class="page-wrapper">
        <header class="main-header">
            <div>
                <h2 class="fw-bold m-0 h4">Dashboard</h2>
                <p class="text-muted small m-0">{{ date('l, d F Y') }}</p>
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
            </div>
        </header>

        <main class="main-content">

            @if(session('success'))
                <div class="alert alert-success alert-dismissible border-0 shadow-sm fade show mb-4 rounded-16"
                    role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill me-2 h5 mb-0"></i>
                        <div>{{ session('success') }}</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible border-0 shadow-sm fade show mb-4 rounded-16" role="alert">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-exclamation-triangle-fill me-2 h5 mb-0"></i>
                        <div>{{ session('error') }}</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row g-4">
                <!-- Left Column: Clock & Attendance -->
                <div class="col-xl-7">
                    <div class="clock-section shadow-sm">
                        <div id="date" class="mb-2 opacity-75 fw-bold letter-spacing-1"></div>
                        <div class="clock-time" id="clock">00:00:00</div>
                        <div class="mt-5 d-flex justify-content-center gap-3">
                            @php
                                $now = \Carbon\Carbon::now('Asia/Kolkata');
                                $canCheckIn = !$todayAttendance && $now->between($now->copy()->setTime(9, 30), $now->copy()->setTime(11, 0));
                                $canCheckOut = $todayAttendance && !$todayAttendance->logout_time && $now->between($now->copy()->setTime(17, 45), $now->copy()->setTime(20, 0));
                            @endphp

                            <form action="{{ route('employee.attendance.checkin') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-checkin" {{ !$canCheckIn ? 'disabled' : '' }}
                                    style="{{ !$canCheckIn ? 'opacity: 0.5; cursor: not-allowed; background: #e2e8f0; color: #64748b; box-shadow: none;' : '' }}">
                                    <i class="bi bi-play-circle-fill me-2"></i>
                                    @if($todayAttendance && $todayAttendance->login_time)
                                        Checked In
                                    @elseif($now->gt($now->copy()->setTime(11, 0)))
                                        Check In (Closed)
                                    @else
                                        Check In
                                    @endif
                                </button>
                            </form>
                            <form action="{{ route('employee.attendance.checkout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="btn {{ $canCheckOut ? 'btn-outline-light' : 'btn-secondary' }} border-2 px-4 py-3 rounded-14 fw-bold"
                                    {{ !$canCheckOut ? 'disabled' : '' }}
                                    style="{{ !$canCheckOut ? 'opacity: 0.5; cursor: not-allowed;' : '' }}">
                                    @if($todayAttendance && $todayAttendance->logout_time)
                                        Checked Out
                                    @elseif($now->gt($now->copy()->setTime(20, 0)) && $todayAttendance && !$todayAttendance->logout_time)
                                        Check Out (Closed)
                                    @else
                                        Check Out
                                    @endif
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="glass-card">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                            <h5 class="fw-bold m-0 h5">Attendance Analytics</h5>
                            <div class="filter-group">
                                <a href="?filter=all" class="filter-btn {{ $filter == 'all' ? 'active' : '' }}">All</a>
                                <a href="?filter=weekly"
                                    class="filter-btn {{ $filter == 'weekly' ? 'active' : '' }}">Weekly</a>
                                <a href="?filter=monthly"
                                    class="filter-btn {{ $filter == 'monthly' ? 'active' : '' }}">Monthly</a>
                                <a href="?filter=yearly"
                                    class="filter-btn {{ $filter == 'yearly' ? 'active' : '' }}">Yearly</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle m-0">
                                <thead>
                                    <tr class="text-secondary small fw-black tracking-widest border-bottom">
                                        <th class="pb-3 px-0">DATE</th>
                                        <th class="pb-3">IN</th>
                                        <th class="pb-3">OUT</th>
                                        <th class="pb-3 text-end">STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attendances as $atten)
                                        <tr class="border-bottom-light">
                                            <td class="py-4 px-0 fw-bold text-dark">
                                                {{ date('d M, Y', strtotime($atten->date)) }}
                                            </td>
                                            <td class="py-4 text-muted">
                                                {{ $atten->login_time ? date('h:i A', strtotime($atten->login_time)) : '--:--' }}
                                            </td>
                                            <td class="py-4 text-muted">
                                                {{ $atten->logout_time ? date('h:i A', strtotime($atten->logout_time)) : '--:--' }}
                                            </td>
                                            <td class="py-4 text-end">
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
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Stats & Notifications -->
                <div class="col-xl-5">
                    <div class="row g-4 mb-4">
                        <div class="col-6">
                            <div class="glass-card text-center py-5">
                                <div class="text-amber-500 mb-3 h2"><i class="bi bi-hourglass-split"></i></div>
                                <div class="h2 fw-bold m-0">{{ $attendances->where('status', 'Late')->count() }}</div>
                                <div class="text-muted extra-small fw-black tracking-widest mt-1">LATE DAYS</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="glass-card text-center py-5 border-primary-light">
                                <div class="text-indigo-500 mb-3 h2"><i class="bi bi-award-fill"></i></div>
                                <div class="h2 fw-bold m-0">{{ $attendances->where('status', 'Present')->count() }}
                                </div>
                                <div class="text-muted extra-small fw-black tracking-widest mt-1">TOTAL DAYS</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="glass-card text-center py-4 bg-slate-50 border-0">
                                <div class="text-slate-400 mb-1 extra-small fw-black tracking-widest uppercase">Company
                                    Working Days (This Month)</div>
                                <div class="h3 fw-bold m-0 text-slate-800">{{ $workingDaysCount }} Days</div>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card">
                        <h5 class="fw-bold mb-4 d-flex align-items-center gap-2">
                            <i class="bi bi-bell-fill text-indigo-500"></i>
                            Notifications
                        </h5>
                        <div class="notification-list">
                            @forelse($notifications as $notif)
                                <div
                                    class="p-4 bg-slate-50 rounded-20 mb-3 border-start border-4 border-indigo-500 transition-all hover-translate-x">
                                    <div class="fw-bold text-dark mb-1">{{ $notif->title }}</div>
                                    <div class="text-muted extra-small">{{ $notif->message }}</div>
                                    <div class="text-end mt-2 extra-small opacity-50 fw-bold uppercase">
                                        {{ $notif->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-5 text-muted">
                                    <i class="bi bi-inbox h1 opacity-10"></i>
                                    <p class="small mt-2">No updates available</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateClock() {
            const now = new Date();
            const time = now.toLocaleTimeString('en-US', { hour12: false });
            const date = now.toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
            document.getElementById('clock').textContent = time;
            document.getElementById('date').textContent = date;
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</body>

</html>