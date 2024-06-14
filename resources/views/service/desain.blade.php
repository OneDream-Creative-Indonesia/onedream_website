@extends('layouts.app')
@section('page')
<main>
            <!-- breadcrumb-area -->
            <div class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="{{asset('img/bg/breadcrumb-layanan.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap pt-100 text-center">
                                <h2>Jasa Pembuatan Desain</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                                        <li class="breadcrumb-item active" aria-current="page">Desain</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->
            <!-- customer-service -->
            <section class="inner-customer-service position-relative padding-md gray-bg pt-150 pb-150">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="inner-software-img software-img-shape">
                                <img src="{{ asset('img/images/ilustrasi3.png') }}" alt="img" style="box-shadow:none">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-80">
                            <div class="section-title mb-30">
                                <h2>Kami Memproduksi Desain Promosi / Profil yang Menarik & Informatif!</h2>
                            </div>
                            <div class="software-content inner-c-services-content">
                                <p>Desain merupakan media yang paling efektif untuk melakukan campaign, awareness, dan edukasi pasar karena mampu menangkap momen secara visual, sehingga pesan yang disampaikan dapat dengan mudah ditangkap oleh audience atau calon customer potensial Anda.</p>
                                <a href="contact.html" class="btn">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- customer-service-end -->
            <!-- counter-area -->
            <section class="counter-area inner-counter-bg pt-5 pb-5">
                <div class="container">
                <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-7 col-md-9">
                            <div class="section-title text-center margin-md mb-35">
                                <span class="text-white">Tahapan Pembuatan Desain</span>
                                <p >Setelah melakukan brainstorming tentang Desain yang akan dibuat, tim kami akan mulai berkolaborasi untuk memproduksi Desain yang menakjubkan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-50">
                              <div class="counter-icon">
                                <img src="{{ asset('img/icon/consultation.png') }}" style="width: 45px;" >        
                              </div>
                                <div class="counter-content">
                                    <h4 style="font-size:30px; color:white;font-weight:600;">Consultation</h4>
                                    <p>Tentukan paket yang sesuai dengan kebutuhan desain dari bisnis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-50">
                                <div class="counter-icon">
                                    <img src="{{ asset('img/icon/brief.png') }}" style="width: 48px;"/>
                                </div>
                                <div class="counter-content">
                                    <h4 style="font-size:30px; color:white;font-weight:600;">Brief</h4>
                                    <p>Jelaskan keinginan desain kepada tim melalui brief agar hasil maksimal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-50">
                                <div class="counter-icon">
                                   <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDY4Mi42NjcgNjgyLjY2NyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PGRlZnM+PGNsaXBQYXRoIGlkPSJhIiBjbGlwUGF0aFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTTAgNTEyaDUxMlYwSDBaIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PC9jbGlwUGF0aD48L2RlZnM+PHBhdGggZD0iTTAgMHY3NS43OSIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0ibWF0cml4KDEuMzMzMzMgMCAwIC0xLjMzMzMzIDQ3OS4wOCA0MDEuNDQpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjMzMzMzIDAgMCAtMS4zMzMzMyAwIDY4Mi42NjcpIj48cGF0aCBkPSJNMCAwaDE0Mi43NjZhOC4wNTkgOC4wNTkgMCAwIDEgOC4wNTkgOC4wNnYxMDcuMzE3YTguMDYgOC4wNiAwIDAgMS04LjA1OSA4LjA2aC0yNC4wNzNsLTE2LjQ4IDIwLjYxM2E2Ljk0OSA2Ljk0OSAwIDAgMS01LjQyNiAyLjYwOEg1NC4wMzhhNi45NSA2Ljk1IDAgMCAxLTUuNDI2LTIuNjA4bC0xNi40OC0yMC42MTNIMCIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcxLjc3NyAyMTAuOTE4KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDBjLTIxLjE0NiAwLTM4LjI4OS0xNy4xNDMtMzguMjg5LTM4LjI5Uy0yMS4xNDYtNzYuNTggMC03Ni41OGMyMS4xNDcgMCAzOC4yOSAxNy4xNDMgMzguMjkgMzguMjlTMjEuMTQ3IDAgMCAwWiIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE0Ny4xOSAzMTAuOTI2KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDB2MTkuMjkxYTcuNDI3IDcuNDI3IDAgMCAxLTcuNDI3IDcuNDI3aC0zNi43MmE3LjQyNiA3LjQyNiAwIDAgMS03LjQyNi03LjQyN1YtODkuMjkxYTcuNDI2IDcuNDI2IDAgMCAxIDcuNDI2LTcuNDI3aDM2LjcyQTcuNDI3IDcuNDI3IDAgMCAxIDAtODkuMjkxVi0zNSIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDc5LjgwOCAzMDcuNzMpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PHBhdGggZD0iTTAgMGgtNDUuNDg3YTIuNzg1IDIuNzg1IDAgMCAwLTIuNzg1IDIuNzg1djI3LjE2OEgyLjc4NVYyLjc4NUEyLjc4NSAyLjc4NSAwIDAgMCAwIDBaIiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTY5LjkzNCAxODAuOTY1KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDB2LTQzLjEzMyIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE0Ny4xOSAxODAuOTY1KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Im0wIDAtMTMuNDk4IDIzLjM4YTguMyA4LjMgMCAwIDEtNy4xODYgNC4xNDhoLTExNi4xNThhOC4yOTkgOC4yOTkgMCAwIDEtNy4xODYtNC4xNDhsLTU4LjA3OS0xMDAuNTk3YTguMjk1IDguMjk1IDAgMCAxIDAtOC4yOThsNTguMDc5LTEwMC41OTVhOC4yOTUgOC4yOTUgMCAwIDEgNy4xODYtNC4xNDloMTE2LjE1OGE4LjI5NyA4LjI5NyAwIDAgMSA3LjE4NiA0LjE0OUw0NC41ODEtODUuNTE1YTguMyA4LjMgMCAwIDEgMCA4LjI5OEwxOC40ODgtMzIuMDIyIiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDM4LjA3MyA0NzYuOTcyKSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Im0wIDAtNDcuMjI5LTgxLjc5IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzQ0LjMxIDM2OS42MikiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZmZmZiIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJtMCAwLTQ3LjIyMS04MS43OSIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQyMS41MyA1MDMuMzgpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PHBhdGggZD0ibTAgMC00Ny4yMjEgODEuNzkiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MjEuNTMgMjg3LjgzKSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Im0wIDAtNDcuMjI5IDgxLjgiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNDQuMzEgNDIxLjU4KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDBoLTk0LjQ0OCIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMyOS4zMDkgMzk1LjYxKSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDBoLTk0LjQ0OCIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ4My43NiAzOTUuNjEpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PHBhdGggZD0iTTAgMGMtMTYuNTcgMC0zMC4wMDItMTMuNDMtMzAuMDAyLTMwUy0xNi41Ny02MC4wMDcgMC02MC4wMDcgMzAuMDAxLTQ2LjU3IDMwLjAwMS0zMCAxNi41NyAwIDAgMFoiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNTkuMzEgNDI1LjYxKSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDB2LTExOS42NjdhNCA0IDAgMCAxIDQtNGgyOC44ODhhNCA0IDAgMCAxIDQgNFY3NS43NTFhNCA0IDAgMCAxLTQgNEg0YTQgNCAwIDAgMS00LTRWMzUiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNDAuODY2IDEzMS4xNjcpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PHBhdGggZD0ibTAgMC0yMy4xNi05NS45OSIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyMy44IDEwMy40OSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZmZmZiIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJtMCAwLTIzLjE2IDk1Ljk5IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTkzLjc0IDcuNSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZmZmZiIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJNMCAwaC03OS44NTlhOS41NDggOS41NDggMCAwIDAtOS41NDggOS41NDh2MTUuMjUxYTkuNTQ4IDkuNTQ4IDAgMCAwIDkuNTQ4IDkuNTQ4SDBjNS4yNzMgMCA5LjU0OS00LjI3NSA5LjU0OS05LjU0OFY5LjU0OEM5LjU0OSA0LjI3NCA1LjI3MyAwIDAgMFoiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxODcuMTIgMTAzLjQ4NSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZmZmZiIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" style="width: 48px;">
                                </div>
                                <div class="counter-content">
                                    <h4 style="font-size:30px; color:white;font-weight:600;">Production</h4>
                                    <p>Tim akan mulai membuat dan mengerjakan konsep Desain secara profesional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-50">
                                <div class="counter-icon">
                                    <img src="{{ asset('img/icon/publication.png') }}" style="width: 45px;" >
                                </div>
                                <div class="counter-content">
                                    <h4 style="font-size:30px; color:white;font-weight:600;">Publication</h4>
                                    <p>Dapatkan hasil Desain dengan kualitas yang terbaik bersama kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- counter-area-end -->
            <!--start portfolio -->
    <div class="case-studies-area circle-shape-right default-padding bottom-less pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 pb-5">
                    <div class="site-heading text-center">
                        <h1 class="h1">Pilihan Jenis Desain</h1>
                        <div class="heading-divider"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="case-items ">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="500ms">
                            <div class="thumb">
                               <div class="video-responsive">
                                        <iframe width="350" height="196.875" src="https://www.youtube.com/embed/T7eVIfHsKGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="info">
                                <div class="cats pt-4">
                                    <p>
                                        Video Produk Komersil  
                                    </p>
                                </div>
                                <h5 class="cats pb-4">
                                    <a href="#">Harus Wangi </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="600ms">
                            <div class="thumb">
                                <div class="video-responsive">
                                    <iframe width="350" height="196.875" src="https://www.youtube.com/embed/16u47iHJxx0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="info">
                                <div class="cats pt-4">
                                    <p>
                                        Video Produk Komersil
                                    </p>
                                </div>
                                <h5 class="cats pb-4">
                                    <a href="#">Ferroli Water Heater</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="700ms">
                            <div class="video-responsive">
                                <iframe width="350" height="196.875" src="https://www.youtube.com/embed/0-Q1_yPG_j8" title="Kemas Putu Smansix Angkatan 14 | After Movie" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="info">
                                <div class="cats pt-4">
                                    <p>
                                        Video Dokumenter
                                    </p>
                                </div>
                                <h5 class="cats pb-4">
                                    <a href="#">Kemas Putu SMA 6 kotser</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Portofolio -->
            <!-- faq-area -->
            <section class="faq-area pt-145 pb-150">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-9">
                            <div class="section-title text-center mb-80">
                                <span>knowledge base</span>
                                <h2>Pertanyaan Yang Sering Ditanyakan</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="faq-wrapper-padding">
                                <div class="faq-wrapper">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        Apa saja yang dapat dikerjakan One Dream Creative Indonesia?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Mulai dari konsultasi, perencanaan hingga eksekusi!, kami dapat mengerjakan hampir semua visualisasi, mulai dari video, foto, sampai dengan desain grafis untuk brand Anda.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a href="#" class="btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Kapan saya harus menggunakan visual yang bagus?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Menurut survei 65% dari masyarakat merupakan makhluk visual, 85% dari masyarakat lebih yakin dengan produk karena visual yang baik, dan Postingan yang dilengkapi dengan visual 180% lebih banyak engagement!</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Berapa yang perlu saya keluarkan untuk mendapatkan visual yang bagus?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>
                                                        Kami tidak mematok harga, silakan Anda berkonsultasi dengan kami secara gratis, dan kami akan memberikan penawaran terbaik sesuai usaha Anda.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                                        aria-expanded="false" aria-controls="collapseFour">
                                                        Bagaimana visual digunakan dalam pemasaran dan periklanan?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Visual memainkan peran kunci dalam pemasaran dan periklanan. Dalam kampanye pemasaran, visual digunakan untuk menarik perhatian, menciptakan kesan yang positif, dan membangun kesan merek yang kuat. Visual juga membantu menyampaikan manfaat produk atau layanan dengan cara yang menarik dan mudah dimengerti. Iklan televisi, spanduk, poster, brosur, dan media pemasaran lainnya mengandalkan visual yang kuat untuk mempengaruhi keputusan konsumen.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq-area-end -->
        </main>
@endSection