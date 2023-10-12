<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <!-- Option 1: Include in HTML -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="public/css/" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body class="antialiased">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <a class="navbar-brand" href="/"><img src="/logo.png" style="width:120px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav d-xs-none d-sm-none d-lg-flex">
                    <li class="nav-item active"><a class="nav-link" href="/">All Jobs</a></li>
                    <li class="nav-item"><a class="nav-link" href="/job_type/industry_government?key=industry_government">Government Jobs</a></li>
                    <li class="nav-item"><a class="nav-link" href="/job_type/location_country_pakistan?key=location_country_pakistan">Jobs in Pakistan</a></li>
                </ul>
            </div>
        </nav>
        <div class="row d-flex justify-content-center search-bar fixed-top">
            <div class="col-12 col-md-6">
                <form class="form-inline">
                    <div class="input-group col-12">
                        <input type="text" name="search" class="form-control" id="search_id" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Search</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="app-side-nav" class="sidenav col-md-2 col-6 ml-1 d-lg-inline rounded d-none d-sm-none d-md-none">
            <div>
                <div id="category_0" class="side-nav-head first mt-4">Industry Wise Jobs</div>
                <ul id="nav_item_0" class="list-group">
                    <li class="list-group-item"><a class="text-white" href="/job_type/industry_government?key=industry_government">Government Jobs</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/industry_education?key=industry_education">Education Jobs</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/industry_health?key=industry_health">Health Jobs</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/industry_bank?key=industry_bank">Bank Jobs</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/industry_it?key=industry_it">IT Jobs</a></li>
                </ul>
            </div>
            <div>
                <div id="category_1" class="side-nav-head first mt-4">Location Wise Jobs</div>
                <ul id="nav_item_1" class="list-group">
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_country_pakistan?key=location_country_pakistan">Jobs In Pakistan</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_province_punjab?key=location_province_punjab">Jobs In Punjab</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_province_sindh?key=location_province_sindh">Jobs In Sindh</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_province_kpk?key=location_province_kpk">Jobs In Khyber Pakhtunkhwa (KPK)</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_province_balochistan?key=location_province_balochistan">Jobs In Balochistan</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_islamabad?key=location_city_islamabad">Jobs In Islamabad</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_rawalpindi?key=location_city_rawalpindi">Jobs In Rawalpindi</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_karachi?key=location_city_karachi">Jobs In Karachi</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_lahore?key=location_city_lahore">Jobs In Lahore</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_peshawar?key=location_city_peshawar">Jobs In Peshawar</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_quetta?key=location_city_quetta">Jobs In Quetta</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_faisalabad?key=location_city_faisalabad">Jobs In Faisalabad</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_hyderabad?key=location_city_hyderabad">Jobs In Hyderabad</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_gujranwala?key=location_city_gujranwala">Jobs In Gujranwala</a></li>
                    <li class="list-group-item"><a class="text-white" href="/job_type/location_city_sialkot?key=location_city_sialkot">Jobs In Sialkot</a></li>
                </ul>
            </div>
            <div>
                <div id="category_2" class="side-nav-head first mt-4">Organization Wise Jobs</div>
                <ul id="nav_item_2" class="list-group">
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_Pakistan_army?key=organization_Pakistan_army">Pakistan Army Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_pakistan_navy?key=organization_pakistan_navy">Pakistan Navy Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_pakistan_air_force?key=organization_pakistan_air_force">Pakistan Air Force Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_fia?key=organization_fia">FIA Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_police?key=organization_police">Police Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_nab?key=organization_nab">NAB Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_asf?key=organization_asf">ASF Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_spd?key=organization_spd">SPD Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_paec?key=organization_paec">PAEC Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_nescom?key=organization_nescom">NESCOM Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_ndc?key=organization_ndc">NDC Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_suparco?key=organization_suparco">SUPARCO Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_krl?key=organization_krl">KRL Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_pnra?key=organization_pnra">PNRA Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_fpsc?key=organization_fpsc">FPSC Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_ppsc?key=organization_ppsc">PPSC Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_spsc?key=organization_spsc">SPSC Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_kppsc?key=organization_kppsc">KPPSC Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_bpsc?key=organization_bpsc">BPSC Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_ajkpsc?key=organization_ajkpsc">AJKPSC Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_pia?key=organization_pia">PIA Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_fbr?key=organization_fbr">FBR Jobs</a>
                    </li>
                    <li class="list-group-item">
                        <a class="text-white" href="/job_type/organization_ssgc?key=organization_ssgc">SSGC Jobs</a>
                    </li>
                </ul>
            </div>
        </div>
    </header> 
        <div class="col-md-10 col-sm-12 col-xs-12 float-right main">
            @yield('content')
        </div>
    </body>
</html>
