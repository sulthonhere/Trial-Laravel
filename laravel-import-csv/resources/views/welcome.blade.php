<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel API Client</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        /*! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.-mt-px{margin-top:-1px}.flex{display:flex}.grid{display:grid}.min-h-screen{min-height:100vh}.max-w-xl{max-width:36rem}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.rounded-lg{border-radius:0.5rem}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.bg-center{background-position:center}.p-6{padding:1.5rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000}}.form-input{width: 100%; border-radius: 0.5rem; border: 1px solid #e5e7eb; padding: 0.5rem 0.75rem; margin-top: 0.5rem;}.form-button{width: 100%; padding: 0.75rem; background-color: #ef4444; color: white; font-weight: 600; border-radius: 0.5rem; margin-top: 1.5rem; transition-property:all; transition-duration:150ms;}.form-button:hover{background-color: #dc2626}.tab-button{padding: 0.5rem 1rem; font-weight: 600; cursor: pointer; border-bottom: 2px solid transparent; color: #6b7280;}.tab-button.active{color: #ef4444; border-bottom-color: #ef4444;}
    </style>
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        
        <div class="max-w-xl w-full mx-auto p-6 lg:p-8">

            <div id="auth-section" class="scale-100 p-6 bg-white dark:bg-gray-800/50 rounded-lg shadow-2xl">
                <div class="flex border-b border-gray-200 dark:border-gray-700">
                    <button id="show-login-btn" class="tab-button active">Login</button>
                    <button id="show-register-btn" class="tab-button">Register</button>
                </div>

                <form id="login-form" class="mt-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Login to Your Account</h2>
                    <div>
                        <label for="login-email" class="text-gray-500 dark:text-gray-400 text-sm">Email</label>
                        <input type="email" id="login-email" class="form-input" required>
                    </div>
                    <div class="mt-4">
                        <label for="login-password" class="text-gray-500 dark:text-gray-400 text-sm">Password</label>
                        <input type="password" id="login-password" class="form-input" required>
                    </div>
                    <button type="submit" class="form-button">Login</button>
                </form>

                <form id="register-form" class="mt-6" style="display: none;">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Create a New Account</h2>
                    <div>
                        <label for="register-name" class="text-gray-500 dark:text-gray-400 text-sm">Name</label>
                        <input type="text" id="register-name" class="form-input" required>
                    </div>
                    <div class="mt-4">
                        <label for="register-email" class="text-gray-500 dark:text-gray-400 text-sm">Email</label>
                        <input type="email" id="register-email" class="form-input" required>
                    </div>
                    <div class="mt-4">
                        <label for="register-password" class="text-gray-500 dark:text-gray-400 text-sm">Password</label>
                        <input type="password" id="register-password" class="form-input" required>
                    </div>
                    <div class="mt-4">
                        <label for="register-password-confirm" class="text-gray-500 dark:text-gray-400 text-sm">Confirm Password</label>
                        <input type="password" id="register-password-confirm" class="form-input" required>
                    </div>
                    <button type="submit" class="form-button">Register</button>
                </form>
            </div>

            <div id="user-section" class="scale-100 p-6 bg-white dark:bg-gray-800/50 rounded-lg shadow-2xl" style="display: none;">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Welcome!</h2>
                <div class="mt-4">
                    <p class="text-gray-500 dark:text-gray-400 text-sm">You are logged in.</p>
                    <button id="get-user-data-btn" class="form-button" style="width: auto; padding: 0.5rem 1rem; margin-top: 1rem;">Get My Data</button>
                    <button id="logout-btn" class="form-button" style="width: auto; padding: 0.5rem 1rem; margin-top: 1rem; background-color: #6b7280;">Logout</button>
                </div>
            </div>

            <div id="status-message" class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400"></div>

            <pre id="api-result" class="mt-6 p-4 bg-gray-900 text-white rounded-lg text-sm" style="display: none;"></pre>

        </div>
    </div>

    <script>
        // Konfigurasi dasar
        const API_URL = 'http://localhost:8000/api/auth';
        const API_URL_LOGIN_AND_REGISTER = 'http://localhost:8000/api';

        // Elemen-elemen DOM
        const authSection = document.getElementById('auth-section');
        const userSection = document.getElementById('user-section');
        const statusMessage = document.getElementById('status-message');
        const apiResult = document.getElementById('api-result');
        
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const showLoginBtn = document.getElementById('show-login-btn');
        const showRegisterBtn = document.getElementById('show-register-btn');

        const logoutBtn = document.getElementById('logout-btn');
        const getUserDataBtn = document.getElementById('get-user-data-btn');

        // Fungsi untuk menampilkan form login/register
        showLoginBtn.addEventListener('click', () => {
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
            showLoginBtn.classList.add('active');
            showRegisterBtn.classList.remove('active');
        });

        showRegisterBtn.addEventListener('click', () => {
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
            showRegisterBtn.classList.add('active');
            showLoginBtn.classList.remove('active');
        });

        // Handler untuk form
        registerForm.addEventListener('submit', handleRegister);
        loginForm.addEventListener('submit', handleLogin);
        logoutBtn.addEventListener('click', handleLogout);
        getUserDataBtn.addEventListener('click', handleGetUserData);

        // Fungsi untuk menangani registrasi
        async function handleRegister(event) {
            event.preventDefault();
            const name = document.getElementById('register-name').value;
            const email = document.getElementById('register-email').value;
            const password = document.getElementById('register-password').value;
            const password_confirmation = document.getElementById('register-password-confirm').value;

            if (password !== password_confirmation) {
                setStatus('Passwords do not match!', true);
                return;
            }

            try {
                const response = await fetch(`${API_URL_LOGIN_AND_REGISTER}/register`, {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json', 'Accept': 'application/json'},
                    body: JSON.stringify({ name, email, password, password_confirmation })
                });
                const data = await response.json();
                if (!response.ok) throw data;

                setStatus(`Register successful for ${data.user.name}! Please login.`);
                registerForm.reset(); // <-- TAMBAHKAN BARIS INI

                showLoginBtn.click(); // Pindah ke tab login setelah sukses register
            } catch (error) {
                setStatus(`Register failed: ${JSON.stringify(error)}`, true);
            }
        }

        // Fungsi untuk menangani login
        async function handleLogin(event) {
            event.preventDefault();
            const email = document.getElementById('login-email').value;
            const password = document.getElementById('login-password').value;

            try {
                const response = await fetch(`${API_URL_LOGIN_AND_REGISTER}/login`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json', 
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ email, password })
                });
                const data = await response.json();
                if (!response.ok) throw data;

                // Simpan token ke Local Storage
                localStorage.setItem('access_token', data.access_token);
                setStatus('Login successful!');
                
                loginForm.reset(); // <-- TAMBAHKAN BARIS INI
                updateUI();
            } catch (error) {
                setStatus(`Login failed: ${error.error || JSON.stringify(error)}`, true);
            }
        }

        // Fungsi untuk menangani logout
        async function handleLogout() {
            const token = localStorage.getItem('access_token');
            if (!token) return;

            try {
                const response = await fetch(`${API_URL}/logout`, {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Accept': 'application/json'
                    }
                });
                const data = await response.json();
                if (!response.ok) throw data;
                
                setStatus(data.message);
            } catch (error) {
                setStatus(`Logout failed: ${JSON.stringify(error)}`, true);
            } finally {
                // Selalu hapus token dan update UI, bahkan jika logout dari server gagal
                localStorage.removeItem('access_token');
                updateUI();
            }
        }

        // Fungsi untuk mengambil data pengguna
        async function handleGetUserData() {
            const token = localStorage.getItem('access_token');
            if (!token) {
                setStatus('You are not logged in.', true);
                return;
            }

            try {
                const response = await fetch(`${API_URL}/me`, {
                    method: 'GET',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Accept': 'application/json'
                    }
                });
                const data = await response.json();
                if (!response.ok) throw data;

                apiResult.textContent = JSON.stringify(data, null, 2);
                apiResult.style.display = 'block';
                setStatus('User data fetched successfully.');
            } catch (error) {
                setStatus(`Failed to fetch data: ${error.message || JSON.stringify(error)}`, true);
                apiResult.style.display = 'none';
            }
        }

        // Fungsi untuk mengatur pesan status
        function setStatus(message, isError = false) {
            statusMessage.textContent = message;
            statusMessage.style.color = isError ? '#ef4444' : '#10b981';
        }

        // Fungsi untuk memperbarui UI berdasarkan status login
        function updateUI() {
            const token = localStorage.getItem('access_token');
            if (token) {
                authSection.style.display = 'none';
                userSection.style.display = 'block';
            } else {
                authSection.style.display = 'block';
                userSection.style.display = 'none';
                apiResult.style.display = 'none'; // Sembunyikan hasil API jika logout
            }
        }

        // Inisialisasi UI saat halaman dimuat
        document.addEventListener('DOMContentLoaded', updateUI);

    </script>
</body>
</html>