<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@php
    $metaTitle = $siteSetting?->site_title ?? 'Deekod — Your chairs should be full.';
    $metaDescription = $siteSetting?->seo_description ?? 'Most dental practices quietly lose patients every single day.';
    $metaImage = $siteSetting?->og_image ? Storage::url($siteSetting->og_image) : 'https://deekod.com/images/og-image.jpg';
@endphp
<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
<meta name="robots" content="index, follow, max-image-preview:large">
<meta name="theme-color" content="#0C2B23">
<meta property="og:title" content="{{ $metaTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Deekod Digital">
<meta property="og:locale" content="en_GB">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:image" content="{{ $metaImage }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="{{ $metaTitle }}">
@if($siteSetting?->favicon)
<link rel="icon" href="{{ Storage::url($siteSetting->favicon) }}">
@endif
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $metaImage }}">
<link rel="canonical" href="https://deekod.com/">
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "ProfessionalService",
  "name": "Deekod Digital",
  "url": "https://deekod.com",
  "logo": "https://deekod.com/images/logo.png",
  "image": "https://deekod.com/images/og-image.jpg",
  "description": "We find the leaks in your dental practice marketing and fix them.",
  "address": {
    "@@type": "PostalAddress",
    "addressCountry": "UK"
  }
}
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,700;12..96,800&family=IBM+Plex+Mono:wght@400;500&family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<style>
:root{
  --porcelain:#F5F7F3;--panel:#EBF0EA;--ink:#0F1F18;--ink-60:rgba(15,31,24,.62);
  --pine:#123B31;--pine-2:#0C2B23;--scrub:#1E6F54;--scrub-dark:#175843;
  --amber:#E7A03C;--amber-soft:#F7E7C8;--red:#C25B4A;--line:#D8DFD4;
  --line-dark:rgba(245,247,243,.16);--radius:12px;
  --disp:"Bricolage Grotesque",system-ui,sans-serif;
  --body:"Instrument Sans",system-ui,sans-serif;--mono:"IBM Plex Mono",ui-monospace,monospace;
}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}}
body{font-family:var(--body);background:var(--porcelain);color:var(--ink);font-size:1.05rem;line-height:1.62;-webkit-font-smoothing:antialiased;overflow-x:hidden}
a{color:var(--scrub);text-decoration:none}
:focus-visible{outline:3px solid var(--amber);outline-offset:3px;border-radius:4px}
.skip{position:absolute;left:-999px;background:var(--ink);color:#fff;padding:.6rem 1rem;z-index:99}
.skip:focus{left:12px;top:12px}
.wrap{max-width:1080px;margin-inline:auto;padding-inline:clamp(1.1rem,4vw,2rem)}
.narrow{max-width:760px}
.mono{font-family:var(--mono);letter-spacing:.08em}
section{padding-block:clamp(3.6rem,8vw,6rem)}
h1,h2,h3{font-family:var(--disp);line-height:1.07;letter-spacing:-.025em}
h2{font-size:clamp(1.85rem,4.4vw,2.9rem);font-weight:800}
.eyebrow{font-family:var(--mono);font-size:.74rem;letter-spacing:.18em;text-transform:uppercase;color:var(--scrub);display:inline-flex;align-items:center;gap:.6rem}
.eyebrow::before{content:"";width:26px;height:1px;background:var(--scrub)}
.rv{opacity:0;transform:translateY(20px);transition:opacity .7s ease,transform .7s ease}
.rv.in{opacity:1;transform:none}
@media (prefers-reduced-motion:reduce){.rv{opacity:1;transform:none;transition:none}}
.btn{display:inline-flex;align-items:center;gap:.6rem;background:var(--scrub);color:#fff;font-weight:600;font-size:1.02rem;padding:.95rem 1.7rem;border-radius:999px;border:0;cursor:pointer;transition:background .2s,transform .2s,box-shadow .2s;box-shadow:0 10px 24px -10px rgba(30,111,84,.6)}
.btn:hover{background:var(--scrub-dark);transform:translateY(-2px);text-decoration:none;box-shadow:0 16px 30px -12px rgba(30,111,84,.7)}
.btn.pulse{position:relative}
.btn.pulse::after{content:"";position:absolute;inset:0;border-radius:999px;border:2px solid var(--scrub);animation:ring 2.4s infinite}
@keyframes ring{0%{opacity:.6;transform:scale(1)}100%{opacity:0;transform:scale(1.35)}}
@media (prefers-reduced-motion:reduce){.btn.pulse::after{animation:none;display:none}}
.micro{font-family:var(--mono);font-size:.7rem;letter-spacing:.1em;color:var(--ink-60);margin-top:.9rem;text-transform:uppercase}

/* ---------- STICKY BAR ---------- */
.sticky{position:fixed;left:0;right:0;bottom:0;z-index:60;background:var(--pine-2);color:var(--porcelain);transform:translateY(120%);transition:transform .4s ease;border-top:1px solid var(--line-dark)}
.sticky.show{transform:none}
.sticky-in{display:flex;align-items:center;justify-content:space-between;gap:1rem;padding:.75rem 0}
.sticky p{font-size:.9rem;line-height:1.3}
.sticky p b{font-family:var(--disp);font-weight:700}
.sticky .btn{padding:.65rem 1.2rem;font-size:.92rem;box-shadow:none;white-space:nowrap}
@media (max-width:600px){.sticky p .hide{display:none}}

/* ---------- HERO ---------- */
.hero{background:radial-gradient(120% 90% at 80% 0%,#16473A 0%,var(--pine) 40%,var(--pine-2) 100%);color:var(--porcelain);position:relative;overflow:hidden;padding-block:clamp(3.2rem,7vw,5rem)}
.hero .eyebrow{color:var(--amber)}.hero .eyebrow::before{background:var(--amber)}
.presence{display:inline-flex;align-items:center;gap:.55rem;background:rgba(231,160,60,.12);border:1px solid rgba(231,160,60,.35);border-radius:999px;padding:.4rem .9rem;font-family:var(--mono);font-size:.68rem;letter-spacing:.1em;color:var(--amber-soft);margin-bottom:1.5rem}
.presence i{width:8px;height:8px;border-radius:50%;background:#5FD08C;box-shadow:0 0 0 0 rgba(95,208,140,.7);animation:beat 2s infinite}
@keyframes beat{0%{box-shadow:0 0 0 0 rgba(95,208,140,.6)}70%{box-shadow:0 0 0 8px rgba(95,208,140,0)}100%{box-shadow:0 0 0 0 rgba(95,208,140,0)}}
@media (prefers-reduced-motion:reduce){.presence i{animation:none}}
.hero h1{font-size:clamp(2.5rem,6vw,4.3rem);font-weight:800;color:var(--porcelain);max-width:16ch}
.hero h1 .u{position:relative;white-space:nowrap}
.hero h1 .u::after{content:"";position:absolute;left:-2%;right:-3%;bottom:8%;height:32%;background:var(--amber);opacity:.9;z-index:-1;transform:skew(-8deg)}
.hero .lede{font-size:clamp(1.05rem,2.4vw,1.28rem);color:rgba(245,247,243,.82);max-width:50ch;margin-top:1.4rem}
.hero-cta{margin-top:2.2rem;display:flex;flex-direction:column;align-items:flex-start;gap:.4rem}
.hero-strip{display:flex;gap:1.5rem;flex-wrap:wrap;margin-top:2.4rem;padding-top:1.5rem;border-top:1px solid var(--line-dark)}
.hero-strip span{font-family:var(--mono);font-size:.72rem;letter-spacing:.08em;color:rgba(245,247,243,.7);display:flex;align-items:center;gap:.45rem}
.hero-strip i{color:var(--amber)}

/* ---------- LEAK METER (problems they don't see) ---------- */
.leak{background:var(--porcelain)}
.leak h2{max-width:20ch}
.leak .sub{color:var(--ink-60);max-width:54ch;margin-top:1rem;font-size:1.08rem}
.meter{margin-top:3rem;display:grid;grid-template-columns:1fr 1fr;gap:1.1rem}
.leak-card{background:#fff;border:1px solid var(--line);border-left:3px solid var(--red);border-radius:var(--radius);padding:1.5rem 1.6rem;position:relative;overflow:hidden}
.leak-card .hidden-tag{position:absolute;top:1rem;right:1rem;font-family:var(--mono);font-size:.6rem;letter-spacing:.14em;color:var(--red);border:1px solid rgba(194,91,74,.3);border-radius:4px;padding:.2rem .5rem}
.leak-card h3{font-size:1.18rem;font-weight:700;margin-bottom:.5rem;max-width:22ch}
.leak-card p{font-size:.94rem;color:var(--ink-60)}
.leak-card .stat{font-family:var(--disp);font-weight:800;color:var(--red);font-size:1.05rem;margin-top:.7rem;letter-spacing:-.01em}
.leak-total{margin-top:2rem;background:var(--pine-2);color:var(--porcelain);border-radius:var(--radius);padding:1.8rem 2rem;display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;justify-content:space-between}
.leak-total p{max-width:44ch}
.leak-total b{color:var(--amber)}
.leak-total .big{font-family:var(--disp);font-size:clamp(1.6rem,4vw,2.4rem);font-weight:800;letter-spacing:-.02em;color:var(--porcelain)}

/* ---------- DREAM (future pacing) ---------- */
.dream{background:linear-gradient(180deg,var(--pine) 0%,#16473A 100%);color:var(--porcelain);position:relative}
.dream .eyebrow{color:var(--amber)}.dream .eyebrow::before{background:var(--amber)}
.dream h2{color:var(--porcelain);max-width:18ch}
.dream .sub{color:rgba(245,247,243,.75);max-width:52ch;margin-top:1rem;font-size:1.08rem}
.dream-list{margin-top:2.6rem;display:grid;gap:1rem}
.dream-item{display:flex;gap:1rem;align-items:flex-start;background:rgba(255,255,255,.05);border:1px solid var(--line-dark);border-radius:var(--radius);padding:1.2rem 1.4rem}
.dream-item .tick{flex:none;width:30px;height:30px;border-radius:50%;background:var(--amber);color:var(--pine-2);display:flex;align-items:center;justify-content:center;font-weight:800;font-family:var(--disp)}
.dream-item p{color:rgba(245,247,243,.9)}
.dream-item p b{color:var(--amber-soft)}

/* ---------- COMPARE (anchoring) ---------- */
.vs{background:var(--porcelain)}
.vs h2{max-width:20ch}
.vs-grid{margin-top:2.8rem;display:grid;grid-template-columns:1fr 1fr;gap:1.2rem}
.vs-col{border-radius:var(--radius);padding:1.8rem;border:1px solid var(--line)}
.vs-col.them{background:#fff}
.vs-col.us{background:var(--pine-2);color:var(--porcelain);border-color:var(--pine-2);position:relative;box-shadow:0 24px 50px -24px rgba(12,43,35,.5)}
.vs-col .head{font-family:var(--mono);font-size:.72rem;letter-spacing:.16em;text-transform:uppercase;padding-bottom:1.1rem;margin-bottom:1.1rem;border-bottom:1px solid var(--line)}
.vs-col.us .head{border-color:var(--line-dark);color:var(--amber)}
.vs-col .price{font-family:var(--disp);font-size:1.7rem;font-weight:800;letter-spacing:-.02em;margin-bottom:1.2rem}
.vs-col.them .price{color:var(--red)}
.vs-col.us .price{color:var(--porcelain)}
.vs-col ul{list-style:none;display:grid;gap:.8rem}
.vs-col li{font-size:.96rem;padding-left:1.6rem;position:relative}
.vs-col.them li{color:var(--ink-60)}
.vs-col.them li::before{content:"✕";position:absolute;left:0;color:var(--red);font-weight:700}
.vs-col.us li{color:rgba(245,247,243,.92)}
.vs-col.us li::before{content:"✓";position:absolute;left:0;color:#5FD08C;font-weight:700}
.vs-col.us .badge{position:absolute;top:-12px;right:1.6rem;background:var(--amber);color:var(--pine-2);font-family:var(--mono);font-size:.64rem;letter-spacing:.12em;font-weight:500;padding:.35rem .8rem;border-radius:999px}

/* ---------- GHL / automation ---------- */
.auto{background:var(--pine-2);color:var(--porcelain)}
.auto .eyebrow{color:var(--amber)}.auto .eyebrow::before{background:var(--amber)}
.auto h2{color:var(--porcelain);max-width:20ch}
.auto .sub{color:rgba(245,247,243,.75);max-width:52ch;margin-top:1rem}
.flow{margin-top:2.8rem;display:grid;grid-template-columns:repeat(4,1fr);gap:.8rem;align-items:stretch}
.flow-step{background:rgba(255,255,255,.05);border:1px solid var(--line-dark);border-radius:10px;padding:1.2rem;position:relative}
.flow-step .n{font-family:var(--mono);font-size:.66rem;letter-spacing:.16em;color:var(--amber);margin-bottom:.5rem}
.flow-step b{display:block;font-size:1rem;margin-bottom:.3rem}
.flow-step span{font-size:.84rem;color:rgba(245,247,243,.65)}
.flow-step:not(:last-child)::after{content:"→";position:absolute;right:-.7rem;top:50%;transform:translateY(-50%);color:var(--amber);font-weight:700;z-index:2}
.auto-note{margin-top:2rem;font-size:1.05rem;color:rgba(245,247,243,.85)}
.auto-note b{color:var(--amber-soft)}

/* ---------- SOCIAL PROOF / bandwagon ---------- */
.bw{background:var(--porcelain)}
.bw h2{max-width:22ch}
.bw .sub{color:var(--ink-60);margin-top:1rem;max-width:50ch}
.bw-feed{margin-top:2.6rem;display:grid;gap:.7rem;max-width:640px}
.bw-row{display:flex;align-items:center;gap:.9rem;background:#fff;border:1px solid var(--line);border-radius:999px;padding:.7rem 1.2rem;font-size:.92rem}
.bw-row .dot{width:8px;height:8px;border-radius:50%;background:#5FD08C;flex:none}
.bw-row b{font-weight:600}
.bw-row .when{margin-left:auto;font-family:var(--mono);font-size:.68rem;letter-spacing:.06em;color:var(--ink-60)}
.bw-quotes{margin-top:2.4rem;display:grid;grid-template-columns:1fr 1fr;gap:1.1rem}
.bwq{background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:1.6rem}
.bwq p{font-size:1rem;line-height:1.55}
.bwq p::before{content:"“";color:var(--amber);font-family:var(--disp);font-weight:800;font-size:1.5rem;margin-right:2px}
.bwq cite{display:block;margin-top:.9rem;font-style:normal;font-family:var(--mono);font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:var(--ink-60)}

/* ---------- OBJECTION / reassurance ---------- */
.calm{background:linear-gradient(180deg,#16473A,var(--pine));color:var(--porcelain)}
.calm .eyebrow{color:var(--amber)}.calm .eyebrow::before{background:var(--amber)}
.calm h2{color:var(--porcelain);max-width:20ch}
.calm-grid{margin-top:2.6rem;display:grid;grid-template-columns:1fr 1fr;gap:1.1rem}
.calm-card{background:rgba(255,255,255,.05);border:1px solid var(--line-dark);border-radius:var(--radius);padding:1.5rem 1.6rem}
.calm-card .q{font-family:var(--disp);font-weight:700;font-size:1.08rem;color:var(--amber-soft);margin-bottom:.55rem}
.calm-card p{color:rgba(245,247,243,.82);font-size:.95rem}

/* ---------- FINAL CTA ---------- */
.final{background:var(--pine-2);color:var(--porcelain);text-align:center}
.final .presence{margin-inline:auto}
.final h2{color:var(--porcelain);max-width:20ch;margin:1rem auto 0}
.final p.sub{color:rgba(245,247,243,.75);max-width:48ch;margin:1.1rem auto 0;font-size:1.1rem}
.final .hero-cta{align-items:center;margin-top:2.4rem}
.final .steps3{display:flex;justify-content:center;gap:2rem;flex-wrap:wrap;margin-top:2.6rem}
.final .steps3 div{font-family:var(--mono);font-size:.72rem;letter-spacing:.1em;color:rgba(245,247,243,.7);display:flex;align-items:center;gap:.5rem}
.final .steps3 b{color:var(--amber);font-family:var(--disp);font-size:1rem}
.reply-note{display:inline-flex;align-items:center;gap:.5rem;margin-top:1.6rem;font-family:var(--mono);font-size:.7rem;letter-spacing:.08em;color:var(--amber-soft)}
.reply-note i{width:8px;height:8px;border-radius:50%;background:#5FD08C;animation:beat 2s infinite}
@media (prefers-reduced-motion:reduce){.reply-note i{animation:none}}

/* ---------- HALO BADGE STRIP ---------- */
.halo{display:flex;gap:.6rem;flex-wrap:wrap;margin-top:1.6rem;align-items:center}
.halo .b{font-family:var(--mono);font-size:.66rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(245,247,243,.75);border:1px solid var(--line-dark);border-radius:6px;padding:.4rem .7rem;display:flex;align-items:center;gap:.4rem}
.halo .b i{color:var(--amber)}
/* secondary low-friction path */
.orpath{margin-top:1.1rem;font-size:.94rem;color:rgba(245,247,243,.8)}
.orpath a{color:var(--amber-soft);text-decoration:underline;text-underline-offset:3px;font-weight:600}

/* ---------- UNITY STRIP ---------- */
.unity{background:var(--panel);border-block:1px solid var(--line)}
.unity-in{display:flex;gap:1.4rem;align-items:center;flex-wrap:wrap;padding-block:1.6rem}
.unity-in .mk{font-family:var(--disp);font-weight:800;font-size:1.1rem;color:var(--scrub);flex:none}
.unity-in p{font-size:1rem;color:var(--ink);max-width:70ch}
.unity-in p b{color:var(--scrub)}

/* ---------- ROI CALCULATOR ---------- */
.roi{background:var(--porcelain)}
.roi h2{max-width:20ch}
.roi .sub{color:var(--ink-60);max-width:52ch;margin-top:1rem;font-size:1.06rem}
.calc{margin-top:2.8rem;display:grid;grid-template-columns:1fr .9fr;gap:1.4rem;align-items:stretch}
.calc-inputs{background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:1.8rem}
.field{margin-bottom:1.3rem}
.field:last-child{margin-bottom:0}
.field label{display:flex;justify-content:space-between;align-items:baseline;font-weight:600;font-size:.94rem;margin-bottom:.5rem}
.field label .val{font-family:var(--disp);font-weight:800;color:var(--scrub);font-size:1.1rem}
.field input[type=range]{width:100%;height:6px;border-radius:6px;background:var(--line);appearance:none;outline:none;cursor:pointer}
.field input[type=range]::-webkit-slider-thumb{appearance:none;width:22px;height:22px;border-radius:50%;background:var(--scrub);cursor:pointer;border:3px solid #fff;box-shadow:0 2px 6px rgba(0,0,0,.2)}
.field input[type=range]::-moz-range-thumb{width:22px;height:22px;border-radius:50%;background:var(--scrub);cursor:pointer;border:3px solid #fff}
.field .hint{font-family:var(--mono);font-size:.66rem;letter-spacing:.06em;color:var(--ink-60);margin-top:.4rem}
.calc-out{background:var(--pine-2);color:var(--porcelain);border-radius:var(--radius);padding:1.8rem;display:flex;flex-direction:column;justify-content:center;text-align:center}
.calc-out .cap{font-family:var(--mono);font-size:.7rem;letter-spacing:.16em;text-transform:uppercase;color:rgba(245,247,243,.6)}
.calc-out .num{font-family:var(--disp);font-weight:800;font-size:clamp(2.4rem,7vw,3.6rem);letter-spacing:-.03em;color:var(--amber);line-height:1.05;margin:.5rem 0}
.calc-out .per{font-family:var(--mono);font-size:.72rem;letter-spacing:.12em;color:rgba(245,247,243,.6)}
.calc-out .foot{margin-top:1.4rem;padding-top:1.2rem;border-top:1px solid var(--line-dark);font-size:.92rem;color:rgba(245,247,243,.85)}
.calc-out .foot b{color:var(--amber-soft)}
.calc-note{margin-top:1.4rem;font-family:var(--mono);font-size:.66rem;letter-spacing:.06em;color:var(--ink-60);text-align:center}

/* ---------- FOUNDER VOICE ---------- */
.fv{background:var(--porcelain);border-top:1px solid var(--line)}
.fv-card{max-width:720px;margin-inline:auto;background:#fff;border:1px solid var(--line);border-radius:var(--radius);padding:2rem 2.2rem;display:flex;gap:1.4rem;align-items:flex-start}
.fv-card .ava{flex:none;width:70px;height:70px;border-radius:50%;background:var(--pine);color:var(--amber-soft);display:flex;align-items:center;justify-content:center;font-family:var(--disp);font-weight:800;font-size:1.6rem}
.fv-card .body p{font-size:1.05rem;line-height:1.6}
.fv-card .body .sig{margin-top:1rem;font-family:var(--mono);font-size:.7rem;letter-spacing:.12em;text-transform:uppercase;color:var(--ink-60)}
.fv-card .body .sig b{color:var(--ink)}

@media (max-width:820px){
  .calc{grid-template-columns:1fr}
}
/* ---------- COST OF INACTION ---------- */
.coi{background:var(--pine-2);color:var(--porcelain);position:relative}
.coi .eyebrow{color:var(--red);}
.coi .eyebrow::before{background:var(--red)}
.coi h2{color:var(--porcelain);max-width:20ch}
.coi-list{margin-top:2.4rem;display:grid;gap:.7rem;max-width:640px}
.coi-item{display:flex;gap:1rem;align-items:flex-start;padding:.9rem 1.2rem;background:rgba(194,91,74,.08);border:1px solid rgba(194,91,74,.25);border-radius:10px}
.coi-item .x{flex:none;width:24px;height:24px;border-radius:50%;background:rgba(194,91,74,.2);color:#E88;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.9rem}
.coi-item p{color:rgba(245,247,243,.88);font-size:.98rem}
.coi-kick{margin-top:1.8rem;font-family:var(--disp);font-weight:700;font-size:1.15rem;color:var(--amber-soft)}

/* ---------- ONE PATIENT REFRAME ---------- */
.reframe{margin-top:1.6rem;background:var(--amber-soft);border:1px solid rgba(231,160,60,.4);border-radius:var(--radius);padding:1.3rem 1.5rem;text-align:center;color:var(--ink)}
.reframe b{font-family:var(--disp);font-weight:800;color:var(--scrub-dark)}

/* ---------- GUARANTEE ---------- */
.guarantee{display:flex;gap:1rem;align-items:center;justify-content:center;max-width:640px;margin:2rem auto 0;background:rgba(255,255,255,.05);border:1px solid var(--line-dark);border-radius:999px;padding:.9rem 1.6rem}
.guarantee .seal{flex:none;width:40px;height:40px;border-radius:50%;background:var(--amber);color:var(--pine-2);display:flex;align-items:center;justify-content:center;font-weight:800;font-family:var(--disp)}
.guarantee p{font-size:.94rem;color:rgba(245,247,243,.9);text-align:left}
.guarantee p b{color:var(--amber-soft)}

/* ---------- SCARCITY ---------- */
.scarcity{font-family:var(--mono);font-size:.72rem;letter-spacing:.08em;color:var(--amber-soft);margin-top:1.4rem;display:inline-flex;align-items:center;gap:.5rem}
.scarcity i{width:7px;height:7px;border-radius:50%;background:var(--amber);flex:none}

/* ---------- BEFORE / AFTER conceptual ---------- */
.ba-grid{margin-top:2.6rem;display:grid;grid-template-columns:1fr 1fr;gap:1.2rem}
.ba{border-radius:var(--radius);overflow:hidden;border:1px solid var(--line)}
.ba .cap{font-family:var(--mono);font-size:.68rem;letter-spacing:.14em;text-transform:uppercase;padding:.7rem 1rem;font-weight:500}
.ba.before .cap{background:#F0E4E1;color:var(--red)}
.ba.after .cap{background:var(--pine-2);color:var(--amber)}
.ba .frame{aspect-ratio:16/11;position:relative;display:flex;flex-direction:column;padding:1rem;gap:.5rem}
.ba.before .frame{background:#EDEDED}
.ba.after .frame{background:linear-gradient(160deg,var(--pine),var(--scrub))}
.ba .bar{height:10px;border-radius:3px}
.ba.before .bar{background:#CFCFCF}
.ba.before .bar.w1{width:60%}.ba.before .bar.w2{width:80%}.ba.before .bar.w3{width:45%}
.ba.after .bar{background:rgba(245,247,243,.85)}
.ba.after .bar.w1{width:70%}.ba.after .bar.w2{width:90%}.ba.after .bar.w3{width:55%}
.ba .tagrow{margin-top:auto;display:flex;gap:.4rem;flex-wrap:wrap}
.ba .t{font-family:var(--mono);font-size:.58rem;letter-spacing:.08em;padding:.25rem .5rem;border-radius:4px}
.ba.before .t{background:rgba(194,91,74,.15);color:var(--red)}
.ba.after .t{background:rgba(231,160,60,.2);color:var(--amber-soft)}
.ba-note{text-align:center;margin-top:1.2rem;font-family:var(--mono);font-size:.66rem;letter-spacing:.06em;color:var(--ink-60)}

/* ---------- VIDEO SLOT ---------- */
.fv-video{max-width:720px;margin:1.6rem auto 0;aspect-ratio:16/9;border-radius:var(--radius);background:linear-gradient(135deg,var(--pine),var(--scrub));border:1px solid var(--line);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.7rem;color:var(--porcelain);text-align:center;padding:1.5rem}
.fv-video .play{width:64px;height:64px;border-radius:50%;background:var(--amber);color:var(--pine-2);display:flex;align-items:center;justify-content:center;font-size:1.6rem;padding-left:5px}
.fv-video .lbl{font-family:var(--mono);font-size:.68rem;letter-spacing:.12em;color:rgba(245,247,243,.7);max-width:36ch}

/* ---------- EXIT MODAL ---------- */
.modal-bg{position:fixed;inset:0;background:rgba(12,43,35,.75);backdrop-filter:blur(4px);z-index:80;display:none;align-items:center;justify-content:center;padding:1.5rem}
.modal-bg.show{display:flex}
.modal{background:var(--porcelain);border-radius:16px;max-width:440px;width:100%;padding:2.2rem;text-align:center;position:relative;box-shadow:0 40px 80px -20px rgba(0,0,0,.5)}
.modal h3{font-size:1.55rem;font-weight:800;margin-bottom:.7rem}
.modal p{color:var(--ink-60);font-size:.98rem;margin-bottom:1.4rem}
.modal input{width:100%;padding:.85rem 1rem;border:1.5px solid var(--line);border-radius:10px;font-family:var(--body);font-size:1rem;margin-bottom:.9rem}
.modal input:focus{outline:none;border-color:var(--scrub)}
.modal .btn{width:100%;justify-content:center}
.modal .close{position:absolute;top:1rem;right:1.2rem;background:none;border:0;font-size:1.5rem;color:var(--ink-60);cursor:pointer;line-height:1}
.modal .fine{font-family:var(--mono);font-size:.64rem;letter-spacing:.06em;color:var(--ink-60);margin-top:1rem;margin-bottom:0}

/* ---------- IMAGE SLOT SYSTEM ---------- */
.imgslot{position:relative;width:100%;overflow:hidden;border-radius:var(--radius);background:linear-gradient(135deg,var(--pine) 0%,var(--scrub) 130%);border:1px solid var(--line);display:flex;align-items:center;justify-content:center;text-align:center;padding:1.2rem}
.imgslot img{width:100%;height:100%;object-fit:cover;position:absolute;inset:0}
.imgslot .ph{font-family:var(--mono);font-size:.64rem;letter-spacing:.14em;text-transform:uppercase;color:rgba(245,247,243,.55);line-height:1.8;max-width:30ch;position:relative;z-index:1}
.imgslot.light{background:var(--panel);border:1px dashed var(--line)}
.imgslot.light .ph{color:var(--ink-60)}
.r43{aspect-ratio:4/3}.r169{aspect-ratio:16/9}.r11{aspect-ratio:1/1}.r34{aspect-ratio:3/4}

/* hero split */
.hero-split{display:grid;grid-template-columns:1.05fr .95fr;gap:clamp(2rem,5vw,3.5rem);align-items:center}
.hero-visual{position:relative}
.hero-visual .imgslot{box-shadow:0 30px 60px -25px rgba(12,43,35,.55)}
.hero-badge{position:absolute;bottom:-14px;left:-14px;background:var(--amber);color:var(--pine-2);border-radius:10px;padding:.7rem 1rem;font-family:var(--mono);font-size:.66rem;letter-spacing:.1em;line-height:1.5;box-shadow:0 12px 24px -10px rgba(0,0,0,.4);max-width:60%}
.hero-badge b{font-family:var(--disp);font-size:1.05rem;display:block}

/* two-up image + text rows */
.split{display:grid;grid-template-columns:1fr 1fr;gap:clamp(1.6rem,4vw,3rem);align-items:center;margin-top:2.8rem}
.split.rev .sp-media{order:2}

/* ---------- VIDEO REVIEW CARDS ---------- */
.vids{margin-top:2.8rem;display:grid;grid-template-columns:repeat(3,1fr);gap:1.2rem}
.vcard{background:#fff;border:1px solid var(--line);border-radius:var(--radius);overflow:hidden;display:flex;flex-direction:column;transition:transform .25s ease,box-shadow .25s ease}
.vcard:hover{transform:translateY(-4px);box-shadow:0 20px 44px -22px rgba(15,31,24,.3)}
.vframe{position:relative;aspect-ratio:9/16;background:linear-gradient(150deg,var(--pine),var(--scrub));display:flex;flex-direction:column;align-items:center;justify-content:center;gap:.8rem;padding:1.2rem;text-align:center}
.vframe video,.vframe iframe,.vframe img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;border:0}
.vframe .play{width:56px;height:56px;border-radius:50%;background:var(--amber);color:var(--pine-2);display:flex;align-items:center;justify-content:center;font-size:1.4rem;padding-left:4px;position:relative;z-index:1;box-shadow:0 8px 20px -6px rgba(0,0,0,.4)}
.vframe .ph{font-family:var(--mono);font-size:.6rem;letter-spacing:.12em;color:rgba(245,247,243,.6);position:relative;z-index:1;line-height:1.7}
.vcard .vmeta{padding:1.1rem 1.2rem;border-top:1px solid var(--line)}
.vcard .vmeta b{display:block;font-family:var(--disp);font-weight:700;font-size:1rem}
.vcard .vmeta span{font-family:var(--mono);font-size:.64rem;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-60);display:block;margin-top:.25rem}
.vcard .vmeta .angle{display:inline-block;margin-top:.6rem;font-family:var(--mono);font-size:.6rem;letter-spacing:.08em;background:var(--amber-soft);color:var(--scrub-dark);padding:.25rem .55rem;border-radius:4px;text-transform:none}

@media (max-width:820px){
  .ba-grid{grid-template-columns:1fr}
  .hero-split{grid-template-columns:1fr;gap:2.4rem}
  .split{grid-template-columns:1fr}
  .split.rev .sp-media{order:0}
  .vids{grid-template-columns:1fr}
  .vcard{max-width:360px;margin-inline:auto;width:100%}
}
footer{background:var(--pine-2);border-top:1px solid var(--line-dark);color:rgba(245,247,243,.55);padding-block:2rem;text-align:center}
footer b{font-family:var(--disp);color:var(--porcelain)}
footer p{font-family:var(--mono);font-size:.66rem;letter-spacing:.1em;margin-top:.7rem;line-height:1.9}

@media (max-width:820px){
  .meter,.vs-grid,.bw-quotes,.calm-grid{grid-template-columns:1fr}
  .flow{grid-template-columns:1fr 1fr;gap:1.6rem .8rem}
  .flow-step:not(:last-child)::after{display:none}
}
@media (max-width:560px){
  .hero h1{font-size:2.4rem}
  .leak-total{flex-direction:column;text-align:center}
}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<a class="skip" href="#book">Skip to booking</a>
@yield('content')
<!-- ============ LEAD MODAL ============ -->
<div class="modal-bg" id="leadModal" role="dialog" aria-modal="true" aria-labelledby="leadTitle">
  <div class="modal">
    <button class="close" id="leadClose" aria-label="Close">×</button>
    <h3 id="leadTitle">Get Your Free Leak Report</h3>
    <p>Send us your details and we'll email you a <b>2-minute video</b> showing exactly what's costing you patients. Free. No call required.</p>
    <form id="leadForm">
      <input type="url" name="website" id="leadWebsite" placeholder="Website URL (e.g., yourpractice.com)" required aria-label="Your website URL">
      <input type="email" name="email" id="leadEmail" placeholder="Your Email Address" required aria-label="Your Email Address">
      <input type="tel" name="phone" id="leadPhone" placeholder="Your Phone Number" required aria-label="Your Phone Number">
      <button type="submit" class="btn" id="leadSubmit" style="width: 100%; justify-content: center; border: none; font-family: inherit;">Send me my free leak report →</button>
    </form>
    <div id="leadSuccess" style="display:none; margin-top: 1rem; color: var(--scrub); font-weight: 600; padding: 1rem; background: rgba(95,208,140,0.1); border-radius: 8px;">Thanks! We'll send your report shortly.</div>
    <div id="leadError" style="display:none; margin-top: 1rem; color: var(--red); font-weight: 600;">Something went wrong. Please try again.</div>
    <p class="fine">A real person replies — usually within the hour.</p>
  </div>
</div>

<footer>
  <div class="wrap">
    <b>Deekod<span style="color:var(--amber)">.</span></b>
    <!-- REPLACE with real company details -->
    <p>© <span id="yr">2026</span> · BUILT FOR DENTISTS WHO WANT FULL CHAIRS</p>
  </div>
</footer>

<!-- ============ STICKY BAR ============ -->
<div class="sticky" id="sticky">
  <div class="wrap sticky-in" style="padding-left: 2rem;">
    <p><b>Losing patients you can't see?</b><span class="hide"> A free 15-min call shows you exactly where.</span></p>
    <a class="btn" href="#book">Book the call →</a>
  </div>
</div>

<script>
const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const io = new IntersectionObserver((es)=>{es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target);}})},{threshold:.12});
document.querySelectorAll('.rv').forEach(el=>io.observe(el));

// sticky bar appears once the ROI calculator scrolls into view (they've seen the money leaking)
const roi = document.getElementById('math');
const sticky = document.getElementById('sticky');
if(roi && sticky){
  const sio = new IntersectionObserver((es)=>{
    es.forEach(e=>{ if(e.isIntersecting){ sticky.classList.add('show'); } });
  },{threshold:.2});
  sio.observe(roi);
}

// ---------- Lead modal (trigger on click or exit-intent) ----------
(function(){
  const modal = document.getElementById('leadModal');
  if(!modal) return;
  let shown = false;
  function open(e){ 
    if(e) e.preventDefault();
    modal.classList.add('show'); 
  }
  function close(){ modal.classList.remove('show'); }
  
  // Exit intent
  document.addEventListener('mouseout',(e)=>{
    if(!shown && !e.relatedTarget && e.clientY <= 0) {
      shown = true;
      open();
    }
  });

  // Manual triggers
  document.querySelectorAll('.open-lead-modal').forEach(btn => {
    btn.addEventListener('click', open);
  });

  document.getElementById('leadClose').addEventListener('click', close);
  modal.addEventListener('click',(e)=>{ if(e.target===modal) close(); });
  document.addEventListener('keydown',(e)=>{ if(e.key==='Escape') close(); });

  // Form submission
  const form = document.getElementById('leadForm');
  const successMsg = document.getElementById('leadSuccess');
  const errorMsg = document.getElementById('leadError');
  const submitBtn = document.getElementById('leadSubmit');

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    errorMsg.style.display = 'none';

    try {
      const fd = new FormData(form);
      const res = await fetch('{{ route("lead.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: fd
      });
      const data = await res.json();
      if(data.success) {
        form.style.display = 'none';
        successMsg.style.display = 'block';
      } else {
        throw new Error('Failed to send');
      }
    } catch(err) {
      errorMsg.style.display = 'block';
      submitBtn.textContent = 'Send me my free leak report →';
      submitBtn.disabled = false;
    }
  });
})();

// ---------- ROI calculator ----------
(function(){
  const calls = document.getElementById('calls');
  const value = document.getElementById('value');
  const recover = document.getElementById('recover');
  if(!calls) return;
  const fmt = n => '$' + Math.round(n).toLocaleString('en-US');
  function update(){
    const c = +calls.value, v = +value.value, r = +recover.value/100;
    // conservative: assume ~1 in 4 missed callers would have booked, then recovered share
    const monthly = c * 0.25 * v * r;
    document.getElementById('calls-v').textContent = c;
    document.getElementById('value-v').textContent = fmt(v);
    document.getElementById('recover-v').textContent = r*100 + '%';
    document.getElementById('leak-num').textContent = fmt(monthly);
    document.getElementById('year-num').textContent = fmt(monthly*12);
  }
  [calls,value,recover].forEach(el=>el.addEventListener('input',update));
  update();
})();

document.getElementById('yr').textContent = new Date().getFullYear();
</script>
</body>
</html>
