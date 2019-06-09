<?php get_header(); ?>
  <div class="main_wrap">
    <div class="main">
      <section id="news">
        <div class="section_content">
          <h2 class="section_title">
            news
          </h2>
          <div class="news_list">
            <?php query_posts("cat=1&showposts=5"); ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <div class="list_item">
                <div class="list_date">
                  <?php echo get_the_date( 'Y.m.d' ); ?>
                </div>
                <div class="list_title">
                  <h3 class="title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <!--<div class="description">
                    <?php the_excerpt(); ?>
                  </div>-->
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
          <div class="more_button">
            <a href="<?php echo home_url(); ?>/news">READ MORE</a>
          </div>
        </div>

        <div class="section_content" id="live">
          <h2 class="section_title">
            live
          </h2>
          <div class="news_list">
            <?php query_posts("cat=6&showposts=5"); ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <div class="list_item">
                <div class="list_date">
                  <?php echo get_the_date( 'Y.m.d' ); ?>
                </div>
                <div class="list_title">
                  <h3 class="title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <!-- <div class="description">
                    <?php the_excerpt(); ?>
                  </div> -->
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </section>
      <section id="profile">
        <h2 class="section_title">
          profile
        </h2>
        <div class="section_content">
          <div class="profile_inner">
            <div class="profile_image">
              <img alt="プロフィール画像" src="<?php echo get_template_directory_uri(); ?>/img/profile_image.jpg" />
            </div>
            <div class="profile_info">
              <div class="profile_name">
                SUMMY
              </div>
              <div class="profile_text">
                <p>
                シンガーソングライター。大阪生まれの鹿児島育ち、神戸での活動期間を経て、現在東京を拠点に活動中。<br />
                </p>
                <p>
                2013年 1stシングル「LETTER」リリース。<br />
                2016年 2ndシングル「TOMORROW」リリース、同曲MVを公開。<br />バンドワンマンliveを神戸VARIT.にて開催。<br />
                2018年4月 3rdシングル「二十六の旅路」リリース。<br />上京前ワンマンliveを神戸ニューラフレアで開催。<br />
                2019年7月 4thシングル「郷に従え」ライブ会場にて枚数限定リリース。<br />
                </p>
                <p>
                これまでKiss FM KOBEのサウンドクルーや、神戸女学院大学にて特別講師を務めるなど、独自の表現で活動の場を広げている。
                真骨頂は、情景の浮かぶ歌詞、語りかけるような深みのある歌声。<br />
                どこか懐かしさを感じさせるSUMMYの音楽をぜひ生で感じてください。
                </p>
              </div>

            </div>
          </div>
        </div>
      </section>
      <section id="music">
        <h2 class="section_title">
          music
        </h2>
        <div class="section_content">
          <div class="music_list">

            <ul>
              <li>
                <div class="disc_image">
                  <img alt="二十六の旅路" src="<?php echo get_template_directory_uri(); ?>/img/disc_image1.jpg" />
                </div>
                <div class="disc_title">
                  二十六の旅路
                </div>
                <div class="disc_label">
                  2018
                </div>
                <div class="disc_link">
                  <a href="https://itunes.apple.com/jp/album/%E4%BA%8C%E5%8D%81%E5%85%AD%E3%81%AE%E6%97%85%E8%B7%AF-single/1399974267" target="_blank"><i class="fab fa-apple"></i>Apple Music</a><a href="https://play.google.com/music/preview/Bg7m27j7pnr7ccntb7yfu4fqzii" target="_blank"><i class="fab fa-google-play"></i>Google Play Music</a><a href="https://open.spotify.com/album/7KwvbUH27cdJBBrbUZ7l3v" target="_blank"><i class="fab fa-spotify"></i>Spotify</a><a href="https://music.line.me/launch?target=track&amp;item=mb0000000001687954&amp;subitem=mt000000000da9cdb4&amp;cc=JP" target="_blank"><i class="fas fa-music"></i>LINE MUSIC</a>
                </div>
              </li>
              <li>
                <div class="disc_image">
                  <img alt="TOMORROW" src="<?php echo get_template_directory_uri(); ?>/img/disc_image2.jpg" />
                </div>
                <div class="disc_title">
                  TOMORROW
                </div>
                <div class="disc_label">
                  2016
                </div>
                <div class="disc_link">
                  <a href="https://itunes.apple.com/jp/album/tomorrow-single/1399848664" target="_blank"><i class="fab fa-apple"></i>Apple Music</a><a href="https://play.google.com/music/preview/Bx6om5ct35gadjtcyi7jf2zdddy" target="_blank"><i class="fab fa-google-play"></i>Google Play Music</a><a href="https://open.spotify.com/album/6GcMTvxe5tfhKEQ3zvvskG" target="_blank"><i class="fab fa-spotify"></i>Spotify</a><a href="https://music.line.me/launch?target=track&amp;item=mb000000000168694a&amp;subitem=mt000000000da91390&amp;cc=JP" target="_blank"><i class="fas fa-music"></i>LINE MUSIC</a>
                </div>
              </li>
              <li>
                <div class="disc_image">
                  <img alt="HOME" src="<?php echo get_template_directory_uri(); ?>/img/disc_image3.jpg" />
                </div>
                <div class="disc_title">
                  HOME
                </div>
                <div class="disc_label">
                  2013
                </div>
                <div class="disc_link">
                  <a href="https://itunes.apple.com/jp/album/home-single/1399844769" target="_blank"><i class="fab fa-apple"></i>Apple Music</a><a href="https://play.google.com/music/preview/Bvdk4n63c3exqn7j2u3kpyncum4" target="_blank"><i class="fab fa-google-play"></i>Google Play Music</a><a href="https://open.spotify.com/album/61cJ7tkaYra5BDnPrsoiSC" target="_blank"><i class="fab fa-spotify"></i>Spotify</a><a href="https://music.line.me/launch?target=track&amp;item=mb0000000001686946&amp;subitem=mt000000000da9138c&amp;cc=JP" target="_blank"><i class="fas fa-music"></i>LINE MUSIC</a>
                </div>
              </li>
              <li>
                <div class="disc_image">
                  <img alt="LETTER" src="<?php echo get_template_directory_uri(); ?>/img/disc_image3.jpg" />
                </div>
                <div class="disc_title">
                  LETTER
                </div>
                <div class="disc_label">
                  2013
                </div>
                <div class="disc_link">
                  <a href="https://itunes.apple.com/jp/album/letter/1399848208?i=1399848209" target="_blank"><i class="fab fa-apple"></i>Apple Music</a><a href="https://play.google.com/music/preview/Bnd3ozvwopvbibuffx55rk2pkma" target="_blank"><i class="fab fa-google-play"></i>Google Play Music</a><a href="https://open.spotify.com/album/7eFbR4B4dnHXVkp9Q5w11A" target="_blank"><i class="fab fa-spotify"></i>Spotify</a><a href="https://music.line.me/launch?target=track&amp;item=mb0000000001686947&amp;subitem=mt000000000da9138d&amp;cc=JP" target="_blank"><i class="fas fa-music"></i>LINE MUSIC</a>
                </div>
              </li>
            </ul>
            <!-- <div class="disk_link">
              <a href="###" target="_blank">
                その他の音楽配信サービス
              </a>
            </div> -->
          </div>
        </div>
      </section>
      <section id="video">
        <h2 class="section_title">
          video
        </h2>
        <div class="section_content">
          <div class="video_list">
            <ul id="js-video_list">
              <li class="video_item" data-video_id="W25wVOxILhM">
                <div class="video_thumb" style="background: url(<?php echo get_template_directory_uri(); ?>/img/video_image1.jpg) center center no-repeat">
                  <h3 class="title">
                    TOMORROW
                  </h3>
                  <div class="play_button">
                    <i class="fas fa-play"></i>
                  </div>
                </div>
              </li>
              <li class="video_item" data-video_id="pZ6shuxZR3Y">
                <div class="video_thumb" style="background: url(<?php echo get_template_directory_uri(); ?>/img/video_image2.jpg) center center no-repeat">
                  <h3 class="title">
                    【振り付け動画】土に這う草
                  </h3>
                  <div class="play_button">
                    <i class="fas fa-play"></i>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="video_wrap">
            <div class="close"></div>
            <div class="video_inner">
              <iframe allow="autoplay; encrypted-media" frameborder="0" id="video_frame" src="">allowfullscreen</iframe>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php get_footer(); ?>