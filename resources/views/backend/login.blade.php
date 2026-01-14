<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login - Wing Tourism</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body class="text-gray-200">

  <canvas id="background-canvas"></canvas>

  <main class="min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md p-8 space-y-6 rounded-2xl shadow-2xl glass-card">

      <div class="text-center">
        <h1 class="text-3xl font-bold text-white tracking-tight">Digital Highway</h1>
        <p class="mt-2 text-gray-400">Admin Control Panel</p>
      </div>

      <form id="login-form" class="space-y-6" action="{{ route('admin.signin') }}" method="post">
        @csrf
        <div>
          <label for="email" class="sr-only">Username</label>
          <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.095a1.23 1.23 0 00.41-1.412A9.992 9.992 0 0010 12a9.992 9.992 0 00-6.535 2.493z" />
              </svg>
            </div>
            <input id="email" name="email" type="text" autocomplete="email" class="form-input block w-full rounded-lg border-0 bg-white/5 py-3 pl-10 text-white ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-cyan-500 sm:text-sm sm:leading-6 transition duration-300" placeholder="admin@mail.com">
          </div>
        </div>
        <div>
          <label for="password" class="sr-only">Password</label>
          <div class="relative">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
              </svg>
            </div>
            <input id="password" name="password" type="password" autocomplete="current-password" class="form-input block w-full rounded-lg border-0 bg-white/5 py-3 pl-10 text-white ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-cyan-500 sm:text-sm sm:leading-6 transition duration-300" placeholder="Enter your password">
          </div>
        </div>
        <div class="flex items-center justify-between text-sm">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-gray-700 text-cyan-600 focus:ring-cyan-500">
            <label for="remember-me" class="ml-2 block text-gray-400">Remember Me</label>
          </div>
        </div>

        <div>
          <button id="login-button" type="submit" class="w-full flex justify-center rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-cyan-500/20 hover:from-cyan-600 hover:to-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-500 transition-all duration-300 transform hover:scale-105">
            Login
          </button>
        </div>
      </form>
      <div id="status-message" class="text-center p-3 rounded-lg">
        <p id="status-text"></p>
      </div>
    </div>
  </main>
  



<script src="{{ asset('assets/js/login.js') }}"></script>
</body>

</html>