<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Nippy</title>
        <link
            rel="shortcut icon"
            href="{{ url('/images/logo.png') }}"
            type="image/x-icon" />
        {{--
            <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous" />
        --}}
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" />
    </head>

    <body class="h-screen">
        <header class="bg-emerald-400 px-10">
            <div class="container box-border px-16">
                <nav class="flex w-full space-x-20">
                    <div
                        class="inline-flex items-center gap-0 transition-all duration-500 ease-in-out hover:scale-105">
                        <img
                            src="{{ url('/images/logo.png') }}"
                            class="m-3 size-16 opacity-60" />
                        <p
                            class="font-sans text-4xl font-extrabold text-emerald-800">
                            nippy
                        </p>
                    </div>
                    <ul
                        class="inline-flex grow items-center justify-center space-x-16 text-xl font-extrabold capitalize text-emerald-50">
                        <li
                            class="transition-all duration-500 ease-in hover:underline hover:decoration-green-900 hover:decoration-wavy hover:underline-offset-8">
                            home
                        </li>
                        <li
                            class="transition-all duration-500 hover:underline hover:decoration-green-900 hover:decoration-wavy hover:underline-offset-8">
                            explore
                        </li>
                        <li
                            class="transition-all duration-500 hover:underline hover:decoration-green-900 hover:decoration-wavy hover:underline-offset-8">
                            review
                        </li>
                    </ul>
                    <button
                        class="group relative my-auto h-full max-h-36 overflow-hidden rounded-full bg-slate-100 px-7 py-2 font-semibold transition-all hover:bg-white"
                        onclick="window.location.href='{{ url('admin') }}'">
                        <span
                            class="absolute bottom-0 left-0 mb-9 ml-9 h-48 w-56 translate-x-full translate-y-full rounded bg-slate-600 transition-all duration-500 ease-in-out group-hover:mb-28 group-hover:ml-0 group-hover:translate-x-0 group-hover:blur-2xl"></span>
                        <span
                            class="relative w-full text-center text-slate-600 transition-colors duration-300 ease-in-out group-hover:text-white">
                            Sign In
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                class="inline size-6">
                                <path
                                    fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                </nav>
            </div>
        </header>

        <section class="container box-border w-full pt-20">
            <div class="mx-auto flex w-10/12 flex-row" style="height: 28rem">
                <div class="w-full basis-1/2 content-center p-10">
                    <div class="text-5xl font-extrabold">
                        Segala hal mengenai Aesthetic
                    </div>
                    <div class="my-7 text-lg text-slate-500">
                        Rekomendasi hal-hal unik dan menjual funiture lucu,
                        berwarna soft, dan cocok untuk tema aesthetic yang
                        simple.
                    </div>
                    <button
                        class="rounded-full bg-slate-200 px-5 py-3 font-bold text-slate-600 transition duration-500 ease-in hover:scale-105 hover:bg-slate-600 hover:text-white"
                        onclick="#">
                        Let's go check it
                    </button>
                    <div class="mt-12 grid w-full grid-cols-3">
                        <div class="mx-auto w-max text-center">
                            <h3 class="text-3xl font-bold text-emerald-600">
                                14,869
                            </h3>
                            <p class="pt-3 text-lg text-slate-500">
                                Accessories
                            </p>
                        </div>
                        <div class="mx-auto w-max text-center">
                            <h3 class="text-3xl font-bold text-emerald-600">
                                4,160
                            </h3>
                            <p class="pt-3 text-lg text-slate-500">Funiture</p>
                        </div>
                        <div class="mx-auto w-max text-center">
                            <h3 class="text-3xl font-bold text-emerald-600">
                                279M+
                            </h3>
                            <p class="pt-3 text-lg text-slate-500">
                                Kiyowo People
                            </p>
                        </div>
                    </div>
                </div>
                <div class="basis-1/2 overflow-hidden rounded-xl">
                    <img
                        src="{{ url('/images/banner.jpeg') }}"
                        class="object-cover" />
                </div>
            </div>
        </section>

        <section
            class="container mt-20 box-border flex w-full justify-center bg-emerald-400 py-20 text-emerald-800">
            <div class="grid w-10/12 justify-items-center">
                <div class="grid place-content-center">
                    <img src="{{ url('/images/logo.png') }}" class="size-12" />
                </div>
                <div class="m-2.5 text-2xl font-extrabold">
                    Best Choice for You
                </div>
                <div class="mb-14 text-lg">List barang aesthetic</div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="flex w-72 flex-col rounded-xl bg-white">
                        <div class="w-full rounded-t-xl bg-slate-200">
                            <img
                                src="{{ url('/images/jam.jpeg') }}"
                                class="h-64 w-full overflow-hidden rounded-t-xl bg-clip-border object-cover" />
                        </div>
                        <div class="flex flex-col p-5">
                            <h2
                                class="text-lg font-bold uppercase text-slate-900">
                                Jam dinding piringan lagu
                            </h2>
                            <div class="mt-2 flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5 auto-cols-min">
                                    <path
                                        fill-rule="evenodd"
                                        d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="grow px-2 text-sm text-slate-600">
                                    Mojogedang
                                </p>
                                <p class="px-1 font-bold">Rp 99</p>
                                <p class="text-xs">000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-72 flex-col rounded-xl bg-white">
                        <div class="w-full rounded-t-xl bg-slate-200">
                            <img
                                src="{{ url('/images/vase.jpeg') }}"
                                class="h-64 w-full overflow-hidden rounded-t-xl bg-clip-border object-cover" />
                        </div>
                        <div class="flex flex-col p-5">
                            <h2
                                class="text-lg font-bold uppercase text-slate-900">
                                Vas bunga
                            </h2>
                            <div class="mt-2 flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5 auto-cols-min">
                                    <path
                                        fill-rule="evenodd"
                                        d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="grow px-2 text-sm text-slate-600">
                                    Sewurejo
                                </p>
                                <p class="px-1 font-bold">Rp 57</p>
                                <p class="text-xs">000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-72 flex-col rounded-xl bg-white">
                        <div class="w-full rounded-t-xl bg-slate-200">
                            <img
                                src="{{ url('/images/keset-cat.jpeg') }}"
                                class="h-64 w-full overflow-hidden rounded-t-xl bg-clip-border object-cover" />
                        </div>
                        <div class="flex flex-col p-5">
                            <h2
                                class="text-lg font-bold uppercase text-slate-900">
                                Keset motif kucing
                            </h2>
                            <div class="mt-2 flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5 auto-cols-min">
                                    <path
                                        fill-rule="evenodd"
                                        d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="grow px-2 text-sm text-slate-600">
                                    Colomadu
                                </p>
                                <p class="px-1 font-bold">Rp 30</p>
                                <p class="text-xs">000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-72 flex-col rounded-xl bg-white">
                        <div class="w-full rounded-t-xl bg-slate-200">
                            <img
                                src="{{ url('/images/cermin-gelombang.jpeg') }}"
                                class="h-64 w-full overflow-hidden rounded-t-xl bg-clip-border object-cover" />
                        </div>
                        <div class="flex flex-col p-5">
                            <h2
                                class="text-lg font-bold uppercase text-slate-900">
                                Cermin
                            </h2>
                            <div class="mt-2 flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5 auto-cols-min">
                                    <path
                                        fill-rule="evenodd"
                                        d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="grow px-2 text-sm text-slate-600">
                                    Mojogedang
                                </p>
                                <p class="px-1 font-bold">Rp 105</p>
                                <p class="text-xs">000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-72 flex-col rounded-xl bg-white">
                        <div class="w-full rounded-t-xl bg-slate-200">
                            <img
                                src="{{ url('/images/ikat-korden.jpeg') }}"
                                class="h-64 w-full overflow-hidden rounded-t-xl bg-clip-border object-cover" />
                        </div>
                        <div class="flex flex-col p-5">
                            <h2
                                class="text-lg font-bold uppercase text-slate-900">
                                Pengikat korden
                            </h2>
                            <div class="mt-2 flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5 auto-cols-min">
                                    <path
                                        fill-rule="evenodd"
                                        d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="grow px-2 text-sm text-slate-600">
                                    Mojogedang
                                </p>
                                <p class="px-1 font-bold">Rp 21</p>
                                <p class="text-xs">000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-72 flex-col rounded-xl bg-white">
                        <div class="w-full rounded-t-xl bg-slate-200">
                            <img
                                src="{{ url('/images/kursi-jompo.jpeg') }}"
                                class="h-64 w-full overflow-hidden rounded-t-xl bg-clip-border object-cover" />
                        </div>
                        <div class="flex flex-col p-5">
                            <h2
                                class="text-lg font-bold uppercase text-slate-900">
                                Kursi santai
                            </h2>
                            <div class="mt-2 flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5 auto-cols-min">
                                    <path
                                        fill-rule="evenodd"
                                        d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="grow px-2 text-sm text-slate-600">
                                    Mojogedang
                                </p>
                                <p class="px-1 font-bold">Rp 199</p>
                                <p class="text-xs">000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-72 flex-col rounded-xl bg-white">
                        <div class="w-full rounded-t-xl bg-slate-200">
                            <img
                                src="{{ url('/images/tempat-tisu.jpeg') }}"
                                class="h-64 w-full overflow-hidden rounded-t-xl bg-clip-border object-cover" />
                        </div>
                        <div class="flex flex-col p-5">
                            <h2
                                class="text-lg font-bold uppercase text-slate-900">
                                Kotak tisu
                            </h2>
                            <div class="mt-2 flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5 auto-cols-min">
                                    <path
                                        fill-rule="evenodd"
                                        d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="grow px-2 text-sm text-slate-600">
                                    Mojogedang
                                </p>
                                <p class="px-1 font-bold">Rp 24</p>
                                <p class="text-xs">000</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-72 flex-col rounded-xl bg-white">
                        <div class="w-full rounded-t-xl bg-slate-200">
                            <img
                                src="{{ url('/images/tempat-pensil.jpeg') }}"
                                class="h-64 w-full overflow-hidden rounded-t-xl bg-clip-border object-cover" />
                        </div>
                        <div class="flex flex-col p-5">
                            <h2
                                class="text-lg font-bold uppercase text-slate-900">
                                Tempat ATK
                            </h2>
                            <div class="mt-2 flex flex-row">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5 auto-cols-min">
                                    <path
                                        fill-rule="evenodd"
                                        d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="grow px-2 text-sm text-slate-600">
                                    Karanganyar
                                </p>
                                <p class="px-1 font-bold">Rp 18</p>
                                <p class="text-xs">000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        --}}
    </body>
</html>
