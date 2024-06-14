
@extends('layouts.app')
@section('page')
<main>
            <!-- breadcrumb-area -->
            <div class="breadcrumb-area breadcrumb-bg d-flex align-items-center" data-background="img/bg/breadcrumb-layanan.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap pt-100 text-center">
                                <h2>Layanan Kami</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
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
                                <img src="img/images/inner_customer_simg.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-80">
                            <div class="section-title mb-30">
                                <h2>Solusi Terpadu untuk Keberhasilan Anda</h2>
                            </div>
                            <div class="software-content inner-c-services-content">
                                <p>Kami menawarkan solusi terpadu yang dirancang khusus untuk membantu Anda meraih kesuksesan. Dari pengembangan produk hingga strategi pemasaran, tim kami yang berpengalaman akan bekerja sama dengan Anda untuk mencapai tujuan Anda.</p>
                                <a href="contact.html" class="btn">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- customer-service-end -->
            <!-- features-area -->
            <section class="features-area inner-features-area padding-md pt-145 pb-105">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-7 col-md-9">
                            <div class="section-title text-center margin-md mb-35">
                                <span>Layanan Kami</span>
                                <h2>Membangun Visual yang sesuai kebutuhan Anda.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="awesome-services-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="single-features single-awesome-services">
                                    <div class="features-icon mb-25">
                                        <i class="flaticon-settings"></i>
                                    </div>
                                    <div class="features-content">
                                        <h3>Videografi</h3>
                                        <p>Solusi publikasi dalam bentuk cinematic secara audio visual untuk memberikan pemahaman informasi yang lebih baik dalam waktu singkat.</p>
                                        <a href="#">Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="single-features single-awesome-services">
                                    <div class="features-icon mb-25">
                                        <i class="flaticon-upload"></i>
                                    </div>
                                    <div class="features-content">
                                        <h3>Desain Grafis</h3>
                                        <p>Mengolah seni, data, dan bisnis Anda menyatu untuk menghadirkan pengalaman bermakna yang memperjuangkan merek Anda dan mendorong audiens untuk bertindak.</p>
                                        <a href="#">Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="single-features single-awesome-services">
                                    <div class="features-icon mb-25">
                                        <i class="flaticon-chat"></i>
                                    </div>
                                    <div class="features-content">
                                        <h3>Fotografi</h3>
                                        <p>Mendukung Anda mengabadikan sebuah momen menjadi visual yang penuh cerita dan makna.</p>
                                        <a href="#">Lebih Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->
            <!-- counter-area -->
            <section class="counter-area inner-counter-bg pt-150 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-50">
                                <div class="counter-icon">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxnIGZpbGwtcnVsZT0iZXZlbm9kZCI+PHBhdGggZD0iTTQ0MC41OSAyMDYuNjc2SDk5LjQxOGwzMjcuNy05NC45M2ExMC4wMTggMTAuMDE4IDAgMCAwIDUuOTc2LTQuNzgxIDkuOTg5IDkuOTg5IDAgMCAwIC44NDctNy42MDZMNDE2Ljc5MyA0MC4xNkM0MDkuOTQxIDE2LjUxNiAzODcuOTI2IDAgMzYzLjI1MyAwYy01LjE5OCAwLTEwLjM3OC43MzgtMTUuNDAxIDIuMTkxTDQwLjE3NiA5MS4zMjFjLTE0LjIzIDQuMTItMjYuMDI0IDEzLjU4MS0zMy4yMTUgMjYuNjMyLTcuMTg4IDEzLjA1LTguODc1IDI4LjA3OC00Ljc1NCA0Mi4zMDVsMTYuNzU0IDU3LjgzNnYyMzguMjU0QzE4Ljk2IDQ4Ny4wMzUgNDMuOTI2IDUxMiA3NC42MDkgNTEyaDEyMC4xNjRjNS41MjQgMCAxMC00LjQ3NyAxMC0xMHMtNC40NzYtMTAtMTAtMTBINzQuNjEzYy0xOS42NiAwLTM1LjY1Mi0xNS45OTItMzUuNjUyLTM1LjY1MlYzMjAuMjYySDQzMC41ODl2MTM2LjA4NmMwIDE5LjY2LTE1Ljk5MSAzNS42NTItMzUuNjUxIDM1LjY1MkgyNzQuNzczYy01LjUyIDAtMTAgNC40NzctMTAgMTBzNC40OCAxMCAxMCAxMGgxMjAuMTY1YzMwLjY4NyAwIDU1LjY1Mi0yNC45NjUgNTUuNjUyLTU1LjY1MlYyMTYuNjc2YzAtNS41MjQtNC40NzctMTAtMTAtMTB6bS0xNzYuMzMyIDkzLjU4NiA0Mi40ODgtNzMuNTg2aDU1LjI2MmwtNDIuNDg1IDczLjU4NnptLTc4LjM2IDAgNDIuNDg5LTczLjU4Nmg1NS4yNjFsLTQyLjQ4NCA3My41ODZ6bS03OC4zNTUgMCA0Mi40ODQtNzMuNTg2aDU1LjI2NmwtNDIuNDg4IDczLjU4NnptMzcuMTgtMTI5LjQ1Ny03MS4xNDktNjguMzM2IDUzLjMwOS0xNS40NDJhOS45MiA5LjkyIDAgMCAwIDEuMzEyIDEuNTQzbDcxLjE0OSA2OC4zMzYtNTMuMzA5IDE1LjQ0MmE5Ljk1MSA5Ljk1MSAwIDAgMC0xLjMxMi0xLjU0M3ptMTM0LTEyNS44NEwzNDkuODcgMTEzLjNsLTUzLjMwOCAxNS40NDFhOS43NDIgOS43NDIgMCAwIDAtMS4zMTMtMS41NDNsLTcxLjE0OC02OC4zMzYgNTMuMzA4LTE1LjQ0MWE5LjkyIDkuOTIgMCAwIDAgMS4zMTMgMS41NDN6TTIwMy40NTcgNjYuNzdsNzEuMTQ4IDY4LjMzMi01My4zMDggMTUuNDQ1YTkuNzQyIDkuNzQyIDAgMCAwLTEuMzEzLTEuNTQzbC03MS4xNDgtNjguMzM2IDUzLjMwOS0xNS40NDFjLjM3OC41NDMuODE2IDEuMDYyIDEuMzEyIDEuNTQzem0xNDkuOTYxLTQ1LjM2OGMzLjIxLS45MyA2LjUyLTEuNDAyIDkuODM2LTEuNDAyIDE1LjgyNCAwIDI5LjkzNyAxMC41NzggMzQuMzI4IDI1LjcyN2wxNC4zNjcgNDkuNTktNDAuMTIgMTEuNjJhMTAuMTY1IDEwLjE2NSAwIDAgMC0xLjMxNy0xLjU0MmwtNzEuMTQ1LTY4LjMzM3pNMjQuNDggMTI3LjYwMmM0LjYxLTguMzcyIDEyLjE2LTE0LjQzNCAyMS4yNjItMTcuMDdsNS44NzUtMS43MDRhMTAuMTcgMTAuMTcgMCAwIDAgMS4zMTMgMS41NDNsNzEuMTQ4IDY4LjMzNi04OC4yOTMgMjUuNTc4LTE0LjM2Ny00OS41OWMtMi42MzctOS4wOTctMS41NDctMTguNzE4IDMuMDYyLTI3LjA5M3ptMTQuNDggOTkuMDc0aDg3Ljk3NGwtNDIuNDg1IDczLjU4NkgzOC45NjF6bTMwMy42NTcgNzMuNTg2IDQyLjQ4NS03My41ODZoNDUuNDg4djczLjU4NnptMCAwIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PHBhdGggZD0iTTMwMy45MjIgNDA1LjExM2E5Ljk5NyA5Ljk5NyAwIDAgMC01LTguNjZsLTg3Ljg1Ni01MC43MjNhMTAuMDA2IDEwLjAwNiAwIDAgMC0xMCAwIDkuOTk3IDkuOTk3IDAgMCAwLTUgOC42NnYxMDEuNDQ2YTkuOTk1IDkuOTk1IDAgMCAwIDUgOC42NTYgOS45ODMgOS45ODMgMCAwIDAgMTAgMGw4Ny44NTYtNTAuNzE5YTkuOTk3IDkuOTk3IDAgMCAwIDUtOC42NnptLTg3Ljg1NiAzMy40MDNWMzcxLjcxbDU3Ljg1NiAzMy40MDJ6TTIzNC43NzMgNDkyYy01LjUwNyAwLTEwIDQuNDkyLTEwIDEwczQuNDkzIDEwIDEwIDEwYzUuNTEyIDAgMTAtNC40OTIgMTAtMTBzLTQuNDg4LTEwLTEwLTEwem0wIDAiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" style="width: 48px;"/>
                                </div>
                                
                                <div class="counter-content">
                                    <h2> ± <span class="count">62 </span></h2>
                                    <span>Karya Video</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-50">
                                <div class="counter-icon">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIGQ9Ik0yMzggMzcxLjQ5Yy00LjE0MyAwLTcuNSAzLjM1OC03LjUgNy41czMuMzU3IDcuNSA3LjUgNy41aDM2YzQuMTQzIDAgNy41LTMuMzU4IDcuNS03LjVzLTMuMzU3LTcuNS03LjUtNy41ek05MCAyNTUuMDM0aDQ5LjU3NmMzLjAyOCA3Ljg4MSAxMC42NTcgMTMuNSAxOS41OTEgMTMuNXMxNi41NjMtNS42MTkgMTkuNTkxLTEzLjVoOS45MDljNC4xNDMgMCA3LjUtMy4zNTggNy41LTcuNXMtMy4zNTctNy41LTcuNS03LjVoLTkuOTA5Yy0zLjAyOC03Ljg4MS0xMC42NTctMTMuNS0xOS41OTEtMTMuNXMtMTYuNTYzIDUuNjE5LTE5LjU5MSAxMy41SDkwYy00LjE0MyAwLTcuNSAzLjM1OC03LjUgNy41czMuMzU3IDcuNSA3LjUgNy41em02OS4xNjctMTMuNWMzLjMwOSAwIDYgMi42OTEgNiA2cy0yLjY5MSA2LTYgNi02LTIuNjkxLTYtNiAyLjY5MS02IDYtNnpNOTAgMjEyLjAzNGg5LjU3NmMzLjAyOCA3Ljg4MSAxMC42NTcgMTMuNSAxOS41OTEgMTMuNXMxNi41NjMtNS42MTkgMTkuNTkxLTEzLjVoNDkuOTA5YzQuMTQzIDAgNy41LTMuMzU4IDcuNS03LjVzLTMuMzU3LTcuNS03LjUtNy41aC00OS45MDljLTMuMDI4LTcuODgxLTEwLjY1Ny0xMy41LTE5LjU5MS0xMy41cy0xNi41NjMgNS42MTktMTkuNTkxIDEzLjVIOTBjLTQuMTQzIDAtNy41IDMuMzU4LTcuNSA3LjVzMy4zNTcgNy41IDcuNSA3LjV6bTI5LjE2Ny0xMy41YzMuMzA5IDAgNiAyLjY5MSA2IDZzLTIuNjkxIDYtNiA2LTYtMi42OTEtNi02IDIuNjkxLTYgNi02eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9IiI+PC9wYXRoPjxjaXJjbGUgY3g9IjE5MC4xNjciIGN5PSIxMzUuNTM0IiByPSI3LjUiIGZpbGw9IiNmZmZmZmYiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIGNsYXNzPSIiPjwvY2lyY2xlPjxjaXJjbGUgY3g9IjE2OS41IiBjeT0iMTM1LjUzNCIgcj0iNy41IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L2NpcmNsZT48Y2lyY2xlIGN4PSIxNDguODMzIiBjeT0iMTM1LjUzNCIgcj0iNy41IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L2NpcmNsZT48cGF0aCBkPSJNNDg5LjUgNTAuNDgzaC0yLjgwOWwyLjA5NS0yLjA5NWM2LjI3NS02LjI3NSA2LjI3NS0xNi40ODYgMC0yMi43NjFMNDcyLjM2OCA5LjIwOWMtNi4yNzUtNi4yNzQtMTYuNDg1LTYuMjc0LTIyLjc2MSAwbC00MS4yNzEgNDEuMjczSDIyLjVjLTEyLjQwNiAwLTIyLjUgMTAuMDkzLTIyLjUgMjIuNXYzMTEuNDY0YzAgMTUuMTY0IDEyLjMzNiAyNy41IDI3LjUgMjcuNWgxNzcuNjQ1djUzLjA1NUgxNjljLTkuNjQ5IDAtMTcuNSA3Ljg1MS0xNy41IDE3LjV2Ny40OTRjMCA5LjY0OSA3Ljg1MSAxNy41IDE3LjUgMTcuNWgxNzRjOS42NDkgMCAxNy41LTcuODUxIDE3LjUtMTcuNXYtNy40OTRjMC05LjY0OS03Ljg1MS0xNy41LTE3LjUtMTcuNWgtMzYuMTQ1di01My4wNTVIMzg3YzQuMTQzIDAgNy41LTMuMzU4IDcuNS03LjVzLTMuMzU3LTcuNS03LjUtNy41SDI3LjVjLTYuODkzIDAtMTIuNS01LjYwNy0xMi41LTEyLjV2LTIyLjJoNDgydjIyLjJjMCA2Ljg5My01LjYwNyAxMi41LTEyLjUgMTIuNUg0MjJjLTQuMTQzIDAtNy41IDMuMzU4LTcuNSA3LjVzMy4zNTcgNy41IDcuNSA3LjVoNjIuNWMxNS4xNjQgMCAyNy41LTEyLjMzNiAyNy41LTI3LjVWNzIuOTgzYzAtMTIuNDA2LTEwLjA5NC0yMi41LTIyLjUtMjIuNXpNMzQzIDQ4MC4wMDJjMS4zNzkgMCAyLjUgMS4xMjIgMi41IDIuNXY3LjQ5NGMwIDEuMzc4LTEuMTIxIDIuNS0yLjUgMi41SDE2OWEyLjUwMyAyLjUwMyAwIDAgMS0yLjUtMi41di03LjQ5NGMwLTEuMzc4IDEuMTIxLTIuNSAyLjUtMi41em0tMTIyLjg1NS02OC4wNTRoNzEuNzExdjUzLjA1NWgtNzEuNzExek00NjAuMjE0IDE5LjgxN2ExLjA5NiAxLjA5NiAwIDAgMSAxLjU0OCAwbDE2LjQxNyAxNi40MTdhMS4wOTUgMS4wOTUgMCAwIDEgMCAxLjU0OGwtMTUuNjY1IDE1LjY2NS0xNy45NjUtMTcuOTY1em0tMjYuMjcyIDI2LjI3MiAxNy45NjQgMTcuOTY1LTUuMjMxIDUuMjMxLTE3Ljk2NC0xNy45NjV6bS0xNS44MzggMTUuODM4IDE3Ljk2NSAxNy45NjUtODguNzUxIDg4Ljc1MS0xNy45NjUtMTcuOTY1ek00MDcgMTMwLjQ5NmMxMC4yMDEgMCAxOC41IDguMjk5IDE4LjUgMTguNXMtOC4yOTkgMTguNS0xOC41IDE4LjUtMTguNS04LjI5OS0xOC41LTE4LjVjMC0uMTE5LjAxNi0uMjM0LjAxOC0uMzUzbDE4LjEzMi0xOC4xMjljLjExNy0uMDAyLjIzMi0uMDE4LjM1LS4wMTh6bS03Mi43MDYgNDYuMzM3LTIyLjE5NyA5LjA2NiA5LjA2Ni0yMi4xOTd6TTQ5NyAzNDcuMjQ4SDE1VjcyLjk4M2MwLTQuMTM1IDMuMzY0LTcuNSA3LjUtNy41aDM3MC44MzdsLTExLjQzNiAxMS40MzZIMTI3Yy00LjE0MyAwLTcuNSAzLjM1OC03LjUgNy41czMuMzU3IDcuNSA3LjUgNy41aDIzOS45MDJsLTUyLjkwMSA1Mi45MDRhMTYgMTYgMCAwIDAtMy40NjkgNS4yMzhsLTE2Ljc1MyA0MS4wMTZhMTAuMDU4IDEwLjA1OCAwIDAgMCAyLjIwNiAxMC45MzYgMTAuMDU0IDEwLjA1NCAwIDAgMCAxMC45MzYgMi4yMDRsNDEuMDE1LTE2Ljc1MmExNiAxNiAwIDAgMCA1LjEwNi0zLjM0OWwyMi44MTYtMjIuODEzYzQuOTE1IDEyLjM5OSAxNy4wMTUgMjEuMTk0IDMxLjE0MyAyMS4xOTQgMTguNDcyIDAgMzMuNS0xNS4wMjggMzMuNS0zMy41IDAtMTQuMTI2LTguNzkzLTI2LjIyNS0yMS4xOS0zMS4xNDFMNDQ1LjI1IDkxLjkyaDI1LjMxNHYyMjguODkzaC0zLjk3NWwtMjcuMTgtNDcuMDc3YTcuNSA3LjUgMCAwIDAtMTIuOTkgNy41bDIyLjg1IDM5LjU3N2gtMTA0Ljc3bC0xMS4yMzctMTkuNDYzIDUyLjM4NS05MC43MzMgMjMuMjcxIDQwLjMwOGE3LjUgNy41IDAgMSAwIDEyLjk5LTcuNWwtMjQuODI3LTQzLjAwMWMtMi4zODctNC4xMzQtNi42NjEtNi42MDItMTEuNDM1LTYuNjAycy05LjA0OSAyLjQ2OC0xMS40MzYgNi42MDJsLTQ5LjYxIDg1LjkyN0wyNjAuOTQ2IDE3Ni4xYy0yLjM4Ny00LjEzNC02LjY2MS02LjYwMi0xMS40MzYtNi42MDItNC43NzMgMC05LjA0OCAyLjQ2OC0xMS40MzUgNi42MDJsLTE2LjkxMSAyOS4yOTF2LTgwLjM5M2MwLTkuNjQ5LTcuODUxLTE3LjUtMTcuNS0xNy41SDc1Yy05LjY0OSAwLTE3LjUgNy44NTEtMTcuNSAxNy41djE2NGMwIDYuODkzIDUuNjA3IDEyLjUgMTIuNSAxMi41aDk1LjY3OWwtMTEuMTUyIDE5LjMxNkg0MS40MzdWOTEuOTE5SDkyYzQuMTQzIDAgNy41LTMuMzU4IDcuNS03LjVzLTMuMzU3LTcuNS03LjUtNy41SDM4LjkzN2MtNi44OTMgMC0xMi41IDUuNjA3LTEyLjUgMTIuNXYyMzMuODkzYzAgNi44OTMgNS42MDcgMTIuNSAxMi41IDEyLjVoNDM0LjEyN2M2Ljg5MyAwIDEyLjUtNS42MDcgMTIuNS0xMi41Vjg5LjQxOWMwLTYuODkzLTUuNjA3LTEyLjUtMTIuNS0xMi41aC0xMi44MTJsMTEuNDM4LTExLjQzNmgxNy44MWM0LjEzNiAwIDcuNSAzLjM2NSA3LjUgNy41ek0yMDYuMTY3IDE2Ni41MzR2MTE5Ljk2Mkg3Mi41VjE2Ni41MzR6bS0xMzMuNjY3LTE1di0yNi41MzhjMC0xLjM3OCAxLjEyMS0yLjUgMi41LTIuNWgxMjguNjY3YzEuMzc5IDAgMi41IDEuMTIyIDIuNSAyLjV2MjYuNTM4ek0xODMgMzAxLjQ5NmgyNS42NjdjNi44OTMgMCAxMi41LTUuNjA3IDEyLjUtMTIuNXYtMTUuODg3YzEuODc2LjkgMy45NjUgMS4zODcgNi4xNTMgMS4zODcgNS4xMiAwIDkuNzA0LTIuNjQ4IDEyLjI2My03LjA4MWwxMi43NjQtMjIuMTA3Yy4zODYtLjY2OC45NzYtLjgwOSAxLjQwMS0uODA5LjQyNyAwIDEuMDE3LjE0MSAxLjQwMi44MDlsNy44NjkgMTMuNjI5YzIuNTYgNC40MzUgNy4xNDUgNy4wODIgMTIuMjY2IDcuMDgyIDUuMTIgMCA5LjcwNS0yLjY0NyAxMi4yNjQtNy4wODFsMS45NTQtMy4zODQgMzcuNjc2IDY1LjI1N0gxNzEuODQ4em0zOC4xNjctNTMuNDkzdi0xMi42MTRsMjguMzQ3LTQ5LjA5NyAzMS4zMjggNTQuMjYyLTUuNTU4IDkuNjI2LTcuMTQ0LTEyLjM3M2MtMy4wMDQtNS4yMDMtOC4zODQtOC4zMDktMTQuMzkzLTguMzA5LTYuMDA4IDAtMTEuMzg4IDMuMTA2LTE0LjM5MiA4LjMwOWwtMTIuMDM4IDIwLjg1eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgY2xhc3M9IiI+PC9wYXRoPjwvZz48L3N2Zz4=" style="width: 48px;"/>
                                </div>
                                <div class="counter-content">
                                    <h2> ± <span class="count"> 992 </span></h2>
                                    <span>Karya Desain Grafis</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-50">
                                <div class="counter-icon">
                                   <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDY4Mi42NjcgNjgyLjY2NyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PGRlZnM+PGNsaXBQYXRoIGlkPSJhIiBjbGlwUGF0aFVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTTAgNTEyaDUxMlYwSDBaIiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PC9jbGlwUGF0aD48L2RlZnM+PHBhdGggZD0iTTAgMHY3NS43OSIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0ibWF0cml4KDEuMzMzMzMgMCAwIC0xLjMzMzMzIDQ3OS4wOCA0MDEuNDQpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjMzMzMzIDAgMCAtMS4zMzMzMyAwIDY4Mi42NjcpIj48cGF0aCBkPSJNMCAwaDE0Mi43NjZhOC4wNTkgOC4wNTkgMCAwIDEgOC4wNTkgOC4wNnYxMDcuMzE3YTguMDYgOC4wNiAwIDAgMS04LjA1OSA4LjA2aC0yNC4wNzNsLTE2LjQ4IDIwLjYxM2E2Ljk0OSA2Ljk0OSAwIDAgMS01LjQyNiAyLjYwOEg1NC4wMzhhNi45NSA2Ljk1IDAgMCAxLTUuNDI2LTIuNjA4bC0xNi40OC0yMC42MTNIMCIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcxLjc3NyAyMTAuOTE4KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDBjLTIxLjE0NiAwLTM4LjI4OS0xNy4xNDMtMzguMjg5LTM4LjI5Uy0yMS4xNDYtNzYuNTggMC03Ni41OGMyMS4xNDcgMCAzOC4yOSAxNy4xNDMgMzguMjkgMzguMjlTMjEuMTQ3IDAgMCAwWiIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE0Ny4xOSAzMTAuOTI2KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDB2MTkuMjkxYTcuNDI3IDcuNDI3IDAgMCAxLTcuNDI3IDcuNDI3aC0zNi43MmE3LjQyNiA3LjQyNiAwIDAgMS03LjQyNi03LjQyN1YtODkuMjkxYTcuNDI2IDcuNDI2IDAgMCAxIDcuNDI2LTcuNDI3aDM2LjcyQTcuNDI3IDcuNDI3IDAgMCAxIDAtODkuMjkxVi0zNSIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDc5LjgwOCAzMDcuNzMpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PHBhdGggZD0iTTAgMGgtNDUuNDg3YTIuNzg1IDIuNzg1IDAgMCAwLTIuNzg1IDIuNzg1djI3LjE2OEgyLjc4NVYyLjc4NUEyLjc4NSAyLjc4NSAwIDAgMCAwIDBaIiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTY5LjkzNCAxODAuOTY1KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDB2LTQzLjEzMyIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE0Ny4xOSAxODAuOTY1KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Im0wIDAtMTMuNDk4IDIzLjM4YTguMyA4LjMgMCAwIDEtNy4xODYgNC4xNDhoLTExNi4xNThhOC4yOTkgOC4yOTkgMCAwIDEtNy4xODYtNC4xNDhsLTU4LjA3OS0xMDAuNTk3YTguMjk1IDguMjk1IDAgMCAxIDAtOC4yOThsNTguMDc5LTEwMC41OTVhOC4yOTUgOC4yOTUgMCAwIDEgNy4xODYtNC4xNDloMTE2LjE1OGE4LjI5NyA4LjI5NyAwIDAgMSA3LjE4NiA0LjE0OUw0NC41ODEtODUuNTE1YTguMyA4LjMgMCAwIDEgMCA4LjI5OEwxOC40ODgtMzIuMDIyIiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDM4LjA3MyA0NzYuOTcyKSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Im0wIDAtNDcuMjI5LTgxLjc5IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzQ0LjMxIDM2OS42MikiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZmZmZiIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJtMCAwLTQ3LjIyMS04MS43OSIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQyMS41MyA1MDMuMzgpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PHBhdGggZD0ibTAgMC00Ny4yMjEgODEuNzkiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg0MjEuNTMgMjg3LjgzKSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Im0wIDAtNDcuMjI5IDgxLjgiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNDQuMzEgNDIxLjU4KSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDBoLTk0LjQ0OCIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMyOS4zMDkgMzk1LjYxKSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDBoLTk0LjQ0OCIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ4My43NiAzOTUuNjEpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PHBhdGggZD0iTTAgMGMtMTYuNTcgMC0zMC4wMDItMTMuNDMtMzAuMDAyLTMwUy0xNi41Ny02MC4wMDcgMC02MC4wMDcgMzAuMDAxLTQ2LjU3IDMwLjAwMS0zMCAxNi41NyAwIDAgMFoiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNTkuMzEgNDI1LjYxKSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmZmZmZmIiBzdHJva2Utd2lkdGg9IjE1IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLWRhc2hhcnJheT0ibm9uZSIgc3Ryb2tlLW9wYWNpdHk9IiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDB2LTExOS42NjdhNCA0IDAgMCAxIDQtNGgyOC44ODhhNCA0IDAgMCAxIDQgNFY3NS43NTFhNCA0IDAgMCAxLTQgNEg0YTQgNCAwIDAgMS00LTRWMzUiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNDAuODY2IDEzMS4xNjcpIiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmZmZmYiIHN0cm9rZS13aWR0aD0iMTUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2UtZGFzaGFycmF5PSJub25lIiBzdHJva2Utb3BhY2l0eT0iIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIj48L3BhdGg+PHBhdGggZD0ibTAgMC0yMy4xNi05NS45OSIgc3R5bGU9InN0cm9rZS13aWR0aDoxNTtzdHJva2UtbGluZWNhcDpyb3VuZDtzdHJva2UtbGluZWpvaW46cm91bmQ7c3Ryb2tlLW1pdGVybGltaXQ6MTA7c3Ryb2tlLWRhc2hhcnJheTpub25lO3N0cm9rZS1vcGFjaXR5OjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEyMy44IDEwMy40OSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZmZmZiIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJtMCAwLTIzLjE2IDk1Ljk5IiBzdHlsZT0ic3Ryb2tlLXdpZHRoOjE1O3N0cm9rZS1saW5lY2FwOnJvdW5kO3N0cm9rZS1saW5lam9pbjpyb3VuZDtzdHJva2UtbWl0ZXJsaW1pdDoxMDtzdHJva2UtZGFzaGFycmF5Om5vbmU7c3Ryb2tlLW9wYWNpdHk6MSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTkzLjc0IDcuNSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZmZmZiIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48cGF0aCBkPSJNMCAwaC03OS44NTlhOS41NDggOS41NDggMCAwIDAtOS41NDggOS41NDh2MTUuMjUxYTkuNTQ4IDkuNTQ4IDAgMCAwIDkuNTQ4IDkuNTQ4SDBjNS4yNzMgMCA5LjU0OS00LjI3NSA5LjU0OS05LjU0OFY5LjU0OEM5LjU0OSA0LjI3NCA1LjI3MyAwIDAgMFoiIHN0eWxlPSJzdHJva2Utd2lkdGg6MTU7c3Ryb2tlLWxpbmVjYXA6cm91bmQ7c3Ryb2tlLWxpbmVqb2luOnJvdW5kO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS1kYXNoYXJyYXk6bm9uZTtzdHJva2Utb3BhY2l0eToxIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxODcuMTIgMTAzLjQ4NSkiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2ZmZmZmZiIgc3Ryb2tlLXdpZHRoPSIxNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9Im5vbmUiIHN0cm9rZS1vcGFjaXR5PSIiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiPjwvcGF0aD48L2c+PC9nPjwvc3ZnPg==" style="width: 48px;">
                                </div>
                                <div class="counter-content">
                                    <h2> ± <span class="count">5</span>K</h2>
                                    <span>Karya Fotografi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-counter text-center mb-50">
                                <div class="counter-icon">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIGQ9Ik00MzcuNzYgMTk1LjQyMWMxNC41NjEtMTQuMjYxIDIzLjA0LTMzLjc0MiAyMy4wNC01NC42MjEgMC00Mi4zNDYtMzQuNDUtNzYuOC03Ni44LTc2LjgtMTMuOTkyIDAtMjcuNzU4IDMuODQ2LTM5LjgyNSAxMS4xMjVhOC41NCA4LjU0IDAgMCAwLTIuOSAxMS43MTdjMi40MzMgNC4wMzggNy42ODMgNS4zMjUgMTEuNzE3IDIuOSA5LjQwOC01LjY3NSAyMC4xMjUtOC42NzUgMzEuMDA4LTguNjc1IDMyLjkzMyAwIDU5LjczMyAyNi43OTYgNTkuNzMzIDU5LjczMyAwIDIwLjI4My0xMC4xNTggMzguOTc5LTI3LjIwOCA1MC4wMzctMTQuMzE3IDkuMzkyLTMyLjQ2NyAxMi4xLTQ5LjA0MiA3LjM3OS00LjQ4My0xLjI5Mi05LjI1IDEuMzI1LTEwLjU1IDUuODU4YTguNTM4IDguNTM4IDAgMCAwIDUuODY3IDEwLjU1IDc3LjAyNiA3Ny4wMjYgMCAwIDAgMjEuMiAyLjk3NWMxMy40MTggMCAyNi4zODgtMy42NiAzNy45MDMtMTAuMjcgNDMuODA2IDE1Ljg3MyA3My4wMyA1Ny4yMzIgNzMuMDMgMTA0LjEzN3Y0Mi42NjdoLTc3LjgxMmMtNi4wNDQtNTYuOTk2LTQxLjkwMi0xMDYuODcyLTk0LjIwNS0xMzAuNTU1IDE2LjY0NC0xNi45NDYgMjYuOTUtNDAuMTM4IDI2Ljk1LTY1LjcxMUMzNDkuODY3IDEwNi4xMDggMzA3Ljc1OCA2NCAyNTYgNjRzLTkzLjg2NyA0Mi4xMDgtOTMuODY3IDkzLjg2N2MwIDI1LjU4MSAxMC4zMTIgNDguNzggMjYuOTY1IDY1LjcyOC0xNy42MDIgNy45OTctMzMuOTI3IDE5LjE4NS00Ny43NzMgMzIuOTUyLTI2LjU0MyAyNi42MTktNDIuNjk1IDYwLjc4NC00Ni41MjkgOTcuNTg4SDE3LjA2N3YtNDIuNjY3YzAtMjkuNTUgMTEuNTQyLTU3LjQxMiAzMi40NjctNzguNDI1IDExLjUxOS0xMS40NDYgMjUuNTQzLTIwLjE3OCA0MC42NDMtMjUuNjY2QzEwMS42OTQgMjEzLjk2IDExNC42MjUgMjE3LjYgMTI4IDIxNy42YzcuMTY3IDAgMTQuMy0xIDIxLjItMi45NzVhOC41NCA4LjU0IDAgMCAwIDUuODY3LTEwLjU1Yy0xLjMtNC41MzMtNi4wNjctNy4xNDYtMTAuNTUtNS44NTgtMTYuNTY3IDQuNzI5LTM0LjcwOCAyLjAyNS00OS4wODMtNy40LTE3LjAwOC0xMS4wMzgtMjcuMTY3LTI5LjczMy0yNy4xNjctNTAuMDE3IDAtMzIuOTM3IDI2LjgtNTkuNzMzIDU5LjczMy01OS43MzMgMTAuODgzIDAgMjEuNiAzIDMxLjAwOCA4LjY3NWE4LjU1MiA4LjU1MiAwIDAgMCAxMS43MTctMi45YzIuNDMzLTQuMDM3IDEuMTMzLTkuMjc5LTIuOS0xMS43MTdDMTU1Ljc1OCA2Ny44NDYgMTQxLjk5MiA2NCAxMjggNjRjLTQyLjM1IDAtNzYuOCAzNC40NTQtNzYuOCA3Ni44IDAgMjAuODYzIDguNDY1IDQwLjMyOSAyMi45ODQgNTQuNTc3YTEyOS45ODUgMTI5Ljk4NSAwIDAgMC0zNi43MTcgMjUuNTlDMTMuMzA4IDI0NS4yMzMgMCAyNzcuMzcxIDAgMzExLjQ2N3Y1MS4yYTguNTMgOC41MyAwIDAgMCA4LjUzMyA4LjUzM2g4NS4zMzN2NjguMjY3YTguNTMgOC41MyAwIDAgMCA4LjUzMyA4LjUzM2gzMDcuMmE4LjUzIDguNTMgMCAwIDAgOC41MzMtOC41MzNWMzcxLjJoODUuMzMzYTguNTMgOC41MyAwIDAgMCA4LjUzMy04LjUzM3YtNTEuMmMuMDAyLTUwLjQ1NS0yOS4zMi05NS4zMzktNzQuMjM4LTExNi4wNDZ6TTE3OS4yIDE1Ny44NjdjMC00Mi4zNDYgMzQuNDUtNzYuOCA3Ni44LTc2LjggNDIuMzUgMCA3Ni44IDM0LjQ1NCA3Ni44IDc2LjhzLTM0LjQ1IDc2LjgtNzYuOCA3Ni44Yy00Mi4zNSAwLTc2LjgtMzQuNDU1LTc2LjgtNzYuOHptMjIxLjg2NyAyNzMuMDY2SDExMC45MzNWMzcxLjJjMC0zOC42OTIgMTUuMDgzLTc1LjEyOSA0Mi40NS0xMDIuNTc5IDE0LjQxNy0xNC4zNCAzMS44OTUtMjUuNDYzIDUwLjYzNC0zMi42NTkgMTQuODk1IDkuOTQ3IDMyLjc2NyAxNS43NzEgNTEuOTgzIDE1Ljc3MSAxOS4yNDggMCAzNy4xNTEtNS44NDEgNTIuMDYtMTUuODE4IDU1Ljc3OCAyMS40MzEgOTMuMDA3IDc1LjIwNSA5My4wMDcgMTM1LjI4NXY1OS43MzN6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBjbGFzcz0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" style="width: 48px;" >
                                </div>
                                <div class="counter-content">
                                    <h2><span class="count">52</h2>
                                    <span>Pelanggan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- counter-area-end -->
            <!-- services-area-end -->
            <!-- software-area -->
            <section class="software-area gray-bg pt-150 pb-150">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="software-img software-img-shape">
                                <img src="img/images/software_img01.png" alt="img" class="paroller" data-paroller-factor="-0.08"
                                    data-paroller-factor-lg="-0.08" data-paroller-factor-md="-0.08" data-paroller-factor-sm="-0.08"
                                    data-paroller-type="foreground" data-paroller-direction="horizontal">
                                <img src="img/images/software_img02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-80">
                            <div class="section-title mb-30">
                                <span>Visual yang Memukau</span>
                                <h2>Mewujudkan dan Menyatukan Mimpi Menjadi sebuah Visual yang Memukau</h2>
                            </div>
                            <div class="software-content">
                                <p>Tim kami bersemangat untuk menciptakan sebuah visual yang memukau dan memikat audiens Anda.</p>
                                <div class="software-list mb-40">
                                    <ul>
                                        <li><i class="fas fa-check"></i> Visual Videografi</li>
                                        <li><i class="fas fa-check"></i> Visual Desain Grafis</li>
                                        <li><i class="fas fa-check"></i> Visual Fotografi</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn">Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- software-area-end -->
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
        <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area p-5">
        <div class="container">
            <div class="testimonial-items pb-5">
                <div class="row align-center">
                    <div class="col-lg-5 wow fadeInUp "style="visibility: visible;animation-name: fadeInUp;height: 400px;">
                        <img src="img/images/Testimoni.svg" width="500px" height="500px"  alt="Thumb">
                    </div>
                    <div class="col-lg-6 wow fadeInLeft offset-lg-1 testimonial-content">
                        <div class="heading">
                            <h2>Ini kata mereka <br> tentang One Dream</h2>
                        </div>
                        <div class="testimonials-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <p>
                                    Mampu menerjemahkan sebuah gagasan dalam seuatu konsep ilustrasi yang sesuai dengan ekspektasi.
                                </p>
                                <div class="author">
                                    <div class="info">
                                        <h5>Info Serang</h5>
                                        <span>Kota Serang-Banten</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <p>
                                    Saya sangat puas dengan hasilnya, persis seperti yang saya inginkan, One Dream melakukan pekerjaan dengan sangat baik!
                                </p>
                                <div class="author">
                                    <div class="info">
                                        <h5>Asli Puruk Cahu</h5>
                                        <span>Kalimantan</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <p>
                                    Selera yang bagus, membuat bisnis saya semakin aktif di sosial media, terima kasih banyak One Dream
                                </p>
                                <div class="author">
                                    <div class="info">
                                        <h5>Luv Khitchen</h5>
                                        <span>Kediri-Jawa Timur</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->
@endSection
