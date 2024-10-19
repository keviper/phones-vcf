<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Upload File</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            
                        </div>
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 grid-cols-12 lg:gap-8">
                            <div class="col-span-3"></div>
                            <div class="flex items-center col-span-6 gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#2075ff] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full  sm:size-16">
                                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M837.768 344.266v447.525H283.226V195.916h394.663z" fill="#FCE3C3"></path><path d="M837.768 803.791H283.226l-12-12V195.916l12-12h394.663l8.162 3.203 159.879 148.35 3.838 8.797v447.525l-12 12z m-542.542-24h530.542v-430.29L673.179 207.916H295.226v571.875z" fill="#300604"></path><path d="M677.888 195.916v148.349h159.88z" fill="#ED8F27"></path><path d="M837.768 356.266h-159.88l-12-12v-148.35l20.162-8.797 159.88 148.35-8.162 20.797z m-147.88-24h117.305L689.888 223.421v108.845zM638.47 453.327h136.461v30.664H638.47zM638.47 521.188h136.461v30.664H638.47z" fill="#300604"></path><path d="M138.969 425.261h352.64v447.852h-352.64z" fill="#B12800"></path><path d="M491.609 885.112h-352.64l-12-12V425.261l12-12H491.61l12 12v447.852l-12.001 11.999z m-340.64-24H479.61V437.261H150.969v423.851z" fill="#300604"></path><path d="M187.188 479.26h253.647v57.26H187.188z" fill="#300604"></path><path d="M317.533 697.232h119.938v131.555H317.533z" fill="#228E9D"></path><path d="M189.617 571.187h119.938v131.555H189.617z" fill="#FCE3C3"></path><path d="M189.617 702.307h119.938v131.555H189.617zM317.533 574.507h119.938v131.555H317.533z" fill="#ED8F27"></path><path d="M491.609 873.112h-352.64V425.261h352.64a0.01 0.01 0 0 1 0.01 0.01v447.832c0 0.005-0.005 0.009-0.01 0.009zM154.316 440.608v417.157h321.955V440.608H154.316z" fill="#300604"></path><path d="M448.509 832.516H182.073V566.075h266.436v266.441z m-251.088-15.347h235.741V581.422H197.421v235.747zM448.509 545.232H182.073V475.04h266.436v70.192z m-251.088-15.347h235.741v-39.498H197.421v39.498z" fill="#300604"></path><path d="M189.747 691.622h251.088v15.347H189.747z" fill="#300604"></path><path d="M307.615 573.749h15.347v251.094h-15.347zM216.475 630.762h66.22v15.347h-66.22z" fill="#300604"></path><path d="M241.909 605.328h15.347v66.22h-15.347zM231.639 735.85l46.828 46.828-10.85 10.851-46.83-46.828z" fill="#300604"></path><path d="M267.578 735.83l10.85 10.852L231.6 793.51l-10.85-10.85zM345.804 630.762h66.231v15.347h-66.231zM345.804 739.807h66.231v15.347h-66.231zM345.804 770.966h66.231v15.347h-66.231z" fill="#300604"></path><path d="M668.168 664.807h39.783v29.79h-39.783z" fill="#300604"></path><path d="M746.692 664.807h23.449v29.79h-23.449z" fill="#300604"></path><path d="M613.256 664.807h23.449v29.79h-23.449z" fill="#300604"></path><path d="M356.605 277.475h104.96v29.79h-104.96z" fill="#300604"></path><path d="M489.731 277.475h35.335v29.79h-35.335z" fill="#300604"></path></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Upload File</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        <form action="{{ route('verify') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input required type="file" name='xls' accept=".xls, .xlsx, .odt" >
                                            <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="w-3 h-3 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
                                                </svg>
                                                Download
                                                </button>
                                        </form>
                                    </p>
                                </div>
                            </div>
                            <div class="col-span-4"></div>
                        </div>
                        <div class="grid gap-6 grid-cols-12 lg:gap-8">
                            <div class="col-span-3"></div>
                            <div class="flex items-center col-span-6 gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#2075ff] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full  sm:size-16">
                                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M837.768 344.266v447.525H283.226V195.916h394.663z" fill="#FCE3C3"></path><path d="M837.768 803.791H283.226l-12-12V195.916l12-12h394.663l8.162 3.203 159.879 148.35 3.838 8.797v447.525l-12 12z m-542.542-24h530.542v-430.29L673.179 207.916H295.226v571.875z" fill="#300604"></path><path d="M677.888 195.916v148.349h159.88z" fill="#ED8F27"></path><path d="M837.768 356.266h-159.88l-12-12v-148.35l20.162-8.797 159.88 148.35-8.162 20.797z m-147.88-24h117.305L689.888 223.421v108.845zM638.47 453.327h136.461v30.664H638.47zM638.47 521.188h136.461v30.664H638.47z" fill="#300604"></path><path d="M138.969 425.261h352.64v447.852h-352.64z" fill="#B12800"></path><path d="M491.609 885.112h-352.64l-12-12V425.261l12-12H491.61l12 12v447.852l-12.001 11.999z m-340.64-24H479.61V437.261H150.969v423.851z" fill="#300604"></path><path d="M187.188 479.26h253.647v57.26H187.188z" fill="#300604"></path><path d="M317.533 697.232h119.938v131.555H317.533z" fill="#228E9D"></path><path d="M189.617 571.187h119.938v131.555H189.617z" fill="#FCE3C3"></path><path d="M189.617 702.307h119.938v131.555H189.617zM317.533 574.507h119.938v131.555H317.533z" fill="#ED8F27"></path><path d="M491.609 873.112h-352.64V425.261h352.64a0.01 0.01 0 0 1 0.01 0.01v447.832c0 0.005-0.005 0.009-0.01 0.009zM154.316 440.608v417.157h321.955V440.608H154.316z" fill="#300604"></path><path d="M448.509 832.516H182.073V566.075h266.436v266.441z m-251.088-15.347h235.741V581.422H197.421v235.747zM448.509 545.232H182.073V475.04h266.436v70.192z m-251.088-15.347h235.741v-39.498H197.421v39.498z" fill="#300604"></path><path d="M189.747 691.622h251.088v15.347H189.747z" fill="#300604"></path><path d="M307.615 573.749h15.347v251.094h-15.347zM216.475 630.762h66.22v15.347h-66.22z" fill="#300604"></path><path d="M241.909 605.328h15.347v66.22h-15.347zM231.639 735.85l46.828 46.828-10.85 10.851-46.83-46.828z" fill="#300604"></path><path d="M267.578 735.83l10.85 10.852L231.6 793.51l-10.85-10.85zM345.804 630.762h66.231v15.347h-66.231zM345.804 739.807h66.231v15.347h-66.231zM345.804 770.966h66.231v15.347h-66.231z" fill="#300604"></path><path d="M668.168 664.807h39.783v29.79h-39.783z" fill="#300604"></path><path d="M746.692 664.807h23.449v29.79h-23.449z" fill="#300604"></path><path d="M613.256 664.807h23.449v29.79h-23.449z" fill="#300604"></path><path d="M356.605 277.475h104.96v29.79h-104.96z" fill="#300604"></path><path d="M489.731 277.475h35.335v29.79h-35.335z" fill="#300604"></path></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Upload Files VCF</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        <form action="{{ route('verify-vcf') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input required type="file" name='files' multiple accept=".vcf" >
                                            <button type="submit" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="w-3 h-3 text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 1v11m0 0 4-4m-4 4L4 8m11 4v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3"/>
                                                </svg>
                                                Download
                                                </button>
                                        </form>
                                    </p>
                                </div>
                            </div>
                            <div class="col-span-4"></div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        -
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
