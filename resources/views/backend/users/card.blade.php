<html>
    <head>
        <title>Tourist Card</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    </head>
    <body>
    
        <div style="width:350px;
                    padding:20px;
                    border-radius:15px;
                    box-shadow:0 8px 20px rgba(0,0,0,0.1);
                    background:linear-gradient(145deg, #ffffff, #f0f4ff);
                    text-align:center;
                    font-family: 'Arial', sans-serif;
                    margin:auto;">
            
            {{-- User Profile Image --}}
            <div style="width:120px; height:120px; margin:0 auto 15px; overflow:hidden; border-radius:50%; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
                <img src="{{ asset($user->userimage) }}" 
                     alt="{{ $user->firstusername }}" 
                     style="width:100%; height:100%; object-fit:cover;">
            </div>
        
            {{-- User Name --}}
            <h2 style="margin:0 0 10px; font-size:24px; color:#333;">{{ $user->firstusername }}</h2>
        
            {{-- User Contact --}}
            <p style="margin:0 0 15px; font-size:16px; color:#555;">Contact: {{ $user->mobile }}</p>
        
            {{-- Optional: Add a button / action --}}
            <a href="tel:{{ $user->mobile }}"
               style="display:inline-block;
                      padding:10px 25px;
                      background:#4c8bf5;
                      color:white;
                      border-radius:8px;
                      text-decoration:none;
                      font-weight:bold;
                      box-shadow:0 4px 8px rgba(0,0,0,0.1);
                      transition:0.3s;">
                Call User
            </a>
        <button class="btn btn-info d-print-none" onclick="window.print()">download</button>
        </div>

    </body>
</html>
