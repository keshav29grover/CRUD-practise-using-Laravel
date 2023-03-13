<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Company-Employee-CRUD</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
    .navbar {
        background-color: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
    }

    .navbar-brand {
        font-size: 2.0rem;
        font-weight: bold;
        margin-right: auto;
    }

    .navbar-toggler {
        border-color: #343a40;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cline x1='3' y1='12' x2='27' y2='12' stroke='%23343a40' stroke-width='2' stroke-linecap='round'/%3E%3Cline x1='3' y1='18' x2='27' y2='18' stroke='%23343a40' stroke-width='2' stroke-linecap='round'/%3E%3Cline x1='3' y1='24' x2='27' y2='24' stroke='%23343a40' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E");
    }

    .navbar-nav {
        margin-left: auto;
    }

    .nav-link {
        color: #343a40;
        font-size: 1.5rem;
        font-weight: bold;
        margin-left: 15px;
        list-style: none;
    }

    .nav-item {
        list-style: none;
        margin-top: 15px;
    }

    .nav-link:last-of-type {
        margin-right: 0;
    }

    .spacing1 {
        margin-left: 25px;
    }

    .spacing2 {
        margin-left: 20px;
    }

    /* media query for smaller screens */
    @media (max-width: 768px) {
        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-nav {
            margin: 0;
        }

        .nav-link {
            font-size: 1.2rem;
            margin: 0;
            padding: 5px;
        }

        .nav-item {
            margin: 0;
        }
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('companies.index') }}">Comp_Emp-CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('companies.index') }}">Companies</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('employees.index') }}">Employees</a>
                </li> --}}
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>