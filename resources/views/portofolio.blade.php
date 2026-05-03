<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Arif Syaiful Anwar — Full Stack & Mobile Developer</title>
  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230a0c10'/%3E%3Crect x='1' y='1' width='30' height='30' rx='5' fill='none' stroke='%23c9a84c' stroke-width='1.5'/%3E%3Ctext x='16' y='22' text-anchor='middle' font-family='Georgia,serif' font-size='13' font-weight='700' fill='%23c9a84c'%3EASA%3C/text%3E%3C/svg%3E"/>
  <link rel="alternate icon" type="image/png" href="https://avatars.githubusercontent.com/u/100073035?v=4"/>
  <link rel="apple-touch-icon" href="https://avatars.githubusercontent.com/u/100073035?v=4"/>
  <meta name="theme-color" content="#0a0c10"/>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=DM+Sans:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
<style>
:root{--bg:#0a0c10;--surface:#10141c;--surface2:#161b26;--border:rgba(255,255,255,0.07);--gold:#c9a84c;--gold-light:#e8c97a;--gold-dim:rgba(201,168,76,0.15);--text:#e8eaf0;--text-muted:#7a8499;--text-dim:#4a5168;--accent:#3b82f6;--green:#22c55e;--radius:4px;}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth;}
body{background:var(--bg);color:var(--text);font-family:'DM Sans',sans-serif;font-size:15px;line-height:1.7;overflow-x:hidden;}
::-webkit-scrollbar{width:4px;}::-webkit-scrollbar-track{background:var(--bg);}::-webkit-scrollbar-thumb{background:var(--gold);border-radius:2px;}
::selection{background:var(--gold-dim);color:var(--gold-light);}

nav{position:fixed;top:0;left:0;right:0;z-index:100;display:flex;align-items:center;justify-content:space-between;padding:0 48px;height:64px;background:rgba(10,12,16,0.92);backdrop-filter:blur(20px);border-bottom:1px solid var(--border);animation:fadeDown .6s ease both;}
.nav-logo{font-family:'Cormorant Garamond',serif;font-size:19px;font-weight:600;color:var(--gold);text-decoration:none;}
.nav-links{display:flex;gap:28px;list-style:none;}
.nav-links a{font-size:11px;font-weight:500;letter-spacing:1.1px;text-transform:uppercase;color:var(--text-muted);text-decoration:none;transition:color .2s;}
.nav-links a:hover{color:var(--gold);}
.nav-cta{font-size:11px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:var(--gold);border:1px solid var(--gold);padding:7px 18px;text-decoration:none;border-radius:var(--radius);transition:background .2s,color .2s;}
.nav-cta:hover{background:var(--gold);color:var(--bg);}

#hero{min-height:100vh;display:flex;align-items:center;padding:120px 48px 80px;position:relative;overflow:hidden;}
.hero-bg{position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 70% 50%,rgba(201,168,76,.06) 0%,transparent 70%),radial-gradient(ellipse 40% 60% at 20% 80%,rgba(59,130,246,.05) 0%,transparent 60%);}
.hero-grid{position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,.025) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.025) 1px,transparent 1px);background-size:60px 60px;mask-image:radial-gradient(ellipse 80% 80% at 50% 50%,black 20%,transparent 80%);}
.hero-content{position:relative;max-width:860px;}
.hero-badge{display:inline-flex;align-items:center;gap:8px;background:var(--gold-dim);border:1px solid rgba(201,168,76,.25);color:var(--gold);font-size:11px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;padding:6px 14px;border-radius:2px;margin-bottom:28px;animation:fadeUp .7s .1s ease both;}
.hero-badge::before{content:'';width:6px;height:6px;border-radius:50%;background:var(--green);box-shadow:0 0 8px var(--green);animation:pulse 2s infinite;}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.4}}
h1{font-family:'Cormorant Garamond',serif;font-size:clamp(52px,8vw,88px);font-weight:300;line-height:1.05;letter-spacing:-1px;color:var(--text);animation:fadeUp .7s .2s ease both;}
h1 span{color:var(--gold);font-weight:600;}
.hero-sub{margin-top:24px;max-width:560px;font-size:16px;color:var(--text-muted);line-height:1.8;animation:fadeUp .7s .35s ease both;}
.hero-actions{display:flex;gap:16px;margin-top:40px;flex-wrap:wrap;animation:fadeUp .7s .45s ease both;}
.btn-primary{display:inline-flex;align-items:center;gap:8px;background:var(--gold);color:var(--bg);font-size:13px;font-weight:600;letter-spacing:.8px;text-transform:uppercase;padding:13px 26px;border-radius:var(--radius);text-decoration:none;border:none;cursor:pointer;font-family:'DM Sans',sans-serif;transition:opacity .2s,transform .2s;}
.btn-primary:hover{opacity:.9;transform:translateY(-1px);}
.btn-secondary{display:inline-flex;align-items:center;gap:8px;background:transparent;color:var(--text);border:1px solid var(--border);font-size:13px;font-weight:500;letter-spacing:.8px;text-transform:uppercase;padding:13px 26px;border-radius:var(--radius);text-decoration:none;transition:border-color .2s,color .2s;}
.btn-secondary:hover{border-color:var(--gold);color:var(--gold);}
.hero-stats{display:flex;gap:48px;margin-top:64px;padding-top:40px;border-top:1px solid var(--border);animation:fadeUp .7s .55s ease both;flex-wrap:wrap;}
.stat-num{font-family:'Cormorant Garamond',serif;font-size:42px;font-weight:700;color:var(--gold);line-height:1;}
.stat-label{font-size:12px;color:var(--text-muted);letter-spacing:.8px;margin-top:4px;}

section{padding:96px 48px;max-width:1200px;margin:0 auto;}
.section-tag{font-size:11px;font-weight:600;letter-spacing:2px;text-transform:uppercase;color:var(--gold);display:flex;align-items:center;gap:12px;margin-bottom:16px;}
.section-tag::after{content:'';flex:0 0 40px;height:1px;background:var(--gold);}
h2{font-family:'Cormorant Garamond',serif;font-size:clamp(34px,5vw,54px);font-weight:300;line-height:1.1;color:var(--text);margin-bottom:14px;}
h2 em{font-style:italic;color:var(--gold);}
.section-desc{color:var(--text-muted);max-width:500px;font-size:15px;}

/* ABOUT */
.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:72px;align-items:start;margin-top:56px;}
.profile-photo-wrap{display:flex;flex-direction:column;align-items:center;gap:20px;margin-bottom:32px;}
.profile-photo{width:140px;height:140px;border-radius:50%;object-fit:cover;border:3px solid var(--gold);box-shadow:0 0 0 6px var(--gold-dim),0 0 32px rgba(201,168,76,0.2);transition:transform .3s;}
.profile-photo:hover{transform:scale(1.04);}
.profile-name-tag{text-align:center;}
.profile-name-tag .pn{font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:600;color:var(--text);}
.profile-name-tag .pr{font-size:11px;color:var(--gold);letter-spacing:1.5px;text-transform:uppercase;margin-top:2px;}
.about-text p{color:var(--text-muted);margin-bottom:16px;line-height:1.85;}
.about-text p strong{color:var(--text);font-weight:500;}
.about-highlights{display:flex;flex-direction:column;gap:11px;margin-top:26px;}
.highlight-item{display:flex;align-items:flex-start;gap:13px;padding:13px 15px;background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);transition:border-color .2s;}
.highlight-item:hover{border-color:rgba(201,168,76,.3);}
.hi-icon{width:32px;height:32px;flex-shrink:0;background:var(--gold-dim);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;font-size:14px;}
.hi-title{font-size:13px;font-weight:600;color:var(--text);}
.hi-desc{font-size:12px;color:var(--text-muted);margin-top:2px;}
.about-visual{position:relative;background:var(--surface);border:1px solid var(--border);border-radius:6px;padding:30px;overflow:hidden;}
.about-visual::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,transparent,var(--gold),transparent);}
.code-block{font-family:'JetBrains Mono',monospace;font-size:12px;line-height:2;color:var(--text-muted);}
.code-line{display:flex;gap:14px;}
.ln{color:var(--text-dim);user-select:none;min-width:18px;text-align:right;}
.kw{color:#7dd3fc;}.fn{color:#fbbf24;}.str{color:#86efac;}.cm{color:var(--text-dim);font-style:italic;}.prop{color:#c084fc;}

/* SKILLS */
#skills{background:linear-gradient(180deg,transparent,var(--surface2) 50%,transparent);}
.skills-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:40px;}
.skill-card{background:var(--surface);border:1px solid var(--border);border-radius:6px;padding:20px;transition:border-color .3s,transform .3s;position:relative;overflow:hidden;}
.skill-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,var(--gold),transparent);opacity:0;transition:opacity .3s;}
.skill-card:hover{border-color:rgba(201,168,76,.25);transform:translateY(-2px);}
.skill-card:hover::after{opacity:1;}
.skill-card-header{display:flex;align-items:center;gap:10px;margin-bottom:13px;}
.skill-icon{width:34px;height:34px;background:var(--gold-dim);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;font-size:16px;}
.skill-title{font-size:13px;font-weight:600;color:var(--text);}
.skill-subtitle{font-size:10px;color:var(--text-muted);}
.skill-tags{display:flex;flex-wrap:wrap;gap:6px;}
.skill-tag{font-family:'JetBrains Mono',monospace;font-size:10px;font-weight:500;background:var(--surface2);color:var(--text-muted);border:1px solid var(--border);padding:3px 9px;border-radius:2px;transition:color .2s,border-color .2s;}
.skill-card:hover .skill-tag{color:var(--gold-light);border-color:rgba(201,168,76,.2);}

/* LANG BAR */
.lang-section{margin-top:20px;padding:24px 26px;background:var(--surface);border:1px solid var(--border);border-radius:6px;position:relative;overflow:hidden;}
.lang-section::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--gold),var(--accent));}
.lang-title{font-size:11px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:var(--text-muted);margin-bottom:16px;}
.lang-bar{display:flex;height:6px;border-radius:4px;overflow:hidden;gap:2px;margin-bottom:13px;}
.lang-seg{height:100%;border-radius:2px;}
.lang-legend{display:flex;flex-wrap:wrap;gap:12px;}
.lang-item{display:flex;align-items:center;gap:6px;}
.lang-dot{width:8px;height:8px;border-radius:50%;flex-shrink:0;}
.lang-name{font-family:'JetBrains Mono',monospace;font-size:10px;color:var(--text-muted);}
.lang-pct{font-size:10px;color:var(--text-dim);}

/* ENTERPRISE PROJECTS */
.ent-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:44px;}
.project-card{background:var(--surface);border:1px solid var(--border);border-radius:6px;padding:22px;display:flex;flex-direction:column;transition:border-color .3s,transform .25s;position:relative;overflow:hidden;}
.project-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--gold),var(--accent));opacity:0;transition:opacity .3s;}
.project-card:hover{border-color:rgba(201,168,76,.3);transform:translateY(-3px);}
.project-card:hover::before{opacity:1;}
.proj-header{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:11px;}
.proj-icon{font-size:22px;}
.proj-stack{display:flex;flex-wrap:wrap;gap:4px;}
.stag{font-size:9px;font-weight:700;letter-spacing:.6px;text-transform:uppercase;padding:2px 6px;border-radius:2px;border:1px solid;}
.s-net{color:#818cf8;border-color:rgba(129,140,248,.3);background:rgba(129,140,248,.08);}
.s-flutter{color:#38bdf8;border-color:rgba(56,189,248,.3);background:rgba(56,189,248,.08);}
.s-py{color:#fbbf24;border-color:rgba(251,191,36,.3);background:rgba(251,191,36,.08);}
.s-sql{color:#34d399;border-color:rgba(52,211,153,.3);background:rgba(52,211,153,.08);}
.s-js{color:#f97316;border-color:rgba(249,115,22,.3);background:rgba(249,115,22,.08);}
.proj-title{font-family:'Cormorant Garamond',serif;font-size:16px;font-weight:600;color:var(--text);margin-bottom:7px;line-height:1.25;}
.proj-desc{font-size:12px;color:var(--text-muted);line-height:1.75;flex:1;}
.proj-footer{margin-top:14px;padding-top:11px;border-top:1px solid var(--border);}
.proj-type{font-size:9px;color:var(--text-dim);letter-spacing:.8px;text-transform:uppercase;}

/* GITHUB REPOS */
#github{background:linear-gradient(180deg,transparent,var(--surface2) 30%,transparent);}
.gh-topbar{display:flex;align-items:center;gap:16px;margin:36px 0 24px;padding:16px 20px;background:var(--surface);border:1px solid var(--border);border-radius:6px;}
.gh-avatar{width:40px;height:40px;border-radius:50%;border:2px solid rgba(201,168,76,.3);overflow:hidden;flex-shrink:0;}
.gh-avatar img{width:100%;height:100%;object-fit:cover;}
.gh-name{font-size:14px;font-weight:600;color:var(--text);}
.gh-handle{font-family:'JetBrains Mono',monospace;font-size:11px;color:var(--text-muted);}
.gh-stats{margin-left:auto;display:flex;gap:20px;flex-shrink:0;}
.gh-stat-item{text-align:center;}
.gh-stat-num{font-family:'Cormorant Garamond',serif;font-size:20px;font-weight:700;color:var(--gold);line-height:1;}
.gh-stat-label{font-size:10px;color:var(--text-dim);letter-spacing:.5px;}
.gh-link{font-size:11px;font-weight:600;color:var(--gold);text-decoration:none;border:1px solid rgba(201,168,76,.3);padding:6px 14px;border-radius:var(--radius);white-space:nowrap;transition:background .2s;flex-shrink:0;}
.gh-link:hover{background:var(--gold-dim);}

/* FILTER + SEARCH */
.repo-controls{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;flex-wrap:wrap;gap:12px;}
.filter-bar{display:flex;gap:7px;flex-wrap:wrap;}
.filter-btn{font-size:11px;font-weight:500;padding:5px 12px;border-radius:20px;border:1px solid var(--border);background:transparent;color:var(--text-muted);cursor:pointer;transition:all .2s;font-family:'DM Sans',sans-serif;}
.filter-btn:hover,.filter-btn.active{border-color:var(--gold);color:var(--gold);background:var(--gold-dim);}
.search-wrap{display:flex;align-items:center;gap:10px;}
.repo-count-label{font-size:12px;color:var(--text-dim);}
.repo-count-label span{color:var(--gold);font-weight:600;}
.search-input{background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);padding:7px 13px;color:var(--text);font-family:'DM Sans',sans-serif;font-size:12px;outline:none;transition:border-color .2s;width:190px;}
.search-input:focus{border-color:var(--gold);}
.search-input::placeholder{color:var(--text-dim);}

/* REPO GRID */
.repos-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;}
.repo-card{background:var(--surface);border:1px solid var(--border);border-radius:6px;padding:16px 18px;display:flex;flex-direction:column;gap:8px;transition:border-color .2s,transform .2s;position:relative;}
.repo-card.is-public{text-decoration:none;cursor:pointer;}
.repo-card.is-public:hover{border-color:rgba(201,168,76,.3);transform:translateY(-2px);}
.repo-card.is-private{cursor:default;border-style:solid;border-color:rgba(255,255,255,0.05);}
.repo-badge{position:absolute;top:10px;right:10px;font-size:9px;font-weight:700;letter-spacing:.8px;text-transform:uppercase;padding:2px 7px;border-radius:10px;}
.badge-private{color:var(--text-dim);background:var(--surface2);border:1px solid var(--border);}
.badge-public{color:#22c55e;background:rgba(34,197,94,.08);border:1px solid rgba(34,197,94,.2);}
.repo-name{font-family:'JetBrains Mono',monospace;font-size:12px;font-weight:500;color:var(--gold);padding-right:52px;word-break:break-all;}
.repo-card.is-private .repo-name{color:var(--text-muted);}
.repo-desc{font-size:11.5px;color:var(--text-muted);line-height:1.6;flex:1;}
.repo-footer{display:flex;align-items:center;justify-content:space-between;}
.repo-lang-info{display:flex;align-items:center;gap:6px;}
.repo-lang-dot{width:8px;height:8px;border-radius:50%;flex-shrink:0;}
.repo-lang{font-size:10px;color:var(--text-dim);font-family:'JetBrains Mono',monospace;}
.repo-date{font-size:10px;color:var(--text-dim);}
.repo-lock{font-size:11px;color:var(--text-dim);}
.repos-empty{padding:48px;text-align:center;color:var(--text-muted);font-size:14px;grid-column:1/-1;}

/* TIMELINE */
#experience .timeline{margin-top:50px;position:relative;}
.timeline::before{content:'';position:absolute;left:0;top:0;bottom:0;width:1px;background:linear-gradient(180deg,var(--gold),transparent);}
.tl-item{padding-left:36px;padding-bottom:42px;position:relative;}
.tl-item::before{content:'';position:absolute;left:-4px;top:6px;width:9px;height:9px;border-radius:50%;background:var(--gold);box-shadow:0 0 12px rgba(201,168,76,.5);}
.tl-date{font-family:'JetBrains Mono',monospace;font-size:11px;color:var(--gold);letter-spacing:1px;margin-bottom:8px;}
.tl-title{font-size:16px;font-weight:600;color:var(--text);margin-bottom:3px;}
.tl-company{font-size:13px;color:var(--text-muted);margin-bottom:11px;}
.tl-desc{font-size:13px;color:var(--text-muted);line-height:1.85;max-width:600px;}
.tl-tags{display:flex;flex-wrap:wrap;gap:7px;margin-top:13px;}
.tl-tag{font-size:10px;color:var(--text-dim);background:var(--surface);border:1px solid var(--border);padding:3px 9px;border-radius:2px;}

/* CONTACT */
#contact{border-top:1px solid var(--border);}
.contact-inner{display:grid;grid-template-columns:1fr 1fr;gap:68px;align-items:start;margin-top:52px;}
.contact-left h3{font-family:'Cormorant Garamond',serif;font-size:clamp(24px,3vw,40px);font-weight:300;line-height:1.25;margin-bottom:14px;}
.contact-left p{color:var(--text-muted);margin-bottom:24px;}
.contact-links{display:flex;flex-direction:column;gap:10px;}
.contact-link{display:flex;align-items:center;gap:12px;padding:12px 15px;background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);text-decoration:none;transition:border-color .2s,transform .2s;}
.contact-link:hover{border-color:var(--gold);transform:translateX(4px);}
.cl-icon{width:32px;height:32px;background:var(--gold-dim);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0;}
.cl-label{font-size:10px;color:var(--text-muted);text-transform:uppercase;letter-spacing:.8px;}
.cl-value{font-size:12px;font-weight:500;color:var(--text);}
.contact-right{background:var(--surface);border:1px solid var(--border);border-radius:6px;padding:28px;position:relative;overflow:hidden;}
.contact-right::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--gold),var(--accent));}
.form-group{margin-bottom:15px;}
.form-label{font-size:10px;color:var(--text-muted);letter-spacing:1px;text-transform:uppercase;display:block;margin-bottom:6px;}
.form-input{width:100%;background:var(--bg);border:1px solid var(--border);border-radius:var(--radius);padding:10px 13px;color:var(--text);font-family:'DM Sans',sans-serif;font-size:13px;outline:none;transition:border-color .2s;}
.form-input:focus{border-color:var(--gold);}
.form-input::placeholder{color:var(--text-dim);}
textarea.form-input{resize:none;height:85px;}

footer{border-top:1px solid var(--border);padding:24px 48px;display:flex;justify-content:space-between;align-items:center;}
.footer-copy{font-size:11px;color:var(--text-dim);}
.footer-logo{font-family:'Cormorant Garamond',serif;font-size:17px;font-weight:600;color:var(--gold);}

@keyframes fadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
@keyframes fadeDown{from{opacity:0;transform:translateY(-12px)}to{opacity:1;transform:translateY(0)}}
.reveal{opacity:0;transform:translateY(22px);transition:opacity .65s ease,transform .65s ease;}
.reveal.visible{opacity:1;transform:translateY(0);}

@media(max-width:1000px){.skills-grid,.ent-grid,.repos-grid{grid-template-columns:repeat(2,1fr);}}
@media(max-width:700px){
  nav{padding:0 18px;}.nav-links{display:none;}
  #hero{padding:100px 18px 60px;}section{padding:64px 18px;}
  .about-grid,.contact-inner{grid-template-columns:1fr;gap:36px;}
  .skills-grid,.ent-grid,.repos-grid{grid-template-columns:1fr;}
  .hero-stats{gap:20px;}
  footer{padding:18px;flex-direction:column;gap:7px;text-align:center;}
  .repo-controls{flex-direction:column;align-items:flex-start;}
  .gh-stats{display:none;}
}

/* HERO VISUAL */
.hero-visual{position:absolute;right:48px;top:50%;transform:translateY(-50%);display:flex;align-items:center;justify-content:center;width:420px;height:420px;}
.hero-photo-ring{position:relative;width:240px;height:240px;}
.hero-photo-ring::before{content:'';position:absolute;inset:-10px;border-radius:50%;border:1px solid rgba(201,168,76,0.3);animation:ringPulse 3s ease-in-out infinite;}
.hero-photo-ring::after{content:'';position:absolute;inset:-22px;border-radius:50%;border:1px dashed rgba(201,168,76,0.15);animation:ringPulse 3s ease-in-out infinite reverse;}
@keyframes ringPulse{0%,100%{transform:scale(1);opacity:1}50%{transform:scale(1.04);opacity:0.6}}
.hero-photo{width:240px;height:240px;border-radius:50%;object-fit:cover;border:3px solid var(--gold);box-shadow:0 0 0 8px var(--gold-dim),0 0 60px rgba(201,168,76,0.15);}
.tech-badge{position:absolute;display:flex;align-items:center;gap:7px;background:var(--surface);border:1px solid var(--border);border-radius:20px;padding:7px 13px;font-size:11px;font-weight:600;color:var(--text-muted);white-space:nowrap;backdrop-filter:blur(10px);animation:floatBadge 4s ease-in-out infinite;}
.tech-badge .bd{width:8px;height:8px;border-radius:50%;flex-shrink:0;}
@keyframes floatBadge{0%,100%{transform:translateY(0)}50%{transform:translateY(-6px)}}
.tb1{top:-10px;left:50%;transform:translateX(-50%);animation-delay:0s;}
.tb2{top:30px;right:-30px;animation-delay:0.5s;}
.tb3{top:50%;right:-60px;transform:translateY(-50%);animation-delay:1s;}
.tb4{bottom:30px;right:-30px;animation-delay:1.5s;}
.tb5{bottom:-10px;left:50%;transform:translateX(-50%);animation-delay:2s;}
.tb6{bottom:30px;left:-30px;animation-delay:2.5s;}
.tb7{top:50%;left:-70px;transform:translateY(-50%);animation-delay:3s;}
.tb8{top:30px;left:-30px;animation-delay:3.5s;}
.hero-online{position:absolute;bottom:10px;right:10px;width:24px;height:24px;border-radius:50%;background:var(--green);border:3px solid var(--bg);box-shadow:0 0 10px var(--green);}
@media(max-width:1100px){.hero-visual{display:none;}}

/* TYPING EFFECT */
.typing-cursor{display:inline-block;width:3px;height:0.85em;background:var(--gold);margin-left:4px;vertical-align:middle;animation:blink .7s step-end infinite;}
@keyframes blink{0%,100%{opacity:1}50%{opacity:0}}
.typing-word{color:var(--gold);font-weight:600;}

/* ===== WORK PROCESS SECTION ===== */
#process{background:linear-gradient(180deg,transparent,var(--surface2) 40%,transparent);}

/* WORKFLOW STEPS */
.workflow-steps{display:grid;grid-template-columns:repeat(5,1fr);gap:0;margin:48px 0;position:relative;}
.workflow-steps::before{content:'';position:absolute;top:28px;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,var(--gold),var(--accent),var(--gold),transparent);opacity:.4;}
.wf-step{display:flex;flex-direction:column;align-items:center;gap:12px;position:relative;z-index:1;}
.wf-icon{width:56px;height:56px;border-radius:50%;background:var(--surface);border:2px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:22px;transition:all .3s;position:relative;}
.wf-step.active .wf-icon{border-color:var(--gold);background:var(--gold-dim);box-shadow:0 0 20px rgba(201,168,76,0.3);}
.wf-step.done .wf-icon{border-color:#22c55e;background:rgba(34,197,94,.1);}
.wf-step.done .wf-icon::after{content:"✓";position:absolute;top:-4px;right:-4px;width:16px;height:16px;border-radius:50%;background:#22c55e;color:var(--bg);font-size:9px;font-weight:700;display:flex;align-items:center;justify-content:center;}
.wf-label{font-size:11px;font-weight:600;letter-spacing:.8px;text-transform:uppercase;color:var(--text-muted);text-align:center;}
.wf-step.active .wf-label{color:var(--gold);}
.wf-step.done .wf-label{color:#22c55e;}
.wf-pulse{position:absolute;inset:-4px;border-radius:50%;border:2px solid var(--gold);animation:wfPulse 1.5s ease-in-out infinite;opacity:0;}
.wf-step.active .wf-pulse{opacity:1;}
@keyframes wfPulse{0%{transform:scale(1);opacity:.8}100%{transform:scale(1.5);opacity:0}}

/* PROCESS CONTENT AREA */
.process-content{display:grid;grid-template-columns:1fr 1fr;gap:24px;margin-top:8px;}



/* GITHUB ACTIVITY */
.activity-panel{background:var(--surface);border:1px solid var(--border);border-radius:8px;overflow:hidden;}
.activity-header{display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--border);}
.activity-title{font-size:12px;font-weight:600;color:var(--text);display:flex;align-items:center;gap:8px;}
.live-dot{width:7px;height:7px;border-radius:50%;background:var(--green);box-shadow:0 0 6px var(--green);animation:pulse 2s infinite;}
.activity-sub{font-size:10px;color:var(--text-dim);}
.activity-feed{padding:8px;max-height:296px;overflow-y:auto;}
.activity-feed::-webkit-scrollbar{width:3px;}
.activity-feed::-webkit-scrollbar-thumb{background:var(--border);}
.activity-item{display:flex;gap:10px;padding:9px 8px;border-radius:4px;transition:background .2s;cursor:default;}
.activity-item:hover{background:var(--surface2);}
.activity-icon-wrap{width:28px;height:28px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0;}
.activity-info{flex:1;min-width:0;}
.activity-repo{font-family:"JetBrains Mono",monospace;font-size:11px;color:var(--gold);font-weight:500;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.activity-msg{font-size:11px;color:var(--text-muted);margin-top:1px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.activity-time{font-size:10px;color:var(--text-dim);margin-left:auto;flex-shrink:0;margin-top:2px;}
.activity-loading{padding:24px;text-align:center;color:var(--text-dim);font-size:12px;}
.activity-spinner{width:16px;height:16px;border:2px solid var(--border);border-top-color:var(--gold);border-radius:50%;animation:spin .7s linear infinite;display:inline-block;margin-right:8px;vertical-align:middle;}

/* COMMIT STATS */
.commit-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin-top:16px;}
.cstat{background:var(--surface);border:1px solid var(--border);border-radius:6px;padding:14px;text-align:center;}
.cstat-num{font-family:"Cormorant Garamond",serif;font-size:28px;font-weight:700;color:var(--gold);line-height:1;}
.cstat-label{font-size:10px;color:var(--text-dim);letter-spacing:.5px;margin-top:3px;}

@media(max-width:900px){
  .workflow-steps{grid-template-columns:repeat(3,1fr);gap:20px;}
  .workflow-steps::before{display:none;}
  .process-content{grid-template-columns:1fr;}
}

/* CONTRIBUTION GRAPH */
.contrib-section{margin-top:32px;}
.contrib-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:14px;}
.contrib-title{font-size:12px;font-weight:600;color:var(--text);display:flex;align-items:center;gap:8px;}
.contrib-sub{font-size:10px;color:var(--text-dim);}
.contrib-graph-wrap{background:var(--surface);border:1px solid var(--border);border-radius:8px;padding:20px;overflow:hidden;position:relative;}
.contrib-graph-wrap::before{content:'';position:absolute;top:0;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--gold),var(--accent));}
.contrib-graph-wrap img{width:100%;border-radius:4px;display:block;filter:hue-rotate(0deg);}
.contrib-summary{display:flex;gap:16px;margin-top:14px;flex-wrap:wrap;}
.contrib-badge{display:flex;align-items:center;gap:6px;font-size:11px;color:var(--text-muted);}
.contrib-badge span{color:var(--gold);font-weight:600;}

/* COLLAB REPOS */
.collab-panel{background:var(--surface);border:1px solid var(--border);border-radius:8px;overflow:hidden;margin-top:16px;}
.collab-header{display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--border);}
.collab-title{font-size:12px;font-weight:600;color:var(--text);display:flex;align-items:center;gap:8px;}
.collab-feed{padding:8px;max-height:260px;overflow-y:auto;}
.collab-feed::-webkit-scrollbar{width:3px;}
.collab-feed::-webkit-scrollbar-thumb{background:var(--border);}
.collab-item{display:flex;gap:10px;padding:8px;border-radius:4px;transition:background .2s;}
.collab-item:hover{background:var(--surface2);}
.collab-repo-icon{width:30px;height:30px;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0;background:rgba(59,130,246,0.12);border:1px solid rgba(59,130,246,0.2);}
.collab-info{flex:1;min-width:0;}
.collab-repo-name{font-family:'JetBrains Mono',monospace;font-size:11px;color:#38bdf8;font-weight:500;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.collab-owner{font-size:10px;color:var(--text-dim);margin-top:1px;}
.collab-msg{font-size:11px;color:var(--text-muted);margin-top:2px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.collab-meta{display:flex;flex-direction:column;align-items:flex-end;gap:3px;flex-shrink:0;}
.collab-time{font-size:10px;color:var(--text-dim);}
.collab-badge-type{font-size:9px;font-weight:600;letter-spacing:.5px;padding:2px 6px;border-radius:3px;text-transform:uppercase;}
.badge-push{color:#22c55e;background:rgba(34,197,94,.1);border:1px solid rgba(34,197,94,.2);}
.badge-collab{color:#38bdf8;background:rgba(56,189,248,.1);border:1px solid rgba(56,189,248,.2);}
.badge-own{color:var(--gold);background:var(--gold-dim);border:1px solid rgba(201,168,76,.2);}
.collab-empty{padding:24px;text-align:center;color:var(--text-dim);font-size:12px;}
</style>
</head>
<body>

<nav>
  <a href="#hero" class="nav-logo">Arif Syaiful Anwar</a>
  <ul class="nav-links">
    <li><a href="#about">About</a></li>
    <li><a href="#process">Process</a></li><li><a href="#skills">Skills</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#github">GitHub</a></li>
    <li><a href="#experience">Experience</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <a href="#contact" class="nav-cta">Hire Me</a>
</nav>

<div id="hero">
  <div class="hero-bg"></div><div class="hero-grid"></div>
  <div class="hero-content">
    <div class="hero-badge">Available for new opportunities</div>
    <h1>Full Stack &amp;<br><span id="typing-text" class="typing-word"></span><span class="typing-cursor" id="cursor"></span><br><span id="typing-rest" style="opacity:0">Developer.</span></h1>
    <p class="hero-sub">Hi, I'm <strong>Arif Syaiful Anwar</strong> — building enterprise web systems and cross-platform mobile apps with <strong>ASP.NET Core</strong>, <strong>Flutter</strong>, <strong>Kotlin</strong>, <strong>Python</strong>, and <strong>SQL Server</strong>. From cooperative ERP to IoT smart devices.</p>
    <div class="hero-actions">
      <a href="#projects" class="btn-primary">View My Work →</a>
      <a href="https://github.com/ArifSyaifulAnwar" target="_blank" class="btn-secondary">GitHub Profile</a>
    </div>
  </div>
  <div class="hero-visual">
    <div class="hero-photo-ring">
      <img src="https://avatars.githubusercontent.com/u/100073035?v=4" alt="Arif Syaiful Anwar" class="hero-photo"/>
      <div class="hero-online"></div>
    </div>
    <div class="tech-badge tb1"><div class="bd" style="background:#818cf8"></div>ASP.NET Core</div>
    <div class="tech-badge tb2"><div class="bd" style="background:#38bdf8"></div>Flutter</div>
    <div class="tech-badge tb3"><div class="bd" style="background:#f59e0b"></div>Kotlin</div>
    <div class="tech-badge tb4"><div class="bd" style="background:#fbbf24"></div>Python</div>
    <div class="tech-badge tb5"><div class="bd" style="background:#34d399"></div>SQL Server</div>
    <div class="tech-badge tb6"><div class="bd" style="background:#f97316"></div>JavaScript</div>
    <div class="tech-badge tb7"><div class="bd" style="background:#f472b6"></div>C++ / IoT</div>
    <div class="tech-badge tb8"><div class="bd" style="background:#60a5fa"></div>PHP</div>
  </div>
    <div class="hero-stats">
      <div><div class="stat-num">54</div><div class="stat-label">Total Repos</div></div>
      <div><div class="stat-num">3+</div><div class="stat-label">Years Experience</div></div>
      <div><div class="stat-num">8+</div><div class="stat-label">Languages</div></div>
    </div>
  </div>
</div>

<!-- ABOUT -->
<section id="about">
  <div class="section-tag">About Me</div>
  <h2>Crafting <em>reliable</em><br>software solutions</h2>
  <div class="about-grid reveal">
    <div class="about-text">
      <div class="profile-photo-wrap">
        <img src="https://avatars.githubusercontent.com/u/100073035?v=4" alt="Arif Syaiful Anwar" class="profile-photo"/>
        <div class="profile-name-tag">
          <div class="pn">Arif Syaiful Anwar</div>
          <div class="pr">Full Stack &amp; Mobile Developer</div>
        </div>
      </div>
      <p>I'm <strong>Arif Syaiful Anwar</strong>, a Full Stack & Mobile Developer specializing in enterprise systems for cooperative, retail, financial, and legal organizations, plus Android and cross-platform mobile apps.</p>
      <p>My work spans <strong>ASP.NET Core</strong> backends with layered architecture, <strong>Flutter & Kotlin</strong> Android apps, <strong>Python</strong> AI services, browser automation with <strong>JavaScript</strong>, and IoT devices with <strong>C++/Arduino/ESP8266</strong>.</p>
      <p>From multi-step approval workflows and face-recognition attendance to payment gateways, document encryption, and smart sensors — I build real solutions with clean, maintainable code.</p>
      <div class="about-highlights">
        <div class="highlight-item"><div class="hi-icon">🏗️</div><div><div class="hi-title">Enterprise Web Systems</div><div class="hi-desc">ASP.NET Core MVC & API — ERP, payment gateway, legal docs, hotel systems</div></div></div>
        <div class="highlight-item"><div class="hi-icon">📱</div><div><div class="hi-title">Android & Flutter Apps</div><div class="hi-desc">Kotlin & Flutter — biometric, face ID, attendance, cooperative mobile apps</div></div></div>
        <div class="highlight-item"><div class="hi-icon">🔧</div><div><div class="hi-title">Automation & IoT</div><div class="hi-desc">Chrome Extension automation + Python AI + ESP8266 smart devices</div></div></div>
      </div>
    </div>
    <div class="about-visual">
      <div class="code-block">
        <div class="code-line"><span class="ln">1</span><span class="cm">// developer.profile.cs</span></div>
        <div class="code-line"><span class="ln">2</span></div>
        <div class="code-line"><span class="ln">3</span><span class="kw">public class</span> <span class="fn">Developer</span></div>
        <div class="code-line"><span class="ln">4</span>{</div>
        <div class="code-line"><span class="ln">5</span>&nbsp;&nbsp;<span class="prop">Name</span> = <span class="str">"Arif Syaiful Anwar"</span>;</div>
        <div class="code-line"><span class="ln">6</span>&nbsp;&nbsp;<span class="prop">Stack</span> = [<span class="str">"ASP.NET Core"</span>,<span class="str">"Flutter"</span>,</div>
        <div class="code-line"><span class="ln">7</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="str">"Kotlin"</span>,<span class="str">"Python"</span>,</div>
        <div class="code-line"><span class="ln">8</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="str">"JavaScript"</span>,<span class="str">"PHP"</span>,</div>
        <div class="code-line"><span class="ln">9</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="str">"SQL Server"</span>,<span class="str">"C++"</span>];</div>
        <div class="code-line"><span class="ln">10</span>&nbsp;&nbsp;<span class="prop">Repos</span> = <span class="str">54</span>; <span class="cm">// public + private</span></div>
        <div class="code-line"><span class="ln">11</span>&nbsp;&nbsp;<span class="prop">Status</span> = <span class="str">"Open to Work ✓"</span>;</div>
        <div class="code-line"><span class="ln">12</span>}</div>
      </div>
    </div>
  </div>
</section>


<!-- WORK PROCESS -->
<section id="process">
  <div class="reveal">
    <div class="section-tag">How I Work</div>
    <h2>Real-time <em>work process</em></h2>
    <p class="section-desc">Not just the final result — this is the real process of how I build every system from scratch to production.</p>
  </div>

  <!-- WORKFLOW STEPS -->
  <div class="workflow-steps reveal" id="workflow">
    <div class="wf-step done" data-step="0">
      <div class="wf-icon">📋<div class="wf-pulse"></div></div>
      <div class="wf-label">Planning</div>
    </div>
    <div class="wf-step done" data-step="1">
      <div class="wf-icon">🗄️<div class="wf-pulse"></div></div>
      <div class="wf-label">Database</div>
    </div>
    <div class="wf-step active" data-step="2">
      <div class="wf-icon">⌨️<div class="wf-pulse"></div></div>
      <div class="wf-label">Coding</div>
    </div>
    <div class="wf-step" data-step="3">
      <div class="wf-icon">🧪<div class="wf-pulse"></div></div>
      <div class="wf-label">Testing</div>
    </div>
    <div class="wf-step" data-step="4">
      <div class="wf-icon">🚀<div class="wf-pulse"></div></div>
      <div class="wf-label">Deploy</div>
    </div>
  </div>

  <div class="process-content reveal">

    <!-- PROCESS STATS CARD -->
    <div style="display:flex;flex-direction:column;gap:16px;">

      <!-- TODAY ACTIVITY -->
      <div class="activity-panel">
        <div class="activity-header">
          <div class="activity-title"><div class="live-dot"></div>Today's Focus</div>
        </div>
        <div style="padding:16px;display:flex;flex-direction:column;gap:10px;" id="focus-items">
          <div class="activity-item"><div class="activity-icon-wrap" style="background:rgba(129,140,248,.15)">🖥️</div><div class="activity-info"><div class="activity-repo">Backend API</div><div class="activity-msg">ASP.NET Core — endpoints & stored procedures</div></div><div class="activity-time" id="focus-time-1">now</div></div>
          <div class="activity-item"><div class="activity-icon-wrap" style="background:rgba(56,189,248,.15)">📱</div><div class="activity-info"><div class="activity-repo">Flutter App</div><div class="activity-msg">UI screen & API integration</div></div><div class="activity-time">today</div></div>
          <div class="activity-item"><div class="activity-icon-wrap" style="background:rgba(34,197,94,.15)">🗄️</div><div class="activity-info"><div class="activity-repo">SQL Server</div><div class="activity-msg">Stored procedures & schema updates</div></div><div class="activity-time">today</div></div>
          <div class="activity-item"><div class="activity-icon-wrap" style="background:rgba(251,191,36,.15)">🐍</div><div class="activity-info"><div class="activity-repo">Python Service</div><div class="activity-msg">Face recognition & OCR processing</div></div><div class="activity-time">today</div></div>
        </div>
      </div>

      <!-- PROCESS FLOW MINI -->
      <div class="activity-panel">
        <div class="activity-header">
          <div class="activity-title">📋 How I Work</div>
        </div>
        <div style="padding:14px 16px;display:flex;flex-direction:column;gap:10px;">
          <div style="display:flex;align-items:center;gap:10px;font-size:12px;color:var(--text-muted)"><span style="color:#22c55e;font-size:14px">✓</span><span>Requirements analysis & database design</span></div>
          <div style="display:flex;align-items:center;gap:10px;font-size:12px;color:var(--text-muted)"><span style="color:#22c55e;font-size:14px">✓</span><span>Build backend API & stored procedures</span></div>
          <div style="display:flex;align-items:center;gap:10px;font-size:12px;color:var(--text-muted)"><span style="color:var(--gold);font-size:14px">●</span><span style="color:var(--text)">Develop UI (web/mobile) & API integration</span></div>
          <div style="display:flex;align-items:center;gap:10px;font-size:12px;color:var(--text-dim)"><span style="font-size:14px">○</span><span>Testing, bug fix & optimasi performa</span></div>
          <div style="display:flex;align-items:center;gap:10px;font-size:12px;color:var(--text-dim)"><span style="font-size:14px">○</span><span>Deploy & handover ke client</span></div>
        </div>
      </div>

    </div>

    <!-- GITHUB ACTIVITY + COLLAB -->
    <div>
      <!-- OWN + COLLAB ACTIVITY -->
      <div class="activity-panel">
        <div class="activity-header">
          <div class="activity-title"><div class="live-dot"></div>Recent GitHub Activity</div>
          <div class="activity-sub" id="activity-updated">fetching...</div>
        </div>
        <div class="activity-feed" id="activity-feed">
          <div class="activity-loading"><span class="activity-spinner"></span>Loading...</div>
        </div>
      </div>

      <!-- COLLAB / OTHER REPOS -->
      <div class="collab-panel">
        <div class="collab-header">
          <div class="collab-title">🤝 Contributions to Other Repos</div>
          <div class="activity-sub" id="collab-count">—</div>
        </div>
        <div class="collab-feed" id="collab-feed">
          <div class="activity-loading"><span class="activity-spinner"></span>Loading...</div>
        </div>
      </div>

      <div class="commit-stats">
        <div class="cstat"><div class="cstat-num" id="stat-push">—</div><div class="cstat-label">Push Events</div></div>
        <div class="cstat"><div class="cstat-num" id="stat-repos-active">54</div><div class="cstat-label">Total Repos</div></div>
        <div class="cstat"><div class="cstat-num" id="stat-streak">—</div><div class="cstat-label">Active Repos</div></div>
      </div>
    </div>

  </div>

  <!-- CONTRIBUTION GRAPH -->
  <div class="contrib-section reveal">
    <div class="contrib-header">
      <div class="contrib-title"><div class="live-dot"></div>GitHub Contribution Graph</div>
      <div class="contrib-sub">1 year of activity — auto updated</div>
    </div>
    <div class="contrib-graph-wrap">
      <img
        src="https://ghchart.rshah.org/c9a84c/ArifSyaifulAnwar"
        alt="GitHub Contribution Chart Arif Syaiful Anwar"
        loading="lazy"
        onerror="this.parentNode.innerHTML='<div style='padding:24px;text-align:center;color:var(--text-dim);font-size:12px'>Contribution graph could not be loaded. Visit <a href='https://github.com/ArifSyaifulAnwar' style='color:var(--gold)' target='_blank'>GitHub Profile</a></div>'"
      />
    </div>
    <div class="contrib-summary">
      <div class="contrib-badge">📦 Total Repos: <span>54</span></div>
      <div class="contrib-badge">🔒 Private: <span>37</span></div>
      <div class="contrib-badge">🔓 Public: <span>17</span></div>
      <div class="contrib-badge">🤝 Active contributions to other projects</div>
    </div>
  </div>

</section>

<!-- SKILLS -->
<section id="skills">
  <div class="reveal">
    <div class="section-tag">Technical Skills</div>
    <h2>Tools & <em>technologies</em></h2>
    <p class="section-desc">Tech stack across enterprise systems, mobile apps, web, automation, and IoT.</p>
  </div>
  <div class="skills-grid reveal">
    <div class="skill-card"><div class="skill-card-header"><div class="skill-icon">🖥️</div><div><div class="skill-title">Backend / Web</div><div class="skill-subtitle">ASP.NET Core, PHP, Laravel</div></div></div><div class="skill-tags"><span class="skill-tag">ASP.NET Core MVC</span><span class="skill-tag">Web API</span><span class="skill-tag">C#</span><span class="skill-tag">PHP</span><span class="skill-tag">Laravel</span><span class="skill-tag">REST APIs</span><span class="skill-tag">Dapper</span></div></div>
    <div class="skill-card"><div class="skill-card-header"><div class="skill-icon">📱</div><div><div class="skill-title">Mobile</div><div class="skill-subtitle">Flutter & Kotlin Android</div></div></div><div class="skill-tags"><span class="skill-tag">Flutter</span><span class="skill-tag">Dart</span><span class="skill-tag">Kotlin</span><span class="skill-tag">Android SDK</span><span class="skill-tag">Biometric Auth</span><span class="skill-tag">Camera API</span></div></div>
    <div class="skill-card"><div class="skill-card-header"><div class="skill-icon">🗄️</div><div><div class="skill-title">Database</div><div class="skill-subtitle">SQL Server & T-SQL</div></div></div><div class="skill-tags"><span class="skill-tag">SQL Server</span><span class="skill-tag">T-SQL</span><span class="skill-tag">Stored Procedures</span><span class="skill-tag">TVP</span><span class="skill-tag">Query Optimization</span></div></div>
    <div class="skill-card"><div class="skill-card-header"><div class="skill-icon">🐍</div><div><div class="skill-title">Python & AI</div><div class="skill-subtitle">Face recognition, OCR</div></div></div><div class="skill-tags"><span class="skill-tag">Python</span><span class="skill-tag">InsightFace</span><span class="skill-tag">FastAPI</span><span class="skill-tag">Tesseract OCR</span><span class="skill-tag">NumPy</span></div></div>
    <div class="skill-card"><div class="skill-card-header"><div class="skill-icon">🌐</div><div><div class="skill-title">Frontend & Automation</div><div class="skill-subtitle">JS, HTML, Chrome Extensions</div></div></div><div class="skill-tags"><span class="skill-tag">JavaScript</span><span class="skill-tag">HTML5</span><span class="skill-tag">CSS3</span><span class="skill-tag">Chrome Extensions</span><span class="skill-tag">Bootstrap</span><span class="skill-tag">jQuery</span></div></div>
    <div class="skill-card"><div class="skill-card-header"><div class="skill-icon">🔧</div><div><div class="skill-title">IoT & Embedded</div><div class="skill-subtitle">Arduino & ESP8266</div></div></div><div class="skill-tags"><span class="skill-tag">C++</span><span class="skill-tag">Arduino</span><span class="skill-tag">ESP8266</span><span class="skill-tag">Sensor Integration</span></div></div>
  </div>
  <div class="lang-section reveal">
    <div class="lang-title">Language Distribution · 54 Repositories</div>
    <div class="lang-bar">
      <div class="lang-seg" style="background:#f97316;width:24%;"></div>
      <div class="lang-seg" style="background:#f59e0b;width:16%;"></div>
      <div class="lang-seg" style="background:#38bdf8;width:14%;"></div>
      <div class="lang-seg" style="background:#818cf8;width:13%;"></div>
      <div class="lang-seg" style="background:#fbbf24;width:10%;"></div>
      <div class="lang-seg" style="background:#60a5fa;width:8%;"></div>
      <div class="lang-seg" style="background:#f472b6;width:6%;"></div>
      <div class="lang-seg" style="background:#4ade80;width:5%;"></div>
      <div class="lang-seg" style="background:#a78bfa;width:4%;"></div>
    </div>
    <div class="lang-legend">
      <div class="lang-item"><div class="lang-dot" style="background:#f97316"></div><span class="lang-name">JavaScript</span><span class="lang-pct">24%</span></div>
      <div class="lang-item"><div class="lang-dot" style="background:#f59e0b"></div><span class="lang-name">Kotlin</span><span class="lang-pct">16%</span></div>
      <div class="lang-item"><div class="lang-dot" style="background:#38bdf8"></div><span class="lang-name">Dart</span><span class="lang-pct">14%</span></div>
      <div class="lang-item"><div class="lang-dot" style="background:#818cf8"></div><span class="lang-name">C#</span><span class="lang-pct">13%</span></div>
      <div class="lang-item"><div class="lang-dot" style="background:#fbbf24"></div><span class="lang-name">Python</span><span class="lang-pct">10%</span></div>
      <div class="lang-item"><div class="lang-dot" style="background:#60a5fa"></div><span class="lang-name">PHP</span><span class="lang-pct">8%</span></div>
      <div class="lang-item"><div class="lang-dot" style="background:#f472b6"></div><span class="lang-name">C++</span><span class="lang-pct">6%</span></div>
      <div class="lang-item"><div class="lang-dot" style="background:#4ade80"></div><span class="lang-name">HTML</span><span class="lang-pct">5%</span></div>
      <div class="lang-item"><div class="lang-dot" style="background:#a78bfa"></div><span class="lang-name">T-SQL & others</span><span class="lang-pct">4%</span></div>
    </div>
  </div>
</section>

<!-- ENTERPRISE PROJECTS -->
<section id="projects">
  <div class="reveal">
    <div class="section-tag">Enterprise Projects</div>
    <h2>Featured <em>work</em></h2>
    <p class="section-desc">Real systems built and shipped — production, not just experiments.</p>
  </div>
  <div class="ent-grid reveal">
    <div class="project-card"><div class="proj-header"><div class="proj-icon">👤</div><div class="proj-stack"><span class="stag s-flutter">Flutter</span><span class="stag s-py">Python</span></div></div><div class="proj-title">Absensi Karyawan — Face Recognition</div><p class="proj-desc">Flutter + InsightFace attendance system. Multi-embedding adaptive enrollment, auto-retry, field work approval flow, Saturday overtime logic, and Python AI backend.</p><div class="proj-footer"><span class="proj-type">Enterprise · Mobile App</span></div></div>
    <div class="project-card"><div class="proj-header"><div class="proj-icon">🏪</div><div class="proj-stack"><span class="stag s-net">ASP.NET</span><span class="stag s-sql">SQL</span></div></div><div class="proj-title">KORA — Cooperative Retail ERP</div><p class="proj-desc">Full-stack ERP for retail cooperatives with Pembelian module, multi-step approvals, TVP-based bulk transactions, and dynamic document configuration.</p><div class="proj-footer"><span class="proj-type">Enterprise · Web App</span></div></div>
    <div class="project-card"><div class="proj-header"><div class="proj-icon">🤖</div><div class="proj-stack"><span class="stag s-js">JS</span><span class="stag s-net">ASP.NET</span></div></div><div class="proj-title">FIF Roya — Browser Automation</div><p class="proj-desc">Chrome Extension + API for automating fidusia mortgage release across FIMS & AHU portals. ProcessingLock race-condition prevention, multi-laptop parallel processing.</p><div class="proj-footer"><span class="proj-type">Automation · FinTech</span></div></div>
    <div class="project-card"><div class="proj-header"><div class="proj-icon">💳</div><div class="proj-stack"><span class="stag s-net">ASP.NET</span><span class="stag s-flutter">Flutter</span></div></div><div class="proj-title">Payment Gateway System</div><p class="proj-desc">Full payment gateway integration with ASP.NET Core API backend and Flutter mobile frontend. Handles transaction processing, payment status, and reconciliation.</p><div class="proj-footer"><span class="proj-type">Enterprise · FinTech</span></div></div>
    <div class="project-card"><div class="proj-header"><div class="proj-icon">📄</div><div class="proj-stack"><span class="stag s-net">ASP.NET</span><span class="stag s-py">Python</span></div></div><div class="proj-title">SIMASHT — Legal Document System</div><p class="proj-desc">Hak Tanggungan management with OCR-based PPK extraction, Tesseract fallback, automated ATR-BPN navigation, and encrypt/decrypt pipeline for legal documents.</p><div class="proj-footer"><span class="proj-type">Enterprise · Legal Tech</span></div></div>
    <div class="project-card"><div class="proj-header"><div class="proj-icon">🏨</div><div class="proj-stack"><span class="stag s-net">ASP.NET</span><span class="stag s-flutter">Flutter</span></div></div><div class="proj-title">Hotel Management System</div><p class="proj-desc">Full hotel system with ASP.NET Core web API and Flutter mobile app. Dynamic SP-driven permissions, transaction grid management, and multi-result-set handling.</p><div class="proj-footer"><span class="proj-type">Enterprise · Hospitality</span></div></div>
  </div>
</section>

<!-- ALL REPOS -->
<section id="github">
  <div class="reveal">
    <div class="section-tag">All Repositories</div>
    <h2>GitHub <em>projects</em></h2>
    <p class="section-desc">All 54 repositories — public repos are clickable, private repos shown as view-only.</p>
  </div>

  <div class="gh-topbar reveal">
    <div class="gh-avatar"><img src="https://avatars.githubusercontent.com/u/100073035?v=4" alt="Arif"/></div>
    <div>
      <div class="gh-name">Arif Syaiful Anwar</div>
      <div class="gh-handle">@ArifSyaifulAnwar</div>
    </div>
    <div class="gh-stats">
      <div class="gh-stat-item"><div class="gh-stat-num">54</div><div class="gh-stat-label">Total</div></div>
      <div class="gh-stat-item"><div class="gh-stat-num">17</div><div class="gh-stat-label">Public</div></div>
      <div class="gh-stat-item"><div class="gh-stat-num">37</div><div class="gh-stat-label">Private</div></div>
    </div>
    <a href="https://github.com/ArifSyaifulAnwar" target="_blank" class="gh-link">GitHub →</a>
  </div>

  <div class="reveal">
    <div class="repo-controls">
      <div class="filter-bar">
        <button class="filter-btn active" onclick="setFilter(this,'all')">All (54)</button>
        <button class="filter-btn" onclick="setFilter(this,'public')">🔓 Public</button>
        <button class="filter-btn" onclick="setFilter(this,'private')">🔒 Private</button>
        <button class="filter-btn" onclick="setFilter(this,'JavaScript')">JavaScript</button>
        <button class="filter-btn" onclick="setFilter(this,'Kotlin')">Kotlin</button>
        <button class="filter-btn" onclick="setFilter(this,'Dart')">Dart</button>
        <button class="filter-btn" onclick="setFilter(this,'C#')">C#</button>
        <button class="filter-btn" onclick="setFilter(this,'Python')">Python</button>
        <button class="filter-btn" onclick="setFilter(this,'PHP')">PHP</button>
        <button class="filter-btn" onclick="setFilter(this,'C++')">C++</button>
      </div>
      <div class="search-wrap">
        <span class="repo-count-label">Showing <span id="count">54</span> repos</span>
        <input type="text" class="search-input" id="repo-search" placeholder="🔍 Search..." oninput="filterRepos()"/>
      </div>
    </div>
  </div>

  <div class="repos-grid reveal" id="repos-grid"></div>
</section>

<!-- EXPERIENCE -->
<section id="experience">
  <div class="reveal">
    <div class="section-tag">Experience</div>
    <h2>Professional <em>journey</em></h2>
  </div>
  <div class="timeline reveal">
    <div class="tl-item">
      <div class="tl-date">2022 — PRESENT</div>
      <div class="tl-title">Full Stack & Mobile Developer</div>
      <div class="tl-company">Enterprise Systems — Cooperative, Financial & Legal Sector</div>
      <p class="tl-desc">Lead developer across multiple enterprise systems: KORA ERP, employee attendance, payment gateway, hotel management, and legal document automation. Building full stacks from DB design to mobile frontends, with Python AI and Chrome Extension automation.</p>
      <div class="tl-tags"><span class="tl-tag">ASP.NET Core</span><span class="tl-tag">Flutter</span><span class="tl-tag">Kotlin</span><span class="tl-tag">SQL Server</span><span class="tl-tag">Python</span><span class="tl-tag">JavaScript</span><span class="tl-tag">PHP</span></div>
    </div>
    <div class="tl-item">
      <div class="tl-date">2020 — 2022</div>
      <div class="tl-title">Android & Backend Developer</div>
      <div class="tl-company">Web & Mobile Application Development</div>
      <p class="tl-desc">Built Android apps in Kotlin and backend systems in ASP.NET Core and PHP. Designed T-SQL schemas, integrated third-party legal portals via browser automation, and developed IoT projects with Arduino and ESP8266.</p>
      <div class="tl-tags"><span class="tl-tag">Kotlin</span><span class="tl-tag">PHP</span><span class="tl-tag">ASP.NET Core</span><span class="tl-tag">T-SQL</span><span class="tl-tag">C++</span><span class="tl-tag">ESP8266</span></div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="reveal">
    <div class="section-tag">Contact</div>
    <h2>Let's <em>work</em><br>together</h2>
  </div>
  <div class="contact-inner reveal">
    <div class="contact-left">
      <h3>Open to full-time roles & freelance projects</h3>
      <p>Available for new opportunities — full-time, contract, or any challenging project that needs a reliable developer.</p>
      <div class="contact-links">
        <a href="mailto:arifsyaiful182@gmail.com" class="contact-link"><div class="cl-icon">✉️</div><div><div class="cl-label">Email</div><div class="cl-value">arifsyaiful182@gmail.com</div></div></a>
        <a href="https://www.linkedin.com/in/arif-syaiful-anwar-aaa6bb202/" target="_blank" class="contact-link"><div class="cl-icon">💼</div><div><div class="cl-label">LinkedIn</div><div class="cl-value">Arif Syaiful Anwar</div></div></a>
        <a href="https://github.com/ArifSyaifulAnwar" target="_blank" class="contact-link"><div class="cl-icon">🐙</div><div><div class="cl-label">GitHub</div><div class="cl-value">ArifSyaifulAnwar</div></div></a>
      </div>
    </div>
    <div class="contact-right">
      <div class="form-group"><label class="form-label">Your Name</label><input type="text" class="form-input" placeholder="Jane Smith"/></div>
      <div class="form-group"><label class="form-label">Email Address</label><input type="email" class="form-input" placeholder="jane@company.com"/></div>
      <div class="form-group"><label class="form-label">Message</label><textarea class="form-input" placeholder="Tell me about the project or role..."></textarea></div>
      <button class="btn-primary" style="width:100%;justify-content:center;">Send Message →</button>
    </div>
  </div>
</section>

<footer>
  <div class="footer-copy">© 2025 Arif Syaiful Anwar</div>
  <div class="footer-logo">ASA.</div>
  <div class="footer-copy">Full Stack & Mobile Developer</div>
</footer>

<script>
const LANG_COLORS = {
  'JavaScript':'#f97316','Kotlin':'#f59e0b','Dart':'#38bdf8','C#':'#818cf8',
  'Python':'#fbbf24','PHP':'#60a5fa','C++':'#f472b6','HTML':'#e34c26',
  'CSS':'#563d7c','TSQL':'#a78bfa','Hack':'#878787','default':'#7a8499'
};
function lc(lang){return LANG_COLORS[lang]||LANG_COLORS.default;}

function timeAgo(d){
  const s=(Date.now()-new Date(d))/1000;
  if(s<60)return 'just now';
  if(s<3600)return Math.floor(s/60)+'m ago';
  if(s<86400)return Math.floor(s/3600)+'h ago';
  if(s<2592000)return Math.floor(s/86400)+'d ago';
  if(s<31536000)return Math.floor(s/2592000)+'mo ago';
  return Math.floor(s/31536000)+'yr ago';
}

// ALL 54 REPOS — private: view-only, public: clickable
const REPOS = [
  // PRIVATE
  {n:'absensi',d:'Attendance API — ASP.NET Core Web API for employee attendance system',l:'C#',v:'private',u:'2025-07-09'},
  {n:'absensi_sdb',d:'Attendance system replacing Talenta HR — Flutter mobile app with full API integration',l:'Dart',v:'private',u:'2025-11-28'},
  {n:'api-campuran-',d:'Collection of manifest APIs for various system requirements',l:'C#',v:'private',u:'2026-04-01'},
  {n:'apiabsensi',d:'Attendance API built with ASP.NET Core MVC',l:'C#',v:'private',u:'2025-08-13'},
  {n:'apififroya',d:'API for FIF Roya system — fidusia mortgage release automation',l:'JavaScript',v:'private',u:'2026-04-20'},
  {n:'APIHTL',d:'Backend API for the Hotel management system (SIMASHT HTL Module)',l:'JavaScript',v:'private',u:'2025-02-27'},
  {n:'APIkoperasi',d:'Cooperative API — backend service for KORA ERP system',l:'JavaScript',v:'private',u:'2025-05-16'},
  {n:'api_payment',d:'Payment Gateway API — enterprise payment system integration',l:'C#',v:'private',u:'2025-06-25'},
  {n:'bacapdf',d:'Web app for reading and processing PDF files in the browser',l:'PHP',v:'private',u:'2026-04-01'},
  {n:'chat-ai',d:'GPT-like AI chat application — web-based chatbot interface',l:null,v:'private',u:'2026-01-09'},
  {n:'dekripdokument',d:'Encrypted document decryption — Chrome Extension for document portals',l:'JavaScript',v:'private',u:'2026-04-20'},
  {n:'dms',d:'Document Management System — file upload and document management with ASP.NET MVC',l:'JavaScript',v:'private',u:'2026-04-01'},
  {n:'encrip-dekrip',d:'Document encryption and decryption — ASP.NET Core with custom encryption algorithm',l:'C#',v:'private',u:'2026-02-24'},
  {n:'enkripdekripapi',d:'Encryption and decryption API for system integration',l:null,v:'private',u:'2025-07-28'},
  {n:'enryptlibrary',d:'Reusable encrypt/decrypt library for multiple systems',l:'C#',v:'private',u:'2025-12-16'},
  {n:'htlmobileterbaru',d:'Latest Flutter mobile app for the Hotel system — SIMASHT HTL module',l:'Dart',v:'private',u:'2025-04-22'},
  {n:'htl_api',d:'Hotel backend API — endpoints for hotel transaction management',l:'JavaScript',v:'private',u:'2025-05-16'},
  {n:'htmobile',d:'Flutter mobile app for Hak Tanggungan mortgage system (SIMASHT)',l:'Dart',v:'private',u:'2025-02-18'},
  {n:'ikatan_notaris',d:'Notary Association web system — web version for notary data management',l:'HTML',v:'private',u:'2025-06-23'},
  {n:'koperasi',d:'Flutter-based cooperative app — mobile app for cooperative members',l:'Dart',v:'private',u:'2024-11-21'},
  {n:'kopkara',d:'Employee cooperative system — web platform for internal cooperative management',l:'JavaScript',v:'private',u:'2026-04-20'},
  {n:'kosmart',d:'Latest cooperative app version — Flutter app, fully stable with complete features',l:'Dart',v:'private',u:'2025-01-20'},
  {n:'kosmart_new',d:'Latest version of kosmart Flutter app with improved UI',l:'Dart',v:'private',u:'2025-02-21'},
  {n:'laravelchatbot',d:'Laravel-based chatbot — AI chatbot integration with PHP backend',l:'PHP',v:'private',u:'2026-04-01'},
  {n:'manifest',d:'Browser extension manifest for FIF Roya — AHU portal automation',l:'JavaScript',v:'private',u:'2026-01-09'},
  {n:'manifest-simash-to-bpn',d:'Automation manifest from SIMASHT to the BPN/ATR land registration portal',l:'JavaScript',v:'private',u:'2026-04-01'},
  {n:'manifestahu',d:'Chrome Extension manifest for data search on the AHU portal',l:'JavaScript',v:'private',u:'2026-04-01'},
  {n:'manifestahupencariandata',d:'Manifest for data search and extraction from the AHU portal',l:'JavaScript',v:'private',u:'2026-04-01'},
  {n:'manifestroyamanual',d:'Manual manifest for fidusia Roya process — Chrome Extension',l:'JavaScript',v:'private',u:'2026-04-01'},
  {n:'manifestscrolldandownloadahu',d:'Manifest for scrolling and downloading documents from AHU portal',l:'JavaScript',v:'private',u:'2026-04-01'},
  {n:'payment_gateway',d:'Flutter payment gateway app — mobile frontend for payment processing system',l:'Dart',v:'private',u:'2025-06-25'},
  {n:'SQLKoperasi',d:'SQL Server database schema and Stored Procedures for KORA cooperative system',l:'TSQL',v:'private',u:'2025-08-13'},
  {n:'uploadberkasmashildan',d:'Roya document upload — PHP web app for uploading mashildan documents',l:'PHP',v:'private',u:'2026-04-01'},
  {n:'websitebimbel',d:'Laravel-based tutoring website — student management system',l:'HTML',v:'private',u:'2025-12-01'},
  {n:'website_bimbel_visi',d:'Visi tutoring website — latest version with full features',l:'HTML',v:'private',u:'2025-06-12'},
  {n:'portofolio-arif',d:'Arif Syaiful Anwar portfolio repository',l:null,v:'private',u:'2026-04-22'},
  {n:'desktop-tutorial',d:'GitHub Desktop tutorial — onboarding repository',l:null,v:'private',u:'2022-02-20'},
  // PUBLIC
  {n:'Aplikasi_Karyawan',d:'Employee app with fingerprint biometric authentication — Android Kotlin',l:'Kotlin',v:'public',u:'2025-02-04',url:'https://github.com/ArifSyaifulAnwar/Aplikasi_Karyawan'},
  {n:'facepython',d:'Python face recognition service using InsightFace — AI backend for attendance system',l:'Python',v:'public',u:'2025-12-16',url:'https://github.com/ArifSyaifulAnwar/facepython'},
  {n:'Trackfit',d:'Android fitness tracker for recording personal health and workout data',l:'Kotlin',v:'public',u:'2024-07-21',url:'https://github.com/ArifSyaifulAnwar/Trackfit'},
  {n:'AiraCerdas',d:'Smart gallon water monitoring app Android — cek kualitas air galon',l:'Kotlin',v:'public',u:'2024-07-24',url:'https://github.com/ArifSyaifulAnwar/AiraCerdas'},
  {n:'SekolahKu',d:'Android Kotlin app for managing primary school student data',l:'Kotlin',v:'public',u:'2024-09-04',url:'https://github.com/ArifSyaifulAnwar/SekolahKu'},
  {n:'SushiGenk',d:'Web-based sushi sales application — e-commerce built with JavaScript',l:'JavaScript',v:'public',u:'2024-08-07',url:'https://github.com/ArifSyaifulAnwar/SushiGenk'},
  {n:'CRUD_WEB',d:'PHP-based CRUD web application — create, read, update, delete with database backend',l:'PHP',v:'public',u:'2024-11-14',url:'https://github.com/ArifSyaifulAnwar/CRUD_WEB'},
  {n:'Kipas_Otomatis',d:'Arduino-based automatic fan — activates based on temperature sensor readings',l:'C++',v:'public',u:'2024-07-24',url:'https://github.com/ArifSyaifulAnwar/Kipas_Otomatis'},
  {n:'Timbangan_Galon',d:'Smart gallon scale using ESP8266 — wireless IoT weight sensor',l:'C++',v:'public',u:'2024-07-24',url:'https://github.com/ArifSyaifulAnwar/Timbangan_Galon'},
  {n:'CourseReminder',d:'Course reminder system built with Arduino/C++ — schedule reminder device',l:'C++',v:'public',u:'2024-07-24',url:'https://github.com/ArifSyaifulAnwar/CourseReminder'},
  {n:'NirmanaInterni',d:'Nirmana Interni desktop-based website for company promotion',l:'Hack',v:'public',u:'2024-09-05',url:'https://github.com/ArifSyaifulAnwar/NirmanaInterni'},
  {n:'HBD',d:'Interactive birthday website — creative web project built with HTML',l:'HTML',v:'public',u:'2024-08-07',url:'https://github.com/ArifSyaifulAnwar/HBD'},
  {n:'htmlasnah',d:'HTML/CSS project — website built with HTML and CSS',l:'CSS',v:'public',u:'2025-02-17',url:'https://github.com/ArifSyaifulAnwar/htmlasnah'},
  {n:'baru',d:'JavaScript project — web experiment built with JavaScript',l:'JavaScript',v:'public',u:'2025-02-14',url:'https://github.com/ArifSyaifulAnwar/baru'},
  {n:'js',d:'JavaScript project — interactive website built with JS',l:'JavaScript',v:'public',u:'2025-02-14',url:'https://github.com/ArifSyaifulAnwar/js'},
  {n:'senadaapp.github',d:'Senadaapp web project — HTML-based website',l:'HTML',v:'public',u:'2025-10-08',url:'https://github.com/ArifSyaifulAnwar/senadaapp.github'},
  {n:'1402020132ArifSyaifulAnwar',d:'Web Design and Programming course assignment — academic project',l:null,v:'public',u:'2022-06-09',url:'https://github.com/ArifSyaifulAnwar/1402020132ArifSyaifulAnwar'},
];

let activeFilter = 'all';
let searchQ = '';

function setFilter(btn, f) {
  document.querySelectorAll('.filter-btn').forEach(b=>b.classList.remove('active'));
  btn.classList.add('active');
  activeFilter = f;
  filterRepos();
}

function filterRepos() {
  searchQ = document.getElementById('repo-search').value.toLowerCase();
  let filtered = REPOS.filter(r => {
    const matchFilter = activeFilter==='all' || activeFilter===r.v || activeFilter===r.l;
    const matchSearch = !searchQ || r.n.toLowerCase().includes(searchQ) || (r.d||'').toLowerCase().includes(searchQ);
    return matchFilter && matchSearch;
  });
  document.getElementById('count').textContent = filtered.length;
  renderRepos(filtered);
}

function renderRepos(repos) {
  const grid = document.getElementById('repos-grid');
  if (!repos.length) {
    grid.innerHTML = '<div class="repos-empty">Tidak ada repo yang cocok.</div>';
    return;
  }
  grid.innerHTML = repos.map(r => {
    const lang = r.l || 'Unknown';
    const color = lc(lang);
    const ago = timeAgo(r.u);
    const isPublic = r.v === 'public';
    const tag = isPublic
      ? '<span class="repo-badge badge-public">Public</span>'
      : '<span class="repo-badge badge-private">🔒 Private</span>';

    if (isPublic) {
      return `<a href="${r.url}" target="_blank" class="repo-card is-public">
        ${tag}
        <div class="repo-name">${r.n}</div>
        <div class="repo-desc">${r.d || '<em style="color:var(--text-dim)">No description</em>'}</div>
        <div class="repo-footer">
          <div class="repo-lang-info"><div class="repo-lang-dot" style="background:${color}"></div><span class="repo-lang">${lang}</span></div>
          <span class="repo-date">${ago}</span>
        </div>
      </a>`;
    } else {
      return `<div class="repo-card is-private">
        ${tag}
        <div class="repo-name">${r.n}</div>
        <div class="repo-desc">${r.d || '<em style="color:var(--text-dim)">Private repository</em>'}</div>
        <div class="repo-footer">
          <div class="repo-lang-info"><div class="repo-lang-dot" style="background:${color}"></div><span class="repo-lang">${lang}</span></div>
          <span class="repo-date">${ago}</span>
        </div>
      </div>`;
    }
  }).join('');
}

// Init
renderRepos(REPOS);

// Scroll reveal
const obs = new IntersectionObserver((entries) => {
  entries.forEach((e,i) => { if(e.isIntersecting) setTimeout(()=>e.target.classList.add('visible'), i*70); });
}, { threshold: 0.07 });
document.querySelectorAll('.reveal').forEach(el=>obs.observe(el));

// Nav active
const navSections = document.querySelectorAll('section[id],div[id="hero"]');
const navLinks = document.querySelectorAll('.nav-links a');
window.addEventListener('scroll', () => {
  let cur='';
  navSections.forEach(s=>{ if(window.scrollY>=s.offsetTop-100) cur=s.id; });
  navLinks.forEach(l=>{ l.style.color = l.getAttribute('href')==='#'+cur ? 'var(--gold)':''; });
}, {passive:true});




// ===== WORKFLOW ANIMATION =====
const wfSteps = document.querySelectorAll('.wf-step');
let wfCurrent = 2;
setInterval(() => {
  wfCurrent = (wfCurrent + 1) % wfSteps.length;
  wfSteps.forEach((s, i) => {
    s.classList.remove('active', 'done');
    if (i < wfCurrent) s.classList.add('done');
    else if (i === wfCurrent) s.classList.add('active');
  });
}, 2500);

// ===== GITHUB ACTIVITY + COLLAB REPOS =====
const GH_USERNAME = 'ArifSyaifulAnwar';

const TYPE_MAP = {
  PushEvent:        { icon:'📤', color:'rgba(201,168,76,0.15)',  label:'Push' },
  CreateEvent:      { icon:'✨', color:'rgba(34,197,94,0.12)',   label:'Create' },
  DeleteEvent:      { icon:'🗑️', color:'rgba(248,113,113,0.1)', label:'Delete' },
  WatchEvent:       { icon:'⭐', color:'rgba(251,191,36,0.12)', label:'Star' },
  ForkEvent:        { icon:'🍴', color:'rgba(59,130,246,0.12)', label:'Fork' },
  IssuesEvent:      { icon:'🐛', color:'rgba(167,139,250,0.12)',label:'Issue' },
  PullRequestEvent: { icon:'🔀', color:'rgba(56,189,248,0.12)', label:'PR' },
};

async function loadActivity() {
  try {
    const res = await fetch(`https://api.github.com/users/${GH_USERNAME}/events?per_page=100`);
    if (!res.ok) throw new Error('API error');
    const events = await res.json();

    const feed = document.getElementById('activity-feed');
    const collabFeed = document.getElementById('collab-feed');
    const updated = document.getElementById('activity-updated');

    let pushCount = 0;
    const reposSet = new Set();
    const collabRepos = new Map();
    let activityHtml = '';
    let collabHtml = '';

    events.forEach(e => {
      const isOwn = e.repo.name.toLowerCase().startsWith(GH_USERNAME.toLowerCase() + '/');
      reposSet.add(e.repo.name);
      if (e.type === 'PushEvent') pushCount++;

      // Detect collab: activity on repo NOT owned by this user
      if (!isOwn && (e.type === 'PushEvent' || e.type === 'PullRequestEvent' || e.type === 'IssuesEvent')) {
        if (!collabRepos.has(e.repo.name)) {
          const owner = e.repo.name.split('/')[0];
          const repoName = e.repo.name.split('/')[1];
          let msg = e.type.replace('Event','');
          if (e.type === 'PushEvent' && e.payload && e.payload.commits && e.payload.commits.length)
            msg = e.payload.commits[0].message.split('\n')[0].slice(0, 50);
          collabRepos.set(e.repo.name, { name: repoName, owner, type: e.type, msg, time: e.created_at });
        }
      }
    });

    // OWN ACTIVITY FEED (last 15 own events)
    const ownEvents = events.filter(e =>
      e.repo.name.toLowerCase().startsWith(GH_USERNAME.toLowerCase() + '/')
    ).slice(0, 15);

    ownEvents.forEach(e => {
      const t = TYPE_MAP[e.type] || { icon:'⚡', color:'rgba(255,255,255,0.05)', label: e.type.replace('Event','') };
      const repoShort = e.repo.name.replace(GH_USERNAME + '/', '');
      const ago = timeAgo(e.created_at);
      let msg = t.label;
      if (e.type === 'PushEvent' && e.payload && e.payload.commits && e.payload.commits.length)
        msg = e.payload.commits[0].message.split('\n')[0].slice(0, 45);
      else if (e.type === 'CreateEvent' && e.payload)
        msg = 'Created ' + (e.payload.ref_type || 'repo');

      activityHtml += `<div class="activity-item">
        <div class="activity-icon-wrap" style="background:${t.color}">${t.icon}</div>
        <div class="activity-info">
          <div class="activity-repo">${repoShort}</div>
          <div class="activity-msg">${msg}</div>
        </div>
        <div class="activity-time">${ago}</div>
      </div>`;
    });

    // COLLAB FEED (repos by other owners)
    if (collabRepos.size > 0) {
      collabRepos.forEach((repo) => {
        const ago = timeAgo(repo.time);
        const badgeClass = repo.type === 'PushEvent' ? 'badge-push' : 'badge-collab';
        const badgeLabel = repo.type === 'PushEvent' ? 'Push' : repo.type.replace('Event','');
        collabHtml += `<div class="collab-item">
          <div class="collab-repo-icon">🤝</div>
          <div class="collab-info">
            <div class="collab-repo-name">${repo.name}</div>
            <div class="collab-owner">by @${repo.owner}</div>
            <div class="collab-msg">${repo.msg}</div>
          </div>
          <div class="collab-meta">
            <div class="collab-time">${ago}</div>
            <div class="collab-badge-type ${badgeClass}">${badgeLabel}</div>
          </div>
        </div>`;
      });
      document.getElementById('collab-count').textContent = collabRepos.size + ' repo';
    } else {
      collabHtml = `<div class="collab-empty">🔍 No contributions to external repositories detected in the last 100 events.<br><span style="font-size:10px;color:var(--text-dim)">Will appear automatically when you push or create a PR to someone else's repo.</span></div>`;
      document.getElementById('collab-count').textContent = '—';
    }

    feed.innerHTML = activityHtml || '<div class="activity-loading">No recent activity</div>';
    collabFeed.innerHTML = collabHtml;
    document.getElementById('stat-push').textContent = pushCount;
    document.getElementById('stat-streak').textContent = reposSet.size;
    updated.textContent = 'Updated ' + new Date().toLocaleTimeString('id-ID', {hour:'2-digit', minute:'2-digit'});

  } catch(err) {
    document.getElementById('activity-feed').innerHTML = '<div class="activity-loading">Could not load activity</div>';
    if(document.getElementById('collab-feed'))
      document.getElementById('collab-feed').innerHTML = '<div class="collab-empty">API unreachable</div>';
    document.getElementById('activity-updated').textContent = 'Offline';
  }
}

loadActivity();
setInterval(loadActivity, 60000); // refresh every 60s


// TYPING EFFECT
(function(){
  const words = ['Mobile', 'Flutter', 'Android', 'Full Stack'];
  let wi = 0, ci = 0, deleting = false;
  const el = document.getElementById('typing-text');
  const rest = document.getElementById('typing-rest');
  const cursor = document.getElementById('cursor');

  function type() {
    const word = words[wi];
    if (!deleting) {
      el.textContent = word.slice(0, ++ci);
      if (ci === word.length) {
        // show rest after first word typed
        rest.style.opacity = '1';
        rest.style.transition = 'opacity .4s';
        setTimeout(() => { deleting = true; type(); }, 1800);
        return;
      }
    } else {
      el.textContent = word.slice(0, --ci);
      if (ci === 0) {
        deleting = false;
        wi = (wi + 1) % words.length;
        // keep showing rest while cycling
        setTimeout(type, 300);
        return;
      }
    }
    setTimeout(type, deleting ? 60 : 100);
  }

  // Start after hero animation delay
  setTimeout(type, 800);
})();
</script>
</body>
</html>