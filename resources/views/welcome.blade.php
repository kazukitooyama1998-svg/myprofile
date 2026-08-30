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
    'profile-site': {
      title: @js('Profile Site'),
      description: @js('本サイトは、私自身のポートフォリオサイトです。これまでの経歴や身につけてきたスキル、学習を通して取り組んできたことを知っていただくことを目的に制作しました。バックエンドにはLaravel、フロントエンドはBladeテンプレートとTailwind CSS（Vite）で構築し、モーダルやカルーセルなどの動きはJavaScriptで実装しています。全体を通して、優しい雰囲気とシンプルなテイストをベースにしながら、ところどころに遊び心を加えたデザインに仕上げました。今後も、これまで学んできたことや新しく身につけた技術を継続的にアップデートしていくとともに、学習の中で面白いと感じた技術や、本サイトに活用できそうな技術があれば積極的に取り入れ、自分自身の成長とともに進化していくサイトを目指していきます。'),
      tech: @js(['HTML', 'CSS', 'JavaScript', 'Tailwind CSS', 'PHP', 'Laravel', 'MySQL']),
      images: [
        { src: @js(asset('images/works/profile-site/hero.png')), alt: @js('Profile Site のトップページ') },
        { src: @js(asset('images/works/profile-site/about.png')), alt: @js('Profile Site の自己紹介セクション') },
        { src: @js(asset('images/works/profile-site/skills.png')), alt: @js('Profile Site の使用技術セクション') },
        { src: @js(asset('images/works/profile-site/works.png')), alt: @js('Profile Site の制作物セクション') },
        { src: @js(asset('images/works/profile-site/contact.png')), alt: @js('Profile Site のお問い合わせセクション') },
      ],
    },
    'learning-english': {
      title: @js('Learning English Site'),
      description: @js("とにかく「手を動かして」英語を身につける、タイピング機能が特徴的な英語学習サイトです。\n\n私自身の英語学習の経験から、「口を動かす（シャドーイング・音読）」ような、手軽に始められて継続しやすい練習が、特に初心者にとって効果的だと感じてきました。質の高い授業を受け、予習・復習を続ける学習法は理想的である一方、初心者にはハードルが高く、挫折しやすいという課題があります。実際に私は、現地の人と数多く話す機会をつくり、IELTS学習時にAIからフィードバックを得ながらSpeaking練習を重ねることで、英語力を伸ばしてきました。\n\nしかし、Speaking機能を備えた英語学習アプリはすでに数多く存在します。そこで本サイトでは、その対をなす新しいアプローチとして、「とにかく手を動かす」タイピング機能を取り入れた英語学習の仕組みを発案し、開発しました。\n\nタイピング機能を中心的なコンテンツとしながら、TOEIC形式のReading演習、英単語のフラッシュカード学習、スペルクイズなど、複数の学習モードも実装しています。さらに、学習の継続を後押しする要素として、フォロー機能によるユーザー同士のつながりや、学習記録に基づくランキング機能も取り入れました。\n\nなお、音声機能は無料での実装を検討しましたが、音質が十分でなかったため今回は見送りました。同様に、Speaking／WritingのAI自動採点機能も、コストをかけずに開発する方針としたため、今回は導入していません。これらは今後の拡張課題と位置づけています。"),
      tech: @js(['HTML', 'CSS', 'JavaScript', 'Tailwind CSS', 'PHP', 'Laravel', 'MySQL']),
      images: [
        { src: @js(asset('images/works/learning-english/home-dashboard.png')), alt: @js('Learning English Site のホーム画面（学習ダッシュボード）') },
        { src: @js(asset('images/works/learning-english/landing.png')), alt: @js('Learning English Site のランディングページ') },
        { src: @js(asset('images/works/learning-english/register.png')), alt: @js('Learning English Site の会員登録画面') },
        { src: @js(asset('images/works/learning-english/login.png')), alt: @js('Learning English Site のログイン画面') },
        { src: @js(asset('images/works/learning-english/toeic-part5-explanation.png')), alt: @js('Learning English Site のTOEIC Part5解説スライド') },
        { src: @js(asset('images/works/learning-english/toeic-part5-practice.png')), alt: @js('Learning English Site のTOEIC Part5練習問題') },
        { src: @js(asset('images/works/learning-english/ielts-speaking-hub.png')), alt: @js('Learning English Site のIELTS Speaking一覧') },
        { src: @js(asset('images/works/learning-english/ielts-topic-select.png')), alt: @js('Learning English Site のIELTSトピック選択画面') },
        { src: @js(asset('images/works/learning-english/ielts-score-select.png')), alt: @js('Learning English Site のIELTS目標スコア選択画面') },
        { src: @js(asset('images/works/learning-english/ielts-vocabulary-slide.png')), alt: @js('Learning English Site のIELTS関連語彙スライド') },
        { src: @js(asset('images/works/learning-english/ielts-speaking-typing.png')), alt: @js('Learning English Site のSpeakingタイピング練習画面') },
        { src: @js(asset('images/works/learning-english/vocabulary-hub.png')), alt: @js('Learning English Site の英単語学習一覧') },
        { src: @js(asset('images/works/learning-english/vocabulary-flashcard.png')), alt: @js('Learning English Site の英単語フラッシュカード') },
        { src: @js(asset('images/works/learning-english/vocabulary-favorites.png')), alt: @js('Learning English Site のお気に入り単語一覧') },
        { src: @js(asset('images/works/learning-english/typing-hub.png')), alt: @js('Learning English Site のタイピング練習一覧') },
        { src: @js(asset('images/works/learning-english/typing-business-english.png')), alt: @js('Learning English Site のBusiness Englishタイピング練習') },
        { src: @js(asset('images/works/learning-english/quiz-hub.png')), alt: @js('Learning English Site のクイズ一覧') },
        { src: @js(asset('images/works/learning-english/quiz-spelling.png')), alt: @js('Learning English Site のスペルクイズ') },
        { src: @js(asset('images/works/learning-english/quiz-vocabulary.png')), alt: @js('Learning English Site の語彙クイズ') },
        { src: @js(asset('images/works/learning-english/study-dashboard.png')), alt: @js('Learning English Site の学習管理画面') },
        { src: @js(asset('images/works/learning-english/ranking.png')), alt: @js('Learning English Site のランキング画面') },
      ],
    },
    'voca-review': {
      title: @js('VocaReview'),
      description: @js("英単語や文法の自己学習には、これまでスプレッドシートを使ってきました。しかし利用する項目数が増えるにつれて動作が重くなり、単語や文法を追加・編集・検索するたびにストレスを感じるようになっていました。また、「覚えた項目」と「まだ覚えていない項目」を分けて見返す方法がなく、どれだけ復習を続けられているかを振り返る手段もありませんでした。さらに、単語の発音を確認したいときはその都度Google 翻訳を別タブで開く必要があり、スプレッドシートとの行き来で復習のテンポが途切れてしまうことも課題でした。\n\nこうした課題を解決するために、スプレッドシートで管理していた学習内容をWebアプリへ移行し、動作を軽快にすることを目的としてVocaReviewを開発しました。単語・フレーズ・文法を効率よく登録・管理・復習できる環境を整えることで、自分専用の英語学習ツールとして学習効率そのものを高めることを目指しています。発音確認についてもWeb Speech APIを組み込むことでアプリ内で単語をそのまま読み上げられるようにし、Google 翻訳を都度開かなくても復習が進められるようにしています。\n\nログイン機能を持たない個人利用前提のアプリのため、画面遷移をできるだけ減らし、登録・検索・絞り込み・復習・学習記録の確認まで、すべてトップページ1枚で完結するように設計しています。"),
      tech: @js(['HTML', 'JavaScript', 'Tailwind CSS', 'PHP', 'Laravel', 'MySQL']),
      images: [
        { src: @js(asset('images/works/voca-review/add-form.png')), alt: @js('VocaReview の検索・絞り込み・新規登録エリア') },
        { src: @js(asset('images/works/voca-review/word-list-1.png')), alt: @js('VocaReview の登録一覧画面') },
        { src: @js(asset('images/works/voca-review/word-list-2.png')), alt: @js('VocaReview の登録一覧とページネーション') },
        { src: @js(asset('images/works/voca-review/edit-modal.png')), alt: @js('VocaReview の編集モーダル') },
        { src: @js(asset('images/works/voca-review/delete-confirm.png')), alt: @js('VocaReview の削除確認モーダル') },
      ],
    },
  };
</script>

@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cream text-ink font-sans antialiased">

<!-- ==================== Header ==================== -->
<header id="site-header" class="fixed top-0 inset-x-0 z-50 transition-all duration-300 bg-white/90 shadow-soft backdrop-blur">
  <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
    <a href="#home" class="logo-3d font-heading text-2xl sm:text-[1.6rem] font-bold text-primary-dark tracking-wide leading-none">
      Kazuki<span class="text-accent">.</span>Toyama
    </a>

    <!-- PC Nav -->
    <nav class="hidden md:flex items-center gap-2 lg:gap-4 font-heading text-base font-medium">
      <a href="#home" class="nav-link">Home</a>
      <a href="#about" class="nav-link">About</a>
      <a href="#skills" class="nav-link">Skills</a>
      <a href="#works" class="nav-link">Works</a>
      <a href="#contact" class="nav-link">Contact</a>
    </nav>

    <a href="#contact" class="btn-pop hidden md:inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white text-base font-heading font-medium px-5 py-2.5 rounded-full">
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
    <!-- 海と空を思わせる淡いグラデーション -->
    <div class="absolute inset-0 bg-gradient-to-b from-sky-light/70 via-cream to-cream"></div>

    <!-- ふんわりブロブ背景 -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary-light rounded-full blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-1/3 -right-32 w-[28rem] h-[28rem] bg-accent-light rounded-full blur-3xl opacity-70 animate-blob animate-blob-delay"></div>
    <div class="absolute bottom-0 left-1/4 w-72 h-72 bg-sub-light rounded-full blur-3xl opacity-60 animate-blob animate-blob-delay2"></div>

    <!-- 着想モチーフ：インク・きらめき・葉っぱ（スクロールで視差移動） -->
    <div class="motif top-24 right-[8%] w-40 h-40 text-grape-light hidden sm:block" data-parallax="-0.06">
      <svg class="motif-inner ink-splat anim-drift" viewBox="0 0 120 120" aria-hidden="true"><path d="M62 8c9-4 15 9 26 9s18 3 19 14-8 15-4 26 12 15 6 25-19 4-27 12-9 17-21 17-15-10-26-11-17 6-25-2-1-19-6-29S3 71 6 60s16-9 20-19S39 22 47 16 53 12 62 8z"/></svg>
    </div>
    <div class="motif bottom-16 left-[6%] w-24 h-24 text-primary-light hidden sm:block" data-parallax="0.1">
      <svg class="motif-inner ink-splat anim-drift" style="animation-delay:-3s" viewBox="0 0 120 120" aria-hidden="true"><path d="M62 8c9-4 15 9 26 9s18 3 19 14-8 15-4 26 12 15 6 25-19 4-27 12-9 17-21 17-15-10-26-11-17 6-25-2-1-19-6-29S3 71 6 60s16-9 20-19S39 22 47 16 53 12 62 8z"/></svg>
    </div>
    <div class="motif top-[62%] right-[16%] w-6 h-6 text-accent" data-parallax="0.22">
      <svg class="motif-inner anim-twinkle" style="animation-delay:-1.5s" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0c1 6 5 10 12 12-7 2-11 6-12 12-1-6-5-10-12-12C7 10 11 6 12 0z"/></svg>
    </div>
    <div class="relative z-10 max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center w-full">
      {{-- コアラのマーチ風：森のなかまがのったビスケット。
           コンテンツ幅の外側に固定するので、どの画面幅・縮尺でも本文と重ならない --}}
      <div class="motif top-[34%] left-[-3.25rem] w-12 h-12 hidden xl:block" data-parallax="0.06">
        <div class="biscuit anim-bob w-full h-full">
          <svg class="critter" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <circle cx="11" cy="12" r="6" /><circle cx="29" cy="12" r="6" />
            <path d="M20 8c7.5 0 12.5 5.5 12.5 13.5S27 34 20 34 7.5 29 7.5 21.5 12.5 8 20 8Z" />
            <ellipse cx="20" cy="24" rx="3" ry="2.2" fill="currentColor" stroke="none" />
            <circle cx="14.8" cy="19" r="1.3" fill="currentColor" stroke="none" />
            <circle cx="25.2" cy="19" r="1.3" fill="currentColor" stroke="none" />
          </svg>
        </div>
      </div>

      <div class="reveal">
        <p class="signboard signboard-swing font-heading font-bold tracking-widest mb-6 text-sm">
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
          <a href="#works" class="btn-pop group/link inline-flex items-center gap-2 bg-primary hover:bg-primary-dark text-white font-heading font-semibold px-7 py-3.5 rounded-full">
            制作物を見る <span class="arrow-nudge">→</span>
          </a>
          <a href="#about" class="btn-pop inline-flex items-center gap-2 bg-white hover:bg-primary-light/60 text-ink font-heading font-semibold px-7 py-3.5 rounded-full">
            プロフィールを見る
          </a>
        </div>
      </div>

      <div class="reveal relative flex justify-center" style="transition-delay: .15s">
        <div class="relative w-80 h-80 sm:w-[26rem] sm:h-[26rem] lg:w-[30rem] lg:h-[30rem]">
          <div class="absolute inset-0 rounded-4xl bg-gradient-to-br from-primary-light via-accent-light to-sub-light rotate-6"></div>
          <div class="absolute inset-0 rounded-4xl bg-white sticker -rotate-3 flex items-center justify-center overflow-hidden">
            <img src="{{ asset('images/profile.jpeg') }}" alt="Kazuki Toyama" class="w-full h-full object-cover" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== About ==================== -->
  <section id="about" class="relative py-28 scroll-mt-20 overflow-hidden dot-grid">
    <div class="motif top-16 left-[4%] w-28 h-28 text-berry-light hidden lg:block" data-parallax="0.08">
      <svg class="motif-inner ink-splat anim-drift" viewBox="0 0 120 120" aria-hidden="true"><path d="M62 8c9-4 15 9 26 9s18 3 19 14-8 15-4 26 12 15 6 25-19 4-27 12-9 17-21 17-15-10-26-11-17 6-25-2-1-19-6-29S3 71 6 60s16-9 20-19S39 22 47 16 53 12 62 8z"/></svg>
    </div>
    <div class="motif bottom-24 right-[5%] w-8 h-8 text-sub" data-parallax="0.18">
      <svg class="motif-inner anim-twinkle" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0c1 6 5 10 12 12-7 2-11 6-12 12-1-6-5-10-12-12C7 10 11 6 12 0z"/></svg>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-6">
      <div class="reveal text-center mb-16">
        <p class="mb-4"><span class="signboard signboard-swing font-heading font-bold tracking-widest text-sm">ABOUT ME</span></p>
        <h2 class="font-heading text-3xl sm:text-4xl font-black heading-pop">自己紹介</h2>
      </div>

      <div class="grid md:grid-cols-5 gap-12 items-center">
        <div class="reveal md:col-span-2 flex justify-center">
          <div class="relative w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80">
            <div class="absolute inset-0 rounded-full bg-gradient-to-br from-primary-light to-accent-light rotate-6"></div>
            <div class="absolute inset-2 rounded-full bg-white sticker overflow-hidden">
              <img src="{{ asset('images/about-photo.png') }}" alt="Kazuki Toyama" class="w-full h-full object-cover" />
            </div>
            <div class="motif -top-2 -right-1 w-8 h-8 text-sub z-10">
              <svg class="motif-inner anim-twinkle" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0c1 6 5 10 12 12-7 2-11 6-12 12-1-6-5-10-12-12C7 10 11 6 12 0z"/></svg>
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

          <ul class="grid sm:grid-cols-2 gap-3.5 pt-4">
            <li class="group sm:col-span-2 flex items-start gap-3 bg-paper rounded-2xl px-5 py-4 sticker-sm transition-transform hover:-translate-y-1 hover:rotate-[-1deg]">
              <span class="group-jump w-2.5 h-2.5 rounded-full bg-primary mt-1.5 shrink-0"></span>
              <span class="text-sm text-muted leading-relaxed">
                在住地：フィリピン・セブ島（留学中）<br />
                現在、Kredoにて Web 開発と英語を学習しています。（2026年9月18日卒業見込み）
              </span>
            </li>
            <li class="group flex items-start gap-3 bg-paper rounded-2xl px-5 py-3 sticker-sm transition-transform hover:-translate-y-1 hover:rotate-[-1deg]">
              <span class="group-jump w-2.5 h-2.5 rounded-full bg-accent mt-1.5 shrink-0"></span>
              <span class="text-sm text-muted">得意分野：Claude Codeを活用したLaravel開発</span>
            </li>
            <li class="group flex items-start gap-3 bg-paper rounded-2xl px-5 py-3 sticker-sm transition-transform hover:-translate-y-1 hover:rotate-[-1deg]">
              <span class="group-jump w-2.5 h-2.5 rounded-full bg-sub mt-1.5 shrink-0"></span>
              <span class="text-sm text-muted">趣味：英語学習 / 美味しいものを食べること</span>
            </li>
            <li class="group sm:col-span-2 flex items-center gap-3 bg-paper rounded-2xl px-5 py-3 sticker-sm transition-transform hover:-translate-y-1 hover:rotate-[-1deg]">
              <span class="group-jump w-2.5 h-2.5 rounded-full bg-primary-dark shrink-0"></span>
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
  <section id="skills" class="relative py-28 bg-paper scroll-mt-20 overflow-hidden dot-grid scallop-top">
    <div class="motif top-20 right-[6%] w-32 h-32 text-sky-light hidden lg:block" data-parallax="0.09">
      <svg class="motif-inner ink-splat anim-drift" viewBox="0 0 120 120" aria-hidden="true"><path d="M62 8c9-4 15 9 26 9s18 3 19 14-8 15-4 26 12 15 6 25-19 4-27 12-9 17-21 17-15-10-26-11-17 6-25-2-1-19-6-29S3 71 6 60s16-9 20-19S39 22 47 16 53 12 62 8z"/></svg>
    </div>
    <div class="motif bottom-16 left-[7%] w-9 h-9 text-accent" data-parallax="0.2">
      <svg class="motif-inner anim-twinkle" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0c1 6 5 10 12 12-7 2-11 6-12 12-1-6-5-10-12-12C7 10 11 6 12 0z"/></svg>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-6">
      <div class="reveal text-center mb-16">
        <p class="mb-4"><span class="signboard signboard-swing font-heading font-bold tracking-widest text-sm">SKILLS</span></p>
        <h2 class="font-heading text-3xl sm:text-4xl font-black heading-pop">使用技術</h2>
        <p class="text-muted mt-4 max-w-2xl mx-auto leading-relaxed">
          これまで学習してきた技術をまとめています。ITスクールではフロントエンドからバックエンドまで幅広い技術を学び、Web開発全体の基礎を身につけました。現在はJavaScriptやTailwind CSSを中心に学習を進めるとともに、Laravelを用いたWebアプリケーション開発にも継続的に取り組んでいます。
          <br /><br />
          また、Claude Codeを活用したLaravel開発を実践しており、要件整理から実装までの開発工程を効率化しながら、より生産性の高い開発を意識しています。さらに、ChatGPTなどのAIツールについても、それぞれの特性を活かした活用方法を検証し、開発効率の向上やより良いアプリケーション開発につながるワークフローを日々模索しています。
          <br /><br />
          今後もさまざまな技術やプログラミング言語への理解を深めるとともに、AIを効果的に活用した開発手法についても継続的に学習し、スキルアップに取り組んでいきます。また、幅広い知識を土台としつつ、将来的にはフロントエンドやバックエンドなど、それぞれの分野で専門性を高め、ユーザーにとって価値のあるサービスを開発できるエンジニアを目指しています。
        </p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-8 [perspective:1000px]">

        <!-- Frontend -->
        <div class="reveal card-pop card-tilt group bg-white rounded-4xl p-8">
          <div class="w-12 h-12 rounded-2xl bg-primary-light flex items-center justify-center mb-5 pop-icon sticker-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="font-heading font-bold text-lg mb-4">Frontend</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-primary-light text-primary-dark text-sm font-medium">HTML</span>
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-primary-light text-primary-dark text-sm font-medium">CSS</span>
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-primary-light text-primary-dark text-sm font-medium">Bootstrap</span>
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
        <div class="reveal card-pop card-tilt group bg-white rounded-4xl p-8" style="transition-delay: .1s">
          <div class="w-12 h-12 rounded-2xl bg-accent-light flex items-center justify-center mb-5 pop-icon sticker-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2" />
            </svg>
          </div>
          <h3 class="font-heading font-bold text-lg mb-4">Backend</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-accent-light text-accent text-sm font-medium">PHP</span>
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-accent-light text-accent text-sm font-medium">Laravel</span>
          </div>
        </div>

        <!-- Database -->
        <div class="reveal card-pop card-tilt group bg-white rounded-4xl p-8" style="transition-delay: .2s">
          <div class="w-12 h-12 rounded-2xl bg-sub-light flex items-center justify-center mb-5 pop-icon sticker-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-sub" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 7c0-1.657 3.582-3 8-3s8 1.343 8 3-3.582 3-8 3-8-1.343-8-3zm0 0v10c0 1.657 3.582 3 8 3s8-1.343 8-3V7m-16 5c0 1.657 3.582 3 8 3s8-1.343 8-3" />
            </svg>
          </div>
          <h3 class="font-heading font-bold text-lg mb-4">Database</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-sub-light text-ink text-sm font-medium">SQL</span>
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-sub-light text-ink text-sm font-medium">MySQL</span>
          </div>
        </div>

        <!-- Tools -->
        <div class="reveal card-pop card-tilt group bg-white rounded-4xl p-8" style="transition-delay: .3s">
          <div class="w-12 h-12 rounded-2xl bg-ink/10 flex items-center justify-center mb-5 pop-icon sticker-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-ink" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 3v12m12-9a3 3 0 11-6 0 3 3 0 016 0zM9 18a3 3 0 11-6 0 3 3 0 016 0zm9-9a9 9 0 01-9 9" />
            </svg>
          </div>
          <h3 class="font-heading font-bold text-lg mb-4">Tools</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-ink/10 text-ink text-sm font-medium">GitHub</span>
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-ink/10 text-ink text-sm font-medium">GitHub Desktop</span>
          </div>
        </div>

        <!-- AI tools -->
        <div class="reveal card-pop card-tilt group bg-white rounded-4xl p-8" style="transition-delay: .4s">
          <div class="w-12 h-12 rounded-2xl bg-primary-light flex items-center justify-center mb-5 pop-icon sticker-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a4 4 0 115.657 0 4 4 0 01-5.657 0z" />
            </svg>
          </div>
          <h3 class="font-heading font-bold text-lg mb-4">AI tools</h3>
          <div class="flex flex-wrap gap-2">
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-primary-light text-primary-dark text-sm font-medium">Claude Code</span>
            <span class="px-3.5 py-1.5 rounded-full tag-pop bg-primary-light text-primary-dark text-sm font-medium">ChatGPT</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==================== Works ==================== -->
  <section id="works" class="relative py-28 scroll-mt-20 overflow-hidden dot-grid">
    <div class="motif top-16 left-[3%] w-36 h-36 text-grape-light hidden lg:block" data-parallax="0.07">
      <svg class="motif-inner ink-splat anim-drift" viewBox="0 0 120 120" aria-hidden="true"><path d="M62 8c9-4 15 9 26 9s18 3 19 14-8 15-4 26 12 15 6 25-19 4-27 12-9 17-21 17-15-10-26-11-17 6-25-2-1-19-6-29S3 71 6 60s16-9 20-19S39 22 47 16 53 12 62 8z"/></svg>
    </div>
    <div class="motif bottom-28 right-[4%] w-10 h-10 text-sub" data-parallax="0.19">
      <svg class="motif-inner anim-twinkle" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0c1 6 5 10 12 12-7 2-11 6-12 12-1-6-5-10-12-12C7 10 11 6 12 0z"/></svg>
    </div>
    {{-- コアラのマーチ風：味ちがい（いちご）のビスケット --}}
    <div class="motif top-[16%] right-[7%] w-14 h-14 hidden sm:block" data-parallax="0.12">
      <div class="biscuit biscuit-berry anim-bob w-full h-full" style="animation-delay:-2s">
        <svg class="critter" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <circle cx="11" cy="12" r="6" /><circle cx="29" cy="12" r="6" />
          <path d="M20 8c7.5 0 12.5 5.5 12.5 13.5S27 34 20 34 7.5 29 7.5 21.5 12.5 8 20 8Z" />
          <path d="M13 25c2.5 3 11.5 3 14 0" />
          <circle cx="14.8" cy="19" r="1.3" fill="currentColor" stroke="none" />
          <circle cx="25.2" cy="19" r="1.3" fill="currentColor" stroke="none" />
        </svg>
      </div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-6">
      <div class="reveal text-center mb-16">
        <p class="mb-4"><span class="signboard signboard-swing font-heading font-bold tracking-widest text-sm">WORKS</span></p>
        <h2 class="font-heading text-3xl sm:text-4xl font-black heading-pop">制作物</h2>
      </div>

      <div class="reveal relative md:px-10">

        <!-- 前へ / 次へ ボタン -->
        <button id="works-prev" aria-label="前の制作物へ" class="hidden md:flex absolute -left-5 top-[38%] -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white btn-pop items-center justify-center text-primary-dark hover:bg-primary-light">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <button id="works-next" aria-label="次の制作物へ" class="hidden md:flex absolute -right-5 top-[38%] -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white btn-pop items-center justify-center text-primary-dark hover:bg-primary-light">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </button>

        <!-- スライドトラック -->
        <div id="works-track" class="works-track flex gap-8 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-4">

          <!-- Work Card 01: Coffee Shop Website -->
          <article class="works-slide snap-start shrink-0 w-full sm:w-[48%] lg:w-[31%] group card-pop bg-white rounded-4xl overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden bg-paper flex items-center justify-center">
              <img src="{{ asset('images/works/coffee-shop/hero.png') }}" alt="Coffee Shop Website のトップページ" class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105" />
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">Coffee Shop Website</h3>
              <p class="text-sm text-muted leading-relaxed mb-1">ITスクールの課題として制作した、HTML・CSSのみのランディングページです。</p>
              <button type="button" class="work-modal-trigger text-sm font-heading font-semibold text-primary-dark hover:text-accent transition-colors mb-4" data-work="coffee-shop">
                詳しくはクリック <span class="arrow-nudge">→</span>
              </button>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">HTML</span>
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">CSS</span>
              </div>
              <div class="flex gap-4 text-sm font-heading font-semibold">
                <a href="https://github.com/kazukitooyama1998-svg/Coffee-bean" target="_blank" rel="noopener" class="text-primary-dark hover:text-accent transition-colors">GitHub →</a>
              </div>
            </div>
          </article>

          <!-- Work Card 02: Profile Site -->
          <article class="works-slide snap-start shrink-0 w-full sm:w-[48%] lg:w-[31%] group card-pop bg-white rounded-4xl overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden bg-paper flex items-center justify-center">
              <img src="{{ asset('images/works/profile-site/hero.png') }}" alt="Profile Site のトップページ" class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105" />
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">Profile Site</h3>
              <p class="text-sm text-muted leading-relaxed mb-1">経歴やスキルを知っていただくために制作した、自分自身のポートフォリオサイトです。</p>
              <button type="button" class="work-modal-trigger text-sm font-heading font-semibold text-primary-dark hover:text-accent transition-colors mb-4" data-work="profile-site">
                詳しくはクリック <span class="arrow-nudge">→</span>
              </button>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">Laravel</span>
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">Tailwind CSS</span>
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">+5</span>
              </div>
              <div class="flex gap-4 text-sm font-heading font-semibold">
                <a href="https://github.com/kazukitooyama1998-svg/myprofile" target="_blank" rel="noopener" class="text-primary-dark hover:text-accent transition-colors">GitHub →</a>
              </div>
            </div>
          </article>

          <!-- Work Card 03: Learning English Site -->
          <article class="works-slide snap-start shrink-0 w-full sm:w-[48%] lg:w-[31%] group card-pop bg-white rounded-4xl overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden bg-paper flex items-center justify-center">
              <img src="{{ asset('images/works/learning-english/home-dashboard.png') }}" alt="Learning English Site のホーム画面（学習ダッシュボード）" class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105" />
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">Learning English Site</h3>
              <p class="text-sm text-muted leading-relaxed mb-1">「とにかく手を動かす」タイピング機能が特徴的な英語学習サイトです。</p>
              <button type="button" class="work-modal-trigger text-sm font-heading font-semibold text-primary-dark hover:text-accent transition-colors mb-4" data-work="learning-english">
                詳しくはクリック <span class="arrow-nudge">→</span>
              </button>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">Laravel</span>
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">MySQL</span>
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">+5</span>
              </div>
              <div class="flex gap-4 text-sm font-heading font-semibold">
                <a href="https://github.com/kazukitooyama1998-svg/laravel-english-learning-site" target="_blank" rel="noopener" class="text-primary-dark hover:text-accent transition-colors">GitHub →</a>
              </div>
            </div>
          </article>

          <article class="works-slide snap-start shrink-0 w-full sm:w-[48%] lg:w-[31%] group card-pop bg-white rounded-4xl overflow-hidden">
            <div class="aspect-[4/3] overflow-hidden bg-paper flex items-center justify-center">
              <img src="{{ asset('images/works/voca-review/home-dashboard.png') }}" alt="VocaReview のトップ画面（学習ダッシュボード）" class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105" />
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">VocaReview</h3>
              <p class="text-sm text-muted leading-relaxed mb-1">スプレッドシートでの英単語・文法学習をWebアプリ化した、個人用の英語自己学習ツールです。</p>
              <button type="button" class="work-modal-trigger text-sm font-heading font-semibold text-primary-dark hover:text-accent transition-colors mb-4" data-work="voca-review">
                詳しくはクリック <span class="arrow-nudge">→</span>
              </button>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">Laravel</span>
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">MySQL</span>
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">+4</span>
              </div>
              <div class="flex gap-4 text-sm font-heading font-semibold">
                <a href="https://github.com/kazukitooyama1998-svg/voca-review" target="_blank" rel="noopener" class="text-primary-dark hover:text-accent transition-colors">GitHub →</a>
              </div>
            </div>
          </article>

          <article class="works-slide snap-start shrink-0 w-full sm:w-[48%] lg:w-[31%] group card-pop bg-white rounded-4xl overflow-hidden">
            <div class="aspect-[4/3] bg-gradient-to-br from-accent-light to-sub/30 flex items-center justify-center">
              <span class="font-heading text-accent/80 text-sm">Project Image</span>
            </div>
            <div class="p-6">
              <h3 class="font-heading font-bold text-lg mb-2">Commig soon</h3>
              <p class="text-sm text-muted leading-relaxed mb-4">#</p>
              <div class="flex flex-wrap gap-2 mb-5">
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">#</span>
                <span class="text-xs px-3 py-1 rounded-full tag-pop bg-primary-light text-primary-dark">#</span>
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
  <section id="contact" class="relative py-28 bg-paper scroll-mt-20 overflow-hidden dot-grid scallop-top">
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-primary-light rounded-full blur-3xl opacity-60"></div>

    <!-- 海モチーフ：下からゆらゆら昇る泡（JSで生成） -->
    <div id="contact-bubbles" class="absolute inset-0 overflow-hidden" aria-hidden="true"></div>

    <div class="motif top-14 left-[6%] w-10 h-10 text-sky-dark" data-parallax="0.15">
      <svg class="motif-inner anim-twinkle" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0c1 6 5 10 12 12-7 2-11 6-12 12-1-6-5-10-12-12C7 10 11 6 12 0z"/></svg>
    </div>
    {{-- ちいかわ風：フォームのそばにちょこんといる森のなかま --}}
    <div class="motif bottom-24 right-[8%] w-16 h-16 hidden lg:block" data-parallax="0.1">
      <div class="biscuit biscuit-matcha anim-bob w-full h-full" style="animation-delay:-1s">
        <svg class="critter" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <circle cx="11" cy="12" r="6" /><circle cx="29" cy="12" r="6" />
          <path d="M20 8c7.5 0 12.5 5.5 12.5 13.5S27 34 20 34 7.5 29 7.5 21.5 12.5 8 20 8Z" />
          <path d="M14 19.5c.6-1 2-1 2.6 0M23.4 19.5c.6-1 2-1 2.6 0" />
          <path d="M16.5 25c1.4 1.4 5.6 1.4 7 0" />
        </svg>
      </div>
    </div>

    <div class="relative z-10 max-w-2xl mx-auto px-6">
      <div class="reveal text-center mb-14">
        <p class="mb-4"><span class="signboard signboard-swing font-heading font-bold tracking-widest text-sm">CONTACT</span></p>
        <h2 class="font-heading text-3xl sm:text-4xl font-black heading-pop mb-4">お問い合わせ</h2>
        <p class="text-muted leading-relaxed">
          ご質問等、お気軽にご連絡ください。
        </p>
      </div>

      @if (session('contact_success'))
        <div class="reveal bg-primary-light text-primary-dark rounded-3xl px-6 py-5 mb-6 text-center font-heading font-semibold leading-relaxed">
          お問い合わせを受け付けました。ご連絡ありがとうございます。<br />
          ご入力いただいたメールアドレス宛に確認メールをお送りしておりますので、ご確認ください。
        </div>
      @endif

      @if (session('contact_error'))
        <div class="reveal bg-accent-light text-accent rounded-3xl px-6 py-5 mb-6 text-center font-heading font-semibold leading-relaxed">
          送信中にエラーが発生しました。お手数ですが、時間をおいて再度お試しください。
        </div>
      @endif

      <form class="reveal sticker bg-white rounded-4xl p-8 sm:p-10 space-y-6" action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div>
          <label for="name" class="block font-heading text-sm font-semibold mb-2">お名前</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" required
            class="w-full px-5 py-3 rounded-2xl border {{ $errors->has('name') ? 'border-accent' : 'border-primary-light' }} bg-paper focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all" />
          @error('name')
            <p class="text-sm text-accent mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="email" class="block font-heading text-sm font-semibold mb-2">メールアドレス</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" required
            class="w-full px-5 py-3 rounded-2xl border {{ $errors->has('email') ? 'border-accent' : 'border-primary-light' }} bg-paper focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all" />
          @error('email')
            <p class="text-sm text-accent mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="subject" class="block font-heading text-sm font-semibold mb-2">件名</label>
          <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
            class="w-full px-5 py-3 rounded-2xl border {{ $errors->has('subject') ? 'border-accent' : 'border-primary-light' }} bg-paper focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all" />
          @error('subject')
            <p class="text-sm text-accent mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="message" class="block font-heading text-sm font-semibold mb-2">メッセージ</label>
          <textarea id="message" name="message" rows="5" required
            class="w-full px-5 py-3 rounded-2xl border {{ $errors->has('message') ? 'border-accent' : 'border-primary-light' }} bg-paper focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/50 transition-all resize-none">{{ old('message') }}</textarea>
          @error('message')
            <p class="text-sm text-accent mt-2">{{ $message }}</p>
          @enderror
        </div>
        <button type="submit"
          class="btn-pop group/link w-full bg-primary hover:bg-primary-dark text-white font-heading font-semibold py-3.5 rounded-full">
          送信する <span class="arrow-nudge">→</span>
        </button>
      </form>
    </div>
  </section>

</main>

<!-- ==================== Footer ==================== -->
<footer id="site-footer" class="relative bg-primary-dark text-white/90 pt-14 pb-24 sm:pb-8">

  {{-- コアラのマーチ風：フッターの上辺から覗く「森のなかまたち」。
       タップすると、おみくじのように「きょうの運勢」が出ます（色は統一） --}}
  <div class="forest-friends" id="forest-friends">
    <button type="button" class="ff-critter hidden sm:block" aria-label="森のなかまをタップして今日の運勢を見る">
      <span class="biscuit block w-full h-full">
        <svg class="critter" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="12" r="6"/><circle cx="29" cy="12" r="6"/><path d="M20 8c7.5 0 12.5 5.5 12.5 13.5S27 34 20 34 7.5 29 7.5 21.5 12.5 8 20 8Z"/><ellipse cx="20" cy="24" rx="3" ry="2.2" fill="currentColor" stroke="none"/><circle cx="14.8" cy="19" r="1.3" fill="currentColor" stroke="none"/><circle cx="25.2" cy="19" r="1.3" fill="currentColor" stroke="none"/></svg>
      </span>
    </button>
    <button type="button" class="ff-critter" aria-label="森のなかまをタップして今日の運勢を見る">
      <span class="biscuit block w-full h-full">
        <svg class="critter" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="12" r="6"/><circle cx="29" cy="12" r="6"/><path d="M20 8c7.5 0 12.5 5.5 12.5 13.5S27 34 20 34 7.5 29 7.5 21.5 12.5 8 20 8Z"/><path d="M13 24c2.5 3 11.5 3 14 0"/><circle cx="14.8" cy="19" r="1.3" fill="currentColor" stroke="none"/><circle cx="25.2" cy="19" r="1.3" fill="currentColor" stroke="none"/></svg>
      </span>
    </button>
    <button type="button" class="ff-critter" aria-label="森のなかまをタップして今日の運勢を見る">
      <span class="biscuit block w-full h-full">
        <svg class="critter" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="12" r="6"/><circle cx="29" cy="12" r="6"/><path d="M20 8c7.5 0 12.5 5.5 12.5 13.5S27 34 20 34 7.5 29 7.5 21.5 12.5 8 20 8Z"/><path d="M14 19.5c.6-1 2-1 2.6 0M23.4 19.5c.6-1 2-1 2.6 0"/><path d="M16.5 25c1.4 1.4 5.6 1.4 7 0"/></svg>
      </span>
    </button>
    <button type="button" class="ff-critter" aria-label="森のなかまをタップして今日の運勢を見る">
      <span class="biscuit block w-full h-full">
        <svg class="critter" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="12" r="6"/><circle cx="29" cy="12" r="6"/><path d="M20 8c7.5 0 12.5 5.5 12.5 13.5S27 34 20 34 7.5 29 7.5 21.5 12.5 8 20 8Z"/><ellipse cx="20" cy="24" rx="3" ry="2.2" fill="currentColor" stroke="none"/><circle cx="14.8" cy="19" r="1.3" fill="currentColor" stroke="none"/><circle cx="25.2" cy="19" r="1.3" fill="currentColor" stroke="none"/></svg>
      </span>
    </button>
    <button type="button" class="ff-critter hidden sm:block" aria-label="森のなかまをタップして今日の運勢を見る">
      <span class="biscuit block w-full h-full">
        <svg class="critter" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="12" r="6"/><circle cx="29" cy="12" r="6"/><path d="M20 8c7.5 0 12.5 5.5 12.5 13.5S27 34 20 34 7.5 29 7.5 21.5 12.5 8 20 8Z"/><path d="M13 24c2.5 3 11.5 3 14 0"/><circle cx="14.8" cy="19" r="1.3" fill="currentColor" stroke="none"/><circle cx="25.2" cy="19" r="1.3" fill="currentColor" stroke="none"/></svg>
      </span>
    </button>
  </div>

  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center pb-8 border-b border-white/15">
      <p class="font-heading text-sm text-white/75">
        森のなかまをタップして、<span class="text-sub font-bold">きょうの運勢</span>をどうぞ<span class="text-white/50">（何度でも引けます）</span>
      </p>
      <div id="omikuji" class="omikuji" hidden>
        <button type="button" id="omikuji-close" class="omikuji-close" aria-label="とじる">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" aria-hidden="true"><path d="M6 6l12 12M18 6L6 18" /></svg>
        </button>
        <p class="omikuji-rank" id="omikuji-rank"></p>
        <p class="omikuji-text" id="omikuji-text"></p>
        <p class="omikuji-again">とじて、もう一度なかまをタップ</p>
      </div>
    </div>
    <div class="flex justify-center items-center py-8 border-b border-white/15">
      <p class="font-heading text-2xl sm:text-3xl font-black tracking-wide text-center">Thank you for reading until the end<span class="text-sub">.</span></p>
    </div>
    <p class="text-center text-sm text-white/60 pt-6">&copy; 2026 Kazuki Toyama. All Rights Reserved.</p>
  </div>

  <button id="back-to-top" aria-label="ページ上部へ戻る"
    class="group sticker-sm fixed bottom-8 right-8 w-12 h-12 rounded-full bg-accent hover:bg-accent/90 text-white flex items-center justify-center opacity-0 pointer-events-none transition-all duration-300 z-40">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-spin" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
  </button>
</footer>

<!-- ==================== Work Detail Modal ==================== -->
<div id="work-modal" class="hidden fixed inset-0 z-[70] items-center justify-center p-4 sm:p-6">
  <div id="work-modal-backdrop" class="absolute inset-0 bg-ink/60 backdrop-blur-sm"></div>

  <div class="relative bg-white rounded-4xl shadow-soft w-full max-w-6xl max-h-[95vh] overflow-y-auto overflow-x-hidden p-6 sm:p-10 pt-16 sm:pt-20">
    <button type="button" id="work-modal-close" aria-label="閉じる"
      class="btn-pop absolute top-5 right-5 sm:top-6 sm:right-6 w-10 h-10 rounded-full bg-primary hover:bg-primary-dark text-white flex items-center justify-center z-20">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <div class="grid md:grid-cols-2 gap-10">
      <div class="min-w-0">
        <h3 id="work-modal-title" class="font-heading text-xl sm:text-3xl font-black text-center md:text-left pb-4 mb-6 border-b border-primary-light"></h3>
        <p id="work-modal-description" class="text-sm sm:text-base leading-loose text-ink/90 whitespace-pre-line"></p>

        <h4 class="font-heading text-lg font-bold text-center md:text-left mt-8 pb-3 mb-4 border-b border-primary-light">使用言語など</h4>
        <div id="work-modal-tech" class="flex flex-wrap gap-2"></div>
      </div>

      <div class="min-w-0">
        <div class="relative mb-4">
          <button type="button" id="work-modal-thumbs-prev" aria-label="前のサムネイルへ"
            class="hidden absolute -left-3 top-1/2 -translate-y-1/2 z-10 w-8 h-8 rounded-full bg-white sticker-sm items-center justify-center text-primary-dark hover:bg-primary-light">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <div id="work-modal-thumbs" class="flex gap-3 overflow-x-auto scroll-smooth"></div>
          <button type="button" id="work-modal-thumbs-next" aria-label="次のサムネイルへ"
            class="hidden absolute -right-3 top-1/2 -translate-y-1/2 z-10 w-8 h-8 rounded-full bg-white sticker-sm items-center justify-center text-primary-dark hover:bg-primary-light">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
        <div class="rounded-3xl overflow-hidden sticker bg-paper flex items-center justify-center">
          <img id="work-modal-main-image" src="" alt="" class="w-full h-auto max-h-[72vh] object-contain" />
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
