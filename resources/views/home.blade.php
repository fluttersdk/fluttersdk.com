<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
<div class="bg-white">
    <main class="mx-auto w-full max-w-7xl px-6 pb-16 pt-10 sm:pb-24 lg:px-8">
        <img class="mx-auto h-36 w-auto" src="{{ asset('images/flutter-logo.png') }}" alt="fluttersdk.com logo">

        <div class="mx-auto mt-8 max-w-2xl text-center">
            <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-6xl">
                Flutter<span class="text-primary-600">SDK</span>
            </h1>
            <p class="mt-6 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
                {{ __('Powering the Flutter Developer Community') }}
            </p>
        </div>
        <div class="mx-auto mt-16 flow-root max-w-lg sm:mt-20">
            <ul role="list" class="-mt-6 divide-y divide-gray-900/5 border-b border-gray-900/5">
                <li class="relative flex gap-x-6 py-6 items-center">
                    <div
                        class="flex size-12 flex-none items-center justify-center rounded-lg shadow-sm ring-1 ring-gray-900/10">
                        <img src="{{ asset('images/wind-logo.png') }}" class="size-8" alt="wind logo">
                    </div>
                    <div class="flex-auto">
                        <h2 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
                            <a href="https://wind.fluttersdk.com">
                                wind
                            </a>
                        </h2>
                        <p class="mt-2 text-sm/6 text-gray-600">{{ __('A Flutter plugin designed with a utility-first approach.') }}</p>
                    </div>
                    <div class="flex-none self-center">
                        <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                             data-slot="icon">
                            <path fill-rule="evenodd"
                                  d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </li>
                <li class="relative flex gap-x-6 py-6">
                    <div
                        class="flex size-12 flex-none items-center justify-center rounded-lg shadow-sm ring-1 ring-gray-900/10">
                        <img src="{{ asset('images/jobs-logo.png') }}" class="size-8" alt="Flutter Jobs logo">
                    </div>
                    <div class="flex-auto">
                        <h2 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
                            <a href="https://flutter-jobs.com">
                                Flutter Jobs
                            </a>

                            <span
                                class="bg-gray-500 text-gray-200 py-1 px-2 rounded text-xs">{{ __('Coming soon') }}</span>
                        </h2>
                        <p class="mt-2 text-sm/6 text-gray-600">{{ __('Find your next Flutter job.') }}</p>
                    </div>
                    <div class="flex-none self-center">
                        <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                             data-slot="icon">
                            <path fill-rule="evenodd"
                                  d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </li>
                <li class="relative flex gap-x-6 py-6">
                    <div
                        class="flex size-12 flex-none items-center justify-center rounded-lg shadow-sm ring-1 ring-gray-900/10">
                        <img src="{{ asset('images/news-logo.png') }}" class="size-8" alt="Flutter News logo">
                    </div>
                    <div class="flex-auto">
                        <h2 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
                            <a href="https://flutter-news.com">
                                Flutter News
                            </a>

                            <span
                                class="bg-gray-500 text-gray-200 py-1 px-2 rounded text-xs">{{ __('Coming soon') }}</span>
                        </h2>
                        <p class="mt-2 text-sm/6 text-gray-600">{{ __('Stay up-to-date with the latest Flutter news.') }}</p>
                    </div>
                    <div class="flex-none self-center">
                        <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                             data-slot="icon">
                            <path fill-rule="evenodd"
                                  d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </li>
                <li class="relative flex gap-x-6 py-6 items-center">
                    <div
                        class="flex size-12 flex-none items-center justify-center rounded-lg shadow-sm ring-1 ring-gray-900/10">
                        <svg class="size-8 text-primary-600" fill="currentColor" aria-hidden="true"
                             viewBox="0 0 464.731 464.731">
                            <path
                                d="m463.056 441.971-45.894-43.145 29.759-55.521c.8-1.508.379-3.398-1.029-4.395a3.401 3.401 0 0 0-4.487.424l-43.146 45.895-55.533-29.746c-1.515-.803-3.399-.377-4.395 1.027-1.017 1.392-.815 3.309.438 4.488l45.911 43.162-29.747 55.518a3.442 3.442 0 0 0 1.01 4.412 3.439 3.439 0 0 0 4.502-.438l43.149-45.912 55.507 29.746a3.42 3.42 0 0 0 4.393-1.027 3.406 3.406 0 0 0-.438-4.488zM369.086 94.641l-20.273 37.826c-1.04 1.918-.479 4.307 1.285 5.588a4.357 4.357 0 0 0 5.71-.559l29.417-31.269 37.78 20.26c1.921 1.024 4.323.484 5.589-1.285 1.271-1.783 1.048-4.215-.555-5.709l-31.245-29.385 20.274-37.814c1.028-1.918.466-4.307-1.297-5.59-1.766-1.268-4.216-1.025-5.713.558l-29.381 31.257-37.814-20.273a4.359 4.359 0 0 0-5.045 7.012l31.268 29.383zM123.956 360.06l-44.659 6.239-17.611-41.484a4.589 4.589 0 0 0-5.423-2.631 4.586 4.586 0 0 0-3.313 5.051l6.239 44.639-41.499 17.615c-2.1.908-3.23 3.217-2.614 5.424a4.558 4.558 0 0 0 5.032 3.31l44.657-6.241 17.611 41.5a4.573 4.573 0 0 0 5.425 2.629 4.586 4.586 0 0 0 3.312-5.043l-6.238-44.658 41.5-17.617c2.099-.904 3.234-3.217 2.612-5.423a4.554 4.554 0 0 0-5.031-3.31zM4.908 45.161l34.646 9.537-.23 35.832a3.996 3.996 0 0 0 3.447 3.99 3.98 3.98 0 0 0 4.377-2.901l9.521-34.565 35.923.225a3.996 3.996 0 0 0 3.992-3.441 3.985 3.985 0 0 0-2.905-4.383l-34.627-9.547.213-35.881c.018-2.01-1.466-3.701-3.441-3.988a3.977 3.977 0 0 0-4.383 2.901l-9.533 34.608-35.912-.224c-1.991 0-3.701 1.463-3.974 3.441a4.002 4.002 0 0 0 2.886 4.396zM278.019 234.519l139.775-18.477a3.172 3.172 0 0 0 2.762-3.143 3.174 3.174 0 0 0-2.762-3.142L278.019 191.28l20.476-57.755a6.75 6.75 0 0 0-1.603-7.009c-1.828-1.844-4.567-2.445-7.01-1.586l-57.697 20.484L213.708 5.688a3.158 3.158 0 0 0-3.14-2.764 3.178 3.178 0 0 0-3.146 2.764l-18.457 139.744-57.772-20.502a6.706 6.706 0 0 0-7.014 1.586 6.705 6.705 0 0 0-1.586 7.009l20.489 57.772-139.73 18.46a3.176 3.176 0 0 0-2.762 3.142 3.173 3.173 0 0 0 2.762 3.143l139.73 18.461-20.489 57.742a6.707 6.707 0 0 0 1.586 7.01 6.698 6.698 0 0 0 7.014 1.582l57.772-20.467 18.457 139.743a3.184 3.184 0 0 0 3.146 2.764 3.163 3.163 0 0 0 3.14-2.764l18.477-139.743 57.727 20.486a6.696 6.696 0 0 0 7.009-1.589 6.685 6.685 0 0 0 1.584-7.007l-20.486-57.741z"/>
                        </svg>
                    </div>
                    <div class="flex-auto">
                        <h2 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
                            <a href="https://magic.fluttersdk.com">
                                magic
                            </a>

                            <span
                                class="bg-gray-500 text-gray-200 py-1 px-2 rounded text-xs">{{ __('Coming soon') }}</span>
                        </h2>
                        <p class="mt-2 text-sm/6 text-gray-600">{{ __('A new magical flutter package.') }}</p>
                    </div>
                    <div class="flex-none self-center">
                        <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                             data-slot="icon">
                            <path fill-rule="evenodd"
                                  d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                </li>
            </ul>
        </div>
    </main>
    <footer class="border-t border-gray-100 py-6 sm:py-10">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-center gap-8 px-6 sm:flex-row lg:px-8">
            <p class="text-sm/7 text-gray-400">FlutterSDK. Copyright &copy; <a href="https://anilcancakir.com">Anılcan Çakır</a>.</p>
            <div class="hidden sm:block sm:h-7 sm:w-px sm:flex-none sm:bg-gray-200"></div>
            <div class="flex gap-x-4">
                <a href="https://x.com/fluttersdk" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">X</span>
                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z"/>
                    </svg>
                </a>
                <a href="https://github.com/fluttersdk" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">GitHub</span>
                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</div>

@vite('resources/js/app.js')
</body>
</html>
