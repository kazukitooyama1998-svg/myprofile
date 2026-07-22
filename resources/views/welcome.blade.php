<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Kazuki Toyama | Portfolio</title>
<meta name="description" content="Web エンジニア ○○○○ のポートフォリオサイトです。制作物やスキルをまとめています。" />

<!-- Google Fonts: 丸みのあるやさしい雰囲気のフォント -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@400;500;700;900&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet" />

<script>
  window.worksData = {
    'coffee-shop': {
      title: @js('Coffee Shop Website'),
      description: @js('本作品は、ITスクールの授業の一環として、HTML・CSSの基礎を学習した後に制作した作品です。Webページ全体のレイアウト構成や各セクションの配置、余白・デザインの基本を意識し、HTML・CSSのみで実装しました。ページレイアウトの基礎を学ぶことを目的とした作品です。'),
      tech: @js(['HTML', 'CSS']),
      images: [
        { src: @js(asset('images/works/coffee-shop/hero.png')), alt: @js('Coffee Shop Website のトップページ') },
        { src: @js(asset('images/works/coffee-shop/merchandise.png')), alt: @js('Coffee Shop Website の商品一覧ページ') },
        { src: @js(asset('images/works/coffee-shop/discount.png')), alt: @js('Coffee Shop Website の割引・セールページ') },
        { src: @js(asset('images/works/coffee-shop/blog.png')), alt: @js('Coffee Shop Website のブログ記事一覧') },
        { src: @js(asset('images/works/coffee-shop/reservation.png')), alt: @js('Coffee Shop Website の予約フォーム') },
        { src: @js(asset('images/works/coffee-shop/footer.png')), alt: @js('Coffee Shop Website のフッター') },
      ],
    },
  };
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cream text-ink font-sans antialiased">

<!-- ==================== Header ==================== -->
<header id="site-header" class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-transparent">
  <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
    <a href="#home" class="font-heading text-xl font-bold text-primary-dark tracking-wide">
      Kazuki<span class="text-accent">.</span>Toyama
    </a>

    <!-- PC Nav -->
    <nav class="hidden md:flex items-center gap-8 font-heading text-sm font-medium">
      <a href="#home" class="nav-link transition-colors hover:text-primary">Home</a>
      <a href="#about" class="nav-link transition-colors hover:text-primary">About</a>
      <a href="#skills" class="nav-link transition-colors hover:text-primary">Skills</a>
      <a href="#works" class="nav-link transition-colors hover:text-primary">Works</a>
      <a href="#contact" class="nav-link transition-colors hover:text-primary">Contact</a>
    </nav>

    <a href="#contact" class="hidden md:inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white text-sm font-heading font-medium px-5 py-2.5 rounded-full shadow-soft transition-all hover:-translate-y-0.5">
      お問い合わせ
    </a>

    <!-- Mobile menu button -->
    <button id="menu-btn" aria-label="メニューを開く" class="md:hidden p-2 rounded-full hover:bg-primary-light/60 transition-colors">
      <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-ink" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-ink hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <!-- Mobile Nav -->
  <nav id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur shadow-soft mx-4 rounded-3xl mb-3 overflow-hidden">
    <a href="#home" class="block px-6 py-3 font-heading text-sm hover:bg-primary-light/50">Home</a>
    <a href="#about" class="block px-6 py-3 font-heading text-sm hover:bg-primary-light/50">About</a>
    <a href="#skills" class="block px-6 py-3 font-heading text-sm hover:bg-primary-light/50">Skills</a>
    <a href="#works" class="block px-6 py-3 font-heading text-sm hover:bg-primary-light/50">Works</a>
    <a href="#contact" class="block px-6 py-3 font-heading text-sm hover:bg-primary-light/50">Contact</a>
  </nav>
</header>

<main>

  <!-- ==================== Hero ==================== -->
  <section id="home" class="relative min-h-screen flex items-center overflow-hidden pt-24">
    <!-- ふんわりブロブ背景 -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-light rounded-full blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-1/3 -right-32 w-[28rem] h-[28rem] bg-accent-light rounded-full blur-3xl opacity-70 animate-blob animate-blob-delay"></div>
    <div class="absolute bottom-0 left-1/4 w-72 h-72 bg-sub-light rounded-full blur-3xl opacity-60 animate-blob animate-blob-delay2"></div>

    <div class="relative max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center w-full">
      <div class="reveal">
        <p class="font-heading text-primary-dark font-semibold tracking-widest mb-4 flex items-center gap-2">
          <span class="inline-block w-8 h-[2px] bg-primary-dark"></span>
          WEB ENGINEER PORTFOLIO
        </p>
        <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-black leading-tight mb-6">
          はじめまして、<br />
          <span class="text-primary-dark">Kazuki Toyama</span> です。
        </h1>
        <p class="text-muted leading-loose mb-8">
          ポートフォリオサイトへアクセスいただき、ありがとうございます。<br class="hidden sm:block" />
          これまで取り組んできた制作物や学習内容、プロフィールを掲載しています。<br class="hidden sm:block" />
          少しでも私のことを知っていただければ幸いです。ぜひご覧ください。
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#works" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-heading font-semibold px-7 py-3.5 rounded-full shadow-soft transition-all hover:-translate-y-0.5">
            制作物を見る
          </a>
          <a href="#about" class="inline-flex items-center gap-2 bg-white hover:bg-primary-light/60 text-ink font-heading font-semibold px-7 py-3.5 rounded-full shadow-soft transition-all hover:-translate-y-0.5">
            プロフィールを見る
          </a>
        </div>
      </div>

      <div class="reveal relative flex justify-center" style="transition-delay: .15s">
        <div class="relative w-80 h-80 sm:w-[26rem] sm:h-[26rem] lg:w-[30rem] lg:h-[30rem]">
          <div class="absolute inset-0 rounded-4xl bg-gradient-to-br from-primary-light via-accent-light to-sub-light rotate-6"></div>
          <div class="absolute inset-0 rounded-4xl bg-white shadow-card -rotate-3 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/profile.jpeg') }}" alt="Kazuki Toyama" class="w-full h-full object-cover" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== About ==================== -->
  <section id="about" class="relative py-28 scroll-mt-20">
    <div class="max-w-6xl mx-auto px-6">
      <div class="reveal text-center mb-16">
        <p class="font-heading text-accent font-semibold tracking-widest mb-2">ABOUT ME</p>
        <h2 class="font-heading text-3xl sm:text-4xl font-black">自己紹介</h2>
      </div>

      <div class="grid md:grid-cols-5 gap-12 items-center">
        <div class="reveal md:col-span-2 flex justify-center">
          <div class="relative w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80">
            <div class="absolute inset-0 rounded-full bg-gradient-to-br from-primary-light to-accent-light rotate-6"></div>
            <div class="absolute inset-2 rounded-full bg-white shadow-card overflow-hidden">
              <img src="{{ asset('images/about-photo.png') }}" alt="Kazuki Toyama" class="w-full h-full object-cover" />
            </div>
          </div>
        </div>

        <div class="reveal md:col-span-3 space-y-5" style="transition-delay: .1s">
          <p class="leading-loose text-ink/90">
            大学卒業後は、マレーシアのBPO企業や日本の大手マンション管理会社にて勤務し、多様な環境の中でコミュニケーション力や課題解決力を培ってきました。その後、海外での挑戦を決意し、フィリピンでの語学留学・IT留学、さらにオーストラリアで約2年間のワーキングホリデーを経験しました。英語はもともと苦手でしたが、留学や海外生活を通して継続的に学習を続けた結果、IELTS Academic Speakingで6.5を取得することができました。また、2026年2月にフィリピン人の妻と結婚し、現在は日常的に英語でコミュニケーションを取りながら生活しています。
          </p>
          <p class="leading-loose text-ink/90">
            海外での生活を通して、手に職をつけ、国や環境に左右されることなく活躍できるスキルを身につけたいという思いが強くなり、Webエンジニアを志すようになりました。また、英語を話せることで仕事や人との出会いなど、多くの可能性が広がることを実感しました。現在も英語学習には苦戦することがありますが、学習環境や勉強方法を工夫しながら継続して取り組み、英語力の向上を目指しています。
          </p>
          <p class="leading-loose text-ink/90">
            将来は、これまでの海外経験や異業種での職務経験を活かし、ITを通じてさまざまな業界の課題解決や業務効率化に貢献できるエンジニアを目指しています。教育分野をはじめ、多様な分野で人々の生活や仕事をより便利にするWebサービスやシステムの開発に携わりたいと考えています。新しい技術を継続的に学びながら、利用者の視点を大切にし、価値あるサービスを提供できるエンジニアとして成長していきたいです。
          </p>

          <ul class="grid sm:grid-cols-2 gap-3 pt-4">
            <li class="sm:col-span-2 flex items-start gap-3 bg-paper rounded-2xl px-5 py-4 shadow-sm">
              <span class="w-2.5 h-2.5 rounded-full bg-primary mt-1.5 shrink-0"></span>
              <span class="text-sm text-muted leading-relaxed">
                在住地：フィリピン・セブ島（留学中）<br />
                現在、Kredoにて Web 開発と英語を学習しています。（2026年9月18日卒業見込み）
              </span>
            </li>
            <li class="flex items-center gap-3 bg-paper rounded-2xl px-5 py-3 shadow-sm">
              <span class="w-2.5 h-2.5 rounded-full bg-accent"></span>
              <span class="text-sm text-muted">得意分野：Laravelを用いたWeb開発</span>
            </li>
            <li class="flex items-center gap-3 bg-paper rounded-2xl px-5 py-3 shadow-sm">
              <span class="w-2.5 h-2.5 rounded-full bg-sub"></span>
              <span class="text-sm text-muted">趣味：英語学習 / 美味しいものを食べること</span>
            </li>
            <li class="sm:col-span-2 flex items-center gap-3 bg-paper rounded-2xl px-5 py-3 shadow-sm">
              <span class="w-2.5 h-2.5 rounded-full bg-primary-dark shrink-0"></span>
              <span class="text-sm text-muted">
                GitHub：
                <a href="https://github.com/kazukitooyama1998-svg" target="_blank" rel="noopener" class="text-primary-dark hover:text-accent underline underline-offset-2 transition-colors">
                  github.com/kazukitooyama1998-svg
                </a>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== Skills ==================== -->
  <section id="skills" class="relative py-28 bg-paper scroll-mt-20">
    <div class="max-w-6xl mx-auto px-6">
      <div class="reveal text-center mb-16">
        <p class="font-heading text-accent font-semibold tracking-widest mb-2">SKILLS</p>
        <h2 class="font-heading text-3xl sm:text-4xl font-black">使用技術</h2>
        <p class="text-muted mt-4 max-w-xl mx-auto leading-relaxed">
          これまで学習してきた技術をまとめています。ITスクールではフロントエンドからバックエンドまで幅広い技術を学び、Web開発全体の基礎を身につけました。現在はJavaScriptやTailwind CSSを中心に学習を進めており、今後もさまざまな技術やプログラミング言語への理解を深めながら、継続的にスキルアップに取り組んでいきます。また、幅広い知識を土台としつつ、将来的にはフロントエンドやバックエンドなど、それぞれの分野で専門性を高め、より価値のあるサービスを開発できるエンジニアを目指しています。
        </p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- Frontend -->
        <div class="reveal bg-white rounded-4xl p-8 shadow-card">
          <div class="w-12 h-12 rounded-2xl bg-primary-light flex items-center justify-center mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="font-heading font-bold text-lg mb-4">Frontend</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 rounded-full bg-primary-light text-primary-dark text-sm font-medium">HTML</span>
            <span class="px-3.5 py-1.5 rounded-full bg-primary-light text-primary-dark text-sm font-medium">CSS</span>
            <span class="px-3.5 py-1.5 rounded-full bg-primary-light text-primary-dark text-sm font-medium">Bootstrap</span>
          </div>
          <div class="mt-4 pt-4 border-t border-primary-light">
            <p class="text-xs text-muted font-heading font-semibold mb-2">学習中</p>
            <div class="flex flex-wrap gap-2">
              <span class="px-3.5 py-1.5 rounded-full border border-dashed border-primary/50 text-primary-dark/80 text-sm font-medium">JavaScript</span>
              <span class="px-3.5 py-1.5 rounded-full border border-dashed border-primary/50 text-primary-dark/80 text-sm font-medium">Tailwind CSS</span>
            </div>
          </div>
        </div>

        <!-- Backend -->
        <div class="reveal bg-white rounded-4xl p-8 shadow-card" style="transition-delay: .1s">
          <div class="w-12 h-12 rounded-2xl bg-accent-light flex items-center justify-center mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2" />
            </svg>
          </div>
          <h3 class="font-heading font-bold text-lg mb-4">Backend</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 rounded-full bg-accent-light text-accent text-sm font-medium">PHP</span>
            <span class="px-3.5 py-1.5 rounded-full bg-accent-light text-accent text-sm font-medium">Laravel</span>
          </div>
        </div>

        <!-- Database -->
        <div class="reveal bg-white rounded-4xl p-8 shadow-card" style="transition-delay: .2s">
          <div class="w-12 h-12 rounded-2xl bg-sub-light flex items-center justify-center mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sub" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 7c0-1.657 3.582-3 8-3s8 1.343 8 3-3.582 3-8 3-8-1.343-8-3zm0 0v10c0 1.657 3.582 3 8 3s8-1.343 8-3V7m-16 5c0 1.657 3.582 3 8 3s8-1.343 8-3" />
            </svg>
          </div>
          <h3 class="font-heading font-bold text-lg mb-4">Database</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 rounded-full bg-sub-light text-ink text-sm font-medium">SQL</span>
            <span class="px-3.5 py-1.5 rounded-full bg-sub-light text-ink text-sm font-medium">MySQL</span>
          </div>
        </div>

        <!-- Tools -->
        <div class="reveal bg-white rounded-4xl p-8 shadow-card" style="transition-delay: .3s">
          <div class="w-12 h-12 rounded-2xl bg-ink/10 flex items-center justify-center mb-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-ink" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 3v12m12-9a3 3 0 11-6 0 3 3 0 016 0zM9 18a3 3 0 11-6 0 3 3 0 016 0zm9-9a9 9 0 01-9 9" />
            </svg>
          </div>
          <h3 class="font-heading font-bold text-lg mb-4">Tools</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 rounded-full bg-ink/10 text-ink text-sm font-medium">GitHub</span>
            <span class="px-3.5 py-1.5 rounded-full bg-ink/10 text-ink text-sm font-medium">GitHub Desktop</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==================== Works ==================== -->
  <section id="works" class="relative py-28 scroll-mt-20">
    <div class="max-w-6xl mx-auto px-6">
      <div class="reveal text-center mb-16">
        <p class="font-heading text-accent font-semibold tracking-widest mb-2">WORKS</p>
        <h2 class="font-heading text-3xl sm:text-4xl font-black">制作物</h2>
        <p class="text-muted mt-4 max-w-xl mx-auto leading-relaxed">
          詳細は後ほど追加予定。
        </p>
      </div>

      <div class="reveal relative md:px-10">

        <!-- 前へ / 次へ ボタン -->
        <button id="works-prev" aria-label="前の制作物へ" class="hidden md:flex absolute -left-5 top-[38%] -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white shadow-card items-center justify-center text-primary-dark hover:bg-primary-light transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button id="works-next" aria-label="次の制作物へ" class="hidden md:flex absolute -right-5 top-[38%] -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white shadow-card items-center justify-center text-primary-dark hover:bg-primary-light transition-colors">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </button>

        <!-- スライドトラック -->
        <div id="works-track" class="works-track flex gap-8 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-4">

          <!-- Work Card 01: Coffee Shop Website -->
          <article class="works-slide snap-start shrink-0 w-[85%] sm:w-[48%] lg:w-[31%] group bg-white rounded-4xl overflow-hidden shadow-card transition-all hover:-translate-y-1.5 hover:shadow-soft">
            <div class="aspect-[4/3] overflow-hidden bg-paper flex items-center justify-center">
              <img src="{{ asset('images/works/coffee-shop/hero.png') }}" alt="Coffee Shop Website のトップページ" class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105" />
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">Coffee Shop Website</h3>
              <p class="text-sm text-muted leading-relaxed mb-1">ITスクールの課題として制作した、HTML・CSSのみのランディングページです。</p>
              <button type="button" class="work-modal-trigger text-sm font-heading font-semibold text-primary-dark hover:text-accent transition-colors mb-4" data-work="coffee-shop">
                詳しくはクリック →
              </button>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full bg-primary-light text-primary-dark">HTML</span>
                <span class="text-xs px-3 py-1 rounded-full bg-primary-light text-primary-dark">CSS</span>
              </div>
              <div class="flex gap-4 text-sm font-heading font-semibold">
                <a href="https://github.com/kazukitooyama1998-svg/Coffee-bean" target="_blank" rel="noopener" class="text-primary-dark hover:text-accent transition-colors">GitHub →</a>
              </div>
            </div>
          </article>

          <article class="works-slide snap-start shrink-0 w-[85%] sm:w-[48%] lg:w-[31%] group bg-white rounded-4xl overflow-hidden shadow-card transition-all hover:-translate-y-1.5 hover:shadow-soft">
            <div class="aspect-[4/3] bg-gradient-to-br from-accent-light to-accent/30 flex items-center justify-center">
              <span class="font-heading text-accent/80 text-sm">Project Image</span>
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">プロジェクト名 02</h3>
              <p class="text-sm text-muted leading-relaxed mb-4">制作物の概要説明。使用技術や工夫した点を簡潔に。</p>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full bg-accent-light text-accent">PHP</span>
                <span class="text-xs px-3 py-1 rounded-full bg-accent-light text-accent">Tailwind CSS</span>
              </div>
              <div class="flex gap-4 text-sm font-heading font-semibold">
                <a href="#" class="text-primary-dark hover:text-accent transition-colors">GitHub →</a>
              </div>
            </div>
          </article>

          <article class="works-slide snap-start shrink-0 w-[85%] sm:w-[48%] lg:w-[31%] group bg-white rounded-4xl overflow-hidden shadow-card transition-all hover:-translate-y-1.5 hover:shadow-soft">
            <div class="aspect-[4/3] bg-gradient-to-br from-sub-light to-sub/40 flex items-center justify-center">
              <span class="font-heading text-ink/60 text-sm">Project Image</span>
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">プロジェクト名 03</h3>
              <p class="text-sm text-muted leading-relaxed mb-4">制作物の概要説明。使用技術や工夫した点を簡潔に。</p>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full bg-sub-light text-ink">HTML/CSS</span>
                <span class="text-xs px-3 py-1 rounded-full bg-sub-light text-ink">SQL</span>
              </div>
              <div class="flex gap-4 text-sm font-heading font-semibold">
                <a href="#" class="text-primary-dark hover:text-accent transition-colors">GitHub →</a>
              </div>
            </div>
          </article>

          <article class="works-slide snap-start shrink-0 w-[85%] sm:w-[48%] lg:w-[31%] group bg-white rounded-4xl overflow-hidden shadow-card transition-all hover:-translate-y-1.5 hover:shadow-soft">
            <div class="aspect-[4/3] bg-gradient-to-br from-primary-light to-accent/30 flex items-center justify-center">
              <span class="font-heading text-primary-dark/70 text-sm">Project Image</span>
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">プロジェクト名 04</h3>
              <p class="text-sm text-muted leading-relaxed mb-4">制作物の概要説明。使用技術や工夫した点を簡潔に。</p>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full bg-primary-light text-primary-dark">HTML</span>
                <span class="text-xs px-3 py-1 rounded-full bg-primary-light text-primary-dark">Bootstrap</span>
              </div>
              <div class="flex gap-4 text-sm font-heading font-semibold">
                <a href="#" class="text-primary-dark hover:text-accent transition-colors">GitHub →</a>
              </div>
            </div>
          </article>

          <article class="works-slide snap-start shrink-0 w-[85%] sm:w-[48%] lg:w-[31%] group bg-white rounded-4xl overflow-hidden shadow-card transition-all hover:-translate-y-1.5 hover:shadow-soft">
            <div class="aspect-[4/3] bg-gradient-to-br from-accent-light to-sub/30 flex items-center justify-center">
              <span class="font-heading text-accent/80 text-sm">Project Image</span>
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">プロジェクト名 05</h3>
              <p class="text-sm text-muted leading-relaxed mb-4">制作物の概要説明。使用技術や工夫した点を簡潔に。</p>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full bg-sub-light text-ink">PHP</span>
                <span class="text-xs px-3 py-1 rounded-full bg-sub-light text-ink">Laravel</span>
              </div>
              <div class="flex gap-4 text-sm font-heading font-semibold">
                <a href="#" class="text-primary-dark hover:text-accent transition-colors">GitHub →</a>
              </div>
            </div>
          </article>

        </div>

        <!-- 番号ページネーション -->
        <div id="works-dots" class="flex justify-center flex-wrap gap-3 mt-6">
          <button type="button" data-index="0" class="works-dot w-9 h-9 rounded-full font-heading text-sm font-semibold transition-colors" aria-label="1番目の制作物へ">01</button>
          <button type="button" data-index="1" class="works-dot w-9 h-9 rounded-full font-heading text-sm font-semibold transition-colors" aria-label="2番目の制作物へ">02</button>
          <button type="button" data-index="2" class="works-dot w-9 h-9 rounded-full font-heading text-sm font-semibold transition-colors" aria-label="3番目の制作物へ">03</button>
          <button type="button" data-index="3" class="works-dot w-9 h-9 rounded-full font-heading text-sm font-semibold transition-colors" aria-label="4番目の制作物へ">04</button>
          <button type="button" data-index="4" class="works-dot w-9 h-9 rounded-full font-heading text-sm font-semibold transition-colors" aria-label="5番目の制作物へ">05</button>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== Contact ==================== -->
  <section id="contact" class="relative py-28 bg-paper scroll-mt-20 overflow-hidden">
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-primary-light rounded-full blur-3xl opacity-60"></div>

    <div class="relative max-w-2xl mx-auto px-6">
      <div class="reveal text-center mb-14">
        <p class="font-heading text-accent font-semibold tracking-widest mb-2">CONTACT</p>
        <h2 class="font-heading text-3xl sm:text-4xl font-black mb-4">お問い合わせ</h2>
        <p class="text-muted leading-relaxed">
          ご質問等、お気軽にご連絡ください。
        </p>
      </div>

      <form class="reveal bg-white rounded-4xl shadow-card p-8 sm:p-10 space-y-6" action="#" method="POST">
        <div>
          <label for="name" class="block font-heading text-sm font-semibold mb-2">お名前</label>
          <input type="text" id="name" name="name" required
            class="w-full px-5 py-3 rounded-2xl border border-primary-light bg-paper focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all" />
        </div>
        <div>
          <label for="email" class="block font-heading text-sm font-semibold mb-2">メールアドレス</label>
          <input type="email" id="email" name="email" required
            class="w-full px-5 py-3 rounded-2xl border border-primary-light bg-paper focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all" />
        </div>
        <div>
          <label for="subject" class="block font-heading text-sm font-semibold mb-2">件名</label>
          <input type="text" id="subject" name="subject" required
            class="w-full px-5 py-3 rounded-2xl border border-primary-light bg-paper focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all" />
        </div>
        <div>
          <label for="message" class="block font-heading text-sm font-semibold mb-2">メッセージ</label>
          <textarea id="message" name="message" rows="5" required
            class="w-full px-5 py-3 rounded-2xl border border-primary-light bg-paper focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all resize-none"></textarea>
        </div>
        <button type="submit"
          class="w-full bg-primary hover:bg-primary-dark text-white font-heading font-semibold py-3.5 rounded-full shadow-soft transition-all hover:-translate-y-0.5">
          送信する
        </button>
      </form>
    </div>
  </section>

</main>

<!-- ==================== Footer ==================== -->
<footer id="site-footer" class="relative bg-primary-dark text-white/90 pt-16 pb-8">
  <div class="max-w-6xl mx-auto px-6">
    <div class="flex justify-center items-center pb-8 border-b border-white/15">
      <a href="#home" class="font-heading text-xl font-bold">Kazuki<span class="text-sub">.</span>Toyama</a>
    </div>
    <p class="text-center text-sm text-white/60 pt-6">&copy; 2026 Kazuki Toyama. All Rights Reserved.</p>
  </div>

  <button id="back-to-top" aria-label="ページ上部へ戻る"
    class="fixed bottom-8 right-8 w-12 h-12 rounded-full bg-accent hover:bg-accent/90 text-white shadow-soft flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 z-40">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
  </button>
</footer>

<!-- ==================== Work Detail Modal ==================== -->
<div id="work-modal" class="hidden fixed inset-0 z-[70] items-center justify-center p-4 sm:p-6">
  <div id="work-modal-backdrop" class="absolute inset-0 bg-ink/60 backdrop-blur-sm"></div>

  <div class="relative bg-white rounded-4xl shadow-soft w-full max-w-6xl max-h-[95vh] overflow-y-auto p-6 sm:p-10 pt-16 sm:pt-20">
    <button type="button" id="work-modal-close" aria-label="閉じる"
      class="absolute top-5 right-5 sm:top-6 sm:right-6 w-10 h-10 rounded-full bg-primary hover:bg-primary-dark text-white flex items-center justify-center shadow-soft transition-colors z-20">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <div class="grid md:grid-cols-2 gap-10">
      <div>
        <h3 id="work-modal-title" class="font-heading text-2xl sm:text-3xl font-black text-center md:text-left pb-4 mb-6 border-b border-primary-light"></h3>
        <p id="work-modal-description" class="text-sm sm:text-base leading-loose text-ink/90 whitespace-pre-line"></p>

        <h4 class="font-heading text-lg font-bold text-center md:text-left mt-8 pb-3 mb-4 border-b border-primary-light">使用言語など</h4>
        <div id="work-modal-tech" class="flex flex-wrap gap-2"></div>
      </div>

      <div>
        <div class="relative mb-4">
          <button type="button" id="work-modal-thumbs-prev" aria-label="前のサムネイルへ"
            class="hidden absolute -left-3 top-1/2 -translate-y-1/2 z-10 w-8 h-8 rounded-full bg-white shadow-card items-center justify-center text-primary-dark hover:bg-primary-light transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <div id="work-modal-thumbs" class="flex gap-3 overflow-x-auto scroll-smooth"></div>
          <button type="button" id="work-modal-thumbs-next" aria-label="次のサムネイルへ"
            class="hidden absolute -right-3 top-1/2 -translate-y-1/2 z-10 w-8 h-8 rounded-full bg-white shadow-card items-center justify-center text-primary-dark hover:bg-primary-light transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
        <div class="rounded-3xl overflow-hidden shadow-card bg-paper flex items-center justify-center">
          <img id="work-modal-main-image" src="" alt="" class="w-full h-auto max-h-[72vh] object-contain" />
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
