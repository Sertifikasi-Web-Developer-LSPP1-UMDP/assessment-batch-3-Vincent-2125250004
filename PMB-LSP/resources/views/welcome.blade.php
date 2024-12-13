    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
                *,
                ::after,
                ::before {
                    box-sizing: border-box;
                    border-width: 0;
                    border-style: solid;
                    border-color: #e5e7eb
                }

                ::after,
                ::before {
                    --tw-content: ''
                }

                :host,
                html {
                    line-height: 1.5;
                    -webkit-text-size-adjust: 100%;
                    -moz-tab-size: 4;
                    tab-size: 4;
                    font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                    font-feature-settings: normal;
                    font-variation-settings: normal;
                    -webkit-tap-highlight-color: transparent
                }

                body {
                    margin: 0;
                    line-height: inherit
                }

                hr {
                    height: 0;
                    color: inherit;
                    border-top-width: 1px
                }

                abbr:where([title]) {
                    -webkit-text-decoration: underline dotted;
                    text-decoration: underline dotted
                }

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                    font-size: inherit;
                    font-weight: inherit
                }

                a {
                    color: inherit;
                    text-decoration: inherit
                }

                b,
                strong {
                    font-weight: bolder
                }

                code,
                kbd,
                pre,
                samp {
                    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                    font-feature-settings: normal;
                    font-variation-settings: normal;
                    font-size: 1em
                }

                small {
                    font-size: 80%
                }

                sub,
                sup {
                    font-size: 75%;
                    line-height: 0;
                    position: relative;
                    vertical-align: baseline
                }

                sub {
                    bottom: -.25em
                }

                sup {
                    top: -.5em
                }

                table {
                    text-indent: 0;
                    border-color: inherit;
                    border-collapse: collapse
                }

                button,
                input,
                optgroup,
                select,
                textarea {
                    font-family: inherit;
                    font-feature-settings: inherit;
                    font-variation-settings: inherit;
                    font-size: 100%;
                    font-weight: inherit;
                    line-height: inherit;
                    color: inherit;
                    margin: 0;
                    padding: 0
                }

                button,
                select {
                    text-transform: none
                }

                [type=button],
                [type=reset],
                [type=submit],
                button {
                    -webkit-appearance: button;
                    background-color: transparent;
                    background-image: none
                }

                :-moz-focusring {
                    outline: auto
                }

                :-moz-ui-invalid {
                    box-shadow: none
                }

                progress {
                    vertical-align: baseline
                }

                ::-webkit-inner-spin-button,
                ::-webkit-outer-spin-button {
                    height: auto
                }

                [type=search] {
                    -webkit-appearance: textfield;
                    outline-offset: -2px
                }

                ::-webkit-search-decoration {
                    -webkit-appearance: none
                }

                ::-webkit-file-upload-button {
                    -webkit-appearance: button;
                    font: inherit
                }

                summary {
                    display: list-item
                }

                blockquote,
                dd,
                dl,
                figure,
                h1,
                h2,
                h3,
                h4,
                h5,
                h6,
                hr,
                p,
                pre {
                    margin: 0
                }

                fieldset {
                    margin: 0;
                    padding: 0
                }

                legend {
                    padding: 0
                }

                menu,
                ol,
                ul {
                    list-style: none;
                    margin: 0;
                    padding: 0
                }

                dialog {
                    padding: 0
                }

                textarea {
                    resize: vertical
                }

                input::placeholder,
                textarea::placeholder {
                    opacity: 1;
                    color: #9ca3af
                }

                [role=button],
                button {
                    cursor: pointer
                }

                :disabled {
                    cursor: default
                }

                audio,
                canvas,
                embed,
                iframe,
                img,
                object,
                svg,
                video {
                    display: block;
                    vertical-align: middle
                }

                img,
                video {
                    max-width: 100%;
                    height: auto
                }

                [hidden] {
                    display: none
                }

                *,
                ::before,
                ::after {
                    --tw-border-spacing-x: 0;
                    --tw-border-spacing-y: 0;
                    --tw-translate-x: 0;
                    --tw-translate-y: 0;
                    --tw-rotate: 0;
                    --tw-skew-x: 0;
                    --tw-skew-y: 0;
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    --tw-pan-x: ;
                    --tw-pan-y: ;
                    --tw-pinch-zoom: ;
                    --tw-scroll-snap-strictness: proximity;
                    --tw-gradient-from-position: ;
                    --tw-gradient-via-position: ;
                    --tw-gradient-to-position: ;
                    --tw-ordinal: ;
                    --tw-slashed-zero: ;
                    --tw-numeric-figure: ;
                    --tw-numeric-spacing: ;
                    --tw-numeric-fraction: ;
                    --tw-ring-inset: ;
                    --tw-ring-offset-width: 0px;
                    --tw-ring-offset-color: #fff;
                    --tw-ring-color: rgb(59 130 246 / 0.5);
                    --tw-ring-offset-shadow: 0 0 #0000;
                    --tw-ring-shadow: 0 0 #0000;
                    --tw-shadow: 0 0 #0000;
                    --tw-shadow-colored: 0 0 #0000;
                    --tw-blur: ;
                    --tw-brightness: ;
                    --tw-contrast: ;
                    --tw-grayscale: ;
                    --tw-hue-rotate: ;
                    --tw-invert: ;
                    --tw-saturate: ;
                    --tw-sepia: ;
                    --tw-drop-shadow: ;
                    --tw-backdrop-blur: ;
                    --tw-backdrop-brightness: ;
                    --tw-backdrop-contrast: ;
                    --tw-backdrop-grayscale: ;
                    --tw-backdrop-hue-rotate: ;
                    --tw-backdrop-invert: ;
                    --tw-backdrop-opacity: ;
                    --tw-backdrop-saturate: ;
                    --tw-backdrop-sepia:
                }

                ::backdrop {
                    --tw-border-spacing-x: 0;
                    --tw-border-spacing-y: 0;
                    --tw-translate-x: 0;
                    --tw-translate-y: 0;
                    --tw-rotate: 0;
                    --tw-skew-x: 0;
                    --tw-skew-y: 0;
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    --tw-pan-x: ;
                    --tw-pan-y: ;
                    --tw-pinch-zoom: ;
                    --tw-scroll-snap-strictness: proximity;
                    --tw-gradient-from-position: ;
                    --tw-gradient-via-position: ;
                    --tw-gradient-to-position: ;
                    --tw-ordinal: ;
                    --tw-slashed-zero: ;
                    --tw-numeric-figure: ;
                    --tw-numeric-spacing: ;
                    --tw-numeric-fraction: ;
                    --tw-ring-inset: ;
                    --tw-ring-offset-width: 0px;
                    --tw-ring-offset-color: #fff;
                    --tw-ring-color: rgb(59 130 246 / 0.5);
                    --tw-ring-offset-shadow: 0 0 #0000;
                    --tw-ring-shadow: 0 0 #0000;
                    --tw-shadow: 0 0 #0000;
                    --tw-shadow-colored: 0 0 #0000;
                    --tw-blur: ;
                    --tw-brightness: ;
                    --tw-contrast: ;
                    --tw-grayscale: ;
                    --tw-hue-rotate: ;
                    --tw-invert: ;
                    --tw-saturate: ;
                    --tw-sepia: ;
                    --tw-drop-shadow: ;
                    --tw-backdrop-blur: ;
                    --tw-backdrop-brightness: ;
                    --tw-backdrop-contrast: ;
                    --tw-backdrop-grayscale: ;
                    --tw-backdrop-hue-rotate: ;
                    --tw-backdrop-invert: ;
                    --tw-backdrop-opacity: ;
                    --tw-backdrop-saturate: ;
                    --tw-backdrop-sepia:
                }

                .absolute {
                    position: absolute
                }

                .relative {
                    position: relative
                }

                .-left-20 {
                    left: -5rem
                }

                .top-0 {
                    top: 0px
                }

                .-bottom-16 {
                    bottom: -4rem
                }

                .-left-16 {
                    left: -4rem
                }

                .-mx-3 {
                    margin-left: -0.75rem;
                    margin-right: -0.75rem
                }

                .mt-4 {
                    margin-top: 1rem
                }

                .mt-6 {
                    margin-top: 1.5rem
                }

                .flex {
                    display: flex
                }

                .grid {
                    display: grid
                }

                .hidden {
                    display: none
                }

                .aspect-video {
                    aspect-ratio: 16 / 9
                }

                .size-12 {
                    width: 3rem;
                    height: 3rem
                }

                .size-5 {
                    width: 1.25rem;
                    height: 1.25rem
                }

                .size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .h-12 {
                    height: 3rem
                }

                .h-40 {
                    height: 10rem
                }

                .h-full {
                    height: 100%
                }

                .min-h-screen {
                    min-height: 100vh
                }

                .w-full {
                    width: 100%
                }

                .w-\[calc\(100\%\+8rem\)\] {
                    width: calc(100% + 8rem)
                }

                .w-auto {
                    width: auto
                }

                .max-w-\[877px\] {
                    max-width: 877px
                }

                .max-w-2xl {
                    max-width: 42rem
                }

                .flex-1 {
                    flex: 1 1 0%
                }

                .shrink-0 {
                    flex-shrink: 0
                }

                .grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .flex-col {
                    flex-direction: column
                }

                .items-start {
                    align-items: flex-start
                }

                .items-center {
                    align-items: center
                }

                .items-stretch {
                    align-items: stretch
                }

                .justify-end {
                    justify-content: flex-end
                }

                .justify-center {
                    justify-content: center
                }

                .gap-2 {
                    gap: 0.5rem
                }

                .gap-4 {
                    gap: 1rem
                }

                .gap-6 {
                    gap: 1.5rem
                }

                .self-center {
                    align-self: center
                }

                .overflow-hidden {
                    overflow: hidden
                }

                .rounded-\[10px\] {
                    border-radius: 10px
                }

                .rounded-full {
                    border-radius: 9999px
                }

                .rounded-lg {
                    border-radius: 0.5rem
                }

                .rounded-md {
                    border-radius: 0.375rem
                }

                .rounded-sm {
                    border-radius: 0.125rem
                }

                .bg-\[\#FF2D20\]\/10 {
                    background-color: rgb(255 45 32 / 0.1)
                }

                .bg-white {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 255 255 / var(--tw-bg-opacity))
                }

                .bg-gradient-to-b {
                    background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
                }

                .from-transparent {
                    --tw-gradient-from: transparent var(--tw-gradient-from-position);
                    --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
                }

                .via-white {
                    --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .to-white {
                    --tw-gradient-to: #fff var(--tw-gradient-to-position)
                }

                .stroke-\[\#FF2D20\] {
                    stroke: #FF2D20
                }

                .object-cover {
                    object-fit: cover
                }

                .object-top {
                    object-position: top
                }

                .p-6 {
                    padding: 1.5rem
                }

                .px-6 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem
                }

                .py-10 {
                    padding-top: 2.5rem;
                    padding-bottom: 2.5rem
                }

                .px-3 {
                    padding-left: 0.75rem;
                    padding-right: 0.75rem
                }

                .py-16 {
                    padding-top: 4rem;
                    padding-bottom: 4rem
                }

                .py-2 {
                    padding-top: 0.5rem;
                    padding-bottom: 0.5rem
                }

                .pt-3 {
                    padding-top: 0.75rem
                }

                .text-center {
                    text-align: center
                }

                .font-sans {
                    font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
                }

                .text-sm {
                    font-size: 0.875rem;
                    line-height: 1.25rem
                }

                .text-sm\/relaxed {
                    font-size: 0.875rem;
                    line-height: 1.625
                }

                .text-xl {
                    font-size: 1.25rem;
                    line-height: 1.75rem
                }

                .font-semibold {
                    font-weight: 600
                }

                .text-black {
                    --tw-text-opacity: 1;
                    color: rgb(0 0 0 / var(--tw-text-opacity))
                }

                .text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .underline {
                    -webkit-text-decoration-line: underline;
                    text-decoration-line: underline
                }

                .antialiased {
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale
                }

                .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
                    --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
                    --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
                }

                .ring-1 {
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
                }

                .ring-transparent {
                    --tw-ring-color: transparent
                }

                .ring-white\/\[0\.05\] {
                    --tw-ring-color: rgb(255 255 255 / 0.05)
                }

                .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
                    --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
                    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
                }

                .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
                    --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
                    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
                }

                .transition {
                    transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                    transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                    transition-duration: 150ms
                }

                .duration-300 {
                    transition-duration: 300ms
                }

                .selection\:bg-\[\#FF2D20\] *::selection {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 45 32 / var(--tw-bg-opacity))
                }

                .selection\:text-white *::selection {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .selection\:bg-\[\#FF2D20\]::selection {
                    --tw-bg-opacity: 1;
                    background-color: rgb(255 45 32 / var(--tw-bg-opacity))
                }

                .selection\:text-white::selection {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .hover\:text-black:hover {
                    --tw-text-opacity: 1;
                    color: rgb(0 0 0 / var(--tw-text-opacity))
                }

                .hover\:text-black\/70:hover {
                    color: rgb(0 0 0 / 0.7)
                }

                .hover\:ring-black\/20:hover {
                    --tw-ring-color: rgb(0 0 0 / 0.2)
                }

                .focus\:outline-none:focus {
                    outline: 2px solid transparent;
                    outline-offset: 2px
                }

                .focus-visible\:ring-1:focus-visible {
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
                }

                .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
                }

                @media (min-width: 640px) {
                    .sm\:size-16 {
                        width: 4rem;
                        height: 4rem
                    }

                    .sm\:size-6 {
                        width: 1.5rem;
                        height: 1.5rem
                    }

                    .sm\:pt-5 {
                        padding-top: 1.25rem
                    }
                }

                @media (min-width: 768px) {
                    .md\:row-span-3 {
                        grid-row: span 3 / span 3
                    }
                }

                @media (min-width: 1024px) {
                    .lg\:col-start-2 {
                        grid-column-start: 2
                    }

                    .lg\:h-16 {
                        height: 4rem
                    }

                    .lg\:max-w-7xl {
                        max-width: 80rem
                    }

                    .lg\:grid-cols-3 {
                        grid-template-columns: repeat(3, minmax(0, 1fr))
                    }

                    .lg\:grid-cols-2 {
                        grid-template-columns: repeat(2, minmax(0, 1fr))
                    }

                    .lg\:flex-col {
                        flex-direction: column
                    }

                    .lg\:items-end {
                        align-items: flex-end
                    }

                    .lg\:justify-center {
                        justify-content: center
                    }

                    .lg\:gap-8 {
                        gap: 2rem
                    }

                    .lg\:p-10 {
                        padding: 2.5rem
                    }

                    .lg\:pb-10 {
                        padding-bottom: 2.5rem
                    }

                    .lg\:pt-0 {
                        padding-top: 0px
                    }

                    .lg\:text-\[\#FF2D20\] {
                        --tw-text-opacity: 1;
                        color: rgb(255 45 32 / var(--tw-text-opacity))
                    }
                }

                @media (prefers-color-scheme: dark) {
                    .dark\:block {
                        display: block
                    }

                    .dark\:hidden {
                        display: none
                    }

                    .dark\:bg-black {
                        --tw-bg-opacity: 1;
                        background-color: rgb(0 0 0 / var(--tw-bg-opacity))
                    }

                    .dark\:bg-zinc-900 {
                        --tw-bg-opacity: 1;
                        background-color: rgb(24 24 27 / var(--tw-bg-opacity))
                    }

                    .dark\:via-zinc-900 {
                        --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                        --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                    }

                    .dark\:to-zinc-900 {
                        --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                    }

                    .dark\:text-white\/50 {
                        color: rgb(255 255 255 / 0.5)
                    }

                    .dark\:text-white {
                        --tw-text-opacity: 1;
                        color: rgb(255 255 255 / var(--tw-text-opacity))
                    }

                    .dark\:text-white\/70 {
                        color: rgb(255 255 255 / 0.7)
                    }

                    .dark\:ring-zinc-800 {
                        --tw-ring-opacity: 1;
                        --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
                    }

                    .dark\:hover\:text-white:hover {
                        --tw-text-opacity: 1;
                        color: rgb(255 255 255 / var(--tw-text-opacity))
                    }

                    .dark\:hover\:text-white\/70:hover {
                        color: rgb(255 255 255 / 0.7)
                    }

                    .dark\:hover\:text-white\/80:hover {
                        color: rgb(255 255 255 / 0.8)
                    }

                    .dark\:hover\:ring-zinc-700:hover {
                        --tw-ring-opacity: 1;
                        --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
                    }

                    .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                        --tw-ring-opacity: 1;
                        --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
                    }

                    .dark\:focus-visible\:ring-white:focus-visible {
                        --tw-ring-opacity: 1;
                        --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
                    }
                }
            </style>
        @endif
    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]"
                src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" />
            <div
                class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 119.49"
                                style="width: 50px; height: auto;">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <path class="cls-1" style="fill: #FF2D20;"
                                    d="M5.48,43.81,61.3,0l56.1,43.81ZM43.12,89.86l.12-20.45H41.17V95.19a37.37,37.37,0,0,1,9.32-1.12,27,27,0,0,1,8.89,1.4,19.14,19.14,0,0,0-6.09-3.31,22.29,22.29,0,0,0-8.81-.94,1.25,1.25,0,0,1-1.36-1.14.81.81,0,0,1,0-.22Zm33.41-25.8a17.13,17.13,0,0,0-8,1,11.76,11.76,0,0,0-5.92,4.63V92.84a29.4,29.4,0,0,1,6.55-3.39,16.74,16.74,0,0,1,7.41-1.13V64.06Zm3,2.83h3.41a1.26,1.26,0,0,1,1.25,1.26V97.07a1.25,1.25,0,0,1-1.25,1.26,1.1,1.1,0,0,1-.41-.07,39,39,0,0,0-10.43-1.69A24.15,24.15,0,0,0,62,98.63a1.38,1.38,0,0,1-1.43,0,24.19,24.19,0,0,0-10.09-2.06,39,39,0,0,0-10.42,1.69,1.14,1.14,0,0,1-.41.07,1.26,1.26,0,0,1-1.25-1.25V68.15a1.27,1.27,0,0,1,1.26-1.26h3.58l0-4.19a1.25,1.25,0,0,1,1-1.22h0a19.9,19.9,0,0,1,10.84.83,13.93,13.93,0,0,1,6.25,4.56,14.54,14.54,0,0,1,6.25-4.36,21.91,21.91,0,0,1,10.83-1,1.26,1.26,0,0,1,1.08,1.24h0v4.19ZM63.79,95.28a26.87,26.87,0,0,1,8.32-1.21,37,37,0,0,1,9.32,1.12V69.41H79.52V90a1.25,1.25,0,0,1-1.25,1.26,1.36,1.36,0,0,1-.29,0,16,16,0,0,0-8,.85,27.88,27.88,0,0,0-6.17,3.23Zm-3.73-2.69V69.69a11.07,11.07,0,0,0-5.84-4.8,15.52,15.52,0,0,0-8-.89l-.14,24.4a21.84,21.84,0,0,1,8,1.14,21.51,21.51,0,0,1,6,3ZM61.44,21a5.68,5.68,0,1,1-5.68,5.68A5.68,5.68,0,0,1,61.44,21Zm0-6.05A11.73,11.73,0,1,1,49.71,26.69,11.73,11.73,0,0,1,61.44,15ZM6.63,103.73h6v-1a3.79,3.79,0,0,1,3.78-3.78V58.19H8.89V49.93h104.8v8.26h-7.48V98.9h0a3.79,3.79,0,0,1,3.78,3.78v1h6.24a2.42,2.42,0,0,1,2.4,2.41v5.53h1.82a2.42,2.42,0,0,1,2.41,2.4v3a2.44,2.44,0,0,1-2.41,2.41H2.41A2.43,2.43,0,0,1,0,117.08v-3a2.41,2.41,0,0,1,2.41-2.4H4.23v-5.53a2.42,2.42,0,0,1,2.41-2.41Zm27.24,0H88.74v-1c0-.15,0-.3,0-.45v0h0a3.79,3.79,0,0,1,3.66-3.28V58.19H30.18V98.9a3.78,3.78,0,0,1,3.69,3.78v1Z" />
                            </svg>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <div id="default-carousel" class="relative w-full mb-10" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://binus.ac.id/wp-content/uploads/2024/12/Artikel-Banner-2-scaled.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://binus.ac.id/wp-content/uploads/2024/11/FA-BU-Medan-Future-Victory-Fest_Webanner-1-scaled.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://binus.ac.id/wp-content/uploads/2024/11/FA-BU-Medan-Future-Victory-Fest_Webanner-1-scaled.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 4 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://binus.ac.id/wp-content/uploads/2024/11/BU-AppliedHE-2024-04.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                                <!-- Item 5 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://binus.ac.id/wp-content/uploads/2024/11/BINUS-QS-WUR-Asia-2025_Web-Banner.jpg"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div
                                class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                    aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                    aria-label="Slide 5" data-carousel-slide-to="4"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button"
                                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-prev>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                data-carousel-next>
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                        <div class="p-6 text-4xl font-bold tracking-tight text-gray-900 dark:text-gray-100">
                            {{ __('Pengumuman') }}
                        </div>

                        <div class="flex overflow-x-auto space-x-4 p-4">
                            @foreach ($pengumuman as $item)
                                <div
                                    class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg object-cover h-48 w-full"
                                            src="{{ asset("storage/images/$item->image") }}" />
                                    </a>
                                    <div class="p-5">
                                        <a href="#" data-modal-target="modal-{{ $item->id }}"
                                            data-modal-toggle="modal-{{ $item->id }}">
                                            <h5
                                                class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                {{ $item->headline }}</h5>
                                        </a>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            {{ $item->subHeadline }}</p>
                                        <a href="#" data-modal-target="modal-{{ $item->id }}"
                                            data-modal-toggle="modal-{{ $item->id }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Read more
                                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div id="modal-{{ $item->id }}" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full h-full max-w-2xl md:h-auto">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-700">
                                                <h3 class="text-xl m-4 font-semibold text-gray-900 dark:text-white">
                                                    {{ $item->headline }}
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="modal-{{ $item->id }}">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <div class="p-6 space-y-6">
                                                <img class="w-full h-48 object-cover rounded"
                                                    src="{{ asset("storage/images/$item->image") }}" />
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    {{ $item->content }}
                                                </p>
                                            </div>
                                            <div class="p-6 space-y-6">
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    Link to Content:
                                                </p>
                                                <a href="{{$item->linkContent}}" class="hover:text-blue">{{$item->headline}}</a>
                                            </div>
                                            <div
                                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-700">
                                                <button data-modal-toggle="modal-{{ $item->id }}" type="button"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </body>

    </html>
