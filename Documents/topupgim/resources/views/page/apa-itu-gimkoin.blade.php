@extends('layouts.app')

@section('title', 'Apa itu Gimkoin? - Topupgim - TopUpGim')

@push('scripts')
<script type="text/javascript">
            const simulationControl = document.getElementById("simulation-control");
            const toggleSimulationControl = document.getElementById("toggle-simulation-control");
            const fabHome = document.getElementById("circularMenu");
            const mbClose = document.getElementById("m-banner-close");
            const lastFabHomeShown = localStorage.getItem("last_fab_home_shown");
            const currentTime = new Date().getTime();
            const diffTime = currentTime - (parseInt(lastFabHomeShown) || 0);
            if (fabHome && (!lastFabHomeShown || diffTime > 24 * 60 * 60 * 1000)) {
                setTimeout(() => {
                    fabHome.classList.add("active");
                }, 15000);
            }
            toggleSimulationControl?.addEventListener("click", () => {
                simulationControl?.classList?.remove("d-none");
                toggleSimulationControl?.classList?.add("d-none");
            });
            fabHome?.addEventListener("click", () => {
                if (fabHome.classList.contains('active')) {
                    localStorage.setItem("last_fab_home_shown", new Date().getTime());
                }
                fabHome.classList.toggle('active');
            });
            mbClose?.addEventListener("click", function () {
                this.parentNode.remove();
                fabHome.classList.remove("mb-7");
                fabHome.classList.add("mb-5");
            });
        </script>
@endpush

@section('content')
        <!-- Main Container -->
        <main id="main-container" class="bg-body-light">
            <!-- Page Content -->
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <h2 class="text-center mb-5">Apa itu Gimkoin?</h2>
                        <div class="static-page pb-5">
                            <div class="raw-html-embed">
            <style>
                /* Gimkoin Page Styles */
                @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap');
                .gimkoin-page {
                    font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
                    background: linear-gradient(180deg, #f0f7ff 0%, #ffffff 100%);
                    color: #1e293b;
                    line-height: 1.6;
                    min-height: 100vh;
                }
                .gimkoin-page * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }
                /* Variables */
                .gimkoin-page {
                    --primary: #1e5bb5;
                    --primary-dark: #164a94;
                    --primary-light: #e8f1fc;
                    --secondary: #f97316;
                    --secondary-light: #fff4ed;
                    --accent: #fbbf24;
                    --success: #22c55e;
                    --bg-white: #ffffff;
                    --bg-light: #f8fafc;
                    --text-dark: #1e293b;
                    --text-muted: #64748b;
                    --border: #e2e8f0;
                    --shadow: 0 4px 20px rgba(30, 91, 181, 0.08);
                    --shadow-hover: 0 8px 30px rgba(30, 91, 181, 0.15);
                }
                .gk-container {
                    max-width: 1100px;
                    margin: 0 auto;
                    padding: 0 20px;
                }
                /* Hero Section */
                .gk-hero {
                    padding: 50px 20px 60px;
                    text-align: center;
                    position: relative;
                    overflow: hidden;
                }
                .gk-hero::before {
                    content: '';
                    position: absolute;
                    top: -100px;
                    right: -100px;
                    width: 300px;
                    height: 300px;
                    background: radial-gradient(circle, rgba(30, 91, 181, 0.08) 0%, transparent 70%);
                    border-radius: 50%;
                }
                .gk-hero::after {
                    content: '';
                    position: absolute;
                    bottom: -50px;
                    left: -50px;
                    width: 200px;
                    height: 200px;
                    background: radial-gradient(circle, rgba(249, 115, 22, 0.08) 0%, transparent 70%);
                    border-radius: 50%;
                }
                .gk-coin-wrapper {
                    position: relative;
                    display: inline-block;
                    margin-bottom: 30px;
                }
                .gk-coin {
                    width: 140px;
                    height: 140px;
                    background: linear-gradient(145deg, #fbbf24 0%, #f59e0b 50%, #d97706 100%);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 56px;
                    font-weight: 800;
                    color: #7c2d12;
                    box-shadow: 
                        0 8px 30px rgba(249, 115, 22, 0.35),
                        inset 0 -6px 15px rgba(0,0,0,0.15),
                        inset 0 6px 15px rgba(255,255,255,0.4);
                    animation: gkCoinFloat 3s ease-in-out infinite;
                    position: relative;
                }
                .gk-coin::before {
                    content: '';
                    position: absolute;
                    top: 12%;
                    left: 12%;
                    width: 76%;
                    height: 76%;
                    border: 3px solid rgba(124, 45, 18, 0.25);
                    border-radius: 50%;
                }
                @keyframes gkCoinFloat {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(-12px); }
                }
                .gk-sparkles {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    top: 0;
                    left: 0;
                    pointer-events: none;
                }
                .gk-sparkle {
                    position: absolute;
                    width: 16px;
                    height: 16px;
                    background: #fbbf24;
                    clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);
                }
                .gk-sparkle:nth-child(1) { top: -10px; left: 50%; animation: gkSparkle 2s ease-in-out infinite 0s; }
                .gk-sparkle:nth-child(2) { top: 50%; right: -15px; animation: gkSparkle 2s ease-in-out infinite 0.4s; }
                .gk-sparkle:nth-child(3) { bottom: -10px; left: 30%; animation: gkSparkle 2s ease-in-out infinite 0.8s; }
                .gk-sparkle:nth-child(4) { top: 20%; left: -15px; animation: gkSparkle 2s ease-in-out infinite 1.2s; }
                @keyframes gkSparkle {
                    0%, 100% { opacity: 0; transform: scale(0.5); }
                    50% { opacity: 1; transform: scale(1); }
                }
                .gk-hero h1 {
                    font-size: clamp(28px, 5vw, 42px);
                    font-weight: 800;
                    color: var(--primary);
                    margin-bottom: 16px;
                    position: relative;
                }
                .gk-hero-subtitle {
                    font-size: 16px;
                    color: var(--text-muted);
                    max-width: 500px;
                    margin: 0 auto 30px;
                    line-height: 1.7;
                }
                .gk-cta-btn {
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    padding: 14px 32px;
                    background: linear-gradient(135deg, var(--secondary) 0%, #ea580c 100%);
                    color: white;
                    font-weight: 700;
                    font-size: 15px;
                    border: none;
                    border-radius: 50px;
                    cursor: pointer;
                    text-decoration: none;
                    transition: all 0.3s ease;
                    box-shadow: 0 4px 15px rgba(249, 115, 22, 0.35);
                }
                .gk-cta-btn:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 6px 25px rgba(249, 115, 22, 0.45);
                }
                .gk-cta-btn svg {
                    width: 18px;
                    height: 18px;
                }
                /* Section Styles */
                .gk-section {
                    padding: 50px 0;
                }
                .gk-section-header {
                    text-align: center;
                    margin-bottom: 40px;
                }
                .gk-section-tag {
                    display: inline-block;
                    padding: 6px 16px;
                    background: var(--primary-light);
                    border-radius: 50px;
                    font-size: 12px;
                    font-weight: 700;
                    color: var(--primary);
                    margin-bottom: 14px;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                }
                .gk-section-title {
                    font-size: clamp(22px, 4vw, 30px);
                    font-weight: 800;
                    color: var(--text-dark);
                    margin-bottom: 10px;
                }
                .gk-section-desc {
                    color: var(--text-muted);
                    font-size: 15px;
                    max-width: 500px;
                    margin: 0 auto;
                }
                /* Benefits Section */
                .gk-benefits {
                    background: var(--bg-white);
                    border-radius: 24px;
                    padding: 40px 20px;
                    margin: 0 20px;
                    box-shadow: var(--shadow);
                }
                .gk-benefits-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                    gap: 20px;
                    max-width: 900px;
                    margin: 0 auto;
                }
                .gk-benefit-card {
                    background: var(--bg-light);
                    border-radius: 16px;
                    padding: 28px 20px;
                    text-align: center;
                    border: 1px solid var(--border);
                    transition: all 0.3s ease;
                }
                .gk-benefit-card:hover {
                    transform: translateY(-5px);
                    box-shadow: var(--shadow-hover);
                    border-color: var(--primary);
                }
                .gk-benefit-icon {
                    width: 64px;
                    height: 64px;
                    margin: 0 auto 18px;
                    background: var(--primary-light);
                    border-radius: 16px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .gk-benefit-icon svg {
                    width: 32px;
                    height: 32px;
                    color: var(--primary);
                }
                .gk-benefit-card h3 {
                    font-size: 16px;
                    font-weight: 700;
                    margin-bottom: 8px;
                    color: var(--text-dark);
                }
                .gk-benefit-card p {
                    color: var(--text-muted);
                    font-size: 13px;
                    line-height: 1.6;
                }
                /* How to Get Section */
                .gk-steps-section {
                    padding: 50px 20px;
                }
                .gk-steps-container {
                    max-width: 800px;
                    margin: 0 auto;
                }
                .gk-step {
                    display: flex;
                    gap: 20px;
                    align-items: flex-start;
                    margin-bottom: 30px;
                    position: relative;
                    background: var(--bg-white);
                    border-radius: 16px;
                    padding: 24px;
                    border: 1px solid var(--border);
                    box-shadow: var(--shadow);
                    transition: all 0.3s ease;
                }
                .gk-step:hover {
                    transform: translateX(5px);
                    border-color: var(--primary);
                }
                .gk-step:last-child {
                    margin-bottom: 0;
                }
                .gk-step-number {
                    flex-shrink: 0;
                    width: 50px;
                    height: 50px;
                    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
                    border-radius: 14px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 20px;
                    font-weight: 800;
                    color: white;
                    box-shadow: 0 4px 15px rgba(30, 91, 181, 0.3);
                }
                .gk-step-content {
                    flex: 1;
                }
                .gk-step-content h3 {
                    font-size: 17px;
                    font-weight: 700;
                    margin-bottom: 6px;
                    color: var(--text-dark);
                }
                .gk-step-content p {
                    color: var(--text-muted);
                    font-size: 14px;
                    line-height: 1.6;
                }
                .gk-step-icon {
                    flex-shrink: 0;
                    width: 48px;
                    height: 48px;
                    background: var(--secondary-light);
                    border-radius: 12px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .gk-step-icon svg {
                    width: 24px;
                    height: 24px;
                    color: var(--secondary);
                }
                /* How to Use Section */
                .gk-use-section {
                    background: var(--bg-white);
                    border-radius: 24px;
                    padding: 40px 20px;
                    margin: 0 20px;
                    box-shadow: var(--shadow);
                }
                .gk-use-wrapper {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 40px;
                    align-items: center;
                    max-width: 900px;
                    margin: 0 auto;
                }
                .gk-use-content h2 {
                    font-size: 24px;
                    font-weight: 800;
                    margin-bottom: 20px;
                    color: var(--text-dark);
                }
                .gk-use-list {
                    list-style: none;
                }
                .gk-use-list li {
                    display: flex;
                    align-items: flex-start;
                    gap: 14px;
                    margin-bottom: 16px;
                    padding: 16px;
                    background: var(--bg-light);
                    border-radius: 12px;
                    border: 1px solid var(--border);
                    transition: all 0.3s ease;
                }
                .gk-use-list li:hover {
                    border-color: var(--primary);
                    background: var(--primary-light);
                }
                .gk-use-num {
                    flex-shrink: 0;
                    width: 28px;
                    height: 28px;
                    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
                    border-radius: 8px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 700;
                    font-size: 13px;
                    color: white;
                }
                .gk-use-text {
                    font-size: 14px;
                    color: var(--text-muted);
                    padding-top: 3px;
                }
                .gk-use-text strong {
                    color: var(--secondary);
                }
                /* Phone Mockup */
                .gk-phone-mockup {
                    display: flex;
                    justify-content: center;
                }
                .gk-phone {
                    width: 200px;
                    height: 380px;
                    background: linear-gradient(145deg, #f1f5f9 0%, #e2e8f0 100%);
                    border-radius: 28px;
                    padding: 10px;
                    box-shadow: 
                        0 20px 50px rgba(0,0,0,0.15),
                        inset 0 1px 0 rgba(255,255,255,0.8);
                }
                .gk-phone-screen {
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(180deg, #f8fafc 0%, #ffffff 100%);
                    border-radius: 20px;
                    overflow: hidden;
                    display: flex;
                    flex-direction: column;
                }
                .gk-phone-header {
                    padding: 14px;
                    background: var(--primary);
                    text-align: center;
                    font-size: 11px;
                    font-weight: 600;
                    color: white;
                }
                .gk-phone-content {
                    flex: 1;
                    padding: 14px;
                    display: flex;
                    flex-direction: column;
                    gap: 12px;
                }
                .gk-phone-balance {
                    background: linear-gradient(145deg, #fbbf24 0%, #f59e0b 100%);
                    border-radius: 12px;
                    padding: 16px;
                    text-align: center;
                    box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
                }
                .gk-phone-balance-label {
                    font-size: 10px;
                    color: rgba(124, 45, 18, 0.7);
                    margin-bottom: 4px;
                }
                .gk-phone-balance-value {
                    font-size: 26px;
                    font-weight: 800;
                    color: #7c2d12;
                }
                .gk-phone-payment {
                    background: var(--primary-light);
                    border: 2px solid var(--primary);
                    border-radius: 12px;
                    padding: 12px;
                    display: flex;
                    align-items: center;
                    gap: 10px;
                }
                .gk-phone-payment-icon {
                    width: 32px;
                    height: 32px;
                    background: linear-gradient(145deg, #fbbf24 0%, #f59e0b 100%);
                    border-radius: 8px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-weight: 800;
                    font-size: 14px;
                    color: #7c2d12;
                }
                .gk-phone-payment-text {
                    font-size: 11px;
                    font-weight: 600;
                    color: var(--text-dark);
                }
                .gk-phone-check {
                    margin-left: auto;
                    width: 22px;
                    height: 22px;
                    background: var(--success);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .gk-phone-check svg {
                    width: 12px;
                    height: 12px;
                    color: white;
                }
                /* FAQ Section */
                .gk-faq-section {
                    padding: 50px 20px;
                }
                .gk-faq-container {
                    max-width: 700px;
                    margin: 0 auto;
                }
                .gk-faq-item {
                    background: var(--bg-white);
                    border-radius: 14px;
                    margin-bottom: 12px;
                    border: 1px solid var(--border);
                    overflow: hidden;
                    transition: all 0.3s ease;
                    box-shadow: var(--shadow);
                }
                .gk-faq-item:hover {
                    border-color: var(--primary);
                }
                .gk-faq-question {
                    width: 100%;
                    padding: 18px 20px;
                    background: transparent;
                    border: none;
                    color: var(--text-dark);
                    font-family: 'Plus Jakarta Sans', sans-serif;
                    font-size: 15px;
                    font-weight: 600;
                    text-align: left;
                    cursor: pointer;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    gap: 14px;
                }
                .gk-faq-question svg {
                    flex-shrink: 0;
                    width: 20px;
                    height: 20px;
                    color: var(--primary);
                    transition: transform 0.3s ease;
                }
                .gk-faq-item.active .gk-faq-question svg {
                    transform: rotate(180deg);
                }
                .gk-faq-answer {
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 0.3s ease;
                }
                .gk-faq-item.active .gk-faq-answer {
                    max-height: 200px;
                }
                .gk-faq-answer-content {
                    padding: 0 20px 18px;
                    color: var(--text-muted);
                    font-size: 14px;
                    line-height: 1.7;
                }
                /* CTA Section */
                .gk-cta-section {
                    padding: 40px 20px 60px;
                    text-align: center;
                }
                .gk-cta-box {
                    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
                    border-radius: 24px;
                    padding: 40px 30px;
                    max-width: 600px;
                    margin: 0 auto;
                    position: relative;
                    overflow: hidden;
                }
                .gk-cta-box::before {
                    content: '';
                    position: absolute;
                    top: -50%;
                    right: -50%;
                    width: 100%;
                    height: 100%;
                    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
                }
                .gk-cta-coin {
                    width: 80px;
                    height: 80px;
                    margin: 0 auto 20px;
                }
                .gk-cta-coin .gk-coin {
                    width: 80px;
                    height: 80px;
                    font-size: 36px;
                }
                .gk-cta-coin .gk-coin::before {
                    border-width: 2px;
                }
                .gk-cta-box h2 {
                    font-size: 22px;
                    font-weight: 800;
                    margin-bottom: 10px;
                    color: white;
                    position: relative;
                }
                .gk-cta-box p {
                    color: rgba(255,255,255,0.85);
                    font-size: 14px;
                    margin-bottom: 24px;
                    position: relative;
                }
                .gk-cta-btn-white {
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    padding: 14px 32px;
                    background: white;
                    color: var(--primary);
                    font-weight: 700;
                    font-size: 15px;
                    border: none;
                    border-radius: 50px;
                    cursor: pointer;
                    text-decoration: none;
                    transition: all 0.3s ease;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
                    position: relative;
                }
                .gk-cta-btn-white:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 6px 25px rgba(0,0,0,0.2);
                }
                .gk-cta-btn-white svg {
                    width: 18px;
                    height: 18px;
                }
                /* Responsive */
                @media (max-width: 768px) {
                    .gk-use-wrapper {
                        grid-template-columns: 1fr;
                        gap: 30px;
                    }
                    .gk-phone-mockup {
                        order: -1;
                    }
                    .gk-step {
                        flex-wrap: wrap;
                    }
                    .gk-step-icon {
                        display: none;
                    }
                }
                @media (max-width: 480px) {
                    .gk-hero {
                        padding: 40px 16px 50px;
                    }
                    .gk-coin {
                        width: 110px;
                        height: 110px;
                        font-size: 44px;
                    }
                    .gk-benefits,
                    .gk-use-section {
                        margin: 0 16px;
                        padding: 30px 16px;
                    }
                    .gk-step {
                        padding: 18px;
                    }
                    .gk-cta-box {
                        padding: 30px 20px;
                    }
                }
            </style>
            <!-- HTML Content - Tambahkan di dalam body halaman -->
            
        
    <div class="gimkoin-page">
                            <!-- Hero Section -->
                            
                        
                
        <section class="gk-hero">
                                            
                                    
                        
            <div class="gk-coin-wrapper">
                                                            
                                                
                                
                <div class="gk-coin">
                                                            G
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-sparkles">
                                                                            
                                                            
                                        
                    <div class="gk-sparkle">
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <div class="gk-sparkle">
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <div class="gk-sparkle">
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <div class="gk-sparkle">
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                        
                                            
                            
            </div>
                                            
                                    
                        
            <h1>
                                                Apa itu Gimkoin?
                                            
                            
            </h1>
                                            
                                    
                        
            <p class="gk-hero-subtitle">
                                                Gimkoin adalah cashback dari pembelian produk di TopUpGim. Setiap koin bernilai <strong>1 Rupiah</strong> dan bisa digunakan untuk pembelian selanjutnya!
                                            
                            
            </p>
                                            <a href="{{ route('home') }}" class="gk-cta-btn">
                                                Mulai Belanja
                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                                </svg>
                                            </a>
                                        
                                
                    
        </section>
                            <!-- Benefits Section -->
                            
                        
                
        <section class="gk-benefits">
                                            
                                    
                        
            <div class="gk-section-header">
                                                            <span class="gk-section-tag">Keuntungan</span>
                                                            
                                                
                                
                <h2 class="gk-section-title">
                                                            Hemat Lebih Banyak
                                                        
                                    
                </h2>
                                                            
                                                
                                
                <p class="gk-section-desc">
                                                            Nikmati berbagai keuntungan dengan sistem Gimkoin
                                                        
                                    
                </p>
                                                        
                                            
                            
            </div>
                                            
                                    
                        
            <div class="gk-benefits-grid">
                                                            
                                                
                                
                <div class="gk-benefit-card">
                                                                            
                                                            
                                        
                    <div class="gk-benefit-icon">
                                                                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                                            </svg>
                                                                                        
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <h3>
                                                                        Cashback Otomatis
                                                                    
                                            
                    </h3>
                                                                            
                                                            
                                        
                    <p>
                                                                        Dapatkan Gimkoin dari setiap pembelian produk yang memenuhi syarat
                                                                    
                                            
                    </p>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-benefit-card">
                                                                            
                                                            
                                        
                    <div class="gk-benefit-icon">
                                                                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                                                                            </svg>
                                                                                        
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <h3>
                                                                        Tersimpan Aman
                                                                    
                                            
                    </h3>
                                                                            
                                                            
                                        
                    <p>
                                                                        Gimkoin tersimpan otomatis di akun kamu dan tidak akan hilang
                                                                    
                                            
                    </p>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-benefit-card">
                                                                            
                                                            
                                        
                    <div class="gk-benefit-icon">
                                                                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                                            </svg>
                                                                                        
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <h3>
                                                                        Mudah Digunakan
                                                                    
                                            
                    </h3>
                                                                            
                                                            
                                        
                    <p>
                                                                        Gunakan sebagai metode pembayaran untuk diskon langsung
                                                                    
                                            
                    </p>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-benefit-card">
                                                                            
                                                            
                                        
                    <div class="gk-benefit-icon">
                                                                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                                                            </svg>
                                                                                        
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <h3>
                                                                        1 Koin = Rp1
                                                                    
                                            
                    </h3>
                                                                            
                                                            
                                        
                    <p>
                                                                        Nilai setara Rupiah! Hemat lebih banyak untuk pembelian berikutnya
                                                                    
                                            
                    </p>
                                                                        
                                                        
                                    
                </div>
                                                        
                                            
                            
            </div>
                                        
                                
                    
        </section>
                            <!-- How to Get Section -->
                            
                        
                
        <section class="gk-section gk-steps-section">
                                            
                                    
                        
            <div class="gk-section-header">
                                                            <span class="gk-section-tag">Panduan</span>
                                                            
                                                
                                
                <h2 class="gk-section-title">
                                                            Cara Mendapatkan Gimkoin
                                                        
                                    
                </h2>
                                                            
                                                
                                
                <p class="gk-section-desc">
                                                            Ikuti langkah mudah untuk mengumpulkan Gimkoin
                                                        
                                    
                </p>
                                                        
                                            
                            
            </div>
                                            
                                    
                        
            <div class="gk-steps-container">
                                                            
                                                
                                
                <div class="gk-step">
                                                                            
                                                            
                                        
                    <div class="gk-step-number">
                                                                        1
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <div class="gk-step-content">
                                                                                            
                                                                        
                                                
                        <h3>
                                                                                    Login ke Akun TopUpGim
                                                                                
                                                    
                        </h3>
                                                                                            
                                                                        
                                                
                        <p>
                                                                                    Masuk ke akun kamu terlebih dahulu. Belum punya akun? Daftar gratis hanya beberapa detik!
                                                                                
                                                    
                        </p>
                                                                                        
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <div class="gk-step-icon">
                                                                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                                                            </svg>
                                                                                        
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-step">
                                                                            
                                                            
                                        
                    <div class="gk-step-number">
                                                                        2
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <div class="gk-step-content">
                                                                                            
                                                                        
                                                
                        <h3>
                                                                                    Lakukan Pembelian
                                                                                
                                                    
                        </h3>
                                                                                            
                                                                        
                                                
                        <p>
                                                                                    Beli produk dengan label "Cashback" untuk mendapatkan bonus Gimkoin.
                                                                                
                                                    
                        </p>
                                                                                        
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <div class="gk-step-icon">
                                                                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                                                            </svg>
                                                                                        
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-step">
                                                                            
                                                            
                                        
                    <div class="gk-step-number">
                                                                        3
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <div class="gk-step-content">
                                                                                            
                                                                        
                                                
                        <h3>
                                                                                    Gimkoin Masuk Otomatis
                                                                                
                                                    
                        </h3>
                                                                                            
                                                                        
                                                
                        <p>
                                                                                    Setelah pesanan selesai, Gimkoin otomatis masuk ke akun. Cek saldo di dashboard!
                                                                                
                                                    
                        </p>
                                                                                        
                                                                    
                                            
                    </div>
                                                                            
                                                            
                                        
                    <div class="gk-step-icon">
                                                                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                                            </svg>
                                                                                        
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                        
                                            
                            
            </div>
                                        
                                
                    
        </section>
                            <!-- How to Use Section -->
                            
                        
                
        <section class="gk-use-section">
                                            
                                    
                        
            <div class="gk-use-wrapper">
                                                            
                                                
                                
                <div class="gk-use-content">
                                                                            <span class="gk-section-tag">Penggunaan</span>
                                                                            
                                                            
                                        
                    <h2>
                                                                        Cara Menggunakan Gimkoin
                                                                    
                                            
                    </h2>
                                                                            
                                                            
                                        
                    <ul class="gk-use-list">
                                                                                            
                                                                        
                                                
                        <li>
                                                                                                            <span class="gk-use-num">1</span>
                                                                                                            <span class="gk-use-text">Pilih produk yang ingin kamu beli di TopUpGim</span>
                                                                                                        
                                                                                
                                                    
                        </li>
                                                                                            
                                                                        
                                                
                        <li>
                                                                                                            <span class="gk-use-num">2</span>
                                                                                                            <span class="gk-use-text">Pilih metode pembayaran <strong>Gimkoin</strong></span>
                                                                                                        
                                                                                
                                                    
                        </li>
                                                                                            
                                                                        
                                                
                        <li>
                                                                                                            <span class="gk-use-num">3</span>
                                                                                                            <span class="gk-use-text">Pastikan saldo Gimkoin kamu mencukupi</span>
                                                                                                        
                                                                                
                                                    
                        </li>
                                                                                            
                                                                        
                                                
                        <li>
                                                                                                            <span class="gk-use-num">4</span>
                                                                                                            <span class="gk-use-text">Klik "Beli" dan Gimkoin terpakai otomatis</span>
                                                                                                        
                                                                                
                                                    
                        </li>
                                                                                        
                                                                    
                                            
                    </ul>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-phone-mockup">
                                                                            
                                                            
                                        
                    <div class="gk-phone">
                                                                                            
                                                                        
                                                
                        <div class="gk-phone-screen">
                                                                                                            
                                                                                    
                                                        
                            <div class="gk-phone-header">
                                                                                                Metode Pembayaran
                                                                                            
                                                            
                            </div>
                                                                                                            
                                                                                    
                                                        
                            <div class="gk-phone-content">
                                                                                                                            
                                                                                                
                                                                
                                <div class="gk-phone-balance">
                                                                                                                                            
                                                                                                            
                                                                        
                                    <div class="gk-phone-balance-label">
                                                                                                                        Saldo Gimkoin
                                                                                                                    
                                                                            
                                    </div>
                                                                                                                                            
                                                                                                            
                                                                        
                                    <div class="gk-phone-balance-value">
                                                                                                                        15.000
                                                                                                                    
                                                                            
                                    </div>
                                                                                                                                        
                                                                                                        
                                                                    
                                </div>
                                                                                                                            
                                                                                                
                                                                
                                <div class="gk-phone-payment">
                                                                                                                                            
                                                                                                            
                                                                        
                                    <div class="gk-phone-payment-icon">
                                                                                                                        G
                                                                                                                    
                                                                            
                                    </div>
                                                                                                                                            <span class="gk-phone-payment-text">Bayar dengan Gimkoin</span>
                                                                                                                                            
                                                                                                            
                                                                        
                                    <div class="gk-phone-check">
                                                                                                                                                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                                                                                                                                            </svg>
                                                                                                                                                        
                                                                                                                    
                                                                            
                                    </div>
                                                                                                                                        
                                                                                                        
                                                                    
                                </div>
                                                                                                                        
                                                                                            
                                                            
                            </div>
                                                                                                        
                                                                                
                                                    
                        </div>
                                                                                        
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                        
                                            
                            
            </div>
                                        
                                
                    
        </section>
                            <!-- FAQ Section -->
                            
                        
                
        <section class="gk-section gk-faq-section">
                                            
                                    
                        
            <div class="gk-section-header">
                                                            <span class="gk-section-tag">FAQ</span>
                                                            
                                                
                                
                <h2 class="gk-section-title">
                                                            Pertanyaan Umum
                                                        
                                    
                </h2>
                                                            
                                                
                                
                <p class="gk-section-desc">
                                                            Jawaban untuk pertanyaan yang sering ditanyakan
                                                        
                                    
                </p>
                                                        
                                            
                            
            </div>
                                            
                                    
                        
            <div class="gk-faq-container">
                                                            
                                                
                                
                <div class="gk-faq-item">
                                                                            <button class="gk-faq-question">
                                                                                Apakah Gimkoin memiliki masa kadaluarsa?
                                                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                                </svg>
                                                                            </button>
                                                                            
                                                            
                                        
                    <div class="gk-faq-answer">
                                                                                            
                                                                        
                                                
                        <div class="gk-faq-answer-content">
                                                                                                            Gimkoin tidak memiliki masa kadaluarsa selama akun TopUpGim kamu aktif. Gunakan kapan saja tanpa khawatir hangus!
                                                                                                        
                                                                                
                                                    
                        </div>
                                                                                        
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-faq-item">
                                                                            <button class="gk-faq-question">
                                                                                Bisa dapat Gimkoin tanpa login?
                                                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                                </svg>
                                                                            </button>
                                                                            
                                                            
                                        
                    <div class="gk-faq-answer">
                                                                                            
                                                                        
                                                
                        <div class="gk-faq-answer-content">
                                                                                                            Tidak. Untuk mendapatkan cashback Gimkoin, kamu wajib login ke akun TopUpGim sebelum melakukan pembelian.
                                                                                                        
                                                                                
                                                    
                        </div>
                                                                                        
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-faq-item">
                                                                            <button class="gk-faq-question">
                                                                                Berapa nilai 1 Gimkoin?
                                                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                                </svg>
                                                                            </button>
                                                                            
                                                            
                                        
                    <div class="gk-faq-answer">
                                                                                            
                                                                        
                                                
                        <div class="gk-faq-answer-content">
                                                                                                            1 Gimkoin = 1 Rupiah. Jika kamu punya 10.000 Gimkoin, itu sama dengan Rp 10.000 untuk pembelian.
                                                                                                        
                                                                                
                                                    
                        </div>
                                                                                        
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-faq-item">
                                                                            <button class="gk-faq-question">
                                                                                Produk apa yang bisa dibeli dengan Gimkoin?
                                                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                                </svg>
                                                                            </button>
                                                                            
                                                            
                                        
                    <div class="gk-faq-answer">
                                                                                            
                                                                        
                                                
                        <div class="gk-faq-answer-content">
                                                                                                            Gimkoin bisa digunakan untuk semua produk di TopUpGim, asalkan saldo mencukupi harga produk tersebut.
                                                                                                        
                                                                                
                                                    
                        </div>
                                                                                        
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <div class="gk-faq-item">
                                                                            <button class="gk-faq-question">
                                                                                Kapan Gimkoin masuk ke akun?
                                                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                                </svg>
                                                                            </button>
                                                                            
                                                            
                                        
                    <div class="gk-faq-answer">
                                                                                            
                                                                        
                                                
                        <div class="gk-faq-answer-content">
                                                                                                            Gimkoin otomatis masuk setelah status pesanan "Selesai". Biasanya beberapa menit setelah transaksi berhasil.
                                                                                                        
                                                                                
                                                    
                        </div>
                                                                                        
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>

<div class="gk-faq-item">
                    <button class="gk-faq-question">
                        Kenapa Gimkoin tidak masuk ke akun?
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    
                <div class="gk-faq-answer">
                            
                    <div class="gk-faq-answer-content">
                                    Pesanan yang menggunakan kode promo tidak mendapatkan cashback Gimkoin.
                                
                    </div>
                        
                </div>
            </div>
                                                        
                                            
                            
            </div>
            
                                        
                                
                    
        </section>
                            <!-- CTA Section -->
                            
                        
                
        <section class="gk-cta-section">
                                            
                                    
                        
            <div class="gk-cta-box">
                                                            
                                                
                                
                <div class="gk-cta-coin gk-coin-wrapper">
                                                                            
                                                            
                                        
                    <div class="gk-coin">
                                                                        G
                                                                    
                                            
                    </div>
                                                                        
                                                        
                                    
                </div>
                                                            
                                                
                                
                <h2>
                                                            Mulai Kumpulkan Gimkoin!
                                                        
                                    
                </h2>
                                                            
                                                
                                
                <p>
                                                            Belanja di TopUpGim dan nikmati cashback untuk setiap pembelian
                                                        
                                    
                </p>
                                                            <a href="{{ route('home') }}" class="gk-cta-btn-white">
                                                                Belanja Sekarang
                                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                                                </svg>
                                                            </a>
                                                        
                                            
                            
            </div>
                                        
                                
                    
        </section>
                    
            
    </div>
</div><script>
document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".gk-faq-item");
    faqItems.forEach(item => {
        const button = item.querySelector(".gk-faq-question");
        const answer = item.querySelector(".gk-faq-answer");
        button.addEventListener("click", () => {
            // Tutup FAQ lain
            faqItems.forEach(other => {
                if (other !== item) {
                    other.classList.remove("active");
                    other.querySelector(".gk-faq-answer").style.maxHeight = null;
                }
            });
            // Toggle current
            item.classList.toggle("active");
            if (item.classList.contains("active")) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = null;
            }
        });
    });
});
</script>
                        </div>

                        <!-- Pages -->
                        <!-- END Pages -->
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

@endsection
