@extends('layout')

@section('content')
    <h2>FANGPLAY's Information</h2>
    <h5>FANGPLAY Sirirak Sophakarn</h5>
    <h5>5 August 1995</h5>
    <h5>High School : Traim Udon Suksa Of The South(Sci-Math Program)</h5>
    <h5>University : Thaksin University Phatthalung Campus(B.Sc.Computer Science)</h5>
    <img src="/img/profile-2023.jpg" width="100%" height="100%">
    <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 ml-auto col-xl-12 mr-auto">
              {{-- <p class="category">Introduction FANGPLAY</p> --}}
              <!-- Tabs with Background on Card -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
                  data-background-color="red">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#english" role="tab">English</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#chinese-sim" role="tab">Chinese Simplified</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#chinese-trad" role="tab">Chinese Traditional</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#japanese" role="tab">Japanese</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#korean" role="tab">Korean</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#indo" role="tab">Indonesian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#french" role="tab">French</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#german" role="tab">German</a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="english" role="tabpanel">
                      <h4>Introduce yourself</h4>
                      <p>"Hello ,everyone. My name is FANGPLAY. I'm from Thailand. Nice to meet you. I'm enjoy in making videos on YouTube Channel,Facebook fanpage and Twitch Channel name 'NeoXFANGPLAY' , playing games , watching television programs ,and evolve computer every skills. I want to be happy and enjoy to do everything".
                        </p>
                        <h4>Are you have girlfriends?</h4>
                        <p>"No, I don't have girlfriends".</p>
                        <h4>Are you have been saded?</h4>
                        <p>"No, I always happy on my life on nowadays".</p>
                        <h4>If ,you getting have first date , What you to doing now?</h4>
                        <p>"First date? I don't know about Girl's feelings. But, I will make best ways for my first date to her get to feeling good form myself".</p>
                        <h4>Someone talk to you "i love you so much from i meet you on first time". What are you feeling?</h4>
                        <p>I'm feeling anxious and shock. I say "I don't have girlfriend's feeling  ,I don't know about make good girlfriend".</p>
                        <h4>What your girlfriend spec?</h4>
                        <p>Ummmmmmm......... I not sure 100%. but , My girlfriend dream is cute face , good things , understand my feelings , respect both things , and responsive.</p>
                        <h4>What's content in your YouTube channel?</h4>
                        <p>Technology , Gaming , Say stories everyone never know that.</p>
                        <h4>When you know about your future?</h4>
                        <p>In high school year 2 or about in September 2013.</p>
                        <h4>Why are you study on Computer Science?</h4>
                        <p>I play game and reading computer book. And, I fix and repair computer. Especially , I want create game and make skill on computer on the best for myself.</p>
                        <h4>If you have ultimate language skill , Who are you to speak?</h4>
                        <p>First , foreigner. Second , My friends from other countries. Third , Whom for want to speak.</p>
                        <h4>Are you say something ?</h4>
                        <p>Thank you for viewing my website. I'm created in coding on editor to making best my style website. Finally please follow on my social network in contact section. See you next time.</p>
                    </div>
                    <div class="tab-pane" id="chinese-sim" role="tabpanel">
                      <h4>自我介绍</h4>
                      <p>“大家好。我叫方玩。我来自泰国。见到你很高兴。我喜欢在YouTube频道，Facebook粉丝页面和Twitch频道名称“NeoXFANGPLAY”上制作视频，玩游戏，看电视节目，并发展计算机的各种技能。我想快乐，享受做任何事情”。</p>
                        <h4>你有女朋友吗？</h4>
                        <p>不，我没有女朋友。</p>
                        <h4>你难过吗？</h4>
                        <p>不，我现在的生活总是很开心。</p>
                        <h4>如果，你有第一次约会，你现在该怎么办？</h4>
                        <p>第一次约会？我不知道女孩的感受。但是，我会想出最好的方式，让我和她第一次约会，让自己感觉良好。</p>
                        <h4>有人对你说“从我第一次见到你开始，我就非常爱你”。你有什么感觉？</h4>
                        <p>我感到焦虑和震惊。我说“我没有女朋友的感觉，我不知道交好女朋友”。</p>
                        <h4>你女朋友的规格是什么？</h4>
                        <p>嗯。我不确定 100%。但是，我女朋友的梦想是可爱的脸，好东西，理解我的感受，尊重两件事，并且反应迅速。</p>
                        <h4>您的 YouTube 频道中有哪些内容？</h4>
                        <p>科技 ， 游戏 ， 说故事 每个人都不知道。</p>
                        <h4>当你知道你的未来时？</h4>
                        <p>2013年9月在高中2年级左右。</p>
                        <h4>你为什么要学习计算机科学？</h4>
                        <p>我玩游戏和看电脑书。而且，我修理和修理电脑。特别是，我想在计算机上创建游戏并使技能最适合自己。</p>
                        <h4>如果你有终极语言能力，你说谁呢？</h4>
                        <p>第一，外国人。第二，我来自其他国家的朋友。第三，谁想说话。</p>
                        <h4>你说什么吗？</h4>
                        <p>感谢您查看我的网站。我在编辑器上编码，以制作最好的风格网站。最后，请在我的社交网络上关注联系部分。下次见。</p>
                    </div>
                    <div class="tab-pane" id="chinese-trad" role="tabpanel">
                        <h4>自我介紹</h4>
                        <p>“大家好。我叫方玩。我來自泰國。見到你很高興。我喜歡在YouTube頻道，Facebook粉絲頁面和Twitch頻道名稱“NeoXFANGPLAY”上製作視頻，玩遊戲，看電視節目，並發展計算機的各種技能。我想快樂，享受做任何事情”。</p>
                          <h4>你有女朋友嗎？</h4>
                          <p>不，我現在的生活總是很幸福。</p>
                          <h4>你傷心嗎？</h4>
                          <p>不，我並不孤單。</p>
                          <h4>如果，你有第一次約會，你現在做什麼？</h4>
                          <p>第一次約會？我不知道女孩的感受。但是，我會做最好的方式，我的第一次約會，她得到感覺良好的形式自己。</p>
                          <h4>有人跟你說"我第一次見到你就很愛你"你感覺如何？</h4>
                          <p>我感到焦慮和震驚。我說"我沒有女朋友的感覺，我不知道要交好女朋友"。</p>
                          <h4>你女朋友有什麼規格？</h4>
                          <p>嗯。。。我不確定100%但是，我的女朋友的夢想是可愛的臉，好東西，理解我的感受，尊重兩件事情，並回應。</p>
                          <h4>您的YouTube頻道的內容是什麼？</h4>
                          <p>技術，遊戲，說故事，每個人都不知道這一點。</p>
                          <h4>當你知道你的未來？</h4>
                          <p>在高中二年級或2013年9月左右。</p>
                          <h4>你為什麼學習計算機科學？</h4>
                          <p>我玩遊戲和讀電腦書。而且，我修復和修復計算機。特別是，我想創造遊戲，使計算機上的技能對自己最好的。</p>
                          <h4>如果你有終極的語言技能，你是誰？</h4>
                          <p>首先，外國人。第二，我來自其他國家的朋友。第三，誰想說話。</p>
                          <h4>你在說什麼嗎？</h4>
                          <p>感謝您流覽我的網站。我在編輯器上的編碼創建，以充分利用我的風格網站。最後，請按照我的社交網路在聯繫部分。下次見。</p>
                      </div>
                    <div class="tab-pane" id="japanese" role="tabpanel">
                      <h4>自己紹介</h4>
                      <p>「みなさん、こんにちは。私の名前はファングプレイです。私はタイ出身です。はじめまして。私はYouTubeチャンネル、Facebookのファンページ、Twitchチャンネルの名前「NeoXFANGPLAY」でビデオを作成したり、ゲームをプレイしたり、テレビ番組を見たり、コンピューターのあらゆるスキルを進化させたりすることを楽しんでいます。私は幸せになりたいし、すべてを楽しんでいたい」。
                        </p>
                        <h4>あなたはガールフレンドを持っていますか?</h4>
                        <p>「いいえ、私にはガールフレンドがいません」</p>
                        <h4>あなたは悲しんでいますか?</h4>
                        <p>「いいえ、私はいつも今日の私の人生に幸せです」</p>
                        <h4>もし、あなたが最初のデートを持っているなら、あなたは今何をするつもりですか?</h4>
                        <p>「最初のデート?私は女の子の気持ちについて知りません。でも、初デートをする彼女が自分の気持ちを良くする最善の方法を作ります」</p>
                        <h4>誰かがあなたに「初めてあなたに会うことからあなたをとても愛しています」と話します。あなたは何を感じていますか?</h4>
                        <p>不安とショックを感じています。私は「ガールフレンドの気持ちがない、良いガールフレンドを作ることについて知らない」と言います。</p>
                        <h4>あなたのガールフレンドのスペックは何ですか?</h4>
                        <p>Um。。。。。。。。。私は100%分からない。しかし、私のガールフレンドの夢はかわいい顔、良いこと、私の気持ちを理解し、両方のことを尊重し、応答します。</p>
                        <h4>YouTube チャンネルのコンテンツは何ですか?</h4>
                        <p>技術 、 ゲーム 、 誰もがそれを知らない話を言う。</p>
                        <h4>あなたの将来について知っているとき?</h4>
                        <p>2013年9月頃の高校2年生。</p>
                        <h4>コンピュータサイエンスを学ぶのはなぜですか?</h4>
                        <p>私はゲームをしたり、コンピュータの本を読んだりします。そして、私はコンピュータを修理します。特に、自分のために最善のコンピュータ上でゲームを作成し、スキルを作りたいです。</p>
                        <h4>あなたが究極の語学力を持っているなら、あなたは誰を話すのですか?</h4>
                        <p>まず、外国人。第二に、他の国からの私の友人。第三に、誰が話したいか</p>
                        <h4>何か言ってる?</h4>
                        <p>私のウェブサイトを見てくれてありがとう。私は最高の私のスタイルのウェブサイトを作るためにエディタでコーディングで作成されています。最後に、連絡先セクションで私のソーシャルネットワークに従ってください。また今度。</p>
                    </div>
                    <div class="tab-pane" id="korean" role="tabpanel">
                      <h4>자신을 소개하십시오.</h4>
                      <p>"안녕하세요, 여러분. 제 이름은 팡플레이입니다. 저는 태국에서 왔습니다. 만나서 반가워요. 나는 유튜브 채널, 페이스 북 팬 페이지 및 트 위치 채널 이름 'NeoXFANGPLAY'에서 비디오를 만들고, 게임을하고, TV 프로그램을 시청하고, 컴퓨터의 모든 기술을 발전시키는 것을 즐깁니다. 나는 행복하고 모든 것을 즐기고 싶다".</p>
                        <h4>여자친구가 있습니까?</h4>
                        <p>아니, 여자친구가 없어요</p>
                        <h4>당신은 슬퍼했습니까?</h4>
                        <p>아니, 나는 요즘 내 인생에 항상 행복.</p>
                        <h4>만약 당신이 첫 데이트를 받고 있다면, 당신은 지금 무엇을해야합니까?</h4>
                        <p>첫 데이트? 나는 소녀의 감정에 대해 모른다. 하지만, 첫 데이트가 좋은 컨디션을 느낄 수 있도록 최선을 다하겠다"고 말했다</p>
                        <h4>누군가가 당신에게 이야기 "나는 처음으로 당신을 만날 때부터 당신을 너무 사랑해요". 당신은 어떤 느낌입니까?</h4>
                        <p>나는 불안과 충격을 느끼고 있다. 나는 "나는 여자 친구의 느낌이 없다, 나는 좋은 여자 친구를 만들기에 대해 모른다"고 말한다.</p>
                        <h4>당신의 여자 친구 사양?</h4>
                        <p>Um......... 나는 100 %를 확실하지 않다. 하지만, 내 여자 친구의 꿈은 귀여운 얼굴, 좋은 것들, 내 감정을 이해, 두 가지를 존중, 반응.</p>
                        <h4>YouTube 채널의 콘텐츠는 무엇입니까?</h4>
                        <p>기술, 게임, 모든 사람이 그것을 알지 못했던 이야기를 들려주세요.</p>
                        <h4>당신은 당신의 미래에 대해 알고있을 때?</h4>
                        <p>고등학교 2학년 정도인 2013년 9월.</p>
                        <h4>컴퓨터 과학을 공부하는 이유는 무엇입니까?</h4>
                        <p>나는 게임과 컴퓨터 책을 읽고. 그리고 컴퓨터를 수정하고 수리합니다. 특히, 나는 게임을 만들고 자신을 위해 최선을 컴퓨터에 기술을 만들고 싶다.</p>
                        <h4>당신은 궁극적 인 언어 기술이있는 경우, 당신은 누구를 말할 수 있습니까?</h4>
                        <p>첫째, 외국인. 둘째, 다른 나라에서 온 제 친구들. 셋째, 누구를 말하고 싶은가.</p>
                        <h4>당신은 뭔가를 말하고 있습니까?</h4>
                        <p>내 웹 사이트를 보고 주셔서 감사합니다. 나는 최고의 내 스타일 웹 사이트를 만들기 위해 편집기코딩에서 만들어졌습니다. 마지막으로 연락처 섹션에서 내 소셜 네트워크를 따르십시오. 다음에 뵙겠습니다.</p>
                    </div>
                    <div class="tab-pane" id="indo" role="tabpanel">
                        <h4>Perkenalkan diri Anda</h4>
                        <p>"Halo semuanya. Nama saya FANGPLAY. Saya dari Thailand. Senang bertemu dengan Anda. Saya menikmati membuat video di Saluran YouTube, fanpage Facebook dan nama Saluran Twitch 'NeoXFANGPLAY', bermain game, menonton program televisi, dan mengembangkan komputer setiap keterampilan. Saya ingin bahagia dan menikmati melakukan segalanya".</p>
                          <h4>Apakah kamu punya pacar?</h4>
                          <p>"Tidak, saya tidak punya pacar".</p>
                          <h4>Apakah Anda sedih?</h4>
                          <p>"Tidak, saya selalu bahagia dalam hidup saya saat ini".</p>
                          <h4>Jika, Anda mendapatkan kencan pertama, Apa yang harus Anda lakukan sekarang?</h4>
                          <p>"Kencan pertama? Aku tidak tahu tentang perasaan Girl. Tapi, aku akan membuat cara terbaik untuk kencan pertamaku agar dia merasa baik dari diriku sendiri".</p>
                          <h4>Seseorang berbicara kepada Anda "Aku sangat mencintaimu sejak pertama kali bertemu denganmu". Apa yang Anda rasakan?</h4>
                          <p>Saya merasa cemas dan kaget. Saya mengatakan "Saya tidak punya perasaan pacar, saya tidak tahu tentang membuat pacar yang baik".</p>
                          <h4>Apa spesifikasi pacar Anda?</h4>
                          <p>Um......... Saya tidak yakin 100%. tapi, impian pacar saya adalah wajah imut, hal-hal baik, memahami perasaan saya, menghormati kedua hal, dan responsif.</p>
                          <h4>Apa konten di saluran YouTube Anda?</h4>
                          <p>Teknologi , Game , Katakan cerita semua orang tidak pernah tahu itu.</p>
                          <h4>Kapan Anda tahu tentang masa depan Anda?</h4>
                          <p>Di SMA tahun 2 atau sekitar bulan September 2013.</p>
                          <h4>Mengapa Anda belajar di Ilmu Komputer?</h4>
                          <p>Saya bermain game dan membaca buku komputer. Dan, saya memperbaiki dan memperbaiki komputer. Terutama, saya ingin membuat game dan membuat keterampilan di komputer yang terbaik untuk diri saya sendiri.</p>
                          <h4>Jika Anda memiliki kemampuan bahasa tertinggi, Siapa Anda untuk berbicara?</h4>
                          <p>Pertama, orang asing. Kedua, Teman-teman saya dari negara lain. Ketiga, Siapa untuk ingin berbicara.</p>
                          <h4>Apakah Anda mengatakan sesuatu?</h4>
                          <p>Terima kasih telah melihat situs web saya. Saya dibuat dalam pengkodean di editor untuk membuat situs web gaya saya sebaik mungkin. Akhirnya silakan ikuti di jejaring sosial saya di bagian kontak. Sampai jumpa di lain waktu.</p>
                      </div>
                      <div class="tab-pane" id="french" role="tabpanel">
                        <h4>Présenter</h4>
                        <p>« Bonjour à tous. Je m’appelle FANGPLAY. Je viens de Thaïlande. Ravi de vous rencontrer. J’aime faire des vidéos sur la chaîne YouTube, la page de fans Facebook et le nom de la chaîne Twitch 'NeoXFANGPLAY', jouer à des jeux, regarder des programmes de télévision et faire évoluer l’ordinateur toutes les compétences. Je veux être heureux et prendre plaisir à tout faire ».</p>
                          <h4>Avez-vous des copines?</h4>
                          <p>« Non, je n’ai pas de copines ».</p>
                          <h4>Avez-vous été attristé?</h4>
                          <p>« Non, je suis toujours heureux de ma vie de nos jours ».</p>
                          <h4>Si vous obtenez un premier rendez-vous, que faites-vous maintenant?</h4>
                          <p>« Premier rendez-vous? Je ne connais pas les sentiments de Girl. Mais, je ferai de mon mieux pour que mon premier rendez-vous avec elle se sente bien moi-même ».</p>
                          <h4>Quelqu’un vous dit « je t’aime tellement depuis que je te rencontre la première fois ». Que ressentez-vous?</h4>
                          <p>Je me sens anxieux et choqué. Je dis « Je n’ai pas le sentiment de petite amie, je ne sais pas comment faire une bonne petite amie ».</p>
                          <h4>Qu’est-ce que votre petite amie spécifie?</h4>
                          <p>um......... Je ne suis pas sûr à 100%. mais, Mon rêve de petite amie est mignon visage, bonnes choses, comprendre mes sentiments, respecter les deux choses, et réactif.</p>
                          <h4>Quel est le contenu de votre chaîne YouTube ?</h4>
                          <p>Technologie , Jeux , Dites des histoires que tout le monde ne sait jamais.</p>
                          <h4>Quand connaissez-vous votre avenir?</h4>
                          <p>En 2e année du secondaire ou vers septembre 2013.</p>
                          <h4>Pourquoi étudiez-vous l’informatique?</h4>
                          <p>Je joue à des jeux et je lis des livres informatiques. Et, je répare et répare l’ordinateur. Surtout, je veux créer un jeu et faire des compétences sur ordinateur sur le meilleur pour moi-même.</p>
                          <h4>Si vous avez des compétences linguistiques ultimes, qui êtes-vous pour parler?</h4>
                          <p>D’abord, étranger. Deuxièmement, mes amis d’autres pays. Troisièmement, Qui pour vouloir parler.</p>
                          <h4>Vous dites quelque chose ?</h4>
                          <p>Merci d’avoir consulté mon site Web. Je suis créé en codage sur l’éditeur pour faire au mieux mon style de site Web. Enfin s’il vous plaît suivre sur mon réseau social dans la section contact. À la prochaine fois.</p>
                      </div>
                      <div class="tab-pane" id="german" role="tabpanel">
                        <h4>Stellen Sie sich vor</h4>
                        <p>"Hallo allerseits. Mein Name ist FANGPLAY. Ich komme aus Thailand. Schön, dich kennenzulernen. Ich genieße es, Videos auf dem YouTube-Kanal, der Facebook-Fanseite und dem Twitch-Kanalnamen "NeoXFANGPLAY" zu machen, Spiele zu spielen, Fernsehprogramme anzusehen und Computerfähigkeiten zu entwickeln. Ich möchte glücklich sein und Spaß daran haben, alles zu tun."</p>
                          <h4>Hast du Freundinnen?</h4>
                          <p>"Nein, ich habe keine Freundinnen."</p>
                          <h4>Bist du traurig?</h4>
                          <p>"Nein, ich bin immer glücklich in meinem Leben heutzutage."</p>
                          <h4>Wenn du ein erstes Date hast, was machst du jetzt?</h4>
                          <p>"Erstes Date? Ich weiß nichts über die Gefühle von Girl. Aber ich werde die besten Wege für mein erstes Date finden, damit sie sich selbst gut fühlt."</p>
                          <h4>Jemand spricht mit dir "Ich liebe dich so sehr, dass ich dich zum ersten Mal treffe". Was fühlst du?</h4>
                          <p>Ich fühle mich ängstlich und schockiert. Ich sage: "Ich habe kein Freundinnengefühl, ich weiß nicht, wie ich eine gute Freundin machen kann".</p>
                          <h4>Was ist deine Freundin?</h4>
                          <p>ähm......... Ich bin mir nicht 100% sicher. Aber mein Freundinnentraum ist ein süßes Gesicht, gute Dinge, verstehe meine Gefühle, respektiere beide Dinge und bin ansprechbar.</p>
                          <h4>Was sind Inhalte in Ihrem YouTube-Kanal?</h4>
                          <p>Technologie, Gaming, Sprich Geschichten, das weiß jeder nie.</p>
                          <h4>Wann wissen Sie über Ihre Zukunft Bescheid?</h4>
                          <p>In der 2. Klasse der High School oder etwa im September 2013.</p>
                          <h4>Warum studierst du Informatik?</h4>
                          <p>Ich spiele und lese Computerbücher. Und ich repariere und repariere Computer. Vor allem möchte ich ein Spiel erstellen und Fähigkeiten auf dem Computer am besten für mich selbst machen.</p>
                          <h4>Wenn du ultimative Sprachkenntnisse hast, wer bist du, dass du sprichst?</h4>
                          <p>Erstens, Ausländer. Zweitens, Meine Freunde aus anderen Ländern. Drittens, für wen man sprechen will.</p>
                          <h4>Sagst du etwas?</h4>
                          <p>Vielen Dank, dass Sie sich meine Website angesehen haben. Ich bin in der Codierung im Editor erstellt, um meine Stil-Website am besten zu machen. Zum Schluss folgen Sie bitte meinem sozialen Netzwerk im Kontaktbereich. Bis zum nächsten Mal.</p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
