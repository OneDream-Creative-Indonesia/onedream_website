@extends('layouts.app')
@section('page')
<main>
    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="img/bg/breadcrumb-kontak.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2>Kontak Kami</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Kontak Kami</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <!-- contact-area -->
    <section class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="contact-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-box text-center mb-30">
                            <div class="contact-box-icon">
                                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDY4Mi42NjcgNjgyLjY2NyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+PGRlZnM+PGNsaXBQYXRoIGlkPSJhIiBjbGlwUGF0aFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTTAgNTEyaDUxMlYwSDBaIiBmaWxsPSIjMGQxMTNhIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PC9jbGlwUGF0aD48L2RlZnM+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjMzMzMzIDAgMCAtMS4zMzMzMyAwIDY4Mi42NjcpIj48cGF0aCBkPSJNMCAwYzY3LjMxMy0zMC4xOTUgMTE0LjM2OS05OS4yNzYgMTE0LjM2OS0xNzkuNjcgMC0zMC4wMjEtNi41NjItNTguNDU5LTE4LjI4Ny04My44ODgtOS41MDMtMjAuNjEtMjcuNjg5LTQ3LjI0My01MS4wODItNzQuMTU1IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzMyIDQ2NS43MTMpIiBmaWxsPSJub25lIiBzdHJva2U9IiMwZDExM2EiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTAgMGMtNDQuNzg0LTQ3LjU2NS05OS05Ni41LTk5LTk2LjVTLTI0MC41NDQgMzEuOTI3LTI3MS4wODIgOTguMTU1Yy0xMS43MjUgMjUuNDMxLTE4LjI4NyA1My44NjgtMTguMjg3IDgzLjg4OCAwIDEwOC4xOTcgODUuMjMxIDE5NS45MDQgMTkwLjM2OSAxOTUuOTA0IDcuNzg1IDAgMTUuNDYtLjQ4IDIzLTEuNDE1IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzU1IDEwNCkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzBkMTEzYSIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBkPSJNMCAwYTEzMS43NDQgMTMxLjc0NCAwIDAgMCA1NC44NzggMTQuMjg1IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTk2IDQwOS4yMTgpIiBmaWxsPSJub25lIiBzdHJva2U9IiMwZDExM2EiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTAgMGMyMC4yMzctMjQuMzAzIDMyLjQ1NS01NS44NjcgMzIuNDU1LTkwLjM2IDAtNzYuODEzLTYwLjU4OC0xMzkuMDc4LTEzNS4zMzEtMTM5LjA3OC03NC43NDQgMC0xMzUuMzMyIDYyLjI2NS0xMzUuMzMyIDEzOS4wNzggMCA0MS43OTIgMTcuOTM3IDc5LjI3NyA0Ni4zMzIgMTA0Ljc3IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzU4Ljg3NyAzNzQuODg2KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMGQxMTNhIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDBoMjkuNDU4IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjkxLjI4NSAzOTQpIiBmaWxsPSJub25lIiBzdHJva2U9IiMwZDExM2EiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTAgMGgyOS40NTgiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyOTEuMjg1IDMzNS42NjcpIiBmaWxsPSJub25lIiBzdHJva2U9IiMwZDExM2EiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTAgMGgyOS40NTgiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyOTEuMjg1IDI3Ny4zMzMpIiBmaWxsPSJub25lIiBzdHJva2U9IiMwZDExM2EiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTAgMGgyOS40NTgiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyOTEuMjg1IDIxOSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzBkMTEzYSIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBkPSJNMCAwdjEwMy44MjdoOTkuNzE5Vi01MS4yNjgiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNTUuNDA0IDE5Ni43MTUpIiBmaWxsPSJub25lIiBzdHJva2U9IiMwZDExM2EiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTMzMi4wNTggNDQ5LjIzN2gtNTIuMDkzVjUwNC41aDUyLjA5M3oiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiBmaWxsPSJub25lIiBzdHJva2U9IiMwZDExM2EiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTAgMHYzMDMuNzloMTAxLjE2OFY0OS45ODkiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNTUuNDI3IDE0NS40NDcpIiBmaWxsPSJub25lIiBzdHJva2U9IiMwZDExM2EiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggZD0iTTAgMHYtMzguNDQ5IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTg5LjM5OSAzNDAuMjc3KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMGQxMTNhIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDB2LTcwLjQ5NCIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIyMC4xNDEgMzcyLjMyMikiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzBkMTEzYSIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBkPSJNMCAwdi0xNS4zNzkiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxODguMjcgMjYyLjM3OSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzBkMTEzYSIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCBkPSJNMCAwdi0xNS4zOCIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE4OC4yNyAyMDguMjQ4KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMGQxMTNhIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDB2LTE1LjM3OSIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIyMS4yNyAyNjIuMzc5KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMGQxMTNhIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDB2LTE1LjM4IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjIxLjI3IDIwOC4yNDgpIiBmaWxsPSJub25lIiBzdHJva2U9IiMwZDExM2EiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvZz48L3N2Zz4=">
                            </div>
                            <div class="contact-content">
                                <h5>Lokasi Kantor</h5>
                                <span>Taman Lopang Indah Blok F43 No.10 Kota Serang-Banten</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" >
                        <div class="single-contact-box text-center mb-30">
                            <div class="contact-box-icon">
                                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ3My44MDYgNDczLjgwNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZD0iTTM3NC40NTYgMjkzLjUwNmMtOS43LTEwLjEtMjEuNC0xNS41LTMzLjgtMTUuNS0xMi4zIDAtMjQuMSA1LjMtMzQuMiAxNS40bC0zMS42IDMxLjVjLTIuNi0xLjQtNS4yLTIuNy03LjctNC0zLjYtMS44LTctMy41LTkuOS01LjMtMjkuNi0xOC44LTU2LjUtNDMuMy04Mi4zLTc1LTEyLjUtMTUuOC0yMC45LTI5LjEtMjctNDIuNiA4LjItNy41IDE1LjgtMTUuMyAyMy4yLTIyLjggMi44LTIuOCA1LjYtNS43IDguNC04LjUgMjEtMjEgMjEtNDguMiAwLTY5LjJsLTI3LjMtMjcuM2MtMy4xLTMuMS02LjMtNi4zLTkuMy05LjUtNi02LjItMTIuMy0xMi42LTE4LjgtMTguNi05LjctOS42LTIxLjMtMTQuNy0zMy41LTE0LjdzLTI0IDUuMS0zNCAxNC43bC0uMi4yLTM0IDM0LjNjLTEyLjggMTIuOC0yMC4xIDI4LjQtMjEuNyA0Ni41LTIuNCAyOS4yIDYuMiA1Ni40IDEyLjggNzQuMiAxNi4yIDQzLjcgNDAuNCA4NC4yIDc2LjUgMTI3LjYgNDMuOCA1Mi4zIDk2LjUgOTMuNiAxNTYuNyAxMjIuNyAyMyAxMC45IDUzLjcgMjMuOCA4OCAyNiAyLjEuMSA0LjMuMiA2LjMuMiAyMy4xIDAgNDIuNS04LjMgNTcuNy0yNC44LjEtLjIuMy0uMy40LS41IDUuMi02LjMgMTEuMi0xMiAxNy41LTE4LjEgNC4zLTQuMSA4LjctOC40IDEzLTEyLjkgOS45LTEwLjMgMTUuMS0yMi4zIDE1LjEtMzQuNiAwLTEyLjQtNS4zLTI0LjMtMTUuNC0zNC4zbC01NC45LTU1LjF6bTM1LjggMTA1LjNjLS4xIDAtLjEuMSAwIDAtMy45IDQuMi03LjkgOC0xMi4yIDEyLjItNi41IDYuMi0xMy4xIDEyLjctMTkuMyAyMC0xMC4xIDEwLjgtMjIgMTUuOS0zNy42IDE1LjktMS41IDAtMy4xIDAtNC42LS4xLTI5LjctMS45LTU3LjMtMTMuNS03OC0yMy40LTU2LjYtMjcuNC0xMDYuMy02Ni4zLTE0Ny42LTExNS42LTM0LjEtNDEuMS01Ni45LTc5LjEtNzItMTE5LjktOS4zLTI0LjktMTIuNy00NC4zLTExLjItNjIuNiAxLTExLjcgNS41LTIxLjQgMTMuOC0yOS43bDM0LjEtMzQuMWM0LjktNC42IDEwLjEtNy4xIDE1LjItNy4xIDYuMyAwIDExLjQgMy44IDE0LjYgN2wuMy4zYzYuMSA1LjcgMTEuOSAxMS42IDE4IDE3LjkgMy4xIDMuMiA2LjMgNi40IDkuNSA5LjdsMjcuMyAyNy4zYzEwLjYgMTAuNiAxMC42IDIwLjQgMCAzMS0yLjkgMi45LTUuNyA1LjgtOC42IDguNi04LjQgOC42LTE2LjQgMTYuNi0yNS4xIDI0LjQtLjIuMi0uNC4zLS41LjUtOC42IDguNi03IDE3LTUuMiAyMi43bC4zLjljNy4xIDE3LjIgMTcuMSAzMy40IDMyLjMgNTIuN2wuMS4xYzI3LjYgMzQgNTYuNyA2MC41IDg4LjggODAuOCA0LjEgMi42IDguMyA0LjcgMTIuMyA2LjcgMy42IDEuOCA3IDMuNSA5LjkgNS4zLjQuMi44LjUgMS4yLjcgMy40IDEuNyA2LjYgMi41IDkuOSAyLjUgOC4zIDAgMTMuNS01LjIgMTUuMi02LjlsMzQuMi0zNC4yYzMuNC0zLjQgOC44LTcuNSAxNS4xLTcuNSA2LjIgMCAxMS4zIDMuOSAxNC40IDcuM2wuMi4yIDU1LjEgNTUuMWMxMC4zIDEwLjIgMTAuMyAyMC43LjEgMzEuM3pNMjU2LjA1NiAxMTIuNzA2YzI2LjIgNC40IDUwIDE2LjggNjkgMzUuOHMzMS4zIDQyLjggMzUuOCA2OWMxLjEgNi42IDYuOCAxMS4yIDEzLjMgMTEuMi44IDAgMS41LS4xIDIuMy0uMiA3LjQtMS4yIDEyLjMtOC4yIDExLjEtMTUuNi01LjQtMzEuNy0yMC40LTYwLjYtNDMuMy04My41cy01MS44LTM3LjktODMuNS00My4zYy03LjQtMS4yLTE0LjMgMy43LTE1LjYgMTFzMy41IDE0LjQgMTAuOSAxNS42ek00NzMuMjU2IDIwOS4wMDZjLTguOS01Mi4yLTMzLjUtOTkuNy03MS4zLTEzNy41cy04NS4zLTYyLjQtMTM3LjUtNzEuM2MtNy4zLTEuMy0xNC4yIDMuNy0xNS41IDExLTEuMiA3LjQgMy43IDE0LjMgMTEuMSAxNS42IDQ2LjYgNy45IDg5LjEgMzAgMTIyLjkgNjMuNyAzMy44IDMzLjggNTUuOCA3Ni4zIDYzLjcgMTIyLjkgMS4xIDYuNiA2LjggMTEuMiAxMy4zIDExLjIuOCAwIDEuNS0uMSAyLjMtLjIgNy4zLTEuMSAxMi4zLTguMSAxMS0xNS40eiIgZmlsbD0iIzBkMTEzYSIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjwvZz48L3N2Zz4=">
                            </div>
                            <div class="contact-content">
                                <h5>Telephone</h5>
                                <a target="_blank" href="https://wa.me/6281213369843">+628 12 1336 98433</a></li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-box text-center mb-30">
                            <div class="contact-box-icon">
                                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIGQ9Ik00ODUuNzQzIDg1LjMzM0gyNi4yNTdDMTEuODE1IDg1LjMzMyAwIDk3LjE0OCAwIDExMS41ODlWNDAwLjQxYzAgMTQuNDQgMTEuODE1IDI2LjI1NyAyNi4yNTcgMjYuMjU3aDQ1OS40ODdjMTQuNDQgMCAyNi4yNTctMTEuODE1IDI2LjI1Ny0yNi4yNTdWMTExLjU4OWMtLjAwMS0xNC40NDEtMTEuODE2LTI2LjI1Ni0yNi4yNTgtMjYuMjU2em0tOS44NTMgMTkuNjkxTDI3MS4xMDQgMjU4LjYyNmMtMy42ODIgMi44MDItOS4zMzQgNC41NTUtMTUuMTA1IDQuNTI5LTUuNzcuMDI2LTExLjQyMS0xLjcyNy0xNS4xMDQtNC41MjlMMzYuMTA5IDEwNS4wMjRINDc1Ljg5ek0zNjYuNSAyNjguNzYxbDExMS41OSAxMzcuODQ3Yy4xMTIuMTM4LjI0OS4yNDMuMzY4LjM2OEgzMy41NDJjLjExOC0uMTMxLjI1Ni0uMjMuMzY4LS4zNjhMMTQ1LjUgMjY4Ljc2MWE5Ljg0NiA5Ljg0NiAwIDAgMC0xLjQ2NC0xMy44NTFjLTQuMjI3LTMuNDE5LTEwLjQyNC0yLjc3MS0xMy44NDQgMS40NTdsLTExMC41IDEzNi41MDFWMTE3LjMzMmwyMDkuMzk0IDE1Ny4wNDZjNy44NzEgNS44NjIgMTcuNDQ3IDguNDQyIDI2LjkxMiA4LjQ2OCA5LjQ1Mi0uMDIgMTkuMDM2LTIuNiAyNi45MTItOC40NjhsMjA5LjM5NC0xNTcuMDQ2djI3NS41MzRMMzgxLjgwNyAyNTYuMzY3Yy0zLjQyLTQuMjI3LTkuNjIzLTQuODc3LTEzLjg0NC0xLjQ1Ny00LjIzNCAzLjQxOS00Ljg4NCA5LjYyNC0xLjQ2MyAxMy44NTF6IiBmaWxsPSIjMGQxMTNhIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PC9nPjwvc3ZnPg==">
                            </div>
                            <div class="contact-content">
                                <h5>Email</h5>
                                <a target="_blank" href="mailto:kontak.onedream@gmail.com">kontak.onedream@gmail.com</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title text-center mb-60">
                        <span>Butuh bantuan?</span>
                        <h2>Silakan Ceritakan kepada Kami</h2>
                    </div>
                    <div class="contact-form text-center">
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                        </div>
                    @endif
                        <form action="{{route('contact.send')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="nama" placeholder="Nama*">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email*">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" placeholder="Subjek*">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                            </div>
                            <textarea name="message" id="message" name="message" placeholder="Apa yang ingin kamu ceritakan"></textarea>
                            <button class="btn" type="submit">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
    <!-- contact-map -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15868.851448150477!2d106.1528041!3d-6.1020111!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418bdaa188ce11%3A0xce834a34d40fd12c!2sOne%20Dream%20Creative%20Indonesia!5e0!3m2!1sid!2sid!4v1684649588983!5m2!1sid!2sid" width="1920" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
    </div>

    <!-- contact-map-end -->
</main>

@endSection()