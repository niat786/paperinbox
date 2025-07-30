<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
   
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        
        .scale-hover {
            transition: transform 0.2s ease;
        }
        
        .scale-hover:hover {
            transform: scale(1.05);
        }
        
        .button-hover {
            transition: all 0.3s ease;
        }
        
        .button-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.3);
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: linear-gradient(45deg, #3B82F6, #8B5CF6);
            border-radius: 50%;
            opacity: 0.6;
            animation: particle-float 4s ease-in-out infinite;
        }
        
        @keyframes particle-float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
    </style>
</head>
<body class="min-h-screen bg-white font-inter overflow-hidden relative">
    <div class="particle" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
    <div class="particle" style="top: 60%; left: 85%; animation-delay: 1s;"></div>
    <div class="particle" style="top: 30%; left: 75%; animation-delay: 2s;"></div>
    <div class="particle" style="top: 80%; left: 20%; animation-delay: 3s;"></div>
    
    <div class="min-h-screen flex items-center justify-center px-4 py-8">
        <div class="text-center max-w-2xl mx-auto fade-in">
            <div class="mb-8 lg:mb-12 relative">
                <div class="w-60 h-60 lg:w-80 lg:h-80 mx-auto mb-6 float-animation scale-hover">
                    <img 
                        src="{{ asset('images/robot.jpg') }}"
                        alt="Lost Robot Illustration"
                        class="w-full h-full object-contain"
                    >
                </div>
            </div>
            
            <div class="mb-6 lg:mb-10">
                <h1 class="text-6xl lg:text-8xl font-light text-gray-800 mb-4 tracking-tight">404</h1>
                <h2 class="text-2xl lg:text-4xl font-medium text-gray-700 mb-4">Oops! Page Not Found</h2>
                <p class="text-lg lg:text-xl text-gray-500 max-w-md mx-auto leading-relaxed">
                    Looks like this page took a wrong turn and got lost in cyberspace
                </p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button class="bg-blue-600 text-white px-8 py-4 rounded-xl font-medium text-lg whitespace-nowrap button-hover w-full sm:w-auto min-w-64">
                    <span class="flex items-center justify-center gap-3">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-home-4-line text-lg"></i>
                        </div>
                        Return to Home
                    </span>
                </button>
                
                <button class="border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-xl font-medium text-lg whitespace-nowrap hover:border-blue-600 hover:text-blue-600 transition-colors w-full sm:w-auto min-w-48">
                    <span class="flex items-center justify-center gap-3">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-arrow-left-line text-lg"></i>
                        </div>
                        Go Back
                    </span>
                </button>
            </div>
            
            <div class="mt-12 lg:mt-16">
                <p class="text-sm text-gray-400 mb-4">Need help? Try these popular pages:</p>
                <div class="flex flex-wrap justify-center gap-4 text-sm">
                    <a href="#" class="text-blue-600 hover:text-secondary transition-colors flex items-center gap-2">
                        <div class="w-4 h-4 flex items-center justify-center">
                            <i class="ri-information-line text-sm"></i>
                        </div>
                        About Us
                    </a>
                    <a href="#" class="text-blue-600 hover:text-secondary transition-colors flex items-center gap-2">
                        <div class="w-4 h-4 flex items-center justify-center">
                            <i class="ri-customer-service-line text-sm"></i>
                        </div>
                        Support
                    </a>
                    <a href="#" class="text-blue-600 hover:text-secondary transition-colors flex items-center gap-2">
                        <div class="w-4 h-4 flex items-center justify-center">
                            <i class="ri-mail-line text-sm"></i>
                        </div>
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script id="button-interactions">
        document.addEventListener('DOMContentLoaded', function() {
            const homeButton = document.querySelector('button[class*="bg-blue-600"]');
            const backButton = document.querySelector('button[class*="border-2"]');
            
            homeButton.addEventListener('click', function() {
                window.location.href = '/';
            });
            
            backButton.addEventListener('click', function() {
                window.history.back();
            });
        });
    </script>

    <script id="mouse-interaction">
        document.addEventListener('DOMContentLoaded', function() {
            const particles = document.querySelectorAll('.particle');
            
            document.addEventListener('mousemove', function(e) {
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;
                
                particles.forEach((particle, index) => {
                    const speed = (index + 1) * 0.5;
                    const x = mouseX * 20 * speed;
                    const y = mouseY * 20 * speed;
                    
                    particle.style.transform = `translate(${x}px, ${y}px)`;
                });
            });
        });
    </script>

    <script id="responsive-adjustments">
        document.addEventListener('DOMContentLoaded', function() {
            function adjustForMobile() {
                const isMobile = window.innerWidth < 768;
                const illustration = document.querySelector('img[alt="Lost Robot Illustration"]');
                const container = illustration.parentElement;
                
                if (isMobile) {
                    container.classList.remove('w-80', 'h-80', 'lg:w-96', 'lg:h-96');
                    container.classList.add('w-64', 'h-64');
                } else {
                    container.classList.remove('w-64', 'h-64');
                    container.classList.add('w-80', 'h-80', 'lg:w-96', 'lg:h-96');
                }
            }
            
            adjustForMobile();
            window.addEventListener('resize', adjustForMobile);
        });
    </script>
</body>
</html>