<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'SIDIA - Sistem Informasi Diklat')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-fixed": "#191c1e",
                        "outline-variant": "#c3c6d7",
                        "on-surface": "#0b1c30",
                        "surface-dim": "#cbdbf5",
                        "tertiary-container": "#6b6e70",
                        "surface": "#f8f9ff",
                        "surface-bright": "#f8f9ff",
                        "primary": "#004ac6",
                        "tertiary-fixed": "#e0e3e5",
                        "error": "#ba1a1a",
                        "primary-fixed": "#dbe1ff",
                        "on-secondary-container": "#fffbff",
                        "surface-variant": "#d3e4fe",
                        "on-surface-variant": "#434655",
                        "surface-container-highest": "#d3e4fe",
                        "inverse-primary": "#b4c5ff",
                        "on-tertiary-container": "#eff1f3",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#eeefff",
                        "on-primary-fixed": "#00174b",
                        "inverse-surface": "#213145",
                        "primary-container": "#2563eb",
                        "background": "#f8f9ff",
                        "secondary-fixed": "#ffdada",
                        "on-error": "#ffffff",
                        "secondary-container": "#e21e49",
                        "outline": "#737686",
                        "on-secondary-fixed": "#40000c",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#ffb3b6",
                        "tertiary-fixed-dim": "#c4c7c9",
                        "surface-tint": "#0053db",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#dce9ff",
                        "tertiary": "#525657",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "secondary": "#ba0035",
                        "surface-container-low": "#eff4ff",
                        "on-primary-fixed-variant": "#003ea8",
                        "on-secondary-fixed-variant": "#920028",
                        "on-tertiary-fixed-variant": "#444749",
                        "surface-container": "#e5eeff",
                        "error-container": "#ffdad6",
                        "on-background": "#0b1c30",
                        "inverse-on-surface": "#eaf1ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max": "1280px",
                        "gutter": "24px",
                        "base": "8px",
                        "sm": "12px",
                        "xl": "80px",
                        "md": "24px",
                        "lg": "48px",
                        "xs": "4px"
                    },
                    "fontFamily": {
                        "body-lg": ["Public Sans"],
                        "button": ["Public Sans"],
                        "label-sm": ["Public Sans"],
                        "h3": ["Public Sans"],
                        "h2": ["Public Sans"],
                        "body-md": ["Public Sans"],
                        "h1": ["Public Sans"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "button": ["16px", {"lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600"}],
                        "label-sm": ["14px", {"lineHeight": "1.4", "letterSpacing": "0.02em", "fontWeight": "500"}],
                        "h3": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}],
                        "h2": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "h1": ["40px", {"lineHeight": "1.2", "fontWeight": "700"}]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        body {
            font-family: 'Public Sans', sans-serif;
            background-color: #f8f9ff;
        }
    </style>
</head>
<body class="text-on-surface">

    <!-- Memanggil Header -->
    @include('partials.header')

    <main class="w-full">
        <!-- Bagian Content (Body) -->
        @yield('content')
    </main>

    <!-- Memanggil Footer -->
    @include('partials.footer')

</body>
</html>
