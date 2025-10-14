<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | AbacusDesk AI-SEO</title>
  
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17651218884"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17651218884');
</script>

    <style>
        .mauticform-page-wrapper {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        /* Custom styles for the glassmorphism design and color palette */
        :root {
            --primary-color: #ef9b11;
            --secondary-color: #343a40;
            --background-color: #f8f9fa; /* Slightly brighter background */
            --text-color: #212529;
            --subtle-text-color: #495057;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            position: relative;
            overflow-x: hidden;
        }

        /* Decorative background blobs for glassmorphism effect */
        .blob1 {
            position: absolute;
            width: 450px;
            height: 450px;
            background: linear-gradient(180deg, rgba(239, 155, 17, 0.3) 0%, rgba(239, 155, 17, 0.05) 100%);
            border-radius: 50%;
            top: -200px;
            left: -200px;
            filter: blur(120px);
            z-index: 0;
            animation: moveBlob1 25s infinite alternate ease-in-out;
        }

        .blob2 {
            position: absolute;
            width: 550px;
            height: 550px;
            background: linear-gradient(180deg, rgba(52, 58, 64, 0.15) 0%, rgba(52, 58, 64, 0.03) 100%);
            border-radius: 50%;
            bottom: 5%;
            right: -250px;
            filter: blur(140px);
            z-index: 0;
            animation: moveBlob2 30s infinite alternate ease-in-out;
        }
        
        main, header, footer {
            position: relative;
            z-index: 1;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.05); /* Softer shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-6px); /* More subtle hover */
            box-shadow: 0 8px 30px 0 rgba(0, 0, 0, 0.08);
        }
        
        .glass-button {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: all 0.2s ease-in-out;
        }
        
        .glass-button:hover {
             background: rgba(255, 255, 255, 0.5);
             box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        
        .primary-button {
            background-color: var(--primary-color);
            color: white;
            box-shadow: 0 6px 20px rgba(239, 155, 17, 0.25); /* Refined shadow */
            transition: all 0.3s ease;
        }

        .primary-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(239, 155, 17, 0.3);
        }
        
        .section-title {
            color: var(--secondary-color);
        }
        
        .primary-text {
            color: var(--primary-color);
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        /* Animation Base Styles */
        .fade-in-section, .animate-item {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in-section.is-visible, .animate-item.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Keyframes for animations */
        @keyframes moveBlob1 {
            from { transform: translate(-20px, -20px) scale(1); }
            to { transform: translate(20px, 30px) scale(1.1); }
        }

        @keyframes moveBlob2 {
            from { transform: translate(10px, -20px) scale(1); }
            to { transform: translate(-30px, 20px) scale(1.2); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .anim-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .anim-slide-in-up {
            animation: slideInUp 0.8s ease-out forwards;
        }
    </style>
    <style>
        .thankYou {
            padding: 150px 0px 50px;
        }
    .thankYou .container {
      max-width: 700px;
      background: #fff;
      padding: 40px 30px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      text-align: center;
    }
    .thankYou h1 {
      color: #1a1a1a;
      font-size: 2.4em;
      margin-bottom: 20px;
    }
    .thankYou p {
      font-size: 1.1em;
      margin-bottom: 30px;
    }
    .thankYou .btn {
      display: inline-block;
      background-color: #ef9b11;
      color: #fff;
      text-decoration: none;
      padding: 14px 28px;
      font-size: 1.1em;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    .thankYou .btn:hover {
      background-color: #005bb5;
    }
    .thankYou .footer {
      margin-top: 40px;
      font-size: 0.9em;
      color: #777;
    }
  </style>

  <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1359563964997371');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1359563964997371&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>
<body>


    <!-- <div class="blob1"></div>
    <div class="blob2"></div> -->

    <!-- Header -->
    <header id="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-6 py-4">
             <div class="flex items-center justify-between p-3 rounded-2xl">
                <a href="https://www.abacusdesk.com/ai-seo" target="_blank">
                    <img src="https://www.abacusdesk.com/wp-content/uploads/2021/09/abacusdesk-logo.svg" alt="AbacusDesk Logo" class="h-8 md:h-10">
                </a>
                <a href="https://www.abacusdesk.com/ai-seo#lead-capture" class="primary-button font-bold py-2 px-4 md:py-3 md:px-6 text-sm md:text-base rounded-lg">
                    Get Free AI-SEO Audit
                </a>
            </div>
        </div>
    </header>

    <section class="thankYou">
        <div class="container">
            <h1>Thank You!</h1>
            <p>Your request has been received. We appreciate your interest in AbacusDesk AI-SEO. <br>
            One of our experts will reach out to you shortly with your free audit and next steps.</p>
            <a href="https://abacusdesk.com/ai-seo/" class="btn">Return to AI-SEO</a>

        </div>
    </section>



    <!-- Footer -->
    <footer class="py-8">
        <div class="container mx-auto px-6 text-center text-gray-500">
            <p>&copy; 2024 AbacusDesk. All Rights Reserved.</p>
        </div>
    </footer>
    
    <!-- Alpine.js for FAQ toggle -->
     <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    

    <!-- JS for scroll animations & header -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll-triggered animations
            const animatedItems = document.querySelectorAll('.fade-in-section, .animate-item');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            animatedItems.forEach(item => {
                observer.observe(item);
            });

            // Header scroll effect
            const header = document.getElementById('header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        });
    </script>


<script>
document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("mauticform_abacusdeskaiseoform");
  const submitBtn = document.getElementById("mauticform_input_abacusdeskaiseoform_submit");

  if (form && submitBtn) {
    form.addEventListener("submit", function() {
      // Disable the button and show loading state
      submitBtn.disabled = true;
      submitBtn.innerText = "Submitting...";
      submitBtn.classList.add("opacity-70", "cursor-not-allowed");
    });

    // Triggered when Mautic submission succeeds
    document.addEventListener("mauticformSubmitSuccess", function(event) {
      if (event.detail && event.detail.formId == 24) {
        submitBtn.innerText = "Submitted ✅";
        submitBtn.classList.add("bg-green-500");
        // ✅ Let Mautic handle the redirection automatically
        // (no need to use window.location.href)
      }
    });

    // Triggered when Mautic submission fails (validation or network)
    document.addEventListener("mauticformSubmitError", function(event) {
      if (event.detail && event.detail.formId == 24) {
        submitBtn.disabled = false;
        submitBtn.innerText = "Book My Free Audit";
        submitBtn.classList.remove("opacity-70", "cursor-not-allowed", "bg-green-500");
      }
    });
  }
});
</script>

  <script>
    // Set current year
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>
</body>
</html>
