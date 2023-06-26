<!DOCTYPE html>
<html lang="en">

@include('partials.head', ['pageTitle' => isset($pageTitle) ? $pageTitle : 'Laravel Test'])

<body>
    @include('partials.header')
    <main>
        @yield('main')
    </main>

    @yield('script')
</body>

</html>
